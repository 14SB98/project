<?php

$con=pg_connect("host=localhost user=postgres dbname=sooraj password=258789");

if($con){
echo "\n Database Connect \n";}
else{
echo " \n Database not Connect\n ";
}

if(isset($_POST['save']))
{
$name=$_POST['name'];
$people=$_POST['people'];
$date=$_POST['date'];
$message=$_POST['message'];


$insert=pg_query("INSERT INTO reservation(name,no_of_members,date,requirements)values('$name','$people','$date','$message')");

if($insert){
echo "\ninserted\n";
}
else{
echo "\nnot inserted\n";
}
}


$rs=pg_query($con,"select * from reservation");

echo "<table border=1><tr> <th>name</th> <th>no_of_peoples</th> <th>date</th> <th>message</th> </tr>";

while($row=pg_fetch_row($rs)){
echo "<tr> <td>$row[0]</td> <td>$row[1]</td> </tr><br>";
}
echo "</table>";

?>
