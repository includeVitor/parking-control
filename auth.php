<?php

include "class\connection.php";

try{
    
    $connect = new Connection();
    $conn = $connect->getConnection();

    $stmt = $conn->prepare("SELECT id,name,password FROM users where name = ? and password = ?");
    $stmt->execute(array($_POST['user'],$_POST['password']));
    $result = $stmt->fetch();

    if($result){
        session_start();
        $_SESSION['user'] = $result['name'];
        print "CONCEDED";

    }else{
        print "NEGATED";
    }
    $conn = null;

}catch(PDOException $e){
    print "Falhou  a conexão com o banco de dados ". $e->getMessage(). "<br/>";
    
}

?>