<?php
include "sidebarmenu.php";
include "./backend/dbconfig.php";
  
  $sql="SELECT count(*) FROM employee";

  $result=$conn->query($sql);
  if ($result->num_rows > 0) {
    $row = mysqli_fetch_array($result);
    echo "<script>document.getElementById('row_count').value = '" . $row[0] . "';</script>";
}
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>
</head>
<style type="text/css">
  body{
    background-color: #F0F3FF;
  }
  .card-container{
    display: flex;
    flex-direction: row;
    margin-left: 22%;
    margin-top: 30px;
    justify-content: space-evenly;
  }
  .card{
    width: 200px;
    height: 150px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(160, 21, 62, 0.5);
  }
  .card:hover{
    box-shadow: 0 0 10px rgba(160, 21, 62, 1.5);
  }
  .card-header{
    margin-left: 10px;
  }
  .card-body{
    margin-left: 10px;
  }
  .img{
    margin-top: 20px;
  }
  .card-header h2{
    font-size: 20px;
    font-family: poppins,sans-serif;
  }
  .card-body p{
    font-size: 15px;
    font-family: poppins,sans-serif;
  }
  .card-container1{
    display: flex;
    flex-direction: row;
    margin-left: 22%;
    margin-top: 30px;
    justify-content: space-evenly;
  }
  .card{
    width: 200px;
    height: 150px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(160, 21, 62, 0.5);
  }
  .card:hover{
    box-shadow: 0 0 10px rgba(160, 21, 62, 1.5);
  }
  .card-header{
    margin-left: 10px;
  }
  .card-body{
    margin-left: 10px;
  }
  .img{
    margin-top: 20px;
  }
  .card-header h2{
    font-size: 20px;
    font-family: poppins,sans-serif;
  }
  .card-body p{
    font-size: 15px;
    font-family: poppins,sans-serif;
  }
  
  .chart{
    margin-top: 20px;
    margin-left: 24%;
    width: 71%;
    height: 200px;
    background-color:#CCD3CA;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(160, 21, 62, 0.5);
    display: flex;
    flex-direction: row;
    padding-left: 50px;

  }
  .chart:hover{
    box-shadow: 0 0 10px rgba(160, 21, 62, 1.5);
  }
  .bar{
    width: 50px;
    margin-right: 10px;
  }
  .content{
    margin-left: 300px;
    margin-top: 40px;
  }
  .align{
    margin-bottom: 3px;
  }
  .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            margin-left: 23.5%;
            margin-right: 20px;
            margin-top: 20px;
            margin-bottom: 10px;
            box-shadow: 0 0 10px rgba(162, 21, 62, 1.1);
        }
        .container:hover{
          box-shadow: 0 0 10px rgba(162, 21, 62, 5.1);
        }
  table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 0px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
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
</style>
<body>
  <div class="card-container">
  <div class="card" id="a1">
    <div class="card-header">
      <img src="icons8-employee-26.png" class="img"> <!-- Add an icon here -->
      <h2>Total Employee</h2>
    </div>
    <div class="card-body">
      <?php
                    $count="SELECT * FROM employee";
                    $totalcount=mysqli_query($conn,$count);

                    if($total=mysqli_num_rows($totalcount))
                    {
                        echo '<h4 class="mb-0"> '. $total .'</h4>';
                    }
                    else{
                        echo '<h4 class="mb-0"> No Data </h4>';
                    }
                    ?>
    </div>
  </div>
  <div class="card" id="a2">
    <div class="card-header">
      <img src="icons8-doctor-26.png" class="img"><!-- Add an icon here -->
      <h2>Doctors</h2>
    </div>
    <div class="card-body">
      <?php
                    $count="SELECT * FROM employee WHERE category='doctor'";
                    $totalcount=mysqli_query($conn,$count);

                    if($total=mysqli_num_rows($totalcount))
                    {
                        echo '<h4 class="mb-0"> '. $total .'</h4>';
                    }
                    else{
                        echo '<h4 class="mb-0"> No Data </h4>';
                    }
                    ?>
    </div>
  </div>
  <div class="card" id="a3">
    <div class="card-header">
      <img src="icons8-nurse-26.png" class="img">
      <h2>Nurse</h2>
    </div>
    <div class="card-body">
      <?php
                    $count="SELECT * FROM employee WHERE category='nurse'";
                    $totalcount=mysqli_query($conn,$count);

                    if($total=mysqli_num_rows($totalcount))
                    {
                        echo '<h4 class="mb-0"> '. $total .'</h4>';
                    }
                    else{
                        echo '<h4 class="mb-0"> No Data </h4>';
                    }
                    ?>
    </div>
  </div>
  <div class="card" id="a4">
    <div class="card-header">
      <img src="icons8-lab-technician-26.png" class="img"> <!-- Add an icon here -->
      <h2>Lab-Technician</h2>
    </div>
    <div class="card-body">
      <?php
                    $count="SELECT * FROM employee WHERE category='lab techician'";
                    $totalcount=mysqli_query($conn,$count);

                    if($total=mysqli_num_rows($totalcount))
                    {
                        echo '<h4 class="mb-0"> '. $total .'</h4>';
                    }
                    else{
                        echo '<h4 class="mb-0"> No Data </h4>';
                    }
                    ?>

    </div>
  </div>
  <div class="card" id="a5">
    <div class="card-header">
      <img src="icons8-appointment-scheduling-26.png" class="img"> <!-- Add an icon here -->
      <h2>Appointments</h2>
    </div>
    <div class="card-body">
      <?php
                    $count="SELECT * FROM appointment";
                    $totalcount=mysqli_query($conn,$count);

                    if($total=mysqli_num_rows($totalcount))
                    {
                        echo '<h4 class="mb-0"> '. $total .'</h4>';
                    }
                    else{
                        echo '<h4 class="mb-0"> No Data </h4>';
                    }
                    ?>
    </div>
  </div>
