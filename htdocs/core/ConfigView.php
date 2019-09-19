<?php

namespace Core;

class ConfigView
{

    private $Nome;
    private $data;

    public function __construct($Nome, array $Dados = null)
    {
        $this->Nome = (string) $Nome;
        $this->data = $Dados;
    }


    public function renderizar()
    {

        if (file_exists('app/' . $this->Nome . '.php')) {
            include 'app/sts/views/include/cabecalho.php';
            include 'app/sts/views/include/menu.php';
            include 'app/' . $this->Nome . '.php';
            include 'app/sts/views/include/rodape.php';
        }else{
            echo "Erro ao carregar a Página: {$this->Nome}";
        }
    }

    public function lite() {

        if (file_exists('app/' . $this->Nome . '.php')) {
            include 'app/' . $this->Nome . '.php';
        }else{
            echo "Erro ao carregar a Página: {$this->Nome}";
        }

    }

    public function header() {

       if (file_exists('app/' . $this->Nome . '.php')) {
        include 'app/sts/views/include/cabecalho.php';
            include 'app/' . $this->Nome . '.php';
        }else{
            echo "Erro ao carregar a Página: {$this->Nome}";
        } 

    }

}
