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
$list_ware = $connection->prepare("SELECT * FROM `warehouse`");
$list_ware->execute();
$list_ware = $list_ware->FETCHALL(PDO::FETCH_ASSOC);
?>
<body>
	<div class="title text-center"><h2>Cклад</h2></div>
<div class="container-fluid text-center">
	<div class="row">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Наименование</th>
      <th scope="col">Фарм.группа</th>
      <th scope="col">Количество</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach ($list_ware as $list_ware): ?>
     <tr>
      <th scope="row"><?= $list_ware['name_prep']?></th>
      <td><?= $list_ware['name_grop']?></td>
      <td><?= $list_ware['count']?></td>
    </tr> 		
  	<?php endforeach ?>
  </tbody>
</table>
  </tbody>
</table>
	</div>
</div>
<?php require_once '../parts/footer.php';?>
<?php else :?>
<?php
header('Location: ../index.php');
ob_end_flush();
?>
<?php endif;?>