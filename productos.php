<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos - TypeMaster</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Estilos para productos */
        .productos-section {
            padding: 40px 20px;
            max-width: 1400px;
            margin: 0 auto;
        }

        .productos-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 2px solid #ddd;
        }

        .productos-header h2 {
            font-size: 2rem;
            color: #333;
        }

        .productos-header a {
            text-decoration: none;
            color: #ff4500;
            font-weight: 600;
            padding: 10px 20px;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .productos-header a:hover {
            background: #ff4500;
            color: white;
        }

        .productos-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }

        .producto-card {
            position: relative;
            background: white;
            border: 1px solid #ddd;
            border-radius: 12px;
            padding: 15px;
            transition: all 0.3s ease;
        }

        .producto-card:hover {
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
            transform: translateY(-5px);
        }

        .descuento {
            position: absolute;
            top: 10px;
            right: 10px;
            background: #dc2626;
            color: white;
            padding: 5px 12px;
            border-radius: 6px;
            font-size: 12px;
            font-weight: 700;
            z-index: 10;
        }

        .producto-card img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .producto-info {
            padding: 10px 0;
        }

        .marca {
            display: inline-block;
            background: #f0f0f0;
            color: #333;
            padding: 4px 10px;
            border-radius: 4px;
            font-size: 11px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .titulo {
            font-size: 15px;
            color: #333;
            margin: 10px 0;
            height: 60px;
            overflow: hidden;
            line-height: 1.4;
        }

        .precios {
            display: flex;
            align-items: center;
            gap: 10px;
            margin: 12px 0;
        }

        .precio-actual {
            font-size: 22px;
            font-weight: 800;
            color: #000;
        }

        .precio-antiguo {
            font-size: 16px;
            color: #999;
            text-decoration: line-through;
        }

        .rating {
            color: #ffb300;
            font-size: 14px;
            margin: 8px 0;
        }

        .rating span {
            color: #666;
            font-size: 13px;
            margin-left: 5px;
        }

        .estado {
            font-size: 14px;
            font-weight: 600;
            margin: 10px 0;
        }

        .disponible {
            color: #10b981;
        }

        .agotado {
            color: #dc2626;
        }

        .btn-carrito {
            width: 100%;
            padding: 12px;
            background: #ff4500;
            color: white;
            border: none;
            border-radius: 8px;
            font-weight: 700;
            font-size: 15px;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 10px;
        }

        .btn-carrito:hover {
            background: #ff6b35;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(255, 69, 0, 0.3);
        }

        .btn-carrito.disabled {
            background: #ccc;
            cursor: not-allowed;
            opacity: 0.6;
        }

        .btn-carrito.disabled:hover {
            background: #ccc;
            transform: none;
            box-shadow: none;
        }

        /* Botón flotante carrito */
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
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: center;
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

        /* Notificación */
        @keyframes slideInRight {
            from {
                transform: translateX(400px);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes slideOutRight {
            from {
                transform: translateX(0);
                opacity: 1;
            }
            to {
                transform: translateX(400px);
                opacity: 0;
            }
        }
    </style>
</head>
<body>

<section class="productos-section">
    <div class="productos-header">
        <h2>Teclados Gaming</h2>
        <a href="#" class="ver-mas">Ver más</a>
        <a href="index.php">← Inicio</a>
    </div>

    <div class="productos-grid">

        <!-- PRODUCTO 1 -->
        <div class="producto-card">
            <div class="descuento">Ahorrar 2%</div>
            <img src="https://dojiw2m9tvv09.cloudfront.net/86841/product/n4j9sc15ne7ojpad0ngj2317.jpg" alt="Teclado Redragon">

            <div class="producto-info">
                <span class="marca">REDRAGON</span>
                <h3 class="titulo">
                    TECLADO REDRAGON UCAL PRO K673AK ANIME | INALÁMBRICO | RGB | BLANCO-ROJO
                </h3>

                <div class="precios">
                    <span class="precio-actual">S/. 365.90</span>
                    <span class="precio-antiguo">S/. 374.90</span>
                </div>

                <div class="rating">
                    ⭐⭐⭐⭐⭐ <span>0 reseña</span>
                </div>

                <p class="estado disponible">● Disponible</p>

                <button class="btn-carrito" onclick="addToCart('TECLADO REDRAGON UCAL PRO K673AK ANIME | INALÁMBRICO | RGB | BLANCO-ROJO', 365.90, 'https://dojiw2m9tvv09.cloudfront.net/86841/product/n4j9sc15ne7ojpad0ngj2317.jpg')">
                    🛒 Añadir al carrito
                </button>
            </div>
        </div>

        <!-- PRODUCTO 2 -->
        <div class="producto-card">
            <div class="descuento">Ahorrar 16%</div>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRNm9HlNp7pXtS50ln4zz8jMex82X2ae-uFpQ&s" alt="Teclado K616">

            <div class="producto-info">
                <span class="marca">REDRAGON</span>
                <h3 class="titulo">
                    TECLADO REDRAGON FIZZ PRO K616 | MECÁNICO | RGB | NEGRO
                </h3>

                <div class="precios">
                    <span class="precio-actual">S/. 189.00</span>
                    <span class="precio-antiguo">S/. 223.90</span>
                </div>

                <div class="rating">
                    ⭐⭐⭐⭐⭐ <span>0 reseña</span>
                </div>

                <p class="estado disponible">● Disponible</p>

                <button class="btn-carrito" onclick="addToCart('TECLADO REDRAGON FIZZ PRO K616 | MECÁNICO | RGB | NEGRO', 189.00, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRNm9HlNp7pXtS50ln4zz8jMex82X2ae-uFpQ&s')">
                    🛒 Añadir al carrito
                </button>
            </div>
        </div>

        <!-- PRODUCTO 3 -->
        <div class="producto-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRILtnubm3RTvuqXgqqBKX2iYs9GRMeBCyV6w&s" alt="T-Dagger">

            <div class="producto-info">
                <span class="marca">T-DAGGER</span>
                <h3 class="titulo">
                    TECLADO T-DAGGER TGK310 | MECÁNICO | RAINBOW | NEGRO
                </h3>

                <div class="precios">
                    <span class="precio-actual">S/. 145.90</span>
                </div>

                <p class="estado agotado">● Agotado</p>

                <button class="btn-carrito disabled" disabled>Agotado</button>
            </div>
        </div>

        <!-- PRODUCTO 4 -->
        <div class="producto-card">
            <div class="descuento">Ahorrar 13%</div>
            <img src="https://media.falabella.com/falabellaPE/142170785_01/w=800,h=800,fit=pad" alt="Redragon K719">

            <div class="producto-info">
                <span class="marca">REDRAGON</span>
                <h3 class="titulo">
                    TECLADO REDRAGON GALATIN PRO K719WG | RGB | BLANCO-VERDE
                </h3>

                <div class="precios">
                    <span class="precio-actual">S/. 338.90</span>
                    <span class="precio-antiguo">S/. 389.90</span>
                </div>

                <p class="estado disponible">● Disponible</p>

                <button class="btn-carrito" onclick="addToCart('TECLADO REDRAGON GALATIN PRO K719WG | RGB | BLANCO-VERDE', 338.90, 'https://media.falabella.com/falabellaPE/142170785_01/w=800,h=800,fit=pad')">
                    🛒 Añadir al carrito
                </button>
            </div>
        </div>

        <!-- PRODUCTO 5 -->
        <div class="producto-card">
            <img src="https://m.media-amazon.com/images/I/71qHCGS+IZL.jpg" alt="Redragon WB">

            <div class="producto-info">
                <span class="marca">REDRAGON</span>
                <h3 class="titulo">
                    TECLADO REDRAGON UCALMAX K673WBP | RGB | MORADO-BLANCO
                </h3>

                <div class="precios">
                    <span class="precio-actual">S/. 325.50</span>
                </div>

                <p class="estado disponible">● Disponible</p>

                <button class="btn-carrito" onclick="addToCart('TECLADO REDRAGON UCALMAX K673WBP | RGB | MORADO-BLANCO', 325.50, 'https://m.media-amazon.com/images/I/71qHCGS+IZL.jpg')">
                    🛒 Añadir al carrito
                </button>
            </div>
        </div>

    </div>
</section>

<!-- BOTÓN FLOTANTE CARRITO -->
<a href="carrito.php" class="cart-floating-btn">
    🛒
    <span class="cart-badge" id="cart-count">0</span>
</a>

<script>
    // Sistema de carrito (localStorage para persistir entre páginas)
    let cart = JSON.parse(localStorage.getItem('cart')) || [];

    // Actualizar contador al cargar la página
    updateCartCount();

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
        
        // Guardar en localStorage
        localStorage.setItem('cart', JSON.stringify(cart));
        
        updateCartCount();
        showNotification('✅ Producto agregado al carrito');
    }

    function updateCartCount() {
        const cartCount = document.getElementById('cart-count');
        const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
        cartCount.textContent = totalItems;
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