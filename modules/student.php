<?php

class student{

    public static function list($conn,$request = false,$type = false){

        if($type == "all"){
            $sql ="SELECT * FROM `student_profile` ORDER BY `student_id` DESC LIMIT 0,1000";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $output = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }elseif($type =="level"){
            $sql = "SELECT student_profile.* FROM student_profile WHERE student_profile.st_level = :string ORDER BY student_profile.st_surname ASC";
            $stmt = $conn->prepare($sql);
            $stmt->execute([":string"=>$request]);
            $output = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }elseif($type == "row"){
            $sql = "SELECT student_profile.* FROM student_profile WHERE student_profile.student_id = :string ORDER BY student_profile.st_surname ASC";
            $stmt = $conn->prepare($sql);
            $stmt->execute([":string"=>$request]);
            $output = $stmt->fetch(PDO::FETCH_ASSOC);
        }elseif($type == "duplicate"){
            $sql = "SELECT st_index, COUNT(st_index) as st_index_duplicate FROM student_profile GROUP BY st_index HAVING COUNT(st_index) > 1";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $output = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }elseif($type == "duplicate-record"){
            $sql = "SELECT student_profile.* FROM student_profile WHERE student_profile.st_index = :string ORDER BY student_profile.st_surname ASC";
            $stmt = $conn->prepare($sql);
            $stmt->execute([":string"=>$request]);
            $output = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        return $output;
    }

    public static function add($conn,$request){

        $sql ="INSERT INTO `student_profile`(`st_index`, `st_surname`, `st_middle`, `st_name`, `st_programme`, `st_level`, `st_nationality`, `st_mobile`, `st_email`, `entry_year`, `stream`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        if (false == $stmt->execute($request)){
            return false;
        }else{
            return $conn->lastInsertId();
        }
    }

    public static function update($conn,$request){

        $sql ="UPDATE `student_profile` SET `st_index` = ?, `st_surname` = ?, `st_middle` = ?, `st_name` = ?, `st_programme` = ?, `st_level` = ?, `st_nationality` = ?, `st_mobile` = ?, `st_email` = ?, `entry_year` = ?, `stream` = ? WHERE `student_id` =?";
        $stmt = $conn->prepare($sql);
        return $stmt->execute($request);
    }

    public static function delete($conn,$request){

        $sql="DELETE FROM `student_profile` WHERE `student_id` =?";
        $stmt = $conn->prepare($sql);
        return $stmt->execute($request);
    }
}


?>