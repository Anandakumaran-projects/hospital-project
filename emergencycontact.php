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
	<title>Emergency Contact Details</title>
	<!-- <link rel="stylesheet" href="css/emergencycontact.css"> -->
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
/*	border: 1px solid white;*/
	justify-content: center;
	margin-top: 2%;
	margin-left: 20%;
}
button{
	border-color: #A0153E;
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
	padding: 10px;
	margin-left: 30px;
}
.a2{
	width: 250px;
	padding: 10px;
	margin-left: 20px;
}
.a3{
	padding: 10px;
	width: 250px;
	margin-left:95px;
}
.a4{
	margin-left: 67px;
	width: 250px;
	padding: 10px;
	justify-content: space-between;
}
.a{
	width: 250px;
	padding: 12px;
	margin-left: 190px;
}
.submit{
	margin-bottom: 30px;
	margin-left: 45%;
	margin-top: 90px;
	width: 100px;
	padding: 8px;
	color: #fff;
	font-size: 20px;
	background-color:#A0153E;
	margin-top: 100px;
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
	margin-top: 40px;
	margin-bottom: 60px;
}
.row1{
	margin-bottom: 60px;
}
.row2{
	margin-bottom: 0px;
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
  text: "Patient Registration Successfully",
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
	<form action="./backend/emergencycontact.php" method="POST" onsubmit="return submitform(this);">
		<div class="container">
			<h2>Emergency Contact</h2>
			<hr style="border-bottom:2px solid #fff;">
			<div class="row">
				<label for="id" class="label">Patient Id:</label>
				<input type="text" id="id" class="a" name="id" value="<?php echo $lastid; ?>" readonly>
			</div>
			<div class="row1">
				<label for="emergencyname" class="label">Emergency Contact Name:</label>
				<input type="text" name="emergencyname" id="emergencyname" class="a1" placeholder="Enter Emergency Contact name" required>
				<label for="relationship" class="label">Relationship:</label>
				<select id="relationship" name="relationship"class="a2">
					<option value="select">select</option>
					<option value="wife">Wife</option>
					<option value="husband">Husband</option>
					<option value="father">Father</option>
					<option value="mother">Mother</option>
					<option value="son">Son</option>
					<option value="daughter">Daughter</option>
					<option value="grandson">Grandson</option>
					<option value="granddaughter">GrandDaughter</option>
				</select>
			</div>
			<div class="row2">
				<label for="emergencyno" class="label">Emergency Number:</label>
				<input type="number" name="emergencyno" id="emergencyno" placeholder="Enter Phone Number" class="a3">
				<label for="emergencyaddress" class="label">Address:</label>
				<input type="text" name="emergencyaddress" id="emergencyaddress" class="a4" >
			</div>
			<div class="btn"><button type="submit" id="submit" class="submit">Register</button></div>
			<hr style="border-bottom:2px solid #fff;">
		</div>
	</form>

</body>
</html>