<?php

require_once __DIR__ . '/../entity/Usuario.php';

require_once __DIR__ . '/../database/QueryBuilder.php';

require_once __DIR__ . '/../entity/Entity.php';

require_once __DIR__ . '/../security/Argon2PasswordGenerator.php';

class UsuarioRepository extends QueryBuilder

{

    protected $passwordGenerator;

    public function __construct(IPasswordGenerator $passwordGenerator){
    
        $this->passwordGenerator = $passwordGenerator;
    
        parent::__construct('users', 'Usuario');
    
    }
    public function save(Entity $entity)

    {
    
        $parameters = $entity->toArray();
    
        $entity->setPassword($this->passwordGenerator::encrypt($parameters['password']));
    
        parent::save($entity);    
    
    }
}