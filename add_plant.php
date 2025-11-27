<?php
include_once 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $frequency = intval($_POST['frequency'] ?? 0);

    if ($name && $frequency > 0) {
        $stmt = $conn->prepare("INSERT INTO plants (name, frequency_days) VALUES (?, ?)");
        $stmt->bind_param("si", $name, $frequency);

        if ($stmt->execute()) {
            $stmt->close();
            $conn->close();
            ?>
            <script>
                alert('Plant added successfully!');
                window.location.href = 'index.php';
            </script>
            <?php
        } else {
            $stmt->close();
            $conn->close();
            ?>
            <script>
                alert('Error adding plant: <?php echo addslashes($stmt->error); ?>');
                window.history.back();
            </script>
            <?php
        }
    } else {
        ?>
        <script>
            alert('Please fill in all fields correctly.');
            window.history.back();
        </script>
        <?php
    }
} else {
    http_response_code(405);
    echo "Method Not Allowed";
}
?>
