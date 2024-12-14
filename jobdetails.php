<?php
 include "sidebarmenu.php";
 include "pagenation4.php";

include "./backend/dbconfig.php";

$sql="SELECT empid from employee ORDER BY empid DESC LIMIT 1";

$result=$conn->query($sql);
if($result->num_rows>0){
    $row=$result->fetch_assoc();
    $lastid=$row['empid'];
   
}else{
    $last="no found";
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Job details</title>
	<link rel="stylesheet" href="css/jobdetails.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<style type="text/css">
	@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
body{
	background-color:#F0F3FF;
}
.container{
	justify-content: center;
	margin-top: 0%;
	margin-left: 22%;
}
.label{
	font-weight: bold;
	font-size: 20px;
	margin-left: 70px;
	color:#000000;
	letter-spacing: 2px;
}
.a1{
	width: 250px;
	padding: 12px;
	margin-left: 50px;
}
.a3{
	width: 277px;
	padding: 12px;
	margin-left: 90px;
}
.a5{
	width: 277px;
	padding: 12px;
	margin-left: 4px;
}
.a2{
	padding: 12px;
	width: 250px;
	margin-left: 105px;
}
.a4{
	width: 277px;
	padding: 12px;
	margin-left: 30px;
}
.a6{
	width: 250px;
	padding: 12px;
	margin-left: 30px;
}
.a7{

	width: 250px;
	padding:12px;
	margin-left: 70px;
}
.a8{
	width: 279px;
	padding: 12px;
	margin-left: 40px;
}
.a9{
	width: 250px;
	padding: 12px;
	margin-left: 10px;
}
.a10{
	width: 250px;
	padding: 12px;
	margin-left: 80px;
}

input{
	border-color: #A0153E;
	border-radius: 5px;
	box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
	background-color: #F0F3FF;
}
select{
	border-color: #A0153E;
	border-radius: 5px;
	box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
	background-color: #F0F3FF;
}

.row1{
	margin-top: 50px;
	margin-bottom: 30px;
}
.row2{
	margin-bottom: 30px;
}
.row3{
	margin-bottom: 30px;
}
.row4{
	margin-bottom: 30px;
}
.row5{
	margin-bottom: 30px;
}

.submit{
	margin-bottom: 30px;
	margin-left: 45%;
	width: 100px;
	padding: 8px;
	color: #fff;
	font-size: 20px;
	background-color:#A0153E;
	margin-top: 30px;
}
.next a{
	color: white;
	text-decoration: none;
}
button{
	border-color: #A0153E;
	border-radius: 10px;
	box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}
button:hover{
	box-shadow: 0 4px 8px rgba(0, 0, 0, 1.0);
}
h2{
	text-align: center;
	color: #fff;
	letter-spacing: 3px;
	font-weight: 600;
	font-size: 25px;
	margin-bottom:20px;
	background-color: #A0153E;
	line-height: 50px;
}
span{
	color: #000000;
	letter-spacing: 2px;
	font-size: 20px;
}
input[type="radio"]:checked {
  background-color: #A0153E;
  border-color: #A0153E;
}
input[type="radio"] {
  border: 1px solid #000000;
  border-radius: 50%;
  background-color: #fff;
  padding: 5px;
}
select option:hover {
  background-color: #A0153E; 
  color: #000; /* black text on hover */
}
</style>
<script type="text/javascript">
	
	function submitform(form){
		swal({
  title: "Good job!",
  text: "Data Submitted Successfully",
  icon: "success",
  button: "Okay",
})
		.then((isOkay)=>{
			if(isOkay){
				form.submit();
			}
		});
		return false;
	}
</script>

<body>
	<form action="./backend/jobdetails.php" method="post" onsubmit="return submitform(this);">
		<div class="container">
			<h2>Job Details</h2>
			<hr style="border-bottom: 2px solid #fff;">
			<div class="row1">
				<label for="code" class="label">Job code:</label>
				<input type="text" name="code" id="code" class="a1">
				<label for="jobdesc" class="label">jobdesc:</label>
				<input type="text" class="a2" name="jobdesc" id="jobdesc">
			</div>
			<div class="row2">
				<label for="shift" class="label">Shift:</label>
				<select id="shift" name="shift" class="a3">
					<option value="select">select</option>
					<option value="night">Night</option>
					<option value="day">Day</option>
				</select>
				<label for="schedule" class="label">Work Schedule:</label>
				<select id="schedule" name="schedule" class="a4">
					<option value="select">select</option>
					<option value="parttime">parttime</option>
					<option value="fulltime">Fulltime</option>
				</select>
			</div>
			<div class="row3">
				<label for="grade" class="label">Salary Grade:</label>
				<select id="grade" name="grade" class="a5">
					<option value="select">select</option>
					<option value="a">A</option>
					<option value="b">B</option>
					<option value="c">C</option>
				</select>
				<label for="salaryamt" class="label">Salary Amount:</label>
				<input type="number" class="a6" id="salaryamt" name="salaryamt">
			</div>
			<div class="row4">
				<label for="degree" class="label">Degree:</label>
				<input type="text" name="degree" class="a7" id="degree">
				<label for="degreegrade" class="label">Degree Grade:</label>
				<select id="degreegrade" name="degreegrade" class="a8">
					<option value="select">select</option>
					<option value="a">A</option>
					<option value="b">B</option>
					<option value="c">C</option>
				</select>
			</div>
			<div class="row5">
				<label for="passout" class="label">Passout Year:</label>
				<input type="text" name="passout" id="passout" class="a9">
				<label for="wrkexp" class="label">Work exp:</label>
				<input type="text" id="wrkexp" name="wrkexp" class="a10">
			</div>
			<div class="btn">
				<button type="submit" class="submit" id="submit" name="submit">Submit</button>
			</div>
			<hr style="border-bottom: 2px solid #fff;">
		</div>
	</form>


</body>
</html>