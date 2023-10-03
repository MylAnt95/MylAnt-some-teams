<?php
require __DIR__ . '/header.php';
require __DIR__ . '/teams-total.php';
?>

<body>
    <div class="container">
        <div class="unique-total">
            <!--Require PHP file that displays unique and total of teams -->
            <p class="strong">Unique cities:</p>
            <?php require __DIR__ . '/unique-city.php'; ?>
            <p class="strong">Total teams: <?= $teamCount ?></p>
        </div>
        <!--Table with categories in the first row-->
        <table>
            <tr>
                <th>Team</th>
                <th>League</th>
                <th>City</th>
                <th>Last time champions</th>
                <th>Link</th>
            </tr>
            <!--Require PHP file that loops through the data of each team and displays them-->
            <?php require __DIR__ . '/print-table.php'; ?>
        </table>
    </div>
</body>

</html>