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

// Initialize default values
$location = '';
$oilType = '';
$result_message = '';

// Check if location and oil_type are set in the POST request
if (isset($_POST['location']) && isset($_POST['oil_type'])) {
    // Get the location and oil type from the form submission
    $location = $_POST['location'];
    $oilType = $_POST['oil_type'];

    // Prepare the SQL query to fetch availability
    $sql = "SELECT availability FROM oil_stock WHERE location = ? AND oil_type = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        die("SQL statement preparation failed: " . $conn->error);
    }

    $stmt->bind_param("ss", $location, $oilType);
    $stmt->execute();
    $stmt->bind_result($availability);

    // Fetch the result
    if ($stmt->fetch()) {
        $result_message = htmlspecialchars($availability) . " liters";
    } else {
        $result_message = "No data available for the selected location and oil type.";
    }
    
    $stmt->close();
} else {
    $result_message = "Please select a location and oil type.";
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Availability Result</title>
    <link rel="stylesheet" href="check.css"> <!-- Link your CSS file -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: #fcfcf9b3;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        p {
            font-size: 18px;
            line-height: 1.5;
            color: #666;
        }
        .result {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
            box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1);
        }
        .back-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            font-size: 18px;
            text-decoration: none;
            color: #007bff;
            transition: color 0.3s;
        }
        .back-link:hover {
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Availability Result</h1>
        <div class="result">
            <p><strong>Location:</strong> <?php echo htmlspecialchars($location); ?></p>
            <p><strong>Oil Type:</strong> <?php echo htmlspecialchars($oilType); ?></p>
            <p><strong>Available Quantity:</strong> <?php echo $result_message; ?></p>
        </div>
        <a href="check.html" class="back-link">Check Another Availability</a>
    </div>
    <footer>
    <a href="test_connection.php" class="back-link">see all the report</a>
    </footer>
</body>
</html>
