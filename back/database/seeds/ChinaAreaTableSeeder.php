<?php

use Illuminate\Database\Seeder;

class ChinaAreaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('china_area')->delete();
        
        \DB::table('china_area')->insert(array (
            0 => 
            array (
                'id' => 1,
                'parent_id' => 0,
                'name' => '中国',
                'type' => 0,
            ),
            1 => 
            array (
                'id' => 2,
                'parent_id' => 1,
                'name' => '北京',
                'type' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'parent_id' => 1,
                'name' => '安徽',
                'type' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'parent_id' => 1,
                'name' => '福建',
                'type' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'parent_id' => 1,
                'name' => '甘肃',
                'type' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'parent_id' => 1,
                'name' => '广东',
                'type' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'parent_id' => 1,
                'name' => '广西',
                'type' => 1,
            ),
            7 => 
            array (
                'id' => 8,
                'parent_id' => 1,
                'name' => '贵州',
                'type' => 1,
            ),
            8 => 
            array (
                'id' => 9,
                'parent_id' => 1,
                'name' => '海南',
                'type' => 1,
            ),
            9 => 
            array (
                'id' => 10,
                'parent_id' => 1,
                'name' => '河北',
                'type' => 1,
            ),
            10 => 
            array (
                'id' => 11,
                'parent_id' => 1,
                'name' => '河南',
                'type' => 1,
            ),
            11 => 
            array (
                'id' => 12,
                'parent_id' => 1,
                'name' => '黑龙江',
                'type' => 1,
            ),
            12 => 
            array (
                'id' => 13,
                'parent_id' => 1,
                'name' => '湖北',
                'type' => 1,
            ),
            13 => 
            array (
                'id' => 14,
                'parent_id' => 1,
                'name' => '湖南',
                'type' => 1,
            ),
            14 => 
            array (
                'id' => 15,
                'parent_id' => 1,
                'name' => '吉林',
                'type' => 1,
            ),
            15 => 
            array (
                'id' => 16,
                'parent_id' => 1,
                'name' => '江苏',
                'type' => 1,
            ),
            16 => 
            array (
                'id' => 17,
                'parent_id' => 1,
                'name' => '江西',
                'type' => 1,
            ),
            17 => 
            array (
                'id' => 18,
                'parent_id' => 1,
                'name' => '辽宁',
                'type' => 1,
            ),
            18 => 
            array (
                'id' => 19,
                'parent_id' => 1,
                'name' => '内蒙古',
                'type' => 1,
            ),
            19 => 
            array (
                'id' => 20,
                'parent_id' => 1,
                'name' => '宁夏',
                'type' => 1,
            ),
            20 => 
            array (
                'id' => 21,
                'parent_id' => 1,
                'name' => '青海',
                'type' => 1,
            ),
            21 => 
            array (
                'id' => 22,
                'parent_id' => 1,
                'name' => '山东',
                'type' => 1,
            ),
            22 => 
            array (
                'id' => 23,
                'parent_id' => 1,
                'name' => '山西',
                'type' => 1,
            ),
            23 => 
            array (
                'id' => 24,
                'parent_id' => 1,
                'name' => '陕西',
                'type' => 1,
            ),
            24 => 
            array (
                'id' => 25,
                'parent_id' => 1,
                'name' => '上海',
                'type' => 1,
            ),
            25 => 
            array (
                'id' => 26,
                'parent_id' => 1,
                'name' => '四川',
                'type' => 1,
            ),
            26 => 
            array (
                'id' => 27,
                'parent_id' => 1,
                'name' => '天津',
                'type' => 1,
            ),
            27 => 
            array (
                'id' => 28,
                'parent_id' => 1,
                'name' => '西藏',
                'type' => 1,
            ),
            28 => 
            array (
                'id' => 29,
                'parent_id' => 1,
                'name' => '新疆',
                'type' => 1,
            ),
            29 => 
            array (
                'id' => 30,
                'parent_id' => 1,
                'name' => '云南',
                'type' => 1,
            ),
            30 => 
            array (
                'id' => 31,
                'parent_id' => 1,
                'name' => '浙江',
                'type' => 1,
            ),
            31 => 
            array (
                'id' => 32,
                'parent_id' => 1,
                'name' => '重庆',
                'type' => 1,
            ),
            32 => 
            array (
                'id' => 33,
                'parent_id' => 1,
                'name' => '香港',
                'type' => 1,
            ),
            33 => 
            array (
                'id' => 34,
                'parent_id' => 1,
                'name' => '澳门',
                'type' => 1,
            ),
            34 => 
            array (
                'id' => 35,
                'parent_id' => 1,
                'name' => '台湾',
                'type' => 1,
            ),
            35 => 
            array (
                'id' => 36,
                'parent_id' => 3,
                'name' => '安庆',
                'type' => 2,
            ),
            36 => 
            array (
                'id' => 37,
                'parent_id' => 3,
                'name' => '蚌埠',
                'type' => 2,
            ),
            37 => 
            array (
                'id' => 38,
                'parent_id' => 3,
                'name' => '巢湖',
                'type' => 2,
            ),
            38 => 
            array (
                'id' => 39,
                'parent_id' => 3,
                'name' => '池州',
                'type' => 2,
            ),
            39 => 
            array (
                'id' => 40,
                'parent_id' => 3,
                'name' => '滁州',
                'type' => 2,
            ),
            40 => 
            array (
                'id' => 41,
                'parent_id' => 3,
                'name' => '阜阳',
                'type' => 2,
            ),
            41 => 
            array (
                'id' => 42,
                'parent_id' => 3,
                'name' => '淮北',
                'type' => 2,
            ),
            42 => 
            array (
                'id' => 43,
                'parent_id' => 3,
                'name' => '淮南',
                'type' => 2,
            ),
            43 => 
            array (
                'id' => 44,
                'parent_id' => 3,
                'name' => '黄山',
                'type' => 2,
            ),
            44 => 
            array (
                'id' => 45,
                'parent_id' => 3,
                'name' => '六安',
                'type' => 2,
            ),
            45 => 
            array (
                'id' => 46,
                'parent_id' => 3,
                'name' => '马鞍山',
                'type' => 2,
            ),
            46 => 
            array (
                'id' => 47,
                'parent_id' => 3,
                'name' => '宿州',
                'type' => 2,
            ),
            47 => 
            array (
                'id' => 48,
                'parent_id' => 3,
                'name' => '铜陵',
                'type' => 2,
            ),
            48 => 
            array (
                'id' => 49,
                'parent_id' => 3,
                'name' => '芜湖',
                'type' => 2,
            ),
            49 => 
            array (
                'id' => 50,
                'parent_id' => 3,
                'name' => '宣城',
                'type' => 2,
            ),
            50 => 
            array (
                'id' => 51,
                'parent_id' => 3,
                'name' => '亳州',
                'type' => 2,
            ),
            51 => 
            array (
                'id' => 52,
                'parent_id' => 2,
                'name' => '北京',
                'type' => 2,
            ),
            52 => 
            array (
                'id' => 53,
                'parent_id' => 4,
                'name' => '福州',
                'type' => 2,
            ),
            53 => 
            array (
                'id' => 54,
                'parent_id' => 4,
                'name' => '龙岩',
                'type' => 2,
            ),
            54 => 
            array (
                'id' => 55,
                'parent_id' => 4,
                'name' => '南平',
                'type' => 2,
            ),
            55 => 
            array (
                'id' => 56,
                'parent_id' => 4,
                'name' => '宁德',
                'type' => 2,
            ),
            56 => 
            array (
                'id' => 57,
                'parent_id' => 4,
                'name' => '莆田',
                'type' => 2,
            ),
            57 => 
            array (
                'id' => 58,
                'parent_id' => 4,
                'name' => '泉州',
                'type' => 2,
            ),
            58 => 
            array (
                'id' => 59,
                'parent_id' => 4,
                'name' => '三明',
                'type' => 2,
            ),
            59 => 
            array (
                'id' => 60,
                'parent_id' => 4,
                'name' => '厦门',
                'type' => 2,
            ),
            60 => 
            array (
                'id' => 61,
                'parent_id' => 4,
                'name' => '漳州',
                'type' => 2,
            ),
            61 => 
            array (
                'id' => 62,
                'parent_id' => 5,
                'name' => '兰州',
                'type' => 2,
            ),
            62 => 
            array (
                'id' => 63,
                'parent_id' => 5,
                'name' => '白银',
                'type' => 2,
            ),
            63 => 
            array (
                'id' => 64,
                'parent_id' => 5,
                'name' => '定西',
                'type' => 2,
            ),
            64 => 
            array (
                'id' => 65,
                'parent_id' => 5,
                'name' => '甘南',
                'type' => 2,
            ),
            65 => 
            array (
                'id' => 66,
                'parent_id' => 5,
                'name' => '嘉峪关',
                'type' => 2,
            ),
            66 => 
            array (
                'id' => 67,
                'parent_id' => 5,
                'name' => '金昌',
                'type' => 2,
            ),
            67 => 
            array (
                'id' => 68,
                'parent_id' => 5,
                'name' => '酒泉',
                'type' => 2,
            ),
            68 => 
            array (
                'id' => 69,
                'parent_id' => 5,
                'name' => '临夏',
                'type' => 2,
            ),
            69 => 
            array (
                'id' => 70,
                'parent_id' => 5,
                'name' => '陇南',
                'type' => 2,
            ),
            70 => 
            array (
                'id' => 71,
                'parent_id' => 5,
                'name' => '平凉',
                'type' => 2,
            ),
            71 => 
            array (
                'id' => 72,
                'parent_id' => 5,
                'name' => '庆阳',
                'type' => 2,
            ),
            72 => 
            array (
                'id' => 73,
                'parent_id' => 5,
                'name' => '天水',
                'type' => 2,
            ),
            73 => 
            array (
                'id' => 74,
                'parent_id' => 5,
                'name' => '武威',
                'type' => 2,
            ),
            74 => 
            array (
                'id' => 75,
                'parent_id' => 5,
                'name' => '张掖',
                'type' => 2,
            ),
            75 => 
            array (
                'id' => 76,
                'parent_id' => 6,
                'name' => '广州',
                'type' => 2,
            ),
            76 => 
            array (
                'id' => 77,
                'parent_id' => 6,
                'name' => '深圳',
                'type' => 2,
            ),
            77 => 
            array (
                'id' => 78,
                'parent_id' => 6,
                'name' => '潮州',
                'type' => 2,
            ),
            78 => 
            array (
                'id' => 79,
                'parent_id' => 6,
                'name' => '东莞',
                'type' => 2,
            ),
            79 => 
            array (
                'id' => 80,
                'parent_id' => 6,
                'name' => '佛山',
                'type' => 2,
            ),
            80 => 
            array (
                'id' => 81,
                'parent_id' => 6,
                'name' => '河源',
                'type' => 2,
            ),
            81 => 
            array (
                'id' => 82,
                'parent_id' => 6,
                'name' => '惠州',
                'type' => 2,
            ),
            82 => 
            array (
                'id' => 83,
                'parent_id' => 6,
                'name' => '江门',
                'type' => 2,
            ),
            83 => 
            array (
                'id' => 84,
                'parent_id' => 6,
                'name' => '揭阳',
                'type' => 2,
            ),
            84 => 
            array (
                'id' => 85,
                'parent_id' => 6,
                'name' => '茂名',
                'type' => 2,
            ),
            85 => 
            array (
                'id' => 86,
                'parent_id' => 6,
                'name' => '梅州',
                'type' => 2,
            ),
            86 => 
            array (
                'id' => 87,
                'parent_id' => 6,
                'name' => '清远',
                'type' => 2,
            ),
            87 => 
            array (
                'id' => 88,
                'parent_id' => 6,
                'name' => '汕头',
                'type' => 2,
            ),
            88 => 
            array (
                'id' => 89,
                'parent_id' => 6,
                'name' => '汕尾',
                'type' => 2,
            ),
            89 => 
            array (
                'id' => 90,
                'parent_id' => 6,
                'name' => '韶关',
                'type' => 2,
            ),
            90 => 
            array (
                'id' => 91,
                'parent_id' => 6,
                'name' => '阳江',
                'type' => 2,
            ),
            91 => 
            array (
                'id' => 92,
                'parent_id' => 6,
                'name' => '云浮',
                'type' => 2,
            ),
            92 => 
            array (
                'id' => 93,
                'parent_id' => 6,
                'name' => '湛江',
                'type' => 2,
            ),
            93 => 
            array (
                'id' => 94,
                'parent_id' => 6,
                'name' => '肇庆',
                'type' => 2,
            ),
            94 => 
            array (
                'id' => 95,
                'parent_id' => 6,
                'name' => '中山',
                'type' => 2,
            ),
            95 => 
            array (
                'id' => 96,
                'parent_id' => 6,
                'name' => '珠海',
                'type' => 2,
            ),
            96 => 
            array (
                'id' => 97,
                'parent_id' => 7,
                'name' => '南宁',
                'type' => 2,
            ),
            97 => 
            array (
                'id' => 98,
                'parent_id' => 7,
                'name' => '桂林',
                'type' => 2,
            ),
            98 => 
            array (
                'id' => 99,
                'parent_id' => 7,
                'name' => '百色',
                'type' => 2,
            ),
            99 => 
            array (
                'id' => 100,
                'parent_id' => 7,
                'name' => '北海',
                'type' => 2,
            ),
            100 => 
            array (
                'id' => 101,
                'parent_id' => 7,
                'name' => '崇左',
                'type' => 2,
            ),
            101 => 
            array (
                'id' => 102,
                'parent_id' => 7,
                'name' => '防城港',
                'type' => 2,
            ),
            102 => 
            array (
                'id' => 103,
                'parent_id' => 7,
                'name' => '贵港',
                'type' => 2,
            ),
            103 => 
            array (
                'id' => 104,
                'parent_id' => 7,
                'name' => '河池',
                'type' => 2,
            ),
            104 => 
            array (
                'id' => 105,
                'parent_id' => 7,
                'name' => '贺州',
                'type' => 2,
            ),
            105 => 
            array (
                'id' => 106,
                'parent_id' => 7,
                'name' => '来宾',
                'type' => 2,
            ),
            106 => 
            array (
                'id' => 107,
                'parent_id' => 7,
                'name' => '柳州',
                'type' => 2,
            ),
            107 => 
            array (
                'id' => 108,
                'parent_id' => 7,
                'name' => '钦州',
                'type' => 2,
            ),
            108 => 
            array (
                'id' => 109,
                'parent_id' => 7,
                'name' => '梧州',
                'type' => 2,
            ),
            109 => 
            array (
                'id' => 110,
                'parent_id' => 7,
                'name' => '玉林',
                'type' => 2,
            ),
            110 => 
            array (
                'id' => 111,
                'parent_id' => 8,
                'name' => '贵阳',
                'type' => 2,
            ),
            111 => 
            array (
                'id' => 112,
                'parent_id' => 8,
                'name' => '安顺',
                'type' => 2,
            ),
            112 => 
            array (
                'id' => 113,
                'parent_id' => 8,
                'name' => '毕节',
                'type' => 2,
            ),
            113 => 
            array (
                'id' => 114,
                'parent_id' => 8,
                'name' => '六盘水',
                'type' => 2,
            ),
            114 => 
            array (
                'id' => 115,
                'parent_id' => 8,
                'name' => '黔东南',
                'type' => 2,
            ),
            115 => 
            array (
                'id' => 116,
                'parent_id' => 8,
                'name' => '黔南',
                'type' => 2,
            ),
            116 => 
            array (
                'id' => 117,
                'parent_id' => 8,
                'name' => '黔西南',
                'type' => 2,
            ),
            117 => 
            array (
                'id' => 118,
                'parent_id' => 8,
                'name' => '铜仁',
                'type' => 2,
            ),
            118 => 
            array (
                'id' => 119,
                'parent_id' => 8,
                'name' => '遵义',
                'type' => 2,
            ),
            119 => 
            array (
                'id' => 120,
                'parent_id' => 9,
                'name' => '海口',
                'type' => 2,
            ),
            120 => 
            array (
                'id' => 121,
                'parent_id' => 9,
                'name' => '三亚',
                'type' => 2,
            ),
            121 => 
            array (
                'id' => 122,
                'parent_id' => 9,
                'name' => '白沙',
                'type' => 2,
            ),
            122 => 
            array (
                'id' => 123,
                'parent_id' => 9,
                'name' => '保亭',
                'type' => 2,
            ),
            123 => 
            array (
                'id' => 124,
                'parent_id' => 9,
                'name' => '昌江',
                'type' => 2,
            ),
            124 => 
            array (
                'id' => 125,
                'parent_id' => 9,
                'name' => '澄迈县',
                'type' => 2,
            ),
            125 => 
            array (
                'id' => 126,
                'parent_id' => 9,
                'name' => '定安县',
                'type' => 2,
            ),
            126 => 
            array (
                'id' => 127,
                'parent_id' => 9,
                'name' => '东方',
                'type' => 2,
            ),
            127 => 
            array (
                'id' => 128,
                'parent_id' => 9,
                'name' => '乐东',
                'type' => 2,
            ),
            128 => 
            array (
                'id' => 129,
                'parent_id' => 9,
                'name' => '临高县',
                'type' => 2,
            ),
            129 => 
            array (
                'id' => 130,
                'parent_id' => 9,
                'name' => '陵水',
                'type' => 2,
            ),
            130 => 
            array (
                'id' => 131,
                'parent_id' => 9,
                'name' => '琼海',
                'type' => 2,
            ),
            131 => 
            array (
                'id' => 132,
                'parent_id' => 9,
                'name' => '琼中',
                'type' => 2,
            ),
            132 => 
            array (
                'id' => 133,
                'parent_id' => 9,
                'name' => '屯昌县',
                'type' => 2,
            ),
            133 => 
            array (
                'id' => 134,
                'parent_id' => 9,
                'name' => '万宁',
                'type' => 2,
            ),
            134 => 
            array (
                'id' => 135,
                'parent_id' => 9,
                'name' => '文昌',
                'type' => 2,
            ),
            135 => 
            array (
                'id' => 136,
                'parent_id' => 9,
                'name' => '五指山',
                'type' => 2,
            ),
            136 => 
            array (
                'id' => 137,
                'parent_id' => 9,
                'name' => '儋州',
                'type' => 2,
            ),
            137 => 
            array (
                'id' => 138,
                'parent_id' => 10,
                'name' => '石家庄',
                'type' => 2,
            ),
            138 => 
            array (
                'id' => 139,
                'parent_id' => 10,
                'name' => '保定',
                'type' => 2,
            ),
            139 => 
            array (
                'id' => 140,
                'parent_id' => 10,
                'name' => '沧州',
                'type' => 2,
            ),
            140 => 
            array (
                'id' => 141,
                'parent_id' => 10,
                'name' => '承德',
                'type' => 2,
            ),
            141 => 
            array (
                'id' => 142,
                'parent_id' => 10,
                'name' => '邯郸',
                'type' => 2,
            ),
            142 => 
            array (
                'id' => 143,
                'parent_id' => 10,
                'name' => '衡水',
                'type' => 2,
            ),
            143 => 
            array (
                'id' => 144,
                'parent_id' => 10,
                'name' => '廊坊',
                'type' => 2,
            ),
            144 => 
            array (
                'id' => 145,
                'parent_id' => 10,
                'name' => '秦皇岛',
                'type' => 2,
            ),
            145 => 
            array (
                'id' => 146,
                'parent_id' => 10,
                'name' => '唐山',
                'type' => 2,
            ),
            146 => 
            array (
                'id' => 147,
                'parent_id' => 10,
                'name' => '邢台',
                'type' => 2,
            ),
            147 => 
            array (
                'id' => 148,
                'parent_id' => 10,
                'name' => '张家口',
                'type' => 2,
            ),
            148 => 
            array (
                'id' => 149,
                'parent_id' => 11,
                'name' => '郑州',
                'type' => 2,
            ),
            149 => 
            array (
                'id' => 150,
                'parent_id' => 11,
                'name' => '洛阳',
                'type' => 2,
            ),
            150 => 
            array (
                'id' => 151,
                'parent_id' => 11,
                'name' => '开封',
                'type' => 2,
            ),
            151 => 
            array (
                'id' => 152,
                'parent_id' => 11,
                'name' => '安阳',
                'type' => 2,
            ),
            152 => 
            array (
                'id' => 153,
                'parent_id' => 11,
                'name' => '鹤壁',
                'type' => 2,
            ),
            153 => 
            array (
                'id' => 154,
                'parent_id' => 11,
                'name' => '济源',
                'type' => 2,
            ),
            154 => 
            array (
                'id' => 155,
                'parent_id' => 11,
                'name' => '焦作',
                'type' => 2,
            ),
            155 => 
            array (
                'id' => 156,
                'parent_id' => 11,
                'name' => '南阳',
                'type' => 2,
            ),
            156 => 
            array (
                'id' => 157,
                'parent_id' => 11,
                'name' => '平顶山',
                'type' => 2,
            ),
            157 => 
            array (
                'id' => 158,
                'parent_id' => 11,
                'name' => '三门峡',
                'type' => 2,
            ),
            158 => 
            array (
                'id' => 159,
                'parent_id' => 11,
                'name' => '商丘',
                'type' => 2,
            ),
            159 => 
            array (
                'id' => 160,
                'parent_id' => 11,
                'name' => '新乡',
                'type' => 2,
            ),
            160 => 
            array (
                'id' => 161,
                'parent_id' => 11,
                'name' => '信阳',
                'type' => 2,
            ),
            161 => 
            array (
                'id' => 162,
                'parent_id' => 11,
                'name' => '许昌',
                'type' => 2,
            ),
            162 => 
            array (
                'id' => 163,
                'parent_id' => 11,
                'name' => '周口',
                'type' => 2,
            ),
            163 => 
            array (
                'id' => 164,
                'parent_id' => 11,
                'name' => '驻马店',
                'type' => 2,
            ),
            164 => 
            array (
                'id' => 165,
                'parent_id' => 11,
                'name' => '漯河',
                'type' => 2,
            ),
            165 => 
            array (
                'id' => 166,
                'parent_id' => 11,
                'name' => '濮阳',
                'type' => 2,
            ),
            166 => 
            array (
                'id' => 167,
                'parent_id' => 12,
                'name' => '哈尔滨',
                'type' => 2,
            ),
            167 => 
            array (
                'id' => 168,
                'parent_id' => 12,
                'name' => '大庆',
                'type' => 2,
            ),
            168 => 
            array (
                'id' => 169,
                'parent_id' => 12,
                'name' => '大兴安岭',
                'type' => 2,
            ),
            169 => 
            array (
                'id' => 170,
                'parent_id' => 12,
                'name' => '鹤岗',
                'type' => 2,
            ),
            170 => 
            array (
                'id' => 171,
                'parent_id' => 12,
                'name' => '黑河',
                'type' => 2,
            ),
            171 => 
            array (
                'id' => 172,
                'parent_id' => 12,
                'name' => '鸡西',
                'type' => 2,
            ),
            172 => 
            array (
                'id' => 173,
                'parent_id' => 12,
                'name' => '佳木斯',
                'type' => 2,
            ),
            173 => 
            array (
                'id' => 174,
                'parent_id' => 12,
                'name' => '牡丹江',
                'type' => 2,
            ),
            174 => 
            array (
                'id' => 175,
                'parent_id' => 12,
                'name' => '七台河',
                'type' => 2,
            ),
            175 => 
            array (
                'id' => 176,
                'parent_id' => 12,
                'name' => '齐齐哈尔',
                'type' => 2,
            ),
            176 => 
            array (
                'id' => 177,
                'parent_id' => 12,
                'name' => '双鸭山',
                'type' => 2,
            ),
            177 => 
            array (
                'id' => 178,
                'parent_id' => 12,
                'name' => '绥化',
                'type' => 2,
            ),
            178 => 
            array (
                'id' => 179,
                'parent_id' => 12,
                'name' => '伊春',
                'type' => 2,
            ),
            179 => 
            array (
                'id' => 180,
                'parent_id' => 13,
                'name' => '武汉',
                'type' => 2,
            ),
            180 => 
            array (
                'id' => 181,
                'parent_id' => 13,
                'name' => '仙桃',
                'type' => 2,
            ),
            181 => 
            array (
                'id' => 182,
                'parent_id' => 13,
                'name' => '鄂州',
                'type' => 2,
            ),
            182 => 
            array (
                'id' => 183,
                'parent_id' => 13,
                'name' => '黄冈',
                'type' => 2,
            ),
            183 => 
            array (
                'id' => 184,
                'parent_id' => 13,
                'name' => '黄石',
                'type' => 2,
            ),
            184 => 
            array (
                'id' => 185,
                'parent_id' => 13,
                'name' => '荆门',
                'type' => 2,
            ),
            185 => 
            array (
                'id' => 186,
                'parent_id' => 13,
                'name' => '荆州',
                'type' => 2,
            ),
            186 => 
            array (
                'id' => 187,
                'parent_id' => 13,
                'name' => '潜江',
                'type' => 2,
            ),
            187 => 
            array (
                'id' => 188,
                'parent_id' => 13,
                'name' => '神农架林区',
                'type' => 2,
            ),
            188 => 
            array (
                'id' => 189,
                'parent_id' => 13,
                'name' => '十堰',
                'type' => 2,
            ),
            189 => 
            array (
                'id' => 190,
                'parent_id' => 13,
                'name' => '随州',
                'type' => 2,
            ),
            190 => 
            array (
                'id' => 191,
                'parent_id' => 13,
                'name' => '天门',
                'type' => 2,
            ),
            191 => 
            array (
                'id' => 192,
                'parent_id' => 13,
                'name' => '咸宁',
                'type' => 2,
            ),
            192 => 
            array (
                'id' => 193,
                'parent_id' => 13,
                'name' => '襄樊',
                'type' => 2,
            ),
            193 => 
            array (
                'id' => 194,
                'parent_id' => 13,
                'name' => '孝感',
                'type' => 2,
            ),
            194 => 
            array (
                'id' => 195,
                'parent_id' => 13,
                'name' => '宜昌',
                'type' => 2,
            ),
            195 => 
            array (
                'id' => 196,
                'parent_id' => 13,
                'name' => '恩施',
                'type' => 2,
            ),
            196 => 
            array (
                'id' => 197,
                'parent_id' => 14,
                'name' => '长沙',
                'type' => 2,
            ),
            197 => 
            array (
                'id' => 198,
                'parent_id' => 14,
                'name' => '张家界',
                'type' => 2,
            ),
            198 => 
            array (
                'id' => 199,
                'parent_id' => 14,
                'name' => '常德',
                'type' => 2,
            ),
            199 => 
            array (
                'id' => 200,
                'parent_id' => 14,
                'name' => '郴州',
                'type' => 2,
            ),
            200 => 
            array (
                'id' => 201,
                'parent_id' => 14,
                'name' => '衡阳',
                'type' => 2,
            ),
            201 => 
            array (
                'id' => 202,
                'parent_id' => 14,
                'name' => '怀化',
                'type' => 2,
            ),
            202 => 
            array (
                'id' => 203,
                'parent_id' => 14,
                'name' => '娄底',
                'type' => 2,
            ),
            203 => 
            array (
                'id' => 204,
                'parent_id' => 14,
                'name' => '邵阳',
                'type' => 2,
            ),
            204 => 
            array (
                'id' => 205,
                'parent_id' => 14,
                'name' => '湘潭',
                'type' => 2,
            ),
            205 => 
            array (
                'id' => 206,
                'parent_id' => 14,
                'name' => '湘西',
                'type' => 2,
            ),
            206 => 
            array (
                'id' => 207,
                'parent_id' => 14,
                'name' => '益阳',
                'type' => 2,
            ),
            207 => 
            array (
                'id' => 208,
                'parent_id' => 14,
                'name' => '永州',
                'type' => 2,
            ),
            208 => 
            array (
                'id' => 209,
                'parent_id' => 14,
                'name' => '岳阳',
                'type' => 2,
            ),
            209 => 
            array (
                'id' => 210,
                'parent_id' => 14,
                'name' => '株洲',
                'type' => 2,
            ),
            210 => 
            array (
                'id' => 211,
                'parent_id' => 15,
                'name' => '长春',
                'type' => 2,
            ),
            211 => 
            array (
                'id' => 212,
                'parent_id' => 15,
                'name' => '吉林',
                'type' => 2,
            ),
            212 => 
            array (
                'id' => 213,
                'parent_id' => 15,
                'name' => '白城',
                'type' => 2,
            ),
            213 => 
            array (
                'id' => 214,
                'parent_id' => 15,
                'name' => '白山',
                'type' => 2,
            ),
            214 => 
            array (
                'id' => 215,
                'parent_id' => 15,
                'name' => '辽源',
                'type' => 2,
            ),
            215 => 
            array (
                'id' => 216,
                'parent_id' => 15,
                'name' => '四平',
                'type' => 2,
            ),
            216 => 
            array (
                'id' => 217,
                'parent_id' => 15,
                'name' => '松原',
                'type' => 2,
            ),
            217 => 
            array (
                'id' => 218,
                'parent_id' => 15,
                'name' => '通化',
                'type' => 2,
            ),
            218 => 
            array (
                'id' => 219,
                'parent_id' => 15,
                'name' => '延边',
                'type' => 2,
            ),
            219 => 
            array (
                'id' => 220,
                'parent_id' => 16,
                'name' => '南京',
                'type' => 2,
            ),
            220 => 
            array (
                'id' => 221,
                'parent_id' => 16,
                'name' => '苏州',
                'type' => 2,
            ),
            221 => 
            array (
                'id' => 222,
                'parent_id' => 16,
                'name' => '无锡',
                'type' => 2,
            ),
            222 => 
            array (
                'id' => 223,
                'parent_id' => 16,
                'name' => '常州',
                'type' => 2,
            ),
            223 => 
            array (
                'id' => 224,
                'parent_id' => 16,
                'name' => '淮安',
                'type' => 2,
            ),
            224 => 
            array (
                'id' => 225,
                'parent_id' => 16,
                'name' => '连云港',
                'type' => 2,
            ),
            225 => 
            array (
                'id' => 226,
                'parent_id' => 16,
                'name' => '南通',
                'type' => 2,
            ),
            226 => 
            array (
                'id' => 227,
                'parent_id' => 16,
                'name' => '宿迁',
                'type' => 2,
            ),
            227 => 
            array (
                'id' => 228,
                'parent_id' => 16,
                'name' => '泰州',
                'type' => 2,
            ),
            228 => 
            array (
                'id' => 229,
                'parent_id' => 16,
                'name' => '徐州',
                'type' => 2,
            ),
            229 => 
            array (
                'id' => 230,
                'parent_id' => 16,
                'name' => '盐城',
                'type' => 2,
            ),
            230 => 
            array (
                'id' => 231,
                'parent_id' => 16,
                'name' => '扬州',
                'type' => 2,
            ),
            231 => 
            array (
                'id' => 232,
                'parent_id' => 16,
                'name' => '镇江',
                'type' => 2,
            ),
            232 => 
            array (
                'id' => 233,
                'parent_id' => 17,
                'name' => '南昌',
                'type' => 2,
            ),
            233 => 
            array (
                'id' => 234,
                'parent_id' => 17,
                'name' => '抚州',
                'type' => 2,
            ),
            234 => 
            array (
                'id' => 235,
                'parent_id' => 17,
                'name' => '赣州',
                'type' => 2,
            ),
            235 => 
            array (
                'id' => 236,
                'parent_id' => 17,
                'name' => '吉安',
                'type' => 2,
            ),
            236 => 
            array (
                'id' => 237,
                'parent_id' => 17,
                'name' => '景德镇',
                'type' => 2,
            ),
            237 => 
            array (
                'id' => 238,
                'parent_id' => 17,
                'name' => '九江',
                'type' => 2,
            ),
            238 => 
            array (
                'id' => 239,
                'parent_id' => 17,
                'name' => '萍乡',
                'type' => 2,
            ),
            239 => 
            array (
                'id' => 240,
                'parent_id' => 17,
                'name' => '上饶',
                'type' => 2,
            ),
            240 => 
            array (
                'id' => 241,
                'parent_id' => 17,
                'name' => '新余',
                'type' => 2,
            ),
            241 => 
            array (
                'id' => 242,
                'parent_id' => 17,
                'name' => '宜春',
                'type' => 2,
            ),
            242 => 
            array (
                'id' => 243,
                'parent_id' => 17,
                'name' => '鹰潭',
                'type' => 2,
            ),
            243 => 
            array (
                'id' => 244,
                'parent_id' => 18,
                'name' => '沈阳',
                'type' => 2,
            ),
            244 => 
            array (
                'id' => 245,
                'parent_id' => 18,
                'name' => '大连',
                'type' => 2,
            ),
            245 => 
            array (
                'id' => 246,
                'parent_id' => 18,
                'name' => '鞍山',
                'type' => 2,
            ),
            246 => 
            array (
                'id' => 247,
                'parent_id' => 18,
                'name' => '本溪',
                'type' => 2,
            ),
            247 => 
            array (
                'id' => 248,
                'parent_id' => 18,
                'name' => '朝阳',
                'type' => 2,
            ),
            248 => 
            array (
                'id' => 249,
                'parent_id' => 18,
                'name' => '丹东',
                'type' => 2,
            ),
            249 => 
            array (
                'id' => 250,
                'parent_id' => 18,
                'name' => '抚顺',
                'type' => 2,
            ),
            250 => 
            array (
                'id' => 251,
                'parent_id' => 18,
                'name' => '阜新',
                'type' => 2,
            ),
            251 => 
            array (
                'id' => 252,
                'parent_id' => 18,
                'name' => '葫芦岛',
                'type' => 2,
            ),
            252 => 
            array (
                'id' => 253,
                'parent_id' => 18,
                'name' => '锦州',
                'type' => 2,
            ),
            253 => 
            array (
                'id' => 254,
                'parent_id' => 18,
                'name' => '辽阳',
                'type' => 2,
            ),
            254 => 
            array (
                'id' => 255,
                'parent_id' => 18,
                'name' => '盘锦',
                'type' => 2,
            ),
            255 => 
            array (
                'id' => 256,
                'parent_id' => 18,
                'name' => '铁岭',
                'type' => 2,
            ),
            256 => 
            array (
                'id' => 257,
                'parent_id' => 18,
                'name' => '营口',
                'type' => 2,
            ),
            257 => 
            array (
                'id' => 258,
                'parent_id' => 19,
                'name' => '呼和浩特',
                'type' => 2,
            ),
            258 => 
            array (
                'id' => 259,
                'parent_id' => 19,
                'name' => '阿拉善盟',
                'type' => 2,
            ),
            259 => 
            array (
                'id' => 260,
                'parent_id' => 19,
                'name' => '巴彦淖尔盟',
                'type' => 2,
            ),
            260 => 
            array (
                'id' => 261,
                'parent_id' => 19,
                'name' => '包头',
                'type' => 2,
            ),
            261 => 
            array (
                'id' => 262,
                'parent_id' => 19,
                'name' => '赤峰',
                'type' => 2,
            ),
            262 => 
            array (
                'id' => 263,
                'parent_id' => 19,
                'name' => '鄂尔多斯',
                'type' => 2,
            ),
            263 => 
            array (
                'id' => 264,
                'parent_id' => 19,
                'name' => '呼伦贝尔',
                'type' => 2,
            ),
            264 => 
            array (
                'id' => 265,
                'parent_id' => 19,
                'name' => '通辽',
                'type' => 2,
            ),
            265 => 
            array (
                'id' => 266,
                'parent_id' => 19,
                'name' => '乌海',
                'type' => 2,
            ),
            266 => 
            array (
                'id' => 267,
                'parent_id' => 19,
                'name' => '乌兰察布市',
                'type' => 2,
            ),
            267 => 
            array (
                'id' => 268,
                'parent_id' => 19,
                'name' => '锡林郭勒盟',
                'type' => 2,
            ),
            268 => 
            array (
                'id' => 269,
                'parent_id' => 19,
                'name' => '兴安盟',
                'type' => 2,
            ),
            269 => 
            array (
                'id' => 270,
                'parent_id' => 20,
                'name' => '银川',
                'type' => 2,
            ),
            270 => 
            array (
                'id' => 271,
                'parent_id' => 20,
                'name' => '固原',
                'type' => 2,
            ),
            271 => 
            array (
                'id' => 272,
                'parent_id' => 20,
                'name' => '石嘴山',
                'type' => 2,
            ),
            272 => 
            array (
                'id' => 273,
                'parent_id' => 20,
                'name' => '吴忠',
                'type' => 2,
            ),
            273 => 
            array (
                'id' => 274,
                'parent_id' => 20,
                'name' => '中卫',
                'type' => 2,
            ),
            274 => 
            array (
                'id' => 275,
                'parent_id' => 21,
                'name' => '西宁',
                'type' => 2,
            ),
            275 => 
            array (
                'id' => 276,
                'parent_id' => 21,
                'name' => '果洛',
                'type' => 2,
            ),
            276 => 
            array (
                'id' => 277,
                'parent_id' => 21,
                'name' => '海北',
                'type' => 2,
            ),
            277 => 
            array (
                'id' => 278,
                'parent_id' => 21,
                'name' => '海东',
                'type' => 2,
            ),
            278 => 
            array (
                'id' => 279,
                'parent_id' => 21,
                'name' => '海南',
                'type' => 2,
            ),
            279 => 
            array (
                'id' => 280,
                'parent_id' => 21,
                'name' => '海西',
                'type' => 2,
            ),
            280 => 
            array (
                'id' => 281,
                'parent_id' => 21,
                'name' => '黄南',
                'type' => 2,
            ),
            281 => 
            array (
                'id' => 282,
                'parent_id' => 21,
                'name' => '玉树',
                'type' => 2,
            ),
            282 => 
            array (
                'id' => 283,
                'parent_id' => 22,
                'name' => '济南',
                'type' => 2,
            ),
            283 => 
            array (
                'id' => 284,
                'parent_id' => 22,
                'name' => '青岛',
                'type' => 2,
            ),
            284 => 
            array (
                'id' => 285,
                'parent_id' => 22,
                'name' => '滨州',
                'type' => 2,
            ),
            285 => 
            array (
                'id' => 286,
                'parent_id' => 22,
                'name' => '德州',
                'type' => 2,
            ),
            286 => 
            array (
                'id' => 287,
                'parent_id' => 22,
                'name' => '东营',
                'type' => 2,
            ),
            287 => 
            array (
                'id' => 288,
                'parent_id' => 22,
                'name' => '菏泽',
                'type' => 2,
            ),
            288 => 
            array (
                'id' => 289,
                'parent_id' => 22,
                'name' => '济宁',
                'type' => 2,
            ),
            289 => 
            array (
                'id' => 290,
                'parent_id' => 22,
                'name' => '莱芜',
                'type' => 2,
            ),
            290 => 
            array (
                'id' => 291,
                'parent_id' => 22,
                'name' => '聊城',
                'type' => 2,
            ),
            291 => 
            array (
                'id' => 292,
                'parent_id' => 22,
                'name' => '临沂',
                'type' => 2,
            ),
            292 => 
            array (
                'id' => 293,
                'parent_id' => 22,
                'name' => '日照',
                'type' => 2,
            ),
            293 => 
            array (
                'id' => 294,
                'parent_id' => 22,
                'name' => '泰安',
                'type' => 2,
            ),
            294 => 
            array (
                'id' => 295,
                'parent_id' => 22,
                'name' => '威海',
                'type' => 2,
            ),
            295 => 
            array (
                'id' => 296,
                'parent_id' => 22,
                'name' => '潍坊',
                'type' => 2,
            ),
            296 => 
            array (
                'id' => 297,
                'parent_id' => 22,
                'name' => '烟台',
                'type' => 2,
            ),
            297 => 
            array (
                'id' => 298,
                'parent_id' => 22,
                'name' => '枣庄',
                'type' => 2,
            ),
            298 => 
            array (
                'id' => 299,
                'parent_id' => 22,
                'name' => '淄博',
                'type' => 2,
            ),
            299 => 
            array (
                'id' => 300,
                'parent_id' => 23,
                'name' => '太原',
                'type' => 2,
            ),
            300 => 
            array (
                'id' => 301,
                'parent_id' => 23,
                'name' => '长治',
                'type' => 2,
            ),
            301 => 
            array (
                'id' => 302,
                'parent_id' => 23,
                'name' => '大同',
                'type' => 2,
            ),
            302 => 
            array (
                'id' => 303,
                'parent_id' => 23,
                'name' => '晋城',
                'type' => 2,
            ),
            303 => 
            array (
                'id' => 304,
                'parent_id' => 23,
                'name' => '晋中',
                'type' => 2,
            ),
            304 => 
            array (
                'id' => 305,
                'parent_id' => 23,
                'name' => '临汾',
                'type' => 2,
            ),
            305 => 
            array (
                'id' => 306,
                'parent_id' => 23,
                'name' => '吕梁',
                'type' => 2,
            ),
            306 => 
            array (
                'id' => 307,
                'parent_id' => 23,
                'name' => '朔州',
                'type' => 2,
            ),
            307 => 
            array (
                'id' => 308,
                'parent_id' => 23,
                'name' => '忻州',
                'type' => 2,
            ),
            308 => 
            array (
                'id' => 309,
                'parent_id' => 23,
                'name' => '阳泉',
                'type' => 2,
            ),
            309 => 
            array (
                'id' => 310,
                'parent_id' => 23,
                'name' => '运城',
                'type' => 2,
            ),
            310 => 
            array (
                'id' => 311,
                'parent_id' => 24,
                'name' => '西安',
                'type' => 2,
            ),
            311 => 
            array (
                'id' => 312,
                'parent_id' => 24,
                'name' => '安康',
                'type' => 2,
            ),
            312 => 
            array (
                'id' => 313,
                'parent_id' => 24,
                'name' => '宝鸡',
                'type' => 2,
            ),
            313 => 
            array (
                'id' => 314,
                'parent_id' => 24,
                'name' => '汉中',
                'type' => 2,
            ),
            314 => 
            array (
                'id' => 315,
                'parent_id' => 24,
                'name' => '商洛',
                'type' => 2,
            ),
            315 => 
            array (
                'id' => 316,
                'parent_id' => 24,
                'name' => '铜川',
                'type' => 2,
            ),
            316 => 
            array (
                'id' => 317,
                'parent_id' => 24,
                'name' => '渭南',
                'type' => 2,
            ),
            317 => 
            array (
                'id' => 318,
                'parent_id' => 24,
                'name' => '咸阳',
                'type' => 2,
            ),
            318 => 
            array (
                'id' => 319,
                'parent_id' => 24,
                'name' => '延安',
                'type' => 2,
            ),
            319 => 
            array (
                'id' => 320,
                'parent_id' => 24,
                'name' => '榆林',
                'type' => 2,
            ),
            320 => 
            array (
                'id' => 321,
                'parent_id' => 25,
                'name' => '上海',
                'type' => 2,
            ),
            321 => 
            array (
                'id' => 322,
                'parent_id' => 26,
                'name' => '成都',
                'type' => 2,
            ),
            322 => 
            array (
                'id' => 323,
                'parent_id' => 26,
                'name' => '绵阳',
                'type' => 2,
            ),
            323 => 
            array (
                'id' => 324,
                'parent_id' => 26,
                'name' => '阿坝',
                'type' => 2,
            ),
            324 => 
            array (
                'id' => 325,
                'parent_id' => 26,
                'name' => '巴中',
                'type' => 2,
            ),
            325 => 
            array (
                'id' => 326,
                'parent_id' => 26,
                'name' => '达州',
                'type' => 2,
            ),
            326 => 
            array (
                'id' => 327,
                'parent_id' => 26,
                'name' => '德阳',
                'type' => 2,
            ),
            327 => 
            array (
                'id' => 328,
                'parent_id' => 26,
                'name' => '甘孜',
                'type' => 2,
            ),
            328 => 
            array (
                'id' => 329,
                'parent_id' => 26,
                'name' => '广安',
                'type' => 2,
            ),
            329 => 
            array (
                'id' => 330,
                'parent_id' => 26,
                'name' => '广元',
                'type' => 2,
            ),
            330 => 
            array (
                'id' => 331,
                'parent_id' => 26,
                'name' => '乐山',
                'type' => 2,
            ),
            331 => 
            array (
                'id' => 332,
                'parent_id' => 26,
                'name' => '凉山',
                'type' => 2,
            ),
            332 => 
            array (
                'id' => 333,
                'parent_id' => 26,
                'name' => '眉山',
                'type' => 2,
            ),
            333 => 
            array (
                'id' => 334,
                'parent_id' => 26,
                'name' => '南充',
                'type' => 2,
            ),
            334 => 
            array (
                'id' => 335,
                'parent_id' => 26,
                'name' => '内江',
                'type' => 2,
            ),
            335 => 
            array (
                'id' => 336,
                'parent_id' => 26,
                'name' => '攀枝花',
                'type' => 2,
            ),
            336 => 
            array (
                'id' => 337,
                'parent_id' => 26,
                'name' => '遂宁',
                'type' => 2,
            ),
            337 => 
            array (
                'id' => 338,
                'parent_id' => 26,
                'name' => '雅安',
                'type' => 2,
            ),
            338 => 
            array (
                'id' => 339,
                'parent_id' => 26,
                'name' => '宜宾',
                'type' => 2,
            ),
            339 => 
            array (
                'id' => 340,
                'parent_id' => 26,
                'name' => '资阳',
                'type' => 2,
            ),
            340 => 
            array (
                'id' => 341,
                'parent_id' => 26,
                'name' => '自贡',
                'type' => 2,
            ),
            341 => 
            array (
                'id' => 342,
                'parent_id' => 26,
                'name' => '泸州',
                'type' => 2,
            ),
            342 => 
            array (
                'id' => 343,
                'parent_id' => 27,
                'name' => '天津',
                'type' => 2,
            ),
            343 => 
            array (
                'id' => 344,
                'parent_id' => 28,
                'name' => '拉萨',
                'type' => 2,
            ),
            344 => 
            array (
                'id' => 345,
                'parent_id' => 28,
                'name' => '阿里',
                'type' => 2,
            ),
            345 => 
            array (
                'id' => 346,
                'parent_id' => 28,
                'name' => '昌都',
                'type' => 2,
            ),
            346 => 
            array (
                'id' => 347,
                'parent_id' => 28,
                'name' => '林芝',
                'type' => 2,
            ),
            347 => 
            array (
                'id' => 348,
                'parent_id' => 28,
                'name' => '那曲',
                'type' => 2,
            ),
            348 => 
            array (
                'id' => 349,
                'parent_id' => 28,
                'name' => '日喀则',
                'type' => 2,
            ),
            349 => 
            array (
                'id' => 350,
                'parent_id' => 28,
                'name' => '山南',
                'type' => 2,
            ),
            350 => 
            array (
                'id' => 351,
                'parent_id' => 29,
                'name' => '乌鲁木齐',
                'type' => 2,
            ),
            351 => 
            array (
                'id' => 352,
                'parent_id' => 29,
                'name' => '阿克苏',
                'type' => 2,
            ),
            352 => 
            array (
                'id' => 353,
                'parent_id' => 29,
                'name' => '阿拉尔',
                'type' => 2,
            ),
            353 => 
            array (
                'id' => 354,
                'parent_id' => 29,
                'name' => '巴音郭楞',
                'type' => 2,
            ),
            354 => 
            array (
                'id' => 355,
                'parent_id' => 29,
                'name' => '博尔塔拉',
                'type' => 2,
            ),
            355 => 
            array (
                'id' => 356,
                'parent_id' => 29,
                'name' => '昌吉',
                'type' => 2,
            ),
            356 => 
            array (
                'id' => 357,
                'parent_id' => 29,
                'name' => '哈密',
                'type' => 2,
            ),
            357 => 
            array (
                'id' => 358,
                'parent_id' => 29,
                'name' => '和田',
                'type' => 2,
            ),
            358 => 
            array (
                'id' => 359,
                'parent_id' => 29,
                'name' => '喀什',
                'type' => 2,
            ),
            359 => 
            array (
                'id' => 360,
                'parent_id' => 29,
                'name' => '克拉玛依',
                'type' => 2,
            ),
            360 => 
            array (
                'id' => 361,
                'parent_id' => 29,
                'name' => '克孜勒苏',
                'type' => 2,
            ),
            361 => 
            array (
                'id' => 362,
                'parent_id' => 29,
                'name' => '石河子',
                'type' => 2,
            ),
            362 => 
            array (
                'id' => 363,
                'parent_id' => 29,
                'name' => '图木舒克',
                'type' => 2,
            ),
            363 => 
            array (
                'id' => 364,
                'parent_id' => 29,
                'name' => '吐鲁番',
                'type' => 2,
            ),
            364 => 
            array (
                'id' => 365,
                'parent_id' => 29,
                'name' => '五家渠',
                'type' => 2,
            ),
            365 => 
            array (
                'id' => 366,
                'parent_id' => 29,
                'name' => '伊犁',
                'type' => 2,
            ),
            366 => 
            array (
                'id' => 367,
                'parent_id' => 30,
                'name' => '昆明',
                'type' => 2,
            ),
            367 => 
            array (
                'id' => 368,
                'parent_id' => 30,
                'name' => '怒江',
                'type' => 2,
            ),
            368 => 
            array (
                'id' => 369,
                'parent_id' => 30,
                'name' => '普洱',
                'type' => 2,
            ),
            369 => 
            array (
                'id' => 370,
                'parent_id' => 30,
                'name' => '丽江',
                'type' => 2,
            ),
            370 => 
            array (
                'id' => 371,
                'parent_id' => 30,
                'name' => '保山',
                'type' => 2,
            ),
            371 => 
            array (
                'id' => 372,
                'parent_id' => 30,
                'name' => '楚雄',
                'type' => 2,
            ),
            372 => 
            array (
                'id' => 373,
                'parent_id' => 30,
                'name' => '大理',
                'type' => 2,
            ),
            373 => 
            array (
                'id' => 374,
                'parent_id' => 30,
                'name' => '德宏',
                'type' => 2,
            ),
            374 => 
            array (
                'id' => 375,
                'parent_id' => 30,
                'name' => '迪庆',
                'type' => 2,
            ),
            375 => 
            array (
                'id' => 376,
                'parent_id' => 30,
                'name' => '红河',
                'type' => 2,
            ),
            376 => 
            array (
                'id' => 377,
                'parent_id' => 30,
                'name' => '临沧',
                'type' => 2,
            ),
            377 => 
            array (
                'id' => 378,
                'parent_id' => 30,
                'name' => '曲靖',
                'type' => 2,
            ),
            378 => 
            array (
                'id' => 379,
                'parent_id' => 30,
                'name' => '文山',
                'type' => 2,
            ),
            379 => 
            array (
                'id' => 380,
                'parent_id' => 30,
                'name' => '西双版纳',
                'type' => 2,
            ),
            380 => 
            array (
                'id' => 381,
                'parent_id' => 30,
                'name' => '玉溪',
                'type' => 2,
            ),
            381 => 
            array (
                'id' => 382,
                'parent_id' => 30,
                'name' => '昭通',
                'type' => 2,
            ),
            382 => 
            array (
                'id' => 383,
                'parent_id' => 31,
                'name' => '杭州',
                'type' => 2,
            ),
            383 => 
            array (
                'id' => 384,
                'parent_id' => 31,
                'name' => '湖州',
                'type' => 2,
            ),
            384 => 
            array (
                'id' => 385,
                'parent_id' => 31,
                'name' => '嘉兴',
                'type' => 2,
            ),
            385 => 
            array (
                'id' => 386,
                'parent_id' => 31,
                'name' => '金华',
                'type' => 2,
            ),
            386 => 
            array (
                'id' => 387,
                'parent_id' => 31,
                'name' => '丽水',
                'type' => 2,
            ),
            387 => 
            array (
                'id' => 388,
                'parent_id' => 31,
                'name' => '宁波',
                'type' => 2,
            ),
            388 => 
            array (
                'id' => 389,
                'parent_id' => 31,
                'name' => '绍兴',
                'type' => 2,
            ),
            389 => 
            array (
                'id' => 390,
                'parent_id' => 31,
                'name' => '台州',
                'type' => 2,
            ),
            390 => 
            array (
                'id' => 391,
                'parent_id' => 31,
                'name' => '温州',
                'type' => 2,
            ),
            391 => 
            array (
                'id' => 392,
                'parent_id' => 31,
                'name' => '舟山',
                'type' => 2,
            ),
            392 => 
            array (
                'id' => 393,
                'parent_id' => 31,
                'name' => '衢州',
                'type' => 2,
            ),
            393 => 
            array (
                'id' => 394,
                'parent_id' => 32,
                'name' => '重庆',
                'type' => 2,
            ),
            394 => 
            array (
                'id' => 395,
                'parent_id' => 33,
                'name' => '香港',
                'type' => 2,
            ),
            395 => 
            array (
                'id' => 396,
                'parent_id' => 34,
                'name' => '澳门',
                'type' => 2,
            ),
            396 => 
            array (
                'id' => 397,
                'parent_id' => 35,
                'name' => '台湾',
                'type' => 2,
            ),
            397 => 
            array (
                'id' => 398,
                'parent_id' => 36,
                'name' => '迎江区',
                'type' => 3,
            ),
            398 => 
            array (
                'id' => 399,
                'parent_id' => 36,
                'name' => '大观区',
                'type' => 3,
            ),
            399 => 
            array (
                'id' => 400,
                'parent_id' => 36,
                'name' => '宜秀区',
                'type' => 3,
            ),
            400 => 
            array (
                'id' => 401,
                'parent_id' => 36,
                'name' => '桐城市',
                'type' => 3,
            ),
            401 => 
            array (
                'id' => 402,
                'parent_id' => 36,
                'name' => '怀宁县',
                'type' => 3,
            ),
            402 => 
            array (
                'id' => 403,
                'parent_id' => 36,
                'name' => '枞阳县',
                'type' => 3,
            ),
            403 => 
            array (
                'id' => 404,
                'parent_id' => 36,
                'name' => '潜山县',
                'type' => 3,
            ),
            404 => 
            array (
                'id' => 405,
                'parent_id' => 36,
                'name' => '太湖县',
                'type' => 3,
            ),
            405 => 
            array (
                'id' => 406,
                'parent_id' => 36,
                'name' => '宿松县',
                'type' => 3,
            ),
            406 => 
            array (
                'id' => 407,
                'parent_id' => 36,
                'name' => '望江县',
                'type' => 3,
            ),
            407 => 
            array (
                'id' => 408,
                'parent_id' => 36,
                'name' => '岳西县',
                'type' => 3,
            ),
            408 => 
            array (
                'id' => 409,
                'parent_id' => 37,
                'name' => '中市区',
                'type' => 3,
            ),
            409 => 
            array (
                'id' => 410,
                'parent_id' => 37,
                'name' => '东市区',
                'type' => 3,
            ),
            410 => 
            array (
                'id' => 411,
                'parent_id' => 37,
                'name' => '西市区',
                'type' => 3,
            ),
            411 => 
            array (
                'id' => 412,
                'parent_id' => 37,
                'name' => '郊区',
                'type' => 3,
            ),
            412 => 
            array (
                'id' => 413,
                'parent_id' => 37,
                'name' => '怀远县',
                'type' => 3,
            ),
            413 => 
            array (
                'id' => 414,
                'parent_id' => 37,
                'name' => '五河县',
                'type' => 3,
            ),
            414 => 
            array (
                'id' => 415,
                'parent_id' => 37,
                'name' => '固镇县',
                'type' => 3,
            ),
            415 => 
            array (
                'id' => 416,
                'parent_id' => 38,
                'name' => '居巢区',
                'type' => 3,
            ),
            416 => 
            array (
                'id' => 417,
                'parent_id' => 38,
                'name' => '庐江县',
                'type' => 3,
            ),
            417 => 
            array (
                'id' => 418,
                'parent_id' => 38,
                'name' => '无为县',
                'type' => 3,
            ),
            418 => 
            array (
                'id' => 419,
                'parent_id' => 38,
                'name' => '含山县',
                'type' => 3,
            ),
            419 => 
            array (
                'id' => 420,
                'parent_id' => 38,
                'name' => '和县',
                'type' => 3,
            ),
            420 => 
            array (
                'id' => 421,
                'parent_id' => 39,
                'name' => '贵池区',
                'type' => 3,
            ),
            421 => 
            array (
                'id' => 422,
                'parent_id' => 39,
                'name' => '东至县',
                'type' => 3,
            ),
            422 => 
            array (
                'id' => 423,
                'parent_id' => 39,
                'name' => '石台县',
                'type' => 3,
            ),
            423 => 
            array (
                'id' => 424,
                'parent_id' => 39,
                'name' => '青阳县',
                'type' => 3,
            ),
            424 => 
            array (
                'id' => 425,
                'parent_id' => 40,
                'name' => '琅琊区',
                'type' => 3,
            ),
            425 => 
            array (
                'id' => 426,
                'parent_id' => 40,
                'name' => '南谯区',
                'type' => 3,
            ),
            426 => 
            array (
                'id' => 427,
                'parent_id' => 40,
                'name' => '天长市',
                'type' => 3,
            ),
            427 => 
            array (
                'id' => 428,
                'parent_id' => 40,
                'name' => '明光市',
                'type' => 3,
            ),
            428 => 
            array (
                'id' => 429,
                'parent_id' => 40,
                'name' => '来安县',
                'type' => 3,
            ),
            429 => 
            array (
                'id' => 430,
                'parent_id' => 40,
                'name' => '全椒县',
                'type' => 3,
            ),
            430 => 
            array (
                'id' => 431,
                'parent_id' => 40,
                'name' => '定远县',
                'type' => 3,
            ),
            431 => 
            array (
                'id' => 432,
                'parent_id' => 40,
                'name' => '凤阳县',
                'type' => 3,
            ),
            432 => 
            array (
                'id' => 433,
                'parent_id' => 41,
                'name' => '蚌山区',
                'type' => 3,
            ),
            433 => 
            array (
                'id' => 434,
                'parent_id' => 41,
                'name' => '龙子湖区',
                'type' => 3,
            ),
            434 => 
            array (
                'id' => 435,
                'parent_id' => 41,
                'name' => '禹会区',
                'type' => 3,
            ),
            435 => 
            array (
                'id' => 436,
                'parent_id' => 41,
                'name' => '淮上区',
                'type' => 3,
            ),
            436 => 
            array (
                'id' => 437,
                'parent_id' => 41,
                'name' => '颍州区',
                'type' => 3,
            ),
            437 => 
            array (
                'id' => 438,
                'parent_id' => 41,
                'name' => '颍东区',
                'type' => 3,
            ),
            438 => 
            array (
                'id' => 439,
                'parent_id' => 41,
                'name' => '颍泉区',
                'type' => 3,
            ),
            439 => 
            array (
                'id' => 440,
                'parent_id' => 41,
                'name' => '界首市',
                'type' => 3,
            ),
            440 => 
            array (
                'id' => 441,
                'parent_id' => 41,
                'name' => '临泉县',
                'type' => 3,
            ),
            441 => 
            array (
                'id' => 442,
                'parent_id' => 41,
                'name' => '太和县',
                'type' => 3,
            ),
            442 => 
            array (
                'id' => 443,
                'parent_id' => 41,
                'name' => '阜南县',
                'type' => 3,
            ),
            443 => 
            array (
                'id' => 444,
                'parent_id' => 41,
                'name' => '颖上县',
                'type' => 3,
            ),
            444 => 
            array (
                'id' => 445,
                'parent_id' => 42,
                'name' => '相山区',
                'type' => 3,
            ),
            445 => 
            array (
                'id' => 446,
                'parent_id' => 42,
                'name' => '杜集区',
                'type' => 3,
            ),
            446 => 
            array (
                'id' => 447,
                'parent_id' => 42,
                'name' => '烈山区',
                'type' => 3,
            ),
            447 => 
            array (
                'id' => 448,
                'parent_id' => 42,
                'name' => '濉溪县',
                'type' => 3,
            ),
            448 => 
            array (
                'id' => 449,
                'parent_id' => 43,
                'name' => '田家庵区',
                'type' => 3,
            ),
            449 => 
            array (
                'id' => 450,
                'parent_id' => 43,
                'name' => '大通区',
                'type' => 3,
            ),
            450 => 
            array (
                'id' => 451,
                'parent_id' => 43,
                'name' => '谢家集区',
                'type' => 3,
            ),
            451 => 
            array (
                'id' => 452,
                'parent_id' => 43,
                'name' => '八公山区',
                'type' => 3,
            ),
            452 => 
            array (
                'id' => 453,
                'parent_id' => 43,
                'name' => '潘集区',
                'type' => 3,
            ),
            453 => 
            array (
                'id' => 454,
                'parent_id' => 43,
                'name' => '凤台县',
                'type' => 3,
            ),
            454 => 
            array (
                'id' => 455,
                'parent_id' => 44,
                'name' => '屯溪区',
                'type' => 3,
            ),
            455 => 
            array (
                'id' => 456,
                'parent_id' => 44,
                'name' => '黄山区',
                'type' => 3,
            ),
            456 => 
            array (
                'id' => 457,
                'parent_id' => 44,
                'name' => '徽州区',
                'type' => 3,
            ),
            457 => 
            array (
                'id' => 458,
                'parent_id' => 44,
                'name' => '歙县',
                'type' => 3,
            ),
            458 => 
            array (
                'id' => 459,
                'parent_id' => 44,
                'name' => '休宁县',
                'type' => 3,
            ),
            459 => 
            array (
                'id' => 460,
                'parent_id' => 44,
                'name' => '黟县',
                'type' => 3,
            ),
            460 => 
            array (
                'id' => 461,
                'parent_id' => 44,
                'name' => '祁门县',
                'type' => 3,
            ),
            461 => 
            array (
                'id' => 462,
                'parent_id' => 45,
                'name' => '金安区',
                'type' => 3,
            ),
            462 => 
            array (
                'id' => 463,
                'parent_id' => 45,
                'name' => '裕安区',
                'type' => 3,
            ),
            463 => 
            array (
                'id' => 464,
                'parent_id' => 45,
                'name' => '寿县',
                'type' => 3,
            ),
            464 => 
            array (
                'id' => 465,
                'parent_id' => 45,
                'name' => '霍邱县',
                'type' => 3,
            ),
            465 => 
            array (
                'id' => 466,
                'parent_id' => 45,
                'name' => '舒城县',
                'type' => 3,
            ),
            466 => 
            array (
                'id' => 467,
                'parent_id' => 45,
                'name' => '金寨县',
                'type' => 3,
            ),
            467 => 
            array (
                'id' => 468,
                'parent_id' => 45,
                'name' => '霍山县',
                'type' => 3,
            ),
            468 => 
            array (
                'id' => 469,
                'parent_id' => 46,
                'name' => '雨山区',
                'type' => 3,
            ),
            469 => 
            array (
                'id' => 470,
                'parent_id' => 46,
                'name' => '花山区',
                'type' => 3,
            ),
            470 => 
            array (
                'id' => 471,
                'parent_id' => 46,
                'name' => '金家庄区',
                'type' => 3,
            ),
            471 => 
            array (
                'id' => 472,
                'parent_id' => 46,
                'name' => '当涂县',
                'type' => 3,
            ),
            472 => 
            array (
                'id' => 473,
                'parent_id' => 47,
                'name' => '埇桥区',
                'type' => 3,
            ),
            473 => 
            array (
                'id' => 474,
                'parent_id' => 47,
                'name' => '砀山县',
                'type' => 3,
            ),
            474 => 
            array (
                'id' => 475,
                'parent_id' => 47,
                'name' => '萧县',
                'type' => 3,
            ),
            475 => 
            array (
                'id' => 476,
                'parent_id' => 47,
                'name' => '灵璧县',
                'type' => 3,
            ),
            476 => 
            array (
                'id' => 477,
                'parent_id' => 47,
                'name' => '泗县',
                'type' => 3,
            ),
            477 => 
            array (
                'id' => 478,
                'parent_id' => 48,
                'name' => '铜官山区',
                'type' => 3,
            ),
            478 => 
            array (
                'id' => 479,
                'parent_id' => 48,
                'name' => '狮子山区',
                'type' => 3,
            ),
            479 => 
            array (
                'id' => 480,
                'parent_id' => 48,
                'name' => '郊区',
                'type' => 3,
            ),
            480 => 
            array (
                'id' => 481,
                'parent_id' => 48,
                'name' => '铜陵县',
                'type' => 3,
            ),
            481 => 
            array (
                'id' => 482,
                'parent_id' => 49,
                'name' => '镜湖区',
                'type' => 3,
            ),
            482 => 
            array (
                'id' => 483,
                'parent_id' => 49,
                'name' => '弋江区',
                'type' => 3,
            ),
            483 => 
            array (
                'id' => 484,
                'parent_id' => 49,
                'name' => '鸠江区',
                'type' => 3,
            ),
            484 => 
            array (
                'id' => 485,
                'parent_id' => 49,
                'name' => '三山区',
                'type' => 3,
            ),
            485 => 
            array (
                'id' => 486,
                'parent_id' => 49,
                'name' => '芜湖县',
                'type' => 3,
            ),
            486 => 
            array (
                'id' => 487,
                'parent_id' => 49,
                'name' => '繁昌县',
                'type' => 3,
            ),
            487 => 
            array (
                'id' => 488,
                'parent_id' => 49,
                'name' => '南陵县',
                'type' => 3,
            ),
            488 => 
            array (
                'id' => 489,
                'parent_id' => 50,
                'name' => '宣州区',
                'type' => 3,
            ),
            489 => 
            array (
                'id' => 490,
                'parent_id' => 50,
                'name' => '宁国市',
                'type' => 3,
            ),
            490 => 
            array (
                'id' => 491,
                'parent_id' => 50,
                'name' => '郎溪县',
                'type' => 3,
            ),
            491 => 
            array (
                'id' => 492,
                'parent_id' => 50,
                'name' => '广德县',
                'type' => 3,
            ),
            492 => 
            array (
                'id' => 493,
                'parent_id' => 50,
                'name' => '泾县',
                'type' => 3,
            ),
            493 => 
            array (
                'id' => 494,
                'parent_id' => 50,
                'name' => '绩溪县',
                'type' => 3,
            ),
            494 => 
            array (
                'id' => 495,
                'parent_id' => 50,
                'name' => '旌德县',
                'type' => 3,
            ),
            495 => 
            array (
                'id' => 496,
                'parent_id' => 51,
                'name' => '涡阳县',
                'type' => 3,
            ),
            496 => 
            array (
                'id' => 497,
                'parent_id' => 51,
                'name' => '蒙城县',
                'type' => 3,
            ),
            497 => 
            array (
                'id' => 498,
                'parent_id' => 51,
                'name' => '利辛县',
                'type' => 3,
            ),
            498 => 
            array (
                'id' => 499,
                'parent_id' => 51,
                'name' => '谯城区',
                'type' => 3,
            ),
            499 => 
            array (
                'id' => 500,
                'parent_id' => 52,
                'name' => '东城区',
                'type' => 3,
            ),
        ));
        \DB::table('china_area')->insert(array (
            0 => 
            array (
                'id' => 501,
                'parent_id' => 52,
                'name' => '西城区',
                'type' => 3,
            ),
            1 => 
            array (
                'id' => 502,
                'parent_id' => 52,
                'name' => '海淀区',
                'type' => 3,
            ),
            2 => 
            array (
                'id' => 503,
                'parent_id' => 52,
                'name' => '朝阳区',
                'type' => 3,
            ),
            3 => 
            array (
                'id' => 504,
                'parent_id' => 52,
                'name' => '崇文区',
                'type' => 3,
            ),
            4 => 
            array (
                'id' => 505,
                'parent_id' => 52,
                'name' => '宣武区',
                'type' => 3,
            ),
            5 => 
            array (
                'id' => 506,
                'parent_id' => 52,
                'name' => '丰台区',
                'type' => 3,
            ),
            6 => 
            array (
                'id' => 507,
                'parent_id' => 52,
                'name' => '石景山区',
                'type' => 3,
            ),
            7 => 
            array (
                'id' => 508,
                'parent_id' => 52,
                'name' => '房山区',
                'type' => 3,
            ),
            8 => 
            array (
                'id' => 509,
                'parent_id' => 52,
                'name' => '门头沟区',
                'type' => 3,
            ),
            9 => 
            array (
                'id' => 510,
                'parent_id' => 52,
                'name' => '通州区',
                'type' => 3,
            ),
            10 => 
            array (
                'id' => 511,
                'parent_id' => 52,
                'name' => '顺义区',
                'type' => 3,
            ),
            11 => 
            array (
                'id' => 512,
                'parent_id' => 52,
                'name' => '昌平区',
                'type' => 3,
            ),
            12 => 
            array (
                'id' => 513,
                'parent_id' => 52,
                'name' => '怀柔区',
                'type' => 3,
            ),
            13 => 
            array (
                'id' => 514,
                'parent_id' => 52,
                'name' => '平谷区',
                'type' => 3,
            ),
            14 => 
            array (
                'id' => 515,
                'parent_id' => 52,
                'name' => '大兴区',
                'type' => 3,
            ),
            15 => 
            array (
                'id' => 516,
                'parent_id' => 52,
                'name' => '密云县',
                'type' => 3,
            ),
            16 => 
            array (
                'id' => 517,
                'parent_id' => 52,
                'name' => '延庆县',
                'type' => 3,
            ),
            17 => 
            array (
                'id' => 518,
                'parent_id' => 53,
                'name' => '鼓楼区',
                'type' => 3,
            ),
            18 => 
            array (
                'id' => 519,
                'parent_id' => 53,
                'name' => '台江区',
                'type' => 3,
            ),
            19 => 
            array (
                'id' => 520,
                'parent_id' => 53,
                'name' => '仓山区',
                'type' => 3,
            ),
            20 => 
            array (
                'id' => 521,
                'parent_id' => 53,
                'name' => '马尾区',
                'type' => 3,
            ),
            21 => 
            array (
                'id' => 522,
                'parent_id' => 53,
                'name' => '晋安区',
                'type' => 3,
            ),
            22 => 
            array (
                'id' => 523,
                'parent_id' => 53,
                'name' => '福清市',
                'type' => 3,
            ),
            23 => 
            array (
                'id' => 524,
                'parent_id' => 53,
                'name' => '长乐市',
                'type' => 3,
            ),
            24 => 
            array (
                'id' => 525,
                'parent_id' => 53,
                'name' => '闽侯县',
                'type' => 3,
            ),
            25 => 
            array (
                'id' => 526,
                'parent_id' => 53,
                'name' => '连江县',
                'type' => 3,
            ),
            26 => 
            array (
                'id' => 527,
                'parent_id' => 53,
                'name' => '罗源县',
                'type' => 3,
            ),
            27 => 
            array (
                'id' => 528,
                'parent_id' => 53,
                'name' => '闽清县',
                'type' => 3,
            ),
            28 => 
            array (
                'id' => 529,
                'parent_id' => 53,
                'name' => '永泰县',
                'type' => 3,
            ),
            29 => 
            array (
                'id' => 530,
                'parent_id' => 53,
                'name' => '平潭县',
                'type' => 3,
            ),
            30 => 
            array (
                'id' => 531,
                'parent_id' => 54,
                'name' => '新罗区',
                'type' => 3,
            ),
            31 => 
            array (
                'id' => 532,
                'parent_id' => 54,
                'name' => '漳平市',
                'type' => 3,
            ),
            32 => 
            array (
                'id' => 533,
                'parent_id' => 54,
                'name' => '长汀县',
                'type' => 3,
            ),
            33 => 
            array (
                'id' => 534,
                'parent_id' => 54,
                'name' => '永定县',
                'type' => 3,
            ),
            34 => 
            array (
                'id' => 535,
                'parent_id' => 54,
                'name' => '上杭县',
                'type' => 3,
            ),
            35 => 
            array (
                'id' => 536,
                'parent_id' => 54,
                'name' => '武平县',
                'type' => 3,
            ),
            36 => 
            array (
                'id' => 537,
                'parent_id' => 54,
                'name' => '连城县',
                'type' => 3,
            ),
            37 => 
            array (
                'id' => 538,
                'parent_id' => 55,
                'name' => '延平区',
                'type' => 3,
            ),
            38 => 
            array (
                'id' => 539,
                'parent_id' => 55,
                'name' => '邵武市',
                'type' => 3,
            ),
            39 => 
            array (
                'id' => 540,
                'parent_id' => 55,
                'name' => '武夷山市',
                'type' => 3,
            ),
            40 => 
            array (
                'id' => 541,
                'parent_id' => 55,
                'name' => '建瓯市',
                'type' => 3,
            ),
            41 => 
            array (
                'id' => 542,
                'parent_id' => 55,
                'name' => '建阳市',
                'type' => 3,
            ),
            42 => 
            array (
                'id' => 543,
                'parent_id' => 55,
                'name' => '顺昌县',
                'type' => 3,
            ),
            43 => 
            array (
                'id' => 544,
                'parent_id' => 55,
                'name' => '浦城县',
                'type' => 3,
            ),
            44 => 
            array (
                'id' => 545,
                'parent_id' => 55,
                'name' => '光泽县',
                'type' => 3,
            ),
            45 => 
            array (
                'id' => 546,
                'parent_id' => 55,
                'name' => '松溪县',
                'type' => 3,
            ),
            46 => 
            array (
                'id' => 547,
                'parent_id' => 55,
                'name' => '政和县',
                'type' => 3,
            ),
            47 => 
            array (
                'id' => 548,
                'parent_id' => 56,
                'name' => '蕉城区',
                'type' => 3,
            ),
            48 => 
            array (
                'id' => 549,
                'parent_id' => 56,
                'name' => '福安市',
                'type' => 3,
            ),
            49 => 
            array (
                'id' => 550,
                'parent_id' => 56,
                'name' => '福鼎市',
                'type' => 3,
            ),
            50 => 
            array (
                'id' => 551,
                'parent_id' => 56,
                'name' => '霞浦县',
                'type' => 3,
            ),
            51 => 
            array (
                'id' => 552,
                'parent_id' => 56,
                'name' => '古田县',
                'type' => 3,
            ),
            52 => 
            array (
                'id' => 553,
                'parent_id' => 56,
                'name' => '屏南县',
                'type' => 3,
            ),
            53 => 
            array (
                'id' => 554,
                'parent_id' => 56,
                'name' => '寿宁县',
                'type' => 3,
            ),
            54 => 
            array (
                'id' => 555,
                'parent_id' => 56,
                'name' => '周宁县',
                'type' => 3,
            ),
            55 => 
            array (
                'id' => 556,
                'parent_id' => 56,
                'name' => '柘荣县',
                'type' => 3,
            ),
            56 => 
            array (
                'id' => 557,
                'parent_id' => 57,
                'name' => '城厢区',
                'type' => 3,
            ),
            57 => 
            array (
                'id' => 558,
                'parent_id' => 57,
                'name' => '涵江区',
                'type' => 3,
            ),
            58 => 
            array (
                'id' => 559,
                'parent_id' => 57,
                'name' => '荔城区',
                'type' => 3,
            ),
            59 => 
            array (
                'id' => 560,
                'parent_id' => 57,
                'name' => '秀屿区',
                'type' => 3,
            ),
            60 => 
            array (
                'id' => 561,
                'parent_id' => 57,
                'name' => '仙游县',
                'type' => 3,
            ),
            61 => 
            array (
                'id' => 562,
                'parent_id' => 58,
                'name' => '鲤城区',
                'type' => 3,
            ),
            62 => 
            array (
                'id' => 563,
                'parent_id' => 58,
                'name' => '丰泽区',
                'type' => 3,
            ),
            63 => 
            array (
                'id' => 564,
                'parent_id' => 58,
                'name' => '洛江区',
                'type' => 3,
            ),
            64 => 
            array (
                'id' => 565,
                'parent_id' => 58,
                'name' => '清濛开发区',
                'type' => 3,
            ),
            65 => 
            array (
                'id' => 566,
                'parent_id' => 58,
                'name' => '泉港区',
                'type' => 3,
            ),
            66 => 
            array (
                'id' => 567,
                'parent_id' => 58,
                'name' => '石狮市',
                'type' => 3,
            ),
            67 => 
            array (
                'id' => 568,
                'parent_id' => 58,
                'name' => '晋江市',
                'type' => 3,
            ),
            68 => 
            array (
                'id' => 569,
                'parent_id' => 58,
                'name' => '南安市',
                'type' => 3,
            ),
            69 => 
            array (
                'id' => 570,
                'parent_id' => 58,
                'name' => '惠安县',
                'type' => 3,
            ),
            70 => 
            array (
                'id' => 571,
                'parent_id' => 58,
                'name' => '安溪县',
                'type' => 3,
            ),
            71 => 
            array (
                'id' => 572,
                'parent_id' => 58,
                'name' => '永春县',
                'type' => 3,
            ),
            72 => 
            array (
                'id' => 573,
                'parent_id' => 58,
                'name' => '德化县',
                'type' => 3,
            ),
            73 => 
            array (
                'id' => 574,
                'parent_id' => 58,
                'name' => '金门县',
                'type' => 3,
            ),
            74 => 
            array (
                'id' => 575,
                'parent_id' => 59,
                'name' => '梅列区',
                'type' => 3,
            ),
            75 => 
            array (
                'id' => 576,
                'parent_id' => 59,
                'name' => '三元区',
                'type' => 3,
            ),
            76 => 
            array (
                'id' => 577,
                'parent_id' => 59,
                'name' => '永安市',
                'type' => 3,
            ),
            77 => 
            array (
                'id' => 578,
                'parent_id' => 59,
                'name' => '明溪县',
                'type' => 3,
            ),
            78 => 
            array (
                'id' => 579,
                'parent_id' => 59,
                'name' => '清流县',
                'type' => 3,
            ),
            79 => 
            array (
                'id' => 580,
                'parent_id' => 59,
                'name' => '宁化县',
                'type' => 3,
            ),
            80 => 
            array (
                'id' => 581,
                'parent_id' => 59,
                'name' => '大田县',
                'type' => 3,
            ),
            81 => 
            array (
                'id' => 582,
                'parent_id' => 59,
                'name' => '尤溪县',
                'type' => 3,
            ),
            82 => 
            array (
                'id' => 583,
                'parent_id' => 59,
                'name' => '沙县',
                'type' => 3,
            ),
            83 => 
            array (
                'id' => 584,
                'parent_id' => 59,
                'name' => '将乐县',
                'type' => 3,
            ),
            84 => 
            array (
                'id' => 585,
                'parent_id' => 59,
                'name' => '泰宁县',
                'type' => 3,
            ),
            85 => 
            array (
                'id' => 586,
                'parent_id' => 59,
                'name' => '建宁县',
                'type' => 3,
            ),
            86 => 
            array (
                'id' => 587,
                'parent_id' => 60,
                'name' => '思明区',
                'type' => 3,
            ),
            87 => 
            array (
                'id' => 588,
                'parent_id' => 60,
                'name' => '海沧区',
                'type' => 3,
            ),
            88 => 
            array (
                'id' => 589,
                'parent_id' => 60,
                'name' => '湖里区',
                'type' => 3,
            ),
            89 => 
            array (
                'id' => 590,
                'parent_id' => 60,
                'name' => '集美区',
                'type' => 3,
            ),
            90 => 
            array (
                'id' => 591,
                'parent_id' => 60,
                'name' => '同安区',
                'type' => 3,
            ),
            91 => 
            array (
                'id' => 592,
                'parent_id' => 60,
                'name' => '翔安区',
                'type' => 3,
            ),
            92 => 
            array (
                'id' => 593,
                'parent_id' => 61,
                'name' => '芗城区',
                'type' => 3,
            ),
            93 => 
            array (
                'id' => 594,
                'parent_id' => 61,
                'name' => '龙文区',
                'type' => 3,
            ),
            94 => 
            array (
                'id' => 595,
                'parent_id' => 61,
                'name' => '龙海市',
                'type' => 3,
            ),
            95 => 
            array (
                'id' => 596,
                'parent_id' => 61,
                'name' => '云霄县',
                'type' => 3,
            ),
            96 => 
            array (
                'id' => 597,
                'parent_id' => 61,
                'name' => '漳浦县',
                'type' => 3,
            ),
            97 => 
            array (
                'id' => 598,
                'parent_id' => 61,
                'name' => '诏安县',
                'type' => 3,
            ),
            98 => 
            array (
                'id' => 599,
                'parent_id' => 61,
                'name' => '长泰县',
                'type' => 3,
            ),
            99 => 
            array (
                'id' => 600,
                'parent_id' => 61,
                'name' => '东山县',
                'type' => 3,
            ),
            100 => 
            array (
                'id' => 601,
                'parent_id' => 61,
                'name' => '南靖县',
                'type' => 3,
            ),
            101 => 
            array (
                'id' => 602,
                'parent_id' => 61,
                'name' => '平和县',
                'type' => 3,
            ),
            102 => 
            array (
                'id' => 603,
                'parent_id' => 61,
                'name' => '华安县',
                'type' => 3,
            ),
            103 => 
            array (
                'id' => 604,
                'parent_id' => 62,
                'name' => '皋兰县',
                'type' => 3,
            ),
            104 => 
            array (
                'id' => 605,
                'parent_id' => 62,
                'name' => '城关区',
                'type' => 3,
            ),
            105 => 
            array (
                'id' => 606,
                'parent_id' => 62,
                'name' => '七里河区',
                'type' => 3,
            ),
            106 => 
            array (
                'id' => 607,
                'parent_id' => 62,
                'name' => '西固区',
                'type' => 3,
            ),
            107 => 
            array (
                'id' => 608,
                'parent_id' => 62,
                'name' => '安宁区',
                'type' => 3,
            ),
            108 => 
            array (
                'id' => 609,
                'parent_id' => 62,
                'name' => '红古区',
                'type' => 3,
            ),
            109 => 
            array (
                'id' => 610,
                'parent_id' => 62,
                'name' => '永登县',
                'type' => 3,
            ),
            110 => 
            array (
                'id' => 611,
                'parent_id' => 62,
                'name' => '榆中县',
                'type' => 3,
            ),
            111 => 
            array (
                'id' => 612,
                'parent_id' => 63,
                'name' => '白银区',
                'type' => 3,
            ),
            112 => 
            array (
                'id' => 613,
                'parent_id' => 63,
                'name' => '平川区',
                'type' => 3,
            ),
            113 => 
            array (
                'id' => 614,
                'parent_id' => 63,
                'name' => '会宁县',
                'type' => 3,
            ),
            114 => 
            array (
                'id' => 615,
                'parent_id' => 63,
                'name' => '景泰县',
                'type' => 3,
            ),
            115 => 
            array (
                'id' => 616,
                'parent_id' => 63,
                'name' => '靖远县',
                'type' => 3,
            ),
            116 => 
            array (
                'id' => 617,
                'parent_id' => 64,
                'name' => '临洮县',
                'type' => 3,
            ),
            117 => 
            array (
                'id' => 618,
                'parent_id' => 64,
                'name' => '陇西县',
                'type' => 3,
            ),
            118 => 
            array (
                'id' => 619,
                'parent_id' => 64,
                'name' => '通渭县',
                'type' => 3,
            ),
            119 => 
            array (
                'id' => 620,
                'parent_id' => 64,
                'name' => '渭源县',
                'type' => 3,
            ),
            120 => 
            array (
                'id' => 621,
                'parent_id' => 64,
                'name' => '漳县',
                'type' => 3,
            ),
            121 => 
            array (
                'id' => 622,
                'parent_id' => 64,
                'name' => '岷县',
                'type' => 3,
            ),
            122 => 
            array (
                'id' => 623,
                'parent_id' => 64,
                'name' => '安定区',
                'type' => 3,
            ),
            123 => 
            array (
                'id' => 624,
                'parent_id' => 64,
                'name' => '安定区',
                'type' => 3,
            ),
            124 => 
            array (
                'id' => 625,
                'parent_id' => 65,
                'name' => '合作市',
                'type' => 3,
            ),
            125 => 
            array (
                'id' => 626,
                'parent_id' => 65,
                'name' => '临潭县',
                'type' => 3,
            ),
            126 => 
            array (
                'id' => 627,
                'parent_id' => 65,
                'name' => '卓尼县',
                'type' => 3,
            ),
            127 => 
            array (
                'id' => 628,
                'parent_id' => 65,
                'name' => '舟曲县',
                'type' => 3,
            ),
            128 => 
            array (
                'id' => 629,
                'parent_id' => 65,
                'name' => '迭部县',
                'type' => 3,
            ),
            129 => 
            array (
                'id' => 630,
                'parent_id' => 65,
                'name' => '玛曲县',
                'type' => 3,
            ),
            130 => 
            array (
                'id' => 631,
                'parent_id' => 65,
                'name' => '碌曲县',
                'type' => 3,
            ),
            131 => 
            array (
                'id' => 632,
                'parent_id' => 65,
                'name' => '夏河县',
                'type' => 3,
            ),
            132 => 
            array (
                'id' => 633,
                'parent_id' => 66,
                'name' => '嘉峪关市',
                'type' => 3,
            ),
            133 => 
            array (
                'id' => 634,
                'parent_id' => 67,
                'name' => '金川区',
                'type' => 3,
            ),
            134 => 
            array (
                'id' => 635,
                'parent_id' => 67,
                'name' => '永昌县',
                'type' => 3,
            ),
            135 => 
            array (
                'id' => 636,
                'parent_id' => 68,
                'name' => '肃州区',
                'type' => 3,
            ),
            136 => 
            array (
                'id' => 637,
                'parent_id' => 68,
                'name' => '玉门市',
                'type' => 3,
            ),
            137 => 
            array (
                'id' => 638,
                'parent_id' => 68,
                'name' => '敦煌市',
                'type' => 3,
            ),
            138 => 
            array (
                'id' => 639,
                'parent_id' => 68,
                'name' => '金塔县',
                'type' => 3,
            ),
            139 => 
            array (
                'id' => 640,
                'parent_id' => 68,
                'name' => '瓜州县',
                'type' => 3,
            ),
            140 => 
            array (
                'id' => 641,
                'parent_id' => 68,
                'name' => '肃北',
                'type' => 3,
            ),
            141 => 
            array (
                'id' => 642,
                'parent_id' => 68,
                'name' => '阿克塞',
                'type' => 3,
            ),
            142 => 
            array (
                'id' => 643,
                'parent_id' => 69,
                'name' => '临夏市',
                'type' => 3,
            ),
            143 => 
            array (
                'id' => 644,
                'parent_id' => 69,
                'name' => '临夏县',
                'type' => 3,
            ),
            144 => 
            array (
                'id' => 645,
                'parent_id' => 69,
                'name' => '康乐县',
                'type' => 3,
            ),
            145 => 
            array (
                'id' => 646,
                'parent_id' => 69,
                'name' => '永靖县',
                'type' => 3,
            ),
            146 => 
            array (
                'id' => 647,
                'parent_id' => 69,
                'name' => '广河县',
                'type' => 3,
            ),
            147 => 
            array (
                'id' => 648,
                'parent_id' => 69,
                'name' => '和政县',
                'type' => 3,
            ),
            148 => 
            array (
                'id' => 649,
                'parent_id' => 69,
                'name' => '东乡族自治县',
                'type' => 3,
            ),
            149 => 
            array (
                'id' => 650,
                'parent_id' => 69,
                'name' => '积石山',
                'type' => 3,
            ),
            150 => 
            array (
                'id' => 651,
                'parent_id' => 70,
                'name' => '成县',
                'type' => 3,
            ),
            151 => 
            array (
                'id' => 652,
                'parent_id' => 70,
                'name' => '徽县',
                'type' => 3,
            ),
            152 => 
            array (
                'id' => 653,
                'parent_id' => 70,
                'name' => '康县',
                'type' => 3,
            ),
            153 => 
            array (
                'id' => 654,
                'parent_id' => 70,
                'name' => '礼县',
                'type' => 3,
            ),
            154 => 
            array (
                'id' => 655,
                'parent_id' => 70,
                'name' => '两当县',
                'type' => 3,
            ),
            155 => 
            array (
                'id' => 656,
                'parent_id' => 70,
                'name' => '文县',
                'type' => 3,
            ),
            156 => 
            array (
                'id' => 657,
                'parent_id' => 70,
                'name' => '西和县',
                'type' => 3,
            ),
            157 => 
            array (
                'id' => 658,
                'parent_id' => 70,
                'name' => '宕昌县',
                'type' => 3,
            ),
            158 => 
            array (
                'id' => 659,
                'parent_id' => 70,
                'name' => '武都区',
                'type' => 3,
            ),
            159 => 
            array (
                'id' => 660,
                'parent_id' => 71,
                'name' => '崇信县',
                'type' => 3,
            ),
            160 => 
            array (
                'id' => 661,
                'parent_id' => 71,
                'name' => '华亭县',
                'type' => 3,
            ),
            161 => 
            array (
                'id' => 662,
                'parent_id' => 71,
                'name' => '静宁县',
                'type' => 3,
            ),
            162 => 
            array (
                'id' => 663,
                'parent_id' => 71,
                'name' => '灵台县',
                'type' => 3,
            ),
            163 => 
            array (
                'id' => 664,
                'parent_id' => 71,
                'name' => '崆峒区',
                'type' => 3,
            ),
            164 => 
            array (
                'id' => 665,
                'parent_id' => 71,
                'name' => '庄浪县',
                'type' => 3,
            ),
            165 => 
            array (
                'id' => 666,
                'parent_id' => 71,
                'name' => '泾川县',
                'type' => 3,
            ),
            166 => 
            array (
                'id' => 667,
                'parent_id' => 72,
                'name' => '合水县',
                'type' => 3,
            ),
            167 => 
            array (
                'id' => 668,
                'parent_id' => 72,
                'name' => '华池县',
                'type' => 3,
            ),
            168 => 
            array (
                'id' => 669,
                'parent_id' => 72,
                'name' => '环县',
                'type' => 3,
            ),
            169 => 
            array (
                'id' => 670,
                'parent_id' => 72,
                'name' => '宁县',
                'type' => 3,
            ),
            170 => 
            array (
                'id' => 671,
                'parent_id' => 72,
                'name' => '庆城县',
                'type' => 3,
            ),
            171 => 
            array (
                'id' => 672,
                'parent_id' => 72,
                'name' => '西峰区',
                'type' => 3,
            ),
            172 => 
            array (
                'id' => 673,
                'parent_id' => 72,
                'name' => '镇原县',
                'type' => 3,
            ),
            173 => 
            array (
                'id' => 674,
                'parent_id' => 72,
                'name' => '正宁县',
                'type' => 3,
            ),
            174 => 
            array (
                'id' => 675,
                'parent_id' => 73,
                'name' => '甘谷县',
                'type' => 3,
            ),
            175 => 
            array (
                'id' => 676,
                'parent_id' => 73,
                'name' => '秦安县',
                'type' => 3,
            ),
            176 => 
            array (
                'id' => 677,
                'parent_id' => 73,
                'name' => '清水县',
                'type' => 3,
            ),
            177 => 
            array (
                'id' => 678,
                'parent_id' => 73,
                'name' => '秦州区',
                'type' => 3,
            ),
            178 => 
            array (
                'id' => 679,
                'parent_id' => 73,
                'name' => '麦积区',
                'type' => 3,
            ),
            179 => 
            array (
                'id' => 680,
                'parent_id' => 73,
                'name' => '武山县',
                'type' => 3,
            ),
            180 => 
            array (
                'id' => 681,
                'parent_id' => 73,
                'name' => '张家川',
                'type' => 3,
            ),
            181 => 
            array (
                'id' => 682,
                'parent_id' => 74,
                'name' => '古浪县',
                'type' => 3,
            ),
            182 => 
            array (
                'id' => 683,
                'parent_id' => 74,
                'name' => '民勤县',
                'type' => 3,
            ),
            183 => 
            array (
                'id' => 684,
                'parent_id' => 74,
                'name' => '天祝',
                'type' => 3,
            ),
            184 => 
            array (
                'id' => 685,
                'parent_id' => 74,
                'name' => '凉州区',
                'type' => 3,
            ),
            185 => 
            array (
                'id' => 686,
                'parent_id' => 75,
                'name' => '高台县',
                'type' => 3,
            ),
            186 => 
            array (
                'id' => 687,
                'parent_id' => 75,
                'name' => '临泽县',
                'type' => 3,
            ),
            187 => 
            array (
                'id' => 688,
                'parent_id' => 75,
                'name' => '民乐县',
                'type' => 3,
            ),
            188 => 
            array (
                'id' => 689,
                'parent_id' => 75,
                'name' => '山丹县',
                'type' => 3,
            ),
            189 => 
            array (
                'id' => 690,
                'parent_id' => 75,
                'name' => '肃南',
                'type' => 3,
            ),
            190 => 
            array (
                'id' => 691,
                'parent_id' => 75,
                'name' => '甘州区',
                'type' => 3,
            ),
            191 => 
            array (
                'id' => 692,
                'parent_id' => 76,
                'name' => '从化市',
                'type' => 3,
            ),
            192 => 
            array (
                'id' => 693,
                'parent_id' => 76,
                'name' => '天河区',
                'type' => 3,
            ),
            193 => 
            array (
                'id' => 694,
                'parent_id' => 76,
                'name' => '东山区',
                'type' => 3,
            ),
            194 => 
            array (
                'id' => 695,
                'parent_id' => 76,
                'name' => '白云区',
                'type' => 3,
            ),
            195 => 
            array (
                'id' => 696,
                'parent_id' => 76,
                'name' => '海珠区',
                'type' => 3,
            ),
            196 => 
            array (
                'id' => 697,
                'parent_id' => 76,
                'name' => '荔湾区',
                'type' => 3,
            ),
            197 => 
            array (
                'id' => 698,
                'parent_id' => 76,
                'name' => '越秀区',
                'type' => 3,
            ),
            198 => 
            array (
                'id' => 699,
                'parent_id' => 76,
                'name' => '黄埔区',
                'type' => 3,
            ),
            199 => 
            array (
                'id' => 700,
                'parent_id' => 76,
                'name' => '番禺区',
                'type' => 3,
            ),
            200 => 
            array (
                'id' => 701,
                'parent_id' => 76,
                'name' => '花都区',
                'type' => 3,
            ),
            201 => 
            array (
                'id' => 702,
                'parent_id' => 76,
                'name' => '增城区',
                'type' => 3,
            ),
            202 => 
            array (
                'id' => 703,
                'parent_id' => 76,
                'name' => '从化区',
                'type' => 3,
            ),
            203 => 
            array (
                'id' => 704,
                'parent_id' => 76,
                'name' => '市郊',
                'type' => 3,
            ),
            204 => 
            array (
                'id' => 705,
                'parent_id' => 77,
                'name' => '福田区',
                'type' => 3,
            ),
            205 => 
            array (
                'id' => 706,
                'parent_id' => 77,
                'name' => '罗湖区',
                'type' => 3,
            ),
            206 => 
            array (
                'id' => 707,
                'parent_id' => 77,
                'name' => '南山区',
                'type' => 3,
            ),
            207 => 
            array (
                'id' => 708,
                'parent_id' => 77,
                'name' => '宝安区',
                'type' => 3,
            ),
            208 => 
            array (
                'id' => 709,
                'parent_id' => 77,
                'name' => '龙岗区',
                'type' => 3,
            ),
            209 => 
            array (
                'id' => 710,
                'parent_id' => 77,
                'name' => '盐田区',
                'type' => 3,
            ),
            210 => 
            array (
                'id' => 711,
                'parent_id' => 78,
                'name' => '湘桥区',
                'type' => 3,
            ),
            211 => 
            array (
                'id' => 712,
                'parent_id' => 78,
                'name' => '潮安县',
                'type' => 3,
            ),
            212 => 
            array (
                'id' => 713,
                'parent_id' => 78,
                'name' => '饶平县',
                'type' => 3,
            ),
            213 => 
            array (
                'id' => 714,
                'parent_id' => 79,
                'name' => '南城区',
                'type' => 3,
            ),
            214 => 
            array (
                'id' => 715,
                'parent_id' => 79,
                'name' => '东城区',
                'type' => 3,
            ),
            215 => 
            array (
                'id' => 716,
                'parent_id' => 79,
                'name' => '万江区',
                'type' => 3,
            ),
            216 => 
            array (
                'id' => 717,
                'parent_id' => 79,
                'name' => '莞城区',
                'type' => 3,
            ),
            217 => 
            array (
                'id' => 718,
                'parent_id' => 79,
                'name' => '石龙镇',
                'type' => 3,
            ),
            218 => 
            array (
                'id' => 719,
                'parent_id' => 79,
                'name' => '虎门镇',
                'type' => 3,
            ),
            219 => 
            array (
                'id' => 720,
                'parent_id' => 79,
                'name' => '麻涌镇',
                'type' => 3,
            ),
            220 => 
            array (
                'id' => 721,
                'parent_id' => 79,
                'name' => '道滘镇',
                'type' => 3,
            ),
            221 => 
            array (
                'id' => 722,
                'parent_id' => 79,
                'name' => '石碣镇',
                'type' => 3,
            ),
            222 => 
            array (
                'id' => 723,
                'parent_id' => 79,
                'name' => '沙田镇',
                'type' => 3,
            ),
            223 => 
            array (
                'id' => 724,
                'parent_id' => 79,
                'name' => '望牛墩镇',
                'type' => 3,
            ),
            224 => 
            array (
                'id' => 725,
                'parent_id' => 79,
                'name' => '洪梅镇',
                'type' => 3,
            ),
            225 => 
            array (
                'id' => 726,
                'parent_id' => 79,
                'name' => '茶山镇',
                'type' => 3,
            ),
            226 => 
            array (
                'id' => 727,
                'parent_id' => 79,
                'name' => '寮步镇',
                'type' => 3,
            ),
            227 => 
            array (
                'id' => 728,
                'parent_id' => 79,
                'name' => '大岭山镇',
                'type' => 3,
            ),
            228 => 
            array (
                'id' => 729,
                'parent_id' => 79,
                'name' => '大朗镇',
                'type' => 3,
            ),
            229 => 
            array (
                'id' => 730,
                'parent_id' => 79,
                'name' => '黄江镇',
                'type' => 3,
            ),
            230 => 
            array (
                'id' => 731,
                'parent_id' => 79,
                'name' => '樟木头',
                'type' => 3,
            ),
            231 => 
            array (
                'id' => 732,
                'parent_id' => 79,
                'name' => '凤岗镇',
                'type' => 3,
            ),
            232 => 
            array (
                'id' => 733,
                'parent_id' => 79,
                'name' => '塘厦镇',
                'type' => 3,
            ),
            233 => 
            array (
                'id' => 734,
                'parent_id' => 79,
                'name' => '谢岗镇',
                'type' => 3,
            ),
            234 => 
            array (
                'id' => 735,
                'parent_id' => 79,
                'name' => '厚街镇',
                'type' => 3,
            ),
            235 => 
            array (
                'id' => 736,
                'parent_id' => 79,
                'name' => '清溪镇',
                'type' => 3,
            ),
            236 => 
            array (
                'id' => 737,
                'parent_id' => 79,
                'name' => '常平镇',
                'type' => 3,
            ),
            237 => 
            array (
                'id' => 738,
                'parent_id' => 79,
                'name' => '桥头镇',
                'type' => 3,
            ),
            238 => 
            array (
                'id' => 739,
                'parent_id' => 79,
                'name' => '横沥镇',
                'type' => 3,
            ),
            239 => 
            array (
                'id' => 740,
                'parent_id' => 79,
                'name' => '东坑镇',
                'type' => 3,
            ),
            240 => 
            array (
                'id' => 741,
                'parent_id' => 79,
                'name' => '企石镇',
                'type' => 3,
            ),
            241 => 
            array (
                'id' => 742,
                'parent_id' => 79,
                'name' => '石排镇',
                'type' => 3,
            ),
            242 => 
            array (
                'id' => 743,
                'parent_id' => 79,
                'name' => '长安镇',
                'type' => 3,
            ),
            243 => 
            array (
                'id' => 744,
                'parent_id' => 79,
                'name' => '中堂镇',
                'type' => 3,
            ),
            244 => 
            array (
                'id' => 745,
                'parent_id' => 79,
                'name' => '高埗镇',
                'type' => 3,
            ),
            245 => 
            array (
                'id' => 746,
                'parent_id' => 80,
                'name' => '禅城区',
                'type' => 3,
            ),
            246 => 
            array (
                'id' => 747,
                'parent_id' => 80,
                'name' => '南海区',
                'type' => 3,
            ),
            247 => 
            array (
                'id' => 748,
                'parent_id' => 80,
                'name' => '顺德区',
                'type' => 3,
            ),
            248 => 
            array (
                'id' => 749,
                'parent_id' => 80,
                'name' => '三水区',
                'type' => 3,
            ),
            249 => 
            array (
                'id' => 750,
                'parent_id' => 80,
                'name' => '高明区',
                'type' => 3,
            ),
            250 => 
            array (
                'id' => 751,
                'parent_id' => 81,
                'name' => '东源县',
                'type' => 3,
            ),
            251 => 
            array (
                'id' => 752,
                'parent_id' => 81,
                'name' => '和平县',
                'type' => 3,
            ),
            252 => 
            array (
                'id' => 753,
                'parent_id' => 81,
                'name' => '源城区',
                'type' => 3,
            ),
            253 => 
            array (
                'id' => 754,
                'parent_id' => 81,
                'name' => '连平县',
                'type' => 3,
            ),
            254 => 
            array (
                'id' => 755,
                'parent_id' => 81,
                'name' => '龙川县',
                'type' => 3,
            ),
            255 => 
            array (
                'id' => 756,
                'parent_id' => 81,
                'name' => '紫金县',
                'type' => 3,
            ),
            256 => 
            array (
                'id' => 757,
                'parent_id' => 82,
                'name' => '惠阳区',
                'type' => 3,
            ),
            257 => 
            array (
                'id' => 758,
                'parent_id' => 82,
                'name' => '惠城区',
                'type' => 3,
            ),
            258 => 
            array (
                'id' => 759,
                'parent_id' => 82,
                'name' => '大亚湾',
                'type' => 3,
            ),
            259 => 
            array (
                'id' => 760,
                'parent_id' => 82,
                'name' => '博罗县',
                'type' => 3,
            ),
            260 => 
            array (
                'id' => 761,
                'parent_id' => 82,
                'name' => '惠东县',
                'type' => 3,
            ),
            261 => 
            array (
                'id' => 762,
                'parent_id' => 82,
                'name' => '龙门县',
                'type' => 3,
            ),
            262 => 
            array (
                'id' => 763,
                'parent_id' => 83,
                'name' => '江海区',
                'type' => 3,
            ),
            263 => 
            array (
                'id' => 764,
                'parent_id' => 83,
                'name' => '蓬江区',
                'type' => 3,
            ),
            264 => 
            array (
                'id' => 765,
                'parent_id' => 83,
                'name' => '新会区',
                'type' => 3,
            ),
            265 => 
            array (
                'id' => 766,
                'parent_id' => 83,
                'name' => '台山市',
                'type' => 3,
            ),
            266 => 
            array (
                'id' => 767,
                'parent_id' => 83,
                'name' => '开平市',
                'type' => 3,
            ),
            267 => 
            array (
                'id' => 768,
                'parent_id' => 83,
                'name' => '鹤山市',
                'type' => 3,
            ),
            268 => 
            array (
                'id' => 769,
                'parent_id' => 83,
                'name' => '恩平市',
                'type' => 3,
            ),
            269 => 
            array (
                'id' => 770,
                'parent_id' => 84,
                'name' => '榕城区',
                'type' => 3,
            ),
            270 => 
            array (
                'id' => 771,
                'parent_id' => 84,
                'name' => '普宁市',
                'type' => 3,
            ),
            271 => 
            array (
                'id' => 772,
                'parent_id' => 84,
                'name' => '揭东县',
                'type' => 3,
            ),
            272 => 
            array (
                'id' => 773,
                'parent_id' => 84,
                'name' => '揭西县',
                'type' => 3,
            ),
            273 => 
            array (
                'id' => 774,
                'parent_id' => 84,
                'name' => '惠来县',
                'type' => 3,
            ),
            274 => 
            array (
                'id' => 775,
                'parent_id' => 85,
                'name' => '茂南区',
                'type' => 3,
            ),
            275 => 
            array (
                'id' => 776,
                'parent_id' => 85,
                'name' => '茂港区',
                'type' => 3,
            ),
            276 => 
            array (
                'id' => 777,
                'parent_id' => 85,
                'name' => '高州市',
                'type' => 3,
            ),
            277 => 
            array (
                'id' => 778,
                'parent_id' => 85,
                'name' => '化州市',
                'type' => 3,
            ),
            278 => 
            array (
                'id' => 779,
                'parent_id' => 85,
                'name' => '信宜市',
                'type' => 3,
            ),
            279 => 
            array (
                'id' => 780,
                'parent_id' => 85,
                'name' => '电白县',
                'type' => 3,
            ),
            280 => 
            array (
                'id' => 781,
                'parent_id' => 86,
                'name' => '梅县',
                'type' => 3,
            ),
            281 => 
            array (
                'id' => 782,
                'parent_id' => 86,
                'name' => '梅江区',
                'type' => 3,
            ),
            282 => 
            array (
                'id' => 783,
                'parent_id' => 86,
                'name' => '兴宁市',
                'type' => 3,
            ),
            283 => 
            array (
                'id' => 784,
                'parent_id' => 86,
                'name' => '大埔县',
                'type' => 3,
            ),
            284 => 
            array (
                'id' => 785,
                'parent_id' => 86,
                'name' => '丰顺县',
                'type' => 3,
            ),
            285 => 
            array (
                'id' => 786,
                'parent_id' => 86,
                'name' => '五华县',
                'type' => 3,
            ),
            286 => 
            array (
                'id' => 787,
                'parent_id' => 86,
                'name' => '平远县',
                'type' => 3,
            ),
            287 => 
            array (
                'id' => 788,
                'parent_id' => 86,
                'name' => '蕉岭县',
                'type' => 3,
            ),
            288 => 
            array (
                'id' => 789,
                'parent_id' => 87,
                'name' => '清城区',
                'type' => 3,
            ),
            289 => 
            array (
                'id' => 790,
                'parent_id' => 87,
                'name' => '英德市',
                'type' => 3,
            ),
            290 => 
            array (
                'id' => 791,
                'parent_id' => 87,
                'name' => '连州市',
                'type' => 3,
            ),
            291 => 
            array (
                'id' => 792,
                'parent_id' => 87,
                'name' => '佛冈县',
                'type' => 3,
            ),
            292 => 
            array (
                'id' => 793,
                'parent_id' => 87,
                'name' => '阳山县',
                'type' => 3,
            ),
            293 => 
            array (
                'id' => 794,
                'parent_id' => 87,
                'name' => '清新县',
                'type' => 3,
            ),
            294 => 
            array (
                'id' => 795,
                'parent_id' => 87,
                'name' => '连山',
                'type' => 3,
            ),
            295 => 
            array (
                'id' => 796,
                'parent_id' => 87,
                'name' => '连南',
                'type' => 3,
            ),
            296 => 
            array (
                'id' => 797,
                'parent_id' => 88,
                'name' => '南澳县',
                'type' => 3,
            ),
            297 => 
            array (
                'id' => 798,
                'parent_id' => 88,
                'name' => '潮阳区',
                'type' => 3,
            ),
            298 => 
            array (
                'id' => 799,
                'parent_id' => 88,
                'name' => '澄海区',
                'type' => 3,
            ),
            299 => 
            array (
                'id' => 800,
                'parent_id' => 88,
                'name' => '龙湖区',
                'type' => 3,
            ),
            300 => 
            array (
                'id' => 801,
                'parent_id' => 88,
                'name' => '金平区',
                'type' => 3,
            ),
            301 => 
            array (
                'id' => 802,
                'parent_id' => 88,
                'name' => '濠江区',
                'type' => 3,
            ),
            302 => 
            array (
                'id' => 803,
                'parent_id' => 88,
                'name' => '潮南区',
                'type' => 3,
            ),
            303 => 
            array (
                'id' => 804,
                'parent_id' => 89,
                'name' => '城区',
                'type' => 3,
            ),
            304 => 
            array (
                'id' => 805,
                'parent_id' => 89,
                'name' => '陆丰市',
                'type' => 3,
            ),
            305 => 
            array (
                'id' => 806,
                'parent_id' => 89,
                'name' => '海丰县',
                'type' => 3,
            ),
            306 => 
            array (
                'id' => 807,
                'parent_id' => 89,
                'name' => '陆河县',
                'type' => 3,
            ),
            307 => 
            array (
                'id' => 808,
                'parent_id' => 90,
                'name' => '曲江县',
                'type' => 3,
            ),
            308 => 
            array (
                'id' => 809,
                'parent_id' => 90,
                'name' => '浈江区',
                'type' => 3,
            ),
            309 => 
            array (
                'id' => 810,
                'parent_id' => 90,
                'name' => '武江区',
                'type' => 3,
            ),
            310 => 
            array (
                'id' => 811,
                'parent_id' => 90,
                'name' => '曲江区',
                'type' => 3,
            ),
            311 => 
            array (
                'id' => 812,
                'parent_id' => 90,
                'name' => '乐昌市',
                'type' => 3,
            ),
            312 => 
            array (
                'id' => 813,
                'parent_id' => 90,
                'name' => '南雄市',
                'type' => 3,
            ),
            313 => 
            array (
                'id' => 814,
                'parent_id' => 90,
                'name' => '始兴县',
                'type' => 3,
            ),
            314 => 
            array (
                'id' => 815,
                'parent_id' => 90,
                'name' => '仁化县',
                'type' => 3,
            ),
            315 => 
            array (
                'id' => 816,
                'parent_id' => 90,
                'name' => '翁源县',
                'type' => 3,
            ),
            316 => 
            array (
                'id' => 817,
                'parent_id' => 90,
                'name' => '新丰县',
                'type' => 3,
            ),
            317 => 
            array (
                'id' => 818,
                'parent_id' => 90,
                'name' => '乳源',
                'type' => 3,
            ),
            318 => 
            array (
                'id' => 819,
                'parent_id' => 91,
                'name' => '江城区',
                'type' => 3,
            ),
            319 => 
            array (
                'id' => 820,
                'parent_id' => 91,
                'name' => '阳春市',
                'type' => 3,
            ),
            320 => 
            array (
                'id' => 821,
                'parent_id' => 91,
                'name' => '阳西县',
                'type' => 3,
            ),
            321 => 
            array (
                'id' => 822,
                'parent_id' => 91,
                'name' => '阳东县',
                'type' => 3,
            ),
            322 => 
            array (
                'id' => 823,
                'parent_id' => 92,
                'name' => '云城区',
                'type' => 3,
            ),
            323 => 
            array (
                'id' => 824,
                'parent_id' => 92,
                'name' => '罗定市',
                'type' => 3,
            ),
            324 => 
            array (
                'id' => 825,
                'parent_id' => 92,
                'name' => '新兴县',
                'type' => 3,
            ),
            325 => 
            array (
                'id' => 826,
                'parent_id' => 92,
                'name' => '郁南县',
                'type' => 3,
            ),
            326 => 
            array (
                'id' => 827,
                'parent_id' => 92,
                'name' => '云安县',
                'type' => 3,
            ),
            327 => 
            array (
                'id' => 828,
                'parent_id' => 93,
                'name' => '赤坎区',
                'type' => 3,
            ),
            328 => 
            array (
                'id' => 829,
                'parent_id' => 93,
                'name' => '霞山区',
                'type' => 3,
            ),
            329 => 
            array (
                'id' => 830,
                'parent_id' => 93,
                'name' => '坡头区',
                'type' => 3,
            ),
            330 => 
            array (
                'id' => 831,
                'parent_id' => 93,
                'name' => '麻章区',
                'type' => 3,
            ),
            331 => 
            array (
                'id' => 832,
                'parent_id' => 93,
                'name' => '廉江市',
                'type' => 3,
            ),
            332 => 
            array (
                'id' => 833,
                'parent_id' => 93,
                'name' => '雷州市',
                'type' => 3,
            ),
            333 => 
            array (
                'id' => 834,
                'parent_id' => 93,
                'name' => '吴川市',
                'type' => 3,
            ),
            334 => 
            array (
                'id' => 835,
                'parent_id' => 93,
                'name' => '遂溪县',
                'type' => 3,
            ),
            335 => 
            array (
                'id' => 836,
                'parent_id' => 93,
                'name' => '徐闻县',
                'type' => 3,
            ),
            336 => 
            array (
                'id' => 837,
                'parent_id' => 94,
                'name' => '肇庆市',
                'type' => 3,
            ),
            337 => 
            array (
                'id' => 838,
                'parent_id' => 94,
                'name' => '高要市',
                'type' => 3,
            ),
            338 => 
            array (
                'id' => 839,
                'parent_id' => 94,
                'name' => '四会市',
                'type' => 3,
            ),
            339 => 
            array (
                'id' => 840,
                'parent_id' => 94,
                'name' => '广宁县',
                'type' => 3,
            ),
            340 => 
            array (
                'id' => 841,
                'parent_id' => 94,
                'name' => '怀集县',
                'type' => 3,
            ),
            341 => 
            array (
                'id' => 842,
                'parent_id' => 94,
                'name' => '封开县',
                'type' => 3,
            ),
            342 => 
            array (
                'id' => 843,
                'parent_id' => 94,
                'name' => '德庆县',
                'type' => 3,
            ),
            343 => 
            array (
                'id' => 844,
                'parent_id' => 95,
                'name' => '石岐街道',
                'type' => 3,
            ),
            344 => 
            array (
                'id' => 845,
                'parent_id' => 95,
                'name' => '东区街道',
                'type' => 3,
            ),
            345 => 
            array (
                'id' => 846,
                'parent_id' => 95,
                'name' => '西区街道',
                'type' => 3,
            ),
            346 => 
            array (
                'id' => 847,
                'parent_id' => 95,
                'name' => '环城街道',
                'type' => 3,
            ),
            347 => 
            array (
                'id' => 848,
                'parent_id' => 95,
                'name' => '中山港街道',
                'type' => 3,
            ),
            348 => 
            array (
                'id' => 849,
                'parent_id' => 95,
                'name' => '五桂山街道',
                'type' => 3,
            ),
            349 => 
            array (
                'id' => 850,
                'parent_id' => 96,
                'name' => '香洲区',
                'type' => 3,
            ),
            350 => 
            array (
                'id' => 851,
                'parent_id' => 96,
                'name' => '斗门区',
                'type' => 3,
            ),
            351 => 
            array (
                'id' => 852,
                'parent_id' => 96,
                'name' => '金湾区',
                'type' => 3,
            ),
            352 => 
            array (
                'id' => 853,
                'parent_id' => 97,
                'name' => '邕宁区',
                'type' => 3,
            ),
            353 => 
            array (
                'id' => 854,
                'parent_id' => 97,
                'name' => '青秀区',
                'type' => 3,
            ),
            354 => 
            array (
                'id' => 855,
                'parent_id' => 97,
                'name' => '兴宁区',
                'type' => 3,
            ),
            355 => 
            array (
                'id' => 856,
                'parent_id' => 97,
                'name' => '良庆区',
                'type' => 3,
            ),
            356 => 
            array (
                'id' => 857,
                'parent_id' => 97,
                'name' => '西乡塘区',
                'type' => 3,
            ),
            357 => 
            array (
                'id' => 858,
                'parent_id' => 97,
                'name' => '江南区',
                'type' => 3,
            ),
            358 => 
            array (
                'id' => 859,
                'parent_id' => 97,
                'name' => '武鸣县',
                'type' => 3,
            ),
            359 => 
            array (
                'id' => 860,
                'parent_id' => 97,
                'name' => '隆安县',
                'type' => 3,
            ),
            360 => 
            array (
                'id' => 861,
                'parent_id' => 97,
                'name' => '马山县',
                'type' => 3,
            ),
            361 => 
            array (
                'id' => 862,
                'parent_id' => 97,
                'name' => '上林县',
                'type' => 3,
            ),
            362 => 
            array (
                'id' => 863,
                'parent_id' => 97,
                'name' => '宾阳县',
                'type' => 3,
            ),
            363 => 
            array (
                'id' => 864,
                'parent_id' => 97,
                'name' => '横县',
                'type' => 3,
            ),
            364 => 
            array (
                'id' => 865,
                'parent_id' => 98,
                'name' => '秀峰区',
                'type' => 3,
            ),
            365 => 
            array (
                'id' => 866,
                'parent_id' => 98,
                'name' => '叠彩区',
                'type' => 3,
            ),
            366 => 
            array (
                'id' => 867,
                'parent_id' => 98,
                'name' => '象山区',
                'type' => 3,
            ),
            367 => 
            array (
                'id' => 868,
                'parent_id' => 98,
                'name' => '七星区',
                'type' => 3,
            ),
            368 => 
            array (
                'id' => 869,
                'parent_id' => 98,
                'name' => '雁山区',
                'type' => 3,
            ),
            369 => 
            array (
                'id' => 870,
                'parent_id' => 98,
                'name' => '阳朔县',
                'type' => 3,
            ),
            370 => 
            array (
                'id' => 871,
                'parent_id' => 98,
                'name' => '临桂县',
                'type' => 3,
            ),
            371 => 
            array (
                'id' => 872,
                'parent_id' => 98,
                'name' => '灵川县',
                'type' => 3,
            ),
            372 => 
            array (
                'id' => 873,
                'parent_id' => 98,
                'name' => '全州县',
                'type' => 3,
            ),
            373 => 
            array (
                'id' => 874,
                'parent_id' => 98,
                'name' => '平乐县',
                'type' => 3,
            ),
            374 => 
            array (
                'id' => 875,
                'parent_id' => 98,
                'name' => '兴安县',
                'type' => 3,
            ),
            375 => 
            array (
                'id' => 876,
                'parent_id' => 98,
                'name' => '灌阳县',
                'type' => 3,
            ),
            376 => 
            array (
                'id' => 877,
                'parent_id' => 98,
                'name' => '荔浦县',
                'type' => 3,
            ),
            377 => 
            array (
                'id' => 878,
                'parent_id' => 98,
                'name' => '资源县',
                'type' => 3,
            ),
            378 => 
            array (
                'id' => 879,
                'parent_id' => 98,
                'name' => '永福县',
                'type' => 3,
            ),
            379 => 
            array (
                'id' => 880,
                'parent_id' => 98,
                'name' => '龙胜',
                'type' => 3,
            ),
            380 => 
            array (
                'id' => 881,
                'parent_id' => 98,
                'name' => '恭城',
                'type' => 3,
            ),
            381 => 
            array (
                'id' => 882,
                'parent_id' => 99,
                'name' => '右江区',
                'type' => 3,
            ),
            382 => 
            array (
                'id' => 883,
                'parent_id' => 99,
                'name' => '凌云县',
                'type' => 3,
            ),
            383 => 
            array (
                'id' => 884,
                'parent_id' => 99,
                'name' => '平果县',
                'type' => 3,
            ),
            384 => 
            array (
                'id' => 885,
                'parent_id' => 99,
                'name' => '西林县',
                'type' => 3,
            ),
            385 => 
            array (
                'id' => 886,
                'parent_id' => 99,
                'name' => '乐业县',
                'type' => 3,
            ),
            386 => 
            array (
                'id' => 887,
                'parent_id' => 99,
                'name' => '德保县',
                'type' => 3,
            ),
            387 => 
            array (
                'id' => 888,
                'parent_id' => 99,
                'name' => '田林县',
                'type' => 3,
            ),
            388 => 
            array (
                'id' => 889,
                'parent_id' => 99,
                'name' => '田阳县',
                'type' => 3,
            ),
            389 => 
            array (
                'id' => 890,
                'parent_id' => 99,
                'name' => '靖西县',
                'type' => 3,
            ),
            390 => 
            array (
                'id' => 891,
                'parent_id' => 99,
                'name' => '田东县',
                'type' => 3,
            ),
            391 => 
            array (
                'id' => 892,
                'parent_id' => 99,
                'name' => '那坡县',
                'type' => 3,
            ),
            392 => 
            array (
                'id' => 893,
                'parent_id' => 99,
                'name' => '隆林',
                'type' => 3,
            ),
            393 => 
            array (
                'id' => 894,
                'parent_id' => 100,
                'name' => '海城区',
                'type' => 3,
            ),
            394 => 
            array (
                'id' => 895,
                'parent_id' => 100,
                'name' => '银海区',
                'type' => 3,
            ),
            395 => 
            array (
                'id' => 896,
                'parent_id' => 100,
                'name' => '铁山港区',
                'type' => 3,
            ),
            396 => 
            array (
                'id' => 897,
                'parent_id' => 100,
                'name' => '合浦县',
                'type' => 3,
            ),
            397 => 
            array (
                'id' => 898,
                'parent_id' => 101,
                'name' => '江州区',
                'type' => 3,
            ),
            398 => 
            array (
                'id' => 899,
                'parent_id' => 101,
                'name' => '凭祥市',
                'type' => 3,
            ),
            399 => 
            array (
                'id' => 900,
                'parent_id' => 101,
                'name' => '宁明县',
                'type' => 3,
            ),
            400 => 
            array (
                'id' => 901,
                'parent_id' => 101,
                'name' => '扶绥县',
                'type' => 3,
            ),
            401 => 
            array (
                'id' => 902,
                'parent_id' => 101,
                'name' => '龙州县',
                'type' => 3,
            ),
            402 => 
            array (
                'id' => 903,
                'parent_id' => 101,
                'name' => '大新县',
                'type' => 3,
            ),
            403 => 
            array (
                'id' => 904,
                'parent_id' => 101,
                'name' => '天等县',
                'type' => 3,
            ),
            404 => 
            array (
                'id' => 905,
                'parent_id' => 102,
                'name' => '港口区',
                'type' => 3,
            ),
            405 => 
            array (
                'id' => 906,
                'parent_id' => 102,
                'name' => '防城区',
                'type' => 3,
            ),
            406 => 
            array (
                'id' => 907,
                'parent_id' => 102,
                'name' => '东兴市',
                'type' => 3,
            ),
            407 => 
            array (
                'id' => 908,
                'parent_id' => 102,
                'name' => '上思县',
                'type' => 3,
            ),
            408 => 
            array (
                'id' => 909,
                'parent_id' => 103,
                'name' => '港北区',
                'type' => 3,
            ),
            409 => 
            array (
                'id' => 910,
                'parent_id' => 103,
                'name' => '港南区',
                'type' => 3,
            ),
            410 => 
            array (
                'id' => 911,
                'parent_id' => 103,
                'name' => '覃塘区',
                'type' => 3,
            ),
            411 => 
            array (
                'id' => 912,
                'parent_id' => 103,
                'name' => '桂平市',
                'type' => 3,
            ),
            412 => 
            array (
                'id' => 913,
                'parent_id' => 103,
                'name' => '平南县',
                'type' => 3,
            ),
            413 => 
            array (
                'id' => 914,
                'parent_id' => 104,
                'name' => '金城江区',
                'type' => 3,
            ),
            414 => 
            array (
                'id' => 915,
                'parent_id' => 104,
                'name' => '宜州市',
                'type' => 3,
            ),
            415 => 
            array (
                'id' => 916,
                'parent_id' => 104,
                'name' => '天峨县',
                'type' => 3,
            ),
            416 => 
            array (
                'id' => 917,
                'parent_id' => 104,
                'name' => '凤山县',
                'type' => 3,
            ),
            417 => 
            array (
                'id' => 918,
                'parent_id' => 104,
                'name' => '南丹县',
                'type' => 3,
            ),
            418 => 
            array (
                'id' => 919,
                'parent_id' => 104,
                'name' => '东兰县',
                'type' => 3,
            ),
            419 => 
            array (
                'id' => 920,
                'parent_id' => 104,
                'name' => '都安',
                'type' => 3,
            ),
            420 => 
            array (
                'id' => 921,
                'parent_id' => 104,
                'name' => '罗城',
                'type' => 3,
            ),
            421 => 
            array (
                'id' => 922,
                'parent_id' => 104,
                'name' => '巴马',
                'type' => 3,
            ),
            422 => 
            array (
                'id' => 923,
                'parent_id' => 104,
                'name' => '环江',
                'type' => 3,
            ),
            423 => 
            array (
                'id' => 924,
                'parent_id' => 104,
                'name' => '大化',
                'type' => 3,
            ),
            424 => 
            array (
                'id' => 925,
                'parent_id' => 105,
                'name' => '八步区',
                'type' => 3,
            ),
            425 => 
            array (
                'id' => 926,
                'parent_id' => 105,
                'name' => '钟山县',
                'type' => 3,
            ),
            426 => 
            array (
                'id' => 927,
                'parent_id' => 105,
                'name' => '昭平县',
                'type' => 3,
            ),
            427 => 
            array (
                'id' => 928,
                'parent_id' => 105,
                'name' => '富川',
                'type' => 3,
            ),
            428 => 
            array (
                'id' => 929,
                'parent_id' => 106,
                'name' => '兴宾区',
                'type' => 3,
            ),
            429 => 
            array (
                'id' => 930,
                'parent_id' => 106,
                'name' => '合山市',
                'type' => 3,
            ),
            430 => 
            array (
                'id' => 931,
                'parent_id' => 106,
                'name' => '象州县',
                'type' => 3,
            ),
            431 => 
            array (
                'id' => 932,
                'parent_id' => 106,
                'name' => '武宣县',
                'type' => 3,
            ),
            432 => 
            array (
                'id' => 933,
                'parent_id' => 106,
                'name' => '忻城县',
                'type' => 3,
            ),
            433 => 
            array (
                'id' => 934,
                'parent_id' => 106,
                'name' => '金秀',
                'type' => 3,
            ),
            434 => 
            array (
                'id' => 935,
                'parent_id' => 107,
                'name' => '城中区',
                'type' => 3,
            ),
            435 => 
            array (
                'id' => 936,
                'parent_id' => 107,
                'name' => '鱼峰区',
                'type' => 3,
            ),
            436 => 
            array (
                'id' => 937,
                'parent_id' => 107,
                'name' => '柳北区',
                'type' => 3,
            ),
            437 => 
            array (
                'id' => 938,
                'parent_id' => 107,
                'name' => '柳南区',
                'type' => 3,
            ),
            438 => 
            array (
                'id' => 939,
                'parent_id' => 107,
                'name' => '柳江县',
                'type' => 3,
            ),
            439 => 
            array (
                'id' => 940,
                'parent_id' => 107,
                'name' => '柳城县',
                'type' => 3,
            ),
            440 => 
            array (
                'id' => 941,
                'parent_id' => 107,
                'name' => '鹿寨县',
                'type' => 3,
            ),
            441 => 
            array (
                'id' => 942,
                'parent_id' => 107,
                'name' => '融安县',
                'type' => 3,
            ),
            442 => 
            array (
                'id' => 943,
                'parent_id' => 107,
                'name' => '融水',
                'type' => 3,
            ),
            443 => 
            array (
                'id' => 944,
                'parent_id' => 107,
                'name' => '三江',
                'type' => 3,
            ),
            444 => 
            array (
                'id' => 945,
                'parent_id' => 108,
                'name' => '钦南区',
                'type' => 3,
            ),
            445 => 
            array (
                'id' => 946,
                'parent_id' => 108,
                'name' => '钦北区',
                'type' => 3,
            ),
            446 => 
            array (
                'id' => 947,
                'parent_id' => 108,
                'name' => '灵山县',
                'type' => 3,
            ),
            447 => 
            array (
                'id' => 948,
                'parent_id' => 108,
                'name' => '浦北县',
                'type' => 3,
            ),
            448 => 
            array (
                'id' => 949,
                'parent_id' => 109,
                'name' => '万秀区',
                'type' => 3,
            ),
            449 => 
            array (
                'id' => 950,
                'parent_id' => 109,
                'name' => '蝶山区',
                'type' => 3,
            ),
            450 => 
            array (
                'id' => 951,
                'parent_id' => 109,
                'name' => '长洲区',
                'type' => 3,
            ),
            451 => 
            array (
                'id' => 952,
                'parent_id' => 109,
                'name' => '岑溪市',
                'type' => 3,
            ),
            452 => 
            array (
                'id' => 953,
                'parent_id' => 109,
                'name' => '苍梧县',
                'type' => 3,
            ),
            453 => 
            array (
                'id' => 954,
                'parent_id' => 109,
                'name' => '藤县',
                'type' => 3,
            ),
            454 => 
            array (
                'id' => 955,
                'parent_id' => 109,
                'name' => '蒙山县',
                'type' => 3,
            ),
            455 => 
            array (
                'id' => 956,
                'parent_id' => 110,
                'name' => '玉州区',
                'type' => 3,
            ),
            456 => 
            array (
                'id' => 957,
                'parent_id' => 110,
                'name' => '北流市',
                'type' => 3,
            ),
            457 => 
            array (
                'id' => 958,
                'parent_id' => 110,
                'name' => '容县',
                'type' => 3,
            ),
            458 => 
            array (
                'id' => 959,
                'parent_id' => 110,
                'name' => '陆川县',
                'type' => 3,
            ),
            459 => 
            array (
                'id' => 960,
                'parent_id' => 110,
                'name' => '博白县',
                'type' => 3,
            ),
            460 => 
            array (
                'id' => 961,
                'parent_id' => 110,
                'name' => '兴业县',
                'type' => 3,
            ),
            461 => 
            array (
                'id' => 962,
                'parent_id' => 111,
                'name' => '南明区',
                'type' => 3,
            ),
            462 => 
            array (
                'id' => 963,
                'parent_id' => 111,
                'name' => '云岩区',
                'type' => 3,
            ),
            463 => 
            array (
                'id' => 964,
                'parent_id' => 111,
                'name' => '花溪区',
                'type' => 3,
            ),
            464 => 
            array (
                'id' => 965,
                'parent_id' => 111,
                'name' => '乌当区',
                'type' => 3,
            ),
            465 => 
            array (
                'id' => 966,
                'parent_id' => 111,
                'name' => '白云区',
                'type' => 3,
            ),
            466 => 
            array (
                'id' => 967,
                'parent_id' => 111,
                'name' => '小河区',
                'type' => 3,
            ),
            467 => 
            array (
                'id' => 968,
                'parent_id' => 111,
                'name' => '金阳新区',
                'type' => 3,
            ),
            468 => 
            array (
                'id' => 969,
                'parent_id' => 111,
                'name' => '新天园区',
                'type' => 3,
            ),
            469 => 
            array (
                'id' => 970,
                'parent_id' => 111,
                'name' => '清镇市',
                'type' => 3,
            ),
            470 => 
            array (
                'id' => 971,
                'parent_id' => 111,
                'name' => '开阳县',
                'type' => 3,
            ),
            471 => 
            array (
                'id' => 972,
                'parent_id' => 111,
                'name' => '修文县',
                'type' => 3,
            ),
            472 => 
            array (
                'id' => 973,
                'parent_id' => 111,
                'name' => '息烽县',
                'type' => 3,
            ),
            473 => 
            array (
                'id' => 974,
                'parent_id' => 112,
                'name' => '西秀区',
                'type' => 3,
            ),
            474 => 
            array (
                'id' => 975,
                'parent_id' => 112,
                'name' => '关岭',
                'type' => 3,
            ),
            475 => 
            array (
                'id' => 976,
                'parent_id' => 112,
                'name' => '镇宁',
                'type' => 3,
            ),
            476 => 
            array (
                'id' => 977,
                'parent_id' => 112,
                'name' => '紫云',
                'type' => 3,
            ),
            477 => 
            array (
                'id' => 978,
                'parent_id' => 112,
                'name' => '平坝县',
                'type' => 3,
            ),
            478 => 
            array (
                'id' => 979,
                'parent_id' => 112,
                'name' => '普定县',
                'type' => 3,
            ),
            479 => 
            array (
                'id' => 980,
                'parent_id' => 113,
                'name' => '毕节市',
                'type' => 3,
            ),
            480 => 
            array (
                'id' => 981,
                'parent_id' => 113,
                'name' => '大方县',
                'type' => 3,
            ),
            481 => 
            array (
                'id' => 982,
                'parent_id' => 113,
                'name' => '黔西县',
                'type' => 3,
            ),
            482 => 
            array (
                'id' => 983,
                'parent_id' => 113,
                'name' => '金沙县',
                'type' => 3,
            ),
            483 => 
            array (
                'id' => 984,
                'parent_id' => 113,
                'name' => '织金县',
                'type' => 3,
            ),
            484 => 
            array (
                'id' => 985,
                'parent_id' => 113,
                'name' => '纳雍县',
                'type' => 3,
            ),
            485 => 
            array (
                'id' => 986,
                'parent_id' => 113,
                'name' => '赫章县',
                'type' => 3,
            ),
            486 => 
            array (
                'id' => 987,
                'parent_id' => 113,
                'name' => '威宁',
                'type' => 3,
            ),
            487 => 
            array (
                'id' => 988,
                'parent_id' => 114,
                'name' => '钟山区',
                'type' => 3,
            ),
            488 => 
            array (
                'id' => 989,
                'parent_id' => 114,
                'name' => '六枝特区',
                'type' => 3,
            ),
            489 => 
            array (
                'id' => 990,
                'parent_id' => 114,
                'name' => '水城县',
                'type' => 3,
            ),
            490 => 
            array (
                'id' => 991,
                'parent_id' => 114,
                'name' => '盘县',
                'type' => 3,
            ),
            491 => 
            array (
                'id' => 992,
                'parent_id' => 115,
                'name' => '凯里市',
                'type' => 3,
            ),
            492 => 
            array (
                'id' => 993,
                'parent_id' => 115,
                'name' => '黄平县',
                'type' => 3,
            ),
            493 => 
            array (
                'id' => 994,
                'parent_id' => 115,
                'name' => '施秉县',
                'type' => 3,
            ),
            494 => 
            array (
                'id' => 995,
                'parent_id' => 115,
                'name' => '三穗县',
                'type' => 3,
            ),
            495 => 
            array (
                'id' => 996,
                'parent_id' => 115,
                'name' => '镇远县',
                'type' => 3,
            ),
            496 => 
            array (
                'id' => 997,
                'parent_id' => 115,
                'name' => '岑巩县',
                'type' => 3,
            ),
            497 => 
            array (
                'id' => 998,
                'parent_id' => 115,
                'name' => '天柱县',
                'type' => 3,
            ),
            498 => 
            array (
                'id' => 999,
                'parent_id' => 115,
                'name' => '锦屏县',
                'type' => 3,
            ),
            499 => 
            array (
                'id' => 1000,
                'parent_id' => 115,
                'name' => '剑河县',
                'type' => 3,
            ),
        ));
        \DB::table('china_area')->insert(array (
            0 => 
            array (
                'id' => 1001,
                'parent_id' => 115,
                'name' => '台江县',
                'type' => 3,
            ),
            1 => 
            array (
                'id' => 1002,
                'parent_id' => 115,
                'name' => '黎平县',
                'type' => 3,
            ),
            2 => 
            array (
                'id' => 1003,
                'parent_id' => 115,
                'name' => '榕江县',
                'type' => 3,
            ),
            3 => 
            array (
                'id' => 1004,
                'parent_id' => 115,
                'name' => '从江县',
                'type' => 3,
            ),
            4 => 
            array (
                'id' => 1005,
                'parent_id' => 115,
                'name' => '雷山县',
                'type' => 3,
            ),
            5 => 
            array (
                'id' => 1006,
                'parent_id' => 115,
                'name' => '麻江县',
                'type' => 3,
            ),
            6 => 
            array (
                'id' => 1007,
                'parent_id' => 115,
                'name' => '丹寨县',
                'type' => 3,
            ),
            7 => 
            array (
                'id' => 1008,
                'parent_id' => 116,
                'name' => '都匀市',
                'type' => 3,
            ),
            8 => 
            array (
                'id' => 1009,
                'parent_id' => 116,
                'name' => '福泉市',
                'type' => 3,
            ),
            9 => 
            array (
                'id' => 1010,
                'parent_id' => 116,
                'name' => '荔波县',
                'type' => 3,
            ),
            10 => 
            array (
                'id' => 1011,
                'parent_id' => 116,
                'name' => '贵定县',
                'type' => 3,
            ),
            11 => 
            array (
                'id' => 1012,
                'parent_id' => 116,
                'name' => '瓮安县',
                'type' => 3,
            ),
            12 => 
            array (
                'id' => 1013,
                'parent_id' => 116,
                'name' => '独山县',
                'type' => 3,
            ),
            13 => 
            array (
                'id' => 1014,
                'parent_id' => 116,
                'name' => '平塘县',
                'type' => 3,
            ),
            14 => 
            array (
                'id' => 1015,
                'parent_id' => 116,
                'name' => '罗甸县',
                'type' => 3,
            ),
            15 => 
            array (
                'id' => 1016,
                'parent_id' => 116,
                'name' => '长顺县',
                'type' => 3,
            ),
            16 => 
            array (
                'id' => 1017,
                'parent_id' => 116,
                'name' => '龙里县',
                'type' => 3,
            ),
            17 => 
            array (
                'id' => 1018,
                'parent_id' => 116,
                'name' => '惠水县',
                'type' => 3,
            ),
            18 => 
            array (
                'id' => 1019,
                'parent_id' => 116,
                'name' => '三都',
                'type' => 3,
            ),
            19 => 
            array (
                'id' => 1020,
                'parent_id' => 117,
                'name' => '兴义市',
                'type' => 3,
            ),
            20 => 
            array (
                'id' => 1021,
                'parent_id' => 117,
                'name' => '兴仁县',
                'type' => 3,
            ),
            21 => 
            array (
                'id' => 1022,
                'parent_id' => 117,
                'name' => '普安县',
                'type' => 3,
            ),
            22 => 
            array (
                'id' => 1023,
                'parent_id' => 117,
                'name' => '晴隆县',
                'type' => 3,
            ),
            23 => 
            array (
                'id' => 1024,
                'parent_id' => 117,
                'name' => '贞丰县',
                'type' => 3,
            ),
            24 => 
            array (
                'id' => 1025,
                'parent_id' => 117,
                'name' => '望谟县',
                'type' => 3,
            ),
            25 => 
            array (
                'id' => 1026,
                'parent_id' => 117,
                'name' => '册亨县',
                'type' => 3,
            ),
            26 => 
            array (
                'id' => 1027,
                'parent_id' => 117,
                'name' => '安龙县',
                'type' => 3,
            ),
            27 => 
            array (
                'id' => 1028,
                'parent_id' => 118,
                'name' => '铜仁市',
                'type' => 3,
            ),
            28 => 
            array (
                'id' => 1029,
                'parent_id' => 118,
                'name' => '江口县',
                'type' => 3,
            ),
            29 => 
            array (
                'id' => 1030,
                'parent_id' => 118,
                'name' => '石阡县',
                'type' => 3,
            ),
            30 => 
            array (
                'id' => 1031,
                'parent_id' => 118,
                'name' => '思南县',
                'type' => 3,
            ),
            31 => 
            array (
                'id' => 1032,
                'parent_id' => 118,
                'name' => '德江县',
                'type' => 3,
            ),
            32 => 
            array (
                'id' => 1033,
                'parent_id' => 118,
                'name' => '玉屏',
                'type' => 3,
            ),
            33 => 
            array (
                'id' => 1034,
                'parent_id' => 118,
                'name' => '印江',
                'type' => 3,
            ),
            34 => 
            array (
                'id' => 1035,
                'parent_id' => 118,
                'name' => '沿河',
                'type' => 3,
            ),
            35 => 
            array (
                'id' => 1036,
                'parent_id' => 118,
                'name' => '松桃',
                'type' => 3,
            ),
            36 => 
            array (
                'id' => 1037,
                'parent_id' => 118,
                'name' => '万山特区',
                'type' => 3,
            ),
            37 => 
            array (
                'id' => 1038,
                'parent_id' => 119,
                'name' => '红花岗区',
                'type' => 3,
            ),
            38 => 
            array (
                'id' => 1039,
                'parent_id' => 119,
                'name' => '务川县',
                'type' => 3,
            ),
            39 => 
            array (
                'id' => 1040,
                'parent_id' => 119,
                'name' => '道真县',
                'type' => 3,
            ),
            40 => 
            array (
                'id' => 1041,
                'parent_id' => 119,
                'name' => '汇川区',
                'type' => 3,
            ),
            41 => 
            array (
                'id' => 1042,
                'parent_id' => 119,
                'name' => '赤水市',
                'type' => 3,
            ),
            42 => 
            array (
                'id' => 1043,
                'parent_id' => 119,
                'name' => '仁怀市',
                'type' => 3,
            ),
            43 => 
            array (
                'id' => 1044,
                'parent_id' => 119,
                'name' => '遵义县',
                'type' => 3,
            ),
            44 => 
            array (
                'id' => 1045,
                'parent_id' => 119,
                'name' => '桐梓县',
                'type' => 3,
            ),
            45 => 
            array (
                'id' => 1046,
                'parent_id' => 119,
                'name' => '绥阳县',
                'type' => 3,
            ),
            46 => 
            array (
                'id' => 1047,
                'parent_id' => 119,
                'name' => '正安县',
                'type' => 3,
            ),
            47 => 
            array (
                'id' => 1048,
                'parent_id' => 119,
                'name' => '凤冈县',
                'type' => 3,
            ),
            48 => 
            array (
                'id' => 1049,
                'parent_id' => 119,
                'name' => '湄潭县',
                'type' => 3,
            ),
            49 => 
            array (
                'id' => 1050,
                'parent_id' => 119,
                'name' => '余庆县',
                'type' => 3,
            ),
            50 => 
            array (
                'id' => 1051,
                'parent_id' => 119,
                'name' => '习水县',
                'type' => 3,
            ),
            51 => 
            array (
                'id' => 1052,
                'parent_id' => 119,
                'name' => '道真',
                'type' => 3,
            ),
            52 => 
            array (
                'id' => 1053,
                'parent_id' => 119,
                'name' => '务川',
                'type' => 3,
            ),
            53 => 
            array (
                'id' => 1054,
                'parent_id' => 120,
                'name' => '秀英区',
                'type' => 3,
            ),
            54 => 
            array (
                'id' => 1055,
                'parent_id' => 120,
                'name' => '龙华区',
                'type' => 3,
            ),
            55 => 
            array (
                'id' => 1056,
                'parent_id' => 120,
                'name' => '琼山区',
                'type' => 3,
            ),
            56 => 
            array (
                'id' => 1057,
                'parent_id' => 120,
                'name' => '美兰区',
                'type' => 3,
            ),
            57 => 
            array (
                'id' => 1058,
                'parent_id' => 137,
                'name' => '市区',
                'type' => 3,
            ),
            58 => 
            array (
                'id' => 1059,
                'parent_id' => 137,
                'name' => '洋浦开发区',
                'type' => 3,
            ),
            59 => 
            array (
                'id' => 1060,
                'parent_id' => 137,
                'name' => '那大镇',
                'type' => 3,
            ),
            60 => 
            array (
                'id' => 1061,
                'parent_id' => 137,
                'name' => '王五镇',
                'type' => 3,
            ),
            61 => 
            array (
                'id' => 1062,
                'parent_id' => 137,
                'name' => '雅星镇',
                'type' => 3,
            ),
            62 => 
            array (
                'id' => 1063,
                'parent_id' => 137,
                'name' => '大成镇',
                'type' => 3,
            ),
            63 => 
            array (
                'id' => 1064,
                'parent_id' => 137,
                'name' => '中和镇',
                'type' => 3,
            ),
            64 => 
            array (
                'id' => 1065,
                'parent_id' => 137,
                'name' => '峨蔓镇',
                'type' => 3,
            ),
            65 => 
            array (
                'id' => 1066,
                'parent_id' => 137,
                'name' => '南丰镇',
                'type' => 3,
            ),
            66 => 
            array (
                'id' => 1067,
                'parent_id' => 137,
                'name' => '白马井镇',
                'type' => 3,
            ),
            67 => 
            array (
                'id' => 1068,
                'parent_id' => 137,
                'name' => '兰洋镇',
                'type' => 3,
            ),
            68 => 
            array (
                'id' => 1069,
                'parent_id' => 137,
                'name' => '和庆镇',
                'type' => 3,
            ),
            69 => 
            array (
                'id' => 1070,
                'parent_id' => 137,
                'name' => '海头镇',
                'type' => 3,
            ),
            70 => 
            array (
                'id' => 1071,
                'parent_id' => 137,
                'name' => '排浦镇',
                'type' => 3,
            ),
            71 => 
            array (
                'id' => 1072,
                'parent_id' => 137,
                'name' => '东成镇',
                'type' => 3,
            ),
            72 => 
            array (
                'id' => 1073,
                'parent_id' => 137,
                'name' => '光村镇',
                'type' => 3,
            ),
            73 => 
            array (
                'id' => 1074,
                'parent_id' => 137,
                'name' => '木棠镇',
                'type' => 3,
            ),
            74 => 
            array (
                'id' => 1075,
                'parent_id' => 137,
                'name' => '新州镇',
                'type' => 3,
            ),
            75 => 
            array (
                'id' => 1076,
                'parent_id' => 137,
                'name' => '三都镇',
                'type' => 3,
            ),
            76 => 
            array (
                'id' => 1077,
                'parent_id' => 137,
                'name' => '其他',
                'type' => 3,
            ),
            77 => 
            array (
                'id' => 1078,
                'parent_id' => 138,
                'name' => '长安区',
                'type' => 3,
            ),
            78 => 
            array (
                'id' => 1079,
                'parent_id' => 138,
                'name' => '桥东区',
                'type' => 3,
            ),
            79 => 
            array (
                'id' => 1080,
                'parent_id' => 138,
                'name' => '桥西区',
                'type' => 3,
            ),
            80 => 
            array (
                'id' => 1081,
                'parent_id' => 138,
                'name' => '新华区',
                'type' => 3,
            ),
            81 => 
            array (
                'id' => 1082,
                'parent_id' => 138,
                'name' => '裕华区',
                'type' => 3,
            ),
            82 => 
            array (
                'id' => 1083,
                'parent_id' => 138,
                'name' => '井陉矿区',
                'type' => 3,
            ),
            83 => 
            array (
                'id' => 1084,
                'parent_id' => 138,
                'name' => '高新区',
                'type' => 3,
            ),
            84 => 
            array (
                'id' => 1085,
                'parent_id' => 138,
                'name' => '辛集市',
                'type' => 3,
            ),
            85 => 
            array (
                'id' => 1086,
                'parent_id' => 138,
                'name' => '藁城市',
                'type' => 3,
            ),
            86 => 
            array (
                'id' => 1087,
                'parent_id' => 138,
                'name' => '晋州市',
                'type' => 3,
            ),
            87 => 
            array (
                'id' => 1088,
                'parent_id' => 138,
                'name' => '新乐市',
                'type' => 3,
            ),
            88 => 
            array (
                'id' => 1089,
                'parent_id' => 138,
                'name' => '鹿泉市',
                'type' => 3,
            ),
            89 => 
            array (
                'id' => 1090,
                'parent_id' => 138,
                'name' => '井陉县',
                'type' => 3,
            ),
            90 => 
            array (
                'id' => 1091,
                'parent_id' => 138,
                'name' => '正定县',
                'type' => 3,
            ),
            91 => 
            array (
                'id' => 1092,
                'parent_id' => 138,
                'name' => '栾城县',
                'type' => 3,
            ),
            92 => 
            array (
                'id' => 1093,
                'parent_id' => 138,
                'name' => '行唐县',
                'type' => 3,
            ),
            93 => 
            array (
                'id' => 1094,
                'parent_id' => 138,
                'name' => '灵寿县',
                'type' => 3,
            ),
            94 => 
            array (
                'id' => 1095,
                'parent_id' => 138,
                'name' => '高邑县',
                'type' => 3,
            ),
            95 => 
            array (
                'id' => 1096,
                'parent_id' => 138,
                'name' => '深泽县',
                'type' => 3,
            ),
            96 => 
            array (
                'id' => 1097,
                'parent_id' => 138,
                'name' => '赞皇县',
                'type' => 3,
            ),
            97 => 
            array (
                'id' => 1098,
                'parent_id' => 138,
                'name' => '无极县',
                'type' => 3,
            ),
            98 => 
            array (
                'id' => 1099,
                'parent_id' => 138,
                'name' => '平山县',
                'type' => 3,
            ),
            99 => 
            array (
                'id' => 1100,
                'parent_id' => 138,
                'name' => '元氏县',
                'type' => 3,
            ),
            100 => 
            array (
                'id' => 1101,
                'parent_id' => 138,
                'name' => '赵县',
                'type' => 3,
            ),
            101 => 
            array (
                'id' => 1102,
                'parent_id' => 139,
                'name' => '新市区',
                'type' => 3,
            ),
            102 => 
            array (
                'id' => 1103,
                'parent_id' => 139,
                'name' => '南市区',
                'type' => 3,
            ),
            103 => 
            array (
                'id' => 1104,
                'parent_id' => 139,
                'name' => '北市区',
                'type' => 3,
            ),
            104 => 
            array (
                'id' => 1105,
                'parent_id' => 139,
                'name' => '涿州市',
                'type' => 3,
            ),
            105 => 
            array (
                'id' => 1106,
                'parent_id' => 139,
                'name' => '定州市',
                'type' => 3,
            ),
            106 => 
            array (
                'id' => 1107,
                'parent_id' => 139,
                'name' => '安国市',
                'type' => 3,
            ),
            107 => 
            array (
                'id' => 1108,
                'parent_id' => 139,
                'name' => '高碑店市',
                'type' => 3,
            ),
            108 => 
            array (
                'id' => 1109,
                'parent_id' => 139,
                'name' => '满城县',
                'type' => 3,
            ),
            109 => 
            array (
                'id' => 1110,
                'parent_id' => 139,
                'name' => '清苑县',
                'type' => 3,
            ),
            110 => 
            array (
                'id' => 1111,
                'parent_id' => 139,
                'name' => '涞水县',
                'type' => 3,
            ),
            111 => 
            array (
                'id' => 1112,
                'parent_id' => 139,
                'name' => '阜平县',
                'type' => 3,
            ),
            112 => 
            array (
                'id' => 1113,
                'parent_id' => 139,
                'name' => '徐水县',
                'type' => 3,
            ),
            113 => 
            array (
                'id' => 1114,
                'parent_id' => 139,
                'name' => '定兴县',
                'type' => 3,
            ),
            114 => 
            array (
                'id' => 1115,
                'parent_id' => 139,
                'name' => '唐县',
                'type' => 3,
            ),
            115 => 
            array (
                'id' => 1116,
                'parent_id' => 139,
                'name' => '高阳县',
                'type' => 3,
            ),
            116 => 
            array (
                'id' => 1117,
                'parent_id' => 139,
                'name' => '容城县',
                'type' => 3,
            ),
            117 => 
            array (
                'id' => 1118,
                'parent_id' => 139,
                'name' => '涞源县',
                'type' => 3,
            ),
            118 => 
            array (
                'id' => 1119,
                'parent_id' => 139,
                'name' => '望都县',
                'type' => 3,
            ),
            119 => 
            array (
                'id' => 1120,
                'parent_id' => 139,
                'name' => '安新县',
                'type' => 3,
            ),
            120 => 
            array (
                'id' => 1121,
                'parent_id' => 139,
                'name' => '易县',
                'type' => 3,
            ),
            121 => 
            array (
                'id' => 1122,
                'parent_id' => 139,
                'name' => '曲阳县',
                'type' => 3,
            ),
            122 => 
            array (
                'id' => 1123,
                'parent_id' => 139,
                'name' => '蠡县',
                'type' => 3,
            ),
            123 => 
            array (
                'id' => 1124,
                'parent_id' => 139,
                'name' => '顺平县',
                'type' => 3,
            ),
            124 => 
            array (
                'id' => 1125,
                'parent_id' => 139,
                'name' => '博野县',
                'type' => 3,
            ),
            125 => 
            array (
                'id' => 1126,
                'parent_id' => 139,
                'name' => '雄县',
                'type' => 3,
            ),
            126 => 
            array (
                'id' => 1127,
                'parent_id' => 140,
                'name' => '运河区',
                'type' => 3,
            ),
            127 => 
            array (
                'id' => 1128,
                'parent_id' => 140,
                'name' => '新华区',
                'type' => 3,
            ),
            128 => 
            array (
                'id' => 1129,
                'parent_id' => 140,
                'name' => '泊头市',
                'type' => 3,
            ),
            129 => 
            array (
                'id' => 1130,
                'parent_id' => 140,
                'name' => '任丘市',
                'type' => 3,
            ),
            130 => 
            array (
                'id' => 1131,
                'parent_id' => 140,
                'name' => '黄骅市',
                'type' => 3,
            ),
            131 => 
            array (
                'id' => 1132,
                'parent_id' => 140,
                'name' => '河间市',
                'type' => 3,
            ),
            132 => 
            array (
                'id' => 1133,
                'parent_id' => 140,
                'name' => '沧县',
                'type' => 3,
            ),
            133 => 
            array (
                'id' => 1134,
                'parent_id' => 140,
                'name' => '青县',
                'type' => 3,
            ),
            134 => 
            array (
                'id' => 1135,
                'parent_id' => 140,
                'name' => '东光县',
                'type' => 3,
            ),
            135 => 
            array (
                'id' => 1136,
                'parent_id' => 140,
                'name' => '海兴县',
                'type' => 3,
            ),
            136 => 
            array (
                'id' => 1137,
                'parent_id' => 140,
                'name' => '盐山县',
                'type' => 3,
            ),
            137 => 
            array (
                'id' => 1138,
                'parent_id' => 140,
                'name' => '肃宁县',
                'type' => 3,
            ),
            138 => 
            array (
                'id' => 1139,
                'parent_id' => 140,
                'name' => '南皮县',
                'type' => 3,
            ),
            139 => 
            array (
                'id' => 1140,
                'parent_id' => 140,
                'name' => '吴桥县',
                'type' => 3,
            ),
            140 => 
            array (
                'id' => 1141,
                'parent_id' => 140,
                'name' => '献县',
                'type' => 3,
            ),
            141 => 
            array (
                'id' => 1142,
                'parent_id' => 140,
                'name' => '孟村',
                'type' => 3,
            ),
            142 => 
            array (
                'id' => 1143,
                'parent_id' => 141,
                'name' => '双桥区',
                'type' => 3,
            ),
            143 => 
            array (
                'id' => 1144,
                'parent_id' => 141,
                'name' => '双滦区',
                'type' => 3,
            ),
            144 => 
            array (
                'id' => 1145,
                'parent_id' => 141,
                'name' => '鹰手营子矿区',
                'type' => 3,
            ),
            145 => 
            array (
                'id' => 1146,
                'parent_id' => 141,
                'name' => '承德县',
                'type' => 3,
            ),
            146 => 
            array (
                'id' => 1147,
                'parent_id' => 141,
                'name' => '兴隆县',
                'type' => 3,
            ),
            147 => 
            array (
                'id' => 1148,
                'parent_id' => 141,
                'name' => '平泉县',
                'type' => 3,
            ),
            148 => 
            array (
                'id' => 1149,
                'parent_id' => 141,
                'name' => '滦平县',
                'type' => 3,
            ),
            149 => 
            array (
                'id' => 1150,
                'parent_id' => 141,
                'name' => '隆化县',
                'type' => 3,
            ),
            150 => 
            array (
                'id' => 1151,
                'parent_id' => 141,
                'name' => '丰宁',
                'type' => 3,
            ),
            151 => 
            array (
                'id' => 1152,
                'parent_id' => 141,
                'name' => '宽城',
                'type' => 3,
            ),
            152 => 
            array (
                'id' => 1153,
                'parent_id' => 141,
                'name' => '围场',
                'type' => 3,
            ),
            153 => 
            array (
                'id' => 1154,
                'parent_id' => 142,
                'name' => '从台区',
                'type' => 3,
            ),
            154 => 
            array (
                'id' => 1155,
                'parent_id' => 142,
                'name' => '复兴区',
                'type' => 3,
            ),
            155 => 
            array (
                'id' => 1156,
                'parent_id' => 142,
                'name' => '邯山区',
                'type' => 3,
            ),
            156 => 
            array (
                'id' => 1157,
                'parent_id' => 142,
                'name' => '峰峰矿区',
                'type' => 3,
            ),
            157 => 
            array (
                'id' => 1158,
                'parent_id' => 142,
                'name' => '武安市',
                'type' => 3,
            ),
            158 => 
            array (
                'id' => 1159,
                'parent_id' => 142,
                'name' => '邯郸县',
                'type' => 3,
            ),
            159 => 
            array (
                'id' => 1160,
                'parent_id' => 142,
                'name' => '临漳县',
                'type' => 3,
            ),
            160 => 
            array (
                'id' => 1161,
                'parent_id' => 142,
                'name' => '成安县',
                'type' => 3,
            ),
            161 => 
            array (
                'id' => 1162,
                'parent_id' => 142,
                'name' => '大名县',
                'type' => 3,
            ),
            162 => 
            array (
                'id' => 1163,
                'parent_id' => 142,
                'name' => '涉县',
                'type' => 3,
            ),
            163 => 
            array (
                'id' => 1164,
                'parent_id' => 142,
                'name' => '磁县',
                'type' => 3,
            ),
            164 => 
            array (
                'id' => 1165,
                'parent_id' => 142,
                'name' => '肥乡县',
                'type' => 3,
            ),
            165 => 
            array (
                'id' => 1166,
                'parent_id' => 142,
                'name' => '永年县',
                'type' => 3,
            ),
            166 => 
            array (
                'id' => 1167,
                'parent_id' => 142,
                'name' => '邱县',
                'type' => 3,
            ),
            167 => 
            array (
                'id' => 1168,
                'parent_id' => 142,
                'name' => '鸡泽县',
                'type' => 3,
            ),
            168 => 
            array (
                'id' => 1169,
                'parent_id' => 142,
                'name' => '广平县',
                'type' => 3,
            ),
            169 => 
            array (
                'id' => 1170,
                'parent_id' => 142,
                'name' => '馆陶县',
                'type' => 3,
            ),
            170 => 
            array (
                'id' => 1171,
                'parent_id' => 142,
                'name' => '魏县',
                'type' => 3,
            ),
            171 => 
            array (
                'id' => 1172,
                'parent_id' => 142,
                'name' => '曲周县',
                'type' => 3,
            ),
            172 => 
            array (
                'id' => 1173,
                'parent_id' => 143,
                'name' => '桃城区',
                'type' => 3,
            ),
            173 => 
            array (
                'id' => 1174,
                'parent_id' => 143,
                'name' => '冀州市',
                'type' => 3,
            ),
            174 => 
            array (
                'id' => 1175,
                'parent_id' => 143,
                'name' => '深州市',
                'type' => 3,
            ),
            175 => 
            array (
                'id' => 1176,
                'parent_id' => 143,
                'name' => '枣强县',
                'type' => 3,
            ),
            176 => 
            array (
                'id' => 1177,
                'parent_id' => 143,
                'name' => '武邑县',
                'type' => 3,
            ),
            177 => 
            array (
                'id' => 1178,
                'parent_id' => 143,
                'name' => '武强县',
                'type' => 3,
            ),
            178 => 
            array (
                'id' => 1179,
                'parent_id' => 143,
                'name' => '饶阳县',
                'type' => 3,
            ),
            179 => 
            array (
                'id' => 1180,
                'parent_id' => 143,
                'name' => '安平县',
                'type' => 3,
            ),
            180 => 
            array (
                'id' => 1181,
                'parent_id' => 143,
                'name' => '故城县',
                'type' => 3,
            ),
            181 => 
            array (
                'id' => 1182,
                'parent_id' => 143,
                'name' => '景县',
                'type' => 3,
            ),
            182 => 
            array (
                'id' => 1183,
                'parent_id' => 143,
                'name' => '阜城县',
                'type' => 3,
            ),
            183 => 
            array (
                'id' => 1184,
                'parent_id' => 144,
                'name' => '安次区',
                'type' => 3,
            ),
            184 => 
            array (
                'id' => 1185,
                'parent_id' => 144,
                'name' => '广阳区',
                'type' => 3,
            ),
            185 => 
            array (
                'id' => 1186,
                'parent_id' => 144,
                'name' => '霸州市',
                'type' => 3,
            ),
            186 => 
            array (
                'id' => 1187,
                'parent_id' => 144,
                'name' => '三河市',
                'type' => 3,
            ),
            187 => 
            array (
                'id' => 1188,
                'parent_id' => 144,
                'name' => '固安县',
                'type' => 3,
            ),
            188 => 
            array (
                'id' => 1189,
                'parent_id' => 144,
                'name' => '永清县',
                'type' => 3,
            ),
            189 => 
            array (
                'id' => 1190,
                'parent_id' => 144,
                'name' => '香河县',
                'type' => 3,
            ),
            190 => 
            array (
                'id' => 1191,
                'parent_id' => 144,
                'name' => '大城县',
                'type' => 3,
            ),
            191 => 
            array (
                'id' => 1192,
                'parent_id' => 144,
                'name' => '文安县',
                'type' => 3,
            ),
            192 => 
            array (
                'id' => 1193,
                'parent_id' => 144,
                'name' => '大厂',
                'type' => 3,
            ),
            193 => 
            array (
                'id' => 1194,
                'parent_id' => 145,
                'name' => '海港区',
                'type' => 3,
            ),
            194 => 
            array (
                'id' => 1195,
                'parent_id' => 145,
                'name' => '山海关区',
                'type' => 3,
            ),
            195 => 
            array (
                'id' => 1196,
                'parent_id' => 145,
                'name' => '北戴河区',
                'type' => 3,
            ),
            196 => 
            array (
                'id' => 1197,
                'parent_id' => 145,
                'name' => '昌黎县',
                'type' => 3,
            ),
            197 => 
            array (
                'id' => 1198,
                'parent_id' => 145,
                'name' => '抚宁县',
                'type' => 3,
            ),
            198 => 
            array (
                'id' => 1199,
                'parent_id' => 145,
                'name' => '卢龙县',
                'type' => 3,
            ),
            199 => 
            array (
                'id' => 1200,
                'parent_id' => 145,
                'name' => '青龙',
                'type' => 3,
            ),
            200 => 
            array (
                'id' => 1201,
                'parent_id' => 146,
                'name' => '路北区',
                'type' => 3,
            ),
            201 => 
            array (
                'id' => 1202,
                'parent_id' => 146,
                'name' => '路南区',
                'type' => 3,
            ),
            202 => 
            array (
                'id' => 1203,
                'parent_id' => 146,
                'name' => '古冶区',
                'type' => 3,
            ),
            203 => 
            array (
                'id' => 1204,
                'parent_id' => 146,
                'name' => '开平区',
                'type' => 3,
            ),
            204 => 
            array (
                'id' => 1205,
                'parent_id' => 146,
                'name' => '丰南区',
                'type' => 3,
            ),
            205 => 
            array (
                'id' => 1206,
                'parent_id' => 146,
                'name' => '丰润区',
                'type' => 3,
            ),
            206 => 
            array (
                'id' => 1207,
                'parent_id' => 146,
                'name' => '遵化市',
                'type' => 3,
            ),
            207 => 
            array (
                'id' => 1208,
                'parent_id' => 146,
                'name' => '迁安市',
                'type' => 3,
            ),
            208 => 
            array (
                'id' => 1209,
                'parent_id' => 146,
                'name' => '滦县',
                'type' => 3,
            ),
            209 => 
            array (
                'id' => 1210,
                'parent_id' => 146,
                'name' => '滦南县',
                'type' => 3,
            ),
            210 => 
            array (
                'id' => 1211,
                'parent_id' => 146,
                'name' => '乐亭县',
                'type' => 3,
            ),
            211 => 
            array (
                'id' => 1212,
                'parent_id' => 146,
                'name' => '迁西县',
                'type' => 3,
            ),
            212 => 
            array (
                'id' => 1213,
                'parent_id' => 146,
                'name' => '玉田县',
                'type' => 3,
            ),
            213 => 
            array (
                'id' => 1214,
                'parent_id' => 146,
                'name' => '唐海县',
                'type' => 3,
            ),
            214 => 
            array (
                'id' => 1215,
                'parent_id' => 147,
                'name' => '桥东区',
                'type' => 3,
            ),
            215 => 
            array (
                'id' => 1216,
                'parent_id' => 147,
                'name' => '桥西区',
                'type' => 3,
            ),
            216 => 
            array (
                'id' => 1217,
                'parent_id' => 147,
                'name' => '南宫市',
                'type' => 3,
            ),
            217 => 
            array (
                'id' => 1218,
                'parent_id' => 147,
                'name' => '沙河市',
                'type' => 3,
            ),
            218 => 
            array (
                'id' => 1219,
                'parent_id' => 147,
                'name' => '邢台县',
                'type' => 3,
            ),
            219 => 
            array (
                'id' => 1220,
                'parent_id' => 147,
                'name' => '临城县',
                'type' => 3,
            ),
            220 => 
            array (
                'id' => 1221,
                'parent_id' => 147,
                'name' => '内丘县',
                'type' => 3,
            ),
            221 => 
            array (
                'id' => 1222,
                'parent_id' => 147,
                'name' => '柏乡县',
                'type' => 3,
            ),
            222 => 
            array (
                'id' => 1223,
                'parent_id' => 147,
                'name' => '隆尧县',
                'type' => 3,
            ),
            223 => 
            array (
                'id' => 1224,
                'parent_id' => 147,
                'name' => '任县',
                'type' => 3,
            ),
            224 => 
            array (
                'id' => 1225,
                'parent_id' => 147,
                'name' => '南和县',
                'type' => 3,
            ),
            225 => 
            array (
                'id' => 1226,
                'parent_id' => 147,
                'name' => '宁晋县',
                'type' => 3,
            ),
            226 => 
            array (
                'id' => 1227,
                'parent_id' => 147,
                'name' => '巨鹿县',
                'type' => 3,
            ),
            227 => 
            array (
                'id' => 1228,
                'parent_id' => 147,
                'name' => '新河县',
                'type' => 3,
            ),
            228 => 
            array (
                'id' => 1229,
                'parent_id' => 147,
                'name' => '广宗县',
                'type' => 3,
            ),
            229 => 
            array (
                'id' => 1230,
                'parent_id' => 147,
                'name' => '平乡县',
                'type' => 3,
            ),
            230 => 
            array (
                'id' => 1231,
                'parent_id' => 147,
                'name' => '威县',
                'type' => 3,
            ),
            231 => 
            array (
                'id' => 1232,
                'parent_id' => 147,
                'name' => '清河县',
                'type' => 3,
            ),
            232 => 
            array (
                'id' => 1233,
                'parent_id' => 147,
                'name' => '临西县',
                'type' => 3,
            ),
            233 => 
            array (
                'id' => 1234,
                'parent_id' => 148,
                'name' => '桥西区',
                'type' => 3,
            ),
            234 => 
            array (
                'id' => 1235,
                'parent_id' => 148,
                'name' => '桥东区',
                'type' => 3,
            ),
            235 => 
            array (
                'id' => 1236,
                'parent_id' => 148,
                'name' => '宣化区',
                'type' => 3,
            ),
            236 => 
            array (
                'id' => 1237,
                'parent_id' => 148,
                'name' => '下花园区',
                'type' => 3,
            ),
            237 => 
            array (
                'id' => 1238,
                'parent_id' => 148,
                'name' => '宣化县',
                'type' => 3,
            ),
            238 => 
            array (
                'id' => 1239,
                'parent_id' => 148,
                'name' => '张北县',
                'type' => 3,
            ),
            239 => 
            array (
                'id' => 1240,
                'parent_id' => 148,
                'name' => '康保县',
                'type' => 3,
            ),
            240 => 
            array (
                'id' => 1241,
                'parent_id' => 148,
                'name' => '沽源县',
                'type' => 3,
            ),
            241 => 
            array (
                'id' => 1242,
                'parent_id' => 148,
                'name' => '尚义县',
                'type' => 3,
            ),
            242 => 
            array (
                'id' => 1243,
                'parent_id' => 148,
                'name' => '蔚县',
                'type' => 3,
            ),
            243 => 
            array (
                'id' => 1244,
                'parent_id' => 148,
                'name' => '阳原县',
                'type' => 3,
            ),
            244 => 
            array (
                'id' => 1245,
                'parent_id' => 148,
                'name' => '怀安县',
                'type' => 3,
            ),
            245 => 
            array (
                'id' => 1246,
                'parent_id' => 148,
                'name' => '万全县',
                'type' => 3,
            ),
            246 => 
            array (
                'id' => 1247,
                'parent_id' => 148,
                'name' => '怀来县',
                'type' => 3,
            ),
            247 => 
            array (
                'id' => 1248,
                'parent_id' => 148,
                'name' => '涿鹿县',
                'type' => 3,
            ),
            248 => 
            array (
                'id' => 1249,
                'parent_id' => 148,
                'name' => '赤城县',
                'type' => 3,
            ),
            249 => 
            array (
                'id' => 1250,
                'parent_id' => 148,
                'name' => '崇礼县',
                'type' => 3,
            ),
            250 => 
            array (
                'id' => 1251,
                'parent_id' => 149,
                'name' => '金水区',
                'type' => 3,
            ),
            251 => 
            array (
                'id' => 1252,
                'parent_id' => 149,
                'name' => '邙山区',
                'type' => 3,
            ),
            252 => 
            array (
                'id' => 1253,
                'parent_id' => 149,
                'name' => '二七区',
                'type' => 3,
            ),
            253 => 
            array (
                'id' => 1254,
                'parent_id' => 149,
                'name' => '管城区',
                'type' => 3,
            ),
            254 => 
            array (
                'id' => 1255,
                'parent_id' => 149,
                'name' => '中原区',
                'type' => 3,
            ),
            255 => 
            array (
                'id' => 1256,
                'parent_id' => 149,
                'name' => '上街区',
                'type' => 3,
            ),
            256 => 
            array (
                'id' => 1257,
                'parent_id' => 149,
                'name' => '惠济区',
                'type' => 3,
            ),
            257 => 
            array (
                'id' => 1258,
                'parent_id' => 149,
                'name' => '郑东新区',
                'type' => 3,
            ),
            258 => 
            array (
                'id' => 1259,
                'parent_id' => 149,
                'name' => '经济技术开发区',
                'type' => 3,
            ),
            259 => 
            array (
                'id' => 1260,
                'parent_id' => 149,
                'name' => '高新开发区',
                'type' => 3,
            ),
            260 => 
            array (
                'id' => 1261,
                'parent_id' => 149,
                'name' => '出口加工区',
                'type' => 3,
            ),
            261 => 
            array (
                'id' => 1262,
                'parent_id' => 149,
                'name' => '巩义市',
                'type' => 3,
            ),
            262 => 
            array (
                'id' => 1263,
                'parent_id' => 149,
                'name' => '荥阳市',
                'type' => 3,
            ),
            263 => 
            array (
                'id' => 1264,
                'parent_id' => 149,
                'name' => '新密市',
                'type' => 3,
            ),
            264 => 
            array (
                'id' => 1265,
                'parent_id' => 149,
                'name' => '新郑市',
                'type' => 3,
            ),
            265 => 
            array (
                'id' => 1266,
                'parent_id' => 149,
                'name' => '登封市',
                'type' => 3,
            ),
            266 => 
            array (
                'id' => 1267,
                'parent_id' => 149,
                'name' => '中牟县',
                'type' => 3,
            ),
            267 => 
            array (
                'id' => 1268,
                'parent_id' => 150,
                'name' => '西工区',
                'type' => 3,
            ),
            268 => 
            array (
                'id' => 1269,
                'parent_id' => 150,
                'name' => '老城区',
                'type' => 3,
            ),
            269 => 
            array (
                'id' => 1270,
                'parent_id' => 150,
                'name' => '涧西区',
                'type' => 3,
            ),
            270 => 
            array (
                'id' => 1271,
                'parent_id' => 150,
                'name' => '瀍河回族区',
                'type' => 3,
            ),
            271 => 
            array (
                'id' => 1272,
                'parent_id' => 150,
                'name' => '洛龙区',
                'type' => 3,
            ),
            272 => 
            array (
                'id' => 1273,
                'parent_id' => 150,
                'name' => '吉利区',
                'type' => 3,
            ),
            273 => 
            array (
                'id' => 1274,
                'parent_id' => 150,
                'name' => '偃师市',
                'type' => 3,
            ),
            274 => 
            array (
                'id' => 1275,
                'parent_id' => 150,
                'name' => '孟津县',
                'type' => 3,
            ),
            275 => 
            array (
                'id' => 1276,
                'parent_id' => 150,
                'name' => '新安县',
                'type' => 3,
            ),
            276 => 
            array (
                'id' => 1277,
                'parent_id' => 150,
                'name' => '栾川县',
                'type' => 3,
            ),
            277 => 
            array (
                'id' => 1278,
                'parent_id' => 150,
                'name' => '嵩县',
                'type' => 3,
            ),
            278 => 
            array (
                'id' => 1279,
                'parent_id' => 150,
                'name' => '汝阳县',
                'type' => 3,
            ),
            279 => 
            array (
                'id' => 1280,
                'parent_id' => 150,
                'name' => '宜阳县',
                'type' => 3,
            ),
            280 => 
            array (
                'id' => 1281,
                'parent_id' => 150,
                'name' => '洛宁县',
                'type' => 3,
            ),
            281 => 
            array (
                'id' => 1282,
                'parent_id' => 150,
                'name' => '伊川县',
                'type' => 3,
            ),
            282 => 
            array (
                'id' => 1283,
                'parent_id' => 151,
                'name' => '鼓楼区',
                'type' => 3,
            ),
            283 => 
            array (
                'id' => 1284,
                'parent_id' => 151,
                'name' => '龙亭区',
                'type' => 3,
            ),
            284 => 
            array (
                'id' => 1285,
                'parent_id' => 151,
                'name' => '顺河回族区',
                'type' => 3,
            ),
            285 => 
            array (
                'id' => 1286,
                'parent_id' => 151,
                'name' => '金明区',
                'type' => 3,
            ),
            286 => 
            array (
                'id' => 1287,
                'parent_id' => 151,
                'name' => '禹王台区',
                'type' => 3,
            ),
            287 => 
            array (
                'id' => 1288,
                'parent_id' => 151,
                'name' => '杞县',
                'type' => 3,
            ),
            288 => 
            array (
                'id' => 1289,
                'parent_id' => 151,
                'name' => '通许县',
                'type' => 3,
            ),
            289 => 
            array (
                'id' => 1290,
                'parent_id' => 151,
                'name' => '尉氏县',
                'type' => 3,
            ),
            290 => 
            array (
                'id' => 1291,
                'parent_id' => 151,
                'name' => '开封县',
                'type' => 3,
            ),
            291 => 
            array (
                'id' => 1292,
                'parent_id' => 151,
                'name' => '兰考县',
                'type' => 3,
            ),
            292 => 
            array (
                'id' => 1293,
                'parent_id' => 152,
                'name' => '北关区',
                'type' => 3,
            ),
            293 => 
            array (
                'id' => 1294,
                'parent_id' => 152,
                'name' => '文峰区',
                'type' => 3,
            ),
            294 => 
            array (
                'id' => 1295,
                'parent_id' => 152,
                'name' => '殷都区',
                'type' => 3,
            ),
            295 => 
            array (
                'id' => 1296,
                'parent_id' => 152,
                'name' => '龙安区',
                'type' => 3,
            ),
            296 => 
            array (
                'id' => 1297,
                'parent_id' => 152,
                'name' => '林州市',
                'type' => 3,
            ),
            297 => 
            array (
                'id' => 1298,
                'parent_id' => 152,
                'name' => '安阳县',
                'type' => 3,
            ),
            298 => 
            array (
                'id' => 1299,
                'parent_id' => 152,
                'name' => '汤阴县',
                'type' => 3,
            ),
            299 => 
            array (
                'id' => 1300,
                'parent_id' => 152,
                'name' => '滑县',
                'type' => 3,
            ),
            300 => 
            array (
                'id' => 1301,
                'parent_id' => 152,
                'name' => '内黄县',
                'type' => 3,
            ),
            301 => 
            array (
                'id' => 1302,
                'parent_id' => 153,
                'name' => '淇滨区',
                'type' => 3,
            ),
            302 => 
            array (
                'id' => 1303,
                'parent_id' => 153,
                'name' => '山城区',
                'type' => 3,
            ),
            303 => 
            array (
                'id' => 1304,
                'parent_id' => 153,
                'name' => '鹤山区',
                'type' => 3,
            ),
            304 => 
            array (
                'id' => 1305,
                'parent_id' => 153,
                'name' => '浚县',
                'type' => 3,
            ),
            305 => 
            array (
                'id' => 1306,
                'parent_id' => 153,
                'name' => '淇县',
                'type' => 3,
            ),
            306 => 
            array (
                'id' => 1307,
                'parent_id' => 154,
                'name' => '济源市',
                'type' => 3,
            ),
            307 => 
            array (
                'id' => 1308,
                'parent_id' => 155,
                'name' => '解放区',
                'type' => 3,
            ),
            308 => 
            array (
                'id' => 1309,
                'parent_id' => 155,
                'name' => '中站区',
                'type' => 3,
            ),
            309 => 
            array (
                'id' => 1310,
                'parent_id' => 155,
                'name' => '马村区',
                'type' => 3,
            ),
            310 => 
            array (
                'id' => 1311,
                'parent_id' => 155,
                'name' => '山阳区',
                'type' => 3,
            ),
            311 => 
            array (
                'id' => 1312,
                'parent_id' => 155,
                'name' => '沁阳市',
                'type' => 3,
            ),
            312 => 
            array (
                'id' => 1313,
                'parent_id' => 155,
                'name' => '孟州市',
                'type' => 3,
            ),
            313 => 
            array (
                'id' => 1314,
                'parent_id' => 155,
                'name' => '修武县',
                'type' => 3,
            ),
            314 => 
            array (
                'id' => 1315,
                'parent_id' => 155,
                'name' => '博爱县',
                'type' => 3,
            ),
            315 => 
            array (
                'id' => 1316,
                'parent_id' => 155,
                'name' => '武陟县',
                'type' => 3,
            ),
            316 => 
            array (
                'id' => 1317,
                'parent_id' => 155,
                'name' => '温县',
                'type' => 3,
            ),
            317 => 
            array (
                'id' => 1318,
                'parent_id' => 156,
                'name' => '卧龙区',
                'type' => 3,
            ),
            318 => 
            array (
                'id' => 1319,
                'parent_id' => 156,
                'name' => '宛城区',
                'type' => 3,
            ),
            319 => 
            array (
                'id' => 1320,
                'parent_id' => 156,
                'name' => '邓州市',
                'type' => 3,
            ),
            320 => 
            array (
                'id' => 1321,
                'parent_id' => 156,
                'name' => '南召县',
                'type' => 3,
            ),
            321 => 
            array (
                'id' => 1322,
                'parent_id' => 156,
                'name' => '方城县',
                'type' => 3,
            ),
            322 => 
            array (
                'id' => 1323,
                'parent_id' => 156,
                'name' => '西峡县',
                'type' => 3,
            ),
            323 => 
            array (
                'id' => 1324,
                'parent_id' => 156,
                'name' => '镇平县',
                'type' => 3,
            ),
            324 => 
            array (
                'id' => 1325,
                'parent_id' => 156,
                'name' => '内乡县',
                'type' => 3,
            ),
            325 => 
            array (
                'id' => 1326,
                'parent_id' => 156,
                'name' => '淅川县',
                'type' => 3,
            ),
            326 => 
            array (
                'id' => 1327,
                'parent_id' => 156,
                'name' => '社旗县',
                'type' => 3,
            ),
            327 => 
            array (
                'id' => 1328,
                'parent_id' => 156,
                'name' => '唐河县',
                'type' => 3,
            ),
            328 => 
            array (
                'id' => 1329,
                'parent_id' => 156,
                'name' => '新野县',
                'type' => 3,
            ),
            329 => 
            array (
                'id' => 1330,
                'parent_id' => 156,
                'name' => '桐柏县',
                'type' => 3,
            ),
            330 => 
            array (
                'id' => 1331,
                'parent_id' => 157,
                'name' => '新华区',
                'type' => 3,
            ),
            331 => 
            array (
                'id' => 1332,
                'parent_id' => 157,
                'name' => '卫东区',
                'type' => 3,
            ),
            332 => 
            array (
                'id' => 1333,
                'parent_id' => 157,
                'name' => '湛河区',
                'type' => 3,
            ),
            333 => 
            array (
                'id' => 1334,
                'parent_id' => 157,
                'name' => '石龙区',
                'type' => 3,
            ),
            334 => 
            array (
                'id' => 1335,
                'parent_id' => 157,
                'name' => '舞钢市',
                'type' => 3,
            ),
            335 => 
            array (
                'id' => 1336,
                'parent_id' => 157,
                'name' => '汝州市',
                'type' => 3,
            ),
            336 => 
            array (
                'id' => 1337,
                'parent_id' => 157,
                'name' => '宝丰县',
                'type' => 3,
            ),
            337 => 
            array (
                'id' => 1338,
                'parent_id' => 157,
                'name' => '叶县',
                'type' => 3,
            ),
            338 => 
            array (
                'id' => 1339,
                'parent_id' => 157,
                'name' => '鲁山县',
                'type' => 3,
            ),
            339 => 
            array (
                'id' => 1340,
                'parent_id' => 157,
                'name' => '郏县',
                'type' => 3,
            ),
            340 => 
            array (
                'id' => 1341,
                'parent_id' => 158,
                'name' => '湖滨区',
                'type' => 3,
            ),
            341 => 
            array (
                'id' => 1342,
                'parent_id' => 158,
                'name' => '义马市',
                'type' => 3,
            ),
            342 => 
            array (
                'id' => 1343,
                'parent_id' => 158,
                'name' => '灵宝市',
                'type' => 3,
            ),
            343 => 
            array (
                'id' => 1344,
                'parent_id' => 158,
                'name' => '渑池县',
                'type' => 3,
            ),
            344 => 
            array (
                'id' => 1345,
                'parent_id' => 158,
                'name' => '陕县',
                'type' => 3,
            ),
            345 => 
            array (
                'id' => 1346,
                'parent_id' => 158,
                'name' => '卢氏县',
                'type' => 3,
            ),
            346 => 
            array (
                'id' => 1347,
                'parent_id' => 159,
                'name' => '梁园区',
                'type' => 3,
            ),
            347 => 
            array (
                'id' => 1348,
                'parent_id' => 159,
                'name' => '睢阳区',
                'type' => 3,
            ),
            348 => 
            array (
                'id' => 1349,
                'parent_id' => 159,
                'name' => '永城市',
                'type' => 3,
            ),
            349 => 
            array (
                'id' => 1350,
                'parent_id' => 159,
                'name' => '民权县',
                'type' => 3,
            ),
            350 => 
            array (
                'id' => 1351,
                'parent_id' => 159,
                'name' => '睢县',
                'type' => 3,
            ),
            351 => 
            array (
                'id' => 1352,
                'parent_id' => 159,
                'name' => '宁陵县',
                'type' => 3,
            ),
            352 => 
            array (
                'id' => 1353,
                'parent_id' => 159,
                'name' => '虞城县',
                'type' => 3,
            ),
            353 => 
            array (
                'id' => 1354,
                'parent_id' => 159,
                'name' => '柘城县',
                'type' => 3,
            ),
            354 => 
            array (
                'id' => 1355,
                'parent_id' => 159,
                'name' => '夏邑县',
                'type' => 3,
            ),
            355 => 
            array (
                'id' => 1356,
                'parent_id' => 160,
                'name' => '卫滨区',
                'type' => 3,
            ),
            356 => 
            array (
                'id' => 1357,
                'parent_id' => 160,
                'name' => '红旗区',
                'type' => 3,
            ),
            357 => 
            array (
                'id' => 1358,
                'parent_id' => 160,
                'name' => '凤泉区',
                'type' => 3,
            ),
            358 => 
            array (
                'id' => 1359,
                'parent_id' => 160,
                'name' => '牧野区',
                'type' => 3,
            ),
            359 => 
            array (
                'id' => 1360,
                'parent_id' => 160,
                'name' => '卫辉市',
                'type' => 3,
            ),
            360 => 
            array (
                'id' => 1361,
                'parent_id' => 160,
                'name' => '辉县市',
                'type' => 3,
            ),
            361 => 
            array (
                'id' => 1362,
                'parent_id' => 160,
                'name' => '新乡县',
                'type' => 3,
            ),
            362 => 
            array (
                'id' => 1363,
                'parent_id' => 160,
                'name' => '获嘉县',
                'type' => 3,
            ),
            363 => 
            array (
                'id' => 1364,
                'parent_id' => 160,
                'name' => '原阳县',
                'type' => 3,
            ),
            364 => 
            array (
                'id' => 1365,
                'parent_id' => 160,
                'name' => '延津县',
                'type' => 3,
            ),
            365 => 
            array (
                'id' => 1366,
                'parent_id' => 160,
                'name' => '封丘县',
                'type' => 3,
            ),
            366 => 
            array (
                'id' => 1367,
                'parent_id' => 160,
                'name' => '长垣县',
                'type' => 3,
            ),
            367 => 
            array (
                'id' => 1368,
                'parent_id' => 161,
                'name' => '浉河区',
                'type' => 3,
            ),
            368 => 
            array (
                'id' => 1369,
                'parent_id' => 161,
                'name' => '平桥区',
                'type' => 3,
            ),
            369 => 
            array (
                'id' => 1370,
                'parent_id' => 161,
                'name' => '罗山县',
                'type' => 3,
            ),
            370 => 
            array (
                'id' => 1371,
                'parent_id' => 161,
                'name' => '光山县',
                'type' => 3,
            ),
            371 => 
            array (
                'id' => 1372,
                'parent_id' => 161,
                'name' => '新县',
                'type' => 3,
            ),
            372 => 
            array (
                'id' => 1373,
                'parent_id' => 161,
                'name' => '商城县',
                'type' => 3,
            ),
            373 => 
            array (
                'id' => 1374,
                'parent_id' => 161,
                'name' => '固始县',
                'type' => 3,
            ),
            374 => 
            array (
                'id' => 1375,
                'parent_id' => 161,
                'name' => '潢川县',
                'type' => 3,
            ),
            375 => 
            array (
                'id' => 1376,
                'parent_id' => 161,
                'name' => '淮滨县',
                'type' => 3,
            ),
            376 => 
            array (
                'id' => 1377,
                'parent_id' => 161,
                'name' => '息县',
                'type' => 3,
            ),
            377 => 
            array (
                'id' => 1378,
                'parent_id' => 162,
                'name' => '魏都区',
                'type' => 3,
            ),
            378 => 
            array (
                'id' => 1379,
                'parent_id' => 162,
                'name' => '禹州市',
                'type' => 3,
            ),
            379 => 
            array (
                'id' => 1380,
                'parent_id' => 162,
                'name' => '长葛市',
                'type' => 3,
            ),
            380 => 
            array (
                'id' => 1381,
                'parent_id' => 162,
                'name' => '许昌县',
                'type' => 3,
            ),
            381 => 
            array (
                'id' => 1382,
                'parent_id' => 162,
                'name' => '鄢陵县',
                'type' => 3,
            ),
            382 => 
            array (
                'id' => 1383,
                'parent_id' => 162,
                'name' => '襄城县',
                'type' => 3,
            ),
            383 => 
            array (
                'id' => 1384,
                'parent_id' => 163,
                'name' => '川汇区',
                'type' => 3,
            ),
            384 => 
            array (
                'id' => 1385,
                'parent_id' => 163,
                'name' => '项城市',
                'type' => 3,
            ),
            385 => 
            array (
                'id' => 1386,
                'parent_id' => 163,
                'name' => '扶沟县',
                'type' => 3,
            ),
            386 => 
            array (
                'id' => 1387,
                'parent_id' => 163,
                'name' => '西华县',
                'type' => 3,
            ),
            387 => 
            array (
                'id' => 1388,
                'parent_id' => 163,
                'name' => '商水县',
                'type' => 3,
            ),
            388 => 
            array (
                'id' => 1389,
                'parent_id' => 163,
                'name' => '沈丘县',
                'type' => 3,
            ),
            389 => 
            array (
                'id' => 1390,
                'parent_id' => 163,
                'name' => '郸城县',
                'type' => 3,
            ),
            390 => 
            array (
                'id' => 1391,
                'parent_id' => 163,
                'name' => '淮阳县',
                'type' => 3,
            ),
            391 => 
            array (
                'id' => 1392,
                'parent_id' => 163,
                'name' => '太康县',
                'type' => 3,
            ),
            392 => 
            array (
                'id' => 1393,
                'parent_id' => 163,
                'name' => '鹿邑县',
                'type' => 3,
            ),
            393 => 
            array (
                'id' => 1394,
                'parent_id' => 164,
                'name' => '驿城区',
                'type' => 3,
            ),
            394 => 
            array (
                'id' => 1395,
                'parent_id' => 164,
                'name' => '西平县',
                'type' => 3,
            ),
            395 => 
            array (
                'id' => 1396,
                'parent_id' => 164,
                'name' => '上蔡县',
                'type' => 3,
            ),
            396 => 
            array (
                'id' => 1397,
                'parent_id' => 164,
                'name' => '平舆县',
                'type' => 3,
            ),
            397 => 
            array (
                'id' => 1398,
                'parent_id' => 164,
                'name' => '正阳县',
                'type' => 3,
            ),
            398 => 
            array (
                'id' => 1399,
                'parent_id' => 164,
                'name' => '确山县',
                'type' => 3,
            ),
            399 => 
            array (
                'id' => 1400,
                'parent_id' => 164,
                'name' => '泌阳县',
                'type' => 3,
            ),
            400 => 
            array (
                'id' => 1401,
                'parent_id' => 164,
                'name' => '汝南县',
                'type' => 3,
            ),
            401 => 
            array (
                'id' => 1402,
                'parent_id' => 164,
                'name' => '遂平县',
                'type' => 3,
            ),
            402 => 
            array (
                'id' => 1403,
                'parent_id' => 164,
                'name' => '新蔡县',
                'type' => 3,
            ),
            403 => 
            array (
                'id' => 1404,
                'parent_id' => 165,
                'name' => '郾城区',
                'type' => 3,
            ),
            404 => 
            array (
                'id' => 1405,
                'parent_id' => 165,
                'name' => '源汇区',
                'type' => 3,
            ),
            405 => 
            array (
                'id' => 1406,
                'parent_id' => 165,
                'name' => '召陵区',
                'type' => 3,
            ),
            406 => 
            array (
                'id' => 1407,
                'parent_id' => 165,
                'name' => '舞阳县',
                'type' => 3,
            ),
            407 => 
            array (
                'id' => 1408,
                'parent_id' => 165,
                'name' => '临颍县',
                'type' => 3,
            ),
            408 => 
            array (
                'id' => 1409,
                'parent_id' => 166,
                'name' => '华龙区',
                'type' => 3,
            ),
            409 => 
            array (
                'id' => 1410,
                'parent_id' => 166,
                'name' => '清丰县',
                'type' => 3,
            ),
            410 => 
            array (
                'id' => 1411,
                'parent_id' => 166,
                'name' => '南乐县',
                'type' => 3,
            ),
            411 => 
            array (
                'id' => 1412,
                'parent_id' => 166,
                'name' => '范县',
                'type' => 3,
            ),
            412 => 
            array (
                'id' => 1413,
                'parent_id' => 166,
                'name' => '台前县',
                'type' => 3,
            ),
            413 => 
            array (
                'id' => 1414,
                'parent_id' => 166,
                'name' => '濮阳县',
                'type' => 3,
            ),
            414 => 
            array (
                'id' => 1415,
                'parent_id' => 167,
                'name' => '道里区',
                'type' => 3,
            ),
            415 => 
            array (
                'id' => 1416,
                'parent_id' => 167,
                'name' => '南岗区',
                'type' => 3,
            ),
            416 => 
            array (
                'id' => 1417,
                'parent_id' => 167,
                'name' => '动力区',
                'type' => 3,
            ),
            417 => 
            array (
                'id' => 1418,
                'parent_id' => 167,
                'name' => '平房区',
                'type' => 3,
            ),
            418 => 
            array (
                'id' => 1419,
                'parent_id' => 167,
                'name' => '香坊区',
                'type' => 3,
            ),
            419 => 
            array (
                'id' => 1420,
                'parent_id' => 167,
                'name' => '太平区',
                'type' => 3,
            ),
            420 => 
            array (
                'id' => 1421,
                'parent_id' => 167,
                'name' => '道外区',
                'type' => 3,
            ),
            421 => 
            array (
                'id' => 1422,
                'parent_id' => 167,
                'name' => '阿城区',
                'type' => 3,
            ),
            422 => 
            array (
                'id' => 1423,
                'parent_id' => 167,
                'name' => '呼兰区',
                'type' => 3,
            ),
            423 => 
            array (
                'id' => 1424,
                'parent_id' => 167,
                'name' => '松北区',
                'type' => 3,
            ),
            424 => 
            array (
                'id' => 1425,
                'parent_id' => 167,
                'name' => '尚志市',
                'type' => 3,
            ),
            425 => 
            array (
                'id' => 1426,
                'parent_id' => 167,
                'name' => '双城市',
                'type' => 3,
            ),
            426 => 
            array (
                'id' => 1427,
                'parent_id' => 167,
                'name' => '五常市',
                'type' => 3,
            ),
            427 => 
            array (
                'id' => 1428,
                'parent_id' => 167,
                'name' => '方正县',
                'type' => 3,
            ),
            428 => 
            array (
                'id' => 1429,
                'parent_id' => 167,
                'name' => '宾县',
                'type' => 3,
            ),
            429 => 
            array (
                'id' => 1430,
                'parent_id' => 167,
                'name' => '依兰县',
                'type' => 3,
            ),
            430 => 
            array (
                'id' => 1431,
                'parent_id' => 167,
                'name' => '巴彦县',
                'type' => 3,
            ),
            431 => 
            array (
                'id' => 1432,
                'parent_id' => 167,
                'name' => '通河县',
                'type' => 3,
            ),
            432 => 
            array (
                'id' => 1433,
                'parent_id' => 167,
                'name' => '木兰县',
                'type' => 3,
            ),
            433 => 
            array (
                'id' => 1434,
                'parent_id' => 167,
                'name' => '延寿县',
                'type' => 3,
            ),
            434 => 
            array (
                'id' => 1435,
                'parent_id' => 168,
                'name' => '萨尔图区',
                'type' => 3,
            ),
            435 => 
            array (
                'id' => 1436,
                'parent_id' => 168,
                'name' => '红岗区',
                'type' => 3,
            ),
            436 => 
            array (
                'id' => 1437,
                'parent_id' => 168,
                'name' => '龙凤区',
                'type' => 3,
            ),
            437 => 
            array (
                'id' => 1438,
                'parent_id' => 168,
                'name' => '让胡路区',
                'type' => 3,
            ),
            438 => 
            array (
                'id' => 1439,
                'parent_id' => 168,
                'name' => '大同区',
                'type' => 3,
            ),
            439 => 
            array (
                'id' => 1440,
                'parent_id' => 168,
                'name' => '肇州县',
                'type' => 3,
            ),
            440 => 
            array (
                'id' => 1441,
                'parent_id' => 168,
                'name' => '肇源县',
                'type' => 3,
            ),
            441 => 
            array (
                'id' => 1442,
                'parent_id' => 168,
                'name' => '林甸县',
                'type' => 3,
            ),
            442 => 
            array (
                'id' => 1443,
                'parent_id' => 168,
                'name' => '杜尔伯特',
                'type' => 3,
            ),
            443 => 
            array (
                'id' => 1444,
                'parent_id' => 169,
                'name' => '呼玛县',
                'type' => 3,
            ),
            444 => 
            array (
                'id' => 1445,
                'parent_id' => 169,
                'name' => '漠河县',
                'type' => 3,
            ),
            445 => 
            array (
                'id' => 1446,
                'parent_id' => 169,
                'name' => '塔河县',
                'type' => 3,
            ),
            446 => 
            array (
                'id' => 1447,
                'parent_id' => 170,
                'name' => '兴山区',
                'type' => 3,
            ),
            447 => 
            array (
                'id' => 1448,
                'parent_id' => 170,
                'name' => '工农区',
                'type' => 3,
            ),
            448 => 
            array (
                'id' => 1449,
                'parent_id' => 170,
                'name' => '南山区',
                'type' => 3,
            ),
            449 => 
            array (
                'id' => 1450,
                'parent_id' => 170,
                'name' => '兴安区',
                'type' => 3,
            ),
            450 => 
            array (
                'id' => 1451,
                'parent_id' => 170,
                'name' => '向阳区',
                'type' => 3,
            ),
            451 => 
            array (
                'id' => 1452,
                'parent_id' => 170,
                'name' => '东山区',
                'type' => 3,
            ),
            452 => 
            array (
                'id' => 1453,
                'parent_id' => 170,
                'name' => '萝北县',
                'type' => 3,
            ),
            453 => 
            array (
                'id' => 1454,
                'parent_id' => 170,
                'name' => '绥滨县',
                'type' => 3,
            ),
            454 => 
            array (
                'id' => 1455,
                'parent_id' => 171,
                'name' => '爱辉区',
                'type' => 3,
            ),
            455 => 
            array (
                'id' => 1456,
                'parent_id' => 171,
                'name' => '五大连池市',
                'type' => 3,
            ),
            456 => 
            array (
                'id' => 1457,
                'parent_id' => 171,
                'name' => '北安市',
                'type' => 3,
            ),
            457 => 
            array (
                'id' => 1458,
                'parent_id' => 171,
                'name' => '嫩江县',
                'type' => 3,
            ),
            458 => 
            array (
                'id' => 1459,
                'parent_id' => 171,
                'name' => '逊克县',
                'type' => 3,
            ),
            459 => 
            array (
                'id' => 1460,
                'parent_id' => 171,
                'name' => '孙吴县',
                'type' => 3,
            ),
            460 => 
            array (
                'id' => 1461,
                'parent_id' => 172,
                'name' => '鸡冠区',
                'type' => 3,
            ),
            461 => 
            array (
                'id' => 1462,
                'parent_id' => 172,
                'name' => '恒山区',
                'type' => 3,
            ),
            462 => 
            array (
                'id' => 1463,
                'parent_id' => 172,
                'name' => '城子河区',
                'type' => 3,
            ),
            463 => 
            array (
                'id' => 1464,
                'parent_id' => 172,
                'name' => '滴道区',
                'type' => 3,
            ),
            464 => 
            array (
                'id' => 1465,
                'parent_id' => 172,
                'name' => '梨树区',
                'type' => 3,
            ),
            465 => 
            array (
                'id' => 1466,
                'parent_id' => 172,
                'name' => '虎林市',
                'type' => 3,
            ),
            466 => 
            array (
                'id' => 1467,
                'parent_id' => 172,
                'name' => '密山市',
                'type' => 3,
            ),
            467 => 
            array (
                'id' => 1468,
                'parent_id' => 172,
                'name' => '鸡东县',
                'type' => 3,
            ),
            468 => 
            array (
                'id' => 1469,
                'parent_id' => 173,
                'name' => '前进区',
                'type' => 3,
            ),
            469 => 
            array (
                'id' => 1470,
                'parent_id' => 173,
                'name' => '郊区',
                'type' => 3,
            ),
            470 => 
            array (
                'id' => 1471,
                'parent_id' => 173,
                'name' => '向阳区',
                'type' => 3,
            ),
            471 => 
            array (
                'id' => 1472,
                'parent_id' => 173,
                'name' => '东风区',
                'type' => 3,
            ),
            472 => 
            array (
                'id' => 1473,
                'parent_id' => 173,
                'name' => '同江市',
                'type' => 3,
            ),
            473 => 
            array (
                'id' => 1474,
                'parent_id' => 173,
                'name' => '富锦市',
                'type' => 3,
            ),
            474 => 
            array (
                'id' => 1475,
                'parent_id' => 173,
                'name' => '桦南县',
                'type' => 3,
            ),
            475 => 
            array (
                'id' => 1476,
                'parent_id' => 173,
                'name' => '桦川县',
                'type' => 3,
            ),
            476 => 
            array (
                'id' => 1477,
                'parent_id' => 173,
                'name' => '汤原县',
                'type' => 3,
            ),
            477 => 
            array (
                'id' => 1478,
                'parent_id' => 173,
                'name' => '抚远县',
                'type' => 3,
            ),
            478 => 
            array (
                'id' => 1479,
                'parent_id' => 174,
                'name' => '爱民区',
                'type' => 3,
            ),
            479 => 
            array (
                'id' => 1480,
                'parent_id' => 174,
                'name' => '东安区',
                'type' => 3,
            ),
            480 => 
            array (
                'id' => 1481,
                'parent_id' => 174,
                'name' => '阳明区',
                'type' => 3,
            ),
            481 => 
            array (
                'id' => 1482,
                'parent_id' => 174,
                'name' => '西安区',
                'type' => 3,
            ),
            482 => 
            array (
                'id' => 1483,
                'parent_id' => 174,
                'name' => '绥芬河市',
                'type' => 3,
            ),
            483 => 
            array (
                'id' => 1484,
                'parent_id' => 174,
                'name' => '海林市',
                'type' => 3,
            ),
            484 => 
            array (
                'id' => 1485,
                'parent_id' => 174,
                'name' => '宁安市',
                'type' => 3,
            ),
            485 => 
            array (
                'id' => 1486,
                'parent_id' => 174,
                'name' => '穆棱市',
                'type' => 3,
            ),
            486 => 
            array (
                'id' => 1487,
                'parent_id' => 174,
                'name' => '东宁县',
                'type' => 3,
            ),
            487 => 
            array (
                'id' => 1488,
                'parent_id' => 174,
                'name' => '林口县',
                'type' => 3,
            ),
            488 => 
            array (
                'id' => 1489,
                'parent_id' => 175,
                'name' => '桃山区',
                'type' => 3,
            ),
            489 => 
            array (
                'id' => 1490,
                'parent_id' => 175,
                'name' => '新兴区',
                'type' => 3,
            ),
            490 => 
            array (
                'id' => 1491,
                'parent_id' => 175,
                'name' => '茄子河区',
                'type' => 3,
            ),
            491 => 
            array (
                'id' => 1492,
                'parent_id' => 175,
                'name' => '勃利县',
                'type' => 3,
            ),
            492 => 
            array (
                'id' => 1493,
                'parent_id' => 176,
                'name' => '龙沙区',
                'type' => 3,
            ),
            493 => 
            array (
                'id' => 1494,
                'parent_id' => 176,
                'name' => '昂昂溪区',
                'type' => 3,
            ),
            494 => 
            array (
                'id' => 1495,
                'parent_id' => 176,
                'name' => '铁峰区',
                'type' => 3,
            ),
            495 => 
            array (
                'id' => 1496,
                'parent_id' => 176,
                'name' => '建华区',
                'type' => 3,
            ),
            496 => 
            array (
                'id' => 1497,
                'parent_id' => 176,
                'name' => '富拉尔基区',
                'type' => 3,
            ),
            497 => 
            array (
                'id' => 1498,
                'parent_id' => 176,
                'name' => '碾子山区',
                'type' => 3,
            ),
            498 => 
            array (
                'id' => 1499,
                'parent_id' => 176,
                'name' => '梅里斯达斡尔区',
                'type' => 3,
            ),
            499 => 
            array (
                'id' => 1500,
                'parent_id' => 176,
                'name' => '讷河市',
                'type' => 3,
            ),
        ));
        \DB::table('china_area')->insert(array (
            0 => 
            array (
                'id' => 1501,
                'parent_id' => 176,
                'name' => '龙江县',
                'type' => 3,
            ),
            1 => 
            array (
                'id' => 1502,
                'parent_id' => 176,
                'name' => '依安县',
                'type' => 3,
            ),
            2 => 
            array (
                'id' => 1503,
                'parent_id' => 176,
                'name' => '泰来县',
                'type' => 3,
            ),
            3 => 
            array (
                'id' => 1504,
                'parent_id' => 176,
                'name' => '甘南县',
                'type' => 3,
            ),
            4 => 
            array (
                'id' => 1505,
                'parent_id' => 176,
                'name' => '富裕县',
                'type' => 3,
            ),
            5 => 
            array (
                'id' => 1506,
                'parent_id' => 176,
                'name' => '克山县',
                'type' => 3,
            ),
            6 => 
            array (
                'id' => 1507,
                'parent_id' => 176,
                'name' => '克东县',
                'type' => 3,
            ),
            7 => 
            array (
                'id' => 1508,
                'parent_id' => 176,
                'name' => '拜泉县',
                'type' => 3,
            ),
            8 => 
            array (
                'id' => 1509,
                'parent_id' => 177,
                'name' => '尖山区',
                'type' => 3,
            ),
            9 => 
            array (
                'id' => 1510,
                'parent_id' => 177,
                'name' => '岭东区',
                'type' => 3,
            ),
            10 => 
            array (
                'id' => 1511,
                'parent_id' => 177,
                'name' => '四方台区',
                'type' => 3,
            ),
            11 => 
            array (
                'id' => 1512,
                'parent_id' => 177,
                'name' => '宝山区',
                'type' => 3,
            ),
            12 => 
            array (
                'id' => 1513,
                'parent_id' => 177,
                'name' => '集贤县',
                'type' => 3,
            ),
            13 => 
            array (
                'id' => 1514,
                'parent_id' => 177,
                'name' => '友谊县',
                'type' => 3,
            ),
            14 => 
            array (
                'id' => 1515,
                'parent_id' => 177,
                'name' => '宝清县',
                'type' => 3,
            ),
            15 => 
            array (
                'id' => 1516,
                'parent_id' => 177,
                'name' => '饶河县',
                'type' => 3,
            ),
            16 => 
            array (
                'id' => 1517,
                'parent_id' => 178,
                'name' => '北林区',
                'type' => 3,
            ),
            17 => 
            array (
                'id' => 1518,
                'parent_id' => 178,
                'name' => '安达市',
                'type' => 3,
            ),
            18 => 
            array (
                'id' => 1519,
                'parent_id' => 178,
                'name' => '肇东市',
                'type' => 3,
            ),
            19 => 
            array (
                'id' => 1520,
                'parent_id' => 178,
                'name' => '海伦市',
                'type' => 3,
            ),
            20 => 
            array (
                'id' => 1521,
                'parent_id' => 178,
                'name' => '望奎县',
                'type' => 3,
            ),
            21 => 
            array (
                'id' => 1522,
                'parent_id' => 178,
                'name' => '兰西县',
                'type' => 3,
            ),
            22 => 
            array (
                'id' => 1523,
                'parent_id' => 178,
                'name' => '青冈县',
                'type' => 3,
            ),
            23 => 
            array (
                'id' => 1524,
                'parent_id' => 178,
                'name' => '庆安县',
                'type' => 3,
            ),
            24 => 
            array (
                'id' => 1525,
                'parent_id' => 178,
                'name' => '明水县',
                'type' => 3,
            ),
            25 => 
            array (
                'id' => 1526,
                'parent_id' => 178,
                'name' => '绥棱县',
                'type' => 3,
            ),
            26 => 
            array (
                'id' => 1527,
                'parent_id' => 179,
                'name' => '伊春区',
                'type' => 3,
            ),
            27 => 
            array (
                'id' => 1528,
                'parent_id' => 179,
                'name' => '带岭区',
                'type' => 3,
            ),
            28 => 
            array (
                'id' => 1529,
                'parent_id' => 179,
                'name' => '南岔区',
                'type' => 3,
            ),
            29 => 
            array (
                'id' => 1530,
                'parent_id' => 179,
                'name' => '金山屯区',
                'type' => 3,
            ),
            30 => 
            array (
                'id' => 1531,
                'parent_id' => 179,
                'name' => '西林区',
                'type' => 3,
            ),
            31 => 
            array (
                'id' => 1532,
                'parent_id' => 179,
                'name' => '美溪区',
                'type' => 3,
            ),
            32 => 
            array (
                'id' => 1533,
                'parent_id' => 179,
                'name' => '乌马河区',
                'type' => 3,
            ),
            33 => 
            array (
                'id' => 1534,
                'parent_id' => 179,
                'name' => '翠峦区',
                'type' => 3,
            ),
            34 => 
            array (
                'id' => 1535,
                'parent_id' => 179,
                'name' => '友好区',
                'type' => 3,
            ),
            35 => 
            array (
                'id' => 1536,
                'parent_id' => 179,
                'name' => '上甘岭区',
                'type' => 3,
            ),
            36 => 
            array (
                'id' => 1537,
                'parent_id' => 179,
                'name' => '五营区',
                'type' => 3,
            ),
            37 => 
            array (
                'id' => 1538,
                'parent_id' => 179,
                'name' => '红星区',
                'type' => 3,
            ),
            38 => 
            array (
                'id' => 1539,
                'parent_id' => 179,
                'name' => '新青区',
                'type' => 3,
            ),
            39 => 
            array (
                'id' => 1540,
                'parent_id' => 179,
                'name' => '汤旺河区',
                'type' => 3,
            ),
            40 => 
            array (
                'id' => 1541,
                'parent_id' => 179,
                'name' => '乌伊岭区',
                'type' => 3,
            ),
            41 => 
            array (
                'id' => 1542,
                'parent_id' => 179,
                'name' => '铁力市',
                'type' => 3,
            ),
            42 => 
            array (
                'id' => 1543,
                'parent_id' => 179,
                'name' => '嘉荫县',
                'type' => 3,
            ),
            43 => 
            array (
                'id' => 1544,
                'parent_id' => 180,
                'name' => '江岸区',
                'type' => 3,
            ),
            44 => 
            array (
                'id' => 1545,
                'parent_id' => 180,
                'name' => '武昌区',
                'type' => 3,
            ),
            45 => 
            array (
                'id' => 1546,
                'parent_id' => 180,
                'name' => '江汉区',
                'type' => 3,
            ),
            46 => 
            array (
                'id' => 1547,
                'parent_id' => 180,
                'name' => '硚口区',
                'type' => 3,
            ),
            47 => 
            array (
                'id' => 1548,
                'parent_id' => 180,
                'name' => '汉阳区',
                'type' => 3,
            ),
            48 => 
            array (
                'id' => 1549,
                'parent_id' => 180,
                'name' => '青山区',
                'type' => 3,
            ),
            49 => 
            array (
                'id' => 1550,
                'parent_id' => 180,
                'name' => '洪山区',
                'type' => 3,
            ),
            50 => 
            array (
                'id' => 1551,
                'parent_id' => 180,
                'name' => '东西湖区',
                'type' => 3,
            ),
            51 => 
            array (
                'id' => 1552,
                'parent_id' => 180,
                'name' => '汉南区',
                'type' => 3,
            ),
            52 => 
            array (
                'id' => 1553,
                'parent_id' => 180,
                'name' => '蔡甸区',
                'type' => 3,
            ),
            53 => 
            array (
                'id' => 1554,
                'parent_id' => 180,
                'name' => '江夏区',
                'type' => 3,
            ),
            54 => 
            array (
                'id' => 1555,
                'parent_id' => 180,
                'name' => '黄陂区',
                'type' => 3,
            ),
            55 => 
            array (
                'id' => 1556,
                'parent_id' => 180,
                'name' => '新洲区',
                'type' => 3,
            ),
            56 => 
            array (
                'id' => 1557,
                'parent_id' => 180,
                'name' => '经济开发区',
                'type' => 3,
            ),
            57 => 
            array (
                'id' => 1558,
                'parent_id' => 181,
                'name' => '仙桃市',
                'type' => 3,
            ),
            58 => 
            array (
                'id' => 1559,
                'parent_id' => 182,
                'name' => '鄂城区',
                'type' => 3,
            ),
            59 => 
            array (
                'id' => 1560,
                'parent_id' => 182,
                'name' => '华容区',
                'type' => 3,
            ),
            60 => 
            array (
                'id' => 1561,
                'parent_id' => 182,
                'name' => '梁子湖区',
                'type' => 3,
            ),
            61 => 
            array (
                'id' => 1562,
                'parent_id' => 183,
                'name' => '黄州区',
                'type' => 3,
            ),
            62 => 
            array (
                'id' => 1563,
                'parent_id' => 183,
                'name' => '麻城市',
                'type' => 3,
            ),
            63 => 
            array (
                'id' => 1564,
                'parent_id' => 183,
                'name' => '武穴市',
                'type' => 3,
            ),
            64 => 
            array (
                'id' => 1565,
                'parent_id' => 183,
                'name' => '团风县',
                'type' => 3,
            ),
            65 => 
            array (
                'id' => 1566,
                'parent_id' => 183,
                'name' => '红安县',
                'type' => 3,
            ),
            66 => 
            array (
                'id' => 1567,
                'parent_id' => 183,
                'name' => '罗田县',
                'type' => 3,
            ),
            67 => 
            array (
                'id' => 1568,
                'parent_id' => 183,
                'name' => '英山县',
                'type' => 3,
            ),
            68 => 
            array (
                'id' => 1569,
                'parent_id' => 183,
                'name' => '浠水县',
                'type' => 3,
            ),
            69 => 
            array (
                'id' => 1570,
                'parent_id' => 183,
                'name' => '蕲春县',
                'type' => 3,
            ),
            70 => 
            array (
                'id' => 1571,
                'parent_id' => 183,
                'name' => '黄梅县',
                'type' => 3,
            ),
            71 => 
            array (
                'id' => 1572,
                'parent_id' => 184,
                'name' => '黄石港区',
                'type' => 3,
            ),
            72 => 
            array (
                'id' => 1573,
                'parent_id' => 184,
                'name' => '西塞山区',
                'type' => 3,
            ),
            73 => 
            array (
                'id' => 1574,
                'parent_id' => 184,
                'name' => '下陆区',
                'type' => 3,
            ),
            74 => 
            array (
                'id' => 1575,
                'parent_id' => 184,
                'name' => '铁山区',
                'type' => 3,
            ),
            75 => 
            array (
                'id' => 1576,
                'parent_id' => 184,
                'name' => '大冶市',
                'type' => 3,
            ),
            76 => 
            array (
                'id' => 1577,
                'parent_id' => 184,
                'name' => '阳新县',
                'type' => 3,
            ),
            77 => 
            array (
                'id' => 1578,
                'parent_id' => 185,
                'name' => '东宝区',
                'type' => 3,
            ),
            78 => 
            array (
                'id' => 1579,
                'parent_id' => 185,
                'name' => '掇刀区',
                'type' => 3,
            ),
            79 => 
            array (
                'id' => 1580,
                'parent_id' => 185,
                'name' => '钟祥市',
                'type' => 3,
            ),
            80 => 
            array (
                'id' => 1581,
                'parent_id' => 185,
                'name' => '京山县',
                'type' => 3,
            ),
            81 => 
            array (
                'id' => 1582,
                'parent_id' => 185,
                'name' => '沙洋县',
                'type' => 3,
            ),
            82 => 
            array (
                'id' => 1583,
                'parent_id' => 186,
                'name' => '沙市区',
                'type' => 3,
            ),
            83 => 
            array (
                'id' => 1584,
                'parent_id' => 186,
                'name' => '荆州区',
                'type' => 3,
            ),
            84 => 
            array (
                'id' => 1585,
                'parent_id' => 186,
                'name' => '石首市',
                'type' => 3,
            ),
            85 => 
            array (
                'id' => 1586,
                'parent_id' => 186,
                'name' => '洪湖市',
                'type' => 3,
            ),
            86 => 
            array (
                'id' => 1587,
                'parent_id' => 186,
                'name' => '松滋市',
                'type' => 3,
            ),
            87 => 
            array (
                'id' => 1588,
                'parent_id' => 186,
                'name' => '公安县',
                'type' => 3,
            ),
            88 => 
            array (
                'id' => 1589,
                'parent_id' => 186,
                'name' => '监利县',
                'type' => 3,
            ),
            89 => 
            array (
                'id' => 1590,
                'parent_id' => 186,
                'name' => '江陵县',
                'type' => 3,
            ),
            90 => 
            array (
                'id' => 1591,
                'parent_id' => 187,
                'name' => '潜江市',
                'type' => 3,
            ),
            91 => 
            array (
                'id' => 1592,
                'parent_id' => 188,
                'name' => '神农架林区',
                'type' => 3,
            ),
            92 => 
            array (
                'id' => 1593,
                'parent_id' => 189,
                'name' => '张湾区',
                'type' => 3,
            ),
            93 => 
            array (
                'id' => 1594,
                'parent_id' => 189,
                'name' => '茅箭区',
                'type' => 3,
            ),
            94 => 
            array (
                'id' => 1595,
                'parent_id' => 189,
                'name' => '丹江口市',
                'type' => 3,
            ),
            95 => 
            array (
                'id' => 1596,
                'parent_id' => 189,
                'name' => '郧县',
                'type' => 3,
            ),
            96 => 
            array (
                'id' => 1597,
                'parent_id' => 189,
                'name' => '郧西县',
                'type' => 3,
            ),
            97 => 
            array (
                'id' => 1598,
                'parent_id' => 189,
                'name' => '竹山县',
                'type' => 3,
            ),
            98 => 
            array (
                'id' => 1599,
                'parent_id' => 189,
                'name' => '竹溪县',
                'type' => 3,
            ),
            99 => 
            array (
                'id' => 1600,
                'parent_id' => 189,
                'name' => '房县',
                'type' => 3,
            ),
            100 => 
            array (
                'id' => 1601,
                'parent_id' => 190,
                'name' => '曾都区',
                'type' => 3,
            ),
            101 => 
            array (
                'id' => 1602,
                'parent_id' => 190,
                'name' => '广水市',
                'type' => 3,
            ),
            102 => 
            array (
                'id' => 1603,
                'parent_id' => 191,
                'name' => '天门市',
                'type' => 3,
            ),
            103 => 
            array (
                'id' => 1604,
                'parent_id' => 192,
                'name' => '咸安区',
                'type' => 3,
            ),
            104 => 
            array (
                'id' => 1605,
                'parent_id' => 192,
                'name' => '赤壁市',
                'type' => 3,
            ),
            105 => 
            array (
                'id' => 1606,
                'parent_id' => 192,
                'name' => '嘉鱼县',
                'type' => 3,
            ),
            106 => 
            array (
                'id' => 1607,
                'parent_id' => 192,
                'name' => '通城县',
                'type' => 3,
            ),
            107 => 
            array (
                'id' => 1608,
                'parent_id' => 192,
                'name' => '崇阳县',
                'type' => 3,
            ),
            108 => 
            array (
                'id' => 1609,
                'parent_id' => 192,
                'name' => '通山县',
                'type' => 3,
            ),
            109 => 
            array (
                'id' => 1610,
                'parent_id' => 193,
                'name' => '襄城区',
                'type' => 3,
            ),
            110 => 
            array (
                'id' => 1611,
                'parent_id' => 193,
                'name' => '樊城区',
                'type' => 3,
            ),
            111 => 
            array (
                'id' => 1612,
                'parent_id' => 193,
                'name' => '襄阳区',
                'type' => 3,
            ),
            112 => 
            array (
                'id' => 1613,
                'parent_id' => 193,
                'name' => '老河口市',
                'type' => 3,
            ),
            113 => 
            array (
                'id' => 1614,
                'parent_id' => 193,
                'name' => '枣阳市',
                'type' => 3,
            ),
            114 => 
            array (
                'id' => 1615,
                'parent_id' => 193,
                'name' => '宜城市',
                'type' => 3,
            ),
            115 => 
            array (
                'id' => 1616,
                'parent_id' => 193,
                'name' => '南漳县',
                'type' => 3,
            ),
            116 => 
            array (
                'id' => 1617,
                'parent_id' => 193,
                'name' => '谷城县',
                'type' => 3,
            ),
            117 => 
            array (
                'id' => 1618,
                'parent_id' => 193,
                'name' => '保康县',
                'type' => 3,
            ),
            118 => 
            array (
                'id' => 1619,
                'parent_id' => 194,
                'name' => '孝南区',
                'type' => 3,
            ),
            119 => 
            array (
                'id' => 1620,
                'parent_id' => 194,
                'name' => '应城市',
                'type' => 3,
            ),
            120 => 
            array (
                'id' => 1621,
                'parent_id' => 194,
                'name' => '安陆市',
                'type' => 3,
            ),
            121 => 
            array (
                'id' => 1622,
                'parent_id' => 194,
                'name' => '汉川市',
                'type' => 3,
            ),
            122 => 
            array (
                'id' => 1623,
                'parent_id' => 194,
                'name' => '孝昌县',
                'type' => 3,
            ),
            123 => 
            array (
                'id' => 1624,
                'parent_id' => 194,
                'name' => '大悟县',
                'type' => 3,
            ),
            124 => 
            array (
                'id' => 1625,
                'parent_id' => 194,
                'name' => '云梦县',
                'type' => 3,
            ),
            125 => 
            array (
                'id' => 1626,
                'parent_id' => 195,
                'name' => '长阳',
                'type' => 3,
            ),
            126 => 
            array (
                'id' => 1627,
                'parent_id' => 195,
                'name' => '五峰',
                'type' => 3,
            ),
            127 => 
            array (
                'id' => 1628,
                'parent_id' => 195,
                'name' => '西陵区',
                'type' => 3,
            ),
            128 => 
            array (
                'id' => 1629,
                'parent_id' => 195,
                'name' => '伍家岗区',
                'type' => 3,
            ),
            129 => 
            array (
                'id' => 1630,
                'parent_id' => 195,
                'name' => '点军区',
                'type' => 3,
            ),
            130 => 
            array (
                'id' => 1631,
                'parent_id' => 195,
                'name' => '猇亭区',
                'type' => 3,
            ),
            131 => 
            array (
                'id' => 1632,
                'parent_id' => 195,
                'name' => '夷陵区',
                'type' => 3,
            ),
            132 => 
            array (
                'id' => 1633,
                'parent_id' => 195,
                'name' => '宜都市',
                'type' => 3,
            ),
            133 => 
            array (
                'id' => 1634,
                'parent_id' => 195,
                'name' => '当阳市',
                'type' => 3,
            ),
            134 => 
            array (
                'id' => 1635,
                'parent_id' => 195,
                'name' => '枝江市',
                'type' => 3,
            ),
            135 => 
            array (
                'id' => 1636,
                'parent_id' => 195,
                'name' => '远安县',
                'type' => 3,
            ),
            136 => 
            array (
                'id' => 1637,
                'parent_id' => 195,
                'name' => '兴山县',
                'type' => 3,
            ),
            137 => 
            array (
                'id' => 1638,
                'parent_id' => 195,
                'name' => '秭归县',
                'type' => 3,
            ),
            138 => 
            array (
                'id' => 1639,
                'parent_id' => 196,
                'name' => '恩施市',
                'type' => 3,
            ),
            139 => 
            array (
                'id' => 1640,
                'parent_id' => 196,
                'name' => '利川市',
                'type' => 3,
            ),
            140 => 
            array (
                'id' => 1641,
                'parent_id' => 196,
                'name' => '建始县',
                'type' => 3,
            ),
            141 => 
            array (
                'id' => 1642,
                'parent_id' => 196,
                'name' => '巴东县',
                'type' => 3,
            ),
            142 => 
            array (
                'id' => 1643,
                'parent_id' => 196,
                'name' => '宣恩县',
                'type' => 3,
            ),
            143 => 
            array (
                'id' => 1644,
                'parent_id' => 196,
                'name' => '咸丰县',
                'type' => 3,
            ),
            144 => 
            array (
                'id' => 1645,
                'parent_id' => 196,
                'name' => '来凤县',
                'type' => 3,
            ),
            145 => 
            array (
                'id' => 1646,
                'parent_id' => 196,
                'name' => '鹤峰县',
                'type' => 3,
            ),
            146 => 
            array (
                'id' => 1647,
                'parent_id' => 197,
                'name' => '岳麓区',
                'type' => 3,
            ),
            147 => 
            array (
                'id' => 1648,
                'parent_id' => 197,
                'name' => '芙蓉区',
                'type' => 3,
            ),
            148 => 
            array (
                'id' => 1649,
                'parent_id' => 197,
                'name' => '天心区',
                'type' => 3,
            ),
            149 => 
            array (
                'id' => 1650,
                'parent_id' => 197,
                'name' => '开福区',
                'type' => 3,
            ),
            150 => 
            array (
                'id' => 1651,
                'parent_id' => 197,
                'name' => '雨花区',
                'type' => 3,
            ),
            151 => 
            array (
                'id' => 1652,
                'parent_id' => 197,
                'name' => '开发区',
                'type' => 3,
            ),
            152 => 
            array (
                'id' => 1653,
                'parent_id' => 197,
                'name' => '浏阳市',
                'type' => 3,
            ),
            153 => 
            array (
                'id' => 1654,
                'parent_id' => 197,
                'name' => '长沙县',
                'type' => 3,
            ),
            154 => 
            array (
                'id' => 1655,
                'parent_id' => 197,
                'name' => '望城县',
                'type' => 3,
            ),
            155 => 
            array (
                'id' => 1656,
                'parent_id' => 197,
                'name' => '宁乡县',
                'type' => 3,
            ),
            156 => 
            array (
                'id' => 1657,
                'parent_id' => 198,
                'name' => '永定区',
                'type' => 3,
            ),
            157 => 
            array (
                'id' => 1658,
                'parent_id' => 198,
                'name' => '武陵源区',
                'type' => 3,
            ),
            158 => 
            array (
                'id' => 1659,
                'parent_id' => 198,
                'name' => '慈利县',
                'type' => 3,
            ),
            159 => 
            array (
                'id' => 1660,
                'parent_id' => 198,
                'name' => '桑植县',
                'type' => 3,
            ),
            160 => 
            array (
                'id' => 1661,
                'parent_id' => 199,
                'name' => '武陵区',
                'type' => 3,
            ),
            161 => 
            array (
                'id' => 1662,
                'parent_id' => 199,
                'name' => '鼎城区',
                'type' => 3,
            ),
            162 => 
            array (
                'id' => 1663,
                'parent_id' => 199,
                'name' => '津市市',
                'type' => 3,
            ),
            163 => 
            array (
                'id' => 1664,
                'parent_id' => 199,
                'name' => '安乡县',
                'type' => 3,
            ),
            164 => 
            array (
                'id' => 1665,
                'parent_id' => 199,
                'name' => '汉寿县',
                'type' => 3,
            ),
            165 => 
            array (
                'id' => 1666,
                'parent_id' => 199,
                'name' => '澧县',
                'type' => 3,
            ),
            166 => 
            array (
                'id' => 1667,
                'parent_id' => 199,
                'name' => '临澧县',
                'type' => 3,
            ),
            167 => 
            array (
                'id' => 1668,
                'parent_id' => 199,
                'name' => '桃源县',
                'type' => 3,
            ),
            168 => 
            array (
                'id' => 1669,
                'parent_id' => 199,
                'name' => '石门县',
                'type' => 3,
            ),
            169 => 
            array (
                'id' => 1670,
                'parent_id' => 200,
                'name' => '北湖区',
                'type' => 3,
            ),
            170 => 
            array (
                'id' => 1671,
                'parent_id' => 200,
                'name' => '苏仙区',
                'type' => 3,
            ),
            171 => 
            array (
                'id' => 1672,
                'parent_id' => 200,
                'name' => '资兴市',
                'type' => 3,
            ),
            172 => 
            array (
                'id' => 1673,
                'parent_id' => 200,
                'name' => '桂阳县',
                'type' => 3,
            ),
            173 => 
            array (
                'id' => 1674,
                'parent_id' => 200,
                'name' => '宜章县',
                'type' => 3,
            ),
            174 => 
            array (
                'id' => 1675,
                'parent_id' => 200,
                'name' => '永兴县',
                'type' => 3,
            ),
            175 => 
            array (
                'id' => 1676,
                'parent_id' => 200,
                'name' => '嘉禾县',
                'type' => 3,
            ),
            176 => 
            array (
                'id' => 1677,
                'parent_id' => 200,
                'name' => '临武县',
                'type' => 3,
            ),
            177 => 
            array (
                'id' => 1678,
                'parent_id' => 200,
                'name' => '汝城县',
                'type' => 3,
            ),
            178 => 
            array (
                'id' => 1679,
                'parent_id' => 200,
                'name' => '桂东县',
                'type' => 3,
            ),
            179 => 
            array (
                'id' => 1680,
                'parent_id' => 200,
                'name' => '安仁县',
                'type' => 3,
            ),
            180 => 
            array (
                'id' => 1681,
                'parent_id' => 201,
                'name' => '雁峰区',
                'type' => 3,
            ),
            181 => 
            array (
                'id' => 1682,
                'parent_id' => 201,
                'name' => '珠晖区',
                'type' => 3,
            ),
            182 => 
            array (
                'id' => 1683,
                'parent_id' => 201,
                'name' => '石鼓区',
                'type' => 3,
            ),
            183 => 
            array (
                'id' => 1684,
                'parent_id' => 201,
                'name' => '蒸湘区',
                'type' => 3,
            ),
            184 => 
            array (
                'id' => 1685,
                'parent_id' => 201,
                'name' => '南岳区',
                'type' => 3,
            ),
            185 => 
            array (
                'id' => 1686,
                'parent_id' => 201,
                'name' => '耒阳市',
                'type' => 3,
            ),
            186 => 
            array (
                'id' => 1687,
                'parent_id' => 201,
                'name' => '常宁市',
                'type' => 3,
            ),
            187 => 
            array (
                'id' => 1688,
                'parent_id' => 201,
                'name' => '衡阳县',
                'type' => 3,
            ),
            188 => 
            array (
                'id' => 1689,
                'parent_id' => 201,
                'name' => '衡南县',
                'type' => 3,
            ),
            189 => 
            array (
                'id' => 1690,
                'parent_id' => 201,
                'name' => '衡山县',
                'type' => 3,
            ),
            190 => 
            array (
                'id' => 1691,
                'parent_id' => 201,
                'name' => '衡东县',
                'type' => 3,
            ),
            191 => 
            array (
                'id' => 1692,
                'parent_id' => 201,
                'name' => '祁东县',
                'type' => 3,
            ),
            192 => 
            array (
                'id' => 1693,
                'parent_id' => 202,
                'name' => '鹤城区',
                'type' => 3,
            ),
            193 => 
            array (
                'id' => 1694,
                'parent_id' => 202,
                'name' => '靖州',
                'type' => 3,
            ),
            194 => 
            array (
                'id' => 1695,
                'parent_id' => 202,
                'name' => '麻阳',
                'type' => 3,
            ),
            195 => 
            array (
                'id' => 1696,
                'parent_id' => 202,
                'name' => '通道',
                'type' => 3,
            ),
            196 => 
            array (
                'id' => 1697,
                'parent_id' => 202,
                'name' => '新晃',
                'type' => 3,
            ),
            197 => 
            array (
                'id' => 1698,
                'parent_id' => 202,
                'name' => '芷江',
                'type' => 3,
            ),
            198 => 
            array (
                'id' => 1699,
                'parent_id' => 202,
                'name' => '沅陵县',
                'type' => 3,
            ),
            199 => 
            array (
                'id' => 1700,
                'parent_id' => 202,
                'name' => '辰溪县',
                'type' => 3,
            ),
            200 => 
            array (
                'id' => 1701,
                'parent_id' => 202,
                'name' => '溆浦县',
                'type' => 3,
            ),
            201 => 
            array (
                'id' => 1702,
                'parent_id' => 202,
                'name' => '中方县',
                'type' => 3,
            ),
            202 => 
            array (
                'id' => 1703,
                'parent_id' => 202,
                'name' => '会同县',
                'type' => 3,
            ),
            203 => 
            array (
                'id' => 1704,
                'parent_id' => 202,
                'name' => '洪江市',
                'type' => 3,
            ),
            204 => 
            array (
                'id' => 1705,
                'parent_id' => 203,
                'name' => '娄星区',
                'type' => 3,
            ),
            205 => 
            array (
                'id' => 1706,
                'parent_id' => 203,
                'name' => '冷水江市',
                'type' => 3,
            ),
            206 => 
            array (
                'id' => 1707,
                'parent_id' => 203,
                'name' => '涟源市',
                'type' => 3,
            ),
            207 => 
            array (
                'id' => 1708,
                'parent_id' => 203,
                'name' => '双峰县',
                'type' => 3,
            ),
            208 => 
            array (
                'id' => 1709,
                'parent_id' => 203,
                'name' => '新化县',
                'type' => 3,
            ),
            209 => 
            array (
                'id' => 1710,
                'parent_id' => 204,
                'name' => '城步',
                'type' => 3,
            ),
            210 => 
            array (
                'id' => 1711,
                'parent_id' => 204,
                'name' => '双清区',
                'type' => 3,
            ),
            211 => 
            array (
                'id' => 1712,
                'parent_id' => 204,
                'name' => '大祥区',
                'type' => 3,
            ),
            212 => 
            array (
                'id' => 1713,
                'parent_id' => 204,
                'name' => '北塔区',
                'type' => 3,
            ),
            213 => 
            array (
                'id' => 1714,
                'parent_id' => 204,
                'name' => '武冈市',
                'type' => 3,
            ),
            214 => 
            array (
                'id' => 1715,
                'parent_id' => 204,
                'name' => '邵东县',
                'type' => 3,
            ),
            215 => 
            array (
                'id' => 1716,
                'parent_id' => 204,
                'name' => '新邵县',
                'type' => 3,
            ),
            216 => 
            array (
                'id' => 1717,
                'parent_id' => 204,
                'name' => '邵阳县',
                'type' => 3,
            ),
            217 => 
            array (
                'id' => 1718,
                'parent_id' => 204,
                'name' => '隆回县',
                'type' => 3,
            ),
            218 => 
            array (
                'id' => 1719,
                'parent_id' => 204,
                'name' => '洞口县',
                'type' => 3,
            ),
            219 => 
            array (
                'id' => 1720,
                'parent_id' => 204,
                'name' => '绥宁县',
                'type' => 3,
            ),
            220 => 
            array (
                'id' => 1721,
                'parent_id' => 204,
                'name' => '新宁县',
                'type' => 3,
            ),
            221 => 
            array (
                'id' => 1722,
                'parent_id' => 205,
                'name' => '岳塘区',
                'type' => 3,
            ),
            222 => 
            array (
                'id' => 1723,
                'parent_id' => 205,
                'name' => '雨湖区',
                'type' => 3,
            ),
            223 => 
            array (
                'id' => 1724,
                'parent_id' => 205,
                'name' => '湘乡市',
                'type' => 3,
            ),
            224 => 
            array (
                'id' => 1725,
                'parent_id' => 205,
                'name' => '韶山市',
                'type' => 3,
            ),
            225 => 
            array (
                'id' => 1726,
                'parent_id' => 205,
                'name' => '湘潭县',
                'type' => 3,
            ),
            226 => 
            array (
                'id' => 1727,
                'parent_id' => 206,
                'name' => '吉首市',
                'type' => 3,
            ),
            227 => 
            array (
                'id' => 1728,
                'parent_id' => 206,
                'name' => '泸溪县',
                'type' => 3,
            ),
            228 => 
            array (
                'id' => 1729,
                'parent_id' => 206,
                'name' => '凤凰县',
                'type' => 3,
            ),
            229 => 
            array (
                'id' => 1730,
                'parent_id' => 206,
                'name' => '花垣县',
                'type' => 3,
            ),
            230 => 
            array (
                'id' => 1731,
                'parent_id' => 206,
                'name' => '保靖县',
                'type' => 3,
            ),
            231 => 
            array (
                'id' => 1732,
                'parent_id' => 206,
                'name' => '古丈县',
                'type' => 3,
            ),
            232 => 
            array (
                'id' => 1733,
                'parent_id' => 206,
                'name' => '永顺县',
                'type' => 3,
            ),
            233 => 
            array (
                'id' => 1734,
                'parent_id' => 206,
                'name' => '龙山县',
                'type' => 3,
            ),
            234 => 
            array (
                'id' => 1735,
                'parent_id' => 207,
                'name' => '赫山区',
                'type' => 3,
            ),
            235 => 
            array (
                'id' => 1736,
                'parent_id' => 207,
                'name' => '资阳区',
                'type' => 3,
            ),
            236 => 
            array (
                'id' => 1737,
                'parent_id' => 207,
                'name' => '沅江市',
                'type' => 3,
            ),
            237 => 
            array (
                'id' => 1738,
                'parent_id' => 207,
                'name' => '南县',
                'type' => 3,
            ),
            238 => 
            array (
                'id' => 1739,
                'parent_id' => 207,
                'name' => '桃江县',
                'type' => 3,
            ),
            239 => 
            array (
                'id' => 1740,
                'parent_id' => 207,
                'name' => '安化县',
                'type' => 3,
            ),
            240 => 
            array (
                'id' => 1741,
                'parent_id' => 208,
                'name' => '江华',
                'type' => 3,
            ),
            241 => 
            array (
                'id' => 1742,
                'parent_id' => 208,
                'name' => '冷水滩区',
                'type' => 3,
            ),
            242 => 
            array (
                'id' => 1743,
                'parent_id' => 208,
                'name' => '零陵区',
                'type' => 3,
            ),
            243 => 
            array (
                'id' => 1744,
                'parent_id' => 208,
                'name' => '祁阳县',
                'type' => 3,
            ),
            244 => 
            array (
                'id' => 1745,
                'parent_id' => 208,
                'name' => '东安县',
                'type' => 3,
            ),
            245 => 
            array (
                'id' => 1746,
                'parent_id' => 208,
                'name' => '双牌县',
                'type' => 3,
            ),
            246 => 
            array (
                'id' => 1747,
                'parent_id' => 208,
                'name' => '道县',
                'type' => 3,
            ),
            247 => 
            array (
                'id' => 1748,
                'parent_id' => 208,
                'name' => '江永县',
                'type' => 3,
            ),
            248 => 
            array (
                'id' => 1749,
                'parent_id' => 208,
                'name' => '宁远县',
                'type' => 3,
            ),
            249 => 
            array (
                'id' => 1750,
                'parent_id' => 208,
                'name' => '蓝山县',
                'type' => 3,
            ),
            250 => 
            array (
                'id' => 1751,
                'parent_id' => 208,
                'name' => '新田县',
                'type' => 3,
            ),
            251 => 
            array (
                'id' => 1752,
                'parent_id' => 209,
                'name' => '岳阳楼区',
                'type' => 3,
            ),
            252 => 
            array (
                'id' => 1753,
                'parent_id' => 209,
                'name' => '君山区',
                'type' => 3,
            ),
            253 => 
            array (
                'id' => 1754,
                'parent_id' => 209,
                'name' => '云溪区',
                'type' => 3,
            ),
            254 => 
            array (
                'id' => 1755,
                'parent_id' => 209,
                'name' => '汨罗市',
                'type' => 3,
            ),
            255 => 
            array (
                'id' => 1756,
                'parent_id' => 209,
                'name' => '临湘市',
                'type' => 3,
            ),
            256 => 
            array (
                'id' => 1757,
                'parent_id' => 209,
                'name' => '岳阳县',
                'type' => 3,
            ),
            257 => 
            array (
                'id' => 1758,
                'parent_id' => 209,
                'name' => '华容县',
                'type' => 3,
            ),
            258 => 
            array (
                'id' => 1759,
                'parent_id' => 209,
                'name' => '湘阴县',
                'type' => 3,
            ),
            259 => 
            array (
                'id' => 1760,
                'parent_id' => 209,
                'name' => '平江县',
                'type' => 3,
            ),
            260 => 
            array (
                'id' => 1761,
                'parent_id' => 210,
                'name' => '天元区',
                'type' => 3,
            ),
            261 => 
            array (
                'id' => 1762,
                'parent_id' => 210,
                'name' => '荷塘区',
                'type' => 3,
            ),
            262 => 
            array (
                'id' => 1763,
                'parent_id' => 210,
                'name' => '芦淞区',
                'type' => 3,
            ),
            263 => 
            array (
                'id' => 1764,
                'parent_id' => 210,
                'name' => '石峰区',
                'type' => 3,
            ),
            264 => 
            array (
                'id' => 1765,
                'parent_id' => 210,
                'name' => '醴陵市',
                'type' => 3,
            ),
            265 => 
            array (
                'id' => 1766,
                'parent_id' => 210,
                'name' => '株洲县',
                'type' => 3,
            ),
            266 => 
            array (
                'id' => 1767,
                'parent_id' => 210,
                'name' => '攸县',
                'type' => 3,
            ),
            267 => 
            array (
                'id' => 1768,
                'parent_id' => 210,
                'name' => '茶陵县',
                'type' => 3,
            ),
            268 => 
            array (
                'id' => 1769,
                'parent_id' => 210,
                'name' => '炎陵县',
                'type' => 3,
            ),
            269 => 
            array (
                'id' => 1770,
                'parent_id' => 211,
                'name' => '朝阳区',
                'type' => 3,
            ),
            270 => 
            array (
                'id' => 1771,
                'parent_id' => 211,
                'name' => '宽城区',
                'type' => 3,
            ),
            271 => 
            array (
                'id' => 1772,
                'parent_id' => 211,
                'name' => '二道区',
                'type' => 3,
            ),
            272 => 
            array (
                'id' => 1773,
                'parent_id' => 211,
                'name' => '南关区',
                'type' => 3,
            ),
            273 => 
            array (
                'id' => 1774,
                'parent_id' => 211,
                'name' => '绿园区',
                'type' => 3,
            ),
            274 => 
            array (
                'id' => 1775,
                'parent_id' => 211,
                'name' => '双阳区',
                'type' => 3,
            ),
            275 => 
            array (
                'id' => 1776,
                'parent_id' => 211,
                'name' => '净月潭开发区',
                'type' => 3,
            ),
            276 => 
            array (
                'id' => 1777,
                'parent_id' => 211,
                'name' => '高新技术开发区',
                'type' => 3,
            ),
            277 => 
            array (
                'id' => 1778,
                'parent_id' => 211,
                'name' => '经济技术开发区',
                'type' => 3,
            ),
            278 => 
            array (
                'id' => 1779,
                'parent_id' => 211,
                'name' => '汽车产业开发区',
                'type' => 3,
            ),
            279 => 
            array (
                'id' => 1780,
                'parent_id' => 211,
                'name' => '德惠市',
                'type' => 3,
            ),
            280 => 
            array (
                'id' => 1781,
                'parent_id' => 211,
                'name' => '九台市',
                'type' => 3,
            ),
            281 => 
            array (
                'id' => 1782,
                'parent_id' => 211,
                'name' => '榆树市',
                'type' => 3,
            ),
            282 => 
            array (
                'id' => 1783,
                'parent_id' => 211,
                'name' => '农安县',
                'type' => 3,
            ),
            283 => 
            array (
                'id' => 1784,
                'parent_id' => 212,
                'name' => '船营区',
                'type' => 3,
            ),
            284 => 
            array (
                'id' => 1785,
                'parent_id' => 212,
                'name' => '昌邑区',
                'type' => 3,
            ),
            285 => 
            array (
                'id' => 1786,
                'parent_id' => 212,
                'name' => '龙潭区',
                'type' => 3,
            ),
            286 => 
            array (
                'id' => 1787,
                'parent_id' => 212,
                'name' => '丰满区',
                'type' => 3,
            ),
            287 => 
            array (
                'id' => 1788,
                'parent_id' => 212,
                'name' => '蛟河市',
                'type' => 3,
            ),
            288 => 
            array (
                'id' => 1789,
                'parent_id' => 212,
                'name' => '桦甸市',
                'type' => 3,
            ),
            289 => 
            array (
                'id' => 1790,
                'parent_id' => 212,
                'name' => '舒兰市',
                'type' => 3,
            ),
            290 => 
            array (
                'id' => 1791,
                'parent_id' => 212,
                'name' => '磐石市',
                'type' => 3,
            ),
            291 => 
            array (
                'id' => 1792,
                'parent_id' => 212,
                'name' => '永吉县',
                'type' => 3,
            ),
            292 => 
            array (
                'id' => 1793,
                'parent_id' => 213,
                'name' => '洮北区',
                'type' => 3,
            ),
            293 => 
            array (
                'id' => 1794,
                'parent_id' => 213,
                'name' => '洮南市',
                'type' => 3,
            ),
            294 => 
            array (
                'id' => 1795,
                'parent_id' => 213,
                'name' => '大安市',
                'type' => 3,
            ),
            295 => 
            array (
                'id' => 1796,
                'parent_id' => 213,
                'name' => '镇赉县',
                'type' => 3,
            ),
            296 => 
            array (
                'id' => 1797,
                'parent_id' => 213,
                'name' => '通榆县',
                'type' => 3,
            ),
            297 => 
            array (
                'id' => 1798,
                'parent_id' => 214,
                'name' => '江源区',
                'type' => 3,
            ),
            298 => 
            array (
                'id' => 1799,
                'parent_id' => 214,
                'name' => '八道江区',
                'type' => 3,
            ),
            299 => 
            array (
                'id' => 1800,
                'parent_id' => 214,
                'name' => '长白',
                'type' => 3,
            ),
            300 => 
            array (
                'id' => 1801,
                'parent_id' => 214,
                'name' => '临江市',
                'type' => 3,
            ),
            301 => 
            array (
                'id' => 1802,
                'parent_id' => 214,
                'name' => '抚松县',
                'type' => 3,
            ),
            302 => 
            array (
                'id' => 1803,
                'parent_id' => 214,
                'name' => '靖宇县',
                'type' => 3,
            ),
            303 => 
            array (
                'id' => 1804,
                'parent_id' => 215,
                'name' => '龙山区',
                'type' => 3,
            ),
            304 => 
            array (
                'id' => 1805,
                'parent_id' => 215,
                'name' => '西安区',
                'type' => 3,
            ),
            305 => 
            array (
                'id' => 1806,
                'parent_id' => 215,
                'name' => '东丰县',
                'type' => 3,
            ),
            306 => 
            array (
                'id' => 1807,
                'parent_id' => 215,
                'name' => '东辽县',
                'type' => 3,
            ),
            307 => 
            array (
                'id' => 1808,
                'parent_id' => 216,
                'name' => '铁西区',
                'type' => 3,
            ),
            308 => 
            array (
                'id' => 1809,
                'parent_id' => 216,
                'name' => '铁东区',
                'type' => 3,
            ),
            309 => 
            array (
                'id' => 1810,
                'parent_id' => 216,
                'name' => '伊通',
                'type' => 3,
            ),
            310 => 
            array (
                'id' => 1811,
                'parent_id' => 216,
                'name' => '公主岭市',
                'type' => 3,
            ),
            311 => 
            array (
                'id' => 1812,
                'parent_id' => 216,
                'name' => '双辽市',
                'type' => 3,
            ),
            312 => 
            array (
                'id' => 1813,
                'parent_id' => 216,
                'name' => '梨树县',
                'type' => 3,
            ),
            313 => 
            array (
                'id' => 1814,
                'parent_id' => 217,
                'name' => '前郭尔罗斯',
                'type' => 3,
            ),
            314 => 
            array (
                'id' => 1815,
                'parent_id' => 217,
                'name' => '宁江区',
                'type' => 3,
            ),
            315 => 
            array (
                'id' => 1816,
                'parent_id' => 217,
                'name' => '长岭县',
                'type' => 3,
            ),
            316 => 
            array (
                'id' => 1817,
                'parent_id' => 217,
                'name' => '乾安县',
                'type' => 3,
            ),
            317 => 
            array (
                'id' => 1818,
                'parent_id' => 217,
                'name' => '扶余县',
                'type' => 3,
            ),
            318 => 
            array (
                'id' => 1819,
                'parent_id' => 218,
                'name' => '东昌区',
                'type' => 3,
            ),
            319 => 
            array (
                'id' => 1820,
                'parent_id' => 218,
                'name' => '二道江区',
                'type' => 3,
            ),
            320 => 
            array (
                'id' => 1821,
                'parent_id' => 218,
                'name' => '梅河口市',
                'type' => 3,
            ),
            321 => 
            array (
                'id' => 1822,
                'parent_id' => 218,
                'name' => '集安市',
                'type' => 3,
            ),
            322 => 
            array (
                'id' => 1823,
                'parent_id' => 218,
                'name' => '通化县',
                'type' => 3,
            ),
            323 => 
            array (
                'id' => 1824,
                'parent_id' => 218,
                'name' => '辉南县',
                'type' => 3,
            ),
            324 => 
            array (
                'id' => 1825,
                'parent_id' => 218,
                'name' => '柳河县',
                'type' => 3,
            ),
            325 => 
            array (
                'id' => 1826,
                'parent_id' => 219,
                'name' => '延吉市',
                'type' => 3,
            ),
            326 => 
            array (
                'id' => 1827,
                'parent_id' => 219,
                'name' => '图们市',
                'type' => 3,
            ),
            327 => 
            array (
                'id' => 1828,
                'parent_id' => 219,
                'name' => '敦化市',
                'type' => 3,
            ),
            328 => 
            array (
                'id' => 1829,
                'parent_id' => 219,
                'name' => '珲春市',
                'type' => 3,
            ),
            329 => 
            array (
                'id' => 1830,
                'parent_id' => 219,
                'name' => '龙井市',
                'type' => 3,
            ),
            330 => 
            array (
                'id' => 1831,
                'parent_id' => 219,
                'name' => '和龙市',
                'type' => 3,
            ),
            331 => 
            array (
                'id' => 1832,
                'parent_id' => 219,
                'name' => '安图县',
                'type' => 3,
            ),
            332 => 
            array (
                'id' => 1833,
                'parent_id' => 219,
                'name' => '汪清县',
                'type' => 3,
            ),
            333 => 
            array (
                'id' => 1834,
                'parent_id' => 220,
                'name' => '玄武区',
                'type' => 3,
            ),
            334 => 
            array (
                'id' => 1835,
                'parent_id' => 220,
                'name' => '鼓楼区',
                'type' => 3,
            ),
            335 => 
            array (
                'id' => 1836,
                'parent_id' => 220,
                'name' => '白下区',
                'type' => 3,
            ),
            336 => 
            array (
                'id' => 1837,
                'parent_id' => 220,
                'name' => '建邺区',
                'type' => 3,
            ),
            337 => 
            array (
                'id' => 1838,
                'parent_id' => 220,
                'name' => '秦淮区',
                'type' => 3,
            ),
            338 => 
            array (
                'id' => 1839,
                'parent_id' => 220,
                'name' => '雨花台区',
                'type' => 3,
            ),
            339 => 
            array (
                'id' => 1840,
                'parent_id' => 220,
                'name' => '下关区',
                'type' => 3,
            ),
            340 => 
            array (
                'id' => 1841,
                'parent_id' => 220,
                'name' => '栖霞区',
                'type' => 3,
            ),
            341 => 
            array (
                'id' => 1842,
                'parent_id' => 220,
                'name' => '浦口区',
                'type' => 3,
            ),
            342 => 
            array (
                'id' => 1843,
                'parent_id' => 220,
                'name' => '江宁区',
                'type' => 3,
            ),
            343 => 
            array (
                'id' => 1844,
                'parent_id' => 220,
                'name' => '六合区',
                'type' => 3,
            ),
            344 => 
            array (
                'id' => 1845,
                'parent_id' => 220,
                'name' => '溧水县',
                'type' => 3,
            ),
            345 => 
            array (
                'id' => 1846,
                'parent_id' => 220,
                'name' => '高淳县',
                'type' => 3,
            ),
            346 => 
            array (
                'id' => 1847,
                'parent_id' => 221,
                'name' => '沧浪区',
                'type' => 3,
            ),
            347 => 
            array (
                'id' => 1848,
                'parent_id' => 221,
                'name' => '金阊区',
                'type' => 3,
            ),
            348 => 
            array (
                'id' => 1849,
                'parent_id' => 221,
                'name' => '平江区',
                'type' => 3,
            ),
            349 => 
            array (
                'id' => 1850,
                'parent_id' => 221,
                'name' => '虎丘区',
                'type' => 3,
            ),
            350 => 
            array (
                'id' => 1851,
                'parent_id' => 221,
                'name' => '吴中区',
                'type' => 3,
            ),
            351 => 
            array (
                'id' => 1852,
                'parent_id' => 221,
                'name' => '相城区',
                'type' => 3,
            ),
            352 => 
            array (
                'id' => 1853,
                'parent_id' => 221,
                'name' => '园区',
                'type' => 3,
            ),
            353 => 
            array (
                'id' => 1854,
                'parent_id' => 221,
                'name' => '新区',
                'type' => 3,
            ),
            354 => 
            array (
                'id' => 1855,
                'parent_id' => 221,
                'name' => '常熟市',
                'type' => 3,
            ),
            355 => 
            array (
                'id' => 1856,
                'parent_id' => 221,
                'name' => '张家港市',
                'type' => 3,
            ),
            356 => 
            array (
                'id' => 1857,
                'parent_id' => 221,
                'name' => '玉山镇',
                'type' => 3,
            ),
            357 => 
            array (
                'id' => 1858,
                'parent_id' => 221,
                'name' => '巴城镇',
                'type' => 3,
            ),
            358 => 
            array (
                'id' => 1859,
                'parent_id' => 221,
                'name' => '周市镇',
                'type' => 3,
            ),
            359 => 
            array (
                'id' => 1860,
                'parent_id' => 221,
                'name' => '陆家镇',
                'type' => 3,
            ),
            360 => 
            array (
                'id' => 1861,
                'parent_id' => 221,
                'name' => '花桥镇',
                'type' => 3,
            ),
            361 => 
            array (
                'id' => 1862,
                'parent_id' => 221,
                'name' => '淀山湖镇',
                'type' => 3,
            ),
            362 => 
            array (
                'id' => 1863,
                'parent_id' => 221,
                'name' => '张浦镇',
                'type' => 3,
            ),
            363 => 
            array (
                'id' => 1864,
                'parent_id' => 221,
                'name' => '周庄镇',
                'type' => 3,
            ),
            364 => 
            array (
                'id' => 1865,
                'parent_id' => 221,
                'name' => '千灯镇',
                'type' => 3,
            ),
            365 => 
            array (
                'id' => 1866,
                'parent_id' => 221,
                'name' => '锦溪镇',
                'type' => 3,
            ),
            366 => 
            array (
                'id' => 1867,
                'parent_id' => 221,
                'name' => '开发区',
                'type' => 3,
            ),
            367 => 
            array (
                'id' => 1868,
                'parent_id' => 221,
                'name' => '吴江市',
                'type' => 3,
            ),
            368 => 
            array (
                'id' => 1869,
                'parent_id' => 221,
                'name' => '太仓市',
                'type' => 3,
            ),
            369 => 
            array (
                'id' => 1870,
                'parent_id' => 222,
                'name' => '崇安区',
                'type' => 3,
            ),
            370 => 
            array (
                'id' => 1871,
                'parent_id' => 222,
                'name' => '北塘区',
                'type' => 3,
            ),
            371 => 
            array (
                'id' => 1872,
                'parent_id' => 222,
                'name' => '南长区',
                'type' => 3,
            ),
            372 => 
            array (
                'id' => 1873,
                'parent_id' => 222,
                'name' => '锡山区',
                'type' => 3,
            ),
            373 => 
            array (
                'id' => 1874,
                'parent_id' => 222,
                'name' => '惠山区',
                'type' => 3,
            ),
            374 => 
            array (
                'id' => 1875,
                'parent_id' => 222,
                'name' => '滨湖区',
                'type' => 3,
            ),
            375 => 
            array (
                'id' => 1876,
                'parent_id' => 222,
                'name' => '新区',
                'type' => 3,
            ),
            376 => 
            array (
                'id' => 1877,
                'parent_id' => 222,
                'name' => '江阴市',
                'type' => 3,
            ),
            377 => 
            array (
                'id' => 1878,
                'parent_id' => 222,
                'name' => '宜兴市',
                'type' => 3,
            ),
            378 => 
            array (
                'id' => 1879,
                'parent_id' => 223,
                'name' => '天宁区',
                'type' => 3,
            ),
            379 => 
            array (
                'id' => 1880,
                'parent_id' => 223,
                'name' => '钟楼区',
                'type' => 3,
            ),
            380 => 
            array (
                'id' => 1881,
                'parent_id' => 223,
                'name' => '戚墅堰区',
                'type' => 3,
            ),
            381 => 
            array (
                'id' => 1882,
                'parent_id' => 223,
                'name' => '郊区',
                'type' => 3,
            ),
            382 => 
            array (
                'id' => 1883,
                'parent_id' => 223,
                'name' => '新北区',
                'type' => 3,
            ),
            383 => 
            array (
                'id' => 1884,
                'parent_id' => 223,
                'name' => '武进区',
                'type' => 3,
            ),
            384 => 
            array (
                'id' => 1885,
                'parent_id' => 223,
                'name' => '溧阳市',
                'type' => 3,
            ),
            385 => 
            array (
                'id' => 1886,
                'parent_id' => 223,
                'name' => '金坛市',
                'type' => 3,
            ),
            386 => 
            array (
                'id' => 1887,
                'parent_id' => 224,
                'name' => '清河区',
                'type' => 3,
            ),
            387 => 
            array (
                'id' => 1888,
                'parent_id' => 224,
                'name' => '清浦区',
                'type' => 3,
            ),
            388 => 
            array (
                'id' => 1889,
                'parent_id' => 224,
                'name' => '楚州区',
                'type' => 3,
            ),
            389 => 
            array (
                'id' => 1890,
                'parent_id' => 224,
                'name' => '淮阴区',
                'type' => 3,
            ),
            390 => 
            array (
                'id' => 1891,
                'parent_id' => 224,
                'name' => '涟水县',
                'type' => 3,
            ),
            391 => 
            array (
                'id' => 1892,
                'parent_id' => 224,
                'name' => '洪泽县',
                'type' => 3,
            ),
            392 => 
            array (
                'id' => 1893,
                'parent_id' => 224,
                'name' => '盱眙县',
                'type' => 3,
            ),
            393 => 
            array (
                'id' => 1894,
                'parent_id' => 224,
                'name' => '金湖县',
                'type' => 3,
            ),
            394 => 
            array (
                'id' => 1895,
                'parent_id' => 225,
                'name' => '新浦区',
                'type' => 3,
            ),
            395 => 
            array (
                'id' => 1896,
                'parent_id' => 225,
                'name' => '连云区',
                'type' => 3,
            ),
            396 => 
            array (
                'id' => 1897,
                'parent_id' => 225,
                'name' => '海州区',
                'type' => 3,
            ),
            397 => 
            array (
                'id' => 1898,
                'parent_id' => 225,
                'name' => '赣榆县',
                'type' => 3,
            ),
            398 => 
            array (
                'id' => 1899,
                'parent_id' => 225,
                'name' => '东海县',
                'type' => 3,
            ),
            399 => 
            array (
                'id' => 1900,
                'parent_id' => 225,
                'name' => '灌云县',
                'type' => 3,
            ),
            400 => 
            array (
                'id' => 1901,
                'parent_id' => 225,
                'name' => '灌南县',
                'type' => 3,
            ),
            401 => 
            array (
                'id' => 1902,
                'parent_id' => 226,
                'name' => '崇川区',
                'type' => 3,
            ),
            402 => 
            array (
                'id' => 1903,
                'parent_id' => 226,
                'name' => '港闸区',
                'type' => 3,
            ),
            403 => 
            array (
                'id' => 1904,
                'parent_id' => 226,
                'name' => '经济开发区',
                'type' => 3,
            ),
            404 => 
            array (
                'id' => 1905,
                'parent_id' => 226,
                'name' => '启东市',
                'type' => 3,
            ),
            405 => 
            array (
                'id' => 1906,
                'parent_id' => 226,
                'name' => '如皋市',
                'type' => 3,
            ),
            406 => 
            array (
                'id' => 1907,
                'parent_id' => 226,
                'name' => '通州市',
                'type' => 3,
            ),
            407 => 
            array (
                'id' => 1908,
                'parent_id' => 226,
                'name' => '海门市',
                'type' => 3,
            ),
            408 => 
            array (
                'id' => 1909,
                'parent_id' => 226,
                'name' => '海安县',
                'type' => 3,
            ),
            409 => 
            array (
                'id' => 1910,
                'parent_id' => 226,
                'name' => '如东县',
                'type' => 3,
            ),
            410 => 
            array (
                'id' => 1911,
                'parent_id' => 227,
                'name' => '宿城区',
                'type' => 3,
            ),
            411 => 
            array (
                'id' => 1912,
                'parent_id' => 227,
                'name' => '宿豫区',
                'type' => 3,
            ),
            412 => 
            array (
                'id' => 1913,
                'parent_id' => 227,
                'name' => '宿豫县',
                'type' => 3,
            ),
            413 => 
            array (
                'id' => 1914,
                'parent_id' => 227,
                'name' => '沭阳县',
                'type' => 3,
            ),
            414 => 
            array (
                'id' => 1915,
                'parent_id' => 227,
                'name' => '泗阳县',
                'type' => 3,
            ),
            415 => 
            array (
                'id' => 1916,
                'parent_id' => 227,
                'name' => '泗洪县',
                'type' => 3,
            ),
            416 => 
            array (
                'id' => 1917,
                'parent_id' => 228,
                'name' => '海陵区',
                'type' => 3,
            ),
            417 => 
            array (
                'id' => 1918,
                'parent_id' => 228,
                'name' => '高港区',
                'type' => 3,
            ),
            418 => 
            array (
                'id' => 1919,
                'parent_id' => 228,
                'name' => '兴化市',
                'type' => 3,
            ),
            419 => 
            array (
                'id' => 1920,
                'parent_id' => 228,
                'name' => '靖江市',
                'type' => 3,
            ),
            420 => 
            array (
                'id' => 1921,
                'parent_id' => 228,
                'name' => '泰兴市',
                'type' => 3,
            ),
            421 => 
            array (
                'id' => 1922,
                'parent_id' => 228,
                'name' => '姜堰市',
                'type' => 3,
            ),
            422 => 
            array (
                'id' => 1923,
                'parent_id' => 229,
                'name' => '云龙区',
                'type' => 3,
            ),
            423 => 
            array (
                'id' => 1924,
                'parent_id' => 229,
                'name' => '鼓楼区',
                'type' => 3,
            ),
            424 => 
            array (
                'id' => 1925,
                'parent_id' => 229,
                'name' => '九里区',
                'type' => 3,
            ),
            425 => 
            array (
                'id' => 1926,
                'parent_id' => 229,
                'name' => '贾汪区',
                'type' => 3,
            ),
            426 => 
            array (
                'id' => 1927,
                'parent_id' => 229,
                'name' => '泉山区',
                'type' => 3,
            ),
            427 => 
            array (
                'id' => 1928,
                'parent_id' => 229,
                'name' => '新沂市',
                'type' => 3,
            ),
            428 => 
            array (
                'id' => 1929,
                'parent_id' => 229,
                'name' => '邳州市',
                'type' => 3,
            ),
            429 => 
            array (
                'id' => 1930,
                'parent_id' => 229,
                'name' => '丰县',
                'type' => 3,
            ),
            430 => 
            array (
                'id' => 1931,
                'parent_id' => 229,
                'name' => '沛县',
                'type' => 3,
            ),
            431 => 
            array (
                'id' => 1932,
                'parent_id' => 229,
                'name' => '铜山县',
                'type' => 3,
            ),
            432 => 
            array (
                'id' => 1933,
                'parent_id' => 229,
                'name' => '睢宁县',
                'type' => 3,
            ),
            433 => 
            array (
                'id' => 1934,
                'parent_id' => 230,
                'name' => '城区',
                'type' => 3,
            ),
            434 => 
            array (
                'id' => 1935,
                'parent_id' => 230,
                'name' => '亭湖区',
                'type' => 3,
            ),
            435 => 
            array (
                'id' => 1936,
                'parent_id' => 230,
                'name' => '盐都区',
                'type' => 3,
            ),
            436 => 
            array (
                'id' => 1937,
                'parent_id' => 230,
                'name' => '盐都县',
                'type' => 3,
            ),
            437 => 
            array (
                'id' => 1938,
                'parent_id' => 230,
                'name' => '东台市',
                'type' => 3,
            ),
            438 => 
            array (
                'id' => 1939,
                'parent_id' => 230,
                'name' => '大丰市',
                'type' => 3,
            ),
            439 => 
            array (
                'id' => 1940,
                'parent_id' => 230,
                'name' => '响水县',
                'type' => 3,
            ),
            440 => 
            array (
                'id' => 1941,
                'parent_id' => 230,
                'name' => '滨海县',
                'type' => 3,
            ),
            441 => 
            array (
                'id' => 1942,
                'parent_id' => 230,
                'name' => '阜宁县',
                'type' => 3,
            ),
            442 => 
            array (
                'id' => 1943,
                'parent_id' => 230,
                'name' => '射阳县',
                'type' => 3,
            ),
            443 => 
            array (
                'id' => 1944,
                'parent_id' => 230,
                'name' => '建湖县',
                'type' => 3,
            ),
            444 => 
            array (
                'id' => 1945,
                'parent_id' => 231,
                'name' => '广陵区',
                'type' => 3,
            ),
            445 => 
            array (
                'id' => 1946,
                'parent_id' => 231,
                'name' => '维扬区',
                'type' => 3,
            ),
            446 => 
            array (
                'id' => 1947,
                'parent_id' => 231,
                'name' => '邗江区',
                'type' => 3,
            ),
            447 => 
            array (
                'id' => 1948,
                'parent_id' => 231,
                'name' => '仪征市',
                'type' => 3,
            ),
            448 => 
            array (
                'id' => 1949,
                'parent_id' => 231,
                'name' => '高邮市',
                'type' => 3,
            ),
            449 => 
            array (
                'id' => 1950,
                'parent_id' => 231,
                'name' => '江都市',
                'type' => 3,
            ),
            450 => 
            array (
                'id' => 1951,
                'parent_id' => 231,
                'name' => '宝应县',
                'type' => 3,
            ),
            451 => 
            array (
                'id' => 1952,
                'parent_id' => 232,
                'name' => '京口区',
                'type' => 3,
            ),
            452 => 
            array (
                'id' => 1953,
                'parent_id' => 232,
                'name' => '润州区',
                'type' => 3,
            ),
            453 => 
            array (
                'id' => 1954,
                'parent_id' => 232,
                'name' => '丹徒区',
                'type' => 3,
            ),
            454 => 
            array (
                'id' => 1955,
                'parent_id' => 232,
                'name' => '丹阳市',
                'type' => 3,
            ),
            455 => 
            array (
                'id' => 1956,
                'parent_id' => 232,
                'name' => '扬中市',
                'type' => 3,
            ),
            456 => 
            array (
                'id' => 1957,
                'parent_id' => 232,
                'name' => '句容市',
                'type' => 3,
            ),
            457 => 
            array (
                'id' => 1958,
                'parent_id' => 233,
                'name' => '东湖区',
                'type' => 3,
            ),
            458 => 
            array (
                'id' => 1959,
                'parent_id' => 233,
                'name' => '西湖区',
                'type' => 3,
            ),
            459 => 
            array (
                'id' => 1960,
                'parent_id' => 233,
                'name' => '青云谱区',
                'type' => 3,
            ),
            460 => 
            array (
                'id' => 1961,
                'parent_id' => 233,
                'name' => '湾里区',
                'type' => 3,
            ),
            461 => 
            array (
                'id' => 1962,
                'parent_id' => 233,
                'name' => '青山湖区',
                'type' => 3,
            ),
            462 => 
            array (
                'id' => 1963,
                'parent_id' => 233,
                'name' => '红谷滩新区',
                'type' => 3,
            ),
            463 => 
            array (
                'id' => 1964,
                'parent_id' => 233,
                'name' => '昌北区',
                'type' => 3,
            ),
            464 => 
            array (
                'id' => 1965,
                'parent_id' => 233,
                'name' => '高新区',
                'type' => 3,
            ),
            465 => 
            array (
                'id' => 1966,
                'parent_id' => 233,
                'name' => '南昌县',
                'type' => 3,
            ),
            466 => 
            array (
                'id' => 1967,
                'parent_id' => 233,
                'name' => '新建县',
                'type' => 3,
            ),
            467 => 
            array (
                'id' => 1968,
                'parent_id' => 233,
                'name' => '安义县',
                'type' => 3,
            ),
            468 => 
            array (
                'id' => 1969,
                'parent_id' => 233,
                'name' => '进贤县',
                'type' => 3,
            ),
            469 => 
            array (
                'id' => 1970,
                'parent_id' => 234,
                'name' => '临川区',
                'type' => 3,
            ),
            470 => 
            array (
                'id' => 1971,
                'parent_id' => 234,
                'name' => '南城县',
                'type' => 3,
            ),
            471 => 
            array (
                'id' => 1972,
                'parent_id' => 234,
                'name' => '黎川县',
                'type' => 3,
            ),
            472 => 
            array (
                'id' => 1973,
                'parent_id' => 234,
                'name' => '南丰县',
                'type' => 3,
            ),
            473 => 
            array (
                'id' => 1974,
                'parent_id' => 234,
                'name' => '崇仁县',
                'type' => 3,
            ),
            474 => 
            array (
                'id' => 1975,
                'parent_id' => 234,
                'name' => '乐安县',
                'type' => 3,
            ),
            475 => 
            array (
                'id' => 1976,
                'parent_id' => 234,
                'name' => '宜黄县',
                'type' => 3,
            ),
            476 => 
            array (
                'id' => 1977,
                'parent_id' => 234,
                'name' => '金溪县',
                'type' => 3,
            ),
            477 => 
            array (
                'id' => 1978,
                'parent_id' => 234,
                'name' => '资溪县',
                'type' => 3,
            ),
            478 => 
            array (
                'id' => 1979,
                'parent_id' => 234,
                'name' => '东乡县',
                'type' => 3,
            ),
            479 => 
            array (
                'id' => 1980,
                'parent_id' => 234,
                'name' => '广昌县',
                'type' => 3,
            ),
            480 => 
            array (
                'id' => 1981,
                'parent_id' => 235,
                'name' => '章贡区',
                'type' => 3,
            ),
            481 => 
            array (
                'id' => 1982,
                'parent_id' => 235,
                'name' => '于都县',
                'type' => 3,
            ),
            482 => 
            array (
                'id' => 1983,
                'parent_id' => 235,
                'name' => '瑞金市',
                'type' => 3,
            ),
            483 => 
            array (
                'id' => 1984,
                'parent_id' => 235,
                'name' => '南康市',
                'type' => 3,
            ),
            484 => 
            array (
                'id' => 1985,
                'parent_id' => 235,
                'name' => '赣县',
                'type' => 3,
            ),
            485 => 
            array (
                'id' => 1986,
                'parent_id' => 235,
                'name' => '信丰县',
                'type' => 3,
            ),
            486 => 
            array (
                'id' => 1987,
                'parent_id' => 235,
                'name' => '大余县',
                'type' => 3,
            ),
            487 => 
            array (
                'id' => 1988,
                'parent_id' => 235,
                'name' => '上犹县',
                'type' => 3,
            ),
            488 => 
            array (
                'id' => 1989,
                'parent_id' => 235,
                'name' => '崇义县',
                'type' => 3,
            ),
            489 => 
            array (
                'id' => 1990,
                'parent_id' => 235,
                'name' => '安远县',
                'type' => 3,
            ),
            490 => 
            array (
                'id' => 1991,
                'parent_id' => 235,
                'name' => '龙南县',
                'type' => 3,
            ),
            491 => 
            array (
                'id' => 1992,
                'parent_id' => 235,
                'name' => '定南县',
                'type' => 3,
            ),
            492 => 
            array (
                'id' => 1993,
                'parent_id' => 235,
                'name' => '全南县',
                'type' => 3,
            ),
            493 => 
            array (
                'id' => 1994,
                'parent_id' => 235,
                'name' => '宁都县',
                'type' => 3,
            ),
            494 => 
            array (
                'id' => 1995,
                'parent_id' => 235,
                'name' => '兴国县',
                'type' => 3,
            ),
            495 => 
            array (
                'id' => 1996,
                'parent_id' => 235,
                'name' => '会昌县',
                'type' => 3,
            ),
            496 => 
            array (
                'id' => 1997,
                'parent_id' => 235,
                'name' => '寻乌县',
                'type' => 3,
            ),
            497 => 
            array (
                'id' => 1998,
                'parent_id' => 235,
                'name' => '石城县',
                'type' => 3,
            ),
            498 => 
            array (
                'id' => 1999,
                'parent_id' => 236,
                'name' => '安福县',
                'type' => 3,
            ),
            499 => 
            array (
                'id' => 2000,
                'parent_id' => 236,
                'name' => '吉州区',
                'type' => 3,
            ),
        ));
        \DB::table('china_area')->insert(array (
            0 => 
            array (
                'id' => 2001,
                'parent_id' => 236,
                'name' => '青原区',
                'type' => 3,
            ),
            1 => 
            array (
                'id' => 2002,
                'parent_id' => 236,
                'name' => '井冈山市',
                'type' => 3,
            ),
            2 => 
            array (
                'id' => 2003,
                'parent_id' => 236,
                'name' => '吉安县',
                'type' => 3,
            ),
            3 => 
            array (
                'id' => 2004,
                'parent_id' => 236,
                'name' => '吉水县',
                'type' => 3,
            ),
            4 => 
            array (
                'id' => 2005,
                'parent_id' => 236,
                'name' => '峡江县',
                'type' => 3,
            ),
            5 => 
            array (
                'id' => 2006,
                'parent_id' => 236,
                'name' => '新干县',
                'type' => 3,
            ),
            6 => 
            array (
                'id' => 2007,
                'parent_id' => 236,
                'name' => '永丰县',
                'type' => 3,
            ),
            7 => 
            array (
                'id' => 2008,
                'parent_id' => 236,
                'name' => '泰和县',
                'type' => 3,
            ),
            8 => 
            array (
                'id' => 2009,
                'parent_id' => 236,
                'name' => '遂川县',
                'type' => 3,
            ),
            9 => 
            array (
                'id' => 2010,
                'parent_id' => 236,
                'name' => '万安县',
                'type' => 3,
            ),
            10 => 
            array (
                'id' => 2011,
                'parent_id' => 236,
                'name' => '永新县',
                'type' => 3,
            ),
            11 => 
            array (
                'id' => 2012,
                'parent_id' => 237,
                'name' => '珠山区',
                'type' => 3,
            ),
            12 => 
            array (
                'id' => 2013,
                'parent_id' => 237,
                'name' => '昌江区',
                'type' => 3,
            ),
            13 => 
            array (
                'id' => 2014,
                'parent_id' => 237,
                'name' => '乐平市',
                'type' => 3,
            ),
            14 => 
            array (
                'id' => 2015,
                'parent_id' => 237,
                'name' => '浮梁县',
                'type' => 3,
            ),
            15 => 
            array (
                'id' => 2016,
                'parent_id' => 238,
                'name' => '浔阳区',
                'type' => 3,
            ),
            16 => 
            array (
                'id' => 2017,
                'parent_id' => 238,
                'name' => '庐山区',
                'type' => 3,
            ),
            17 => 
            array (
                'id' => 2018,
                'parent_id' => 238,
                'name' => '瑞昌市',
                'type' => 3,
            ),
            18 => 
            array (
                'id' => 2019,
                'parent_id' => 238,
                'name' => '九江县',
                'type' => 3,
            ),
            19 => 
            array (
                'id' => 2020,
                'parent_id' => 238,
                'name' => '武宁县',
                'type' => 3,
            ),
            20 => 
            array (
                'id' => 2021,
                'parent_id' => 238,
                'name' => '修水县',
                'type' => 3,
            ),
            21 => 
            array (
                'id' => 2022,
                'parent_id' => 238,
                'name' => '永修县',
                'type' => 3,
            ),
            22 => 
            array (
                'id' => 2023,
                'parent_id' => 238,
                'name' => '德安县',
                'type' => 3,
            ),
            23 => 
            array (
                'id' => 2024,
                'parent_id' => 238,
                'name' => '星子县',
                'type' => 3,
            ),
            24 => 
            array (
                'id' => 2025,
                'parent_id' => 238,
                'name' => '都昌县',
                'type' => 3,
            ),
            25 => 
            array (
                'id' => 2026,
                'parent_id' => 238,
                'name' => '湖口县',
                'type' => 3,
            ),
            26 => 
            array (
                'id' => 2027,
                'parent_id' => 238,
                'name' => '彭泽县',
                'type' => 3,
            ),
            27 => 
            array (
                'id' => 2028,
                'parent_id' => 239,
                'name' => '安源区',
                'type' => 3,
            ),
            28 => 
            array (
                'id' => 2029,
                'parent_id' => 239,
                'name' => '湘东区',
                'type' => 3,
            ),
            29 => 
            array (
                'id' => 2030,
                'parent_id' => 239,
                'name' => '莲花县',
                'type' => 3,
            ),
            30 => 
            array (
                'id' => 2031,
                'parent_id' => 239,
                'name' => '芦溪县',
                'type' => 3,
            ),
            31 => 
            array (
                'id' => 2032,
                'parent_id' => 239,
                'name' => '上栗县',
                'type' => 3,
            ),
            32 => 
            array (
                'id' => 2033,
                'parent_id' => 240,
                'name' => '信州区',
                'type' => 3,
            ),
            33 => 
            array (
                'id' => 2034,
                'parent_id' => 240,
                'name' => '德兴市',
                'type' => 3,
            ),
            34 => 
            array (
                'id' => 2035,
                'parent_id' => 240,
                'name' => '上饶县',
                'type' => 3,
            ),
            35 => 
            array (
                'id' => 2036,
                'parent_id' => 240,
                'name' => '广丰县',
                'type' => 3,
            ),
            36 => 
            array (
                'id' => 2037,
                'parent_id' => 240,
                'name' => '玉山县',
                'type' => 3,
            ),
            37 => 
            array (
                'id' => 2038,
                'parent_id' => 240,
                'name' => '铅山县',
                'type' => 3,
            ),
            38 => 
            array (
                'id' => 2039,
                'parent_id' => 240,
                'name' => '横峰县',
                'type' => 3,
            ),
            39 => 
            array (
                'id' => 2040,
                'parent_id' => 240,
                'name' => '弋阳县',
                'type' => 3,
            ),
            40 => 
            array (
                'id' => 2041,
                'parent_id' => 240,
                'name' => '余干县',
                'type' => 3,
            ),
            41 => 
            array (
                'id' => 2042,
                'parent_id' => 240,
                'name' => '波阳县',
                'type' => 3,
            ),
            42 => 
            array (
                'id' => 2043,
                'parent_id' => 240,
                'name' => '万年县',
                'type' => 3,
            ),
            43 => 
            array (
                'id' => 2044,
                'parent_id' => 240,
                'name' => '婺源县',
                'type' => 3,
            ),
            44 => 
            array (
                'id' => 2045,
                'parent_id' => 241,
                'name' => '渝水区',
                'type' => 3,
            ),
            45 => 
            array (
                'id' => 2046,
                'parent_id' => 241,
                'name' => '分宜县',
                'type' => 3,
            ),
            46 => 
            array (
                'id' => 2047,
                'parent_id' => 242,
                'name' => '袁州区',
                'type' => 3,
            ),
            47 => 
            array (
                'id' => 2048,
                'parent_id' => 242,
                'name' => '丰城市',
                'type' => 3,
            ),
            48 => 
            array (
                'id' => 2049,
                'parent_id' => 242,
                'name' => '樟树市',
                'type' => 3,
            ),
            49 => 
            array (
                'id' => 2050,
                'parent_id' => 242,
                'name' => '高安市',
                'type' => 3,
            ),
            50 => 
            array (
                'id' => 2051,
                'parent_id' => 242,
                'name' => '奉新县',
                'type' => 3,
            ),
            51 => 
            array (
                'id' => 2052,
                'parent_id' => 242,
                'name' => '万载县',
                'type' => 3,
            ),
            52 => 
            array (
                'id' => 2053,
                'parent_id' => 242,
                'name' => '上高县',
                'type' => 3,
            ),
            53 => 
            array (
                'id' => 2054,
                'parent_id' => 242,
                'name' => '宜丰县',
                'type' => 3,
            ),
            54 => 
            array (
                'id' => 2055,
                'parent_id' => 242,
                'name' => '靖安县',
                'type' => 3,
            ),
            55 => 
            array (
                'id' => 2056,
                'parent_id' => 242,
                'name' => '铜鼓县',
                'type' => 3,
            ),
            56 => 
            array (
                'id' => 2057,
                'parent_id' => 243,
                'name' => '月湖区',
                'type' => 3,
            ),
            57 => 
            array (
                'id' => 2058,
                'parent_id' => 243,
                'name' => '贵溪市',
                'type' => 3,
            ),
            58 => 
            array (
                'id' => 2059,
                'parent_id' => 243,
                'name' => '余江县',
                'type' => 3,
            ),
            59 => 
            array (
                'id' => 2060,
                'parent_id' => 244,
                'name' => '沈河区',
                'type' => 3,
            ),
            60 => 
            array (
                'id' => 2061,
                'parent_id' => 244,
                'name' => '皇姑区',
                'type' => 3,
            ),
            61 => 
            array (
                'id' => 2062,
                'parent_id' => 244,
                'name' => '和平区',
                'type' => 3,
            ),
            62 => 
            array (
                'id' => 2063,
                'parent_id' => 244,
                'name' => '大东区',
                'type' => 3,
            ),
            63 => 
            array (
                'id' => 2064,
                'parent_id' => 244,
                'name' => '铁西区',
                'type' => 3,
            ),
            64 => 
            array (
                'id' => 2065,
                'parent_id' => 244,
                'name' => '苏家屯区',
                'type' => 3,
            ),
            65 => 
            array (
                'id' => 2066,
                'parent_id' => 244,
                'name' => '东陵区',
                'type' => 3,
            ),
            66 => 
            array (
                'id' => 2067,
                'parent_id' => 244,
                'name' => '沈北新区',
                'type' => 3,
            ),
            67 => 
            array (
                'id' => 2068,
                'parent_id' => 244,
                'name' => '于洪区',
                'type' => 3,
            ),
            68 => 
            array (
                'id' => 2069,
                'parent_id' => 244,
                'name' => '浑南新区',
                'type' => 3,
            ),
            69 => 
            array (
                'id' => 2070,
                'parent_id' => 244,
                'name' => '新民市',
                'type' => 3,
            ),
            70 => 
            array (
                'id' => 2071,
                'parent_id' => 244,
                'name' => '辽中县',
                'type' => 3,
            ),
            71 => 
            array (
                'id' => 2072,
                'parent_id' => 244,
                'name' => '康平县',
                'type' => 3,
            ),
            72 => 
            array (
                'id' => 2073,
                'parent_id' => 244,
                'name' => '法库县',
                'type' => 3,
            ),
            73 => 
            array (
                'id' => 2074,
                'parent_id' => 245,
                'name' => '西岗区',
                'type' => 3,
            ),
            74 => 
            array (
                'id' => 2075,
                'parent_id' => 245,
                'name' => '中山区',
                'type' => 3,
            ),
            75 => 
            array (
                'id' => 2076,
                'parent_id' => 245,
                'name' => '沙河口区',
                'type' => 3,
            ),
            76 => 
            array (
                'id' => 2077,
                'parent_id' => 245,
                'name' => '甘井子区',
                'type' => 3,
            ),
            77 => 
            array (
                'id' => 2078,
                'parent_id' => 245,
                'name' => '旅顺口区',
                'type' => 3,
            ),
            78 => 
            array (
                'id' => 2079,
                'parent_id' => 245,
                'name' => '金州区',
                'type' => 3,
            ),
            79 => 
            array (
                'id' => 2080,
                'parent_id' => 245,
                'name' => '开发区',
                'type' => 3,
            ),
            80 => 
            array (
                'id' => 2081,
                'parent_id' => 245,
                'name' => '瓦房店市',
                'type' => 3,
            ),
            81 => 
            array (
                'id' => 2082,
                'parent_id' => 245,
                'name' => '普兰店市',
                'type' => 3,
            ),
            82 => 
            array (
                'id' => 2083,
                'parent_id' => 245,
                'name' => '庄河市',
                'type' => 3,
            ),
            83 => 
            array (
                'id' => 2084,
                'parent_id' => 245,
                'name' => '长海县',
                'type' => 3,
            ),
            84 => 
            array (
                'id' => 2085,
                'parent_id' => 246,
                'name' => '铁东区',
                'type' => 3,
            ),
            85 => 
            array (
                'id' => 2086,
                'parent_id' => 246,
                'name' => '铁西区',
                'type' => 3,
            ),
            86 => 
            array (
                'id' => 2087,
                'parent_id' => 246,
                'name' => '立山区',
                'type' => 3,
            ),
            87 => 
            array (
                'id' => 2088,
                'parent_id' => 246,
                'name' => '千山区',
                'type' => 3,
            ),
            88 => 
            array (
                'id' => 2089,
                'parent_id' => 246,
                'name' => '岫岩',
                'type' => 3,
            ),
            89 => 
            array (
                'id' => 2090,
                'parent_id' => 246,
                'name' => '海城市',
                'type' => 3,
            ),
            90 => 
            array (
                'id' => 2091,
                'parent_id' => 246,
                'name' => '台安县',
                'type' => 3,
            ),
            91 => 
            array (
                'id' => 2092,
                'parent_id' => 247,
                'name' => '本溪',
                'type' => 3,
            ),
            92 => 
            array (
                'id' => 2093,
                'parent_id' => 247,
                'name' => '平山区',
                'type' => 3,
            ),
            93 => 
            array (
                'id' => 2094,
                'parent_id' => 247,
                'name' => '明山区',
                'type' => 3,
            ),
            94 => 
            array (
                'id' => 2095,
                'parent_id' => 247,
                'name' => '溪湖区',
                'type' => 3,
            ),
            95 => 
            array (
                'id' => 2096,
                'parent_id' => 247,
                'name' => '南芬区',
                'type' => 3,
            ),
            96 => 
            array (
                'id' => 2097,
                'parent_id' => 247,
                'name' => '桓仁',
                'type' => 3,
            ),
            97 => 
            array (
                'id' => 2098,
                'parent_id' => 248,
                'name' => '双塔区',
                'type' => 3,
            ),
            98 => 
            array (
                'id' => 2099,
                'parent_id' => 248,
                'name' => '龙城区',
                'type' => 3,
            ),
            99 => 
            array (
                'id' => 2100,
                'parent_id' => 248,
                'name' => '喀喇沁左翼蒙古族自治县',
                'type' => 3,
            ),
            100 => 
            array (
                'id' => 2101,
                'parent_id' => 248,
                'name' => '北票市',
                'type' => 3,
            ),
            101 => 
            array (
                'id' => 2102,
                'parent_id' => 248,
                'name' => '凌源市',
                'type' => 3,
            ),
            102 => 
            array (
                'id' => 2103,
                'parent_id' => 248,
                'name' => '朝阳县',
                'type' => 3,
            ),
            103 => 
            array (
                'id' => 2104,
                'parent_id' => 248,
                'name' => '建平县',
                'type' => 3,
            ),
            104 => 
            array (
                'id' => 2105,
                'parent_id' => 249,
                'name' => '振兴区',
                'type' => 3,
            ),
            105 => 
            array (
                'id' => 2106,
                'parent_id' => 249,
                'name' => '元宝区',
                'type' => 3,
            ),
            106 => 
            array (
                'id' => 2107,
                'parent_id' => 249,
                'name' => '振安区',
                'type' => 3,
            ),
            107 => 
            array (
                'id' => 2108,
                'parent_id' => 249,
                'name' => '宽甸',
                'type' => 3,
            ),
            108 => 
            array (
                'id' => 2109,
                'parent_id' => 249,
                'name' => '东港市',
                'type' => 3,
            ),
            109 => 
            array (
                'id' => 2110,
                'parent_id' => 249,
                'name' => '凤城市',
                'type' => 3,
            ),
            110 => 
            array (
                'id' => 2111,
                'parent_id' => 250,
                'name' => '顺城区',
                'type' => 3,
            ),
            111 => 
            array (
                'id' => 2112,
                'parent_id' => 250,
                'name' => '新抚区',
                'type' => 3,
            ),
            112 => 
            array (
                'id' => 2113,
                'parent_id' => 250,
                'name' => '东洲区',
                'type' => 3,
            ),
            113 => 
            array (
                'id' => 2114,
                'parent_id' => 250,
                'name' => '望花区',
                'type' => 3,
            ),
            114 => 
            array (
                'id' => 2115,
                'parent_id' => 250,
                'name' => '清原',
                'type' => 3,
            ),
            115 => 
            array (
                'id' => 2116,
                'parent_id' => 250,
                'name' => '新宾',
                'type' => 3,
            ),
            116 => 
            array (
                'id' => 2117,
                'parent_id' => 250,
                'name' => '抚顺县',
                'type' => 3,
            ),
            117 => 
            array (
                'id' => 2118,
                'parent_id' => 251,
                'name' => '阜新',
                'type' => 3,
            ),
            118 => 
            array (
                'id' => 2119,
                'parent_id' => 251,
                'name' => '海州区',
                'type' => 3,
            ),
            119 => 
            array (
                'id' => 2120,
                'parent_id' => 251,
                'name' => '新邱区',
                'type' => 3,
            ),
            120 => 
            array (
                'id' => 2121,
                'parent_id' => 251,
                'name' => '太平区',
                'type' => 3,
            ),
            121 => 
            array (
                'id' => 2122,
                'parent_id' => 251,
                'name' => '清河门区',
                'type' => 3,
            ),
            122 => 
            array (
                'id' => 2123,
                'parent_id' => 251,
                'name' => '细河区',
                'type' => 3,
            ),
            123 => 
            array (
                'id' => 2124,
                'parent_id' => 251,
                'name' => '彰武县',
                'type' => 3,
            ),
            124 => 
            array (
                'id' => 2125,
                'parent_id' => 252,
                'name' => '龙港区',
                'type' => 3,
            ),
            125 => 
            array (
                'id' => 2126,
                'parent_id' => 252,
                'name' => '南票区',
                'type' => 3,
            ),
            126 => 
            array (
                'id' => 2127,
                'parent_id' => 252,
                'name' => '连山区',
                'type' => 3,
            ),
            127 => 
            array (
                'id' => 2128,
                'parent_id' => 252,
                'name' => '兴城市',
                'type' => 3,
            ),
            128 => 
            array (
                'id' => 2129,
                'parent_id' => 252,
                'name' => '绥中县',
                'type' => 3,
            ),
            129 => 
            array (
                'id' => 2130,
                'parent_id' => 252,
                'name' => '建昌县',
                'type' => 3,
            ),
            130 => 
            array (
                'id' => 2131,
                'parent_id' => 253,
                'name' => '太和区',
                'type' => 3,
            ),
            131 => 
            array (
                'id' => 2132,
                'parent_id' => 253,
                'name' => '古塔区',
                'type' => 3,
            ),
            132 => 
            array (
                'id' => 2133,
                'parent_id' => 253,
                'name' => '凌河区',
                'type' => 3,
            ),
            133 => 
            array (
                'id' => 2134,
                'parent_id' => 253,
                'name' => '凌海市',
                'type' => 3,
            ),
            134 => 
            array (
                'id' => 2135,
                'parent_id' => 253,
                'name' => '北镇市',
                'type' => 3,
            ),
            135 => 
            array (
                'id' => 2136,
                'parent_id' => 253,
                'name' => '黑山县',
                'type' => 3,
            ),
            136 => 
            array (
                'id' => 2137,
                'parent_id' => 253,
                'name' => '义县',
                'type' => 3,
            ),
            137 => 
            array (
                'id' => 2138,
                'parent_id' => 254,
                'name' => '白塔区',
                'type' => 3,
            ),
            138 => 
            array (
                'id' => 2139,
                'parent_id' => 254,
                'name' => '文圣区',
                'type' => 3,
            ),
            139 => 
            array (
                'id' => 2140,
                'parent_id' => 254,
                'name' => '宏伟区',
                'type' => 3,
            ),
            140 => 
            array (
                'id' => 2141,
                'parent_id' => 254,
                'name' => '太子河区',
                'type' => 3,
            ),
            141 => 
            array (
                'id' => 2142,
                'parent_id' => 254,
                'name' => '弓长岭区',
                'type' => 3,
            ),
            142 => 
            array (
                'id' => 2143,
                'parent_id' => 254,
                'name' => '灯塔市',
                'type' => 3,
            ),
            143 => 
            array (
                'id' => 2144,
                'parent_id' => 254,
                'name' => '辽阳县',
                'type' => 3,
            ),
            144 => 
            array (
                'id' => 2145,
                'parent_id' => 255,
                'name' => '双台子区',
                'type' => 3,
            ),
            145 => 
            array (
                'id' => 2146,
                'parent_id' => 255,
                'name' => '兴隆台区',
                'type' => 3,
            ),
            146 => 
            array (
                'id' => 2147,
                'parent_id' => 255,
                'name' => '大洼县',
                'type' => 3,
            ),
            147 => 
            array (
                'id' => 2148,
                'parent_id' => 255,
                'name' => '盘山县',
                'type' => 3,
            ),
            148 => 
            array (
                'id' => 2149,
                'parent_id' => 256,
                'name' => '银州区',
                'type' => 3,
            ),
            149 => 
            array (
                'id' => 2150,
                'parent_id' => 256,
                'name' => '清河区',
                'type' => 3,
            ),
            150 => 
            array (
                'id' => 2151,
                'parent_id' => 256,
                'name' => '调兵山市',
                'type' => 3,
            ),
            151 => 
            array (
                'id' => 2152,
                'parent_id' => 256,
                'name' => '开原市',
                'type' => 3,
            ),
            152 => 
            array (
                'id' => 2153,
                'parent_id' => 256,
                'name' => '铁岭县',
                'type' => 3,
            ),
            153 => 
            array (
                'id' => 2154,
                'parent_id' => 256,
                'name' => '西丰县',
                'type' => 3,
            ),
            154 => 
            array (
                'id' => 2155,
                'parent_id' => 256,
                'name' => '昌图县',
                'type' => 3,
            ),
            155 => 
            array (
                'id' => 2156,
                'parent_id' => 257,
                'name' => '站前区',
                'type' => 3,
            ),
            156 => 
            array (
                'id' => 2157,
                'parent_id' => 257,
                'name' => '西市区',
                'type' => 3,
            ),
            157 => 
            array (
                'id' => 2158,
                'parent_id' => 257,
                'name' => '鲅鱼圈区',
                'type' => 3,
            ),
            158 => 
            array (
                'id' => 2159,
                'parent_id' => 257,
                'name' => '老边区',
                'type' => 3,
            ),
            159 => 
            array (
                'id' => 2160,
                'parent_id' => 257,
                'name' => '盖州市',
                'type' => 3,
            ),
            160 => 
            array (
                'id' => 2161,
                'parent_id' => 257,
                'name' => '大石桥市',
                'type' => 3,
            ),
            161 => 
            array (
                'id' => 2162,
                'parent_id' => 258,
                'name' => '回民区',
                'type' => 3,
            ),
            162 => 
            array (
                'id' => 2163,
                'parent_id' => 258,
                'name' => '玉泉区',
                'type' => 3,
            ),
            163 => 
            array (
                'id' => 2164,
                'parent_id' => 258,
                'name' => '新城区',
                'type' => 3,
            ),
            164 => 
            array (
                'id' => 2165,
                'parent_id' => 258,
                'name' => '赛罕区',
                'type' => 3,
            ),
            165 => 
            array (
                'id' => 2166,
                'parent_id' => 258,
                'name' => '清水河县',
                'type' => 3,
            ),
            166 => 
            array (
                'id' => 2167,
                'parent_id' => 258,
                'name' => '土默特左旗',
                'type' => 3,
            ),
            167 => 
            array (
                'id' => 2168,
                'parent_id' => 258,
                'name' => '托克托县',
                'type' => 3,
            ),
            168 => 
            array (
                'id' => 2169,
                'parent_id' => 258,
                'name' => '和林格尔县',
                'type' => 3,
            ),
            169 => 
            array (
                'id' => 2170,
                'parent_id' => 258,
                'name' => '武川县',
                'type' => 3,
            ),
            170 => 
            array (
                'id' => 2171,
                'parent_id' => 259,
                'name' => '阿拉善左旗',
                'type' => 3,
            ),
            171 => 
            array (
                'id' => 2172,
                'parent_id' => 259,
                'name' => '阿拉善右旗',
                'type' => 3,
            ),
            172 => 
            array (
                'id' => 2173,
                'parent_id' => 259,
                'name' => '额济纳旗',
                'type' => 3,
            ),
            173 => 
            array (
                'id' => 2174,
                'parent_id' => 260,
                'name' => '临河区',
                'type' => 3,
            ),
            174 => 
            array (
                'id' => 2175,
                'parent_id' => 260,
                'name' => '五原县',
                'type' => 3,
            ),
            175 => 
            array (
                'id' => 2176,
                'parent_id' => 260,
                'name' => '磴口县',
                'type' => 3,
            ),
            176 => 
            array (
                'id' => 2177,
                'parent_id' => 260,
                'name' => '乌拉特前旗',
                'type' => 3,
            ),
            177 => 
            array (
                'id' => 2178,
                'parent_id' => 260,
                'name' => '乌拉特中旗',
                'type' => 3,
            ),
            178 => 
            array (
                'id' => 2179,
                'parent_id' => 260,
                'name' => '乌拉特后旗',
                'type' => 3,
            ),
            179 => 
            array (
                'id' => 2180,
                'parent_id' => 260,
                'name' => '杭锦后旗',
                'type' => 3,
            ),
            180 => 
            array (
                'id' => 2181,
                'parent_id' => 261,
                'name' => '昆都仑区',
                'type' => 3,
            ),
            181 => 
            array (
                'id' => 2182,
                'parent_id' => 261,
                'name' => '青山区',
                'type' => 3,
            ),
            182 => 
            array (
                'id' => 2183,
                'parent_id' => 261,
                'name' => '东河区',
                'type' => 3,
            ),
            183 => 
            array (
                'id' => 2184,
                'parent_id' => 261,
                'name' => '九原区',
                'type' => 3,
            ),
            184 => 
            array (
                'id' => 2185,
                'parent_id' => 261,
                'name' => '石拐区',
                'type' => 3,
            ),
            185 => 
            array (
                'id' => 2186,
                'parent_id' => 261,
                'name' => '白云矿区',
                'type' => 3,
            ),
            186 => 
            array (
                'id' => 2187,
                'parent_id' => 261,
                'name' => '土默特右旗',
                'type' => 3,
            ),
            187 => 
            array (
                'id' => 2188,
                'parent_id' => 261,
                'name' => '固阳县',
                'type' => 3,
            ),
            188 => 
            array (
                'id' => 2189,
                'parent_id' => 261,
                'name' => '达尔罕茂明安联合旗',
                'type' => 3,
            ),
            189 => 
            array (
                'id' => 2190,
                'parent_id' => 262,
                'name' => '红山区',
                'type' => 3,
            ),
            190 => 
            array (
                'id' => 2191,
                'parent_id' => 262,
                'name' => '元宝山区',
                'type' => 3,
            ),
            191 => 
            array (
                'id' => 2192,
                'parent_id' => 262,
                'name' => '松山区',
                'type' => 3,
            ),
            192 => 
            array (
                'id' => 2193,
                'parent_id' => 262,
                'name' => '阿鲁科尔沁旗',
                'type' => 3,
            ),
            193 => 
            array (
                'id' => 2194,
                'parent_id' => 262,
                'name' => '巴林左旗',
                'type' => 3,
            ),
            194 => 
            array (
                'id' => 2195,
                'parent_id' => 262,
                'name' => '巴林右旗',
                'type' => 3,
            ),
            195 => 
            array (
                'id' => 2196,
                'parent_id' => 262,
                'name' => '林西县',
                'type' => 3,
            ),
            196 => 
            array (
                'id' => 2197,
                'parent_id' => 262,
                'name' => '克什克腾旗',
                'type' => 3,
            ),
            197 => 
            array (
                'id' => 2198,
                'parent_id' => 262,
                'name' => '翁牛特旗',
                'type' => 3,
            ),
            198 => 
            array (
                'id' => 2199,
                'parent_id' => 262,
                'name' => '喀喇沁旗',
                'type' => 3,
            ),
            199 => 
            array (
                'id' => 2200,
                'parent_id' => 262,
                'name' => '宁城县',
                'type' => 3,
            ),
            200 => 
            array (
                'id' => 2201,
                'parent_id' => 262,
                'name' => '敖汉旗',
                'type' => 3,
            ),
            201 => 
            array (
                'id' => 2202,
                'parent_id' => 263,
                'name' => '东胜区',
                'type' => 3,
            ),
            202 => 
            array (
                'id' => 2203,
                'parent_id' => 263,
                'name' => '达拉特旗',
                'type' => 3,
            ),
            203 => 
            array (
                'id' => 2204,
                'parent_id' => 263,
                'name' => '准格尔旗',
                'type' => 3,
            ),
            204 => 
            array (
                'id' => 2205,
                'parent_id' => 263,
                'name' => '鄂托克前旗',
                'type' => 3,
            ),
            205 => 
            array (
                'id' => 2206,
                'parent_id' => 263,
                'name' => '鄂托克旗',
                'type' => 3,
            ),
            206 => 
            array (
                'id' => 2207,
                'parent_id' => 263,
                'name' => '杭锦旗',
                'type' => 3,
            ),
            207 => 
            array (
                'id' => 2208,
                'parent_id' => 263,
                'name' => '乌审旗',
                'type' => 3,
            ),
            208 => 
            array (
                'id' => 2209,
                'parent_id' => 263,
                'name' => '伊金霍洛旗',
                'type' => 3,
            ),
            209 => 
            array (
                'id' => 2210,
                'parent_id' => 264,
                'name' => '海拉尔区',
                'type' => 3,
            ),
            210 => 
            array (
                'id' => 2211,
                'parent_id' => 264,
                'name' => '莫力达瓦',
                'type' => 3,
            ),
            211 => 
            array (
                'id' => 2212,
                'parent_id' => 264,
                'name' => '满洲里市',
                'type' => 3,
            ),
            212 => 
            array (
                'id' => 2213,
                'parent_id' => 264,
                'name' => '牙克石市',
                'type' => 3,
            ),
            213 => 
            array (
                'id' => 2214,
                'parent_id' => 264,
                'name' => '扎兰屯市',
                'type' => 3,
            ),
            214 => 
            array (
                'id' => 2215,
                'parent_id' => 264,
                'name' => '额尔古纳市',
                'type' => 3,
            ),
            215 => 
            array (
                'id' => 2216,
                'parent_id' => 264,
                'name' => '根河市',
                'type' => 3,
            ),
            216 => 
            array (
                'id' => 2217,
                'parent_id' => 264,
                'name' => '阿荣旗',
                'type' => 3,
            ),
            217 => 
            array (
                'id' => 2218,
                'parent_id' => 264,
                'name' => '鄂伦春自治旗',
                'type' => 3,
            ),
            218 => 
            array (
                'id' => 2219,
                'parent_id' => 264,
                'name' => '鄂温克族自治旗',
                'type' => 3,
            ),
            219 => 
            array (
                'id' => 2220,
                'parent_id' => 264,
                'name' => '陈巴尔虎旗',
                'type' => 3,
            ),
            220 => 
            array (
                'id' => 2221,
                'parent_id' => 264,
                'name' => '新巴尔虎左旗',
                'type' => 3,
            ),
            221 => 
            array (
                'id' => 2222,
                'parent_id' => 264,
                'name' => '新巴尔虎右旗',
                'type' => 3,
            ),
            222 => 
            array (
                'id' => 2223,
                'parent_id' => 265,
                'name' => '科尔沁区',
                'type' => 3,
            ),
            223 => 
            array (
                'id' => 2224,
                'parent_id' => 265,
                'name' => '霍林郭勒市',
                'type' => 3,
            ),
            224 => 
            array (
                'id' => 2225,
                'parent_id' => 265,
                'name' => '科尔沁左翼中旗',
                'type' => 3,
            ),
            225 => 
            array (
                'id' => 2226,
                'parent_id' => 265,
                'name' => '科尔沁左翼后旗',
                'type' => 3,
            ),
            226 => 
            array (
                'id' => 2227,
                'parent_id' => 265,
                'name' => '开鲁县',
                'type' => 3,
            ),
            227 => 
            array (
                'id' => 2228,
                'parent_id' => 265,
                'name' => '库伦旗',
                'type' => 3,
            ),
            228 => 
            array (
                'id' => 2229,
                'parent_id' => 265,
                'name' => '奈曼旗',
                'type' => 3,
            ),
            229 => 
            array (
                'id' => 2230,
                'parent_id' => 265,
                'name' => '扎鲁特旗',
                'type' => 3,
            ),
            230 => 
            array (
                'id' => 2231,
                'parent_id' => 266,
                'name' => '海勃湾区',
                'type' => 3,
            ),
            231 => 
            array (
                'id' => 2232,
                'parent_id' => 266,
                'name' => '乌达区',
                'type' => 3,
            ),
            232 => 
            array (
                'id' => 2233,
                'parent_id' => 266,
                'name' => '海南区',
                'type' => 3,
            ),
            233 => 
            array (
                'id' => 2234,
                'parent_id' => 267,
                'name' => '化德县',
                'type' => 3,
            ),
            234 => 
            array (
                'id' => 2235,
                'parent_id' => 267,
                'name' => '集宁区',
                'type' => 3,
            ),
            235 => 
            array (
                'id' => 2236,
                'parent_id' => 267,
                'name' => '丰镇市',
                'type' => 3,
            ),
            236 => 
            array (
                'id' => 2237,
                'parent_id' => 267,
                'name' => '卓资县',
                'type' => 3,
            ),
            237 => 
            array (
                'id' => 2238,
                'parent_id' => 267,
                'name' => '商都县',
                'type' => 3,
            ),
            238 => 
            array (
                'id' => 2239,
                'parent_id' => 267,
                'name' => '兴和县',
                'type' => 3,
            ),
            239 => 
            array (
                'id' => 2240,
                'parent_id' => 267,
                'name' => '凉城县',
                'type' => 3,
            ),
            240 => 
            array (
                'id' => 2241,
                'parent_id' => 267,
                'name' => '察哈尔右翼前旗',
                'type' => 3,
            ),
            241 => 
            array (
                'id' => 2242,
                'parent_id' => 267,
                'name' => '察哈尔右翼中旗',
                'type' => 3,
            ),
            242 => 
            array (
                'id' => 2243,
                'parent_id' => 267,
                'name' => '察哈尔右翼后旗',
                'type' => 3,
            ),
            243 => 
            array (
                'id' => 2244,
                'parent_id' => 267,
                'name' => '四子王旗',
                'type' => 3,
            ),
            244 => 
            array (
                'id' => 2245,
                'parent_id' => 268,
                'name' => '二连浩特市',
                'type' => 3,
            ),
            245 => 
            array (
                'id' => 2246,
                'parent_id' => 268,
                'name' => '锡林浩特市',
                'type' => 3,
            ),
            246 => 
            array (
                'id' => 2247,
                'parent_id' => 268,
                'name' => '阿巴嘎旗',
                'type' => 3,
            ),
            247 => 
            array (
                'id' => 2248,
                'parent_id' => 268,
                'name' => '苏尼特左旗',
                'type' => 3,
            ),
            248 => 
            array (
                'id' => 2249,
                'parent_id' => 268,
                'name' => '苏尼特右旗',
                'type' => 3,
            ),
            249 => 
            array (
                'id' => 2250,
                'parent_id' => 268,
                'name' => '东乌珠穆沁旗',
                'type' => 3,
            ),
            250 => 
            array (
                'id' => 2251,
                'parent_id' => 268,
                'name' => '西乌珠穆沁旗',
                'type' => 3,
            ),
            251 => 
            array (
                'id' => 2252,
                'parent_id' => 268,
                'name' => '太仆寺旗',
                'type' => 3,
            ),
            252 => 
            array (
                'id' => 2253,
                'parent_id' => 268,
                'name' => '镶黄旗',
                'type' => 3,
            ),
            253 => 
            array (
                'id' => 2254,
                'parent_id' => 268,
                'name' => '正镶白旗',
                'type' => 3,
            ),
            254 => 
            array (
                'id' => 2255,
                'parent_id' => 268,
                'name' => '正蓝旗',
                'type' => 3,
            ),
            255 => 
            array (
                'id' => 2256,
                'parent_id' => 268,
                'name' => '多伦县',
                'type' => 3,
            ),
            256 => 
            array (
                'id' => 2257,
                'parent_id' => 269,
                'name' => '乌兰浩特市',
                'type' => 3,
            ),
            257 => 
            array (
                'id' => 2258,
                'parent_id' => 269,
                'name' => '阿尔山市',
                'type' => 3,
            ),
            258 => 
            array (
                'id' => 2259,
                'parent_id' => 269,
                'name' => '科尔沁右翼前旗',
                'type' => 3,
            ),
            259 => 
            array (
                'id' => 2260,
                'parent_id' => 269,
                'name' => '科尔沁右翼中旗',
                'type' => 3,
            ),
            260 => 
            array (
                'id' => 2261,
                'parent_id' => 269,
                'name' => '扎赉特旗',
                'type' => 3,
            ),
            261 => 
            array (
                'id' => 2262,
                'parent_id' => 269,
                'name' => '突泉县',
                'type' => 3,
            ),
            262 => 
            array (
                'id' => 2263,
                'parent_id' => 270,
                'name' => '西夏区',
                'type' => 3,
            ),
            263 => 
            array (
                'id' => 2264,
                'parent_id' => 270,
                'name' => '金凤区',
                'type' => 3,
            ),
            264 => 
            array (
                'id' => 2265,
                'parent_id' => 270,
                'name' => '兴庆区',
                'type' => 3,
            ),
            265 => 
            array (
                'id' => 2266,
                'parent_id' => 270,
                'name' => '灵武市',
                'type' => 3,
            ),
            266 => 
            array (
                'id' => 2267,
                'parent_id' => 270,
                'name' => '永宁县',
                'type' => 3,
            ),
            267 => 
            array (
                'id' => 2268,
                'parent_id' => 270,
                'name' => '贺兰县',
                'type' => 3,
            ),
            268 => 
            array (
                'id' => 2269,
                'parent_id' => 271,
                'name' => '原州区',
                'type' => 3,
            ),
            269 => 
            array (
                'id' => 2270,
                'parent_id' => 271,
                'name' => '海原县',
                'type' => 3,
            ),
            270 => 
            array (
                'id' => 2271,
                'parent_id' => 271,
                'name' => '西吉县',
                'type' => 3,
            ),
            271 => 
            array (
                'id' => 2272,
                'parent_id' => 271,
                'name' => '隆德县',
                'type' => 3,
            ),
            272 => 
            array (
                'id' => 2273,
                'parent_id' => 271,
                'name' => '泾源县',
                'type' => 3,
            ),
            273 => 
            array (
                'id' => 2274,
                'parent_id' => 271,
                'name' => '彭阳县',
                'type' => 3,
            ),
            274 => 
            array (
                'id' => 2275,
                'parent_id' => 272,
                'name' => '惠农县',
                'type' => 3,
            ),
            275 => 
            array (
                'id' => 2276,
                'parent_id' => 272,
                'name' => '大武口区',
                'type' => 3,
            ),
            276 => 
            array (
                'id' => 2277,
                'parent_id' => 272,
                'name' => '惠农区',
                'type' => 3,
            ),
            277 => 
            array (
                'id' => 2278,
                'parent_id' => 272,
                'name' => '陶乐县',
                'type' => 3,
            ),
            278 => 
            array (
                'id' => 2279,
                'parent_id' => 272,
                'name' => '平罗县',
                'type' => 3,
            ),
            279 => 
            array (
                'id' => 2280,
                'parent_id' => 273,
                'name' => '利通区',
                'type' => 3,
            ),
            280 => 
            array (
                'id' => 2281,
                'parent_id' => 273,
                'name' => '中卫县',
                'type' => 3,
            ),
            281 => 
            array (
                'id' => 2282,
                'parent_id' => 273,
                'name' => '青铜峡市',
                'type' => 3,
            ),
            282 => 
            array (
                'id' => 2283,
                'parent_id' => 273,
                'name' => '中宁县',
                'type' => 3,
            ),
            283 => 
            array (
                'id' => 2284,
                'parent_id' => 273,
                'name' => '盐池县',
                'type' => 3,
            ),
            284 => 
            array (
                'id' => 2285,
                'parent_id' => 273,
                'name' => '同心县',
                'type' => 3,
            ),
            285 => 
            array (
                'id' => 2286,
                'parent_id' => 274,
                'name' => '沙坡头区',
                'type' => 3,
            ),
            286 => 
            array (
                'id' => 2287,
                'parent_id' => 274,
                'name' => '海原县',
                'type' => 3,
            ),
            287 => 
            array (
                'id' => 2288,
                'parent_id' => 274,
                'name' => '中宁县',
                'type' => 3,
            ),
            288 => 
            array (
                'id' => 2289,
                'parent_id' => 275,
                'name' => '城中区',
                'type' => 3,
            ),
            289 => 
            array (
                'id' => 2290,
                'parent_id' => 275,
                'name' => '城东区',
                'type' => 3,
            ),
            290 => 
            array (
                'id' => 2291,
                'parent_id' => 275,
                'name' => '城西区',
                'type' => 3,
            ),
            291 => 
            array (
                'id' => 2292,
                'parent_id' => 275,
                'name' => '城北区',
                'type' => 3,
            ),
            292 => 
            array (
                'id' => 2293,
                'parent_id' => 275,
                'name' => '湟中县',
                'type' => 3,
            ),
            293 => 
            array (
                'id' => 2294,
                'parent_id' => 275,
                'name' => '湟源县',
                'type' => 3,
            ),
            294 => 
            array (
                'id' => 2295,
                'parent_id' => 275,
                'name' => '大通',
                'type' => 3,
            ),
            295 => 
            array (
                'id' => 2296,
                'parent_id' => 276,
                'name' => '玛沁县',
                'type' => 3,
            ),
            296 => 
            array (
                'id' => 2297,
                'parent_id' => 276,
                'name' => '班玛县',
                'type' => 3,
            ),
            297 => 
            array (
                'id' => 2298,
                'parent_id' => 276,
                'name' => '甘德县',
                'type' => 3,
            ),
            298 => 
            array (
                'id' => 2299,
                'parent_id' => 276,
                'name' => '达日县',
                'type' => 3,
            ),
            299 => 
            array (
                'id' => 2300,
                'parent_id' => 276,
                'name' => '久治县',
                'type' => 3,
            ),
            300 => 
            array (
                'id' => 2301,
                'parent_id' => 276,
                'name' => '玛多县',
                'type' => 3,
            ),
            301 => 
            array (
                'id' => 2302,
                'parent_id' => 277,
                'name' => '海晏县',
                'type' => 3,
            ),
            302 => 
            array (
                'id' => 2303,
                'parent_id' => 277,
                'name' => '祁连县',
                'type' => 3,
            ),
            303 => 
            array (
                'id' => 2304,
                'parent_id' => 277,
                'name' => '刚察县',
                'type' => 3,
            ),
            304 => 
            array (
                'id' => 2305,
                'parent_id' => 277,
                'name' => '门源',
                'type' => 3,
            ),
            305 => 
            array (
                'id' => 2306,
                'parent_id' => 278,
                'name' => '平安县',
                'type' => 3,
            ),
            306 => 
            array (
                'id' => 2307,
                'parent_id' => 278,
                'name' => '乐都县',
                'type' => 3,
            ),
            307 => 
            array (
                'id' => 2308,
                'parent_id' => 278,
                'name' => '民和',
                'type' => 3,
            ),
            308 => 
            array (
                'id' => 2309,
                'parent_id' => 278,
                'name' => '互助',
                'type' => 3,
            ),
            309 => 
            array (
                'id' => 2310,
                'parent_id' => 278,
                'name' => '化隆',
                'type' => 3,
            ),
            310 => 
            array (
                'id' => 2311,
                'parent_id' => 278,
                'name' => '循化',
                'type' => 3,
            ),
            311 => 
            array (
                'id' => 2312,
                'parent_id' => 279,
                'name' => '共和县',
                'type' => 3,
            ),
            312 => 
            array (
                'id' => 2313,
                'parent_id' => 279,
                'name' => '同德县',
                'type' => 3,
            ),
            313 => 
            array (
                'id' => 2314,
                'parent_id' => 279,
                'name' => '贵德县',
                'type' => 3,
            ),
            314 => 
            array (
                'id' => 2315,
                'parent_id' => 279,
                'name' => '兴海县',
                'type' => 3,
            ),
            315 => 
            array (
                'id' => 2316,
                'parent_id' => 279,
                'name' => '贵南县',
                'type' => 3,
            ),
            316 => 
            array (
                'id' => 2317,
                'parent_id' => 280,
                'name' => '德令哈市',
                'type' => 3,
            ),
            317 => 
            array (
                'id' => 2318,
                'parent_id' => 280,
                'name' => '格尔木市',
                'type' => 3,
            ),
            318 => 
            array (
                'id' => 2319,
                'parent_id' => 280,
                'name' => '乌兰县',
                'type' => 3,
            ),
            319 => 
            array (
                'id' => 2320,
                'parent_id' => 280,
                'name' => '都兰县',
                'type' => 3,
            ),
            320 => 
            array (
                'id' => 2321,
                'parent_id' => 280,
                'name' => '天峻县',
                'type' => 3,
            ),
            321 => 
            array (
                'id' => 2322,
                'parent_id' => 281,
                'name' => '同仁县',
                'type' => 3,
            ),
            322 => 
            array (
                'id' => 2323,
                'parent_id' => 281,
                'name' => '尖扎县',
                'type' => 3,
            ),
            323 => 
            array (
                'id' => 2324,
                'parent_id' => 281,
                'name' => '泽库县',
                'type' => 3,
            ),
            324 => 
            array (
                'id' => 2325,
                'parent_id' => 281,
                'name' => '河南蒙古族自治县',
                'type' => 3,
            ),
            325 => 
            array (
                'id' => 2326,
                'parent_id' => 282,
                'name' => '玉树县',
                'type' => 3,
            ),
            326 => 
            array (
                'id' => 2327,
                'parent_id' => 282,
                'name' => '杂多县',
                'type' => 3,
            ),
            327 => 
            array (
                'id' => 2328,
                'parent_id' => 282,
                'name' => '称多县',
                'type' => 3,
            ),
            328 => 
            array (
                'id' => 2329,
                'parent_id' => 282,
                'name' => '治多县',
                'type' => 3,
            ),
            329 => 
            array (
                'id' => 2330,
                'parent_id' => 282,
                'name' => '囊谦县',
                'type' => 3,
            ),
            330 => 
            array (
                'id' => 2331,
                'parent_id' => 282,
                'name' => '曲麻莱县',
                'type' => 3,
            ),
            331 => 
            array (
                'id' => 2332,
                'parent_id' => 283,
                'name' => '市中区',
                'type' => 3,
            ),
            332 => 
            array (
                'id' => 2333,
                'parent_id' => 283,
                'name' => '历下区',
                'type' => 3,
            ),
            333 => 
            array (
                'id' => 2334,
                'parent_id' => 283,
                'name' => '天桥区',
                'type' => 3,
            ),
            334 => 
            array (
                'id' => 2335,
                'parent_id' => 283,
                'name' => '槐荫区',
                'type' => 3,
            ),
            335 => 
            array (
                'id' => 2336,
                'parent_id' => 283,
                'name' => '历城区',
                'type' => 3,
            ),
            336 => 
            array (
                'id' => 2337,
                'parent_id' => 283,
                'name' => '长清区',
                'type' => 3,
            ),
            337 => 
            array (
                'id' => 2338,
                'parent_id' => 283,
                'name' => '章丘市',
                'type' => 3,
            ),
            338 => 
            array (
                'id' => 2339,
                'parent_id' => 283,
                'name' => '平阴县',
                'type' => 3,
            ),
            339 => 
            array (
                'id' => 2340,
                'parent_id' => 283,
                'name' => '济阳县',
                'type' => 3,
            ),
            340 => 
            array (
                'id' => 2341,
                'parent_id' => 283,
                'name' => '商河县',
                'type' => 3,
            ),
            341 => 
            array (
                'id' => 2342,
                'parent_id' => 284,
                'name' => '市南区',
                'type' => 3,
            ),
            342 => 
            array (
                'id' => 2343,
                'parent_id' => 284,
                'name' => '市北区',
                'type' => 3,
            ),
            343 => 
            array (
                'id' => 2344,
                'parent_id' => 284,
                'name' => '城阳区',
                'type' => 3,
            ),
            344 => 
            array (
                'id' => 2345,
                'parent_id' => 284,
                'name' => '四方区',
                'type' => 3,
            ),
            345 => 
            array (
                'id' => 2346,
                'parent_id' => 284,
                'name' => '李沧区',
                'type' => 3,
            ),
            346 => 
            array (
                'id' => 2347,
                'parent_id' => 284,
                'name' => '黄岛区',
                'type' => 3,
            ),
            347 => 
            array (
                'id' => 2348,
                'parent_id' => 284,
                'name' => '崂山区',
                'type' => 3,
            ),
            348 => 
            array (
                'id' => 2349,
                'parent_id' => 284,
                'name' => '胶州市',
                'type' => 3,
            ),
            349 => 
            array (
                'id' => 2350,
                'parent_id' => 284,
                'name' => '即墨市',
                'type' => 3,
            ),
            350 => 
            array (
                'id' => 2351,
                'parent_id' => 284,
                'name' => '平度市',
                'type' => 3,
            ),
            351 => 
            array (
                'id' => 2352,
                'parent_id' => 284,
                'name' => '胶南市',
                'type' => 3,
            ),
            352 => 
            array (
                'id' => 2353,
                'parent_id' => 284,
                'name' => '莱西市',
                'type' => 3,
            ),
            353 => 
            array (
                'id' => 2354,
                'parent_id' => 285,
                'name' => '滨城区',
                'type' => 3,
            ),
            354 => 
            array (
                'id' => 2355,
                'parent_id' => 285,
                'name' => '惠民县',
                'type' => 3,
            ),
            355 => 
            array (
                'id' => 2356,
                'parent_id' => 285,
                'name' => '阳信县',
                'type' => 3,
            ),
            356 => 
            array (
                'id' => 2357,
                'parent_id' => 285,
                'name' => '无棣县',
                'type' => 3,
            ),
            357 => 
            array (
                'id' => 2358,
                'parent_id' => 285,
                'name' => '沾化县',
                'type' => 3,
            ),
            358 => 
            array (
                'id' => 2359,
                'parent_id' => 285,
                'name' => '博兴县',
                'type' => 3,
            ),
            359 => 
            array (
                'id' => 2360,
                'parent_id' => 285,
                'name' => '邹平县',
                'type' => 3,
            ),
            360 => 
            array (
                'id' => 2361,
                'parent_id' => 286,
                'name' => '德城区',
                'type' => 3,
            ),
            361 => 
            array (
                'id' => 2362,
                'parent_id' => 286,
                'name' => '陵县',
                'type' => 3,
            ),
            362 => 
            array (
                'id' => 2363,
                'parent_id' => 286,
                'name' => '乐陵市',
                'type' => 3,
            ),
            363 => 
            array (
                'id' => 2364,
                'parent_id' => 286,
                'name' => '禹城市',
                'type' => 3,
            ),
            364 => 
            array (
                'id' => 2365,
                'parent_id' => 286,
                'name' => '宁津县',
                'type' => 3,
            ),
            365 => 
            array (
                'id' => 2366,
                'parent_id' => 286,
                'name' => '庆云县',
                'type' => 3,
            ),
            366 => 
            array (
                'id' => 2367,
                'parent_id' => 286,
                'name' => '临邑县',
                'type' => 3,
            ),
            367 => 
            array (
                'id' => 2368,
                'parent_id' => 286,
                'name' => '齐河县',
                'type' => 3,
            ),
            368 => 
            array (
                'id' => 2369,
                'parent_id' => 286,
                'name' => '平原县',
                'type' => 3,
            ),
            369 => 
            array (
                'id' => 2370,
                'parent_id' => 286,
                'name' => '夏津县',
                'type' => 3,
            ),
            370 => 
            array (
                'id' => 2371,
                'parent_id' => 286,
                'name' => '武城县',
                'type' => 3,
            ),
            371 => 
            array (
                'id' => 2372,
                'parent_id' => 287,
                'name' => '东营区',
                'type' => 3,
            ),
            372 => 
            array (
                'id' => 2373,
                'parent_id' => 287,
                'name' => '河口区',
                'type' => 3,
            ),
            373 => 
            array (
                'id' => 2374,
                'parent_id' => 287,
                'name' => '垦利县',
                'type' => 3,
            ),
            374 => 
            array (
                'id' => 2375,
                'parent_id' => 287,
                'name' => '利津县',
                'type' => 3,
            ),
            375 => 
            array (
                'id' => 2376,
                'parent_id' => 287,
                'name' => '广饶县',
                'type' => 3,
            ),
            376 => 
            array (
                'id' => 2377,
                'parent_id' => 288,
                'name' => '牡丹区',
                'type' => 3,
            ),
            377 => 
            array (
                'id' => 2378,
                'parent_id' => 288,
                'name' => '曹县',
                'type' => 3,
            ),
            378 => 
            array (
                'id' => 2379,
                'parent_id' => 288,
                'name' => '单县',
                'type' => 3,
            ),
            379 => 
            array (
                'id' => 2380,
                'parent_id' => 288,
                'name' => '成武县',
                'type' => 3,
            ),
            380 => 
            array (
                'id' => 2381,
                'parent_id' => 288,
                'name' => '巨野县',
                'type' => 3,
            ),
            381 => 
            array (
                'id' => 2382,
                'parent_id' => 288,
                'name' => '郓城县',
                'type' => 3,
            ),
            382 => 
            array (
                'id' => 2383,
                'parent_id' => 288,
                'name' => '鄄城县',
                'type' => 3,
            ),
            383 => 
            array (
                'id' => 2384,
                'parent_id' => 288,
                'name' => '定陶县',
                'type' => 3,
            ),
            384 => 
            array (
                'id' => 2385,
                'parent_id' => 288,
                'name' => '东明县',
                'type' => 3,
            ),
            385 => 
            array (
                'id' => 2386,
                'parent_id' => 289,
                'name' => '市中区',
                'type' => 3,
            ),
            386 => 
            array (
                'id' => 2387,
                'parent_id' => 289,
                'name' => '任城区',
                'type' => 3,
            ),
            387 => 
            array (
                'id' => 2388,
                'parent_id' => 289,
                'name' => '曲阜市',
                'type' => 3,
            ),
            388 => 
            array (
                'id' => 2389,
                'parent_id' => 289,
                'name' => '兖州市',
                'type' => 3,
            ),
            389 => 
            array (
                'id' => 2390,
                'parent_id' => 289,
                'name' => '邹城市',
                'type' => 3,
            ),
            390 => 
            array (
                'id' => 2391,
                'parent_id' => 289,
                'name' => '微山县',
                'type' => 3,
            ),
            391 => 
            array (
                'id' => 2392,
                'parent_id' => 289,
                'name' => '鱼台县',
                'type' => 3,
            ),
            392 => 
            array (
                'id' => 2393,
                'parent_id' => 289,
                'name' => '金乡县',
                'type' => 3,
            ),
            393 => 
            array (
                'id' => 2394,
                'parent_id' => 289,
                'name' => '嘉祥县',
                'type' => 3,
            ),
            394 => 
            array (
                'id' => 2395,
                'parent_id' => 289,
                'name' => '汶上县',
                'type' => 3,
            ),
            395 => 
            array (
                'id' => 2396,
                'parent_id' => 289,
                'name' => '泗水县',
                'type' => 3,
            ),
            396 => 
            array (
                'id' => 2397,
                'parent_id' => 289,
                'name' => '梁山县',
                'type' => 3,
            ),
            397 => 
            array (
                'id' => 2398,
                'parent_id' => 290,
                'name' => '莱城区',
                'type' => 3,
            ),
            398 => 
            array (
                'id' => 2399,
                'parent_id' => 290,
                'name' => '钢城区',
                'type' => 3,
            ),
            399 => 
            array (
                'id' => 2400,
                'parent_id' => 291,
                'name' => '东昌府区',
                'type' => 3,
            ),
            400 => 
            array (
                'id' => 2401,
                'parent_id' => 291,
                'name' => '临清市',
                'type' => 3,
            ),
            401 => 
            array (
                'id' => 2402,
                'parent_id' => 291,
                'name' => '阳谷县',
                'type' => 3,
            ),
            402 => 
            array (
                'id' => 2403,
                'parent_id' => 291,
                'name' => '莘县',
                'type' => 3,
            ),
            403 => 
            array (
                'id' => 2404,
                'parent_id' => 291,
                'name' => '茌平县',
                'type' => 3,
            ),
            404 => 
            array (
                'id' => 2405,
                'parent_id' => 291,
                'name' => '东阿县',
                'type' => 3,
            ),
            405 => 
            array (
                'id' => 2406,
                'parent_id' => 291,
                'name' => '冠县',
                'type' => 3,
            ),
            406 => 
            array (
                'id' => 2407,
                'parent_id' => 291,
                'name' => '高唐县',
                'type' => 3,
            ),
            407 => 
            array (
                'id' => 2408,
                'parent_id' => 292,
                'name' => '兰山区',
                'type' => 3,
            ),
            408 => 
            array (
                'id' => 2409,
                'parent_id' => 292,
                'name' => '罗庄区',
                'type' => 3,
            ),
            409 => 
            array (
                'id' => 2410,
                'parent_id' => 292,
                'name' => '河东区',
                'type' => 3,
            ),
            410 => 
            array (
                'id' => 2411,
                'parent_id' => 292,
                'name' => '沂南县',
                'type' => 3,
            ),
            411 => 
            array (
                'id' => 2412,
                'parent_id' => 292,
                'name' => '郯城县',
                'type' => 3,
            ),
            412 => 
            array (
                'id' => 2413,
                'parent_id' => 292,
                'name' => '沂水县',
                'type' => 3,
            ),
            413 => 
            array (
                'id' => 2414,
                'parent_id' => 292,
                'name' => '苍山县',
                'type' => 3,
            ),
            414 => 
            array (
                'id' => 2415,
                'parent_id' => 292,
                'name' => '费县',
                'type' => 3,
            ),
            415 => 
            array (
                'id' => 2416,
                'parent_id' => 292,
                'name' => '平邑县',
                'type' => 3,
            ),
            416 => 
            array (
                'id' => 2417,
                'parent_id' => 292,
                'name' => '莒南县',
                'type' => 3,
            ),
            417 => 
            array (
                'id' => 2418,
                'parent_id' => 292,
                'name' => '蒙阴县',
                'type' => 3,
            ),
            418 => 
            array (
                'id' => 2419,
                'parent_id' => 292,
                'name' => '临沭县',
                'type' => 3,
            ),
            419 => 
            array (
                'id' => 2420,
                'parent_id' => 293,
                'name' => '东港区',
                'type' => 3,
            ),
            420 => 
            array (
                'id' => 2421,
                'parent_id' => 293,
                'name' => '岚山区',
                'type' => 3,
            ),
            421 => 
            array (
                'id' => 2422,
                'parent_id' => 293,
                'name' => '五莲县',
                'type' => 3,
            ),
            422 => 
            array (
                'id' => 2423,
                'parent_id' => 293,
                'name' => '莒县',
                'type' => 3,
            ),
            423 => 
            array (
                'id' => 2424,
                'parent_id' => 294,
                'name' => '泰山区',
                'type' => 3,
            ),
            424 => 
            array (
                'id' => 2425,
                'parent_id' => 294,
                'name' => '岱岳区',
                'type' => 3,
            ),
            425 => 
            array (
                'id' => 2426,
                'parent_id' => 294,
                'name' => '新泰市',
                'type' => 3,
            ),
            426 => 
            array (
                'id' => 2427,
                'parent_id' => 294,
                'name' => '肥城市',
                'type' => 3,
            ),
            427 => 
            array (
                'id' => 2428,
                'parent_id' => 294,
                'name' => '宁阳县',
                'type' => 3,
            ),
            428 => 
            array (
                'id' => 2429,
                'parent_id' => 294,
                'name' => '东平县',
                'type' => 3,
            ),
            429 => 
            array (
                'id' => 2430,
                'parent_id' => 295,
                'name' => '荣成市',
                'type' => 3,
            ),
            430 => 
            array (
                'id' => 2431,
                'parent_id' => 295,
                'name' => '乳山市',
                'type' => 3,
            ),
            431 => 
            array (
                'id' => 2432,
                'parent_id' => 295,
                'name' => '环翠区',
                'type' => 3,
            ),
            432 => 
            array (
                'id' => 2433,
                'parent_id' => 295,
                'name' => '文登市',
                'type' => 3,
            ),
            433 => 
            array (
                'id' => 2434,
                'parent_id' => 296,
                'name' => '潍城区',
                'type' => 3,
            ),
            434 => 
            array (
                'id' => 2435,
                'parent_id' => 296,
                'name' => '寒亭区',
                'type' => 3,
            ),
            435 => 
            array (
                'id' => 2436,
                'parent_id' => 296,
                'name' => '坊子区',
                'type' => 3,
            ),
            436 => 
            array (
                'id' => 2437,
                'parent_id' => 296,
                'name' => '奎文区',
                'type' => 3,
            ),
            437 => 
            array (
                'id' => 2438,
                'parent_id' => 296,
                'name' => '青州市',
                'type' => 3,
            ),
            438 => 
            array (
                'id' => 2439,
                'parent_id' => 296,
                'name' => '诸城市',
                'type' => 3,
            ),
            439 => 
            array (
                'id' => 2440,
                'parent_id' => 296,
                'name' => '寿光市',
                'type' => 3,
            ),
            440 => 
            array (
                'id' => 2441,
                'parent_id' => 296,
                'name' => '安丘市',
                'type' => 3,
            ),
            441 => 
            array (
                'id' => 2442,
                'parent_id' => 296,
                'name' => '高密市',
                'type' => 3,
            ),
            442 => 
            array (
                'id' => 2443,
                'parent_id' => 296,
                'name' => '昌邑市',
                'type' => 3,
            ),
            443 => 
            array (
                'id' => 2444,
                'parent_id' => 296,
                'name' => '临朐县',
                'type' => 3,
            ),
            444 => 
            array (
                'id' => 2445,
                'parent_id' => 296,
                'name' => '昌乐县',
                'type' => 3,
            ),
            445 => 
            array (
                'id' => 2446,
                'parent_id' => 297,
                'name' => '芝罘区',
                'type' => 3,
            ),
            446 => 
            array (
                'id' => 2447,
                'parent_id' => 297,
                'name' => '福山区',
                'type' => 3,
            ),
            447 => 
            array (
                'id' => 2448,
                'parent_id' => 297,
                'name' => '牟平区',
                'type' => 3,
            ),
            448 => 
            array (
                'id' => 2449,
                'parent_id' => 297,
                'name' => '莱山区',
                'type' => 3,
            ),
            449 => 
            array (
                'id' => 2450,
                'parent_id' => 297,
                'name' => '开发区',
                'type' => 3,
            ),
            450 => 
            array (
                'id' => 2451,
                'parent_id' => 297,
                'name' => '龙口市',
                'type' => 3,
            ),
            451 => 
            array (
                'id' => 2452,
                'parent_id' => 297,
                'name' => '莱阳市',
                'type' => 3,
            ),
            452 => 
            array (
                'id' => 2453,
                'parent_id' => 297,
                'name' => '莱州市',
                'type' => 3,
            ),
            453 => 
            array (
                'id' => 2454,
                'parent_id' => 297,
                'name' => '蓬莱市',
                'type' => 3,
            ),
            454 => 
            array (
                'id' => 2455,
                'parent_id' => 297,
                'name' => '招远市',
                'type' => 3,
            ),
            455 => 
            array (
                'id' => 2456,
                'parent_id' => 297,
                'name' => '栖霞市',
                'type' => 3,
            ),
            456 => 
            array (
                'id' => 2457,
                'parent_id' => 297,
                'name' => '海阳市',
                'type' => 3,
            ),
            457 => 
            array (
                'id' => 2458,
                'parent_id' => 297,
                'name' => '长岛县',
                'type' => 3,
            ),
            458 => 
            array (
                'id' => 2459,
                'parent_id' => 298,
                'name' => '市中区',
                'type' => 3,
            ),
            459 => 
            array (
                'id' => 2460,
                'parent_id' => 298,
                'name' => '山亭区',
                'type' => 3,
            ),
            460 => 
            array (
                'id' => 2461,
                'parent_id' => 298,
                'name' => '峄城区',
                'type' => 3,
            ),
            461 => 
            array (
                'id' => 2462,
                'parent_id' => 298,
                'name' => '台儿庄区',
                'type' => 3,
            ),
            462 => 
            array (
                'id' => 2463,
                'parent_id' => 298,
                'name' => '薛城区',
                'type' => 3,
            ),
            463 => 
            array (
                'id' => 2464,
                'parent_id' => 298,
                'name' => '滕州市',
                'type' => 3,
            ),
            464 => 
            array (
                'id' => 2465,
                'parent_id' => 299,
                'name' => '张店区',
                'type' => 3,
            ),
            465 => 
            array (
                'id' => 2466,
                'parent_id' => 299,
                'name' => '临淄区',
                'type' => 3,
            ),
            466 => 
            array (
                'id' => 2467,
                'parent_id' => 299,
                'name' => '淄川区',
                'type' => 3,
            ),
            467 => 
            array (
                'id' => 2468,
                'parent_id' => 299,
                'name' => '博山区',
                'type' => 3,
            ),
            468 => 
            array (
                'id' => 2469,
                'parent_id' => 299,
                'name' => '周村区',
                'type' => 3,
            ),
            469 => 
            array (
                'id' => 2470,
                'parent_id' => 299,
                'name' => '桓台县',
                'type' => 3,
            ),
            470 => 
            array (
                'id' => 2471,
                'parent_id' => 299,
                'name' => '高青县',
                'type' => 3,
            ),
            471 => 
            array (
                'id' => 2472,
                'parent_id' => 299,
                'name' => '沂源县',
                'type' => 3,
            ),
            472 => 
            array (
                'id' => 2473,
                'parent_id' => 300,
                'name' => '杏花岭区',
                'type' => 3,
            ),
            473 => 
            array (
                'id' => 2474,
                'parent_id' => 300,
                'name' => '小店区',
                'type' => 3,
            ),
            474 => 
            array (
                'id' => 2475,
                'parent_id' => 300,
                'name' => '迎泽区',
                'type' => 3,
            ),
            475 => 
            array (
                'id' => 2476,
                'parent_id' => 300,
                'name' => '尖草坪区',
                'type' => 3,
            ),
            476 => 
            array (
                'id' => 2477,
                'parent_id' => 300,
                'name' => '万柏林区',
                'type' => 3,
            ),
            477 => 
            array (
                'id' => 2478,
                'parent_id' => 300,
                'name' => '晋源区',
                'type' => 3,
            ),
            478 => 
            array (
                'id' => 2479,
                'parent_id' => 300,
                'name' => '高新开发区',
                'type' => 3,
            ),
            479 => 
            array (
                'id' => 2480,
                'parent_id' => 300,
                'name' => '民营经济开发区',
                'type' => 3,
            ),
            480 => 
            array (
                'id' => 2481,
                'parent_id' => 300,
                'name' => '经济技术开发区',
                'type' => 3,
            ),
            481 => 
            array (
                'id' => 2482,
                'parent_id' => 300,
                'name' => '清徐县',
                'type' => 3,
            ),
            482 => 
            array (
                'id' => 2483,
                'parent_id' => 300,
                'name' => '阳曲县',
                'type' => 3,
            ),
            483 => 
            array (
                'id' => 2484,
                'parent_id' => 300,
                'name' => '娄烦县',
                'type' => 3,
            ),
            484 => 
            array (
                'id' => 2485,
                'parent_id' => 300,
                'name' => '古交市',
                'type' => 3,
            ),
            485 => 
            array (
                'id' => 2486,
                'parent_id' => 301,
                'name' => '城区',
                'type' => 3,
            ),
            486 => 
            array (
                'id' => 2487,
                'parent_id' => 301,
                'name' => '郊区',
                'type' => 3,
            ),
            487 => 
            array (
                'id' => 2488,
                'parent_id' => 301,
                'name' => '沁县',
                'type' => 3,
            ),
            488 => 
            array (
                'id' => 2489,
                'parent_id' => 301,
                'name' => '潞城市',
                'type' => 3,
            ),
            489 => 
            array (
                'id' => 2490,
                'parent_id' => 301,
                'name' => '长治县',
                'type' => 3,
            ),
            490 => 
            array (
                'id' => 2491,
                'parent_id' => 301,
                'name' => '襄垣县',
                'type' => 3,
            ),
            491 => 
            array (
                'id' => 2492,
                'parent_id' => 301,
                'name' => '屯留县',
                'type' => 3,
            ),
            492 => 
            array (
                'id' => 2493,
                'parent_id' => 301,
                'name' => '平顺县',
                'type' => 3,
            ),
            493 => 
            array (
                'id' => 2494,
                'parent_id' => 301,
                'name' => '黎城县',
                'type' => 3,
            ),
            494 => 
            array (
                'id' => 2495,
                'parent_id' => 301,
                'name' => '壶关县',
                'type' => 3,
            ),
            495 => 
            array (
                'id' => 2496,
                'parent_id' => 301,
                'name' => '长子县',
                'type' => 3,
            ),
            496 => 
            array (
                'id' => 2497,
                'parent_id' => 301,
                'name' => '武乡县',
                'type' => 3,
            ),
            497 => 
            array (
                'id' => 2498,
                'parent_id' => 301,
                'name' => '沁源县',
                'type' => 3,
            ),
            498 => 
            array (
                'id' => 2499,
                'parent_id' => 302,
                'name' => '城区',
                'type' => 3,
            ),
            499 => 
            array (
                'id' => 2500,
                'parent_id' => 302,
                'name' => '矿区',
                'type' => 3,
            ),
        ));
        \DB::table('china_area')->insert(array (
            0 => 
            array (
                'id' => 2501,
                'parent_id' => 302,
                'name' => '南郊区',
                'type' => 3,
            ),
            1 => 
            array (
                'id' => 2502,
                'parent_id' => 302,
                'name' => '新荣区',
                'type' => 3,
            ),
            2 => 
            array (
                'id' => 2503,
                'parent_id' => 302,
                'name' => '阳高县',
                'type' => 3,
            ),
            3 => 
            array (
                'id' => 2504,
                'parent_id' => 302,
                'name' => '天镇县',
                'type' => 3,
            ),
            4 => 
            array (
                'id' => 2505,
                'parent_id' => 302,
                'name' => '广灵县',
                'type' => 3,
            ),
            5 => 
            array (
                'id' => 2506,
                'parent_id' => 302,
                'name' => '灵丘县',
                'type' => 3,
            ),
            6 => 
            array (
                'id' => 2507,
                'parent_id' => 302,
                'name' => '浑源县',
                'type' => 3,
            ),
            7 => 
            array (
                'id' => 2508,
                'parent_id' => 302,
                'name' => '左云县',
                'type' => 3,
            ),
            8 => 
            array (
                'id' => 2509,
                'parent_id' => 302,
                'name' => '大同县',
                'type' => 3,
            ),
            9 => 
            array (
                'id' => 2510,
                'parent_id' => 303,
                'name' => '城区',
                'type' => 3,
            ),
            10 => 
            array (
                'id' => 2511,
                'parent_id' => 303,
                'name' => '高平市',
                'type' => 3,
            ),
            11 => 
            array (
                'id' => 2512,
                'parent_id' => 303,
                'name' => '沁水县',
                'type' => 3,
            ),
            12 => 
            array (
                'id' => 2513,
                'parent_id' => 303,
                'name' => '阳城县',
                'type' => 3,
            ),
            13 => 
            array (
                'id' => 2514,
                'parent_id' => 303,
                'name' => '陵川县',
                'type' => 3,
            ),
            14 => 
            array (
                'id' => 2515,
                'parent_id' => 303,
                'name' => '泽州县',
                'type' => 3,
            ),
            15 => 
            array (
                'id' => 2516,
                'parent_id' => 304,
                'name' => '榆次区',
                'type' => 3,
            ),
            16 => 
            array (
                'id' => 2517,
                'parent_id' => 304,
                'name' => '介休市',
                'type' => 3,
            ),
            17 => 
            array (
                'id' => 2518,
                'parent_id' => 304,
                'name' => '榆社县',
                'type' => 3,
            ),
            18 => 
            array (
                'id' => 2519,
                'parent_id' => 304,
                'name' => '左权县',
                'type' => 3,
            ),
            19 => 
            array (
                'id' => 2520,
                'parent_id' => 304,
                'name' => '和顺县',
                'type' => 3,
            ),
            20 => 
            array (
                'id' => 2521,
                'parent_id' => 304,
                'name' => '昔阳县',
                'type' => 3,
            ),
            21 => 
            array (
                'id' => 2522,
                'parent_id' => 304,
                'name' => '寿阳县',
                'type' => 3,
            ),
            22 => 
            array (
                'id' => 2523,
                'parent_id' => 304,
                'name' => '太谷县',
                'type' => 3,
            ),
            23 => 
            array (
                'id' => 2524,
                'parent_id' => 304,
                'name' => '祁县',
                'type' => 3,
            ),
            24 => 
            array (
                'id' => 2525,
                'parent_id' => 304,
                'name' => '平遥县',
                'type' => 3,
            ),
            25 => 
            array (
                'id' => 2526,
                'parent_id' => 304,
                'name' => '灵石县',
                'type' => 3,
            ),
            26 => 
            array (
                'id' => 2527,
                'parent_id' => 305,
                'name' => '尧都区',
                'type' => 3,
            ),
            27 => 
            array (
                'id' => 2528,
                'parent_id' => 305,
                'name' => '侯马市',
                'type' => 3,
            ),
            28 => 
            array (
                'id' => 2529,
                'parent_id' => 305,
                'name' => '霍州市',
                'type' => 3,
            ),
            29 => 
            array (
                'id' => 2530,
                'parent_id' => 305,
                'name' => '曲沃县',
                'type' => 3,
            ),
            30 => 
            array (
                'id' => 2531,
                'parent_id' => 305,
                'name' => '翼城县',
                'type' => 3,
            ),
            31 => 
            array (
                'id' => 2532,
                'parent_id' => 305,
                'name' => '襄汾县',
                'type' => 3,
            ),
            32 => 
            array (
                'id' => 2533,
                'parent_id' => 305,
                'name' => '洪洞县',
                'type' => 3,
            ),
            33 => 
            array (
                'id' => 2534,
                'parent_id' => 305,
                'name' => '吉县',
                'type' => 3,
            ),
            34 => 
            array (
                'id' => 2535,
                'parent_id' => 305,
                'name' => '安泽县',
                'type' => 3,
            ),
            35 => 
            array (
                'id' => 2536,
                'parent_id' => 305,
                'name' => '浮山县',
                'type' => 3,
            ),
            36 => 
            array (
                'id' => 2537,
                'parent_id' => 305,
                'name' => '古县',
                'type' => 3,
            ),
            37 => 
            array (
                'id' => 2538,
                'parent_id' => 305,
                'name' => '乡宁县',
                'type' => 3,
            ),
            38 => 
            array (
                'id' => 2539,
                'parent_id' => 305,
                'name' => '大宁县',
                'type' => 3,
            ),
            39 => 
            array (
                'id' => 2540,
                'parent_id' => 305,
                'name' => '隰县',
                'type' => 3,
            ),
            40 => 
            array (
                'id' => 2541,
                'parent_id' => 305,
                'name' => '永和县',
                'type' => 3,
            ),
            41 => 
            array (
                'id' => 2542,
                'parent_id' => 305,
                'name' => '蒲县',
                'type' => 3,
            ),
            42 => 
            array (
                'id' => 2543,
                'parent_id' => 305,
                'name' => '汾西县',
                'type' => 3,
            ),
            43 => 
            array (
                'id' => 2544,
                'parent_id' => 306,
                'name' => '离石市',
                'type' => 3,
            ),
            44 => 
            array (
                'id' => 2545,
                'parent_id' => 306,
                'name' => '离石区',
                'type' => 3,
            ),
            45 => 
            array (
                'id' => 2546,
                'parent_id' => 306,
                'name' => '孝义市',
                'type' => 3,
            ),
            46 => 
            array (
                'id' => 2547,
                'parent_id' => 306,
                'name' => '汾阳市',
                'type' => 3,
            ),
            47 => 
            array (
                'id' => 2548,
                'parent_id' => 306,
                'name' => '文水县',
                'type' => 3,
            ),
            48 => 
            array (
                'id' => 2549,
                'parent_id' => 306,
                'name' => '交城县',
                'type' => 3,
            ),
            49 => 
            array (
                'id' => 2550,
                'parent_id' => 306,
                'name' => '兴县',
                'type' => 3,
            ),
            50 => 
            array (
                'id' => 2551,
                'parent_id' => 306,
                'name' => '临县',
                'type' => 3,
            ),
            51 => 
            array (
                'id' => 2552,
                'parent_id' => 306,
                'name' => '柳林县',
                'type' => 3,
            ),
            52 => 
            array (
                'id' => 2553,
                'parent_id' => 306,
                'name' => '石楼县',
                'type' => 3,
            ),
            53 => 
            array (
                'id' => 2554,
                'parent_id' => 306,
                'name' => '岚县',
                'type' => 3,
            ),
            54 => 
            array (
                'id' => 2555,
                'parent_id' => 306,
                'name' => '方山县',
                'type' => 3,
            ),
            55 => 
            array (
                'id' => 2556,
                'parent_id' => 306,
                'name' => '中阳县',
                'type' => 3,
            ),
            56 => 
            array (
                'id' => 2557,
                'parent_id' => 306,
                'name' => '交口县',
                'type' => 3,
            ),
            57 => 
            array (
                'id' => 2558,
                'parent_id' => 307,
                'name' => '朔城区',
                'type' => 3,
            ),
            58 => 
            array (
                'id' => 2559,
                'parent_id' => 307,
                'name' => '平鲁区',
                'type' => 3,
            ),
            59 => 
            array (
                'id' => 2560,
                'parent_id' => 307,
                'name' => '山阴县',
                'type' => 3,
            ),
            60 => 
            array (
                'id' => 2561,
                'parent_id' => 307,
                'name' => '应县',
                'type' => 3,
            ),
            61 => 
            array (
                'id' => 2562,
                'parent_id' => 307,
                'name' => '右玉县',
                'type' => 3,
            ),
            62 => 
            array (
                'id' => 2563,
                'parent_id' => 307,
                'name' => '怀仁县',
                'type' => 3,
            ),
            63 => 
            array (
                'id' => 2564,
                'parent_id' => 308,
                'name' => '忻府区',
                'type' => 3,
            ),
            64 => 
            array (
                'id' => 2565,
                'parent_id' => 308,
                'name' => '原平市',
                'type' => 3,
            ),
            65 => 
            array (
                'id' => 2566,
                'parent_id' => 308,
                'name' => '定襄县',
                'type' => 3,
            ),
            66 => 
            array (
                'id' => 2567,
                'parent_id' => 308,
                'name' => '五台县',
                'type' => 3,
            ),
            67 => 
            array (
                'id' => 2568,
                'parent_id' => 308,
                'name' => '代县',
                'type' => 3,
            ),
            68 => 
            array (
                'id' => 2569,
                'parent_id' => 308,
                'name' => '繁峙县',
                'type' => 3,
            ),
            69 => 
            array (
                'id' => 2570,
                'parent_id' => 308,
                'name' => '宁武县',
                'type' => 3,
            ),
            70 => 
            array (
                'id' => 2571,
                'parent_id' => 308,
                'name' => '静乐县',
                'type' => 3,
            ),
            71 => 
            array (
                'id' => 2572,
                'parent_id' => 308,
                'name' => '神池县',
                'type' => 3,
            ),
            72 => 
            array (
                'id' => 2573,
                'parent_id' => 308,
                'name' => '五寨县',
                'type' => 3,
            ),
            73 => 
            array (
                'id' => 2574,
                'parent_id' => 308,
                'name' => '岢岚县',
                'type' => 3,
            ),
            74 => 
            array (
                'id' => 2575,
                'parent_id' => 308,
                'name' => '河曲县',
                'type' => 3,
            ),
            75 => 
            array (
                'id' => 2576,
                'parent_id' => 308,
                'name' => '保德县',
                'type' => 3,
            ),
            76 => 
            array (
                'id' => 2577,
                'parent_id' => 308,
                'name' => '偏关县',
                'type' => 3,
            ),
            77 => 
            array (
                'id' => 2578,
                'parent_id' => 309,
                'name' => '城区',
                'type' => 3,
            ),
            78 => 
            array (
                'id' => 2579,
                'parent_id' => 309,
                'name' => '矿区',
                'type' => 3,
            ),
            79 => 
            array (
                'id' => 2580,
                'parent_id' => 309,
                'name' => '郊区',
                'type' => 3,
            ),
            80 => 
            array (
                'id' => 2581,
                'parent_id' => 309,
                'name' => '平定县',
                'type' => 3,
            ),
            81 => 
            array (
                'id' => 2582,
                'parent_id' => 309,
                'name' => '盂县',
                'type' => 3,
            ),
            82 => 
            array (
                'id' => 2583,
                'parent_id' => 310,
                'name' => '盐湖区',
                'type' => 3,
            ),
            83 => 
            array (
                'id' => 2584,
                'parent_id' => 310,
                'name' => '永济市',
                'type' => 3,
            ),
            84 => 
            array (
                'id' => 2585,
                'parent_id' => 310,
                'name' => '河津市',
                'type' => 3,
            ),
            85 => 
            array (
                'id' => 2586,
                'parent_id' => 310,
                'name' => '临猗县',
                'type' => 3,
            ),
            86 => 
            array (
                'id' => 2587,
                'parent_id' => 310,
                'name' => '万荣县',
                'type' => 3,
            ),
            87 => 
            array (
                'id' => 2588,
                'parent_id' => 310,
                'name' => '闻喜县',
                'type' => 3,
            ),
            88 => 
            array (
                'id' => 2589,
                'parent_id' => 310,
                'name' => '稷山县',
                'type' => 3,
            ),
            89 => 
            array (
                'id' => 2590,
                'parent_id' => 310,
                'name' => '新绛县',
                'type' => 3,
            ),
            90 => 
            array (
                'id' => 2591,
                'parent_id' => 310,
                'name' => '绛县',
                'type' => 3,
            ),
            91 => 
            array (
                'id' => 2592,
                'parent_id' => 310,
                'name' => '垣曲县',
                'type' => 3,
            ),
            92 => 
            array (
                'id' => 2593,
                'parent_id' => 310,
                'name' => '夏县',
                'type' => 3,
            ),
            93 => 
            array (
                'id' => 2594,
                'parent_id' => 310,
                'name' => '平陆县',
                'type' => 3,
            ),
            94 => 
            array (
                'id' => 2595,
                'parent_id' => 310,
                'name' => '芮城县',
                'type' => 3,
            ),
            95 => 
            array (
                'id' => 2596,
                'parent_id' => 311,
                'name' => '莲湖区',
                'type' => 3,
            ),
            96 => 
            array (
                'id' => 2597,
                'parent_id' => 311,
                'name' => '新城区',
                'type' => 3,
            ),
            97 => 
            array (
                'id' => 2598,
                'parent_id' => 311,
                'name' => '碑林区',
                'type' => 3,
            ),
            98 => 
            array (
                'id' => 2599,
                'parent_id' => 311,
                'name' => '雁塔区',
                'type' => 3,
            ),
            99 => 
            array (
                'id' => 2600,
                'parent_id' => 311,
                'name' => '灞桥区',
                'type' => 3,
            ),
            100 => 
            array (
                'id' => 2601,
                'parent_id' => 311,
                'name' => '未央区',
                'type' => 3,
            ),
            101 => 
            array (
                'id' => 2602,
                'parent_id' => 311,
                'name' => '阎良区',
                'type' => 3,
            ),
            102 => 
            array (
                'id' => 2603,
                'parent_id' => 311,
                'name' => '临潼区',
                'type' => 3,
            ),
            103 => 
            array (
                'id' => 2604,
                'parent_id' => 311,
                'name' => '长安区',
                'type' => 3,
            ),
            104 => 
            array (
                'id' => 2605,
                'parent_id' => 311,
                'name' => '蓝田县',
                'type' => 3,
            ),
            105 => 
            array (
                'id' => 2606,
                'parent_id' => 311,
                'name' => '周至县',
                'type' => 3,
            ),
            106 => 
            array (
                'id' => 2607,
                'parent_id' => 311,
                'name' => '户县',
                'type' => 3,
            ),
            107 => 
            array (
                'id' => 2608,
                'parent_id' => 311,
                'name' => '高陵县',
                'type' => 3,
            ),
            108 => 
            array (
                'id' => 2609,
                'parent_id' => 312,
                'name' => '汉滨区',
                'type' => 3,
            ),
            109 => 
            array (
                'id' => 2610,
                'parent_id' => 312,
                'name' => '汉阴县',
                'type' => 3,
            ),
            110 => 
            array (
                'id' => 2611,
                'parent_id' => 312,
                'name' => '石泉县',
                'type' => 3,
            ),
            111 => 
            array (
                'id' => 2612,
                'parent_id' => 312,
                'name' => '宁陕县',
                'type' => 3,
            ),
            112 => 
            array (
                'id' => 2613,
                'parent_id' => 312,
                'name' => '紫阳县',
                'type' => 3,
            ),
            113 => 
            array (
                'id' => 2614,
                'parent_id' => 312,
                'name' => '岚皋县',
                'type' => 3,
            ),
            114 => 
            array (
                'id' => 2615,
                'parent_id' => 312,
                'name' => '平利县',
                'type' => 3,
            ),
            115 => 
            array (
                'id' => 2616,
                'parent_id' => 312,
                'name' => '镇坪县',
                'type' => 3,
            ),
            116 => 
            array (
                'id' => 2617,
                'parent_id' => 312,
                'name' => '旬阳县',
                'type' => 3,
            ),
            117 => 
            array (
                'id' => 2618,
                'parent_id' => 312,
                'name' => '白河县',
                'type' => 3,
            ),
            118 => 
            array (
                'id' => 2619,
                'parent_id' => 313,
                'name' => '陈仓区',
                'type' => 3,
            ),
            119 => 
            array (
                'id' => 2620,
                'parent_id' => 313,
                'name' => '渭滨区',
                'type' => 3,
            ),
            120 => 
            array (
                'id' => 2621,
                'parent_id' => 313,
                'name' => '金台区',
                'type' => 3,
            ),
            121 => 
            array (
                'id' => 2622,
                'parent_id' => 313,
                'name' => '凤翔县',
                'type' => 3,
            ),
            122 => 
            array (
                'id' => 2623,
                'parent_id' => 313,
                'name' => '岐山县',
                'type' => 3,
            ),
            123 => 
            array (
                'id' => 2624,
                'parent_id' => 313,
                'name' => '扶风县',
                'type' => 3,
            ),
            124 => 
            array (
                'id' => 2625,
                'parent_id' => 313,
                'name' => '眉县',
                'type' => 3,
            ),
            125 => 
            array (
                'id' => 2626,
                'parent_id' => 313,
                'name' => '陇县',
                'type' => 3,
            ),
            126 => 
            array (
                'id' => 2627,
                'parent_id' => 313,
                'name' => '千阳县',
                'type' => 3,
            ),
            127 => 
            array (
                'id' => 2628,
                'parent_id' => 313,
                'name' => '麟游县',
                'type' => 3,
            ),
            128 => 
            array (
                'id' => 2629,
                'parent_id' => 313,
                'name' => '凤县',
                'type' => 3,
            ),
            129 => 
            array (
                'id' => 2630,
                'parent_id' => 313,
                'name' => '太白县',
                'type' => 3,
            ),
            130 => 
            array (
                'id' => 2631,
                'parent_id' => 314,
                'name' => '汉台区',
                'type' => 3,
            ),
            131 => 
            array (
                'id' => 2632,
                'parent_id' => 314,
                'name' => '南郑县',
                'type' => 3,
            ),
            132 => 
            array (
                'id' => 2633,
                'parent_id' => 314,
                'name' => '城固县',
                'type' => 3,
            ),
            133 => 
            array (
                'id' => 2634,
                'parent_id' => 314,
                'name' => '洋县',
                'type' => 3,
            ),
            134 => 
            array (
                'id' => 2635,
                'parent_id' => 314,
                'name' => '西乡县',
                'type' => 3,
            ),
            135 => 
            array (
                'id' => 2636,
                'parent_id' => 314,
                'name' => '勉县',
                'type' => 3,
            ),
            136 => 
            array (
                'id' => 2637,
                'parent_id' => 314,
                'name' => '宁强县',
                'type' => 3,
            ),
            137 => 
            array (
                'id' => 2638,
                'parent_id' => 314,
                'name' => '略阳县',
                'type' => 3,
            ),
            138 => 
            array (
                'id' => 2639,
                'parent_id' => 314,
                'name' => '镇巴县',
                'type' => 3,
            ),
            139 => 
            array (
                'id' => 2640,
                'parent_id' => 314,
                'name' => '留坝县',
                'type' => 3,
            ),
            140 => 
            array (
                'id' => 2641,
                'parent_id' => 314,
                'name' => '佛坪县',
                'type' => 3,
            ),
            141 => 
            array (
                'id' => 2642,
                'parent_id' => 315,
                'name' => '商州区',
                'type' => 3,
            ),
            142 => 
            array (
                'id' => 2643,
                'parent_id' => 315,
                'name' => '洛南县',
                'type' => 3,
            ),
            143 => 
            array (
                'id' => 2644,
                'parent_id' => 315,
                'name' => '丹凤县',
                'type' => 3,
            ),
            144 => 
            array (
                'id' => 2645,
                'parent_id' => 315,
                'name' => '商南县',
                'type' => 3,
            ),
            145 => 
            array (
                'id' => 2646,
                'parent_id' => 315,
                'name' => '山阳县',
                'type' => 3,
            ),
            146 => 
            array (
                'id' => 2647,
                'parent_id' => 315,
                'name' => '镇安县',
                'type' => 3,
            ),
            147 => 
            array (
                'id' => 2648,
                'parent_id' => 315,
                'name' => '柞水县',
                'type' => 3,
            ),
            148 => 
            array (
                'id' => 2649,
                'parent_id' => 316,
                'name' => '耀州区',
                'type' => 3,
            ),
            149 => 
            array (
                'id' => 2650,
                'parent_id' => 316,
                'name' => '王益区',
                'type' => 3,
            ),
            150 => 
            array (
                'id' => 2651,
                'parent_id' => 316,
                'name' => '印台区',
                'type' => 3,
            ),
            151 => 
            array (
                'id' => 2652,
                'parent_id' => 316,
                'name' => '宜君县',
                'type' => 3,
            ),
            152 => 
            array (
                'id' => 2653,
                'parent_id' => 317,
                'name' => '临渭区',
                'type' => 3,
            ),
            153 => 
            array (
                'id' => 2654,
                'parent_id' => 317,
                'name' => '韩城市',
                'type' => 3,
            ),
            154 => 
            array (
                'id' => 2655,
                'parent_id' => 317,
                'name' => '华阴市',
                'type' => 3,
            ),
            155 => 
            array (
                'id' => 2656,
                'parent_id' => 317,
                'name' => '华县',
                'type' => 3,
            ),
            156 => 
            array (
                'id' => 2657,
                'parent_id' => 317,
                'name' => '潼关县',
                'type' => 3,
            ),
            157 => 
            array (
                'id' => 2658,
                'parent_id' => 317,
                'name' => '大荔县',
                'type' => 3,
            ),
            158 => 
            array (
                'id' => 2659,
                'parent_id' => 317,
                'name' => '合阳县',
                'type' => 3,
            ),
            159 => 
            array (
                'id' => 2660,
                'parent_id' => 317,
                'name' => '澄城县',
                'type' => 3,
            ),
            160 => 
            array (
                'id' => 2661,
                'parent_id' => 317,
                'name' => '蒲城县',
                'type' => 3,
            ),
            161 => 
            array (
                'id' => 2662,
                'parent_id' => 317,
                'name' => '白水县',
                'type' => 3,
            ),
            162 => 
            array (
                'id' => 2663,
                'parent_id' => 317,
                'name' => '富平县',
                'type' => 3,
            ),
            163 => 
            array (
                'id' => 2664,
                'parent_id' => 318,
                'name' => '秦都区',
                'type' => 3,
            ),
            164 => 
            array (
                'id' => 2665,
                'parent_id' => 318,
                'name' => '渭城区',
                'type' => 3,
            ),
            165 => 
            array (
                'id' => 2666,
                'parent_id' => 318,
                'name' => '杨陵区',
                'type' => 3,
            ),
            166 => 
            array (
                'id' => 2667,
                'parent_id' => 318,
                'name' => '兴平市',
                'type' => 3,
            ),
            167 => 
            array (
                'id' => 2668,
                'parent_id' => 318,
                'name' => '三原县',
                'type' => 3,
            ),
            168 => 
            array (
                'id' => 2669,
                'parent_id' => 318,
                'name' => '泾阳县',
                'type' => 3,
            ),
            169 => 
            array (
                'id' => 2670,
                'parent_id' => 318,
                'name' => '乾县',
                'type' => 3,
            ),
            170 => 
            array (
                'id' => 2671,
                'parent_id' => 318,
                'name' => '礼泉县',
                'type' => 3,
            ),
            171 => 
            array (
                'id' => 2672,
                'parent_id' => 318,
                'name' => '永寿县',
                'type' => 3,
            ),
            172 => 
            array (
                'id' => 2673,
                'parent_id' => 318,
                'name' => '彬县',
                'type' => 3,
            ),
            173 => 
            array (
                'id' => 2674,
                'parent_id' => 318,
                'name' => '长武县',
                'type' => 3,
            ),
            174 => 
            array (
                'id' => 2675,
                'parent_id' => 318,
                'name' => '旬邑县',
                'type' => 3,
            ),
            175 => 
            array (
                'id' => 2676,
                'parent_id' => 318,
                'name' => '淳化县',
                'type' => 3,
            ),
            176 => 
            array (
                'id' => 2677,
                'parent_id' => 318,
                'name' => '武功县',
                'type' => 3,
            ),
            177 => 
            array (
                'id' => 2678,
                'parent_id' => 319,
                'name' => '吴起县',
                'type' => 3,
            ),
            178 => 
            array (
                'id' => 2679,
                'parent_id' => 319,
                'name' => '宝塔区',
                'type' => 3,
            ),
            179 => 
            array (
                'id' => 2680,
                'parent_id' => 319,
                'name' => '延长县',
                'type' => 3,
            ),
            180 => 
            array (
                'id' => 2681,
                'parent_id' => 319,
                'name' => '延川县',
                'type' => 3,
            ),
            181 => 
            array (
                'id' => 2682,
                'parent_id' => 319,
                'name' => '子长县',
                'type' => 3,
            ),
            182 => 
            array (
                'id' => 2683,
                'parent_id' => 319,
                'name' => '安塞县',
                'type' => 3,
            ),
            183 => 
            array (
                'id' => 2684,
                'parent_id' => 319,
                'name' => '志丹县',
                'type' => 3,
            ),
            184 => 
            array (
                'id' => 2685,
                'parent_id' => 319,
                'name' => '甘泉县',
                'type' => 3,
            ),
            185 => 
            array (
                'id' => 2686,
                'parent_id' => 319,
                'name' => '富县',
                'type' => 3,
            ),
            186 => 
            array (
                'id' => 2687,
                'parent_id' => 319,
                'name' => '洛川县',
                'type' => 3,
            ),
            187 => 
            array (
                'id' => 2688,
                'parent_id' => 319,
                'name' => '宜川县',
                'type' => 3,
            ),
            188 => 
            array (
                'id' => 2689,
                'parent_id' => 319,
                'name' => '黄龙县',
                'type' => 3,
            ),
            189 => 
            array (
                'id' => 2690,
                'parent_id' => 319,
                'name' => '黄陵县',
                'type' => 3,
            ),
            190 => 
            array (
                'id' => 2691,
                'parent_id' => 320,
                'name' => '榆阳区',
                'type' => 3,
            ),
            191 => 
            array (
                'id' => 2692,
                'parent_id' => 320,
                'name' => '神木县',
                'type' => 3,
            ),
            192 => 
            array (
                'id' => 2693,
                'parent_id' => 320,
                'name' => '府谷县',
                'type' => 3,
            ),
            193 => 
            array (
                'id' => 2694,
                'parent_id' => 320,
                'name' => '横山县',
                'type' => 3,
            ),
            194 => 
            array (
                'id' => 2695,
                'parent_id' => 320,
                'name' => '靖边县',
                'type' => 3,
            ),
            195 => 
            array (
                'id' => 2696,
                'parent_id' => 320,
                'name' => '定边县',
                'type' => 3,
            ),
            196 => 
            array (
                'id' => 2697,
                'parent_id' => 320,
                'name' => '绥德县',
                'type' => 3,
            ),
            197 => 
            array (
                'id' => 2698,
                'parent_id' => 320,
                'name' => '米脂县',
                'type' => 3,
            ),
            198 => 
            array (
                'id' => 2699,
                'parent_id' => 320,
                'name' => '佳县',
                'type' => 3,
            ),
            199 => 
            array (
                'id' => 2700,
                'parent_id' => 320,
                'name' => '吴堡县',
                'type' => 3,
            ),
            200 => 
            array (
                'id' => 2701,
                'parent_id' => 320,
                'name' => '清涧县',
                'type' => 3,
            ),
            201 => 
            array (
                'id' => 2702,
                'parent_id' => 320,
                'name' => '子洲县',
                'type' => 3,
            ),
            202 => 
            array (
                'id' => 2703,
                'parent_id' => 321,
                'name' => '长宁区',
                'type' => 3,
            ),
            203 => 
            array (
                'id' => 2704,
                'parent_id' => 321,
                'name' => '闸北区',
                'type' => 3,
            ),
            204 => 
            array (
                'id' => 2705,
                'parent_id' => 321,
                'name' => '闵行区',
                'type' => 3,
            ),
            205 => 
            array (
                'id' => 2706,
                'parent_id' => 321,
                'name' => '徐汇区',
                'type' => 3,
            ),
            206 => 
            array (
                'id' => 2707,
                'parent_id' => 321,
                'name' => '浦东新区',
                'type' => 3,
            ),
            207 => 
            array (
                'id' => 2708,
                'parent_id' => 321,
                'name' => '杨浦区',
                'type' => 3,
            ),
            208 => 
            array (
                'id' => 2709,
                'parent_id' => 321,
                'name' => '普陀区',
                'type' => 3,
            ),
            209 => 
            array (
                'id' => 2710,
                'parent_id' => 321,
                'name' => '静安区',
                'type' => 3,
            ),
            210 => 
            array (
                'id' => 2711,
                'parent_id' => 321,
                'name' => '卢湾区',
                'type' => 3,
            ),
            211 => 
            array (
                'id' => 2712,
                'parent_id' => 321,
                'name' => '虹口区',
                'type' => 3,
            ),
            212 => 
            array (
                'id' => 2713,
                'parent_id' => 321,
                'name' => '黄浦区',
                'type' => 3,
            ),
            213 => 
            array (
                'id' => 2714,
                'parent_id' => 321,
                'name' => '南汇区',
                'type' => 3,
            ),
            214 => 
            array (
                'id' => 2715,
                'parent_id' => 321,
                'name' => '松江区',
                'type' => 3,
            ),
            215 => 
            array (
                'id' => 2716,
                'parent_id' => 321,
                'name' => '嘉定区',
                'type' => 3,
            ),
            216 => 
            array (
                'id' => 2717,
                'parent_id' => 321,
                'name' => '宝山区',
                'type' => 3,
            ),
            217 => 
            array (
                'id' => 2718,
                'parent_id' => 321,
                'name' => '青浦区',
                'type' => 3,
            ),
            218 => 
            array (
                'id' => 2719,
                'parent_id' => 321,
                'name' => '金山区',
                'type' => 3,
            ),
            219 => 
            array (
                'id' => 2720,
                'parent_id' => 321,
                'name' => '奉贤区',
                'type' => 3,
            ),
            220 => 
            array (
                'id' => 2721,
                'parent_id' => 321,
                'name' => '崇明县',
                'type' => 3,
            ),
            221 => 
            array (
                'id' => 2722,
                'parent_id' => 322,
                'name' => '青羊区',
                'type' => 3,
            ),
            222 => 
            array (
                'id' => 2723,
                'parent_id' => 322,
                'name' => '锦江区',
                'type' => 3,
            ),
            223 => 
            array (
                'id' => 2724,
                'parent_id' => 322,
                'name' => '金牛区',
                'type' => 3,
            ),
            224 => 
            array (
                'id' => 2725,
                'parent_id' => 322,
                'name' => '武侯区',
                'type' => 3,
            ),
            225 => 
            array (
                'id' => 2726,
                'parent_id' => 322,
                'name' => '成华区',
                'type' => 3,
            ),
            226 => 
            array (
                'id' => 2727,
                'parent_id' => 322,
                'name' => '龙泉驿区',
                'type' => 3,
            ),
            227 => 
            array (
                'id' => 2728,
                'parent_id' => 322,
                'name' => '青白江区',
                'type' => 3,
            ),
            228 => 
            array (
                'id' => 2729,
                'parent_id' => 322,
                'name' => '新都区',
                'type' => 3,
            ),
            229 => 
            array (
                'id' => 2730,
                'parent_id' => 322,
                'name' => '温江区',
                'type' => 3,
            ),
            230 => 
            array (
                'id' => 2731,
                'parent_id' => 322,
                'name' => '高新区',
                'type' => 3,
            ),
            231 => 
            array (
                'id' => 2732,
                'parent_id' => 322,
                'name' => '高新西区',
                'type' => 3,
            ),
            232 => 
            array (
                'id' => 2733,
                'parent_id' => 322,
                'name' => '都江堰市',
                'type' => 3,
            ),
            233 => 
            array (
                'id' => 2734,
                'parent_id' => 322,
                'name' => '彭州市',
                'type' => 3,
            ),
            234 => 
            array (
                'id' => 2735,
                'parent_id' => 322,
                'name' => '邛崃市',
                'type' => 3,
            ),
            235 => 
            array (
                'id' => 2736,
                'parent_id' => 322,
                'name' => '崇州市',
                'type' => 3,
            ),
            236 => 
            array (
                'id' => 2737,
                'parent_id' => 322,
                'name' => '金堂县',
                'type' => 3,
            ),
            237 => 
            array (
                'id' => 2738,
                'parent_id' => 322,
                'name' => '双流县',
                'type' => 3,
            ),
            238 => 
            array (
                'id' => 2739,
                'parent_id' => 322,
                'name' => '郫县',
                'type' => 3,
            ),
            239 => 
            array (
                'id' => 2740,
                'parent_id' => 322,
                'name' => '大邑县',
                'type' => 3,
            ),
            240 => 
            array (
                'id' => 2741,
                'parent_id' => 322,
                'name' => '蒲江县',
                'type' => 3,
            ),
            241 => 
            array (
                'id' => 2742,
                'parent_id' => 322,
                'name' => '新津县',
                'type' => 3,
            ),
            242 => 
            array (
                'id' => 2743,
                'parent_id' => 322,
                'name' => '都江堰市',
                'type' => 3,
            ),
            243 => 
            array (
                'id' => 2744,
                'parent_id' => 322,
                'name' => '彭州市',
                'type' => 3,
            ),
            244 => 
            array (
                'id' => 2745,
                'parent_id' => 322,
                'name' => '邛崃市',
                'type' => 3,
            ),
            245 => 
            array (
                'id' => 2746,
                'parent_id' => 322,
                'name' => '崇州市',
                'type' => 3,
            ),
            246 => 
            array (
                'id' => 2747,
                'parent_id' => 322,
                'name' => '金堂县',
                'type' => 3,
            ),
            247 => 
            array (
                'id' => 2748,
                'parent_id' => 322,
                'name' => '双流县',
                'type' => 3,
            ),
            248 => 
            array (
                'id' => 2749,
                'parent_id' => 322,
                'name' => '郫县',
                'type' => 3,
            ),
            249 => 
            array (
                'id' => 2750,
                'parent_id' => 322,
                'name' => '大邑县',
                'type' => 3,
            ),
            250 => 
            array (
                'id' => 2751,
                'parent_id' => 322,
                'name' => '蒲江县',
                'type' => 3,
            ),
            251 => 
            array (
                'id' => 2752,
                'parent_id' => 322,
                'name' => '新津县',
                'type' => 3,
            ),
            252 => 
            array (
                'id' => 2753,
                'parent_id' => 323,
                'name' => '涪城区',
                'type' => 3,
            ),
            253 => 
            array (
                'id' => 2754,
                'parent_id' => 323,
                'name' => '游仙区',
                'type' => 3,
            ),
            254 => 
            array (
                'id' => 2755,
                'parent_id' => 323,
                'name' => '江油市',
                'type' => 3,
            ),
            255 => 
            array (
                'id' => 2756,
                'parent_id' => 323,
                'name' => '盐亭县',
                'type' => 3,
            ),
            256 => 
            array (
                'id' => 2757,
                'parent_id' => 323,
                'name' => '三台县',
                'type' => 3,
            ),
            257 => 
            array (
                'id' => 2758,
                'parent_id' => 323,
                'name' => '平武县',
                'type' => 3,
            ),
            258 => 
            array (
                'id' => 2759,
                'parent_id' => 323,
                'name' => '安县',
                'type' => 3,
            ),
            259 => 
            array (
                'id' => 2760,
                'parent_id' => 323,
                'name' => '梓潼县',
                'type' => 3,
            ),
            260 => 
            array (
                'id' => 2761,
                'parent_id' => 323,
                'name' => '北川县',
                'type' => 3,
            ),
            261 => 
            array (
                'id' => 2762,
                'parent_id' => 324,
                'name' => '马尔康县',
                'type' => 3,
            ),
            262 => 
            array (
                'id' => 2763,
                'parent_id' => 324,
                'name' => '汶川县',
                'type' => 3,
            ),
            263 => 
            array (
                'id' => 2764,
                'parent_id' => 324,
                'name' => '理县',
                'type' => 3,
            ),
            264 => 
            array (
                'id' => 2765,
                'parent_id' => 324,
                'name' => '茂县',
                'type' => 3,
            ),
            265 => 
            array (
                'id' => 2766,
                'parent_id' => 324,
                'name' => '松潘县',
                'type' => 3,
            ),
            266 => 
            array (
                'id' => 2767,
                'parent_id' => 324,
                'name' => '九寨沟县',
                'type' => 3,
            ),
            267 => 
            array (
                'id' => 2768,
                'parent_id' => 324,
                'name' => '金川县',
                'type' => 3,
            ),
            268 => 
            array (
                'id' => 2769,
                'parent_id' => 324,
                'name' => '小金县',
                'type' => 3,
            ),
            269 => 
            array (
                'id' => 2770,
                'parent_id' => 324,
                'name' => '黑水县',
                'type' => 3,
            ),
            270 => 
            array (
                'id' => 2771,
                'parent_id' => 324,
                'name' => '壤塘县',
                'type' => 3,
            ),
            271 => 
            array (
                'id' => 2772,
                'parent_id' => 324,
                'name' => '阿坝县',
                'type' => 3,
            ),
            272 => 
            array (
                'id' => 2773,
                'parent_id' => 324,
                'name' => '若尔盖县',
                'type' => 3,
            ),
            273 => 
            array (
                'id' => 2774,
                'parent_id' => 324,
                'name' => '红原县',
                'type' => 3,
            ),
            274 => 
            array (
                'id' => 2775,
                'parent_id' => 325,
                'name' => '巴州区',
                'type' => 3,
            ),
            275 => 
            array (
                'id' => 2776,
                'parent_id' => 325,
                'name' => '通江县',
                'type' => 3,
            ),
            276 => 
            array (
                'id' => 2777,
                'parent_id' => 325,
                'name' => '南江县',
                'type' => 3,
            ),
            277 => 
            array (
                'id' => 2778,
                'parent_id' => 325,
                'name' => '平昌县',
                'type' => 3,
            ),
            278 => 
            array (
                'id' => 2779,
                'parent_id' => 326,
                'name' => '通川区',
                'type' => 3,
            ),
            279 => 
            array (
                'id' => 2780,
                'parent_id' => 326,
                'name' => '万源市',
                'type' => 3,
            ),
            280 => 
            array (
                'id' => 2781,
                'parent_id' => 326,
                'name' => '达县',
                'type' => 3,
            ),
            281 => 
            array (
                'id' => 2782,
                'parent_id' => 326,
                'name' => '宣汉县',
                'type' => 3,
            ),
            282 => 
            array (
                'id' => 2783,
                'parent_id' => 326,
                'name' => '开江县',
                'type' => 3,
            ),
            283 => 
            array (
                'id' => 2784,
                'parent_id' => 326,
                'name' => '大竹县',
                'type' => 3,
            ),
            284 => 
            array (
                'id' => 2785,
                'parent_id' => 326,
                'name' => '渠县',
                'type' => 3,
            ),
            285 => 
            array (
                'id' => 2786,
                'parent_id' => 327,
                'name' => '旌阳区',
                'type' => 3,
            ),
            286 => 
            array (
                'id' => 2787,
                'parent_id' => 327,
                'name' => '广汉市',
                'type' => 3,
            ),
            287 => 
            array (
                'id' => 2788,
                'parent_id' => 327,
                'name' => '什邡市',
                'type' => 3,
            ),
            288 => 
            array (
                'id' => 2789,
                'parent_id' => 327,
                'name' => '绵竹市',
                'type' => 3,
            ),
            289 => 
            array (
                'id' => 2790,
                'parent_id' => 327,
                'name' => '罗江县',
                'type' => 3,
            ),
            290 => 
            array (
                'id' => 2791,
                'parent_id' => 327,
                'name' => '中江县',
                'type' => 3,
            ),
            291 => 
            array (
                'id' => 2792,
                'parent_id' => 328,
                'name' => '康定县',
                'type' => 3,
            ),
            292 => 
            array (
                'id' => 2793,
                'parent_id' => 328,
                'name' => '丹巴县',
                'type' => 3,
            ),
            293 => 
            array (
                'id' => 2794,
                'parent_id' => 328,
                'name' => '泸定县',
                'type' => 3,
            ),
            294 => 
            array (
                'id' => 2795,
                'parent_id' => 328,
                'name' => '炉霍县',
                'type' => 3,
            ),
            295 => 
            array (
                'id' => 2796,
                'parent_id' => 328,
                'name' => '九龙县',
                'type' => 3,
            ),
            296 => 
            array (
                'id' => 2797,
                'parent_id' => 328,
                'name' => '甘孜县',
                'type' => 3,
            ),
            297 => 
            array (
                'id' => 2798,
                'parent_id' => 328,
                'name' => '雅江县',
                'type' => 3,
            ),
            298 => 
            array (
                'id' => 2799,
                'parent_id' => 328,
                'name' => '新龙县',
                'type' => 3,
            ),
            299 => 
            array (
                'id' => 2800,
                'parent_id' => 328,
                'name' => '道孚县',
                'type' => 3,
            ),
            300 => 
            array (
                'id' => 2801,
                'parent_id' => 328,
                'name' => '白玉县',
                'type' => 3,
            ),
            301 => 
            array (
                'id' => 2802,
                'parent_id' => 328,
                'name' => '理塘县',
                'type' => 3,
            ),
            302 => 
            array (
                'id' => 2803,
                'parent_id' => 328,
                'name' => '德格县',
                'type' => 3,
            ),
            303 => 
            array (
                'id' => 2804,
                'parent_id' => 328,
                'name' => '乡城县',
                'type' => 3,
            ),
            304 => 
            array (
                'id' => 2805,
                'parent_id' => 328,
                'name' => '石渠县',
                'type' => 3,
            ),
            305 => 
            array (
                'id' => 2806,
                'parent_id' => 328,
                'name' => '稻城县',
                'type' => 3,
            ),
            306 => 
            array (
                'id' => 2807,
                'parent_id' => 328,
                'name' => '色达县',
                'type' => 3,
            ),
            307 => 
            array (
                'id' => 2808,
                'parent_id' => 328,
                'name' => '巴塘县',
                'type' => 3,
            ),
            308 => 
            array (
                'id' => 2809,
                'parent_id' => 328,
                'name' => '得荣县',
                'type' => 3,
            ),
            309 => 
            array (
                'id' => 2810,
                'parent_id' => 329,
                'name' => '广安区',
                'type' => 3,
            ),
            310 => 
            array (
                'id' => 2811,
                'parent_id' => 329,
                'name' => '华蓥市',
                'type' => 3,
            ),
            311 => 
            array (
                'id' => 2812,
                'parent_id' => 329,
                'name' => '岳池县',
                'type' => 3,
            ),
            312 => 
            array (
                'id' => 2813,
                'parent_id' => 329,
                'name' => '武胜县',
                'type' => 3,
            ),
            313 => 
            array (
                'id' => 2814,
                'parent_id' => 329,
                'name' => '邻水县',
                'type' => 3,
            ),
            314 => 
            array (
                'id' => 2815,
                'parent_id' => 330,
                'name' => '利州区',
                'type' => 3,
            ),
            315 => 
            array (
                'id' => 2816,
                'parent_id' => 330,
                'name' => '元坝区',
                'type' => 3,
            ),
            316 => 
            array (
                'id' => 2817,
                'parent_id' => 330,
                'name' => '朝天区',
                'type' => 3,
            ),
            317 => 
            array (
                'id' => 2818,
                'parent_id' => 330,
                'name' => '旺苍县',
                'type' => 3,
            ),
            318 => 
            array (
                'id' => 2819,
                'parent_id' => 330,
                'name' => '青川县',
                'type' => 3,
            ),
            319 => 
            array (
                'id' => 2820,
                'parent_id' => 330,
                'name' => '剑阁县',
                'type' => 3,
            ),
            320 => 
            array (
                'id' => 2821,
                'parent_id' => 330,
                'name' => '苍溪县',
                'type' => 3,
            ),
            321 => 
            array (
                'id' => 2822,
                'parent_id' => 331,
                'name' => '峨眉山市',
                'type' => 3,
            ),
            322 => 
            array (
                'id' => 2823,
                'parent_id' => 331,
                'name' => '乐山市',
                'type' => 3,
            ),
            323 => 
            array (
                'id' => 2824,
                'parent_id' => 331,
                'name' => '犍为县',
                'type' => 3,
            ),
            324 => 
            array (
                'id' => 2825,
                'parent_id' => 331,
                'name' => '井研县',
                'type' => 3,
            ),
            325 => 
            array (
                'id' => 2826,
                'parent_id' => 331,
                'name' => '夹江县',
                'type' => 3,
            ),
            326 => 
            array (
                'id' => 2827,
                'parent_id' => 331,
                'name' => '沐川县',
                'type' => 3,
            ),
            327 => 
            array (
                'id' => 2828,
                'parent_id' => 331,
                'name' => '峨边',
                'type' => 3,
            ),
            328 => 
            array (
                'id' => 2829,
                'parent_id' => 331,
                'name' => '马边',
                'type' => 3,
            ),
            329 => 
            array (
                'id' => 2830,
                'parent_id' => 332,
                'name' => '西昌市',
                'type' => 3,
            ),
            330 => 
            array (
                'id' => 2831,
                'parent_id' => 332,
                'name' => '盐源县',
                'type' => 3,
            ),
            331 => 
            array (
                'id' => 2832,
                'parent_id' => 332,
                'name' => '德昌县',
                'type' => 3,
            ),
            332 => 
            array (
                'id' => 2833,
                'parent_id' => 332,
                'name' => '会理县',
                'type' => 3,
            ),
            333 => 
            array (
                'id' => 2834,
                'parent_id' => 332,
                'name' => '会东县',
                'type' => 3,
            ),
            334 => 
            array (
                'id' => 2835,
                'parent_id' => 332,
                'name' => '宁南县',
                'type' => 3,
            ),
            335 => 
            array (
                'id' => 2836,
                'parent_id' => 332,
                'name' => '普格县',
                'type' => 3,
            ),
            336 => 
            array (
                'id' => 2837,
                'parent_id' => 332,
                'name' => '布拖县',
                'type' => 3,
            ),
            337 => 
            array (
                'id' => 2838,
                'parent_id' => 332,
                'name' => '金阳县',
                'type' => 3,
            ),
            338 => 
            array (
                'id' => 2839,
                'parent_id' => 332,
                'name' => '昭觉县',
                'type' => 3,
            ),
            339 => 
            array (
                'id' => 2840,
                'parent_id' => 332,
                'name' => '喜德县',
                'type' => 3,
            ),
            340 => 
            array (
                'id' => 2841,
                'parent_id' => 332,
                'name' => '冕宁县',
                'type' => 3,
            ),
            341 => 
            array (
                'id' => 2842,
                'parent_id' => 332,
                'name' => '越西县',
                'type' => 3,
            ),
            342 => 
            array (
                'id' => 2843,
                'parent_id' => 332,
                'name' => '甘洛县',
                'type' => 3,
            ),
            343 => 
            array (
                'id' => 2844,
                'parent_id' => 332,
                'name' => '美姑县',
                'type' => 3,
            ),
            344 => 
            array (
                'id' => 2845,
                'parent_id' => 332,
                'name' => '雷波县',
                'type' => 3,
            ),
            345 => 
            array (
                'id' => 2846,
                'parent_id' => 332,
                'name' => '木里',
                'type' => 3,
            ),
            346 => 
            array (
                'id' => 2847,
                'parent_id' => 333,
                'name' => '东坡区',
                'type' => 3,
            ),
            347 => 
            array (
                'id' => 2848,
                'parent_id' => 333,
                'name' => '仁寿县',
                'type' => 3,
            ),
            348 => 
            array (
                'id' => 2849,
                'parent_id' => 333,
                'name' => '彭山县',
                'type' => 3,
            ),
            349 => 
            array (
                'id' => 2850,
                'parent_id' => 333,
                'name' => '洪雅县',
                'type' => 3,
            ),
            350 => 
            array (
                'id' => 2851,
                'parent_id' => 333,
                'name' => '丹棱县',
                'type' => 3,
            ),
            351 => 
            array (
                'id' => 2852,
                'parent_id' => 333,
                'name' => '青神县',
                'type' => 3,
            ),
            352 => 
            array (
                'id' => 2853,
                'parent_id' => 334,
                'name' => '阆中市',
                'type' => 3,
            ),
            353 => 
            array (
                'id' => 2854,
                'parent_id' => 334,
                'name' => '南部县',
                'type' => 3,
            ),
            354 => 
            array (
                'id' => 2855,
                'parent_id' => 334,
                'name' => '营山县',
                'type' => 3,
            ),
            355 => 
            array (
                'id' => 2856,
                'parent_id' => 334,
                'name' => '蓬安县',
                'type' => 3,
            ),
            356 => 
            array (
                'id' => 2857,
                'parent_id' => 334,
                'name' => '仪陇县',
                'type' => 3,
            ),
            357 => 
            array (
                'id' => 2858,
                'parent_id' => 334,
                'name' => '顺庆区',
                'type' => 3,
            ),
            358 => 
            array (
                'id' => 2859,
                'parent_id' => 334,
                'name' => '高坪区',
                'type' => 3,
            ),
            359 => 
            array (
                'id' => 2860,
                'parent_id' => 334,
                'name' => '嘉陵区',
                'type' => 3,
            ),
            360 => 
            array (
                'id' => 2861,
                'parent_id' => 334,
                'name' => '西充县',
                'type' => 3,
            ),
            361 => 
            array (
                'id' => 2862,
                'parent_id' => 335,
                'name' => '市中区',
                'type' => 3,
            ),
            362 => 
            array (
                'id' => 2863,
                'parent_id' => 335,
                'name' => '东兴区',
                'type' => 3,
            ),
            363 => 
            array (
                'id' => 2864,
                'parent_id' => 335,
                'name' => '威远县',
                'type' => 3,
            ),
            364 => 
            array (
                'id' => 2865,
                'parent_id' => 335,
                'name' => '资中县',
                'type' => 3,
            ),
            365 => 
            array (
                'id' => 2866,
                'parent_id' => 335,
                'name' => '隆昌县',
                'type' => 3,
            ),
            366 => 
            array (
                'id' => 2867,
                'parent_id' => 336,
                'name' => '东  区',
                'type' => 3,
            ),
            367 => 
            array (
                'id' => 2868,
                'parent_id' => 336,
                'name' => '西  区',
                'type' => 3,
            ),
            368 => 
            array (
                'id' => 2869,
                'parent_id' => 336,
                'name' => '仁和区',
                'type' => 3,
            ),
            369 => 
            array (
                'id' => 2870,
                'parent_id' => 336,
                'name' => '米易县',
                'type' => 3,
            ),
            370 => 
            array (
                'id' => 2871,
                'parent_id' => 336,
                'name' => '盐边县',
                'type' => 3,
            ),
            371 => 
            array (
                'id' => 2872,
                'parent_id' => 337,
                'name' => '船山区',
                'type' => 3,
            ),
            372 => 
            array (
                'id' => 2873,
                'parent_id' => 337,
                'name' => '安居区',
                'type' => 3,
            ),
            373 => 
            array (
                'id' => 2874,
                'parent_id' => 337,
                'name' => '蓬溪县',
                'type' => 3,
            ),
            374 => 
            array (
                'id' => 2875,
                'parent_id' => 337,
                'name' => '射洪县',
                'type' => 3,
            ),
            375 => 
            array (
                'id' => 2876,
                'parent_id' => 337,
                'name' => '大英县',
                'type' => 3,
            ),
            376 => 
            array (
                'id' => 2877,
                'parent_id' => 338,
                'name' => '雨城区',
                'type' => 3,
            ),
            377 => 
            array (
                'id' => 2878,
                'parent_id' => 338,
                'name' => '名山县',
                'type' => 3,
            ),
            378 => 
            array (
                'id' => 2879,
                'parent_id' => 338,
                'name' => '荥经县',
                'type' => 3,
            ),
            379 => 
            array (
                'id' => 2880,
                'parent_id' => 338,
                'name' => '汉源县',
                'type' => 3,
            ),
            380 => 
            array (
                'id' => 2881,
                'parent_id' => 338,
                'name' => '石棉县',
                'type' => 3,
            ),
            381 => 
            array (
                'id' => 2882,
                'parent_id' => 338,
                'name' => '天全县',
                'type' => 3,
            ),
            382 => 
            array (
                'id' => 2883,
                'parent_id' => 338,
                'name' => '芦山县',
                'type' => 3,
            ),
            383 => 
            array (
                'id' => 2884,
                'parent_id' => 338,
                'name' => '宝兴县',
                'type' => 3,
            ),
            384 => 
            array (
                'id' => 2885,
                'parent_id' => 339,
                'name' => '翠屏区',
                'type' => 3,
            ),
            385 => 
            array (
                'id' => 2886,
                'parent_id' => 339,
                'name' => '宜宾县',
                'type' => 3,
            ),
            386 => 
            array (
                'id' => 2887,
                'parent_id' => 339,
                'name' => '南溪县',
                'type' => 3,
            ),
            387 => 
            array (
                'id' => 2888,
                'parent_id' => 339,
                'name' => '江安县',
                'type' => 3,
            ),
            388 => 
            array (
                'id' => 2889,
                'parent_id' => 339,
                'name' => '长宁县',
                'type' => 3,
            ),
            389 => 
            array (
                'id' => 2890,
                'parent_id' => 339,
                'name' => '高县',
                'type' => 3,
            ),
            390 => 
            array (
                'id' => 2891,
                'parent_id' => 339,
                'name' => '珙县',
                'type' => 3,
            ),
            391 => 
            array (
                'id' => 2892,
                'parent_id' => 339,
                'name' => '筠连县',
                'type' => 3,
            ),
            392 => 
            array (
                'id' => 2893,
                'parent_id' => 339,
                'name' => '兴文县',
                'type' => 3,
            ),
            393 => 
            array (
                'id' => 2894,
                'parent_id' => 339,
                'name' => '屏山县',
                'type' => 3,
            ),
            394 => 
            array (
                'id' => 2895,
                'parent_id' => 340,
                'name' => '雁江区',
                'type' => 3,
            ),
            395 => 
            array (
                'id' => 2896,
                'parent_id' => 340,
                'name' => '简阳市',
                'type' => 3,
            ),
            396 => 
            array (
                'id' => 2897,
                'parent_id' => 340,
                'name' => '安岳县',
                'type' => 3,
            ),
            397 => 
            array (
                'id' => 2898,
                'parent_id' => 340,
                'name' => '乐至县',
                'type' => 3,
            ),
            398 => 
            array (
                'id' => 2899,
                'parent_id' => 341,
                'name' => '大安区',
                'type' => 3,
            ),
            399 => 
            array (
                'id' => 2900,
                'parent_id' => 341,
                'name' => '自流井区',
                'type' => 3,
            ),
            400 => 
            array (
                'id' => 2901,
                'parent_id' => 341,
                'name' => '贡井区',
                'type' => 3,
            ),
            401 => 
            array (
                'id' => 2902,
                'parent_id' => 341,
                'name' => '沿滩区',
                'type' => 3,
            ),
            402 => 
            array (
                'id' => 2903,
                'parent_id' => 341,
                'name' => '荣县',
                'type' => 3,
            ),
            403 => 
            array (
                'id' => 2904,
                'parent_id' => 341,
                'name' => '富顺县',
                'type' => 3,
            ),
            404 => 
            array (
                'id' => 2905,
                'parent_id' => 342,
                'name' => '江阳区',
                'type' => 3,
            ),
            405 => 
            array (
                'id' => 2906,
                'parent_id' => 342,
                'name' => '纳溪区',
                'type' => 3,
            ),
            406 => 
            array (
                'id' => 2907,
                'parent_id' => 342,
                'name' => '龙马潭区',
                'type' => 3,
            ),
            407 => 
            array (
                'id' => 2908,
                'parent_id' => 342,
                'name' => '泸县',
                'type' => 3,
            ),
            408 => 
            array (
                'id' => 2909,
                'parent_id' => 342,
                'name' => '合江县',
                'type' => 3,
            ),
            409 => 
            array (
                'id' => 2910,
                'parent_id' => 342,
                'name' => '叙永县',
                'type' => 3,
            ),
            410 => 
            array (
                'id' => 2911,
                'parent_id' => 342,
                'name' => '古蔺县',
                'type' => 3,
            ),
            411 => 
            array (
                'id' => 2912,
                'parent_id' => 343,
                'name' => '和平区',
                'type' => 3,
            ),
            412 => 
            array (
                'id' => 2913,
                'parent_id' => 343,
                'name' => '河西区',
                'type' => 3,
            ),
            413 => 
            array (
                'id' => 2914,
                'parent_id' => 343,
                'name' => '南开区',
                'type' => 3,
            ),
            414 => 
            array (
                'id' => 2915,
                'parent_id' => 343,
                'name' => '河北区',
                'type' => 3,
            ),
            415 => 
            array (
                'id' => 2916,
                'parent_id' => 343,
                'name' => '河东区',
                'type' => 3,
            ),
            416 => 
            array (
                'id' => 2917,
                'parent_id' => 343,
                'name' => '红桥区',
                'type' => 3,
            ),
            417 => 
            array (
                'id' => 2918,
                'parent_id' => 343,
                'name' => '东丽区',
                'type' => 3,
            ),
            418 => 
            array (
                'id' => 2919,
                'parent_id' => 343,
                'name' => '津南区',
                'type' => 3,
            ),
            419 => 
            array (
                'id' => 2920,
                'parent_id' => 343,
                'name' => '西青区',
                'type' => 3,
            ),
            420 => 
            array (
                'id' => 2921,
                'parent_id' => 343,
                'name' => '北辰区',
                'type' => 3,
            ),
            421 => 
            array (
                'id' => 2922,
                'parent_id' => 343,
                'name' => '塘沽区',
                'type' => 3,
            ),
            422 => 
            array (
                'id' => 2923,
                'parent_id' => 343,
                'name' => '汉沽区',
                'type' => 3,
            ),
            423 => 
            array (
                'id' => 2924,
                'parent_id' => 343,
                'name' => '大港区',
                'type' => 3,
            ),
            424 => 
            array (
                'id' => 2925,
                'parent_id' => 343,
                'name' => '武清区',
                'type' => 3,
            ),
            425 => 
            array (
                'id' => 2926,
                'parent_id' => 343,
                'name' => '宝坻区',
                'type' => 3,
            ),
            426 => 
            array (
                'id' => 2927,
                'parent_id' => 343,
                'name' => '经济开发区',
                'type' => 3,
            ),
            427 => 
            array (
                'id' => 2928,
                'parent_id' => 343,
                'name' => '宁河县',
                'type' => 3,
            ),
            428 => 
            array (
                'id' => 2929,
                'parent_id' => 343,
                'name' => '静海县',
                'type' => 3,
            ),
            429 => 
            array (
                'id' => 2930,
                'parent_id' => 343,
                'name' => '蓟县',
                'type' => 3,
            ),
            430 => 
            array (
                'id' => 2931,
                'parent_id' => 344,
                'name' => '城关区',
                'type' => 3,
            ),
            431 => 
            array (
                'id' => 2932,
                'parent_id' => 344,
                'name' => '林周县',
                'type' => 3,
            ),
            432 => 
            array (
                'id' => 2933,
                'parent_id' => 344,
                'name' => '当雄县',
                'type' => 3,
            ),
            433 => 
            array (
                'id' => 2934,
                'parent_id' => 344,
                'name' => '尼木县',
                'type' => 3,
            ),
            434 => 
            array (
                'id' => 2935,
                'parent_id' => 344,
                'name' => '曲水县',
                'type' => 3,
            ),
            435 => 
            array (
                'id' => 2936,
                'parent_id' => 344,
                'name' => '堆龙德庆县',
                'type' => 3,
            ),
            436 => 
            array (
                'id' => 2937,
                'parent_id' => 344,
                'name' => '达孜县',
                'type' => 3,
            ),
            437 => 
            array (
                'id' => 2938,
                'parent_id' => 344,
                'name' => '墨竹工卡县',
                'type' => 3,
            ),
            438 => 
            array (
                'id' => 2939,
                'parent_id' => 345,
                'name' => '噶尔县',
                'type' => 3,
            ),
            439 => 
            array (
                'id' => 2940,
                'parent_id' => 345,
                'name' => '普兰县',
                'type' => 3,
            ),
            440 => 
            array (
                'id' => 2941,
                'parent_id' => 345,
                'name' => '札达县',
                'type' => 3,
            ),
            441 => 
            array (
                'id' => 2942,
                'parent_id' => 345,
                'name' => '日土县',
                'type' => 3,
            ),
            442 => 
            array (
                'id' => 2943,
                'parent_id' => 345,
                'name' => '革吉县',
                'type' => 3,
            ),
            443 => 
            array (
                'id' => 2944,
                'parent_id' => 345,
                'name' => '改则县',
                'type' => 3,
            ),
            444 => 
            array (
                'id' => 2945,
                'parent_id' => 345,
                'name' => '措勤县',
                'type' => 3,
            ),
            445 => 
            array (
                'id' => 2946,
                'parent_id' => 346,
                'name' => '昌都县',
                'type' => 3,
            ),
            446 => 
            array (
                'id' => 2947,
                'parent_id' => 346,
                'name' => '江达县',
                'type' => 3,
            ),
            447 => 
            array (
                'id' => 2948,
                'parent_id' => 346,
                'name' => '贡觉县',
                'type' => 3,
            ),
            448 => 
            array (
                'id' => 2949,
                'parent_id' => 346,
                'name' => '类乌齐县',
                'type' => 3,
            ),
            449 => 
            array (
                'id' => 2950,
                'parent_id' => 346,
                'name' => '丁青县',
                'type' => 3,
            ),
            450 => 
            array (
                'id' => 2951,
                'parent_id' => 346,
                'name' => '察雅县',
                'type' => 3,
            ),
            451 => 
            array (
                'id' => 2952,
                'parent_id' => 346,
                'name' => '八宿县',
                'type' => 3,
            ),
            452 => 
            array (
                'id' => 2953,
                'parent_id' => 346,
                'name' => '左贡县',
                'type' => 3,
            ),
            453 => 
            array (
                'id' => 2954,
                'parent_id' => 346,
                'name' => '芒康县',
                'type' => 3,
            ),
            454 => 
            array (
                'id' => 2955,
                'parent_id' => 346,
                'name' => '洛隆县',
                'type' => 3,
            ),
            455 => 
            array (
                'id' => 2956,
                'parent_id' => 346,
                'name' => '边坝县',
                'type' => 3,
            ),
            456 => 
            array (
                'id' => 2957,
                'parent_id' => 347,
                'name' => '林芝县',
                'type' => 3,
            ),
            457 => 
            array (
                'id' => 2958,
                'parent_id' => 347,
                'name' => '工布江达县',
                'type' => 3,
            ),
            458 => 
            array (
                'id' => 2959,
                'parent_id' => 347,
                'name' => '米林县',
                'type' => 3,
            ),
            459 => 
            array (
                'id' => 2960,
                'parent_id' => 347,
                'name' => '墨脱县',
                'type' => 3,
            ),
            460 => 
            array (
                'id' => 2961,
                'parent_id' => 347,
                'name' => '波密县',
                'type' => 3,
            ),
            461 => 
            array (
                'id' => 2962,
                'parent_id' => 347,
                'name' => '察隅县',
                'type' => 3,
            ),
            462 => 
            array (
                'id' => 2963,
                'parent_id' => 347,
                'name' => '朗县',
                'type' => 3,
            ),
            463 => 
            array (
                'id' => 2964,
                'parent_id' => 348,
                'name' => '那曲县',
                'type' => 3,
            ),
            464 => 
            array (
                'id' => 2965,
                'parent_id' => 348,
                'name' => '嘉黎县',
                'type' => 3,
            ),
            465 => 
            array (
                'id' => 2966,
                'parent_id' => 348,
                'name' => '比如县',
                'type' => 3,
            ),
            466 => 
            array (
                'id' => 2967,
                'parent_id' => 348,
                'name' => '聂荣县',
                'type' => 3,
            ),
            467 => 
            array (
                'id' => 2968,
                'parent_id' => 348,
                'name' => '安多县',
                'type' => 3,
            ),
            468 => 
            array (
                'id' => 2969,
                'parent_id' => 348,
                'name' => '申扎县',
                'type' => 3,
            ),
            469 => 
            array (
                'id' => 2970,
                'parent_id' => 348,
                'name' => '索县',
                'type' => 3,
            ),
            470 => 
            array (
                'id' => 2971,
                'parent_id' => 348,
                'name' => '班戈县',
                'type' => 3,
            ),
            471 => 
            array (
                'id' => 2972,
                'parent_id' => 348,
                'name' => '巴青县',
                'type' => 3,
            ),
            472 => 
            array (
                'id' => 2973,
                'parent_id' => 348,
                'name' => '尼玛县',
                'type' => 3,
            ),
            473 => 
            array (
                'id' => 2974,
                'parent_id' => 349,
                'name' => '日喀则市',
                'type' => 3,
            ),
            474 => 
            array (
                'id' => 2975,
                'parent_id' => 349,
                'name' => '南木林县',
                'type' => 3,
            ),
            475 => 
            array (
                'id' => 2976,
                'parent_id' => 349,
                'name' => '江孜县',
                'type' => 3,
            ),
            476 => 
            array (
                'id' => 2977,
                'parent_id' => 349,
                'name' => '定日县',
                'type' => 3,
            ),
            477 => 
            array (
                'id' => 2978,
                'parent_id' => 349,
                'name' => '萨迦县',
                'type' => 3,
            ),
            478 => 
            array (
                'id' => 2979,
                'parent_id' => 349,
                'name' => '拉孜县',
                'type' => 3,
            ),
            479 => 
            array (
                'id' => 2980,
                'parent_id' => 349,
                'name' => '昂仁县',
                'type' => 3,
            ),
            480 => 
            array (
                'id' => 2981,
                'parent_id' => 349,
                'name' => '谢通门县',
                'type' => 3,
            ),
            481 => 
            array (
                'id' => 2982,
                'parent_id' => 349,
                'name' => '白朗县',
                'type' => 3,
            ),
            482 => 
            array (
                'id' => 2983,
                'parent_id' => 349,
                'name' => '仁布县',
                'type' => 3,
            ),
            483 => 
            array (
                'id' => 2984,
                'parent_id' => 349,
                'name' => '康马县',
                'type' => 3,
            ),
            484 => 
            array (
                'id' => 2985,
                'parent_id' => 349,
                'name' => '定结县',
                'type' => 3,
            ),
            485 => 
            array (
                'id' => 2986,
                'parent_id' => 349,
                'name' => '仲巴县',
                'type' => 3,
            ),
            486 => 
            array (
                'id' => 2987,
                'parent_id' => 349,
                'name' => '亚东县',
                'type' => 3,
            ),
            487 => 
            array (
                'id' => 2988,
                'parent_id' => 349,
                'name' => '吉隆县',
                'type' => 3,
            ),
            488 => 
            array (
                'id' => 2989,
                'parent_id' => 349,
                'name' => '聂拉木县',
                'type' => 3,
            ),
            489 => 
            array (
                'id' => 2990,
                'parent_id' => 349,
                'name' => '萨嘎县',
                'type' => 3,
            ),
            490 => 
            array (
                'id' => 2991,
                'parent_id' => 349,
                'name' => '岗巴县',
                'type' => 3,
            ),
            491 => 
            array (
                'id' => 2992,
                'parent_id' => 350,
                'name' => '乃东县',
                'type' => 3,
            ),
            492 => 
            array (
                'id' => 2993,
                'parent_id' => 350,
                'name' => '扎囊县',
                'type' => 3,
            ),
            493 => 
            array (
                'id' => 2994,
                'parent_id' => 350,
                'name' => '贡嘎县',
                'type' => 3,
            ),
            494 => 
            array (
                'id' => 2995,
                'parent_id' => 350,
                'name' => '桑日县',
                'type' => 3,
            ),
            495 => 
            array (
                'id' => 2996,
                'parent_id' => 350,
                'name' => '琼结县',
                'type' => 3,
            ),
            496 => 
            array (
                'id' => 2997,
                'parent_id' => 350,
                'name' => '曲松县',
                'type' => 3,
            ),
            497 => 
            array (
                'id' => 2998,
                'parent_id' => 350,
                'name' => '措美县',
                'type' => 3,
            ),
            498 => 
            array (
                'id' => 2999,
                'parent_id' => 350,
                'name' => '洛扎县',
                'type' => 3,
            ),
            499 => 
            array (
                'id' => 3000,
                'parent_id' => 350,
                'name' => '加查县',
                'type' => 3,
            ),
        ));
        \DB::table('china_area')->insert(array (
            0 => 
            array (
                'id' => 3001,
                'parent_id' => 350,
                'name' => '隆子县',
                'type' => 3,
            ),
            1 => 
            array (
                'id' => 3002,
                'parent_id' => 350,
                'name' => '错那县',
                'type' => 3,
            ),
            2 => 
            array (
                'id' => 3003,
                'parent_id' => 350,
                'name' => '浪卡子县',
                'type' => 3,
            ),
            3 => 
            array (
                'id' => 3004,
                'parent_id' => 351,
                'name' => '天山区',
                'type' => 3,
            ),
            4 => 
            array (
                'id' => 3005,
                'parent_id' => 351,
                'name' => '沙依巴克区',
                'type' => 3,
            ),
            5 => 
            array (
                'id' => 3006,
                'parent_id' => 351,
                'name' => '新市区',
                'type' => 3,
            ),
            6 => 
            array (
                'id' => 3007,
                'parent_id' => 351,
                'name' => '水磨沟区',
                'type' => 3,
            ),
            7 => 
            array (
                'id' => 3008,
                'parent_id' => 351,
                'name' => '头屯河区',
                'type' => 3,
            ),
            8 => 
            array (
                'id' => 3009,
                'parent_id' => 351,
                'name' => '达坂城区',
                'type' => 3,
            ),
            9 => 
            array (
                'id' => 3010,
                'parent_id' => 351,
                'name' => '米东区',
                'type' => 3,
            ),
            10 => 
            array (
                'id' => 3011,
                'parent_id' => 351,
                'name' => '乌鲁木齐县',
                'type' => 3,
            ),
            11 => 
            array (
                'id' => 3012,
                'parent_id' => 352,
                'name' => '阿克苏市',
                'type' => 3,
            ),
            12 => 
            array (
                'id' => 3013,
                'parent_id' => 352,
                'name' => '温宿县',
                'type' => 3,
            ),
            13 => 
            array (
                'id' => 3014,
                'parent_id' => 352,
                'name' => '库车县',
                'type' => 3,
            ),
            14 => 
            array (
                'id' => 3015,
                'parent_id' => 352,
                'name' => '沙雅县',
                'type' => 3,
            ),
            15 => 
            array (
                'id' => 3016,
                'parent_id' => 352,
                'name' => '新和县',
                'type' => 3,
            ),
            16 => 
            array (
                'id' => 3017,
                'parent_id' => 352,
                'name' => '拜城县',
                'type' => 3,
            ),
            17 => 
            array (
                'id' => 3018,
                'parent_id' => 352,
                'name' => '乌什县',
                'type' => 3,
            ),
            18 => 
            array (
                'id' => 3019,
                'parent_id' => 352,
                'name' => '阿瓦提县',
                'type' => 3,
            ),
            19 => 
            array (
                'id' => 3020,
                'parent_id' => 352,
                'name' => '柯坪县',
                'type' => 3,
            ),
            20 => 
            array (
                'id' => 3021,
                'parent_id' => 353,
                'name' => '阿拉尔市',
                'type' => 3,
            ),
            21 => 
            array (
                'id' => 3022,
                'parent_id' => 354,
                'name' => '库尔勒市',
                'type' => 3,
            ),
            22 => 
            array (
                'id' => 3023,
                'parent_id' => 354,
                'name' => '轮台县',
                'type' => 3,
            ),
            23 => 
            array (
                'id' => 3024,
                'parent_id' => 354,
                'name' => '尉犁县',
                'type' => 3,
            ),
            24 => 
            array (
                'id' => 3025,
                'parent_id' => 354,
                'name' => '若羌县',
                'type' => 3,
            ),
            25 => 
            array (
                'id' => 3026,
                'parent_id' => 354,
                'name' => '且末县',
                'type' => 3,
            ),
            26 => 
            array (
                'id' => 3027,
                'parent_id' => 354,
                'name' => '焉耆',
                'type' => 3,
            ),
            27 => 
            array (
                'id' => 3028,
                'parent_id' => 354,
                'name' => '和静县',
                'type' => 3,
            ),
            28 => 
            array (
                'id' => 3029,
                'parent_id' => 354,
                'name' => '和硕县',
                'type' => 3,
            ),
            29 => 
            array (
                'id' => 3030,
                'parent_id' => 354,
                'name' => '博湖县',
                'type' => 3,
            ),
            30 => 
            array (
                'id' => 3031,
                'parent_id' => 355,
                'name' => '博乐市',
                'type' => 3,
            ),
            31 => 
            array (
                'id' => 3032,
                'parent_id' => 355,
                'name' => '精河县',
                'type' => 3,
            ),
            32 => 
            array (
                'id' => 3033,
                'parent_id' => 355,
                'name' => '温泉县',
                'type' => 3,
            ),
            33 => 
            array (
                'id' => 3034,
                'parent_id' => 356,
                'name' => '呼图壁县',
                'type' => 3,
            ),
            34 => 
            array (
                'id' => 3035,
                'parent_id' => 356,
                'name' => '米泉市',
                'type' => 3,
            ),
            35 => 
            array (
                'id' => 3036,
                'parent_id' => 356,
                'name' => '昌吉市',
                'type' => 3,
            ),
            36 => 
            array (
                'id' => 3037,
                'parent_id' => 356,
                'name' => '阜康市',
                'type' => 3,
            ),
            37 => 
            array (
                'id' => 3038,
                'parent_id' => 356,
                'name' => '玛纳斯县',
                'type' => 3,
            ),
            38 => 
            array (
                'id' => 3039,
                'parent_id' => 356,
                'name' => '奇台县',
                'type' => 3,
            ),
            39 => 
            array (
                'id' => 3040,
                'parent_id' => 356,
                'name' => '吉木萨尔县',
                'type' => 3,
            ),
            40 => 
            array (
                'id' => 3041,
                'parent_id' => 356,
                'name' => '木垒',
                'type' => 3,
            ),
            41 => 
            array (
                'id' => 3042,
                'parent_id' => 357,
                'name' => '哈密市',
                'type' => 3,
            ),
            42 => 
            array (
                'id' => 3043,
                'parent_id' => 357,
                'name' => '伊吾县',
                'type' => 3,
            ),
            43 => 
            array (
                'id' => 3044,
                'parent_id' => 357,
                'name' => '巴里坤',
                'type' => 3,
            ),
            44 => 
            array (
                'id' => 3045,
                'parent_id' => 358,
                'name' => '和田市',
                'type' => 3,
            ),
            45 => 
            array (
                'id' => 3046,
                'parent_id' => 358,
                'name' => '和田县',
                'type' => 3,
            ),
            46 => 
            array (
                'id' => 3047,
                'parent_id' => 358,
                'name' => '墨玉县',
                'type' => 3,
            ),
            47 => 
            array (
                'id' => 3048,
                'parent_id' => 358,
                'name' => '皮山县',
                'type' => 3,
            ),
            48 => 
            array (
                'id' => 3049,
                'parent_id' => 358,
                'name' => '洛浦县',
                'type' => 3,
            ),
            49 => 
            array (
                'id' => 3050,
                'parent_id' => 358,
                'name' => '策勒县',
                'type' => 3,
            ),
            50 => 
            array (
                'id' => 3051,
                'parent_id' => 358,
                'name' => '于田县',
                'type' => 3,
            ),
            51 => 
            array (
                'id' => 3052,
                'parent_id' => 358,
                'name' => '民丰县',
                'type' => 3,
            ),
            52 => 
            array (
                'id' => 3053,
                'parent_id' => 359,
                'name' => '喀什市',
                'type' => 3,
            ),
            53 => 
            array (
                'id' => 3054,
                'parent_id' => 359,
                'name' => '疏附县',
                'type' => 3,
            ),
            54 => 
            array (
                'id' => 3055,
                'parent_id' => 359,
                'name' => '疏勒县',
                'type' => 3,
            ),
            55 => 
            array (
                'id' => 3056,
                'parent_id' => 359,
                'name' => '英吉沙县',
                'type' => 3,
            ),
            56 => 
            array (
                'id' => 3057,
                'parent_id' => 359,
                'name' => '泽普县',
                'type' => 3,
            ),
            57 => 
            array (
                'id' => 3058,
                'parent_id' => 359,
                'name' => '莎车县',
                'type' => 3,
            ),
            58 => 
            array (
                'id' => 3059,
                'parent_id' => 359,
                'name' => '叶城县',
                'type' => 3,
            ),
            59 => 
            array (
                'id' => 3060,
                'parent_id' => 359,
                'name' => '麦盖提县',
                'type' => 3,
            ),
            60 => 
            array (
                'id' => 3061,
                'parent_id' => 359,
                'name' => '岳普湖县',
                'type' => 3,
            ),
            61 => 
            array (
                'id' => 3062,
                'parent_id' => 359,
                'name' => '伽师县',
                'type' => 3,
            ),
            62 => 
            array (
                'id' => 3063,
                'parent_id' => 359,
                'name' => '巴楚县',
                'type' => 3,
            ),
            63 => 
            array (
                'id' => 3064,
                'parent_id' => 359,
                'name' => '塔什库尔干',
                'type' => 3,
            ),
            64 => 
            array (
                'id' => 3065,
                'parent_id' => 360,
                'name' => '克拉玛依市',
                'type' => 3,
            ),
            65 => 
            array (
                'id' => 3066,
                'parent_id' => 361,
                'name' => '阿图什市',
                'type' => 3,
            ),
            66 => 
            array (
                'id' => 3067,
                'parent_id' => 361,
                'name' => '阿克陶县',
                'type' => 3,
            ),
            67 => 
            array (
                'id' => 3068,
                'parent_id' => 361,
                'name' => '阿合奇县',
                'type' => 3,
            ),
            68 => 
            array (
                'id' => 3069,
                'parent_id' => 361,
                'name' => '乌恰县',
                'type' => 3,
            ),
            69 => 
            array (
                'id' => 3070,
                'parent_id' => 362,
                'name' => '石河子市',
                'type' => 3,
            ),
            70 => 
            array (
                'id' => 3071,
                'parent_id' => 363,
                'name' => '图木舒克市',
                'type' => 3,
            ),
            71 => 
            array (
                'id' => 3072,
                'parent_id' => 364,
                'name' => '吐鲁番市',
                'type' => 3,
            ),
            72 => 
            array (
                'id' => 3073,
                'parent_id' => 364,
                'name' => '鄯善县',
                'type' => 3,
            ),
            73 => 
            array (
                'id' => 3074,
                'parent_id' => 364,
                'name' => '托克逊县',
                'type' => 3,
            ),
            74 => 
            array (
                'id' => 3075,
                'parent_id' => 365,
                'name' => '五家渠市',
                'type' => 3,
            ),
            75 => 
            array (
                'id' => 3076,
                'parent_id' => 366,
                'name' => '阿勒泰市',
                'type' => 3,
            ),
            76 => 
            array (
                'id' => 3077,
                'parent_id' => 366,
                'name' => '布克赛尔',
                'type' => 3,
            ),
            77 => 
            array (
                'id' => 3078,
                'parent_id' => 366,
                'name' => '伊宁市',
                'type' => 3,
            ),
            78 => 
            array (
                'id' => 3079,
                'parent_id' => 366,
                'name' => '布尔津县',
                'type' => 3,
            ),
            79 => 
            array (
                'id' => 3080,
                'parent_id' => 366,
                'name' => '奎屯市',
                'type' => 3,
            ),
            80 => 
            array (
                'id' => 3081,
                'parent_id' => 366,
                'name' => '乌苏市',
                'type' => 3,
            ),
            81 => 
            array (
                'id' => 3082,
                'parent_id' => 366,
                'name' => '额敏县',
                'type' => 3,
            ),
            82 => 
            array (
                'id' => 3083,
                'parent_id' => 366,
                'name' => '富蕴县',
                'type' => 3,
            ),
            83 => 
            array (
                'id' => 3084,
                'parent_id' => 366,
                'name' => '伊宁县',
                'type' => 3,
            ),
            84 => 
            array (
                'id' => 3085,
                'parent_id' => 366,
                'name' => '福海县',
                'type' => 3,
            ),
            85 => 
            array (
                'id' => 3086,
                'parent_id' => 366,
                'name' => '霍城县',
                'type' => 3,
            ),
            86 => 
            array (
                'id' => 3087,
                'parent_id' => 366,
                'name' => '沙湾县',
                'type' => 3,
            ),
            87 => 
            array (
                'id' => 3088,
                'parent_id' => 366,
                'name' => '巩留县',
                'type' => 3,
            ),
            88 => 
            array (
                'id' => 3089,
                'parent_id' => 366,
                'name' => '哈巴河县',
                'type' => 3,
            ),
            89 => 
            array (
                'id' => 3090,
                'parent_id' => 366,
                'name' => '托里县',
                'type' => 3,
            ),
            90 => 
            array (
                'id' => 3091,
                'parent_id' => 366,
                'name' => '青河县',
                'type' => 3,
            ),
            91 => 
            array (
                'id' => 3092,
                'parent_id' => 366,
                'name' => '新源县',
                'type' => 3,
            ),
            92 => 
            array (
                'id' => 3093,
                'parent_id' => 366,
                'name' => '裕民县',
                'type' => 3,
            ),
            93 => 
            array (
                'id' => 3094,
                'parent_id' => 366,
                'name' => '和布克赛尔',
                'type' => 3,
            ),
            94 => 
            array (
                'id' => 3095,
                'parent_id' => 366,
                'name' => '吉木乃县',
                'type' => 3,
            ),
            95 => 
            array (
                'id' => 3096,
                'parent_id' => 366,
                'name' => '昭苏县',
                'type' => 3,
            ),
            96 => 
            array (
                'id' => 3097,
                'parent_id' => 366,
                'name' => '特克斯县',
                'type' => 3,
            ),
            97 => 
            array (
                'id' => 3098,
                'parent_id' => 366,
                'name' => '尼勒克县',
                'type' => 3,
            ),
            98 => 
            array (
                'id' => 3099,
                'parent_id' => 366,
                'name' => '察布查尔',
                'type' => 3,
            ),
            99 => 
            array (
                'id' => 3100,
                'parent_id' => 367,
                'name' => '盘龙区',
                'type' => 3,
            ),
            100 => 
            array (
                'id' => 3101,
                'parent_id' => 367,
                'name' => '五华区',
                'type' => 3,
            ),
            101 => 
            array (
                'id' => 3102,
                'parent_id' => 367,
                'name' => '官渡区',
                'type' => 3,
            ),
            102 => 
            array (
                'id' => 3103,
                'parent_id' => 367,
                'name' => '西山区',
                'type' => 3,
            ),
            103 => 
            array (
                'id' => 3104,
                'parent_id' => 367,
                'name' => '东川区',
                'type' => 3,
            ),
            104 => 
            array (
                'id' => 3105,
                'parent_id' => 367,
                'name' => '安宁市',
                'type' => 3,
            ),
            105 => 
            array (
                'id' => 3106,
                'parent_id' => 367,
                'name' => '呈贡县',
                'type' => 3,
            ),
            106 => 
            array (
                'id' => 3107,
                'parent_id' => 367,
                'name' => '晋宁县',
                'type' => 3,
            ),
            107 => 
            array (
                'id' => 3108,
                'parent_id' => 367,
                'name' => '富民县',
                'type' => 3,
            ),
            108 => 
            array (
                'id' => 3109,
                'parent_id' => 367,
                'name' => '宜良县',
                'type' => 3,
            ),
            109 => 
            array (
                'id' => 3110,
                'parent_id' => 367,
                'name' => '嵩明县',
                'type' => 3,
            ),
            110 => 
            array (
                'id' => 3111,
                'parent_id' => 367,
                'name' => '石林县',
                'type' => 3,
            ),
            111 => 
            array (
                'id' => 3112,
                'parent_id' => 367,
                'name' => '禄劝',
                'type' => 3,
            ),
            112 => 
            array (
                'id' => 3113,
                'parent_id' => 367,
                'name' => '寻甸',
                'type' => 3,
            ),
            113 => 
            array (
                'id' => 3114,
                'parent_id' => 368,
                'name' => '兰坪',
                'type' => 3,
            ),
            114 => 
            array (
                'id' => 3115,
                'parent_id' => 368,
                'name' => '泸水县',
                'type' => 3,
            ),
            115 => 
            array (
                'id' => 3116,
                'parent_id' => 368,
                'name' => '福贡县',
                'type' => 3,
            ),
            116 => 
            array (
                'id' => 3117,
                'parent_id' => 368,
                'name' => '贡山',
                'type' => 3,
            ),
            117 => 
            array (
                'id' => 3118,
                'parent_id' => 369,
                'name' => '宁洱',
                'type' => 3,
            ),
            118 => 
            array (
                'id' => 3119,
                'parent_id' => 369,
                'name' => '思茅区',
                'type' => 3,
            ),
            119 => 
            array (
                'id' => 3120,
                'parent_id' => 369,
                'name' => '墨江',
                'type' => 3,
            ),
            120 => 
            array (
                'id' => 3121,
                'parent_id' => 369,
                'name' => '景东',
                'type' => 3,
            ),
            121 => 
            array (
                'id' => 3122,
                'parent_id' => 369,
                'name' => '景谷',
                'type' => 3,
            ),
            122 => 
            array (
                'id' => 3123,
                'parent_id' => 369,
                'name' => '镇沅',
                'type' => 3,
            ),
            123 => 
            array (
                'id' => 3124,
                'parent_id' => 369,
                'name' => '江城',
                'type' => 3,
            ),
            124 => 
            array (
                'id' => 3125,
                'parent_id' => 369,
                'name' => '孟连',
                'type' => 3,
            ),
            125 => 
            array (
                'id' => 3126,
                'parent_id' => 369,
                'name' => '澜沧',
                'type' => 3,
            ),
            126 => 
            array (
                'id' => 3127,
                'parent_id' => 369,
                'name' => '西盟',
                'type' => 3,
            ),
            127 => 
            array (
                'id' => 3128,
                'parent_id' => 370,
                'name' => '古城区',
                'type' => 3,
            ),
            128 => 
            array (
                'id' => 3129,
                'parent_id' => 370,
                'name' => '宁蒗',
                'type' => 3,
            ),
            129 => 
            array (
                'id' => 3130,
                'parent_id' => 370,
                'name' => '玉龙',
                'type' => 3,
            ),
            130 => 
            array (
                'id' => 3131,
                'parent_id' => 370,
                'name' => '永胜县',
                'type' => 3,
            ),
            131 => 
            array (
                'id' => 3132,
                'parent_id' => 370,
                'name' => '华坪县',
                'type' => 3,
            ),
            132 => 
            array (
                'id' => 3133,
                'parent_id' => 371,
                'name' => '隆阳区',
                'type' => 3,
            ),
            133 => 
            array (
                'id' => 3134,
                'parent_id' => 371,
                'name' => '施甸县',
                'type' => 3,
            ),
            134 => 
            array (
                'id' => 3135,
                'parent_id' => 371,
                'name' => '腾冲县',
                'type' => 3,
            ),
            135 => 
            array (
                'id' => 3136,
                'parent_id' => 371,
                'name' => '龙陵县',
                'type' => 3,
            ),
            136 => 
            array (
                'id' => 3137,
                'parent_id' => 371,
                'name' => '昌宁县',
                'type' => 3,
            ),
            137 => 
            array (
                'id' => 3138,
                'parent_id' => 372,
                'name' => '楚雄市',
                'type' => 3,
            ),
            138 => 
            array (
                'id' => 3139,
                'parent_id' => 372,
                'name' => '双柏县',
                'type' => 3,
            ),
            139 => 
            array (
                'id' => 3140,
                'parent_id' => 372,
                'name' => '牟定县',
                'type' => 3,
            ),
            140 => 
            array (
                'id' => 3141,
                'parent_id' => 372,
                'name' => '南华县',
                'type' => 3,
            ),
            141 => 
            array (
                'id' => 3142,
                'parent_id' => 372,
                'name' => '姚安县',
                'type' => 3,
            ),
            142 => 
            array (
                'id' => 3143,
                'parent_id' => 372,
                'name' => '大姚县',
                'type' => 3,
            ),
            143 => 
            array (
                'id' => 3144,
                'parent_id' => 372,
                'name' => '永仁县',
                'type' => 3,
            ),
            144 => 
            array (
                'id' => 3145,
                'parent_id' => 372,
                'name' => '元谋县',
                'type' => 3,
            ),
            145 => 
            array (
                'id' => 3146,
                'parent_id' => 372,
                'name' => '武定县',
                'type' => 3,
            ),
            146 => 
            array (
                'id' => 3147,
                'parent_id' => 372,
                'name' => '禄丰县',
                'type' => 3,
            ),
            147 => 
            array (
                'id' => 3148,
                'parent_id' => 373,
                'name' => '大理市',
                'type' => 3,
            ),
            148 => 
            array (
                'id' => 3149,
                'parent_id' => 373,
                'name' => '祥云县',
                'type' => 3,
            ),
            149 => 
            array (
                'id' => 3150,
                'parent_id' => 373,
                'name' => '宾川县',
                'type' => 3,
            ),
            150 => 
            array (
                'id' => 3151,
                'parent_id' => 373,
                'name' => '弥渡县',
                'type' => 3,
            ),
            151 => 
            array (
                'id' => 3152,
                'parent_id' => 373,
                'name' => '永平县',
                'type' => 3,
            ),
            152 => 
            array (
                'id' => 3153,
                'parent_id' => 373,
                'name' => '云龙县',
                'type' => 3,
            ),
            153 => 
            array (
                'id' => 3154,
                'parent_id' => 373,
                'name' => '洱源县',
                'type' => 3,
            ),
            154 => 
            array (
                'id' => 3155,
                'parent_id' => 373,
                'name' => '剑川县',
                'type' => 3,
            ),
            155 => 
            array (
                'id' => 3156,
                'parent_id' => 373,
                'name' => '鹤庆县',
                'type' => 3,
            ),
            156 => 
            array (
                'id' => 3157,
                'parent_id' => 373,
                'name' => '漾濞',
                'type' => 3,
            ),
            157 => 
            array (
                'id' => 3158,
                'parent_id' => 373,
                'name' => '南涧',
                'type' => 3,
            ),
            158 => 
            array (
                'id' => 3159,
                'parent_id' => 373,
                'name' => '巍山',
                'type' => 3,
            ),
            159 => 
            array (
                'id' => 3160,
                'parent_id' => 374,
                'name' => '潞西市',
                'type' => 3,
            ),
            160 => 
            array (
                'id' => 3161,
                'parent_id' => 374,
                'name' => '瑞丽市',
                'type' => 3,
            ),
            161 => 
            array (
                'id' => 3162,
                'parent_id' => 374,
                'name' => '梁河县',
                'type' => 3,
            ),
            162 => 
            array (
                'id' => 3163,
                'parent_id' => 374,
                'name' => '盈江县',
                'type' => 3,
            ),
            163 => 
            array (
                'id' => 3164,
                'parent_id' => 374,
                'name' => '陇川县',
                'type' => 3,
            ),
            164 => 
            array (
                'id' => 3165,
                'parent_id' => 375,
                'name' => '香格里拉县',
                'type' => 3,
            ),
            165 => 
            array (
                'id' => 3166,
                'parent_id' => 375,
                'name' => '德钦县',
                'type' => 3,
            ),
            166 => 
            array (
                'id' => 3167,
                'parent_id' => 375,
                'name' => '维西',
                'type' => 3,
            ),
            167 => 
            array (
                'id' => 3168,
                'parent_id' => 376,
                'name' => '泸西县',
                'type' => 3,
            ),
            168 => 
            array (
                'id' => 3169,
                'parent_id' => 376,
                'name' => '蒙自县',
                'type' => 3,
            ),
            169 => 
            array (
                'id' => 3170,
                'parent_id' => 376,
                'name' => '个旧市',
                'type' => 3,
            ),
            170 => 
            array (
                'id' => 3171,
                'parent_id' => 376,
                'name' => '开远市',
                'type' => 3,
            ),
            171 => 
            array (
                'id' => 3172,
                'parent_id' => 376,
                'name' => '绿春县',
                'type' => 3,
            ),
            172 => 
            array (
                'id' => 3173,
                'parent_id' => 376,
                'name' => '建水县',
                'type' => 3,
            ),
            173 => 
            array (
                'id' => 3174,
                'parent_id' => 376,
                'name' => '石屏县',
                'type' => 3,
            ),
            174 => 
            array (
                'id' => 3175,
                'parent_id' => 376,
                'name' => '弥勒县',
                'type' => 3,
            ),
            175 => 
            array (
                'id' => 3176,
                'parent_id' => 376,
                'name' => '元阳县',
                'type' => 3,
            ),
            176 => 
            array (
                'id' => 3177,
                'parent_id' => 376,
                'name' => '红河县',
                'type' => 3,
            ),
            177 => 
            array (
                'id' => 3178,
                'parent_id' => 376,
                'name' => '金平',
                'type' => 3,
            ),
            178 => 
            array (
                'id' => 3179,
                'parent_id' => 376,
                'name' => '河口',
                'type' => 3,
            ),
            179 => 
            array (
                'id' => 3180,
                'parent_id' => 376,
                'name' => '屏边',
                'type' => 3,
            ),
            180 => 
            array (
                'id' => 3181,
                'parent_id' => 377,
                'name' => '临翔区',
                'type' => 3,
            ),
            181 => 
            array (
                'id' => 3182,
                'parent_id' => 377,
                'name' => '凤庆县',
                'type' => 3,
            ),
            182 => 
            array (
                'id' => 3183,
                'parent_id' => 377,
                'name' => '云县',
                'type' => 3,
            ),
            183 => 
            array (
                'id' => 3184,
                'parent_id' => 377,
                'name' => '永德县',
                'type' => 3,
            ),
            184 => 
            array (
                'id' => 3185,
                'parent_id' => 377,
                'name' => '镇康县',
                'type' => 3,
            ),
            185 => 
            array (
                'id' => 3186,
                'parent_id' => 377,
                'name' => '双江',
                'type' => 3,
            ),
            186 => 
            array (
                'id' => 3187,
                'parent_id' => 377,
                'name' => '耿马',
                'type' => 3,
            ),
            187 => 
            array (
                'id' => 3188,
                'parent_id' => 377,
                'name' => '沧源',
                'type' => 3,
            ),
            188 => 
            array (
                'id' => 3189,
                'parent_id' => 378,
                'name' => '麒麟区',
                'type' => 3,
            ),
            189 => 
            array (
                'id' => 3190,
                'parent_id' => 378,
                'name' => '宣威市',
                'type' => 3,
            ),
            190 => 
            array (
                'id' => 3191,
                'parent_id' => 378,
                'name' => '马龙县',
                'type' => 3,
            ),
            191 => 
            array (
                'id' => 3192,
                'parent_id' => 378,
                'name' => '陆良县',
                'type' => 3,
            ),
            192 => 
            array (
                'id' => 3193,
                'parent_id' => 378,
                'name' => '师宗县',
                'type' => 3,
            ),
            193 => 
            array (
                'id' => 3194,
                'parent_id' => 378,
                'name' => '罗平县',
                'type' => 3,
            ),
            194 => 
            array (
                'id' => 3195,
                'parent_id' => 378,
                'name' => '富源县',
                'type' => 3,
            ),
            195 => 
            array (
                'id' => 3196,
                'parent_id' => 378,
                'name' => '会泽县',
                'type' => 3,
            ),
            196 => 
            array (
                'id' => 3197,
                'parent_id' => 378,
                'name' => '沾益县',
                'type' => 3,
            ),
            197 => 
            array (
                'id' => 3198,
                'parent_id' => 379,
                'name' => '文山县',
                'type' => 3,
            ),
            198 => 
            array (
                'id' => 3199,
                'parent_id' => 379,
                'name' => '砚山县',
                'type' => 3,
            ),
            199 => 
            array (
                'id' => 3200,
                'parent_id' => 379,
                'name' => '西畴县',
                'type' => 3,
            ),
            200 => 
            array (
                'id' => 3201,
                'parent_id' => 379,
                'name' => '麻栗坡县',
                'type' => 3,
            ),
            201 => 
            array (
                'id' => 3202,
                'parent_id' => 379,
                'name' => '马关县',
                'type' => 3,
            ),
            202 => 
            array (
                'id' => 3203,
                'parent_id' => 379,
                'name' => '丘北县',
                'type' => 3,
            ),
            203 => 
            array (
                'id' => 3204,
                'parent_id' => 379,
                'name' => '广南县',
                'type' => 3,
            ),
            204 => 
            array (
                'id' => 3205,
                'parent_id' => 379,
                'name' => '富宁县',
                'type' => 3,
            ),
            205 => 
            array (
                'id' => 3206,
                'parent_id' => 380,
                'name' => '景洪市',
                'type' => 3,
            ),
            206 => 
            array (
                'id' => 3207,
                'parent_id' => 380,
                'name' => '勐海县',
                'type' => 3,
            ),
            207 => 
            array (
                'id' => 3208,
                'parent_id' => 380,
                'name' => '勐腊县',
                'type' => 3,
            ),
            208 => 
            array (
                'id' => 3209,
                'parent_id' => 381,
                'name' => '红塔区',
                'type' => 3,
            ),
            209 => 
            array (
                'id' => 3210,
                'parent_id' => 381,
                'name' => '江川县',
                'type' => 3,
            ),
            210 => 
            array (
                'id' => 3211,
                'parent_id' => 381,
                'name' => '澄江县',
                'type' => 3,
            ),
            211 => 
            array (
                'id' => 3212,
                'parent_id' => 381,
                'name' => '通海县',
                'type' => 3,
            ),
            212 => 
            array (
                'id' => 3213,
                'parent_id' => 381,
                'name' => '华宁县',
                'type' => 3,
            ),
            213 => 
            array (
                'id' => 3214,
                'parent_id' => 381,
                'name' => '易门县',
                'type' => 3,
            ),
            214 => 
            array (
                'id' => 3215,
                'parent_id' => 381,
                'name' => '峨山',
                'type' => 3,
            ),
            215 => 
            array (
                'id' => 3216,
                'parent_id' => 381,
                'name' => '新平',
                'type' => 3,
            ),
            216 => 
            array (
                'id' => 3217,
                'parent_id' => 381,
                'name' => '元江',
                'type' => 3,
            ),
            217 => 
            array (
                'id' => 3218,
                'parent_id' => 382,
                'name' => '昭阳区',
                'type' => 3,
            ),
            218 => 
            array (
                'id' => 3219,
                'parent_id' => 382,
                'name' => '鲁甸县',
                'type' => 3,
            ),
            219 => 
            array (
                'id' => 3220,
                'parent_id' => 382,
                'name' => '巧家县',
                'type' => 3,
            ),
            220 => 
            array (
                'id' => 3221,
                'parent_id' => 382,
                'name' => '盐津县',
                'type' => 3,
            ),
            221 => 
            array (
                'id' => 3222,
                'parent_id' => 382,
                'name' => '大关县',
                'type' => 3,
            ),
            222 => 
            array (
                'id' => 3223,
                'parent_id' => 382,
                'name' => '永善县',
                'type' => 3,
            ),
            223 => 
            array (
                'id' => 3224,
                'parent_id' => 382,
                'name' => '绥江县',
                'type' => 3,
            ),
            224 => 
            array (
                'id' => 3225,
                'parent_id' => 382,
                'name' => '镇雄县',
                'type' => 3,
            ),
            225 => 
            array (
                'id' => 3226,
                'parent_id' => 382,
                'name' => '彝良县',
                'type' => 3,
            ),
            226 => 
            array (
                'id' => 3227,
                'parent_id' => 382,
                'name' => '威信县',
                'type' => 3,
            ),
            227 => 
            array (
                'id' => 3228,
                'parent_id' => 382,
                'name' => '水富县',
                'type' => 3,
            ),
            228 => 
            array (
                'id' => 3229,
                'parent_id' => 383,
                'name' => '西湖区',
                'type' => 3,
            ),
            229 => 
            array (
                'id' => 3230,
                'parent_id' => 383,
                'name' => '上城区',
                'type' => 3,
            ),
            230 => 
            array (
                'id' => 3231,
                'parent_id' => 383,
                'name' => '下城区',
                'type' => 3,
            ),
            231 => 
            array (
                'id' => 3232,
                'parent_id' => 383,
                'name' => '拱墅区',
                'type' => 3,
            ),
            232 => 
            array (
                'id' => 3233,
                'parent_id' => 383,
                'name' => '滨江区',
                'type' => 3,
            ),
            233 => 
            array (
                'id' => 3234,
                'parent_id' => 383,
                'name' => '江干区',
                'type' => 3,
            ),
            234 => 
            array (
                'id' => 3235,
                'parent_id' => 383,
                'name' => '萧山区',
                'type' => 3,
            ),
            235 => 
            array (
                'id' => 3236,
                'parent_id' => 383,
                'name' => '余杭区',
                'type' => 3,
            ),
            236 => 
            array (
                'id' => 3237,
                'parent_id' => 383,
                'name' => '市郊',
                'type' => 3,
            ),
            237 => 
            array (
                'id' => 3238,
                'parent_id' => 383,
                'name' => '建德市',
                'type' => 3,
            ),
            238 => 
            array (
                'id' => 3239,
                'parent_id' => 383,
                'name' => '富阳市',
                'type' => 3,
            ),
            239 => 
            array (
                'id' => 3240,
                'parent_id' => 383,
                'name' => '临安市',
                'type' => 3,
            ),
            240 => 
            array (
                'id' => 3241,
                'parent_id' => 383,
                'name' => '桐庐县',
                'type' => 3,
            ),
            241 => 
            array (
                'id' => 3242,
                'parent_id' => 383,
                'name' => '淳安县',
                'type' => 3,
            ),
            242 => 
            array (
                'id' => 3243,
                'parent_id' => 384,
                'name' => '吴兴区',
                'type' => 3,
            ),
            243 => 
            array (
                'id' => 3244,
                'parent_id' => 384,
                'name' => '南浔区',
                'type' => 3,
            ),
            244 => 
            array (
                'id' => 3245,
                'parent_id' => 384,
                'name' => '德清县',
                'type' => 3,
            ),
            245 => 
            array (
                'id' => 3246,
                'parent_id' => 384,
                'name' => '长兴县',
                'type' => 3,
            ),
            246 => 
            array (
                'id' => 3247,
                'parent_id' => 384,
                'name' => '安吉县',
                'type' => 3,
            ),
            247 => 
            array (
                'id' => 3248,
                'parent_id' => 385,
                'name' => '南湖区',
                'type' => 3,
            ),
            248 => 
            array (
                'id' => 3249,
                'parent_id' => 385,
                'name' => '秀洲区',
                'type' => 3,
            ),
            249 => 
            array (
                'id' => 3250,
                'parent_id' => 385,
                'name' => '海宁市',
                'type' => 3,
            ),
            250 => 
            array (
                'id' => 3251,
                'parent_id' => 385,
                'name' => '嘉善县',
                'type' => 3,
            ),
            251 => 
            array (
                'id' => 3252,
                'parent_id' => 385,
                'name' => '平湖市',
                'type' => 3,
            ),
            252 => 
            array (
                'id' => 3253,
                'parent_id' => 385,
                'name' => '桐乡市',
                'type' => 3,
            ),
            253 => 
            array (
                'id' => 3254,
                'parent_id' => 385,
                'name' => '海盐县',
                'type' => 3,
            ),
            254 => 
            array (
                'id' => 3255,
                'parent_id' => 386,
                'name' => '婺城区',
                'type' => 3,
            ),
            255 => 
            array (
                'id' => 3256,
                'parent_id' => 386,
                'name' => '金东区',
                'type' => 3,
            ),
            256 => 
            array (
                'id' => 3257,
                'parent_id' => 386,
                'name' => '兰溪市',
                'type' => 3,
            ),
            257 => 
            array (
                'id' => 3258,
                'parent_id' => 386,
                'name' => '市区',
                'type' => 3,
            ),
            258 => 
            array (
                'id' => 3259,
                'parent_id' => 386,
                'name' => '佛堂镇',
                'type' => 3,
            ),
            259 => 
            array (
                'id' => 3260,
                'parent_id' => 386,
                'name' => '上溪镇',
                'type' => 3,
            ),
            260 => 
            array (
                'id' => 3261,
                'parent_id' => 386,
                'name' => '义亭镇',
                'type' => 3,
            ),
            261 => 
            array (
                'id' => 3262,
                'parent_id' => 386,
                'name' => '大陈镇',
                'type' => 3,
            ),
            262 => 
            array (
                'id' => 3263,
                'parent_id' => 386,
                'name' => '苏溪镇',
                'type' => 3,
            ),
            263 => 
            array (
                'id' => 3264,
                'parent_id' => 386,
                'name' => '赤岸镇',
                'type' => 3,
            ),
            264 => 
            array (
                'id' => 3265,
                'parent_id' => 386,
                'name' => '东阳市',
                'type' => 3,
            ),
            265 => 
            array (
                'id' => 3266,
                'parent_id' => 386,
                'name' => '永康市',
                'type' => 3,
            ),
            266 => 
            array (
                'id' => 3267,
                'parent_id' => 386,
                'name' => '武义县',
                'type' => 3,
            ),
            267 => 
            array (
                'id' => 3268,
                'parent_id' => 386,
                'name' => '浦江县',
                'type' => 3,
            ),
            268 => 
            array (
                'id' => 3269,
                'parent_id' => 386,
                'name' => '磐安县',
                'type' => 3,
            ),
            269 => 
            array (
                'id' => 3270,
                'parent_id' => 387,
                'name' => '莲都区',
                'type' => 3,
            ),
            270 => 
            array (
                'id' => 3271,
                'parent_id' => 387,
                'name' => '龙泉市',
                'type' => 3,
            ),
            271 => 
            array (
                'id' => 3272,
                'parent_id' => 387,
                'name' => '青田县',
                'type' => 3,
            ),
            272 => 
            array (
                'id' => 3273,
                'parent_id' => 387,
                'name' => '缙云县',
                'type' => 3,
            ),
            273 => 
            array (
                'id' => 3274,
                'parent_id' => 387,
                'name' => '遂昌县',
                'type' => 3,
            ),
            274 => 
            array (
                'id' => 3275,
                'parent_id' => 387,
                'name' => '松阳县',
                'type' => 3,
            ),
            275 => 
            array (
                'id' => 3276,
                'parent_id' => 387,
                'name' => '云和县',
                'type' => 3,
            ),
            276 => 
            array (
                'id' => 3277,
                'parent_id' => 387,
                'name' => '庆元县',
                'type' => 3,
            ),
            277 => 
            array (
                'id' => 3278,
                'parent_id' => 387,
                'name' => '景宁',
                'type' => 3,
            ),
            278 => 
            array (
                'id' => 3279,
                'parent_id' => 388,
                'name' => '海曙区',
                'type' => 3,
            ),
            279 => 
            array (
                'id' => 3280,
                'parent_id' => 388,
                'name' => '江东区',
                'type' => 3,
            ),
            280 => 
            array (
                'id' => 3281,
                'parent_id' => 388,
                'name' => '江北区',
                'type' => 3,
            ),
            281 => 
            array (
                'id' => 3282,
                'parent_id' => 388,
                'name' => '镇海区',
                'type' => 3,
            ),
            282 => 
            array (
                'id' => 3283,
                'parent_id' => 388,
                'name' => '北仑区',
                'type' => 3,
            ),
            283 => 
            array (
                'id' => 3284,
                'parent_id' => 388,
                'name' => '鄞州区',
                'type' => 3,
            ),
            284 => 
            array (
                'id' => 3285,
                'parent_id' => 388,
                'name' => '余姚市',
                'type' => 3,
            ),
            285 => 
            array (
                'id' => 3286,
                'parent_id' => 388,
                'name' => '慈溪市',
                'type' => 3,
            ),
            286 => 
            array (
                'id' => 3287,
                'parent_id' => 388,
                'name' => '奉化市',
                'type' => 3,
            ),
            287 => 
            array (
                'id' => 3288,
                'parent_id' => 388,
                'name' => '象山县',
                'type' => 3,
            ),
            288 => 
            array (
                'id' => 3289,
                'parent_id' => 388,
                'name' => '宁海县',
                'type' => 3,
            ),
            289 => 
            array (
                'id' => 3290,
                'parent_id' => 389,
                'name' => '越城区',
                'type' => 3,
            ),
            290 => 
            array (
                'id' => 3291,
                'parent_id' => 389,
                'name' => '上虞市',
                'type' => 3,
            ),
            291 => 
            array (
                'id' => 3292,
                'parent_id' => 389,
                'name' => '嵊州市',
                'type' => 3,
            ),
            292 => 
            array (
                'id' => 3293,
                'parent_id' => 389,
                'name' => '绍兴县',
                'type' => 3,
            ),
            293 => 
            array (
                'id' => 3294,
                'parent_id' => 389,
                'name' => '新昌县',
                'type' => 3,
            ),
            294 => 
            array (
                'id' => 3295,
                'parent_id' => 389,
                'name' => '诸暨市',
                'type' => 3,
            ),
            295 => 
            array (
                'id' => 3296,
                'parent_id' => 390,
                'name' => '椒江区',
                'type' => 3,
            ),
            296 => 
            array (
                'id' => 3297,
                'parent_id' => 390,
                'name' => '黄岩区',
                'type' => 3,
            ),
            297 => 
            array (
                'id' => 3298,
                'parent_id' => 390,
                'name' => '路桥区',
                'type' => 3,
            ),
            298 => 
            array (
                'id' => 3299,
                'parent_id' => 390,
                'name' => '温岭市',
                'type' => 3,
            ),
            299 => 
            array (
                'id' => 3300,
                'parent_id' => 390,
                'name' => '临海市',
                'type' => 3,
            ),
            300 => 
            array (
                'id' => 3301,
                'parent_id' => 390,
                'name' => '玉环县',
                'type' => 3,
            ),
            301 => 
            array (
                'id' => 3302,
                'parent_id' => 390,
                'name' => '三门县',
                'type' => 3,
            ),
            302 => 
            array (
                'id' => 3303,
                'parent_id' => 390,
                'name' => '天台县',
                'type' => 3,
            ),
            303 => 
            array (
                'id' => 3304,
                'parent_id' => 390,
                'name' => '仙居县',
                'type' => 3,
            ),
            304 => 
            array (
                'id' => 3305,
                'parent_id' => 391,
                'name' => '鹿城区',
                'type' => 3,
            ),
            305 => 
            array (
                'id' => 3306,
                'parent_id' => 391,
                'name' => '龙湾区',
                'type' => 3,
            ),
            306 => 
            array (
                'id' => 3307,
                'parent_id' => 391,
                'name' => '瓯海区',
                'type' => 3,
            ),
            307 => 
            array (
                'id' => 3308,
                'parent_id' => 391,
                'name' => '瑞安市',
                'type' => 3,
            ),
            308 => 
            array (
                'id' => 3309,
                'parent_id' => 391,
                'name' => '乐清市',
                'type' => 3,
            ),
            309 => 
            array (
                'id' => 3310,
                'parent_id' => 391,
                'name' => '洞头县',
                'type' => 3,
            ),
            310 => 
            array (
                'id' => 3311,
                'parent_id' => 391,
                'name' => '永嘉县',
                'type' => 3,
            ),
            311 => 
            array (
                'id' => 3312,
                'parent_id' => 391,
                'name' => '平阳县',
                'type' => 3,
            ),
            312 => 
            array (
                'id' => 3313,
                'parent_id' => 391,
                'name' => '苍南县',
                'type' => 3,
            ),
            313 => 
            array (
                'id' => 3314,
                'parent_id' => 391,
                'name' => '文成县',
                'type' => 3,
            ),
            314 => 
            array (
                'id' => 3315,
                'parent_id' => 391,
                'name' => '泰顺县',
                'type' => 3,
            ),
            315 => 
            array (
                'id' => 3316,
                'parent_id' => 392,
                'name' => '定海区',
                'type' => 3,
            ),
            316 => 
            array (
                'id' => 3317,
                'parent_id' => 392,
                'name' => '普陀区',
                'type' => 3,
            ),
            317 => 
            array (
                'id' => 3318,
                'parent_id' => 392,
                'name' => '岱山县',
                'type' => 3,
            ),
            318 => 
            array (
                'id' => 3319,
                'parent_id' => 392,
                'name' => '嵊泗县',
                'type' => 3,
            ),
            319 => 
            array (
                'id' => 3320,
                'parent_id' => 393,
                'name' => '衢州市',
                'type' => 3,
            ),
            320 => 
            array (
                'id' => 3321,
                'parent_id' => 393,
                'name' => '江山市',
                'type' => 3,
            ),
            321 => 
            array (
                'id' => 3322,
                'parent_id' => 393,
                'name' => '常山县',
                'type' => 3,
            ),
            322 => 
            array (
                'id' => 3323,
                'parent_id' => 393,
                'name' => '开化县',
                'type' => 3,
            ),
            323 => 
            array (
                'id' => 3324,
                'parent_id' => 393,
                'name' => '龙游县',
                'type' => 3,
            ),
            324 => 
            array (
                'id' => 3325,
                'parent_id' => 394,
                'name' => '合川区',
                'type' => 3,
            ),
            325 => 
            array (
                'id' => 3326,
                'parent_id' => 394,
                'name' => '江津区',
                'type' => 3,
            ),
            326 => 
            array (
                'id' => 3327,
                'parent_id' => 394,
                'name' => '南川区',
                'type' => 3,
            ),
            327 => 
            array (
                'id' => 3328,
                'parent_id' => 394,
                'name' => '永川区',
                'type' => 3,
            ),
            328 => 
            array (
                'id' => 3329,
                'parent_id' => 394,
                'name' => '南岸区',
                'type' => 3,
            ),
            329 => 
            array (
                'id' => 3330,
                'parent_id' => 394,
                'name' => '渝北区',
                'type' => 3,
            ),
            330 => 
            array (
                'id' => 3331,
                'parent_id' => 394,
                'name' => '万盛区',
                'type' => 3,
            ),
            331 => 
            array (
                'id' => 3332,
                'parent_id' => 394,
                'name' => '大渡口区',
                'type' => 3,
            ),
            332 => 
            array (
                'id' => 3333,
                'parent_id' => 394,
                'name' => '万州区',
                'type' => 3,
            ),
            333 => 
            array (
                'id' => 3334,
                'parent_id' => 394,
                'name' => '北碚区',
                'type' => 3,
            ),
            334 => 
            array (
                'id' => 3335,
                'parent_id' => 394,
                'name' => '沙坪坝区',
                'type' => 3,
            ),
            335 => 
            array (
                'id' => 3336,
                'parent_id' => 394,
                'name' => '巴南区',
                'type' => 3,
            ),
            336 => 
            array (
                'id' => 3337,
                'parent_id' => 394,
                'name' => '涪陵区',
                'type' => 3,
            ),
            337 => 
            array (
                'id' => 3338,
                'parent_id' => 394,
                'name' => '江北区',
                'type' => 3,
            ),
            338 => 
            array (
                'id' => 3339,
                'parent_id' => 394,
                'name' => '九龙坡区',
                'type' => 3,
            ),
            339 => 
            array (
                'id' => 3340,
                'parent_id' => 394,
                'name' => '渝中区',
                'type' => 3,
            ),
            340 => 
            array (
                'id' => 3341,
                'parent_id' => 394,
                'name' => '黔江开发区',
                'type' => 3,
            ),
            341 => 
            array (
                'id' => 3342,
                'parent_id' => 394,
                'name' => '长寿区',
                'type' => 3,
            ),
            342 => 
            array (
                'id' => 3343,
                'parent_id' => 394,
                'name' => '双桥区',
                'type' => 3,
            ),
            343 => 
            array (
                'id' => 3344,
                'parent_id' => 394,
                'name' => '綦江县',
                'type' => 3,
            ),
            344 => 
            array (
                'id' => 3345,
                'parent_id' => 394,
                'name' => '潼南县',
                'type' => 3,
            ),
            345 => 
            array (
                'id' => 3346,
                'parent_id' => 394,
                'name' => '铜梁县',
                'type' => 3,
            ),
            346 => 
            array (
                'id' => 3347,
                'parent_id' => 394,
                'name' => '大足县',
                'type' => 3,
            ),
            347 => 
            array (
                'id' => 3348,
                'parent_id' => 394,
                'name' => '荣昌县',
                'type' => 3,
            ),
            348 => 
            array (
                'id' => 3349,
                'parent_id' => 394,
                'name' => '璧山县',
                'type' => 3,
            ),
            349 => 
            array (
                'id' => 3350,
                'parent_id' => 394,
                'name' => '垫江县',
                'type' => 3,
            ),
            350 => 
            array (
                'id' => 3351,
                'parent_id' => 394,
                'name' => '武隆县',
                'type' => 3,
            ),
            351 => 
            array (
                'id' => 3352,
                'parent_id' => 394,
                'name' => '丰都县',
                'type' => 3,
            ),
            352 => 
            array (
                'id' => 3353,
                'parent_id' => 394,
                'name' => '城口县',
                'type' => 3,
            ),
            353 => 
            array (
                'id' => 3354,
                'parent_id' => 394,
                'name' => '梁平县',
                'type' => 3,
            ),
            354 => 
            array (
                'id' => 3355,
                'parent_id' => 394,
                'name' => '开县',
                'type' => 3,
            ),
            355 => 
            array (
                'id' => 3356,
                'parent_id' => 394,
                'name' => '巫溪县',
                'type' => 3,
            ),
            356 => 
            array (
                'id' => 3357,
                'parent_id' => 394,
                'name' => '巫山县',
                'type' => 3,
            ),
            357 => 
            array (
                'id' => 3358,
                'parent_id' => 394,
                'name' => '奉节县',
                'type' => 3,
            ),
            358 => 
            array (
                'id' => 3359,
                'parent_id' => 394,
                'name' => '云阳县',
                'type' => 3,
            ),
            359 => 
            array (
                'id' => 3360,
                'parent_id' => 394,
                'name' => '忠县',
                'type' => 3,
            ),
            360 => 
            array (
                'id' => 3361,
                'parent_id' => 394,
                'name' => '石柱',
                'type' => 3,
            ),
            361 => 
            array (
                'id' => 3362,
                'parent_id' => 394,
                'name' => '彭水',
                'type' => 3,
            ),
            362 => 
            array (
                'id' => 3363,
                'parent_id' => 394,
                'name' => '酉阳',
                'type' => 3,
            ),
            363 => 
            array (
                'id' => 3364,
                'parent_id' => 394,
                'name' => '秀山',
                'type' => 3,
            ),
            364 => 
            array (
                'id' => 3365,
                'parent_id' => 395,
                'name' => '沙田区',
                'type' => 3,
            ),
            365 => 
            array (
                'id' => 3366,
                'parent_id' => 395,
                'name' => '东区',
                'type' => 3,
            ),
            366 => 
            array (
                'id' => 3367,
                'parent_id' => 395,
                'name' => '观塘区',
                'type' => 3,
            ),
            367 => 
            array (
                'id' => 3368,
                'parent_id' => 395,
                'name' => '黄大仙区',
                'type' => 3,
            ),
            368 => 
            array (
                'id' => 3369,
                'parent_id' => 395,
                'name' => '九龙城区',
                'type' => 3,
            ),
            369 => 
            array (
                'id' => 3370,
                'parent_id' => 395,
                'name' => '屯门区',
                'type' => 3,
            ),
            370 => 
            array (
                'id' => 3371,
                'parent_id' => 395,
                'name' => '葵青区',
                'type' => 3,
            ),
            371 => 
            array (
                'id' => 3372,
                'parent_id' => 395,
                'name' => '元朗区',
                'type' => 3,
            ),
            372 => 
            array (
                'id' => 3373,
                'parent_id' => 395,
                'name' => '深水埗区',
                'type' => 3,
            ),
            373 => 
            array (
                'id' => 3374,
                'parent_id' => 395,
                'name' => '西贡区',
                'type' => 3,
            ),
            374 => 
            array (
                'id' => 3375,
                'parent_id' => 395,
                'name' => '大埔区',
                'type' => 3,
            ),
            375 => 
            array (
                'id' => 3376,
                'parent_id' => 395,
                'name' => '湾仔区',
                'type' => 3,
            ),
            376 => 
            array (
                'id' => 3377,
                'parent_id' => 395,
                'name' => '油尖旺区',
                'type' => 3,
            ),
            377 => 
            array (
                'id' => 3378,
                'parent_id' => 395,
                'name' => '北区',
                'type' => 3,
            ),
            378 => 
            array (
                'id' => 3379,
                'parent_id' => 395,
                'name' => '南区',
                'type' => 3,
            ),
            379 => 
            array (
                'id' => 3380,
                'parent_id' => 395,
                'name' => '荃湾区',
                'type' => 3,
            ),
            380 => 
            array (
                'id' => 3381,
                'parent_id' => 395,
                'name' => '中西区',
                'type' => 3,
            ),
            381 => 
            array (
                'id' => 3382,
                'parent_id' => 395,
                'name' => '离岛区',
                'type' => 3,
            ),
            382 => 
            array (
                'id' => 3383,
                'parent_id' => 396,
                'name' => '澳门',
                'type' => 3,
            ),
            383 => 
            array (
                'id' => 3384,
                'parent_id' => 397,
                'name' => '台北',
                'type' => 3,
            ),
            384 => 
            array (
                'id' => 3385,
                'parent_id' => 397,
                'name' => '高雄',
                'type' => 3,
            ),
            385 => 
            array (
                'id' => 3386,
                'parent_id' => 397,
                'name' => '基隆',
                'type' => 3,
            ),
            386 => 
            array (
                'id' => 3387,
                'parent_id' => 397,
                'name' => '台中',
                'type' => 3,
            ),
            387 => 
            array (
                'id' => 3388,
                'parent_id' => 397,
                'name' => '台南',
                'type' => 3,
            ),
            388 => 
            array (
                'id' => 3389,
                'parent_id' => 397,
                'name' => '新竹',
                'type' => 3,
            ),
            389 => 
            array (
                'id' => 3390,
                'parent_id' => 397,
                'name' => '嘉义',
                'type' => 3,
            ),
            390 => 
            array (
                'id' => 3391,
                'parent_id' => 397,
                'name' => '宜兰县',
                'type' => 3,
            ),
            391 => 
            array (
                'id' => 3392,
                'parent_id' => 397,
                'name' => '桃园县',
                'type' => 3,
            ),
            392 => 
            array (
                'id' => 3393,
                'parent_id' => 397,
                'name' => '苗栗县',
                'type' => 3,
            ),
            393 => 
            array (
                'id' => 3394,
                'parent_id' => 397,
                'name' => '彰化县',
                'type' => 3,
            ),
            394 => 
            array (
                'id' => 3395,
                'parent_id' => 397,
                'name' => '南投县',
                'type' => 3,
            ),
            395 => 
            array (
                'id' => 3396,
                'parent_id' => 397,
                'name' => '云林县',
                'type' => 3,
            ),
            396 => 
            array (
                'id' => 3397,
                'parent_id' => 397,
                'name' => '屏东县',
                'type' => 3,
            ),
            397 => 
            array (
                'id' => 3398,
                'parent_id' => 397,
                'name' => '台东县',
                'type' => 3,
            ),
            398 => 
            array (
                'id' => 3399,
                'parent_id' => 397,
                'name' => '花莲县',
                'type' => 3,
            ),
            399 => 
            array (
                'id' => 3400,
                'parent_id' => 397,
                'name' => '澎湖县',
                'type' => 3,
            ),
            400 => 
            array (
                'id' => 3401,
                'parent_id' => 3,
                'name' => '合肥',
                'type' => 2,
            ),
            401 => 
            array (
                'id' => 3402,
                'parent_id' => 3401,
                'name' => '庐阳区',
                'type' => 3,
            ),
            402 => 
            array (
                'id' => 3403,
                'parent_id' => 3401,
                'name' => '瑶海区',
                'type' => 3,
            ),
            403 => 
            array (
                'id' => 3404,
                'parent_id' => 3401,
                'name' => '蜀山区',
                'type' => 3,
            ),
            404 => 
            array (
                'id' => 3405,
                'parent_id' => 3401,
                'name' => '包河区',
                'type' => 3,
            ),
            405 => 
            array (
                'id' => 3406,
                'parent_id' => 3401,
                'name' => '长丰县',
                'type' => 3,
            ),
            406 => 
            array (
                'id' => 3407,
                'parent_id' => 3401,
                'name' => '肥东县',
                'type' => 3,
            ),
            407 => 
            array (
                'id' => 3408,
                'parent_id' => 3401,
                'name' => '肥西县',
                'type' => 3,
            ),
        ));
        
        
    }
}