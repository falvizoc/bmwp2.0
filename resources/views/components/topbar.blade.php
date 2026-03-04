{{-- Topbar desktop: ciudad + teléfono + redes --}}
<div class="hidden md:block bg-primary text-white text-xs py-1.5 border-b border-white/10">
    <div class="max-w-7xl mx-auto px-4 md:px-8 flex items-center justify-between">
        <div class="flex items-center space-x-4">
            <span><i class="fas fa-map-marker-alt mr-1 text-yellow-400"></i>Tampico, Tamaulipas</span>
            <a href="tel:+528332272527" class="hover:text-yellow-400 transition-colors">
                <i class="fas fa-phone mr-1 text-yellow-400"></i>(833) 227-2527
            </a>
        </div>
        <div class="flex items-center space-x-3">
            <a target="_blank" rel="nofollow" href="https://www.facebook.com/BitmovilMx" aria-label="Facebook" class="hover:text-yellow-400 transition-colors">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a target="_blank" rel="nofollow" href="https://www.instagram.com/bitmovil/" aria-label="Instagram" class="hover:text-yellow-400 transition-colors">
                <i class="fab fa-instagram"></i>
            </a>
            <a target="_blank" rel="nofollow" href="https://www.linkedin.com/company/bitmovil" aria-label="LinkedIn" class="hover:text-yellow-400 transition-colors">
                <i class="fab fa-linkedin-in"></i>
            </a>
            <a target="_blank" rel="nofollow" href="https://api.whatsapp.com/send?phone=5218332272527&text=%C2%A1Hola!%20Bitmovil." aria-label="WhatsApp" class="hover:text-yellow-400 transition-colors">
                <i class="fab fa-whatsapp"></i>
            </a>
        </div>
    </div>
</div>

{{-- Topbar mobile: solo teléfono + tienda --}}
<div class="md:hidden bg-primary/90 text-white text-xs py-1.5 border-b border-white/10">
    <div class="flex items-center justify-between px-4">
        <a href="tel:+528332272527" class="flex items-center space-x-1 hover:text-yellow-400 transition-colors">
            <i class="fas fa-phone text-yellow-400"></i>
            <span>(833) 227-2527</span>
        </a>
        <a href="https://store.bitmovil.mx/" target="_blank" rel="nofollow"
           class="flex items-center space-x-1 hover:text-yellow-400 transition-colors">
            <i class="fas fa-shopping-cart text-yellow-400"></i>
            <span>Tienda en Línea</span>
        </a>
    </div>
</div>
