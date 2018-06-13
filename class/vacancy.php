<?php

class Vacancy{

    public function insertOrUpdate(string $entryDate, string $exitDate, string $entryTime, string $exitTime,  string $plateNumber, int $id){
            try{
                $connect = new Connection();
                $conn = $connect->getConnection();
                if($id == 0){
                    $stmt = $conn->prepare("INSERT INTO VACANCYS (ENTRYDATE,ENTRYTIME,PLATENUMBER) VALUES (?, ?, ?)");
                    $inserted = $stmt->execute(array($entryDate, $entryTime, $plateNumber));
                    return $inserted;
                }else{
                    $stmt = $conn->prepare("UPDATE VACANCYS SET ENTRYDATE = ? , EXITDATE = ?, ENTRYTIME = ?, EXITTIME = ?, PLATENUMBER = ? WHERE ID = ?");
                    $updated = $stmt->execute(array($entryDate, $exitDate, $entryTime, $exitTime, $plateNumber, $id));
                    return $updated;  
                }
            }catch(Exception $e){
                echo $e->getMessage();
                return $inserted;
            }
    }

    public function select(string $plateNumber){
        try{

            $connect = new Connection();
            $conn = $connect->getConnection();
            if($plateNumber == ''){
                $stmt = $conn->prepare("SELECT id, platenumber, entrydate, exitdate, entrytime, exittime FROM VACANCYS");
                $stmt->execute();
            }else{
                $stmt = $conn->prepare("SELECT id, platenumber, entrydate, exitdate, entrytime, exittime FROM VACANCYS WHERE platenumber like ?");
                $stmt->execute(array("%".$plateNumber."%"));
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
            $stmt = $conn->prepare("DELETE FROM VACANCYS WHERE ID=? ");
            $deleted = $stmt->execute(array($id));         
            return $deleted;

        }catch(Exception $e){
            echo $e->getMessage();
            return false;
        }
    }
}

?>