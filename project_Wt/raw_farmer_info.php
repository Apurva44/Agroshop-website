<?php
/*session_start();

// Check if the user is not logged in, redirect to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: project_agro.php");
    exit;
}*/

if (isset($_POST['save'])) {
    $farmer_name = $_POST['farmer_name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone_number = $_POST['phone_number'];

    // Retrieve material information from the previous form
    $mnm = $_POST['material'];
    $mpri = $_POST['price'];
    $mdis = $_POST['discount'];
    $mcat = $_POST['category'];
    $ava_stock = $_POST['ava'];
    $fn = $_FILES['dp']['name'];
    $tm = $_FILES['dp']['tmp_name'];
    move_uploaded_file($tm, "materiallist/" . $fn);

    $con = mysqli_connect("localhost", "root", "", "agrodata");

    $farmer_name = mysqli_real_escape_string($con, $farmer_name);
    $email = mysqli_real_escape_string($con, $email);
    $address = mysqli_real_escape_string($con, $address);
    $phone_number = mysqli_real_escape_string($con, $phone_number);

    $ins_farmer = "INSERT INTO farmer_info (farmer_name, email, address, phone_number) VALUES ('$farmer_name', '$email', '$address', '$phone_number')";
    mysqli_query($con, $ins_farmer);

    $ins_material = "INSERT INTO agro_material (name, price, discount, images, category, stock) VALUES ('$mnm', '$mpri', '$mdis', '$fn', '$mcat', '$ava_stock')";
    mysqli_query($con, $ins_material);

    echo '<script>alert("Successfully saved");</script>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmer Information</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="farmer_name">Farmer Name:</label>
        <input type="text" name="farmer_name" required><br><br>
        <label for="email">Email:</label>
        <input type="email" name="email" required><br><br>
        <label for="address">Address:</label>
        <input type="text" name="address" required><br><br>
        <label for="phone_number">Phone Number:</label>
        <input type="text" name="phone_number" required><br><br>

        <!-- Fields from the previous form -->
        <input type="hidden" name="material" value="<?php echo $_POST['material']; ?>">
        <input type="hidden" name="price" value="<?php echo $_POST['price']; ?>">
        <input type="hidden" name="discount" value="<?php echo $_POST['discount']; ?>">
        <input type="hidden" name="category" value="<?php echo $_POST['category']; ?>">
        <input type="hidden" name="ava" value="<?php echo $_POST['ava']; ?>">
        <input type="hidden" name="dp" value="<?php echo $_FILES['dp']['name']; ?>">

        <button type="submit" name="save">Save</button>
    </form>
</body>
</html>
