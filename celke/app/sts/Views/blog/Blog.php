<?php

$error = isset($_GET['error']) ? $_GET['error'] : 0;

if (!defined('URL')) {
    header("Location: /");
    exit();
}
?>
<main role="main">

    <div class="jumbotron blog">
        <div class="container">
            <h2 class="display-4 text-center" style="margin-bottom: 40px;">Blog</h2>
            <div class="row">
                <div class="col-md-8 blog-main">
                    <?php

                    if($error == 404){
                        echo "<div class='alert alert-danger'>Error 404! Você tentou acessar uma página que não existe.</div>";
                    }

                    if(empty($this->Dados['artigos'])){
                        echo '<div class="alert alert-danger">Error: Nenhum Artigo encontrado!</div>';
                    }else{
                        echo '<div class="alert alert-primary">Está página contém '. count($this->Dados['artigos']) . ' artigos</div>';
                    foreach ($this->Dados['artigos'] as $artigo) {
                        extract($artigo);
                        ?>
                        <div class="row featurette">
                            <div class="col-md-7 order-md-2 blog-text anim_right">
                                <a href="<?php echo URL . 'artigo/' . $slug; ?>">
                                    <h2 class="featurette-heading text-danger"><?php echo $titulo; ?></h2>
                                </a>
                                <p class="lead"><?php echo utf8_encode($descricao); ?> <a href="<?php echo URL . 'artigo/' . $slug; ?>" class="text-danger">Continuar lendo</a></p>
                            </div>
                            <div class="col-md-5 order-md-1 anim_left">
                                <a href="<?php echo URL . 'artigo/' . $slug; ?>">
                                    <img class="featurette-image img-fluid mx-auto" src="<?php echo URL . 'assets/imagens/artigo/' . $id . '/' . $imagem; ?>" alt="<?php echo $titulo; ?>">
                                </a>
                            </div>
                        </div>
                        <hr class="featurette-divider">
                        <?php
                    }
                }

                        echo $this->Dados['paginacao'];
                    ?>

                    
                </div>
                <aside class="col-md-4 blog-sidebar">
                    <div class="p-3 mb-3 bg-light rounded">
                        <?php foreach ($this->Dados['sobreAutor'] as $sobre) { extract($sobre); ?> 
                        <h4 class="font-italic"><?= $titulo ?></h4>

                        <img src="<?= URL.'assets/imagens/sobre_autor/'.$id.'/'.$img  ?>" class="img-fluid" alt="<?= $titulo ?>">

                        <p class="mb-0"><?= mb_strimwidth($descricao, 0, 100, "..."); ?></p>

                    <?php } ?>
                    </div>

                    <div class="p-3">
                        <h4 class="font-italic">Recentes</h4>
                        <ol class="list-unstyled mb-0">

                        <?php foreach ($this->Dados['ArtRecent'] as $artigoRec) {
                                
                                extract($artigoRec);

                                echo "<li><a href='". URL."artigo/".$slug ."'>$titulo</a></li>";

                        } ?>
                        </ol>
                    </div>

                    <div class="p-3">
                        <h4 class="font-italic">Destaque</h4>
                        <ol class="list-unstyled">
                        <?php foreach ($this->Dados['destaqueArt'] as $destaq) {
                                
                            extract($destaq);

                            echo "<li><a href='". URL."artigo/".$slug ."'>$titulo</a></li>";

                            } ?>
                        </ol>
                    </div>
                </aside>
            </div>
        </div>
    </div>					
</main>
