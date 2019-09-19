<?php

namespace Sts\Controllers;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

class Blog
{

    private $Dados;
    private $PageId;

    public function index($numberID = 1)
    {
        
        $this->PageId = $numberID;
        $this->PageId = $this->PageId ? $this->PageId : 1;

        $listar_art = new \Sts\Models\StsBlog();
        $this->Dados['artigos'] = $listar_art->listarArtigos($this->PageId);
        $this->Dados['paginacao'] = $listar_art->getResultadoPg();

        /*$listarArtRecente = new \Sts\Models\StsArtRecente();
        $this->Dados['artRecente'] = $listarArtRecente->listarArtRecente();

        $listarArtDestaque = new \Sts\Models\StsArtDestaque();
        $this->Dados['artDestaque'] = $listarArtDestaque->listarArtDestaque();

        $visSobreAutor = new \Sts\Models\StsSobreAutor();
        $this->Dados['sobreAutor'] = $visSobreAutor->sobreAutor(); */

        $carregarView = new \Core\ConfigView('sts/views/include/blog', $this->Dados);
        $carregarView->renderizar();
    }

}
