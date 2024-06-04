<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MILLIONAIRE'S EMPLOYEES FORM</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="dashboard.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .order {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            transition: box-shadow 0.3s ease;
            flex: 0 0 auto;
            justify-content: space-between;
            background: #FFA500;
            cursor: pointer;
            transition: background-color 0.5s, color 0.5s;
        }

        .order:hover {
            background: rgb(43, 214, 226);
            opacity: 0.9;
        }

        h2 {
            color: var(--text-color-first);
            text-align: center;
        }

        .order table {
            width: 100%;
            border-collapse: collapse;
        }

        .order th, .order td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
            flex: 0 0 auto;
            overflow: hidden;
        }

        .order th {
            background-color: #f2f2f2;
        }

        .order button {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            padding: 15px 25px;
            margin: 0 330px;
        }

        .order button:hover {
            background-color: red;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0,0.4);
            padding-top: 60px;
        }

        .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .button-container {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <?php include 'dash.php'; ?>
    <div class="order">
        <h2>Orders</h2>
        <br>
        <hr>
        <br>
        <table id="Order">
            <thead>
                <tr>
                    <th>Order Number</th>
                    <th>Order</th>
                    <th>Agent</th>
                    <th>Date</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                <!-- Cart items will be added here dynamically -->
            </tbody>
        </table>
        <br><br><br><br>       
        <div class="button-container">
            <button id="checkout-btn">Checkout</button>
        </div>
    </div>

   

    <script src="script.js"></script>
</body>
</html>
