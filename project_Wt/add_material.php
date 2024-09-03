<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-
    Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body{
            margin:0px;
            padding:0px;
            background-image: url("bg.png");
            background-color: #F0FFF0;
      }

        .logo
        {
               cursor:pointer;
                top:20px;
                left:20px;
                position: relative;
                text-decoration:none;
                color: #000;
                font-size: 35px;
                font-weight:700;
        }

        .upload_form
        {
            position: relative;
            top:100px;
            width:500px;
            height:600px;
             border:none;
             border:0.5px solid grey;
             border-radius:7px;
            background-color:rgba(255,255,255,0.2);
             
        }

        .input
        {
            position:relative;
            top:80px;
            width:350px;
            height:32px;
            border-radius:30px;
            padding:8px;
            font-size:18px;
        }
        .input2
        {
            position:relative;
            top:30px;
            width:300px;
            height:35px;
            font-size:20px;
        }

        .upload_button
        {
            position:relative;
            top:50px;
            width:170px;
            height:40px;
            background-image:linear-gradient(254.87deg,#a5e6d0 0%,#74d7e2 86.88%);
            border-radius:30px;
            transition:all 1s border-color 0.25s, box-shadow 0.25s, transform 0.25s;
            padding:8px;
            font-size:18px;
        }

        .upload_button:hover{
    border-color:#000;
    box-shadow: 0 0.5em 0.5em -0.4em #fff;
    transform:translateY(-0.25em);
    cursor:pointer;
}

    </style>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
<div style="width:100%; height:65px; background-color:white">
    <a href="HomePage.php" class="logo">Agro-shop</a>
    </div>

    <center>
    <div class="upload_form">
        <input type="text" style="margin-bottom:20px" name="material" class ="input" placeholder="Material name" required>
        <br>
        <input type="text" style="margin-bottom:20px"  name="price" class ="input" placeholder="Material Price" required>
        <br>
        <input type="text"  style="margin-bottom:20px" name="discount" class ="input" placeholder="Discount" required>
        <br>
       <select name="category" style="margin-bottom:20px;width:370px;height:50px;" class="input" required>
        <option value="">Select Category</option>
        <option value="Fresh">Fresh</option>
        <option value="Dairy">Dairy</option>
        <option value="Honey">Honey</option>
        <option value="Hubs">Hubs</option>
        <option value="Nursury">Nursury</option>
        <option value="Animals">Animals</option>
        <option value="Vehicles">Vehicles</option>
        <option value="Fertilizer">Fertilizer</option>
        <option value="Carft">Carft</option>
        <option value="tools">Tools</option>
    </select><br>
		<input type="text" style="margin-bottom:20px"  name="ava" class ="input" placeholder="In stock/Out of stock" required>
        <br>
        
<br>
<br>
<br>
<br>
        <input type="file" name="dp" class ="input2" style="margin-bottom:20px">
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
    // Retrieve material details from the form
    $mnm = $_POST['material'];
    $mpri = $_POST['price'];
    $mdis = $_POST['discount'];
    $mcat = $_POST['category'];
    $ava_stock = $_POST['ava'];
    $fn = $_FILES['dp']['name'];
    $tm = $_FILES['dp']['tmp_name'];
    
    // Validate uploaded file
    $allowed_extensions = array('jpg', 'jpeg', 'png', 'gif');
    $file_extension = pathinfo($fn, PATHINFO_EXTENSION);
    if (!in_array(strtolower($file_extension), $allowed_extensions)) {
        die('Invalid file format. Please upload an image file.');
    }

    // Validate and sanitize other inputs
    $mnm = htmlspecialchars(trim($mnm));
    $mpri = floatval($mpri);
    $mdis = floatval($mdis);
    $mcat = htmlspecialchars(trim($mcat));
    $ava_stock = htmlspecialchars(trim($ava_stock));

    // Retrieve farmer details from the session
    $farmer_name = $_SESSION['farmer_name'];
    $farmer_email = $_SESSION['farmer_email'];
    $phone_number = $_SESSION['phone_number'];
    $address = $_SESSION['address'];

    // Connect to the database
    $con = mysqli_connect("localhost", "root", "", "agrodata");

    // Check connection
    if (mysqli_connect_errno()) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    // Prepare statements to prevent SQL injection
    $ins_farmer_stmt = $con->prepare("INSERT INTO farmer_info (farmer_nm, farmer_email, farmer_ph, farmer_add) VALUES (?, ?, ?, ?)");
    $ins_farmer_stmt->bind_param("ssss", $farmer_name, $farmer_email, $phone_number, $address);
    $ins_farmer_stmt->execute();

    // Retrieve the ID of the inserted farmer record
    $farmer_id = $ins_farmer_stmt->insert_id;

    // Move uploaded file to the appropriate directory
    move_uploaded_file($tm, "materiallist/" . $fn);

    // Insert material details into the agro_material table along with the farmer_id
    $ins_material_stmt = $con->prepare("INSERT INTO agro_material (name, price, discount, images, category, stock, farmer_id) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $ins_material_stmt->bind_param("ssssssi", $mnm, $mpri, $mdis, $fn, $mcat, $ava_stock, $farmer_id);
    $ins_material_stmt->execute();

    // Close prepared statements
    $ins_farmer_stmt->close();
    $ins_material_stmt->close();

    // Close database connection
    mysqli_close($con);

    echo '<script>alert("Successfully added");</script>';
}
?>
