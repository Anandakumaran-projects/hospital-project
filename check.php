<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>invoice</title>
</head>
<body>
	<form action="" method="post">
      <div class="container">
        <h2>Make Invoice</h2>
        <hr style="border-bottom: 2px solid #fff;">
        <div class="row1">
          <label for="id" class="label">Patient Id:</label>
          <input type="text" class="a1" name="id" id="id" onblur="fetchpatientdetails()">
          <label for="name" class="label">Patient Name:</label>
          <input type="text" class="a2" name="name" id="name" placeholder="Enter Patient Name">
          <label for="invoiceno" class="label">Invoice No:</label>
          <input type="text" class="a3" name="invoiceno" id="invoiceno" value="<?php echo $lastid; ?>">
          <label for="address" class="label">Address:</label>
          <input type="text" class="a4" name="address" id="address">
        </div>
        <div class="row2">
          <label for="paymenttype" class="label">Paymenttype:</label>
          <select id="paymenttype" class="a5">
            <option value="select">select</option>
            <option value="cash">cash</option>
            <option value="card">card</option>
            <option value="gpay">Gpay</option>
          </select>
          <label for="phone" class="label">Phone:</label>
          <input type="text" class="a6" name="phone" id="phone">
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
              <td><input type="text"  name="mname" id="mname" class="a7"></td>
              <td><input type="text" name="batchno" id="batchno" class="a8"></td>
              <td><input type="text" name="avblqty" id="avblqty" class="a9"></td>
              <td><input type="date" name="expiryDate" id="expirydate" class="a10"></td>
              <td><input type="text" name="quantity" id="quantity" class="a11"></td>
              <td><input type="text" name="mrp" id="mrp" class="a12"></td>
              <td><input type="text" name="total" id="total" class="a13"></td>
              <td><button type="button" class="add" id="add" onclick="addRow()"><span class="material-symbols-outlined">Add</span></button>
                <button type="button" class="delete" id="delete" onclick="deleteRow()"><span class="material-symbols-outlined">Delete</span></button></td>
            </tr>
          </tbody>
        </table>
        <button type="button" onclick="save()" class="save">save</button>
        <button type="button" onclick="generateInvoice()" class="invoice">Generate Invoice</button>



        <!-- invoive section -->
          <div id="invoiceSection">
            <h2>la<span>X</span>mi Hospital</h2>
            <div id="invoiceDetails"></div>
            <button onclick="window.print()">Print </button>
          </div>
          
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

        function generateInvoice() {
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
    
</script>
</body>
</html>