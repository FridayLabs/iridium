<template>
    <div class="level is-mobile service">
        <div class="level-left">
            <div class="level-item">
                <i class="service-icon fa fa-{{service.name}}"></i>
            </div>
            <div class="level-item">
                <span class="tag">Tracks source</span>
                <span class="tag">Playlists</span>
                <span class="tag">Recommendations</span>
            </div>
        </div>
        <div class="level-right">
            <div class="level-item">
                <button class="button is-primary" v-show="!service.isConnected">Connect</button>
                <button class="button is-primary is-outlined" v-show="service.isConnected">Disconnect</button>
                <button class="button is-primary" v-show="service.isConnected">Sync now</button>
            </div>
        </div>
    </div>
</template>
<script>
    export default{
        props: ['service'],
        created() {
            console.log(this.service.name);
        }
    }
</script>
