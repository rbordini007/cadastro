<?php
$utf8 = header("Content-Type: text/html; charset=utf-8");
$link = new mysqli('localhost','root','','db_cadastro');
$link->set_charset('utf8'); 
$conecta  = mysqli_connect('localhost','root','','db_cadastro');
$conecta->set_charset('utf8');
