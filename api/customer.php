<?php

session_start();
if(!$_SESSION) exit;

include "../class/connection.php";
include "../class/customer.php";
include "../class/plate.php";

if($_POST['action'] == 'create'){

    $custumer = new Customer();
    $inserted = $custumer->insertOrUpdate($_POST['email'], $_POST['name'], $_POST['cpf'], 0);
    echo $inserted;
}

if($_POST['action'] == 'consult'){
    
    $customer = new Customer();
    $data = $customer->select($_POST['name'], $_POST['cpf']);
    echo json_encode($data);

}

if($_POST['action'] == 'update'){

    $customer = new Customer();
    $inserted = $customer->insertOrUpdate($_POST['email'], $_POST['name'], $_POST['cpf'], $_POST['id']);
    echo $inserted;

}


if($_POST['action'] == 'delete'){

    $customer = new Customer();
    $deleted = $customer->delete($_POST['id']);
    echo $_POST['id'];
}


?>