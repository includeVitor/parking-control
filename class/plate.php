<?php
class Plate {

    public function insertOrUpdate(string $number, int $id){
        try{
            $connect = new Connection();
            $conn = $connect->getConnection();
            if($id == 0){
                $stmt = $conn->prepare("INSERT INTO PLATE (NUMBER) VALUES (?)");
                $inserted = $stmt->execute(array($email));
                return $inserted;
            }else{
                $stmt = $conn->prepare("UPDATE PLATE SET NUMBER = ? WHERE ID = ?");
                $updated = $stmt->execute(array($number,$id));
                return $updated;  
            }
        }catch(Exception $e){
            echo $e->getMessage();
            return $inserted;
        }
    }

   
}
?>