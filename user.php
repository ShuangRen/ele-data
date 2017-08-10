<?php
$action = $_GET['action'];

$Model = new UserModel();

header("Access-Control-Allow-Origin: *"); // 允许任意域名发起的跨域请求  
header('Access-Control-Allow-Headers: X-Requested-With,X_Requested_With');  

switch ($action) {
    case 'getUserInfo':

        echo json_encode($Model->getUserInfo());
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

    public function getUserInfo() {
        if(!$_COOKIE['user']) {
            return [
                'code' => '10001',
                'msg' => '未登录'
            ];
        };

        return [
            'userName' => '大板栗',
            'mobile' => '130****1120',
            'score' => '502345',
            'coupon' => [
                [
                    'money' => '7',
                    'rule' => '满49元可用',
                    'name' => '果蔬生鲜专享',
                    'time' => '2017-8-15',
                    'mobile' => '180 2121 2220'
                ],
                [
                    'money' => '5',
                    'rule' => '满30元可用',
                    'name' => '夜宵专用券',
                    'time' => '2017-8-15',
                    'mobile' => '180 2121 2220'
                ]
            ]
        ];
    }

    public function login() {

        $mobile = $_POST['mobile'] || '';
        $password = $_POST['password'] || '';

        setcookie('user','isLogin',time() + 1800 + (8 * 3600), '/');

        return [
            'code' => 0,
            'msg' => '登陆成功'
        ];

    }

    public function logout() {
        setcookie('user','isLogin', time() -3600, '/');
        return [
            'code' => 0,
            'msg' => '退出登录成功'
        ];
    }
}

?>