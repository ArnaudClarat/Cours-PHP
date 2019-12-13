<?php
	require_once('classes/SmartyLoader.php');
	
	$smarty = new SmartyLoader();
	
	$smarty->assign(array(
		'name' => 'Arnaud',
		'sexe' => 'M',
	));
	
	$smarty->getHeader("Mon titre");
	$smarty->display('index.tpl');
	$smarty->getFooter();
