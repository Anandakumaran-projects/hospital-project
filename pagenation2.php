<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>pagination</title>
</head>
<style type="text/css">
	.pagination {
  display: flex;
  justify-content: center;
  margin-left: 20%;
  margin-top: 2%;
}
a{
  color: #000000;
  text-decoration: none;
}
a:hover{
  color:#fff;
}

.page-link {
  display: inline-block;
  padding: 10px 15px;
  border-radius: 50%;
  background-color: #F0F3FF;
  border: 1px solid #ddd;
  margin: 0 5px;
  transition: background-color 0.3s ease;
}

.page-link a :active {
  background-color: #337ab7;
  color: #fff;
}

.page-link:hover {
  background-color: #A0153E;
}

.pagination::before {
  content: "";
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 100%;
  height: 2px;
  /*background-color: #ddd;*/
  z-index: -1;
}

.pagination::after {
  content: "";
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 0;
  height: 2px;
  /*background-color: #337ab7;*/
  transition: width 0.3s ease;
}

.pagination:hover::after {
  width: 100%;
}
</style>
<body>
	<div class="pagination">
  <a href="appointment.php" class="page-link">1</a>
  <a href="doctorinformation.php" class="page-link">2</a>
  
</div>

</body>
</html>