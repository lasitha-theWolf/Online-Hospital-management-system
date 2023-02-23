<!doctype html>
<html>
    <head>
        <title>Admin Dashboard</title>
        <link rel="stylesheet" type="text/css" href="../css/display.css">
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
       <div class="t1">
            <h2>Patients Dashboard</h2><br>
       </div>
        <div class="t2">
            <h4>Current results of Patients</h4><br><br>
        </div>


        <div class="abc">   
        <?php

require 'connection.php';

$sql = "SELECT id,name1,age,decease,gender,contact,addres FROM patient";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr>
	<th>Id  </th>
    <th></th>
    <th></th>
    <th></th>

	<th>Name  </th>
    <th></th>
    <th></th>
    <th></th>

	<th>Age</th>
    <th></th>
    <th></th>
    <th></th>

    <th>Decease</th>
    <th></th>
    <th></th>
    <th></th>

    <th>Gender</th>
    <th></th>
    <th></th>
    <th></th>

    <th>Contact</th>
    <th></th>
    <th></th>
    <th></th>

    <th>Address</th>
    <th></th>
    <th></th>
    <th></th>
	 
	 
	 
	</tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td>
        <td></td>
        <td></td>
        <td></td>
        <br>

		<td>" . $row["name1"]."</td>
        <td></td>
        <td></td>
        <td></td>

		<td>" . $row["age"]. "</td>
        <td></td>
        <td></td>
        <td></td>

        <td>" . $row["decease"]. "</td>
        <td></td>
        <td></td>
        <td></td>

        <td>" . $row["gender"]. "</td>
        <td></td>
        <td></td>
        <td></td>

        <td>" . $row["contact"]. "</td>
        <td></td>
        <td></td>
        <td></td>

        <td>" . $row["addres"]. "</td>
        <td></td>
        <td></td>
        <td></td>

		 <td><a href='update.php?id=$row[id]'><button> Update</button></a></td>
		 </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

	$conn->close();
?>
</div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        

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