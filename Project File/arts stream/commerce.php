<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("sql103.epizy.com", "epiz_21290586","v2x4zO16HX9t","epiz_21290586_register");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$checkbox1=$_POST['techno'];  
$chk="";  
foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1.",";  
   }  
 
// attempt insert query execution
$sql = "INSERT INTO commerce ('selected')";
if(mysqli_query($link, $sql)){
    header('Location: http://www.dmpc.rf.gd/stream.html');

Redirect('http://example.com/', false);;
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>