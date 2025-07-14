<?php
/* Template Name: Portfolio-theme */
get_header();
?>

<body>
  <header class="site-header">
    <nav class="navbar">
      <div class="nav-links">
        <a href="#" onclick="switchLanguage(); return false;" class="nav-item" data-pt="Português"
          data-en="English">Portuguese</a>
        <span class="separator" data-pt="|" data-en="|">|</span>
        <a href="https://github.com/anamariarangel/portfolio" target="_blank" class="nav-item">
          <i class="fab fa-github"></i> <span data-pt="GitHub" data-en="GitHub">GitHub</span>
        </a>
      </div>
    </nav>
  </header>

  <section class="hero">
    <div class="container">
      <!-- LEFT COLUMN -->
      <div class="profile-section">
        <img
          src="https://portfolio.anamariarangel.com.br/wp-content/uploads/elementor/thumbs/1740060286779-r3drdysw4bxz6x9upg8f9eg287ocmj7hq18zxvxntc.webp"
          alt="Ana Maria Rangel" class="profile-photo" fetchpriority="high"  />

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

  <!-- MODALS (com conteúdo padrão em inglês e data-pt para português) -->
  <div id="modal-tjmsp" class="modal-overlay">
    <div class="modal-content">
      <span class="close" onclick="closeModal('tjmsp')" data-pt="Fechar" data-en="Close">&times;</span>
      <h3 data-pt="Projeto Extranet TJMSP" data-en="TJMSP Extranet Project">TJMSP Extranet Project</h3>
      <img src="https://portfolio.anamariarangel.com.br/wp-content/uploads/2024/12/Copy-of-Copy-of-Copy-of-Site-para-imobiliaria-e-corretores-de-imoveis-Instagram-Post-Square-1080-%C3%97-600-px.jpg"
        alt="TJMSP Extranet Project" class="project-image" />
      <p data-pt="Trata-se da renovação do portal do Tribunal de Justiça Militar do Estado de São Paulo (TJMSP). Fui contratada pela empresa Modelar Tecnologia para liderar esse projeto."
        data-en="This is the renovation of the Military Justice Court of São Paulo State (TJMSP) portal. I was hired by Modelar Tecnologia to lead this project.">
        This is the renovation of the Military Justice Court of São Paulo State (TJMSP) portal. I was hired by Modelar Tecnologia to lead this project.
      </p>

      <h4 data-pt="Requisitos do projeto:" data-en="Project Requirements:">Project Requirements:</h4>
      <ul>
        <li data-pt="Que o portal fosse construído em WordPress;" data-en="That the portal be built on WordPress;">That the portal be built on WordPress;</li>
        <li data-pt="Que fosse responsivo;" data-en="That it be responsive;">That it be responsive;</li>
        <li data-pt="Que fossem utilizadas tecnologias low-code para facilitar a escalabilidade e manutenção do portal;" data-en="That low-code technologies be used to facilitate scalability and maintenance;">That low-code technologies be used to facilitate scalability and maintenance;</li>
        <li data-pt="Que o site atendesse aos requisitos de performance: tempo de carregamento ≤ 5 segundos e suporte a 2.000 acessos simultâneos;" data-en="That the site meet performance requirements: load time ≤ 5 seconds and support 2,000 simultaneous users;">That the site meet performance requirements: load time ≤ 5 seconds and support 2,000 simultaneous users;</li>
        <li data-pt="Que atendesse às necessidades de atualização constante das informações do portal destinadas aos usuários externos, totalizando 36 categorias diferentes, alimentadas por diversas equipes;" data-en="That it meet the needs for constant information updating for external users, totaling 36 different categories maintained by various teams;">That it meet the needs for constant information updating for external users, totaling 36 different categories maintained by various teams;</li>
        <li data-pt="Que integrasse com diferentes tecnologias e sistemas (sistemas legados do tribunal, REST API, SharePoint);" data-en="That it integrates with different technologies and systems (legacy court systems, REST API, SharePoint);">That it integrates with different technologies and systems (legacy court systems, REST API, SharePoint);</li>
        <li data-pt="Que transferisse informações, posts e páginas do portal anterior para o novo;" data-en="That it transfers information, posts and pages from the previous portal to the new one;">That it transfers information, posts and pages from the previous portal to the new one;</li>
        <li data-pt="Que fosse oferecido treinamento à equipe de tecnologia do tribunal para que pudesse assumir a manutenção do portal após a entrega;" data-en="That training is provided to the court technology team to take over portal maintenance after delivery;">That training is provided to the court technology team to take over portal maintenance after delivery;</li>
        <li data-pt="Que fosse realizada a manutenção por 12 meses após a entrega." data-en="That maintenance is carried out for 12 months after delivery;">That maintenance is carried out for 12 months after delivery.</li>
      </ul>

      <h4 data-pt="Minhas responsabilidades:" data-en="My Responsibilities:">My Responsibilities:</h4>
      <p data-pt="Atuei em todas as etapas do projeto: desde o levantamento de requisitos funcionais e não funcionais, passando pelo projeto da arquitetura do sistema, desenvolvimento, transferência de conteúdos do portal anterior, testes, deploy, manutenção e entrega final."
        data-en="I worked on all project stages: gathering functional and non-functional requirements, system architecture design, development, transferring contents from the previous portal, testing, deployment, maintenance and final delivery.">
        I worked on all project stages: gathering functional and non-functional requirements, system architecture design, development, transferring contents from the previous portal, testing, deployment, maintenance and final delivery.
      </p>

      <p data-pt="Para atender à necessidade de atualização de conteúdo por múltiplos times, criei custom post types específicos por área, totalizando 13 tipos personalizados com controle de acesso. O carrossel da home é dinâmico, assim como os menus suspensos, com áreas estratégicas de cadastro e gerenciamento de conteúdo. Isso possibilita que a equipe de comunicação mantenha o portal atualizado sem a necessidade de alterar a estrutura da página."
        data-en="To meet the need for content updating by multiple teams, I created custom post types specific to each area, totaling 13 personalized types with access control. The home carousel is dynamic, as are the dropdown menus, with strategic areas for content registration and management. This allows the communication team to keep the portal updated without changing the page structure.">
        To meet the need for content updating by multiple teams, I created custom post types specific to each area, totaling 13 personalized types with access control. The home carousel is dynamic, as are the dropdown menus, with strategic areas for content registration and management. This allows the communication team to keep the portal updated without changing the page structure.
      </p>

      <p data-pt="As cerca de 40 páginas dinâmicas foram construídas com filtros personalizados de acordo com os critérios de cada área, proporcionando fácil acesso à informação e cumprindo os requisitos legais."
        data-en="About 40 dynamic pages were built with custom filters according to each area's criteria, providing easy access to information and complying with legal requirements.">
        About 40 dynamic pages were built with custom filters according to each area's criteria, providing easy access to information and complying with legal requirements.
      </p>

      <p data-pt="Para garantir a entrega de funcionalidades específicas com uso de ferramentas low-code, utilizei técnicas de customização avançada, incluindo a criação de custom plugins. Um exemplo é o calendário da página Audiências e Sessões de Julgamento, desenvolvido com um custom plugin que integra APIs externas e a REST API do próprio WordPress, atendendo tanto aos requisitos de design quanto de funcionalidade."
        data-en="To ensure delivery of specific features using low-code tools, I used advanced customization techniques, including creating custom plugins. An example is the calendar on the Hearings and Judgment Sessions page, developed with a custom plugin that integrates external APIs and WordPress's own REST API, meeting both design and functionality requirements.">
        To ensure delivery of specific features using low-code tools, I used advanced customization techniques, including creating custom plugins. 
        An example is the calendar on the Hearings and Judgment Sessions page:
        
        <div>
          <img src="https://portfolio.anamariarangel.com.br/wp-content/uploads/2025/07/calendar.jpg" alt="calendar">
          <img src="https://portfolio.anamariarangel.com.br/wp-content/uploads/2025/07/popupcalendar.jpg" alt="popupcalendar">
        </div>
        
       🔗 <a href="https://www.tjmsp.jus.br/audiencias-e-sessoes-de-julgamento/" target="_blank" data-pt="Audiências e Sessões de Julgamento" data-en="Hearings and Judgment Sessions">Hearings and Judgment Sessions </a>
      </p>

      <p data-pt="Você pode encontrar códigos semelhantes aos utilizados nestas soluções neste repositório:"
        data-en="You can find similar codes used in these solutions in this repository:">You can find similar codes used in these solutions in this repository:</p>
      <p>
        🔗 <a href="https://github.com/anamariarangel/jet-engine-advanced-customization/tree/main/calendar-advanced-customization" target="_blank" data-pt="GitHub – JetEngine Advanced Customization" data-en="GitHub – JetEngine Advanced Customization">
          GitHub – JetEngine Advanced Customization
        </a>
      </p>

      <p data-pt="Participei também do deployment do portal e prestei suporte contínuo ao tribunal durante 12 meses após a entrega, incluindo manutenção e treinamentos para as equipes técnica e de comunicação."
        data-en="I also participated in the portal deployment and provided continuous support to the court for 12 months after delivery, including maintenance and training for the technical and communication teams.">
        I also participated in the portal deployment and provided continuous support to the court for 12 months after delivery, including maintenance and training for the technical and communication teams.
      </p>

      <p data-pt="Confira o resultado final em:" data-en="Check out the final result at:">
        Check out the final result at:
      </p>
      <p>
        🔗 <a href="https://www.tjmsp.jus.br" target="_blank" data-pt="tjmsp.jus.br" data-en="tjmsp.jus.br">tjmsp.jus.br</a>
      </p>
    </div>
  </div>


  <div id="modal-wordpress" class="modal-overlay">
    <div class="modal-content">
      <span class="close" onclick="closeModal('wordpress')" data-pt="Fechar" data-en="Close">&times;</span>
      <h3 data-pt="Projetos Desenvolvidos em WordPress" data-en="WordPress Developed Projects">WordPress Developed
        Projects</h3>

      <p data-pt="Estes são projetos de estudo onde criei temas do zero, praticando conceitos essenciais do WordPress, como hooks (ações e filtros), hierarquia de templates, além de conceitos avançados como custom post types, taxonomias personalizadas e desenvolvimento de plugins. O objetivo foi aprofundar o entendimento da arquitetura do WordPress e desenvolver temas funcionais e customizados."
        data-en="These are study projects where I created themes from scratch, practicing essential WordPress concepts like hooks (actions and filters), template hierarchy, as well as advanced concepts like custom post types, custom taxonomies and plugin development. The goal was to deepen my understanding of WordPress architecture and develop functional, customized themes.">
        These are study projects where I created themes from scratch, practicing essential WordPress concepts like hooks
        (actions and filters), template hierarchy, as well as advanced concepts like custom post types, custom
        taxonomies and plugin development. The goal was to deepen my understanding of WordPress architecture and develop
        functional, customized themes.
      </p>

      <div class="modal-gallery">
        <div class="project">
          <h4 data-pt="Play Theme" data-en="Play Theme">Play Theme</h4>
          <a href="https://github.com/anamariarangel/playtheme" target="_blank" rel="noopener noreferrer">
            <img src="https://portfolio.anamariarangel.com.br/wp-content/uploads/2024/10/4.png" alt="Play Theme"
              data-pt="Play Theme" data-en="Play Theme">
          </a>
          <p>
           🔗 <a href="https://github.com/anamariarangel/playtheme" target="_blank" rel="noopener noreferrer"
              data-pt="Ver no GitHub" data-en="View on GitHub">View on GitHub</a>
          </p>
          <p>
           🔗 <a href="https://playtheme.anamariarangel.com.br" target="_blank" rel="noopener noreferrer"
              data-pt="Visite o site" data-en="Visit website">Visit website</a>
          </p>
        </div>

        <div class="project">
          <h4 data-pt="Tarot Theme" data-en="Tarot Theme">Tarot Theme</h4>
          <a href="https://github.com/anamariarangel/tarotheme" target="_blank" rel="noopener noreferrer">
            <img src="https://portfolio.anamariarangel.com.br/wp-content/uploads/2024/10/14.png" alt="Tarot Theme"
              data-pt="Tarot Theme" data-en="Tarot Theme">
          </a>
          <p>
          🔗  <a href="https://github.com/anamariarangel/tarotheme" target="_blank" rel="noopener noreferrer"
              data-pt="Ver no GitHub" data-en="View on GitHub">View on GitHub</a>
          </p>
          <p>
          🔗  <a href="https://tarotheme.anamariarangel.com.br" target="_blank" rel="noopener noreferrer"
              data-pt="Visite o site" data-en="Visit website">Visit website</a>
          </p>
        </div>

        <div class="project">
          <h4 data-pt="Meu Portfolio" data-en="My Portfolio">My Portfolio</h4>
          <a href="https://portfolio.anamariarangel.com.br" target="_blank" rel="noopener noreferrer">
            <img src="https://portfolio.anamariarangel.com.br/wp-content/uploads/2025/07/Design-sem-nome-11.png" alt="Tarot Theme"
              data-pt="Meu Portfolio" data-en="My Portfolio">
          </a>
        <p data-pt="Tema-filho para o tema Twenty Twenty-Three, desenvolvido para este portfólio. Site bilígue contruído com HTML semântico, CSS e Javascript."
  data-en="Child theme for Twenty Twenty-Three theme, developed for this portfolio. Bilingual site built with semantic HTML, CSS and Javascript.">
  Child theme for Twenty Twenty-Three theme, developed for this portfolio. Bilingual site built with semantic HTML, CSS and Javascript.
