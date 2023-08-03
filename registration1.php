<?php
 $fname = $_POST["first_name"];
 $lname = $_POST["last_name"];
 $email = $_POST["email"];
 $pass =$_POST["password"];
 $add = $_POST["address"];
 $gen =$_POST["gender"];
 $dob =$_POST["birthdate"];
 $city =$_POST["city"];

 $host = "localhost";  //host name
$user = "root";  //user name
$pass = "";   // password
$db = "library database";  // database name

$con = mysqli_connect($host,$user,$pass,$db);

if (mysqli_connect_errno()){
    die("connection_erroor".  mysqli_connect_error());
}
else{
echo " connection successfully";
}
$qry="INSERT INTO registration ( first_name,last_name, email, password,address,birthdate,gender,city) 
VALUES ( '$fname',' $lname','$email','$pass','$add','$gen','$dob','$city')";
 $res =mysqli_query($con, $qry);

 echo "entered successfully";
  
 
print_r($_POST);
