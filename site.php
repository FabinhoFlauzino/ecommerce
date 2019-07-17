<?php 

use \Hcode\Model\Products;

$app->get('/', function() {

	$products = Products::listAll();
    
	$page = new Hcode\Page();

	$page->setTpl("index", [
		'products'=>Products::checkList($products)
	]);

});


?>