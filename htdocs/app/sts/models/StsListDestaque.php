<?php

namespace Sts\Models;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

class StsListDestaque{

    private $Limit;
    private $Resultado;

    public function listaDados($limit){

        $this->Limit = $limit;

        $QUERY = "SELECT SA.id, SA.titulo, SA.descricao, SA.conteudo, SA.imagem, SA.slug, SA.description, SA.author, SA.qnt_acesso, SA.created
        FROM sts_artigos SA
        ORDER BY sa.qnt_acesso DESC LIMIT :limit";

        $SQL = new \Sts\Models\helper\StsRead();
        $SQL->fullRead($QUERY, "limit={$this->Limit}");

        $this->Resultado = $SQL->getResultado();

        return $this->Resultado;

    }


}

?>