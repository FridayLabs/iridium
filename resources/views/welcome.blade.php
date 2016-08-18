<!DOCTYPE html>
<html>
<head>
    <title>Iridium</title>
    <link rel="stylesheet" href="/css/welcome.css"/>
    <script>
        window.Iridium = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
<div id="app">
    <welcome></welcome>
</div>
<script src="/js/welcome.js"></script>
</body>
</html>
