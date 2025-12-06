<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TypeMaster - Mejora tu Mecanografía</title>
    <link rel="stylesheet" href="styles.css">

    <style>
        /* ===== MODAL DE YAPE ===== */
        .modal-yape {
            position: fixed;
            top: 0; left: 0;
            width: 100%; height: 100%;
            background: rgba(0,0,0,0.6);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        .modal-content-yape {
            background: #fff;
            padding: 25px;
            width: 350px;
            border-radius: 10px;
            text-align: center;
            animation: fadeIn .3s;
        }

        .qr-yape {
            width: 200px;
            margin: 15px auto;
            display: block;
        }

        .btns-modal button {
            margin: 8px;
            padding: 10px 15px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
        }

        .btn-continuar {
            background: #6c5ce7;
            color: white;
        }

        .btn-cerrar {
            background: #d63031;
            color: white;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: scale(0.85); }
            to { opacity: 1; transform: scale(1); }
        }

        /* ===== BOTÓN DE BÚSQUEDA CON ICONO URL ===== */
        .btn-search-icon {
            width: 40px;
            height: 40px;
            background-image: url('https://cdn-icons-png.flaticon.com/512/751/751381.png');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            border: none;
            background-color: transparent;
            cursor: pointer;
        }
        .nav {
    display: flex;
    gap: 20px;
    background: #1a1a2e;
    padding: 15px;
    align-items: center;
}

.nav a {
    color: #fff;
    text-decoration: none;
    padding: 10px;
}

.dropdown {
    position: relative;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #16213e;
    min-width: 150px;
    margin-top: 5px;
    border-radius: 6px;
    overflow: hidden;
}

.dropdown-content a {
    display: block;
    padding: 10px;
    color: white;
    text-decoration: none;
}

.dropdown-content a:hover {
    background: #0f3460;
}

.dropdown:hover .dropdown-content {
    display: block;
}
.locations-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 20px;
}

.location-card {
    position: relative;
    overflow: hidden;
    border-radius: 12px;
    cursor: pointer;
}

.location-card img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.location-overlay {
    position: absolute;
    bottom: 0;
    width: 100%;
    padding: 20px;
    background: linear-gradient(0deg, rgba(0,0,0,0.8), transparent);
    color: white;
}

.location-title {
    margin: 5px 0;
    font-size: 20px;
    font-weight: 700;
}

.location-subtitle {
    font-size: 14px;
    opacity: 0.9;
}

.btn-comprar {
    display: inline-block;
    margin-top: 10px;
    padding: 8px 15px;
    background: #00a8e8;
    color: white;
    border-radius: 6px;
    text-decoration: none;
    font-weight: bold;
}

.btn-comprar:hover {
     background: #0077b6;
}

.product-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 25px;
    padding: 20px 0;
}

.product-card {
    position: relative;
    background: #fff;
    border: 1px solid #ddd;
    padding: 12px;
    border-radius: 12px;
    transition: 0.3s;
}

.product-card:hover {
    box-shadow: 0 4px 15px rgba(0,0,0,0.15);
    transform: translateY(-3px);
}

.product-card img {
    width: 100%;
    height: auto;
    border-radius: 10px;
}

.product-title {
    font-size: 15px;
    margin-top: 10px;
    color: #333;
    height: 45px;
    overflow: hidden;
}

.product-price {
    margin-top: 8px;
    display: flex;
    gap: 10px;
    align-items: center;
}

.price-new {
    font-size: 20px;
    font-weight: bold;
    color: #000;
}

.price-old {
    text-decoration: line-through;
    color: gray;
    font-size: 14px;
}

.product-info {
    margin-top: 5px;
    font-size: 13px;
    color: #444;
}

.product-rating {
    font-size: 15px;
    color: #ffb300;
    margin-top: 5px;
}

.product-rating span {
    color: #444;
    margin-left: 5px;
}

.btn-cart {
    position: absolute;
    bottom: 12px;
    right: 12px;
    background: #fff;
    border: 2px solid #000;
    border-radius: 50%;
    padding: 8px 12px;
    cursor: pointer;
    font-size: 18px;
    transition: 0.3s;
}

.btn-cart:hover {
    background: #000;
    color: #fff;
}

/* ===== BOTÓN CARRITO FLOTANTE ===== */
.cart-floating-btn {
    position: fixed;
    bottom: 30px;
    right: 30px;
    width: 60px;
    height: 60px;
    background: #ff4500;
    color: white;
    border: none;
    border-radius: 50%;
    font-size: 24px;
    cursor: pointer;
    box-shadow: 0 4px 15px rgba(255, 69, 0, 0.4);
    z-index: 1000;
    transition: all 0.3s ease;
}

