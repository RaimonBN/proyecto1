<?php
    $title = "Home";
    require_once "./utils/utils.php";
    require_once "./entity/ImagenGaleria.php";
    require_once "./entity/Asociado.php";
    require_once "./repository/ImagenGaleriaRepository.php";
    require_once "./repository/AsociadoRepository.php";

    $config = require_once 'app/config.php';
    App::bind('config',$config);
    App::bind('connection', Connection::make($config['database']));

    $imagenes = new ImagenGaleriaRepository();
    $galeria = $imagenes->findAll();
  
    $asociadoRepositorio = new AsociadoRepository();
    $asociados = $asociadoRepositorio->findAll();

    include("./views/index.view.php");