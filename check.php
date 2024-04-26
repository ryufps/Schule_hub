<?php

$users = [
    "ryu" => "Na1985-Ju",
    "Lehrer" => "sicherer_als_edocs_lol",
    "guest"=> "p@ssw0rd"
];

session_start();

if(isset($_POST['user']) && !isset($_SESSION['user'])) {

    if($users[$_POST['user']] == $_POST['password']) {

        $_SESSION['user'] = $_POST['user'];
    }

    if(!isset($_SESSION['user'])) {
        $failed = true;
    }
}

if(isset($_SESSION['user'])) {
    header("Location: index.php");
    exit();
}
