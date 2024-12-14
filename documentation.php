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
	<title>Documentation</title>
	<!-- <link rel="stylesheet" href="css/documentation.css"> -->
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
	margin-left: 70px;
	color: #000000;
	letter-spacing: 2px;
}
.a1{
	width: 278px;
	padding: 12px;
	margin-left: 45px;
}
.a5{
	width: 250px;
	padding: 12px;
	margin-left: 10px;
}
.a6{
	width: 250px;
	padding:12px;
	margin-left: 125px;
	background-color: #fff;
}
.a3{
	width:278px;
	padding: 12px;
	margin-left: 105px;
}
.a2{
	padding: 12px;
	width: 250px;
	margin-left: 95px;
}
.a4{
	width: 250px;
	padding: 12px;
	margin-left:126px;
}
.a7{
	width: 250px;
	padding: 12px;
	margin-left: 27px;
	background-color: #fff;
}
.a8{
	width: 278px;
	padding: 12px;
	margin-left: 84px;
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
	color: white;
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
input[type="file"]{
	background-color: #A0153E;
	color:#fff;
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
	<form action="./backend/documentation.php" method="post" onsubmit="return submitform(this);">
		<div class="container">
			<h2>Documentation</h2>
			<hr style="border-bottom:2px solid #fff;">
			<div class="row1">
				<label for="reporttype" class="label">Report Type:</label>
				<select id="reporttype" name="reporttype" class="a1">
					<option value="select">select</option>
					<option value="bloodtest">bloodtest</option>
					<option value="urinetest">Urine Test</option>
					<option value="xray">X-ray</option>
				</select>
				<label for="uploaddate" class="label">Upload Date:</label>
				<input type="date" name="uploaddate" id="uploaddate" class="a2">
			</div>
			<div class="row2">
				<label for="result1" class="label">Result:</label>
				<select id="result1" name="result1" class="a3">
					<option value="select">select</option>
					<option value="positive">Positive</option>
					<option value="negative">Negative</option>
				</select>
				<label for="policyno" class="label">Policy No:</label>
				<input type="text" name="policyno" id="policyno" class="a4">
			</div>
			<div class="row3">
				<label for="policyprovider" class="label">Policy Provider:</label>
				<input type="text" name="policyprovider" id="policyprovider" class="a5">
				<label for="id" class="label">Patient ID:</label>
				<input type="text" name="id" id="id" class="a6" value="<?php echo $lastid; ?>" readonly>
			</div>
			<div class="row4">
				<label for="uploadreport" class="label">Upload report:</label>
				<input type="file" name="uploadreport" id="uploadreport" class="a7">
				<label for="billingstatus" class="label">Billing Status:</label>
				<select id="billingstatus" name="billingstatus" class="a8">
					<option value="select">select</option>
					<option value="paid">Paid</option>
					<option value="unpaid">Unpaid</option>
				</select>
			</div>
			<div class="btn">
				<button type="submit" class="submit" name="submit" id="submit">Submit</button>
			</div>
			<hr style="border-bottom:2px solid #fff;">
		</div>
	</form>


</body>
</html>