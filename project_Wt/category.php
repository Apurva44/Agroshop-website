<?php
session_start();

$search_result = ""; // Initialize variable to store search results

// Check if the user is not logged in, redirect to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: project_agro.php");
    exit;
}

$sellerInfo = ""; // Initialize $sellerInfo variable to avoid undefined variable error

if (isset($_POST['search'])) {
    $conn = mysqli_connect("localhost", "root", "", "agrodata");
    if (!$conn) {
        die("Server not connected");
    }

    $search_query = $_POST['search_query'];
    $search_query = mysqli_real_escape_string($conn, $search_query);
    $query = "SELECT * FROM agro_material WHERE name LIKE '%$search_query%'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        // Display search results
        $search_result .= "<div class='row'>";
        while ($row = mysqli_fetch_array($result)) {
            // Display search result items
            // You can modify this part according to your product card design
            $search_result .= "
                <div class='col-md-3 mt-5'>
                    <div class='product-card'>
                        <div class='product-card-img'>
                            <label class='stock bg-success'>" . $row['stock'] . "</label>
                            <img src='./materiallist/" . $row['images'] . "' alt=''>
                        </div>
                        <div class='product-card-body'>
                            <h5 class='product-name'>" . $row['name'] . "</h5>
                            <div>
                                <span class='selling-price'>Rs. " . $row['price'] . "</span>
                                <span class='original-price'>Discount " . $row['discount'] . "</span>
                            </div>
                            <div class='mt-2'>
                                <form method='post'>
                                    <input type='hidden' name='product_id' value='" . $row['product_id'] . "'>
                                    <button type='submit' name='add_to_cart' class='btn btn-primary'>Add To Cart</button>
                                    <button type='button' onclick='openPopup(\"" . $row['seller_info'] . "\")' class='btn btn-primary'>Contact</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        $search_result .= "</div>";
    } else {
        // No results found
        $search_result = "<div class='alert alert-info' role='alert'>No results found.</div>";
    }
    mysqli_close($conn);
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ecommerce Navbar Design</title>

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="slider.css">
    <link rel="stylesheet" href="style_cat.css">
	<link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="product_css.css">
    <link rel="stylesheet" href="style.css">
</head>
   
<body>

    <div class="main-navbar shadow-sm sticky-top">
        <div class="top-navbar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2 my-auto d-none d-sm-none d-md-block d-lg-block">
                       <a class="navbar-brand" href="">
        <img src="logo2.png" alt="Company Logo" width="250" height="130" alt="">
      </a>
                    </div>
                    <div class="col-md-5 my-auto">
                        <form role="search">
                            <div class="input-group">
                                <input type="search" placeholder="Search your product" class="form-control" />
                                <button class="btn bg-white" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-5 my-auto">
                        <ul class="nav justify-content-end">
                            <li class="nav-item">
                                <a class="nav-link" href="farmer_info.php">Add Material</a>
                            </li>
							<li class="nav-item">
                                <a class="nav-link" href="scheme.php">Schemes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="cart.php">
                                    <i class="fa fa-shopping-cart"></i> Cart
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                   data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-user"></i>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="home.php"><i class="fa fa-user"></i>
                                            Profile</a></li>
                                    <li><a class="dropdown-item" href="home.php"><i class="fa fa-sign-out"></i>
                                            Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand d-block d-sm-block d-md-none d-lg-none" href="#">
                    Funda Ecom
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
				
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
				
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                       
                        <li class="nav-item">
                           <b> <a class="nav-link" href="product.php" style="color:green;">Best  website  to  sell  and  buy  your  products....Click  here  to  start  shopping</a></b>
                        </li>
                       
                    </ul>
				
                </div>
            </div>
        </nav>
    </div>
	
	<!-- <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://www.shutterstock.com/image-vector/farmer-man-hold-tablet-online-600nw-461049904.jpg" class="d-block w-100" alt="...">
               
            </div>
            <div class="carousel-item">
                <img src="banner.png" class="d-block w-100" alt="...">
               
            </div>
            <div class="carousel-item">
                <img src="banner.png" class="d-block w-100" alt="...">
                
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div> -->

<div class="container-fluid ">
    <div class="row mt-2 container-text">
    <img src="./images/fruit-veg.jpg" alt="Company Logo" height="600" max-width="100" alt="" id="img-id">
    </div>
</div>

 <div class="py-3 py-md-5 bg-light">
 <div class="container">
  <h2 class="line-title">Our Products</h2>
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

    
</body>
</html>
<?php
if (isset($_POST['fresh']) || isset($_POST['dairy']) || isset($_POST['honey']) || isset($_POST['hubs']) || isset($_POST['nursury'])) {
    $conn = mysqli_connect("localhost", "root", "", "agrodata");
    if (!$conn) {
        die("Server not connected");
    }

    $category = "";
    if (isset($_POST['fresh'])) {
        $category = "fresh";
    } elseif (isset($_POST['dairy'])) {
        $category = "dairy";
    } elseif (isset($_POST['honey'])) {
        $category = "honey";
    } elseif (isset($_POST['hubs'])) {
        $category = "hubs";
    } elseif (isset($_POST['nursury'])) {
        $category = "nursury";
    }

    $query = "SELECT * FROM agro_material WHERE category='$category'";
    $r = mysqli_query($conn, $query);

    echo "<div class='row'>";
    while ($row = mysqli_fetch_array($r)) {
        $product_name = $row['name'];
        $product_price = $row['price'];
        $product_discount = $row['discount'];
        $product_image = $row['images'];

        echo "
            <div class='col-md-3 mt-5'>
                <div class='product-card'>
                    <div class='product-card-img'>
                        <label class='stock bg-success'>In Stock</label>
                        <img src='./materiallist/$product_image' alt=''>
                    </div>
                    <div class='product-card-body'>
                        <h5 class='product-name'>$product_name</h5>
                        <div>
                            <span class='selling-price'>Rs. $product_price</span>
                            <span class='original-price'>Discount $product_discount</span>
                        </div>
                        <div class='mt-2'>
                            <a href='' class='btn btn1'>Add To Cart</a>
                            <a href='' class='btn btn1'> <i class='fa fa-heart'></i> </a>
                            <a href='' class='btn btn1'> View </a>
                        </div>
                    </div>
                </div>
            </div>
        ";
    }
    echo "</div>";

    mysqli_close($conn);
}
?>
