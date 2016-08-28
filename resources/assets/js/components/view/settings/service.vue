<template>
    <div class="level is-mobile service">
        <div class="level-left">
            <div class="level-item">
                <i class="service-icon fa fa-{{service.name}}"></i>
            </div>
            <div class="level-item">
                <span class="tag" v-if="service.features.isTrackProvider">Tracks source</span>
                <span class="tag" v-if="service.features.isPlaylistProvider">Playlists</span>
                <span class="tag" v-if="service.features.isRecommendationProvider">Recommendations</span>
                <span class="tag" v-if="service.features.isScrobblingConsumer">Scrobbling</span>
            </div>
        </div>
        <div class="level-right buttons">
            <div class="level-item">
                <button class="button is-primary" v-show="!service.isConnected" @click="connect(service)">
                    Connect
                </button>
                <button class="button is-primary is-outlined" v-show="service.isConnected" @click="disconnect(service)">
                    Disconnect
                </button>
                <button class="button is-primary is-outlined" v-show="service.isConnected" @click="sync(service)">
                    Sync
                </button>
            </div>
        </div>
    </div>
</template>
<script>
    export default{
        props: ['service'],
        
        methods: {
            connect(service) {
                service.isConnected = true;
            },
            disconnect(service) {
                service.isConnected = false;
            },
            sync(service) {

            },
        }
    }
</script>
