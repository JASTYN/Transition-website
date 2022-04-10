<?php

@include 'Config.php';

session_start();
session_unset();
session_destroy();

header('location:signin_form.php');


?>