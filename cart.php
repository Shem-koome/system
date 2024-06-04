<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MILLIONAIRE'S EMPLOYEES FORM</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <?php include 'dash.php'; ?>
    <div class="cart">
        <h2>Shopping Cart</h2>
        <br>
        <hr>
        <br>
        <table id="cart-items">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Item</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Cart items will be added here dynamically -->
            </tbody>
        </table>
        <br> <br> <br> <br>
        <div class="container">
            <h2>
                <div>Total: $<span id="total-price">0.00</span></div>
            </h2>
        </div>
        <br>
        <div class="button-container">
            <button onclick="window.location.href = 'product.php';">Continue Shopping</button>
            <button id="checkout-btn">Make Order</button>
        </div>
    </div>
    <!-- Modal -->
    <div id="agentModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Select Agent</h2>
            <br>
            <hr>
            <form id="agentForm">
                <label for="agents">Choose an agent:</label>
                <select id="agents" name="agents">
                    <option value="agent1">Agent 1</option>
                    <option value="agent2">Agent 2</option>
                    <option value="agent3">Agent 3</option>
                    <option value="agent4">Agent 4</option>
                    <option value="agent5">Agent 5</option>
                    <!-- Add more options as needed -->
                </select>
                <div class="button-container">
                    <button type="submit">Confirm</button>
                </div>
            </form>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
