<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FRESHFOODSEN - Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/css.css"> 
    <link rel="stylesheet" href="../css/custom.css">
    <link rel="stylesheet" href="../css/premium.css">
    
    <style>
        /* Content sections background */
        .content-sections {
            background: linear-gradient(180deg, #f4ebe2 0%, #ffffff 100%);
            padding-top: 5rem;
            padding-bottom: 5rem;
        }
        
        .about-section-row {
            display: flex;
            align-items: stretch;
        }
        
        .about-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 2px solid rgba(95, 160, 82, 0.2);
            border-radius: 28px;
            padding: 3.5rem;
            box-shadow: 0 15px 50px rgba(95, 160, 82, 0.12);
            transition: all 0.6s cubic-bezier(0.23, 1, 0.32, 1);
            position: relative;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            min-height: 500px;
            height: 100%;
        }
        
        .about-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, #5fa052, #7ec968, #c8e66f);
            opacity: 0;
            transition: opacity 0.4s ease;
        }
        
        .about-card::after {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(126, 201, 104, 0.05) 0%, transparent 70%);
            opacity: 0;
            transition: opacity 0.6s ease;
        }
        
        .about-card:hover::before {
            opacity: 1;
        }
        
        .about-card:hover::after {
            opacity: 1;
        }
        
        .about-card:hover {
            transform: translateY(-12px);
            box-shadow: 0 25px 70px rgba(95, 160, 82, 0.25);
            border-color: #7ec968;
        }
        
        .card-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            position: relative;
            z-index: 1;
        }
        
        .about-card h2 {
            font-size: 2.5rem;
            font-weight: 900;
            background: linear-gradient(135deg, #5fa052, #7ec968);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 1.8rem;
            position: relative;
            display: inline-block;
            letter-spacing: -0.5px;
        }
        
        .about-card h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 70px;
            height: 5px;
            background: linear-gradient(90deg, #5fa052, #7ec968, #c8e66f);
            border-radius: 3px;
        }
        
        .about-card h3 {
            font-size: 1.4rem;
            font-weight: 700;
            color: #5fa052;
            margin-bottom: 1.2rem;
        }
        
        .about-card p {
            font-size: 1.08rem;
            line-height: 1.9;
            color: #2C3E25;
            margin-bottom: 1.2rem;
            font-weight: 400;
        }
        
        .about-image-container {
            height: 100%;
            min-height: 500px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2.5rem;
            background: linear-gradient(135deg, 
                rgba(95, 160, 82, 0.06) 0%, 
                rgba(126, 201, 104, 0.1) 50%, 
                rgba(200, 230, 111, 0.06) 100%);
            border-radius: 28px;
            position: relative;
            overflow: hidden;
        }
        
        .about-image-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGNpcmNsZSBjeD0iMiIgY3k9IjIiIHI9IjEiIGZpbGw9IiM1ZmEwNTIiIGZpbGwtb3BhY2l0eT0iMC4xIi8+PC9zdmc+');
            opacity: 1;
            z-index: 0;
        }
        
        .about-image {
            border-radius: 20px;
            box-shadow: 0 20px 50px rgba(95, 160, 82, 0.3);
            transition: all 0.6s cubic-bezier(0.23, 1, 0.32, 1);
            max-width: 100%;
            max-height: 100%;
            width: auto;
            height: auto;
            object-fit: contain;
            position: relative;
            z-index: 1;
        }
        
        .about-image:hover {
            transform: scale(1.03);
            box-shadow: 0 25px 65px rgba(95, 160, 82, 0.4);
        }
        
        .icon-badge {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #5fa052, #7ec968);
            border-radius: 50%;
            margin-bottom: 1.8rem;
            box-shadow: 0 10px 25px rgba(95, 160, 82, 0.35);
            transition: all 0.4s ease;
        }
        
        .icon-badge:hover {
            transform: rotate(10deg) scale(1.05);
        }
        
        .icon-badge i {
            font-size: 2.2rem;
            color: white;
        }
        
        .reveal-on-scroll {
            opacity: 0;
            transform: translateY(40px);
            transition: all 1s cubic-bezier(0.5, 0, 0, 1);
        }
        
        .reveal-on-scroll.is-visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        .delay-100 { transition-delay: 0.15s; }
        .delay-200 { transition-delay: 0.3s; }
        .delay-300 { transition-delay: 0.45s; }
        
        .btn-custom {
            background: linear-gradient(135deg, #5fa052, #7ec968);
            color: white;
            border: none;
            padding: 14px 35px;
            border-radius: 35px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1.2px;
            transition: all 0.4s ease;
            box-shadow: 0 6px 20px rgba(95, 160, 82, 0.35);
            margin-top: auto;
            align-self: flex-start;
            text-decoration: none;
            display: inline-block;
            font-size: 0.95rem;
            position: relative;
            overflow: hidden;
        }
        
        .btn-custom::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.6s ease;
        }
        
        .btn-custom:hover::before {
            left: 100%;
        }
        
        .btn-custom:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 30px rgba(95, 160, 82, 0.5);
            color: white;
        }
        
        /* Promo card special styling */
        .promo-card {
            border: 3px solid #c8e66f !important;
            background: linear-gradient(135deg, rgba(200, 230, 111, 0.08), rgba(255, 255, 255, 0.95));
        }
        
        .promo-card .icon-badge {
            background: linear-gradient(135deg, #c8e66f, #7ec968);
        }
        
        @media (max-width: 991px) {
            .content-sections {
                padding-top: 3rem;
                padding-bottom: 3rem;
            }
            
            .about-card {
                padding: 2.5rem;
                min-height: auto;
            }
            
            .about-card h2 {
                font-size: 2rem;
            }
            
            .about-image-container {
                height: 350px;
                min-height: 350px;
                margin-top: 1.5rem;
                padding: 2rem;
            }
        }
    </style>
</head>
<body>

    <?php require '../styles/nav.php'; ?>

    <!-- Hero Section (PVM) -->
    <div class="container-fluid hero-container position-relative overflow-hidden">
        <div class="row align-items-center h-100">
            
            <div class="col-lg-4 offset-lg-1 col-md-6 mb-5 mb-lg-0 z-index-2">
                <div class="hero-text-content">
                    <h1 class="hero-title">CUIDA TU COMIDA</h1>
                    <h1 class="hero-title">CUIDA TU VIDA</h1>
                    
                    <hr class="hero-divider">
                    
                    <p class="hero-description">
                        FreshFoodSen es un tupper inteligente
                        que monitorea la frescura y temperatura
                        de los alimentos, enviando alertas cuando
                        están por vencer.
                    </p>
                    
                    <a href="Catalogo.php" class="hero-button shadow-sm" style="text-decoration: none;">Comprar ahora</a>
                </div>
            </div>

            <div class="col-lg-7 col-md-6 text-end p-0 position-relative">
                <img src="../img/foto-inicio.png" class="img-fluid hero-image" alt="Tupper Inteligente FreshFoodSen">
            </div>
        </div>
    </div>

    <div class="content-sections">
        <div class="container">
            
            <!-- Quienes Somos Section -->
            <div class="row align-items-stretch mb-5 reveal-on-scroll">
                <div class="col-lg-6 mb-4 mb-lg-0 d-flex">
                    <div class="about-card">
                        <div class="card-content">
                            <div class="icon-badge">
                                <i class="fas fa-users"></i>
                            </div>
                            <h2>Quiénes Somos</h2>
                            <p>En FreshFoodSen creamos tuppers inteligentes diseñados para ayudarte a conservar, organizar y monitorear tus alimentos de manera sencilla. Nuestro propósito es reducir el desperdicio de comida mientras te ayudamos a ahorrar, comer más saludable y cuidar el medio ambiente.</p>
                            <p>Además, destinamos el 25% de nuestras ganancias a proyectos sociales que impulsan hábitos responsables en comunidades vulnerables. FreshFoodSen es tecnología práctica al servicio de tu hogar y del planeta.</p>
                            <a href="Nosotros.php" class="btn-custom">Conócenos</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex reveal-on-scroll delay-100">
                    <div class="about-image-container">
                        <img src="../img/INICIO/Nosotros.png" alt="Equipo FreshFoodSen" class="about-image">
                    </div>
                </div>
            </div>

            <!-- Proyecto Social Section -->
            <div class="row align-items-stretch mb-5 flex-lg-row-reverse reveal-on-scroll delay-200">
                <div class="col-lg-6 mb-4 mb-lg-0 d-flex">
                    <div class="about-card">
                        <div class="card-content">
                            <div class="icon-badge">
                                <i class="fas fa-hand-holding-heart"></i>
                            </div>
                            <h2>Proyecto Social</h2>
                            <p>Destinamos el 25% de nuestras ganancias a un proyecto educativo que ayuda a reducir el desperdicio de alimentos mediante talleres, retos y apoyo directo con canastas para las familias participantes.</p>
                            <p>Creemos que el cambio comienza en la comunidad y estamos comprometidos a ser parte de la solución, brindando herramientas y conocimientos para un futuro más sostenible.</p>
                            <a href="Proyecto_social.php" class="btn-custom">Haz click para conocer más sobre el proyecto</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex reveal-on-scroll delay-300">
                    <div class="about-image-container">
                        <img src="../img/INICIO/Proyecto social 1.png" alt="Proyecto Social" class="about-image">
                    </div>
                </div>
            </div>

            <!-- Promociones Section -->
            <div class="row align-items-stretch reveal-on-scroll delay-100">
                <div class="col-lg-6 mb-4 mb-lg-0 d-flex">
                    <div class="about-card promo-card">
                        <div class="card-content">
                            <div class="icon-badge">
                                <i class="fas fa-tags"></i>
                            </div>
                            <h2>Promociones</h2>
                            <h3>Pide los 3 tuppers - AHORRA HASTA UN 17%</h3>
                            <p>Lleva a casa el Pack Frescura Total y disfruta de los tres modelos de FreshFoodSen al mejor precio. Con este set tendrás el control total de tus alimentos, desde pequeñas porciones hasta comidas familiares.</p>
                            <p>Tecnología, frescura y organización en un solo paquete. ¡Haz clic para conocer todos los detalles y empezar a ahorrar desde hoy!</p>
                            <a href="Catalogo.php" class="btn-custom">Comprar ahora</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex reveal-on-scroll delay-200">
                    <div class="about-image-container">
                        <img src="../img/INICIO/Promoción de 3 tuppers.png" alt="Promoción Pack Frescura" class="about-image">
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/interactions.js"></script>
</body>
</html>