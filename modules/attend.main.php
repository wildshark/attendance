<?php

class attendance{

    public static function total_student($conn,$request){

        $sql="SELECT attendance_details.sheet_id, count(attendance_details.student_id) AS total FROM attendance_details WHERE attendance_details.sheet_id =:id GROUP BY attendance_details.sheet_id";
        $stmt = $conn->prepare($sql);
        $stmt->execute([':id'=>$request]);
        $total = $stmt->fetchALL(PDO::FETCH_ASSOC);
        if($total == false){
            $output = 0;
        }else{
            $output = $total['total'];
        }

        return $output;
    }

    public static function add_total_student($conn,$request){

        $sql="UPDATE `attendance_main` SET `total_student` =? WHERE `sheet_id` =?";
        $stmt = $conn->prepare($sql);
        return $stmt->execute($request);
    }

    public static function add($conn,$request){

        $sql ="INSERT INTO `attendance_main`(`course_id`, `academic_year`, `sht_semester`, `sht_level`) VALUES (?, ?, ?, ?)";
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
            (wk1 + wk2 + wk3 + wk4 + wk5 + wk6 + wk7 + wk8 + wk9 + wk10 + wk11 + wk12) as total,
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

    public static function add_details($conn,$request){

        $sql="INSERT INTO `attendance_details`(`sheet_id`, `student_id`, `wk1`, `wk2`, `wk3`, `wk4`, `wk5`, `wk6`, `wk7`, `wk8`, `wk9`, `wk10`, `wk11`, `wk12`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        return $stmt->execute($request);
    }

    public static function update_details($conn,$request){

        $sql="UPDATE `attendance_details` SET `wk1` =?, `wk2` =?, `wk3` =?, `wk4` =?, `wk5` =?, `wk6` =?, `wk7` =?, `wk8` =?, `wk9` =?, `wk10` =?, `wk11` =?, `wk12` =? WHERE `attend_id` =?";
        $stmt = $conn->prepare($sql);
        return $stmt->execute($request);
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
        }elseif($type ==="record"){
            $sql="DELETE FROM `attendance_details` WHERE `attend_id` =:id";
            $stmt = $conn->prepare($sql);
            $output = $stmt->execute([':id'=>$request]);
        }
        return $output; 
    }
}

?>