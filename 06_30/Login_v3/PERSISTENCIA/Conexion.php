<?php
//CREATE USER 'prueba'@'localhost' IDENTIFIED BY 'prueba1234';
//GRANT ALL PRIVILEGES ON *.* TO 'prueba'@'localhost' WITH GRANT OPTION;
//flush privileges;

class Conexion {
    private $conn;
    private $user;
    private $password;
    private $baseDeDatos;
    private $puerto;

    public function __construct() {
        $this->user = 'lukitas';
        $this->password = '55214412';
        $this->baseDeDatos = 'registro_usuarios';
        $this->puerto = 3306;
    } 

    public function getConnection() {
        $dsn ='mysql:host=localhost:'.$this->puerto.';dbname='.$this->baseDeDatos.';charset=UTF8';
        try{
            $pdo = new PDO($dsn, $this->user, $this->password);
            if($pdo) {
                $this->debug_to_console("Connected to the $this->baseDeDatos database successfully!");
                syslog(LOG_INFO, 'Se establecio la conexión');
                return $pdo;
            }
        } catch (PDOException $e){
            echo $e->getMessage();
        }
    }

    public function debug_to_console($data) {
        $output = $data;
        if(is_array($output))
            $output = implode(',', $output);
            echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
    }
}
?>