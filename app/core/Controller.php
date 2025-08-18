<?php
namespace App\Core;

class Controller{
    protected function view(string $view, arry $params=[]):void{
        extract($params,EXTR_SKIP);
        ob_start();
        require __DIR__ . "/..Views/{$view} .php";
        $content = ob_get_clean ();
        require __DIR__ . ""
    }
}