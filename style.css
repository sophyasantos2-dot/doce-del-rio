/* ===========================
   DOCE DELÍRIO — style.css
=========================== */

*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

:root {
  --rose: #F2C4CE;
  --rose-deep: #D4849A;
  --rose-pale: #FCF0F3;
  --rose-mid: #E8A8B8;
  --sage: #B8CDB5;
  --sage-light: #E8F0E6;
  --cream: #FDF6EE;
  --warm: #F5E6D3;
  --ink: #3D2B2E;
  --ink-soft: #7A5C62;
  --ink-muted: #B09A9E;
  --gold: #C9A96E;
  --gold-pale: #F5EDD8;
  --radius: 18px;
}

body {
  font-family: 'Lora', Georgia, serif;
  background: var(--cream);
  color: var(--ink);
  min-height: 100vh;
  overflow-x: hidden;
}

/* ── LOADING ── */
#loading {
  position: fixed; inset: 0;
  background: var(--cream);
  display: flex; flex-direction: column;
  align-items: center; justify-content: center;
  gap: 18px;
  z-index: 999;
  transition: opacity 0.8s ease;
}
#loading.out { opacity: 0; pointer-events: none; }

.load-cake {
  font-size: 3.5rem;
  animation: wobble 1.8s ease-in-out infinite;
}
@keyframes wobble {
  0%, 100% { transform: rotate(-4deg) scale(1); }
  50%       { transform: rotate(4deg) scale(1.08); }
}

.load-title {
  font-family: 'Playfair Display', serif;
  font-style: italic;
  font-size: 1.8rem;
  color: var(--rose-deep);
  letter-spacing: 1px;
}

.load-dots { display: flex; gap: 6px; }
.load-dot {
  width: 7px; height: 7px;
  background: var(--rose-mid);
  border-radius: 50%;
  animation: bounce 1.2s ease-in-out infinite;
}
.load-dot:nth-child(2) { animation-delay: 0.2s; }
.load-dot:nth-child(3) { animation-delay: 0.4s; }
@keyframes bounce {
  0%, 80%, 100% { transform: translateY(0); }
  40%           { transform: translateY(-10px); }
}

/* ── HEADER ── */
header {
  background: white;
  border-bottom: 1px solid var(--rose);
  padding: 14px 20px;
  display: flex; align-items: center; justify-content: space-between;
  position: sticky; top: 0; z-index: 100;
}

.header-brand {
  display: flex; align-items: center; gap: 8px; cursor: pointer;
}
.brand-cake { font-size: 1.4rem; }
.brand-name {
  font-family: 'Playfair Display', serif;
  font-style: italic;
  font-size: 1.3rem;
  color: var(--rose-deep);
  letter-spacing: 0.5px;
}
.header-line { width: 1px; height: 20px; background: var(--rose); }
.header-tag {
  font-size: 0.7rem;
  color: var(--ink-muted);
  letter-spacing: 2px;
  text-transform: uppercase;
  font-family: 'Lora', serif;
}

.menu-toggle {
  background: var(--rose-pale);
  border: 1px solid var(--rose);
  border-radius: 50%;
  width: 36px; height: 36px;
  display: flex; flex-direction: column;
  align-items: center; justify-content: center;
  gap: 4px; cursor: pointer;
}
.menu-toggle span {
  display: block; width: 14px; height: 1.5px;
  background: var(--rose-deep); border-radius: 2px;
}

/* ── HERO ── */
.hero {
  background: linear-gradient(160deg, var(--rose-pale) 0%, var(--warm) 60%, var(--sage-light) 100%);
  padding: 40px 24px 32px;
  text-align: center;
  position: relative;
  overflow: hidden;
}
.hero::before {
  content: '';
  position: absolute; inset: 0;
  background-image:
    radial-gradient(circle at 20% 80%, rgba(242,196,206,0.3) 0%, transparent 50%),
    radial-gradient(circle at 80% 20%, rgba(184,205,181,0.25) 0%, transparent 50%);
}

