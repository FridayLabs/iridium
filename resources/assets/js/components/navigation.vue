<template>
    <div class="container navigation">
        <div class="level is-mobile">
            <div class="level-left">
                <div class="level-item triangle">
                    <a v-link="'/'">△</a>
                </div>
            </div>
            <div class="level-item search-bar">
                <p class="control has-icon">
                    <input class="input" type="text" placeholder="Search">
                    <i class="fa fa-search"></i>
                </p>
            </div>
            <div class="level-right">
                <div class="level-item buttons">
                    <a v-link="'/settings'"><i class="fa fa-gear"></i></a>
                    <a href="/get-out"><i class="fa fa-sign-out"></i></a>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default{}
</script>
