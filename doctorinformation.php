<?php
 include "sidebarmenu.php";
 include "pagenation2.php";
include "./backend/dbconfig.php";

$sql="SELECT appid FROM appointment ORDER BY appid DESC LIMIT 1";

$result=$conn->query($sql);

if($result->num_rows>0){
    $row=$result->fetch_assoc();
    $lastid=$row['appid'];
   
}else{
    $last="no found";
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Appointment Booking</title>
	<!-- <link rel="stylesheet" href="css/doctorinformation.css"> -->
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
	margin-left: 18%;
}
.label{
	font-weight: bold;
	font-size: 20px;
	margin-left: 130px;
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
	margin-left: 65px;
}
.a2{
	width: 250px;
	padding: 12px;
	margin-left: 45px;
}
.a3{
	width: 278px;
	padding: 12px;
	margin-left: 65px;
}
.a4{
	width: 250px;
	padding: 12px;
	margin-left: 90px;

}
.a5{
	width: 278px;
	padding: 12px;
	margin-left: 73px;
}
.a6{
	width: 250px;
	padding: 12px;
	margin-left: 10px;
}
.a7{
	width: 278px;
	padding: 12px;
	margin-left: 118px;
}
.a8{
	width: 278px;
	padding: 12px;
	margin-left: 120px;
}
.row1{
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
	margin-top: 70px;
}
.next a{
	color: white;
	text-decoration: none;
}
button{
	border-color: #A0153E;;
	box-shadow: 0 4px 8px rgba(0, 0, 0, 1.0);
	border-radius: 10px;
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
.row{
	margin-top: 20px;
	margin-bottom:30px ;
}
.a{
	width: 250px;
	padding: 12px;
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
  text: "Appointment Booking Successfully",
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
	<form action="./backend/doctorinformation.php" method="POST" onsubmit="return submitform(this);">
		<div class="container">
			<h2>Provider information</h2>
			<hr style="border-bottom: 2px solid #fff;">
			<div class="row">
				<label for="appid" class="label">Appointment ID:</label>
				<input type="text" class="a" name="appid" id="appid" value="<?php echo $lastid ?>">
			</div>
			<div class="row1">
				<label for="docid" class="label">Doctor ID:</label>
				<input type="text" name="docid" id="docid" class="a1" >
				<label for="docname" class="label">Doctor Name:</label>
				<input type="text" name="docname" id="docname" class="a2">
			</div>
			<div class="row2">
				<label for="Speciality" class="label">Speciality:</label>
				<select id="Speciality" name="Speciality" class="a3">
					<option value="select">Select</option>
					<option value="cardiology">Cardiology</option>
					<option value="dermatology">Dermatology</option>
					<option value="hematology">Hematology</option>
					<option value="general">general</option>
					<option value="neurology">Neurology</option>
				</select>
				<label for="location" class="label">Location:</label>
				<input type="text" name="location" id="location" class="a4">
			</div>
			<div class="row3">
				<label for="roomno" class="label">Room No:</label>
				<select id="roomno" name="roomno" class="a5">
					<option value="select">select</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
					<option value="13">13</option>
				</select>

				<label for="reasonforvisit" class="label">Reason For Visit:</label>
				<input type="text" name="reasonforvisit" id="reasonforvisit" class="a6">
			</div>
			<div class="row4">
				<label for="type" class="label">Type:</label>
				<select id="type" name="type" class="a7">
					<option value="select">select</option>
					<option value="followup">Follow Up</option>
					<option value="consulation">Consulation</option>
				</select>
				<label for="status" class="label">Status:</label>
				<select id="status"  name="status" class="a8">
					<option value="select">select</option>
					<option value="Approvedfor">Aprroved</option>
				</select>
			</div>
			<div class="btn"><button type="submit" name="submit" class="next" id="submit">Booking</button>
			</div>
			<hr style="border-bottom:2px solid #fff;">
		</div>

</body>
</html>