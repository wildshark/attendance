<?php
session_start();

include("control/control.php");
include("control/function.php");
include("control/global.php");

include("modules/user.php");
include("modules/student.php");
include("modules/course.php");
include("modules/attend.main.php");

if(!isset($_REQUEST['submit'])){
    if(!isset($_REQUEST['main'])){
        require("frame/login.php");
        exit();
    }else{
        switch($_REQUEST['main']){

            case"dashboard";
                $_100 = student::count_student_by_level($conn,100,"row");
                $_200 = student::count_student_by_level($conn,200,"row");
                $_300 = student::count_student_by_level($conn,300,"row");
                $_400 = student::count_student_by_level($conn,400,"row");
                $total_student = $_100 + $_200 + $_300 + $_400;
                $p100 = ($_100/$total_student)*100;
                $p200 = ($_200/$total_student)*100;
                $p300 = ($_300/$total_student)*100;
                $p400 = ($_400/$total_student)*100;
                $content = "view/dashboard.php";
            break;

            case"student";
                if($_REQUEST['ui'] === "list"){
                    $content = "view/student/list.php";
                }elseif($_REQUEST['ui'] ==="add"){
                    $index ="";
                    $surname = "";
                    $middle = "";
                    $fname ="";
                    $programme ="";
                    $level = "";
                    $nationality ="";
                    $mobile ="";
                    $email="";
                    $entry="";
                    $stream ="";
                    $status ="";

                    $button ="Submit";
                    $value = "add-student";
                    
                    $content = "view/student/form.php";
                }elseif($_REQUEST['ui'] === "edit"){
                    $_SESSION['rID'] = $_GET['id'];
                    $student = student::list($conn,$_GET['id'],'row');
                    if($student == false){
                        $index ="";
                        $surname = "";
                        $middle = "";
                        $fname ="";
                        $programme ="";
                        $level = "";
                        $nationality ="";
                        $mobile ="";
                        $email="";
                        $entry="";
                        $stream ="";
                        $status ="";

                        $button ="Submit";
                        $value = "add-student";
                    }else{
                        $index = $student['st_index'];
                        $surname = $student['st_surname'];
                        $middle = $student['st_middle'];
                        $fname =$student['st_name'];
                        $programme =$student['st_programme'];
                        $level = $student['st_level'];
                        $nationality =$student['st_nationality'];
                        $mobile =$student['st_mobile'];
                        $email=$student['st_email'];
                        $entry=$student['entry_year'];
                        $stream =$student['stream'];
                        $status ="";

                        $button ="Update";
                        $value = "update-student";
                    }
                    $content = "view/student/form.php";
                }elseif($_REQUEST['ui'] === "duplicate"){
                    $content = "view/student/duplicate.php";
                }
            break;

            case"course";
                if($_REQUEST['ui'] === "list"){
                    $content = "view/course/list.php";
                }elseif($_REQUEST['ui'] === "add"){
                    $code ="";
                    $title ="";
                    $level ="";
                    $semester ="";

                    $button ="Submit";
                    $value = "add-course";
                    
                    $content = "view/course/form.php";
                }elseif($_REQUEST['ui'] === "edit"){
                    $_SESSION['rID'] = $_GET['id'];
                    $course = course::list($conn,$_GET['id'],'row');
                    if($course === false){
                        $code ="";
                        $title ="";
                        $level ="";
                        $semester ="";

                        $button ="Submit";
                        $value = "add-course";
                    }else{
                        $code = $course['crs_code'];
                        $title = $course['crs_title'];
                        $level = $course['crs_level'];
                        $semester = $course['crs_semester'];

                        $button ="Update";
                        $value = "update-course";
                    }
                    $content = "view/course/form.php";
                }
            break;

            case"attendance";
                if($_REQUEST['ui'] ==="list"){
                    $content = "view/attendance/list.php";
                }elseif($_REQUEST['ui']==="add"){
                    $content = "view/attendance/form.php";
                }elseif($_REQUEST['ui'] ==="edit"){
                    $content = "view/attendance/form.php";
                }elseif($_REQUEST['ui'] === "details"){
                    $_SESSION['sheetID'] = $_GET['id'];
                    $_SESSION["courseID"] = $_GET['crs'];
                    $wk1 = "0";
                    $wk2 = "0";
                    $wk3 = "0";
                    $wk4 = "0";
                    $wk5 = "0";
                    $wk6 = "0";
                    $wk7 = "0";
                    $wk8 = "0";
                    $wk9 = "0";
                    $wk10 = "0";
                    $wk11 = "0";
                    $wk12 = "0";
                    $content = "view/attendance/details.list.php";
                }
            break;

            default:
                require("frame/500.php");
                exit(0);
        }
        require("frame/frame.horizontal.php");
    }
}else{

    switch($_REQUEST['submit']){

        case"sign-in";
            $q[] = $_REQUEST['username'];
            $q[] = $_REQUEST['password'];
            $response = user::login($conn,$q);
            if($response == false){
                $url = array(
                    "user"=>false,
                );
            }else{
                    
                $_SESSION['usrID'] = $response['user_id'];
                $token = GenToken($response['user_id'],uniqid());
                setcookie("username",$response['username']);
                setcookie("fullname",$response['fname']);
                setcookie("token",$token);
                $url = array(
                    "main"=>"dashboard",
                    "token"=>$token
                ); 
            }
        break;

        case"add-student";
            $q[] = $_POST['index'];
            $q[] = $_POST['surname'];
            $q[] = $_POST['middle'];
            $q[] = $_POST['fname'];
            $q[] = $_POST['programme'];
            $q[] = $_POST['level'];
            $q[] = $_POST['nationality'];
            $q[] = $_POST['mobile'];
            $q[] = $_POST['email'];
            $q[] = $_POST['entry'];
            $q[] = $_POST['stream'];
            $response = student::add($conn,$q);
            if($response == false){
                $url = array(
                    "main"=>"dashboard",
                    "token"=>$_COOKIE['token']
                );
            }else{
                $url = array(
                    "main"=>"student",
                    "ui"=>"list",
                    "e"=>200,
                    "token"=>$_COOKIE['token']
                );
            }
        break;

        case"update-student";
            $q[] = $_POST['index'];
            $q[] = $_POST['surname'];
            $q[] = $_POST['middle'];
            $q[] = $_POST['fname'];
            $q[] = $_POST['programme'];
            $q[] = $_POST['level'];
            $q[] = $_POST['nationality'];
            $q[] = $_POST['mobile'];
            $q[] = $_POST['email'];
            $q[] = $_POST['entry'];
            $q[] = $_POST['stream'];
            $q[] = $_SESSION['rID'];
            $response = student::update($conn,$q);
            if($response == false){
                $url = array(
                    "main"=>"dashboard",
                    "token"=>$_COOKIE['token']
                );
            }else{
                $url = array(
                    "main"=>"student",
                    "ui"=>"edit",
                    "id"=>$_SESSION['rID'],
                    "e"=>200,
                    "token"=>$_COOKIE['token']
                );
            }
        break;

        case"delete-student";
            $response = student::delete($conn,$_REQUEST['id']);
            if($response == false){
                $url = array(
                    "main"=>"dashboard",
                    "token"=>$_COOKIE['token']
                );
            }else{
                $url = array(
                    "main"=>"student",
                    "ui"=>"list",
                    "e"=>200,
                    "token"=>$_COOKIE['token']
                );
            }
        break;

        case"add-attend-main";
            $q[] = $_POST['course'];
            $q[] = $_POST['year'];
            $q[] = $_POST['semester'];
            $q[] = $_POST['level'];
            $response = attendance::add($conn,$q);
            if($response == false){
                $url = array(
                    "main"=>"dashboard",
                    "token"=>$_COOKIE['token']
                );
            }else{
                $url = array(
                    "main"=>"attendance",
                    "ui"=>"list",
                    "e"=>200,
                    "token"=>$_COOKIE['token']
                );
            }
        break;

        case"delete-attend-main";
            $response = attendance::delete_sheet($conn,$_REQUEST['id'],"all");
            if($response == false){
                $url = array(
                    "main"=>"dashboard",
                    "token"=>$_COOKIE['token']
                );
            }else{
                $url = array(
                    "main"=>"attendance",
                    "ui"=>"list",
                    "e"=>200,
                    "token"=>$_COOKIE['token']
                );
            }
        break;

        case"add-attend-details";
            $q[] = $_SESSION['sheetID'];
            $q[] = $_POST['student'];
            $q[] = $_POST['wk1'];
            $q[] = $_POST['wk2'];
            $q[] = $_POST['wk3'];
            $q[] = $_POST['wk4'];
            $q[] = $_POST['wk5'];
            $q[] = $_POST['wk6'];
            $q[] = $_POST['wk7'];
            $q[] = $_POST['wk8'];
            $q[] = $_POST['wk9'];
            $q[] = $_POST['wk10'];
            $q[] = $_POST['wk11'];
            $q[] = $_POST['wk12'];
            $response = attendance::add_details($conn,$q);
            if($response == false){
                $url = array(
                    "main"=>"dashboard",
                    "token"=>$_COOKIE['token']
                );
            }else{
                $q[] = attendance::total_student($conn,$_SESSION['sheetID']);
                $q[] = $_SESSION['sheetID'];
                $add_total = attendance::add_total_student($conn,$q);
                $url = array(
                    "main"=>"attendance",
                    "ui"=>"details",
                    "id"=>$_SESSION['sheetID'],
                    "crs"=>$_SESSION["courseID"],
                    "token"=>$_COOKIE['token']
                );
            }
        break;
        
        case"update-attend-details";
            $q[] = $_POST['wk1'];
            $q[] = $_POST['wk2'];
            $q[] = $_POST['wk3'];
            $q[] = $_POST['wk4'];
            $q[] = $_POST['wk5'];
            $q[] = $_POST['wk6'];
            $q[] = $_POST['wk7'];
            $q[] = $_POST['wk8'];
            $q[] = $_POST['wk9'];
            $q[] = $_POST['wk10'];
            $q[] = $_POST['wk11'];
            $q[] = $_POST['wk12'];
            $q[] = $_POST['sheet'];
            $response = attendance::update_details($conn,$q);
            if($response == false){
                $url = array(
                    "main"=>"dashboard",
                    "token"=>$_COOKIE['token']
                );
            }else{
                $q[] = attendance::total_student($conn,$_SESSION['sheetID']);
                $q[] = $_SESSION['sheetID'];
                $add_total = attendance::add_total_student($conn,$q);
                $url = array(
                    "main"=>"attendance",
                    "ui"=>"details",
                    "id"=>$_SESSION['sheetID'],
                    "crs"=>$_SESSION["courseID"],
                    "token"=>$_COOKIE['token']
                );
            }
        break;

        case"delete-attend-details";
            $response = attendance::delete_sheet($conn,$_GET['id'],"record");
            if($response == false){
                $url = array(
                    "main"=>"dashboard",
                    "token"=>$_COOKIE['token']
                );
            }else{
                $q[] = attendance::total_student($conn,$_SESSION['sheetID']);
                $q[] = $_SESSION['sheetID'];
                $add_total = attendance::add_total_student($conn,$q);
                $url = array(
                    "main"=>"attendance",
                    "ui"=>"details",
                    "id"=>$_SESSION['sheetID'],
                    "crs"=>$_SESSION["courseID"],
                    "token"=>$_COOKIE['token']
                );
            }
        break;

        default:
            require("frame/500.php");
            exit(0);
    }
    header("location: ?".http_build_query($url));
    $conn=null;
}
?>