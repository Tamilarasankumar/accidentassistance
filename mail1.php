<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
   <!-- <title> Responsive Contact Us Form  | CodingLab </title>-->
    <link rel="stylesheet" href="style.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\mail1.css"/>
    
   </head>
<body>
  
  
   <div class="container">
  <header class="buttons">
    <a href="alert1.php">
      <button class="button-29" role="button">Back</button>
    </a>
  </header>  
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">217 Kambar Street</div>
          <div class="text-two">Chinnathirupatty, Salem-8.</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">+91 7010793986</div>
          <div class="text-two">+91 9865955983</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">tamilarasantamil102002@gamil.com</div>
          <div class="text-two">tamilarasankumar2002@gmail.com</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Send Message</div>
       <!-- starting php code -->
       <?php
               $servername = "localhost";
               $username = "root";
               $password = "";
               $database = "accident";
               
               $mysqli = new mysqli($servername, $username, $password, $database);
               
               if(isset($_POST['vnumber']))
    {
        $vehnum = $_POST['vnumber'];
        global $uaddress;
        if(isset($_POST['address']))
        $uaddress = $_POST['address'];
        global $uage;
        if(isset($_POST['age']))
        $uage=$_POST['age'];
        global $ublood;
        if(isset($_POST['blood']))
        $ublood=$_POST['blood'];
        $alert_ct = $_POST['alert_submit_ct'];

        $insert_sql = "INSERT INTO alert(vnumber,address,age,blood,alert_submit_ct) VALUES('$vehnum','$uaddress','$uage','$ublood','$alert_ct')";
        //header ('Location: vehicle.php');
        //header ('Location: alert.html');
        //include 'vehicle.php';
        if(isset($_POST['submit']))
        {
            echo' <script>
            window.location.href="vehicleform.php";
            </script>';
            //header('Location: vehicle.php');
        }     
        if(!mysqli_query($mysqli, $insert_sql))
         {
            echo "Error: " . $insert_sql . "<br>" . mysqli_error($mysqli);
        }
           
    }
    //mysqli_close($conn); 
    {
               $query="select v.username,v.altermail,v.vnumber,v.address,v.blood
                 from alert a,accidentdb2 v where a.vnumber = v.vnumber";
                 echo '<table border="1" cellspacing="1" cellpadding="1"> 
      <tr> 
          <td> <font face="Arial">USERNAME</font> </td> 
          <td> <font face="Arial">ALTERNATE MAILID</font> </td> 
          <td> <font face="Arial">VEHICLE NUMBER</font> </td> 
          <td> <font face="Arial">ADDRESS</font> </td> 
          <td> <font face="Arial">BLOOD GROUP</font> </td> 

      </tr>';
      $altermail="";
 if ($result = $mysqli->query($query)) 
 {

    while ($row = $result->fetch_assoc())
     {
        $field1name = $row["username"];
        $field2name = $row["altermail"];
        $field3name = $row["vnumber"];
        $field4name = $row["address"];
        $field5name = $row["blood"];

        //echo '<b>'.$field1name."\t".$field2name.'</b><br />';
        echo 
        '<tr> 
        <td>'.$field1name.'</td> 
        <td>'.$field2name.'</td> 
        <td>'.$field3name.'</td> 
        <td>'.$field4name.'</td> 
        <td>'.$field5name.'</td> 

        </tr>';
        $altermail = $row["altermail"];
    }  
   
    $delete_query = "DELETE FROM alert WHERE vnumber IN (SELECT vnumber FROM alert)";
    mysqli_query($mysqli, $delete_query);

  
 }
 $result->free();
    }

    
                  //first we leave this input field blank
                  $recipient = "";
                  //if user click the send button
                  if(isset($_POST['send'])){
                    //access user entered data
                    $recipient = $_POST['email'];
                    $subject = $_POST['subject'];
                    $message = $_POST['message'];
                    $sender = "From: tamilarasantamil102002@gmail.com";
                    
                    //if user leaves empty field among one of them
                    if(empty($recipient) || empty($subject) || empty($message)){
                        ?>
                        <!-- display an alert message if one of them field is empty -->
                        <div class="alert alert-danger text-center">
                            <?php echo "All inputs are required!" ?>
                        </div>
                        <?php
                    }else{
                        // PHP function to send mail
                        if(mail($recipient, $subject, $message, $sender)){
                            ?>
                            <!-- display a success message if once mail sent sucessfully -->
                            <div class="alert alert-success text-center">
                                <?php echo "Your mail successfully sent to $recipient"?>
                            </div>
                            <?php
                            $recipient = "";
                        }else{
                            ?>
                            <!-- display an alert message if somehow mail can't be sent -->
                            <div class="alert alert-danger text-center">
                                <?php echo "Failed while sending your mail!" ?>
                            </div>
                            <?php
                        }
                    }
                }
                ?><!-- end of php code -->  
      <form action="mail1.php" method="POST">
        <div class="input-box">
          <input name="email" type="email" placeholder="Recipients" value="<?php echo $altermail; ?>">
        </div>
        <div class="input-box">
          <input name="subject" type="text" placeholder="Subject" value="Accident">
        </div>
        <div class="input-box message-box">
            <input name="message" type="text" placeholder="Your message here...">
        </div>
        <div class="button">
          <input type="submit" name="send" value="Send" placeholder="Subject">
        </div>
      </form>
    </div>
    </div>
  </div>
</body>
</html>