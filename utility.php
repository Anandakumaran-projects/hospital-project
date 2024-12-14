<?php
 include "sidebarmenu.php";
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Utilities</title>
	<link rel="stylesheet" href="css/utilities.css">
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
	
	function submitform(form){
		swal({
  title: "Good job!",
  text: "Utilities Added Successfully",
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
	<form action="./backend/utility.php" method="post" onsubmit="return submitform(this);">
		<div class="container">
			<h2>Utilities</h2>
			<hr style="border-bottom:2px solid #fff;">
			<div class="row1">
				<label for="utilitytype" class="label">Utility Type:</label>
				<select id="utilitytype" name="utilitytype" class="a1">
					<option value="select">select</option>
					<option value="water">Water</option>
					<option value="gas">Gas</option>
					<option value="electricity">Electricity</option>
				</select>
				<label for="utilityprovider" class="label">Utility Provider:</label>
				<input type="text" name="utilityprovider" id="utilityprovider" class="a2">
			</div>
			<div class="row2">
				<label for="accno" class="label">Account No:</label>
				<input type="text" name="accno" id="accno" class="a3">
				<label for="billingcycle" class="label">Billing Cycle:</label>
				<select id="billingcycle" name="billingcycle" class="a4">
					<option value="select">select</option>
					<option value="weekly">Weekly</option>
					<option value="monthly">Monthly</option>
				</select>
			</div>
			<div class="row3">
				<label for="billingdate" class="label">Billing date:</label>
				<input type="date" name="billingdate" id="billingdate" class="a5">
				<label for="billingamount" class="label">Billing Amount:</label>
				<input type="text" name="billingamount" id="billingamount" class="a6">
			</div>
			<div class="row4">
				<label for="paymentdate" class="label">Payment Date:</label>
				<input type="date" name="paymentdate" id="paymentdate" class="a7">
				<label for="paymentamount" class="label">Payment Amount:</label>
				<input type="text" name="paymentamount" id="paymentamount" class="a8">
			</div>
			<div class="sub-btn">
				<button type="submit" class="submit" name="submit" id="submit">Submit</button>
			</div>
			<hr style="border-bottom:2px solid #fff;">
		</div>
	</form>

</body>
</html>