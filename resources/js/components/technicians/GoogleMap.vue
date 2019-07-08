<template>
    <div>
        <gmap-map :options="mapOptions" :center="center" :zoom="mapZoomLevel" style="width:100%;  height: 340px;">
            <gmap-marker :key="index"
                         v-for="(m, index) in technicians"
                         :draggable="true"
                         :icon="icon"
                         :position="{lat: parseFloat(m.work_place_lat),lng: parseFloat(m.work_place_long)}"
                         @click="center={lat: parseFloat(m.work_place_lat),lng: parseFloat(m.work_place_long)}"/>
        </gmap-map>
    </div>
</template>

<script>

    export default {
        name: "google-map",
        mounted() {
            this.geoLocate();
            this.fetchTechnicians()
        },
        data() {
            return {
                currentLocation: {lat: -1.9546051000000002, lng: 30.072289599999998},
                markers: [],
                places: [],
                currentPlace: null,
                technicians: [],
                mapOptions: {
                    zoomControl: true,
                    mapTypeControl: false,
                    scaleControl: false,
                    streetViewControl: false,
                    rotateControl: false,
                    fullscreenControl: true,
                    disableDefaultUi: false
                },
                mapZoomLevel: 15,
                icon: {
                    url: require('/assets/markers/marker.png'),
                    scaledSize: {width: 50, height: 32},
                    labelOrigin: {x: 16, y: -10}
                }
            };
        },
        methods: {
            setPlace(place) {
                this.currentPlace = place;
                this.addMarker()
            },
            addMarker() {
                if (this.currentPlace) {
                    const marker = {
                        lat: this.currentPlace.geometry.location.lat(),
                        lng: this.currentPlace.geometry.location.lng()
                    };
                    this.markers.push({position: marker});
                    this.places.push(this.currentPlace);
                    this.currentLocation = marker;
                    // this.currentPlace = null;
                }
            },
            geoLocate: function () {
                navigator.geolocation.getCurrentPosition(position => {
                    this.currentLocation = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };
                });
            },
            async fetchTechnicians() {
                let vm = this
                await axios.get('/api/technicians').then(function ({data}) {
                    vm.technicians = data
                }).catch(() => {
                    console.log('Fetching technicians for map failed.')
                })
            }
        }
    }
</script>

<style scoped lang="scss">
    /*@import "../../../assets/scss/eventsBash";

    .search-places {
        .input-box {
            border: 1px solid $gainsboro;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            input {
                padding: 4px 16px;
                margin-right: 4px;
                width: 100%;
            }
        }
    }
    .decorated{
        .input-box {
            border: 1px solid $gainsboro;
            background-color: white;
            border-radius: 12px;
            input {
                color: $armadillo;
                outline: none;
            }
            span{
                color: $armadillo;
                margin-right: 8px;
            }
        }
    }*/

</style>