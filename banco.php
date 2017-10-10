<?php
//conecta com uma base de dados.
//primeiro valor - endereco url ou ip.
//segundo valor - usuário do banco de dados.
//terceiro valor - senha do banco de dados.
//quarto valor - base de dados.
$mysqli = new mysqli("", "", "", "");

//se a conexão falhar, escreve que deu erro.
if ($mysqli->connect_errno) {
	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

//função para carregar filmes mais fácil.
function carregarFilmes(){
	//pega o objeto $mysqli como variável.
	$sql = $GLOBALS["mysqli"];
	//faz um select.
    $filmes = $sql->query("SELECT id,titulo FROM filmes;");
    //retorna o resultado do select.
    return $filmes;
}

//função para carregar UM filme mais fácil.
function carregarFilmePorId($id){
	//pega o objeto $mysqli como variável.
	$sql = $GLOBALS["mysqli"];
	//faz um select.
    $filme = $sql->query("SELECT * FROM filmes WHERE id='" . $id ."';");
    //retorna o resultado do select.
    return $filme;
}