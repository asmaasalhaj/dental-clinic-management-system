<?php 
require_once("include/initialize.php");  


 if (!isset($_SESSION['ADMIN_USERID'])){
  redirect(web_root."login.php");
 }
 
$view = (isset($_GET['q']) && $_GET['q'] != '') ? $_GET['q'] : '';
//$view ="";
switch ($view) { 
	case 'dashboard' :
        $title="لوحة التحكم";
		$content='wel.php';	
		$type='test1';	
		break;
	case 'login' : 
        $title="Login";	
		$content='login.php';	
		$type='test2';		
		break; 

	default :
	   $title="لوحة التحكم";	
		$content='wel.php';		 //dashboard.php
}
require_once("theme/templates.php");
?>