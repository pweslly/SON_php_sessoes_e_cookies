<?php
ini_set('session.save_handler', 'files');
ini_set('session.save_path', __DIR__.'/sessions');

session_set_cookie_params(60*60, '/', null,false,true);
/* Ele tem 5 paramentros o primeiro o tempo útil da sessão, se for 0 ele acaba quando o browser o fecha. O tempo em segundos

Outro paramento escolho qual pasta ele vai funcionar

Outro parametro posso escolher também pelo dominio

Outro parametro posso só comunicação segura com HTTPSd

O último http only 
*/
session_start();