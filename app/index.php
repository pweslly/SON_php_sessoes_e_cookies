<?php

session_start();

$_SESSION['usuario'] = [
  'name' => 'Erik',
  'idade' => 32,
  'ativo' => true,
  'rate' => 4.3
];