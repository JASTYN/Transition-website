<?php

@include 'Config.php';

if(isset($_POST['submit'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);
    $user_type = $_POST['user_type'];

    $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){

        $error[] = 'user already exist!';

    }else{
        if($pass != $cpass){
            $error[] = 'password not matched!'; 
        }else{
            $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
            mysqli_query($conn, $insert);
            header('location:signin_form.php');
        }
    }

};
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    
      <!-- custom css file link -->

      <link rel="stylesheet" href="styles.css">

</head>
<body>

<div class="form-container">
    <form action="" method="post">
        <h3>Signup now</h3>

        <?php
        if(isset($error)){
            foreach($error as $error){
                echo '<span class="error-msg">'.$error.'</span>';
            };
        };
        ?>

        <input type="text" name="name" required placeholder="Enter Your name">
        <input type="email" name="email" required placeholder="Enter Your email">
        <input type="password" name="password" required placeholder="Enter Your password">
        <input type="password" name="cpassword" required placeholder="confirm Your password">
        <select name="user_type">
            <option value="member">member</option>
            <option value="admin">admin</option>
        </select>
          <input type="submit" name="submit" value="Signup now" class="form-btn">
          <p>Already have an account? <a href="Signin_form.php">Signin now</a></p>
    </form>
</div>
    
</body>
</html>