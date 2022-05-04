<?php
require_once("user.php");
require_once("inc/banco.php");

class UserDAO {
    private static $instance;

    public static function getInstance(){
        if(self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function save(User $user) {
        $stm = Banco::getInstance()->prepare("INSERT INTO users(email,password,userType) values(:email, :password,:userType)");
        $stm->bindParam("email",$user->email);
        $stm->bindParam("password",$user->password);
        $stm->bindParam("userType",$user->userType);

        $stm->execute();
    }
}








?>