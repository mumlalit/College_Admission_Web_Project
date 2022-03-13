<?php
$con=mysqli_connect("sql103.epizy.com", "epiz_21290586","v2x4zO16HX9t","epiz_21290586_demo");
if (mysqli_connect_errno())
{echo "Failed to connect to MySQL: " . mysqli_connect_error();}
$result = mysqli_query($con,"register * register");
$last = DB::table('items')->latest()->first();

echo "<table border='1'>
<tr>
<th>id</th>
<th>Title</th>
<th>Description</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['first_name'] . "</td>";
echo "<td>" . $row['father_name'] . "</td>";
echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>