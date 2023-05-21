<?php

require_once 'model.php';
require_once 'view.php';

class Controller
{
    private $model;
    private $view;
    private $db;

    public function __construct()
    {
        $this->model = new Model();
        $this->view = new View();
        $this->db = new DB("almacen_zapatos");
    }

 

    public function mostrarIndex($db)
    {
        $this->view->mostrarCabecera();
        $this->view->mostrarMenu();
        $this->view->mostrarCarousel();
        $this->model->mostrarOfertas($db);
        $this->model->mostrarNovedades($db);
        $this->view->mostrarFooter();
    }


    public function mostrarLogin($db){
        $this->view->mostrarFormulario();
    }

    public function mostrarDetalleZapa(){
        $this->view->mostrarZapa();
    }
}
