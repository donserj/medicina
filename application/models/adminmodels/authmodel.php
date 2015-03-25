<?php
/**
 * Created by PhpStorm.
 * User: artosis
 * Date: 3/16/15
 * Time: 2:25 PM
 */

class AuthModel extends CI_Model{

    public function Authorization($login, $pass){

        try{
            $stmt = $this->db->prepare("SELECT `OpID`,`Login` FROM `Operators` WHERE Login=:login AND Password=PASSWORD(CONCAT(PASSWORD(:pass), `Salt`))");
            $stmt->execute(array(":login" => $login, ":pass" => $pass));
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            return $row;

        }catch (PDOException $e){
            var_dump($e->getMessage());
            return false;
        }

    }

} 