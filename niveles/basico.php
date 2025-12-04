<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos de Mecanografía</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background-color: #f5f5f5;
            padding: 40px 20px;
        }

        .container { max-width: 1200px; margin: 0 auto; }

        .courses-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(380px, 1fr));
            gap: 30px;
        }

        .course-card {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
            transition: 0.3s;
        }
        .course-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 30px rgba(0,0,0,0.15);
        }

        .course-image { width: 100%; height: 240px; overflow: hidden; position: relative; }
        .course-image img { width: 100%; height: 100%; object-fit: cover; }

        .favorite-btn {
            position: absolute;
            top: 16px; right: 16px;
            width: 42px; height: 42px;
            border-radius: 50%;
            background: white;
            border: none;
            font-size: 20px;
            cursor: pointer;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        .favorite-btn.active { background: #ff5a5a; color: white; }

        .course-content { padding: 24px; }

        .course-title { font-size: 22px; font-weight: 700; margin-bottom: 12px; }
        .course-description { color: #666; height: 48px; overflow: hidden; margin-bottom: 20px; }

        .course-footer {
            display: flex; justify-content: space-between; align-items: center;
        }

        .course-price { font-size: 32px; font-weight: 700; color: #FF5A3C; }

        .btn-view {
            background: #0D1B3E; color: white;
            padding: 12px 22px;
            border-radius: 8px;
            cursor: pointer;
            border: none;
            transition: 0.3s;
        }
        .btn-view:hover { background: #FF5A3C; transform: scale(1.05); }


        /* ================== MODAL ==================== */
        .modal-yape {
            display: none;
            position: fixed; top: 0; left: 0;
            width: 100%; height: 100%;
            background: rgba(0,0,0,0.6);
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        .modal-content-yape {
            background: #fff;
            padding: 25px;
            width: 340px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 5px 25px rgba(0,0,0,0.3);
        }

        .qr-yape { width: 260px; border-radius: 8px; }

        .btns-modal button {
            padding: 12px 18px;
            margin: 6px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 600;
        }
        .btn-continuar { background: #28a745; color: white; }
        .btn-cerrar { background: #dc3545; color: white; }
.qr-yape {
    width: 220px;
    height: auto;
    border-radius: 12px;
    display: block;
    margin: 15px auto;
}

    </style>
</head>

<body>

    <!-- ============ MODAL DONACIÓN ============== -->
    <div id="modalYape" class="modal-yape">
        <div class="modal-content-yape">
            <h2>Donación voluntaria</h2>
            <p>¡Ayúdanos a mantener este proyecto!Tu apoyo nos ayuda a seguir ofreciendo cursos gratuitos, prácticos y fáciles de encontrar en un solo lugar.
Gracias a tu donación, podemos seguir creando contenido de calidad para que más personas puedan aprender y crecer.</p>
            <img src="../img/yape.jpeg" class="qr-yape">

            <div class="btns-modal">
                <button class="btn-continuar" id="btnContinuar">Continuar</button>
                <button class="btn-cerrar" onclick="cerrarModal()">Cerrar</button>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="courses-grid">

            <!-- ======== TARJETA EJEMPLO 1 ======== -->
            <div class="course-card">
                <div class="course-image">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRmbIDq8FmgZ5eoHOhLWHBzOIeKKdEqYbh-OQ&s">
                    <button class="favorite-btn" onclick="toggleFavorite(this)">♡</button>
                </div>
                <div class="course-content">
                    <h3 class="course-title">edclub</h3>
                    <p class="course-description">El mundo de la mecanografía</p>

                    <div class="course-footer">
                        <span class="course-price">GRATIS!</span>
                        <button class="btn-view" onclick="abrirDonacion('https://www.edclub.com/sportal/program-54.game')">ver</button>
                    </div>
                </div>
            </div>
            <div class="course-card">
                <div class="course-image">
                    <img src="https://images.unsplash.com/photo-1587829741301-dc798b83add3?w=600">
                    <button class="favorite-btn" onclick="toggleFavorite(this)">♡</button>
                </div>
                <div class="course-content">
                    <h3 class="course-title">Mecanografía para Principiantes</h3>
                    <p class="course-description">Aprende la posición correcta de los dedos para escribir sin mirar.</p>

                    <div class="course-footer">
                        <span class="course-price">$99.00</span>
                        <button class="btn-view" onclick="abrirDonacion('https://www.edclub.com/sportal/program-54.game')">pagar</button>
                    </div>
                </div>
            </div>
            <div class="course-card">
                <div class="course-image">
                    <img src="https://images.unsplash.com/photo-1587829741301-dc798b83add3?w=600">
                    <button class="favorite-btn" onclick="toggleFavorite(this)">♡</button>
                </div>
                <div class="course-content">
                    <h3 class="course-title">Mecanografía para Principiantes</h3>
                    <p class="course-description">Aprende la posición correcta de los dedos para escribir sin mirar.</p>

                    <div class="course-footer">
                        <span class="course-price">$99.00</span>
                        <button class="btn-view" onclick="abrirDonacion('https://www.edclub.com/sportal/program-54.game')">+ Ver</button>
                    </div>
                </div>
            </div>
            <div class="course-card">
                <div class="course-image">
                    <img src="https://images.unsplash.com/photo-1587829741301-dc798b83add3?w=600">
                    <button class="favorite-btn" onclick="toggleFavorite(this)">♡</button>
                </div>
                <div class="course-content">
                    <h3 class="course-title">Mecanografía para Principiantes</h3>
                    <p class="course-description">Aprende la posición correcta de los dedos para escribir sin mirar.</p>

                    <div class="course-footer">
                        <span class="course-price">$99.00</span>
                        <button class="btn-view" onclick="abrirDonacion('https://www.edclub.com/sportal/program-54.game')">+ Ver</button>
                    </div>
                </div>
            </div>




            <!-- Repites las demás tarjetas igual -->
        </div>
    </div>


<script>
    let urlDestino = "";

    function abrirDonacion(url) {
        urlDestino = url; // guardamos a dónde irá luego
        document.getElementById("modalYape").style.display = "flex";
    }

    function cerrarModal() {
        document.getElementById("modalYape").style.display = "none";
    }

    document.getElementById("btnContinuar").onclick = function() {
        window.location.href = urlDestino;
    };

    function toggleFavorite(btn) {
        btn.classList.toggle("active");
        btn.textContent = btn.classList.contains("active") ? "♥" : "♡";
    }
</script>

</body>
</html>
