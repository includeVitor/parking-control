<?php

class Customer {

    public function insertOrUpdate(string $email,string $name,string $cpf,int $id){
        try{
            $connect = new Connection();
            $conn = $connect->getConnection();
            if($id == 0){
                $stmt = $conn->prepare("INSERT INTO CUSTOMERS (EMAIL,NAME,CPF) VALUES (?, ?, ?)");
                $inserted = $stmt->execute(array($email, $name,$cpf));
                return $inserted;
            }else{
                $stmt = $conn->prepare("UPDATE CUSTOMERS SET EMAIL = ? ,NAME = ?, CPF = ? WHERE ID = ?");
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
                $stmt = $conn->prepare("SELECT id,email,name,cpf FROM CUSTOMERS");
                $stmt->execute();
            }
            if($name != '' && $cpf == ''){
                $stmt = $conn->prepare("SELECT id,email,name,cpf FROM CUSTOMERS WHERE name like ? ");
                $stmt->execute(array('%'.$name.'%')); 
            }
            if($name == '' && $cpf != ''){
                $stmt = $conn->prepare("SELECT id,email,name,cpf FROM CUSTOMERS WHERE cpf like ? ");
                $stmt->execute(array("%".$cpf."%")); 
            }
            if($name != '' && $cpf != ''){
                $stmt = $conn->prepare("SELECT id,email,name,cpf FROM CUSTOMERS WHERE (name like ? OR cpf like ?) ");
                $stmt->execute(array("%".$name."%","%".$cpf."%")); 
            }

            return  $stmt->fetchAll();

        }catch(Exception $e){
            echo $e->getMessage();
            return false;
        }
    }
}

?>