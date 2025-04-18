<?php 
include "template/header.php";
?>

    <!-- Cart Section -->
    <div class="cart-container">
        <h1>Your Cart</h1>
        
        <!-- Cart items will be displayed here -->
        <div id="cart-items"></div>

        <p class="total">Total: €<span id="total-price">0.00</span></p>

        <!-- Checkout Form -->
        <form action="checkout.php" method="POST" id="checkout-form">
            <input type="hidden" name="cart_data" id="cart-data">
            <button type="submit" id="checkout-btn">Continue To Checkout</button>
        </form>

        <!-- Clear Cart Button -->
        <button onclick="clearCart()">Clear Cart</button>
    </div>

    <script>
        // Function to Display Cart Items
        function displayCart() {
            let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
            let cartContainer = document.getElementById('cart-items');
            let totalPrice = 0;

            cartContainer.innerHTML = ""; // Clear cart container

            cartItems.forEach((item, index) => {
                totalPrice += parseFloat(item.price);

                // Display the cart item
                cartContainer.innerHTML += `
                    <div class="cart-item">
                        <div>
                            <p><strong>${item.title}</strong></p>
                            <p>€${item.price}</p>
                        </div>
                        <button class="remove-btn" onclick="removeFromCart(${index})">Remove</button>
                    </div>
                `;
            });

            // Display total price
            document.getElementById('total-price').textContent = totalPrice.toFixed(2);
            document.getElementById('cart-data').value = JSON.stringify(cartItems);
        }

        // Function to Remove an Item
        function removeFromCart(index) {
            let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
            cartItems.splice(index, 1);  // Remove item from cart array
            localStorage.setItem('cartItems', JSON.stringify(cartItems));  // Save back to localStorage
            displayCart(); // Refresh cart display
        }

        // Function to Clear the Entire Cart
        function clearCart() {
            localStorage.removeItem('cartItems');  // Remove all items from cart
            displayCart();  // Refresh cart display
        }

        // Load Cart on Page Load
        document.addEventListener("DOMContentLoaded", displayCart);
    </script>

</body>
</html>
