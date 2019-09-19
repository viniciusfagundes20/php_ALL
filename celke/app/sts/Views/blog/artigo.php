<?php 


if (!defined('URL')) {
    header("Location: /");
    exit();
}

$data = $this->Dados['sts_artigos'][0];

$time = str_replace(" ", " ás ", (string)date('d-m-Y H:i', strtotime($data['created'])));

?>
<main class="sts-artigo" style="margin-top: 70px !important; position: relative;">
	<div class="container sts-artigo anim_right">
		<div class="card">
			<div class="card-header">
				<h3 class="d-inline-block"><?= $data['titulo'] ?></h3>
				<span class="float-right"><?= $data['id'] ?></span>
			</div>
			<div class="card-body">

				<img src='<?= URL."assets/imagens/artigo/".$data["id"]."/".$data["imagem"] ?>' class="img-fluid mb-2 w-100" alt='<? $data["titulo"] ?>'>

				<?= utf8_encode($data['conteudo']) ?>
			</div>
			<div class="card-footer">
				<?php 
				if(isset($this->Dados['positions']['previous'])){
					echo "<a href='".$this->Dados['positions']['previous']."' class='mr-2 btn btn-outline-primary' role='button'>Anterior</a>";
				}

				if(isset($this->Dados['positions']['next'])){
					echo "<a href='".$this->Dados['positions']['next']."' class='ml-2 btn btn-outline-primary' role='button'>Próximo</a>";
				}

				?>
				<span class="text-muted float-right">Este tópico foi criado em <?= $time ?></span>
			</div>
		</div>
	</div>
</main>