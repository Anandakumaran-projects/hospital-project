<?php
 include "sidebarmenu.php";
 include "pagenation6.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>surgery management</title>
	<!-- <link rel="stylesheet" href="css/surgeryteam.css"> -->
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
	color: #000000;
	letter-spacing: 2px;
}
input{
	border-color: #A0153E;
	border-radius: 5px;
	box-shadow: 0 4px 8px rgba(0, 0, 0, 1.0);
	background-color: #F0F3FF;
}
select{
	border-color: #A0153E;
	border-radius: 5px;
	box-shadow: 0 4px 8px rgba(0, 0, 0, 1.0);
	background-color: #F0F3FF;
}
.a1{
	width: 250px;
	padding: 12px;
	margin-left: 100px;
}
.a2{
	width: 250px;
	padding: 12px;
	margin-left: 10px;
}
.a3{
	width: 250px;
	padding: 12px;
	margin-left: 105px;
}
.a4{
	width: 250px;
	padding: 12px;
	margin-left: 20px;
}
.a5{
	width: 250px;
	padding: 12px;
	margin-left: 80px;
}
.a6{
	width: 250px;
	padding: 12px;
	margin-left: 55px;
}
.a7{
	width: 250px;
	padding: 12px;
	margin-left: 20px;
}
.a8{
	width: 250px;
	padding: 12px;
	margin-left: 5px;
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
.submit{
	margin-bottom: 30px;
	margin-left: 45%;
	width: 100px;
	padding: 8px;
	color: #fff;
	font-size: 20px;
	background-color:#A0153E;
	margin-top: 70px;
}

button{
	border-color: #A0153E;
	border-radius: 10px;
	box-shadow: 0 4px 8px rgba(0, 0, 0, 1.0);
}
h2{
	text-align: center;
	color: #fff;
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
  background-color: #A0153E; /* light gray hover background */
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
	<form action="./backend/surgicalteam.php" method="post" onsubmit="return submitform(this);">
		<div class="container">
			<h2>Surgery Team</h2>
			<hr style="border-bottom: 2px solid #fff;">
			<div class="row1">
				<label for="docid" class="label">Doctor ID:</label>
				<input type="text" name="docid" id="docid" class="a1">
				<label for="dname" class="label">Doctor Name:</label>
				<input type="text" name="dname" id="dname" class="a2">
			</div>
			<div class="row2">
				<label for="nurseid" class="label">Nurse ID:</label>/
				<input type="text" name="nurseid"  class="a3" id="nurseid">
				<label for="nursename" class="label">Nurse Name:</label>
				<input type="text" name="nursename" id="nursename" class="a4">
			</div>
			<div class="row3">
				<label for="orno" class="label">OR Number:</label>
				<input type="text" name="orno" id="orno" class="a5">
				<label for="ortype" class="label">OR Type:</label>
				<input type="text" name="ortype" id="ortype" class="a6">
			</div>
			<div class="row4">
				<label for="outcome" class="label">Surgical Outcome:</label>
				<input type="text" name="outcome" id="outcome" class="a7">
				<label for="complication" class="label">Complication:</label>
				<input type="text" name="complication" id="complication" class="a8">
			</div>
			<div class="btn"><button type="submit" id="submit" name="submit" class="submit">Submit</button>
			</div>
			<hr style="border-bottom:2px solid #fff;">
		</div>
	</form>

</body>
</html>