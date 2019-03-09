<?php

$con = new MongoDB\Driver\Manager("mongodb://localhost:27017");
$list= $con-> mybase-> listCollections();
foreach ($list as $collection) {
    echo "<p>" . $collection . "</p>";
}

?>
