<?php
  include "sidebarmenu.php";
  include "pagenation3.php";

  include "./backend/dbconfig.php";

  $sql="SELECT invoiceno,invoicedate FROM invoice ORDER BY invoiceno DESC LIMIT 1";

  $result=$conn->query($sql);
  if($result->num_rows>0){
    $row=$result->fetch_assoc();
    $lastid=$row['invoiceno'];
    $lastdate=$row['invoicedate'];
   
}else{
    $lastid="no found";
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>New Invoice</title>
   <!-- <link rel="stylesheet" href="css/medicaldetails.css"> -->
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
  function fetchmedicinedetails() {
            var mname = document.getElementById('mname').value;
            if (mname) {
                var xhr = new XMLHttpRequest();
                xhr.open('GET', 'fetchdata.php?mname=' + mname, true);
                xhr.onreadystatechange = function() {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        var response = JSON.parse(xhr.responseText);
                        if (response.batchno !== null && response.avblqty !== null && response.unitprice !== null && response.expdate !== null) {
                            document.getElementById('batchno').value = response.batchno;
                            document.getElementById('avblqty').value = response.avblqty;
                            document.getElementById('unitprice').value=response.unitprice;
                            document.getElementById('expdate').value=response.expdate;
                        } else {
                            alert('No medicine details found for this id.');
                        }
                    }
                };
                xhr.send();
            }
        }
</script>

<script type="text/javascript">
  function calculatemultiply() {
  const unitPrice = parseFloat(document.getElementById('unitprice').value);
  const quantity = parseFloat(document.getElementById('quantity').value);

  const total = unitPrice*quantity;

  document.getElementById('total').value = total.toFixed(2);
}
</script>
<style type="text/css">
  @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
body{
  background-color:#F0F3FF;
}
.container{
  margin-left: 22%;
}
.label{
  font-size: 20px;
  letter-spacing: 2px;
  margin-left: 20px;
  color: #000000;
}
.row1{
  margin-top: 50px;
  margin-bottom: 30px;
}
.row2{
  margin-bottom: 30px;
}
.row3{
  margin-top: 30px;
  margin-bottom: 10px;
}
.row4{
  margin-left: 20px;
}
.form-control{
  color: #000000;
  margin-left: 60px;
  font-size: 20px;
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
h2{
  text-align: center;
  color: #fff;
  letter-spacing: 2px;
  background-color: #A0153E;
  line-height: 50px;
}
.a3{
  width: 50px;
  padding: 12px;
}
.a1{
  width: 50px;
  padding: 12px;
  margin-left: 30px;
}
.a2{
  padding: 12px;
}
.a4{
  padding: 12px;
}
.a5{
  padding: 12px;
}
.a6{
  padding: 12px;
  margin-left: 67px;
}
.add{
  background-color:#A0153E;
  color: #fff;
  width:50px ;
  padding: 3px;
  border-radius: 5px;

}
input:hover{
  box-shadow: 0 4px 8px rgba(0, 0, 0, 1.0);
}
.delete{
  background-color: #E7E8D8;
  color: #A0153E;
  width:50px ;
  padding: 3px;
  border-radius: 5px;
  font-weight: bold;
  border:2px solid #A0153E ;
}
button:hover{
  box-shadow: 0 4px 8px rgba(0, 0, 0, 1.0);
}
.add:hover{
  box-shadow: 0 4px 8px rgba(0, 0, 0, 1.0);
}
table{
  margin-left: 23%;
}
thead th{
  color: #000000;
  font-size: 20px;
}
.a7{
  padding:12px;
}
.a8{
  padding: 12px;
  width: 100px;
}
.a9{
  padding: 12px;
  width: 100px;
}
.a10{
  padding: 10px;
  width: 130px;
}
.a11{
  padding: 12px;
  width: 100px;
}
.a12{
  padding: 12px;
  width: 100px;
}
.a13{
  padding: 12px;
  width: 100px;
}
.save{
  margin-left: 50%;
  margin-top: 10px;
  padding: 8px;
  width: 70px;
  border-radius: 10px;
  background-color:#A0153E;
  color: #fff;
}
.invoice{
  border-radius: 10px;
  padding: 8px;
  color: #000000;
  background-color: #F0F3FF;
  border-color: #A0153E;
  border:2px solid #A0153E;
  margin-left: 10px;
}
#invoiceSection {
            display: none;
        }

        /* Styling for the print page */
        @media print {
            body * {
                visibility: hidden;
            }
            #invoiceSection, #invoiceSection * {
                visibility: visible;
            }
            #invoiceSection {
                position: absolute;
                left: 0;
                top: 0;
                width: 100%;
                margin: 0;
                padding: 0;
            }
        }
        .side{
          display: flex;
          flex-direction: row;
          margin-left: 70%;
          margin-top: 2%;
        }
        .side1{
          display: flex;
          flex-direction: row;
          margin-left: 70%;
          margin-top: 10px;
        }
        .a14{
          padding: 12px;
          margin-left: 5px;
          width: 150px;
        }
        .a15{
          width: 150px;
          padding: 12px;
          margin-left: 5px;
        }
        #invoiceTable{
          margin-top: 10px;
        }
