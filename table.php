<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Page</title>
    <style>
        /* Basic styling for the table and buttons */
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
        }
        th, td {
            text-align: center;
        }
        button {
            padding: 5px 10px;
            margin-top: 10px;
        }

        /* Hide the invoice section initially */
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
    </style>
</head>
<body>
    <div>
        <h2>Make Invoice</h2>
        <form>
            <label for="patientId">Patient ID:</label>
            <input type="text" id="patientId" name="patientId">
            <label for="patientName">Patient Name:</label>
            <input type="text" id="patientName" name="patientName">
            <label for="invoiceNo">Invoice No:</label>
            <input type="text" id="invoiceNo" name="invoiceNo" value="INV-9">
            <label for="address">Address:</label>
            <input type="text" id="address" name="address">
            <label for="paymentType">Payment Type:</label>
            <select id="paymentType" name="paymentType">
                <option value="cash">Cash</option>
                <option value="card">Card</option>
            </select>
            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone">
        </form>
    </div>
    
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
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><input type="text" name="medicineName[]"></td>
                <td><input type="text" name="batchNo[]"></td>
                <td><input type="text" name="avblQty[]"></td>
                <td><input type="date" name="expiryDate[]"></td>
                <td><input type="number" name="quantity[]" onchange="updateTotal(this)"></td>
                <td><input type="number" name="mrp[]" onchange="updateTotal(this)"></td>
                <td><input type="text" name="total[]" readonly></td>
                <td>
                    <button type="button" onclick="addRow()">+</button>
                    <button type="button" onclick="deleteRow(this)">-</button>
                </td>
            </tr>
        </tbody>
    </table>

    <button type="button" onclick="generateInvoice()">Generate Invoice</button>

    <!-- Invoice Section -->
    <div id="invoiceSection">
        <h2>Invoice</h2>
        <div id="invoiceDetails"></div>
        <button onclick="window.print()">Print Invoice</button>
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
            cell1.innerHTML = '<input type="text" name="medicineName[]">';
            cell2.innerHTML = '<input type="text" name="batchNo[]">';
            cell3.innerHTML = '<input type="text" name="avblQty[]">';
            cell4.innerHTML = '<input type="date" name="expiryDate[]">';
            cell5.innerHTML = '<input type="number" name="quantity[]" onchange="updateTotal(this)">';
            cell6.innerHTML = '<input type="number" name="mrp[]" onchange="updateTotal(this)">';
            cell7.innerHTML = '<input type="text" name="total[]" readonly>';
            cell8.innerHTML = '<button type="button" onclick="addRow()">+</button> <button type="button" onclick="deleteRow(this)">-</button>';
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

            const patientId = document.getElementById('patientId').value;
            const patientName = document.getElementById('patientName').value;
            const invoiceNo = document.getElementById('invoiceNo').value;
            const address = document.getElementById('address').value;
            const paymentType = document.getElementById('paymentType').value;
            const phone = document.getElementById('phone').value;

            let tableHTML = '<table><thead><tr>';
            tableHTML += '<th>Medicine Name</th><th>Batch No</th><th>Avbl Qty</th><th>Expiry Date</th><th>Quantity</th><th>MRP</th><th>Total</th>';
            tableHTML += '</tr></thead><tbody>';

            const rows = document.querySelectorAll('#invoiceTable tbody tr');
            rows.forEach(row => {
                const medicineName = row.querySelector('input[name="medicineName[]"]').value;
                const batchNo = row.querySelector('input[name="batchNo[]"]').value;
                const avblQty = row.querySelector('input[name="avblQty[]"]').value;
                const expiryDate = row.querySelector('input[name="expiryDate[]"]').value;
                const quantity = row.querySelector('input[name="quantity[]"]').value;
                const mrp = row.querySelector('input[name="mrp[]"]').value;
                const total = row.querySelector('input[name="total[]"]').value;

                tableHTML += `<tr>
                    <td>${medicineName}</td>
                    <td>${batchNo}</td>
                    <td>${avblQty}</td>
                    <td>${expiryDate}</td>
                    <td>${quantity}</td>
                    <td>${mrp}</td>
                    <td>${total}</td>
                </tr>`;
            });

            tableHTML += '</tbody></table>';

            invoiceDetails.innerHTML += `<p>Patient ID: ${patientId}</p>`;
            invoiceDetails.innerHTML += `<p>Patient Name: ${patientName}</p>`;
            invoiceDetails.innerHTML += `<p>Invoice No: ${invoiceNo}</p>`;
            invoiceDetails.innerHTML += `<p>Address: ${address}</p>`;
            invoiceDetails.innerHTML += `<p>Payment Type: ${paymentType}</p>`;
            invoiceDetails.innerHTML += `<p>Phone: ${phone}</p>`;
            invoiceDetails.innerHTML += tableHTML;

            invoiceSection.style.display = 'block';
        }
    </script>
</body>
</html>
