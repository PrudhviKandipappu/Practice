<?php
    $userName = $_POST['userName'];
    $password = $_POST['password'];

    $dbConnection = mysqli_connect("192.168.146.236", "root", "Prudhvi@2004", "login");

    if($dbConnection) {
        echo "Login Successfully!!!";
    }
    else {
        echo die("Unable to connect your database!!!");
    }
?>