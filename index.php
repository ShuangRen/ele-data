<?php

$action = $_GET['action'];

$page = $_GET['page'];

$limit = $_GET['limit'];

$module = new IndexModel();

header("Access-Control-Allow-Origin: *"); // 允许任意域名发起的跨域请求  
header('Access-Control-Allow-Headers: X-Requested-With,X_Requested_With');  

switch ($action) {
    case 'hotProduct':

        echo json_encode($module->hotProduct());
        break;
    case 'categoryList':
        echo json_encode($module->categoryList());
        break;
    case 'hotStore':
        echo json_encode($module->hotStore($page, $limit));
        break;

}

class IndexModel {

    public function __construct() {}

    public function hotProduct() {
        return [
            page => '1',
            count => '10',
            data => [
                [
                    'sid' => '1',
                    'name' => '百香果'
                ],
                [
                    'sid' => '2',
                    'name' => '羊肉'
                ],
                [
                    'sid' => '3',
                    'name' => '柠檬茶'
                ],
                [
                    'sid' => '4',
                    'name' => '水果49减20'
                ],
                [
                    'sid' => '5',
                    'name' => '我的菜'
                ],
                [
                    'sid' => '6',
                    'name' => '星巴克'
                ],
                [
                    'sid' => '7',
                    'name' => '白切羊肉'
                ],
                [
                    'sid' => '8',
                    'name' => '水饺'
                ],
                [
                    'sid' => '9',
                    'name' => '龙虾'
                ],
                [
                    'sid' => '10',
                    'name' => '西瓜'
                ],
            ]
        ];
    }

    public function categoryList() {
        return [
            count => '16',
            page => '1',
            data => [
                [
                    cid => '1',
                    img => '//fuss10.elemecdn.com/b/7e/d1890cf73ae6f2adb97caa39de7fcjpeg.jpeg?imageMogr/format/webp/thumbnail/!90x90r/gravity/Center/crop/90x90/',
                    name => '美食'
                ],
                [
                    cid => '2',
                    img => '//fuss10.elemecdn.com/2/35/696aa5cf9820adada9b11a3d14bf5jpeg.jpeg?imageMogr/format/webp/thumbnail/!90x90r/gravity/Center/crop/90x90/',
                    name => '甜品饮品'
                ],
                [
                    cid => '3',
                    img => '//fuss10.elemecdn.com/6/d2/de0683a49a0655c728b70fdb344d5jpeg.jpeg?imageMogr/format/webp/thumbnail/!90x90r/gravity/Center/crop/90x90/',
                    name => '异国料理'
                ],
                [
                    cid => '4',
                    img => '//fuss10.elemecdn.com/0/da/f42235e6929a5cb0e7013115ce78djpeg.jpeg?imageMogr/format/webp/thumbnail/!90x90r/gravity/Center/crop/90x90/',
                    name => '商超便利'
                ],
                [
                    cid => '5',
                    img => '//fuss10.elemecdn.com/d/49/7757ff22e8ab28e7dfa5f7e2c2692jpeg.jpeg?imageMogr/format/webp/thumbnail/!90x90r/gravity/Center/crop/90x90/',
                    name => '预订早餐'
                ],
                [
                    cid => '6',
                    img => '//fuss10.elemecdn.com/c/db/d20d49e5029281b9b73db1c5ec6f9jpeg.jpeg?imageMogr/format/webp/thumbnail/!90x90r/gravity/Center/crop/90x90/',
                    name => '果蔬生鲜'
                ],
                [
                    cid => '7',
                    img => '//fuss10.elemecdn.com/a/fa/d41b04d520d445dc5de42dae9a384jpeg.jpeg?imageMogr/format/webp/thumbnail/!90x90r/gravity/Center/crop/90x90/',
                    name => '新店特惠'
                ],
                [
                    cid => '8',
                    img => '//fuss10.elemecdn.com/3/84/8e031bf7b3c036b4ec19edff16e46jpeg.jpeg?imageMogr/format/webp/thumbnail/!90x90r/gravity/Center/crop/90x90/',
                    name => '准时达'
                ],
                [
                    cid => '9',
                    img => '//fuss10.elemecdn.com/4/07/e6c5aa440aa33e1e936ff1b6dae0ejpeg.jpeg?imageMogr/format/webp/thumbnail/!90x90r/gravity/Center/crop/90x90/',
                    name => '夜宵'
                ],
                [
                    cid => '10',
                    img => '//fuss10.elemecdn.com/b/72/97eb62f05c42217e130b6658bd0b2jpeg.jpeg?imageMogr/format/webp/thumbnail/!90x90r/gravity/Center/crop/90x90/',
                    name => '帮买帮送'
                ],
                [
                    cid => '11',
                    img => '//fuss10.elemecdn.com/b/7f/432619fb21a40b05cd25d11eca02djpeg.jpeg?imageMogr/format/webp/thumbnail/!90x90r/gravity/Center/crop/90x90/',
                    name => '汉堡薯条'
                ],
                [
                    cid => '12',
                    img => '//fuss10.elemecdn.com/2/17/244241b514affc0f12f4168cf6628jpeg.jpeg?imageMogr/format/webp/thumbnail/!90x90r/gravity/Center/crop/90x90/',
                    name => '包子粥店'
                ],
                [
                    cid => '13',
                    img => '//fuss10.elemecdn.com/8/83/171fd98b85dee3b3f4243b7459b48jpeg.jpeg?imageMogr/format/webp/thumbnail/!90x90r/gravity/Center/crop/90x90/',
                    name => '鲜花蛋糕'
                ],
                [
                    cid => '14',
                    img => '//fuss10.elemecdn.com/3/c7/a9ef469a12e7a596b559145b87f09jpeg.jpeg?imageMogr/format/webp/thumbnail/!90x90r/gravity/Center/crop/90x90/',
                    name => '麻辣烫'
                ],
                [
                    cid => '15',
                    img => '//fuss10.elemecdn.com/a/8a/ec21096d528b7cfd23cdd894f01c6jpeg.jpeg?imageMogr/format/webp/thumbnail/!90x90r/gravity/Center/crop/90x90/',
                    name => '地方菜系'
                ],
                [
                    cid => '16',
                    img => '//fuss10.elemecdn.com/7/b6/235761e50d391445f021922b71789jpeg.jpeg?imageMogr/format/webp/thumbnail/!90x90r/gravity/Center/crop/90x90/',
                    name => '披萨意面'
                ]
            ]
        ];
    }

