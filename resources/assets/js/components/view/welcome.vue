<template>
    <div class="content">
        <div class="triangle">△</div>
        <div class="title">IRIDIUM</div>
        <div class="form row">
            <div class="strike">
                <span>Get in via email</span>
            </div>
            <div class="alert alert-info" v-show="invited">
                Go ahead and check this email!
            </div>
            <form class="form-inline" v-show="!invited">
                <div class="alert alert-danger" v-show="errors.length">
                    <p v-for="error in errors">{{ error }}</p>
                </div>
                <div class="form-group">
                    <input type="email" v-model="email" name="email" placeholder="Email" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-lg btn-dark" @click="getIn">{{ button }}</button>
            </form>
        </div>
        <div class="social row">
            <div class="strike">
                <span>or via social network</span>
            </div>
            <ul class="list-inline">
                <li><a href="#" @click="getInSocial('vk', $event)"><i class="fa fa-vk"></i></a></li>
                <li><a href="#" @click="getInSocial('fb', $event)"><i class="fa fa-facebook"></i></a></li>
            </ul>
        </div>
    </div>
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
        computed: {
            button: function () {
                return !this.loading ? 'Get In' : 'Getting In'
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
            },
            getInSocial(provider, e) {
                e.preventDefault();
                window.open(
                        '/socially-get-in/' + provider,
                        'Get In Socially',
                        'width=600,height=500,toolbar=false,menubar=false,location=false,status=false'
                );
            }
        }
    }
</script>
