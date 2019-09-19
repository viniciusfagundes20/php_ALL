<?php 

namespace sts\Views\services;

$story = new \sts\Models\connection();

$SQL = "SELECT * FROM timeline";

$exec = $story->GetConn()->prepare($SQL);

$exec->execute();

$row = $exec->fetchAll();

$story->closeConn();

?>

<div class="container mt-5 tw526">
<?php foreach ($row as $key => $value) { ?>
	<div class="card mb-2" data-key-code="<?= $value['code'] ?>">

	<div class="card-header">
		<a href="#" class="link">@<?= $value['user'] ?></a>	
		<span class="hkt-89" style="display: inline-block; position: relative; float: right;">
			
			<?php 
				$datafied = isset($value['modified']) ? $datafied : $value['dataTime'];
				$datafied = strtotime($datafied);

				$dataTime = date('d/m/Y H:i', $datafied);

				echo $dataTime;
			?>

		</span>
	</div>

	<?php if(!empty($value['img'])) { ?>

		<img src="<?= URL . 'assents/users/' . $value['user'] . '/' . $value['img'] ?>" class="card-img-top img-fluid YK3TP" alt="<?= $value['code'] ?>">

	<?php } ?>

	<div class="card-footer">
		<p class="HKM-25">
			<a href="#">@<?= utf8_encode($value['user']) ?></a>
			<span><?= utf8_encode($value['dataText']) ?></span>
			<i class="fa fa-fw fa-lg fa-heart kt2pm" data-key="tw226"></i>		
    		<span class="badge badge-pill badge-primary LSZ59">Curtido por 56 pessoas</span>

		</p>
	</div>

	</div>
<?php } ?>
</div>