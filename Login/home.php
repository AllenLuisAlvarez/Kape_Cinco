<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Ordering UI</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
      rel="stylesheet">
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <div class="logo">
                <img src="/Kape_Cinco/images/kape_cinco.jpg" alt="Logo">
            </div>
            <nav>
                <ul>
                    <li><a href="#"><span class="material-icons-sharp" alt="Home">home</span></a></li>
                    <li><a href="#"><span class="material-icons-sharp" alt="Bills">payment</span></a></li>
                    <li><a href="#"><span class="material-icons-sharp" alt="Statistics">equalizer</span></a></li>
                    <li><a href="#"><span class="material-icons-sharp" alt="settings">settings</span></a></li>
                </ul>
            </nav>
            <div class="profile">
            <span class="material-icons-sharp">account_circle</span>
            </div>
        </div>
        <div class="main-content">
            <div class="header">
                <input type="text" placeholder="Search category or menu">
                <button>Search</button>
            </div>
            <div class="categories">
                <button class="active">All Items</button>
                <button>Silog</button>
                <button>Steak</button>
                <button>Fish</button>
                <button>Salad</button>
                <button>Juice</button>
                <button>Dessert</button>
                <button>Burger</button>
            </div>
            <div class="food-list">
                <div class="food-item">
                    <img src="food1.jpg" alt="HotSilog">
                    <h3>HotSilog</h3>
                    <p>120</p>
                     <button class="add-to-cart"><span class="material-icons-sharp">add_shopping_cart</span></button>
                </div>
                <div class="food-item">
                    <img src="food1.jpg" alt="HotSilog">
                    <h3>HotSilog</h3>
                    <p>120</p>
                     <button class="add-to-cart"><span class="material-icons-sharp">add_shopping_cart</span></button>
                </div>
                <div class="food-item">
                    <img src="food2.jpg" alt="Fried Fish Dumplings">
                    <h3>Fried Fish Dumplings</h3>
                    <p>Rp 20.450</p>
                    <button class="add-to-cart"><span class="material-icons-sharp">add_shopping_cart</span></button>
                </div> 
                <div class="food-item">
                    <img src="food3.jpg" alt="Mango Frost Special">
                    <h3>Mango Frost Special</h3>
                    <p>Rp 16.360</p>
                    <button class="add-to-cart"><span class="material-icons-sharp">add_shopping_cart</span></button>
                </div>
                <div class="food-item">
                    <img src="food4.jpg" alt="Rica-Rica Roast Chicken">
                    <h3>Rica-Rica Roast Chicken</h3>
                    <p>Rp 42.500</p>
                    <button class="add-to-cart"><span class="material-icons-sharp">add_shopping_cart</span></button>
                </div>
                <!-- Add more food items as needed -->
            </div>
        </div>
        <div class="bills-section">
            <h2>Cart</h2>
            <div class="cart-items">
                <!-- Cart items will be added here dynamically -->
            </div>
            <div class="total">
                <span>Total:</span>
                <span id="total-amount">Rp 0</span>
            </div>
            <button id="proceed-to-payment-bills">Proceed to Payment</button>
        </div>


    </div>
    <script src="home.js"></script>
</body>
</html>
