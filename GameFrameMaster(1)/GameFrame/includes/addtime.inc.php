<?php 
session_start();
if (isset($_POST['add_1'])) {
    $newtime = $_SESSION['u_time'] + 1;
    $_SESSION['u_time'] = $newtime;
    header("Location: ../creditgui.php");
} elseif (isset($_POST['add_2'])) {
    $newtime = $_SESSION['u_time'] + 2.5;
    $_SESSION['u_time'] = $newtime;    
    header("Location: ../creditgui.php");
} elseif (isset($_POST['add_4'])) {
    $newtime = $_SESSION['u_time'] + 4;
    $_SESSION['u_time'] = $newtime;    
    header("Location: ../creditgui.php");
} elseif (isset($_POST['add_8'])) {
    $newtime = $_SESSION['u_time'] + 8;
    $_SESSION['u_time'] = $newtime;    
    header("Location: ../creditgui.php");
} elseif (isset($_POST['add_15'])) {
    $newtime = $_SESSION['u_time'] + 15;
    $_SESSION['u_time'] = $newtime;    
    header("Location: ../creditgui.php");
} elseif (isset($_POST['add_25'])) {
    $newtime = $_SESSION['u_time'] + 25;
    $_SESSION['u_time'] = $newtime;    
    header("Location: ../creditgui.php");
} elseif (isset($_POST['add_50'])) {
    $newtime = $_SESSION['u_time'] + 50;
    $_SESSION['u_time'] = $newtime;    
    header("Location: ../creditgui.php");
}
exit();