<?php
    session_start();
    if (isset($_POST['launch'])) {
        echo exec('C:/Riot Games/League of Legends/LeagueClient.exe');
    }
header("Location: ../launchpad.php");
exit();