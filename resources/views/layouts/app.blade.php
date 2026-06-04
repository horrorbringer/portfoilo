<!doctype html>
<html lang="en" data-bs-theme="light">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Portfolio</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <style>
    :root{--primary:#0d6efd;--muted:#6c757d;--card:#ffffff}
    html[data-bs-theme="dark"]{--card:#1a1a1a}
    body{font-family:Inter,ui-sans-serif,system-ui,-apple-system,"Segoe UI",Roboto,"Helvetica Neue",Arial;background:#f4f7fb;color:#0b1a2b;transition:background 0.3s,color 0.3s}
    html[data-bs-theme="dark"] body{background:#0d1117;color:#e0e0e0}
    .navbar{background:transparent;backdrop-filter:blur(6px);position:sticky;top:0;z-index:999;border-bottom:1px solid rgba(0,0,0,0.1)}
    html[data-bs-theme="dark"] .navbar{border-bottom-color:rgba(255,255,255,0.1)}
    .theme-toggle{cursor:pointer;font-size:1.2rem}
    .site-header{transition:all 0.3s ease}
    .hero{background:linear-gradient(180deg,#ffffff 0%, #f8fbff 100%);padding:28px;border-radius:12px;transition:all 0.3s ease}
    html[data-bs-theme="dark"] .hero{background:linear-gradient(180deg,#1a1a1a 0%, #242424 100%)}
    .profile-img{width:96px;height:96px;object-fit:cover;border-radius:50%;transition:transform 0.3s ease;box-shadow:0 4px 12px rgba(0,0,0,0.1)}
    .profile-img:hover{transform:scale(1.05)}
    .typing-text{min-height:32px;font-weight:600;color:#0d6efd}
    .typing-text .typed-cursor{animation:blink 0.7s infinite}
    @keyframes blink{0%,49%{opacity:1}50%,100%{opacity:0}}
    .skill-chip{display:inline-block;padding:6px 12px;margin:6px 6px 6px 0;border-radius:999px;background:#eef4ff;color:#0b3c88;font-size:0.85rem;transition:all 0.3s ease;cursor:default}
    .skill-chip i{margin-right:4px}
    .skill-chip:hover{transform:translateY(-2px);box-shadow:0 4px 12px rgba(13,110,253,0.2)}
    html[data-bs-theme="dark"] .skill-chip{background:#1e3a5f;color:#60a5fa}
    .social-icons a{display:inline-flex;align-items:center;justify-content:center;width:40px;height:40px;border-radius:50%;background:#eef4ff;color:#0b3c88;transition:all 0.3s ease;margin:0 4px}
    .social-icons a:hover{background:#0d6efd;color:#fff;transform:translateY(-3px)}
    html[data-bs-theme="dark"] .social-icons a{background:#1e3a5f;color:#60a5fa}
    html[data-bs-theme="dark"] .social-icons a:hover{background:#0d6efd;color:#fff}
    .status-badge{display:inline-flex;align-items:center;gap:6px;padding:8px 14px;border-radius:999px;background:#d4edda;color:#155724;font-size:0.9rem;margin-bottom:12px}
    .status-dot{width:8px;height:8px;border-radius:50%;background:#28a745;animation:pulse 2s infinite}
    @keyframes pulse{0%,100%{opacity:1}50%{opacity:0.5}}
    .stats-counter{text-align:center;padding:12px}
    .stats-number{font-size:1.8rem;font-weight:700;color:#0d6efd}
    .stats-label{font-size:0.85rem;color:#6c757d;margin-top:4px}
    .scroll-indicator{display:flex;justify-content:center;align-items:center;height:40px;margin-top:20px;animation:bounce 2s infinite}
    @keyframes bounce{0%,100%{transform:translateY(0)}50%{transform:translateY(-8px)}}
    .scroll-indicator i{font-size:1.5rem;color:#0d6efd;opacity:0.6}
    .chip-muted{background:#eef0f3;color:#334155}
    html[data-bs-theme="dark"] .chip-muted{background:#2d2d2d;color:#a0a0a0}
    .card-lg{border-radius:12px;transition:all 0.3s ease}
    .card{background:var(--card)}
    html[data-bs-theme="dark"] .card{border-color:#333}
    footer{color:#6b7280;transition:color 0.3s}
    html[data-bs-theme="dark"] footer{color:#9ca3af}
    .btn{transition:all 0.3s ease}
    .btn:hover{transform:translateY(-2px);box-shadow:0 6px 16px rgba(0,0,0,0.1)}
    @media(min-width:992px){.container{max-width:980px}}
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg site-header">
  <div class="container">
    <a class="navbar-brand fw-bold" href="/">Meas Vanny</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav-collapse" aria-controls="nav-collapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="nav-collapse">
      <ul class="navbar-nav ms-auto align-items-center">
        <li class="nav-item"><a class="nav-link text-muted" href="/">Home</a></li>
        <li class="nav-item"><a class="nav-link text-muted" href="/projects">Projects</a></li>
        <li class="nav-item ms-3">
          <button class="btn btn-sm btn-outline-secondary theme-toggle" id="themeToggle" title="Toggle dark mode">
            <i class="fas fa-moon"></i>
          </button>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container py-4">
  @yield('content')
</div>

<footer class="mt-4 py-3 text-center small">
  <div class="container">© {{ date('Y') }} — Built with Laravel • Designed professionally</div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12/lib/typed.umd.js"></script>
<script>
AOS.init({duration:600,easing:'ease-in-out'});

// Typing Animation
const typingText=document.querySelector('.typing-text');
if(typingText){
  new Typed('.typing-text',{
    strings:['Software Engineer','Full-Stack Developer','DevOps Enthusiast','Backend Specialist','Cloud Developer'],
    typeSpeed:50,
    backSpeed:30,
    loop:true,
    cursorChar:'|'
  });
}

// Theme Toggle
const themeToggle=document.getElementById('themeToggle');
const html=document.documentElement;
const savedTheme=localStorage.getItem('theme')||'light';
html.setAttribute('data-bs-theme',savedTheme);
themeToggle.innerHTML=savedTheme==='dark'?'<i class="fas fa-sun"></i>':'<i class="fas fa-moon"></i>';
themeToggle.addEventListener('click',()=>{
  const currentTheme=html.getAttribute('data-bs-theme');
  const newTheme=currentTheme==='dark'?'light':'dark';
  html.setAttribute('data-bs-theme',newTheme);
  localStorage.setItem('theme',newTheme);
  themeToggle.innerHTML=newTheme==='dark'?'<i class="fas fa-sun"></i>':'<i class="fas fa-moon"></i>';
});

// Scroll to projects
document.querySelectorAll('.scroll-to-projects').forEach(el=>{
  el.addEventListener('click',(e)=>{
    e.preventDefault();
    document.querySelector('#projects').scrollIntoView({behavior:'smooth'});
  });
});
</script>
</body>
</html>
