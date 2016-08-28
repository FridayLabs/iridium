<template>
    <div class="columns settings">
        <div class="column is-half is-offset-one-quarter">
            <div class="content">
                <h2 class="title is-2">Settings</h2>
                <h3 class="title is-3">Services</h3>

                <service v-for="service in services" :service="service"></service>

                <h3 class="title is-3">Account</h3>
                <label class="label">Name</label>
                <p class="control">
                    <input class="input" type="text" placeholder="Your Name">
                </p>
                <label class="label">Email</label>
                <p class="control">
                    <input class="input" type="text" placeholder="Email">
                </p>
                <label class="label">Password</label>
                <p class="control">
                    <input class="input" type="password" placeholder="Password">
                </p>
            </div>
        </div>
    </div>
</template>
<script>
    import service from './settings/service.vue'
    import {fetch} from '../../vuex/modules/services';

    export default{
        vuex: {
            getters: {
                services: ({services}) => services.services
            },
            actions: {
                fetchServices: fetch
            }
        },
        created() {
            this.fetchServices();
        },
        components: {service}
    }
</script>
