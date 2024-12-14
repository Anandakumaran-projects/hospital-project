<?php
 include "sidebarmenu.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>update</title>
	<!-- <link rel="stylesheet" href="css/updateregistration.css"> -->
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
	/*border: 1px solid white;*/
	justify-content: center;
	margin-top: 5%;
	margin-left: 20%;
}
button{
	border-color: #A0153E;
	border-radius: 10px;
	box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}
button:hover{
	box-shadow: 0 4px 8px rgba(0, 0, 0, 1.0);
}
.label{
	font-weight: bold;
	font-size: 20px;
	margin-left: 70px;
	color:#000000;
	letter-spacing: 2px;
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
.a1{
	width: 250px;
	padding: 12px;
	margin-left: 106px;
}
.a2{
	width: 250px;
	padding: 10px;
	margin-left: 95px;
}
.a3{
	padding: 12px;
	width: 250px;
	margin-left:150px;
}
.a4{
	margin-left: 180px;
	width: 250px;
	padding: 12px;
	justify-content: space-between;
}
.a5{
	width: 250px;
	padding: 12px;
	margin-left: 80px;
}
.a6{
	width: 250px;
	padding: 12px;
	margin-left: 35px;
}
.a7{
	width: 250px;
	padding: 12px;
	margin-left: 10px;
}
.a8{
	width: 250px;
	padding: 12px;
	margin-left: 165px;
}
.next{
	margin-bottom: 30px;
	margin-left: 45%;
	margin-top: 50px;
	width: 100px;
	padding: 8px;
	color: #fff;
	font-size: 20px;
	background-color:#A0153E;
}
.next a{
	color: white;
	text-decoration: none;
}
h2{
	text-align: center;
	color: white;
	letter-spacing: 3px;
	font-weight: 600;
	font-size: 25px;
	margin-bottom: 20px;
	background-color: #A0153E;
	line-height: 50px;
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
	<form action="./backend/updatereg.php" method="POST" onsubmit="return submitform(this);">
		<div class="container">
			<h2>Update Patient Registration</h2>
			<hr style="border-bottom: 2px solid #fff;">
			<div class="row1">
				<label for="id" class="label">Patient Id:</label>
				<input type="text" id="id" class="a1" name="id" onblur="fetchpatientdetails()">
				<label for="name" class="label">Patient Name:</label>
				<input type="text"  id="name" name="name" class="a2" placeholder="Enter Patient Name" readonly>
			</div>
			<div class="row2">
				<label  for="phone" class="label">Phone:</label>
				<input type="text" name="phone" id="phone" class="a3" placeholder="Enter Your Phone Number" readonly>
				<label for="area" class="label">area  :</label>
				<input type="text" name="area" id="area" class="a4" placeholder="Enter Address">
			</div>
			<div class="row3">
				<label for="relationship" class="label">Relationship:</label>
				<input type="text" id="relationship" name="relationship" class="a5" placeholder="Enter which Relationship" required>
				<label for="recordno" class="label">Medical Record No:</label>
				<input type="text" name="recordno" id="recordno" class="a6">
			</div>
			<div class="row4">
				<label for="emergencyno" class="label">Emergency Contact:</label>
				<input type="text" name="emergencyno" id="emergencyno" class="a7" required>
				<label for="illness" class="label">Illness:</label>
				<input type="text" name="illness" id="illness" class="a8">
			</div>
			<div class="btn"><button type="submit" name="next" class="next" id="next">Update</button></div>
			<hr style="border-bottom:2px solid #fff;">
		</div>
	</form>

</body>
</html>