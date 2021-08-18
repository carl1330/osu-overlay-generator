<?php
$servername = "localhost";
$username = "u253802353_carl";
$password = "213j45up";

try {
   $conn = new PDO("mysql:host=$servername;dbname=u253802353_oov", $username, $password);
   // set the PDO error mode to exception
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   }
catch(PDOException $e)
   {
   echo "Connection failed: " . $e->getMessage();
   }
?>
