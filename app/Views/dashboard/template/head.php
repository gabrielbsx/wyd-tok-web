<head>
    <meta charset="utf-8" />
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta name="description" content="Lineage 2 Cabinet" />
    <meta name="author" content="" />
    <title>
        Tales of Kersef - Painel do Usuário
    </title>
    <link rel="shortcut icon" href="<?= base_url('views/template/images/favicon.ico') ?>" />
    <link rel="stylesheet" href="<?= base_url('views/template/vendor/bootstrap/css/bootstrap.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('views/template/vendor/bootstrap/css/bootstrap-extend.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('views/template/css/site.min5e1f.css?v=2') ?>" />
    <link rel="stylesheet" href="<?= base_url('views/template/css/animate.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('views/template/css/grey5e1f.css?v=2') ?>" />
    <link rel="stylesheet" href="<?= base_url('views/template/css/mailbox.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('views/template/css/user_profilef500.css?v=13') ?>" />
    <link rel="stylesheet" href="<?= base_url('views/template/css/character.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('views/template/vendor/animsition/animsition.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('views/template/vendor/asscrollable/asScrollable.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('views/template/vendor/switchery/switchery.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('views/template/vendor/intro-js/introjs.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('views/template/vendor/slidepanel/slidePanel.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('views/template/vendor/flag-icon-css/flag-icon.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('views/template/vendor/ladda-bootstrap/ladda.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('views/template/vendor/select2/select2.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('views/template/vendor/bootstrap-select/bootstrap-select.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('views/template/vendor/datatables-bootstrap/dataTables.bootstrap.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('views/template/vendor/datatables-responsive/dataTables.responsive.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('views/template/vendor/font-awesome/css/all.min3860.css?v=1') ?>" />
    <link rel="stylesheet" href="<?= base_url('views/template/vendor/ion.rangeSlider-2.2.0/css/ion.rangeSlider.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('views/template/vendor/ion.rangeSlider-2.2.0/css/ion.rangeSlider.skinFlat.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('views/template/vendor/jquery-scrollbar/jquery.scrollbar.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('views/template/fonts/web-icons/web-icons.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('views/template/fonts/brand-icons/brand-icons.min.css') ?>" />
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic" />
    <link rel="stylesheet" href="<?= base_url('views/template/css/custom5de1.css?v=43') ?>" />
    <!--[if lt IE 9]>
      <script src="<?= base_url('cp/views/template/vendor/html5shiv/html5shiv.min.js') ?>"></script>
    <![endif]-->
    <!--[if lt IE 10]>
      <script src="<?= base_url('cp/views/template/vendor/media-match/media.match.min.js') ?>"></script>
      <script src="<?= base_url('cp/views/template/vendor/respond/respond.min.js') ?>"></script>
    <![endif]-->
    <!-- Scripts -->
    <script src="<?= base_url('views/template/vendor/modernizr/modernizr.min.js') ?>"></script>
    <script src="<?= base_url('views/template/vendor/breakpoints/breakpoints.min.js') ?>"></script>
    <script>
        Breakpoints();
    </script>
    <!-- Facebook Pixel Code -->
    <script>
        !(function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) :
                    n.queue.push(arguments);
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = "2.0";
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s);
        })(
            window,
            document,
            "script",
            "https://connect.facebook.net/en_US/fbevents.js"
        );
        fbq("init", "326599961160916");
        fbq("track", "PageView");
    </script>
    <noscript><img height="1" width="1" style="display: none" src="https://www.facebook.com/tr?id=326599961160916&amp;ev=PageView&amp;noscript=1" /></noscript>
    <!-- End Facebook Pixel Code -->
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                "gtm.start": new Date().getTime(),
                event: "gtm.js"
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != "dataLayer" ? "&l=" + l : "";
            j.async = true;
            j.src = "https://www.googletagmanager.com/gtm5445.html?id=" + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, "script", "dataLayer", "GTM-T74S5PQ");
    </script>
    <style>
        div.page_navigator #pager.clearfix ul li {
            background: #050A09;
            border: 1px solid #2E302C;
            padding: 2px;
        }

        div.page_navigator #pager.clearfix ul li {
            background: #050A09;
            border: 1px solid #2E302C;
            padding: 2px;
            margin-right: 8px;
        }

        #pager LI A {
            color: #acaaaa;
            text-decoration: none;
        }

        #pager LI {
            line-height: 20px;
            margin: 0 0 0 2px;
            text-align: center;
            width: 25px;
        }

        #pager LI.current {
            font-weight: bold;
        }

        #pager UL {
            list-style: none;
            margin: 0;
            padding: 9px;
        }

        #pager LI.current A {
            color: #fff;
        }

        .btn-default {
            border: 2px solid #ab8f54;
            background: url(<?= base_url('template/lineage/site/images/bg_button.png') ?>) no-repeat;
            color: #b59c67;
            font-size: 18px;
            padding: 6px 22px;
            text-decoration: none;
            font-family: 'MontserratSemiBold';
            transition: 0.5s;
            background-position: center center;
            text-align: center;
            margin: 0 auto;
        }

        .btn-default:hover {
            background: url(<?= base_url('template/lineage/site/images/bg_button_hover.png') ?>) no-repeat;
            background-position: center center;
        }
    </style>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- End Google Tag Manager -->
    <script src="https://cdn.tiny.cloud/1/1lhp4scr4dp6utok2d8hee393e6d3rs9yabki2p9jrqxwij5/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
</head>