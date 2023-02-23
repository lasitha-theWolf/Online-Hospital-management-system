<?php

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $age = $_POST['age'];
    $decease = $_POST['decease'];
    $gender = $_POST['gender'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
 


$host="localhost";
$username="root";
$passwords='';
$db_name="hospital";

$conn=mysqli_connect($host, $username, $passwords, $db_name);
if(mysqli_connect_errno()){
    die("Failed to connect with mysql :".mysqli_connect_errno());

}


    $sql="INSERT INTO patient (name1,age,decease,gender,contact,addres)
    VALUES('$name','$age','$decease','$gender','$contact','$address')";

           $result=mysqli_query($conn,$sql);
           header('location:../html/home.html'); 
  
    }

    ?>
