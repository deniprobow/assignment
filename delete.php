<?php

// Includs database connection
include "connection.php";

$id = $_GET['id']; // rowid from url

// Prepar the deleting query according to rowid
$query = "DELETE FROM users WHERE rowid=$id";

// Run the query to delete record
if( $db->query($query) ){
$message = "Record is deleted successfully.";
}else {
$message = "Sorry, Record is not deleted.";
}

echo $message;
?>
<a href="index.php">Back to List</a>