<?php
session_start();
include('./includes/connect.php');
if(!$_SESSION['admin']) {
    header('Location: home.php');
    exit;
}

if(isset($_GET['id'])) {
    if ($_SESSION['userid'] != $_GET['id']) {
        (new BaseModel)->delete('sellers', $_GET['id']);
    }
    header('Location: users.php');
    die();
}