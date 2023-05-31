<?php
$connect=mysqli_connect("localhost","root","","user1_db");
 
if (isset($_POST['submit'])) {
    $username=$_POST['username'];
    $password=$_POST['mypassword'];
    $emailid=$_POST['emailid'];
    $dateofbirth=$_POST['dateofbirth'];
    $address=$_POST['address'];
    $age=$_POST['age'];
    $genders=$_POST['genders'];
    $blood=$_POST['blood'];
    $phonenumber=$_POST['phonenumber'];

    $query="INSERT INTO `accidentdb1`(`Name`,`Vehicle No`,`Email id`,`DOB`,`Address`,`Age`,`Gender`,`BloodGroup`,`Mobile number`) 
    VALUES('".$username."','".$password."','".$emailid."','".$dateofbirth."','".$address."','".$age."','".$genders."','".$blood."','".$phonenumber."')";

    $result=mysqli_query($connect,$query);
    if($result) {
        echo "<script>alert('You have successfully registered)</script>";
    }
    else
    {
        echo "<script>alert('failed register')</script>";    
    }
}
?>
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
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <section class="container my-2 bg-dark w-50 text-light p-2">
                    <form class="row g-3 p-3" method="post" action="vehicle.php" onsubmit="return validateForm()">
                        <div class="col-md-6">
                            <label for="validationDefault01" class="form-label">Name</label>
                            <input type="text" class="form-control" id="validationDefault01" name="username" placeholder="enter name" required>
                          </div>
                        <div class="col-md-6">
                            <label for="validationDefault02" class="form-label">Password</label>
                            <input type="text" class="form-control" id="inputPassword4" name="mypassword" placeholder="minimum 7 characters" required>
                        </div>
                        <div class="col-md-6">
                          <label for="inputEmail4" class="form-label">Email id</label>
                          <input type="email" class="form-control" id="inputEmail4" name="emailid" placeholder="ex:wwwname@gmail.com" required>
                        </div>
                        <div class="col-md-6">
                          <label for="inputPassword4" class="form-label">DOB</label>
                          <input type="date" class="form-control" id="inputDate"  name="dateofbirth" placeholder="DateofBirth" required>
                        </div>
                        <div class="col-12">
                          <label for="inputAddress" class="form-label">Address</label>
                          <input type="text" class="form-control" id="inputAddress" name="address" placeholder="1234 Main St">
                        </div>
                        <div class="col-12">
                          <label for="inputAddress2" class="form-label">Age</label>
                          <input type="text" class="form-control" id="inputAge"  name="age" placeholder="Enter your age" initialized="1" required>
                        </div>
                        <div class="col-md-4">
                          <label for="inputCity" class="form-label">Gender</label>
                          <input type="text" class="form-control" id="inputGender" name="genders" placeholder="Male/Female/Other" required>
                        </div>
                        <div class="col-md-4">
                          <label for="inputState" class="form-label">BloodGroup</label>
                          <select id="inputState" name="blood" class="form-select">
                            <option selected>Choose...</option>
                            <option value="A+">A+</option>
                            <option value="B+">B+</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="A-">A-</option>
                            <option value="B-">B-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                          </select>
                          
                        </div>
                        <div class="col-md-4">
                          <label for="inputZip" class="form-label">Mobile number</label>
                          <input type="tel" class="form-control" id="input" name="phonenumber" placeholder="Enter your mobile number" length="10" required>
                        </div>
                        <div class="col-12">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                I accept the Privacy Policy
                            </label>
                          </div>
                        </div>
                        <div class="col-12">
                        <input type ="submit" class="btn btn-primary" name="submit">
                          <!--<button type="submit" class="">Sign in</button>-->
                        </div>
                      </form>
                   </section>
                 
            </div>
        </header>
        <script>
            function validateForm()
            {

                        var x = document.forms["vehicleform"]["uname"].value;
                        var z= document.forms["vehicleform"]["mail"].value;
                        var a= document.forms["vehicleform"]["phnum"].value;
                        var phno=/^\d{10}$/;
                        var alphaexp=/^[a-zA-Z\s]+$/;
                        var mailExp = /^([a-z0-9_]+)@([a-z]+).([a-z]{2,5})$/;
                        /*if(!p.match(passexp))
                        {
                            alert("invalid password.It must have one number,one upper case,one lowercase,and atleast 8 or more characters");
                        }*/
                        if(x==" ")
                        {
                            alert("Enter valid username contains alphabets a-z,A-Z,-");
                        }
                        if (!x.match(alphaexp))
                        {
                        alert("Invalid Name");
                        return false;
                        }
                        if(!a.match(phno))
                        {
                        alert("Invalid Phone number");
                        return false;
                        }
                        if(!z.match(mailExp))
                        {
                        alert("Invalid Mail Id");
                        return false;
                        }       
            }
        </script>
        </body>
        </html>