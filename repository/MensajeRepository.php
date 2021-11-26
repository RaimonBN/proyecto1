<?php

require_once __DIR__ . '/../entity/Mensaje.php';

require_once __DIR__ . '/../database/QueryBuilder.php';

class MensajeRepository extends QueryBuilder

{

    public function __construct(){

        parent::__construct('mensajes', 'Mensaje');

    }
    
    public function save(Entity $mensaje)
    {
        $fnGuardaMensaje = function () use ($mensaje){
           
            parent::save($mensaje);
        };
        $this->executeTransaction($fnGuardaMensaje);
    }
}