<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@500&display=swap" rel="stylesheet">
</head>
<body>
<?php include('navbar.php'); ?>
    <style>
        body{
            
            margin:0;
            padding:0;
            background: url(bg1.jpg);
            background-position: center;
            background-size: cover;
            background-image: no-repeat;
            font-family: 'Baloo Bhai 2', cursive;
        }
        .container{
            display: flex;
            flex-direction: column;
            margin: 12px auto;
            color: white;
            
        }
        .col{
            border: 2px solid aqua;
            padding: 5px 5px;
            font-weight: bold;
            font-size: 25px;
            text-align: center;
            width: 50%;
            margin: 12px auto;
            height: 420px;
            background: black;
            opacity: 0.7;
            border-radius: 15px;
        }
        .coll{
            border: 2px solid aqua;
            padding: 5px 5px;
            font-weight: bold;
            font-size: 25px;
            text-align: center;
            width: 50%;
            margin: 12px auto;
            height: 450px;
            background: black;
            opacity: 0.7;
            border-radius: 15px;

        }
        .col:hover{
            background: black;
            color: white;
        }

    </style>
    <div class="container">
        <div class="col">
            <h1>OUR MISSION</h1>
            Attracting deposits and developing them, in order to achieve the best financial return for shareholders and depositors. Expanding banking activities to include new sectors and economic activities; such as agriculture, industry, trade and services. Provide financing for investors. Provide security for depositors.
        </div>
        <div class="coll">
            <h1>OUR VISION</h1>
            To be a financially viable, independent community bank that is committed to improving the quality of life of the communities we serve. To earn the loyalty of employees, customers and the community by operating with integrity and fairness at all time.
        </div>
        <div class="coll">
            <h1>STRATEGIC GOALS</h1>
            Preparation of individual service packages for target sectors, conducting industry campaigns;
Introduction of new products and services, adaptation and improvement of existing products and services to better meet the needs and desires of our customers;
Expansion of electronic banking services.Maintaining the position of the financial market and improving the Bank`s image.
        </div>
    </div>   
</body>
</html>