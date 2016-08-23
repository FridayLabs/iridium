<!DOCTYPE html>
<html>
<head>
    <title>Iridium</title>
    <link rel="stylesheet" href="/css/app.css"/>
    @include('partials.csrf_token')
</head>
<body>
<div id="app">
    {{--<navigation></navigation>--}}
    <div class="router-container container">
        <router-view></router-view>
    </div>
</div>
<script src="/js/app.js"></script>
</body>
</html>
