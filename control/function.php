<?php

function msgBox($err){

    if(!isset($err)){
        return "";
    }else{
        switch($err){

            case 200;

            break;

            default:
                
        }
    }
    $output = "<div class='alert alert-secondary alert-dismissible fade show' role='alert'>
    <strong>Holy guacamole!</strong> You should check in on some of those fields below.
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>";

    return $output;
}

function GenToken($user,$string){
    if(!isset($user)){
        $user = 0;
    }
    return md5($user.$string);
}

function StudentCombo($conn){
    $output ="";
    $data = student::list($conn,false,"all");

    if($data == false){
        $output ="";
    }else{
        foreach($data as $r){
            $id = $r['student_id'];
            $index = $r['st_index'];
            $surname = $r['st_surname'];
            $middle = $r['st_middle'];
            $fname = $r['st_name'];
            if(!isset($r['st_middle'])){
                $name = $surname." ".$fname;
            }else{
                $name = $surname." ".$middle." ".$fname;
            }
           
            $output .="<option value='$id'>$index - $name</option>";
        } 
        
    }
   return $output;
}


function CourseCombo($conn){
    $output ="";
    $data = course::list($conn,false,"all");

    if($data == false){
        $output ="";
    }else{
        foreach($data as $r){
            $id = $r['course_id'];
            $string = $r['crs_code'] - $r['crs_title'];          
            $output .="<option value='$id'>$string</option>";
        } 
        
    }
   return $output;
}

function LevelCombo(){
    $output ="";
    $data = [100,200,300,400];
    if($data == false){
        $output ="";
    }else{
        foreach($data as $string){
            $output .="<option value='$string'>$string</option>";
        }
    }
    return $output;
}

function SemesterCombo(){
    $output ="";
    $data = ["1st Semester","2nd Semester"];
    if($data == false){
        $output ="";
    }else{
        foreach($data as $string){
            if(!isset($id)){
                $id = 1;
            }else{
                $id = $id + 1;
            }
            
            $output .="<option value='$id'>$string</option>";
        }
    }
    return $output;
}


function StudentListAll($conn){
    if(!isset($_GET['q'])){
        $data = student::list($conn,false,"all");
    }else{
        $data = student::list($conn,$_GET['q'],"level");
    }
    $output="";
    if((!isset($data))||($data == false)){
        $output="";
    }else{
        foreach ($data as $r){
            if(!isset($n)){
                $n = 1;
            }else{
                $n = $n + 1;
            }
            $id = $r['student_id'];
            $index = $r['st_index'];
            $surname = $r['st_surname'];
            $middle = $r['st_middle'];
            $name = $r['st_name'];
            $programme = $r['st_programme'];
            $level = $r['st_level'];
            $nationality = $r['st_nationality'];
            $mobile = $r['st_mobile'];
            $email = $r['st_email'];
            $entry = $r['entry_year'];
            $stream = $r['stream'];
            $token = $_GET['token'];

            $output .="<tr>
            <td>$n</td>
            <td>$index</td>
            <td>$surname</td>
            <td>$middle</td>
            <td>$name</td>
            <td>$programme</td>
            <td>$level</td>
            <td>$nationality</td>
            <td>$mobile</td>
            <td>
            <a href='?main=student&ui=edit&id=$id&token=$token' class='btn-sm btn-outline-primary'>Edit</a>
            </td>
        </tr>";
        }
    }
    return $output;
}

function StudentIndexDuplicate($conn){

    $data = student::list($conn,false,"duplicate");
    $output="";
    if((!isset($data))||($data == false)){
        $output="";
    }else{
        foreach ($data as $r){
            if(!isset($n)){
                $n = 1;
            }else{
                $n = $n + 1;
            }
            $index = $r['st_index'];
            $duplicate= $r['st_index_duplicate'];
            $token = $_GET['token'];

            $output .="<tr>
            <td>$n</td>
            <td>$index</td>
            <td>$duplicate</td>
        </tr>";
        }
    }
    return $output;

}

function CourseListAll($conn){
    $data = course::list($conn,false,"all");
    $output="";
    if((!isset($data))||($data == false)){
        $output="";
    }else{
        foreach ($data as $r){
            if(!isset($n)){
                $n = 1;
            }else{
                $n = $n + 1;
            }
            $id = $r['course_id'];
            $code = $r['crs_code'];
            $title = $r['crs_title'];
            $level = $r['crs_level'];
            $semester = $r['crs_semester'];
            $token = $_GET['token'];

            $output .="<tr>
            <td>$n</td>
            <td>$code</td>
            <td>$title</td>
            <td>$level</td>
            <td>$semester</td>
            <td>
            <a href='?main=course&ui=edit&id=$id&token=$token' class='btn-sm btn-outline-primary'>Edit</a>
            </td>
        </tr>";
        }
    }
    return $output;
}

function AttendMainListSheet($conn){
    $data = attendance::main_list($conn,false,"all");
    $output="";
    if((!isset($data))||($data == false)){
        $output="";
    }else{
        foreach ($data as $r){
            if(!isset($n)){
                $n = 1;
            }else{
                $n = $n + 1;
            }
            $id = $r['sheet_id'];
            $course_id = $r['course_id'];
            $code = $r['crs_code'];
            $title = $r['crs_title'];
            $level = $r['sht_level'];
            $year = $r['academic_year'];
            $semester = $r['sht_semester'];
            $total_st = $r['total_student'];
            $token = $_GET['token'];

            $output .="<tr>
            <td>$n</td>
            <td>$code</td>
            <td>$title</td>
            <td>$level</td>
            <td>$semester</td>
            <td>$total_st</td>
            <td>
                <a href='?main=attendance&ui=edit&id=$id&token=$token' class='btn-sm btn-outline-primary'>Edit</a>
                <a href='?main=attendance&ui=details&id=$id&crs=$course_id&token=$token' class='btn-sm btn-outline-success'>List</a>
                <a href='?submit=delete-attend-main&id=$id&token=$token' class='btn-sm btn-outline-danger'>Delete</a>
            </td>
        </tr>";
        }
    }
    return $output;
}

function AttendDetailsListSheet($conn){
    $data = attendance::details_list($conn,$_GET['id'],"sheet");
    $output="";
    if((!isset($data))||($data == false)){
        $output="";
    }else{
        foreach ($data as $r){
            if(!isset($n)){
                $n = 1;
            }else{
                $n = $n + 1;
            }
            $id = $r['sheet_id'];
            $course_id = $r['course_id'];
            $code = $r['crs_code'];
            $title = $r['crs_title'];
            $level = $r['sht_level'];
            $year = $r['academic_year'];
            $semester = $r['sht_semester'];
            $total_st = $r['total_student'];
            $token = $_GET['token'];

            $output .="<tr>
            <td>$n</td>
            <td>$code</td>
            <td>$title</td>
            <td>$level</td>
            <td>$semester</td>
            <td>$total_st</td>
            <td>
                <a href='?main=attendance&ui=edit&id=$id&token=$token' class='btn-sm btn-outline-primary'>Edit</a>
                <a href='?main=attendance&ui=details&id=$id&crs=$course_id&token=$token' class='btn-sm btn-outline-success'>List</a>
                <a href='?submit=delete-attend-main&id=$id&token=$token' class='btn-sm btn-outline-danger'>Delete</a>
            </td>
        </tr>";
        }
    }
    return $output;
}
?>