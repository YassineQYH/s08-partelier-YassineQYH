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

  <title>Mentions légales</title>
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
            <h2 class="card-title">Mentions légales</h2>
            <p class="infos">
              Posté par <a href="#" class="card-link">Anthony</a> le <time>26/07/2018</time>
            </p>
            <p class="card-text">
            
              <h3>Editeur et responsable de publication</h3>

              <p>Maxime O'clock : hey(AT)oblog.oclock.io</p>

              <p>Ce blog est édité, à titre personnel, par les étudiants et les professeurs de l'école O'clock</p>

              <h3>Hébergement</h3>

              <p>Ce blog est hébergé par la société LeGrasCestLaVie, 50 rue Bidoche – 35200 Rennes – France.</p>

              <p>Cet hébergeur détient à ce jour les informations personnelles concernant l'auteur de ce site.</p>

              <h3>Données personnelles des utilisateurs</h3>

              <p>Les données personnelles collectées par oblog.oclock.io sont uniquement destinées à un usage interne.</p>

              <p>Lorsque vous postez un commentaire sur ce site, vous devez fournir votre nom (ou votre pseudo) ainsi que votre adresse e-mail. Si vous le désirez, vous pouvez également vous identifier à l'aide de votre compte Twitter ou Facebook. Ces informations sont stockées dans une base de données appartenant à la société DataIsMoney. Votre adresse de courrier électronique ne sera jamais affichée sur le blog sans votre accord. Votre adresse IP est également enregistrée, mais ne sera jamais affichée, exploitée ou communiquée. Sauf dans le cas d'une réquisition par la justice. Conformément à l'article 39 de la loi du 6 janvier 1978 relative à l'informatique, aux fichiers et aux libertés, vous avez un droit d'accès, de modification et d'opposition sur vos données personnelles enregistrées par le blog. Utilisez pour cela le formulaire de contact.</p>

              <h3>Modération des commentaires</h3>

              <p>Les commentaires de oblog.oclock.io sont modérés à postériori. Ils reflètent uniquement l'avis de leurs auteurs.</p>

              <p>Tout commentaire à caractère injurieux, diffamatoire, xénophobe, raciste, antisémite, pornographique, révisionniste, homophobe, sexiste, d'incitation à la haine, à la violence ou en général tout sujet contraire à la loi et aux valeurs humanistes n'est pas accepté.</p>

              <p>L'administrateur du site se réserve le droit de supprimer sans avertissement tout commentaire dérogeant à cette règle.</p>

              <h3>Droits de reproduction</h3>

              <p>La reproduction de tout ou partie du contenu de ce blog est interdite sans la permission écrite de l'auteur (sauf mention particulière). Tout autre matériel contenu sur ce site (photos, textes, images, codes source, logos, noms de produits ou marques citées, etc.), est la propriété de leurs détenteurs respectifs.</p>

              <p>Les différentes illustrations et photographies publiées sur ce site sont systématiquement accompagnées de leurs crédits lorsque ces derniers sont connus. Si vous êtes l'auteur de l'une d'entre elles et qu'aucune mention ne le précise, n'hésitez pas à nous contacter. Suivant votre décision, nous ajouterons les mentions adéquates ou nous retirerons l'illustration ou la photographie incriminée.</p>

              <h3>Crédits</h3>

              <p>oblog.oclock.io utilise la plateforme de blogs WordPress.</p>

              <p>Design réalisé par Maxime O'clock.</p>
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