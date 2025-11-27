<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros - FRESHFOODSEN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/css.css"> 
    <link rel="stylesheet" href="../css/custom.css">
    <link rel="stylesheet" href="../css/premium.css">
    
    <style>
        .nosotros-hero {
            background: linear-gradient(135deg, #5fa052 0%, #7ec968 50%, #8EAC85 100%);
            padding: 5rem 0 4rem 0;
            margin-bottom: 4rem;
            position: relative;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(95, 160, 82, 0.2);
        }
        
        .nosotros-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGNpcmNsZSBjeD0iMiIgY3k9IjIiIHI9IjEuNSIgZmlsbD0iI2ZmZmZmZiIgZmlsbC1vcGFjaXR5PSIwLjEiLz48L3N2Zz4=');
            opacity: 1;
        }
        
        .nosotros-hero h1 {
            font-size: 4rem;
            font-weight: 900;
            color: white;
            margin-bottom: 1.5rem;
            position: relative;
            text-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
            letter-spacing: -1px;
        }
        
        .nosotros-hero p {
            font-size: 1.3rem;
            color: rgba(255, 255, 255, 0.95);
            max-width: 750px;
            margin: 0 auto;
            position: relative;
            font-weight: 500;
        }
        
        .about-section-row {
            display: flex;
            align-items: stretch;
        }
        
        .about-card {
            background: rgba(255, 255, 255, 0.90);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border: 2px solid rgba(95, 160, 82, 0.3);
            border-radius: 24px;
            padding: 3rem;
            box-shadow: 0 10px 40px rgba(95, 160, 82, 0.15);
            transition: all 0.5s cubic-bezier(0.23, 1, 0.32, 1);
            position: relative;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            min-height: 450px;
            height: 100%;
        }
        
        .about-card::before {
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
        
        .about-card:hover::before {
            opacity: 1;
        }
        
        .about-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 60px rgba(95, 160, 82, 0.3);
            border-color: #7ec968;
        }
        
        .card-content {
            flex: 1;
            display: flex;
            flex-direction: column;
        }
        
        .about-card h2 {
            font-size: 2.2rem;
            font-weight: 800;
            background: linear-gradient(135deg, #5fa052, #7ec968);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 1.5rem;
            position: relative;
            display: inline-block;
        }
        
        .about-card h2::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 60px;
            height: 4px;
            background: linear-gradient(90deg, #5fa052, #7ec968, #c8e66f);
            border-radius: 2px;
        }
        
        .about-card p {
            font-size: 1.05rem;
            line-height: 1.8;
            color: #2C3E25;
            margin-bottom: 1rem;
        }
        
        .about-card p.lead {
            font-size: 1.25rem;
            font-weight: 600;
            color: #5fa052;
            margin-bottom: 1.5rem;
        }
        
        .about-image-container {
            height: 100%;
            min-height: 450px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
            background: linear-gradient(135deg, 
                rgba(95, 160, 82, 0.05) 0%, 
                rgba(126, 201, 104, 0.08) 50%, 
                rgba(200, 230, 111, 0.05) 100%);
            border-radius: 24px;
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
            background: url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGNpcmNsZSBjeD0iMiIgY3k9IjIiIHI9IjEiIGZpbGw9IiM1ZmEwNTIiIGZpbGwtb3BhY2l0eT0iMC4wOCIvPjwvc3ZnPg==');
            opacity: 1;
            z-index: 0;
        }
        
        .about-image {
            border-radius: 16px;
            box-shadow: 0 15px 45px rgba(95, 160, 82, 0.25);
            transition: all 0.5s cubic-bezier(0.23, 1, 0.32, 1);
            max-width: 100%;
            max-height: 100%;
            width: auto;
            height: auto;
            object-fit: contain;
            position: relative;
            z-index: 1;
        }
        
        .about-image:hover {
            transform: scale(1.02);
            box-shadow: 0 20px 60px rgba(95, 160, 82, 0.35);
        }
        
        .icon-badge {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, #5fa052, #7ec968);
            border-radius: 50%;
            margin-bottom: 1.5rem;
            box-shadow: 0 8px 20px rgba(95, 160, 82, 0.3);
        }
        
        .icon-badge i {
            font-size: 2rem;
            color: white;
        }
        
        .reveal-on-scroll {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s cubic-bezier(0.5, 0, 0, 1);
        }
        
        .reveal-on-scroll.is-visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        .delay-100 { transition-delay: 0.1s; }
        .delay-200 { transition-delay: 0.2s; }
        .delay-300 { transition-delay: 0.3s; }
        
        @media (max-width: 991px) {
            .nosotros-hero {
                padding: 3rem 0 2.5rem 0;
            }
            
            .nosotros-hero h1 {
                font-size: 2.5rem;
            }
            
            .nosotros-hero p {
                font-size: 1.1rem;
            }
            
            .about-card {
                padding: 2rem;
                min-height: auto;
            }
            
            .about-card h2 {
                font-size: 1.8rem;
            }
            
            .about-image-container {
                height: 300px;
                min-height: 300px;
                margin-top: 1.5rem;
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>

    <?php require '../styles/nav.php'; ?>

    <!-- Hero Section -->
    <div class="nosotros-hero">
        <div class="container text-center">
            <h1 class="reveal-on-scroll">Nosotros</h1>
            <p class="reveal-on-scroll delay-100">Conoce la historia, misión y visión de FreshFoodSen</p>
        </div>
    </div>

    <div class="container pb-5">
        
        <!-- Historia Section -->
        <div class="row align-items-stretch mb-5 reveal-on-scroll">
            <div class="col-lg-6 mb-4 mb-lg-0 d-flex">
                <div class="about-card">
                    <div class="card-content">
                        <div class="icon-badge">
                            <i class="fas fa-book-open"></i>
                        </div>
                        <h2>Nuestra Historia</h2>
                        <p class="lead">FreshFoodSen nació con una misión simple: evitar que la comida se pierda en los hogares.</p>
                        <p>Al ver cuánto se desperdicia por olvido o mala conservación, creamos un tupper inteligente capaz de monitorear la frescura, organizar mejor los alimentos y ayudar a las personas a tomar decisiones a tiempo. Nuestro diseño combina tecnología práctica con un uso cotidiano, pensado para estudiantes, familias y cualquier persona que quiera ahorrar, comer mejor y reducir su impacto ambiental.</p>
                        <p>Además, destinamos el <strong>25% de nuestras ganancias</strong> a programas educativos en comunidades vulnerables, enseñando hábitos sostenibles y el valor de aprovechar cada alimento. FreshFoodSen crece con un propósito: hacer del cuidado de los alimentos una acción sencilla, consciente y accesible para todos.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-flex reveal-on-scroll delay-100">
                <div class="about-image-container">
                    <img src="../img/NOSOTROS/Historia de la marca.png" alt="Historia de la marca" class="about-image">
                </div>
            </div>
        </div>

        <!-- Misión Section -->
        <div class="row align-items-stretch mb-5 flex-lg-row-reverse reveal-on-scroll delay-200">
            <div class="col-lg-6 mb-4 mb-lg-0 d-flex">
                <div class="about-card">
                    <div class="card-content">
                        <div class="icon-badge">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <h2>Misión</h2>
                        <p class="lead">Brindar soluciones tecnológicas accesibles que permitan a las personas conservar, organizar y monitorear sus alimentos de manera inteligente.</p>
                        <p>Nuestra misión es ayudar a que cada usuario ahorre dinero, cuide su salud y adopte hábitos sostenibles, mientras impulsamos el impacto social mediante proyectos educativos que mejoran la vida de comunidades vulnerables.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-flex reveal-on-scroll delay-300">
                <div class="about-image-container">
                    <img src="../img/NOSOTROS/MISIÓN.png" alt="Misión" class="about-image">
                </div>
            </div>
        </div>

        <!-- Visión Section -->
        <div class="row align-items-stretch reveal-on-scroll delay-100">
            <div class="col-lg-6 mb-4 mb-lg-0 d-flex">
                <div class="about-card">
                    <div class="card-content">
                        <div class="icon-badge">
                            <i class="fas fa-eye"></i>
                        </div>
                        <h2>Visión</h2>
                        <p class="lead">Convertirnos en la marca líder de conservación inteligente de alimentos en Latinoamérica.</p>
                        <p>Reconocida por su innovación, responsabilidad social y compromiso ambiental. Aspiramos a construir un futuro donde la tecnología doméstica contribuya a que cada familia valore sus alimentos, reduzca el desperdicio y viva de manera más consciente.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-flex reveal-on-scroll delay-200">
                <div class="about-image-container">
                    <img src="../img/NOSOTROS/VISIÓN.png" alt="Visión" class="about-image">
                </div>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/interactions.js"></script>
</body>
</html>
