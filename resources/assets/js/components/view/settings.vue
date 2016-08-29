<template>
    <div class="columns settings">
        <div class="column is-half is-offset-one-quarter">
            <div class="content">
                <h2 class="title is-2">Settings</h2>
                <h3 class="title is-3">Services</h3>

                <service v-for="service in services" :service="service"></service>
            </div>
        </div>
    </div>
</template>
<script>
    import service from './settings/service.vue'
    import {fetch as fetchServices} from '../../vuex/modules/services';

    export default{
        vuex: {
            getters: {
                services: ({services}) => services.services,
            },
            actions: {
                fetchServices,
            }
        },
        created() {
            this.fetchServices();
        },
        components: {service}
    }
</script>
