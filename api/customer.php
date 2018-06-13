<?php

session_start();
if(!$_SESSION) exit;

include "../class/connection.php";
include "../class/customer.php";

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


?>