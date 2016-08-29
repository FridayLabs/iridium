<template>
    <section class="hero is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="triangle">△</div>
                <div class="title-logo">IRIDIUM</div>
                <div class="strike">
                    <span>Get in via email</span>
                </div>
                <form v-show="!invited">
                    <div class="control is-grouped has-addons has-addons-centered">
                        <p class="control">
                            <input v-model="email" name="email"
                                   v-bind:class="['input', {'is-danger': errors.length}]"
                                   type="email" placeholder="Email">
                            <span v-for="error in errors" class="help is-danger">{{ error }}</span>
                        </p>
                        <p class="control">
                            <button v-bind:class="['button', 'is-primary', 'is-font-heavy', loading ? 'is-loading' : '']"
                                    type="submit"
                                    @click="getIn">GET IN
                            </button>
                        </p>
                    </div>
                </form>
                <div class="notification notification-welcome" v-show="invited">
                    Go ahead and check that email!
                </div>
                <div class="strike">
                    <span>or via social network</span>
                </div>
                <a href="/get-in/social/vk" class="social-icon" ><i class="fa fa-vk"></i></a>
                <a href="/get-in/social/facebook" class="social-icon" ><i class="fa fa-facebook"></i></a>
            </div>
        </div>
    </section>
</template>
<script>
    export default{
        data() {
            return {
                errors: [],
                loading: false,
                invited: false,
                email: ''
            }
        },
        methods: {
            getIn(e) {
                e.preventDefault();
                var errors = [];
                var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                if (this.email.length < 1) {
                    errors.push('Email is required')
                } else if (!re.test(this.email)) {
                    errors.push('Enter valid email')
                }
                this.errors = errors;
                if (this.errors.length == 0) {
                    this.loading = true;
                    this.$http.post('/get-in', {'email': this.email}).then(() => {
                        this.loading = false;
                        this.invited = true;
                    }, (err) => {
                        this.loading = false;
                        this.errors = [err];
                        this.invited = false;
                    });
                }
            }
        }
    }
</script>
