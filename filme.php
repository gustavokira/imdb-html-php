<?php //abre um espaço para escrever código php

//inclui nesta página todo o código existente no arquivo site.php
include_once("site.php");

//inclui nesta página todo o código existente no arquivo banco.php
include_once("banco.php");

//pega o id passado via GET
$idFilme = $_GET["id"];

//usa a função carregarFilmePorId criada no arquivo banco.php
$resultadoDoBanco = carregarFilmePorId($idFilme);

//carrega um filme com o método fetch_assoc.
$filme = $resultadoDoBanco->fetch_assoc();
//fecha um espaço para escrever código php ?>

<!DOCTYPE html>
<html>
<head>
	<title>der</title>
</head>
<body>

<?php
	echo '<h1>id: ' . $filme['titulo'] . '</h1>';
?>

</body>
</html>