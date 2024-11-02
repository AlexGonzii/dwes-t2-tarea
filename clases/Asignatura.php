<?php 
    class Asignatura {
        private $id;
        private $nombre;
        private $creditos;

        public function __construct($id, $nombre, $creditos) {
            $this->id = $id;
            $this->nombre = $nombre;
            $this->creditos = $creditos;
        }

        public function getId() {
                return $this->id;
        }
        public function setId($id) {
                $this->id = $id;
        }
        public function getNombre(){
                return $this->nombre;
        }
        public function setNombre($nombre){
                $this->nombre = $nombre;
        }
        public function getCreditos(){
                return $this->creditos;
        }
        public function setCreditos($creditos){
                $this->creditos = $creditos;
        }
        public static function crearAsignaturasDeMuestra(){
            $asignaturas = [];
            $asignaturas[] = new Asignatura(1, "DWES", "7 créditos");
            $asignaturas[] = new Asignatura(2, "DWEC", "6 créditos");
            $asignaturas[] = new Asignatura(3, "DIW","4 créditos");
            $asignaturas[] = new Asignatura(4, "DAW", "4 créditos");
            return $asignaturas;

        }
    }
?>