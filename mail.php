<!DOCTYPE html> 
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Send Mail From Localhost | CodingNepal</title>
      <link rel="stylesheet" href=".css/m2.css">
      <!-- bootstrap cdn link -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   </head>
   <body>
   <nav class="navbar navbar-dark bg-dark" id="mainNav">
           
                <!--<a class="navbar-brand" href="#page-top"><img src="assets/img/navbar-logo.svg" alt="..." /></a>-->
                <a href="alert.php"><button class="btn btn-outline-success my-2 my-sm-0" style="background-color: #e3f2fd;" type="submit">Back</button></a>
                <a href="index_home.html"><button class="btn btn-outline-success my-3 my-sm-0" style="background-color: #e3f2fd;" type="submit">Logout</button></a>
            
        </nav>
      <div class="form-box">
         <div class="header-text">
            <div class="col-md-6 offset-md-3 mail-form">
               <h2 class="header-text">
                  Send Message
               </h2>
               <p class="header-text">
                  Send mail to anyone from localhost.
               </p>
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
  }
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
                     //if user leave empty field among one of them
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
                  ?> <!-- end of php code -->
               <form action="mail.php" method="POST"> 

                  <div class="form-box">
                     <input class="form-control" name="email" type="email" placeholder="Recipients" value="<?php echo $recipient ?>">
                  </div>
                  <div class="form-box">
                     <input class="form-control" name="subject" type="text" placeholder="Subject">
                  </div>
                  <div class="form-box">
                  <input class="form-control" name="message" type="text" placeholder="Your message here...">
                 <!-- <textareaa name="message " cols="30" rows="5" class="form-control textarea" placeholder="Compose your message.."></textarea>-->
                     <!-- change this tag name into textarea to show textarea field. Due to more textarea I got an error, so I change the name of this field -->
                     <!-- <changeit cols="30" rows="5" class="form-control textarea" name="message" placeholder="Compose your message.."></changeit> -->
                  </div>
                  <div class="form-box">
                     <input class="form-control button btn-primary" type="submit" name="send" value="Send" placeholder="Subject">
                  </div>
               </form>
            </div>
         </div>
      </div>
   </body>
</html>