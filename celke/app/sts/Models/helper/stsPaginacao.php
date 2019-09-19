<?php

namespace Sts\Models\helper;

if (!defined('URL')) {
    header("Location: /");
    exit();
}


class StsPaginacao
{

    private $Link;
    private $MaxLinks;
    private $Pagina;
    private $LimiteResultado;
    private $Offset;
    private $query;
    private $parseString;
    private $resultadoDB;
    private $Resultado;
    private $totalPaginas;

    public function getResultado(){
        return $this->Resultado;
    }

    public function getOffset(){
        return $this->Offset;
    }

    public function __construct($Link)
    {
        $this->Link = $Link;
        $this->MaxLinks = 3;
    }

    public function condicao($Pagina, $LimitResultado)
    {
        $this->Pagina = (int) $Pagina ? $Pagina : 1;
        $this->LimiteResultado = (int) $LimitResultado;
        $this->Offset = ($this->Pagina * $this->LimiteResultado) - $this->LimiteResultado;
    }

    public function paginacao($query, $parseString = null) {

        $this->query = (string) $query;
        $this->parseString = (string) $parseString;

        $contar = new \Sts\Models\helper\stsRead();
        $contar->fullRead($this->query, $this->parseString);
        $this->resultadoDB = $contar->getResultado();

        if($this->resultadoDB[0]['num_result'] > $this->LimiteResultado) {

            $this->resultadoDB = $this->resultadoDB[0]['num_result'];

            $this->instrucaoPaginacao();

        } else {

            $this->resultado = null;

        }

    }


    private function instrucaoPaginacao() {

        $this->totalPaginas = ceil($this->resultadoDB / $this->LimiteResultado);
        
        if($this->totalPaginas >= $this->Pagina){
            $this->layoutPagination();
        }else{
            header("Location: {$this->Link}");
        }

    }

    private function layoutPagination() {


        $this->Resultado = "<nav aria-label='paginacao'>";
        $this->Resultado .= "<ul class='pagination justify-content-center'>";
        $this->Resultado .= "<li class='page-item'>";
        $this->Resultado .= "<a class='page-link' href=\"{$this->Link}\" tabindex='-1'>First</a>";
        $this->Resultado .= "</li>";

        $control = (int) $this->Pagina + $this->MaxLinks;

       for($i = $this->Pagina - $this->MaxLinks; $i <= $this->Pagina; $i++ ) {
            if($i > 1 && $i != $this->Pagina){
                $this->Resultado .= "<li class='page-item'><a class='page-link'  href='{$this->Link}?pg={$i}'>$i</a></li>";
            }
        }       

        for($c = $this->Pagina; $c <= $control; $c++) {
            if($c > $this->totalPaginas) break;
            $this->Resultado .= "<li class='page-item'><a class='page-link' href='{$this->Link}?pg={$c}'>$c</a></li>";
        }
          
        $this->Resultado .= "<li class='page-item'>";
        $this->Resultado .= "<a class='page-link' href='{$this->Link}?pg={$this->totalPaginas}'>Last</a>";
        $this->Resultado .= "</li>";
        $this->Resultado .= "</ul>";
        $this->Resultado .= "</nav>";

    }

}
