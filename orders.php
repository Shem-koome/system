<?php
session_start();
include('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $order = $_POST['order'];
    $agent = $_POST['agent'];
    $date = $_POST['date'];
    $amount = $_POST['amount'];
    $orderNumber = $_POST['orderNumber'];

    // Validate inputs
    if (empty($order) || empty($agent) || empty($date) || empty($amount) || empty($orderNumber)) {
        echo json_encode(["status" => "error", "message" => "All fields are required"]);
        exit();
    }

    // Insert the order into the database
    $sql = "INSERT INTO orders (order_number, order_details, agent, date, amount) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $orderNumber, $order, $agent, $date, $amount);

    if ($stmt->execute()) {
        echo json_encode(["status" => "success", "order_id" => $stmt->insert_id]);
    } else {
        echo json_encode(["status" => "error", "message" => $stmt->error]);
    }

    $stmt->close();
    $conn->close();
}
?>
