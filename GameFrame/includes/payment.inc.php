<?php

if (isset($_POST['submit'])) {
    include_once 'dbh.inc.php';

    $number = mysqli_real_escape_string($conn, $_POST['cardnumber']);
    $expmonth = mysqli_real_escape_string($conn, $_POST['expmonth']);
    $expyear = mysqli_real_escape_string($conn, $_POST['expyear']);
    $code = mysqli_real_escape_string($conn, $_POST['security']);
    $zip = mysqli_real_escape_string($conn, $_POST['zip']);

    //Error handlers
    //Check for empty fields
    if (empty($number) || empty($expmonth) || empty($expyear) || empty($code) || empty($zip)) {
        header("Location: ../creditgui.php?payment=empty");
        exit();
    } else {
        //check if input characters are valid
        if (!preg_match("/^[0-9]*$/", $number) || !preg_match("/^[0-9]*$/", $expmonth) || !preg_match("/^[0-9]*$/", $expyear) || !preg_match("/^[0-9]*$/", $code) || !preg_match("/^[0-9]*$/", $zip)) {
            header("Location: ../creditgui.php?payment=invalid");
            exit();
        } else {
            $newtime = $_SESSION['u_time'] + $addtime;
            $sql = "INSERT INTO users (user_time, user_cardnumber, user_cardcode, user_cardzip, user_expmonth, user_expyear) VALUES ('$newtime', '$number', '$code', '$zip', '$expmonth', '$expyear');";
            mysqli_query($conn, $sql);
            header("Location: ../launchpad.php?payment=success");
            exit();
        }
    }
} else {
    header("Location: ../creditgui.php");
    exit();
}