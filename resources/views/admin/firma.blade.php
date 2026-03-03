<x-admin-layout>
<div class="py-10 px-6 max-w-4xl mx-auto">
    <h2 class="text-2xl font-bold text-gray-800 mb-6">Generador de Firma Bitmovil</h2>

    <div class="bg-white rounded-lg shadow p-6 mb-8">
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-1">Nombre completo</label>
                <input type="text" id="nombre" placeholder="Ej. Francisco Alvizo Coronado"
                    class="w-full border border-gray-300 rounded px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-1">Puesto</label>
                <input type="text" id="puesto" placeholder="Ej. Director General"
                    class="w-full border border-gray-300 rounded px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-1">Teléfono fijo</label>
                <input type="text" id="tel" value="833 227 2527"
                    class="w-full border border-gray-300 rounded px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-1">Extensión</label>
                <input type="text" id="ext" placeholder="Ej. 104"
                    class="w-full border border-gray-300 rounded px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-1">Celular</label>
                <input type="text" id="cel" placeholder="Ej. 55 6574 8185"
                    class="w-full border border-gray-300 rounded px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
        </div>

        <div class="mt-6 flex gap-3 flex-wrap">
            <button onclick="generarFirma()"
                class="bg-blue-700 hover:bg-blue-800 text-white text-sm font-semibold px-5 py-2 rounded">
                Generar firma
            </button>
            <button onclick="copiarFirma()" id="btn-copiar" disabled
                class="bg-gray-200 hover:bg-gray-300 text-gray-700 text-sm font-semibold px-5 py-2 rounded disabled:opacity-40 disabled:cursor-not-allowed">
                Copiar al portapapeles
            </button>
            <button onclick="exportarFirma()" id="btn-exportar" disabled
                class="bg-gray-200 hover:bg-gray-300 text-gray-700 text-sm font-semibold px-5 py-2 rounded disabled:opacity-40 disabled:cursor-not-allowed">
                Descargar como HTML
            </button>
        </div>
    </div>

    <div id="resultado-wrapper" class="hidden">
        <h3 class="text-sm font-semibold text-gray-500 uppercase tracking-wide mb-3">Vista previa</h3>
        <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm">
            <div id="resultado"></div>
        </div>
        <p class="text-xs text-gray-400 mt-2">Las imágenes se cargan desde el servidor. Asegúrate de tener conexión a internet al usarla en tu cliente de correo.</p>
    </div>
</div>

