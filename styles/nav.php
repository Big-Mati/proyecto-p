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
          <a class="nav-link active" aria-current="page" href="index.php">INICIO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Catalogo.php">CATÁLOGO</a> 
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Nosotros.php">NOSOTROS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Proyecto_social.php">PROYECTO SOCIAL</a>
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
        <li class="nav-item" style="position: relative;">
          <a class="nav-link" href="Carrito.php">
            <i class="fas fa-shopping-cart"></i>
            <span class="cart-badge" style="position: absolute; top: 0; right: 0; background: #ff6f00; color: white; border-radius: 50%; width: 18px; height: 18px; font-size: 0.7rem; display: none; align-items: center; justify-content: center; font-weight: 700;">0</span>
          </a>
        </li>
        <li class="nav-item">
          <?php 
            $currentPage = basename($_SERVER['PHP_SELF']);
            if ($currentPage != 'index.php' && $currentPage != 'Nosotros.php' && $currentPage != 'Proyecto_social.php'): 
          ?>
          <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i></a>
          <?php endif; ?>
        </li>
      </ul>
    </div>
  </div>
</nav>

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