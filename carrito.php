<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Carrito de Compras - TypeMaster</title>
    <style>
        /* Variables de colores */
        :root {
            --navy-blue: #0a1628;
            --dark-blue: #1a2942;
            --light-blue: #2d3e5f;
            --white: #ffffff;
            --orange: #ff4500;
            --orange-hover: #ff6b35;
            --gray: #7a8396;
            --light-gray: #e5e7eb;
            --red: #dc2626;
            --green: #10b981;
        }

        /* Reset y estilos generales */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Oxygen', 'Ubuntu', sans-serif;
            background-color: var(--navy-blue);
            color: var(--white);
            line-height: 1.6;
            padding: 20px;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
        }

        /* Botón volver */
        .btn-back {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 12px 24px;
            background-color: var(--dark-blue);
            color: var(--white);
            text-decoration: none;
            border-radius: 8px;
            font-weight: 500;
            margin-bottom: 20px;
            transition: all 0.3s ease;
            border: 2px solid var(--light-blue);
        }

        .btn-back:hover {
            background-color: var(--light-blue);
            transform: translateX(-5px);
        }

        /* Header del carrito */
        .cart-header {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 2px solid var(--light-blue);
        }

        .cart-icon {
            width: 40px;
            height: 40px;
            color: var(--orange);
        }

        .cart-header h1 {
            font-size: 2rem;
            font-weight: 700;
            color: var(--white);
        }

        .item-count {
            font-size: 1rem;
            font-weight: 400;
            color: var(--gray);
        }

        /* Mensaje carrito vacío */
        .empty-cart {
            text-align: center;
            padding: 60px 20px;
            background: var(--dark-blue);
            border-radius: 12px;
            margin: 40px 0;
        }

        .empty-cart-icon {
            font-size: 80px;
            margin-bottom: 20px;
            opacity: 0.5;
        }

        .empty-cart h2 {
            font-size: 28px;
            margin-bottom: 15px;
            color: var(--white);
        }

        .empty-cart p {
            color: var(--gray);
            margin-bottom: 30px;
            font-size: 18px;
        }

        .btn-shop {
            display: inline-block;
            padding: 14px 32px;
            background: var(--orange);
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-shop:hover {
            background: var(--orange-hover);
            transform: translateY(-2px);
        }

        /* Contenido principal */
        .cart-content {
            display: grid;
            grid-template-columns: 1fr 400px;
            gap: 30px;
        }

        /* Sección de productos */
        .products-section {
            background-color: var(--dark-blue);
            border-radius: 12px;
            padding: 20px;
        }

        .cart-table {
            width: 100%;
            border-collapse: collapse;
        }

        .cart-table thead {
            background-color: var(--light-blue);
        }

        .cart-table th {
            padding: 15px;
            text-align: left;
            font-weight: 600;
            font-size: 0.875rem;
            letter-spacing: 0.5px;
            color: var(--light-gray);
        }

        .cart-table tbody tr {
            border-bottom: 1px solid var(--light-blue);
        }

        .cart-table td {
            padding: 20px 15px;
        }

        /* Información del producto */
        .product-info {
            display: flex;
            gap: 15px;
            align-items: start;
        }

        .product-image {
            width: 80px;
            height: 100px;
            object-fit: cover;
            border-radius: 8px;
            background-color: var(--light-blue);
        }

        .product-details h3 {
            font-size: 1rem;
            font-weight: 500;
            margin-bottom: 8px;
            color: var(--white);
        }

        .seller {
            font-size: 0.875rem;
            color: var(--gray);
        }

        .seller strong {
            color: var(--white);
        }

        /* Precios */
        .price {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .old-price {
            font-size: 0.875rem;
            color: var(--gray);
            text-decoration: line-through;
        }

        .current-price {
            font-size: 1.125rem;
            font-weight: 700;
            color: var(--white);
        }

        /* Controles de cantidad */
        .quantity-controls {
            display: flex;
            align-items: center;
            gap: 10px;
            background-color: var(--light-blue);
            border-radius: 8px;
            padding: 5px;
        }

        .qty-btn {
            width: 35px;
            height: 35px;
            background-color: var(--orange);
            color: var(--white);
            border: none;
            border-radius: 6px;
            font-size: 1.25rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .qty-btn:hover {
            background-color: var(--orange-hover);
        }

        .quantity-controls input {
            width: 50px;
            text-align: center;
            background: transparent;
            border: none;
            color: var(--white);
            font-size: 1rem;
            font-weight: 600;
        }

        /* Total y botón eliminar */
        .total {
            position: relative;
        }

        .total-price {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--white);
            display: block;
            margin-bottom: 5px;
        }

        .btn-remove {
            position: absolute;
            top: 15px;
            right: 15px;
            width: 30px;
            height: 30px;
            background-color: transparent;
            color: var(--red);
            border: 2px solid var(--red);
            border-radius: 50%;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .btn-remove:hover {
            background-color: var(--red);
            color: var(--white);
        }

        /* Sección de resumen */
        .summary-section {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .coupon-box {
            background-color: var(--dark-blue);
            border-radius: 12px;
            padding: 20px;
        }

        .coupon-header {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 15px;
            font-weight: 600;
        }

        .coupon-icon {
            width: 24px;
            height: 24px;
            color: var(--orange);
        }

        .coupon-input {
            display: flex;
            gap: 10px;
            margin-bottom: 10px;
        }

        .coupon-input input {
            flex: 1;
            padding: 12px;
            background-color: var(--light-blue);
            border: 2px solid var(--light-blue);
            border-radius: 8px;
            color: var(--white);
            font-size: 1rem;
        }

        .coupon-input input:focus {
            outline: none;
            border-color: var(--orange);
        }

        .btn-apply {
            padding: 12px 24px;
            background-color: var(--orange);
            color: var(--white);
            border: none;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-apply:hover {
            background-color: var(--orange-hover);
        }

        .coupon-note {
            font-size: 0.75rem;
            color: var(--gray);
            line-height: 1.5;
        }

        /* Totales */
        .summary-totals {
            background-color: var(--dark-blue);
            border-radius: 12px;
            padding: 20px;
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 0;
            border-bottom: 1px solid var(--light-blue);
        }

        .summary-row:last-child {
            border-bottom: none;
        }

        .summary-row.discount span:last-child {
            color: var(--red);
        }

        .summary-row.total {
            font-size: 1.125rem;
            font-weight: 600;
        }

        .summary-row.final {
            font-size: 1.5rem;
            font-weight: 700;
            background-color: var(--light-blue);
            padding: 15px;
            border-radius: 8px;
            margin-top: 10px;
        }

        .final-price {
            color: var(--green);
        }

        /* Botón continuar */
        .btn-continue {
            width: 100%;
            padding: 18px;
            background-color: var(--orange);
            color: var(--white);
            border: none;
            border-radius: 12px;
            font-size: 1.125rem;
            font-weight: 700;
            letter-spacing: 1px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-continue:hover {
            background-color: var(--orange-hover);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 69, 0, 0.3);
        }

        /* Código de vendedor */
        .vendor-code {
            display: flex;
            gap: 10px;
            background-color: var(--dark-blue);
            padding: 15px;
            border-radius: 12px;
        }

        .vendor-code input {
            flex: 1;
            padding: 12px;
            background-color: var(--light-blue);
            border: 2px solid var(--light-blue);
            border-radius: 8px;
            color: var(--white);
            font-size: 0.875rem;
        }

        .vendor-code input:focus {
            outline: none;
            border-color: var(--orange);
        }

        .btn-add-vendor {
            padding: 12px 20px;
            background-color: transparent;
            color: var(--orange);
            border: 2px solid var(--orange);
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-add-vendor:hover {
            background-color: var(--orange);
            color: var(--white);
        }

        /* Responsive */
        @media (max-width: 1200px) {
            .cart-content {
                grid-template-columns: 1fr;
            }
            
            .summary-section {
                max-width: 600px;
                margin: 0 auto;
            }
        }

        @media (max-width: 768px) {
            .cart-table thead {
                display: none;
            }
            
            .cart-table tbody tr {
                display: block;
                margin-bottom: 20px;
                background-color: var(--light-blue);
                border-radius: 12px;
                padding: 15px;
            }
            
            .cart-table td {
                display: block;
                padding: 10px 0;
                border: none;
            }
            
            .product-info {
                flex-direction: column;
            }
            
            .btn-remove {
                position: static;
                margin-top: 10px;
                width: 100%;
            }
            
            .cart-header h1 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Botón volver al menú -->
        <a href="index.php" class="btn-back">← Volver al Menú Principal</a>

        <!-- Header del carrito -->
        <div class="cart-header">
            <svg class="cart-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <circle cx="9" cy="21" r="1"></circle>
                <circle cx="20" cy="21" r="1"></circle>
                <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
            </svg>
            <h1>Mi Carrito <span class="item-count" id="item-count">(0 productos)</span></h1>
        </div>

        <!-- Mensaje carrito vacío -->
        <div class="empty-cart" id="empty-cart" style="display: none;">
            <div class="empty-cart-icon">🛒</div>
            <h2>Tu carrito está vacío</h2>
            <p>Agrega productos para comenzar tu compra</p>
            <a href="productos.php" class="btn-shop">Ir a Productos</a>
        </div>

        <!-- Tabla de productos -->
        <div class="cart-content" id="cart-content">
            <div class="products-section">
                <table class="cart-table">
                    <thead>
                        <tr>
                            <th>PRODUCTO</th>
                            <th>PRECIO</th>
                            <th>CANTIDAD</th>
                            <th>TOTAL</th>
                        </tr>
                    </thead>
                    <tbody id="cart-items">
                        <!-- Los productos se cargarán dinámicamente aquí -->
                    </tbody>
                </table>
            </div>

            <!-- Resumen del pedido -->
            <div class="summary-section">
                <!-- Cupón de descuento -->
                <div class="coupon-box">
                    <div class="coupon-header">
                        <svg class="coupon-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="3" y="8" width="18" height="12" rx="2"></rect>
                            <path d="M7 8V6a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v2"></path>
                        </svg>
                        <span>¿Tienes un cupón de descuento?</span>
                    </div>
                    <div class="coupon-input">
                        <input type="text" placeholder="Código" id="coupon-code">
                        <button class="btn-apply" onclick="applyCoupon()">Aplicar</button>
                    </div>
                    <p class="coupon-note">Si no ves el precio con descuento al aplicar el cupón, lo verás al seleccionar el método de pago. Recuerda que los cupones de único uso no son reutilizables.</p>
                </div>

                <!-- Totales -->
                <div class="summary-totals">
                    <div class="summary-row">
                        <span>Subtotal</span>
                        <span id="subtotal">S/ 0.00</span>
                    </div>
                    <div class="summary-row discount" id="discount-row" style="display: none;">
                        <span>Descuentos</span>
                        <span id="discount">S/ 0.00</span>
                    </div>
                    <div class="summary-row">
                        <span>Envío</span>
                        <span id="shipping">S/ 15.00</span>
                    </div>
                    <div class="summary-row final">
                        <span>Total</span>
                        <span class="final-price" id="total">S/ 15.00</span>
                    </div>
                </div>

                <!-- Botón continuar -->
                <button class="btn-continue" onclick="checkout()">CONTINUAR CON LA COMPRA</button>

                <!-- Código de vendedor -->
                <div class="vendor-code">
                    <input type="text" placeholder="Ingresa código de vendedor" id="vendor-code">
                    <button class="btn-add-vendor" onclick="addVendorCode()">Agregar</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Cargar carrito desde localStorage
        let cart = JSON.parse(localStorage.getItem('cart')) || [];
        let discountPercent = 0;

        // Cargar y mostrar productos al iniciar
        window.onload = function() {
            loadCart();
        };

        function loadCart() {
            const cartItems = document.getElementById('cart-items');
            const emptyCart = document.getElementById('empty-cart');
            const cartContent = document.getElementById('cart-content');
            const itemCount = document.getElementById('item-count');

            if (cart.length === 0) {
                emptyCart.style.display = 'block';
                cartContent.style.display = 'none';
                itemCount.textContent = '(0 productos)';
                return;
            }

            emptyCart.style.display = 'none';
            cartContent.style.display = 'grid';

            const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
            itemCount.textContent = `(${totalItems} producto${totalItems !== 1 ? 's' : ''})`;

            cartItems.innerHTML = cart.map((item, index) => `
                <tr class="product-row">
                    <td class="product-info">
                        <img src="${item.image}" alt="${item.name}" class="product-image">
                        <div class="product-details">
                            <h3>${item.name}</h3>
                            <p class="seller">Vendido por: <strong>TypeMaster</strong></p>
                        </div>
                    </td>
                    <td class="price">
                        <span class="current-price">S/ ${item.price.toFixed(2)}</span>
                    </td>
                    <td class="quantity">
                        <div class="quantity-controls">
                            <button class="qty-btn" onclick="updateQuantity(${index}, -1)">−</button>
                            <input type="number" value="${item.quantity}" min="1" readonly>
                            <button class="qty-btn" onclick="updateQuantity(${index}, 1)">+</button>
                        </div>
                    </td>
                    <td class="total">
                        <span class="total-price">S/ ${(item.price * item.quantity).toFixed(2)}</span>
                        <button class="btn-remove" onclick="removeItem(${index})">✕</button>
                    </td>
                </tr>
            `).join('');

            updateTotals();
        }

        function updateQuantity(index, change) {
            cart[index].quantity += change;
            
            if (cart[index].quantity < 1) {
                removeItem(index);
                return;
            }
            
            localStorage.setItem('cart', JSON.stringify(cart));
            loadCart();
        }

        function removeItem(index) {
            if (confirm('¿Estás seguro de eliminar este producto?')) {
                cart.splice(index, 1);
                localStorage.setItem('cart', JSON.stringify(cart));
                loadCart();
                showNotification('🗑️ Producto eliminado del carrito');
            }
        }

        function updateTotals() {
            const subtotal = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
            const shipping = cart.length > 0 ? 15.00 : 0;
            const discount = subtotal * (discountPercent / 100);
            const total = subtotal - discount + shipping;

            document.getElementById('subtotal').textContent = `S/ ${subtotal.toFixed(2)}`;
            document.getElementById('shipping').textContent = `S/ ${shipping.toFixed(2)}`;
            document.getElementById('total').textContent = `S/ ${total.toFixed(2)}`;

            if (discount > 0) {
                document.getElementById('discount-row').style.display = 'flex';
                document.getElementById('discount').textContent = `S/ -${discount.toFixed(2)}`;
            } else {
                document.getElementById('discount-row').style.display = 'none';
            }
        }

        function applyCoupon() {
            const couponCode = document.getElementById('coupon-code').value.trim().toUpperCase();
            
            const coupons = {
                'DESC10': 10,
                'DESC15': 15,
                'DESC20': 20,
                'TYPEMASTER': 25
            };

            if (coupons[couponCode]) {
                discountPercent = coupons[couponCode];
                updateTotals();
                showNotification(`✅ Cupón aplicado: ${discountPercent}% de descuento`);
                document.getElementById('coupon-code').value = '';
            } else if (couponCode) {
                showNotification('❌ Cupón inválido', 'error');
            }
        }

        function addVendorCode() {
            const vendorCode = document.getElementById('vendor-code').value.trim();
            
            if (vendorCode) {
                showNotification('✅ Código de vendedor registrado');
                document.getElementById('vendor-code').value = '';
            }
        }

        function checkout() {
            if (cart.length === 0) {
                showNotification('❌ Tu carrito está vacío', 'error');
                return;
            }

            // Aquí iría la lógica para procesar el pago
            alert('🎉 ¡Gracias por tu compra! Serás redirigido al proceso de pago.');
            // Opcional: limpiar carrito después de la compra
            // cart = [];
            // localStorage.setItem('cart', JSON.stringify(cart));
            // loadCart();
        }

        function showNotification(message, type = 'success') {
            const bgColor = type === 'error' ? '#dc2626' : '#10b981';
            const notification = document.createElement('div');
            notification.style.cssText = `
                position: fixed;
                top: 20px;
                right: 20px;
                background: ${bgColor};
                color: white;
                padding: 15px 25px;
                border-radius: 8px;
                box-shadow: 0 4px 15px rgba(0,0,0,0.3);
                z-index: 10000;
                font-weight: 600;
                animation: slideIn 0.3s ease;
            `;
            notification.textContent = message;
            document.body.appendChild(notification);
            
            setTimeout(() => {
                notification.style.animation = 'slideOut 0.3s ease';
                setTimeout(() => notification.remove(), 300);
            }, 3000);
        }
    </script>
</body>
</html>