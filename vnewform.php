<html>
  <head>
    <meta charset="utf-8">
    <title>Accident Assistance System</title>
    <link href="css/style.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
*{
	padding: 0;
	margin: 0;
}
body{
  background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ-BTzZyGZUzPHPyAHg6Ylk1pHvjDJgEur39qqwnX4N56SKu-cF57hYfh-wFvaGVE8bnWE&usqp=CAU);
  background-size: cover;
}

.container{
	background: #000071;
	width: 850px;
	height: 200px;
	padding-bottom: 20px;
	position: absolute;
	top:50%;
	left: 50%;
	transform: translate(-50%, -50%);
	margin: auto;
  padding: 70px 50px 20px 50px;
}


.fl{
	float: left;
  width: 110px;
  line-height: 35px;
}

.fontLabel{
  color: white;
}

.fr{
	float: right;
}

.clr{
	clear: both;
}

.box{
	width: 450px;
	height: 35px;
	margin-top: 10px;
	font-family: verdana;
	font-size: 12px;
}

.textBox{
	height: 35px;
	width: 290px;
	border: none;
  padding-left: 20px;
}

.new{
  float: left;
}

.iconBox{
    padding-top: 10px;
	height: 35px;
	width: 40px;
	line-height: 38px;
	text-align: center;
  background: #ff6600;
}

.radio{
	color: white;
	background: #000071;
	line-height: 38px;
}

.terms{
	line-height: 35px;
	text-align: center;
	background: #000071;
	color: white;
}

.submit{
	float: right;
	border: none;
	color: white;
	width: 450px;
	height: 35px;
	background: #ff6600;
	text-transform: uppercase;
  cursor: pointer;
}::-webkit-input-placeholder {
   color: #000071;
}




</style>
</head>
  <body>
    <!-- Body of Form starts -->
  	<div class="container">
      
      <form method="post" action="vnewform.php" autocomplete="on">
      <h1 align=center style="color:#ff6600">VEHICLE DETAILS FORM</h1>  
        <!--First name-->
    		<div class="box">
          <label for="firstName" class="fl fontLabel"> NAME </label>
    			<div class="new iconBox">     
            <i class="fa fa-user" aria-hidden="true"></i>
          </div>
    			<div class="fr">
    					<input type="text" name="username" placeholder="enter the name"
              class="textBox" autofocus="on" required>
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!--First name-->


        <!--Second name-->
    		<div class="box">
          <label for="secondName" class="fl fontLabel"> EMAIL ID </label>
          <div class="fl iconBox"><i class="fa fa-envelope" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="text" required name="emailid"
              placeholder="enter the email id" class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!--Second name-->


    		<!---Phone No.------>
    		<div class="box">
          <label for="phone" class="fl fontLabel"> VEHICLE NUMBER </label>
    			<div class="fl iconBox"><i class="fa fa-phone-square" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="text" required name="vnumber" maxlength="10" placeholder="TN ** ****" class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!---Phone No.---->

            <div class="box radio">
          <label for="vehicle type" class="fl fontLabel"> VEHICLE TYPE </label>
    				<input type="radio" name="vehicletype" value="Car" required> Car 
                    <input type="radio" name="vehicletype" value="Bike" required> Bike
                    <input type="radio" name="vehicletype" value="Auto" required> Auto
                    <input type="radio" name="vehicletype" value="Bus" required> Bus
                    <input type="radio" name="vehicletype" value="Truck" required> Truck
    		</div>


    		<!---Email ID---->
            <div class="box">
          <label for="age" class="fl fontLabel"> REGISTER DATE </label>
    			<div class="new iconBox">     
            <i class="fa fa-user" aria-hidden="true"></i>
          </div>
    			<div class="fr">
    					<input type="text" name="vdate" placeholder="DD-MM-YYYY"
              class="textBox" autofocus="on" required>
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!--Email ID----->


    		<!---Password------>
            <div class="box">
          <label for="secondName" class="fl fontLabel">ADDRESS</label>
          <div class="fl iconBox"><i class="fa fa-envelope" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="text" required  name="address"
              placeholder="enter the address here" class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!---Password---->
            <div class="box">
          <label for="age" class="fl fontLabel"> AGE </label>
    			<div class="new iconBox">     
            <i class="fa fa-user" aria-hidden="true"></i>
          </div>
    			<div class="fr">
    					<input type="text" name="age" placeholder="enter the age"
              class="textBox" autofocus="on" required>
    			</div>
    			<div class="clr"></div>
    		</div>

    		<!---Gender----->
    		<div class="box radio">
          <label for="gender" class="fl fontLabel"> GENDER </label>
    				<input type="radio" name="genders" value="Male" required> Male &nbsp; &nbsp; &nbsp; &nbsp;
    				<input type="radio" name="genders" value="Female" required> Female
    		</div>
    		<!---Gender--->
            <div class="box radio">
          <label for="gender" class="fl fontLabel"> BLOOD GROUP </label>
    				<input type="radio" name="blood" value="A+" required> A+
    				<input type="radio" name="blood" value="A-" required> A-
                    <input type="radio" name="blood" value="B+" required> B+
                    <input type="radio" name="blood" value="B-" required> B-
                    <input type="radio" name="blood" value="AB+" required> AB+
                    <input type="radio" name="blood" value="AB-" required> AB-
                    <input type="radio" name="blood" value="O+" required> O+
                    <input type="radio" name="blood" value="O-" required> O-
    		</div>
            <div class="box">
          <label for="secondName" class="fl fontLabel"> ALTERNATE EMAIL</label>
          <div class="fl iconBox"><i class="fa fa-envelope" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="text" required  name="altermail"
              placeholder="enter the email id" class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
            <div class="box">
          <label for="phone" class="fl fontLabel"> MOBILE NUMBER </label>
    			<div class="fl iconBox"><i class="fa fa-phone-square" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="text" required name="altermob" maxlength="10" placeholder="enter the mobile number" class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>


    		<!--Terms and Conditions------>
    		<div class="box terms">
    				<input type="checkbox" name="Terms" required> &nbsp; I accept the terms and conditions
    		</div>
    		<!--Terms and Conditions------>



    		<!---Submit Button------>
    		<div class="box" style="background: #2d3e3f">
    				<input type="Submit" name="submit" class="submit" value="SUBMIT">
    		</div>
    		<!---Submit Button----->
      </form>
  </div>
  <!--Body of Form ends--->
  </body>
</html>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "accident";

    $conn = mysqli_connect($servername, $username, $password, $db);
    //include ((header('location:vehicle.php')));
    if(!$conn){
        die("Connection failed: ".mysqli_connect_error());
    }
    
    if(isset($_POST['submit'])){
      $uname = $_POST['username'];
      $em = $_POST['emailid'];
      $vnum = $_POST['vnumber'];
      $vtype = $_POST['vehicletype'];
      $vehidate = $_POST['vdate'];
      $uaddress = $_POST['address'];
      $uage=$_POST['age'];
      $ugender=$_POST['genders'];
      $ublood=$_POST['blood'];
      $amail= $_POST['altermail'];
      $amob = $_POST['altermob'];
        
      $insert_sql = "INSERT INTO accidentdb2(username,emailid,vnumber,vehicletype,vdate,address,age,genders,blood,altermail, altermob)
      VALUES('$uname','$em','$vnum','$vtype','$vehidate','$uaddress','$uage','$ugender','$ublood', '$amail','$amob')";        
      if(!mysqli_query($conn, $insert_sql)) {
        echo "Error: " . $insert_sql . "<br>" . mysqli_error($conn);
      }
    }
    mysqli_close($conn);
?>
