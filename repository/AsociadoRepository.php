<?php

require_once __DIR__ . '/../entity/Asociado.php';

require_once __DIR__ . '/../database/QueryBuilder.php';

class AsociadoRepository extends QueryBuilder

{

    public function __construct(){

        parent::__construct('asociados', 'Asociado');

    }
    
    public function save(Entity $asociado)
    {
        $fnGuardaAsociado = function () use ($asociado){
           
            parent::save($asociado);
        };
        $this->executeTransaction($fnGuardaAsociado);
    }
}