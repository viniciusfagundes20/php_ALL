<?php

namespace App\lojas\Controllers;

if (!defined('URL')) {
    header("Location: /");
    exit();
}


class Lojas
{

    private $Dados;

    public function index()
    {
       echo "hello world";
    }

}
