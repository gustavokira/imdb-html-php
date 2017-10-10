<?php //abre um espaço para escrever código php

//inclui nesta página todo o código existente no arquivo site.php
include_once("site.php");

//inclui nesta página todo o código existente no arquivo banco.php
include_once("banco.php");

//usa a função carregarFilmes criada no arquivo banco.php
$resultadoDoBanco = carregarFilmes();
//fecha um espaço para escrever código php ?>

<!-- começo do código html -->
<!DOCTYPE html>
<html>
<head>
	<title>filmes</title>
</head>
<body>

<h1>Filmes</h1>

<!-- abre um código php no meio do html -->

<?php //abre um espaço para escrever código php

//enquanto tentar carregar uma linha do banco e existir uma linha, faz:
while ($linha = $resultadoDoBanco->fetch_assoc()) {
	//echo - escreve na página.
	//para concatenar String em php usa-se .(ponto).
	echo "<a href='filme?id=".$linha['id']."'>" . $linha['id'] . " - " . $linha['titulo'] . "</a>";
	echo "<br>";
}
?>

</body>
</html>