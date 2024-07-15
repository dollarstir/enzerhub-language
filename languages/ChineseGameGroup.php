<?php
class ChineseGameGroup implements TempDictionary
{
    /**
     * @inheritDoc
     */
    public function dictionary(): array
    {
        return
            [
                1 => '所有5',
                2 => '所有4',
                3 => '前三',
                4 => '中三',
                5 => '后三',
                6 => '前二',
                7 => '后二',
                8 => '固定位置',
                9 => '任意位置',
                10 => '大/小/单/双',
                11 => '大/小/单/双/对/组合',
                12 => '趣味',
                13 => '选2',
                14 => '选3',
                15 => '选4',
                16 => '龙/虎/和',
                17 => '梭哈',
                18 => '三牌',
                19 => '牛牛',
                20 => '第一名',
                21 => '第二名',
                22 => '第三名',
                23 => '第四名',
                24 => '第五名',
                25 => '第一名到第五名',
                26 => '固定位置 第一名到第五名',
                27 => '多个固定位置',
                28 => '各种',
                29 => 'Rapido',
                30 => '大/小',
                31 => '单/双',
                32 => '龙/虎',
                33 => '定位胆',
                34 => '龙和虎',
                35 => '主区',
                36 => '番摊 1',
                37 => '番摊 2',
                38 => '和值',
                39 => '后',
                40 => '定位',
                41 => '牛',
                42 => '梭哈',
                43 => '百家乐',
                44 => '对/组合',
                218 => '对/组合'
            ];
    }

    /**
     * @inheritDoc
     */
    public function saveToDB()
    {
        $save = new Save();
        $sql = "UPDATE  game_group SET chinese_name = :chinese_name WHERE gp_id = :gp_id";
        foreach ($this->dictionary() as $key => $value) {
            $parameters = [
                'chinese_name' => $value,   'gp_id' => $key
            ];
            $save->saveData($sql, $parameters);
        }
        // echo "Chinese Lottery Games Updated ";
    }
}
