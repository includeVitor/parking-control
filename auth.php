<?php


try{
    $conn = new PDO("mysql:host=localhost;dbname=parking-control", "root", "");

    $stmt = $conn->prepare("SELECT name,password FROM users where name = ? and password = ?");
    $stmt->execute(array($_POST['user'],$_POST['password']));
    $result = $stmt->fetchAll();

    if($result){
        print 'Bem vindo';
    }else{
        print 'Usuário ou senha inválidos';
    }
    $conn = null;

}catch(PDOException $e){
    print "Falhou  a conexão com o banco de dados ". $e->getMessage(). "<br/>";
    
}

?>