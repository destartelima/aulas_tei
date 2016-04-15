<?php
require('cdcol.php');
$id = null;
$titel = null;
$interpret = null;
$jahr = null;
if(isset($_GET['id'])){
	if($cd = $cdcol->fetchRow('SELECT * FROM cds WHERE id='.$_GET['id'])){
		$id = $cd->id;
		$titel = $cd->titel;
		$interpret = $cd->interpret;
		$jahr = $cd->jahr;
	}
	
}
$form = new Zend_Form('cd');
$form->setAction('cd-modificar.php');
$form->setMethod('POST');
//definindo campos do formulário

$element = new Zend_Form_Element_Text('id');
$element->setLabel('Id: ');
$element->setValue($id);
$element->setAttrib('readonly','readonly');
$form->addElement($element);

$element = new Zend_Form_Element_Text('titulo');
$element->setLabel('Título:');
$element->setValue($titel);
$form->addElement($element);

// criar os elementos para 'interpret' e 'jahr'
$element = new Zend_Form_Element_Text('intrepret');
$element->setLabel('Interprete:');
$element->setValue($interpret);
$form->addElement($element);

$element = new Zend_Form_Element_Text('jahr');
$element->setLabel('Ano:');
$element->setValue($jahr);
$form->addElement($element);

$element = new Zend_Form_Element_Submit('Gravar');
$form->addElement($element);
$form->setView(new Zend_View());

print $form;