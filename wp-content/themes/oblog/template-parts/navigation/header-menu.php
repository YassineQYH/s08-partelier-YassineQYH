<?php
    // Affichage du menu
    $menu = wp_nav_menu([
      'theme_location' => 'header',
      'container' => 'div',
      'menu_class' => 'list-inline',
      'echo' => false
      ]);

      
      // Je remplace ensuite ce que je ne peux pas controler directement ( les items )

      $menu = str_replace('menu-item', 'list-inline-item', $menu);
      /* $menu = str_replace('href', 'list-inline-item" href', $menu); */
      echo $menu;
  ?>


    <!-- NAV -->
    <nav class="navbar navbar-expand-md navbar-light">
      <!--
        Nous sommes en mobile first : par défaut notre menu est masqué !
        Je souhaite qu'il s'affiche au dela (= à partir de) d'une certainne largeur.
        navbar-expand-xxx permet d'afficher le menu en entier.
        xxx correspond à une taille (media-query) définie dans Bootstrap.
          sm => 576px
          md => 768px
          lg => 992px
          xl => 1200px
        -->
      <a class="navbar-brand" href="<?= get_home_url() ?>">A la dérive</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
        aria-expanded="false" aria-label="Toggle navigation">
        Menu <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Cette partie va automatique être masquée en version mobile -->
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav ">
          <li class="nav-item">
            <a class="nav-link" href="<?= get_template_directory_uri() ?>/category.php">TeamBack</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= get_template_directory_uri() ?>/category.php">TeamFront</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= get_template_directory_uri() ?>/category.php">Collaboration</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= get_template_directory_uri() ?>/category.php">Ma Vie De Dev</a>
          </li>
        </ul>
      </div>
    </nav>