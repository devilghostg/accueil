<?php
    // envoyer au server 
    ini_set("SMTP","mail.db.razmodev.com");
    ini_set("smtp_port","465");
    
 /*   function message(){
    echo '<p class="bg bg-warning rounded p-2 text-center">Message bien envoyer</p>';
}*/


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Vérifier si les champs sont vides
    if (empty($nom) || empty($email) || empty($message)) {
        echo "Veuillez remplir tous les champs.";
    } else {
        // Adresse email où sera envoyé le message
        $destinataire = "dorian.boyer.pro@db.razmodev.com";

        // Sujet du message
        $sujet = "Nouveau message de contact";

        // Construire le corps du message
        $contenu = "<html><body>";
        $contenu .= "<p>Nom : $nom</p>";
        $contenu .= "<p>Email : $email</p>";
        $contenu .= "<p>Message : $message</p>";
        $contenu .= "</body></html>";


        // En-têtes du message
        $headers = "From: $nom <$email>";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";


        // Envoyer l'email
        if (mail($destinataire, $sujet, $contenu, $headers)) {
            // echo '<script>alert("Message envoyer avec succés")</script>';
            header( "refresh:2;url=index.php" );
                $message = '<p class="bg bg-warning rounded p-2 text-center">Message bien envoyer</p>';
                echo $message;
                 //message();
           // echo '<script>alert("Message envoyé")</script>';
            
        } else {
            echo '<script>alert("Erreur")</script>';
            
        }
    }
}
?>






<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <!-- bootstrap  -->
    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- jquery  -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <!-- fichier css  -->
    <link rel="stylesheet" href="contact/style.css">
    <!-- mon fichier js  -->
    <script src="contact/script.js"></script>
    <link rel="icon" href="img/icons8-carte-contact-100.png">
    <!-- link google maps  -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
    <title>Contact</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Boyer Dorian</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.php">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="portfolio/index.php">PortFolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="">Contact</a>
          </li>
          <li class="nav-item">
            <div class="dropdown">
              <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Téléchargement
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" target="_blank" href="document/BOYER DORIAN.pdf">Mon CV</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    <main>
      <div class="container mt-3">
        <div class="row justify-content-center">
          <h1 class="bg-warning w-100 shadow p-3 mb-5 rounded">Me contacter</h1>
            <div class="col-md-6">
                <form method="post" action="">
                    <div class="mb-3">
                        <label for="nom" class="form-label">Nom :</label>
                        <input type="text" id="nom" name="nom" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email :</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="message" class="form-label">Message :</label>
                        <textarea id="message" name="message" class="form-control" required></textarea>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-warning shadow p-2 mb-3 rounded">Envoyer</button>
                    </div>
                </form>
                <div>
                    <?php
                       
                    ?>
                </div>
            </div>
        </div>
      </div>
     </main>
    <footer class="footer">
        <div class="container">
            <p>&copy; 2023 Dorian Boyer. Tous droits réservés.</p>
        </div>
    </footer>
</body>
</html>