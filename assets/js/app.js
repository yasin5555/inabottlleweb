      function myMap() {

      var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: {lat: 50.8516, lng: 4.3471}
        });

        // Create an array of alphabetical characters used to label the markers.
        var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

        // Add some markers to the map.
        // Note: The code uses the JavaScript Array.prototype.map() method to
        // create an array of markers based on a given "locations" array.
        // The map() method here has nothing to do with the Google Maps API.
        var markers = locations.map(function(location, i) {
          return new google.maps.Marker({
            position: location,
            label: labels[i % labels.length]
          });
        });

        // Add a marker clusterer to manage the markers.
        var markerCluster = new MarkerClusterer(map, markers,
            {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
      } /* fin function map */
      
      
      var locations = [
        {lat: 50.85158300886789, lng: 4.354448318481445},
        {lat: 50.85127142909225, lng: 4.3552422523498535},
        {lat: 50.85135812874186, lng: 4.3525684138435282},
        {lat: 50.85158300886789, lng: 4.3535217892462821},
        {lat: 50.85158300886789, lng: 4.3512358259358959},
        
        {lat: 50.8179745927569, lng: 4.371354648651622},
        {lat: 50.8165423184352, lng: 4.375862584632311},
        {lat: 50.8179745135476, lng: 4.374832151894531},
        {lat: 50.8154854212105, lng: 4.372586158132346},
        {lat: 50.8152569453156, lng: 4.373489561216548},
        {lat: 50.8149523158432, lng: 4.371469985457883},
        {lat: 50.8178625354854, lng: 4.376510654202368},
        {lat: 50.8179265465457, lng: 4.377522131658408},
        {lat: 50.8196389631478, lng: 4.379513248496482},
        {lat: 50.8102574136069, lng: 4.373874641987165},
        {lat: 50.8101558456727, lng: 4.379500548871792}
      ];
   