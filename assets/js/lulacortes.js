(function($) {
    $(document).ready(function() {
        $('#toggle').click(function() {
            $(this).toggleClass('active');
            $('#overlay').toggleClass('open');
        });

        mapboxgl.accessToken = 'pk.eyJ1IjoiZGF5dnNvbm1hcnF1ZXMiLCJhIjoiY2tuc2dxNGp6MHlwbTJ3cW1zeTl4bnMzNSJ9.2fWabkN1gLxQDmx4K40w7A';
        var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/light-v10',
            center: [-8.0589,-34.8847],
            zoom: 4
        });

        // var geojson = {
        //     type: 'FeatureCollection',
        //     features: [{
        //       type: 'Feature',
        //       geometry: {
        //         type: 'Point',
        //         coordinates: [-8.046008506795676, -34.85453314123541]
        //       },
        //       properties: {
        //         title: 'Recife',
        //         description: 'Bairro de campo grande'
        //       }
        //     },
        //     {
        //       type: 'Feature',
        //       geometry: {
        //         type: 'Point',
        //         coordinates: [-8.056350852109073, -34.871050295013724]
        //       },
        //       properties: {
        //         title: 'Recife antigo',
        //         description: 'Marcador de exemplo'
        //       }
        //     }]
        //   };

        var geojson = {
            type: 'FeatureCollection',
            features: [{
                    type: 'Feature',
                    geometry: {
                        type: 'Point',
                        coordinates: [-77.032, 38.913]
                    },
                    properties: {
                        title: 'Mapbox',
                        description: 'Washington, D.C.'
                    }
                },
                {
                    type: 'Feature',
                    geometry: {
                        type: 'Point',
                        coordinates: [-122.414, 37.776]
                    },
                    properties: {
                        title: 'Mapbox',
                        description: 'San Francisco, California'
                    }
                }
            ]
        };

        geojson.features.forEach(function(marker) {

          // create a HTML element for each feature
          var el = document.createElement('div');
          el.className = 'marker';

          // make a marker for each feature and add to the map
          new mapboxgl.Marker(el)
              .setLngLat(marker.geometry.coordinates)
              .addTo(map);
        });
    });

})(jQuery);