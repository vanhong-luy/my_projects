<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        section{
            padding: 60px;
        }
        .card-img-top {
    width: 100%;
    height: 15vw;
    object-fit: cover;
}
body {
          padding-top: 80px;
            font-family: 'Arial', sans-serif;
        }
        .navbar {
            background-color: #1dbf73;
        }
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; }
        .navbar img { width: 100px; vertical-align: middle; }
        .hero { background-color: #a4f9c8; padding: 20px; text-align: center; }
        .service-box {
            display: inline-block;
            width: 120px;
            height: 120px;
            margin: 10px;
            padding: 10px;
            background-color: white; /* Updated color to white */
            border: 1px solid #ddd;
            text-align: center;
            vertical-align: top;
            border-radius: 15px; /* Rounded corners */
            transition: box-shadow 0.3s ease, transform 0.3s ease; /* Smooth transition */
            box-shadow: 0 4px 6px rgba(0,0,0,0.1); /* Initial soft shadow */
        }
        .service-box:hover {
        transform: translateY(-5px); /* Floating effect */
        box-shadow: 0 12px 16px rgba(0,0,0,0.2); /* Larger shadow on hover */
        }
        .service-box img { width: 40px; height: 40px; }
        .services { padding: 20px; text-align: center; }
    a { color: inherit; text-decoration: none; }
        .hero-section {
            background-image: url('/assets/green.jpg');
            padding-top: 200px ;
            text-align: center;
        }
        .hero-title {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        .search-bar {
            max-width: 600px;
            margin: 0 auto;
        }
        .categories-section {
            padding: 50px 0;
        }
        .category-item {
            text-align: center;
            padding: 20px;
            transition: transform 0.2s;
        }
        .category-item:hover {
            transform: scale(1.05);
        }
        .footer {
            background-color: #222;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
    </style>
    </style>
</head>
<body>
        <!-- navbar -->
    <nav class="navbar fixed-top  navbar-expand-lg navbar-light bg-light border-bottom border-dark ">
        <div class="container-fluid ">
          <a class="navbar-brand" href="#"><img class="img-fluid" src="assets/Fiverr-Logo-PNG.png" alt="logo" width="33" height="27"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/index">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/product">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/listservice">List your services</a>
              </li>
              <a href="/join" class="d-flex">
                <button class="btn btn-outline-success">Join</button>
            </a>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" id = "find" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

      <div class="hero-section">
        <h1 class="hero-title">Find the perfect freelance services for your business</h1>
        <div class="search-bar input-group mb-3">
            <input type="text" class="form-control" placeholder="Try 'logo design'" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-success" type="button">Search</button>
            </div>
        </div>
    </div>
  <!-- Categories Section -->
  <div class="services">
    <div class="service-box"><a href="index extra/ai.html"><img src="assets/pnt.png" alt="Programming"><br>Programming and Tech</a></div>
    <div class="service-box"><a href="index extra/ai.html"><img src="assets/gnd.png" alt="Graphic Design"><br>Graphic and Design</a></div>
    <div class="service-box"><a href="index extra/ai.html"><img src="assets/DM.png" alt="Digital Marketing"><br>Digital Marketing</a></div>
    <div class="service-box"><a href="index extra/ai.html"><img src="assets/wnt.png" alt="Writing"><br>Writing and Translating</a></div>
    <div class="service-box"><a href="index extra/ai.html"><img src="assets/VnA.png" alt="Video"><br>Video and Animation</a></div>
    <div class="service-box"><a href="index extra/ai.html"><img src="assets/phto.png" alt="AI"><br>AI Service</a></div>
    <div class="service-box"><a href="index extra/ai.html"><img src="assets/MnA.png" alt="Music"><br>Music and Audio</a></div>
    <div class="service-box"><a href="index extra/ai.html"><img src="assets/busi.png" alt="Business"><br>Business</a></div>
    <div class="service-box"><a href="index extra/ai.html"><img src="assets/conf.png" alt="Consulting"><br>Consulting</a></div>
</div>

<section id="popular" class="bg-light mt-5">
  <div class="container-xl">
    <div class="text-md-start text-sm-center"><div class="display-6 fw-bold py-5">Popular Services</div></div>
    <div class="row row-cols-1 row-cols-md-5 justify-content-center gap-5">
      <div class="col px-1">
        <div class="card"style="width: 18rem; height: 20rem;">
          <img src="assets/webdev.jpg" class="card-img-top" alt="webdev">
          <div class="card-body">
            <h5 class="card-title text-center py-2">Web Development</h5>

          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 18rem;height: 20rem;">
          <img src="assets/graphic.jpg" class="card-img-top" alt="graphic">
          <div class="card-body">
            <h5 class="card-title text-center py-2">Graphic Design</h5>

          </div>
        </div>
      </div>
      <div class="col">
        <div class="card"style="width: 18rem;height: 20rem;">
          <img src="assets/voice-over.jpg" class="card-img-top" alt="voice">
          <div class="card-body">
            <h5 class="card-title text-center py-2" >Voice Over</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>

  <!-- Quality Section -->

    <section id="qualityservice">
      <div class=" text-lg-start text-md-start text-sm-center"><div class="display-3  py-5">Quality Service</div></div>
      <div class="container-xl">
        <div class="row cols-8 row-cols-md-4 row-cols-sm-2">
          <div class="col">
            <div class="card border-0">
              <i class="bi bi-lightning-charge h1 px-2"></i>
              <div class="card-body py-4">
                <h1 class="card-title">Over 700 categories</h1>
                <p class="lead card-subtitle py-5 text-muted"style="font-size: 24px;">Get results from skilled freelancers from all over the world, for every task, at any price point.</p>

              </div>

            </div>
          </div>
          <div class="col">
            <div class="card border-0">
              <i class="bi bi-lightning-charge h1 px-2"></i>
              <div class="card-body py-4">
                <h1 class="card-title">Clear, transparent pricing</h1>
                <p class="lead card-subtitle py-5 text-muted"style="font-size: 24px;">Pay per project or by the hour (Pro). Payments only get released when you approve.</p>

              </div>

            </div>
          </div>
          <div class="col">
            <div class="card border-0">
              <i class="bi bi-lightning-charge h1 px-2"></i>
              <div class="card-body py-4">
                <h1 class="card-title">Quality work done faster</h1>
                <p class="lead card-subtitle py-5 text-muted"style="font-size: 24px;">Filter to find the right freelancers quickly and get great work delivered in no time, every time.</p>

              </div>

            </div>
          </div>
          <div class="col">
            <div class="card border-0">
              <i class="bi bi-lightning-charge h1 px-2"></i>
              <div class="card-body py-4">
                <h1 class="card-title">24/7 award-winning support</h1>
                <p class="lead card-subtitle py-5 text-muted"style="font-size: 24px;">Chat with our team to get your questions answered or resolve any issues with your orders.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--gallery-->
    <section id="gallery">
      <div class=" text-lg-start text-md-start text-sm-center"><div class="display-3 py-5">Made on Fiverr</div></div>
      <container-lg>
<div class="row">
  <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Boat on Calm Water"
    />

    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain1.webp"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Wintry Mountain Landscape"
    />
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain2.webp"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Mountains in the Clouds"
    />

    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Boat on Calm Water"
    />
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(18).webp"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Waves at Sea"
    />

    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain3.webp"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Yosemite National Park"
    />
  </div>
</div>

      </container-lg>

    </section>

      <!-- Footer -->
      <div class="footer">
        <p>&copy; 2024 Fiverr International Ltd. All rights reserved.</p>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</body>
</html>

