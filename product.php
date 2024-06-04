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
<?php
include'dash.php'
?>
            <div class="scroll">
            <div class="cardi">
            <div class="card">
                <img src="b.png" alt="Bearings" class="image">
                <h1 class="name">Ball bearings.</h1>
                <p class="price">$14.99</p>
                <p>Deep groove ball bearings 6000-6005/2RS bearing steel for high speed.</p>
                <button onclick="addToCart('Ball bearings', 14.99, 'b.png')">Add to Cart</button>
            </div>

            <div class="card">
                <img src="h.png" alt="Hiking helmet" class="image">
                <h1 class="name">Hiking helmet.</h1>
                <p class="price">$25.99</p>
                <p>Versatile helmet suitable for both hiking and biking adventures, providing reliable head protection.</p>
                <button onclick="addToCart('Hiking helmet', 25.99, 'h.png')">Add to Cart</button>
            </div>

            <div class="card">
                <img src="h1.png" alt="Aaero helmet" class="image">
                <h1 class="name">Aaero helmet.</h1>
                <p class="price">$39.99</p>
                <p>Aerodynamic Streamlined, lightweight helmet engineered for speed and performance.</p>
                <button onclick="addToCart('Aaero helmet', 39.99, 'h1.png')">Add to Cart</button>
            </div>

            <div class="card">
                <img src="h2.png" alt="Biking boots" class="image">
                <h1 class="name">Biking boots.</h1>
                <p class="price">$28.99</p>
                <p>Durable and agile boots designed for high-speed maneuvers on any terrain.</p>
                <button onclick="addToCart('Biking boots', 28.99, 'h2.png')">Add to Cart</button>
            </div>
        </div>
    </div>
    </section>

   
  
   
</body>
<script src="script.js"></script>

</html>
