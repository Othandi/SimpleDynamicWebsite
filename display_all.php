<?php
    require_once('includes/config.inc');
    require_once('includes/dbController.inc');
    $db = new DbController(HOST,USER,PASS,DB);
    $sql = "name, details, image " ;
    $records = $db ->getRecords($sql);
    foreach($records as $row){
        $name = $row['name'];
        $details = $row['details'];
        $image = $row['image'];

        echo"<h2>$name</h2>";
        echo"<img src='images/submissions/$image' alt='$name'>";
    };
?>