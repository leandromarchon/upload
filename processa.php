<?php

ini_set("default_charset", "utf-8");

$host = "localhost";
$user = "root";
$pass = "";
$bd = "ocomon_rc6";

$tmp_img = $_FILES["imagem"]["tmp_name"];
$size_img = $_FILES["imagem"]["size"];
$type_img = $_FILES["imagem"]["type"];
$name_img = $_FILES["imagem"]["name"];

if($tmp_img != null || $tmp_img != "none"){
	
	$fopen = fopen($tmp_img, "rb");
	$content = fread($fopen, $size_img);
	$img_bin = addslashes($content);
	
	mysql_connect($host, $user, $pass) or die("Erro ao conectar.");
	mysql_select_db($bd) or die("Banco de Dados não encontrado.");
	mysql_query("insert into imagens (img_nome, img_tipo, img_bin, img_size) values ('$name_img', '$type_img', '$img_bin', '$size_img');") or die(mysql_error());
	unlink($img_bin);
	
	header("Location:exibir.php");
	
}else{
	echo "Anexo não encontrado. Por favor, tente novamente.";
	header("Location:index.php");
}