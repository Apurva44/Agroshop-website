<?php

include 'config.php';
session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

   $select = mysqli_query($conn, "SELECT * FROM `admindetails` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   $numrows = mysqli_num_rows($select); // Changed $query to $select here
   if ($numrows != 0) {
       while ($row = mysqli_fetch_assoc($select)) { // Changed $query to $select here
           $dbusername = $row['email'];
           $dbpassword = $row['password'];
           $user_id = $row['user_id']; // Assuming 'id' is the column name for the user ID in your 'admindetails' table
       }

       if ($email == $dbusername && $pass == $dbpassword) {
           // Start the session (no need to start session again as it's already started)
           // Store user ID in the session
           $_SESSION["user_id"] = $user_id;

           // Set logged-in status
           $_SESSION["loggedin"] = true;

           // Redirect to product.php or any other desired page
           header("Location: category.php");
           exit;
       }
   } else {
       echo '<script>alert("Invalid username or password")</script>';
   }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <style>
      .previous {
         background-color: #f1f1f1;
         color: black;
      }

      .round {
      border-radius: 50%;
      }
            
      .prev{
         position: absolute;
         width: 20px;
         height: 20px;
      }

      .prev{
         top:15;
         left:5;
      }
   </style>   
</head>
<body>
   
<div class="form-container" style="background-image: url('./images/field1.jpg'); background-size: cover;">
   <div class="prev">
   <a href="project_agro.php" class="previous round">&#8249;</a>
   </div>

   <form action="" method="post" enctype="multipart/form-data">
      <h3>login now</h3>
      <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>
      <input type="email" name="email" placeholder="enter email" class="box" required>
      <input type="password" name="password" placeholder="enter password" class="box" required>
      <input type="submit" name="submit" value="login now" class="btn">
      <p>don't have an account? <a href="register.php">register now</a></p>
   </form>

</div>

</body>
</html>
