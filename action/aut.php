<?php
require_once '../bd/bd.php';
if (isset($_SESSION['login'])) {
 	unset($_SESSION['login']);
	header('Location: /index.php');
}else{
	header('Location: '.$_SERVER['HTTP_REFERER']);
}
