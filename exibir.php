<?php

ini_set("default_charset", "utf-8");

$host = "localhost";
$user = "root";
$pass = "";
$bd = "ocomon_rc6";

mysql_connect($host, $user, $pass) or die("Não foi possível conectar.");
mysql_select_db($bd) or die("Banco de dados não encontrado.");

$query = mysql_query("select * from imagens") or die("Não foi possível executar a query");

while($row = mysql_fetch_object($query)){
	echo "<img src='getImage.php?id=$row->img_cod'>";
}