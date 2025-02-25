<?php
function getMenuItems() {
    $conn = new mysqli('localhost', 'root', '', 'cafe_haven');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT name, description, image FROM menu_items";
    $result = $conn->query($sql);

    $menu = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $menu[] = $row;
        }
    }
    $conn->close();
    return $menu;
}
?>
