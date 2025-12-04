<!DOCTYPE html>
<html lang="es">
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- SEO -->
  <title>Internet en Bonao | Fibra Óptica Rápida | Suportec Network SRL</title>
  <meta name="description" content="Internet por fibra óptica en Bonao con planes desde 15 Mbps hasta 100 Mbps. Instalación rápida, soporte local y conexión estable. Suportec Network SRL." />
  <meta name="keywords" content="internet en Bonao, fibra óptica Bonao, internet Bonao, wifi Bonao, proveedor de internet, Suportec Network SRL" />
  <meta name="robots" content="index, follow" />

  <!-- Open Graph -->
  <meta property="og:title" content="Internet en Bonao - Suportec Network SRL" />
  <meta property="og:description" content="Fibra óptica en Bonao con alta estabilidad, planes desde RD$1,000 y soporte técnico local." />
  <meta property="og:type" content="website" />
  <meta property="og:locale" content="es_DO" />

  <style>
    :root {
      --primary: #0d44e7;
      --primary-dark: #092f9b;
      --accent: #04c2d6;
      --bg: #050816;
      --card-bg: #0b1020;
      --text-main: #f9fafb;
      --text-muted: #9ca3af;
      --border-subtle: rgba(148, 163, 184, 0.35);
      --shadow-strong: 0 24px 60px rgba(15, 23, 42, 0.85);
      --radius-lg: 18px;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    html {
      scroll-behavior: smooth;
    }

    body {
      font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI",
        sans-serif;
      background: radial-gradient(circle at top, #0b1120 0, #020617 45%, #000 100%);
      color: var(--text-main);
      line-height: 1.6;
    }

    img {
      max-width: 100%;
      display: block;
    }

    a {
      text-decoration: none;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 1.5rem;
    }

    /* NAVBAR */
    nav {
      position: sticky;
      top: 0;
      z-index: 50;
      backdrop-filter: blur(14px);
      background: linear-gradient(
        to bottom,
        rgba(15, 23, 42, 0.92),
        rgba(15, 23, 42, 0.75),
        transparent
      );
      border-bottom: 1px solid rgba(148, 163, 184, 0.2);
    }

    .navbar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0.9rem 1.5rem;
      max-width: 1200px;
      margin: 0 auto;
    }

    .nav-left {
      display: flex;
      align-items: center;
      gap: 0.6rem;
    }

    .brand-logo {
      width: 34px;
      height: 34px;
      border-radius: 999px;
      background: radial-gradient(circle at 30% 20%, #22d3ee, #0f172a 65%);
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-weight: 800;
      font-size: 0.95rem;
      box-shadow: 0 0 0 1px rgba(148, 163, 184, 0.4),
        0 10px 25px rgba(15, 23, 42, 0.9);
    }

    .brand-text {
      display: flex;
      flex-direction: column;
    }

    .brand-name {
      font-weight: 700;
      font-size: 0.98rem;
      letter-spacing: 0.04em;
    }

    .brand-sub {
      font-size: 0.72rem;
      color: var(--text-muted);
      text-transform: uppercase;
      letter-spacing: 0.16em;
    }

    .nav-links {
      display: flex;
      align-items: center;
      gap: 1.5rem;
    }

    .nav-link {
      font-size: 0.9rem;
      color: var(--text-muted);
      padding-bottom: 0.1rem;
      border-bottom: 1px solid transparent;
      transition: color 0.2s, border-color 0.2s;
    }

    .nav-link:hover {
      color: #e5e7eb;
      border-color: var(--accent);
    }

    .nav-cta {
      padding: 0.5rem 1.2rem;
      border-radius: 999px;
      background: linear-gradient(135deg, var(--accent), var(--primary));
      color: white;
      font-weight: 600;
      font-size: 0.9rem;
      box-shadow: 0 15px 30px rgba(15, 23, 42, 0.9);
      border: 1px solid rgba(148, 163, 184, 0.5);
    }

    .nav-cta:hover {
      filter: brightness(1.05);
    }

    .nav-toggle {
      display: none;
      color: white;
      font-size: 1.45rem;
      cursor: pointer;
    }

    @media (max-width: 900px) {
      .nav-links {
        display: none;
      }
      .nav-toggle {
        display: block;
      }
    }

    /* HERO */
    .hero {
      position: relative;
      overflow: hidden;
      padding: 4.5rem 0 5rem;
    }

    .hero-bg {
      position: absolute;
      inset: 0;
      z-index: -2;
      background-image: url("https://images.pexels.com/photos/2881229/pexels-photo-2881229.jpeg?auto=compress&cs=tinysrgb&w=1600");
      background-size: cover;
      background-position: center;
      filter: brightness(0.35);
    }

    .hero-overlay {
      position: absolute;
      inset: 0;
      z-index: -1;
      background: radial-gradient(
          circle at top left,
          rgba(59, 130, 246, 0.3),
          transparent 55%
        ),
        radial-gradient(
          circle at bottom right,
          rgba(45, 212, 191, 0.22),
          transparent 55%
        ),
        linear-gradient(to bottom, rgba(15, 23, 42, 0.85), #020617f0 75%);
    }

    .hero-grid {
      display: grid;
      grid-template-columns: minmax(0, 1.4fr) minmax(0, 1fr);
      gap: 3rem;
      align-items: center;
    }

    .tag-pill {
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      padding: 0.25rem 0.75rem;
      border-radius: 999px;
      border: 1px solid rgba(148, 163, 184, 0.7);
      background: rgba(15, 23, 42, 0.75);
      font-size: 0.75rem;
      text-transform: uppercase;
      letter-spacing: 0.14em;
      color: var(--text-muted);
      margin-bottom: 0.9rem;
    }

    .tag-pill span.icon {
      width: 7px;
      height: 7px;
      border-radius: 999px;
      background: #22c55e;
      box-shadow: 0 0 0 6px rgba(34, 197, 94, 0.34);
    }

    .hero-title {
      font-size: clamp(2.4rem, 4vw, 3.3rem);
      line-height: 1.1;
      font-weight: 800;
      margin-bottom: 1rem;
    }

    .hero-title span.highlight {
      background: linear-gradient(120deg, #22d3ee, #60a5fa, #c4b5fd);
      -webkit-background-clip: text;
      color: transparent;
    }

    .hero-subtitle {
      font-size: 1rem;
      color: #e5e7eb;
      max-width: 32rem;
      margin-bottom: 1.6rem;
    }

    .hero-subtitle strong {
      color: #a5b4fc;
      font-weight: 600;
    }

    .hero-badges {
      display: flex;
      flex-wrap: wrap;
      gap: 1rem;
      margin-bottom: 2.3rem;
    }

    .hero-badge {
      display: flex;
      align-items: center;
      gap: 0.5rem;
      font-size: 0.8rem;
      padding: 0.45rem 0.85rem;
      border-radius: 999px;
      background: rgba(15, 23, 42, 0.9);
      border: 1px solid rgba(148, 163, 184, 0.4);
      color: var(--text-muted);
    }

    .hero-badge span.dot {
      width: 8px;
      height: 8px;
      border-radius: 999px;
      background: var(--accent);
    }

    .hero-ctas {
      display: flex;
      flex-wrap: wrap;
      gap: 1rem;
      margin-bottom: 1.8rem;
    }

    .btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 0.4rem;
      padding: 0.9rem 1.6rem;
      border-radius: 999px;
      border: none;
      font-weight: 600;
      font-size: 0.94rem;
      cursor: pointer;
      transition: transform 0.18s ease, box-shadow 0.18s ease,
        background 0.18s ease, color 0.18s ease;
    }

    .btn-primary {
      background: linear-gradient(135deg, var(--accent), var(--primary));
      color: white;
      box-shadow: var(--shadow-strong);
      border: 1px solid rgba(148, 163, 184, 0.6);
    }

    .btn-primary:hover {
      transform: translateY(-1px) scale(1.02);
      filter: brightness(1.05);
    }

    .btn-outline {
      background: transparent;
      color: var(--text-main);
      border: 1px solid rgba(148, 163, 184, 0.7);
      backdrop-filter: blur(10px);
    }

    .btn-outline:hover {
      background: rgba(15, 23, 42, 0.85);
    }

    .btn-icon {
      font-size: 1.1rem;
    }

    .hero-note {
      font-size: 0.8rem;
      color: var(--text-muted);
    }

    .hero-note strong {
      color: #e5e7eb;
    }

    .hero-card {
      background: radial-gradient(circle at top, #111827 0, #020617 60%);
      border-radius: var(--radius-lg);
      padding: 1.6rem 1.5rem;
      border: 1px solid var(--border-subtle);
      box-shadow: var(--shadow-strong);
      display: flex;
      flex-direction: column;
      gap: 1.2rem;
    }

    .hero-card-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 0.75rem;
    }

    .hero-card-title {
      font-size: 0.95rem;
      text-transform: uppercase;
      letter-spacing: 0.16em;
      color: var(--text-muted);
    }

    .hero-card-badge {
      font-size: 0.75rem;
      padding: 0.25rem 0.7rem;
      border-radius: 999px;
      border: 1px solid rgba(96, 165, 250, 0.7);
      background: rgba(15, 23, 42, 0.75);
      color: #bfdbfe;
    }

    .hero-speed {
      display: flex;
      align-items: baseline;
      gap: 0.15rem;
    }

    .hero-speed-main {
      font-size: 2.5rem;
      font-weight: 800;
    }

    .hero-speed-unit {
      font-size: 0.9rem;
      color: var(--text-muted);
    }

    .hero-speed-label {
      font-size: 0.78rem;
      text-transform: uppercase;
      letter-spacing: 0.15em;
      color: var(--text-muted);
    }

    .hero-metrics {
      display: grid;
      grid-template-columns: repeat(2, minmax(0, 1fr));
      gap: 0.9rem;
      font-size: 0.8rem;
      color: var(--text-muted);
    }

    .hero-metric {
      padding: 0.6rem 0.8rem;
      border-radius: 0.75rem;
      border: 1px solid rgba(31, 41, 55, 0.8);
      background: radial-gradient(circle at top left, #0b1120, #020617 70%);
    }

    .hero-metric strong {
      display: block;
      font-size: 0.95rem;
      color: #e5e7eb;
    }

    .hero-divider {
      height: 1px;
      background: linear-gradient(
        to right,
        transparent,
        rgba(148, 163, 184, 0.7),
        transparent
      );
      margin: 0.2rem 0 0.4rem;
    }

    .hero-card-footer {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 0.75rem;
      font-size: 0.8rem;
      color: var(--text-muted);
    }

    .hero-card-footer span.highlight {
      color: #bbf7d0;
    }

    @media (max-width: 900px) {
      .hero {
        padding-top: 3.5rem;
      }
      .hero-grid {
        grid-template-columns: minmax(0, 1fr);
      }
      .hero-card {
        margin-top: 0.5rem;
      }
    }

    /* SECTIONS GENERALES */
    .section {
      padding: 4rem 0;
    }

    .section-header {
      text-align: center;
      margin-bottom: 2.5rem;
    }

    .section-eyebrow {
      font-size: 0.8rem;
      letter-spacing: 0.15em;
      text-transform: uppercase;
      color: var(--text-muted);
      margin-bottom: 0.4rem;
    }

    .section-title {
      font-size: 1.9rem;
      font-weight: 700;
      margin-bottom: 0.4rem;
    }

    .section-subtitle {
      font-size: 0.95rem;
      color: var(--text-muted);
      max-width: 36rem;
      margin: 0 auto;
    }

    /* BENEFICIOS */
    .features-grid {
      display: grid;
      grid-template-columns: repeat(3, minmax(0, 1fr));
      gap: 1.8rem;
    }

    .feature-card {
      background: radial-gradient(circle at top, #020617, #020617f0 70%);
      border-radius: var(--radius-lg);
      padding: 1.5rem;
      border: 1px solid var(--border-subtle);
      box-shadow: 0 18px 40px rgba(15, 23, 42, 0.9);
      position: relative;
      overflow: hidden;
    }

    .feature-icon-circle {
      width: 36px;
      height: 36px;
      border-radius: 999px;
      background: radial-gradient(circle at 30% 20%, #22d3ee, #0f172a 80%);
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 0.75rem;
      font-size: 1.3rem;
    }

    .feature-title {
      font-size: 1.05rem;
      font-weight: 600;
      margin-bottom: 0.4rem;
    }

    .feature-text {
      font-size: 0.9rem;
      color: var(--text-muted);
      margin-bottom: 0.7rem;
    }

    .feature-tag {
      font-size: 0.75rem;
      color: #a5b4fc;
    }

    @media (max-width: 992px) {
      .features-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
      }
    }

    @media (max-width: 700px) {
      .features-grid {
        grid-template-columns: minmax(0, 1fr);
      }
    }

    /* COBERTURA */
    .coverage {
      display: grid;
      grid-template-columns: minmax(0, 1.2fr) minmax(0, 1fr);
      gap: 2rem;
      align-items: center;
    }

    .coverage-card {
      background: linear-gradient(145deg, #020617, #020617f0);
      border-radius: var(--radius-lg);
      padding: 1.6rem;
      border: 1px solid var(--border-subtle);
      box-shadow: var(--shadow-strong);
    }

    .coverage-list {
      list-style: none;
      columns: 2;
      column-gap: 1.8rem;
      font-size: 0.9rem;
      color: var(--text-muted);
    }

    .coverage-list li {
      margin-bottom: 0.4rem;
      position: relative;
      padding-left: 1rem;
    }

    .coverage-list li::before {
      content: "•";
      position: absolute;
      left: 0;
      color: var(--accent);
    }

    .coverage-note {
      margin-top: 1rem;
      font-size: 0.82rem;
      color: var(--text-muted);
    }

    .coverage-img {
      border-radius: var(--radius-lg);
      overflow: hidden;
      border: 1px solid rgba(148, 163, 184, 0.4);
      box-shadow: 0 20px 40px rgba(15, 23, 42, 0.9);
    }

    .coverage-img-inner {
      position: relative;
      aspect-ratio: 4 / 3;
      background-image: url("https://images.pexels.com/photos/7794368/pexels-photo-7794368.jpeg?auto=compress&cs=tinysrgb&w=1600");
      background-size: cover;
      background-position: center;
    }

    .coverage-img-tag {
      position: absolute;
      bottom: 10px;
      left: 10px;
      background: rgba(15, 23, 42, 0.85);
      padding: 0.4rem 0.8rem;
      border-radius: 999px;
      font-size: 0.74rem;
      color: var(--text-muted);
      border: 1px solid rgba(148, 163, 184, 0.6);
    }

    @media (max-width: 900px) {
      .coverage {
        grid-template-columns: minmax(0, 1fr);
      }
      .coverage-list {
        columns: 1;
      }
    }

    /* PLANES */
    .pricing-grid {
      display: grid;
      grid-template-columns: repeat(3, minmax(0, 1fr));
      gap: 1.8rem;
    }

    .pricing-card {
      border-radius: var(--radius-lg);
      padding: 1.8rem 1.5rem;
      background: radial-gradient(circle at top, #020617, #020617f0 70%);
      border: 1px solid var(--border-subtle);
      box-shadow: var(--shadow-strong);
      display: flex;
      flex-direction: column;
      gap: 1.1rem;
    }

    .pricing-card.popular {
      background: radial-gradient(circle at top, #1d4ed8, #020617 75%);
      border-color: rgba(129, 140, 248, 0.9);
      position: relative;
    }

    .pricing-pill {
      font-size: 0.72rem;
      padding: 0.15rem 0.7rem;
      border-radius: 999px;
      border: 1px solid rgba(191, 219, 254, 0.7);
      color: #bfdbfe;
      text-transform: uppercase;
      letter-spacing: 0.12em;
      align-self: flex-start;
    }

    .pricing-name {
      font-size: 1.1rem;
      font-weight: 600;
    }

    .pricing-speed {
      font-size: 1.4rem;
      font-weight: 700;
    }

    .pricing-price {
      font-size: 1.2rem;
      font-weight: 600;
      color: #f9fafb;
    }

    .pricing-meta {
      font-size: 0.82rem;
      color: var(--text-muted);
    }

    .pricing-features {
      list-style: none;
      font-size: 0.88rem;
      color: var(--text-muted);
      display: flex;
      flex-direction: column;
      gap: 0.4rem;
    }

    .pricing-features li {
      display: flex;
      gap: 0.35rem;
      align-items: center;
    }

    .pricing-features li::before {
      content: "✓";
      color: #4ade80;
      font-size: 0.9rem;
    }

    .pricing-actions {
      margin-top: 0.6rem;
      display: flex;
      gap: 0.6rem;
      flex-wrap: wrap;
    }

    @media (max-width: 992px) {
      .pricing-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
      }
    }

    @media (max-width: 700px) {
      .pricing-grid {
        grid-template-columns: minmax(0, 1fr);
      }
    }

    /* CÓMO FUNCIONA */
    .steps {
      display: grid;
      grid-template-columns: repeat(3, minmax(0, 1fr));
      gap: 1.4rem;
    }

    .step-card {
      padding: 1.4rem;
      border-radius: var(--radius-lg);
      border: 1px dashed rgba(148, 163, 184, 0.6);
      background: radial-gradient(circle at top, #020617, #020617f0 70%);
      font-size: 0.9rem;
      color: var(--text-muted);
    }

    .step-number {
      width: 26px;
      height: 26px;
      border-radius: 999px;
      border: 1px solid rgba(148, 163, 184, 0.8);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 0.8rem;
      margin-bottom: 0.5rem;
      color: #e5e7eb;
    }

    .step-title {
      font-size: 0.98rem;
      font-weight: 600;
      margin-bottom: 0.3rem;
      color: #e5e7eb;
    }

    @media (max-width: 900px) {
      .steps {
        grid-template-columns: minmax(0, 1fr);
      }
    }

    /* TESTIMONIOS */
    .testimonials-grid {
      display: grid;
      grid-template-columns: repeat(3, minmax(0, 1fr));
      gap: 1.6rem;
    }

    .testimonial-card {
      background: radial-gradient(circle at top, #020617, #020617f0 70%);
      border-radius: var(--radius-lg);
      padding: 1.4rem 1.3rem;
      border: 1px solid var(--border-subtle);
      font-size: 0.9rem;
    }

    .testimonial-stars {
      color: #fbbf24;
      font-size: 0.85rem;
      margin-bottom: 0.5rem;
    }

    .testimonial-text {
      color: var(--text-muted);
      margin-bottom: 0.8rem;
      font-style: italic;
    }

    .testimonial-name {
      font-weight: 600;
      font-size: 0.9rem;
    }

    .testimonial-role {
      font-size: 0.8rem;
      color: var(--text-muted);
    }

    @media (max-width: 900px) {
      .testimonials-grid {
        grid-template-columns: minmax(0, 1fr);
      }
    }

    /* FAQ */
    .faq-grid {
      max-width: 800px;
      margin: 0 auto;
      display: grid;
      gap: 0.8rem;
    }

    .faq-item {
      border-radius: 0.9rem;
      border: 1px solid var(--border-subtle);
      background: radial-gradient(circle at top, #020617, #020617f0 70%);
      overflow: hidden;
    }

    .faq-question {
      padding: 0.9rem 1rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      cursor: pointer;
      font-size: 0.9rem;
    }

    .faq-question span.q {
      color: #e5e7eb;
    }

    .faq-toggle {
      font-size: 1.1rem;
      color: var(--text-muted);
    }

    .faq-answer {
      max-height: 0;
      overflow: hidden;
      padding: 0 1rem;
      font-size: 0.85rem;
      color: var(--text-muted);
      transition: max-height 0.25s ease, padding-bottom 0.25s ease;
    }

    .faq-item.active .faq-answer {
      max-height: 300px;
      padding-bottom: 0.9rem;
    }

    /* CTA FINAL */
    .cta-final {
      padding: 3.5rem 0 4rem;
      text-align: center;
      background: radial-gradient(circle at top, #1d4ed8, #020617 70%);
      border-top: 1px solid rgba(148, 163, 184, 0.4);
      border-bottom: 1px solid rgba(148, 163, 184, 0.4);
      box-shadow: 0 -24px 60px rgba(15, 23, 42, 0.95);
    }

    .cta-final h2 {
      font-size: 1.9rem;
      margin-bottom: 0.4rem;
    }

    .cta-final p {
      font-size: 0.98rem;
      color: #e5e7eb;
      margin-bottom: 1.6rem;
    }

    /* FOOTER */
    footer {
      padding: 2.4rem 0;
      font-size: 0.82rem;
      color: var(--text-muted);
      background: #020617;
      border-top: 1px solid rgba(31, 41, 55, 0.9);
    }

    /* FOOTER GENERAL */
.footer {
  background: #050b17;
  padding: 60px 20px 40px;
  border-top: 1px solid rgba(255,255,255,0.08);
  box-shadow: 0 -10px 30px rgba(0,0,0,0.4);
}


.footer-container {
  max-width: 1200px;
  margin: auto;
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
  gap: 40px;
}

.footer-col h3,
.footer-col h4 {
  margin-bottom: 15px;
  font-weight: 600;
  color: #fff;
}

.footer-col p {
  margin: 5px 0;
  opacity: 0.8;
}

.footer-links li {
  list-style: none;
  margin: 6px 0;
}

.footer-links a {
  color: #9ca3af;
  text-decoration: none;
  transition: 0.3s;
}

.footer-links a:hover {
  color: #00bfff;
}

/* ICONOS */
.footer-social a {
  margin-right: 12px;
  font-size: 22px;
  color: #00bfff;
  transition: 0.3s;
}

.footer-social a:hover {
  color: #fff;
}

.footer-col i {
  color: #00bfff;
  margin-right: 8px;
}

/* PARTE FINAL */
.footer-bottom {
  text-align: center;
  border-top: 1px solid rgba(255,255,255,0.07);
  margin-top: 40px;
  padding-top: 20px;
  font-size: 14px;
  opacity: 0.7;
}

  

    /* WHATSAPP FLOAT */
    .whatsapp-btn {
      position: fixed;
      right: 1.4rem;
      bottom: 1.4rem;
      width: 58px;
      height: 58px;
      border-radius: 999px;
      background: #25d366;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      box-shadow: 0 10px 25px rgba(15, 23, 42, 0.9);
      z-index: 60;
    }

    .whatsapp-btn:hover {
      filter: brightness(1.05);
      transform: translateY(-1px);
    }

    .whatsapp-btn svg {
      width: 30px;
      height: 30px;
    }

    /* MOBILE */
    @media (max-width: 768px) {
      .hero-title {
        font-size: 2.1rem;
      }
      .hero-subtitle {
        font-size: 0.95rem;
      }
      .section {
        padding: 3rem 0;
      }
      .footer-grid {
        flex-direction: column;
      }
      .footer-bottom {
        flex-direction: column;
      }
    }
  </style>
</head>
<body>
  <!-- NAVBAR -->
  <nav>
    <div class="navbar">
      <div class="nav-left">
        <div class="brand-logo">SN</div>
        <div class="brand-text">
          <span class="brand-name">Suportec Network SRL</span>
          <span class="brand-sub">Fibra óptica en Bonao</span>
        </div>
      </div>
      <div class="nav-links">
        <a href="#inicio" class="nav-link">Inicio</a>
        <a href="#beneficios" class="nav-link">Beneficios</a>
        <a href="#cobertura" class="nav-link">Cobertura</a>
        <a href="#planes" class="nav-link">Planes</a>
        <a href="#faq" class="nav-link">FAQ</a>
        <a href="#contacto" class="nav-cta">Contacto</a>
      </div>
      <div class="nav-toggle">☰</div>
    </div>
  </nav>

  <!-- HERO -->
  <section id="inicio" class="hero">
    <div class="hero-bg"></div>
    <div class="hero-overlay"></div>

    <div class="container">
      <div class="hero-grid">
        <div>
          <div class="tag-pill">
            <span class="icon"></span>
            INTERNET POR FIBRA ÓPTICA EN BONAO
          </div>
          <h1 class="hero-title">
            Internet <span class="highlight">estable y rápido</span> para tu hogar y negocio.
          </h1>
          <p class="hero-subtitle">
            Conéctate a la red de <strong>Suportec Network SRL</strong>: fibra óptica real,
            baja latencia, soporte local y planes desde <strong>15 Mbps hasta 100 Mbps</strong>.
          </p>

          <div class="hero-badges">
            <div class="hero-badge">
              <span class="dot"></span> Instalación rápida
            </div>
            <div class="hero-badge">
              <span class="dot"></span> Soporte desde Bonao
            </div>
            <div class="hero-badge">
              <span class="dot"></span> Ideal para streaming, gaming y trabajo remoto
            </div>
          </div>

          <div class="hero-ctas">
            <a href="#planes" class="btn btn-primary">
              Ver planes
            
            </a>
            <a href="https://wa.me/18092969991" class="btn btn-outline">
              Escribir por WhatsApp
             
            </a>
          </div>

          <p class="hero-note">
            <strong>Sin complicaciones:</strong> verificamos tu cobertura, agendamos instalación
            y dejas listo tu internet en pocas horas.
          </p>
        </div>

        <aside class="hero-card">
          <div class="hero-card-header">
            <div>
              <div class="hero-card-title">Monitoreo y rendimiento</div>
              <div class="hero-speed">
                <span class="hero-speed-main">100</span>
                <span class="hero-speed-unit">Mbps</span>
              </div>
              <div class="hero-speed-label">Plan Premium Fibra Óptica</div>
            </div>
            <div class="hero-card-badge">Baja latencia</div>
          </div>

          <div class="hero-divider"></div>

          <div class="hero-metrics">
            <div class="hero-metric">
              <strong>&lt; 10 ms</strong>
              Latencia ideal para juegos en línea y videollamadas.
            </div>
            <div class="hero-metric">
              <strong>99% uptime</strong>
              Conexión estable y monitoreada por nuestro equipo.
            </div>
            <div class="hero-metric">
              <strong>Soporte local</strong>
              Técnicos en Bonao listos para ayudarte.
            </div>
            <div class="hero-metric">
              <strong>FTTH</strong>
              Fibra directa hasta tu hogar o negocio.
            </div>
          </div>

          <div class="hero-card-footer">
            <span>Planes desde <span class="highlight">RD$1,000 / mes</span></span>
            <span>Contáctanos al <strong>809-296-9991</strong></span>
          </div>
        </aside>
      </div>
    </div>
  </section>

 <!-- BENEFICIOS PREMIUM ESTILO CORPORATIVO | CENTRADOS -->
<section id="beneficios" class="section" style="padding: 5rem 0; background: transparent;">
  <div class="container">

    <!-- TÍTULO -->
    <div class="section-header" style="text-align:center; margin-bottom:3rem;">
      <span style="
        font-size: .8rem;
        letter-spacing: .15em;
        text-transform: uppercase;
        color: #22d3ee;
        font-weight: 600;
      ">¿POR QUÉ ELEGIR SUPORTEC?</span>

      <h2 style="
        font-size: 2rem;
        font-weight: 800;
        color: #f8fafc;
        margin-top: .4rem;
        margin-bottom: .5rem;
      ">Beneficios de navegar con Suportec Network</h2>

      <p style="
        max-width: 650px;
        margin: 0 auto;
        font-size: 1rem;
        color: #94a3b8;
      ">
        Conexión rápida, estable y con soporte profesional desde Bonao.
      </p>
    </div>

    <!-- GRID -->
    <div style="
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 1.8rem;
    ">

      <!-- TARJETA 1 -->
      <div class="beneficio-card" style="
        background: rgba(255,255,255,0.04);
        border-radius: 16px;
        padding: 2rem 1.6rem;
        text-align:center;
        border: 1px solid rgba(255,255,255,0.08);
        box-shadow: 0 15px 35px rgba(0,0,0,.25);
        backdrop-filter: blur(10px);
        transition: .25s ease;
      "
      onmouseover="this.style.transform='translateY(-6px)';"
      onmouseout="this.style.transform='none';"
      >
        <svg width="48" height="48" viewBox="0 0 24 24" stroke="#22c3ff" stroke-width="2" fill="none"
          stroke-linecap="round" stroke-linejoin="round" style="margin: 0 auto 1rem auto;">
          <path d="M2 12h20M12 2v20" />
        </svg>

        <h3 style="font-size: 1.2rem; font-weight: 700; color: #fff;">Fibra Óptica Real (FTTH)</h3>
        <p style="margin-top:.6rem; font-size:.95rem; color:#cbd5e1;">
          Conexión directa hasta tu hogar con baja latencia y estabilidad superior.
        </p>
      </div>

      <!-- TARJETA 2 -->
      <div class="beneficio-card" style="
        background: rgba(255,255,255,0.04);
        border-radius: 16px;
        padding: 2rem 1.6rem;
        text-align:center;
        border: 1px solid rgba(255,255,255,0.08);
        box-shadow: 0 15px 35px rgba(0,0,0,.25);
        backdrop-filter: blur(10px);
        transition: .25s ease;
      "
      onmouseover="this.style.transform='translateY(-6px)';"
      onmouseout="this.style.transform='none';"
      >
        <svg width="48" height="48" viewBox="0 0 24 24" stroke="#22c3ff" stroke-width="2" fill="none"
          stroke-linecap="round" stroke-linejoin="round" style="margin: 0 auto 1rem auto;">
          <path d="M4 4h16v6H4z" />
          <path d="M12 14v6" />
          <path d="M8 20h8" />
        </svg>

        <h3 style="font-size: 1.2rem; font-weight: 700; color: #fff;">Instalación Profesional</h3>
        <p style="margin-top:.6rem; font-size:.95rem; color:#cbd5e1;">
          Técnicos capacitados garantizan una instalación segura, rápida y limpia.
        </p>
      </div>

      <!-- TARJETA 3 -->
      <div class="beneficio-card" style="
        background: rgba(255,255,255,0.04);
        border-radius: 16px;
        padding: 2rem 1.6rem;
        text-align:center;
        border: 1px solid rgba(255,255,255,0.08);
        box-shadow: 0 15px 35px rgba(0,0,0,.25);
        backdrop-filter: blur(10px);
        transition: .25s ease;
      "
      onmouseover="this.style.transform='translateY(-6px)';"
      onmouseout="this.style.transform='none';"
      >
        <svg width="48" height="48" viewBox="0 0 24 24" stroke="#22c3ff" stroke-width="2" fill="none"
          stroke-linecap="round" stroke-linejoin="round" style="margin: 0 auto 1rem auto;">
          <circle cx="12" cy="12" r="4"/>
          <path d="M2 12h6M16 12h6"/>
        </svg>

        <h3 style="font-size: 1.2rem; font-weight: 700; color: #fff;">Soporte Local en Bonao</h3>
        <p style="margin-top:.6rem; font-size:.95rem; color:#cbd5e1;">
          Atención humana y directa. Respuesta rápida por WhatsApp o visita técnica.
        </p>
      </div>

      <!-- TARJETA 4 -->
      <div class="beneficio-card" style="
        background: rgba(255,255,255,0.04);
        border-radius: 16px;
        padding: 2rem 1.6rem;
        text-align:center;
        border: 1px solid rgba(255,255,255,0.08);
        box-shadow: 0 15px 35px rgba(0,0,0,.25);
        backdrop-filter: blur(10px);
        transition: .25s ease;
      "
      onmouseover="this.style.transform='translateY(-6px)';"
      onmouseout="this.style.transform='none';"
      >
        <svg width="48" height="48" viewBox="0 0 24 24" stroke="#22c3ff" stroke-width="2" fill="none"
          stroke-linecap="round" stroke-linejoin="round" style="margin: 0 auto 1rem auto;">
          <rect x="3" y="3" width="18" height="18" rx="3"/>
          <path d="M3 9h18" />
        </svg>

        <h3 style="font-size: 1.2rem; font-weight: 700; color: #fff;">Conexión Estable 24/7</h3>
        <p style="margin-top:.6rem; font-size:.95rem; color:#cbd5e1;">
          Monitoreo constante para garantizar estabilidad y rendimiento.
        </p>
      </div>

      <!-- TARJETA 5 -->
      <div class="beneficio-card" style="
        background: rgba(255,255,255,0.04);
        border-radius: 16px;
        padding: 2rem 1.6rem;
        text-align:center;
        border: 1px solid rgba(255,255,255,0.08);
        box-shadow: 0 15px 35px rgba(0,0,0,.25);
        backdrop-filter: blur(10px);
        transition: .25s ease;
      "
      onmouseover="this.style.transform='translateY(-6px)';"
      onmouseout="this.style.transform='none';"
      >
        <svg width="48" height="48" viewBox="0 0 24 24" stroke="#22c3ff" stroke-width="2" fill="none"
          stroke-linecap="round" stroke-linejoin="round" style="margin: 0 auto 1rem auto;">
          <circle cx="12" cy="12" r="10"/>
          <path d="M12 6v6l4 2"/>
        </svg>

        <h3 style="font-size: 1.2rem; font-weight: 700; color: #fff;">Baja Latencia</h3>
        <p style="margin-top:.6rem; font-size:.95rem; color:#cbd5e1;">
          Ideal para gaming, streaming y trabajo remoto sin interrupciones.
        </p>
      </div>

      <!-- TARJETA 6 -->
      <div class="beneficio-card" style="
        background: rgba(255,255,255,0.04);
        border-radius: 16px;
        padding: 2rem 1.6rem;
        text-align:center;
        border: 1px solid rgba(255,255,255,0.08);
        box-shadow: 0 15px 35px rgba(0,0,0,.25);
        backdrop-filter: blur(10px);
        transition: .25s ease;
      "
      onmouseover="this.style.transform='translateY(-6px)';"
      onmouseout="this.style.transform='none';"
      >
        <svg width="48" height="48" viewBox="0 0 24 24" stroke="#22c3ff" stroke-width="2" fill="none"
          stroke-linecap="round" stroke-linejoin="round" style="margin: 0 auto 1rem auto;">
          <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/>
          <polyline points="7 10 12 15 17 10"/>
          <line x1="12" y1="15" x2="12" y2="3"/>
        </svg>

        <h3 style="font-size: 1.2rem; font-weight: 700; color: #fff;">Subidas Estables (Upload)</h3>
        <p style="margin-top:.6rem; font-size:.95rem; color:#cbd5e1;">
          Perfecto para cámaras de seguridad, POS y videollamadas.
        </p>
      </div>

    </div>
  </div>
</section>


  <!-- SECCIÓN COBERTURA (ACORDEÓN) -->
<section id="cobertura" style="padding: 5rem 0;">
  <div class="container">

    <!-- TÍTULO -->
    <div style="text-align:center; margin-bottom: 2.5rem;">
      <span style="
        font-size: .8rem;
        letter-spacing: .15em;
        text-transform: uppercase;
        color: #22d3ee;
        font-weight: 600;
      ">COBERTURA EN BONAO</span>

      <h2 style="
        font-size: 2rem;
        font-weight: 800;
        color: #f8fafc;
        margin-top: .5rem;
      ">Barrios donde estamos disponibles</h2>
    </div>

    <!-- ACORDEÓN CONTAINER -->
    <div class="accordion" style="max-width:700px; margin:0 auto;">

      <!-- ITEM 1 -->
      <div class="accordion-item">
        <button class="accordion-header">
          <span>Villa Liberación</span>
          <i>+</i>
        </button>
        <div class="accordion-content">
          <p>
            ✔ Los Apartamentos<br>
            ✔ Los Solares<br>
            ✔ Los Padres<br>
            ✔ Francisco Villaespesa<br>
          </p>
        </div>
      </div>

      <!-- ITEM 2 -->
      <div class="accordion-item">
        <button class="accordion-header">
          <span>Brisas del Yuna</span>
          <i>+</i>
        </button>
        <div class="accordion-content">
          <p>
            ✔ La Playa<br>
            ✔ Los Solares<br>
            ✔ Planta De Gas<br>
          </p>
        </div>
      </div>

      <!-- ITEM 3 -->
      <div class="accordion-item">
        <button class="accordion-header">
          <span>Barrio Puerto Rico</span>
          <i>+</i>
        </button>
        <div class="accordion-content">
          <p>
            ✔ Sector Lino Abreu<br>
            ✔ Los Solares<br>
            ✔ David de Vargas<br>
            ✔ Las Mercedes<br>
            ✔ La 42 Los Santos<br>
            ✔ Barrio San Pedro (El Fundo)<br>
          </p>
        </div>
      </div>

      <!-- ITEM 4 -->
      <div class="accordion-item">
        <button class="accordion-header">
          <span>Bonao Centro</span>
          <i>+</i>
        </button>
        <div class="accordion-content">
          <p>
            ✔ Pabre Billini<br>
            ✔ Independencia<br>
            ✔ 27 De Febrero<br>
            ✔ Las Sanchez<br>
            ✔ La Mella<br>
            ✔ La San Antonio<br>
            ✔ 12 de Julio<br>
            ✔ Espaillat
          </p>
        </div>
      </div>

      <!-- ITEM 5 -->
      <div class="accordion-item">
        <button class="accordion-header">
          <span>La Salvia</span>
          <i>+</i>
        </button>
        <div class="accordion-content">
          <p>
            ✔ Residencial Los Sauces<br>
            ✔ Residencial Trebol<br>
            ✔ Residencial Ines<br>
            ✔ Residencial La Yensi<br>
            ✔ Residencial Clara Maria<br>
            ✔ Residencial Los Olmos<br>

          </p>
        </div>
      </div>

      <!-- ITEM 6 -->
      <div class="accordion-item">
        <button class="accordion-header">
          <span>El Llano</span>
          <i>+</i>
        </button>
        <div class="accordion-content">
          <p>
            ✔ Cobertura activa<br>
            ✔ Conexión rápida y estable
          </p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- STYLES ACORDEÓN -->
<style>
  .accordion-item {
    background: rgba(255,255,255,0.04);
    border: 1px solid rgba(255,255,255,0.08);
    border-radius: 12px;
    margin-bottom: 1rem;
    overflow: hidden;
    backdrop-filter: blur(8px);
  }

  .accordion-header {
    width: 100%;
    padding: 1.1rem 1.4rem;
    background: transparent;
    border: none;
    color: #e2e8f0;
    font-size: 1.05rem;
    font-weight: 600;
    display: flex;
    justify-content: space-between;
    align-items: center;
    cursor: pointer;
    transition: background .25s ease;
  }

  .accordion-header:hover {
    background: rgba(255,255,255,0.06);
  }

  .accordion-header i {
    font-style: normal;
    font-size: 1.3rem;
    color: #22d3ee;
    transition: transform .25s ease;
  }

  .accordion-content {
    max-height: 0;
    overflow: hidden;
    padding: 0 1.4rem;
    opacity: 0;
    color: #cbd5e1;
    font-size: .95rem;
    transition: max-height .35s ease, opacity .35s ease;
  }

  .accordion-content p {
    margin: 1rem 0 1.2rem 0;
  }

  .accordion-item.active .accordion-content {
    max-height: 200px;
    opacity: 1;
  }

  .accordion-item.active .accordion-header i {
    transform: rotate(45deg);
  }
</style>

<!-- SCRIPT ACORDEÓN -->
<script>
  document.querySelectorAll(".accordion-header").forEach(btn => {
    btn.addEventListener("click", () => {
      const item = btn.parentElement;
      item.classList.toggle("active");
    });
  });
</script>


  <!-- PLANES -->
<section id="planes" class="section">
  <div class="container">

    <div class="section-header">
      <div class="section-eyebrow">PLANES DE INTERNET</div>
      <h2 class="section-title">Elige el plan perfecto para ti</h2>
      <p class="section-subtitle">
        Todos los planes incluyen conexión por fibra óptica, soporte local y monitoreo constante.
        Solo cambia la velocidad según el uso que le darás.
      </p>
    </div>

    <div class="pricing-grid">

      <!-- Plan 15 Mbps -->
      <article class="pricing-card">

        <div class="pricing-name">Plan Básico</div>

        <!-- VELOCIDAD + SUBIDA/BAJADA -->
        <div class="pricing-speed">15 Mbps</div>

                <div class="speed-details">
          <span><i class="fa-solid fa-download" style="color:#22c55e"></i> 15 Mbps</span>
          <span><i class="fa-solid fa-upload" style="color:#ef4444"></i> 8 Mbps</span>
        </div>

        <div class="pricing-price big-price">RD$1,000 / mes</div>

        <div class="pricing-meta">Ideal para uso ligero en el hogar.</div>

        <ul class="pricing-features">
          <li>Navegación, redes sociales y YouTube</li>
          <li>1–3 dispositivos conectados</li>
          <li>Fibra óptica hasta tu hogar</li>
        </ul>

        <div class="pricing-actions">
          <a href="https://wa.me/18092969991" class="btn btn-primary">Contratar este plan</a>
        </div>

      </article>

      <!-- Plan 40 Mbps -->
      <article class="pricing-card popular">

        <div class="pricing-pill">Más elegido</div>
        <div class="pricing-name">Plan Hogar Plus</div>

        <div class="pricing-speed">40 Mbps</div>

                <div class="speed-details">
          <span><i class="fa-solid fa-download" style="color:#22c55e"></i> 40 Mbps</span>
          <span><i class="fa-solid fa-upload" style="color:#ef4444"></i> 20 Mbps</span>
        </div>

        <div class="pricing-price big-price">RD$1,300 / mes</div>

        <div class="pricing-meta">Perfecto para familias, streaming y videollamadas.</div>

        <ul class="pricing-features">
          <li>Streaming HD sin cortes</li>
          <li>Varios dispositivos conectados al mismo tiempo</li>
          <li>Baja latencia para clases en línea</li>
        </ul>

        <div class="pricing-actions">
          <a href="https://wa.me/18092969991" class="btn btn-primary">Quiero este plan</a>
         
        </div>

      </article>

      <!-- Plan 100 Mbps -->
      <article class="pricing-card">

        <div class="pricing-name">Plan Premium</div>

        <div class="pricing-speed">100 Mbps</div>

        <div class="speed-details">
          <span><i class="fa-solid fa-download" style="color:#22c55e"></i> 100 Mbps</span>
          <span><i class="fa-solid fa-upload" style="color:#ef4444"></i> 50 Mbps</span>
        </div>

        <div class="pricing-price big-price">RD$2,300 / mes</div>

        <div class="pricing-meta">Para empresas, gamers y alto consumo.</div>

        <ul class="pricing-features">
          <li>Soporta cámaras, POS y streaming 4K</li>
          <li>Ideal para trabajo remoto y negocios</li>
          <li>Prioridad en soporte</li>
        </ul>

        <div class="pricing-actions">
          <a href="https://wa.me/18092969991" class="btn btn-primary">Cotizar instalación</a>
        </div>

      </article>

    </div>
  </div>
</section>


  <!-- CÓMO FUNCIONA -->
  <section class="section">
    <div class="container">
      <div class="section-header">
        <div class="section-eyebrow">¿CÓMO ES EL PROCESO?</div>
        <h2 class="section-title">Conectarte con nosotros es muy sencillo</h2>
        <p class="section-subtitle">
          Solo necesitamos tu dirección, elegimos el plan ideal para ti y coordinamos la instalación.
        </p>
      </div>

      <div class="steps">
        <article class="step-card reveal-step">
          <div class="step-number">1</div>
          <div class="step-title">Nos contactas por WhatsApp</div>
          <p>
            Escribe al <strong>809-296-9991</strong> con tu nombre y dirección.
            Verificamos la cobertura en tu zona y resolvemos dudas sobre los planes.
          </p>
        </article>
        <article class="step-card reveal-step">
          <div class="step-number">2</div>
          <div class="step-title">Confirmamos instalación</div>
          <p>
            Coordinamos día y hora para que un técnico visite tu hogar o negocio
            y realice toda la instalación de la fibra óptica.
          </p>
        </article>
        <article class="step-card reveal-step">
          <div class="step-number">3</div>
          <div class="step-title">Pruebas y activación</div>
          <p>
            Probamos velocidad, conexión en tus equipos y dejamos todo funcionando.
            Sales navegando de inmediato con tu nueva conexión Suportec.
          </p>
        </article>
      </div>
    </div>
  </section>

  <!-- TESTIMONIOS -->
  <section class="section">
    <div class="container">
      <div class="section-header">
        <div class="section-eyebrow">OPINIONES REALES</div>
        <h2 class="section-title">Clientes que ya confían en Suportec Network</h2>
        <p class="section-subtitle">
          Nuestro mejor marketing son los resultados que ven nuestros clientes día a día.
        </p>
      </div>

      <div class="testimonials-grid">
        <article class="testimonial-card">
          <div class="testimonial-stars">★★★★★</div>
          <p class="testimonial-text">
            “Antes tenía problemas constantes con otras compañías. Desde que tengo Suportec,
            el internet es estable y el soporte responde rápido por WhatsApp.”
          </p>
          <div class="testimonial-name">María G.</div>
          <div class="testimonial-role">Cliente residencial</div>
        </article>

        <article class="testimonial-card">
          <div class="testimonial-stars">★★★★★</div>
          <p class="testimonial-text">
            “Mi negocio depende del internet para facturación y cámaras.
            Suportec ha sido clave para mantener todo funcionando.”
          </p>
          <div class="testimonial-name">Evolution Drink</div>
          <div class="testimonial-role">Cliente negocio</div>
        </article>

        <article class="testimonial-card">
          <div class="testimonial-stars">★★★★★</div>
          <p class="testimonial-text">
            “Lo que más me gusta es que son gente de Bonao. Hablas con ellos rápido,
            llegan y resuelven. Eso no tiene precio.”
          </p>
          <div class="testimonial-name">Pedro M.</div>
          <div class="testimonial-role">Cliente residencial</div>
        </article>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section id="faq" class="section">
    <div class="container">
      <div class="section-header">
        <div class="section-eyebrow">PREGUNTAS FRECUENTES</div>
        <h2 class="section-title">Resolvemos tus dudas más comunes</h2>
      </div>

      <div class="faq-grid">
        <div class="faq-item">
          <div class="faq-question">
            <span class="q">¿Cuánto tarda la instalación?</span>
            <span class="faq-toggle">−</span>
          </div>
          <div class="faq-answer">
            Generalmente entre 24 y 72 horas después de confirmar tu pedido,
            dependiendo de la agenda y de la disponibilidad en tu zona.
          </div>
        </div>

        <div class="faq-item">
          <div class="faq-question">
            <span class="q">¿Los planes son realmente por fibra óptica?</span>
            <span class="faq-toggle">+</span>
          </div>
          <div class="faq-answer">
            Sí. Nuestro servicio es <strong>FTTH</strong> (Fibra hasta el hogar),
            lo que garantiza una experiencia estable, con menos interferencias y mejor velocidad real.
          </div>
        </div>

        <div class="faq-item">
          <div class="faq-question">
            <span class="q">¿Qué necesito para contratar el servicio?</span>
            <span class="faq-toggle">+</span>
          </div>
          <div class="faq-answer">
            Solo debes escribirnos al WhatsApp, confirmar tu dirección y seleccionar el plan.
            Nuestro equipo valida la cobertura y coordina la instalación contigo.
          </div>
        </div>

        <div class="faq-item">
          <div class="faq-question">
            <span class="q">¿Puedo cambiar de plan más adelante?</span>
            <span class="faq-toggle">+</span>
          </div>
          <div class="faq-answer">
            Claro, puedes subir o bajar de plan según tus necesidades.
            Solo debes comunicarte con soporte para ajustar la velocidad contratada.
          </div>
        </div>
        <div class="faq-item">
  <div class="faq-question">
    <span>¿Tengo que firmar contrato o acuerdo de permanencia?</span>
    <span class="faq-toggle">+</span>
  </div>
  <div class="faq-answer">
    No trabajamos con contratos ni permanencias. Nuestro servicio es mes a mes, 
    sin penalidades ni letras pequeñas. Te quedas porque estás satisfecho.
  </div>
</div>

      </div>
    </div>
  </section>

  <!-- CTA FINAL -->
  <section id="contacto" class="cta-final">
    <div class="container">
      <h2>¿Listo para tener mejor internet de Bonao?</h2>
      <p>
        Escríbenos ahora por WhatsApp, verifica cobertura en tu sector
        y agenda tu instalación con Suportec Network SRL.
      </p>
      <a href="https://wa.me/18092969991" class="btn btn-primary">
        Hablar con un asesor
      </a>
    </div>
  </section>

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
