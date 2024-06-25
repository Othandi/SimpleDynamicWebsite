<?php
   if($_SERVER['SERVER_NAME'] == 'localhost') {
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS','');
    define('DB', 'destination');
   } else {
    define('HOST', 'talsprddb02.int.its.rmit.edu.au');
    define('USER', 's4034029');
    define('PASS', 'jaatmplnv1941805');
    define('DB', 's4034029');
   }
?>