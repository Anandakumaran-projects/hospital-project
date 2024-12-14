<?php
 include "sidebarmenu.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Purchase Stock</title>
	<!-- <link rel="stylesheet" href="css/purchase.css"> -->
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
	margin-left: 100px;
}
.a2{
	width: 250px;
	padding: 12px;
	margin-left: 40px;
}
.a3{
	width: 250px;
	padding: 12px;
	margin-left: 40px;
}
.a4{
	width: 277px;
	padding: 12px;
	margin-left: 20px;
}
.a5{
	width: 250px;
	padding: 12px;
	margin-left: 75px;
}
.a6{
	width: 250px;
	padding: 12px;
	margin-left: 75px;
}
.a7{
	width: 250px;
	padding: 12px;
	margin-left: 110px;
}
.a8{
	width: 250px;
	padding: 12px;
	margin-left: 65px;
}
.a9{
	width: 250px;
	padding: 12px;
	margin-left: 150px;
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
.add{
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
	border-radius: 10px;
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
  text: "Stock Added Successfully",
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
	<form action="./backend/purchase.php" method="post" onsubmit="return submitform(this);">
		<div class="container">
			<h2>Purchase Stock</h2>
			<hr style="border-bottom:2px solid #fff;">

			<div class="row1">
				<label for="did" class="label">Dealer Id:</label>
				<input type="text" class="a1" name="did" id="did">
				<label for="dname" class="label">Dealer Name:</label>
				<input type="text" name="dname" id="dname" class="a2" placeholder="Enter Dealer Name">
			</div>
			<div class="row2">
				<label for="mname" class="label">Medicine Name:</label>
				<input type="text" name="mname" id="mname" class="a3" placeholder="Enter Medicine Name">
				<label for="mtype" class="label">Medicine Type:</label>
				<select id="mtype" name="mtype" class="a4">
					<option value="select">select</option>
					<option value="tablet">Tablet</option>
					<option value="syrub">Syrub</option>
				</select>
			</div>
			<div class="row3">
				<label for="expirydate" class="label">Expiry Date:</label>
				<input type="date" class="a5" name="expdate" id="expdate">
				<label for="batchno" class="label">Batch No:</label>
				<input type="number" name="batchno" id="batchno" class="a6">
			</div>
			<div class="row4">
				<label for="quantity" class="label">Quantity:</label>
				<input type="number" id="quantity" name="quantity" class="a7">
				<label for="unitprice" class="label">Unit price:</label>
				<input type="number" id="unitprice" name="unitprice" class="a8">
			</div>
			<div class="row5">
				<label for="Total" class="label">Total:</label>
				<input type="text" name="total" id="total" class="a9" onclick="calculatemultiply()" readonly>
			</div>
			<div class="btn"><button type="submit" name="add" id="add" class="add">Add</button>
			</div>
			<hr style="border-bottom:2px solid #fff;">
		</div>
	</form>

</body>
<script type="text/javascript">
	function calculatemultiply() {
  const unitPrice = parseFloat(document.getElementById('unitprice').value);
  const quantity = parseFloat(document.getElementById('quantity').value);

  const total = unitPrice*quantity;

  document.getElementById('total').value = total.toFixed(2);
}
</script>
<script type="text/javascript">
  function generatedealerId() {
  // Get the current ID from local storage, or set it to 1 if it's not set
  var currentId = localStorage.getItem("did");
  if (!currentId) {
    currentId = 1;
  } else {
    currentId = parseInt(currentId)+1;
  }

  // Store the new ID in local storage
  localStorage.setItem("did", currentId);

  // Display the new ID in the input box
  document.getElementById("did").value ="DEALER-"+ currentId;
}

// Call the function on page load and on every page refresh
window.onload = generatedealerId;
</script>
</html>
