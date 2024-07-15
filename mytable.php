<?php if (!empty($data)) { ?>
    <table class="min-w-full bg-white">
        <thead class="bg-gray-800 text-white">
            <tr>
                <th class="w-1/2 py-2">English</th>
                <th class="w-1/2 py-2">Chinese</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $row) { ?>
                <tr>
                    <td class="border px-4 py-2"><?php echo $row['name']; ?></td>
                    <td class="border px-4 py-2"><?php echo $row['chinese_name']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <div class="flex justify-between mt-4">
        <?php if ($page > 1) { ?>
            <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600" onclick="loadData('<?php echo $viewType; ?>', <?php echo $page - 1; ?>)">Previous</button>
        <?php } ?>
        <?php if ($page < $totalPages) { ?>
            <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600" onclick="loadData('<?php echo $viewType; ?>', <?php echo $page + 1; ?>)">Next</button>
        <?php } ?>
    </div>
<?php } else {
    echo "No data found.";
} ?>