.hero-deco-top {
  position: absolute; top: 12px; left: 16px;
  font-size: 1.1rem; opacity: 0.35; letter-spacing: 8px;
}
.hero-deco-bottom {
  position: absolute; bottom: 12px; right: 16px;
  font-size: 1rem; opacity: 0.3; letter-spacing: 6px;
}
.hero-eyebrow {
  font-size: 0.68rem;
  letter-spacing: 3px;
  text-transform: uppercase;
  color: var(--ink-muted);
  margin-bottom: 10px;
  position: relative;
}
.hero-title {
  font-family: 'Playfair Display', serif;
  font-size: 2.6rem;
  line-height: 1.15;
  color: var(--ink);
  margin-bottom: 6px;
  position: relative;
}
.hero-title em { color: var(--rose-deep); font-style: italic; }
.hero-subtitle {
  font-size: 0.88rem;
  color: var(--ink-soft);
  line-height: 1.6;
  max-width: 280px;
  margin: 0 auto 20px;
  font-style: italic;
  position: relative;
}
.hero-divider {
  display: flex; align-items: center; gap: 10px;
  justify-content: center; margin: 18px 0 0;
  position: relative;
}
.divider-line { flex: 1; max-width: 60px; height: 1px; background: var(--rose-mid); }
.divider-icon { font-size: 0.9rem; }

/* ── CATEGORIES ── */
.section-cats {
  background: white;
  padding: 20px 16px 16px;
  border-bottom: 1px solid var(--rose-pale);
}
.section-label {
  font-family: 'Playfair Display', serif;
  font-style: italic;
  font-size: 1.05rem;
  color: var(--rose-deep);
  text-align: center;
  margin-bottom: 14px;
}
.cat-pills {
  display: flex; flex-wrap: wrap;
  gap: 8px; justify-content: center;
}
.pill {
  background: var(--rose-pale);
  border: 1px solid var(--rose);
  color: var(--ink-soft);
  border-radius: 50px;
  padding: 8px 18px;
  font-family: 'Lora', serif;
  font-size: 0.82rem;
  cursor: pointer;
  transition: all 0.25s ease;
  display: flex; align-items: center; gap: 6px;
}
.pill:hover {
  background: var(--rose-mid);
  color: white;
  border-color: var(--rose-mid);
  transform: translateY(-1px);
}
.pill.active {
  background: var(--rose-deep);
  color: white;
  border-color: var(--rose-deep);
  box-shadow: 0 4px 14px rgba(212,132,154,0.35);
}
.pill-icon { font-size: 0.9rem; }

/* ── RECIPE GRID ── */
.section-recipes {
  padding: 20px 14px 32px;
  background: var(--cream);
}
.section-heading {
  display: flex; align-items: center; gap: 12px;
  margin-bottom: 16px; padding: 0 2px;
}
.heading-ornament { font-size: 1rem; }
.heading-text {
  font-family: 'Playfair Display', serif;
  font-style: italic;
  font-size: 1.1rem;
  color: var(--rose-deep);
}
.heading-count {
  font-size: 0.72rem;
  color: var(--ink-muted);
  letter-spacing: 1px;
  font-style: normal;
  font-family: 'Lora', serif;
}

.cards-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 12px;
}

.recipe-card {
  background: white;
  border-radius: var(--radius);
  overflow: hidden;
  border: 1px solid var(--rose-pale);
  transition: transform 0.2s ease, box-shadow 0.2s ease;
  animation: fadeUp 0.4s ease both;
  cursor: pointer;
}
.recipe-card:hover {
  transform: translateY(-3px);
  box-shadow: 0 8px 24px rgba(212,132,154,0.2);
}
@keyframes fadeUp {
  from { opacity: 0; transform: translateY(16px); }
  to   { opacity: 1; transform: translateY(0); }
}

.card-thumb {
  position: relative;
  padding-top: 75%;
  background: var(--rose-pale);
  overflow: hidden;
}
.card-thumb img {
  position: absolute; inset: 0;
  width: 100%; height: 100%;
  object-fit: cover;
  transition: transform 0.4s ease;
}
.recipe-card:hover .card-thumb img { transform: scale(1.05); }

