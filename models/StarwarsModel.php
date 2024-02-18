<?php

class StarwarsModel {
    
    /**
     * Obtener los nombres de los personajes
     * 
     * @return type
     */
    public function getCharacters() {
        $urlmiservicio = "https://swapi.dev/api/people";
        $conexion = curl_init();
        //Url de la petición
        curl_setopt($conexion, CURLOPT_URL, $urlmiservicio);
        //Tipo de petición
        curl_setopt($conexion, CURLOPT_HTTPGET, TRUE);
        //Tipo de contenido de la respuesta
        curl_setopt($conexion, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
        //para recibir una respuesta
        curl_setopt($conexion, CURLOPT_RETURNTRANSFER, true);
        $res = curl_exec($conexion);
        if ($res) {
            return $res;
        }
        curl_close($conexion);
    }
    
    /**
     * Obtener un personaje
     * 
     * @param type $id
     * @return type
     */
    public function getCharacter($id) {
        $urlmiservicio = "https://swapi.dev/api/people/". $id;
        $conexion = curl_init();
        //Url de la petición
        curl_setopt($conexion, CURLOPT_URL, $urlmiservicio);
        //Tipo de petición
        curl_setopt($conexion, CURLOPT_HTTPGET, TRUE);
        //Tipo de contenido de la respuesta
        curl_setopt($conexion, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
        //para recibir una respuesta
        curl_setopt($conexion, CURLOPT_RETURNTRANSFER, true);
        $res = curl_exec($conexion);
        if ($res) {
            return $res;
        }
        curl_close($conexion);
    }
}