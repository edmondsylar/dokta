<?php
	$_SESSION['cart'] = array();

	if(!empty($_GET['action'])){
		$action = $_GET['action'];
		switch($action){
			case 'add':
				$b=array("product"=>"data","quantity"=>'alot');
				array_push($_SESSION['cart'], $b);
				return header("Location: ../results.php?search=#0");
			break;

		}
	}


?>