@push('script')
<script>
    function esc(str) {
        const d = document.createElement("div");
        d.textContent = str;
        return d.innerHTML;
    }

    function generarFirma() {
        const nombre = esc(document.getElementById("nombre").value.trim());
        const puesto = esc(document.getElementById("puesto").value.trim());
        const tel    = esc(document.getElementById("tel").value.trim());
        const ext    = esc(document.getElementById("ext").value.trim());
        const cel    = esc(document.getElementById("cel").value.trim());

        let telLine = tel ? `Tel. ${tel}` : "";
        if (tel && ext) telLine += ` Ext. ${ext}`;
        let celLine = cel ? `Cel. ${cel}` : "";
        const datosContacto = [telLine, celLine].filter(Boolean).join("<br>");

        const wrapper = document.createElement("div");
        wrapper.style.cssText = "max-width:400px;background:#ffffff;padding:20px;font-family:Aptos,Roboto,sans-serif;";

        // Bloque de nombre / puesto / contacto
        const bloqueDatos = document.createElement("div");
        bloqueDatos.style.cssText = "font-size:16px;margin-bottom:12px;";

        const pNombre = document.createElement("p");
        pNombre.style.cssText = "margin:0;color:#000000;";
        const strong = document.createElement("strong");
        strong.textContent = nombre;
        pNombre.appendChild(strong);
        bloqueDatos.appendChild(pNombre);

        if (puesto) {
            const pPuesto = document.createElement("p");
            pPuesto.style.cssText = "margin:0;color:#0a4c98;";
            pPuesto.textContent = puesto;
            bloqueDatos.appendChild(pPuesto);
        }

        if (datosContacto) {
            const pContacto = document.createElement("p");
            pContacto.style.cssText = "margin:0;color:#0a4c98;";
            pContacto.innerHTML = datosContacto; // solo contiene texto escapado + <br>
            bloqueDatos.appendChild(pContacto);
        }
        wrapper.appendChild(bloqueDatos);

        // Sitios oficiales
        const bloqueLabel = document.createElement("div");
        bloqueLabel.style.cssText = "font-size:14px;color:#000000;margin-bottom:6px;";
        const pLabel = document.createElement("p");
        pLabel.style.margin = "0";
        const strongLabel = document.createElement("strong");
        strongLabel.textContent = "Ingresa a nuestros sitios oficiales";
        pLabel.appendChild(strongLabel);
        bloqueLabel.appendChild(pLabel);
        wrapper.appendChild(bloqueLabel);

        // Link texto
        const bloqueLink = document.createElement("div");
        bloqueLink.style.marginBottom = "10px";
        const aLink = document.createElement("a");
        aLink.href = "https://linktr.ee/Bitmovil";
        aLink.target = "_blank";
        aLink.rel = "noopener noreferrer";
        aLink.style.cssText = "color:#0a4c98;text-decoration:none;";
        aLink.textContent = "linktr.ee/Bitmovil";
        bloqueLink.appendChild(aLink);
        wrapper.appendChild(bloqueLink);

        // Banner gif
        const bloqueBanner = document.createElement("div");
        bloqueBanner.style.marginBottom = "16px";
        const aBanner = document.createElement("a");
        aBanner.href = "https://linktr.ee/Bitmovil";
        aBanner.target = "_blank";
        aBanner.rel = "noopener noreferrer";
        const imgBanner = document.createElement("img");
        imgBanner.src = "https://www.bitmovil.mx/img/correos/1.gif";
        imgBanner.alt = "Banner Bitmovil";
        imgBanner.width = 360;
        imgBanner.style.display = "block";
        aBanner.appendChild(imgBanner);
        bloqueBanner.appendChild(aBanner);
        wrapper.appendChild(bloqueBanner);

        // Logo
        const bloqueLogo = document.createElement("div");
        bloqueLogo.style.marginBottom = "16px";
        const aLogo = document.createElement("a");
        aLogo.href = "https://linktr.ee/Bitmovil";
        aLogo.target = "_blank";
        aLogo.rel = "noopener noreferrer";
        const imgLogo = document.createElement("img");
        imgLogo.src = "https://bitmovil.mx/img/logos/logo-bitmovil.png";
        imgLogo.alt = "Bitmovil";
        imgLogo.width = 100;
        imgLogo.style.cssText = "display:block;border:0;";
        aLogo.appendChild(imgLogo);
        bloqueLogo.appendChild(aLogo);
        wrapper.appendChild(bloqueLogo);

        // Aviso de privacidad
        const pAviso = document.createElement("p");
        pAviso.style.cssText = "font-size:10px;color:#555555;margin:0;";
        pAviso.textContent = "Este mensaje puede contener información confidencial. Si no es el destinatario, por favor notifíquelo y elimine el mensaje. ";
        const aAviso = document.createElement("a");
        aAviso.href = "https://store.bitmovil.mx/usuarios/aviso-privacidad";
        aAviso.style.cssText = "color:#0a4c98;text-decoration:none;";
        aAviso.textContent = "Aviso de Privacidad";
        pAviso.appendChild(aAviso);
        wrapper.appendChild(pAviso);

        const resultado = document.getElementById("resultado");
        resultado.replaceChildren(wrapper);

        document.getElementById("resultado-wrapper").classList.remove("hidden");
        document.getElementById("btn-copiar").disabled = false;
        document.getElementById("btn-exportar").disabled = false;
    }

    function copiarFirma() {
        const firmaHTML = document.getElementById("resultado").innerHTML;
        if (navigator.clipboard && window.ClipboardItem) {
            const blob = new Blob([firmaHTML], { type: "text/html" });
            navigator.clipboard.write([new ClipboardItem({ "text/html": blob })]).then(() => alert("Firma copiada al portapapeles."));
        } else {
            const temp = document.createElement("textarea");
            temp.value = firmaHTML;
            document.body.appendChild(temp);
            temp.select();
            document.execCommand("copy");
            document.body.removeChild(temp);
            alert("Firma copiada al portapapeles.");
        }
    }

    function exportarFirma() {
        const firmaHTML = document.getElementById("resultado").innerHTML;
        const blob = new Blob(["<html><body>" + firmaHTML + "</body></html>"], { type: "text/html" });
        const link = document.createElement("a");
        link.href = URL.createObjectURL(blob);
        link.download = "firma_bitmovil.html";
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
    }
</script>
@endpush
</x-admin-layout>
