<?php
session_start();
if(!$_SESSION) exit;

include "../class/connection.php";
include "../class/vacancy.php";

if($_POST['action'] == 'create'){

    $vacancy = new Vacancy();
    $inserted = $vacancy->insertOrUpdate($_POST['entryDate'], '', $_POST['entryTime'], '', $_POST['plateNumber'], 0);
    echo $inserted;
}

if($_POST['action'] == 'consult'){
    
    $vacancy = new Vacancy();
    $data = $vacancy->select($_POST['plateNumber']);
    echo json_encode($data);

}

if($_POST['action'] == 'update'){
    
    $vacancy = new Vacancy();
    $inserted = $vacancy->insertOrUpdate($_POST['entryDate'], $_POST['exitDate'], $_POST['entryTime'], $_POST['exitTime'], $_POST['plateNumber'], $_POST['id']);
    echo $inserted;
}

if($_POST['action'] == 'delete'){
    
    $vacancy = new Vacancy();
    $deleted = $vacancy->delete($_POST['id']);
    echo $deleted;
}



?>