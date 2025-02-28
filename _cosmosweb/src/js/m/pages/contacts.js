$('.contacts__main-map').each(function(){
    var head = document.getElementsByTagName('head')[0];
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.onload = function(){
        ymaps3.ready.then(init);
    };
    script.src = YAMAPSURL;
    head.appendChild(script);

    var m = $(this);

    m.append('<div class="contacts__main-map-map" id="map"></div>');
    var geo = m.data('geo').split(',');
    var zoom = m.data('zoom') || 16;

    // if (geo.length) init();
    

    function init() {
        // await ymaps3.ready;

        const {YMap, YMapDefaultSchemeLayer, YMapMarker, YMapDefaultFeaturesLayer} = ymaps3;

        const map = new YMap(
            document.getElementById('map'),
            {
                location: {
                    center: geo,
                    zoom: zoom
                }
            },[
                new YMapDefaultSchemeLayer({
                    customization: YAMAPSSTYLE
                }),
                new YMapDefaultFeaturesLayer()
            ]
        );

        const markerEl = $('<div class="contacts__main-map-marker"></div>')[0];
        const marker = new YMapMarker(
            {
                coordinates: geo,
            },
            markerEl
        );

        map.addChild(marker);

        setTimeout(function(){
            m.addClass('_ready')
        },500);
    };
});