<?php


use \Hcode\Page;

// rota
$app->get('/', function() {
    
	$page = new Page();

	$page->setTpl("index");

});


?>