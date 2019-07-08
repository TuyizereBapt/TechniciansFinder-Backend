<template>
    <!-- main -->
    <div class="content">
        <div class="main-header">
            <div class="row">
                <div class="col-md-4">
                    <h2>Technicians on Map</h2>
                </div>
                <div class="col-md-8">
                    <map-search/>
                </div>
            </div>
        </div>
        <div class="main-content">
            <div class="row">
                <div class="col-md-12">
                    <div id="map"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- /main -->
</template>
<script>
    import gmapsInit from '../../utils/gmaps';

    export default{
        name: 'technicians-map',
        async mounted() {
            const locations = [
                {
                    position: {
                        lat: 48.160910,
                        lng: 16.383330,
                    },
                },
                {
                    position: {
                        lat: 48.174270,
                        lng: 16.329620,
                    },
                },
            ];
            try {
                const google = await gmapsInit();
                const geocoder = new google.maps.Geocoder();
                const mapContainer = document.getElementById('map');
                const map = new google.maps.Map(mapContainer, {
                    center: {lat: -34.397, lng: 150.644},
                    zoom: 8
                });

                geocoder.geocode({address: 'Austria'}, (results, status) => {
                    if (status !== 'OK' || !results[0]) {
                        throw new Error(status);
                    }

                    map.setCenter(results[0].geometry.location);
                    map.fitBounds(results[0].geometry.viewport);
                });

                const markerClickHandler = (marker) => {
                    map.setZoom(13);
                    map.setCenter(marker.getPosition());
                };

                const markers = locations.map((location) => {
                    const marker = new google.maps.Marker({...location, map});
                    marker.addListener('click', () => markerClickHandler(marker));

                    return marker;
                });
            } catch (error) {
                console.error(error);
            }
        },
        data(){
            return {
                map: {
                    zoom: 8,
                }
            }
        }
    }
</script>
<style>
    html,
    body {
        margin: 0;
        padding: 0;
    }

    #map {
        height: 400px;

    }
</style>