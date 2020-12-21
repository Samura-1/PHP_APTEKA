<?php
ob_start();
require_once '../bd/bd.php';
?>
<?php 
if (isset($_SESSION['login'])) :?>
<?php 
require_once '../parts/head.php';
require_once '../parts/header.php';
?>
  <body id="bg">
    <?php require_once '../parts/header.php'; ?>
      <div class="container">
        <div class="row">
        <div class="menu-center">
          <div class="contaner" style="padding-top: 30%">
            <div class="row">
              <div class="col-lg-12 col-md-12">
                <div class="button_center">
                  <a href="add_med.php">Добавить препарат <img src="../img/logo_bold/add.png" alt="search" width="35"></a>
                </div>
              </div>
              <div class="col-lg-12 col-md-12 padding">
                <div class="button_center">
                 <a href="add_grop.php">Добавить фарм. группу <img src="../img/logo_bold/list.png" alt="search" width="35"></a>
                </div>
              </div>
              <div class="col-lg-12 col-md-12 padding">
                <div class="button_center">
                 <a href="add_ware.php">Обновить склад <img src="../img/logo_bold/sklad.png" alt="search" width="35"></a>
                </div>
              </div>                            
            </div>
          </div>
        </div>            
        </div>
      </div>
<?php require_once '../parts/footer.php';?>
<?php else :?>
<?php
header('Location: ../index.php');
ob_end_flush();
?>
<?php endif;?>