<?php
session_start();
require 'validator.php';

if($_SERVER["REQUEST_METHOD"] == "POST") {

    function purgeData($data) {
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $data = trim($data);
        return $data;
    }

    // creating an object from a class
    $validator = new validator();

    $validator->validateEmpty(purgeData($_POST["fullName"]), "fullName");
    $validator->validateEmpty(purgeData($_POST["email"]), "email");
    $validator->validateEmpty(purgeData($_POST["pwd"]), "pwd");
    $validator->validateEmpty(purgeData($_POST["confirmPwd"]), "confirmPwd");

    //check for errors
    if($validator->hasErrors()) {
        $_SESSION["errors"] = $validator->getErrors();
        header("Location: index.php");
        exit();
    } else {
        echo "registeration successful";
        session_unset();
        session_destroy();
    }
}