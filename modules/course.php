<?php

class course{

    public static function list($conn,$request=false,$type=false){

        if($type == "all"){
            $sql="SELECT * FROM `course_list` ORDER BY `course_id` DESC LIMIT 0,1000";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }elseif($type ==="row"){
            $sql="SELECT course_list.* FROM course_list WHERE course_list.course_id =:id";
            $stmt = $conn->prepare($sql);
            $stmt->execute([':id'=>$request]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }       
    }

    public static function update($conn,$request){

        $sql ="UPDATE `course_list` SET `crs_code` = ?, `crs_title` = ?, `crs_level` = ?, `crs_semester` =? WHERE `course_id` =?";
        $stmt = $conn->prepare($sql);
        if(false == $stmt->execute($request)){
            return false;
        }else{
            return $conn->lastInsertId();
        }
    }

    public static function add($conn,$request){

        $sql ="INSERT INTO `course_list`(`crs_code`, `crs_title`, `crs_level`, `crs_semester`) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        if(false == $stmt->execute($request)){
            return false;
        }else{
            return $conn->lastInsertId();
        }
    }
}
?>