<?php


$aluno		=  $_POST['aluno'];
$mat		=  $_POST['matricula'];
$mensa      =  $_POST['mensalidade'];

//echo "Nome do aluno {$aluno}<br>";
//echo "Matricula: {$mat}<br>";
//echo "Mensalidade: {$mensa}";

$sql = "insert into tblaluno (aluno,matricula,mensalidade)
values ('$aluno,''$mat','$mensa')";

$qry = mysqli_query($con,$sql);





