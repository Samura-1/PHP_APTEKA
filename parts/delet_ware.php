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
$list_ware = $connection->prepare("SELECT * FROM `warehouse` ORDER BY `id` DESC");
$list_ware->execute();
$list_ware = $list_ware->FETCHALL(PDO::FETCH_ASSOC);
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
				  	<?php foreach ($list_ware as $list_ware): ?>
				      <th scope="row"><?= $list_ware['name_prep'] ?></th>
				      <td><a href="../action/delet_ware.php?id=<?=$list_ware['id']?>" class="link_delet">Удалить <img src="../img/trash.png" alt="delet" width="15"></a></td>
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