</style>
<!-- <script>
  $(document).ready(function() {
  $('#save').click(function() {
    // Send AJAX request to server to save data
    $.ajax({
      type: 'POST',
      url: './backend/medicaldetails.php', // Replace with your server-side script
      data: {
        // Add data to be saved here
        'action': 'save_data'
      },
      success: function(response) {
        console.log('Data saved successfully');
      },
      error: function(xhr, status, error) {
        console.log('Error saving data: ' + error);
      }
    });
  });
</script> -->
<script type="text/javascript">
  function calculateTotalAmount() {
    let totalamount = 0;
    // Get all elements with the class '.a13' (assuming each total input has this class)
    const totalElements = document.querySelectorAll('.a13');
    
    // Loop through each 'total' input and add its value to totalAmount
    totalElements.forEach(element => {
        const value = parseFloat(element.value) || 0;
        totalamount += value;
    });

    // Set the totalAmount to the 'Total Amount' input box
    document.getElementById('totalamount').value = totalamount.toFixed(2);
}

// Attach this function to the event when values change (e.g., in quantity, MRP, or adding/removing rows)
// Example: calculateTotalAmount() can be called after any relevant action
</script>
<body>
    <form action="./backend/medicaldetails.php" method="post">
      <div class="container">
        <h2>Make Invoice</h2>
        <hr style="border-bottom: 2px solid #fff;">
        <div class="row1">
          <label for="id" class="label">Patient Id:</label>
          <input type="text" class="a1" name="id" id="id" onblur="fetchpatientdetails()">
          <label for="name" class="label">Patient Name:</label>
          <input type="text" class="a2" name="name" id="name" placeholder="Enter Patient Name" readonly>
          <label for="invoiceno" class="label">Invoice No:</label>
          <input type="text" class="a3" name="invoiceno" id="invoiceno" value="<?php echo $lastid; ?>" readonly>
          <label for="invoicedate" class="label">InvoiceDate:</label>
          <input type="date" class="a4" name="invoicedate" id="invoicedate" value="<?php echo $lastdate;?>" readonly>
        </div>
        <div class="row2">
          <label for="paymenttype" class="label">Paymenttype:</label>
          <select id="paymenttype" name="paymenttype" class="a5">
            <option value="select">select</option>
            <option value="cash">cash</option>
            <option value="card">card</option>
            <option value="gpay">Gpay</option>
          </select>
          <label for="phone" class="label">Phone:</label>
          <input type="text" class="a6" name="phone" id="phone" readonly>
        </div>
      </div>
        <hr style="border-bottom:2px solid #fff;">
        <table id="invoiceTable">
          <thead>
            <tr>
              <th>Medicine Name</th>
              <th>Batch No</th>
              <th>Avbl Qty</th>
              <th>Expiry Date</th>
              <th>Quantity</th>
              <th>MRP</th>
              <th>Total</th>
              <th>Acion</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><input type="text"  name="mname[]" id="mname" class="a7" onblur="fetchmedicinedetails()"></td>
              <td><input type="text" name="batchno[]" id="batchno" class="a8" readonly></td>
              <td><input type="text" name="avblqty[]" id="avblqty" class="a9"></td>
              <td><input type="date" name="expdate[]" id="expdate" class="a10"></td>
              <td><input type="text" name="quantity[]" id="quantity" class="a11"></td>
              <td><input type="text" name="unitprice[]" id="unitprice" class="a12" readonly></td>
              <td><input type="text" name="total[]" id="total" class="a13" onclick="calculatemultiply()" readonly></td>
              <td><button type="button" class="add" id="add" onclick="addRow()"><span class="material-symbols-outlined">Add</span></button>
                <button type="button" class="delete" id="delete" onclick="deleteRow()"><span class="material-symbols-outlined">Delete</span></button></td>
            </tr>
          </tbody>
        </table>
        <div class="side">
          <div class="label">Total Amount</div>
          <div class="label">Paid Amount</div>
        </div>
        <div class="side1">
          <input type="text" name="totalamount" id="totalamount" class="a14" onclick="calculateTotalAmount()" readonly>
          <input type="text" name="paidamount" id="paidamount" class="a15">
        </div>
        <button type="submit"  id="save" name="save" class="save">Submit</button>
        <button type="button" onclick="generateInvoice()" class="invoice">Generate Invoice</button>



       <!-- invoive section -->
          <!-- <div id="invoiceSection">
            <h2>la<span>X</span>mi Hospital</h2>
            <div id="invoiceDetails"></div>
            <button onclick="window.print()">Print </button>
          </div> -->  
    <script>
        function addRow() {
            const table = document.getElementById('invoiceTable').getElementsByTagName('tbody')[0];
            const newRow = table.insertRow();

            // Create cells and append to newRow
            let cell1 = newRow.insertCell(0);
            let cell2 = newRow.insertCell(1);
            let cell3 = newRow.insertCell(2);
            let cell4 = newRow.insertCell(3);
            let cell5 = newRow.insertCell(4);
            let cell6 = newRow.insertCell(5);
            let cell7 = newRow.insertCell(6);
            let cell8 = newRow.insertCell(7);

            // Add input elements in the cells
            cell1.innerHTML = '<input type="text" name="mname[]" class="a7">';
            cell2.innerHTML = '<input type="text" name="batchno[]" class="a8">';
            cell3.innerHTML = '<input type="text" name="avblqty[]" class="a9">';
            cell4.innerHTML = '<input type="date" name="expirydate[]" class="a10">';
            cell5.innerHTML = '<input type="number" name="quantity[]" class="a11" onchange="updateTotal(this)">';
            cell6.innerHTML = '<input type="number" name="mrp[]" class="a12" onchange="updateTotal(this)">';
            cell7.innerHTML = '<input type="text" name="total[]" class="a13" readonly>';
            cell8.innerHTML = '<button type="button" class="add" onclick="addRow()"><span class="material-symbols-outlined">Add</span></button>&nbsp;<button type="button" class="delete" onclick="deleteRow(this)"><span class="material-symbols-outlined">Delete</span></button>';
        }

        function updateTotal(element) {
            const row = element.parentElement.parentElement;
            const quantity = row.querySelector('input[name="quantity[]"]').value;
            const mrp = row.querySelector('input[name="mrp[]"]').value;
            const total = row.querySelector('input[name="total[]"]');

            if (quantity && mrp) {
                total.value = quantity * mrp;
            } else {
                total.value = '';
            }
        }

        function deleteRow(button) {
            const row = button.parentElement.parentElement;
            row.parentElement.removeChild(row);
        }

       /* function generateInvoice() {
          const invoiceSection = document.getElementById('invoiceSection');
            const invoiceDetails = document.getElementById('invoiceDetails');
            invoiceDetails.innerHTML = ''; // Clear previous details

            const id = document.getElementById('id').value;
            const name = document.getElementById('name').value;
            const invoiceno = document.getElementById('invoiceno').value;
            const address = document.getElementById('address').value;
            const paymenttype = document.getElementById('paymenttype').value;
            const phone = document.getElementById('phone').value;

            let tableHTML = '<table><thead><tr>';
            tableHTML += '<th>Medicine Name</th><th>Batch No</th><th>Avbl Qty</th><th>Expiry Date</th><th>Quantity</th><th>MRP</th><th>Total</th>';
            tableHTML += '</tr></thead><tbody>';

            const rows = document.querySelectorAll('#invoiceTable tbody tr');
            rows.forEach(row => {
                const mname = row.querySelector('input[name="mname[]"]').value;
                const batchno = row.querySelector('input[name="batchno[]"]').value;
                const avblqty = row.querySelector('input[name="avblqty[]"]').value;
                const expirydate = row.querySelector('input[name="expirydate[]"]').value;
                const quantity = row.querySelector('input[name="quantity[]"]').value;
                const mrp = row.querySelector('input[name="mrp[]"]').value;
                const total = row.querySelector('input[name="total[]"]').value;

                tableHTML += `<tr>
                    <td>${mname}</td>
                    <td>${batchno}</td>
                    <td>${avblqty}</td>
                    <td>${expirydate}</td>
                    <td>${quantity}</td>
                    <td>${mrp}</td>
                    <td>${total}</td>
                </tr>`;
            });

            tableHTML += '</tbody></table>';

            invoiceDetails.innerHTML += `<p>Patient ID: ${id}</p>`;
            invoiceDetails.innerHTML += `<p>Patient Name: ${name}</p>`;
            invoiceDetails.innerHTML += `<p>Invoice No: ${invoiceno}</p>`;
            invoiceDetails.innerHTML += `<p>Address: ${address}</p>`;
            invoiceDetails.innerHTML += `<p>Payment Type: ${paymenttype}</p>`;
            invoiceDetails.innerHTML += `<p>Phone: ${phone}</p>`;
            invoiceDetails.innerHTML += tableHTML;

            invoiceSection.style.display = 'block';
        }
       */
    </script>
    <script type="text/javascript">
      function calculatemultiply() {
  const unitPrice = parseFloat(document.getElementById('unitprice').value);
  const quantity = parseFloat(document.getElementById('quantity').value);

  const total = unitPrice*quantity;

  document.getElementById('total').value = total.toFixed(2);
}
    </script>
</body>

</html>
