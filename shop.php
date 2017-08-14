<?php
$action = $_GET['action'];

$Model = new UserModel();

header("Access-Control-Allow-Origin: *"); // 允许任意域名发起的跨域请求 
header("Access-Control-Allow-Credentials: true"); 
header("Access-Control-Max-Age: 60"); 

switch ($action) {
    case 'getStore':

        echo json_encode($Model->getStore());
        break;
    case 'getProductList':
        echo json_encode($Model->getProductList());
        break;
    case 'logout':
        echo json_encode($Model->logout());
        break;

}


class UserModel {

    public function __construct() {}

    public function getStore() {
        include('./index.php');

        $sid = $_GET['sid'];

        $indexModel = new IndexModel();

        $list = $indexModel->hotStore(1, 15);

        $items = [];
        foreach($list['data'] as $key => $value) {

            if($value['sid'] == $sid) {
                $items = $value;
            }
        };

        return [
            code => 0,
            data => $items
        ];
    }

    public function getProductList() {
        $sid = $_GET['sid'];

        $list = $this->getProduct();

        $items = [];
        foreach ($list as $key => $value) {
            if($value['sid'] == $sid) {
                $items = $value;
            }
        };

        return [
            code => 0,
            data => $items,
        ];
    }

    private function getProduct() {
        return [
            [
                'sid' => 1,
                'product' => [
                    [
                        'name' => '热销',
                        'list' => [
                            [
                                name => '新奥尔良鸡翅',
                                desc => '2个一对',
                                number => '724',
                                good => '78',
                                price => '8',
                                img => 'http://fuss10.elemecdn.com/6/0c/576d1f75f566c2b6128ae583f9af9jpeg.jpeg'
                            ],
                            [
                                name => '葡式蛋挞',
                                desc => '2个一份',
                                number => '517',
                                good => '100%',
                                price => '7',
                                img => 'https://fuss10.elemecdn.com/1/e3/f700f481d423af7ae13de6fd2e36bjpeg.jpeg'
                            ],
                            [
                                name => '意式烤肠',
                                desc => '2根',
                                number => '436',
                                good => '99%',
                                price => '7',
                                img => 'https://fuss10.elemecdn.com/e/83/06cae706249828db600728f9307c6jpeg.jpeg'
                            ],
                            [
                                name => '劲脆鸡腿堡',
                                desc => '',
                                number => '333',
                                good => '99%',
                                price => '14',
                                img => 'https://fuss10.elemecdn.com/3/f6/c8e7e571e44078c4c6ee09788a298jpeg.jpeg'
                            ]
                        ]
                    ],
                    [
                        'name' => '优惠',
                        'list' => [
                            [
                                name => '新奥尔良鸡翅',
                                desc => '2个一对',
                                number => '724',
                                good => '78',
                                price => '8',
                                img => 'http://fuss10.elemecdn.com/6/0c/576d1f75f566c2b6128ae583f9af9jpeg.jpeg'
                            ],
                            [
                                name => '葡式蛋挞',
                                desc => '2个一份',
                                number => '517',
                                good => '100%',
                                price => '7',
                                img => 'https://fuss10.elemecdn.com/1/e3/f700f481d423af7ae13de6fd2e36bjpeg.jpeg'
                            ],
                            [
                                name => '意式烤肠',
                                desc => '2根',
                                number => '436',
                                good => '99%',
                                price => '7',
                                img => 'https://fuss10.elemecdn.com/e/83/06cae706249828db600728f9307c6jpeg.jpeg'
                            ],
                            [
                                name => '劲脆鸡腿堡',
                                desc => '',
                                number => '333',
                                good => '99%',
                                price => '14',
                                img => 'https://fuss10.elemecdn.com/3/f6/c8e7e571e44078c4c6ee09788a298jpeg.jpeg'
                            ]
                        ]
                    ],
                    [
                        'name' => '披萨',
                        'list' => [
                            [
                                name => '新奥尔良鸡翅',
                                desc => '2个一对',
                                number => '724',
                                good => '78',
                                price => '8',
                                img => 'http://fuss10.elemecdn.com/6/0c/576d1f75f566c2b6128ae583f9af9jpeg.jpeg'
                            ],
                            [
                                name => '葡式蛋挞',
                                desc => '2个一份',
                                number => '517',
                                good => '100%',
                                price => '7',
                                img => 'https://fuss10.elemecdn.com/1/e3/f700f481d423af7ae13de6fd2e36bjpeg.jpeg'
                            ],
                            [
                                name => '意式烤肠',
                                desc => '2根',
                                number => '436',
                                good => '99%',
                                price => '7',
                                img => 'https://fuss10.elemecdn.com/e/83/06cae706249828db600728f9307c6jpeg.jpeg'
                            ],
                            [
                                name => '劲脆鸡腿堡',
                                desc => '',
                                number => '333',
                                good => '99%',
                                price => '14',
                                img => 'https://fuss10.elemecdn.com/3/f6/c8e7e571e44078c4c6ee09788a298jpeg.jpeg'
                            ]
                        ]
                    ]
                ]
            ]
        ];
    }
}

?>