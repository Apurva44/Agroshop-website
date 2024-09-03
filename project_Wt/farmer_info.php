
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="scheme_css.css">
  <style>
    body {
      margin: 0px;
      padding: 0px;
      background-image: url("bg.png");
      background-color: #fff;
    }

    .logo {
      cursor: pointer;
      top: 20px;
      left: 20px;
      position: relative;
      text-decoration: none;
      color: #000;
      font-size: 35px;
      font-weight: 700;
    }

    .upload_form {
      position: relative;
      top: 100px;
      width: 500px;
      height: 450px;
      border: none;
      border: 0.5px solid grey;
      border-radius: 7px;
      background-color: rgba(147, 197, 114, 0.2);
    }

    .input {
      position: relative;
      top: 80px;
      width: 350px;
      height: 32px;
      border-radius: 30px;
      padding: 8px;
      font-size: 18px;
    }

    .input2 {
      position: relative;
      top: 30px;
      width: 300px;
      height: 35px;
      font-size: 20px;
    }

    .upload_button {
      position: relative;
      top: 50px;
      width: 170px;
      height: 40px;
      background-image: linear-gradient(254.87deg, #a5e6d0 0%, #74d7e2 86.88%);
      border-radius: 30px;
      transition: all 1s border-color 0.25s, box-shadow 0.25s, transform 0.25s;
      padding: 8px;
      font-size: 18px;
    }

    .upload_button:hover {
      border-color: #000;
      box-shadow: 0 0.5em 0.5em -0.4em #fff;
      transform: translateY(-0.25em);
      cursor: pointer;
    }

  </style>
</head>
<body>
<!-- <header> -->
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
 <!-- </header> -->
  <form action="" method="POST" enctype="multipart/form-data">
    <!-- <div style="width:100%; height:65px; background-color:white">
      <a href="HomePage.php" class="logo">Agro-shop</a>
    </div> -->

    <center>
      <div class="upload_form">
        <input type="text" style="margin-bottom:20px" name="nm_f" class="input" placeholder="Seller Name" required>
        <br>
        <input type="text" style="margin-bottom:20px" name="f_email" class="input" placeholder="Seller Email ID" required>
        <br>
        <input type="text" style="margin-bottom:20px" name="phone_f" class="input" placeholder="Phone Number" required>
        <br>
        <input type="text" style="margin-bottom:20px" name="f_add" class="input" placeholder="Seller Address" required>
        <br>
        <br>
        <br>
        <button name="submit" class="upload_button"> Upload </button>
      </div>
      <br>
      <br>
    </center>
  </form>
</body>
</html>

<?php
session_start(); // Start the session

if (isset($_POST['submit'])) {
    $mnm = $_POST['nm_f'];
    $memail = $_POST['f_email'];
    $mphn = $_POST['phone_f'];
    $madd = $_POST['f_add'];

    // Store farmer details in session variables
    $_SESSION['farmer_name'] = $mnm;
    $_SESSION['farmer_email'] = $memail;
    $_SESSION['phone_number'] = $mphn;
    $_SESSION['address'] = $madd;

    // Redirect to add_material.php
    header("Location: add_material.php");
    exit(); // Make sure to stop script execution after redirect
}
?>
`