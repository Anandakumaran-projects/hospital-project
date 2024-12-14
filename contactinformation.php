<?php
 include "sidebarmenu.php";
 include "pagenation1.php";

include "./backend/dbconfig.php";

$sql="SELECT id FROM registration ORDER BY id DESC LIMIT 1";

$result=$conn->query($sql);

if($result->num_rows>0){
    $row=$result->fetch_assoc();
    $lastid=$row['id'];
   
}else{
    $last="no found";
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>contact information</title>
	<!-- <link rel="stylesheet" href="css/contactinformation.css"> -->
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
	margin-left: 20%;
}
button{
	border-color: #A0153E;;
	box-shadow: 0 4px 8px rgba(0, 0, 0, 1.0);
}
.label{
	font-weight: bold;
	font-size: 20px;
	margin-left: 70px;
	color: #000000;
	letter-spacing: 2px;
}
input{
	border-color: #A0153E;;
	box-shadow: 0 4px 8px rgba(0, 0, 0, 1.0);
	background-color: #F0F3FF;
	border-radius: 5px;
}
select{
	border-color: #A0153E;;
	box-shadow: 0 4px 8px rgba(0, 0, 0, 1.0);
	background-color: #F0F3FF;
	border-radius: 5px;
}
.a1{
	width: 250px;
	padding: 12px;
	margin-left: 55px;
}
.a2{
	width: 250px;
	padding: 12px;
	margin-left: 30px;
}
.a3{
	padding: 12px;
	width: 250px;
	margin-left: 5px;
}
.a4{
	margin-left: 10px;
	width: 250px;
	padding: 12px;
	justify-content: space-between;
}
.a5{
	width: 250px;
	padding: 12px;
	margin-left: 110px;
}
.a6{
	width: 278px;
	padding: 12px;
	margin-left: 10px;
}
.a7{
	width: 278px;
	padding: 12px;
	margin-left: 105px;
}
.a8{
	width: 250px;
	padding: 10px;
	margin-left: 10px;
}
.next{
	margin-bottom: 30px;
	margin-left: 40%;
	width: 100px;
	padding: 8px;
	color: #fff;
	font-size: 20px;
	background-color:#A0153E;
	margin-top: 20px;
	border-radius: 5px;
}
.next a{
	color: white;
	text-decoration: none;
}
h2{
	text-align: center;
	color: #fff;
	letter-spacing: 3px;
	font-weight: 600;
	font-size: 25px;
background-color: #A0153E;
line-height: 50px;
}
.row1{
	margin-top: 50px;
	margin-bottom: 50px;
}
.row2{
	margin-bottom: 50px;
}
.row3{
	margin-bottom: 50px;
}
.row4{
	margin-bottom: 50px;
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
	<form action="./backend/contactinformation.php" method="POST" onsubmit="return submitform(this);">
		<div class="container">
		<h2>Contact Information</h2>
		<hr style="border-bottom:2px solid #fff;">
		<div class="row1">
			<label for="id" class="label">Patient Id:</label>
			<input type="text"  name="id" id="id" class="a1" value="<?php echo $lastid;?>" readonly>
			<label for="email" class="label">Email:</label>
			<input type="email" class="a2" id="email" name="email" placeholder="Enter Your Email" required>
		</div>
		<div class="row2">
			<label for="phone" class="label">Phone Number:</label>
			<input type="number" id="phone" name="phone" placeholder="Enter your Phone number" class="a3" required>
			<label for="doorno" class="label">door No:</label>
			<input type="text" id="doorno" class="a4" name="doorno" placeholder="Enter Your Address" required>
		</div>
		<div class="row3">
			<label for="area" class="label">Area:</label>
			<input type="text" name="area" id="area"  class="a5" placeholder="Enter Your Area" required>
			<label for="state" class="label">District:</label>
			<select id="district" name="district" class="a6">
				<option value="select">select</option>
				<option value="chennai">chennai</option>
				<option value="tuticorin">Tuticorin</option>
				<option value="madurai">Madurai</option>
				<option value="ramanathapuram">Ramanathapuram</option>
				<option value="tiruchy">Trichy</option>
				<option value="tirunelveli">Tirunelveli</option>
				<option value="thiruvanathapuram">Thiruvanathapuram</option>
				<option value="thirussur">Tirussur</option>
			</select>
		</div>
		<div class="row4">
			<label for="state" class="label">State:</label>
			<select id="state" name="state" class="a7">
				<option value="selecct">select</option>
				<option value="tamilnadu">Tamilnadu</option>
				<option value="Kerala">Kerala</option>
			</select>
			<label for="pincode" class="label">Pincode:</label>
			<input type="number" class="a8" name="pincode" id="pincode" placeholder="Enter your Pincode" required>
		</div>
		<div class="btn"><button type="submit" class="next" id="next">Next</button></div>
		<hr style="border-bottom:2px solid #fff;">
	</div>
	</form>

</body>
</html>