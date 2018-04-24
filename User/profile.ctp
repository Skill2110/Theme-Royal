<br>
<div id="heading-breadcrumbs">
    <?= $this->element('flash') ?>
    <div id="content" class="clearfix">
        <div class="container">
            <div class="row">

                <div class="col-md-12 clearfix" id="customer-account">

                    <div class="well" style="background-color: #fff;">
                        <div class="panel-heading">
                            <h3 class="panel-title">Détails personnels</h3>
                        </div>
                        <div class="panel-body">
                            <div class="box no-mb">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label><?= $Lang->get('USER__USERNAME') ?></label>
                                                <input type="text" class="form-control" value="<?= $user['pseudo'] ?>"
                                                       disabled>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label><?= $Lang->get('USER__EMAIL') ?></label>
                                            <input type="text" class="form-control" value="<?= $user['email'] ?>"
                                                   disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label><?= $Lang->get('USER__RANK') ?></label>
                                                <?php foreach ($available_ranks as $key => $value) {
                                                    if ($user['rank'] == $key) {
                                                        $rank = $value;
                                                        break;
                                                    }
                                                } ?>
                                                <input type="text" class="form-control" value="<?= $rank ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label><?= $Lang->get('IP') ?></label>
                                            <input type="text" class="form-control" value="<?= $user['ip'] ?>" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label><?= $Lang->get('GLOBAL__CREATED') ?></label>
                                                <input type="text" class="form-control"
                                                       value="<?= $Lang->date($user['created']) ?>" disabled>
                                        </div>
                                    </div>
                                    <?php if ($EyPlugin->isInstalled('eywek.shop.1')) { ?>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label><?= $Lang->get('USER__MONEY') ?></label>
                                                <input type="text" class="form-control" value="<?= $user['money'] ?>"
                                                       disabled>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="well" style="background-color: #fff;">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?= $Lang->get('USER__UPDATE_PASSWORD') ?></h3>
                        </div>
                        <div class="panel-body">
                            <div class="box no-mb">
                                <form method="post" data-ajax="true" action="<?= $this->Html->url(array('plugin' => null, 'controller' => 'user', 'action' => 'change_pw')) ?>">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label><?= $Lang->get('USER__PASSWORD') ?></label>
                                                <input type="password" class="form-control" name="password">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label><?= $Lang->get('USER__PASSWORD_CONFIRM') ?></label>
                                                <input type="password" class="form-control" name="password_confirmation">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> <?= $Lang->get('GLOBAL__SUBMIT') ?></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <?php if ($Permissions->can('EDIT_HIS_EMAIL')) { ?>
                        <div class="well" style="background-color: #fff;">
                            <div class="panel-heading">
                                <h3 class="panel-title"><?= $Lang->get('USER__UPDATE_EMAIL') ?></h3>
                            </div>
                            <div class="panel-body">
                                <div class="box no-mb">
                                    <form method="post" data-ajax="true" action="<?= $this->Html->url(array('plugin' => null, 'controller' => 'user', 'action' => 'change_email')) ?>">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label><?= $Lang->get('USER__EMAIL') ?></label>
                                                    <input type="email" class="form-control" name="email">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label><?= $Lang->get('USER__EMAIL_CONFIRM_LABEL') ?></label>
                                                    <input type="email" class="form-control" name="email_confirmation">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> <?= $Lang->get('GLOBAL__SUBMIT') ?></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                    <?php if ($EyPlugin->isInstalled('eywek.shop.1')) { ?>
                        <div class="well" style="background-color: #fff;">
                            <div class="panel-heading">
                                <h3 class="panel-title"><?= $Lang->get('SHOP__USER_POINTS_TRANSFER') ?></h3>
                            </div>
                            <div class="panel-body">
                                <div class="box no-mb">
                                    <form method="post" data-ajax="true" action="<?= $this->Html->url(array('plugin' => 'shop', 'controller' => 'payment', 'action' => 'transfer_points')) ?>">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label><?= $Lang->get('SHOP__USER_POINTS_TRANSFER_WHO') ?></label>
                                                    <input type="text" class="form-control" name="to">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label><?= $Lang->get('SHOP__USER_POINTS_TRANSFER_HOW_MANY') ?></label>
                                                    <input type="text" class="form-control" name="how">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> <?= $Lang->get('GLOBAL__SUBMIT') ?></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                    <?php if ($Configuration->getKey('mineguard') == "true") { ?>
                        <div class="well" style="background-color: #fff;">
                            <div class="panel-heading">
                                <h3 class="panel-title"><?= $Lang->get('API__MINEGUARD_LABEL') ?></h3>
                            </div>
                            <div class="panel-body">
                                <p class="lead" style="font-size:14px;">
                                    Qu'est-ce que c'est ? C'est une protection qui permet une connexion au serveur minecraft depuis votre compte seulement avec les IPs affichés ci-dessous.
                                    Vous pouvez ajouter une ip ou en retirer une pour que celle-ci accède à votre compte.
                                </p>
                                <div class="row">
                                    <form method="post" data-ajax="true" action="<?= $this->Html->url(array('controller' => 'api', 'action' => 'add_ip')) ?>" data-callback-function="addIP">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="ip" placeholder="<?= $Lang->get('IP') ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <button style="float: right" type="submit" class="btn btn-block btn-success"><?= $Lang->get('GLOBAL__ADD') ?></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th><?= $Lang->get('IP') ?></th>
                                                <th><?= $Lang->get('GLOBAL__ACTIONS') ?></th>
                                            </tr>
                                            </thead>
                                            <tbody id="table-ip">
                                            <?php
                                            foreach ($api as $key => $value) { ?>
                                                <tr id="<?= $key ?>">
                                                    <th><?= $value ?></th>
                                                    <th>
                                                        <button data-ip-id="<?= $key ?>"
                                                                class="btn btn-danger delete_ip"><?= $Lang->get('GLOBAL__DELETE') ?></button>
                                                    </th>
                                                </tr>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                    <div class="row">
                    <div class="col-md-6">
                        <?php if ($can_skin) { ?>
                            <div class="well" style="background-color: #fff;">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?= $Lang->get('API__SKIN_LABEL') ?></h3>
                                </div>
                                <div class="panel-upload">
                                    <div class="row">
                                        <form class="form-inline" method="post" id="skin" method="post" data-ajax="true"
                                              data-upload-image="true"
                                              action="<?= $this->Html->url(array('action' => 'uploadSkin')) ?>">
                                            <div class="col-md-10">
                                                <div class="form-group">
                                                    <input type="button" class="btn btn-success" onclick="$('#choose').click();"
                                                           value="Séléctionner votre skin"/>
                                                    <input name="image" id="choose" class="btn btn-success" type="file"
                                                           style="visibility:hidden">
                                                </div>
                                                <input name="data[_Token][key]" value="<?= $csrfToken ?>" type="hidden">
                                            </div>
                                            <div class="col-md-2">
                                                <div class="row-panel">
                                                <div class="form-group">
                                                    <button style="float: right" type="submit"
                                                            class="btn btn-success"><?= $Lang->get('GLOBAL__ADD') ?></button>
                                                </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>

                    <div class="col-md-6">
                        <?php if ($can_cape) { ?>
                            <div class="well" style="background-color: #fff;">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?= $Lang->get('API__CAPE_LABEL') ?></h3>
                                </div>
                                <div class="panel-upload">
                                    <div class="row">
                                        <form class="form-inline" method="post" id="cape" method="post" data-ajax="true"
                                              data-upload-image="true"
                                              action="<?= $this->Html->url(array('action' => 'uploadCape')) ?>">
                                            <div class="col-md-10">
                                                <div class="form-group">
                                                    <input type="button" class="btn btn-success" onclick="$('#choose').click();"
                                                           value="Séléctionner votre cape"/>
                                                    <input name="image" id="choose" class="btn btn-success" type="file"
                                                           style="visibility:hidden">
                                                </div>
                                                <input name="data[_Token][key]" value="<?= $csrfToken ?>" type="hidden">
                                            </div>
                                            <div class="col-md-2">
                                                <div class="row-panel">
                                                <div class="form-group">
                                                    <button style="float: right" type="submit"
                                                            class="btn btn-success"><?= $Lang->get('GLOBAL__ADD') ?></button>
                                                </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    </div>

                    <?= $Module->loadModules('user_profile') ?>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        <?php if($Configuration->getKey('mineguard') == "true") { ?>

        function enableMineGuard() {
            var inputs = {};
            inputs["data[_Token][key]"] = '<?= $csrfToken ?>';
            $.post("<?= $this->Html->url(array('controller' => 'api', 'action' => 'enable_mineguard')) ?>", inputs, function (data) {
                if (data.statut) {
                    $('.ajax-msg-mineguard').empty().html('<div class="alert alert-success"><a class="close" data-dismiss="alert">×</a><i class="icon icon-exclamation"></i> <b><?= $Lang->get('GLOBAL__SUCCESS') ?> :</b> ' + data.msg + '</i></div>').fadeIn(500);
                } else {
                    $('.ajax-msg-mineguard').empty().html('<div class="alert alert-danger"><a class="close" data-dismiss="alert">×</a><i class="icon icon-warning-sign"></i> <b><?= $Lang->get('GLOBAL__ERROR') ?> :</b> ' + data.msg + '</i></div>').fadeIn(500);
                }
            });
        }

        function disableMineGuard() {
            var inputs = {};
            inputs["data[_Token][key]"] = '<?= $csrfToken ?>';
            $.post("<?= $this->Html->url(array('controller' => 'api', 'action' => 'disable_mineguard')) ?>", inputs, function (data) {
                if (data.statut) {
                    $('.ajax-msg-mineguard').empty().html('<div class="alert alert-success"><a class="close" data-dismiss="alert">×</a><i class="icon icon-exclamation"></i> <b><?= $Lang->get('GLOBAL__SUCCESS') ?> :</b> ' + data.msg + '</i></div>').fadeIn(500);
                    $('#table-ip').empty();
                } else {
                    $('.ajax-msg-mineguard').empty().html('<div class="alert alert-danger"><a class="close" data-dismiss="alert">×</a><i class="icon icon-warning-sign"></i> <b><?= $Lang->get('GLOBAL__ERROR') ?> :</b> ' + data.msg + '</i></div>').fadeIn(500);
                }
            });
        }

        function addIP(data, response) {
            $('#table-ip').append('<tr><th>' + data['ip'] + '</th></tr>');
        }

        $(".delete_ip").click(function (event) {
            event.preventDefault();
            var inputs = {};
            inputs["data[_Token][key]"] = '<?= $csrfToken ?>';
            inputs['ip'] = $(this).attr('data-ip-id');
            $.post("<?= $this->Html->url(array('controller' => 'api', 'action' => 'delete_ip')) ?>", inputs, function (data) {
                if (data.statut) {
                    $('#' + inputs['ip']).fadeOut(500);
                } else {
                    $('.ajax-msg-ip').empty().html('<div class="alert alert-danger"><a class="close" data-dismiss="alert">×</a><i class="icon icon-warning-sign"></i> <b><?= $Lang->get('GLOBAL__ERROR') ?> :</b> ' + data2[0] + '</i></div>').fadeIn(500);
                }
            });
        });
        <?php } ?>
    </script>
