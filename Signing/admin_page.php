
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
<section class="showcase">
        <header>
            <h2 class="logo">Keep Going</h2>
        </header>
       <!-- <video src="video.mp4" muted loop autoplay></video> -->
        <div class="overlay"></div>
        <div class="text">
            <h2>Never Stop</h2>
            <h3>Moving to your dreams</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.Quis corporis cumque tempora officiis expedita aperiam quo sapiente ducimus ipsa repellendus?</p>
            <a href="index.html">Move</a>
            <a href="#"><?php echo $_SESSION['admin_name'] ?></a>

        <?php
        if(isset($error)){
            foreach($error as $error){
                echo '<span class="error-msg">'.$error.'</span>';
            };
        };
        ?>

       
        </div>
        <ul class="social">
            <li><a href="#"><img src="instagram.png" alt=""></a></li>
            <li><a href="#"><img src="instagram.png" alt=""></a></li>
            <li><a href="#"><img src="instagram.png" alt=""></a></li>
            <footer class="main-footer active-element"><span class="copyright">&copy;2022 A. Gabriel Hannadi Mary Justyn Dave</span></footer>
        </ul>
        
    </section>
</body>
</html>
