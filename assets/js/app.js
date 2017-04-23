        function initialize() {
            var center = new google.maps.LatLng(59.9214, 10.8463);

            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 12,
                center: center,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            });

            var opt = {
                "legend": {
                    "Fatal" : "#FF0066",
                    "Very serious injuries" : "#FF9933",
                    "Serious injuries" : "#FFFF00" ,
                    "Minor injuries" : "#99FF99",
                    "No injuries" : "#66CCFF",
                    "Not recorded" : "#A5A5A5"
                }
            };

            var markers = [];
            for (var i = 0; i < data.features.length; i++) {
                var accident_injuries = data.features[i].properties["5074"];
                var accident_title = "";
                var accident_lnglat = data.features[i].geometry["coordinates"];
                switch (Number(accident_injuries)) {
                    case 1:
                        accident_title = "Fatal";
                        break;
                    case 3:
                        accident_title = "Serious injuries";
                        break;
                    case 2:
                        accident_title = "Very serious injuries";
                        break;
                    case 5:
                        accident_title = "No injuries";
                        break;
                    case 4:
                        accident_title = "Minor injuries";
                        break;
                    case 6:
                        accident_title = "Not recorded";
                        break;
                }
                var accident_LatLng = new google.maps.LatLng(Number(accident_lnglat[1]), Number(accident_lnglat[0]));
                var marker = new google.maps.Marker({
                    position: accident_LatLng,
                    title: accident_title
                });
                markers.push(marker);
            }

            var markerCluster = new MarkerClusterer(map, markers, opt);
        }

        google.load("visualization", "1", {packages: ["corechart"]});
        google.setOnLoadCallback(initialize);