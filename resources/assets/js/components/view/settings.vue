<template>
    <div class="columns settings">
        <div class="column is-half is-offset-one-quarter">
            <div class="content">
                <h2 class="title is-2">Settings</h2>
                <h3 class="title is-3">Services</h3>

                <div class="level is-mobile">
                    <div class="level-left">
                        <div class="level-item">
                            <i class="service-icon fa fa-vk"></i>
                        </div>
                        <div class="level-item">
                            <span class="tag">Tracks source</span>
                            <span class="tag">Playlists</span>
                            <span class="tag">Recommendations</span>
                        </div>
                    </div>
                    <div class="level-right">
                        <div class="level-item">
                            <button class="button is-primary is-outlined">Connect</button>
                            <button class="button is-primary is-outlined">Sync now</button>
                        </div>
                    </div>
                </div>

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
    export default{}
</script>
