<?php 
require_once __DIR__ .'/Entity.php';
class Mensaje extends Entity
{
    /**
     * @var string
     */
    private $nombre;

    /**
    * @var int
    */
    private $apellidos;

    /**
    * @var int
    */
    private $asunto;

    /**
    * @var int
    */
    private $email;

    /**
    * @var int
    */
    private $texo;

    /**
    * @var int
    */
    private $id;

    /**
     * @param string $nombre
     * @param string $logo
     * @param string $descripcion
     */
    public function __construct(string $nombre, string $apellidos, string $asunto, string $email, string $texto){
        $this->id = null;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->asunto = $asunto;
        $this->email = $email;
        $this->texto = $texto;

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
     * @param  string  $nombre
     *
     * @return  self
     */ 
    public function setNombre(string $nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }


    /**
     * Get the value of id
     *
     * @return  int
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param  int  $id
     *
     * @return  self
     */ 
    public function setId(int $id)
    {
        $this->id = $id;

        return $this;
    }
    public function toArray(): array
{
    return [

        'id' => $this->getId(),

        'nombre' => $this->getNombre(),

        'apellidos' => $this->getApellidos(),

        'asunto' => $this->getAsunto(),

        'email' => $this->getEmail(),

        'texto' => $this->getTexto()
     

    ];
}

        /**
         * Get the value of apellidos
         */ 
        public function getApellidos()
        {
                return $this->apellidos;
        }

        /**
         * Set the value of apellidos
         *
         * @return  self
         */ 
        public function setApellidos($apellidos)
        {
                $this->apellidos = $apellidos;

                return $this;
        }

        /**
         * Get the value of asunto
         */ 
        public function getAsunto()
        {
                return $this->asunto;
        }

        /**
         * Set the value of asunto
         *
         * @return  self
         */ 
        public function setAsunto($asunto)
        {
                $this->asunto = $asunto;

                return $this;
        }

        /**
         * Get the value of email
         */ 
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Set the value of email
         *
         * @return  self
         */ 
        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }

        /**
         * Get the value of texto
         */ 
        public function getTexto()
        {
                return $this->texto;
        }

        /**
         * Set the value of texto
         *
         * @return  self
         */ 
        public function setTexto($texto)
        {
                $this->texto = $texto;

                return $this;
        }
}