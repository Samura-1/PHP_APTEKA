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
$list_pre = $connection->prepare("SELECT * FROM `medicines`");
$list_pre->execute();
$list_pre = $list_pre->FETCHALL(PDO::FETCH_ASSOC);
?>
<body>
<div class="container-fluid text-center" style="padding-top: 3%">
	<div class="row">
		<?php foreach ($list_pre as $list) : ?>
		<div class="col-md-3 col-sm-3">
			<div class="item">
				<p><img src="<?= $list['photo']?>" alt="<?= $list['name']?>" class="img_product"></p>
				<p class="name"><?= $list['name']?></p>
				<p class="farm_group"><?= $list['id_gr']?></p>
				<p><?= $list['price']?>.р</p>
				<p><?= $list['count']?>.упак</p>
			</div>
		</div>
	    <?php endforeach; ?>
	</div>
</div>
<?php require_once '../parts/footer.php';?>
<?php else :?>
<?php
header('Location: ../index.php');
ob_end_flush();
?>
<?php endif;?>