<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Accident Assistance System</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="vehicle.css" rel="stylesheet"/>
    </head>
    <body id="page-top">
        <header class="masthead">
            <div class="container">
              <div class="form">
                <section class="container my-2 bg-dark w-50 text-light p-2">
                    <form class="row g-3 p-3" action="vehicleform.php" method="post" onsubmit=" return validateForm()">
                    <h1 align="center">VEHICLE REGISTRATION FORM</h1>  
                        <div class="formGroup">
                            <label for="validationDefault01" class="form-label"><h5>NAME:</h5></label>
                            <input type="text" class="form-control" id="validationDefault01" name="username" placeholder="enter name" required autocomplete="off"> 
                          </div>
                          <div class="formGroup">
                            <label for="validationDefault02" class="form-label"><h5>EMAIL ID:</h5></label>
                            <input type="email" class="form-control" name="emailid" id="eid" placeholder="existing emailid" required autocomplete="off">
                          </div>
                          
                          <div class="formGroup">
                            <label for="inputEmail4" class="form-label"><h5>VEHICLE NUMBER:</h5></label>
                            <input type="text" class="form-control" name="vnumber" id="eid" placeholder="TN 00 AN 1100" required autocomplete="off">
                          </div>
                          <div class="formGroup">
                            <label for="inputPassword4" class="form-label"><h5>VEHICLE TYPE:</h5></label>
                            <select name="vehicletype" id="eid">
                              <option>Bike</option>
                              <option>Car</option>
                              <option>Auto</option>
                              <option>Bus</option>
                              <option>Truck</option>
                            </select>
                            <!--<input type="text" class="form-control" name ="vehicletype" id="eid" placeholder="Bike/Car/Auto/Lorry" required> -->
                          </div>
                        <div class="formGroup">
                          <label for="inputAddress" class="form-label"><h5>REGISTER DATE:</h5></label>
                          <input type="date" class="form-control" name="vdate" id="dob" placeholder="Vehicle register date" required>
                        </div>
                        <div class="formGroup">
                          <label for="inputAddress" class="form-label">Address</label>
                          <input type="text" class="form-control" id="inputAddress" name="address" placeholder="1234 Main St">
                        </div>
                        <div class="formGroup">
                          <label for="inputAddress2" class="form-label">Age</label>
                          <input type="text" class="form-control" id="inputAge"  name="age" placeholder="Enter your age" initialized="1" required>
                        </div>
                        <div class="formGroup">
                          <label for="inputCity" class="form-label">Gender</label>
                          <input type="text" class="form-control" id="inputGender" name="genders" placeholder="Male/Female" required>
                        </div>
                        <div class="formGroup">
                          <label for="inputblood" class="form-label">Blood Group</label>
                          <input type="text" class="form-control" id="inputblood" name="blood" placeholder="A+/O-/B+" required>
                        </div>
                        <div class="formGroup">
                          <label for="inputAddress2" class="form-label"><h5>ALTERNATE EMAIL:</h5></label>
                          <input type="email" class="form-control" name="altermail" id="mail" placeholder="Alternate email" required>
                        </div>
                        <div class="formGroup">
                          <label for="inputCity" class="form-label"><h5>ALTERNATE MOBILE NUMBER:</h5></label>
                          <input type="tel" class="form-control" name="altermob" id="phnum" placeholder="Alternate mobile number" length="10" required>
                        </div>
                        <div class="checkbox">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                              <h5>I accept the Privacy Policy</h5></label>
                          </div>
                        </div>
                        <div class="formGroup">
                        <input type ="submit" class="btn2" name="submit">
                          <!--<button type="submit" class="">Sign in</button>-->
                        </div>
                      </form>
                   </section>
              
            </div>
          </div>  
        </header>
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