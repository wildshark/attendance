<?php

function user_session(){

    session_destroy();

}

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

function programmelist($conn){
    $data = course::list($conn,false,"programme");
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
            $programme = $r['st_programme'];
            $total = $r['total'];
            $token = $_GET['token'];
            $output .="<tr>
            <td>$n</td>
            <td>
                <a href='?main=programme&ui=list&q=$programme&token=$token'>$programme</a>
            </td>
            <td class='font-weight-bold'>$total</td>
        </tr>";
        }
    }
    return $output;

}
function CountStudentByProgramme($conn){

    $data = student::count_student_by_programme($conn,$_GET['q'],"programme");
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
            $programme = $r['st_programme'];
            $level = $r['st_level'];
            $total = $r['total'];
            $token = $_GET['token'];


            $output .="<tr>
            <td>$n</td>
            <td>
                <a href='?main=student&ui=list&q=programme&prog=$programme&level=$level&token=$token'>$programme</a>
            </td>
            <td>$level</td>
            <td class='font-weight-bold'>$total</td>
        </tr>";
        }
    }
    return $output;

}

function StudentListAll($conn){
    if(!isset($_GET['q'])){
        $data = student::list($conn,false,"all");
    }else{
        if($_GET['q'] === "duplicate"){
            $data = student::list($conn,$_GET['str'],"duplicate-record");
        }elseif($_GET['q'] === "level"){
            $data = student::list($conn,$_GET['str'],"level");
        }elseif($_GET['q'] === "programme"){
            $data = student::list($conn,$_GET,"programme");
        }
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
            <a href='?submit=delete-student&id=$id&token=$token' class='btn-sm btn-outline-danger'>Delete</a>
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
            <td>
                <a href='?main=student&ui=list&q=duplicate&str=$index&token=$token' class='btn-sm btn-outline-primary'>View</a>
            </td>
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
            <td>$year</td>
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
            $id = $r['attend_id'];
            $index =$r['st_index'];
            $surname = $r['st_surname'];
            $middle = $r['st_middle'];
            $fname = $r['st_name'];
            if(!isset($r['st_middle'])){
                $fullname = $surname." ".$fname; 
            }else{
                $fullname = $surname." ".$middle." ".$fname;
            }
            $wk1 = $r['wk1'];
            $wk2 = $r['wk2'];
            $wk3 = $r['wk3'];
            $wk4 = $r['wk4'];
            $wk5 = $r['wk5'];
            $wk6 = $r['wk6'];
            $wk7 = $r['wk7'];
            $wk8 = $r['wk8'];
            $wk9 = $r['wk9'];
            $wk10 = $r['wk10'];
            $wk11 = $r['wk11'];
            $wk12 = $r['wk12'];
            $present = $total = $r['total'];
            $absent = 12 - $present;
            $token = $_GET['token'];

            $output .="<tr>
            <td>$n</td>
            <td>$index</td>
            <td>$fullname</td>
            <td>$present</td>
            <td>$absent</td>
            <td></td>
            <td>
                <a href='#' data-bs-toggle='modal' data-bs-target='#Modal$n' class='btn-sm btn-outline-primary'>Edit</a>
                <div class='modal fade' id='Modal$n' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel'
                    aria-hidden='true'>
                    <div class='modal-dialog modal-lg' role='document'>
                        <form method='post' action='index.php'>
                            <div class='modal-content'>
                                <div class='modal-header'>
                                    <h5 class='modal-title' id='exampleModalLabel'>$index $surname  $fname</h5>
                                    Present: $present day(s)  Absent: $absent day(s) 
                                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                        <span aria-hidden='true'>&times;</span>
                                    </button>

                                </div>
                                <div class='modal-body'>
                                    <div class='row'>
                                        <div class='col-md-3'>
                                            <div class='form-group row'>
                                                <label class='col-sm-3 col-form-label'>Week 01</label>
                                                <div class='col-sm-9'>
                                                    <input type='text' name='wk1' value='$wk1' class='form-control'>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='col-md-3'>
                                            <div class='form-group row'>
                                                <label class='col-sm-3 col-form-label'>Week 02</label>
                                                <div class='col-sm-9'>
                                                    <input type='text' name='wk2' value='$wk2' class='form-control'>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='col-md-3'>
                                            <div class='form-group row'>
                                                <label class='col-sm-3 col-form-label'>Week 03</label>
                                                <div class='col-sm-9'>
                                                    <input type='text' name='wk3' value='$wk3' class='form-control'>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='col-md-3'>
                                            <div class='form-group row'>
                                                <label class='col-sm-3 col-form-label'>Week 04</label>
                                                <div class='col-sm-9'>
                                                    <input type='text' name='wk4' value='$wk4' class='form-control'>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='row'>
                                        <div class='col-md-3'>
                                            <div class='form-group row'>
                                                <label class='col-sm-3 col-form-label'>Week 05</label>
                                                <div class='col-sm-9'>
                                                    <input type='text' name='wk5' value='$wk5' class='form-control'>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='col-md-3'>
                                            <div class='form-group row'>
                                                <label class='col-sm-3 col-form-label'>Week 06</label>
                                                <div class='col-sm-9'>
                                                    <input type='text' name='wk6' value='$wk6' class='form-control'>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='col-md-3'>
                                            <div class='form-group row'>
                                                <label class='col-sm-3 col-form-label'>Week 07</label>
                                                <div class='col-sm-9'>
                                                    <input type='text' name='wk7' value='$wk7' class='form-control'>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='col-md-3'>
                                            <div class='form-group row'>
                                                <label class='col-sm-3 col-form-label'>Week 08</label>
                                                <div class='col-sm-9'>
                                                    <input type='text' name='wk8' value='$wk8' class='form-control'>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='row'>
                                        <div class='col-md-3'>
                                            <div class='form-group row'>
                                                <label class='col-sm-3 col-form-label'>Week 09</label>
                                                <div class='col-sm-9'>
                                                    <input type='text' name='wk9' value='$wk9' class='form-control'>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='col-md-3'>
                                            <div class='form-group row'>
                                                <label class='col-sm-3 col-form-label'>Week 10</label>
                                                <div class='col-sm-9'>
                                                    <input type='text' name='wk10' value='$wk10' class='form-control'>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='col-md-3'>
                                            <div class='form-group row'>
                                                <label class='col-sm-3 col-form-label'>Week 11</label>
                                                <div class='col-sm-9'>
                                                    <input type='text' name='wk11' value='$wk11' class='form-control'>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='col-md-3'>
                                            <div class='form-group row'>
                                                <label class='col-sm-3 col-form-label'>Week 12</label>
                                                <div class='col-sm-9'>
                                                    <input type='text' name='wk12' value='$wk12' class='form-control'>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class='modal-footer'>
                                    <input type='hidden' name='sheet' value='$id'/>
                                    <button type='submit' name='submit' value='update-attend-details' class='btn btn-success'>Submit</button>
                                    <button type='button' class='btn btn-light' data-dismiss='modal'>Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <a href='?submit=delete-attend-details&id=$id&token=$token' class='btn-sm btn-outline-danger'>Delete</a>
            </td>
        </tr>";
        }
    }
    return $output;
}
?>