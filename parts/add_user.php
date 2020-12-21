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
$erorros = array();
$check_user = $connection->prepare("SELECT * FROM `user` WHERE `login` = :login");
$check_user->bindParam(':login',htmlspecialchars($data['login']));
$check_user->execute();
$count = $check_user->rowcount();
if ($count > 0) {
  $erorros[] = 'Такой логин уже занят';
}else{
$add_user = $connection->prepare("INSERT INTO `user`(`login`, `password`,`name`, `second_name`, `position`) VALUES (:login,:password,:name,:second_name,:position)");
$add_user->bindParam(':login',htmlspecialchars($data['login']));
$add_user->bindParam(':password',htmlspecialchars($data['password']));
$add_user->bindParam(':name',htmlspecialchars($data['name']));
$add_user->bindParam(':second_name',htmlspecialchars($data['second_name']));
$add_user->bindParam(':position',htmlspecialchars($data['pos']));
$add_user->execute();
header('Location: ../parts/add_page.php');
}
}
?>
  <body id="bg">
      <div class="container">
        <div class="row">
        <div class="menu-center" style="height: 640px;">
          <div class="contaner">
            <div class="row">
              <div class="col-md-12 col-lg-12">
                <p class="text-center">Регистрация сотрудники</p>
              </div>
              <div class="col-lg-12 col-md-12">
                 <form enctype="multipart/form-data" action="" method="POST">
                  <p style="color: red; font-weight: initial;"><?php echo @array_shift($erorros); ?></p>
                  <div class="form-group">
                    <label for="exampleInput">Имя</label>
                    <input type="text" class="form-control" id="exampleInput" name="name" placeholder="Имя" value="<?php echo @$data['name'] ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInput1">Фамилия</label>
                    <input type="text" class="form-control" id="exampleInput1" name="second_name" placeholder="Фамилия" value="<?php echo @$data['second_name'] ?>" required>
                  </div> 
                  <div class="form-group">
                    <label for="exampleInput4">Должность</label>
                    <input type="text" class="form-control" id="exampleInput4" name="pos" placeholder="Должность" required value="<?php echo @$data['pos'] ?>">
                  </div>                    
                  <div class="form-group">
                    <label for="exampleInput2">Логин</label>
                    <input type="text" class="form-control" id="exampleInput2" name="login" placeholder="Логин" required value="<?php echo @$data['login'] ?>">
                  </div>     
                  <div class="form-group">
                    <label for="exampleInput3">Пароль</label>
                    <input type="password" class="form-control" id="exampleInput3" name="password" placeholder="Пароль" required>
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