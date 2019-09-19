<?php 

namespace Sts\Models;

class stsMenu {

    private $resultado;

    public function ListName() {

        $query = "SELECT id, controller, nomePagina FROM sts_paginas
            WHERE lib_bloq = :lib_bloq
            AND sts_situacao_pg_id = :sts_situacao_pg_id
            ORDER BY ordem ASC";

        $object = new \Sts\Models\helper\StsRead();
        $object->fullRead($query, "lib_bloq=1&sts_situacao_pg_id=1");

        $this->resultado = $object->getResultado();

        return $this->resultado;

    }


}

?>