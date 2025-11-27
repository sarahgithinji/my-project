<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "plantcare_db"; // your DB name

// If not logged in, redirect to login page
if (!isset($_SESSION['username']) && !isset($_COOKIE['username'])) {
    header("Location: index.html");
    exit();
}

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $frequency_days = $_POST['frequency'] ?? '';

    $stmt = $conn->prepare("INSERT INTO plants (name, frequency_days) VALUES (?, ?)");
    $stmt->bind_param("ss", $name, $frequency_days);

    if ($stmt->execute()) {
        echo "🌱 Plant added successfully!";
    } else {
        echo "Database error: " . $stmt->error;
    }

    $stmt->close();
}

// Greeting message
$user = $_SESSION['username'] ?? $_COOKIE['username'] ?? 'Guest';
echo "<br>Welcome, " . htmlspecialchars($user) . "!";

// Add form
?>
<br><br>
<form method="POST" action="">
  <label>Plant Name:</label>
  <input type="text" name="name" required><br><br>

  <label>Watering Frequency (days):</label>
  <input type="number" name="frequency" required><br><br>

  <button type="submit">Save Plant</button>
</form>

<br>
<a href="logout.php">Logout</a>
<?php
$conn->close();
?>
