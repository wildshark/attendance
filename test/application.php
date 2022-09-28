<?php

$data = json_decode(file_get_contents("program.json"),true);

function sdm($data){
    $c="";
    foreach ($data['sdm'] as $combo) {
        $c.="<option>".$combo."</option>";
    }
    return $c;
}

function dohm($data){
    $c="";
    foreach ($data['dohm'] as $combo) {
        $c.="<option>".$combo."</option>";
    }
    return $c;
}

function dobs($data){
    $c="";
    foreach ($data['dobs'] as $combo) {
        $c.="<option>".$combo."</option>";
    }
    return $c;
}

function dohaas($data){
    $c="";
    foreach ($data['dohaas'] as $combo) {
        $c.="<option>".$combo."</option>";
    }
    return $c;
}

function sops($data){
    $c="";
    foreach ($data['sops'] as $combo) {
        $c.="<option>".$combo."</option>";
    }
    return $c;
}

function icag($data){
    $c="";
    foreach ($data['icag'] as $combo) {
        $c.="<option>".$combo."</option>";
    }
    return $c;
}

function dofp($data){
    $c="";
    foreach ($data['dofp'] as $combo) {
        $c.="<option>".$combo."</option>";
    }
    return $c;
}

function sosat($data){
    $c="";
    foreach ($data['sosat'] as $combo) {
        $c.="<option>".$combo."</option>";
    }
    return $c;
}

function dosg($data){
    $c="";
    foreach ($data['dosg'] as $combo) {
        $c.="<option>".$combo."</option>";
    }
    return $c;
}

function doe($data){
    $c="";
    foreach ($data['doe'] as $combo) {
        $c.="<option>".$combo."</option>";
    }
    return $c;
}

function doit($data){
    $c="";
    foreach ($data['doit'] as $combo) {
        $c.="<option>".$combo."</option>";
    }
    return $c;
}

function sotam($data){
    $c="";
    foreach ($data['sotam'] as $combo) {
        $c.="<option>".$combo."</option>";
    }
    return $c;
}

function soms($data){
    $c="";
    foreach ($data['soms'] as $combo) {
        $c.="<option>".$combo."</option>";
    }
    return $c;
}

function entry($data){
    $c="";
    foreach ($data['entry'] as $combo) {
        $c.="<option>".$combo."</option>";
    }
    return $c;
}

function study_type($data){
    $c="";
    foreach ($data['study_type'] as $combo) {
        $c.="<option>".$combo."</option>";
    }
    return $c;
}

function success($ref){
    return"<html>
    <head>
      <link href='https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap' rel='stylesheet'>
    </head>
      <style>
        body {
          text-align: center;
          padding: 40px 0;
          background: #EBF0F5;
        }
          h1 {
            color: #88B04B;
            font-family: 'Nunito Sans', 'Helvetica Neue', sans-serif;
            font-weight: 900;
            font-size: 40px;
            margin-bottom: 10px;
          }
          p {
            color: #404F5E;
            font-family: 'Nunito Sans', 'Helvetica Neue', sans-serif;
            font-size:20px;
            margin: 0;
          }
        i {
          color: #9ABC66;
          font-size: 100px;
          line-height: 200px;
          margin-left:-15px;
        }
        .card {
          background: white;
          padding: 60px;
          border-radius: 4px;
          box-shadow: 0 2px 3px #C8D0D8;
          display: inline-block;
          margin: 0 auto;
        }
      </style>
      <body>
        <div class='card'>
        <div style='border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;'>
          <i class='checkmark'>✓</i>
        </div>
          <h1>Success</h1> 
          <p>We received your application request;<br/> 
          we'll be in touch shortly!<br/>
          Your refer code #".$ref." 
          </p>
        </div>
      </body>
  </html>";
}

function failed(){

    return"
    <html>
        <head>
        <link href='https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap' rel='stylesheet'>
        </head>
        <style>
            body {
            text-align: center;
            padding: 40px 0;
            background: #EBF0F5;
            }
            h1 {
                color: #e40a0a;
                font-family: 'Nunito Sans', 'Helvetica Neue', sans-serif;
                font-weight: 900;
                font-size: 40px;
                margin-bottom: 10px;
            }
            p {
                color: #404F5E;
                font-family: 'Nunito Sans', 'Helvetica Neue', sans-serif;
                font-size:20px;
                margin: 0;
            }
            i {
            color: #fa0a0a;
            font-size: 100px;
            line-height: 200px;
            margin-left:-15px;
            }
            .card {
            background: white;
            padding: 60px;
            border-radius: 4px;
            box-shadow: 0 2px 3px #C8D0D8;
            display: inline-block;
            margin: 0 auto;
            }
        </style>
        <body>
            <div class='card'>
            <div style='border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;'>
            <i class='checkmark'>🗙</i>
            </div>
            <h1>Success</h1> 
            <p>We received your purchase request;<br/> we'll be in touch shortly!</p>
            </div>
        </body>
    </html>";
}


function db_post($r,$ref){

    $servername = "178.62.97.171";
    $username = "andrew";
    $password = "passwd8282";
    $dname = "application";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dname);
    
    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }else{
        
        $sql ="INSERT INTO `application`.`candidate`(`reftxt`, `fullname`, `dob`, `gender`, `email`, `pobox`, `nationality`, `mobile`, `sch_attended`, `grades`, `sdm`, `dohm`, `dobs`, `dohaas`, `sops`, `icag`, `dofp`, `sosat`, `dosag`, `doe`, `doit`, `sotam`, `soms`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssssssssssssssssssss",$ref,$r['name'],$r['birthday'],$r['gender'],$r['email'],$r['box'],$r['nationality'],$r['mobile'],$r['attended'],$r['achieved'],$r['sdm'],$r['dohm'],$r['dobs'],$r['dohaas'],$r['sops'],$r['icag'],$r['dofp'],$r['sosat'],$r['dosag'],$r['doe'],$r['doit'],$r['sotam'],$r['soms']);
        return $stmt->execute();
    }
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){
   $ref = time();
   $response = db_post($_POST,$ref); 
   if($response == false){
        echo failed();
   }else{
       echo success($ref);        
   }
   exit(0);
}
?>