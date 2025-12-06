<?php 
  // Get current page name
  $current_script = basename($_SERVER['PHP_SELF']);
?>
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm custom-nav-border-bottom">
  <div class="container-fluid">
    
    <a class="navbar-brand freshfoodsen-logo" href="index.php">
        FRESHFOODSEN
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 custom-nav-links">
        <li class="nav-item">
          <a class="nav-link <?php echo (stripos($current_script, 'index.php') !== false) ? 'nav-active' : ''; ?>" href="index.php">INICIO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo (stripos($current_script, 'Catalogo.php') !== false) ? 'nav-active' : ''; ?>" href="Catalogo.php">CATÁLOGO</a> 
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo (stripos($current_script, 'Nosotros.php') !== false) ? 'nav-active' : ''; ?>" href="Nosotros.php">NOSOTROS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo (stripos($current_script, 'Proyecto_social.php') !== false) ? 'nav-active' : ''; ?>" href="Proyecto_social.php">PROYECTO SOCIAL</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo (stripos($current_script, 'Resenas.php') !== false) ? 'nav-active' : ''; ?>" href="Resenas.php">RESEÑAS</a>
        </li>
      </ul>

      <ul class="navbar-nav mb-2 mb-lg-0 custom-icons">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarUserDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-user"></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarUserDropdown">
            <li><a class="dropdown-item" href="#">Mi Perfil</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="logout.php">Cerrar Sesión</a></li>
          </ul>
        </li>
        <?php if (stripos($current_script, 'Catalogo.php') !== false || stripos($current_script, 'Carrito.php') !== false): ?>
        <li class="nav-item" style="position: relative;">
          <a class="nav-link" href="Carrito.php">
            <i class="fas fa-shopping-cart"></i>
            <span class="cart-badge" style="position: absolute; top: 0; right: 0; background: #ff6f00; color: white; border-radius: 50%; width: 18px; height: 18px; font-size: 0.7rem; display: none; align-items: center; justify-content: center; font-weight: 700;">0</span>
          </a>
        </li>
        <?php endif; ?>
        <?php if (stripos($current_script, 'Resenas.php') !== false): ?>
        <li class="nav-item">
          <a class="nav-link btn-add-review" href="#" data-bs-toggle="modal" data-bs-target="#addReviewModal">
            <i class="fas fa-plus-circle"></i> <span class="d-none d-md-inline">Agregar Reseña</span>
          </a>
        </li>
        <?php endif; ?>
        <li class="nav-item">
          <?php if (stripos($current_script, 'index.php') === false && stripos($current_script, 'Nosotros.php') === false && stripos($current_script, 'Proyecto_social.php') === false && stripos($current_script, 'Resenas.php') === false): ?>
          <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i></a>
          <?php endif; ?>
        </li>
      </ul>
    </div>
  </div>
</nav>

