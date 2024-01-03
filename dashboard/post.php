<?php


if(isset($_POST['email']) && isset($_POST['password'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    if($email === "admin@esprit.tn" && $password === "admin"){
        header("Location: dashboard.html");
        exit();
    }
}

?>