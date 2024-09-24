<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>

<h1>Welcome to the Home Page</h1>

<?php
// Defining parameters
$product_id = 10;   //variable
$user = "JohnDoe";

// Creating the URL dynamically with query parameters
$link = "details.php? product_id=" . $product_id . "&user=" . urlencode($user);

?>

<!-- Link to another page with dynamic parameters -->
<a href="<?php echo $link; ?>">View Product Details</a>

</body>
</html>