.cart-floating-btn:hover {
    background: #ff6b35;
    transform: scale(1.1);
}

.cart-badge {
    position: absolute;
    top: -5px;
    right: -5px;
    background: #dc2626;
    color: white;
    width: 24px;
    height: 24px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 12px;
    font-weight: bold;
}

/* ===== MODAL CARRITO ===== */
.cart-modal {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(10, 22, 40, 0.95);
    display: none;
    justify-content: center;
    align-items: center;
    z-index: 9999;
    overflow-y: auto;
    padding: 20px;
}

.cart-modal.active {
    display: flex;
}

.cart-modal-content {
    background: #1a2942;
    width: 100%;
    max-width: 1200px;
    border-radius: 16px;
    padding: 30px;
    animation: slideIn 0.3s ease;
}

@keyframes slideIn {
    from {
        opacity: 0;
        transform: translateY(-50px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.cart-modal-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 30px;
    padding-bottom: 20px;
    border-bottom: 2px solid #2d3e5f;
}

.cart-modal-title {
    display: flex;
    align-items: center;
    gap: 15px;
    color: white;
    font-size: 1.8rem;
}

.cart-close-btn {
    background: transparent;
    border: 2px solid #ff4500;
    color: #ff4500;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    font-size: 24px;
    cursor: pointer;
    transition: all 0.3s ease;
}

.cart-close-btn:hover {
    background: #ff4500;
    color: white;
}

/* ===== CARRITO VACÍO ===== */
.cart-empty {
    text-align: center;
    padding: 60px 20px;
    color: white;
}

.cart-empty-icon {
    font-size: 80px;
    margin-bottom: 20px;
    opacity: 0.5;
}

.cart-empty h3 {
    font-size: 24px;
    margin-bottom: 10px;
}

.cart-empty p {
    color: #7a8396;
    margin-bottom: 30px;
}

.btn-continue-shopping {
    background: #ff4500;
    color: white;
    padding: 12px 30px;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-size: 16px;
    font-weight: 600;
    transition: all 0.3s ease;
}

.btn-continue-shopping:hover {
    background: #ff6b35;
    transform: translateY(-2px);
}

/* ===== ITEMS DEL CARRITO ===== */
.cart-items {
    margin-bottom: 30px;
}

.cart-item {
    display: grid;
    grid-template-columns: 100px 1fr auto;
    gap: 20px;
    background: #2d3e5f;
    padding: 20px;
    border-radius: 12px;
    margin-bottom: 15px;
    align-items: center;
}

.cart-item-image {
    width: 100px;
    height: 100px;
    object-fit: cover;
    border-radius: 8px;
}

.cart-item-details h4 {
    color: white;
    font-size: 16px;
    margin-bottom: 8px;
}

.cart-item-price {
    color: #10b981;
    font-size: 20px;
    font-weight: bold;
    margin-bottom: 10px;
}

.cart-item-quantity {
    display: flex;
    align-items: center;
    gap: 10px;
}

.qty-btn-modal {
    background: #ff4500;
    color: white;
    border: none;
    width: 32px;
    height: 32px;
    border-radius: 6px;
    cursor: pointer;
    font-size: 18px;
    transition: all 0.3s ease;
}

.qty-btn-modal:hover {
    background: #ff6b35;
}

.qty-input-modal {
    width: 50px;
    text-align: center;
    background: #1a2942;
    border: 2px solid #2d3e5f;
    color: white;
    padding: 5px;
    border-radius: 6px;
    font-weight: bold;
}

.cart-item-remove {
    background: transparent;
    border: 2px solid #dc2626;
    color: #dc2626;
    padding: 8px 16px;
    border-radius: 8px;
    cursor: pointer;
    font-weight: 600;
    transition: all 0.3s ease;
}

.cart-item-remove:hover {
    background: #dc2626;
    color: white;
}

/* ===== RESUMEN ===== */
.cart-summary {
    background: #0a1628;
    padding: 25px;
    border-radius: 12px;
}

.cart-summary h3 {
    color: white;
    font-size: 20px;
    margin-bottom: 20px;
}

.summary-row {
    display: flex;
    justify-content: space-between;
    color: white;
    padding: 12px 0;
    border-bottom: 1px solid #2d3e5f;
}

.summary-row:last-child {
    border-bottom: none;
    font-size: 24px;
    font-weight: bold;
    color: #10b981;
    margin-top: 10px;
    padding-top: 20px;
    border-top: 2px solid #2d3e5f;
}

.btn-checkout {
    width: 100%;
    background: #ff4500;
    color: white;
    padding: 16px;
    border: none;
    border-radius: 12px;
    font-size: 18px;
    font-weight: bold;
    cursor: pointer;
    margin-top: 20px;
    transition: all 0.3s ease;
}

.btn-checkout:hover {
    background: #ff6b35;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(255, 69, 0, 0.3);
}

@media (max-width: 768px) {
    .cart-item {
        grid-template-columns: 80px 1fr;
    }
    
    .cart-item-remove {
        grid-column: 1 / -1;
        margin-top: 10px;
    }
}

    </style>
</head>

<body>

    <!-- ================= HEADER ================= -->
    <header class="header">
        <div class="container">
            <div class="nav-wrapper">
                <div class="logo">
                    <h2>🎯 TypeMaster</h2>
                </div>
                <nav class="nav">
    <a href="#inicio">Inicio</a>

    <div class="dropdown">
        <a href="#cursos" class="dropbtn">Cursos ▾</a>
        <div class="dropdown-content">
            <a href="niveles/basico.php">Básico</a>
            <a href="#intermedio">Intermedio</a>
            <a href="#avanzado">Avanzado</a>
        </div>
    </div>

    <a href="productos.php">Productos</a>
  
    <a href="#blog">Blog</a>
    <a href="#contacto">Contacto</a>
</nav>
               
            </div>
        </div>
    </header>


    <!-- ================= HERO ================= -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">Aprende a Escribir Más Rápido y Mejor</h1>
                
              
            </div>
        </div>
    </section>


    <!-- ================= LISTADOS ================= -->
    <section class="listings-section">
        <div class="container">
            <div class="listings-header">
                <div>
                    <p class="section-subtitle">Nuestros Cursos</p>
                    <h2 class="section-title">Encuentra el Curso Perfecto para Ti</h2>
                </div>
                <div class="listings-filters">
                    <button class="filter-btn active">✨ Destacados</button>
                    <button class="filter-btn">📚 General</button>
                    
                </div>
            </div>
            
            <div class="listings-grid">
                <!-- CARD 1 -->
                <div class="listing-card">
                    <div class="listing-image">
                        <img src="https://media.edclub.com/website/media/espanol-europeo-espanol-typing.png" alt="Curso">
                        <button class="favorite-btn">♥</button>
                    </div>
                    <div class="listing-content">                   
                        <h3 class="listing-title">Mecanografía para Principiantes</h3>
                        <p class="listing-location">🌐 Online • Nivel Básico</p>
                        <p class="listing-description">Aprende la posición correcta...</p>
                        
                        <div class="listing-bottom">
                             <a href="niveles/basico.php" class="btn-detail">ver cursos</a>
                        </div>
                    </div>
                </div>
                <div class="listing-card">
                    <div class="listing-image">
                        <img src="https://www.educaciontrespuntocero.com/wp-content/uploads/2022/12/Captura-de-pantalla-2022-12-13-a-las-20.47.14.png" alt="Curso">
                        <button class="favorite-btn">♥</button>
                    </div>
                    <div class="listing-content">                   
                        <h3 class="listing-title">Velocidad Extrema 60+ WPM</h3>
                        <p class="listing-location">🌐 Online • Nivel Intermedio</p>
                        <p class="listing-description">Alcanza velocidades superiores a 60 palabras por minuto con ejercicios diseñados por expertos.</p>
                        
                        <div class="listing-bottom">
                             <a href="niveles/basico.php" class="btn-detail">ver cursos</a>
                        </div>
                    </div>
                </div>
            
                <div class="listing-card">
                    <div class="listing-image">
                        <img src="https://static-blog.onlyoffice.com/wp-content/uploads/2023/08/28141945/hand-keyboard.jpg" alt="Curso">
                        <button class="favorite-btn">♥</button>
                    </div>
                    <div class="listing-content">
                       
                        <h3 class="listing-title">Precisión y Técnica Profesional</h3>
                        <p class="listing-location">🌐 Online • Nivel Avanzado</p>
                        <p class="listing-description">Mejora tu precisión y reduce errores mientras incrementas tu velocidad de escritura de manera sostenible.</p>
                        
                        <div class="listing-bottom">                          
                            <a href="#detalle-curso-3" class="btn-detail">ver cursos</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Locations Section -->
    <section class="locations-section">
    <div class="container">
        <p class="section-subtitle">Nuestros Productos Destacados</p>
        <h2 class="section-title">Los Mejores que aportan al desarrollo de tu aprendizaje</h2>

        <div class="product-grid">

            <!-- PRODUCTO 1 -->
            <div class="product-card">
                <img src="https://m.media-amazon.com/images/I/612fsxPsVPL.jpg" alt="Teclado Mecánico">

                <h3 class="product-title">
                    Teclado mecánico inalámbrico K68 60% RGB Hot-Swap
                </h3>

                <div class="product-price">
                    <span class="price-new">s/ 132.28</span>
                    <span class="price-old">301.49</span>
                </div>

                <div class="product-info">
                    <span>5.4K+ ventas</span>
                </div>

                <div class="product-rating">
                    ⭐⭐⭐⭐⭐ <span>(435)</span>
                </div>

                <button class="btn-cart" onclick="addToCart('Teclado mecánico inalámbrico K68 60% RGB Hot-Swap', 132.28, 'https://m.media-amazon.com/images/I/612fsxPsVPL.jpg')">🛒</button>
            </div>

            <!-- PRODUCTO 2 -->
            <div class="product-card">
                <img src="https://m.media-amazon.com/images/S/aplus-media-library-service-media/e3a84d70-9466-476e-aa23-b07a640c655a.__AC_SR166,182___.jpg" alt="Teclado AF82">

                <h3 class="product-title">
                    Teclado con Cable AJAZZ AF82 Diseño Profesional 81 Keys
                </h3>

                <div class="product-price">
                    <span class="price-new">s/ 78.05</span>
                    <span class="price-old">310.98</span>
                </div>

                <div class="product-info">
                    <span>41 ventas</span>
                </div>

                <div class="product-rating">
                    ⭐⭐⭐⭐⭐ <span>(129)</span>
                </div>

                <button class="btn-cart" onclick="addToCart('Teclado con Cable AJAZZ AF82 Diseño Profesional 81 Keys', 78.05, 'https://m.media-amazon.com/images/S/aplus-media-library-service-media/e3a84d70-9466-476e-aa23-b07a640c655a.__AC_SR166,182___.jpg')">🛒</button>
            </div>


            <!-- PRODUCTO 3 -->
            <div class="product-card">
                <img src="https://m.media-amazon.com/images/I/6168gpIZUSL._AC_UF894,1000_QL80_.jpg" alt="Teclado silencioso">

                <h3 class="product-title">
                    Teclado de juego silencioso con cable RGB Ergonómico
                </h3>

                <div class="product-price">
                    <span class="price-new">s/ 66.51</span>
                    <span class="price-old">113.93</span>
                </div>

                <div class="product-info">
                    <span>556 ventas</span>
                </div>

                <div class="product-rating">
                    ⭐⭐⭐⭐☆ <span>(65)</span>
                </div>
                
                <button class="btn-cart" onclick="addToCart('Teclado de juego silencioso con cable RGB Ergonómico', 66.51, 'https://m.media-amazon.com/images/I/6168gpIZUSL._AC_UF894,1000_QL80_.jpg')">🛒</button>
                <button><a href="productos.php">ver mas productos</a></button>
            </div>

        </div>
    </div>
</section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 TypeMaster. Todos los derechos reservados. | <a href="#privacidad">Política de Privacidad</a> | <a href="#terminos">Términos de Uso</a></p>
        </div>
    </footer>

    <!-- ================= BOTÓN FLOTANTE CARRITO ================= -->
    <button class="cart-floating-btn" onclick="openCart()">
        🛒
        <span class="cart-badge" id="cart-count">0</span>
    </button>

    <!-- ================= MODAL CARRITO ================= -->
    <div class="cart-modal" id="cartModal">
        <div class="cart-modal-content">
            <div class="cart-modal-header">
                <h2 class="cart-modal-title">
                    🛒 Mi Carrito <span id="cart-items-count" style="color: #7a8396; font-size: 1.2rem;">(0 productos)</span>
                </h2>
                <button class="cart-close-btn" onclick="closeCart()">✕</button>
            </div>

            <!-- Carrito Vacío -->
            <div class="cart-empty" id="cartEmpty">
                <div class="cart-empty-icon">🛒</div>
                <h3>Tu carrito está vacío</h3>
                <p>Agrega productos para comenzar tu compra</p>
                <button class="btn-continue-shopping" onclick="closeCart()">Continuar Comprando</button>
            </div>

            <!-- Items del Carrito -->
            <div class="cart-items" id="cartItems" style="display: none;">
                <!-- Los items se agregarán dinámicamente aquí -->
            </div>

            <!-- Resumen -->
            <div class="cart-summary" id="cartSummary" style="display: none;">
                <h3>Resumen del Pedido</h3>
                <div class="summary-row">
                    <span>Subtotal</span>
                    <span id="subtotal">S/ 0.00</span>
                </div>
                <div class="summary-row">
                    <span>Envío</span>
                    <span>S/ 15.00</span>
                </div>
                <div class="summary-row">
                    <span>Total</span>
                    <span id="total">S/ 0.00</span>
                </div>
                <button class="btn-checkout" onclick="checkout()">Proceder al Pago 💳</button>
            </div>
        </div>
    </div>

    <script>
        // Sistema de carrito
        let cart = [];

        function addToCart(name, price, image) {
            const existingItem = cart.find(item => item.name === name);
            
            if (existingItem) {
                existingItem.quantity++;
            } else {
                cart.push({
                    name: name,
                    price: price,
                    image: image,
                    quantity: 1
                });
            }
            
            updateCart();
            showNotification('✅ Producto agregado al carrito');
        }

        function removeFromCart(index) {
            cart.splice(index, 1);
            updateCart();
            showNotification('🗑️ Producto eliminado del carrito');
        }

        function updateQuantity(index, change) {
            cart[index].quantity += change;
            if (cart[index].quantity < 1) {
                removeFromCart(index);
            } else {
                updateCart();
            }
        }

        function updateCart() {
            const cartCount = document.getElementById('cart-count');
            const cartItemsCount = document.getElementById('cart-items-count');
            const cartEmpty = document.getElementById('cartEmpty');
            const cartItems = document.getElementById('cartItems');
            const cartSummary = document.getElementById('cartSummary');
            
            const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
            cartCount.textContent = totalItems;
            cartItemsCount.textContent = `(${totalItems} producto${totalItems !== 1 ? 's' : ''})`;
            
            if (cart.length === 0) {
                cartEmpty.style.display = 'block';
                cartItems.style.display = 'none';
                cartSummary.style.display = 'none';
            } else {
                cartEmpty.style.display = 'none';
                cartItems.style.display = 'block';
                cartSummary.style.display = 'block';
                
                cartItems.innerHTML = cart.map((item, index) => `
                    <div class="cart-item">
                        <img src="${item.image}" alt="${item.name}" class="cart-item-image">
                        <div class="cart-item-details">
                            <h4>${item.name}</h4>
                            <div class="cart-item-price">S/ ${item.price.toFixed(2)}</div>
                            <div class="cart-item-quantity">
                                <button class="qty-btn-modal" onclick="updateQuantity(${index}, -1)">−</button>
                                <input type="number" class="qty-input-modal" value="${item.quantity}" readonly>
                                <button class="qty-btn-modal" onclick="updateQuantity(${index}, 1)">+</button>
                            </div>
                        </div>
                        <button class="cart-item-remove" onclick="removeFromCart(${index})">Eliminar</button>
                    </div>
                `).join('');
                
                const subtotal = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
                const shipping = 15.00;
                const total = subtotal + shipping;
                
                document.getElementById('subtotal').textContent = `S/ ${subtotal.toFixed(2)}`;
                document.getElementById('total').textContent = `S/ ${total.toFixed(2)}`;
            }
        }

        function openCart() {
            document.getElementById('cartModal').classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function closeCart() {
            document.getElementById('cartModal').classList.remove('active');
            document.body.style.overflow = 'auto';
        }

        function checkout() {
            if (cart.length === 0) return;
            
            alert('🎉 ¡Gracias por tu compra! Serás redirigido al proceso de pago.');
            // Aquí iría la lógica para procesar el pago
        }

        function showNotification(message) {
            const notification = document.createElement('div');
            notification.style.cssText = `
                position: fixed;
                top: 20px;
                right: 20px;
                background: #10b981;
                color: white;
                padding: 15px 25px;
                border-radius: 8px;
                box-shadow: 0 4px 15px rgba(0,0,0,0.3);
                z-index: 10000;
                font-weight: 600;
                animation: slideInRight 0.3s ease;
            `;
            notification.textContent = message;
            document.body.appendChild(notification);
            
            setTimeout(() => {
                notification.style.animation = 'slideOutRight 0.3s ease';
                setTimeout(() => notification.remove(), 300);
            }, 2000);
        }
    </script>
</body>
</html>