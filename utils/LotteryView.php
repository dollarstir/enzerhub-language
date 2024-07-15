<?php
class LotteryView
{
    private $db;
    private  $conn;
    private $limit = 10;

    public function __construct()
    {
        $this->db = new Database();
        $this->conn = $this->db->conn;
    }

    public function renderTable($viewType, $page)
    {
        $offset = ($page - 1) * $this->limit;
        $tableName = $this->getTableName($viewType);
        $result = $this->db->fetchData($tableName, $this->limit, $offset);

        $data = $result['data'];
        $total = $result['total'];
        $totalPages = ceil($total / $this->limit);

        ob_start();
        include_once 'mytable.php';
        return ob_get_clean();
    }

    public function saveData($viewType)
    {
        $dictionaryType = null;
        switch ($viewType) {
            case 'lottery_types':
                $dictionaryType = new ChineseLotteryType();
                break;
            case 'lottery_games':
                $dictionaryType = new ChinsesLottery();
                break;
            case 'lottery_groups':
                $dictionaryType = new ChineseGameGroup();
                break;
            case 'games':
                $dictionaryType = new ChineseStandardGames();
                // Define other class if needed
                break;
        }


        if ($dictionaryType) {
            $dictionaryType->saveToDB();
            return true;
        }
        return false;
    }

    private function getTableName($viewType)
    {
        switch ($viewType) {
            case 'lottery_types':
                return 'lottery_type';
            case 'lottery_games':
                return 'game_type';
            case 'lottery_groups':
                return 'game_group';
            case 'games':
                return 'game_name';
            default:
                return '';
        }
    }
}
