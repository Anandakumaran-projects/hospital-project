<?php
include "sidebarmenu.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"> 
</head>
<style type="text/css">
	body{
	background-color:#F0F3FF;
}
.container{
	justify-content: center;
	margin-top: 5%;
	margin-left: 23%;
}
img{
	width:40px;
}

.row1{
	display: flex;
	flex-direction: row;
}
.card2{
	margin-left: 40px;
	background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 5.0);
}
.card3{
	margin-left: 40px;
	background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 5.0);
}
.card{
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 5.0);
}
.dashboard {
  width: 83%;
  height: 50vh;
  margin-left: 5px;
  background-color: #f9f9f9;
  padding: 20px;
  border: 1px solid #ddd;
  box-shadow: 0 0 10px rgba(0, 0, 0, 5.1);
}

.chart-container {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  align-items: center;
  margin-top: 20px;
}

.chart {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  align-items: flex-end;
  width: 80%;
}

.bar {
  margin: 10px;
  border-radius: 5px;
  transition: width 0.5s ease-in-out;
}

.labels {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  align-items: flex-start;
  width: 20%;
  padding-left: 20px;
}

.labels p {
  margin-bottom: 10px;
  font-size: 16px;
  color: #666;
}
</style>
<body>
	<form action="" method="">
		<div class="container">
			<div class="row1">
			<div class="card" style="width: 15rem;">
  <div class="card-body">
    <h5 class="card-title"><img src="users-line-solid.svg"></h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">Employee</h6>
    <p class="card-text">0</p>
    <a href="#" class="card-link">view employees</a>
  </div>
</div>
<div class="card2" style="width: 15rem;">
  <div class="card-body">
    <h5 class="card-title"><img src="calendar-check-solid.svg"></h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">Appointments</h6>
    <p class="card-text">0</p>
    <a href="#" class="card-link">view Appointments</a>
  </div>
</div>
<div class="card3" style="width: 15rem;">
  <div class="card-body">
    <h5 class="card-title"><img src="purchase-tag-solid-24.png"></h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">Purchase Stock</h6>
    <p class="card-text">0</p>
    <a href="#" class="card-link">view Inventory</a>
  </div>
</div>
<div class="card3" style="width: 15rem;">
  <div class="card-body">
    <h5 class="card-title"><img src="microscope-solid.svg"></h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">Lab Test</h6>
    <p class="card-text">0</p>
    <a href="#" class="card-link">view Tests</a>
  </div>
</div>
</div>
<div class="row2">
	<hr style="border-bottom:2px solid #fff;">
</div>
	<div class="dashboard">
		<h1>Bar Chart Dashboard</h1>
		<div class="chart-container">
			<div class="chart">
				<div class="bar" style="width: 20%; height: 50px; background-color: #4CAF50;"></div>
				<div class="bar" style="width: 30%; height: 50px; background-color: #F7DC6F;"></div>
				<div class="bar" style="width: 40%; height: 50px; background-color: #2196F3;"></div>
				<div class="bar" style="width: 10%; height: 50px; background-color: #FFC107;"></div>
			</div>
			<div class="labels">
				<p>Appointments</p>
				<p>Employee</p>
				<p>Purchase Stock</p>
				<p>Lab Tests</p>
			</div>
		</div>
	</div>
</div>
</form>
	
</body>
</html>