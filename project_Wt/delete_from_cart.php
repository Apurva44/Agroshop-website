<?php
session_start();

// Check if the user is not logged in, redirect to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: project_agro.php");
    exit;
}

// Check if product_id is provided
if (!isset($_GET["product_id"])) {
    header("Location: cart.php"); // Redirect back to cart page if product_id is not provided
    exit;
}

// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "agrodata");
if (!$conn) {
    die("Server not connected");
}

// Get the user ID from the session
$user_id = $_SESSION["user_id"];

// Get the product ID from the URL parameter
$product_id = $_GET["product_id"];

// Delete the product from the cart for the current user
$query = "DELETE FROM user_cart WHERE user_id1 = '$user_id' AND product_id1 = '$product_id'";
$result = mysqli_query($conn, $query);

// Check if the deletion was successful
if ($result) {
    // Product successfully deleted
    header("Location: cart.php"); // Redirect back to cart page
    exit;
} else {
    // Failed to delete product
    echo "Error: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
