<?php 
/**
 * Siempre se debe invocar antes al modelo que a la vista
 */
require('../config/conexio.php');
require_once('../model/Element.php');
$id=$_GET['id'];
$elements=new Element();
$row=$elements->get_element($id);


require('../views/veureElement.php');
?>