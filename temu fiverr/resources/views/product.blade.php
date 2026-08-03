<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        section {
            padding: 30px;
        }

        body {
            font-family: 'Arial', sans-serif;
        }

        .navbar {
            background-color: #1dbf73;
        }

        .hero {
            background-color: #a4f9c8;
            padding: 20px;
            text-align: center;
        }

        .service-box {
            display: inline-block;
            width: 120px;
            height: 120px;
            margin: 10px;
            padding: 10px;
            background-color: white;
            border: 1px solid #ddd;
            text-align: center;
            vertical-align: top;
            border-radius: 15px;
            transition: box-shadow 0.3s ease, transform 0.3s ease;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .service-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 16px rgba(0,0,0,0.2);
        }

        .services {
            padding: 20px;
            text-align: center;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        .hero-section {
            background-image: url('/assets/green.jpg');
            padding: 50px 0;
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

        .card-img-top {
            border-radius: 50px;
            padding: 20px;
        }

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        .card {
            border-radius: 30px;
            box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
        }

        .card-body {
            padding: 25px;
            margin-top: -15px;
            margin-bottom: 10px;
        }

        h3 {
            color: #1dbf73;
        }
        .navbar img { width: 100px; vertical-align: middle; }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
              <input class="form-control me-2" type="search" id = "find" placeholder="Search" onkeyup="search()" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    <section id="services">
        <div class="display-3 text-center py-5">Our Services</div>
        <div class="container-lg">
            <div class="row row-cols-1 row-cols-md-3 g-4 py-5">
                <div class="col-md-4">
                    <div class="card">
                        <img src="assets/bird.jpg" class="card-img-top" alt="service1">
                        <div class="card-body">
                            <h5 class="card-title">Service1</h5>
                            <p class="card-text text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <div class="d-flex justify-content-around">
                                <h3>100 $</h3>
                                <a href="/purchase" class="btn btn-success">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="assets/bird.jpg" class="card-img-top" alt="service1">
                        <div class="card-body">
                            <h5 class="card-title">Service2</h5>
                            <p class="card-text text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <div class="d-flex justify-content-around">
                                <h3>100 $</h3>
                                <a href="/purchase" class="btn btn-success">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="assets/bird.jpg" class="card-img-top" alt="service1">
                        <div class="card-body">
                            <h5 class="card-title">Service3</h5>
                            <p class="card-text text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <div class="d-flex justify-content-around">
                                <h3>100 $</h3>
                                <a href="/purchase" class="btn btn-success">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="assets/bird.jpg" class="card-img-top" alt="service1">
                        <div class="card-body">
                            <h5 class="card-title">Service4</h5>
                            <p class="card-text text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <div class="d-flex justify-content-around">
                                <h3>100 $</h3>
                                <a href="/purchase" class="btn btn-success">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="assets/bird.jpg" class="card-img-top" alt="service1">
                        <div class="card-body">
                            <h5 class="card-title">Service5</h5>
                            <p class="card-text text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <div class="d-flex justify-content-around">
                                <h3>100 $</h3>
                                <a href="/purchase" class="btn btn-success">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="assets/bird.jpg" class="card-img-top" alt="service1">
                        <div class="card-body">
                            <h5 class="card-title">Service6</h5>
                            <p class="card-text text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <div class="d-flex justify-content-around">
                                <h3>100 $</h3>
                                <a href="/purchase" class="btn btn-success">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- javascript -->

    <script type = "text/javascript">
        function search() {
            let filter = document.getElementById('find').value.toUpperCase();

            let item = document.querySelectorAll('.card');

            let l = document.getElementsByTagName('h5');

            for(var i = 0; i < l.length; i++) {
                let a=item[i].getElementsByTagName('h5')[0];

                let value=a.innerHTML || a.innerText || a.textContent;
                if(value.toUpperCase().indexOf(filter) > -1) {
                    item[i].style.display="";
                }
                else {
                    item[i].style.display="none";
                }
            }
        }

    </script>


</body>
</html>




