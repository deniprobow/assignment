<?php
// Database name
$db_name = "my_assignment.db";

// Database Connection
$db = new SQLite3($db_name);


// Create Table "users" into Database if not exists 
$query = "CREATE TABLE IF NOT EXISTS users (name STRING, email STRING)";
$db->exec($query);
?>