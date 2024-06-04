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
        <div class="cards">
        <div class="card card-1">
                    <div class="card--title">
                        <span class="card--icon icon"><i class="ri-shopping-bag-2-line"></i></span>
                        <span>Sales</span>
                    </div>
                    <h3 class="card--value">$432,576.34 <i class="ri-arrow-up-circle-fill up"></i></h3>
                    
                    <div class="chart">
                        <canvas id="sales"></canvas>
                    </div>
                </div>

                <div class="card card-2">
                    <div class="card--title">
                        <span class="card--icon icon"><i class="ri-handbag-line"></i></span>
                        <span>Products</span>
                    </div>
                    <h3 class="card--value">432,576 <i class="ri-arrow-down-circle-fill down "></i></h3>
                   <h5 class="more">4,234 more than usual</h5>
                    <div class="chart">
                        <canvas id="products"></canvas>
                    </div>
                </div>

                <div class="card card-3">
                    <div class="card--title">
                        <span class="card--icon icon"><i class="ri-booklet-line"></i></span>
                        <span>Orders</span>
                    </div>
                    <h3 class="card--value">20,000+ <i class="ri-arrow-up-circle-fill up"></i></h3>
                    
                    <div class="chart">
                        <canvas id="orders"></canvas>
                    </div>
                </div>

                <div class="card card-4">
                    <div class="card--title">
                        <span class="card--icon icon"><i class="ri-user-line"></i></span>
                        <span>clients</span>
                    </div>
                    <h3 class="card--value">200+ <i class="ri-arrow-down-circle-fill down"></i></h3>
                  
                    <div class="chart">
                        <canvas id="clients"></canvas>
                    </div>
                </div>
        </div>
    </section>
    
    
</body>

<script src="script.js"></script>
</html>
