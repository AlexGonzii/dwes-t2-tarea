<?php 
    class Profesor extends Miembro{
        private bool $titular;
        private $asignatura;

        public function __construct($id,$nombre,$apellidos,$email,$asignatura){
            parent::__construct($id,$nombre,$apellidos,$email);
            $this->titular = false;
            $this->asignatura = $asignatura;
        }
        public function isTitular(): bool {
                return $this->titular;
        }
        public function setTitular(bool $titular){
                $this->titular = $titular;

        }
        public function getAsignatura(){
                return $this->asignatura;
        }
        public function setAsignatura($asignatura){
                $this->asignatura = $asignatura;
        }
        public static function crearProfesoresDeMuestra(){
                $profesores = [];
                $profesores[] = new Profesor(1, "Steve", "Wozniak", "steve@apple.com", "DWES");
                $profesores[] = new Profesor(2, "Ada", "Lovelace", "ada@gmail.com","DIW");
                $profesores[] = new Profesor(3, "Taylor", "Otwell", "taylor@laravel.com","DWEC");
                $profesores[] = new Profesor(4, "Rasmus", "Lerdoff", "rasmus@php.com", "DAW");
                return $profesores;
        }
    }
?>