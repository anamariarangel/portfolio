<?php
/**
 * Template part for displaying portfolio content section
 *
 * @package SeuTema
 */
?>

  <section class="hero">
    <div class="container">
      <!-- LEFT COLUMN -->
      <div class="profile-section">
        <img
          src="https://portfolio.anamariarangel.com.br/wp-content/uploads/elementor/thumbs/1740060286779-r3drdysw4bxz6x9upg8f9eg287ocmj7hq18zxvxntc.webp"
          alt="Ana Maria Rangel" class="profile-photo" fetchpriority="high" />

        <h1 class="profile-name">Ana Maria Mendes Rangel</h1>
        <h2 class="profile-role" data-pt="Desenvolvedora WordPress" data-en="WordPress Developer">WordPress Developer
        </h2>
        <p>HTML | CSS | JavaScript | PHP</p>
        <p data-pt="Especialista em Elementor e JetEngine" data-en="Specialist in Elementor and JetEngine">Specialist in
          Elementor and JetEngine</p>
        <p data-pt="Graduanda em Análise e Desenvolvimento de Sistemas na Fatec."
          data-en="Undergraduate in Systems Analysis and Development at Fatec.">Undergraduate in Systems Analysis and
          Development at Fatec.</p>

        <div class="profile-contacts">
          <a href="https://github.com/anamariarangel" target="_blank" class="icon github"><i
              class="fab fa-github"></i></a>
          <a href="https://www.linkedin.com/in/souanamariarangel" target="_blank" class="icon linkedin"><i
              class="fab fa-linkedin-in"></i></a>
          <a href="https://wa.me/5516997262180" target="_blank" class="icon whatsapp"><i
              class="fab fa-whatsapp"></i></a>
          <a href="mailto:anamaria@anamariarangel.com.br" class="icon email"><i class="fas fa-envelope"></i></a>
        </div>
      </div>

      <!-- RIGHT COLUMN -->
      <div class="projects-section">
        <ul class="projects-list">
          <li>
            <button class="project-btn" onclick="openModal('tjmsp')">
              <i class="fas fa-code"></i>
              <span data-pt="Desenvolvimento WordPress Avançado" data-en="Advanced WordPress Development">Advanced
                WordPress Development</span>
            </button>
          </li>
          <li>
            <button class="project-btn" onclick="openModal('wordpress')">
              <i class="fas fa-paint-brush"></i>
              <span data-pt="Temas Personalizados WordPress" data-en="Custom WordPress Themes">Custom WordPress
                Themes</span>
            </button>
          </li>
          <li>
            <button class="project-btn" onclick="openModal('sites-dinamicos')">
              <i class="fas fa-sync-alt"></i>

              <span data-pt="Sites Dinâmicos" data-en="Dynamic Sites">Dynamic Sites</span>
            </button>
          </li>
          <li>
            <button class="project-btn" onclick="openModal('sites-institucionais')">
              <i class="fas fa-layer-group"></i>
              <span data-pt="Sites Institucionais" data-en="Institutional Sites">Institutional Sites</span>
            </button>
          </li>
          <li>
            <button class="project-btn" onclick="openModal('casos-estudo')">
              <i class="fas fa-flask"></i>
              <span data-pt="Projetos de Estudo" data-en="Study Projects">Study Projects</span>
            </button>
          </li>
        </ul>
      </div>
    </div>
  </section>