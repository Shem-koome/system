document.addEventListener('DOMContentLoaded', (event) => {
    // Password validation and matching
    var password = document.getElementById("password");
    var confirm_password = document.getElementById("confirm_password");

    if (password && confirm_password) {
        function validatePassword() {
            if (password.value != confirm_password.value) {
                confirm_password.setCustomValidity("Passwords Don't Match");
            } else {
                confirm_password.setCustomValidity('');
            }
        }

        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
    }

    var myInput = document.getElementById("password");
    var letter = document.getElementById("letter");
    var capital = document.getElementById("capital");
    var number = document.getElementById("number");
    var length = document.getElementById("length");

    if (myInput) {
        myInput.onfocus = function() {
            document.getElementById("message").style.display = "block";
        }

        myInput.onblur = function() {
            document.getElementById("message").style.display = "none";
        }

        myInput.onkeyup = function() {
            var lowerCaseLetters = /[a-z]/g;
            if (myInput.value.match(lowerCaseLetters)) {
                letter.classList.remove("invalid");
                letter.classList.add("valid");
            } else {
                letter.classList.remove("valid");
                letter.classList.add("invalid");
            }

            var upperCaseLetters = /[A-Z]/g;
            if (myInput.value.match(upperCaseLetters)) {
                capital.classList.remove("invalid");
                capital.classList.add("valid");
            } else {
                capital.classList.remove("valid");
                capital.classList.add("invalid");
            }

            var numbers = /[0-9]/g;
            if (myInput.value.match(numbers)) {
                number.classList.remove("invalid");
                number.classList.add("valid");
            } else {
                number.classList.remove("valid");
                number.classList.add("invalid");
            }

            if (myInput.value.length >= 8) {
                length.classList.remove("invalid");
                length.classList.add("valid");
            } else {
                length.classList.remove("valid");
                length.classList.add("invalid");
            }
        }
    }

    var togglePassword = document.getElementById('togglePassword');
    if (togglePassword) {
        togglePassword.addEventListener('click', function(e) {
            const password = document.getElementById('password');
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            this.classList.toggle('fa-eye-slash');
        });
    }

    // Dark theme toggle
    document.querySelector('.dark-theme-btn').addEventListener('click', () => {
        document.body.classList.toggle('dark-mode');
        
        const moonIcon = document.querySelector('.moon');
        const sunIcon = document.querySelector('.sun');
        
        if (document.body.classList.contains('dark-mode')) {
            moonIcon.style.display = 'none';
            sunIcon.style.display = 'block';
        } else {
            moonIcon.style.display = 'block';
            sunIcon.style.display = 'none';
        }
    });

    // Sidebar menu toggle
    document.getElementById('menuIcon').addEventListener('click', function() {
        document.querySelector('.sidebar').classList.toggle('collapsed');
    });
});

function addToCart(name, price) {
    let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
    const existingItem = cartItems.find(item => item.name === name);
    if (existingItem) {
        existingItem.quantity++;
    } else {
        cartItems.push({ name, price, quantity: 1 });
    }
    localStorage.setItem('cartItems', JSON.stringify(cartItems));
    alert(`${name} added to cart`);
}

function addToCart(name, price) {
let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
const existingItem = cartItems.find(item => item.name === name);

if (existingItem) {
// Item already exists in the cart, do not add again
alert(`${name} is already in the cart.`);
} else {
// Item does not exist, add it to the cart
cartItems.push({ name, price, quantity: 1 });
localStorage.setItem('cartItems', JSON.stringify(cartItems));

// Update cart count
const cartCountElement = document.getElementById("cart-count");
const cartCount = cartItems.reduce((count, item) => count + item.quantity, 0);
cartCountElement.textContent = cartCount;
cartCountElement.style.display = cartCount > 0 ? 'block' : 'none';

// Show notification
showNotification("Item added to cart Successfully");
}
}

function showNotification(message) {
// Display notification message
alert(message);
}
document.addEventListener('DOMContentLoaded', function() {
    const cartItemsElement = document.querySelector("#cart-items tbody");
    const totalPriceElement = document.getElementById("total-price");
    let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];

    function updateCart() {
        cartItemsElement.innerHTML = "";
        let totalPrice = 0;

        cartItems.forEach((item, index) => {
            const listItem = document.createElement("tr");

            const itemNumber = document.createElement("td");
            itemNumber.textContent = index + 1;

            const itemName = document.createElement("td");
            itemName.textContent = item.name;

            const itemPrice = document.createElement("td");
            itemPrice.textContent = "$" + (item.price * item.quantity).toFixed(2);

            const itemQuantity = document.createElement("td");
            itemQuantity.textContent = item.quantity;

            const actionTd = document.createElement("td");

            const increaseBtn = document.createElement("button");
            increaseBtn.innerHTML = '<i class="ri-add-line"></i>';
            increaseBtn.addEventListener("click", function() {
                item.quantity++;
                updateCart();
            });

            const decreaseBtn = document.createElement("button");
            decreaseBtn.innerHTML = '<i class="ri-subtract-line"></i>';
            decreaseBtn.addEventListener("click", function() {
                if (item.quantity > 1) {
                    item.quantity--;
                    updateCart();
                }
            });

            const removeBtn = document.createElement("button");
            removeBtn.innerHTML = '<i class="ri-close-line"></i>';
            removeBtn.addEventListener("click", function() {
                cartItems.splice(index, 1);
                updateCart();
            });

            actionTd.appendChild(increaseBtn);
            actionTd.appendChild(decreaseBtn);
            actionTd.appendChild(removeBtn);

            listItem.appendChild(itemNumber);
            listItem.appendChild(itemName);
            listItem.appendChild(itemPrice);
            listItem.appendChild(itemQuantity);
            listItem.appendChild(actionTd);
            cartItemsElement.appendChild(listItem);

            totalPrice += item.price * item.quantity;
        });

        totalPriceElement.textContent = totalPrice.toFixed(2);
        localStorage.setItem('cartItems', JSON.stringify(cartItems));
    }

    updateCart();

    document.getElementById("checkout-btn").addEventListener("click", function() {
        let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];

        if (cartItems.length > 0) {
            var modal = document.getElementById("agentModal");
            modal.style.display = "block";

            var closeBtn = document.getElementsByClassName("close")[0];
            closeBtn.onclick = function() {
                modal.style.display = "none";
            }

            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
            }


    });
});