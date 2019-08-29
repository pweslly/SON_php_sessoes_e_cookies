<?php

session_start();

$_SESSION['usuario'] = 'Pablo';
$_SESSION['ultimo-acesso'] = '19-2-2922';
$_SESSION['id-user'] = 10;
/*
$_SESSION['usuario'] = [
  'name' => 'Erik',
  'idade' => 32,
  'ativo' => true,
  'rate' => 4.3
]; */

// Como deletar uma sessão
//unset($_SESSION['usuario']);