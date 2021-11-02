<?php
    $title = "Asociados";
    require_once "./utils/utils.php";
    require_once "./entity/Asociado.php";
    require_once "./utils/file.php";
    require_once "./utils/SimpleImage.php";


    $nombre = $description = $logo = "";
    $descriptionError = $logoErr = $hayErrores = false;
    $errores = [];

    if("POST" === $_SERVER["REQUEST_METHOD"]){

    try{
        if(empty($_POST)){
            throw new FileException('Se ha producido un error al procesar el formulario');
        }
        $imageFile = new File("imagen", array("image/jpeg","image/jpg","image/png"),(2 * 1024 * 1024));
        $imageFile->saveUploadedFile(Asociado::RUTA_LOGOS);
        try{
            $simpleImage = new \claviska\SimpleImage();

            $simpleImage
            ->fromFile(Asociado::RUTA_LOGOS . $imageFile->getFileName())
            ->resize(50,50)
            ->toFile(Asociado::RUTA_LOGOS . $imageFile->getFileName());
        }catch(Exception $err){
            $errores[] = $err->getMessage();
            $logoErr = true;
        }
    }catch(FileException $fe){
        $errores[] = $fe->getMessage();
        $logoErr = true;
    }
    $description = sanitizeInput(($_POST["description"] ?? ""));

    if(empty($description)){
        $errores[] = "La descripción es obligatoria";
        $descriptionError = true;
    }

    if(0 === count($errores)){
        $info = 'Imagen enviada correctamente';
        $urlImagen = Asociado::RUTA_LOGOS . $imageFile->getFileName();
        $descripcion = "";
    }else{
        $info = "Datos erróneos";
    }
}
    include("./views/asociados.view.php");

?>