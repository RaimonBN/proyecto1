<?php

session_start();

$info = "";
$nombreUsuario = new InputElement('text');
$nombreUsuario 
    ->setName('username')  
    ->setId('username');

$nombreUsuario->setValidator(new NotEmptyValidator('El nombre de usuario no puede estar vacío', true));
$userWrapper = new MyFormControl($nombreUsuario, 'Nombre de usuario', 'col-xs-12');

$pass = new PasswordElement();
$pass
    ->setName('password')
    ->setId('password');
$passWrapper = new MyFormControl($pass, 'Contraseña','col-xs-12');
$b = new ButtonElement('Registro','','', 'pull-right btn btn-lg sr-button');
$form = new FormElement();
$form 
    ->appendChild($userWrapper)
    ->appendChild($passWrapper)
    ->appendChild($b);
if ("POST" === $_SERVER["REQUEST_METHOD"]){
    $form->validate();
    if (!$form->hasError()){
        try{
            $usuario = $repositorio->findByUserNameAndPassword($nombreUsuario->getValue(),$pass->getValue());
            $_SESSION['username'] = $usuario->getUsername();
            header('location: /');
        }catch(QueryException $qe){
            $form->addError($qe->getMessage());
        }catch(NotFoundException $err) {
            $form->addError($err->getMessage());
        }catch(Exception $err){
            $form->addError($err->getMessage());
        }
    }
}