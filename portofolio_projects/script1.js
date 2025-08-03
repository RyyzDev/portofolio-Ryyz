document.addEventListener('DOMContentLoaded', () => {
    // Hamburger menu
    const hamburger = document.getElementById('hamburger-menu');
    const navMenu = document.getElementById('nav-menu');
  
    hamburger.addEventListener('click', () => {
      navMenu.classList.toggle('show');
    });
  
    // Dark/Light Mode toggle
    const toggleButton = document.getElementById('theme-toggle');
    const body = document.body;
  
    if (localStorage.getItem('theme') === 'light') {
      body.classList.add('light-theme');
    }
  
    toggleButton.addEventListener('click', () => {
      body.classList.toggle('light-theme');
      if (body.classList.contains('light-theme')) {
        localStorage.setItem('theme', 'light');
      } else {
        localStorage.setItem('theme', 'dark');
      }
    });
  
    // Skill animation
    const skillIcons = document.querySelectorAll('.skill-icon');
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
        }
      });
    }, { threshold: 0.1 });
  
    skillIcons.forEach(icon => observer.observe(icon));
  
    // About photo animation
    const aboutPhoto = document.querySelector('.about-photo img');
    const aboutObserver = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          aboutPhoto.style.animationPlayState = 'running';
        }
      });
    }, { threshold: 0.3 });
  
    aboutObserver.observe(aboutPhoto);
  
    // Load projects dynamically
    const projects = [
      { title: "Website Toko Online", description: "Platform belanja modern dengan UI responsif dan backend sederhana." },
      { title: "Aplikasi Catatan", description: "Web app ringan untuk mencatat dengan fitur sinkronisasi." },
      { title: "Dashboard Admin", description: "Tampilan admin dinamis dengan grafik interaktif dan kontrol pengguna." },
    ];
  
    const projectList = document.getElementById('project-list');
  
    projects.forEach(project => {
      const li = document.createElement('li');
      li.innerHTML = `<strong>${project.title}</strong>: ${project.description}`;
      projectList.appendChild(li);
    });
  });

  const headerText = document.querySelector(".header-text h1");
  const texts = ["Nama Anda", "Web Developer", "UI/UX Enthusiast", "Problem Solver"];
  let count = 0;
  let index = 0;
  let currentText = "";
  let letter = "";

  function typeEffect() {
    if (count === texts.length) {
      count = 0;
    }
    currentText = texts[count];
    letter = currentText.slice(0, ++index);

    headerText.textContent = letter;

    if (letter.length === currentText.length) {
      setTimeout(() => {
        deleteEffect();
      }, 1500);
    } else {
      setTimeout(typeEffect, 100);
    }
  }

  function deleteEffect() {
    letter = currentText.slice(0, --index);
    headerText.textContent = letter;

    if (letter.length === 0) {
      count++;
      setTimeout(typeEffect, 500);
    } else {
      setTimeout(deleteEffect, 50);
    }
  }

  document.addEventListener("DOMContentLoaded", typeEffect);
  