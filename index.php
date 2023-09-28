<?php
require __DIR__ . '/header.php';
?>

<body>
    <div class="container">
        <!--Table with categories in the first row-->
        <table>
            <tr>
                <th>Team</th>
                <th>League</th>
                <th>City</th>
                <th>Last time champions</th>
            </tr>
            <!--Link to a PHP file that loops through the data of each team and displays them-->
            <?php require __DIR__ . '/print-table.php'; ?>
        </table>
    </div>
</body>
</html>