<?php
include "sidebarmenu.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory History</title>
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
            line-height: 50px;
            background-color: #A0153E;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            text-align: center;
        }
        table, th, td {
            border: 1px solid #ccc;
            text-align: center;
        }
        th, td {
            padding: 10px;
            text-align: left;
            color: #000000;
            letter-spacing: 2px;
        }
        th {
            background-color:#F0F3FF;
            text-align: center;
        }
        td{
            background-color:#F0F3FF;
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
            background-color: #A0153E;
            width: 100px;
            padding: 7px;
            border-radius: 5px;
        }
        .filter button:hover{
             box-shadow: 0 0 10px rgba(0, 0, 0, 5.1);
        }
        .container .text-center .btn{
            background-color: #F0F3FF;
            color: #000000;
            margin-top: 20px;
            margin-left:45%;
            padding: 5px;
            width: 50px;
            border-radius: 10px;
            border: 2px solid #A0153E;

        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Inventory</h2>
        <div class="filter">
            <form method="GET" action="">
                
                 <label for="mname" class="label">Enter Medicine Name:
                </label>
                <input type="text" class="a1" name="mname" id="mname">
                <label for="batchno" class="label">Enter Batch No:</label>
                <input type="text" class="a2" name="batchno" id="batchno">

                <button type="submit">Filter</button>
            </form>
        </div>

        <table>
            <thead>
                <tr>
                    <th>S.no</th>
                    <th>Medicine Name</th>
                    <th>Batch No</th>
                    <th>Expiry Date</th>
                    <th>quantity</th>
                    <th>Supplier Name</th>
                    <th>Cost</th>
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