<?php
ob_start();
require_once '../bd/bd.php';
?>
<?php 
if (isset($_SESSION['login'])):?>
<?php
require_once '../bd/bd.php';
require_once '../parts/head.php';
require_once '../parts/header.php';
$farm = $connection->prepare("SELECT `name_grop` FROM `type`");
$farm ->execute();
$farm = $farm->FETCHALL(PDO::FETCH_ASSOC);
$provider = $connection->prepare("SELECT `name` FROM `provider`");
$provider->execute();
$provider = $provider->FETCHALL(PDO::FETCH_ASSOC);
$data = $_POST;
$search = $_POST['search'];
if (isset($data['do_search'])) {
  if ($data['provider'] != '') {
    $search = $connection->prepare("SELECT * FROM `medicines` WHERE `provider` LIKE :search");
    $search->bindParam(':search',htmlspecialchars($data['provider']));
    $search->execute();
    $search = $search->FETCHALL(PDO::FETCH_ASSOC);
  }
    if ($data['farm'] != '') {
    $search = $connection->prepare("SELECT * FROM `medicines` WHERE `id_gr` LIKE :search");
    $search->bindParam(':search',htmlspecialchars($data['farm']));
    $search->execute();
    $search = $search->FETCHALL(PDO::FETCH_ASSOC);
  }
    if ($data['search'] != '') {
    $d = $_POST['search'];
    $search = $connection->prepare("SELECT * FROM `medicines` WHERE `name` OR `provider` LIKE :serch");
    $search->bindValue(':serch','%'.$d.'%');
    $search->execute();
    $search = $search->FETCHALL(PDO::FETCH_ASSOC);
  }
}
?>
<body>
	<div class="title text-center"><h2>Поиск</h2></div>
<div class="container text-center">
	<div class="row">
    <div class="col-md-12 col-sx-12 col-lg-12 text-center wrapper_form">
          <form action="search.php" method="POST">
            <input class="form-control" type="text" name="search" value="<?= @$_POST['search']?>" required> 
            <br>
               <button type="submit" class="btn btn-primary" name="do_search">Поиск <img src="../img/add.png" alt=""></button>       
          </form>     
          <hr>
    </div>
    <div class="col-md-12">
          <form action="search.php" method="POST">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Поставщик</label>
            <select class="form-control" id="exampleFormControlSelect1" name="provider" required>
              <option><?= $data['provider']?></option>                
              <?php foreach ($provider as $provider): ?>
                <option><?= $provider['name'];?></option>
              <?php endforeach ?>
            </select>
          </div>  
          <button type="submit" class="btn btn-primary" name="do_search">Поиск <img src="../img/add.png" alt=""></button>  
          <hr>           
        </form>        
    </div>
    <div class="col-md-12">
          <form action="search.php" method="POST">
            <div class="form-group">
              <label for="exampleFormControlSelect1">Фарм. группа</label>
              <select class="form-control" id="exampleFormControlSelect1" name="farm" required>
                <option><?= $data['farm']?></option>
                <?php foreach ($farm as $farm): ?>
                  <option><?= $farm['name_grop'];?></option>
                <?php endforeach ?>
              </select>
              <br>
               <button type="submit" class="btn btn-primary" name="do_search">Поиск <img src="../img/add.png" alt=""></button>
            </div>        
          </form>       
    </div>
	</div>
</div>
<hr>
<div class="conainer text-center">
  <div class="row">
    <?php if (isset($search)): ?>
     <?php foreach ($search as $search): ?>
    <div class="col-md-4">
      <img src="<?= $search['photo']?>" alt="" width="100">
      <p><?= $search['name']?></p>
      <p><?= $search['provider']?></p>
    </div>     
    <?php endforeach ?>          
    <?php endif ?>      
  </div>    
</div>
<?php require_once '../parts/footer.php';?>
<?php else :?>
<?php
header('Location: ../index.php');
ob_end_flush();
?>
<?php endif;?>