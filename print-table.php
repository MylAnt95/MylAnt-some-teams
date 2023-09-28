<?php
require __dir__ . '/MylAnt-some-teams/data.php';

//Loop through the teams array (located in data.php), that displays every teams data in rows.   
foreach($teams as $team => $teamInfo) { ?>
    <tr>
        <td><?= $team; ?></td>
        <td><?= $teamInfo['league']; ?></td>
        <td><?= $teamInfo['last-time-champions']; ?></td>
        <td><?= $teamInfo['city']; ?></td>
    </tr>
    <?php
}; ?>