    /**
    * tips 1 显示品牌  0 不显示
    * isExpress 1 蜂鸟转送 0 不现实
    * expressMoney 0 免配送费
    **/
    public function hotStore($page = 1, $limit = 10) {

        $data = [
            [
                sid => '1',
                tips => '1',
                name => '芝根芝底（东波店）',
                img => '//fuss10.elemecdn.com/b/8b/7ad382550136f88f7b58b26625e1ajpeg.jpeg?imageMogr/format/webp/thumbnail/!120x120r/gravity/Center/crop/120x120/',
                count => '2503',
                isExpress => '1',
                startMoney => '20',
                expressMoney => '8',
                distance => '510m',
                time => '31分钟'
            ],
            [
                sid => '2',
                tips => '1',
                name => '拼豆夜宵（金桥店）',
                img => '//fuss10.elemecdn.com/1/20/94191bf48119c5210182739aae937png.png?imageMogr/format/webp/thumbnail/!120x120r/gravity/Center/crop/120x120/',
                count => '2503',
                isExpress => '0',
                startMoney => '35',
                expressMoney => '6',
                distance => '4.33km',
                time => '49分钟'
            ],
            [
                sid => '3',
                tips => '0',
                name => '老王家烧烤（利津路店）',
                img => '//fuss10.elemecdn.com/7/90/660d69970f8c79daee968586e5d12png.png?imageMogr/format/webp/thumbnail/!120x120r/gravity/Center/crop/120x120/',
                count => '1355',
                isExpress => '0',
                startMoney => '30',
                expressMoney => '6',
                distance => '671m',
                time => '29分钟'
            ],
            [
                sid => '4',
                tips => '1',
                name => 'bigbang韩国炸鸡（枣庄店）',
                img => '//fuss10.elemecdn.com/8/4a/f4d6ead4ecf57bda7a071ece315e4png.png?imageMogr/format/webp/thumbnail/!120x120r/gravity/Center/crop/120x120/',
                count => '3341',
                isExpress => '0',
                startMoney => '50',
                expressMoney => '8',
                distance => '2.94m',
                time => '47分钟'
            ],
            [
                sid => '5',
                tips => '0',
                name => 'b旺客隆果品',
                img => '//fuss10.elemecdn.com/0/af/7f0c8c202b42abe3557c5a8b2b2cfpng.png?imageMogr/format/webp/thumbnail/!120x120r/gravity/Center/crop/120x120/',
                count => '3223',
                isExpress => '0',
                startMoney => '0',
                expressMoney => '0',
                distance => '1.91m',
                time => '39分钟'
            ],
            [
                sid => '6',
                tips => '1',
                name => '芝根芝底（东波店）666',
                img => '//fuss10.elemecdn.com/b/8b/7ad382550136f88f7b58b26625e1ajpeg.jpeg?imageMogr/format/webp/thumbnail/!120x120r/gravity/Center/crop/120x120/',
                count => '2503',
                isExpress => '1',
                startMoney => '20',
                expressMoney => '8',
                distance => '510m',
                time => '31分钟'
            ],
            [
                sid => '7',
                tips => '1',
                name => '拼豆夜宵（金桥店）777',
                img => '//fuss10.elemecdn.com/1/20/94191bf48119c5210182739aae937png.png?imageMogr/format/webp/thumbnail/!120x120r/gravity/Center/crop/120x120/',
                count => '2503',
                isExpress => '0',
                startMoney => '35',
                expressMoney => '6',
                distance => '4.33km',
                time => '49分钟'
            ],
            [
                sid => '8',
                tips => '0',
                name => '老王家烧烤（利津路店）888',
                img => '//fuss10.elemecdn.com/7/90/660d69970f8c79daee968586e5d12png.png?imageMogr/format/webp/thumbnail/!120x120r/gravity/Center/crop/120x120/',
                count => '1355',
                isExpress => '0',
                startMoney => '30',
                expressMoney => '6',
                distance => '671m',
                time => '29分钟'
            ],
            [
                sid => '9',
                tips => '1',
                name => 'bigbang韩国炸鸡（枣庄店）999',
                img => '//fuss10.elemecdn.com/8/4a/f4d6ead4ecf57bda7a071ece315e4png.png?imageMogr/format/webp/thumbnail/!120x120r/gravity/Center/crop/120x120/',
                count => '3341',
                isExpress => '0',
                startMoney => '50',
                expressMoney => '8',
                distance => '2.94m',
                time => '47分钟'
            ],
            [
                sid => '10',
                tips => '0',
                name => 'b旺客隆果品101010',
                img => '//fuss10.elemecdn.com/0/af/7f0c8c202b42abe3557c5a8b2b2cfpng.png?imageMogr/format/webp/thumbnail/!120x120r/gravity/Center/crop/120x120/',
                count => '3223',
                isExpress => '0',
                startMoney => '0',
                expressMoney => '0',
                distance => '1.91m',
                time => '39分钟'
            ],
            [
                sid => '11',
                tips => '1',
                name => '芝根芝底（东波店）111111',
                img => '//fuss10.elemecdn.com/b/8b/7ad382550136f88f7b58b26625e1ajpeg.jpeg?imageMogr/format/webp/thumbnail/!120x120r/gravity/Center/crop/120x120/',
                count => '2503',
                isExpress => '1',
                startMoney => '20',
                expressMoney => '8',
                distance => '510m',
                time => '31分钟'
            ],
            [
                sid => '12',
                tips => '1',
                name => '拼豆夜宵（金桥店）121212',
                img => '//fuss10.elemecdn.com/1/20/94191bf48119c5210182739aae937png.png?imageMogr/format/webp/thumbnail/!120x120r/gravity/Center/crop/120x120/',
                count => '2503',
                isExpress => '0',
                startMoney => '35',
                expressMoney => '6',
                distance => '4.33km',
                time => '49分钟'
            ],
            [
                sid => '13',
                tips => '0',
                name => '老王家烧烤（利津路店）131313',
                img => '//fuss10.elemecdn.com/7/90/660d69970f8c79daee968586e5d12png.png?imageMogr/format/webp/thumbnail/!120x120r/gravity/Center/crop/120x120/',
                count => '1355',
                isExpress => '0',
                startMoney => '30',
                expressMoney => '6',
                distance => '671m',
                time => '29分钟'
            ],
            [
                sid => '14',
                tips => '1',
                name => 'bigbang韩国炸鸡（枣庄店）141414',
                img => '//fuss10.elemecdn.com/8/4a/f4d6ead4ecf57bda7a071ece315e4png.png?imageMogr/format/webp/thumbnail/!120x120r/gravity/Center/crop/120x120/',
                count => '3341',
                isExpress => '0',
                startMoney => '50',
                expressMoney => '8',
                distance => '2.94m',
                time => '47分钟'
            ],
            [
                sid => '15',
                tips => '0',
                name => 'b旺客隆果品151515',
                img => '//fuss10.elemecdn.com/0/af/7f0c8c202b42abe3557c5a8b2b2cfpng.png?imageMogr/format/webp/thumbnail/!120x120r/gravity/Center/crop/120x120/',
                count => '3223',
                isExpress => '0',
                startMoney => '0',
                expressMoney => '0',
                distance => '1.91m',
                time => '39分钟'
            ],
        ];

        $filter = array_slice($data, ($page-1) * $limit, $limit);

        return [
            count => count($filter),
            page => $page,
            data => $filter
        ];
    }
}

?>