<?php
include "..\class\connection.php";

$connect = new Connection();
$conn = $connect->getConnection();
$stmt = $conn->prepare("SELECT NAME FROM USERS WHERE EMAIL = ? AND PASSWORD = ?");
$stmt->execute(array($_POST['email'], $_POST['password'])); 
$result = $stmt->fetch();

if($result){
    session_start();
    $_SESSION['name'] = $result['NAME'];
    echo 'success';
}
else
    echo 'fail';


?>