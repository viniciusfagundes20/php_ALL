<?php

namespace Core;

/**
 * Description of ConfigController
 *
 * @copyright (c) year, Cesar Szpak - Celke
 */
class ConfigController
{

    private $Url;
    private $UrlConjunto;
    private $UrlController;
    private $UrlParametro;
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
            echo "URL: {$this->Url} <br>";
            echo "Controlle: {$this->UrlController} <br>";
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
        if(!file_exists("../app/sts/Controllers" . $this->UrlController)){

            $this->UrlController = "home";

        }

        $classe = "sts\\Controllers\\" . $this->UrlController;
        $classeCarregar = new $classe();
        $classeCarregar->index();
        
    }

}
