<?php
    $title = "Home";
    require_once "./utils/utils.php";
    require_once "./entity/ImagenGaleria.php";
    $galeria[] = new ImagenGaleria("1.jpg","Descripción imagen 1",1, 5, 6);
    $galeria[] = new ImagenGaleria("2.jpg","Descripción imagen 1",3, 4, 5);
    $galeria[] = new ImagenGaleria("3.jpg","Descripción imagen 1",4, 6, 1);
    $galeria[] = new ImagenGaleria("4.jpg","Descripción imagen 1",3, 5, 8);
    $galeria[] = new ImagenGaleria("5.jpg","Descripción imagen 1",4, 8, 2);
    $galeria[] = new ImagenGaleria("6.jpg","Descripción imagen 1",6, 9, 8);
    $galeria[] = new ImagenGaleria("7.jpg","Descripción imagen 1",9, 10, 16);
    $galeria[] = new ImagenGaleria("8.jpg","Descripción imagen 1",10, 1, 56);
    $galeria[] = new ImagenGaleria("9.jpg","Descripción imagen 1",11, 3, 66);
    $galeria[] = new ImagenGaleria("10.jpg","Descripción imagen 1",14, 5, 3);
    $galeria[] = new ImagenGaleria("11.jpg","Descripción imagen 1",13, 4, 0);
    $galeria[] = new ImagenGaleria("12.jpg","Descripción imagen 1",15, 1, 1);
   
    include("./views/index.view.php");