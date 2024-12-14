<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>sidebarmenu</title>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
 
</head>
<style type="text/css">
  body{
    background-color:#F0F3FF;
  }
  .header h2{
    text-align: center;
    line-height: 10px;
    color: #fff;
  }
  .header img{
    width: 50px;
    margin-left: 100px;
    margin-top: 5px;
    background-color: #fff;
    border-radius: 50%;
    padding: 8px;
  }
  .sidebar{
    width: 290px;
    height: 100vh;
    background-color:#A0153E;
    top: 0;
    left: 0;
    position: fixed;
    padding: 20px;
    border-right: 1px solid darkred;
    overflow-y: auto;
  }
  .sidebar ul {
  list-style: none; /* Remove the default list styling */
  margin: 0;
  padding: 0;
  margin-top: 10px;
}
.sidebar li {
  margin-bottom: 15px; /* Add some space between menu items */
  position: relative; /* Add relative positioning to allow for dropdown positioning */
}

.sidebar a {
  text-decoration: none; /* Remove the default link styling */
  color: #fff; /* Set the text color of the links */
  padding: 10px;
  padding-right: 50px;
  font-size: 18px;
  letter-spacing: 2px;
}
.sidebar a:hover {
  background-color:#F0F3FF; /* Set the background color of the links on hover */
  color: #000000; /* Set the text color of the links on hover*/
  border-left: 10px solid #6420AA;
  border-right: 10px solid #6420AA;
}
.dropdown {
  position: relative; /* Position the dropdown list absolutely */
  top: 100%; /* Position the dropdown list below the parent menu item */
  left: 10px; /* Position the dropdown list to the left of the parent menu item */
  background-color:#A0153E; /* Set the background color of the dropdown list */
  padding: 20px; /* Add some padding to the dropdown list */
  display: none; /* Hide the dropdown list by default */
}
.sidebar li:hover .dropdown {
  display: block; /* Show the dropdown list on hover */
}
.sidebar ul .img{
  width: 24px;
  margin-top: 10px;
}
.header h2 span{
  font-size: 40px;
  color: #EBF400;
}
/*@media only screen and (max-width: 768px) {
  .sidebar {
    width: 100%;
    position: relative;
    height: auto;
  }
}*/
-ms-transform:scale(1);
-webkit-transform: scale(1.5, 1.5);
</style>
<body>
  <div class="sidebar">
    <div class="header">
    <img src="logo.png">
    <h2>La<span>x</span>mi Hospital</h2>
    <hr style="border-bottom: 2px solid #fff;">
  </div>
      <ul>
        <li><a href="dashboard1.php"><img class="img" src="icons8-system-task-26.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dashboard&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
        <li>
          <a href="#"><img src="icons8-users-26.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Registration&nbsp;&nbsp;&nbsp;&nbsp;</a>
          <ul class="dropdown">
            <li><a href="patientregistration.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Create User&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
            <li><a href="updateregistration.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Update Users&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
            <li><a href="viewpatientdetails.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;View Patients&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
          </ul>
        </li>
        <li>
          <a href="#"><img src="icons8-appointment-scheduling-26.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Appointments&nbsp;</a>
          <ul class="dropdown">
            <li><a href="appointment.php">&nbsp;&nbsp;&nbsp;&nbsp;Booking&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
            <li><a href="viewappointment.php">&nbsp;&nbsp;&nbsp;&nbsp;View Appointments</a></li>
          </ul>
        </li>
        <li>
          <a href="#"><img src="icons8-entry-26.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;patient Records</a>
          <ul class="dropdown">
            <li><a href="patientrecords.php">&nbsp;&nbsp;&nbsp;Medical records&nbsp;&nbsp;&nbsp;</a></li>
            <li><a href="updaterecord.php">&nbsp;&nbsp;&nbsp;Update Records&nbsp;&nbsp;&nbsp;</a></li>
          </ul>
        </li>
        <li>
          <a href="#"><img src="icons8-pill-26.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pharmacy&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
          <ul class="dropdown">
            <li><a href="purchasestock.php">&nbsp;&nbsp;&nbsp;Purchase&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
            <li><a href="inventorytable.php">&nbsp;&nbsp;&nbsp;Inventory&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
            <li><a href="dispatch.php">&nbsp;&nbsp;&nbsp;Dispatch&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
            <li><a href="invoicehistory.php">&nbsp;&nbsp;&nbsp;Invoice&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
          </ul>
        </li>
        <li>
          <a href="#"><img src="icons8-lab-26.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Manage Lab&nbsp;&nbsp;</a>
          <ul class="dropdown">
            <li><a href="testinformation.php">&nbsp;&nbsp;&nbsp;Test Information&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
            <li><a href="sample.php">&nbsp;&nbsp;&nbsp;Sample Information</a></li>
            <li><a href="testresult.php">&nbsp;&nbsp;&nbsp;Test Results&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
          </ul>
        </li>
        <li><a href="surgerydetails.php"><img src="icons8-surgery-26.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Surgery Details</a></li>
        <li>
          <a href="#"><img src="icons8-management-26.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Employee&nbsp;&nbsp;&nbsp;&nbsp;</a>
          <ul class="dropdown">
            <li><a href="employeeinformation.php">&nbsp;&nbsp;&nbsp;Add Employee&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
            <li><a href="payroll.php">&nbsp;&nbsp;&nbsp;Payroll&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
            <li><a href="disciplinaryaction.php">&nbsp;&nbsp;&nbsp;Actions&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
            <li><a href="leaveandtimeoff.php">&nbsp;&nbsp;&nbsp;Leave & Timeoff&nbsp;&nbsp;&nbsp;</a></li>
          </ul>
        </li>
        <li>
          <a href="#"><img src="icons8-expense-26.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Expense&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
          <ul class="dropdown">
            <li><a href="expenses.php">&nbsp;&nbsp;&nbsp;Expense&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
            <li><a href="utility.php">&nbsp;&nbsp;&nbsp;Utilities&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
            <li><a href="maintainence.php">&nbsp;&nbsp;&nbsp;Maintainence&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
          </ul>
        </li>
      </ul>
    </div>
</body>
</html>