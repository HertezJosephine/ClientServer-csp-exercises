<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "db_sjtp");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$wedding_dt = mysqli_real_escape_string($link, $_REQUEST['wedding_dt']);
$appointment_dt = mysqli_real_escape_string($link, $_REQUEST['appointment_dt']);

$g_fname = mysqli_real_escape_string($link, $_REQUEST['g_fname']);
$g_mname = mysqli_real_escape_string($link, $_REQUEST['g_mname']);
$g_lname = mysqli_real_escape_string($link, $_REQUEST['g_lname']);
$gm_fname = mysqli_real_escape_string($link, $_REQUEST['gm_fname']);
$gm_mname = mysqli_real_escape_string($link, $_REQUEST['gm_mname']);
$gm_lname = mysqli_real_escape_string($link, $_REQUEST['gm_lname']);
$gf_fname = mysqli_real_escape_string($link, $_REQUEST['gf_fname']);
$gf_mname = mysqli_real_escape_string($link, $_REQUEST['gf_mname']);
$gf_lname = mysqli_real_escape_string($link, $_REQUEST['gf_lname']);
$g_birthdate = mysqli_real_escape_string($link, $_REQUEST['g_birthdate']);

$b_fname = mysqli_real_escape_string($link, $_REQUEST['b_fname']);
$b_mname = mysqli_real_escape_string($link, $_REQUEST['b_mname']);
$b_lname = mysqli_real_escape_string($link, $_REQUEST['b_lname']);
$bm_fname = mysqli_real_escape_string($link, $_REQUEST['bm_fname']);
$bm_mname = mysqli_real_escape_string($link, $_REQUEST['bm_mname']);
$bm_lname = mysqli_real_escape_string($link, $_REQUEST['bm_lname']);
$bf_fname = mysqli_real_escape_string($link, $_REQUEST['bf_fname']);
$bf_mname = mysqli_real_escape_string($link, $_REQUEST['bf_mname']);
$bf_lname = mysqli_real_escape_string($link, $_REQUEST['bf_lname']);
$b_birthdate = mysqli_real_escape_string($link, $_REQUEST['b_birthdate']);

// Attempt insert query execution
$sql = "INSERT INTO wedding (g_fname,g_mname,g_lname,gm_fname,gm_mname,gm_lname,gf_fname,gf_mname,gf_lname,g_birthdate, b_fname,b_mname,b_lname,bm_fname,bm_mname,bm_lname,bf_fname,bf_mname,bf_lname,b_birthdate,wedding_dt,appointment_dt) VALUES ('$g_fname','$g_mname','$g_lname','$gm_fname','$gm_mname','$gm_lname','$gf_fname','$gf_mname','$gf_lname','$g_birthdate','$b_fname','$b_mname','$b_lname','$bm_fname','$bm_mname','$bm_lname','$bf_fname','$bf_mname','$bf_lname','$b_birthdate','$wedding_dt','$appointment_dt')";
if(mysqli_query($link, $sql)){
    echo"<script>window.open('index.php?success=Send successfully','_self')</script>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>