<?php
$message = "";
if( isset($_POST['submit_data']) ){
// Includs database connection
include "connection.php";

// Gets the data from post
$name = $_POST['name'];
$email = $_POST['email'];

// Makes query with post data
$query = "INSERT INTO users (name, email) VALUES ('$name', '$email')";

// Executes the query
// If data inserted then set success message otherwise set error message
if( $db->exec($query) ){
$message = "Data inserted successfully.";
}else{
$message = "Sorry, Data is not inserted.";
}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Insert Data</title>
</head>
<body>
<div style="width: 500px; margin: 20px auto;">

<!-- showing the message here-->
<div><?php echo $message;?></div>

<table width="100%" cellpadding="5" cellspacing="1" border="1">
<form action="insert.php" method="post">
<tr>
<td>Name:</td>
<td><input name="name" type="text"></td>
</tr>
<tr>
<td>Email:</td>
<td><input name="email" type="text"></td>
</tr>
<tr>
<td><a href="index.php">See Data</a></td>
<td><input name="submit_data" type="submit" value="Insert Data"></td>
</tr>
</form>
</table>
</div>
</body>
</html>