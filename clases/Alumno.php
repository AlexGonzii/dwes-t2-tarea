<?php 
    class Alumno extends Miembro{
        private int $edad;
        private array $asignaturas;
        private bool $cursoAbonado;

        public function __construct(int $id,$nombre,$apellidos,$email,int $edad){
            parent::__construct($id,$nombre,$apellidos,$email);
            $this->edad=$edad;
            $this->asignaturas=[];
            $this->cursoAbonado=true;         
        }

        public function getEdad(): int{
            return $this->edad;
    }
    public function setEdad(int $edad){
            $this->edad = $edad;
    }
    public function getAsignaturas(): array{
            return $this->asignaturas;
    }
    public function setAsignaturas(array $asignaturas){
            $this->asignaturas = $asignaturas;
    }
    public function isCursoAbonado(): bool{
        return $this->cursoAbonado;
    }
    public function setCursoAbonado(bool $cursoAbonado){
        $this->cursoAbonado = $cursoAbonado;
    }

    public function abonarCurso(){
        return $this->cursoAbonado;
    }
    
    public function matricularEnAsignatura($asignatura){
        if(!in_array($asignatura, $this->asignaturas)){
            $this->asignaturas[] = $asignatura;
        }
    }
    public static function crearAlumnosDeMuestra(){
        $alumno = [];
        $alumnos[] = new Alumno(1, "Laura", "Martínez", "laura.martinez@email.com", 22);
        $alumnos[] = new Alumno(2, "Sergio", "López", "sergio.lopez@email.com", 25);
        $alumnos[] = new Alumno(3, "Carlos", "García", "carlos.garcia@email.com", 24);
        $alumnos[] = new Alumno(4, "Marta", "Sánchez", "marta.sanchez@email.com", 23);
        $alumnos[] = new Alumno(5, "Alba", "Fernández", "alba.fernandez@email.com", 21);
        $alumnos[] = new Alumno(6, "David", "Rodríguez", "david.rodriguez@email.com", 26);
        $alumnos[] = new Alumno(7, "Lucía", "Jiménez", "lucia.jimenez@email.com", 20);
        $alumnos[] = new Alumno(8, "Jorge", "Pérez", "jorge.perez@email.com", 22);
        $alumnos[] = new Alumno(9, "Elena","Romero", "elena.romero@email.com", 23);
        $alumnos[] = new Alumno(10, "Pablo", "Torres", "pablo.torres@email.com", 24);
        return $alumnos;
    }
}
?>