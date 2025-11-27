// Cart Management System
class ShoppingCart {
    constructor() {
        this.items = this.loadCart();
        this.init();
    }

    init() {
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', () => this.setup());
        } else {
            this.setup();
        }
    }

    setup() {
        if (window.location.pathname.includes('Carrito.php')) {
            this.renderCart();
            this.setupEventListeners();
        }
        this.updateCartBadge();
    }

    setupEventListeners() {
        const container = document.getElementById('cartItems');
        if (!container) return;

        // Remove existing listeners to avoid duplicates
        const newContainer = container.cloneNode(true);
        container.parentNode.replaceChild(newContainer, container);

        // Event Delegation for Clicks and Changes
        newContainer.addEventListener('click', (e) => {
            const target = e.target;
            const btn = target.closest('button') || target.closest('.remove-btn');

            if (!btn) return;

            const uniqueId = btn.dataset.id;
            if (!uniqueId) return;

            e.preventDefault();
            e.stopPropagation();

            if (btn.classList.contains('btn-decrease')) {
                const item = this.items.find(i => i.uniqueId === uniqueId);
                if (item) this.updateQuantity(uniqueId, parseInt(item.quantity) - 1);
            }
            else if (btn.classList.contains('btn-increase')) {
                const item = this.items.find(i => i.uniqueId === uniqueId);
                if (item) this.updateQuantity(uniqueId, parseInt(item.quantity) + 1);
            }
            else if (btn.classList.contains('remove-btn')) {
                this.removeItem(uniqueId);
            }
        });

        // Listener for direct input changes
        newContainer.addEventListener('change', (e) => {
            if (e.target.classList.contains('quantity-value')) {
                const uniqueId = e.target.dataset.id;
                let newQty = parseInt(e.target.value);

                // If empty or invalid or 0, remove item
                if (isNaN(newQty) || newQty <= 0) {
                    this.removeItem(uniqueId);
                } else {
                    this.updateQuantity(uniqueId, newQty);
                }
            }
        });

        // Prevent negative numbers while typing
        newContainer.addEventListener('input', (e) => {
            if (e.target.classList.contains('quantity-value')) {
                // Optional: Real-time validation if needed
            }
        });
    }

    loadCart() {
        try {
            const saved = localStorage.getItem('freshfoodsen_cart');
            return saved ? JSON.parse(saved) : [];
        } catch (e) {
            return [];
        }
    }

    saveCart() {
        localStorage.setItem('freshfoodsen_cart', JSON.stringify(this.items));
        this.updateCartBadge();
    }

    addItem(product) {
        const itemId = `${product.id}_${product.color || 'default'}`;
        const existingItem = this.items.find(item => item.uniqueId === itemId);

        if (existingItem) {
            existingItem.quantity = parseInt(existingItem.quantity) + 1;
        } else {
            this.items.push({
                ...product,
                uniqueId: itemId,
                quantity: 1,
                color: product.color || 'Negro'
            });
        }

        this.saveCart();
        this.showNotification(`${product.name} agregado al carrito`);

        if (window.location.pathname.includes('Carrito.php')) {
            this.renderCart();
        }
    }

    removeItem(uniqueId) {
        this.items = this.items.filter(item => item.uniqueId !== uniqueId);
        this.saveCart();
        if (window.location.pathname.includes('Carrito.php')) {
            this.renderCart();
        }
    }

    updateQuantity(uniqueId, newQuantity) {
        const qty = parseInt(newQuantity);
        if (qty <= 0) {
            this.removeItem(uniqueId);
        } else {
            const item = this.items.find(item => item.uniqueId === uniqueId);
            if (item) {
                item.quantity = qty;
                this.saveCart();
                if (window.location.pathname.includes('Carrito.php')) {
                    this.renderCart();
                }
            }
        }
    }

    parsePrice(price) {
        if (typeof price === 'number') return price;
        const clean = String(price).replace(/[^0-9.]/g, '');
        return parseFloat(clean) || 0;
    }

    getTotal() {
        return this.items.reduce((total, item) => {
            return total + (this.parsePrice(item.price) * parseInt(item.quantity));
        }, 0);
    }

    getTotalItems() {
        return this.items.reduce((total, item) => total + parseInt(item.quantity), 0);
    }

    updateCartBadge() {
        const badge = document.querySelector('.cart-badge');
        if (badge) {
            const count = this.getTotalItems();
            badge.textContent = count;
            badge.style.display = count > 0 ? 'flex' : 'none';
        }
    }

    renderCart() {
        const container = document.getElementById('cartItems');
        const emptyCart = document.getElementById('emptyCart');
        const orderSummary = document.getElementById('orderSummary');
        const subtotalEl = document.getElementById('subtotal');
        const totalEl = document.getElementById('total');
        const checkoutBtn = document.getElementById('checkoutBtn');

        if (!container) return;

        // Always show order summary
        if (orderSummary) orderSummary.style.display = 'block';

        if (this.items.length === 0) {
            const emptyContent = `
            <div class="empty-cart" id="emptyCart" style="display: block;">
                <div class="empty-cart-icon"><i class="fas fa-shopping-cart"></i></div>
                <h3 style="color: #666; margin-bottom: 1rem;">El carrito de compras está vacío</h3>
                <p style="color: #999; margin-bottom: 2rem;">Agrega tus artículos favoritos.</p>
                <a href="Catalogo.php" class="continue-shopping">Comienza a comprar</a>
            </div>`;
            container.innerHTML = emptyContent;
        } else {
            const itemsHTML = this.items.map(item => {
                const price = this.parsePrice(item.price);
                const itemTotal = price * parseInt(item.quantity);

                return `
                <div class="cart-item">
                    <div class="row align-items-center">
                        <div class="col-md-2 col-3">
                            <img src="${item.image}" alt="${item.name}" class="cart-item-image" onerror="this.src='../img/placeholder.png'">
                        </div>
                        <div class="col-md-4 col-9">
                            <h5 style="font-weight: 700; color: #2C3E25; margin-bottom: 0.5rem;">${item.name}</h5>
                            <p style="color: #7ec968; margin: 0; font-size: 0.9rem;">${item.subtitle}</p>
                            ${item.color && !item.id.startsWith('sub_') && !item.id.startsWith('divisor_quad') && !item.id.startsWith('separador_doble') && !item.id.startsWith('tres_div') && !item.id.startsWith('tapa_smartseal') && !item.id.startsWith('cargador_fastcharge') ? `<p style="color: #999; margin: 0.25rem 0 0 0; font-size: 0.85rem;">Color: ${item.color}</p>` : ''}
                        </div>
                        <div class="col-md-2 col-4 mt-3 mt-md-0">
                            <div class="quantity-control">
                                <button class="quantity-btn btn-decrease" data-id="${item.uniqueId}">
                                    <i class="fas fa-minus" style="font-size: 0.8rem;"></i>
                                </button>
                                <input type="number" class="quantity-value" value="${item.quantity}" data-id="${item.uniqueId}" 
                                       style="width: 50px; height: 32px; border: none; text-align: center; font-weight: 600; -moz-appearance: textfield; background: transparent;">
                                <button class="quantity-btn btn-increase" data-id="${item.uniqueId}">
                                    <i class="fas fa-plus" style="font-size: 0.8rem;"></i>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 mt-3 mt-md-0">
                            <p style="font-size: 1.5rem; font-weight: 800; color: #5fa052; margin: 0;">S/ ${itemTotal.toFixed(2)}</p>
                        </div>
                        <div class="col-md-1 col-2 mt-3 mt-md-0 text-end">
                            <i class="fas fa-trash remove-btn" data-id="${item.uniqueId}" style="cursor: pointer;"></i>
                        </div>
                    </div>
                </div>`;
            }).join('');

            const emptyCartHTML = `
                <div class="empty-cart" id="emptyCart" style="display: none;">
                    <div class="empty-cart-icon"><i class="fas fa-shopping-cart"></i></div>
                    <h3 style="color: #666; margin-bottom: 1rem;">El carrito de compras está vacío</h3>
                    <p style="color: #999; margin-bottom: 2rem;">Agrega tus artículos favoritos.</p>
                    <a href="Catalogo.php" class="continue-shopping">Comienza a comprar</a>
                </div>
            `;

            container.innerHTML = emptyCartHTML + itemsHTML;
        }

        // Always calculate and update totals (even if 0)
        const total = this.getTotal();
        const totalItems = this.getTotalItems();

        // Check if cart has all 3 models (Mini, Standard, Family)
        const hasMini = this.items.some(item => item.id === 'mini');
        const hasStandard = this.items.some(item => item.id === 'standard');
        const hasFamily = this.items.some(item => item.id === 'family');
        const hasCombo = hasMini && hasStandard && hasFamily;

        // Calculate discounts
        const baseDiscount = total * 0.10; // 10% always
        const comboDiscount = hasCombo ? total * 0.17 : 0; // 17% if combo
        const totalDiscount = baseDiscount + comboDiscount;
        const finalTotal = total - totalDiscount;

        if (subtotalEl) subtotalEl.textContent = `S/ ${total.toFixed(2)}`;

        // Update base discount
        const discountEl = document.getElementById('discount');
        if (discountEl) {
            discountEl.textContent = `- S/ ${baseDiscount.toFixed(2)}`;
        }

        // Show/hide combo discount row
        const comboDiscountRow = document.getElementById('comboDiscountRow');
        const comboDiscountEl = document.getElementById('comboDiscount');
        if (comboDiscountRow && comboDiscountEl) {
            if (hasCombo) {
                comboDiscountRow.style.display = 'flex';
                comboDiscountEl.textContent = `- S/ ${comboDiscount.toFixed(2)}`;
            } else {
                comboDiscountRow.style.display = 'none';
            }
        }

        if (totalEl) totalEl.textContent = `S/ ${finalTotal.toFixed(2)}`;
        if (checkoutBtn) {
            checkoutBtn.textContent = `Hacer pedido (${totalItems})`;
            // Optional: disable button if empty
            if (totalItems === 0) {
                checkoutBtn.style.opacity = '0.6';
                checkoutBtn.style.cursor = 'not-allowed';
            } else {
                checkoutBtn.style.opacity = '1';
                checkoutBtn.style.cursor = 'pointer';
            }
        }

        this.setupEventListeners();
    }

    showNotification(message) {
        const notification = document.createElement('div');
        notification.style.cssText = `
            position: fixed; top: 100px; right: 20px;
            background: linear-gradient(135deg, #5fa052, #7ec968);
            color: white; padding: 1rem 1.5rem; border-radius: 12px;
            box-shadow: 0 8px 20px rgba(95, 160, 82, 0.4);
            z-index: 9999; animation: slideIn 0.3s ease-out; font-weight: 600;
        `;
        notification.innerHTML = `<i class="fas fa-check-circle me-2"></i>${message}`;
        document.body.appendChild(notification);
        setTimeout(() => {
            notification.style.animation = 'slideOut 0.3s ease-out';
            setTimeout(() => notification.remove(), 300);
        }, 3000);
    }

    showColorModal(product) {
        // Define specific colors for each product (4 colors each) with their corresponding images
        const productColors = {
            'mini': [
                { name: 'Negro', hex: '#2C3E50', image: '../img/FreshFoodSen Mini (Pequeño)/FreshFoodSen Mini (Pequeño)/1.png' },
                { name: 'Morado', hex: '#8E44AD', image: '../img/FreshFoodSen Mini (Pequeño)/FreshFoodSen Mini (Pequeño)/2.png' },
                { name: 'Verde', hex: '#5fa052', image: '../img/FreshFoodSen Mini (Pequeño)/FreshFoodSen Mini (Pequeño)/3.png' },
                { name: 'Blanco', hex: '#ECF0F1', image: '../img/FreshFoodSen Mini (Pequeño)/FreshFoodSen Mini (Pequeño)/4.png' }
            ],
            'standard': [
                { name: 'Gris', hex: '#95A5A6', image: '../img/FreshFoodSen Standard (Mediano)/FreshFoodSen Standard (Mediano)/Diseño sin título.png' },
                { name: 'Morado', hex: '#8E44AD', image: '../img/FreshFoodSen Standard (Mediano)/FreshFoodSen Standard (Mediano)/Diseño sin título (1).png' },
                { name: 'Verde', hex: '#5fa052', image: '../img/FreshFoodSen Standard (Mediano)/FreshFoodSen Standard (Mediano)/Diseño sin título (2).png' },
                { name: 'Negro', hex: '#2C3E50', image: '../img/FreshFoodSen Standard (Mediano)/FreshFoodSen Standard (Mediano)/Diseño sin título (3).png' }
            ],
            'family': [
                { name: 'Blanco', hex: '#ECF0F1', image: '../img/FreshFoodSen Family (Grande)/FreshFoodSen Family (Grande)/Diseño sin título.png' },
                { name: 'Verde', hex: '#5fa052', image: '../img/FreshFoodSen Family (Grande)/FreshFoodSen Family (Grande)/Diseño sin título (1).png' },
                { name: 'Morado', hex: '#8E44AD', image: '../img/FreshFoodSen Family (Grande)/FreshFoodSen Family (Grande)/Diseño sin título (2).png' },
                { name: 'Negro', hex: '#2C3E50', image: '../img/FreshFoodSen Family (Grande)/FreshFoodSen Family (Grande)/4.png' }
            ]
        };

        // Default colors if id not found
        const defaultColors = [
            { name: 'Negro', hex: '#2C3E50', image: product.image },
            { name: 'Blanco', hex: '#ECF0F1', image: product.image }
        ];

        const colors = productColors[product.id] || defaultColors;

        const modal = document.createElement('div');
        modal.style.cssText = `
            position: fixed; top: 0; left: 0; right: 0; bottom: 0;
            background: rgba(0,0,0,0.5); display: flex; align-items: center;
            justify-content: center; z-index: 10000; animation: fadeIn 0.3s ease-out;
        `;

        modal.innerHTML = `
            <div style="background: white; border-radius: 20px; padding: 2rem; max-width: 500px; width: 90%; box-shadow: 0 20px 60px rgba(0,0,0,0.3);">
                <h4 style="margin-bottom: 1.5rem; color: #2C3E25; font-weight: 700;">Selecciona el color</h4>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(100px, 1fr)); gap: 1rem; margin-bottom: 1.5rem;">
                    ${colors.map(color => `
                        <div class="color-option" data-color="${color.name}" data-image="${color.image}" style="cursor: pointer; text-align: center; padding: 1rem; border-radius: 12px; border: 2px solid #e0e0e0; transition: all 0.3s ease;">
                            <div style="width: 50px; height: 50px; background: ${color.hex}; border-radius: 50%; margin: 0 auto 0.5rem; border: 3px solid white; box-shadow: 0 2px 8px rgba(0,0,0,0.2);"></div>
                            <div style="font-size: 0.9rem; font-weight: 600; color: #666;">${color.name}</div>
                        </div>
                    `).join('')}
                </div>
                <button class="cancel-color-btn" style="width: 100%; padding: 0.75rem; border: 2px solid #ddd; background: white; border-radius: 12px; font-weight: 600; color: #666; cursor: pointer;">Cancelar</button>
            </div>
        `;

        document.body.appendChild(modal);

        modal.querySelectorAll('.color-option').forEach(option => {
            option.addEventListener('mouseenter', () => { option.style.borderColor = '#5fa052'; option.style.transform = 'scale(1.05)'; });
            option.addEventListener('mouseleave', () => { option.style.borderColor = '#e0e0e0'; option.style.transform = 'scale(1)'; });
            option.addEventListener('click', () => {
                const selectedColor = option.dataset.color;
                const selectedImage = option.dataset.image;
                this.addItem({ ...product, color: selectedColor, image: selectedImage });
                modal.remove();
            });
        });

        modal.querySelector('.cancel-color-btn').addEventListener('click', () => modal.remove());
        modal.addEventListener('click', (e) => { if (e.target === modal) modal.remove(); });
    }

    showSizeModal(product) {
        // Define sizes and prices for each accessory type
        const productSizes = {
            'divisor_quad': [
                { name: 'Mini', price: 'S/ 30.00', description: '4 compartimentos pequeños ideales para snacks' },
                { name: 'Standard', price: 'S/ 40.00', description: '4 compartimentos medianos para guarniciones' },
                { name: 'Family', price: 'S/ 50.00', description: '4 compartimentos grandes para meal prep' }
            ],
            'separador_doble': [
                { name: 'Mini', price: 'S/ 35.00', description: '2 secciones iguales para snacks' },
                { name: 'Standard', price: 'S/ 45.00', description: '2 secciones amplias para plato principal y ensalada' },
                { name: 'Family', price: 'S/ 55.00', description: '2 compartimentos extra grandes' }
            ],
            'tres_div': [
                { name: 'Mini', price: 'S/ 38.00', description: '3 secciones para proteína, guarnición y salsa' },
                { name: 'Standard', price: 'S/ 48.00', description: '3 secciones equilibradas para comida completa' },
                { name: 'Family', price: 'S/ 58.00', description: '3 secciones generosas para múltiples componentes' }
            ],
            'tapa_smartseal': [
                { name: 'Mini', price: 'S/ 55.00', description: 'Para modelo de 500ml. LED de frescura y sellado hermético.', image: '../img/Tapa SmartSeal Pro/500ml.png' },
                { name: 'Standard', price: 'S/ 60.00', description: 'Para modelo de 1L. LED inteligente e indicador de presión.', image: '../img/Tapa SmartSeal Pro/1L.png' },
                { name: 'Family', price: 'S/ 70.00', description: 'Para modelo de 1.5L. Sellado firme para grandes porciones.', image: '../img/Tapa SmartSeal Pro/1.5L.png' }
            ]
        };

        const sizes = productSizes[product.id] || productSizes['divisor_quad'];

        const modal = document.createElement('div');
        modal.style.cssText = `
            position: fixed; top: 0; left: 0; right: 0; bottom: 0;
            background: rgba(0,0,0,0.5); display: flex; align-items: center;
            justify-content: center; z-index: 10000; animation: fadeIn 0.3s ease-out;
        `;

        modal.innerHTML = `
            <div style="background: white; border-radius: 20px; padding: 2rem; max-width: 500px; width: 90%; box-shadow: 0 20px 60px rgba(0,0,0,0.3);">
                <h4 style="margin-bottom: 1.5rem; color: #2C3E25; font-weight: 700;">Selecciona el tamaño</h4>
                <div style="display: flex; flex-direction: column; gap: 1rem; margin-bottom: 1.5rem;">
                    ${sizes.map(size => `
                        <div class="size-option" data-size="${size.name}" data-price="${size.price}" data-image="${size.image || product.image}" style="cursor: pointer; padding: 1rem; border-radius: 12px; border: 2px solid #e0e0e0; transition: all 0.3s ease;">
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 0.5rem;">
                                <div style="font-size: 1.1rem; font-weight: 700; color: #2C3E25;">${size.name}</div>
                                <div style="font-size: 1.2rem; font-weight: 800; color: #5fa052;">${size.price}</div>
                            </div>
                            <div style="font-size: 0.85rem; color: #666;">${size.description}</div>
                        </div>
                    `).join('')}
                </div>
                <button class="cancel-size-btn" style="width: 100%; padding: 0.75rem; border: 2px solid #ddd; background: white; border-radius: 12px; font-weight: 600; color: #666; cursor: pointer;">Cancelar</button>
            </div>
        `;

        document.body.appendChild(modal);

        modal.querySelectorAll('.size-option').forEach(option => {
            option.addEventListener('mouseenter', () => {
                option.style.borderColor = '#5fa052';
                option.style.background = '#f8fdf8';
                option.style.transform = 'scale(1.02)';
            });
            option.addEventListener('mouseleave', () => {
                option.style.borderColor = '#e0e0e0';
                option.style.background = 'white';
                option.style.transform = 'scale(1)';
            });
            option.addEventListener('click', () => {
                const selectedSize = option.dataset.size;
                const selectedPrice = option.dataset.price;
                const selectedImage = option.dataset.image;
                const fullName = `${product.name} - ${selectedSize}`;
                const id = `${product.id}_${selectedSize.toLowerCase()}`;

                this.addItem({
                    id: id,
                    name: fullName,
                    subtitle: product.subtitle,
                    price: selectedPrice,
                    image: selectedImage
                });
                modal.remove();
            });
        });

        modal.querySelector('.cancel-size-btn').addEventListener('click', () => modal.remove());
        modal.addEventListener('click', (e) => { if (e.target === modal) modal.remove(); });
    }
}

const cart = new ShoppingCart();

const style = document.createElement('style');
style.textContent = `
    @keyframes slideIn { from { transform: translateX(400px); opacity: 0; } to { transform: translateX(0); opacity: 1; } }
    @keyframes slideOut { from { transform: translateX(0); opacity: 1; } to { transform: translateX(400px); opacity: 0; } }
    @keyframes fadeIn { from { opacity: 0; } to { opacity: 1; } }
    /* Remove arrows from number input */
    .quantity-value::-webkit-outer-spin-button,
    .quantity-value::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
    .quantity-value:focus {
        outline: none;
        background: #f8f9fa !important;
        border-radius: 4px;
    }
`;
document.head.appendChild(style);
