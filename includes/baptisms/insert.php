<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "db_sjtp");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$baptism_dt = mysqli_real_escape_string($link, $_REQUEST['baptism_dt']);
$appointment_dt = mysqli_real_escape_string($link, $_REQUEST['appointment_dt']);

$fname = mysqli_real_escape_string($link, $_REQUEST['fname']);
$mname = mysqli_real_escape_string($link, $_REQUEST['mname']);
$lname = mysqli_real_escape_string($link, $_REQUEST['lname']);
$m_fname = mysqli_real_escape_string($link, $_REQUEST['m_fname']);
$m_mname = mysqli_real_escape_string($link, $_REQUEST['m_mname']);
$m_lname = mysqli_real_escape_string($link, $_REQUEST['m_lname']);
$f_fname = mysqli_real_escape_string($link, $_REQUEST['f_fname']);
$f_mname = mysqli_real_escape_string($link, $_REQUEST['f_mname']);
$f_lname = mysqli_real_escape_string($link, $_REQUEST['f_lname']);
$birthplace = mysqli_real_escape_string($link, $_REQUEST['birthplace']);
$birthdate = mysqli_real_escape_string($link, $_REQUEST['birthdate']);

// Attempt insert query execution
$sql = "INSERT INTO baptism (fname,mname,lname,m_fname,m_mname,m_lname,f_fname,f_mname,f_lname,birthplace,birthdate, baptism_dt,appointment_dt) VALUES ('$fname','$mname','$lname','$m_fname','$m_mname','$m_lname','$f_fname','$f_mname','$f_lname','$birthplace','$birthdate','$baptism_dt','$appointment_dt')";
if(mysqli_query($link, $sql)){
    echo"<script>window.open('index.php?success=Send successfully','_self')</script>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>