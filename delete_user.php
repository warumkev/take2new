<?php
session_start();
if(!$_SESSION['admin']) {
    header('Location: home.php');
    exit;
}

$userId = $_SESSION['userid'];

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    //TODO
    //pg_fetch_assoc(pg_query($dbConn, "DELETE FROM public.sellers WHERE id = $id"));
    header('Location: users.php');
    die();
}