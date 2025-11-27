<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo - FRESHFOODSEN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/css.css"> 
    <link rel="stylesheet" href="../css/custom.css">
    <link rel="stylesheet" href="../css/premium.css">
</head>
<body>

    <?php require '../styles/nav.php'; ?>

    <div class="container pb-5 pt-3">
        


        <!-- SECCIÓN TUPPERS INTELIGENTES -->
        <div class="section-header-container reveal-on-scroll">
            <h2 class="catalog-section-title">Tuppers inteligentes</h2>
        </div>

        <div class="row g-4 mb-5">
            
            <!-- PRODUCTO 1: MINI -->
            <!-- PRODUCTO 1: MINI -->
            <div class="col-lg-4 col-md-6 reveal-on-scroll delay-100">
                <div class="product-card">
                    <div class="product-img-container">
                        <div id="carouselMini" class="carousel carousel-dark slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="../img/FreshFoodSen Mini (Pequeño)/FreshFoodSen Mini (Pequeño)/1.png" class="d-block w-100" alt="FreshFoodSen Mini 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="../img/FreshFoodSen Mini (Pequeño)/FreshFoodSen Mini (Pequeño)/2.png" class="d-block w-100" alt="FreshFoodSen Mini 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="../img/FreshFoodSen Mini (Pequeño)/FreshFoodSen Mini (Pequeño)/3.png" class="d-block w-100" alt="FreshFoodSen Mini 3">
                                </div>
                                <div class="carousel-item">
                                    <img src="../img/FreshFoodSen Mini (Pequeño)/FreshFoodSen Mini (Pequeño)/4.png" class="d-block w-100" alt="FreshFoodSen Mini 4">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselMini" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Anterior</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselMini" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Siguiente</span>
                            </button>
                        </div>
                    </div>
                    <div class="product-body">
                        <h3 class="product-title">FreshFoodSen Mini</h3>
                        <div class="product-subtitle">Pequeño - 500 ml</div>
                        <div class="product-price">S/ 99.90</div>
                        
                        <ul class="product-features">
                            <li><i class="fas fa-check-circle"></i> Sensor básico de frescura</li>
                            <li><i class="fas fa-check-circle"></i> Sensor de temperatura</li>
                            <li><i class="fas fa-check-circle"></i> Alerta estándar de vencimiento</li>
                            <li><i class="fas fa-check-circle"></i> Conexión bluetooth</li>
                            <li><i class="fas fa-check-circle"></i> 1 perfil de usuario</li>
                            <li><i class="fas fa-check-circle"></i> Batería de larga duración</li>
                        </ul>
                        
                        <p class="text-muted small mb-3">Perfecto para personas solas, estudiantes y oficinas.</p>
                        
                        <button class="btn-product" onclick="cart.showColorModal({id: 'mini', name: 'FreshFoodSen Mini', subtitle: 'Pequeño - 500ml', price: 'S/ 99.90', image: '../img/FreshFoodSen Mini (Pequeño)/FreshFoodSen Mini (Pequeño)/1.png'})">Agregar al carrito</button>
                    </div>
                </div>
            </div>

            <!-- PRODUCTO 2: STANDARD -->
            <!-- PRODUCTO 2: STANDARD -->
            <div class="col-lg-4 col-md-6 reveal-on-scroll delay-200">
                <div class="product-card">
                    <div class="product-img-container">
                        <div id="carouselStandard" class="carousel carousel-dark slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="../img/FreshFoodSen Standard (Mediano)/FreshFoodSen Standard (Mediano)/Diseño sin título.png" class="d-block w-100" alt="FreshFoodSen Standard 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="../img/FreshFoodSen Standard (Mediano)/FreshFoodSen Standard (Mediano)/Diseño sin título (1).png" class="d-block w-100" alt="FreshFoodSen Standard 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="../img/FreshFoodSen Standard (Mediano)/FreshFoodSen Standard (Mediano)/Diseño sin título (2).png" class="d-block w-100" alt="FreshFoodSen Standard 3">
                                </div>
                                <div class="carousel-item">
                                    <img src="../img/FreshFoodSen Standard (Mediano)/FreshFoodSen Standard (Mediano)/Diseño sin título (3).png" class="d-block w-100" alt="FreshFoodSen Standard 4">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselStandard" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Anterior</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselStandard" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Siguiente</span>
                            </button>
                        </div>
                    </div>
                    <div class="product-body">
                        <h3 class="product-title">FreshFoodSen Standard</h3>
                        <div class="product-subtitle">Mediano - 1 litro</div>
                        <div class="product-price">S/ 199.90</div>
                        
                        <ul class="product-features">
                            <li><i class="fas fa-check-circle"></i> Todos los sensores básicos</li>
                            <li><i class="fas fa-check-circle"></i> Alerta estándar de vencimiento</li>
                            <li><i class="fas fa-check-circle"></i> Conexión bluetooth</li>
                            <li><i class="fas fa-check-circle"></i> 2 perfiles de usuario</li>
                            <li><i class="fas fa-check-circle"></i> Indicador LED de estado</li>
                        </ul>
                        
                        <p class="text-muted small mb-3">Ideal para familias pequeñas o uso diario.</p>
                        
                        <button class="btn-product" onclick="cart.showColorModal({id: 'standard', name: 'FreshFoodSen Standard', subtitle: 'Mediano - 1L', price: 'S/ 199.90', image: '../img/FreshFoodSen Standard (Mediano)/FreshFoodSen Standard (Mediano)/Diseño sin título.png'})">Agregar al carrito</button>
                    </div>
                </div>
            </div>

            <!-- PRODUCTO 3: FAMILY -->
            <!-- PRODUCTO 3: FAMILY -->
            <div class="col-lg-4 col-md-6 reveal-on-scroll delay-300">
                <div class="product-card">
                    <div class="product-img-container">
                        <div id="carouselFamily" class="carousel carousel-dark slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="../img/FreshFoodSen Family (Grande)/FreshFoodSen Family (Grande)/Diseño sin título.png" class="d-block w-100" alt="FreshFoodSen Family 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="../img/FreshFoodSen Family (Grande)/FreshFoodSen Family (Grande)/Diseño sin título (1).png" class="d-block w-100" alt="FreshFoodSen Family 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="../img/FreshFoodSen Family (Grande)/FreshFoodSen Family (Grande)/Diseño sin título (2).png" class="d-block w-100" alt="FreshFoodSen Family 3">
                                </div>
                                <div class="carousel-item">
                                    <img src="../img/FreshFoodSen Family (Grande)/FreshFoodSen Family (Grande)/4.png" class="d-block w-100" alt="FreshFoodSen Family 4">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselFamily" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Anterior</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselFamily" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Siguiente</span>
                            </button>
                        </div>
                    </div>
                    <div class="product-body">
                        <h3 class="product-title">FreshFoodSen Family</h3>
                        <div class="product-subtitle">Grande - 1.5 litros</div>
                        <div class="product-price">S/ 199.90</div>
                        
                        <ul class="product-features">
                            <li><i class="fas fa-check-circle"></i> Todos los sensores básicos</li>
                            <li><i class="fas fa-check-circle"></i> Alerta estándar de vencimiento</li>
                            <li><i class="fas fa-check-circle"></i> Conexión bluetooth</li>
                            <li><i class="fas fa-check-circle"></i> 3 perfiles de usuario</li>
                            <li><i class="fas fa-check-circle"></i> Indicador LED más potente</li>
                            <li><i class="fas fa-check-circle"></i> Batería de mayor duración</li>
                        </ul>
                        
                        <p class="text-muted small mb-3">Perfecto para hogares con mayor consumo.</p>
                        
                        <button class="btn-product" onclick="cart.showColorModal({id: 'family', name: 'FreshFoodSen Family', subtitle: 'Grande - 2L', price: 'S/ 199.90', image: '../img/FreshFoodSen Family (Grande)/FreshFoodSen Family (Grande)/1.png'})">Agregar al carrito</button>
                    </div>
                </div>
            </div>

        </div>

        <!-- SECCIÓN ACCESORIOS -->
        <div class="section-header-container">
            <h2 class="catalog-section-title">Accesorios</h2>
        </div>
        <div class="row g-4 mb-5">
            <!-- Divisor Cuádruple -->
            <div class="col-lg-4 col-md-6">
                <div class="product-card h-100">
                    <div class="product-img-container">
                        <img src="../img/Compartimentos/Módulo Divisor Cuádruple.png" class="d-block w-100" alt="Módulo Divisor Cuádruple">
                    </div>
                    <div class="product-body">
                        <h3 class="product-title">Módulo Divisor Cuádruple</h3>
                        <div class="product-subtitle">4 compartimentos</div>
                        <div class="product-price">Desde S/ 30.00</div>
                        <p class="text-muted small mb-3">Cuatro compartimentos individuales para máxima organización. Disponible en todos los tamaños.</p>
                        <button class="btn-product" onclick="cart.showSizeModal({id: 'divisor_quad', name: 'Módulo Divisor Cuádruple', subtitle: '4 compartimentos', image: '../img/Compartimentos/Módulo Divisor Cuádruple.png'})">Seleccionar tamaño</button>
                    </div>
                </div>
            </div>

            <!-- Separador Doble -->
            <div class="col-lg-4 col-md-6">
                <div class="product-card h-100">
                    <div class="product-img-container">
                        <img src="../img/Compartimentos/Módulo Separador Doble.png" class="d-block w-100" alt="Módulo Separador Doble">
                    </div>
                    <div class="product-body">
                        <h3 class="product-title">Módulo Separador Doble</h3>
                        <div class="product-subtitle">2 compartimentos</div>
                        <div class="product-price">Desde S/ 35.00</div>
                        <p class="text-muted small mb-3">Dos compartimentos amplios para dividir tu comida en dos secciones. Disponible en todos los tamaños.</p>
                        <button class="btn-product" onclick="cart.showSizeModal({id: 'separador_doble', name: 'Módulo Separador Doble', subtitle: '2 compartimentos', image: '../img/Compartimentos/Módulo Separador Doble.png'})">Seleccionar tamaño</button>
                    </div>
                </div>
            </div>

            <!-- Tres Divisiones -->
            <div class="col-lg-4 col-md-6">
                <div class="product-card h-100">
                    <div class="product-img-container">
                        <img src="../img/Compartimentos/Módulo Tres Divisiones.png" class="d-block w-100" alt="Módulo Tres Divisiones">
                    </div>
                    <div class="product-body">
                        <h3 class="product-title">Módulo Tres Divisiones</h3>
                        <div class="product-subtitle">3 compartimentos</div>
                        <div class="product-price">Desde S/ 38.00</div>
                        <p class="text-muted small mb-3">Tres secciones equilibradas perfectas para comidas completas. Disponible en todos los tamaños.</p>
                        <button class="btn-product" onclick="cart.showSizeModal({id: 'tres_div', name: 'Módulo Tres Divisiones', subtitle: '3 compartimentos', image: '../img/Compartimentos/Módulo Tres Divisiones.png'})">Seleccionar tamaño</button>
                    </div>
                </div>
            </div>

            <!-- Base Refrigerante EcoPack -->
            <div class="col-lg-4 col-md-6">
                <div class="product-card h-100">
                    <div class="product-img-container">
                        <img src="../img/BASE REFRIGERANTE/BASE REFRIGERANTE.png" class="d-block w-100" alt="Base Refrigerante EcoPack" style="object-fit: cover; height: 100%;">
                    </div>
                    <div class="product-body">
                        <h3 class="product-title">Base Refrigerante EcoPack</h3>
                        <div class="product-subtitle">Universal</div>
                        <div class="product-price">S/ 50.00</div>
                        <p class="text-muted small mb-3">Mantiene tus alimentos fríos por hasta 5 horas. Gel térmico ecoamigable, diseño plano y reutilizable. Compatible con todos los modelos.</p>
                        <button class="btn-product" onclick="cart.addItem({id: 'ecopack', name: 'Base Refrigerante EcoPack', subtitle: 'Accesorio Universal', price: 'S/ 50.00', image: '../img/BASE REFRIGERANTE/BASE REFRIGERANTE.png'})">Agregar al carrito</button>
                    </div>
                </div>
            </div>

            <!-- Tapa SmartSeal Pro -->
            <div class="col-lg-4 col-md-6">
                <div class="product-card h-100">
                    <div class="product-img-container">
                        <div id="carouselTapaSmartSeal" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="../img/Tapa SmartSeal Pro/500ml.png" class="d-block w-100" alt="Tapa SmartSeal Pro Mini" style="object-fit: cover; height: 100%;">
                                </div>
                                <div class="carousel-item">
                                    <img src="../img/Tapa SmartSeal Pro/1L.png" class="d-block w-100" alt="Tapa SmartSeal Pro Standard" style="object-fit: cover; height: 100%;">
                                </div>
                                <div class="carousel-item">
                                    <img src="../img/Tapa SmartSeal Pro/1.5L.png" class="d-block w-100" alt="Tapa SmartSeal Pro Family" style="object-fit: cover; height: 100%;">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselTapaSmartSeal" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Anterior</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselTapaSmartSeal" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Siguiente</span>
                            </button>
                        </div>
                    </div>
                    <div class="product-body">
                        <h3 class="product-title">Tapa SmartSeal Pro</h3>
                        <div class="product-subtitle">Repuesto Inteligente</div>
                        <div class="product-price">Desde S/ 55.00</div>
                        <p class="text-muted small mb-3">Tapa con LED de frescura y sellado hermético. Disponible para modelos Mini, Standard y Family.</p>
                        <button class="btn-product" onclick="cart.showSizeModal({id: 'tapa_smartseal', name: 'Tapa SmartSeal Pro', subtitle: 'Repuesto Inteligente', image: '../img/Tapa SmartSeal Pro/1L.png'})">Seleccionar tamaño</button>
                    </div>
                </div>
            </div>

            <!-- Cargador Magnético FastCharge -->
            <div class="col-lg-4 col-md-6">
                <div class="product-card h-100">
                    <div class="product-img-container">
                        <img src="../img/CARGADOR MAGNETICO/CARGADOR MAGNETICO.png" class="d-block w-100" alt="Cargador Magnético FastCharge" style="object-fit: cover; height: 100%;">
                    </div>
                    <div class="product-body">
                        <h3 class="product-title">Cargador Magnético FastCharge</h3>
                        <div class="product-subtitle">Universal</div>
                        <div class="product-price">S/ 30.00</div>
                        <p class="text-muted small mb-3">Carga rápida (30% menos tiempo) y conexión magnética estable. Compatible con todos los modelos FreshFoodSen.</p>
                        <button class="btn-product" onclick="cart.addItem({id: 'cargador_fastcharge', name: 'Cargador Magnético FastCharge', subtitle: 'Accesorio Universal', price: 'S/ 30.00', image: '../img/CARGADOR MAGNETICO/CARGADOR MAGNETICO.png'})">Agregar al carrito</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- SECCIÓN SUSCRIPCIONES -->
        <div class="section-header-container">
            <h2 class="catalog-section-title">Suscripciones</h2>
        </div>
        <div class="row g-4 mb-5">
            
            <!-- PLAN 1: SmartBasic -->
            <div class="col-lg-4 col-md-6 reveal-on-scroll delay-100">
                <div class="product-card h-100">
                    <div class="product-body d-flex flex-column justify-content-between h-100">
                        <div>
                            <h3 class="product-title">SmartBasic</h3>
                            <div class="product-subtitle">Suscripción Nivel 1</div>
                            <div class="product-price">S/ 20 <small class="text-muted fs-6">/mensual</small></div>
                            
                            <ul class="product-features text-start">
                                <li><i class="fas fa-check-circle"></i> Alertas personalizadas por tipo de alimento</li>
                                <li><i class="fas fa-check-circle"></i> Historial de frescura de 7 días</li>
                                <li><i class="fas fa-check-circle"></i> Notificaciones avanzadas (prioridad alta/media/baja)</li>
                                <li><i class="fas fa-check-circle"></i> Sincronización en nube</li>
                                <li><i class="fas fa-check-circle"></i> Modo ahorro de energía</li>
                            </ul>
                        </div>
                        <button class="btn-product mt-4" onclick="cart.addItem({id: 'sub_basic', name: 'Suscripción SmartBasic', subtitle: 'Nivel 1 - Mensual', price: 'S/ 20.00', image: '../img/suscripcciones/NIVEL 1.png', color: 'Nivel 1'})">Suscribirse</button>
                    </div>
                </div>
            </div>

            <!-- PLAN 2: SmartPlus -->
            <div class="col-lg-4 col-md-6 reveal-on-scroll delay-200">
                <div class="product-card h-100">
                    <div class="product-body d-flex flex-column justify-content-between h-100">
                        <div>
                            <h3 class="product-title">SmartPlus</h3>
                            <div class="product-subtitle">Suscripción Nivel 2</div>
                            <div class="product-price">S/ 30 <small class="text-muted fs-6">/mensual</small></div>
                            
                            <ul class="product-features text-start">
                                <li><i class="fas fa-check-circle"></i> <strong>Todo lo del Nivel 1 MÁS:</strong></li>
                                <li><i class="fas fa-check-circle"></i> Predicción de frescura basada en IA</li>
                                <li><i class="fas fa-check-circle"></i> Recomendaciones de consumo según tus hábitos</li>
                                <li><i class="fas fa-check-circle"></i> Vinculación con 5 dispositivos</li>
                                <li><i class="fas fa-check-circle"></i> Escaneo inteligente de alimentos (foto + análisis)</li>
                                <li><i class="fas fa-check-circle"></i> Reporte semanal de desperdicio</li>
                            </ul>
                        </div>
                        <button class="btn-product mt-4" onclick="cart.addItem({id: 'sub_plus', name: 'Suscripción SmartPlus', subtitle: 'Nivel 2 - Mensual', price: 'S/ 30.00', image: '../img/suscripcciones/NIVEL 2.png', color: 'Nivel 2'})">Suscribirse</button>
                    </div>
                </div>
            </div>

            <!-- PLAN 3: SmartPremium -->
            <div class="col-lg-4 col-md-6 reveal-on-scroll delay-300">
                <div class="product-card h-100" style="border: 2px solid var(--primary-color);">
                    <div class="product-body d-flex flex-column justify-content-between h-100">
                        <div>
                            <div class="badge bg-warning text-dark mb-2">RECOMENDADO</div>
                            <h3 class="product-title">SmartPremium</h3>
                            <div class="product-subtitle">Suscripción Nivel 3</div>
                            <div class="product-price">S/ 40 <small class="text-muted fs-6">/mensual</small></div>
                            
                            <ul class="product-features text-start">
                                <li><i class="fas fa-check-circle"></i> <strong>TODO lo de SmartBasic + SmartPlus MÁS:</strong></li>
                                <li><i class="fas fa-check-circle"></i> Recetas personalizadas con lo que tienes en el tupper</li>
                                <li><i class="fas fa-check-circle"></i> Planificaciones de compras automáticas</li>
                                <li><i class="fas fa-check-circle"></i> Descuentos especiales en accesorios</li>
                                <li><i class="fas fa-check-circle"></i> Servicio técnico prioritario</li>
                                <li><i class="fas fa-check-circle"></i> Análisis completo mensual del ahorro logrado</li>
                            </ul>
                        </div>
                        <button class="btn-product mt-4" onclick="cart.addItem({id: 'sub_premium', name: 'Suscripción SmartPremium', subtitle: 'Nivel 3 - Mensual', price: 'S/ 40.00', image: '../img/suscripcciones/NIVEL 3.png', color: 'Nivel 3'})">Suscribirse</button>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- Search Modal -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content" style="border-radius: 20px; border: none; box-shadow: 0 20px 60px rgba(0,0,0,0.3);">
                <div class="modal-header" style="border-bottom: 2px solid #f0f0f0; padding: 1.5rem 2rem;">
                    <h5 class="modal-title" id="searchModalLabel" style="font-weight: 700; color: #5fa052;">
                        <i class="fas fa-search me-2"></i>Buscar Productos
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="padding: 2rem;">
                    <div class="mb-4">
                        <input type="text" id="searchInput" class="form-control form-control-lg" 
                               placeholder="Buscar tuppers o planes de suscripción..." 
                               style="border-radius: 15px; border: 2px solid #e0e0e0; padding: 1rem 1.5rem; font-size: 1.1rem;">
                    </div>
                    <div id="searchResults" style="max-height: 400px; overflow-y: auto;">
                        <p class="text-muted text-center" style="padding: 2rem;">
                            <i class="fas fa-search" style="font-size: 3rem; opacity: 0.3;"></i><br>
                            Escribe para buscar productos...
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/interactions.js"></script>
    <script src="../js/cart.js"></script>
    
    <script>
        // Search functionality
        const searchInput = document.getElementById('searchInput');
        const searchResults = document.getElementById('searchResults');
        
        // Product data
        const products = [
            {
                name: 'FreshFoodSen Mini',
                subtitle: 'Pequeño',
                price: 'S/ 99.90',
                description: 'Perfecto para porciones individuales y snacks',
                features: ['Capacidad: 500ml', 'Monitoreo de frescura', 'Alertas inteligentes', 'Batería de larga duración']
            },
            {
                name: 'FreshFoodSen Standard',
                subtitle: 'Mediano',
                price: 'S/ 149.90',
                description: 'Ideal para comidas completas y almuerzo diario',
                features: ['Capacidad: 1L', 'Monitoreo de frescura', 'Control de temperatura', 'Alertas inteligentes', 'App móvil incluida']
            },
            {
                name: 'FreshFoodSen Family',
                subtitle: 'Grande',
                price: 'S/ 199.90',
                description: 'Diseñado para familias y preparaciones grandes',
                features: ['Capacidad: 2L', 'Monitoreo avanzado', 'Control de temperatura', 'Alertas personalizables', 'App móvil premium', 'Compartir con familia']
            },
            {
                name: 'SmartBasic',
                subtitle: 'Plan Básico',
                price: 'S/ 19.90/mes',
                description: 'Acceso a funciones esenciales',
                features: ['Alertas de vencimiento', 'Historial de 30 días', 'Soporte por email']
            },
            {
                name: 'SmartPlus',
                subtitle: 'Plan Plus',
                price: 'S/ 34.90/mes',
                description: 'Funciones avanzadas para mejor control',
                features: ['Todo lo de SmartBasic', 'Recetas personalizadas', 'Historial ilimitado', 'Soporte prioritario', 'Análisis nutricional']
            },
            {
                name: 'SmartPremium',
                subtitle: 'Plan Premium',
                price: 'S/ 49.90/mes',
                description: 'Experiencia completa y exclusiva',
                features: ['Todo lo de SmartPlus', 'Asesoría nutricional', 'Planificación de compras', 'Descuentos exclusivos', 'Soporte 24/7']
            }
        ];
        
        searchInput.addEventListener('input', function() {
            const query = this.value.toLowerCase().trim();
            
            if (query === '') {
                searchResults.innerHTML = `
                    <p class="text-muted text-center" style="padding: 2rem;">
                        <i class="fas fa-search" style="font-size: 3rem; opacity: 0.3;"></i><br>
                        Escribe para buscar productos...
                    </p>
                `;
                return;
            }
            
            const filtered = products.filter(product => 
                product.name.toLowerCase().includes(query) ||
                product.subtitle.toLowerCase().includes(query) ||
                product.description.toLowerCase().includes(query) ||
                product.features.some(f => f.toLowerCase().includes(query))
            );
            
            if (filtered.length === 0) {
                searchResults.innerHTML = `
                    <p class="text-muted text-center" style="padding: 2rem;">
                        <i class="fas fa-search-minus" style="font-size: 3rem; opacity: 0.3;"></i><br>
                        No se encontraron resultados para "${query}"
                    </p>
                `;
                return;
            }
            
            searchResults.innerHTML = filtered.map(product => `
                <div class="search-result-item" style="padding: 1.5rem; border-bottom: 1px solid #f0f0f0; cursor: pointer; transition: all 0.3s ease;"
                     onmouseover="this.style.backgroundColor='#f8f9fa'" 
                     onmouseout="this.style.backgroundColor='white'">
                    <div class="d-flex justify-content-between align-items-start">
                        <div style="flex: 1;">
                            <h6 style="font-weight: 700; color: #2C3E25; margin-bottom: 0.5rem;">
                                ${product.name}
                                <span style="font-size: 0.85rem; color: #7ec968; font-weight: 600;"> - ${product.subtitle}</span>
                            </h6>
                            <p style="color: #666; margin-bottom: 0.75rem; font-size: 0.95rem;">${product.description}</p>
                            <div style="display: flex; flex-wrap: wrap; gap: 0.5rem;">
                                ${product.features.slice(0, 3).map(f => `
                                    <span style="background: #f0f8f0; color: #5fa052; padding: 0.25rem 0.75rem; border-radius: 12px; font-size: 0.85rem;">
                                        <i class="fas fa-check" style="font-size: 0.7rem;"></i> ${f}
                                    </span>
                                `).join('')}
                            </div>
                        </div>
                        <div style="text-align: right; margin-left: 1rem;">
                            <p style="font-size: 1.5rem; font-weight: 800; color: #5fa052; margin: 0;">${product.price}</p>
                        </div>
                    </div>
                </div>
            `).join('');
        });
        
        // Focus search input when modal opens
        document.getElementById('searchModal').addEventListener('shown.bs.modal', function () {
            searchInput.focus();
        });
        
        // Clear search when modal closes
        document.getElementById('searchModal').addEventListener('hidden.bs.modal', function () {
            searchInput.value = '';
            searchResults.innerHTML = `
                <p class="text-muted text-center" style="padding: 2rem;">
                    <i class="fas fa-search" style="font-size: 3rem; opacity: 0.3;"></i><br>
                    Escribe para buscar productos...
                </p>
            `;
        });
    </script>
</body>
</html>
