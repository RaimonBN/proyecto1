<?php
class ImagenGaleria 
{

    const RUTA_IMAGENES_PORTFOLIO = 'images/index/portfolio/';

    const RUTA_IMAGENES_GALLERY = 'images/index/gallery/';

    public function getUrlPortfolio() : string

    {

        return self::RUTA_IMAGENES_PORTFOLIO . $this->getNombre();

    }

    public function getUrlGallery() : string

    {

        return self::RUTA_IMAGENES_GALLERY . $this->getNombre();

    }

    private $nombre;

    private $descripcion;

    private $numVisualizaciones;

    private $numLikes;

    private $numDownloads;


    public function __construct(string $nombre, string $descripcion,
                                int $numVisualizaciones = 0, int $numLikes = 0,
                                int $numDownloads = 0){
            
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->numVisualizaciones = $numVisualizaciones;
        $this->numLikes = $numLikes;
        $this->numDownloads = $numDownloads;

    }


    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of descripcion
     */ 
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set the value of descripcion
     *
     * @return  self
     */ 
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get the value of numVisualizaciones
     */ 
    public function getNumVisualizaciones()
    {
        return $this->numVisualizaciones;
    }

    /**
     * Set the value of numVisualizaciones
     *
     * @return  self
     */ 
    public function setNumVisualizaciones($numVisualizaciones)
    {
        $this->numVisualizaciones = $numVisualizaciones;

        return $this;
    }

    /**
     * Get the value of numLikes
     */ 
    public function getNumLikes()
    {
        return $this->numLikes;
    }

    /**
     * Set the value of numLikes
     *
     * @return  self
     */ 
    public function setNumLikes($numLikes)
    {
        $this->numLikes = $numLikes;

        return $this;
    }

    /**
     * Get the value of numDownloads
     */ 
    public function getNumDownloads()
    {
        return $this->numDownloads;
    }

    /**
     * Set the value of numDownloads
     *
     * @return  self
     */ 
    public function setNumDownloads($numDownloads)
    {
        $this->numDownloads = $numDownloads;

        return $this;
    }
}