<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("sql103.epizy.com", "epiz_21290586","v2x4zO16HX9t","epiz_21290586_demo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
$father_name = mysqli_real_escape_string($link, $_REQUEST['father_name']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
$paddress = mysqli_real_escape_string($link, $_REQUEST['paddress']);
$sex = mysqli_real_escape_string($link, $_REQUEST['sex']);
$city = mysqli_real_escape_string($link, $_REQUEST['city']);
$pincode = mysqli_real_escape_string($link, $_REQUEST['pincode']);
$email_id = mysqli_real_escape_string($link, $_REQUEST['email_id']);
$dob_day = mysqli_real_escape_string($link, $_REQUEST['dob_day']);
$dob_month = mysqli_real_escape_string($link, $_REQUEST['dob_month']);
$dob_year = mysqli_real_escape_string($link, $_REQUEST['dob_year']);
$mob_no = mysqli_real_escape_string($link, $_REQUEST['mob_no']);
 
// attempt insert query execution
$sql = "INSERT INTO persons (first_name, father_name, last_name, paddress, sex, city, pincode, email_id, dob_day, dob_month, dob-year, mob_no) VALUES ('$first_name', '$father_name', '$last_name', 'paddress', 'sex', 'city', 'pincode', 'email_id', 'dob_day', 'dob-month', 'dob-year', 'mob_no')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>