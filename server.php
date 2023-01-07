<?php
   header("Access-Control-Allow-Origin: *");
   header("Content-Type: application/json; charset=UTF-8");
   header("Access-Control-Allow-Methods: GET,POST");
   header("Access-Control-Max-Age: 3600");
   header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
    
   session_start();
   $_POST = json_decode(file_get_contents('php://input'), true);
if(isset($_POST['login'])){
    $_SESSION['logged'] = ["email"=> $_POST['email']];
    echo json_encode(["user"=>"Monu"]);
}
if (isset($_GET['logstatus'])) {
    if (isset($_SESSION['logged'])) {
        echo json_encode(["user"=>"Monu"]);
    }else{
        echo json_encode(["error"=>"Nouser"]);
    }
}
?>

