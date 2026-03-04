# Propuesta de Rediseño Visual — bitmovil.mx
**Fecha:** 2026-03-04
**Preparado por:** Agente UX/UI
**Cliente:** Bitmovil Tecnologías S. de R.L.
**Versión:** 1.0

---

## 1. Evaluación del sitio actual — Hallazgos críticos

### 🔴 CRÍTICO (afecta credibilidad y conversión)

| # | Problema | Ubicación | Impacto |
|---|---|---|---|
| C1 | **Logos de certificaciones completamente incorrectos** — "Microsoft Partner" muestra logo HP; "Fortinet Partner" muestra Dell; "Cisco Partner" muestra AMD; "Autodesk Reseller" muestra Microsoft; "HP Partner" muestra Intel; "Dell Technologies" muestra Lenovo | `/certificaciones` | Credibilidad destruida ante clientes técnicos |
| C2 | **Hero desktop: texto pequeño y mal posicionado** — H1 ocupa 15% del viewport en 1440px, texto pegado arriba sin balance visual | Home | Primera impresión fallida |
| C3 | **Menú "Soluciones" roto en desktop** — El dropdown Alpine.js no responde correctamente al clic, dejando la navegación principal inutilizable | Global | Pérdida de tráfico a páginas de servicio |
| C4 | **Partners section en blanco** — Las imágenes de `img/partners/` devuelven 404, sección vacía en producción | Home | Destroza la prueba social |

### 🟡 ALTO (afecta UX y conversión)

| # | Problema | Ubicación | Impacto |
|---|---|---|---|
| A1 | **Sin sistema de color unificado** — Azul nav, rojo acento, verde iconos, amarillo FAQs, morado ocasional = 5+ colores en uso simultáneo | Global | Marca no profesional |
| A2 | **Hero: imagen de fondo genérica** — Coworking space sin relación con TI industrial (Tampico = industria, no startup) | Home | Mensaje desconectado del mercado |
| A3 | **"Nuestra propuesta de valor" — grid 2 col en desktop con texto diminuto** — columnas demasiado estrechas, cuerpo de texto ilegible | Home | Información clave no se lee |
| A4 | **Páginas de servicio idénticas** — seguridad, redes, video-vigilancia tienen el mismo layout pixel a pixel, mismo patrón de 3 cards con borde verde, mismos logos de partners (Microsoft/Dell/Fortinet sin relación con cada servicio) | `/seguridad-informatica`, etc. | Falta de diferenciación |
| A5 | **CTA "Solicita una cotización" sin WhatsApp** — botones enlazados a `/contacto` (formulario) en lugar de WhatsApp directo; el mercado B2B en México convierte mejor por WA | Páginas de servicio | Fricción en conversión |
| A6 | **Sección Leasing en páginas de servicio** — aparece en TODAS las páginas de servicio sin contexto, parece spam interno | Global | Ruido visual |

### 🟢 MENOR (ajustes de refinamiento)

| # | Problema |
|---|---|
| M1 | Topbar con teléfono en mobile ocupa espacio valioso del viewport |
| M2 | Footer con 6 columnas de links — denso y sin jerarquía visual clara |
| M3 | Sección "Mercados verticales" con masonry sin hover actions ni links a servicios relacionados |
| M4 | Página `/nosotros` sin contenido real (solo placeholder de stats) |
| M5 | `Aviso de privacidad` en footer enlaza a `#` — requerido legalmente |

---

## 2. Propuesta de Rediseño Visual

### 2.1 Sistema de color — 2 colores, no 5

```
Principal:  #1E3A8A  (azul marino corporativo) — nav, botones primarios, headings
Acento:     #F97316  (naranja) — CTAs, badges, highlights activos
Neutros:    #F8FAFC, #E2E8F0, #64748B, #1E293B
Error/Alerta: #EF4444
```

Eliminar: verde de iconos de beneficios, amarillo de FAQs, rojo aleatoria en copy.

### 2.2 Tipografía

```
Headings: Inter 300–400 (ya instalado)
Body:     Inter 400
Código/Datos: monospace system (no importar JetBrains para este sitio)
Scale: text-sm (14px) → text-base (16px) → text-xl → text-3xl → text-5xl → text-7xl
```

### 2.3 Rediseño — Sección por sección

#### NAV — Prioridad 1
**Problema:** dropdown Alpine.js roto, sin separación visual, topbar ocupa espacio
**Solución:**
```
[Logo]  Soluciones ▾   Nosotros   Certificaciones         [WhatsApp →] [Tienda]
```
- Eliminar topbar (moverlo al footer)
- Dropdown "Soluciones" con mega-menu 3 columnas + iconos por categoría
- CTA derecho: verde/naranja para contrastar con nav azul
- Sticky siempre visible con `backdrop-blur-sm bg-white/95`

