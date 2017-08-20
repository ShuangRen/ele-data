<?php
$action = $_GET['action'];

$Model = new ShopModel();

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
    case 'getOrderInfo':
        echo json_encode($Model->getOrderInfo());
        break;
    case 'submitOrder':
        echo json_encode($Model->submitOrder());
        break;
}


class ShopModel {

    public function __construct() {}

    public function getStore($id) {
        include('./index.php');

        $sid = $_GET['sid'] || $id;

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

        //hack
        $sid = 1;

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
                                pid => '1',
                                name => '新奥尔良鸡翅',
                                desc => '2个一对',
                                number => '724',
                                good => '78',
                                price => '8',
                                img => 'http://fuss10.elemecdn.com/6/0c/576d1f75f566c2b6128ae583f9af9jpeg.jpeg'
                            ],
                            [
                                pid => '2',
                                name => '葡式蛋挞',
                                desc => '2个一份',
                                number => '517',
                                good => '100%',
                                price => '7',
                                img => 'https://fuss10.elemecdn.com/1/e3/f700f481d423af7ae13de6fd2e36bjpeg.jpeg'
                            ],
                            [
                                pid => '3',
                                name => '意式烤肠',
                                desc => '2根',
                                number => '436',
                                good => '99%',
                                price => '7',
                                img => 'https://fuss10.elemecdn.com/e/83/06cae706249828db600728f9307c6jpeg.jpeg'
                            ],
                            [
                                pid => '4',
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
                                pid => '5',
                                name => '新奥尔良鸡翅',
                                desc => '2个一对',
                                number => '724',
                                good => '78',
                                price => '8',
                                img => 'http://fuss10.elemecdn.com/6/0c/576d1f75f566c2b6128ae583f9af9jpeg.jpeg'
                            ],
                            [
                                pid => '6',
                                name => '葡式蛋挞',
                                desc => '2个一份',
                                number => '517',
                                good => '100%',
                                price => '7',
                                img => 'https://fuss10.elemecdn.com/1/e3/f700f481d423af7ae13de6fd2e36bjpeg.jpeg'
                            ],
                            [
                                pid => '7',
                                name => '意式烤肠',
                                desc => '2根',
                                number => '436',
                                good => '99%',
                                price => '7',
                                img => 'https://fuss10.elemecdn.com/e/83/06cae706249828db600728f9307c6jpeg.jpeg'
                            ],
                            [
                                pid => '8',
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
                                pid => '9',
                                name => '新奥尔良鸡翅',
                                desc => '2个一对',
                                number => '724',
                                good => '78',
                                price => '8',
                                img => 'http://fuss10.elemecdn.com/6/0c/576d1f75f566c2b6128ae583f9af9jpeg.jpeg'
                            ],
                            [
                                pid => '10',
                                name => '葡式蛋挞',
                                desc => '2个一份',
                                number => '517',
                                good => '100%',
                                price => '7',
                                img => 'https://fuss10.elemecdn.com/1/e3/f700f481d423af7ae13de6fd2e36bjpeg.jpeg'
                            ],
                            [
                                pid => '11',
                                name => '意式烤肠',
                                desc => '2根',
                                number => '436',
                                good => '99%',
                                price => '7',
                                img => 'https://fuss10.elemecdn.com/e/83/06cae706249828db600728f9307c6jpeg.jpeg'
                            ],
                            [
                                pid => '12',
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

    public function getOrderInfo() {
        return [
            'code'=>0,
            'data'=>[
                'time'=>[
                    0=>'预计12:01',
                    1=>'12.01-12.30',
                    2=>'12.31-13.00',
                    3=>'13.01-13.30',
                    4=>'13.31-14.00',
                    5=>'14.01-14.30',
                    6=>'14.31-15.00',
                ],
                id => '1',
                'store'=> $this->getStore(1),
                'orderList'=> [
                    [
                        pid => '1',
                        name => '新奥尔良鸡翅',
                        num => '1',
                        price => '22'
                    ],
                    [
                        pid => '2',
                        name => '葡式蛋挞',
                        num => '2',
                        price => '7'
                    ],
                    [
                        pid => '3',
                        name => '意式烤肠',
                        num => '1',
                        price => '8'
                    ],
                    [
                        pid => '4',
                        name => '劲脆鸡腿堡',
                        num => '1',
                        price => '14'
                    ],
                ],
                expressMoney => '5'
            ],
        ];
    }

    /**
    * address:
    * time:
    * oid:
    * price:
    * note:
    * title:
    **/
    public function submitOrder() {
        $post = $_POST;

        if(empty($post['address'])) {
            return [
                code=>'400',
                msg=>'填写配送地址'
            ];
        };
        if(empty($post['time'])) {
            return [
                code=>'400',
                msg=>'填写配送时间'
            ];
        };

        return [
            code=>0,
            msg=>'提交成功'
        ];
    }
}

?>