<?php
require __dir__ . '/data.php';

//Loop through the teams array (located in data.php), that displays every teams data in rows. 
//If statement checks if a teams last win is set to null and if so, change it to "No title".  
foreach($teams as $team => $teamInfo) { 
    if($teamInfo['last-time-champions'] == null)
        $teamInfo['last-time-champions'] = 'No title';
    ?>
    <tr>
        <td><?= $team; ?></td>
        <td><?= $teamInfo['league']; ?></td>
        <td><?= $teamInfo['last-time-champions']; ?></td>
        <td><?= $teamInfo['city']; ?></td>
    </tr>
    <?php
}; ?>