<?php 
  // Permet d'afficher le contenu du fichier header.php
  get_header();
?>

<body>

  <!-- HEADER -->
  <header>
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
      <a class="navbar-brand" href="/wp-content/themes/oblog/index.php">A la dérive</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
        aria-expanded="false" aria-label="Toggle navigation">
        Menu <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Cette partie va automatique être masquée en version mobile -->
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav ">
          <li class="nav-item">
            <a class="nav-link" href="/wp-content/themes/oblog/category.php">TeamBack</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/wp-content/themes/oblog/category.php">TeamFront</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/wp-content/themes/oblog/category.php">Collaboration</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/wp-content/themes/oblog/category.php">Ma Vie De Dev</a>
          </li>
        </ul>
      </div>
    </nav>
    <section class="text-center">
      <h1>Ma vie de dév</h1>
      <hr />
      <p>
        A la dérive
      </p>
    </section>
  </header>

  <!-- Mon container (avec une max-width) dans lequel mon contenu va être placé: https://getbootstrap.com/docs/4.1/layout/overview/#containers -->
  <div class="container">
    <!-- Je crée une nouvelle ligne dans ma grille virtuelle: https://getbootstrap.com/docs/4.1/layout/grid/-->
    <div class="row">

      <!-- Par défaut (= sur mobile) mon element <main> prend toutes les colonnes (=12)
        MAIS au dela d'une certaine taille, il n'en prendra plus que 9
        https://getbootstrap.com/docs/4.1/layout/grid/#grid-options -->
      <main class="col-lg-9">

        <!-- Je dispose une card: https://getbootstrap.com/docs/4.1/components/card/ -->
        <article class="card">
          <div class="card-body">
            <h2 class="card-title"><a href="/wp-content/themes/oblog/article.php">Ivre, il refait tous les challenges en un week-end sans dormir.</a></h2>
            <p class="card-text">Ou comment j'ai appris plein de choses en faisant une nouvelle fois tous les
              challenges que j'avais loupé.</p>
            <p class="infos">
              Posté par <a href="#" class="card-link">Anthony</a> le <time>13/07/2017</time> dans <a href="/wp-content/themes/oblog/category.php" class="card-link">#MaVieDeDev</a>
            </p>
          </div>
        </article>
        <!-- Je dispose une card: https://getbootstrap.com/docs/4.1/components/card/ -->
        <article class="card">
          <div class="card-body">
            <h2 class="card-title"><a href="/wp-content/themes/oblog/article.php">Le syndrome de la page blanche</a></h2>
            <p class="card-text">Cette frustration quand le code ne vient pas, le temps passe, la deadline approche...</p>
            <p class="infos">
              Posté par <a href="#" class="card-link">Anthony</a> le <time>06/05/2017</time> dans <a href="/wp-content/themes/oblog/category.php" class="card-link">#MaVieDeDev</a>
            </p>
          </div>
        </article>

        <!-- Je met un element de navigation: https://getbootstrap.com/docs/4.1/components/pagination/ -->
        <nav aria-label="Page navigation example" class="avec-bonus">
          <ul class="pagination justify-content-between">
            <li class="page-item"><a class="page-link" href="#"><i class="fas fa-arrow-left"></i> Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">Next <i class="fas fa-arrow-right"></i></a></li>
          </ul>
        </nav>

      </main>

      <aside class="col-lg-3">
        <!-- Champ de recherche: https://getbootstrap.com/docs/4.1/components/input-group/ -->
        <div class="avec-bonus input-group mb-3">
          <input type="text" class="form-control" placeholder="Rechercher un article..." aria-label="Rechercher un article..."
            aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button">Allez</button>
          </div>
        </div>

        <!-- Catégories: https://getbootstrap.com/docs/4.1/components/card/#list-groups-->
        <div class="card">
          <h3 class="card-header">Catégories</h3>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><a href="/wp-content/themes/oblog/category.php">TeamBack</a></li>
            <li class="list-group-item"><a href="/wp-content/themes/oblog/category.php">TeamFront</a></li>
            <li class="list-group-item"><a href="/wp-content/themes/oblog/category.php">Collaboration</a></li>
            <li class="list-group-item"><a href="/wp-content/themes/oblog/category.php">Ma Vie De Dev</a></li>
          </ul>
        </div>

        <!-- Auteurs: https://getbootstrap.com/docs/4.1/components/card/#list-groups -->
        <div class="card">
          <h3 class="card-header">Auteurs</h3>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Maxime</li>
            <li class="list-group-item">Anthony</li>
            <li class="list-group-item">Alexandre</li>
            <li class="list-group-item">Dario</li>
            <li class="list-group-item">Julie</li>
            <li class="list-group-item">Lucie</li>
            <li class="list-group-item">Xavier</li>
          </ul>
        </div>

      </aside>
    </div><!-- /.row -->



    <?php 
  // Permet d'afficher le contenu du fichier footer.php
  get_footer();
?>