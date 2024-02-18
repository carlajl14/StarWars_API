<?php

class StarwarsView {
    
    /*
     * Mostrar los personajes en un desplegable
     */
    public function viewCharacters($characters) {
        $character = json_decode($characters, true);
        echo '<label for="personaje">Selecciona un personaje:</label>';
        echo '<select name="character" class="form-control">';
        echo '<option value="">Elige un personaje</option>';
        foreach ($character['results'] as $cha) {
            //Obtener el id de la url
            $url = substr($cha['url'], -2, -1);
            echo '<option value="'. $url .'">'. $cha['name'] .'</option>';
        }
        echo '</select>';
    }
    
    /**
     * Mostrar información de un personaje
     * 
     * @param type $character
     */
    public function viewDetails($character) {
        $charac = json_decode($character, true);
        echo '<div class="card" style="width: 20rem;">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">Nombre: '. $charac['name'] .'</h5>';
        echo '<p class="card-title">Altura: '. $charac['height'] .' cm</p>';
        echo '<p class="card-text">Peso: '. $charac['mass'] .' kg</p>';
        echo '<p class="card-text">Color de pelo: '. $charac['hair_color'] .'</p>';
        echo '<p class="card-text">Color de ojos: '. $charac['eye_color'] .'</p>';
        echo '<h6 class="card-text">Películas: </h6>';
        foreach ($charac['films'] as $film) {
            $peli = file_get_contents($film);
            $detalles = json_decode($peli, true);
            echo '<p class="card-text">'. $detalles['title'] .' ('. $detalles['release_date'].')</p>';
        }
        echo '</div>';
        echo '</div>';
    }
}