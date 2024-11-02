<?php 
    abstract class Miembro {
        protected int $id;
        protected $nombre;
        protected $apellidos;
        protected $email;

        public function __construct($id,$nombre,$apellidos,$email){
            $this->id = $id;
            $this->nombre = $nombre;
            $this->apellidos = $apellidos;
            $this->email = $email;
        }

        public function getId(): int{
                return $this->id;
        }
        public function setId(int $id){
                $this->id = $id;

        }
        public function getNombre(){
                return $this->nombre;
        }
        public function setNombre($nombre){
                $this->nombre = $nombre;

        }
        public function getApellidos(){
                return $this->apellidos;
        }
        public function setApellidos($apellidos){
                $this->apellidos = $apellidos;

        }
        public function getEmail(){
                return $this->email;
        }
        public function setEmail($email){
                $this->email = $email;

        }

        public function __toString(){
            return "Miembro: (ID: ". $this->id . ", nombre: " . $this->nombre . ", apellidos: " . $this->apellidos . ", email: " . $this->email . ")";
        }
    }
?>