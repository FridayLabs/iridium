<template>
    <div class="row">
        <div class="center-block text-center">
            <div class="logo">IRIDIUM</div>
            <h4>Get in via email</h4>
            <div class="login-via-email">
                <form class="form-inline">
                    <div class="form-group">
                        <label class="sr-only" for="email">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="Email">
                    </div>
                    <button type="submit" class="btn btn-default">Get In</button>
                </form>
            </div>
            <h4>Or some social account</h4>
            <div class="login-via-social">
                <ul class="list-inline">
                    <li><a href="#">VK</a></li>
                    <li><a href="#">Facebook</a></li>
                </ul>
            </div>
        </div>
    </div>
</template>
<style>
    .logo {
        font-size: 72px;
    }
    .login-via-email {
        margin-bottom: 20px;
    }
</style>
<script>
    export default{
    }
</script>
