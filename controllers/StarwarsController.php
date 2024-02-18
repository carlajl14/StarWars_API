<?php

class StarwarsController {
    
    private $model;
    private $view;
    
    public function __construct() {
        $this->model = new StarwarsModel();
        $this->view = new StarwarsView();
    }
    
    /**
     * Mostrar personajes
     */
    public function allCharacters() {
        $characters = $this->model->getCharacters();
        
        $this->view->viewCharacters($characters);
    }
}
