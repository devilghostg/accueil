<!DOCTYPE html>
<html lang="fr">
<head>
  <title>Portfolio</title>
  <link rel="icon" href="img/icons8-f-100.png">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
  <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="../index.html">Boyer Dorian</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="../index.php">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="">PortFolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../contact.php">Contact</a>
          </li>
          <li class="nav-item">
            <div class="dropdown">
              <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Téléchargement
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" target="_blank" href="../document/BOYER DORIAN.pdf">Mon CV</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <header onclick="changeColor()">
    <div class="container">
      <h1>Développeur Web</h1>
      <h2>BOYER Dorian</h2>
      <p class="age">Âge : 22 ans</p>
    </div>
  </header>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-4">
        <div class="profile text-center">
          <img src="img/profil.png" alt="Photo de profil">
        </div>
      </div>
      <div class="contact">
        <h3>Contact</h3>
        <ul>
          <li><i class="fas fa-phone"></i> 07 82 49 03 77</li>
          <li><i class="fas fa-envelope"></i> boyer.dorian974@gmail.com</li>
          <li><i class="fas fa-map-marker-alt"></i> 30 rue Brissonnet, Troyes 10000</li>
          <li><i class="fas fa-clock"></i> Distanciel / Présentiel</li>
        </ul>
      </div>
      <div class="col-md-8 liste">
        <div class="experiences">
          <h3>Expériences</h3>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Titre Professionnel développeur Web et Web mobile - Greta Sud champagne</li>
            <li class="list-group-item">Employé boulangerie Leclerc 2022</li>
            <li class="list-group-item">Papernest 2022</li>
            <li class="list-group-item">Licence Informatique 2021-2022</li>
            <li class="list-group-item">Licence Histoire lettre 2020-2021</li>
            <li class="list-group-item">BTS MS 2019-2020 (Stage Boulangerie YONG)</li>
            <li class="list-group-item">BTS MS 2018-2019 (Stage Kiloutou)</li>
            <li class="list-group-item">BAC PRO SEN 2017-2018 (Stage Technicien à DBAUX)</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row" id="colonne">
      <div class="col-md-6" id="reseau">
        <div class="competences">
          <h3>Compétences</h3>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Création Web Design</li>
            <li class="list-group-item">Création de site</li>
            <li class="list-group-item">Conseiller clientèle</li>
            <li class="list-group-item">Utilisation HTML/CSS/Bootsrtap/JavaScript<br/>/JQuery/PHP/MySQL</li>
          </ul>
        </div>
        <div class="social-icons">
          <h3>Réseaux sociaux</h3>
          <a href="https://www.linkedin.com/in/dorian-boyer-736003203/" target="_blank" class="d-flex justify-content-center align-items-center"><i class="fab fa-linkedin "></i> LinkedIn</a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="hobbies">
          <h3>Hobbies</h3>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Photographie</li>
            <li class="list-group-item">Camping</li>
            <li class="list-group-item">Dessin</li>
            <li class="list-group-item">Stream</li>
            <li class="list-group-item">Jeux</li>
            <li class="list-group-item">Astronomie</li>
            <li class="list-group-item">Technologie</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="accordion accordion-flush" id="accordionFlushExample">
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
            Projet Design
          </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><a target="_blank" href="https://www.figma.com/proto/Y2eqzXnBqC2AQQ4j82siEw/maquette-SandLand?page-id=0%3A1&type=design&node-id=38-11&viewport=576%2C220%2C0.06&scaling=min-zoom&starting-point-node-id=38%3A11&show-proto-sidebar=1">Prototype d'une maquette Restaurant</a></li>
            <li class="list-group-item"><a target="_blank" href="https://www.figma.com/proto/Y2eqzXnBqC2AQQ4j82siEw/maquette-SandLand?page-id=0%3A1&type=design&node-id=93-29&viewport=576%2C220%2C0.06&scaling=scale-down&starting-point-node-id=93%3A29&show-proto-sidebar=1">Prototype responsive Mobile</a></li>
            <li class="list-group-item"><a target="_blank" href="maquette/maquette SandLand.pdf">Maquette format PDF</a></li>
            <li class="list-group-item"><a target="_blank" href="maquette/maquette_SandLand_repsonsive.pdf">Maquette format PDF responsive</a></li>
            <li class="list-group-item"><a target="_blank" href="https://www.figma.com/proto/flxp9AtU3aoI3vzZNP9bIn/Application-native-SandLAnd?page-id=0%3A1&type=design&node-id=8-5&viewport=391%2C349%2C0.27&scaling=scale-down&starting-point-node-id=8%3A5&show-proto-sidebar=1">Application mobile Prototype</a></li>
            <li class="list-group-item"><a href="maquette/Application native SandLAnd.pdf">Application format PDF</a></li>
          </ul>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
            Site réalisé (dans la formation)
          </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><a target="_blank" href="https://formation-greta.netlify.app/">formation du Greta Developpeur Web et web mobile</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer">
    <div class="container">
      <p>&copy; 2023 Dorian Boyer. Tous droits réservés.</p>
    </div>
  </footer>
</body>
</html>
