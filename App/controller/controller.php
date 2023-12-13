<?php

class Controller
{

    public function controllerDestaque()
    {
        $model = new Model;
       return $model->destaques();
    }
}
