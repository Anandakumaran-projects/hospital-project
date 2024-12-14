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
	<title>Identification</title>
	<!-- <link rel="stylesheet" href="css/identification.css"> -->
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
.label{
	font-weight: bold;
	font-size: 20px;
	margin-left: 70px;
	color: #000000;
	letter-spacing: 2px;
}
.a1{
	width: 250px;
	padding: 10px;
	margin-left: 115px;
}
.a2{
	width: 250px;
	padding: 10px;
	margin-left: 50px;
}
.a3{
	padding: 10px;
	width: 250px;
	margin-left: 5px;
}
.a4{
	justify-content: space-between;
	margin-left: 25px;
}
.next{
	margin-bottom: 30px;
	margin-left: 45%;
	width: 100px;
	padding: 8px;
	color: #fff;
	font-size: 20px;
	background-color:#A0153E;
	margin-top: 50px;
}
button{
	border-color: #028391;;
	box-shadow: 0 4px 8px rgba(0, 0, 0, 1.0);
	background-color: #A0153E;
}
.next a{
	color: white;
	text-decoration: none;
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
	margin-bottom: 60px;
}
.row2{
	margin-bottom: 60px;
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
	<form action="./backend/identification.php" method="POST" onsubmit="return submitform(this);">
		<div class="container">
			<h2>Identification</h2>
			<hr style="border-bottom:2px solid #fff;">
			<div class="row1">
				<label for="id" class="label">Patient ID:</label>
				<input type="text" class="a1" id="id" name="id" value="<?php echo $lastid;?>" readonly>
				<label for="aadharno" class="label">Aadhar No:</label>
				<input type="text" name="aadharno" id="aadharno" class="a2" placeholder="Enter your Aadhar Number" required>
			</div>
			<div class="row2">
				<label for="marks" class="label">Identification Marks:</label>
				<input type="text" name="marks" id="marks" class="a3" placeholder="Enter Your Marks for Identification" required>
				<label for="martialstatus" class="label">Martial Status:</label>
				<input type="radio" name="martialstatus" id="martialstatus" value="married" class="a4"><span>Married</span>
				<input type="radio" name="martialstatus" id="martialstatus" value="unmarried" class="a4"><span>Unmarried</span>
			</div>
			<div class="btn"><button type="submit"  name="next" class="next">Next</button></div>
			<hr style="border-bottom:2px solid #fff;">
		</div>
	</form>

</body>
</html>