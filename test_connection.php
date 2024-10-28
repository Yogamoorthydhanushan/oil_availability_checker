<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "oil_availability"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to fetch all data in oil_stock table
$sql = "SELECT * FROM oil_stock";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Data in oil_stock Table:</h2>";
    echo "<table border='1' cellpadding='10' cellspacing='0' style='border-collapse: collapse; width: 100%;'>
            <tr style='background-color: #f2f2f2;'>
                <th>Location</th>
                <th>Oil Type</th>
                <th>Availability</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['location'] . "</td>
                <td>" . $row['oil_type'] . "</td>
                <td>" . $row['availability'] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "<p>No data found in the oil_stock table.</p>";
}

$conn->close();
?>
