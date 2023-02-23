<?php
$Name=$_POST['Name'];
$Telephone=$_POST['Telephone'];
$Email=$_POST['Email'];
$Message=$_POST['Message'];

$host="localhost";
$username="root";
$password='';
$db_name="hospital";

$conn=mysqli_connect($host, $username, $password, $db_name);
if(mysqli_connect_errno()){
    die("Failed to connect with mysql :".mysqli_connect_errno());

}
$sql="insert into contactus (Name, Telephone , Email, Message) values('$Name','$Telephone','$Email','$Message')";

           $result=mysqli_query($conn,$sql);
           header('location:../html/home.html');

if (mysqli_query($conn, $sql)){
    echo"<script>alert('successfully  ')</script>";

}
else{"<script>alert('error')</script>";

}

mysqli_close($conn);

?>

