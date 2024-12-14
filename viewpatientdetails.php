<?php
include "sidebarmenu.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Details</title>
    <style>
        body {
            background-color: #F0F3FF;
        }
        .container {
            background-color:#fff;
            padding: 20px;
            border-radius: 8px;
            margin-left: 22%;

            box-shadow: 0 0 10px rgba(0, 0, 0, 5.1);
        }
        h2{
            text-align: center;
            color: #fff;
            letter-spacing: 2px;
            background-color: #A0153E;
            line-height: 50px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ccc;
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
            background-color: #F0F3FF;
            color:#000000;
            margin-top: 20px;
            margin-left:45%;
            padding: 5px;
            width: 50px;
            border:2px solid #A0153E;

        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Patient Details</h2>
        <div class="filter">
            <form method="GET" action="">
                
                 <label for="invoiceno" class="label">Enter Patient ID:
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
                	<th>Id</th>
                    <th>Patient Name</th>
                    <th>DoB</th>
                    <th>Gender</th>
                    <th>Phone</th>
                    <th>area</th>
                    <th>Emergency Contact</th>
                    <th>Patient IN/OUT</th>
                   </tr>
            </thead>
            <tbody>
                <?php
        include "./backend/dbconfig.php";

        $sql="SELECT * FROM registration";

        $result=mysqli_query($conn,$sql);
         if ($result->num_rows > 0) {
                    // Output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["name"] . "</td>";
                        echo "<td>" . $row["dob"] . "</td>";
                        echo "<td>" . $row["gender"] . "</td>";
                        echo "<td>" . $row["phone"] . "</td>";
                        echo "<td>" . $row["area"] . "</td>";
                        echo "<td>" . $row["emergencyno"] . "</td>";
                        echo "<td>" . $row["inorout"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>No Registration found</td></tr>";
                }
                $conn->close();
                ?>
                      
            </tbody>
        </table>
        <div class="text-center">
            <button onclick="window.print()" class="btn btn-primary">print</button>
        </div>
    </div>
</body>
</html>