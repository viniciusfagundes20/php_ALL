<?php

namespace App\sts\Controllers;

if (!defined('URL')) {
    header("Location: /");
    exit();
}


class SobreEmpresa
{

    private $Dados;

    public function index()
    {
        $listar_menu = new \Sts\Models\stsMenu();
        $this->Dados['menu'] = $listar_menu->listName();

        $listarSobEmp = new \Sts\Models\StsSobEmp();
        $this->Dados['sts_sobs_emps'] = $listarSobEmp->listarSobEmp();

        $this->Dados['url'] = "SobreEmpresa";
        
        $carregarView = new \Core\ConfigView('sts/Views/sobEmp/sobEmp', $this->Dados);
        $carregarView->renderizar();
    }

}