.card-thumb-emoji {
  position: absolute; inset: 0;
  display: flex; align-items: center; justify-content: center;
  font-size: 3.2rem;
  background: linear-gradient(135deg, var(--rose-pale), var(--warm));
}
.card-badge {
  position: absolute; top: 8px; left: 8px;
  background: rgba(255,255,255,0.92);
  backdrop-filter: blur(4px);
  border-radius: 30px;
  padding: 3px 10px;
  font-size: 0.62rem;
  letter-spacing: 1.5px;
  text-transform: uppercase;
  color: var(--rose-deep);
  font-family: 'Lora', serif;
  border: 1px solid rgba(212,132,154,0.3);
}
.card-num {
  position: absolute; bottom: 8px; right: 8px;
  background: rgba(61,43,46,0.55);
  color: white;
  border-radius: 20px;
  padding: 2px 8px;
  font-size: 0.6rem;
  letter-spacing: 1px;
  font-family: 'Lora', serif;
}
.card-body {
  padding: 12px 12px 14px;
}
.card-name {
  font-family: 'Playfair Display', serif;
  font-size: 0.85rem;
  font-style: italic;
  color: var(--ink);
  line-height: 1.35;
  margin-bottom: 4px;
}
.card-time {
  font-size: 0.68rem;
  color: var(--ink-muted);
  letter-spacing: 0.5px;
  margin-bottom: 10px;
  display: flex; align-items: center; gap: 4px;
}
.card-time::before { content: '◷'; font-size: 0.75rem; }
.card-btn {
  width: 100%;
  background: var(--rose-pale);
  border: 1px solid var(--rose);
  color: var(--rose-deep);
  border-radius: 30px;
  padding: 8px;
  font-family: 'Lora', serif;
  font-size: 0.75rem;
  cursor: pointer;
  transition: all 0.2s ease;
  font-style: italic;
  letter-spacing: 0.3px;
}
.card-btn:hover {
  background: var(--rose-deep);
  color: white;
  border-color: var(--rose-deep);
}

/* ── DETAIL PAGE ── */
#page-detail { animation: fadeUp 0.35s ease; min-height: 100vh; padding-bottom: 40px; }

.detail-hero {
  position: relative;
  height: 260px; overflow: hidden;
  background: linear-gradient(135deg, var(--rose-pale), var(--warm));
}
.detail-hero img { width: 100%; height: 100%; object-fit: cover; }
.detail-hero-emoji {
  position: absolute; inset: 0;
  display: flex; align-items: center; justify-content: center;
  font-size: 5rem;
  background: linear-gradient(135deg, var(--rose-pale), var(--warm));
}
.detail-overlay {
  position: absolute; inset: 0;
  background: linear-gradient(to top, rgba(61,43,46,0.7) 30%, transparent 70%);
  display: flex; flex-direction: column;
  justify-content: flex-end; padding: 20px;
}
.detail-title {
  font-family: 'Playfair Display', serif;
  font-style: italic;
  font-size: 1.6rem;
  color: white;
  line-height: 1.15;
  margin-bottom: 4px;
}
.detail-time-badge {
  display: inline-block;
  background: rgba(255,255,255,0.2);
  backdrop-filter: blur(4px);
  border: 1px solid rgba(255,255,255,0.3);
  color: rgba(255,255,255,0.9);
  border-radius: 20px;
  padding: 3px 12px;
  font-size: 0.72rem;
  letter-spacing: 0.5px;
  font-family: 'Lora', serif;
  font-style: italic;
}
.back-wrap { position: absolute; top: 14px; left: 14px; }
.btn-back {
  background: rgba(255,255,255,0.88);
  backdrop-filter: blur(6px);
  border: none; border-radius: 30px;
  padding: 7px 14px;
  font-family: 'Lora', serif;
  font-style: italic;
  font-size: 0.78rem;
  color: var(--rose-deep);
  cursor: pointer;
  transition: background 0.2s;
  display: flex; align-items: center; gap: 5px;
}
.btn-back:hover { background: white; }