</div>
<div class="card-container1">
  <div class="card" id="a6">
    <div class="card-header">
      <img src="icons8-purchase-32.png" class="img"> <!-- Add an icon here -->
      <h2>Purchase</h2>
    </div>
    <div class="card-body">
      <?php
                    $sql2="SELECT SUM(total) AS total FROM pharmacy ORDER BY sno DESC LIMIT 1";
$sub=mysqli_query($conn,$sql2);
if($sub){

    $row=mysqli_fetch_assoc($sub);
    $total=isset($row['total']) ? $row['total'] : 0;
    echo '<h4 class="mb-0"> Rs &nbsp;'. $total .'</h4>';
    
}else{
    $minus=0;
}
                    ?>
    </div>
  </div>
  <div class="card" id="a7">
    <div class="card-header">
      <img src="icons8-expense-26.png" class="img"> <!-- Add an icon here -->
      <h2>Expenses</h2>
    </div>
    <div class="card-body">
      <?php
                    $sql2="SELECT SUM(expamount) AS total FROM expense ORDER BY sno DESC LIMIT 1";
$sub=mysqli_query($conn,$sql2);
if($sub){

    $row=mysqli_fetch_assoc($sub);
    $total=isset($row['total']) ? $row['total'] : 0;
    echo '<h4 class="mb-0"> Rs &nbsp;'. $total .'</h4>';
    
}else{
    $minus=0;
}
                    ?>
    </div>
  </div>
   <div class="card" id="a8">
    <div class="card-header">
      <img src="icons8-users-26.png" class="img"> <!-- Add an icon here -->
      <h2>Registration</h2>
    </div>
    <div class="card-body">
      <?php
                    $count="SELECT * FROM registration";
                    $totalcount=mysqli_query($conn,$count);

                    if($total=mysqli_num_rows($totalcount))
                    {
                        echo '<h4 class="mb-0"> '. $total .'</h4>';
                    }
                    else{
                        echo '<h4 class="mb-0"> No Data </h4>';
                    }
                    ?>
    </div>
  </div>
  <div class="card" id="a7">
    <div class="card-header">
      <img src="icons8-main-26.png" class="img"> <!-- Add an icon here -->
      <h2>Maintainence</h2>
    </div>
    <div class="card-body">
      <?php
                    $sql2="SELECT SUM(workordercost) AS total FROM maintainence  ORDER BY sno DESC LIMIT 1";
$sub=mysqli_query($conn,$sql2);
if($sub){

    $row=mysqli_fetch_assoc($sub);
    $total=isset($row['total']) ? $row['total'] : 0;
    echo '<h4 class="mb-0"> Rs &nbsp;'. $total .'</h4>';
    
}else{
    $minus=0;
}
                    ?>
    </div>
  </div>
  <div class="card" id="a7">
    <div class="card-header">
      <img src="icons8-utility-26.png" class="img"> <!-- Add an icon here -->
      <h2>Utilities</h2>
    </div>
    <div class="card-body">
      <?php
                    $sql2="SELECT SUM(paymentamount) AS total FROM utility  ORDER BY sno DESC LIMIT 1";
$sub=mysqli_query($conn,$sql2);
if($sub){

    $row=mysqli_fetch_assoc($sub);
    $total=isset($row['total']) ? $row['total'] : 0;
    echo '<h4 class="mb-0"> Rs &nbsp;'. $total .'</h4>';
    
}else{
    $minus=0;
}
                    ?>
    </div>
  </div>
</div>
  
 <div class="chart">
  <div class="bar" style="background-color: red; height:5px"></div>
    <div class="bar" style="background-color: green; height: 120px;"></div>
      <div class="bar" style="background-color: blue; height: 150px;"></div>
        <div class="bar" style="background-color:#229799; height: 130px;"></div>
          <div class="bar" style="background-color: #201E43; height: 100px;"></div>
          <div class="content">
            <div class="align" style="color: red;">Employee</div>
            <div class="align" style="color:green;">Doctor</div>
            <div class="align" style="color:blue;">Nurse</div>
            <div class="align" style="color:#229799;">Lab Technician</div>
            <div class="align" style="color:#201E43;">Appointments</div>
          </div>
          </div>
          <div class="container">
          <table id="table">
            <thead>
              <tr>
                <th>Appointment ID</th>
                <th>Patient Name</th>
                <th>Type</th>
                <th>Appointment Date</th>
                <th>Doctor Name</th>
                <th>Time</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
               <?php
        include "./backend/dbconfig.php";

        $sql="SELECT * FROM appointment";

        $result=mysqli_query($conn,$sql);
        
                if ($result->num_rows > 0) {
                    // Output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["appid"] . "</td>";
                        echo "<td>" . $row["name"] . "</td>";
                        echo "<td>" . $row["type"] . "</td>";
                        echo "<td>" . $row["appdate"] . "</td>";
                        echo "<td>" . $row["docname"] . "</td>";
                        echo "<td>" . $row["time"] . "</td>";
                        echo "<td>" . $row["status"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>No Appointment found</td></tr>";
                }
                $conn->close();
                ?>
            </tbody>
          </table>
        </div>
</body>
</html>