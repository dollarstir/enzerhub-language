<?php
require_once 'utils/autoloader.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $response = ['status' => 'error', 'message' => 'Invalid request'];

    if (isset($_POST['action'])) {
        $viewType = isset($_POST['view_type']) ? $_POST['view_type'] : '';
        $page = isset($_POST['page']) ? (int)$_POST['page'] : 1;

        $lotteryView = new LotteryView();

        if ($_POST['action'] === 'view') {
            $response = ['status' => 'success', 'html' => $lotteryView->renderTable($viewType, $page)];
        } elseif ($_POST['action'] === 'save') {
            if ($lotteryView->saveData($viewType)) {
                $response = ['status' => 'success', 'message' => 'Data saved successfully'];
            } else {
                $response = ['status' => 'error', 'message' => 'Failed to save data'];
            }
        }
    }

    echo json_encode($response);
}
