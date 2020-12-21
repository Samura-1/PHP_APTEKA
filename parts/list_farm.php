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
$list_pre = $connection->prepare("SELECT * FROM `type`");
$list_pre->execute();
$list_pre = $list_pre->FETCHALL(PDO::FETCH_ASSOC);
?>
<body>
<div class="wprapper-container">
	<div class="container" style="padding-top: 10px;">
		<div class="row">
			    <table class="table text-center">
				  <thead>
				    <tr>
				      <th scope="col" style="text-decoration: underline;">Название группы</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php foreach ($list_pre as $list_pre): ?>
				      <th scope="row" style="color: #8a8a8a"><?= $list_pre['name_grop'] ?></th>
				    </tr>
			        <?php endforeach ?>				    
				  </tbody>
				</table>				
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