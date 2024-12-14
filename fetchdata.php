<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospital"; // Adjust database name accordingly

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $id = $conn->real_escape_string($_GET['id']);
    $stmt = $conn->prepare("SELECT name,phone FROM registration WHERE id = ?");
    $stmt->bind_param("s", $id);
    $stmt->execute();
    $stmt->bind_result($name,$phone);
    $stmt->fetch();
    $stmt->close();
    $conn->close();
    echo json_encode(['name' => $name, 'phone' => $phone]);
    exit;
}


if (isset($_GET['empid'])) {
    $empid = $conn->real_escape_string($_GET['empid']);
    $stmt = $conn->prepare("SELECT empname,phone FROM employee WHERE empid = ?");
    $stmt->bind_param("s", $empid);
    $stmt->execute();
    $stmt->bind_result($empname,$phone);
    $stmt->fetch();
    $stmt->close();
    $conn->close();
    echo json_encode(['name' => $empname, 'phone' => $phone]);
    exit;
}
if (isset($_GET['mname'])) {
    $mname = $conn->real_escape_string($_GET['mname']);
    $stmt = $conn->prepare("SELECT batchno,avblqty,unitprice,expdate FROM pharmacy WHERE mname = ?");
    $stmt->bind_param("s", $mname);
    $stmt->execute();
    $stmt->bind_result($batchno,$avblqty,$unitprice,$expdate);
    $stmt->fetch();
    $stmt->close();
    $conn->close();
    echo json_encode(['batchno' => $batchno, 'avblqty' => $avblqty,'unitprice' =>$unitprice,'expdate'=>$expdate]);
    exit;
}
?>