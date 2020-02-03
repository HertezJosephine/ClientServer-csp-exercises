<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "db_sjtp");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$email_add = mysqli_real_escape_string($link, $_REQUEST['email_add']);
$phone_no = mysqli_real_escape_string($link, $_REQUEST['phone_no']);
$message = mysqli_real_escape_string($link, $_REQUEST['message']);
 
// Attempt insert query execution
$sql = "INSERT INTO contact (name, email_add, phone_no, message) VALUES ('$name', '$email_add', '$phone_no', '$message')";
if(mysqli_query($link, $sql)){
    echo"<script>window.open('../contact.php?success=Send successfully','_self')</script>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>