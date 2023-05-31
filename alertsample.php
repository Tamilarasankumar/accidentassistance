<html>
    <head>
        <title></title>
</head>
<body>
    <form action="alertsample.php" method="post">
<label>Subject of email:</label><br>
<input type="text" name="subject" id="subject"/><br>
<label>Body of email:</label><br>
<textarea name="body" id="body" rows="10" cols="35"></textarea><br>
<input type="submit" name=submit value="Submit"/>
</form>
</body>
</html>
<?php

//Block 1
$servername = "localhost";
$username = "root";
$password = "";
$db = "user1_db";
$table = "accidentdb1"; 

//Block 2
$from= 'tamilarasantamil102002@gmail.com';

//Block 3
global $subject;
if(isset($_POST["subject"])) 
$subject= $_POST['subject'];
if(isset($_POST["body"])) 
$body= $_POST['body'];

//Block 4
$conn = mysqli_connect($servername, $username, $password, $db);
if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}

//Block 5
$query= "SELECT * FROM $table";
$result= mysqli_query ($conn, $query) 
or die ('Error querying database.');

//Block 6
global $email;
while ($row = mysqli_fetch_array($result)) {
if(isset($_POST["first_name"]))    
$first_name= $row['username'];
if(isset($_POST["last_name"]))
$last_name= $row['vnumber'];
if(isset($_POST["email"]))
$email= $row['altermail'];

//Block 7
global $msg;
if(isset($_POST["msg"]))
$msg= "Dear $first_name $last_name,\n$body";
ini_set("SMTP","ssl://smtp.gmail.com");
ini_set("smtp_port","465");
mail($email, $subject, $msg, 'From:' . $from);
echo 'Email sent to: ' . $email. '<br>';
}

//Block 8
mysqli_close($conn);
?>