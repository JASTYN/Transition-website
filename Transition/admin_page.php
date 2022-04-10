
<?php

@include 'Config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
    header('location:signin_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin page</title>

    <!-- custom css file link -->
    <link rel="stylesheet" href="styles.css">

</head>
<body>
    <div class="container">
        <div class="content">
            <h3>hi, <span>admin</span></h3>
            <h1>welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
            <p>this is an admin page</p>
            <a href="Signin_form.php" class="btn">Signin</a>
            <a href="Signup_form.php" class="btn">Signup</a>
            <a href="Signout.php" class="btn">Signout</a>
        </div>
    </div>
    
</body>
</html>