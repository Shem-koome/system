<body class="body">
    <section class="header">
        <div class="logo">
            <i class="ri-menu-line menu" id="menuIcon"></i>
            <h2><span>M</span> Entreprise</h2>
        </div>
        <div class="header--items">
<!-- Cart Icon -->
<div class="cart-icon-container">
<a class="icon-link"  href="cart.php">
            <i class="ri-shopping-cart-line" aria-label="Cart"></i>                   
    <span id="cart-count" class="cart-count">0</span>
    </a> 
</div>  
            <!-- Dark/Light Theme Toggle -->
            <div class="dark-theme-btn">
                <i class="ri ri-moon-line moon" aria-label="Dark Mode"></i>
                <i class="ri ri-sun-line sun" aria-label="Light Mode"></i>
            </div>
            
            <!-- Notification Icon -->
            <i class="ri ri-notification-2-line" aria-label="Notifications"></i>
            
            <!-- Chat Icon -->
            <i class="ri ri-wechat-2-line chat" aria-label="Chat"></i>
            
            <!-- Profile Image -->
            <div class="profile">
                <img src="2.png" alt="Profile Picture">
            </div>
        </div>   
    </section>

    <section class="main">
        <div class="sidebar" id="sidebar">
            <ul class="sidebar--items">
                <li>
                    <a href="dashboard.php">
                        <span class="icon"><i class="ri-bar-chart-line"></i></span>
                        <span class="sidebar--item">Overview</span>
                    </a>
                </li>
                <li>
                    <a href="product.php">
                        <span class="icon"><i class="ri-handbag-line"></i></span>
                        <span class="sidebar--item">Products</span>
                    </a>
                </li>
                <li>
                    <a href="cart.php">
                        <span class="icon"><i class="ri-shopping-cart-2-line"></i></span>
                        <span class="sidebar--item">Cart</span>
                    </a>
                </li>
                <li>                
                    <a href="order.php">
                        <span class="icon"><i class="ri-booklet-line"></i></span>
                        <span class="sidebar--item">Orders</span>
                    </a>
                </li>
                
                
                <li>
                    <a href="#checkout">
                        <span class="icon"><i class="ri-bank-card-line"></i></span>
                        <span class="sidebar--item">Checkout</span>
                    </a>
                </li>
                <li>
                    <a href="#clients">
                        <span class="icon"><i class="ri-user-line"></i></span>
                        <span class="sidebar--item">clients</span>
                    </a>
                </li>
                <li>
                    <a href="#settings">
                        <span class="icon"><i class="ri-settings-3-line"></i></span>
                        <span class="sidebar--item">Settings</span>
                    </a>
                </li>
            </ul>
            <ul class="sidebar--bottom--items">
                <li>
                    <a href="#help">
                        <span class="icon"><i class="ri-question-line"></i></span>
                        <span class="sidebar--item">Help</span>
                    </a>
                </li>
                <li>
                    <a href="logout.php">
                        <span class="icon"><i class="ri-logout-box-r-line"></i></span>
                        <span class="sidebar--item">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="main--container">
            <div class="section--title">
                <h3 class="title">Welcome back, MILLIONAIRE</h3>
                <select name="date" id="date">
                    <option value="last7">Last 7 days</option>
                    <option value="lastmonth">Last month</option>
                    <option value="lastyear">Last year</option>
                    <option value="alltime">All time</option>
                </select>
            </div>

 
                
            </body>

<script>
        // JavaScript code to add 'active' class to the current page's sidebar item
        document.addEventListener('DOMContentLoaded', function() {
            var currentPage = window.location.pathname.split('/').pop();
            var sidebarLinks = document.querySelectorAll('.sidebar--items a');
            sidebarLinks.forEach(function(link) {
                if (link.getAttribute('href') === currentPage) {
                    link.classList.add('active');
                }
            });
        });
    </script>