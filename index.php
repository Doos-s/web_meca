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


    </style>
</head>

<body>

    <!-- ================= HEADER ================= -->
    <header class="header">
        <div class="container">
            <div class="nav-wrapper">
                <div class="logo">
                    <h2> TypeMaster</h2>
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

    <a href="#lecciones">Lecciones</a>
    <a href="#pruebas">Pruebas</a>
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
                    <button class="filter-btn active"> Destacados</button>
                    <button class="filter-btn"> General</button>
                    
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
                        <p class="listing-location"> Online • Nivel Básico</p>
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
                        <p class="listing-location"> Online • Nivel Intermedio</p>
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
                        <p class="listing-location"> Online • Nivel Avanzado</p>
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

                <button class="btn-cart">🛒</button>
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

                <button class="btn-cart">🛒</button>
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

                <button class="btn-cart">🛒</button>
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
</body>
</html>