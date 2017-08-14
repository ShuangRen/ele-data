<?php
$action = $_GET['action'];

$Model = new UserModel();

header("Access-Control-Allow-Origin: *"); // 允许任意域名发起的跨域请求  
header('Access-Control-Allow-Headers: X-Requested-With,X_Requested_With');  

switch ($action) {
    case 'getStore':

        echo json_encode($Model->getStore());
        break;
    case 'login':
        echo json_encode($Model->login());
        break;
    case 'logout':
        echo json_encode($Model->logout());
        break;

}


class UserModel {

    public function __construct() {}


}

?>