<?php
require_once 'utils/autoloader.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lottery Games Management</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body class="bg-gray-100">
    <div class="container mx-auto p-8">
        <h1 class="text-3xl font-bold mb-6 text-center text-blue-600">Lottery Language Management (5D)</h1>

        <div id="alert" class="hidden p-4 mb-4 text-sm rounded-lg" role="alert"></div>

        <div class="grid grid-cols-2 gap-6">
            <!-- Lottery Types -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-bold mb-4">Lottery Types</h2>
                <button class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600" onclick="saveData('lottery_types')">Save Chinese</button>
                <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 mt-2" onclick="loadData('lottery_types', 1)">View Data</button>
                <div id="lottery_types-data" class="mt-4"></div>
            </div>

            <!-- Lottery Games -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-bold mb-4">Lottery Games</h2>
                <button class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600" onclick="saveData('lottery_games')">Save Chinese</button>
                <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 mt-2" onclick="loadData('lottery_games', 1)">View Data</button>
                <div id="lottery_games-data" class="mt-4"></div>
            </div>

            <!-- Lottery Groups -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-bold mb-4">Lottery Groups</h2>
                <button class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600" onclick="saveData('lottery_groups')">Save Chinese</button>
                <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 mt-2" onclick="loadData('lottery_groups', 1)">View Data</button>
                <div id="lottery_groups-data" class="mt-4"></div>
            </div>

            <!-- Standard -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-bold mb-4">Standard</h2>
                <button class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600" onclick="saveData('games')">Save Chinese</button>
                <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 mt-2" onclick="loadData('games', 1)">View Data</button>
                <div id="games-data" class="mt-4"></div>
            </div>


            <!-- Twosides -->
            <!-- <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-bold mb-4">Two Sides</h2>
                <button class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600" onclick="saveData('twosides')">Save Chinese</button>
                <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 mt-2" onclick="loadData('twosides', 1)">View Data</button>
                <div id="games-data" class="mt-4"></div>
            </div> -->
        </div>
    </div>

    <script>
        function showAlert(message, type) {
            var alert = $('#alert');
            alert.removeClass('hidden');
            alert.removeClass('bg-red-100 text-red-700 bg-green-100 text-green-700');
            if (type === 'success') {
                alert.addClass('bg-green-100 text-green-700');
            } else {
                alert.addClass('bg-red-100 text-red-700');
            }
            alert.html(message);
            setTimeout(function() {
                alert.addClass('hidden');
            }, 3000); //
        }

        function loadData(viewType, page) {
            $.ajax({
                url: 'api.php',
                type: 'POST',
                data: {
                    action: 'view',
                    view_type: viewType,
                    page: page
                },
                success: function(response) {
                    var data = JSON.parse(response);
                    if (data.status === 'success') {
                        $('#' + viewType + '-data').html(data.html);
                    }

                }
            });
        }

        function saveData(viewType) {
            $.ajax({
                url: 'api.php',
                type: 'POST',
                data: {
                    action: 'save',
                    view_type: viewType
                },
                success: function(response) {
                    var data = JSON.parse(response);
                    if (data.status === 'success') {
                        showAlert(data.message, 'success');
                    } else {
                        showAlert(data.message, 'error');
                    }
                }
            });
        }
    </script>
</body>

</html>