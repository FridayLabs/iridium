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
                <button
                        :class="['button', 'is-primary', isLoading ? 'is-loading' : '']"
                        v-show="!service.isConnected"
                        @click="disconnect(service.name)">
                    Connect
                </button>
                <button
                        :class="['button', 'is-primary', 'is-outlined', isLoading ? 'is-loading' : '']"
                        v-show="service.isConnected"
                        @click="disconnect(service.name)">
                    Disconnect
                </button>
            </div>
        </div>
    </div>
</template>
<script>
    import {connect, disconnect} from '../../../vuex/modules/services';
    export default{
        props: ['service'],
        vuex: {
            getters: {
                asyncLoading: ({services}) => services.asyncLoading
            },
            actions: {
                connect,
                disconnect
            }
        },
        computed: {
            isLoading: function () {
                return this.asyncLoading[this.service.name];
            }
        }
    }
</script>
