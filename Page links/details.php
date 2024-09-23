<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
</head>
<body>

<h1>Product Details Page</h1>

<?php
// Check if 'product_id' and 'user' are set in the URL
if (isset($_GET['product_id']) && isset($_GET['user'])) {
    // Retrieve the values from the URL
    $product_id = $_GET['product_id'];
    $user = htmlspecialchars($_GET['user']);

    // Data Display
    echo "<p>Product ID: " . $product_id . "</p>";
    echo "<p>Username: " . $user . "</p>";
} else {
    echo "<p>No product selected or missing information.</p>";
}
?>

<a href="index.php">Back to Home</a>

</body>
</html>
