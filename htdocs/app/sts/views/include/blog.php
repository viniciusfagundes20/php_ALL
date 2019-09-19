<?php

if (!defined('URL')) {
  header("Location: /");
  exit();
}

?>
<main class="container-fluid mt-5 mb-5">
  <div class="row">

    <div class="col-sm-12 col-md-3 col-xm-4">

      <?php foreach ($this->data['sts_destaque'] as $key) {
        extract($key); ?>

        <div class="card mb-2 mt-4">
          <a href="<?= URL . "artigo/" . $id ?>">
            <div class="card-header">
              <h4 class="d-inline-block"><?= $titulo ?></h4>
              <span class="badge badge-pill badge-primary float-right mt-2"><?= $qnt_acesso ?></span>
            </div>
            <div class="card-body">
              <blockquote class="blockquote mb-0">
                <p><?= mb_strimwidth($descricao, 0, 30, "...") ?></p>
                <footer class="blockquote-footer"><cite title="Source Title"><?= $author ?></cite></footer>
              </blockquote>
            </div>
          </a>
        </div>
      <?php } ?>
    </div>

    <div id="topic" class="col-sm-12 col-md-9 col-xm-8">
      <div id="alert" class="alert alert-primary mt-4 mb-4 text-center">
        <div class="spinner-border" role="status">
          <span class="sr-only">Loading...</span>
        </div>
        <span class="ml-3">Carregando posts, aguarde...</span>
      </div>

      <?php
      foreach ($this->data["sts_artigos"] as $key) {
        extract($key);  ?>
        <div class="card mb-2">
          <div class="card-header">
            <h4 class="d-inline-block"><a href="<?= URL . "artigo/$id" ?>"><?= $titulo ?></a></h4>
          </div>
          <div class="card-body">
            <blockquote class="blockquote mb-0">
              <p><?= $descricao ?></p>
              <footer class="blockquote-footer">Postado em <cite title="Source Title"><?= date("d-m-Y H:i:s", strtotime($created)); ?></cite></footer>
            </blockquote>
          </div>
        </div>
      <?php } ?>
      <?= $this->data['sts_paginacao'] ?>
    </div>
  </div>

</main>
<script type="text/javascript">
  let spinner = document.getElementById("alert");

  setTimeout(() => {

    spinner.innerHTML = "Foram encontrados 3 resultados nesta página.";
    spinner.className = "alert alert-success mt-4 mb-4";

  }, 2000);
</script>