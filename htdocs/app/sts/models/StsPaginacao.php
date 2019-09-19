<?php

namespace Sts\Models;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

class StsPaginacao {

    private $Limit;
    private $PagesLink;
    private $TotalLinks;
    private $Resultado;

    public function index($limit) {

        $this->Limit = (int)$limit;

        $QUERY = "SELECT COUNT(id) FROM sts_artigos";

        $SQL = new \Sts\Models\helper\StsRead();
        $SQL->fullRead($QUERY);

        $this->TotalLinks = (int)$SQL->getResultado()[0]['COUNT(id)'];

        $this->PagesLink = (int)ceil($this->TotalLinks / $this->Limit);

        $this->Resultado = "<nav aria-label='Page navigation'>
                            <ul class='pagination'>
                                <li class='page-item'><a class='page-link' href='".URL."Blog"."'>Previous</a></li>";

        for($i = 1; $i <= $this->PagesLink; $i++){

            $this->Resultado .= "<li class='page-item'><a class='page-link' href='".URL."Blog/".$i."'>".$i."</a></li>";

        }

        $this->Resultado .= "<li class='page-item'><a class='page-link' href='" . URL . "Blog/" . $this->PagesLink . "'>Next</a></li>";

        return $this->Resultado;

    }

}

?>