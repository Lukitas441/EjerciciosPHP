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
            ));
         }
         return $estudiantes;
    }
    public function addAlumno($name, $surname, $email) {
        $listaActual = $this->getAlumnos();
        foreach($listaActual as $alumno) {
            if($alumno->getName() == $name && $alumno->getSurname() == $surname) {
                return;
            }
        }

        $stmt = $this->PDO->prepare('INSERT INTO alumnos (name, surname, email) VALUES ("'.$name.'", "'.$surname.'", "'.$email.'")');
        $stmt->execute();
    }
    public function deleteAlumno($name, $surname) {
        $stmt = $this->PDO->prepare('DELETE FROM alumnos WHERE name = "'.$name.'" AND surname = "'.$surname.'"');
        $stmt->execute();
    }
}
?>