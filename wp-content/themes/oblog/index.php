<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Déclaration de notre font -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,800" rel="stylesheet">

  <!-- -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">
  <!-- Ma feuille de style pour mon blog -->
  <link rel="stylesheet" href="/wp-content/themes/oblog/assets/css/blog.css">

  <title>A la dérive, le blog</title>
</head>

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
      <a class="navbar-brand" href="index.php">A la dérive</a>
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
      <h1>A la dérive</h1>
      <hr />
      <p>
        Un blog collaboratif de développeurs web dérivant délibérément au milieu de l'espace
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
            <h2 class="card-title"><a href="/wp-content/themes/oblog/article.php">POO or not POO, that is the question.</a></h2>
            <p class="card-text">La POO est-elle vraiment indispensable pour une architecture solide ? Etude de cas
              avec PHP.</p>
            <p class="infos">
              Posté par <a href="#" class="card-link">Maxime</a> le <time>04/07/2017</time> dans <a href="/wp-content/themes/oblog/category.php" class="card-link">#TeamBack</a>
            </p>
          </div>
        </article>
        <!-- Je dispose une card: https://getbootstrap.com/docs/4.1/components/card/ -->
        <article class="card">
          <div class="card-body">
            <h2 class="card-title"><a href="/wp-content/themes/oblog/article.php">Git, pour les n00bs.</a></h2>
            <p class="card-text">Un p'tit récap rapide pour tout ceux qui, comme moi, ont galéré sur ce magnifique
              outil de versionning.</p>
            <p class="infos">
              Posté par <a href="#" class="card-link">Lucie</a> le <time>19/06/2017</time> dans <a href="/wp-content/themes/oblog/category.php" class="card-link">#Collaboration</a>
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


    <footer>

      <!-- Je crée une nouvelle ligne dans ma grille virtuelle: https://getbootstrap.com/docs/4.1/layout/grid/
                Je déclare également que ces elements doivent être centré (flex): https://getbootstrap.com/docs/4.1/utilities/flex/#justify-content
                ainsi que leur textes: https://getbootstrap.com/docs/4.1/utilities/text/#text-alignment -->
      <div class="row justify-content-center text-center">
        <div class="col-6 social-networks">
          <!-- Je créé une liste: https://getbootstrap.com/docs/4.1/components/list-group/ -->
          <ul class="list-inline">
            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter-square"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-square"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-github-square"></i></a></li>
          </ul>
        </div>
      </div>

      <!-- Je crée une nouvelle ligne dans ma grille virtuelle: https://getbootstrap.com/docs/4.1/layout/grid/
                Je déclare également que ces elements doivent être centré (flex): https://getbootstrap.com/docs/4.1/utilities/flex/#justify-content
                ainsi que leur textes: https://getbootstrap.com/docs/4.1/utilities/text/#text-alignment -->
      <div class="row justify-content-center text-center">
        <div class="col-9 links">
          <!-- Je créé une liste: https://getbootstrap.com/docs/4.1/components/list-group/ -->
          <ul class="list-inline">
            <li class="list-inline-item"><a href="/wp-content/themes/oblog/contact.php">Nous contacter</a></li>
            <li class="list-inline-item"><a href="/wp-content/themes/oblog/qui-sommes-nous.php">Qui sommes nous ?</a></li>
            <li class="list-inline-item"><a href="/wp-content/themes/oblog/mentions-legales.php">Mentions légales</a></li>
          </ul>
        </div>
      </div>

    </footer>

  </div> <!-- /.container -->
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>
</body>

</html>