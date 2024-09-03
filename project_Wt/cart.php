<?php
session_start();

// Check if the user is not logged in, redirect to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: project_agro.php");
    exit;
}

// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "agrodata");
if (!$conn) {
    die("Server not connected");
}

// Get the user ID from the session
$user_id = $_SESSION["user_id"];

// Fetch cart items for the current user
$query = "SELECT agro_material.*, user_cart.quantity FROM user_cart 
          JOIN agro_material ON user_cart.product_id1 = agro_material.product_id 
          WHERE user_cart.user_id1 = '$user_id'";
$result = mysqli_query($conn, $query);

// Close the database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
    .cart-div{
        background-color:  #2874f0;
    }
    .total-div{
        background-color: rgba(147, 197, 114,0.4);
    }
</style>    
</head>
<body>
    <div class="container mt-5">
       <div class="cart-div"> <h1>Cart</h1></div>
        <table class="table">
            <thead>
                <tr>
                    <th>Product Image</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Action</th> <!-- New column for delete button -->
                </tr>
            </thead>
            <tbody>
                <?php
                $total_price = 0;
                while ($row = mysqli_fetch_assoc($result)) {
                    $product_image = $row['images'];
                    $product_name = $row['name'];
                    $product_price = $row['price'];
                    $quantity = $row['quantity'];
                    $total = $product_price * $quantity;
                    $total_price += $total;

                    echo "<tr>";
                    echo "<td><img src='./materiallist/$product_image' alt='' style='width: 100px; height: 100px;'></td>";
                    echo "<td>$product_name</td>";
                    echo "<td>Rs. $product_price</td>";
                    echo "<td>$quantity</td>";
                    echo "<td>Rs. $total</td>";
                    echo "<td><a href='delete_from_cart.php?product_id={$row['product_id']}' class='btn btn-danger'>Delete</a></td>"; // Link for delete
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <div class="total-div">
        <h3>Total Price: Rs. <?php echo $total_price; ?></h3>
        </div>
        
    </div>
</body>
</html>
