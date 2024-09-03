
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="footer.css">
  <link rel="stylesheet" href="scheme_css.css">

  <title>Scheme</title>
  <style>
	.slider-container {
    overflow: hidden;
    width: 1000px;
    height: 600px; /* Adjust height as needed */
	top:20px;
    position: relative;
}

  .slider {
      display: flex;
      transition: transform 0.5s ease-in-out;
  }

  .slide {
      flex: 0 0 auto;
      width: 100%;
  }

  .active {
      opacity: 1;
  }

  .slide img {
      width: 100%;
      height: 100%;
      object-fit: cover; /* Ensure the image covers the entire slide */
  }
  
  </style>
</head>

<body style="background-color: white;"> 
<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid"  style="background-color: #2874f0;">
      <a class="navbar-brand" href="">
        <img src="logo2.png" alt="Company Logo" width="250" height="130" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto" > <li class="nav-item mx-3">
            <a class="nav-link" href="category.php" style="color: white;">Home</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link" href="product.php" style="color: white;">Products</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link" href="scheme.php" style="color: white;">Schemes</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
 </header>
 <!-- <div class="slider-container">
    <div class="slider">
        <div class="slide active">
            <img src="./images/scheme1.jpg" alt="Slide 1">
        </div>
        <div class="slide">
            <img src="./images/scheme2.jpg" alt="Slide 2">
        </div>
        <div class="slide">
            <img src="./images/scheme3.jpg" alt="Slide 3">
        </div>
    </div>
</div>  -->
  
<div class="container-fluid ">
    <div class="row mt-2 container-text">
        <img src="./images/scheme1.jpg" alt="Company Logo" height="600" alt="">
    </div>
</div>

<div class="whole-sch container-fluid">
    <div class="head-sec">
      <!-- <h3 style="font-size:90px;">Government Schemes For Farmers</h3> -->
   </div>
    <div class="card-sch-overlay">
      <div class="sch-box sch" id="sch1">
        <a class="f" id="f1"
          href="https://vikaspedia.in/schemesall/schemes-for-farmers/agriculture-infrastructure-fund">Agriculture
          Infrastructure Fund </a>
        <label class="dis " id="dis1">A pan India Central Sector Scheme providing debt financing facility for investment
          in Agri infrastructure</label>
        <span>
          <img class="img-style" src="./images/sch-img.png" id="img1">
        </span>
      </div>
      </div>
      <div class="card-sch-overlay">
        <div class="sch-box sch" id="sch2">
          <a class="f" id="f2"
            href="https://vikaspedia.in/schemesall/schemes-for-farmers/credit-facility-for-farmers">Credit facility for
            farmers </a>
          <label class="dis" id="dis2">Provides information related to institutional credit available for
            farmers.</label>
          <span>
            <img class="img-style" src="./images/sch-img.png" id="img2">
          </span>
        </div>
      </div>
      <div class="card-sch-overlay">
        <div class="sch-box sch" id="sch3">
          <a class="f" id="f3" href="https://vikaspedia.in/schemesall/schemes-for-farmers/crop-insurance-schemes">Crop
            insurance schemes </a>
          <label class="dis" id="dis3">Scheme to safeguard farmers from financial loss occurring due to non-preventable
            natural risks.</label>
          <span>
            <img class="img-style" src="./images/sch-img.png" id="img3">
          </span>
        </div>
      </div>
      <div class="card-sch-overlay">
        <div class="sch-box sch" id="sch4">
          <a class="f" id="f4"
            href="https://vikaspedia.in/schemesall/schemes-for-farmers/group-accident-insurance-scheme-for-fishermen">Group
            Accident Insurance scheme for Fishermen</a>
          <label class="dis" id="dis4">Provides information about Group Accident Insurance scheme for Fishermen provided
            under Pradhan Mantri Matsya Sampada Yojana</label>
          <span>
            <img class="img-style" src="./images/sch-img.png" id="img4">
          </span>
        </div>
      </div>
      <div class="card-sch-overlay">
        <div class="sch-box sch" id="sch5">
          <a class="f" id="f5"
            href="https://vikaspedia.in/schemesall/schemes-for-farmers/interest-subvention-for-dairy-sector">Interest
            subvention for dairy sector </a>
          <label class="dis" id="dis5">Interest subvention on Working Capital Loans for Dairy sector due to
            lockdown</label>
          <span>
            <img class="img-style" src="./images/sch-img.png" id="img5">
          </span>
        </div>
      </div>
      <div class="card-sch-overlay">
        <div class="sch-box sch" id="sch6">
          <a class="f" id="f6"
            href="https://vikaspedia.in/schemesall/schemes-for-farmers/kcc-for-animal-husbandry-and-fisheries">KCC for
            animal husbandry and fisheries</a>
          <label class="dis" id="dis6">Provides information about Kisan Credit Card for animal husbandry and fisheries
            farmers.</label>
          <span>
            <img class="img-style" src="./images/sch-img.png" id="img6">
          </span>
        </div>
      </div>
     
      <div class="card-sch-overlay">
        <div class="sch-box sch" id="sch8">
          <a class="f" id="f8"
            href="https://vikaspedia.in/schemesall/schemes-for-farmers/pradhan-mantri-kisan-samman-nidhi">Pradhan Mantri
            Kisan Samman Nidhi </a>
          <label class="dis" id="dis8">Interest subvention on Working Capital Loans for Dairy sector due to
            lockdown</label>
          <span>
            <img class="img-style" src="./images/sch-img.png" id="img8">
          </span>
        </div>
      </div>
      <div class="card-sch-overlay">
        <div class="sch-box sch" id="sch9">
          <a class="f" id="f9"
            href="https://vikaspedia.in/schemesall/schemes-for-farmers/pradhan-mantri-krishi-sinchai-yojana">Pradhan
            Mantri Krishi Sinchai Yojana</a>
          <label class="dis" id="dis9">Provides information about Kisan Credit Card for animal husbandry and fisheries
            farmers.</label>
          <span>
            <img class="img-style" src="./images/sch-img.png" id="img9">
          </span>
        </div>
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

    </form>
	
</body>
<script>
	document.addEventListener("DOMContentLoaded", function() {
    const slider = document.querySelector(".slider");
    const slides = document.querySelectorAll(".slide");
    const slideCount = slides.length;
    let currentIndex = 0;

    function showSlide(index) {
        slides.forEach((slide) => slide.classList.remove("active"));
        slides[index].classList.add("active");
        slider.style.transform = `translateX(-${index * (100 / slideCount)}%)`;
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % slideCount;
        showSlide(currentIndex);
    }

    setInterval(nextSlide, 3000); // Change slide every 3 seconds
});
</script>
</html>  

