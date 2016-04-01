<?php
require('cdcol.php');
$cds= $cdcol->fetchAll('SELECT titel, interpret FROM cds');
foreach($cds as $cd){
	print "<p> Título: $cd->titel </p>";
	print"<p>Cantor: $cd->interpret </p>";
	print "<hr>";
}