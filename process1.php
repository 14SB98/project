<?php

$con=pg_connect("host=localhost dbname=testdb user=postgres password=258789");

if(!$con){
echo "database not connect";
}
else{
echo "database connect";
}


if(isset($_POST['save']))
{
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$city_name=$_POST['city_name'];
$email=$_POST['email'];

$result=pg_query("INSERT INTO employee(first_name,last_name,city_name,email)values('$first_name','$last_name','$city_name','$email')");

if($result){
echo "data added sucessfully.";
}
else{
echo "error";
}

}

/*
$result=pg_query("insert into employee values('pratham','jagtap','pune','abc@gmail.com')");

if(!$result){
echo "data added sucessfully.";
}
else{
echo "error";
}
*/

$rs=pg_query($con,"select * from employee");

echo "<table border=1><tr> <th>first_name</th> <th>last_name</th> <th>city_name</th> <th>email</th> </tr>";

while($row=pg_fetch_row($rs)){
echo "<tr><td>$row[0]</td> <td>$row[1]</td> <td>$row[2]</td> <td>$row[3]</td>  </tr><br>";
}
echo "</table>";

?>
