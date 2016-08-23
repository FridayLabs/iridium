<template>
    <div class="container">
        <div class="columns is-mobile navigation">
            <div class="column is-4 triangle">
                <a v-link="'/'">△</a>
            </div>
            <div class="column is-4 is-offset-4 buttons">
                <a v-link="'/settings'"><i class="fa fa-gear"></i></a>
                <a href="/get-out"><i class="fa fa-sign-out"></i></a>
            </div>
        </div>
    </div>
</template>
<script>
    export default{}
</script>
