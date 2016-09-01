<template>
    <div class="columns">
        <div class="column is-2">
            <aside class="menu">
                <ul class="menu-list">
                    <li><a class="is-active" href="#">Now Playing</a></li>
                </ul>
                <p class="menu-label">
                    Collections
                </p>
                <ul class="menu-list">
                    <li><a href="#">VK</a></li>
                    <li><a href="#">Dropbox</a></li>
                    <li><a href="#">Lastfm</a></li>
                </ul>
                <p class="menu-label">
                    Playlists
                </p>
                <ul class="menu-list">
                    <li><a href="#">Foo</a></li>
                    <li><a href="#">Bar</a></li>
                    <li><a href="#">Baz</a></li>
                </ul>
            </aside>
        </div>
        <div class="column is-6 is-offset-1">
        	<h2 class="title is-2">Now playing</h2>
            <div class="level is-mobile track" v-for="x in [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]">
                <div class="level-item">
                    <i class="fa fa-play"></i>
                </div>
                <div class="level-item">
                    foo - bar
                </div>
                <div class="level-right">
                    <div class="level-item">
                        3:42
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default{}
</script>
