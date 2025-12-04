  <footer class="footer">
  <div class="footer-container">

    <!-- Columna 1 -->
    <div class="footer-col">
      <h3>Suportec Network SRL</h3>
      <p>Proveedor de internet por fibra óptica en Bonao.</p>

      <div class="footer-social">
        <a href="https://wa.me/18092969991" target="_blank"><i class="fab fa-whatsapp"></i></a>
        <a href="https://www.facebook.com/suportecnetworksrl"><i class="fab fa-facebook"></i></a>
        <a href="https://www.instagram.com/suportecnetworkrd"><i class="fab fa-instagram"></i></a>
      </div>
    </div>

    <!-- Columna 2 -->
    <div class="footer-col">
      <h4>Contacto</h4>
      <p><i class="fa-solid fa-phone"></i> 809-296-9991</p>
      <p><i class="fa-solid fa-location-dot"></i> C/ Máximo Gómez #46, Bonao</p>
      <p><i class="fa-solid fa-envelope"></i> soportecnetwork@gmail.com</p>
    </div>

    <!-- Columna 3 -->
    <div class="footer-col">
      <h4>Horario</h4>
      <p><i class="fa-solid fa-clock"></i> Lunes a Viernes: 8:00 a.m. - 6:00 p.m.</p>
      <p><i class="fa-solid fa-clock"></i> Sábado: 9:00 a.m. - 1:00 p.m.</p>
    </div>

    <!-- Columna 4 -->
    <div class="footer-col">
      <h4>Enlaces rápidos</h4>
      <ul class="footer-links">
        <li><a href="#planes">Planes de Internet</a></li>
        <li><a href="#cobertura">Verificar Cobertura</a></li>
        <li><a href="#faq">Preguntas Frecuentes</a></li>
        <li><a href="https://wa.me/18092969991" target="_blank">Solicitar Servicio</a></li>
      </ul>
    </div>

  </div>

  <div class="footer-bottom">
    <p>© 2025 Suportec Network SRL. Todos los derechos reservados.</p>
    <p>Hecho para clientes de Bonao que valoran una buena conexión.</p>
  </div>
</footer>


  <!-- BOTÓN WHATSAPP -->
  <a href="https://wa.me/18092969991" class="whatsapp-btn" aria-label="Contactar por WhatsApp">
    <svg viewBox="0 0 32 32" fill="currentColor">
      <path d="M16.027 3.003c-7.162 0-12.973 5.808-12.973 12.968 0 2.285.598 4.516 1.736 6.482l-1.842 6.726 6.894-1.807c1.91.998 4.061 1.526 6.216 1.526h.006c7.158 0 12.973-5.807 12.973-12.968-.001-7.16-5.817-12.967-12.986-12.967z"></path>
    </svg>
  </a>

  <script>
    // FAQ toggle
    document.querySelectorAll('.faq-question').forEach((q) => {
      q.addEventListener('click', () => {
        const item = q.parentElement;
        const active = item.classList.contains('active');
        document.querySelectorAll('.faq-item').forEach((i) => i.classList.remove('active'));
        if (!active) item.classList.add('active');
        document.querySelectorAll('.faq-item').forEach((i) => {
          const toggle = i.querySelector('.faq-toggle');
          if (i.classList.contains('active')) toggle.textContent = '−';
          else toggle.textContent = '+';
        });
      });
    });
  </script>
  
  <!-- ANIMACIÓN SECUENCIAL PARA LOS PASOS -->
   
<style>
  .reveal-step {
    opacity: 0;
    transform: translateY(40px);
    transition: all 0.8s ease-out;
  }

  .reveal-step.visible {
    opacity: 1;
    transform: translateY(0);
  }

  /* Delay automático */
  .reveal-step:nth-child(1) { transition-delay: 0.2s; }
  .reveal-step:nth-child(2) { transition-delay: 0.5s; }
  .reveal-step:nth-child(3) { transition-delay: 0.8s; }
/* ANIMACIÓN PARA LOS PLANES */
.pricing-card {
  opacity: 0;
  transform: translateY(40px) scale(0.95);
  transition: opacity .8s ease-out, transform .8s ease-out;
}

.pricing-card.visible {
  opacity: 1;
  transform: translateY(0) scale(1);
}

.pricing-card:hover {
  transform: translateY(-10px) scale(1.04);
  box-shadow: 0 20px 40px rgba(0, 195, 255, 0.35);
}

/* ANIMACIÓN PARA LOS PASOS */
.reveal-step {
  opacity: 0;
  transform: translateY(40px);
  transition: opacity .8s ease-out, transform .8s ease-out;
}

.reveal-step.visible {
  opacity: 1;
  transform: translateY(0);
}

  
</style>

<script>
  // Animación de pasos
  document.addEventListener("DOMContentLoaded", function () {
    const steps = document.querySelectorAll(".reveal-step");

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add("visible");
        }
      });
    }, { threshold: 0.2 });

    steps.forEach(step => observer.observe(step));
  });
</script>
<script>
// Animación para PLANES
const pricingCards = document.querySelectorAll(".pricing-card");

const observerPlans = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add("visible");
    }
  });
}, { threshold: 0.2 });

pricingCards.forEach(card => observerPlans.observe(card));


// Animación para PASOS
const steps = document.querySelectorAll(".reveal-step");

const observerSteps = new IntersectionObserver((entries) => {
  entries.forEach((entry, i) => {
    if (entry.isIntersecting) {
      setTimeout(() => {
        entry.target.classList.add("visible");
      }, i * 250);
    }
  });
}, { threshold: 0.3 });

steps.forEach(step => observerSteps.observe(step));
</script>


</body>
</html>
