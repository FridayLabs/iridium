<template>
    <div class="container navigation-bar">
        <div class="row">
            <div class="col-md-2">
                <a class="logo pull-left" v-link="'/'">△</a>
            </div>
            <div class="col-md-10">
                <ul class="navigation list-inline text-right pull-right">
                    <li><a v-link="'settings'"><i class="fa fa-gear"></i></a></li>
                    <li><a href="/get-out"><i class="fa fa-sign-out"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</template>
<style lang="scss">
    .navigation-bar {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
    }

    a.logo {
        font-size: 36px;
        font-weight: bold;
        color: #000;
    }

    a.logo:hover {
        color: #666;
    }

    .navigation {
        font-size: 18px;
        li {
            margin-right: 20px;
            line-height: 50px;
            a {
                color: #000;
            }
            a:hover {
                color: #666;
            }
        }
    }
</style>
<script>
    export default{}
</script>
