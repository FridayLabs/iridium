<template>
    <div class="col-md-5 col-md-offset-3">
        <h2 class="page-title">Settings</h2>
        <h3 class="section-title">Basic</h3>
        <form>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="email" class="form-control" placeholder="Name" id="name">
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" placeholder="Email" id="email">
            </div>
        </form>
        <h3 class="section-title">Services</h3>
        <div class="row service">
            <div class="col-xs-6 text-center">
                <i class="service-icon fa fa-vk"></i>
            </div>
            <div class="col-xs-3 text-center">
                <input id="vk-service" class="cmn-toggle cmn-toggle-round" type="checkbox">
                <label for="vk-service"></label>
            </div>
            <div class="col-xs-3 text-center">
                40 tracks
            </div>
        </div>
        <div class="row service">
            <div class="col-xs-6 text-center">
                <i class="service-icon fa fa-facebook"></i>
            </div>
            <div class="col-xs-3 text-center">
                <input id="facebook-service" class="cmn-toggle cmn-toggle-round" type="checkbox">
                <label for="facebook-service"></label>
            </div>
            <div class="col-xs-3 text-center">
                125 tracks
            </div>
        </div>
    </div>
</template>
<style>
    .service-icon {
        font-size: 20px;
        color: #333;
    }
    .service {
        margin-bottom: 15px;
    }
</style>
<script>
    export default{}
</script>
