const navToggle = document.querySelector('.nav-toggle');
const mobileMenu = document.querySelector('.mobile-menu');

navToggle.addEventListener('click', () => {
  mobileMenu.style.display =
    mobileMenu.style.display === 'flex' ? 'none' : 'flex';
});

//  SCRIPT ACORDEÓN COBERTURA

document.querySelectorAll(".accordion-header").forEach(btn => {
    btn.addEventListener("click", () => {
    const item = btn.parentElement;
    item.classList.toggle("active");
    });
});

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