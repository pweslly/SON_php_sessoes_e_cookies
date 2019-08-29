<?php

session_start();

//Destruindo a sessão 
//session_destroy();


//Como deletar apenas uma sessão especifica
unset($_SESSION['ultimo-acesso']);