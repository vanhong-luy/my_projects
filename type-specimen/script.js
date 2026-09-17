// Why are you clicking it?
(function () {
  var editable = document.getElementById("editable");
  var sizes = [72, 36, 20, 13]; // Display the text below the input box in different sizes: 72, 36, ...
  var scaleRowsEl = document.getElementById("scaleRows");
  var rowMap = {};
  sizes.forEach(function (s) {
    var row = document.createElement("div");
    row.className = "scale-row";
    var label = document.createElement("div");
    label.className = "scale-label";
    label.textContent = s + "px";
    var sample = document.createElement("div");
    sample.className = "scale-sample";
    sample.style.fontSize = s + "px";
    row.appendChild(label);
    row.appendChild(sample);
    scaleRowsEl.appendChild(row);
    rowMap[s] = sample;
  });

  function syncText() {
    var txt = editable.textContent || "";
    for (var s in rowMap) {
      rowMap[s].textContent = txt;
    }
  }
  editable.addEventListener("input", syncText);

  var size = document.getElementById("size");
  var sizeOut = document.getElementById("sizeOut");
  var weight = document.getElementById("weight");
  var weightOut = document.getElementById("weightOut");
  var track = document.getElementById("track");
  var trackOut = document.getElementById("trackOut");
  var lead = document.getElementById("lead");
  var leadOut = document.getElementById("leadOut");

  function applySize() {
    editable.style.fontSize = size.value + "px";
    sizeOut.textContent = size.value + "px";
  }
  function applyWeight() {
    editable.style.fontWeight = weight.value;
    weightOut.textContent = weight.value;
  }
  function applyTrack() {
    var v = (track.value / 100).toFixed(2);
    editable.style.letterSpacing = v + "em";
    trackOut.textContent = v + "em";
  }
  function applyLead() {
    var v = (lead.value / 100).toFixed(2);
    editable.style.lineHeight = v;
    leadOut.textContent = v;
  }

  size.addEventListener("input", applySize);
  weight.addEventListener("input", applyWeight);
  track.addEventListener("input", applyTrack);
  lead.addEventListener("input", applyLead);
  applySize();
  applyWeight();
  applyTrack();
  applyLead();

  function wireSeg(id, cb) {
    var seg = document.getElementById(id);
    seg.addEventListener("click", function (e) {
      var btn = e.target.closest("button");
      if (!btn) return;
      seg.querySelectorAll("button").forEach(function (b) {
        b.classList.remove("active");
      });
      btn.classList.add("active");
      cb(btn.dataset.v);
    });
  }
  wireSeg("alignSeg", function (v) {
    editable.style.textAlign = v;
    for (var s in rowMap) {
      rowMap[s].style.textAlign = v;
    }
  });
  wireSeg("themeSeg", function (v) {
    document.body.classList.toggle("stage-dark", v === "dark");
  });

  var dropzone = document.getElementById("dropzone");
  var fontInput = document.getElementById("fontInput");
  var dzTitle = document.getElementById("dzTitle");
  var dzSub = document.getElementById("dzSub");
  var dzMeta = document.getElementById("dzMeta");
  var dzIcon = document.getElementById("dzIcon");
  var stampWrap = document.getElementById("stampWrap");
  var foot2 = document.getElementById("foot2");

  function fmtBytes(n) {
    if (n > 1024 * 1024) return (n / (1024 * 1024)).toFixed(2) + " MB";
    if (n > 1024) return (n / 1024).toFixed(1) + " KB";
    return n + " B";
  }
  function extOf(name) {
    var m = /\.([a-z0-9]+)$/i.exec(name);
    return m ? m[1].toUpperCase() : "FIEN";
  }
  function fmtTime() {
    var d = new Date();
    return d.toLocaleTimeString([], {
      hour: "2-digit",
      minute: "2-digit",
      // second: "2-digit",
    });
  }

  function loadFont(file) {
    var reader = new FileReader();
    reader.onload = function (e) {
      var buf = e.target.result;
      var face = new FontFace("CustomUserFont", buf);
      face
        .load()
        .then(function (loaded) {
          document.fonts.forEach(function (f) {
            if (f.family === "CustomUserFont") document.fonts.delete(f);
          });
          document.fonts.add(loaded);
          dzTitle.textContent = file.name;
          dzSub.textContent = extOf(file.name) + " loaded - click to replace";
          dzIcon.textContent = "✓";
          dzMeta.innerHTML =
            "<b>" + extOf(file.name) + "</b> / " + fmtBytes(file.size);
          stampWrap.innerHTML = '<span class="stamp">loaded</span>';
          foot2.textContent = file.name + " / " + fmtTime();
          if (!editable.textContent) {
            editable.focus();
          }
        })
        .catch(function (err) {
          dzTitle.textContent = "Could not read that font file";
          dzSub.textContent = "Try a .ttf, .otf, .woff, or .woff2";
          dzIcon.textContent = "!";
        });
    };
    reader.readAsArrayBuffer(file);
  }

  fontInput.addEventListener("change", function () {
    if (fontInput.files && fontInput.files[0]) loadFont(fontInput.files[0]);
  });
  dropzone.addEventListener("dragover", function (e) {
    e.preventDefault();
    dropzone.classList.add("drag");
  });
  dropzone.addEventListener("dragleave", function () {
    dropzone.classList.remove("drag");
  });
  dropzone.addEventListener("drop", function (e) {
    e.preventDefault();
    dropzone.classList.remove("drag");
    if (e.dataTransfer.files && e.dataTransfer.files[0])
      loadFont(e.dataTransfer.files[0]);
  });

  var downloadBtn = document.getElementById("downloadBtn");
  downloadBtn.addEventListener("click", function () {
    var text = editable.innerText || editable.textContent || "";
    if (!text.trim()) return;

    var fontSize = parseFloat(size.value);
    var fontWeight = weight.value;
    var letterSpacing = (parseFloat(track.value) / 100) * fontSize;
    var lineHeight = (parseFloat(lead.value) / 100) * fontSize;
    var align = document.querySelector("#alignSeg button.active").dataset.v;
    var dark = document.body.classList.contains("stage-dark");
    var bg = dark ? "#17140F" : "#EFEBE1";
    var ink = dark ? "#EDE9DD" : "#19160F";
    var pad = Math.max(40, fontSize * 0.6);

    var lines = text.split("\n");
    var measureCanvas = document.createElement("canvas");
    var mctx = measureCanvas.getContext("2d");
    mctx.font =
      fontWeight +
      " " +
      fontSize +
      "px CustomUserFont, ui-serif, Georgia, serif";

    function lineWidth(line) {
      var w = 0;
      for (var i = 0; i < line.length; i++) {
        w += mctx.measureText(line[i]).width + letterSpacing;
      }
      return line.length ? w - letterSpacing : 0;
    }

    var widths = lines.map(lineWidth);
    var maxWidth = Math.max.apply(null, widths.concat([1]));
    var canvasW = Math.ceil(maxWidth + pad * 2);
    var canvasH = Math.ceil(lines.length * lineHeight + pad * 2);

    var canvas = document.createElement("canvas");
    var scale = window.devicePixelRatio || 1;
    canvas.width = canvasW * scale;
    canvas.height = canvasH * scale;
    var ctx = canvas.getContext("2d");
    ctx.scale(scale, scale);
    if (!document.getElementById("transpCheck").checked) {
      ctx.fillStyle = bg;
      ctx.fillRect(0, 0, canvasW, canvasH);
    }
    ctx.font =
      fontWeight +
      " " +
      fontSize +
      "px CustomUserFont, ui-serif, Georgia, serif";
    ctx.fillStyle = ink;
    ctx.textBaseline = "alphabetic";

    lines.forEach(function (line, idx) {
      var w = widths[idx];
      var startX = pad;
      if (align === "center") startX = pad + (maxWidth - w) / 2;
      if (align === "right") startX = pad + (maxWidth - w);
      var y = pad + fontSize * 0.85 + idx * lineHeight;
      var x = startX;
      for (var i = 0; i < line.length; i++) {
        ctx.fillText(line[i], x, y);
        x += mctx.measureText(line[i]).width + letterSpacing;
      }
    });

    canvas.toBlob(function (blob) {
      var url = URL.createObjectURL(blob);
      var a = document.createElement("a");
      a.href = url;
      a.download = "type-specimen.png";
      document.body.appendChild(a);
      a.click();
      document.body.removeChild(a);
      setTimeout(function () {
        URL.revokeObjectURL(url);
      }, 1000);
    });
  });

  function tickClock() {
    document.getElementById("clock").textContent = fmtTime();
  }
  tickClock();
  setInterval(tickClock, 30000);

  syncText();
})();
