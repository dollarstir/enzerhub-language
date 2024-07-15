<?php
class ChineseLotteryType implements TempDictionary
{
    public function dictionary(): array
    {
        return [

            1 => "5分彩",
            2 => "PK 10",
            3 => "快三",
            5 => "3D",
            6 => "11选5",
            8 => "六合彩",
            9 => "PC 二十八",
            10 => "快乐8",
        ];
    }

    public function saveToDB()
    {
        $save = new Save();  // Assuming $pdo is your PDO connection
        $data = $this->dictionary();
        $sql = "UPDATE lottery_type SET chinese_name = :name WHERE lt_id = :lt_id";
        foreach ($data as $key => $value) {
            $parameters = ['name' => $value, 'lt_id' => $key];
            $save->saveData($sql, $parameters);
        }
        // echo "Records Updated for Chinese </br> ";

    }
}
