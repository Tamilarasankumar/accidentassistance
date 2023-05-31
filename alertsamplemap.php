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
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="about.html">ABOUT US</a></li>
                        <li class="nav-item"><a class="nav-link" href="siginnew.php">SIGN OUT</a></li>
                        <li class="nav-item"><a class="nav-link" href="index_home.html">HOME</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                        <li><a class="nav-link" href="maps.html"><input type="submit" placeholder="Search nearby hospital.." id="searchbtn"
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
                    <form name="alertform" class="input-group-login" method="post" action="alert.php" 
                    onsubmit="alert()">
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
  url: 'https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=-33.8670522%2C151.1957362&radius=1500&type=restaurant&keyword=cruise&key=AIzaSyD_S5knwUw7hIPPRt0kFFBlrNBnBNW85-Y',
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

</script>
<?php
 $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "user3_db";
    $mysqli = new mysqli($servername, $username, $password, $database);
    $query="select v.username,v.emailid,v.altermob,v.altermail,v.vnumber 
      from alert a,accidentdb2 v where a.vnumber = v.vnumber";
    if(isset($_POST['alert_submit_ct'])) {
     echo '<table border="1" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">USERNAME</font> </td> 
          <td> <font face="Arial">MAIL ID</font> </td> 
          <td> <font face="Arial">PHONE NUMBER</font> </td> 
          <td> <font face="Arial">ALTERNATE MAILID</font> </td> 
          <td> <font face="Arial">VEHICLE NUMBER</font> </td> 

      </tr>';

if ($result = $mysqli->query($query)) 
{

  while ($row = $result->fetch_assoc())
   {
      $field1name = $row["username"];
      $field2name = $row["emailid"];
      $field3name = $row["altermob"];
      $field4name = $row["altermail"];
      $field5name = $row["vnumber"];

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
    }

/*freeresultset*/

?>

 <!--<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <p class="col-md-4 mb-0 text-muted">&copy; 2022 Company, Inc</p>
    
        <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
          <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
        </a>
    
        <ul class="nav col-md-4 justify-content-end">
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
        </ul>
  </footer>-->
</body>
</html>