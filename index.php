<?php
ob_start();
require_once 'bd/bd.php';
$data = $_POST;
if (isset($data['btn_aut'])) {
if (isset($_SESSION['login'])) {
 	unset($_SESSION['login']);
	header('Location: '.$_SERVER['HTTP_REFERER']);
}
else{	
	$errors = array();
	$check_user = $connection->prepare("SELECT * FROM `user` WHERE `login` = :login");
	$check_user->bindParam(':login',htmlspecialchars($data['login']));
	$check_user->execute();
	$count = $check_user->rowCount();
	$check_user = $check_user ->FETCHALL(PDO::FETCH_ASSOC);
	if ($count > 0) {
		if ($check_user[0]['password'] == $data['password']) {
		
		}else{
			$errors[] = 'Пароль неверный!';
		}
	}else{
		$errors[] = 'Такой пользователь не найден!';
	}
	if (empty($errors)) {
		$_SESSION['login'] = $check_user;
		header('Location: section.php');
	}
}
}
?>
<?php if (isset($_SESSION['login'])) :?>
  <?php header('Location: section.php'); ?>
  <?php else : ?>
<?php require_once 'parts/head.php';?>
  <body id="bg">
     <div class="wrapper-aut">
     	<div class="container">
     		<div class="row">
				 <form action="" method="POST" class="login-form">
				        <h1>Авторизация</h1>
                         <p style="color: red; font-weight: initial;"><?php echo @array_shift($errors); ?></p>
				        <div class="txtb">
				          <input type="text" name="login" value="<?php echo @$data['login'] ?>" required>
				          <span data-placeholder="Логин"></span>
				        </div>

				        <div class="txtb">
				          <input type="password" name="password" required>
				          <span data-placeholder="Пароль"></span>
				        </div>

				        <input type="submit" class="logbtn" name="btn_aut" value="Войти">
				 </form>    					
     		</div>
     	</div>
     </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
      <script type="text/javascript">
      $(".txtb input").on("focus",function(){
        $(this).addClass("focus");
      });

      $(".txtb input").on("blur",function(){
        if($(this).val() == "")
        $(this).removeClass("focus");
      });
      </script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
<? endif; ?>
<?php ob_end_flush();?>