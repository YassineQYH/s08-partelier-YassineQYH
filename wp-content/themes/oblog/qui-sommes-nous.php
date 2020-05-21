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
  <link rel="stylesheet" href="/wp-content/themes/oblog/assets/css/style.css">

  <title>Qui sommes nous ?</title>
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
      <main class="col-lg-12">

        <!-- Je dispose une card: https://getbootstrap.com/docs/4.1/components/card/ -->
        <article class="card">
          <div class="card-body">
            <h2 class="card-title">Qui sommes nous ?</h2>
            <p class="infos">
              Posté par <a href="#" class="card-link">Anthony</a> le <time>26/07/2018</time>
            </p>
            <p class="card-text">

              <h3>Une équipe mi-fruit mi-brique</h3>

              <p>
                <strong>O’clock, c’est une école composée de quatre briques</strong><br>

                Quatre briques fondatrices : Dario, Lucie, Maxime et Anthony.<br>

                Enfin, pas vraiment des briques puisque O’clock est une école sans murs. Donc ici, on parle de briques
                virtuelles. Des briques symboliques, vous voyez ?<br>

                Bon, on va prendre une autre phrase. D’autant plus que c’est pas top de se comparer à des briques.
                C’est solide, c’est sûr, mais question finesse d’esprit, on repassera.
              </p>

              <p>
                <strong>Non, O’clock, c’est le fruit de quatre personnes !</strong><br>

                Et ça, ça parle à tout le monde car tout le monde aime les fruits. Sauf que les plus pointilleux auront noté que quatre personnes ne peuvent pas faire un fruit. D’ailleurs, ni quatre, ni une. C’est biologique : aucun être humain ne peut faire un fruit. Ce serait plutôt des arbres ou des buissons fruitiers qui font des fruits.<br>
                  
                Mais si on dit que O’clock est le fruit de quatre buissons fruitiers, vous n’allez absolument rien comprendre. Donc, on va laisser tomber l’idée du fruit. Ça partait bien, mais c’est trop compliqué.
              </p>

              <h3>Des étudiants mi-heureux mi-extrement fatigués</h3>

              <p>
                Et oui, que ce soit en 3 ou 5 mois, la formation O'clock est hyper intense.<br>

                Résultat, la fatigue se fait rapidement sentir mais elle est contrebalancée par la joie d'avancer, d'apprendre et de concrétiser le tout dans des projets complexes.<br>

                Pour partager leurs émotions, il y a bien sûr le channel #kiemtao, mais il y a aussi ce blog "A la dérive".
              </p>

              </div>

            </p>
          </div>
        </article>

      </main>
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