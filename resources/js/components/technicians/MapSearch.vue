<template>
    <div class="map-search-wrapper">
        <div class="map-search-header">
            <input type="text" placeholder="Search Technician">
        </div>
        <div class="map-search-body">

        </div>
    </div>
</template>
<script>
    export default{}
</script>
<style lang="scss">
    .main-header {
        margin-bottom: 20px;
    }
    #app{
        position: relative;
    }
    .map-search-wrapper {
        position: fixed;
        top: 44px;
        left: 230px;
        width: calc(100% - 230px);
        z-index: 9999;
        height: 100%;
        background-color: rgba(255, 255, 255, 0.7);
        overflow-y: auto;

        &.full-screen {

        }
        .map-search-header {
            /*background-color: rgba(255, 255, 255, 0.5);*/
            background-color: rgba(0, 0, 0, 0.1);
            border-radius: 4px;
            padding: 8px 16px;
            input {
                width: 100%;
                height: 32px;
                padding: 0 16px;
            }
        }
    }
</style>