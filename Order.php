<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'cafe_haven');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $customer_name = trim($_POST['customer_name']);
    $customer_email = trim($_POST['customer_email']);
    $menu_item = trim($_POST['menu_item']);
    $quantity = (int) $_POST['quantity'];
    $price_per_item = 5.00; // Example price, adjust accordingly
    $total_price = $quantity * $price_per_item;

    $stmt = $conn->prepare("INSERT INTO orders (customer_name, customer_email, menu_item, quantity, total_price) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssdi", $customer_name, $customer_email, $menu_item, $quantity, $total_price);

    if ($stmt->execute()) {
        echo "<p>Order placed successfully!</p>";
    } else {
        echo "<p>Error: " . htmlspecialchars($stmt->error) . "</p>";
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order - Cafe Haven</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h2 class="text-center my-5">Place Your Order</h2>
    <form method="POST">
        <div class="mb-3">
            <label for="customer_name" class="form-label">Name</label>
            <input type="text" class="form-control" id="customer_name" name="customer_name" required>
        </div>
        <div class="mb-3">
            <label for="customer_email" class="form-label">Email</label>
            <input type="email" class="form-control" id="customer_email" name="customer_email" required>
        </div>
        <div class="mb-3">
            <label for="menu_item" class="form-label">Menu Item</label>
            <select class="form-control" id="menu_item" name="menu_item" required>
                <option value="Espresso">Espresso</option>
                <option value="Latte">Latte</option>
                <option value="Cappuccino">Cappuccino</option>
                <option value="Pastry">Pastry</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label">Quantity</label>
            <input type="number" class="form-control" id="quantity" name="quantity" min="1" required>
        </div>
        <button type="submit" class="btn btn-primary">Place Order</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
