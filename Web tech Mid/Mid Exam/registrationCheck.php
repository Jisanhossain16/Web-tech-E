<?php


$firstname = isset($_REQUEST['firstname']) ? $_REQUEST['firstname'] : "";
$lastname = isset($_REQUEST['lastname']) ? $_REQUEST['lastname'] : "";
$email = isset($_REQUEST['email']) ? $_REQUEST['email'] : "";
$phone = isset($_REQUEST['phone']) ? $_REQUEST['phone'] : "";
$gender = isset($_REQUEST['gender']) ? $_REQUEST['gender'] : "";
$password = isset($_REQUEST['password']) ? $_REQUEST['password'] : "";
$confirmPassword = isset($_REQUEST['confirmPassword']) ? $_REQUEST['confirmPassword'] : "";


$firstNameError = $lastNameError = $emailError = $numberError = $genderError  = $passwordError = $confirmPasswordError = "";

$error = "";

if (isset($_POST["submit"])) {

    if (!$firstname) {
        $firstNameError = "Please enter your first name";
    }
    if (!$lastname) {
        $lastNameError = "Please enter a last name";
    }
    if (!$email) {
        $emailError = "Please enter your email";
    }
    if (!$phone) {
        $numberError = "Please enter your phone number";
    }
    if (!$gender) {
        $genderError = "Please select your gender";
    }
    if (!$password) {
        $passwordError = "Please enter password";
    }
    if ($password && strlen($password) < 6) {
        $passwordError = "Password must be at least 6 characters";
    }
    if (!$confirmPassword) {
        $confirmPasswordError = "Please enter confirmPassword";
    }
    if ($confirmPassword != $password) {
        $confirmPasswordError = "passwords did not match";
    }


    
    if ($firstname && $lastname && $email && $phone && $gender  && $password && $password == $confirmPassword) {
        $flag = true;
        if (!firstNameCheck($firstname)) {
            $firstNameError = "Please enter your name at least two words";
            $flag = false;
        }
        if (!lastNameChaeck($lastname)) {
            $lastNameError = "username must contains num & alpha ";
            $flag = false;
        }
        if (!numberCheck($phone)) {
            $numberError = "number must start with 0 & 1 & must be 11 digits";
            $flag = false;
        }

        if($flag){
            $user = ['firstname'=>$firstname, 'lastname'=>$lastname, 'email'=>$email, 'phone'=>$phone, 'gender'=>$gender, 'password'=>$password];
            $error = register($user);
        }
    }

    
function firstNameCheck($firstname){
    $nameParts = explode(" ", $firstname);
    if(count($nameParts) >= 2){
        $firstPart = $nameParts[0];
        $secondPart = $nameParts[1];
        if(ctype_alpha($firstPart) && ctype_alpha($secondPart)){
            return true;
        }
        else{
            return false;
        }
    }
}

function lastNameChaeck($lastname){
    $nameParts = explode(" ", $lastname);
    if(count($nameParts) >= 2){
        $firstPart = $nameParts[0];
        $secondPart = $nameParts[1];
        if(ctype_alpha($firstPart) && ctype_alpha($secondPart)){
            return true;
        }
        else{
            return false;
        }
    }
}

function numberCheck($phone){
    $flag = false;
    if(strlen($phone) == 11){
        if((int)$phone[0] == 0 && (int)$phone[1] == 1){
            for($i=2; $i<strlen($phone); $i++){
                if(is_numeric($phone[$i])){
                    $flag = true;
                }
            }
        }
    }
    if($flag){
        return true;
    }
    else{
        return false;
    }
}
    
}
