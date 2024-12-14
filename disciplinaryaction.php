<?php
 include "sidebarmenu.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Disciplinary Action</title>
	<!-- <link rel="stylesheet" href="css/disciplinaryaction.css"> -->
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
<script type="text/javascript">
	function fetchempdetails() {
            var empid = document.getElementById('empid').value;
            if (empid) {
                var xhr = new XMLHttpRequest();
                xhr.open('GET', 'fetchdata.php?empid=' + empid, true);
                xhr.onreadystatechange = function() {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        var response = JSON.parse(xhr.responseText);
                        if (response.name !== null && response.phone !== null) {
                            document.getElementById('empname').value = response.name;
                            document.getElementById('phone').value = response.phone;
                        } else {
                            alert('No empolyee details found for this id.');
                        }
                    }
                };
                xhr.send();
            }
        }
</script>

<style type="text/css">
	@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
body{
	background-color:#F0F3FF;
}
.container{
	justify-content: center;
	margin-top: 5%;
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
	margin-left: 40px;
}
.a2{
	width: 250px;
	padding: 12px;
	margin-left: 85px;
}
.a3{
	width: 280px;
	padding: 12px;
	margin-left: 50px;
}
.a4{
	width: 250px;
	padding: 12px;
	margin-left: 125px;
}
.a5{
	width: 250px;
	padding: 12px;
	margin-left:100px;
}
.a6{
	width: 250px;
	padding: 12px;
	margin-left:145px ;
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
	color: white;
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
  background-color: #A0153E; 
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
	<form action="./backend/action.php" method="post" onsubmit="return submitform(this);">
		<div class="container">
			<h2>Disciplinary Action</h2>
			<hr style="border-bottom: 2px solid #fff;">
			<div class="row1">
				<label for="empid" class="label">Employee ID:</label>
				<input type="text" name="empid" id="empid" onblur="fetchempdetails()" class="a1">
				<label for="empname" class="label">Employee Name:</label>
				<input type="text" name="empname" id="empname" class="a2" readonly>
			</div>
			<div class="row2">
				<label for="actiontype" class="label">Action Type:</label>
				<select id="actiontype" name="actiontype" class="a3">
					<option value="select">select</option>
					<option value="normal">normal</option>
					<option value="high">high</option>
					<option value="warning">Warning</option>
				</select>
				<label for="actiondate" class="label">Action Date:</label>
				<input type="date" name="actiondate" id="actiondate" class="a4">
			</div>
			<div class="row3">
				<label for="reason" class="label">Reason:</label>
				<input type="text" name="reason" id="reason" class="a5">
				<label for="comments" class="label">Comments:</label>
				<input type="text" name="comments" id="comments" class="a6">
			</div>
			<div class="btn"><button type="submit" id="submit" name="submit" class="next">Submit</button>
			</div>
			<hr style="border-bottom:2px solid #fff;">
		</div>
	</form>

</body>
</html>