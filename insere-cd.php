<?php
require('cdcol.php');
$cd = array('titel'=> $_POST('titulo'),'interpret'=> $_POST('interprete'),'jahr'=>$_POST('ano'));

if($cdcol->insert('cds', $cd)){
	print "<p> Registro Inserido </p>";
	print "<p><a href=\"cds.php\">Listar</a></p>";
}