<?php //conexao.php
include "conexao.php"
$serve = "localhost";
$user  = "root";
$pass  = "";
$bd	   = "bdaula8";


mysql_connect($serve,$user,$pass,$bd);

if(!$con){
	echo "não conectou ao BD";
}