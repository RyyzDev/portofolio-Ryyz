<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portofolio Profesional</title>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style1.css">
</head>

<body>
  <header>
    <div class="header-left">
      <div class="header-text">
        <h1>Nama Anda</h1>
        <p>Web Developer | UI/UX Enthusiast</p>
      </div>
    </div>
    <button class="hamburger" id="hamburger-menu">☰</button>
    <nav class="header-nav" id="nav-menu">
      <a href="#about">Tentang</a>
      <a href="#skills">Skill</a>
      <a href="#projects">Proyek</a>
      <a href="#contact">Kontak</a>
    </nav>
    <div class="logo-container">
      <img src="https://via.placeholder.com/70" alt="Logo">
    </div>
    <button id="theme-toggle" title="Toggle Theme">🌙 / ☀️</button>
  </header>

  <main>
    <section id="about">
      <div class="card">
        <h2>Tentang Saya</h2>
        <div class="about-content">
          <div class="about-photo">
            <img src="https://via.placeholder.com/300x400" alt="Foto Pembuat">
          </div>
          <div class="about-text">
            <p>Saya adalah pengembang web yang berfokus pada pembuatan antarmuka pengguna yang elegan dan pengalaman pengguna yang optimal. Menguasai teknologi modern untuk membangun aplikasi yang cepat, responsif, dan menarik.</p>
          </div>
        </div>
      </div>
    </section>

    <section id="skills">
      <div class="card">
        <h2>Skill</h2>
        <div class="skills" id="skills-section">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" alt="HTML" class="skill-icon">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" alt="CSS" class="skill-icon">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/tailwindcss/tailwindcss-plain.svg" alt="Tailwind" class="skill-icon">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" alt="JavaScript" class="skill-icon">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-plain.svg" alt="Laravel" class="skill-icon">
        </div>
      </div>
    </section>

    <section id="projects">
      <div class="card">
        <h2>Proyek</h2>
        <ul id="project-list"></ul>
      </div>
    </section>

    <section id="contact">
      <div class="card">
        <h2>Kontak</h2>
        <p>Email: nama@domain.com</p>
        <p>LinkedIn: <a href="#">linkedin.com/in/namaanda</a></p>
      </div>
    </section>
  </main>

  <footer>
    &copy; 2025 Nama Anda. Semua Hak Dilindungi.
  </footer>

  <script src="script1.js"></script>
</body>

</html>
