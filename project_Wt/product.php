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
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="product_css.css">
	
	<style>
        /* Styles for popup */
    .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 500px;
            max-width: 90%; /* Ensure the popup does not exceed 90% of the viewport width */
            height: auto;
            max-height: 90%; /* Ensure the popup does not exceed 90% of the viewport height */
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            z-index: 9999;
            padding: 20px;
            overflow-y: auto; /* Enable vertical scrolling if content exceeds height */
        }

        .popup-content {
            position: relative;
        }

        .close {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }

        #seller-info {
            /* Custom styles for seller information */
            font-size: 16px;
            line-height: 1.6;
            color: #333;
        }
    </style>
</head>
<body>

<form action="" method="POST">
    <div class="main-navbar shadow-sm sticky-top">
        <div class="top-navbar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2 my-auto d-none d-sm-none d-md-block d-lg-block">
                        <a class="navbar-brand" href="#">
                            <img src="logo2.png" alt="Company Logo" width="250" height="130" alt="">
                        </a>
                    </div>
                    <div class="col-md-5 my-auto">
                        <form action="" method="POST" role="search">
                            <div class="input-group">
                                <input type="search" name="search_query" placeholder="Search your product"
                                       class="form-control"/>
                                <button type="submit" name="search" class="btn bg-white">
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
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <button name="home" value="home" style="border:none;background-color: #ddd;"
                                    class="nav-link">Home
                            </button>
                        </li>
                        <li class="nav-item">
                            <button name="fresh" value="fresh" style="border:none;background-color: #ddd;"
                                    class="nav-link">Fresh Vegetables & Fruits
                            </button>
                        </li>
                        <li class="nav-item">
                            <button name="dairy" value="dairy" style="border:none;background-color: #ddd;"
                                    class="nav-link">Dairy Products
                            </button>
                        </li>
                        <li class="nav-item">
                            <button name="honey" value="honey" style="border:none;background-color: #ddd;"
                                    class="nav-link">Honey-Bee Products
                            </button>
                        </li>
                        <li class="nav-item">
                            <button name="hubs" value="hubs" style="border:none;background-color: #ddd;"
                                    class="nav-link">Hubs and spices
                            </button>
                        </li>
                        <li class="nav-item">
                            <button name="nursury" value="nursury" style="border:none;background-color: #ddd;"
                                    class="nav-link">Nursury
                            </button>
                        </li>
                        <li class="nav-item">
                            <button name="animals" value="animals" style="border:none;background-color: #ddd;"
                                    class="nav-link">Animals
                            </button>
                        </li>
                        <li class="nav-item">
                            <button name="vehicles" value="vehicles" style="border:none;background-color: #ddd;"
                                    class="nav-link">Vehicles
                            </button>
                        </li>
                        <li class="nav-item">
                            <button name="fertilizer" value="fertilizer" style="border:none;background-color: #ddd;"
                                    class="nav-link">Fertilizers
                            </button>
                        </li>
                        <!-- <li class="nav-item">
                            <button name="carft" value="carft" style="border:none;background-color: #ddd;"
                                    class="nav-link">Craft and home-made goods
                            </button>
                        </li> -->
                        <li class="nav-item">
                            <button name="tools" value="tools" style="border:none;background-color: #ddd;"
                                    class="nav-link">Agricultural tools
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <?php echo $search_result; ?>

    <div class="py-3 py-md-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="mb-4">Our Products</h4>
                </div>
                <?php
                if (isset($_POST['fresh']) || isset($_POST['dairy']) || isset($_POST['honey']) || isset($_POST['hubs']) || isset($_POST['nursury']) || isset($_POST['animals']) || isset($_POST['vehicles']) || isset($_POST['fertilizer']) || isset($_POST['carft']) || isset($_POST['tools'])) {
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
                    } elseif (isset($_POST['animals'])) {
                        $category = "animals";
                    } elseif (isset($_POST['vehicles'])) {
                        $category = "vehicles";
                    } elseif (isset($_POST['fertilizer'])) {
                        $category = "fertilizer";
                    } elseif (isset($_POST['carft'])) {
                        $category = "carft";
                    } elseif (isset($_POST['tools'])) {
                        $category = "tools";
                    }

                    $query = "SELECT *, CONCAT('Seller Name: ', farmer_nm, '<br>Email: ', farmer_email, '<br>Phone: ', farmer_ph, '<br>Address: ', farmer_add) AS seller_info FROM agro_material INNER JOIN farmer_info ON agro_material.farmer_id = farmer_info.farmer_id WHERE category='$category'";
                    $r = mysqli_query($conn, $query);

                    echo "<div class='row'>";
                    while ($row = mysqli_fetch_array($r)) {
                        $product_id = $row['product_id'];
                        $product_name = $row['name'];
                        $product_price = $row['price'];
                        $product_discount = $row['discount'];
                        $product_image = $row['images'];
                        $product_available = $row['stock'];

                        echo "
                            <div class='col-md-3 mt-5'>
                                <div class='product-card'>
                                    <div class='product-card-img'>
                                        <label class='stock bg-success'>$product_available</label>
                                        <img src='./materiallist/$product_image' alt=''>
                                    </div>
                                    <div class='product-card-body'>
                                        <h5 class='product-name'>$product_name</h5>
                                        <div>
                                            <span class='selling-price'>Rs. $product_price</span>
                                            <span class='original-price'>Discount $product_discount</span>
                                        </div>
                                        <div class='mt-2'>
                                            <form method='post'>
                                                <input type='hidden' name='product_id' value='$product_id'>
                                                <button type='submit' name='add_to_cart' class='btn btn-primary'>Add To Cart</button>
                                                <button type='button' onclick='openPopup(\"" . $row['seller_info'] . "\")' class='btn btn-primary'>Contact</button>
                                            </form>
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
            </div>
        </div>
    </div>
	<div id="popup" class="popup">
    <div class="popup-content">
        <span class="close" onclick="closePopup()">&times;</span>
        <div id="seller-info"></div>
    </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
    function openPopup(sellerInfo) {
        document.getElementById('seller-info').innerHTML = sellerInfo;
        document.getElementById('popup').style.display = 'block';
    }

    function closePopup() {
        document.getElementById('popup').style.display = 'none';
    }
</script>


</form>
</body>
</html>
<?php
if (isset($_POST['add_to_cart'])) {
    $conn = mysqli_connect("localhost", "root", "", "agrodata");
    if (!$conn) {
        die("Server not connected");
    }

    // Get the user ID from the session
    $user_id = $_SESSION["user_id"];

    // Get the product ID from the form submission
    $product_id = $_POST['product_id'];

    // Insert the item into the cart table
    $query = "INSERT INTO user_cart (user_id1, product_id1, quantity) VALUES ('$user_id', '$product_id', 1)";
    mysqli_query($conn, $query);

    mysqli_close($conn);
}
?>