.detail-body {
  padding: 22px 16px;
  display: flex; flex-direction: column; gap: 16px;
}
.detail-card {
  background: white;
  border-radius: var(--radius);
  border: 1px solid var(--rose-pale);
  padding: 18px 20px;
}
.detail-card-title {
  font-family: 'Playfair Display', serif;
  font-style: italic;
  font-size: 1.1rem;
  color: var(--rose-deep);
  margin-bottom: 14px;
  display: flex; align-items: center; gap: 8px;
}
.detail-card-title::after {
  content: '';
  flex: 1; height: 1px;
  background: linear-gradient(to right, var(--rose), transparent);
}

.ing-list { list-style: none; display: flex; flex-direction: column; gap: 7px; }
.ing-list li {
  display: flex; align-items: baseline; gap: 10px;
  font-size: 0.875rem; line-height: 1.45;
  padding: 7px 10px;
  background: var(--rose-pale);
  border-radius: 10px;
  border-left: 2px solid var(--rose-mid);
  color: var(--ink-soft);
}
.ing-dot {
  width: 5px; height: 5px;
  background: var(--rose-mid);
  border-radius: 50%;
  flex-shrink: 0;
  margin-top: 5px;
}

.steps-list { list-style: none; display: flex; flex-direction: column; gap: 12px; }
.steps-list li {
  display: flex; gap: 12px;
  font-size: 0.875rem; line-height: 1.55;
  color: var(--ink-soft);
}
.step-num {
  min-width: 26px; height: 26px;
  background: var(--rose-deep);
  color: white;
  border-radius: 50%;
  display: flex; align-items: center; justify-content: center;
  font-size: 0.7rem; font-weight: 500;
  flex-shrink: 0;
  font-family: 'Lora', serif;
}

/* ── FOOTER ── */
footer {
  text-align: center;
  padding: 20px;
  font-style: italic;
  font-size: 0.78rem;
  color: var(--ink-muted);
  border-top: 1px solid var(--rose-pale);
}
footer span { color: var(--rose-deep); }

/* ── SIDE DRAWER ── */
.drawer-overlay {
  position: fixed; inset: 0;
  background: rgba(61,43,46,0.3);
  z-index: 200;
  display: none;
  backdrop-filter: blur(2px);
}
.drawer-overlay.show { display: block; }

.drawer {
  position: fixed; top: 0; right: 0;
  width: 240px; height: 100vh;
  background: white;
  z-index: 300;
  transform: translateX(100%);
  transition: transform 0.3s ease;
  padding: 50px 24px 24px;
  border-left: 1px solid var(--rose-pale);
}
.drawer.show { transform: translateX(0); }

.drawer-close {
  position: absolute; top: 14px; right: 14px;
  background: var(--rose-pale);
  border: none; border-radius: 50%;
  width: 32px; height: 32px;
  font-size: 1rem; color: var(--rose-deep);
  cursor: pointer;
}
.drawer-brand {
  font-family: 'Playfair Display', serif;
  font-style: italic;
  font-size: 1.1rem;
  color: var(--rose-deep);
  margin-bottom: 24px;
}
.drawer-links { list-style: none; display: flex; flex-direction: column; gap: 6px; }
.drawer-links li a {
  display: block; padding: 10px 14px;
  border-radius: 12px;
  text-decoration: none;
  font-family: 'Lora', serif;
  font-style: italic;
  font-size: 0.88rem;
  color: var(--ink-soft);
  background: var(--cream);
  transition: all 0.2s;
}
.drawer-links li a:hover { background: var(--rose-pale); color: var(--rose-deep); }

/* ── RESPONSIVE ── */
@media (min-width: 560px) {
  .cards-grid { grid-template-columns: repeat(3, 1fr); }
  .hero-title  { font-size: 3rem; }
}
@media (min-width: 900px) {
  .cards-grid { grid-template-columns: repeat(4, 1fr); }
}