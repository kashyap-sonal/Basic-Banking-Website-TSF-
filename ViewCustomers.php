<?php
    $servername = "localhost:3306";
    $username = "root"; 
    $password = ""; 
    $dbname = "spark_bank"; 
    $conn = new mysqli($servername, $username, $password, $dbname); 
    if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error); 
    } 
    //$sql = "SELECT * FROM customerinfo" ;
    $sql = "SELECT * FROM accountdetails" ;
    $result = $conn->query($sql);
?>
            
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Details</title>    
    <!-- CSS style sheet -->
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
    *{
        margin: 0;
        padding: 0;
    }
    
body{
    
    margin:0;
    padding:0;
	background-image: url('bg4.jpg');
	background-repeat: no-repeat; 
	background-size: cover;
}
 .container{
	width: 550px;
	padding: 4% 4% 4%;
	margin : auto;
	text-align: center;
	position:relative;
	top:50px;
	vertical-align: middle;
	background-color: black;
    color:white;
    border-radius:10px;
    opacity: 0.7;
}
input
{
	margin :5px;
}

#table{
    padding:5px;
    margin-right:5px;
}
    </style> 
</head>
<body>
  <!-- navbar -->
  <?php include('navbar.php'); ?>
       <div class="container">
            <h2 style="text-align: center">Customer Details</h2>
            <br>                   
            <table id="Table">
                <thead>
                    <tr>
                    <th colspan=3>S.No.</th>
                    <th colspan=3>Account No.</th>
                    <th colspan=3>Name</th>
                    <th colspan=3>E-Mail</th>
                    <th colspan=3>Balance</th>  
                    </tr>
                </thead>                     
                <?php
                while($row = $result->fetch_assoc()) { 
                ?> 
                <tr>
                    <td colspan=3><?php echo $row['sno']; ?></td>
                    <td colspan=3><?php echo $row['accID']; ?></td>
                    <td colspan=3><?php echo $row['name']; ?></td>
                    <td colspan=3><?php echo $row['email']; ?></td>
                    <td colspan=3><?php echo $row['balance']; ?></td>   
                </tr>
                <?php
                }
                $conn->close();
                ?> 
            </table>
        </div>
        <footer style="text-align: center">   
        </footer>
</body>
</html>


