<?php
function esOpcionMenuActiva($option){
    if (strpos($_SERVER["REQUEST_URI"], "/". $option) === 0 ){
        return true;
    }elseif ("/" === $_SERVER["REQUEST_URI"] && ("index" == $option)){
        return true;
    }else   
        return false;
}
function  existeOpcionMenuActivaEnArray($options){
    foreach ($options as $option){
        if (esOpcionMenuActiva($option)) {
            return true;
        }
    }
    return false;
}
function sanitizeInput($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
function getAsociados($asociados){
        shuffle($asociados);
        return array_slice($asociados,0,3);
 
    }
 