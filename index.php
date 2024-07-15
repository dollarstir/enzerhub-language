<?php
// require_once 'utils/autoloader.php';
// $dictionary = new TempDicContext();

// // ############ CHINESE  & VIETNAME DICTIONARY ADDING TO DB########
// $lotteryTypesDictionaries = [
//     new ChineseLotteryType(),
//     new VietnamLotteryType(),
//     new ChinsesLottery(),
// ];

// // foreach ($lotteryTypesDictionaries as $dictionarytype) {
// //     $dictionary->setDictionary($dictionarytype);
// //     $managedDictionary = $dictionary->getDictionary(); // Use a different variable
// //     $managedDictionary->saveToDB();
// // }
// $db = new Database();
// $res = $db->conn->prepare("SELECT name,chinese_name FROM game_type where lottery_type = :lottery_type");
// $res->execute(['lottery_type' => 1]);

// while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
//     echo '' . $row['chinese_name'] . '<br />';
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lottery Games</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="container mx-auto p-8">
        <h1 class="text-3xl font-bold mb-6 text-center text-blue-600">Lottery Games Management</h1>

        <div class="grid grid-cols-2 gap-6">
            <!-- Lottery Types -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-bold mb-4">Lottery Types</h2>
                <button class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Save Chinese</button>
                <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 mt-2">View Data</button>
            </div>

            <!-- Lottery Games -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-bold mb-4">Lottery Games</h2>
                <button class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Save Chinese</button>
                <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 mt-2">View Data</button>
            </div>

            <!-- Lottery Groups -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-bold mb-4">Lottery Groups</h2>
                <button class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Save Chinese</button>
                <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 mt-2">View Data</button>
            </div>

            <!-- Games -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-bold mb-4">Games</h2>
                <button class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Save Chinese</button>
                <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 mt-2">View Data</button>
            </div>
        </div>
    </div>
</body>

</html>