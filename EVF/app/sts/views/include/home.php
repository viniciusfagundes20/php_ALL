<?php
if (!defined('URL')) {
    header("Location: /");
    exit();
}

$obj = new sql();
$carousel = $obj->select("SELECT * FROM sts_carousel ORDER BY id DESC LIMIT 5");

$i = 0;

?>
<div class="bg-dark">
<div id="carousel" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
	<?php foreach ($carousel as $key => $value) {  ?>
	 	<li data-target="#carousel" data-slide-to="<?= $i ?>" <?php if($i == 0) echo 'class="active"'; ?>></li>
	<?php $i++; } $i = 0; ?>
   </ol>
    
  <div class="carousel-inner">
    
   <?php foreach ($carousel as $key => $value) { ?>

    <div class="carousel-item anim_bottom <?php if($i == 0) echo 'active'; ?>">
      <img class="d-block w-100 carousel-img" src="<?= URL . 'assets/img/carousel/' . $value['img'] ?>" alt="<?= $value['alt'] ?>">
    </div>
   
<?php $i++; } ?>

  </div>
  <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Próximo</span>
  </a>
</div>
</div>
<div class="ATXSW56"></div>

<section class="est">

<div class="container-fluid">
	<div class="row">

		<div class="col-md-4 col-sm-6 col-xs-3 mb-3 anim_bottom">
			<?php $est = $obj->select("SELECT * FROM sts_est LIMIT 1"); ?>
			<div class="card card-personalizado">
				<div class="card-header">
					<i class="fa fa-fw fa-archive"></i>Espaço Vanusa Fagundes estética e bem estar	
				</div>

				<div class="card-body">
				<p class="lead border-bottom mb-2">Telefone: <?= utf8_encode($est[0]["telefone"]) ?>.</p>
				<p>Endereço: <?= utf8_encode($est[0]["endereco"]) ?>.</p>
				<p>Avaliações: 5</p>

				<p class="text-successy">
					Funcionamento: <?php
						$dayWeek = strftime('%A');

						echo utf8_encode(ucfirst($dayWeek)) . ",  13 ás 17 ";

						$funcionamento = date('H:i:s', strtotime('-3 hours'));

						if($funcionamento >= date('H:i:s', strtotime('7:00:00')) && $funcionamento >= date('H:i:s', strtotime('00:00:00'))) {
							echo '<span class="text-danger">(Fechado agora).</span>';
						}else{
							echo '<span class="text-success">(Aberto agora).</span>';
						}
					?>
				</p>
				</div>
			</div>
			
			
		</div>

		<?php 
		$card = $obj->select("SELECT * FROM sts_cards"); 

		foreach ($card as $key => $value) { ?>
		<div class="col-md-4 col-sm-6 col-xs-3 mb-3 anim_bottom">
			<div class="card">
			<div class="card-header">
				<i class="fa fa-fw fa-fire"></i>
				<?= utf8_encode($value['titulo']) ?>

			</div>

			<div class="card-body">
				
				<?= utf8_encode($value['descricao']) ?>

			<span class="text-muted float-left"><?= "Promoção expira em " . date("d/m/Y", strtotime($value['expired'])) ?></span>

			</div>
			</div>
		</div>
		<?php } ?>

	</div>
</div>

</section>