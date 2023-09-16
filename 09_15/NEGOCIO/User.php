<?php
abstract class User{
    private $id;
    private $login;
    private $passw;
    private $name;
    private $email;

    public function __construct($id, $login, $passw, $name, $email)
    {
        $this->id = $id;
        $this->login = $login;
        $this->passw = $passw;
        $this->name = $name;
        $this->email = $email;
    }

    public function getName() {
        return $this->name;
    }
    public function getEmail() {
        return $this->email;
    }

    public function saludar(){
        return 'Hola, soy '.$this->name.' y soy usuario del Sistema';
    }
    public function mostrarMail(){
        return 'Soy '.$this->name.' y mi mail es '.$this->email;
    }
}
?>