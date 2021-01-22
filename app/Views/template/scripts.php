<script src="https://yastatic.net/jquery/2.1.4/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script src="<?= base_url('/template/lineage/site/js/tab.js') ?>"></script>
<script src="<?= base_url('/template/lineage/site/js/gradient.js') ?>"></script>
<script src="<?= base_url('/template/lineage/site/js/main.js') ?>"></script>
<script src="<?= base_url('/template/lineage/site/js/notiJ.js') ?>"></script>
<script type="text/javascript">
    (function(d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter33822194 = new Ya.Metrika({
                    id: 33822194,
                    clickmap: true,
                    trackLinks: true,
                    accurateTrackBounce: true,
                    webvisor: true,
                    trackHash: true,
                });
            } catch (e) {}
        });
        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function() {
                n.parentNode.insertBefore(s, n);
            };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";
        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else {
            f();
        }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript>
    <div>
        <img src="https://mc.yandex.ru/watch/33822194" style="position: absolute; left: -9999px" alt="" />
    </div>
</noscript>
<script>
    tinymce.init({
        selector: '.editor',
        height: 500,
        menubar: false,
        plugins: [
            'advlist autolink lists link image charmap print preview anchor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table paste code help wordcount'
        ],
        toolbar: 'undo redo | formatselect | ' +
            'bold italic backcolor | alignleft aligncenter ' +
            'alignright alignjustify | bullist numlist outdent indent | ' +
            'removeformat | help',
        content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
    });
    // table
    $(document).ready(function() {
        $('#dtBasicExample').DataTable({
            "lengthChange": false
        });
    });
</script>