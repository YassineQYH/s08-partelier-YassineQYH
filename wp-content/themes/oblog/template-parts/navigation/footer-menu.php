<?php
    // Affichage du menu
    $menu = wp_nav_menu([
      'theme_location' => 'footer',
      'container' => 'div',
      'menu_class' => 'list-inline',
      'echo' => false
      ]);

      
      // Je remplace ensuite ce que je ne peux pas controler directement ( les items )

      $menu = str_replace('menu-item', 'list-inline-item', $menu);
      /* $menu = str_replace('href', 'list-inline-item" href', $menu); */
      echo $menu;
  ?>

<!-- <ul class="list-inline">
      <li class="list-inline-item"><a href="/wp-content/themes/oblog/template-parts/page/contact.php">Nous contacter</a></li>
      <li class="list-inline-item"><a href="/wp-content/themes/oblog/template-parts/page/qui-sommes-nous.php">Qui sommes nous ?</a></li>
      <li class="list-inline-item"><a href="/wp-content/themes/oblog/template-parts/page/mentions-legales.php">Mentions légales</a></li>
</ul> -->