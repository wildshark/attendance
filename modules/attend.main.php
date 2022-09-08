<?php

class attendance{

    public static function add($conn,$request){

        $sql ="INSERT INTO `ghanacu_attendance`.`attendance_main`(`course_id`, `academic_year`, `sht_semester`, `sht_level`) VALUES (?, ?, ?, ?)";
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

    public static function details_list($conn,$request = false,$type = false){

        if($type === "sheet"){
            $sql ="SELECT
            attendance_details.*, 
            student_profile.st_index, 
            student_profile.st_surname, 
            student_profile.st_middle, 
            student_profile.st_name, 
            student_profile.st_programme
        FROM
            attendance_details
            INNER JOIN
            student_profile
            ON 
                attendance_details.student_id = student_profile.student_id
        WHERE
            attendance_details.sheet_id =:id
        ORDER BY
            student_profile.st_index ASC";
            $stmt = $conn->prepare($sql);
            $stmt->execute([':id'=>$request]);
            $output = $stmt->fetchALL(PDO::FETCH_ASSOC);
        }elseif($type ==="row"){

        }
        return $output;
    }

    public static function add_details(){

        $sql="UPDATE `ghanacu_attendance`.`attendance_details` SET `wk1` = '0', `wk2` = '1', `wk3` = '1', `wk4` = '0', `wk5` = '0', `wk6` = '0', `wk7` = '1', `wk8` = '0', `wk9` = '0', `wk10` = '0', `wk11` = '0', `wk12` = '0' WHERE `attend_id` =?";
    }

    public static function delete_sheet($conn,$request=false,$type =false){

        if($type === "all"){
            $sql ="DELETE FROM `attendance_main` WHERE `sheet_id` =:id";
            $stmt = $conn->prepare($sql);
            $output = $stmt->execute([':id'=>$request]);
            if($output == false){
                $output = false;
            }else{
                $sql="DELETE FROM `attendance_details` WHERE `sheet_id` =:id";
                $stmt = $conn->prepare($sql);
                $output = $stmt->execute([':id'=>$request]);
            }
        }elseif($type ==="main"){
            $sql ="DELETE FROM `attendance_main` WHERE `sheet_id` =:id";
            $stmt = $conn->prepare($sql);
            $output = $stmt->execute([':id'=>$request]);
        }elseif($type ==="details"){
            $sql="DELETE FROM `attendance_details` WHERE `attend_id` =:id";
            $stmt = $conn->prepare($sql);
            $output = $stmt->execute([':id'=>$request]);
        }
        return $output; 
    }
}

?>