<?php 

namespace sts\controllers;

class MarcarHorario {

    public function index() {

        $carregarView = new \Core\ConfigView("sts/views/include/marcarHorario");
        $carregarView->lite();

    }
}

 ?>