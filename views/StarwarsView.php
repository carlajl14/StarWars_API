<?php

class StarwarsView {
    
    /*
     * Mostrar los personajes en un desplegable
     */
    public function viewCharacters($characters) {
        $character = json_decode($characters, true);
        echo '<select name="character" class="form-control">';
        echo '<option value="">Elige un personaje</option>';
        foreach ($character['results'] as $cha) {
            echo '<option value="'. $cha['url'] .'">'. $cha['name'] .'</option>';
        }
        echo '</select>';
    }
}