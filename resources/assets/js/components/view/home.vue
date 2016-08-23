<template>
    <div class="col-md-5 col-md-offset-3">
        <h2 class="page-title">Now Playing</h2>
    </div>
</template>
<script>
    export default{
        init() {
            this.$http.get('/api/user').then((resp) => {
               console.log(resp);
            });
        }
    }
</script>
