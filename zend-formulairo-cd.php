<?php
require('cdcol.php');
$id = null;
$titel = null;
$interpret = null;
$jahr = null;
if(isset($_GET[''])){
	if($cd = $cdcol->fetchRow('SELECT * FROM cds WHERE id='.$_GET[id])){
		$id = $cd->id;
		$titel = $cd->titel;
		$interpret = $cd->interpret;
		$jahr = $cd->jahr;
	}
	
}