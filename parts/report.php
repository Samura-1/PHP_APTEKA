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
?>
<?php 
$sum_prep = $connection->prepare("SELECT SUM(count) AS count_prep FROM `medicines`");
$sum_prep->execute();

$sele_all = $connection->prepare("SELECT `id_gr`, SUM(count) AS count_prep2 FROM `medicines` Group By id_gr");
$sele_all->execute();

$count_user = $connection->prepare("SELECT `id` FROM `user`");
$count_user->execute();
$count = $count_user->rowCount();

$count_provider = $connection->prepare("SELECT `provider`, COUNT(provider) AS `provider_count` FROM `medicines` GROUP BY `provider`");
$count_provider->execute();

$count_price_all = $connection->prepare("SELECT SUM(price) as price_all FROM `medicines`");
$count_price_all->execute();

$count_price = $connection->prepare("SELECT id_gr, SUM(price) as price_count FROM medicines GROUP BY id_gr");
$count_price->execute();

$sum_ware = $connection->prepare("SELECT SUM(count) AS count_ware FROM `warehouse`");
$sum_ware->execute();

$sele_ware = $connection->prepare("SELECT `name_grop`, SUM(count) AS count_ware2 FROM `warehouse` Group By name_grop");
$sele_ware->execute();
?>
<div class="wprapper-container" style="padding-top: 2%">
	<div class="container">
		<div class="row">			
		</div>
			<table class="table">
			  <thead class="thead-dark">
			    <tr>
			      <th scope="col">Отчет</th>
			      <th scope="col">Данные</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <td>Колличество препаратов</td>
			      <?php foreach ($sum_prep as $sum_prep): ?>
			           <td><?= $sum_prep['count_prep'];?> упаковок</td>
			      <?php endforeach ?>
			    </tr>
			    <tr>
			    	<?php foreach ($sele_all as $sele_all): ?>
			    		<tr>
			    		<td><?= $sele_all['id_gr']?></td>
			    		<td><?= $sele_all['count_prep2']?> упаковок</td>
			    		</tr>
			    	<?php endforeach ?>
			    </tr>
			    <tr>
		    		<td>Сумма стоимости препаратов</td>
		    		 <?php foreach ($count_price_all as $count_price_all): ?>
		    			<td><?= $count_price_all['price_all']?> .&#8381;</td>
		    		 <?php endforeach ?>
			    </tr>
			    <tr>
			    	<?php foreach ($count_price as $count_price): ?>
			    		<tr>
			    		<td><?= $count_price['id_gr']?></td>
			    		<td><?= $count_price['price_count']?> .&#8381;</td>
			    		</tr>
			    	<?php endforeach ?>			    	
			    </tr>
			    <tr>
			    	<tr>
			    		<td>Колличество сотрудников</td>
			    		<td><?= $count?></td>
			    	</tr>
			    </tr>
			    <tr>
			    	    <th>Количество Поставок(компании)</th>
			    	    <th class="text-center"></th>
			    		<?php foreach ($count_provider as $count_provider): ?>
			    		<tr>
				    	    <td><?= $count_provider['provider']?></td>
				    		<td><?= $count_provider['provider_count']?></td>			    			
			    		</tr>
			    		<?php endforeach ?>
			    </tr>
			    <tr>
			    	   <th>Отчет Скад</th>
			    	    <th class="text-center"></th>
			    		<tr>
			            <td>Колличество препаратов</td>
				         <?php foreach ($sum_ware as $sum_ware): ?>
				           <td><?= $sum_ware['count_ware'];?> упаковок</td>
				         <?php endforeach ?>
			           </tr>
			    	   </tr>
			    </tr>
			    <tr>
			    	<?php foreach ($sele_ware as $sele_ware): ?>
			    		<tr>
			    		<td><?= $sele_ware['name_grop']?></td>
			    		<td><?= $sele_ware['count_ware2']?> упаковок</td>
			    		</tr>
			    	<?php endforeach ?>
			    </tr>			    				    			    
			  </tbody>
			 </table>
			</table>		
	</div>
	<div class="container-fluid text-center">
		<div class="row">
			<div class="col-md-12 col-lg-12 col-xs-12">
				<div class="sceme_bd">
					<h2>Схема Базы даных</h2>
					<img src="../img/sceme.jpg" alt="схема_базы_данных">
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