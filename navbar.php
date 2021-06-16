<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@500&display=swap" rel="stylesheet">
<style>
    body{
        padding:0;
        margin: 0;
    }
.title {
  background-color: #dbb425;
}
#navbar{
    display: flex;
    align-items: center;
    position: sticky;    
}
#navbar::before{
    content: "";
    background-color: black;
    position: absolute;
    top:0px;
    left:0px;
    height: 100%;
    width:100%;
    z-index: -1;
    opacity: 0.7;
}
#navbar ul{
    display: flex;
    font-family: 'Baloo Bhai', cursive;
}

#navbar ul li{ 
    list-style: none;
    font-size: 1.3rem;
}

#navbar ul li a{
    color: white;
    display: block;
    padding: 2px 32px;
    border-radius: 20px;
    text-decoration: none;
}

#navbar ul li a:hover{
    color: black;
    background-color: white;
}
</style>
</head>
<body>
   <nav id="navbar">
    <ul>
    <li>
    <a href="index.php">Home</a>
    </li>
    <li>
    <a href="aboutus.php">About US</a>
    </li>
    <li>
    <a href="ViewCustomers.php">Customers Details</a>
    </li>
    <li>
    <a href="Transfer.php">Fund Transfer</a>
    </li>
    <li>
    <a href="RecordsPage.php">Transaction History</a>
    </li>
    </ul>
   </nav>
<body>
</html>

