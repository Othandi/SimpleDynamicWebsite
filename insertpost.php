<?php
require_once 'includes/config.inc';
require_once 'includes/dbController.inc';

$db = new dbController(HOST,USER,PASS,DB);

foreach ($_POST as $key => $val) {
  $$key = $db->cleanup($val);
}

echo 'Current PHP version: ' . phpversion() . "<br>";
echo 'Current MySQL server version: '.$db -> getServerInfo();
echo '<br>';

if (isset($_POST['name']) &&
  !empty($_POST['venue']) &&
  !empty($_POST['topic']) &&
  !empty($_POST['details']) &&
  !empty($_FILES['photo'])) {
    echo "Values have been properly entered";
  }
  else {
    echo "Please enter proper values for Name, Venue, Topic, Details, and Photo";
  }


$photo = "images/submissions/" . $_FILES['photo']['name'];
$temp = $_FILES['photo']['tmp_name'];
$error = $_FILES['photo']['error'];

$sql = "INSERT INTO Tourism_Victoria (name, venue, topic, details, photo) VALUES (?, ?, ?, ?, ?)";
if (isset($_POST['name']) &&
    !empty($_POST['venue']) &&
    !empty($_POST['topic']) &&
    !empty($_POST['details']) &&
    !empty($_FILES['photo']) && $db-> insertQuery($sql, $name, $venue, $topic, $details, $photo)) {
      echo"<br>";
      echo"New record has been created successfully inserted into the database";
      $db->uploadPhoto($temp, $photo);
    } else {
      echo"<br>";
      echo"Failed to insert record into the database";
    }

?>