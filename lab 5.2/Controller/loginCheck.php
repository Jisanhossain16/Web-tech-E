<?php

//include_once("../model/userModel.php");
$user_name = "";
$password = "";

if (isset($_POST["submit"])) {

    $user_name = $_POST["user_name"];
    $password = $_POST["password"];


    if (!$_POST['user_name'] || !$_POST['password']) {
        echo "Please fill up all required fields\n";
    } else {
        $user = login($user_name, $password);
        
    }
}
?>