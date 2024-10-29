<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "oil_availability";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$location = $_POST['location'];
$oilType = $_POST['oil_type'];

$sql = "SELECT availability FROM oil_stock WHERE location = ? AND oil_type = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $location, $oilType);
$stmt->execute();
$stmt->bind_result($availability);
$stmt->fetch();

echo json_encode(["availability" => $availability]);

$stmt->close();
$conn->close();
?>
