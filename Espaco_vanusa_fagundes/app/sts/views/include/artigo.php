<?php 

if (!defined('URL')) {
    header("Location: /");
    exit();
}

extract($this->data['sts_artigo'][0]);

$time = str_replace(" ", " ás ", (string)date('d-m-Y H:i', strtotime($created)));

?>
<main class="sts-artigo" style="margin-top: 70px !important; position: relative;">
	<div class="container sts-artigo anim_right">
		<div class="card">
			<div class="card-header">
				<h3 class="d-inline-block"><?= $titulo ?></h3>
				<span class="float-right"><?= $id ?></span>
			</div>
			<div class="card-body">
			<?php if(!empty($imagem) && file_exists(URL."assets/img/artigo/".$id."/".$imagem)){ 
			?>
				<img src='<?= URL."assets/img/artigo/".$id."/".$imagem ?>' class="img-fluid mb-2 w-100" alt='<? $data["titulo"] ?>'>
			<?php } ?>
			<p class="lead">
				<?= $author ?> disse: 
				<?= $conteudo ?>
			</p>
			</div>
			<div class="card-footer">
				<?php 
				if(isset($this->data['previous'])){
					echo "<a href='".URL."artigo/".$this->data['previous']."' class='mr-2 btn btn-outline-primary' role='button'>Anterior</a>";
				}

				if(isset($this->data['next'])){
					echo "<a href='".URL."artigo/".$this->data['next']."' class='ml-2 btn btn-outline-primary' role='button'>Próximo</a>";
				}

				?>
				<span class="text-muted float-right">Este tópico foi criado em <?= $time ?></span>
			</div>
		</div>
	</div>
</main>
