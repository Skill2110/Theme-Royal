<br>
<?= $this->Html->css('Staff.css.css'); ?>
<?= $this->Html->css('Staff.font-awesome.min.css'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php if(empty($staffs)): ?>
                <h4 class="text-center"><?= $Lang->get("EMPTY_STAFF") ?></h4>
            <?php endif; ?>
            <?php foreach ($staffs as $k=>$v):
                $v = current($v);
                ?>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading text-center" style="background-color: #f1a700;border-bottom: 0px"><h3 style="display: inline-block;color: #ffffff;"><?= $v['user'] ?></h3></div>
                        <div class="panel-body text-center">
                            <div class="img-staff-h">
                                <?php if(!empty($v['image'])) { ?>
                                    <img src="<?= $v['image'] ?>" alt="<?= $v['user'] ?>" class="image" style="width:200px; min-width:100%">
                                <?php } else { ?>
                                    <?php
                                    $lien = "https://api.mojang.com/users/profiles/minecraft/".$v['user'];
                                    if(file_get_contents($lien)){ ?>
                                        <img src="<?php echo $this->Html->url(['controller' => 'API', 'action' => 'get_head_skin', 'plugin' => false, $v['user']]); ?>/255">
                                    <?php } else { ?>
                                        <img src="<?php echo $this->Html->url(['controller' => 'API', 'action' => 'get_head_skin', 'plugin' => false, $v['user']]); ?>/255">
                                    <?php } ?>
                                <?php } ?>
                                <div class="middle">
                                    <?php if(!empty($v['facebook'])): ?>
                                        <a class="discord" href="<?= $v['facebook'] ?>"><i class="fa fa-discord"></i></a>
                                    <?php endif; ?>
                                    <?php if(!empty($v['twitter'])): ?>
                                        <a class="twitter" href="<?= $v['twitter'] ?>"><i class="fa fa-twitter"></i></a>
                                    <?php endif; ?>
                                    <?php if(!empty($v['youtube'])): ?>
                                        <a class="youtube" href="<?= $v['youtube'] ?>"><i class="fa fa-youtube"></i></a>
                                    <?php endif; ?>
                                    <?php if(!empty($v['description'])): ?>
                                        <div class="text"><?= cut($v['description'], 75) ?></div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer text-center" style="background-color: #f1a700;border-top: 0px">
                            <h4 style="color:#ffffff;">
                                <?= $v['rank'] ?>
                            </h4>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<div class="clearfix"></div>
<style>
    .panel-body {
        padding: 0px 0 0 !important;
        margin: 0 !important;
    }
</style>