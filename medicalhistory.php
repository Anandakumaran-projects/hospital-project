<?php
 include "sidebarmenu.php";
 include "pagenation5.php";
 include "./backend/dbconfig.php";
$sql="SELECT id FROM patientrecords ORDER BY id DESC LIMIT 1";

$result=$conn->query($sql);

if($result->num_rows>0){
    $row=$result->fetch_assoc();
    $lastid=$row['id'];
 
}else{
    $lastid="no found";
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Medical History</title>
	<!-- <link rel="stylesheet" href="css/medicalhistory.css"> -->
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
	margin-left: 20%;
}
.label{
	font-weight: bold;
	font-size: 20px;
	margin-left: 70px;
	color: #000000;
	letter-spacing: 2px;
}
.a1{
	width: 250px;
	padding: 12px;
	margin-left: 10px;
}
.a3{
	width:px;
	padding: 12px;
	margin-left: 65px;
}
.a2{
	padding: 12px;
	width: 250px;
	margin-left: 10px;
}
.a4{
	width: 278px;
	padding: 12px;
	margin-left: 5px;
}
.a5{
	width: 250px;
	padding: 12px;
	margin-left: 90px;
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
  color: #000000; /* black text on hover */
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
	<form action="./backend/medicalhistory.php" method="post"  onsubmit="return submitform(this);">
		<div class="container">
			<h2>Medical History data</h2>
			<hr style="border-bottom: 2px solid #fff;">
			<div class="row1">
				<label for="mcondition" class="label">Medical Condition:</label>
				<input type="text" id="mcondition" name="mcondition" class="a1">
				<label for="allergies" class="label">Allergies:</label>
				<input type="text" name="allergies" id="allergies" class="a2">
			</div>
			<div class="row2">
				<label for="previoussurgery" class="label">Previous Surgery:</label>
				<input type="radio" name="previoussurgery" id="previoussurgery" value="yes" class="a3"><span>Yes</span>
				<input type="radio" name="previoussurgery" id="previoussurgery" value="no" class="a3"><span>No</span>
				<label for="typeofsurgery" class="label">Type Of Surgery:</label>
				<select id="typeofsurgery" name="typeofsurgery" class="a4">
					<option value="select">select</option>
					<option value="robotic">Robotic surgery</option>
					<option value="endoscopy">Endoscopy</option>
					<option value="bronchoscopy">Bronchoscopy</option>
					<option value="thoracoscopy">Thoracoscopy</option>
					<option value="none">None</option>
				</select>
			</div>
			<div class="row3">
				<label for="id" class="label">Patient ID:</label>
				<input type="text" name="id" id="id" class="a5" value="<?php echo $lastid;?>" readonly>
			</div>
			<div class="btn">
				<button type="submit" class="next" name="next" id="next">next</button>
			</div>
			<hr style="border-bottom:2px solid #fff;">
		</div>
	</form>

</body>
</html>