<?php
class VietnamLotteryType implements TempDictionary {
    public function dictionary(): array
    {
        return [

            1=>"5D",
            2=>"PK 10",
            3=>"Nhanh 3",
            5=>"3D",
            6=>"11x5",
            8=>"Xổ Số Mark Sáu",
            9=>"PC 28", 
            10=>"Hạnh Phúc 8",
                   ];
    }

    public function saveToDB()
    {
        $save = new Save();
        $data = $this->dictionary();
        $sql = "UPDATE lottery_type SET vietnam_name = :name WHERE lt_id = :lt_id";
        foreach ($data as $key => $value) {
            $parameters = ['name' => $value, 'lt_id' => $key];
            $save->saveData($sql, $parameters);
        }
        echo "Records Updated for vietnam </br> ";

        
    }
}