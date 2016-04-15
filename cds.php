<?php
require('cdcol.php');
/*$cds= $cdcol->fetchAll('SELECT titel, interpret FROM cds');
foreach($cds as $cd){
	print "<p> Título: $cd->titel </p>";
	print"<p>Cantor: $cd->interpret </p>";
	print "<hr>"; 

}*/
$cds = $cdcol->fetchAll('Select * From cds');
foreach($cds as $cd){
	print "<p> $cd->titel($cd-interpret) - Ações:
	<a href=\"zend-formulario-cd.php?id=$cd-id\">editar</a> |excluir </p>";
}