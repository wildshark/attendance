<?php
session_start();
include("control/control.php");
include("control/function.php");
include("control/global.php");

include("modules/user.php");
include("modules/student.php");
include("modules/course.php");
include("modules/attend.main.php");
//include("../module/brand.php");
//include("../module/sales.php");
//include("../module/purchase.php");
//include("../module/transaction.php");
//include("../module/inventory.php");
//include("../module/transfer.php");
//include("../module/summary.php");


if(!isset($_REQUEST['submit'])){
    if(!isset($_REQUEST['main'])){
        require("frame/login.php");
        exit();
    }else{
        switch($_REQUEST['main']){

            case"dashboard";
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
                    $tream ="";

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
                        $tream ="";

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

                        $button ="Update";
                        $value = "update-student";
                    }
                    $content = "view/student/form.php";
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
                }
            break;

        
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
                    "main"=>"dashboard",
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
                    "main"=>"dashboard",
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
                    "main"=>"dashboard",
                    "e"=>200,
                    "token"=>$_COOKIE['token']
                );
            }
        break;

        




    }
    header("location: ?".http_build_query($url));
    $conn=null;
}
?>