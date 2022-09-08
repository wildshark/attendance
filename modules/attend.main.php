<?php

class attendance{

    public static function add($conn,$request){

        $sql ="INSERT INTO `attendance_main`(`course_id`, `academic_year`, `semester`, `crs_level`) VALUES (?,?,?,?)";
        $stmt = $conn->prepare($sql);
        if (false == $stmt->execute($request)){
            return false;
        }else{
            return $conn->lastInsertId();
        }
    }

    public static function update($conn,$request){

        $sql ="UPDATE `attendance_main` SET `course_id` =?, `academic_year` = ?, `semester` = ?, `crs_level` = ? WHERE `sheet_id` =";
        $stmt = $conn->prepare($sql);
        if (false == $stmt->execute($request)){
            return false;
        }else{
            return $conn->lastInsertId();
        }
    }

    public static function main_list($conn,$request = false,$type = false){

        if($type === "all"){
            $sql ="SELECT attendance_main.*, course_list.crs_code, course_list.crs_title FROM attendance_main INNER JOIN course_list ON attendance_main.course_id = course_list.course_id ORDER BY attendance_main.sheet_id DESC";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $output = $stmt->fetchALL(PDO::FETCH_ASSOC);
        }elseif($type ==="row"){
            $sql ="SELECT attendance_main.*, course_list.crs_code, course_list.crs_title FROM attendance_main INNER JOIN course_list ON attendance_main.course_id = course_list.course_id WHERE attendance_main.sheet_id = :string ORDER BY attendance_main.sheet_id DESC";
            $stmt = $conn->prepare($sql);
            $stmt->execute([":string"=>$request]);
            $output = $stmt->fetch(PDO::FETCH_ASSOC);
        }
        return $output;
    }
}

?>