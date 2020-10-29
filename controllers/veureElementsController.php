<?php 
/**
 * Siempre se debe invocar antes al modelo que a la vista
 */
require('../config/conexio.php');
require_once('../model/Element.php');
$elements = new Element();
$elem=$elements->get_elements();

require('../views/veureElements.php');
?>