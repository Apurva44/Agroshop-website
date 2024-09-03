<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agro-Shop</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="footer.css">

  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="style_cat.css">
  
  <style>
    body {
      font-family: 'Arial', sans-serif;
    }

    h3{
      color: green;
    }

    #agroshop-container {
      max-width: 1300px;
      margin: 50px auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 10px;
      text-align: center;
      background-color: light;
    }

    #quote {
      font-style: italic;
      margin-bottom: 20px;
    }

    .circular-image-container {
      display: inline-block;
      text-align: center;
      margin: 10px;
    }

    .circular-image {
      border-radius: 50%;
      width: 100px;
      height: 100px;
      object-fit: cover;
    }

    .container-text {
  position: relative;
  text-align: center;
  color: white;
}

    .centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

  .main-navbar{
    background-color: #2874f0;
  }

  .main-navbar a{
    color: white;
  }
  </style>
</head>

<body>
<header>
  <nav class="navbar navbar-expand-lg  main-navbar top-navbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="">
        <img src="logo2.png" alt="Company Logo" width="250" height="130" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto"> <li class="nav-item mx-3">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link" href="#about">About Us</a>
          </li>
		  <li class="nav-item mx-3">
            <a class="nav-link" href="product.php">Products</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link" href="scheme.php">Schemes</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link" href="login.php">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
 </header>
 
 <div class="container-fluid ">
    <div class="row mt-2 container-text">
        <img src="./images/field.jpg" alt="Company Logo" height="700" alt="">
        <div class="text-start p-5 centered" style="max-width: 500px;">
              <h4 class="text-white">Organic Vegetables</h4>
              <h3 class="display-1 text-white mb-md-4">Organic Vegetables For Healthy Life</h3>
        </div>
		<div class="text-center text-white pt-4" id="about">
          <h3>About us</h3>
    </div>
	</div>
  </div>
  
  <div class="row mt-3">
  <div class="container-fluid about pt-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="d-flex h-90 border border-5 border-secondary  pt-4">
                        <img class="img-fluid mt-auto mx-auto" height="500px" src="./images/farmer1.png">
                    </div>
                </div>
                <div class="col-lg-6 pb-5">
                    <div class="mb-3 pb-2">
                        <h1 class="display-5">We Produce Organic Food For Your Family</h1>
                    </div>
                    <p class="mb-4">Tempor erat elitr at rebum at at clita. Diam dolor diam ipsum et tempor sit. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna dolore erat amet magna</p>
                    <div class="row gx-5 gy-4">
                        <div class="col-sm-6">
                            <i class="fa fa-seedling display-1 text-secondary"></i>
                            <h4>100% Organic</h4>
                            <p class="mb-0">Labore justo vero ipsum sit clita erat lorem magna clita nonumy dolor magna dolor vero</p>
                        </div>
                        <div class="col-sm-6">
                            <i class="fa fa-award display-1 text-secondary"></i>
                            <h4>Award Winning</h4>
                            <p class="mb-0">Labore justo vero ipsum sit clita erat lorem magna clita nonumy dolor magna dolor vero</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
  
  <br><br><br><br>
  <div class="container">
  <h2 class="line-title">Products</h2>
    <div class="row">
    
      <div class="col-md-3">
        <div class="card">
          <img src="./images/vegetables.jpg" class="card-img-top" alt="Card image 1">
		   <div class="item-desc">
        <h3>Organic Vegetables</h3>
      </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <img src="./images/fruits.jpg" class="card-img-top" alt="Card image 2">
		  <div class="item-desc">
        <h3>Organic Fruits</h3>
        
      </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <img src="./images/tools.jpg" class="card-img-top" alt="Card image 3">
		   <div class="item-desc">
        <h3>Tools</h3>
        
      </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <img src="fertilizer.jpg" class="card-img-top" alt="Card image 4">
		   <div class="item-desc">
        <h3>Fertilizers</h3>
        
      </div>
        </div>
      </div>
    </div>
  </div>

 <div id="agroshop-container">
    <h3>The Team</h3>
    <i><b><p id="quote">"Connecting farmers with quality seeds and tools for a bountiful harvest."</p></b></i>

    <div class="circular-image-container">
      <img src="dipali.jpg" alt="Image 1" class="circular-image">
      <h2 style="font-size:15px;">Dipali Sawant</h2>
    </div>

    <div class="circular-image-container">
      <img src="kajal.jpg" alt="Image 2" class="circular-image">
      <h2 style="font-size:15px;">Kajal Shingavi</h2>
    </div>

    <div class="circular-image-container">
      <img src="img3.png" alt="Image 3" class="circular-image">
      <h2 style="font-size:15px;" >Apurva Talekar</h2>
    </div>
  </div>

  
   <div class="footer-section">
        <div class="footer-item">
            <h2>Company</h2>
            <p><a href=""> About Us</a></p>
            <p><a href=""> Contact Us</a></p>
            <p><a href=""> Our Services</a></p>
            <p><a href=""> Privacy Policy</a></p>
        </div>
        <div class="footer-item">
            <h2>Get Help </h2>
            <p><a href=""> FAQ</a></p>
            <p><a href=""> Shipping </a></p>
            <p><a href=""> Retuns </a></p>
            <p><a href=""> Payment Options </a></p>
        </div>
        <div class="footer-item">
            <h2>Online Shop</h2>
            <p><a href=""> Agricultural tools </a></p>
            <p><a href=""> Fertilizers </a></p>
            <p><a href=""> Dairy Products </a></p>
            <p><a href=""> Fresh Products </a></p>
        </div>
        <div class="footer-item social">
            <h2> Follow Us </h2>
            <ul>
				<a href="http://www.instagram.com" class="fab fa-instagram"></a>
                <a href="http://www.youtube.com" class="fab fa-youtube"></a>
                <a href="http://www.facebook.com"class="fab fa-facebook"></a>
                <a href="http://www.linkedin.com"class="fab fa-linkedin"></a>
            </ul>
        </div>
    </div>

 
</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


  <script>
    $(document).ready(function () {
      $(".custom-carousel").owlCarousel({
  autoWidth: true,
 
});

      $(".custom-carousel .item").click(function () {
        $(".custom-carousel .item").not($(this)).removeClass("active");
        $(this).toggleClass("active");
      });
    });
  </script>

</body>
</html>
