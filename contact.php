<?php
    $title = "Contact";
    require_once "./utils/utils.php";
    

    $info = $firstName = $lastName = $email = $subject = $message = "";
    $firstNameError = $emailErr = $subjectError = $hayErrores = false;
    $errores = [];
    if ("POST" === $_SERVER["REQUEST_METHOD"]) {
        //NO confiar en que lleguen los datos:
        $firstName = sanitizeInput(($_POST["firstName"] ?? ""));
        $lastName = sanitizeInput(($_POST["lastName"] ?? "")); //Opcional
        $email = sanitizeInput(($_POST["email"] ?? ""));
        $subject = sanitizeInput(($_POST["subject"] ?? ""));
        $message = sanitizeInput(($_POST["message"] ?? "")); //Opcional
        //Comprobaciones
        
        if (empty($firstName)){
            $errores[] = "El nombre es obligatorio";
            $firstNameError = true;
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errores[] = "Formato inválido de correo";
            $emailErr = true;
        }
        if (empty($subject)){
            $errores[] = "El asunto es obligatorio";
            $subjectError = true;
        }
        if (sizeof($errores) > 0) {
            $hayErrores = true;
        }
        if (!$hayErrores){
            //No hay errores en el formulario, mostramos mensaje de que todo ha ido bien
            $info = "Mensaje insertado correctamente";
            //Reseteamos los datos del formulario
            $firstName = $lastName = $email = $subject = $message = "";
        }else {
            $info = "Datos erróneos :";
        }

    }
     include("./views/contact.view.php");