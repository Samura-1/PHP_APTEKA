<?php
ob_start();
require_once '../bd/bd.php';
if (isset($_SESSION['login'])){
if (isset($_GET['id'])) {
$destroy = $connection->prepare("DELETE FROM `warehouse` WHERE `id`=:id");
$destroy->bindParam(':id',htmlspecialchars($_GET['id']));
$destroy->execute();
header('Location: ../parts/delet_ware.php');
}
}else{
header('Location: ../index.php');
ob_end_flush();
}
