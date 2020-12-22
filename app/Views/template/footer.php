<footer class="grid border-t-2 border-gray-700 rounded-b-lg container mx-auto text-center text-gray-200 py-5 bg-gradient-to-b from-gray-900 to-gray-800 mb-12">
    TALES OF KERSEF &copy; 2020 | Desenvolvido por Kentaro
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<script src="<?= base_url('js/custom.js') ?>"></script>
<?php $uri = $uri = new \CodeIgniter\HTTP\URI(current_url(true)); ?>
<?php if ($uri->getPath() == '/dashboard/guildmark') : ?>
    <script>
        $(document).ready(function() {
            const guilds = $('.guilds');
            $.ajax({
                url: "<?= base_url('auth/mob') ?>",
                type: "GET",
                success: function(data) {
                    data = JSON.parse(data)
                    if (data.length > 0) {
                        $.each(data, function(key, value) {
                            guilds.append('<option value="' + value.guildid + '">' + value.guildname + '</option>')
                        });
                    } else {
                        const guildmark = $('.guildmarks')
                        const send = $('.send')
                        guildmark.html('<div class="my-4 text-gray-500">Você não é líder de guild portanto não pode enviar guildmark!</div>')
                        send.remove()
                    }
                }
            });
        });
    </script>
<?php endif; ?>
<script>
    tinymce.init({
        selector: '.editor',
        skin: 'oxide-dark',
        content_css: 'dark'
    });
</script>