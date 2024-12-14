<?php
 include "sidebarmenu.php";
 include "pagenation1.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration</title>
	<!-- <link rel="stylesheet" href="../css/registration.css"> --> 
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uuid@8.3.2/dist/umd/uuidv4.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
	margin-left: 20%;
}
.label{
	font-weight: bold;
	font-size: 20px;
	margin-left: 70px;
	color: #000000;
	letter-spacing: 2px;
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
input:hover{
 border-radius: 100px;
}
select:hover{
	border-radius: 100px;
}
.a1{
	width: 300px;
	padding: 12px;
	margin-left: 40px;
}
.a2{
	width: 300px;
	padding: 12px;
	margin-left: 30px;
}
.a3{
	padding: 11px;
	width: 300px;
	margin-left: 5px;
}
.a4{
	margin-left: 60px;
	height: 20px;
	justify-content: space-between;
}
.a5{
	width: 325px;
	padding: 12px;
}
.a6{
	width: 300px;
	padding: 12px;
}
.row1{
	margin-top: 80px;
	margin-bottom: 50px;
}
.row2{
	margin-bottom: 50px;
}
.row3{
	margin-bottom: 50px;
}
.next{
	margin-bottom: 30px;
	margin-left: 45%;
	width: 100px;
	padding: 8px;
	color: #fff;
	font-size: 20px;
	background-color:#A0153E;
	border-radius: 10px;
	margin-top: 50px;
}
.next a{
	color: white;
	text-decoration: none;
}
button{
	border-color: #A0153E;
}
button:hover{
  box-shadow: 0 4px 8px rgba(0, 0, 0, 5.0);
  border-radius: 90%;
}
h2{
	text-align: center;
	color: #fff;
	letter-spacing: 3px;
	font-weight: 600;
	font-size: 25px;
	margin-bottom: 20px;
	margin-top: 10px;
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
	<form action="./backend/backendreg.php" method="post" onsubmit="return submitform(this);">
				<div class="container">
			<h2> Patient Registration</h2>
			<hr style="border-bottom:2px solid #fff;">
			<div class="row1">
				<label for="id" class="label">Patient ID:</label>
				<input type="text" class="a1" name="id" id="id" readonly>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<label for="name" class="label">Patient Name:</label>
				<input type="text" name="name" id="name" class="a2" placeholder="Enter Name" required>
			</div>
			<div class="row2">
				<label for="dob" class="label">Date Of Birth:</label>
				<input type="date" name="dob" id="dob" class="a3" placeholder="select date" required>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<label for="gender" class="label">Gender:</label>
				<input type="radio" name="gender" value="male" id="gender" class="a4">&nbsp;<span>Male</span>
				<input type="radio" name="gender" value="female" id="gender" class="a4">&nbsp;<span>Female</span>
				<input type="radio" name="gender" value="others" id="gender" class="a4">&nbsp;<span>Others</span>
			</div>
			<div class="row3">
				<label for="inorout" class="label">Patient In/Out:</label>
				<select class="a5" id="inorout" name="inorout">
					<option value="select">select</option>
					<option value="in">In</option>
					<option value="out">Out</option>
				</select>&nbsp;&nbsp;&nbsp;&nbsp;
				<label for="fee" class="label">Registration Fee:</label>
				<input type="text" class="a6" name="fee" id="fee" value="Rs 500" readonly>
			</div>
			<div class="btn"><button type="submit" id="next" class="next" name="next">Next</button></div>
			<hr style="border-bottom:2px solid #fff;">
		</div>
	</form>

</body>
<script type="text/javascript">
  function generatePatientId() {
  // Get the current ID from local storage, or set it to 1 if it's not set
  var currentId = localStorage.getItem("patientId");
  if (!currentId) {
    currentId = 1;
  } else {
    currentId = parseInt(currentId) +1;
  }

  // Store the new ID in local storage
  localStorage.setItem("patientId", currentId);

  // Display the new ID in the input box
  document.getElementById("id").value ="PID-"+ currentId;
}

// Call the function on page load and on every page refresh
window.onload = generatePatientId;
</script>
</html>