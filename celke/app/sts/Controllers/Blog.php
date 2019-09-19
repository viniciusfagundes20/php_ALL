<?php

namespace App\sts\Controllers;

if (!defined('URL')) {
    header("Location: /");
    exit();
}


class Blog
{

    private $Dados;
    private $PageId;

    public function index()
    {
        $this->PageId = filter_input(INPUT_GET, 'pg', FILTER_SANITIZE_NUMBER_INT);
        $this->PageId = $this->PageId ? $this->PageId : 1;

        $listar_menu = new \Sts\Models\stsMenu();
        $this->Dados['menu'] = $listar_menu->listName();

        $listarArtigos = new \Sts\Models\StsBlog();
        $this->Dados['artigos'] = $listarArtigos->listarArtigos($this->PageId);
        $this->Dados['paginacao'] = $listarArtigos->getResultadoPG();

        $listarArtRecent = new \Sts\Models\StsArtRecent();
        $this->Dados['ArtRecent'] = $listarArtRecent->listarArtRecent();

        $this->Dados['url'] = "Blog";

        $destaque = new \Sts\Models\stsArtDestaque();
        $this->Dados['destaqueArt'] = $destaque->index();

        $sobreAutor = new \Sts\Models\stsSobreAutor();
        $this->Dados['sobreAutor'] = $sobreAutor->index();

        $carregarView = new \Core\ConfigView('sts/Views/blog/blog', $this->Dados);
        $carregarView->renderizar();
    }

}