#### HERO HOME — Prioridad 1
**Problema:** texto pequeño desktop, imagen genérica, sin jerarquía
**Solución — Hero split (imagen derecha / texto izquierda):**
```
┌─────────────────────────────────────────────┐
│ NAV                                          │
├──────────────────────┬──────────────────────┤
│                      │                      │
│  [badge] Tampico, MX │   [IMAGEN INDUSTRIAL │
│                      │    real: datacenter, │
│  Integramos redes,   │    industria o rack] │
│  seguridad y         │                      │
│  tecnología para     │                      │
│  empresas que no     │                      │
│  paran.              │                      │
│                      │                      │
│  [● Cotiza WA] [Ver →]│                     │
│                      │                      │
│  Cisco · Fortinet    │                      │
│  Microsoft · Autodesk│                      │
└──────────────────────┴──────────────────────┘
```
- Fondo blanco o gris muy claro (no image hero con overlay)
- H1 `text-5xl lg:text-7xl font-light` — legible en todos los viewports
- Imagen derecha: foto real de datacenter/rack (no coworking genérico)
- Partner strip debajo del H1: logos reales alineados horizontalmente

#### SECCIÓN PROPUESTA DE VALOR — Prioridad 2
**Problema:** 2 columnas estrechas, texto ilegible
**Solución — 4 cards horizontales con métricas:**
```
┌────────────┬────────────┬────────────┬────────────┐
│ [icono]    │ [icono]    │ [icono]    │ [icono]    │
│ Enfoque    │ Estándares │ Gestión    │ Control    │
│ estratégico│ internac.  │ proyectos  │ operativo  │
│            │            │            │            │
│ Texto breve│ Texto breve│ Texto breve│ Texto breve│
└────────────┴────────────┴────────────┴────────────┘
```

#### PÁGINAS DE SERVICIO — Prioridad 2
Cada página necesita identidad propia:

| Página | Color acento | Icono diferenciador | Partners relevantes |
|---|---|---|---|
| Seguridad Informática | Rojo `#DC2626` | shield-check | Fortinet, Cisco |
| Redes Inalámbricas | Azul `#0EA5E9` | wifi | Cisco, HPE |
| Video Vigilancia | Naranja `#F97316` | camera | Hikvision, Dahua |
| Cableado/Fibra | Verde `#16A34A` | network-wired | Panduit, Belden |
| Licenciamiento | Morado `#7C3AED` | key | Microsoft, Autodesk |

#### CERTIFICACIONES — Prioridad 1 (arreglo inmediato)
- Logos correctos con archivos reales
- Cards con borde del color del fabricante (Microsoft azul, Fortinet rojo, etc.)
- Agregar: nivel de partnership si aplica ("Gold", "Registered", etc.)

---

## 3. Plan de implementación

### Sprint 6 — Correctivos críticos (esta sesión)
- [x] Identificado el problema de logos
- [ ] Corregir logos certificaciones usando assets correctos
- [ ] Diagnóstico y fix del menú Alpine.js
- [ ] Fix del hero desktop (tamaño de tipografía y posicionamiento)

### Sprint 7 — Sistema de color (1 sesión)
- [ ] Definir CSS variables en `app.css` / `tailwind.config`
- [ ] Aplicar paleta 2 colores en nav, botones, headings globalmente
- [ ] Eliminar clases de color inconsistentes

### Sprint 8 — Hero rediseñado (1 sesión)
- [ ] Hero split layout (texto izquierda / imagen derecha)
- [ ] Tipografía H1 correcta en todos los breakpoints
- [ ] Partner strip con logos correctos

### Sprint 9 — Páginas de servicio diferenciadas (2 sesiones)
- [ ] Template único pero con variables de color/icono por servicio
- [ ] CTAs a WhatsApp con mensaje pre-cargado por servicio
- [ ] Partners relevantes por servicio (no los mismos 3 en todos)

### Sprint 10 — Páginas secundarias (1 sesión)
- [ ] `/nosotros` con contenido real + foto del equipo
- [ ] `/contacto` mejorado con formulario funcional
- [ ] `/politica-de-privacidad` (requerido legalmente)
- [ ] Footer simplificado a 3 columnas

---

## 4. Lo que NO está incluido en este rediseño

- Nuevo branding/logo de Bitmovil
- Fotografía nueva (se trabaja con activos existentes o stock seleccionado)
- Desarrollo de funcionalidades de e-commerce o login
- Integración con CRM o ERP
- Redacción de contenido (copy) — requiere input del cliente

---

## 5. Entregables por sprint

| Sprint | Entregable | Criterio de aceptación |
|---|---|---|
| 6 | Logos correctos + menú funcional | Screenshot confirma logo correcto por marca |
| 7 | Sistema de color documentado + aplicado | 0 clases de color inconsistentes en producción |
| 8 | Hero nuevo en producción | CTA visible y legible en 375px y 1440px |
| 9 | 3 páginas de servicio diferenciadas | Identidad visual única por servicio |
| 10 | Páginas legales + footer clean | Aviso privacidad real, footer 3 columnas |

---

## 6. Decisiones que requieren confirmación del cliente

1. **Imagen hero:** ¿tienen fotografía de instalaciones reales o datacenter? Si no, seleccionamos stock industrial.
2. **Color acento:** ¿azul marino + naranja (propuesto) o preferencia diferente?
3. **Nivel de partnership Cisco/Fortinet:** ¿cuál es el nivel oficial? (Select, Premier, etc.) — para precisión en certificaciones.
4. **Fotografía equipo Nosotros:** ¿disponen de fotos del equipo técnico?

---

*Este documento es una propuesta técnica de rediseño. La implementación inicia al sprint siguiente con autorización del cliente.*
