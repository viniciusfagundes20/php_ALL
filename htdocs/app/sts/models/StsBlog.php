<?php

namespace Sts\Models;

if (!defined('URL')) {
    header("Location: ./");
    extit();
}

class StsBlog{

    private $Offset;
    private $UrlPage;
    private $Limit;
    private $Resultado;
    
    public function listName($param) {

        $this->Limit = 3;

        $this->UrlPage = (int)$param;
        
        if(is_nan($this->UrlPage)){
            $this->UrlPage = 1;
        }

        $this->Offset = ($this->Limit * $this->UrlPage) - $this->Limit;

        $QUERY = "SELECT SA.id, SA.titulo, SA.descricao, SA.conteudo, SA.imagem, SA.slug, SA.description, SA.author, SA.qnt_acesso, SA.created 
            FROM sts_artigos SA
            INNER JOIN sts_tps_artigos ST ON ST.id = SA.sts_tps_artigo_id
            WHERE SA.sts_tps_artigo_id = :sts_tps_artigo_id
            AND SA.adms_sit_id = :adms_sit_id
            ORDER BY id ASC LIMIT :limit OFFSET :offset";

        $SQL = new \Sts\Models\helper\StsRead();
        $SQL->fullRead($QUERY, "sts_tps_artigo_id=1&adms_sit_id=1&limit={$this->Limit}&offset={$this->Offset}");

        $this->Resultado = $SQL->getResultado();

        return $this->Resultado;

    }

}

?>