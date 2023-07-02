<?php
include 'Conexion.php';

class RepositorioAlumnos {
    private $PDO;

    public function __construct() {
        $newConection = new Conexion();
        $this->PDO = $newConection->getConnection();
    }

    public function getAlumnos() {
        $estudiantes = [];
        $stmt = $this->PDO->query('SELECT * FROM alumnos');
         while($row = $stmt->fetch()) {
            array_push($estudiantes, new Alumno(
                $row['name'],
                $row['surname'],
                $row['email'],
                $row['id']
            ));
         }
         return $estudiantes;
    }
    public function addAlumno($name, $surname, $email) {
        $stmt = $this->PDO->prepare('INSERT INTO alumnos (name, surname, email) VALUES ("'.$name.'", "'.$surname.'", "'.$email.'")');
        $stmt->execute();
    }
    public function deleteAlumno($ID) {
        $stmt = $this->PDO->prepare('DELETE FROM alumnos WHERE email = "'.$ID.'"');
        $stmt->execute();
    }
}
?>