<?php
ob_start();
require_once 'bd/bd.php';
?>
<?php 
if (isset($_SESSION['login'])) :?>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Курсовая работа</title>
  </head>
  <body id="bg">
    <?php require_once 'parts/header.php'; ?>
      <div class="container">
        <div class="row">
        <div class="menu-center">
          <div class="contaner" style="padding-top: 30%">
            <div class="row">
              <div class="col-lg-12 col-md-12">
                <div class="button_center">
                  <a href="parts/search.php">Поиск препаратов <img src="img/logo_bold/search.png" alt="search" width="35"></a>
                </div>
              </div>
              <div class="col-lg-12 col-md-12 padding">
                <div class="button_center">
                 <a href="parts/list.php">Список препаратов <img src="img/logo_bold/list.png" alt="search" width="35"></a>
                </div>
              </div>
              <div class="col-lg-12 col-md-12 padding">
                <div class="button_center">
                 <a href="parts/list_ware.php">Посмотреть Склад <img src="img/logo_bold/sklad.png" alt="search" width="35"></a>
                </div>
              </div>                            
            </div>
          </div>
        </div>            
        </div>
      </div>
<?php require_once 'parts/footer.php';?>
<?php else :?>
<?php
header('Location: index.php');
ob_end_flush();
?>
<?php endif;?>