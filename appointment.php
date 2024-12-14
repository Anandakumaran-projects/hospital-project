
<?php
 include "sidebarmenu.php";
 include "pagenation2.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Appointment Booking</title>
	<!-- <link rel="stylesheet" href="css/appointment.css"> -->
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
	margin-left: 40px;
}
.a2{
	width: 250px;
	padding: 12px;
	margin-left: 85px;
}
.a3{
	padding: 12px;
	width: 250px;
	margin-left:70px;
}
.a4{
	margin-left: 75px;
	width: 250px;
	padding: 12px;
	justify-content: space-between;
}
.a5{
	width: 250px;
	padding: 12px;
	margin-left: 147px;
}
.a6{
	width: 250px;
	padding: 12px;
}
.a7{
	width: 250px;
	padding: 12px;
	margin-left: 155px;
}
.a8{
	width: 250px;
	padding: 12px;
	margin-left: 100px;
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
	margin-top: 70px;
}
.next a{
	color: white;
	text-decoration: none;
}
button{
	border-color: #A0153E;;
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

<body>
	<form action="./backend/appointment.php" method="POST" onsubmit="return submitform(this);">
		<div class="container">
			<h2>Appointment Booking</h2>
			<hr style="border-bottom:2px solid #fff;">
			<div class="row1">
				<label for="appid" class="label">Appointment ID:</label>
				<input type="text" name="appid" id="appid" class="a1" readonly>
				<label for="id" class="label">Patient ID:</label>
				<input type="text" name="id" id="id" class="a2" onblur="fetchpatientdetails()">
			</div>
			<div class="row2">
				<label for="name" class="label">Patient Name:</label>
				<input type="text" id="name" name="name" class="a3" placeholder="Enter Name" readonly>
				<label for="todaydate" class="label">Today Date:</label>
				<input type="date" name="todaydate" id="todaydate" class="a4">
			</div>
			<div class="row3">
				<label for="phone" class="label">Phone:</label>
				<input type="text" name="phone" id="phone" class="a5" readonly>
				<label for="Appdate" class="label">Appointment Date:</label>
				<input type="date" name="appdate" id="appdate" class="a6">
			</div>
			<div class="row4">
				<label for="time" class="label">Time:</label>
				<input type="time" name="time" id="time" class="a7">
				<label for="duration" class="label">Duration:</label>
				<input type="number" name="duration" id="duration" class="a8"><span>&nbsp;Hours</span>
			</div>
			<div class="btn"><button type="submit" name="next" id="next" class="next">Next</button>
			</div>
			<hr style="border-bottom:2px solid #fff;">
		</div>

</body>
<script type="text/javascript">
	function generateAppId() {
  // Get the current ID from local storage, or set it to 1 if it's not set
  var currentId = localStorage.getItem("AppointmentId");
  if (!currentId) {
    currentId = 1;
  } else {
    currentId = parseInt(currentId)+1;
  }

  // Store the new ID in local storage
  localStorage.setItem("AppointmentId", currentId);

  // Display the new ID in the input box
  document.getElementById("appid").value ="AID-"+ currentId;
}

// Call the function on page load and on every page refresh
window.onload = generateAppId;
</script>
</html>