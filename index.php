<?php
//phpinfo();
/**
 * Portia Nomsa Mnguni
 * Switch Telecoms dev Test
 */
require 'ProductInstance.php';
require 'Product.php';
require 'Line.php';
require 'Trunk.php';

//$newFee = ProductInstance::createProduct('Line');
$newFee = ProductInstance::createProduct('Trunk');
echo '<br/><div> Increased Fee: '.$newFee.'</div>';