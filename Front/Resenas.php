<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reseñas - FRESHFOODSEN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/css.css"> 
    <link rel="stylesheet" href="../css/custom.css">
    <link rel="stylesheet" href="../css/premium.css">
    
    <style>
        .reviews-hero {
            background: linear-gradient(135deg, #5fa052 0%, #7ec968 50%, #8EAC85 100%);
            padding: 5rem 0 4rem 0;
            margin-bottom: 4rem;
            position: relative;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(95, 160, 82, 0.2);
        }
        
        .reviews-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGNpcmNsZSBjeD0iMiIgY3k9IjIiIHI9IjEuNSIgZmlsbD0iI2ZmZmZmZiIgZmlsbC1vcGFjaXR5PSIwLjEiLz48L3N2Zz4=');
            opacity: 1;
        }
        
        .reviews-hero h1 {
            font-size: 4rem;
            font-weight: 900;
            color: white;
            margin-bottom: 1.5rem;
            position: relative;
            text-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
            letter-spacing: -1px;
        }
        
        .reviews-hero p {
            font-size: 1.3rem;
            color: rgba(255, 255, 255, 0.95);
            max-width: 750px;
            margin: 0 auto;
            position: relative;
            font-weight: 500;
        }

        .review-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-radius: 24px;
            padding: 2.5rem;
            height: 100%;
            box-shadow: 0 10px 40px rgba(95, 160, 82, 0.08);
            transition: all 0.5s cubic-bezier(0.23, 1, 0.32, 1);
            border: 2px solid rgba(95, 160, 82, 0.15);
            display: flex;
            flex-direction: column;
            position: relative;
            overflow: hidden;
        }

        .review-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #5fa052, #7ec968, #c8e66f);
            opacity: 0;
            transition: opacity 0.4s ease;
        }

        .review-card::after {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(126, 201, 104, 0.03) 0%, transparent 70%);
            opacity: 0;
            transition: opacity 0.6s ease;
        }

        .review-card:hover::before {
            opacity: 1;
        }

        .review-card:hover::after {
            opacity: 1;
        }

        .review-card:hover {
            transform: translateY(-12px) scale(1.02);
            box-shadow: 0 25px 60px rgba(95, 160, 82, 0.2);
            border-color: #7ec968;
        }

        .review-header {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
            position: relative;
            z-index: 1;
        }

        .review-avatar-img {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 1.2rem;
            box-shadow: 0 8px 20px rgba(95, 160, 82, 0.25);
            border: 3px solid #fff;
            transition: all 0.3s ease;
        }

        .review-card:hover .review-avatar-img {
            transform: scale(1.05);
            box-shadow: 0 10px 25px rgba(95, 160, 82, 0.35);
        }

        .review-info {
            flex: 1;
        }

        .review-info h5 {
            margin: 0 0 0.3rem 0;
            font-weight: 800;
            color: #2C3E25;
            font-size: 1.15rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .verified-badge {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 24px;
            height: 24px;
            min-width: 24px;
            min-height: 24px;
            flex-shrink: 0;
            background: linear-gradient(135deg, #5fa052, #7ec968);
            border-radius: 50%;
            color: white;
            font-size: 0.7rem;
            box-shadow: 0 3px 8px rgba(95, 160, 82, 0.4);
            position: relative;
            animation: pulse-badge 2s ease-in-out infinite;
            cursor: help;
        }

        .verified-badge i {
            display: flex;
            align-items: center;
            justify-content: center;
            line-height: 1;
            transform: translateY(1.5px);
            margin: 0;
        }

        .verified-badge::after {
            content: 'Cliente Verificado';
            position: absolute;
            bottom: 130%;
            left: 50%;
            transform: translateX(-50%) scale(0);
            background: rgba(44, 62, 37, 0.95);
            color: white;
            padding: 0.4rem 0.8rem;
            border-radius: 8px;
            font-size: 0.75rem;
            white-space: nowrap;
            pointer-events: none;
            opacity: 0;
            transition: all 0.3s ease;
            font-weight: 600;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        .verified-badge:hover::after {
            transform: translateX(-50%) scale(1);
            opacity: 1;
        }

        @keyframes pulse-badge {
            0%, 100% {
                box-shadow: 0 3px 8px rgba(95, 160, 82, 0.4);
            }
            50% {
                box-shadow: 0 3px 15px rgba(95, 160, 82, 0.6);
            }
        }

        .review-info span {
            font-size: 0.88rem;
            color: #777;
            display: block;
            font-weight: 500;
        }

        .review-stars {
            color: #FFD700;
            margin-bottom: 1.2rem;
            font-size: 1rem;
            letter-spacing: 2px;
            position: relative;
            z-index: 1;
        }

        .review-stars i {
            filter: drop-shadow(0 2px 4px rgba(255, 215, 0, 0.3));
        }

        .review-text {
            color: #555;
            line-height: 1.75;
            font-style: italic;
            flex-grow: 1;
            font-size: 1.02rem;
            position: relative;
            z-index: 1;
            padding-left: 1.5rem;
            border-left: 3px solid rgba(95, 160, 82, 0.2);
        }

        .quote-icon {
            font-size: 2rem;
            color: rgba(95, 160, 82, 0.15);
            margin-bottom: 0.8rem;
            position: relative;
            z-index: 1;
        }


        .stat-box {
            background: rgba(255, 255, 255, 0.25);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-radius: 16px;
            padding: 1.5rem 1rem;
            text-align: center;
            border: 2px solid rgba(255, 255, 255, 0.3);
            transition: all 0.3s ease;
        }

        .stat-box:hover {
            transform: translateY(-5px);
            background: rgba(255, 255, 255, 0.35);
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 900;
            color: white;
            margin-bottom: 0.5rem;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }

        .stat-label {
            font-size: 0.9rem;
            color: rgba(255, 255, 255, 0.95);
            font-weight: 600;
        }

        .stat-stars {
            color: #FFD700;
            margin-top: 0.5rem;
            font-size: 0.9rem;
            filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.2));
        }

        .review-date {
            font-size: 0.8rem;
            color: #999;
            margin-top: 0.3rem;
            font-style: italic;
        }

        .product-tag {
            display: inline-block;
            background: linear-gradient(135deg, rgba(95, 160, 82, 0.1), rgba(126, 201, 104, 0.15));
            color: #5fa052;
            padding: 0.4rem 0.9rem;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            margin-bottom: 1rem;
            border: 1px solid rgba(95, 160, 82, 0.2);
            position: relative;
            z-index: 1;
        }

        .product-tag i {
            margin-right: 0.4rem;
            font-size: 0.75rem;
        }

        .review-helpful {
            margin-top: 1.2rem;
            padding-top: 1.2rem;
            border-top: 1px solid rgba(95, 160, 82, 0.15);
            font-size: 0.88rem;
            color: #888;
            position: relative;
            z-index: 1;
        }

        .review-helpful i {
            color: #5fa052;
            margin-right: 0.4rem;
        }

        @media (max-width: 991px) {
            .reviews-hero {
                padding: 3rem 0 2.5rem 0;
            }
            .reviews-hero h1 {
                font-size: 2.5rem;
            }
            .review-card {
                padding: 2rem;
            }
            .review-avatar-img {
                width: 60px;
                height: 60px;
            }
            .stat-number {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>

    <?php require '../styles/nav.php'; ?>

    <!-- Hero Section -->
    <div class="reviews-hero">
        <div class="container text-center">
            <h1 class="reveal-on-scroll">Reseñas de Clientes</h1>
            <p class="reveal-on-scroll delay-100">Descubre por qué miles de familias confían en FreshFoodSen</p>
            
            <!-- Statistics -->
            <div class="row mt-5 reveal-on-scroll delay-200">
                <div class="col-md-3 col-6 mb-3">
                    <div class="stat-box">
                        <div class="stat-number">4.9</div>
                        <div class="stat-label">Calificación Promedio</div>
                        <div class="stat-stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-3">
                    <div class="stat-box">
                        <div class="stat-number">2,500+</div>
                        <div class="stat-label">Clientes Satisfechos</div>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-3">
                    <div class="stat-box">
                        <div class="stat-number">98%</div>
                        <div class="stat-label">Recomendarían</div>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-3">
                    <div class="stat-box">
                        <div class="stat-number">1,200+</div>
                        <div class="stat-label">Reseñas Verificadas</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container pb-5">
        <div class="row g-4">
            
            <!-- Review 1 -->
            <div class="col-lg-4 col-md-6 reveal-on-scroll">
                <div class="review-card">
                    <div class="review-header">
                        <img src="../img/reseñas/Jorge Caceres.png" alt="Jorge Cáceres" class="review-avatar-img">
                        <div class="review-info">
                            <h5>Jorge Cáceres <span class="verified-badge"><i class="fas fa-check"></i></span></h5>
                            <span>33 años – Arequipa, Perú</span>
                            <div class="review-date">Hace 2 semanas</div>
                        </div>
                    </div>
                    <div class="review-stars">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <div class="product-tag">
                        <i class="fas fa-box"></i> Tapa SmartSeal Pro
                    </div>
                    <i class="fas fa-quote-left quote-icon"></i>
                    <p class="review-text">"La Tapa SmartSeal Pro es increíble. El LED cambia de color y así sé si lo que guardé la noche anterior sigue bueno. Me ha salvado de varios sustos."</p>
                    <div class="review-helpful">
                        <i class="fas fa-thumbs-up"></i> 24 personas encontraron esto útil
                    </div>
                </div>
            </div>

            <!-- Review 2 -->
            <div class="col-lg-4 col-md-6 reveal-on-scroll delay-100">
                <div class="review-card">
                    <div class="review-header">
                        <img src="../img/reseñas/Valeria Rivas.png" alt="Valeria Rivas" class="review-avatar-img">
                        <div class="review-info">
                            <h5>Valeria Rivas <span class="verified-badge"><i class="fas fa-check"></i></span></h5>
                            <span>40 años – Ama de casa</span>
                            <div class="review-date">Hace 1 mes</div>
                        </div>
                    </div>
                    <div class="review-stars">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <div class="product-tag">
                        <i class="fas fa-box"></i> FreshFoodSen Family
                    </div>
                    <i class="fas fa-quote-left quote-icon"></i>
                    <p class="review-text">"Nunca pensé que un tupper pudiera ayudarme tanto. Los alimentos duran muchísimo más y siento que en casa desperdiciamos menos comida. Lo recomiendo 100%."</p>
                    <div class="review-helpful">
                        <i class="fas fa-thumbs-up"></i> 31 personas encontraron esto útil
                    </div>
                </div>
            </div>

            <!-- Review 3 -->
            <div class="col-lg-4 col-md-6 reveal-on-scroll delay-200">
                <div class="review-card">
                    <div class="review-header">
                        <img src="../img/reseñas/Maria fernanda Lopez.png" alt="María Fernanda López" class="review-avatar-img">
                        <div class="review-info">
                            <h5>María Fernanda López <span class="verified-badge"><i class="fas fa-check"></i></span></h5>
                            <span>27 años – Lima, Perú</span>
                            <div class="review-date">Hace 3 semanas</div>
                        </div>
                    </div>
                    <div class="review-stars">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <div class="product-tag">
                        <i class="fas fa-box"></i> FreshFoodSen Standard
                    </div>
                    <i class="fas fa-quote-left quote-icon"></i>
                    <p class="review-text">"Compré el FreshFoodSen Standard y estoy encantada. El sensor me avisa cuando mis verduras ya no están tan frescas y me ha ayudado a organizar mejor mi refri. ¡De verdad ahorro más!"</p>
                    <div class="review-helpful">
                        <i class="fas fa-thumbs-up"></i> 18 personas encontraron esto útil
                    </div>
                </div>
            </div>

            <!-- Review 4 -->
            <div class="col-lg-4 col-md-6 reveal-on-scroll">
                <div class="review-card">
                    <div class="review-header">
                        <img src="../img/reseñas/Mariana Lopez.png" alt="Mariana López" class="review-avatar-img">
                        <div class="review-info">
                            <h5>Mariana López <span class="verified-badge"><i class="fas fa-check"></i></span></h5>
                            <span>30 años – Lima</span>
                            <div class="review-date">Hace 1 semana</div>
                        </div>
                    </div>
                    <div class="review-stars">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <div class="product-tag">
                        <i class="fas fa-box"></i> FreshFoodSen Mini
                    </div>
                    <i class="fas fa-quote-left quote-icon"></i>
                    <p class="review-text">"Desde que uso el tupper inteligente FreshFoodSen, ya no olvido la comida en el refri. El LED me avisa justo a tiempo y realmente ahorro mucho. ¡Lo amo!"</p>
                    <div class="review-helpful">
                        <i class="fas fa-thumbs-up"></i> 42 personas encontraron esto útil
                    </div>
                </div>
            </div>

            <!-- Review 5 -->
            <div class="col-lg-4 col-md-6 reveal-on-scroll delay-100">
                <div class="review-card">
                    <div class="review-header">
                        <img src="../img/reseñas/Jose ramirez.png" alt="José Ramírez" class="review-avatar-img">
                        <div class="review-info">
                            <h5>José Ramírez <span class="verified-badge"><i class="fas fa-check"></i></span></h5>
                            <span>35 años – Cieneguilla</span>
                            <div class="review-date">Hace 4 días</div>
                        </div>
                    </div>
                    <div class="review-stars">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <div class="product-tag">
                        <i class="fas fa-box"></i> Tapa SmartSeal Pro
                    </div>
                    <i class="fas fa-quote-left quote-icon"></i>
                    <p class="review-text">"La tapa SmartSeal Pro es increíble. El sellado es totalmente hermético y el indicador de presión me da mucha seguridad cuando guardo sopas o guisos."</p>
                    <div class="review-helpful">
                        <i class="fas fa-thumbs-up"></i> 15 personas encontraron esto útil
                    </div>
                </div>
            </div>

            <!-- Review 6 -->
            <div class="col-lg-4 col-md-6 reveal-on-scroll delay-200">
                <div class="review-card">
                    <div class="review-header">
                        <img src="../img/reseñas/Luciana paredes.png" alt="Luciana Paredes" class="review-avatar-img">
                        <div class="review-info">
                            <h5>Luciana Paredes <span class="verified-badge"><i class="fas fa-check"></i></span></h5>
                            <span>42 años – Mamá de 2</span>
                            <div class="review-date">Hace 2 meses</div>
                        </div>
                    </div>
                    <div class="review-stars">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <div class="product-tag">
                        <i class="fas fa-box"></i> Pack Frescura Total
                    </div>
                    <i class="fas fa-quote-left quote-icon"></i>
                    <p class="review-text">"Para mí lo mejor es que mis hijos pueden ver el color del LED y saben si pueden comer lo que guardé. ¡Siento que todo dura más tiempo!"</p>
                    <div class="review-helpful">
                        <i class="fas fa-thumbs-up"></i> 37 personas encontraron esto útil
                    </div>
                </div>
            </div>

            <!-- Review 7 -->
            <div class="col-lg-4 col-md-6 reveal-on-scroll">
                <div class="review-card">
                    <div class="review-header">
                        <img src="../img/reseñas/Carlos gutierrez.png" alt="Carlos Gutiérrez" class="review-avatar-img">
                        <div class="review-info">
                            <h5>Carlos Gutiérrez <span class="verified-badge"><i class="fas fa-check"></i></span></h5>
                            <span>27 años – Emprendedor gastronómico</span>
                            <div class="review-date">Hace 5 días</div>
                        </div>
                    </div>
                    <div class="review-stars">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <div class="product-tag">
                        <i class="fas fa-box"></i> FreshFoodSen Family
                    </div>
                    <i class="fas fa-quote-left quote-icon"></i>
                    <p class="review-text">"El tupper grande y la tapa inteligente me ayudan a organizar mis insumos del día. El sensor de frescura es un plus que no sabía que necesitaba."</p>
                    <div class="review-helpful">
                        <i class="fas fa-thumbs-up"></i> 28 personas encontraron esto útil
                    </div>
                </div>
            </div>

            <!-- Review 8 -->
            <div class="col-lg-4 col-md-6 reveal-on-scroll delay-100">
                <div class="review-card">
                    <div class="review-header">
                        <img src="../img/reseñas/Sofia villanueva.png" alt="Sofía Villanueva" class="review-avatar-img">
                        <div class="review-info">
                            <h5>Sofía Villanueva <span class="verified-badge"><i class="fas fa-check"></i></span></h5>
                            <span>29 años – Usuaria de oficina</span>
                            <div class="review-date">Hace 1 semana</div>
                        </div>
                    </div>
                    <div class="review-stars">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <div class="product-tag">
                        <i class="fas fa-box"></i> Cargador Magnético FastCharge
                    </div>
                    <i class="fas fa-quote-left quote-icon"></i>
                    <p class="review-text">"El cargador magnético FastCharge es rapidísimo. Literal en un ratito ya tengo el tupper cargado. Es muy práctico y el cable es resistente."</p>
                    <div class="review-helpful">
                        <i class="fas fa-thumbs-up"></i> 19 personas encontraron esto útil
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Modal Agregar Reseña -->
    <div class="modal fade" id="addReviewModal" tabindex="-1" aria-labelledby="addReviewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content" style="border-radius: 24px; border: none; overflow: hidden;">
                <div class="modal-header" style="background: linear-gradient(135deg, #5fa052, #7ec968); border: none; padding: 1.5rem 2rem;">
                    <h5 class="modal-title text-white fw-bold" id="addReviewModalLabel">
                        <i class="fas fa-star me-2"></i>Comparte tu Experiencia
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="padding: 2rem;">
                    <form id="reviewForm">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold text-secondary">
                                    <i class="fas fa-user me-2 text-success"></i>Tu Nombre
                                </label>
                                <input type="text" class="form-control form-control-lg" id="reviewName" placeholder="Ej: María García" required style="border-radius: 12px; border: 2px solid #e8e8e8;">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold text-secondary">
                                    <i class="fas fa-envelope me-2 text-success"></i>Tu Email
                                </label>
                                <input type="email" class="form-control form-control-lg" id="reviewEmail" placeholder="tu@email.com" required style="border-radius: 12px; border: 2px solid #e8e8e8;">
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label fw-bold text-secondary">
                                <i class="fas fa-box me-2 text-success"></i>Producto Adquirido
                            </label>
                            <select class="form-select form-select-lg" id="reviewProduct" required style="border-radius: 12px; border: 2px solid #e8e8e8;">
                                <option value="">Selecciona un producto...</option>
                                <option value="FreshFoodSen Mini">FreshFoodSen Mini</option>
                                <option value="FreshFoodSen Standard">FreshFoodSen Standard</option>
                                <option value="FreshFoodSen Family">FreshFoodSen Family</option>
                                <option value="Tapa SmartSeal Pro">Tapa SmartSeal Pro</option>
                                <option value="Cargador Magnético FastCharge">Cargador Magnético FastCharge</option>
                                <option value="Pack Frescura Total">Pack Frescura Total</option>
                            </select>
                        </div>
                        
                        <div class="mb-4">
                            <label class="form-label fw-bold text-secondary">
                                <i class="fas fa-star me-2 text-success"></i>Tu Calificación
                            </label>
                            <div class="star-rating-input" id="starRating">
                                <i class="fas fa-star star-input" data-rating="1"></i>
                                <i class="fas fa-star star-input" data-rating="2"></i>
                                <i class="fas fa-star star-input" data-rating="3"></i>
                                <i class="fas fa-star star-input" data-rating="4"></i>
                                <i class="fas fa-star star-input" data-rating="5"></i>
                                <span class="rating-text ms-3" id="ratingText">Selecciona una calificación</span>
                            </div>
                            <input type="hidden" id="reviewRating" value="0">
                        </div>
                        
                        <div class="mb-4">
                            <label class="form-label fw-bold text-secondary">
                                <i class="fas fa-comment me-2 text-success"></i>Tu Reseña
                            </label>
                            <textarea class="form-control" id="reviewText" rows="4" placeholder="Cuéntanos tu experiencia con el producto..." required style="border-radius: 12px; border: 2px solid #e8e8e8; resize: none;"></textarea>
                            <small class="text-muted">Mínimo 20 caracteres</small>
                        </div>
                        
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-lg text-white fw-bold" style="background: linear-gradient(135deg, #5fa052, #7ec968); border-radius: 50px; padding: 14px;">
                                <i class="fas fa-paper-plane me-2"></i>Enviar Reseña
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Star Rating Input Styles */
        .star-rating-input {
            display: flex;
            align-items: center;
            padding: 1rem;
            background: #f8f9fa;
            border-radius: 12px;
        }
        
        .star-input {
            font-size: 2rem;
            color: #ddd;
            cursor: pointer;
            transition: all 0.2s ease;
            margin-right: 5px;
        }
        
        .star-input:hover,
        .star-input.active {
            color: #FFD700;
            transform: scale(1.15);
        }
        
        .star-input.hovered {
            color: #FFD700;
        }
        
        .rating-text {
            font-size: 0.95rem;
            color: #777;
            font-weight: 500;
        }
        
        #reviewForm .form-control:focus,
        #reviewForm .form-select:focus {
            border-color: #7ec968;
            box-shadow: 0 0 0 3px rgba(126, 201, 104, 0.15);
        }
        
        /* Success animation */
        .review-success {
            text-align: center;
            padding: 3rem;
        }
        
        .review-success i {
            font-size: 4rem;
            color: #5fa052;
            margin-bottom: 1.5rem;
            animation: bounceIn 0.6s ease;
        }
        
        @keyframes bounceIn {
            0% { transform: scale(0); opacity: 0; }
            50% { transform: scale(1.2); }
            100% { transform: scale(1); opacity: 1; }
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/interactions.js"></script>
    
    <script>
    // Star Rating Functionality
    document.addEventListener('DOMContentLoaded', function() {
        const stars = document.querySelectorAll('.star-input');
        const ratingInput = document.getElementById('reviewRating');
        const ratingText = document.getElementById('ratingText');
        
        const ratingTexts = {
            0: 'Selecciona una calificación',
            1: '😞 Muy malo',
            2: '😐 Regular',
            3: '🙂 Bueno',
            4: '😊 Muy bueno',
            5: '🤩 ¡Excelente!'
        };
        
        stars.forEach(star => {
            star.addEventListener('mouseenter', function() {
                const rating = this.dataset.rating;
                highlightStars(rating);
            });
            
            star.addEventListener('mouseleave', function() {
                const currentRating = ratingInput.value;
                highlightStars(currentRating);
            });
            
            star.addEventListener('click', function() {
                const rating = this.dataset.rating;
                ratingInput.value = rating;
                highlightStars(rating);
                ratingText.textContent = ratingTexts[rating];
            });
        });
        
        function highlightStars(rating) {
            stars.forEach(star => {
                star.classList.remove('active', 'hovered');
                if (star.dataset.rating <= rating) {
                    star.classList.add('active');
                }
            });
        }
        
        // Form submission
        const reviewForm = document.getElementById('reviewForm');
        reviewForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const rating = ratingInput.value;
            const reviewTextValue = document.getElementById('reviewText').value;
            const reviewName = document.getElementById('reviewName').value;
            const reviewProduct = document.getElementById('reviewProduct').value;
            
            if (rating == 0) {
                alert('Por favor selecciona una calificación');
                return;
            }
            
            if (reviewTextValue.length < 20) {
                alert('Tu reseña debe tener al menos 20 caracteres');
                return;
            }
            
            // Generate stars HTML based on rating
            let starsHTML = '';
            for (let i = 0; i < 5; i++) {
                if (i < rating) {
                    starsHTML += '<i class="fas fa-star"></i>';
                } else {
                    starsHTML += '<i class="far fa-star"></i>';
                }
            }
            
            // Create new review card HTML
            const newReviewHTML = `
                <div class="col-lg-4 col-md-6 new-review-animation">
                    <div class="review-card" style="border: 2px solid #7ec968; position: relative;">
                        <span class="new-badge">✨ Nuevo</span>
                        <div class="review-header">
                            <div class="review-avatar-placeholder">
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="review-info">
                                <h5>${reviewName}</h5>
                                <span>Cliente FreshFoodSen</span>
                                <div class="review-date">Hace un momento</div>
                            </div>
                        </div>
                        <div class="review-stars">
                            ${starsHTML}
                        </div>
                        <div class="product-tag">
                            <i class="fas fa-box"></i> ${reviewProduct}
                        </div>
                        <i class="fas fa-quote-left quote-icon"></i>
                        <p class="review-text">"${reviewTextValue}"</p>
                        <div class="review-helpful">
                            <i class="fas fa-thumbs-up"></i> 0 personas encontraron esto útil
                        </div>
                    </div>
                </div>
            `;
            
            // Add the new review to the beginning of the reviews grid
            const reviewsGrid = document.querySelector('.container.pb-5 .row.g-4');
            reviewsGrid.insertAdjacentHTML('afterbegin', newReviewHTML);
            
            // Show success message in modal
            const modalBody = document.querySelector('#addReviewModal .modal-body');
            modalBody.innerHTML = `
                <div class="review-success">
                    <i class="fas fa-check-circle"></i>
                    <h3 class="fw-bold text-success">¡Gracias por tu reseña, ${reviewName}!</h3>
                    <p class="text-muted">Tu reseña ya está visible en la página. ¡Apreciamos tu opinión!</p>
                    <button type="button" class="btn btn-outline-success btn-lg mt-3" data-bs-dismiss="modal">
                        <i class="fas fa-eye me-2"></i>Ver mi reseña
                    </button>
                </div>
            `;
            
            // Scroll to the new review when modal closes
            const modal = document.getElementById('addReviewModal');
            modal.addEventListener('hidden.bs.modal', function() {
                const newReview = document.querySelector('.new-review-animation');
                if (newReview) {
                    newReview.scrollIntoView({ behavior: 'smooth', block: 'center' });
                }
            }, { once: true });
        });
    });
    </script>
    
    <style>
        /* New Review Animation */
        .new-review-animation {
            animation: slideInNew 0.6s ease-out;
        }
        
        @keyframes slideInNew {
            from {
                opacity: 0;
                transform: translateY(-30px) scale(0.95);
            }
            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }
        
        .new-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background: linear-gradient(135deg, #FFD700, #FFA500);
            color: #333;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 700;
            z-index: 10;
            animation: pulse 2s ease-in-out infinite;
        }
        
        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }
        
        .review-avatar-placeholder {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            background: linear-gradient(135deg, #5fa052, #7ec968);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1.2rem;
            box-shadow: 0 8px 20px rgba(95, 160, 82, 0.25);
            border: 3px solid #fff;
        }
        
        .review-avatar-placeholder i {
            font-size: 1.8rem;
            color: white;
        }
    </style>
</body>
</html>
