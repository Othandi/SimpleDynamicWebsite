<?php
//set error display to show
lang = en;
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    class dbController {
        private $conn;
        public function __construct($host, $user, $pass, $db) 
        {
            $this->conn = new mysqli($host, $user, $pass, $db);
            if ($this->conn->connect_error) {
                die('Connection failed'. $this->conn->connect_error);
            } else{
                echo 'Successfully connected to the database';
                echo '<br>';
            }
        }
        public function insertQuery ($sql, $name, $venue, $topic, $details, $photo) {
            $stmt = $this->conn->prepare($sql);
            if (!$stmt) {
                $this ->logError($this->conn->error);
                exit("Error");
            } 

            $stmt->bind_param("sssss", $name, $venue,$topic,$details, $photo);
            $stmt->execute();
            return $stmt->affected_rows;
        }
        public function getServerInfo() {
            return $this->conn->get_server_info();
        }

        public function cleanup($value) {
            $value = trim($value);
            return $value;
        }

        public function uploadPhoto($temp, $dest) {
            if (move_uploaded_file($temp, $dest)) {
                echo "<br>";
                echo "Image submitted";
                echo "<br>";
        } else { 
            echo "<br>";
            echo "Image failed to submit";
            echo "<br>";
        }
        }   

        private function logError($error) {
            error_log("SQL Error: $error".PHP_EOL, 3, "logs/my-errors.log");
            echo "<br>";
            exit("Error");
        }

        public function getRecords($sql) {
            $result = $this->conn->query($sql);
            while($row = $result->fetch_assoc());{
                $resultset[]= $row;
            }
            return $resultset;
        }
    }
?>