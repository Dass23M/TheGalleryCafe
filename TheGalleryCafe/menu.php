<?php
$conn = new mysqli('localhost', 'root', '', 'restaurant');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM menu_sl";
$result = $conn->query($sql);

$menu_sl = array();
while ($row = $result->fetch_assoc()) {
    $menu_sl[] = $row;
}

echo json_encode($menu_sl);

$conn->close();
?>
<?php
$conn = new mysqli('localhost', 'root', '', 'restaurant');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$data = json_decode(file_get_contents('php://input'), true);
$success = true;

foreach ($data as $item) {
    $item_id = $item['id'];
    $quantity = $item['quantity'];
    $total_price = $item['price'] * $quantity;

    $sql = "INSERT INTO orders (item_id, quantity, total_price) VALUES ('$item_id', '$quantity', '$total_price')";

    if (!$conn->query($sql)) {
        $success = false;
        break;
    }
}

echo json_encode(['success' => $success]);

$conn->close();
?>
