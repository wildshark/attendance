<?php

class programme{

    public static function list($conn,$request=false,$action=false){

        if($action === "list"){
            $sql ="SELECT programme.*, schools.sch_prefix FROM programme INNER JOIN schools ON programme.school_id = schools.school_id";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $output = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }elseif($action === "row"){
            $sql ="SELECT programme.* FROM programme WHERE programme.programme_id =:id";
            $stmt = $conn->prepare($sql);
            $stmt->execute([':id'=>$request]);
            $output = $stmt->fetch(PDO::FETCH_ASSOC);
        }

        return $output;
    }

    public static function add($conn,$request){

        $sql="INSERT INTO `programme` (`school_id`, `programme_name`, `cerificate`) VALUES (?,?,?)";
        $stmt = $conn->prepare($sql);
        return $stmt->execute($request);
    }

    public static function update($conn,$request){

        $sql = "UPDATE `programme` SET `school_id` =?, `programme_name` =? WHERE `programme_id` =?";
        $stmt = $conn->prepare($sql);
        return $stmt->execute($request);
    }

    public static function delete($conn,$request){

        $sql = "DELETE FROM `programme` WHERE `programme_id` =?";
        $stmt = $conn->prepare($sql);
        return $stmt->execute($request);

    }
}


?>