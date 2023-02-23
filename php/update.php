<?php

$host="localhost";
$username="root";
$passwords='';
$db_name="hospital";

$conn=mysqli_connect($host, $username, $passwords, $db_name);

 if($_SERVER['REQUEST_METHOD'] =='GET') {

    if(!isset($_GET["id"])){
        header("location:display.php");
        exit;
    }
    $id = $_GET["id"];

    $sql = "SELECT *FROM patient WHERE id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    if(!$row){
        header("location:display.php");
        exit;
    }
    $id = $row['id'];
    $name = $row['name1'];
    $age = $row['age'];
    $decease = $row['decease'];
    $gender = $row['gender'];
    $contact = $row['contact'];
    $address = $row['addres'];

 }
 else{

    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $decease = $_POST['decease'];
    $gender = $_POST['gender'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];

    do{
        if(empty($id) || empty($name) ||empty($age) ||empty($decease) ||empty($gender) ||empty($contact) ||empty($address) ){
            $errorMessage ="All the fields are required";
            break;
        }

        $sql ="UPDATE patient SET name1 ='$name', age ='$age',decease ='$decease',gender ='$gender',contact ='$contact',addres ='$address' WHERE id='$id'";

         $result =$conn->query($sql);

         if(!$result){
            $errorMessage ="Invalid query: " .$conn->error;
            break;
         }
         header("location:display.php");
         


    } while(false);
 }
?>

<!doctype html>
    <html>
        <head>
            <title>Update</title>
            <link rel="stylesheet" type="text/css" href="../css/Register.css">
        </head>
        <body>  
            <header>
                    <img src="../Images/logo1.png" class="logo">      
                    
                    <ul class="navbar">
                        <li><a href="../html/home.html">Home</a> </li>
                        <li><a href="../html/Register.html">Channel</a> </li>
                        <li><a href="../html/contact us.html">Contact us</a> </li>
                        <li><a href="../html/About us.html">About us</a> </li>
                        
                    </ul> 
            </header>
            <br>
            <section class="register-form">

                <div class="form_container">
                
                    <form method="POST">

                        
    
                        <div class="heading">
                            <h1>Health Care Hospitals</h1>
                        </div>
                
                            <div class="text_fill_form">
                                <p><b>Update Your Details</b></p>
                
                            </div> 

                            <input type="hidden" name ="id" 
                            
                            
                            value ="<?php echo $id; ?>">

                        <div class="input-box">
                            <span>Name</span>
                            <input type="text" name="name" id=""  value ="<?php echo $name; ?>">
                        </div>
    
                        <div class="input-box">
                            <span>Age</span>
                            <input type="text" name="age"  value ="<?php echo $age; ?>" >
                        </div>
    
                        <div class="input-box">
                            <span>Decease</span>
                            <input type="text" name="decease" value ="<?php echo $decease; ?>" >
                        </div>
    
                        <div class="input-box">
                            <span>Gender</span>
                            <input type="text" name="gender"  value ="<?php echo $gender; ?>" >
                        </div>
    
                        <div class="input-box">
                            <span>Contact</span>
                            <input type="text" name="contact"  value ="<?php echo $contact; ?>" >
                        </div>
        
                        <div class="input-box">
                            <span>Address</span>
                            <input type="text" name="address"  value ="<?php echo $address; ?>" >
                        </div><br>
                        <div class="input-box">
                            <button name="submit" class="btn">Update</button>
                        </div>
                       
                    </div><br>
    
                
                    </form>
                </div>
        </section>
            <footer>
                <section class="newsletter">
                    <div class="logotext">
                        <div class="trophy">
                            <img src="../Images/logo1.png">
                        </div>
                        <div class="para">
                            <p>
                                At HealthCare Hospitals, we offer a wide range of medical services, including primary care, 
                                specialty care, emergency care, and surgical procedures. Our state-of-the-art 
                                facilities and advanced technology allow us to provide the best possible treatment for our patients.
                            </p>
                        </div>
                        <div class="store">
                            <img src="../Images/logo1.png">
                            <h6>Download our App,</h6>
                            <div class="c2">
                                <a href="https://play.google.com/store/"><img src="../Images/Untitled-3.png" > </a>
                                <a href="https://www.apple.com/store"><img src="../Images/Untitled-4.png" > </a> 
                            </div> 
                        </div>
                        
                        <div class="social">
                            <a href="https://www.facebook.com/"><img src="../Images/fb.png" > </a>
                            <a href="https://www.instagram.com/"><img src="../Images/inster.png" > </a>
                            <a href="https://mail.google.com/"><img src="../Images/mail.png" > </a>
                            <a href="https://twitter.com/"><img src="../Images/twi.png" > </a>
                        </div>
                        
                    
                </section>
                <p class="copyright">Copyright ©2022 All Rights Resserved <br> 
                </p>
            </footer>
        </body>
    </html>