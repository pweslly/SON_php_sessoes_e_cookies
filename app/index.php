<?php

session_start();

$user = empty($_SESSION['users']) ?? null;

if(!$user){
  header('location: login.php');
  exit;
}
?>

<h1> Página Protegida </h1>