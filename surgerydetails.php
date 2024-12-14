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
	<!-- <link rel="stylesheet" href="css/surgerydetails.css"> -->
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
	margin-left: 55px;
}
.a2{
	width: 250px;
	padding: 12px;
	margin-left: 40px;
}
.a3{
	width: 250px;
	padding: 12px;
	margin-left: 20px;
}
.a4{
	width: 250px;
	padding: 12px;
	margin-left: 33px;
}
.a5{
 margin-left: 40px;
}
.a6{
	width: 277px;
	padding: 12px;
	margin-left: 20px;
}
.a7{
	width: 250px;
	padding: 12px;
	margin-left: 20px;
}
.a8{
	width: 250px;
	padding: 12px;
	margin-left: 20px;
}
.a9{
	width: 255px;
	padding: 12px;
	margin-left: 60px;
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
.row5{
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
	margin-top: 20px;
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
  text: "Surgery Details Added Successfully",
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
	function fetchpatientdetails() {
            var id = document.getElementById('id').value;
            if (id) {
                var xhr = new XMLHttpRequest();
                xhr.open('GET', 'fetchdata.php?id=' + id, true);
                xhr.onreadystatechange = function() {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        var response = JSON.parse(xhr.responseText);
                        if (response.name !== null && response.phone !== null) {
                            document.getElementById('name').value = response.name;
                            document.getElementById('phone').value = response.phone;
                        } else {
                            alert('No patient details found for this id.');
                        }
                    }
                };
                xhr.send();
            }
        }
</script>
<script type="text/javascript">
  function generatesurgeryId() {
  // Get the current ID from local storage, or set it to 1 if it's not set
  var currentId = localStorage.getItem("surgeryid");
  if (!currentId) {
    currentId = 1;
  } else {
    currentId = parseInt(currentId)+1;
  }

  // Store the new ID in local storage
  localStorage.setItem("surgeryid", currentId);

  // Display the new ID in the input box
  document.getElementById("surgeryid").value ="SUR-"+ currentId;
}

// Call the function on page load and on every page refresh
window.onload = generatesurgeryId;
</script>
<body>
	<form action="./backend/surgerydetails.php" method="post" onsubmit="return submitform(this);">
		<div class="container">
			<h2>Surgery Details</h2>
			<hr style="border-bottom: 2px solid #fff;">
			<div class="row1">
				<label for="id" class="label">Patient Id:</label>
				<input type="text" name="id" id="id" class="a1" onblur="fetchpatientdetails()">
				<label for="surgeryid" class="label">Surgery Id:</label>
				<input type="text" name="surgeryid" id="surgeryid" class="a2" readonly>
			</div>
			<div class="row2">
				<label for="name" class="label">Patient Name:</label>
				<input type="text" name="name" id="name" class="a3" readonly>
				<label for="age" class="label">Patient Age:</label>
				<input type="text" name="age" class="a4" id="age">
			</div>
			<div class="row3">
				<label for="gender" class="label">Gender:</label>
				<input type="radio" name="gender" id="gender" class="a5"><span>Male</span>
				<input type="radio" name="gender" id="gender" class="a5"><span>Female</span>
				<input type="radio" name="gender" id="gender" class="a5"><span>Others</span>
				<label for="surgerytype" class="label">Surgery Type:</label>
				<select id="surgerytype" name="surgerytype" class="a6">
					<option value="select">select</option>
					<option value="scissoring">scissoring</option>
					<option value="normal">normal</option>
				</select>
			</div>
			<div class="row4">
				<label for="surgerydate" class="label">Surgery Date:</label>
				<input type="date" name="suregrydate" id="surgerydate" class="a7">
				<label for="surgerytime" class="label">Surgery Time:</label>
				<input type="time" name="surgerytime" id="surgerytime" class="a8">
			</div>
			<div class="row5">
				<label for="duration" class="label">Duration:</label>
				<input type="number" class="a9" name="duration" id="duration">&nbsp;<span>Hours</span>
			</div>
			<div class="btn"><button type="submit" id="next" name="next" class="next">Next</button>
			</div>
			<hr style="border-bottom:2px solid #fff;">
		</div>
	</form>

</body>
</html>