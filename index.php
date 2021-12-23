<?php
$server="localhost";
$username="root";
$password="";
$con = mysqli_connect($server, $username, $password);
if(!$con){
     die("connection to this data base failed due to" . mysqli_connect_error());
}
//echo "success connecting to this database";
$name=$_POST["name"];
$age=$_POST["age"];
$adress=$_POST["adress"];
$phone=$_POST["phone"];
$sql="INSERT INTO `php`.`student`(`name`,`age`, `adress`, `phone`)VALUES('$name', '$age', '$adress', '$phone');";
echo $sql;
if($con->query($sql) == true){
    echo "Successfully inserted";
}
 else{
     echo "ERROR: $sql $con->error";
 }
 $con->close();
?>
