<?php   
$server_name = "shopru";
$host = "localhost";
$password = '';
$user = "root";

try {
    echo "dfsdfsdf";
    $pdo  = new PDO("mysql:host=localhost;dbname=$server_name",$user,$password);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage();
    die();
  }



?>
