<?php

class TemplateController
{

    public function index()
    {
        include "views/template.php";
    }

    static public function path_name()
    {
        $path_name = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        return $path_name;
    }
}
