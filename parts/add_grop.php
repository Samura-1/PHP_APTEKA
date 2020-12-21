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
<?php
$data = $_POST;
if (isset($data['do_add'])) {
$add_farm = $connection->prepare("INSERT INTO `type`(`name_grop`, `description`) VALUES (:name,:descr)");
$add_farm->bindParam(':name',htmlspecialchars($data['name_farm']));
$add_farm->bindParam(':descr',htmlspecialchars($data['description']));
$add_farm->execute();
header('Location: ../parts/add_page.php');
}
?>
  <body id="bg">
      <div class="container">
        <div class="row">
        <div class="menu-center">
          <div class="contaner">
            <div class="row">
              <div class="col-md-12 col-lg-12">
                <p class="text-center">Добавить фарм. группу</p>
              </div>
              <div class="col-lg-12 col-md-12">
                 <form enctype="multipart/form-data" action="" method="POST">
                  <div class="form-group">
                    <label for="exampleInput">Название</label>
                    <input type="text" class="form-control" id="exampleInput" name="name_farm" placeholder="Название группы" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Описание</label>
                    <textarea style="resize: none;" class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>                  
                  <button type="submit" class="btn btn-primary" name="do_add">Добавить <img src="../img/add.png" alt=""></button>
                 </form>                
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