</p>
          <p>
          🔗  <a href="https://github.com/anamariarangel/portfolio" target="_blank" rel="noopener noreferrer"
              data-pt="Ver no GitHub" data-en="View on GitHub">View on GitHub</a>
          </p>
         
        </div>
      </div>
    </div>
  </div>


  <div id="modal-sites-dinamicos" class="modal-overlay">
    <div class="modal-content">
      <span class="close" onclick="closeModal('sites-dinamicos')" data-pt="Fechar" data-en="Close">&times;</span>
      <h3 data-pt="Sites Dinâmicos" data-en="Dynamic Sites">Dynamic Sites</h3>

      <p data-pt="Sites dinâmicos criados para permitir o cadastramento de conteúdo no backend com uso de custom post types e taxonomias personalizadas, além de oferecer filtros avançados e exibição de resultados no frontend. Esses projetos possibilitam gerenciamento completo dos dados e uma experiência interativa para os usuários."
        data-en="Dynamic sites created to allow content registration in the backend using custom post types and custom taxonomies, while also offering advanced filters and frontend results display. These projects enable complete data management and an interactive experience for users.">
        Dynamic sites created to allow content registration in the backend using custom post types and custom
        taxonomies, while also offering advanced filters and frontend results display. These projects enable complete
        data management and an interactive experience for users.
      </p>

      <div class="modal-gallery">
        <div class="project">
          <h4 data-pt="Todxs Consultoria" data-en="Todxs Consultancy">Todxs Consultancy</h4>
          <a href="https://todxsconsultoria.com.br/" target="_blank" rel="noopener noreferrer">
            <img src="https://portfolio.anamariarangel.com.br/wp-content/uploads/2025/03/1.png" alt="Todxs Consultoria"
              data-pt="Todxs Consultoria" data-en="Todxs Consultancy">
          </a>
        🔗  <p><a href="https://todxsconsultoria.com.br/" target="_blank" rel="noopener noreferrer" data-pt="Visitar site"
              data-en="Visit website">Visit website</a></p>
        </div>

        <div class="project">
          <h4 data-pt="Duo House Imóveis" data-en="Duo House Real Estate">Duo House Real Estate</h4>
          <a href="https://duohouseimoveis.com.br/" target="_blank" rel="noopener noreferrer">
            <img
              src="https://portfolio.anamariarangel.com.br/wp-content/uploads/2024/10/Copy-of-Copy-of-Copy-of-Site-para-imobiliaria-e-corretores-de-imoveis-Instagram-Post-Square-1080-%C3%97-600-px-1.png"
              alt="Duo House Imóveis" data-pt="Duo House Imóveis" data-en="Duo House Real Estate">
          </a>
          <p><a href="https://duohouseimoveis.com.br/" target="_blank" rel="noopener noreferrer" data-pt="Visitar site"
          🔗    data-en="Visit website">Visit website</a></p>
        </div>

        <div class="project">
          <h4 data-pt="Imobup Empreendimentos" data-en="Imobup Ventures">Imobup Ventures</h4>
          <a href="https://imobupempreendimentos.com.br/" target="_blank" rel="noopener noreferrer">
            <img src="https://portfolio.anamariarangel.com.br/wp-content/uploads/2024/10/6.png"
              alt="Imobup Empreendimentos" data-pt="Imobup Empreendimentos" data-en="Imobup Ventures">
          </a>
          <p><a href="https://imobupempreendimentos.com.br/" target="_blank" rel="noopener noreferrer"
          🔗    data-pt="Visitar site" data-en="Visit website">Visit website</a></p>
        </div>

        <div class="project">
          <h4 data-pt="Pergunta Uai" data-en="Pergunta Uai">Pergunta Uai</h4>
          <a href="https://perguntauai.com.br/" target="_blank" rel="noopener noreferrer">
            <img src="https://portfolio.anamariarangel.com.br/wp-content/uploads/2025/03/2.png" alt="Pergunta Uai"
              data-pt="Pergunta Uai" data-en="Pergunta Uai">
          </a>
          <p><a href="https://perguntauai.com.br/" target="_blank" rel="noopener noreferrer" data-pt="Visitar site"
          🔗    data-en="Visit website">Visit website</a></p>
        </div>
      </div>
    </div>
  </div>

  <div id="modal-sites-institucionais" class="modal-overlay">
    <div class="modal-content">
      <span class="close" onclick="closeModal('sites-institucionais')" data-pt="Fechar" data-en="Close">&times;</span>
      <h3 data-pt="Sites Institucionais" data-en="Institutional Sites">Institutional Sites</h3>

      <p data-pt="Sites institucionais desenvolvidos em Elementor, com design personalizado, foco na experiência do usuário, comunicação clara e responsividade. Os projetos contam com cuidado especial para SEO e performance, garantindo rápida velocidade de carregamento e melhor posicionamento nos motores de busca. Pensados para reforçar a presença digital corporativa e facilitar o contato com clientes e parceiros."
        data-en="Institutional sites developed with Elementor, featuring custom design, focus on user experience, clear communication and responsiveness. The projects include special attention to SEO and performance, ensuring fast loading speed and better search engine ranking. Designed to reinforce corporate digital presence and facilitate contact with clients and partners.">
        Institutional sites developed with Elementor, featuring custom design, focus on user experience, clear
        communication and responsiveness. The projects include special attention to SEO and performance, ensuring fast
        loading speed and better search engine ranking. Designed to reinforce corporate digital presence and facilitate
        contact with clients and partners.
      </p>

      <div class="modal-gallery">
        <div class="project">
          <h4 data-pt="Ana Lucia Mendes Advogada" data-en="Ana Lucia Mendes Lawyer">Ana Lucia Mendes Lawyer</h4>
          <a href="https://analuciamendes.adv.br/" target="_blank" rel="noopener noreferrer">
            <img src="https://portfolio.anamariarangel.com.br/wp-content/uploads/2024/10/12.png"
              alt="Ana Lucia Mendes Advogada" data-pt="Ana Lucia Mendes Advogada" data-en="Ana Lucia Mendes Lawyer">
          </a>
          <p><a href="https://analuciamendes.adv.br/" target="_blank" rel="noopener noreferrer" data-pt="Visitar site"
          🔗    data-en="Visit website">Visit website</a></p>
        </div>

        <div class="project">
          <h4 data-pt="Paper One Papéis" data-en="Paper One Papers">Paper One Papers</h4>
          <a href="https://paperonepapeis.com.br/" target="_blank" rel="noopener noreferrer">
            <img src="https://portfolio.anamariarangel.com.br/wp-content/uploads/2024/10/12.png" alt="Paper One Papéis"
              data-pt="Paper One Papéis" data-en="Paper One Papers">
          </a>
          <p><a href="https://paperonepapeis.com.br/" target="_blank" rel="noopener noreferrer" data-pt="Visitar site"
          🔗    data-en="Visit website">Visit website</a></p>
        </div>
      </div>
    </div>
  </div>

  <div id="modal-casos-estudo" class="modal-overlay">
    <div class="modal-content">
      <span class="close" onclick="closeModal('casos-estudo')" data-pt="Fechar" data-en="Close">&times;</span>
      <h3 data-pt="Casos de Estudo" data-en="Case Studies">Case Studies</h3>

      <p data-pt="Projetos desenvolvidos como parte de cursos e certificações, com foco em aprofundamento técnico e boas práticas. Cada estudo de caso foi elaborado para explorar uma stack ou tecnologia específica, sendo exercícios aplicados em contextos reais de desenvolvimento front-end e fullstack."
        data-en="Projects developed as part of courses and certifications, focusing on technical depth and best practices. Each case study was designed to explore a specific stack or technology, being applied exercises in real-world front-end and fullstack development contexts.">
        Projects developed as part of courses and certifications, focusing on technical depth and best practices. Each
        case study was designed to explore a specific stack or technology, being applied exercises in real-world
        front-end and fullstack development contexts.
      </p>

      <div class="modal-gallery">
        <div class="project">
          <h4 data-pt="Natours" data-en="Natours">Natours</h4>
          <a href="https://anamariarangel.github.io/Natours/" target="_blank" rel="noopener noreferrer">
            <img src="https://portfolio.anamariarangel.com.br/wp-content/uploads/2024/10/2.png" alt="Natours"
              data-pt="Natours" data-en="Natours">
          </a>
          <p data-pt="Projeto de estudo realizado durante um curso de CSS e SASS avançado. Foco em layout responsivo, animações e design moderno, com organização modular dos estilos e uso eficiente de variáveis e mixins com SASS."
            data-en="Study project completed during an advanced CSS and SASS course. Focus on responsive layout, animations and modern design, with modular style organization and efficient use of variables and mixins with SASS.">
            Study project completed during an advanced CSS and SASS course. Focus on responsive layout, animations and
            modern design, with modular style organization and efficient use of variables and mixins with SASS.
          </p>
          <p>
            <a href="https://github.com/anamariarangel/natours/" target="_blank" rel="noopener noreferrer"
              data-pt="Ver código no GitHub" data-en="View code on GitHub">View code on GitHub</a> |
          🔗  <a href="https://anamariarangel.github.io/Natours/" target="_blank" rel="noopener noreferrer"
              data-pt="Visualizar site" data-en="View website">View website</a>
          </p>
        </div>

        <div class="project">
          <h4 data-pt="Travel Recommendation" data-en="Travel Recommendation">Travel Recommendation</h4>
          <a href="https://anamariarangel.github.io/travel_recommendation/" target="_blank" rel="noopener noreferrer">
            <img src="https://portfolio.anamariarangel.com.br/wp-content/uploads/2025/07/travel_recommendation.jpg"
              alt="Travel Recommendation" data-pt="Travel Recommendation" data-en="Travel Recommendation">
          </a>
          <p data-pt="Projeto realizado como parte do estudo para a Certificação de Desenvolvedor JavaScript Fullstack da IBM. Simula um sistema de busca e recomendação de destinos, utilizando HTML, CSS, JavaScript, Axios e manipulação de dados JSON."
            data-en="Project completed as part of study for IBM's Fullstack JavaScript Developer Certification. Simulates a destination search and recommendation system, using HTML, CSS, JavaScript, Axios and JSON data manipulation.">
            Project completed as part of study for IBM's Fullstack JavaScript Developer Certification. Simulates a
            destination search and recommendation system, using HTML, CSS, JavaScript, Axios and JSON data manipulation.
          </p>
          <p>
          🔗  <a href="https://anamariarangel.github.io/travel_recommendation/" target="_blank" rel="noopener noreferrer"
              data-pt="Visualizar site" data-en="View website">View website</a>
          </p>
        </div>
      </div>
      
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 </body>

</html>

<?php
get_footer();
?>
