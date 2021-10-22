<?php
    $title = "Galeria";
    require_once "./utils/utils.php";

    $info = $description = $urlImagen = "";
    $descriptionError = $imagenErr = $hayErrores = false;
    $errores = [];

    
    if("POST" === $_SERVER["REQUEST_METHOD"]) {
        //NUNCA confiar en que lleguen los datos!
        if(empty($_POST)){
            $errores[] = "Se ha producido un error al procesar el formulario";
            $imagenErr = true;
        }
    }
    //SI ya ha encontrado error, no continuamos procesando
   if (!$imagenErr){
        $description = sanitizeInput(($_POST["description"] ?? ""));

        //Comprobaciones :
        if(empty($description)){
        $errores[] = "La descripción es obligatoria";
        $descriptionError = true;
    }
}
    //Procesar la imagen moviéndola a otro sitio
    if(isset($_FILES['imagen']) && ($_FILES['imagen']['error'] == UPLOAD_ERR_OK)) {
        //Limitamos el tamaño del archivo
        if ($_FILES['imagen']['size'] > (2 * 1024 * 1024)){

            $errores[] = 'El archivo no puede superar los 2MB';
            $imagenErr = true;
        }
        //Comprobar el mime type
        $extensions = array("image/jpeg","image/jpg","image/png");

        if(false === in_array($_FILES['imagen']['type'], $extensions))  {
            $errores[] = 'Extensión no permitida, sólo son váldios archivos jpg o png';
            $imagenErr = true;
        }
        if ($imagenErr){
            //Si no hay ningún error, moverlo a la carpeta de la galería
            if (false === move_uploaded_files($_FILES['imagen']['tmp_name'],"images/index/gallery/", $_FILES['imagen']['name'])) {
                $errores[] = "Se ha producido un error al mover la imagen";
                $imagenErr = true;
            }
        }
    }else{
        $errores[] = "Se ha producido un error. Código de error : ". $_FILES['imagen']['error'];
    }
    //Si sigue sin haber errores
    if(!$hayErrores){
        $info = "Imagen enviada correctamente : ";
        $urlImagen = 'images/index/gallery' . $_FILES['imagen']['name'];
        //Reseteamos los datos del formulario
        $description = "";
    } else {
        $info = "Datos erróneos";
    }




    include("./views/galeria.view.php");