<?php
 include "sidebarmenu.php";
 include "pagenation4.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Employee Information</title>
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
	margin-top: 2%;
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
	margin-left: 60px;
}
.a3{
	width: 250px;
	padding: 12px;
	margin-left: 100px;
}
.a5{
	width: 277px;
	padding: 12px;
	margin-left: 60px;
}
.a7{
	padding: 12px;
	margin-left:15px; 
}
.a2{
	padding: 12px;
	width: 250px;
}
.a4{
	width: 277px;
	padding: 12px;
	margin-left: 40px;
}
.a6{
	width: 250px;
	padding: 12px;
	margin-left: 60px;
}
.a8{
	width: 277px;
	padding: 12px;
	margin-left: 15px;
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
.next{
	margin-bottom: 30px;
	margin-left: 45%;
	width: 100px;
	padding: 8px;
	color: #fff;
	font-size: 20px;
	background-color:#A0153E;
	margin-top: 100px;
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
	color:#fff;
	letter-spacing: 3px;
	font-weight: 600;
	font-size: 25px;
	margin-bottom: 20px;
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
<script type="text/javascript">
  function generateempid() {
  // Get the current ID from local storage, or set it to 1 if it's not set
  var currentId = localStorage.getItem("empid");
  if (!currentId) {
    currentId = 1;
  } else {
    currentId = parseInt(currentId)+1;
  }

  // Store the new ID in local storage
  localStorage.setItem("empid", currentId);

  // Display the new ID in the input box
  document.getElementById("empid").value ="EMP-"+ currentId;
}

// Call the function on page load and on every page refresh
window.onload = generateempid;
</script>
<body>
	<form action="./backend/empinformation.php" method="post" onsubmit="return submitform(this);">
		<div class="container">
			<h2>Employee Information</h2>
			<hr style="border-bottom: 2px solid #fff;">
			<div class="row1">
				<label for="empid" class="label">Employee ID:</label>
				<input type="text" name="empid" id="empid" class="a1" readonly>
				<label for="empname" class="label">Employee Name:</label>
				<input type="text" name="empname" id="empname" class="a2">
			</div>
			<div class="row2">
				<label for="jobtitle" class="label">Job Title:</label>
				<input type="text" name="jobtitle" id="jobtitle" class="a3">
				<label for="dept" class="label">Department:</label>
				<select id="dept" name="dept" class="a4">
					<option value="select">select</option>
					<option value="dermotology">Dermotology</option>
					<option value="cardiology">Cardiology</option>
					<option value="hemotology">Hemotology</option>
					<option value="neurology">Neurology</option>
					<option value="general">General</option>
				</select>
			</div>
			<div class="row3">
				<label for="category" class="label">job Category:</label>
				<select id="category" name="category" class="a5">
					<option value="select">select</option>
					<option value="nurse">Nurse</option>
					<option value="doctor">Doctor</option>
					<option value="labname">Lab techician</option>
					<option value="employee">Employee</option>
				</select>
				<label for="hiredate" class="label">Hire Date:</label>
				<input type="date" name="hiredate" id="hiredate" class="a6">
			</div>
			<div class="row4">
				<label for="empgender" class="label">Employee Gender:</label>
				<input type="radio" name="empgender"  value="male" id="empgender" class="a7"><span>Male</span>
				<input type="radio" name="empgender" name="female" id="empgender" class="a7"><span>Female</span>
				<input type="radio" name="empgender" name="others" id="empgender" class="a7"><span>Others</span>
				<label for="martialstatus" class="label">Marital Status:</label>
				<select id="martialstatus" name="martialstatus" class="a8">
					<option value="select">select</option>
					<option value="married">Married</option>
					<option value="Unmarried">Unmarried</option>
				</select>
			</div>
			<div class="btn"><button type="submit" id="nex" name="next" class="next">Next</button>
			</div>
			<hr style="border-bottom:2px solid #fff;">
		</div>
	</form>

</body>
</html>