<?php

class Route
{
    public $classe = "ecommerce";
    public $metodo = "home";
    public $parametro = array();

    public function __construct()
    {
        $route = $this->uri();

        if (file_exists("./app/controller/" . $route[0] . ".php")) {
            $this->classe =  $route[0];
            unset($route[0]);
        } 
   
        if(method_exists($this->classe, $route[1])){
            $this->metodo = $route[1];
            unset($route[1]);
        }

        $controlador = new $this->classe;
        call_user_func_array([$controlador,$this->metodo],$this->parametro);

    }

    public function uri()
    {
        $url = explode("/", filter_input(INPUT_GET, "url", FILTER_SANITIZE_URL));
        return $url;
    }
}
