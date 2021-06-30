(function($) {
    $(document).ready(function() {
        $('#toggle').click(function() {
            $(this).toggleClass('active');
            $('#overlay').toggleClass('open');
        });

        mapboxgl.accessToken = 'pk.eyJ1IjoiZGF5dnNvbm1hcnF1ZXMiLCJhIjoiY2tuc2dxNGp6MHlwbTJ3cW1zeTl4bnMzNSJ9.2fWabkN1gLxQDmx4K40w7A';
        let map = new mapboxgl.Map({
            container: 'map', // container ID
            style: 'mapbox://styles/mapbox/light-v10', // style URL
            center: [-34.82, -8.017], // starting position [lng, lat]
            zoom: 9 // starting zoom
        });

        let marker = new mapboxgl.Marker({
                color: "#435bd8",
                draggable: true
            }).setLngLat([-34.89, -8.04])
            .addTo(map);

        let marker2 = new mapboxgl.Marker({
                color: "#435bd8",
                draggable: true
            }).setLngLat([-34.85, -7.99])
            .addTo(map);

        let marker3 = new mapboxgl.Marker({
                color: "#435bd8",
                draggable: true
            }).setLngLat([-34.98, -8.02])
            .addTo(map);

        let marker4 = new mapboxgl.Marker({
                color: "#435bd8",
                draggable: true
            }).setLngLat([-34.90, -8.12])
            .addTo(map);

        let marker5 = new mapboxgl.Marker({
                color: "#435bd8",
                draggable: true
            }).setLngLat([-34.833824, -8.01092416])
            .addTo(map);
    });
})(jQuery);