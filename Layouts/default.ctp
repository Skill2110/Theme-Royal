<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <title><?= $website_name ?> | <?= $title_for_layout ?></title>
    <link rel="icon" type="image/png" href="<?= $theme_config['favicon_url'] ?>"/>
    <?= $this->Html->css('bootstrap.css') ?>
    <?= $this->Html->css('main.css') ?>
    <?= $this->Html->css('new-style.css') ?>
    <?= $this->Html->css('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') ?>
    <?= $this->Html->script('jquery-2.2.4.js') ?>
</head>
<body>
<div id="wrapper">
    <?= $this->element('modals') ?>
    <?= $this->element('navbar') ?>
    <?= $this->element('notifications') ?>
    <?= $this->fetch('content'); ?>
    <?= $this->element('footer'); ?>
    <div id="backtotop"><a href="#"></a></div>
</div>
<?= $this->Html->script('bootstrap.min.js') ?>
<?= $this->Html->script('mmenu.min.js') ?>
<?= $this->Html->script('chosen.min.js') ?>
<?= $this->Html->script('slick.min.js') ?>
<?= $this->Html->script('rangeslider.min.js') ?>
<?= $this->Html->script('magnific-popup.min.js') ?>
<?= $this->Html->script('waypoints.min.js') ?>
<?= $this->Html->script('counterup.min.js') ?>
<?= $this->Html->script('jquery-ui.min.js') ?>
<?= $this->Html->script('tooltips.min.js') ?>
<?= $this->Html->script('custom.js') ?>
<?= $this->Html->script('themepunch.tools.min.js') ?>
<?= $this->Html->script('themepunch.revolution.min.js') ?>
<?= $this->Html->script('shop.js') ?>

<?= $this->Html->script('app.js') ?>
<?= $this->Html->script('form.js') ?>
<?= $this->Html->script('notification.js') ?>
<script>
    <?php if($isConnected) { ?>
    var notification = new $.Notification({
        'url': {
            'get': '<?= $this->Html->url(array('plugin' => false, 'controller' => 'notifications', 'action' => 'getAll')) ?>',
            'clear': '<?= $this->Html->url(array('plugin' => false, 'controller' => 'notifications', 'action' => 'clear', 'NOTIF_ID')) ?>',
            'clearAll': '<?= $this->Html->url(array('plugin' => false, 'controller' => 'notifications', 'action' => 'clearAll')) ?>',
            'markAsSeen': '<?= $this->Html->url(array('plugin' => false, 'controller' => 'notifications', 'action' => 'markAsSeen', 'NOTIF_ID')) ?>',
            'markAllAsSeen': '<?= $this->Html->url(array('plugin' => false, 'controller' => 'notifications', 'action' => 'markAllAsSeen')) ?>'
        },
        'messages': {
            'markAsSeen': '<?= $Lang->get('NOTIFICATION__MARK_AS_SEEN') ?>',
            'notifiedBy': '<?= $Lang->get('NOTIFICATION__NOTIFIED_BY') ?>'
        }
    });
    <?php } ?>
    // Config FORM/APP.JS

    var LIKE_URL = "<?= $this->Html->url(array('controller' => 'news', 'action' => 'like')) ?>";
    var DISLIKE_URL = "<?= $this->Html->url(array('controller' => 'news', 'action' => 'dislike')) ?>";

    var LOADING_MSG = "<?= $Lang->get('GLOBAL__LOADING') ?>";
    var ERROR_MSG = "<?= $Lang->get('GLOBAL__ERROR') ?>";
    var INTERNAL_ERROR_MSG = "<?= $Lang->get('ERROR__INTERNAL_ERROR') ?>";
    var FORBIDDEN_ERROR_MSG = "<?= $Lang->get('ERROR__FORBIDDEN') ?>"
    var SUCCESS_MSG = "<?= $Lang->get('GLOBAL__SUCCESS') ?>";

    var CSRF_TOKEN = "<?= $csrfToken ?>";
</script>
<?php if (isset($google_analytics) && !empty($google_analytics)) { ?>
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', '<?= $google_analytics ?>', 'auto');
        ga('send', 'pageview');
    </script>
<?php } ?>
<?= (isset($configuration_end_code)) ? $configuration_end_code : '' ?>
</body>
</html>