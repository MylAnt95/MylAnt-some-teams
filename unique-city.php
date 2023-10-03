<?php
require __DIR__ . '/data.php';

//An empty array to store the unique cities. 
$uniqueCities = [];

//Loops through $teams array and stores the cities in the empty array.
foreach ($teams as $team) {
    $uniqueCities[] = $team['city'];
};

//checks and stores only unique values
$uniqueCities = array_unique($uniqueCities);

//Loops through $uniqueCity array and displays all the unique city names.
foreach ($uniqueCities as $uniqueCity) { ?>
    <p><?= $uniqueCity ?></p>
<?php
};

?>