<style>
  /* Active Navigation Link Styles - Premium Fresh Food Theme */
  .navbar .navbar-nav .nav-link.nav-active,
  .custom-nav-links .nav-link.nav-active {
    color: #ffffff !important;
    font-weight: 700 !important;
    position: relative !important;
    background: linear-gradient(135deg, #5fa052, #7ec968) !important;
    padding: 8px 16px !important;
    border-radius: 25px !important;
    box-shadow: 
      0 4px 15px rgba(95, 160, 82, 0.4),
      0 0 20px rgba(126, 201, 104, 0.2) !important;
    animation: activeGlow 2s ease-in-out infinite alternate;
  }
  
  .navbar .navbar-nav .nav-link.nav-active::before,
  .custom-nav-links .nav-link.nav-active::before {
    content: '🌿';
    margin-right: 6px;
    font-size: 0.85rem;
    animation: leafBounce 2s ease-in-out infinite;
  }
  
  .nav-link.nav-active::after {
    display: none !important;
  }
  
  @keyframes activeGlow {
    0% { 
      box-shadow: 
        0 4px 15px rgba(95, 160, 82, 0.4),
        0 0 20px rgba(126, 201, 104, 0.2);
    }
    100% { 
      box-shadow: 
        0 6px 20px rgba(95, 160, 82, 0.5),
        0 0 30px rgba(126, 201, 104, 0.3);
    }
  }
  
  @keyframes leafBounce {
    0%, 100% { transform: translateY(0) rotate(0deg); }
    25% { transform: translateY(-2px) rotate(-5deg); }
    75% { transform: translateY(1px) rotate(5deg); }
  }
  
  .custom-nav-links .nav-link {
    position: relative;
    transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
    padding: 8px 14px;
    border-radius: 25px;
    margin: 0 2px;
  }
  
  .custom-nav-links .nav-link:not(.nav-active) {
    color: #4a5568 !important;
  }
  
  .custom-nav-links .nav-link:hover:not(.nav-active) {
    color: #5fa052 !important;
    background: rgba(95, 160, 82, 0.1) !important;
    transform: translateY(-2px);
  }
  
  .custom-nav-links .nav-link:hover:not(.nav-active)::after {
    content: '';
    position: absolute;
    bottom: 2px;
    left: 50%;
    transform: translateX(-50%);
    width: 30%;
    height: 2px;
    background: linear-gradient(90deg, #5fa052, #7ec968);
    border-radius: 2px;
    animation: expandLine 0.3s ease forwards;
  }
  
  @keyframes expandLine {
    from { width: 0%; opacity: 0; }
    to { width: 30%; opacity: 1; }
  }
  
  /* Logo enhancement - high specificity */
  a.navbar-brand.freshfoodsen-logo {
    font-weight: 800 !important;
    background: linear-gradient(135deg, #5fa052, #7ec968) !important;
    -webkit-background-clip: text !important;
    background-clip: text !important;
    -webkit-text-fill-color: transparent !important;
    transition: all 0.3s ease;
  }
  
  a.navbar-brand.freshfoodsen-logo:hover {
    transform: scale(1.02);
    filter: drop-shadow(0 2px 8px rgba(95, 160, 82, 0.3));
  }
  
  /* Add Review Button Style */
  .btn-add-review {
    background: linear-gradient(135deg, #5fa052, #7ec968) !important;
    color: #ffffff !important;
    padding: 8px 18px !important;
    border-radius: 25px !important;
    font-weight: 600 !important;
    font-size: 0.9rem !important;
    box-shadow: 0 4px 15px rgba(95, 160, 82, 0.3);
    transition: all 0.3s ease !important;
    display: flex !important;
    align-items: center !important;
    gap: 6px;
  }
  
  .btn-add-review:hover {
    transform: translateY(-2px) !important;
    box-shadow: 0 6px 20px rgba(95, 160, 82, 0.5) !important;
    background: linear-gradient(135deg, #4d9042, #6cb858) !important;
  }
  
  .btn-add-review i {
    font-size: 1rem;
  }
</style>

<script>
// Robust JavaScript to ensure active class is applied on page load
document.addEventListener('DOMContentLoaded', function() {
    const currentURL = window.location.href.toLowerCase();
    const navLinks = document.querySelectorAll('.custom-nav-links .nav-link');
    
    // Define page mappings
    const pageMap = {
        'index.php': 'INICIO',
        'catalogo.php': 'CATÁLOGO',
        'nosotros.php': 'NOSOTROS',
        'proyecto_social.php': 'PROYECTO SOCIAL',
        'resenas.php': 'RESEÑAS'
    };
    
    navLinks.forEach(link => {
        const linkText = link.textContent.trim();
        const href = link.getAttribute('href').toLowerCase();
        
        // Check if current URL contains the href
        if (currentURL.includes(href.replace('.php', '')) && href !== '#') {
            // Remove nav-active from all links first
            navLinks.forEach(l => l.classList.remove('nav-active'));
            // Add to current
            link.classList.add('nav-active');
        }
    });
    
    // Specific check for Proyecto_social
    if (currentURL.includes('proyecto_social') || currentURL.includes('proyecto-social')) {
        navLinks.forEach(link => {
            if (link.textContent.trim() === 'PROYECTO SOCIAL') {
                link.classList.add('nav-active');
            }
        });
    }
});
</script>

<style>
  .promo-banner {
    background: linear-gradient(135deg, #5fa052 0%, #7ec968 50%, #8EAC85 100%);
    color: white;
    text-align: center;
    padding: 10px 0;
    font-size: 0.95rem;
    font-weight: 600;
    overflow: hidden;
    position: relative;
    box-shadow: 0 2px 8px rgba(95, 160, 82, 0.2);
  }
  
  .promo-banner::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(90deg, 
      transparent 0%, 
      rgba(255, 255, 255, 0.1) 50%, 
      transparent 100%);
    animation: shimmer 3s infinite;
  }
  
  @keyframes shimmer {
    0% { transform: translateX(-100%); }
    100% { transform: translateX(100%); }
  }
  
  #promo-text {
    display: inline-block; 
    white-space: nowrap; 
    transition: transform 1.0s ease-in-out, opacity 1.0s ease-in-out;
    position: relative;
    z-index: 1;
  }
  
  .promo-icon {
    margin-right: 8px;
    font-size: 1.1rem;
  }
</style>

<div class="promo-banner">
  <span id="promo-text">
    <i class="fas fa-gift"></i>
    PROMOCIÓN DE LANZAMIENTO
  </span>
</div>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    
    const messages = [
      "\u003ci class='fas fa-gift promo-icon'\u003e\u003c/i\u003ePROMOCIÓN DE LANZAMIENTO",
      "\u003ci class='fas fa-tag promo-icon'\u003e\u003c/i\u003e10% de descuento en tu primera compra",
      "\u003ci class='fas fa-truck promo-icon'\u003e\u003c/i\u003eEnvío gratis a toda Lima Metropolitana"
    ];

    let currentIndex = 0;
    const promoElement = document.getElementById("promo-text");

    if (promoElement) {
      setInterval(() => {
        
        promoElement.style.transform = "translateX(-150%)";
        promoElement.style.opacity = 0;
        
        setTimeout(() => {
          currentIndex = (currentIndex + 1) % messages.length;
          promoElement.innerHTML = messages[currentIndex];
          
          promoElement.style.transition = "none";
          promoElement.style.transform = "translateX(150%)";
        }, 1000);
        setTimeout(() => {
          promoElement.style.transition = "transform 1.0s ease-in-out, opacity 1.0s ease-in-out";
          promoElement.style.transform = "translateX(0)";
          promoElement.style.opacity = 1;
        }, 1050); 

      }, 5000); 
    }
  });
</script>