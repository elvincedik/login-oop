<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {

    function purgeData($data) {
        $data = stripslashes($_POST["fullName"]);
        $data = htmlspecialchars($data);
        $data = trim($data);
        return $data;
    }

    echo purgeData($_POST["fullName"])."<br>";
    echo purgeData($_POST["email"])."<br>";
    echo purgeData($_POST["pwd"])."<br>";
    echo purgeData($_POST["confirmPwd"])."<br>";
}