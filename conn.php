<?php
    $db_username = 'MKqcFG1GSF';
    $db_password = 'lzWlhmmNhl';
    $conn = new PDO( 'mysql:host=remotemysql.com;dbname=MKqcFG1GSF', $db_username, $db_password );
    if(!$conn){
        die("Fatal Error: Connection Failed!");
    }
?>
