<?php
session_start();

if(isset($_COOKIE['estAdmin']) && $_COOKIE['estAdmin'] == true){
    $_SESSION['user'] = 'admin';
}

header('Location: admin.php');