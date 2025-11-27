<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito - FRESHFOODSEN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/css.css"> 
    <link rel="stylesheet" href="../css/custom.css">
    <link rel="stylesheet" href="../css/premium.css">
    
    <style>
        .cart-container {
            padding: 3rem 0;
            min-height: 70vh;
        }
        
        .breadcrumb {
            background: none;
            padding: 0;
            margin-bottom: 2rem;
        }
        
        .breadcrumb-item a {
            color: #5fa052;
            text-decoration: none;
        }
        
        .breadcrumb-item.active {
            color: #666;
        }
        
        .shipping-notice {
            background: linear-gradient(135deg, #fff8e1, #fffbf0);
            border-left: 4px solid #ffa726;
            padding: 1rem 1.5rem;
            border-radius: 8px;
            margin-bottom: 2rem;
        }
        
        .empty-cart {
            text-align: center;
            padding: 4rem 2rem;
        }
        
        .empty-cart-icon {
            font-size: 6rem;
            color: #e0e0e0;
            margin-bottom: 1.5rem;
        }
        
        .cart-item {
            background: white;
            border-radius: 16px;
            padding: 1.5rem;
            margin-bottom: 1rem;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
        }
        
        .cart-item:hover {
            box-shadow: 0 4px 16px rgba(0,0,0,0.12);
        }
        
        .cart-item-image {
            width: 100px;
            height: 100px;
            object-fit: contain;
            border-radius: 12px;
            background: #f8f9fa;
            padding: 0.5rem;
        }
        
        .quantity-control {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .quantity-btn {
            width: 32px;
            height: 32px;
            border: 2px solid #e0e0e0;
            background: white;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .quantity-btn:hover {
            border-color: #5fa052;
            background: #f0f8f0;
        }
        
        .quantity-value {
            min-width: 40px;
            text-align: center;
            font-weight: 600;
        }
        
        .remove-btn {
            color: #dc3545;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .remove-btn:hover {
            color: #c82333;
            transform: scale(1.1);
        }
        
        .summary-card {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            position: sticky;
            top: 2rem;
        }
        
        .summary-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: #2C3E25;
            margin-bottom: 1.5rem;
        }
        
        .summary-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 1rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid #f0f0f0;
        }
        
        .summary-total {
            font-size: 1.8rem;
            font-weight: 800;
            color: #5fa052;
        }
        
        .checkout-btn {
            width: 100%;
            background: linear-gradient(135deg, #ff9800, #ff6f00);
            color: white;
            border: none;
            padding: 1rem;
            border-radius: 12px;
            font-weight: 700;
            font-size: 1.1rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            margin-top: 1rem;
        }
        
        .checkout-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(255, 152, 0, 0.4);
        }
        
        .checkout-btn:disabled {
            background: #ccc;
            cursor: not-allowed;
        }
        
        .security-badge {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: #5fa052;
            font-size: 0.9rem;
            margin-top: 1rem;
        }
        
        .continue-shopping {
            background: white;
            color: #5fa052;
            border: 2px solid #5fa052;
            padding: 0.75rem 2rem;
            border-radius: 12px;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
        }
        
        .continue-shopping:hover {
            background: #5fa052;
            color: white;
        }
    </style>
</head>
<body>

    <?php require '../styles/nav.php'; ?>

    <div class="cart-container">
        <div class="container">
            
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Carrito</li>
                </ol>
            </nav>

            <!-- Shipping Notice -->
            <div class="shipping-notice">
                <i class="fas fa-truck me-2"></i>
                <strong>Envío gratuito</strong> (excluidos los artículos enviados por almacenes locales)
            </div>

            <div class="row">
                <!-- Cart Items Column -->
                <div class="col-lg-8">
                    <div id="cartItems">
                        <!-- Empty Cart State -->
                        <div class="empty-cart" id="emptyCart">
                            <div class="empty-cart-icon">
                                <i class="fas fa-shopping-cart"></i>
                            </div>
                            <h3 style="color: #666; margin-bottom: 1rem;">El carrito de compras está vacío</h3>
                            <p style="color: #999; margin-bottom: 2rem;">Agrega tus artículos favoritos.</p>
                            <a href="Catalogo.php" class="continue-shopping">Comienza a comprar</a>
                        </div>
                        
                        <!-- Cart Items will be inserted here by JavaScript -->
                    </div>
                </div>

                <!-- Order Summary Column -->
                <div class="col-lg-4">
                    <div class="summary-card" id="orderSummary" style="display: none;">
                        <h3 class="summary-title">Resumen del pedido</h3>
                        
                        <div class="summary-row">
                            <span>Total</span>
                            <span style="font-weight: 600;" id="subtotal">S/ 0.00</span>
                        </div>
                        
                        <div class="summary-row" style="border-bottom: none; margin-bottom: 0; padding-bottom: 0;">
                            <span style="color: #5fa052;">Descuento (10%)</span>
                            <span style="font-weight: 600; color: #5fa052;" id="discount">- S/ 0.00</span>
                        </div>
                        
                        <div class="summary-row" id="comboDiscountRow" style="border-bottom: none; margin-bottom: 0; padding-bottom: 0; display: none;">
                            <span style="color: #5fa052;">¡Combo completo! (17%)</span>
                            <span style="font-weight: 600; color: #5fa052;" id="comboDiscount">- S/ 0.00</span>
                        </div>
                        
                        <div style="border-top: 2px solid #f0f0f0; padding-top: 1.5rem; margin-top: 1.5rem;">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span style="font-size: 1.2rem; font-weight: 600;">Total</span>
                                <span class="summary-total" id="total">S/ 0.00</span>
                            </div>
                            
                            <button class="checkout-btn" id="checkoutBtn">
                                Hacer pedido (0)
                            </button>
                            
                            <div class="security-badge">
                                <i class="fas fa-shield-alt"></i>
                                <span>No se te cobrará hasta que revises este pedido en la página siguiente</span>
                            </div>
                            
                            <div class="security-badge">
                                <i class="fas fa-lock"></i>
                                <span>Opciones de pago seguro</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/interactions.js"></script>
    <script src="../js/cart.js"></script>
</body>
</html>
