<?php

namespace Sts\Controllers;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

echo '<br><br><br>';

class Blog
{

    private $UrlParameteres;
    private $Dados;
    private $size;

    public function index($urlParameteres = 1)
    {   
        $this->size = (int)3;

        $this->UrlParameteres = (int)$urlParameteres;
        $this->UrlParameteres = $this->UrlParameteres ? $this->UrlParameteres : 1;

        $this->Dados['URL'] = "Blog";

        $ListarArtigos = new \Sts\Models\StsBlog();
        $this->Dados['sts_artigos'] = $ListarArtigos->listName($this->UrlParameteres);

        $ListarDestaque = new \Sts\Models\StsListDestaque();
        $this->Dados['sts_destaque'] = $ListarDestaque->listaDados($this->size);

        $StsPaginacao = new \Sts\Models\StsPaginacao();
        $this->Dados['sts_paginacao'] = $StsPaginacao->index($this->size);

        $carregarView = new \Core\ConfigView('sts/views/include/blog', $this->Dados);
        $carregarView->renderizar(); 
    }

}
