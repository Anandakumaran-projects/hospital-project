<?php
    include "sidebarmenu.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice History</title>
    <style>
        body {
            background-color:#F0F3FF;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            margin-left: 22%;

            box-shadow: 0 0 10px rgba(0, 0, 0, 5.1);
        }
        h2 {
            text-align: center;
            color: #fff;
            background-color: #A0153E;
            line-height: 50px;
            letter-spacing: 2px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        input{
    border-color: #A0153E;
    border-radius: 5px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    background-color: #F0F3FF;
}
select{
    border-color: #A0153E;
    border-radius: 5px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    background-color: #F0F3FF;
}
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 10px;
            text-align: left;
            color: #000000;
            background-color: #F0F3FF;
            letter-spacing: 2px;
        }
        th {
            background-color:#F0F3FF;
            text-align: center;
        }
        td{
            background-color: #F0F3FF;
            text-align: center;
        }
        .filter {
            margin-bottom: 20px;
            margin-left: 20%;
        }
        .filter .label{
        	color: #000000;
        	letter-spacing: 2px;
        }
        .filter input{
        	padding: 8px;
        }
        .filter button{
        	color: #fff;
        	background-color:#A0153E;
        	width: 100px;
        	padding: 7px;
        	border-radius: 5px;
        }
        .filter button:hover{
        	 box-shadow: 0 0 10px rgba(0, 0, 0, 5.1);
        }
        .container .text-center .btn{
            background-color:#F0F3FF;
            color: #000000;
            margin-top: 20px;
            margin-left:50%;
            padding: 5px;
            border: 2px solid #A0153E;
            border-radius: 10px;

        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Invoice History</h2>
        <div class="filter">
            <form method="GET" action="">
                
                 <label for="invoiceno" class="label">Enter invoice No:
                </label>
                <input type="text" class="a1" name="mname" id="mname">
                <label for="name" class="label">Enter Patient Name:</label>
                <input type="text" class="a2" name="name" id="name">

                <button type="submit">Filter</button>
            </form>
        </div>

        <table>
            <thead>
                <tr>
                	<th>S.no</th>
                    <th>Invoice No</th>
                    <th>Patient Name</th>
                    <th>Medicine Name</th>
                    <th>Batch No</th>
                    <th>Expiry Date</th>
                    <th>quantity</th>
                    <th>Mrp</th>
                    <th>Total</th>
                    <th>payment type</th>
                   </tr>
            </thead>
            <tbody>
               
            </tbody>
        </table>
        <div class="text-center">
            <button onclick="window.print()" class="btn btn-primary">print</button>
        </div>
    </div>
</body>
</html>