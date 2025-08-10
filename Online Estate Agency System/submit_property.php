<?php
// submit_property.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connect to your database
    require 'db.php'; // make sure db.php is present

    $owner = $_POST['owner'];
    $address = $_POST['address'];
    $type = $_POST['type'];
    $bedrooms = $_POST['bedrooms'];
    $bathrooms = $_POST['bathrooms'];
    $area = $_POST['area'];
    $price = $_POST['price'];
    $contact = $_POST['contact'];

    $stmt = $conn->prepare("INSERT INTO properties (owner, address, type, bedrooms, bathrooms, area, price, contact) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssiiids", $owner, $address, $type, $bedrooms, $bathrooms, $area, $price, $contact);

    if ($stmt->execute()) {
        echo "Property submitted successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request!";
}
?>
