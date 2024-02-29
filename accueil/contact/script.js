   // Initialiser et afficher la carte
   function initMap() {
    // Coordonnées de l'adresse
    var address = "30 rue Brissonnet, 10000 Troyes, France";

    // Créer un objet géocodeur
    var geocoder = new google.maps.Geocoder();

    // Convertir l'adresse en coordonnées géographiques
    geocoder.geocode({ address: address }, function(results, status) {
      if (status === google.maps.GeocoderStatus.OK) {
        // Coordonnées géographiques
        var location = results[0].geometry.location;

        // Options de la carte
        var mapOptions = {
          center: location,
          zoom: 16
        };

        // Créer la carte
        var map = new google.maps.Map(document.getElementById("map"), mapOptions);

        // Ajouter un marqueur sur la carte
        var marker = new google.maps.Marker({
          position: location,
          map: map,
          title: "Adresse"
        });
      }
    });
  }