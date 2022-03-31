<?php 
ini_set('display_errors', 'true');
error_reporting(1);

session_start();

define('DB', 'id18698687_user');
define('DB_USER', 'id18698687_scandiwebgigi');
define('DB_PASS', 'wxsurTgm+[X@\P5T');
define('HOMEPAGE', 'https://scandiwebgigi.000webhostapp.com/index.php');

try{
	$host = sprintf(
		'mysql:host=%s;dbname=%s;charset=utf8',
		'localhost',
		DB
	); 
	$HANDLER = new PDO($host, DB_USER, DB_PASS); 
	$HANDLER->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
	$HANDLER->exec("set names utf8"); 
}catch(PDOException $e){
	die("Sorry, Database connection problem.."); 
}

$message = "";

if(
	(isset($_POST['action_type']) && $_POST['action_type']=="add") && 
	isset($_SESSION['token']) && 
	isset($_POST['token']) && 
	$_SESSION['token']==$_POST['token'] 
){

	if(
		(isset($_POST['sku']) && $_POST['sku']!="") && 
		(isset($_POST['name']) && $_POST['name']!="") && 
		(isset($_POST['price']) && $_POST['price']!="") && 
		(isset($_POST['type']) && $_POST['type']!="")
	){
		$prep = $HANDLER->prepare("INSERT INTO `products` SET 
			`sku`=:sku, 
			`size`=:size, 
			`weight`=:weight, 
			`height`=:height, 
			`width`=:width, 
			`length`=:length, 
			`name`=:name, 
			`price`=:price, 
			`type`=:type, 
			`status`='0'
		");
	    $prep->execute(array(
	    	':sku'=>$_POST['sku'], 
	    	':size'=>(float)$_POST['size'], 
	    	':weight'=>(float)$_POST['weight'], 
	    	':height'=>(float)$_POST['height'], 
	    	':length'=>(float)$_POST['length'], 
	    	':width'=>(float)$_POST['width'], 
	    	':name'=>$_POST['name'], 
	    	':price'=>(float)$_POST['price'], 
	    	':type'=>$_POST['type']
	    ));

	    header('Location: '.HOMEPAGE);
	}else{
		$message = "<p style='red'>All fields are required!</p>";
	}
}

if(
	(isset($_POST['action_type']) && $_POST['action_type']=="delete") && 
	isset($_SESSION['token']) && 
	isset($_POST['token']) && 
	$_SESSION['token']==$_POST['token'] && 
	isset($_POST['deleteme'])
){
	$prep = $HANDLER->prepare("UPDATE `products` SET `status`='1' WHERE `id` IN(".implode(',', $_POST['deleteme']).")");
	$prep->execute();
}