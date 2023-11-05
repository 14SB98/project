<?php

$con=pg_connect("host=localhost user=postgres dbname=sooraj password=258789");

if($con){
echo "\n Database Connect \n";}
else{
echo " \n Database not Connect\n ";
}


if(isset($_GET['save']))
{
$sno=$_GET['no'];
$sname=$_GET['name'];


$insert=pg_query("INSERT INTO student(sno,sname)values('$sno','$sname')");

if($insert){
echo "\ninserted\n";
}
else{
echo "\nnot inserted\n";
}

}


$rs=pg_query($con,"select * from student");
echo "<table border=1><tr> <th>sno</th> <th>sname</th>  </tr>";
while($row=pg_fetch_row($rs))
{
echo "<tr><td>$row[0]</td> <td>$row[1]</td></tr><br>";
}
echo "</table>";
?>
