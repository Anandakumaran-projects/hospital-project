<?php
 include "sidebarmenu.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Expenses</title>
	<link rel="stylesheet" href="css/expenses.css">
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
  text: "Expenses Added Successfully",
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
	<form action="./backend/expenseinsert.php " method="POST" onsubmit="return submitform(this);">
		<div class="container">
			<h2>Expenses</h2>
			<hr style="border-bottom:2px solid #fff;">
			<div class="row1">
				<label for="expid" class="label">Expense ID:</label>
				<input type="text" name="expid" id="expid" class="a1">
				<label for="expdate" class="label">Expense Date:</label>
				<input type="date" name="expdate" id="expdate" class="a2">
			</div>
			<div class="row2">
				<label for="exptype" class="label">Expense Type:</label>
				<select id="exptype" name="exptype" class="a3">
					<option value="select">Select</option>
					<option value="supplies">Supplies</option>
					<option value="equipment">Equipment</option>
					<option value="tea">Tea</option>
					<option value="snacks">Snacks</option>
				</select>
				<label for="expcategory" class="label">Expenses Category:</label>
				<select id="expcategory" name="expcategory" class="a4">
					<option value="select">select</option>
					<option value="adminblock">Admin Block</option>
					<option value="facilityblock">Facility Block</option>
					<option value="outdoor">Outdoor</option>
				</select>
			</div>
			<div class="row3">
				<label for="expdesc" class="label">Expenses Description:</label>
				<input type="text" name="expdesc" id="expdesc" class="a5">
				<label for="expamount" class="label">Expense Amount:</label>
				<input type="text" name="expamount" id="expamount" class="a6">
			</div>
			<div class="sub-btn">
				<button type="submit" class="submit" name="submit" id="submit">Submit</button>
			</div>
			<hr style="border-bottom:2px solid #fff;">
		</div>
	</form>

</body>
<script type="text/javascript">
	let serialNumber = 1;
	      function generateSerialId() {
	        return `EID-${serialNumber++}`;
	      }
	      document.getElementById('expid').value = generateSerialId();
</script>

</html>