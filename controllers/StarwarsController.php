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
    
    /**
     * Mostrar los detalles
     * 
     * @param type $id
     */
    public function detailsCharacter($id) {
        //$id = $_POST['character'];
        
        $character = $this->model->getCharacter($id);
        
        $this->view->viewDetails($character);
    }
}
