<?php
/* Template Name: Portfolio-theme */
get_header();
?>

<body>
  <header class="site-header">
    <nav class="navbar">
      <div class="nav-links">
        <a href="#" onclick="switchLanguage(); return false;" class="nav-item" data-pt="Português" data-en="English">Portuguese</a>
        <span class="separator" data-pt="|" data-en="|">|</span>
        <a href="https://github.com/anamariarangel/portfolio" target="_blank" class="nav-item">
          <i class="fab fa-github"></i> <span data-pt="GitHub" data-en="GitHub">GitHub</span>
        </a>
      </div>
    </nav>
  </header>

  <?php get_template_part('template-parts/portfolio-content'); ?>
  <?php get_template_part('template-parts/modals/modal-tjmsp'); ?>
  <?php get_template_part('template-parts/modals/modal-wordpress'); ?>
  <?php get_template_part('template-parts/modals/modal-sites-dinamicos'); ?>
  <?php get_template_part('template-parts/modals/modal-sites-institucionais'); ?>
  <?php get_template_part('template-parts/modals/modal-casos-estudo'); ?>

</body>
</html>

<?php
get_footer();
?>