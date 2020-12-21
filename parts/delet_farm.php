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
$list_pre = $connection->prepare("SELECT * FROM `type` ORDER BY `id` DESC");
$list_pre->execute();
$list_pre = $list_pre->FETCHALL(PDO::FETCH_ASSOC);
?>
<div class="wprapper-container">
	<div class="container">
		<div class="row">
			    <table class="table">
				  <thead>
				    <tr>
				      <th scope="col">Название препарата</th>
				      <th scope="col">Действие</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php foreach ($list_pre as $list_pre): ?>
				      <th scope="row"><?= $list_pre['name_grop'] ?></th>
				      <td><a href="../action/delet_farm.php?id=<?=$list_pre['id']?>" class="link_delet">Удалить <img src="../img/trash.png" alt="delet" width="15"></a></td>
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