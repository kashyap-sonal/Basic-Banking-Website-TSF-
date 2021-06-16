<!-- 

THIS PAGE IS FOR TRANSACTION OF MONEY FROM ONE BANK ACCOUNT TO ANOTHER.
ON THIS PAGE,
user has to enter the account no of payer, payee and amount that needs to be transferred. 
Then click proceed to confirm transaction. If the transfer is successful then user will be shown details
of the two account else they will be shown errors. 
-->
<?php
//CONNECTING TO THE DATABASE
    $servername = "localhost:3306";
    $username = "root"; 
    $password = ""; 
    $dbname = "spark_bank"; 
    $conn = new mysqli($servername, $username, $password, $dbname); 
    //IF CONNECTION IS NOT SUCCESSSFUL
    if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error); 
    } 
?>
<html>
<head> 
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@500&display=swap" rel="stylesheet">
    <title>Transaction Page</title>
    <style>
        *{
        }
    body {
        
        margin:0;
        padding:0;
        font-size:25px;
        background-image: url('bg3.jpg');
	    background-repeat: no-repeat; 
	    background-size: cover;
        font-family: 'Baloo Bhai 2', cursive;
         } 
    .transferMoney{
        color:white;
        background:black;
        padding: 20px;
        display: block;
        position:fixed;
        margin: 10% auto;
        left: 33%;
        border-radius: 10px;
        text-align: center;
        width: 30%;
        height: 360px;        
        opacity: 0.7;
    }
    .transferMoney input{
        width: 284px;
        padding: 5px 5px;
        margin: 5px 5px;
    }
    table{
        color: white;

    }
    .btn{
        color:white;
        background: black;
        border-radius: 15px;
        cursor: pointer;        
        padding-bottom: 15px;
        font-family: 'Baloo Bhai 2', cursive;     
        
    }
    .btn:hover{
        background: rgb(14, 65, 27);
        color:rgb(230, 139, 139);
        font-family: 'Baloo Bhai 2', cursive;
        font-weight: bolder;
       
    }

 
    </style>   
    <script type="text/javascript">
    
        if(window.history.replaceState){
            
            window.history.replaceState(null, null, window.location.href); 
        } 
    </script>  
</head>
<!-- BODY-->
<body>
<!-- INCLUDING NAVBAR-->
<?php include('navbar.php'); ?>
<!-- Creating Form to collect information related to do transaction-->
<div class = 'transferMoney'>
    <h1>Transfer Money</h1>
    <!-- Form's action attribute points to this page only-->
    <!-- Note: To redirect page to samee php write "php echo $_SERVER['PHP_SELF'];" in action attribute-->
    <form name="myForm" action="ResultPage.php"  onsubmit="return validateForm()" method="post">
    <!-- To structurise form it is put in a table--onsubmit="return validateForm()"-->
        <table id="table1">
        <!-- ROW 1 : PAYER ACCOUNT ID IS ASKED-->
        <tr>
            <td>Payer Account No.</td>
            <td class="dt"><input type="number" name="payerID"  min=100 required><td>
        </tr>
        <!-- ROW 2 : PAYEE ACCOUNT ID IS ASKED-->
        <tr>
            <td>Payee Account No.   </td>
            <td class="dt"><input type="number" name="payeeID" min=100 required ><td>
        </tr>
        <!-- ROW 3 : AMOUNT TO BE TRANSFERRED IS ASKED-->
        <tr>
            <td>Amount (in Rupees)</td>
            <td class="dt"><input type="number" name="amount" min=1 required><td>
        </tr>
        <!-- ROW 4 : BUTTON TO ASK TO CONFIRM TRANSACTION-->
        <tr>
            <td><input type= "hidden" name= "form_submitted" value="1"></td>
            <td> <input type="submit" class="btn" value="PROCEED"><td>
        </tr>
        </table>
    </form>
</div>
 <!-- FORM / TABLE ENDS HERE WITH DIV TAG-->
 <script>
 
 function validateForm() {
            var x = document.forms["myForm"]["payerID"].value;
            var y = document.forms["myForm"]["payeeID"].value;
            var z = document.forms["myForm"]["amount"].value;
            var regex=/^[0-9]+$/;

            
            if (x == "" || y=="" || z=="") {
                alert("Fill it!!");
                return false;
            }

            //var num = z>0?1:-1;
            if((Math.sign(z)==-1)||(Math.sign(z)==-0)||z==0){
                alert("Enter a valid amount to do transaction");
                return false;
            }
            if(isNaN(z)|| !x.match(regex)|| !y.match(regex) ||!z.match(regex)){
                alert("Enter correct input!");
                return false;
            }
            
           // var data = <?php //echo json_encode("42", JSON_HEX_TAG); ?>;
        }           
 </script>
</body>
</html>
