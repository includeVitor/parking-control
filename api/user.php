<?php
session_start();
if(!$_SESSION) exit;


include "..\class\connection.php";
include "..\class\user.php";

if($_POST['action'] == 'create'){

    $user = new User();
    $inserted = $user->insertOrUpdate($_POST['email'],'', $_POST['name'], $_POST['password'], $_POST['cpf'], 0);
    echo $inserted;
}

if($_POST['action'] == 'consult'){
    
    $user = new User();
    $data = $user->select($_POST['name'], $_POST['cpf']);
    echo json_encode($data);

}

if($_POST['action'] == 'update'){

    $user = new User();
    $inserted = $user->insertOrUpdate($_POST['email'], $_POST['name'],'', $_POST['cpf'], $_POST['id']);
    echo $inserted;

}

if($_POST['action'] == 'delete'){

    $user = new User();
    $deleted = $user->delete($_POST['id']);
    echo $_POST['id'];
}
    
    


?>