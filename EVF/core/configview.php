<?php

namespace Core;

class configView
{

    private $Nome;
    private $Dados;

    public function __construct($Nome, array $Dados = null)
    {
        $this->Nome = (string)$Nome;
        $this->Dados = $Dados;
    }

    public function renderizar()
    {
        if (file_exists('app/' . $this->Nome . '.php')) {
            include 'app/sts/Views/include/cabecalho.php';
            include 'app/sts/Views/include/menu.php';
            include 'app/' . $this->Nome . '.php';
            include 'app/sts/Views/include/rodape.php';
        }else{
            echo "Erro ao carregar a Página: {$this->Nome}";
        }
    }

    public function lite(){

        $fileName = 'app/' . $this->Nome . '.php';

        if(file_exists($fileName)){
            include $fileName;
        }

    }

}

?>