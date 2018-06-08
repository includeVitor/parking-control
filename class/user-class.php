<?php
class User {

    public function insert(string $name, string $password, string $cpf, string $phone, string $access){
        try{
            $connect = new Connection();
            $conn = $connect->getConnection();
            $stmt = $conn->prepare("INSERT INTO USERS (NAME,PASSWORD,CPF,PHONE,ACCESS) VALUES ('$name','$password','$cpf','$phone','$access')");
            $stmt->execute(array($name,$password,$cpf,$phone,$access));
            return true;
        }catch(Exception $e){
            echo $e->getMessage();
            return false;
        }
    }

    public function select($name,$cpf){
        try{
            $connect = new Connection();
            $conn = $connect->getConnection();
            $stmt = $conn->prepare("SELECT * FROM USERS");
            $stmt->execute();
            
            return  $stmt->fetchAll();

        }catch(Exception $e){
            echo $e->getMessage();
            return false;
        }
    }
    public function update($id,$name,$cpf,$phone,$access){
        try{
            $connect = new Connection();
            $conn = $connect->getConnection();
            $stmt = $conn->prepare("UPDATE USERS SET NAME='?', CPF='?', PHONE='?', ACCESS='?'' WHERE ID=? ");
            $stmt->execute(array($name,$cpf,$phone,$access,$id));         
            return TRUE;

        }catch(Exception $e){
            echo $e->getMessage();
            return false;
        }
    }





}
?>