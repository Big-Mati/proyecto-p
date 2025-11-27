<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Social - FRESHFOODSEN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/css.css"> 
    <link rel="stylesheet" href="../css/custom.css">
    <link rel="stylesheet" href="../css/premium.css">
    
    <style>
        .social-hero {
            height: 60vh;
            min-height: 500px;
            background: url('../img/PROYECTO SOCIAL/Proyecto social 2.png') no-repeat center center;
            background-size: cover;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 4rem;
        }
        
        .social-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.4); /* Dark overlay for text readability */
        }
        
        .social-hero h1 {
            font-size: 4.5rem;
            font-weight: 900;
            color: white;
            position: relative;
            z-index: 1;
            text-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            letter-spacing: -1px;
            text-align: center;
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
            .social-hero {
                height: 40vh;
                min-height: 300px;
            }
            
            .social-hero h1 {
                font-size: 2.5rem;
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
    <div class="social-hero reveal-on-scroll">
        <div class="container">
            <h1>Proyecto Social</h1>
        </div>
    </div>

    <div class="container pb-5">
        
        <!-- Section 1: Problem & Proposal -->
        <div class="row align-items-stretch mb-5 reveal-on-scroll">
            <div class="col-lg-6 mb-4 mb-lg-0 d-flex">
                <div class="about-card">
                    <div class="card-content">
                        <div class="icon-badge">
                            <i class="fas fa-hand-holding-heart"></i>
                        </div>
                        <h2>Nuestro Compromiso</h2>
                        <p>En FreshFoodSen nos enfocamos en enfrentar el problema del desperdicio de alimentos en la comunidad de Cieneguilla, una realidad que afecta a hogares y comercios locales, generando consecuencias ambientales, económicas y sociales. Cada año se desperdician grandes cantidades de comida, lo que incrementa los residuos, contribuye a la contaminación y refleja desigualdad en el acceso a alimentos frescos.</p>
                        <p>Ante esta situación, desarrollamos una propuesta educativa que combina creatividad, gamificación y participación comunitaria para impulsar un cambio real en los hábitos de consumo. Nuestro proyecto está dirigido especialmente a familias, jóvenes adultos y estudiantes que cocinan en casa y suelen comprar más de lo que consumen.</p>
                        <p>A través de talleres, dinámicas y actividades prácticas, enseñamos a planificar compras, conservar mejor los alimentos y aprovechar cada ingrediente antes de que se pierda. Todo está diseñado para que la comunidad aprenda de manera clara, entretenida y aplicable a su vida diaria.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-flex reveal-on-scroll delay-100">
                <div class="about-image-container">
                    <img src="../img/PROYECTO SOCIAL/Proyecto social 3.png" alt="Talleres educativos" class="about-image">
                </div>
            </div>
        </div>

        <!-- Section 2: Community & Impact -->
        <div class="row align-items-stretch mb-5 flex-lg-row-reverse reveal-on-scroll delay-200">
            <div class="col-lg-6 mb-4 mb-lg-0 d-flex">
                <div class="about-card">
                    <div class="card-content">
                        <div class="icon-badge">
                            <i class="fas fa-users"></i>
                        </div>
                        <h2>Fuerza Comunitaria</h2>
                        <p>Creemos en la fuerza de la comunidad y por ello incorporamos competencias comunitarias que motivan a la participación constante. Cada reto cumplido suma puntos y genera un sentido de logro entre los vecinos, quienes trabajan en conjunto para alcanzar metas relacionadas con el buen manejo de los alimentos. Como incentivo adicional, las familias que sobresalen reciben canastas de productos frescos, reforzando que el aprendizaje y la responsabilidad generan beneficios directos.</p>
                        <p>Este proyecto es posible gracias a nuestro compromiso: destinamos el <strong>25% de nuestras ganancias</strong> a financiar estas actividades educativas y las recompensas para la comunidad. Cubrimos la organización de talleres, la creación de materiales didácticos, la logística de las dinámicas y la entrega de canastas a las familias participantes.</p>
                        <p>De esta manera, no solo ofrecemos tecnología para reducir el desperdicio en los hogares, sino que también impulsamos un impacto social directo y sostenible en una población que lo necesita.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-flex reveal-on-scroll delay-300">
                <div class="about-image-container">
                    <img src="../img/PROYECTO SOCIAL/Proyecto social 4.png" alt="Comunidad participando" class="about-image">
                </div>
            </div>
        </div>

        <!-- Section 3: Future Vision (Full Width) -->
        <div class="row reveal-on-scroll delay-100">
            <div class="col-12">
                <div class="about-card text-center">
                    <div class="icon-badge mx-auto">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <h2>Proyección 2026</h2>
                    <p class="lead mb-4" style="max-width: 800px; margin-left: auto; margin-right: auto;">
                        El proyecto se desarrollará durante seis a ocho meses en el año 2026, utilizando escuelas, centros barriales y espacios públicos de Cieneguilla.
                    </p>
                    <p style="max-width: 900px; margin-left: auto; margin-right: auto;">
                        Durante todo el proceso acompañaremos a la comunidad con actividades variadas, seguimiento constante y oportunidades de participación. Nuestro propósito final es construir una cultura local que valore los alimentos, reduzca el desperdicio y fortalezca la unión entre los habitantes mediante prácticas sostenibles que beneficien a todos.
                    </p>
                </div>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/interactions.js"></script>
</body>
</html>
