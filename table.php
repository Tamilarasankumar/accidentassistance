<?php

require_once('config.php');
$query = "select *from accidentdb2";
$result=mysqli_query($conn,$query)
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
<title>vehicles</title>
<style>
    *{
        box-sizing:border-box;
    }
    .fluid{
        width: 1700px;
    }
    .table-responsive-lg{
        column-width: 1000;
    }
    body{
        margin: 0;
        background:whitesmoke;
    }
    nav{
        background: red;
        width: 100%;
        overflow: auto;
    }
    ul{
        margin:0;
        padding: 0;
        list-style: none;
    }
    li{
        float: left;
    }
    
   
</style> 
</head>
<body>
    <div class="fluid">
        <div class="mt-4 row justify-content-center">
            <div class="col-lg-30 col-md-25 col-sm-12 shadow p-5">
                <p class="display-4 text-center text-danger"><b>VEHICLE DETAILS</b></p>
                <div class="rows">
                   
                   <div class="text-right">
                       <a class="btn btn-danger mb-3" href="logout.php">
                         <i class="bi bi-box-arrow-right"></i> LOGOUT
                       </a>
                   </div>
                </div>      
                <div class="table-responsive-lg">
                    <table class="table table-dark table-hover">
                        <thead>
                            <tr>
                                <th>NAME</th>
                                <th>EMAILID</th>
                                <th>VEHICLE NO</th>
                                <th>VEHICLE TYPE</th>
                                <th>DATE</th>
                                <Th>ADDRESS</Th>
                                <th>AGE</th>
                                <th>GENDER</th>
                                <th>BLOOD</th>
                                <th>ALTERNATE MAILID</th>
                                <th>ALTERNATE MOBILE NO</th>
                                
                                
                            </tr>
                            <tr>
                            <?php
                             while($row=mysqli_fetch_assoc($result))
                                {
                            ?>
                                <td><?php echo $row['username']; ?></td>
                                <td><?php echo $row['emailid']; ?></td>
                                <td><?php echo $row['vnumber']; ?></td>
                                <td><?php echo $row['vehicletype']; ?></td>
                                <td><?php echo $row['vdate']; ?></td>
                                <td><?php echo $row['address']; ?></td>
                                <td><?php echo $row['age']; ?></td>
                                <td><?php echo $row['genders']; ?></td>
                                <td><?php echo $row['blood']; ?></td>
                                <td><?php echo $row['altermail']; ?></td>
                                <td><?php echo $row['altermob']; ?></td>
                            </tr>    
                            <?php
                                }
                            ?>  
                            
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                </div>     
            </div>
        </div>   
    </div> 
</body>
</html>