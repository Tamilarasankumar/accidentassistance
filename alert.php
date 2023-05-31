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
        <link href="css/alertcss.css" rel="stylesheet" />
           
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
              <!--  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>-->
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="about.html">ABOUT US</a></li>
                        <li class="nav-item"><a class="nav-link" href="siginnew.php">SIGN OUT</a></li>
                        <li class="nav-item"><a class="nav-link" href="index_home.html">HOME</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                        <li><a class="nav-link" href="https://www.google.com/maps/"><input type="submit" placeholder="Search nearby hospital.." id="searchbtn"
                         onclick="display()" value="search nearby hospital"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Welcome To Accident Assistance Page!</div>                
                <div class="button-box">
                    <h2>Enter the vehicle number</h2>
                    <form name="alertform" class="input-group-login" method="post" action="mail1.php" 
                    onsubmit="onalert()">
                        <centre><input type="text" id="vnum" name="vnumber" placeholder="TN 00 CD 1100"></centre><br>
                        <centre><input class="btn btn-primary btn-xl text-uppercase" type="submit" id="alertbtn" name="alert_submit_ct" 
                        ></centre><br>
                    </form>
                </div>
            </div>
        </header>
          <!--<div class="navbar">
                    <h1>ACCIDENT ASSISTANCE</h1>
                    <nav>
                        <ul id="MenuItems">
                            <li><a href="home.html">HOME</a></li>
                            <li><a href="about.html">ABOUT US</a></li>
                            <li><a href="siginnew.php">SIGN OUT</a></li>
                            <li><input type="submit" placeholder="Search nearby hospital.." id="searchbtn" onclick="display()"
                            >search</button></li>
                        </ul>
                    </nav>
          </div>
            <div class="form-box">
                <div class="button-box">
                <h2>Enter the vehicle number</h2>
                <form name="signupform" class="input-group-login" method="post"  
                onsubmit="alert()" action="alert.php">
                    <centre><input type="text" id="vnum" name="vnum" placeholder="TN 00 CD 1100"></centre><br>
                    <br> <input type ="submit" class="button-box" name="alert_submit_ct"></a>
                </form>
            </div>-->
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
function display()
{
    var axios = require('axios');

var config = {
  method: 'get',
  url: 'https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=-33.8670522%2C151.1957362&radius=1500&type=restaurant&keyword=cruise&key=AIzaSyAwi2MgwQWqLboKCcmb9ZAT6UsdfQsw1TY',
  headers: { }
};

axios(config)
.then(function (response) {
  console.log(JSON.stringify(response.data));
})
.catch(function (error) {
  console.log(error);
});
}
function onalert()
{
    alert("DETAILS FOUND!!!");
}


</script>
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
    if(isset($_POST['vnumber']))
    {
        $vehnum = $_POST['vnumber'];
        $uaddress = $_POST['address'];
        $uage=$_POST['age'];
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
        if(!mysqli_query($conn, $insert_sql))
         {
            echo "Error: " . $insert_sql . "<br>" . mysqli_error($conn);
        }
           
    }
    mysqli_close($conn);   
  /* $to_email="SELECT * FROM vehicle where vnum=''";
    $result = mysqli_query($conn, $extract_sql);
$to_email = 'name @ company . com';
$subject = 'Testing PHP Mail';
$message = 'This mail is sent using the PHP mail function';
$headers = 'From: noreply @ company . com';
mail($to_email,$subject,$message,$headers);*/
?>