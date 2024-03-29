<?php

namespace Core;


class ConfigController
{
    

    private $Url;
    private $UrlConjunto;
    private $UrlController;
    private $UrlParametro;
    private $Paginas;
    private static $Format;

    public function __construct()
    {
        if (!empty(filter_input(INPUT_GET, 'url', FILTER_DEFAULT))) {
            $this->Url = filter_input(INPUT_GET, 'url', FILTER_DEFAULT);
            $this->limparUrl();
            $this->UrlConjunto = explode("/", $this->Url);

            if (isset($this->UrlConjunto[0])) {
                $this->UrlController = $this->slugController($this->UrlConjunto[0]);
            } else {
                $this->UrlController = CONTROLER;
            }

            if (isset($this->UrlConjunto[1])) {
                $this->UrlParametro = $this->UrlConjunto[1];
            } else {
                $this->UrlParametro = null;
            }
            //echo "URL: {$this->Url} <br>";
            //echo "Controlle: {$this->UrlController} <br>";
        } else {
            $this->UrlController = CONTROLER;
            $this->UrlParametro = null;
        }
    }

    private function limparUrl()
    {
        //Eliminar as tags
        $this->Url = strip_tags($this->Url);
        //Eliminar espaços em branco
        $this->Url = trim($this->Url);
        //Eliminar a barra no final da URL
        $this->Url = rtrim($this->Url, "/");

        self::$Format = array();
        self::$Format['a'] = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜüÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿRr"!@#$%&*()_-+={[}]?;:.,\\\'<>°ºª ';
        self::$Format['b'] = 'aaaaaaaceeeeiiiidnoooooouuuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr--------------------------------';
        $this->Url = strtr(utf8_decode($this->Url), utf8_decode(self::$Format['a']), self::$Format['b']);
    }

    public function slugController($SlugController)
    {
        //$UrlController = strtolower($SlugController);
        //$UrlController = explode("-", $UrlController);
        //$UrlController = implode(" ", $UrlController);
        //$UrlController = ucwords($UrlController);
        //$UrlController = str_replace(" ", "", $UrlController);
        $UrlController = str_replace(" ", "", ucwords(implode(" ", explode("-", strtolower($SlugController)))));
        return $UrlController;
    }
    
    public function carregar()
    {

        $obj = new \Sts\Models\stsPaginas();
        $this->Paginas = $obj->index($this->UrlController);

    if(!empty($this->Paginas)){

        extract($this->Paginas[0]);

        $this->Classe = "\\App\\{$tipo}\\Controllers\\" . $this->UrlController;

        if(class_exists($this->Classe)){
           
            $this->methodLoad();
        
        } else {

          $this->UrlController = $this->SlugController(CONTROLER);
          $this->carregar();

        }

    } else {

        $this->UrlController = $this->SlugController(CONTROLER);
        $this->carregar();

        }
    }


    public function methodLoad() {


        $classeCarregar = new $this->Classe;

        if(method_exists($classeCarregar, "index")){

            if($this->UrlParametro !== null) {

                $classeCarregar->index($this->UrlParametro);

            } else {

               $classeCarregar->index(); 

            }

        } else {

            $this->UrlController = $this->SlugController(CONTROLER);
            $this->carregar();
            
        }

    }

}
