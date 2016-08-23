<script>
    window.Iridium = <?php echo json_encode([
            'csrfToken' => csrf_token(),
    ]); ?>
</script>