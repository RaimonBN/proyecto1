<?php
class Asociado
{

    const RUTA_LOGOS = 'images/logo/';
     /**
     * Devuelve el path de los logos
     * 
     * @return string
     */
    public function getLogoImage() : string
    {
        return self::RUTA_LOGOS . $this->getLogo();
    }
    /**
     * @var string
     */
    private $nombre;

     /**
     * @var string
     */
    private $descripcion;

    /**
     * @var string
     */
    private $logo;


    public function __construct(string $nombre, string $descripcion,string $logo){
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->logo = $logo;

    }

    /**
     * Get the value of nombre
     *
     * @return  string
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @param string $nombre
     *
     * @return  self
     */ 
    public function setNombre(string $nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of descripcion
     *
     * @return  string
     */ 
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set the value of descripcion
     *
     * @param  string  $descripcion
     *
     * @return  self
     */ 
    public function setDescripcion(string $descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get the value of logo
     *
     * @return  string
     */ 
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set the value of logo
     *
     * @param  string  $logo
     *
     * @return  self
     */ 
    public function setLogo(string $logo)
    {
        $this->logo = $logo;

        return $this;
    }

}
