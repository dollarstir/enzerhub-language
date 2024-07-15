<?php
class ChinsesLottery implements TempDictionary
{
    /**
     * @inheritDoc
     */
    public function dictionary(): array
    {
        return [
            1 => "皇家五",
            4 => "1k球 5D 1分钟",
            5 => "幸运选五",
            6 => "1k球 1分钟",
            7   => " 极速5D 1分钟",
            8 => "极速5D 3分钟",
            9 => " 幸运5D 1.5分钟",
            36 => "5D棋盘游戏 1分钟",
            37 => "5D番摊 1分钟",
        ];
    }

    /**
     * @inheritDoc
     */
    public function saveToDB()
    {
        $save = new Save();
        $sql = "UPDATE  game_type SET chinese_name = :chinese_name WHERE gt_id = :gt_id";
        foreach ($this->dictionary() as $key => $value) {
            $parameters = [
                'chinese_name' => $value,   'gt_id' => $key
            ];
            $save->saveData($sql, $parameters);
        }
        // echo "Chinese Lottery Games Updated ";
    }
}
