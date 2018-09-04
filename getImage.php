<?php

ini_set("default_charset", "utf-8");

$host = "localhost";
$user = "root";
$pass = "";
$bd = "ocomon_rc6";
$id = $_GET['id'];

mysql_connect($host, $user, $pass) or die("Não foi possível conectar.");
mysql_select_db($bd) or die("Banco de dados não encontrado.");

$query = mysql_query("select * from imagens where img_cod = $id") or die("Não foi possível executar a query.");
$row = mysql_fetch_object($query);

header("Content-type: $row->img_tipo");
echo $row->img_bin;