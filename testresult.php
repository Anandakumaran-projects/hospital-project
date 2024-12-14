<?php
 include "sidebarmenu.php";
 include "./backend/dbconfig.php";
$sql="SELECT testid FROM labdetails ORDER BY testid DESC LIMIT 1";

$result=$conn->query($sql);

if($result->num_rows>0){
    $row=$result->fetch_assoc();
    $lastid=$row['testid'];
   
}else{
    $lastid="no found";
}
$sql="SELECT sampleid FROM labdetails ORDER BY sampleid DESC LIMIT 1";

$result=$conn->query($sql);

if($result->num_rows>0){
    $row=$result->fetch_assoc();
    $sampleid=$row['sampleid'];
   
}else{
    $sampleid="no found";
}

?>
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Test Result Entry</title>
	<!-- <link rel="stylesheet" href="css/testresult.css"> -->
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
	box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
	background-color: #F0F3FF;
}
select{
	border-color: #A0153E;
	border-radius: 5px;
	box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
	background-color: #F0F3FF;
}
.a1{
	width: 250px;
	padding: 12px;
	margin-left: 20px;
}
.a2{
	width: 250px;
	padding: 12px;
	margin-left: 10px;
}
.a3{
	width: 250px;
	padding: 12px;
	margin-left: 15px;
}
.a4{
	width: 278px;
	padding: 12px;
	margin-left:25px;
}
.a5{
	width: 250px;
	padding: 12px;
	margin-left: 75px;
}
.a6{
	width: 278px;
	padding: 12px;
	margin-left: 13px;
}
.a7{
	width: 278px;
	padding: 12px;
	margin-left: 55px;
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
	margin-top: 50px;
}

button{
	border-color: #A0153E;
	border-radius: 5px;
	box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}
button:hover{
	box-shadow: 0 4px 8px rgba(0, 0, 0, 1.0);
}
input:hover{
	box-shadow: 0 4px 8px rgba(0, 0, 0, 1.0);
}
select:hover{
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
  text: "Results Added Successfully",
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
  function generateresultId() {
  // Get the current ID from local storage, or set it to 1 if it's not set
  var currentId = localStorage.getItem("resultid");
  if (!currentId) {
    currentId = 1;
  } else {
    currentId = parseInt(currentId)+1;
  }

  // Store the new ID in local storage
  localStorage.setItem("resultid", currentId);

  // Display the new ID in the input box
  document.getElementById("resultid").value ="RID-"+ currentId;
}

// Call the function on page load and on every page refresh
window.onload = generateresultId;
</script>

<body>
	<form action="./backend/testresult.php" method="post" onsubmit="return submitform(this);">
		<div class="container">
			<h2>Entry Of Test Results</h2>
			<hr style="border-bottom:2px solid #fff;">
			<div class="row1">
				<label for="resultid" class="label">Result ID:</label>
				<input type="text" name="resultid" id="resultid" class="a1" readonly>
				<label for="testid" class="label">Test ID:</label>
				<input type="text" name="testid" class="a2" value="<?php echo $lastid; ?>" id="testid">
			</div>
			<div class="row2">
				<label for="sampleid" class="label">Sample Id:</label>
				<input type="text" name="sampleid" class="a3" value="<?php echo $sampleid;?>" id="sampleid">
				<label for="result" class="label">result:</label>
				<select id="result" name="result" class="a4">
					<option value="select">select</option>
					<option value="positive">Positive</option>
					<option value="negative">Negative</option>
				</select>
				</div>
			<div class="row3">
				<label for="unit" class="label">Unit:</label>
				<input type="number" class="a5" name="unit" id="unit">
				<label for="disease" class="label">disease:</label>
				<select id="disease" name="disease" class="a6">
					<option value="select">select</option>
					<option value="none">None</option>
					<option value="Jaundice">Jaundice</option>
					<option value="dengue">dengue</option>
					<option value="malariya">Malariya</option>
				</select>
			</div>
			<div class="row4">
				<label for="range" class="label">Range:</label>
				<select id="range" name="range" class="a7">
					<option value="select">select</option>
					<option value="none">None</option>
					<option value="high">High</option>
					<option value="low">Low</option>
					<option value="Normal">Normal</option>
				</select>
			</div>
			<div class="btn"><button type="submit" id="submit" name="submit" class="submit">Submit</button>
			</div>
			<hr style="border-bottom:2px solid #fff;">
		</div>
	</form>

</body>
</html>