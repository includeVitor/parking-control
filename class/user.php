<?php
class User {

    public function insertOrUpdate(string $email,string $name, string $password, string $cpf,int $id){
        try{
            $connect = new Connection();
            $conn = $connect->getConnection();
            if($id == 0 && $password != ''){
                $stmt = $conn->prepare("INSERT INTO USERS (EMAIL,NAME,PASSWORD,CPF) VALUES (?, ?, ?, ?)");
                $inserted = $stmt->execute(array($email, $name, $password,$cpf));
                return $inserted;
            }else{
                $stmt = $conn->prepare("UPDATE USERS SET EMAIL = ? ,NAME = ?, CPF = ? WHERE ID = ?");
                $updated = $stmt->execute(array($email, $name, $cpf, $id));
                return $updated;  
            }
        }catch(Exception $e){
            echo $e->getMessage();
            return $inserted;
        }
    }

    public function select($name,$cpf){
        try{
            $connect = new Connection();
            $conn = $connect->getConnection();

            if($name == '' && $cpf == ''){
                $stmt = $conn->prepare("SELECT id,email,name,cpf FROM USERS");
                $stmt->execute();
            }
            if($name != '' && $cpf == ''){
                $stmt = $conn->prepare("SELECT id,email,name,cpf FROM USERS WHERE name like ? ");
                $stmt->execute(array('%'.$name.'%')); 
            }
            if($name == '' && $cpf != ''){
                $stmt = $conn->prepare("SELECT id,email,name,cpf FROM USERS WHERE cpf like ? ");
                $stmt->execute(array("%".$cpf."%")); 
            }
            if($name != '' && $cpf != ''){
                $stmt = $conn->prepare("SELECT id,email,name,cpf FROM USERS WHERE (name like ? OR cpf like ?) ");
                $stmt->execute(array("%".$name."%","%".$cpf."%")); 
            }

            return  $stmt->fetchAll();

        }catch(Exception $e){
            echo $e->getMessage();
            return false;
        }
    }

    public function delete($id){
        try{
            $connect = new Connection();
            $conn = $connect->getConnection();
            $stmt = $conn->prepare("DELETE FROM USERS WHERE ID=? ");
            $deleted = $stmt->execute(array($id));         
            return $deleted;

        }catch(Exception $e){
            echo $e->getMessage();
            return false;
        }
    }

}
?>