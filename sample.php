<?php
 include "sidebarmenu.php";

include "./backend/dbconfig.php";
$sql="SELECT id FROM labdetails ORDER BY id DESC LIMIT 1";

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
	<title>sample Information</title>
	<!-- <link rel="stylesheet" href="css/sampleinformation.css"> -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<style type="text/css">
	@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
body{
	background-color:#F0F3FF;
}
.container{
	justify-content: center;
	margin-top: 5%;
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
	margin-left: 53px;
}
.a2{
	width: 250px;
	padding: 12px;
	margin-left: 60px;
}
.a3{
	width: 277px;
	padding: 12px;
	margin-left: 27px;
}
.a4{
	width: 250px;
	padding: 12px;
	margin-left:8px;
}
.a5{
	width: 250px;
	padding: 12px;
	margin-left: 10px;
}
.a6{
	width: 280px;
	padding: 12px;
	margin-left: 18px;
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
.submit{
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
	border-color: #A0153E;
	border-radius: 5px;
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
  text: "Sample Added Successfully",
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
  function generatesampleId() {
  // Get the current ID from local storage, or set it to 1 if it's not set
  var currentId = localStorage.getItem("sampleid");
  if (!currentId) {
    currentId = 1;
  } else {
    currentId = parseInt(currentId)+1;
  }

  // Store the new ID in local storage
  localStorage.setItem("sampleid", currentId);

  // Display the new ID in the input box
  document.getElementById("sampleid").value ="SAM-"+ currentId;
}

// Call the function on page load and on every page refresh
window.onload = generatesampleId;
</script>

<body>
	<form action="./backend/sample.php" method="post" onsubmit="return submitform(this);">
		<div class="container">
			<h2>Test Sample information</h2>
			<hr style="border-bottom: 2px solid #fff;">
			<div class="row1">
				<label for="id" class="label">Patient Id:</label>
				<input type="text" name="id" id="id" class="a1" value="<?php echo $lastid; ?>">
				<label for="sampleid" class="label">Sample Id:</label>
				<input type="text" name="sampleid" id="sampleid" onblur="fetchsampledetails()" class="a2">
			</div>
			<div class="row2">
				<label for="sampletype" class="label">Sample Type:</label>
				<select id="sampletype" name="sampletype" class="a3">
					<option value="select">select</option>
					<option value="blood">Blood</option>
					<option value="urine">Urine</option>
				</select>
				<label for="cdate" class="label">Collection date:</label>
				<input type="date" name="cdate" id="cdate" class="a4">
			</div>
			<div class="row3">
				<label for="receiveddate" class="label">Received Date:</label>
				<input type="date" name="receiveddate" id="receiveddate" class="a5">
				<label for="samplestatus" class="label">Sample Status:</label>
				<select id="samplestatus" name="samplestatus" class="a6">
					<option value="select">select</option>
					<option value="collected">Collected</option>
					<option value="uncollected">Uncollected</option>
				</select>
			</div>
			<div class="btn"><button type="submit" id="submit" name="submit" class="submit">Submit</button>
			</div>
			<hr style="border-bottom:2px solid #fff;">
		</div>
	</form>

</body>
</html>
