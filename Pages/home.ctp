<div class="main-search-container" data-background-image="<?php if(empty($theme_config['bg'])) { echo "/theme/Royal/img/1920x500.png"; } else { echo $theme_config['bg']; } ?>">
    <div class="main-search-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2><?= $theme_config['welcome']; ?></h2>
                    <h4><?= ($banner_server) ? $banner_server : $Lang->get('SERVER__STATUS_OFF') ?>.</h4>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-4 margin-top-80">
                <?php if(empty($theme_config['pre_img'])) { ?>
                    <img src="/theme/Royal/img/logosoon.png" alt="Une image">
                <?php } else { ?>
                    <img src="<?= $theme_config['pre_img']; ?>" alt="Une image">
                <?php } ?>
            </div>
            <div class="col-md-8">
                <h2 class="headline centered margin-top-80">
                    <?php if(empty($theme_config['first'])) { ?>
                    <!--Si le titre est vide ont affiche rien.-->
                    <?php } else { ?>
                        <?= $theme_config['first']; ?>
                    <?php } ?>
                    <span style="text-align: justify;" class="margin-top-25">
                        <?php if(empty($theme_config['first'])) { ?>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel lectus sit amet metus dapibus pretium at id quam.

                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel lectus sit amet metus dapibus pretium at id quam.

                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel lectus sit amet metus dapibus pretium at id quam.
                        <?php } else { ?>
                            <?= $theme_config['txt_head']; ?>
                        <?php } ?>
                    </span>
                </h2>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row icons-container">
        <div class="col-md-4">
            <div class="icon-box-2 with-line">
                <i class="<?= $theme_config['icon1']; ?>" aria-hidden="true"></i>
                <h3><?= $theme_config['titre1']; ?></h3>
                <p><?= $theme_config['contenu1']; ?></p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="icon-box-2 with-line">
                <i class="<?= $theme_config['icon2']; ?>" aria-hidden="true"></i>
                <h3><?= $theme_config['titre2']; ?></h3>
                <p><?= $theme_config['contenu2']; ?></p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="icon-box-2">
                <i class="<?= $theme_config['icon3']; ?>" aria-hidden="true"></i>
                <h3><?= $theme_config['titre3']; ?></h3>
                <p><?= $theme_config['contenu3']; ?></p>
            </div>
        </div>
    </div>
</div>

<br>
<br>

<div class="parallax"
     data-background="<?= $theme_config['pre_img_2']; ?>"
     data-color="#36383e"
     data-color-opacity="0.6"
     data-img-width="800"
     data-img-height="505">
    <div class="text-content white-font">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-8">
                    <h2><?= $theme_config['pre_title_2']; ?></h2>
                    <p><?= $theme_config['pre_contenu_2']; ?></p>
                    <a href="<?= $theme_config['link_btn']; ?>" class="button margin-top-25"><?= $theme_config['btn_txt']; ?></a>
                </div>
            </div>
        </div>
    </div>
</div>

<h3 class="headline centered margin-bottom-35 margin-top-70">Quelques un de nos statistiques !</h3>

<div class="container">
    <div class="row icons-container">
        <div class="col-md-4">
            <div class="icon-box-2">
                <span style="font-size: 80px;color: #f1a700;" class="count"><?= $server_infos['GET_PLAYER_COUNT'] ?></span>
                <h3>Joueurs connectés</h3>
            </div>
        </div>
        <div class="col-md-4">
            <div class="icon-box-2">
                <span style="font-size: 80px;color: #f1a700;">
                    <?php if(empty($theme_config['record'])) { ?>
                        N/A
                    <?php } else { ?>
                        <?= $theme_config['record']; ?>
                    <?php } ?>
                </span>
                <h3>Joueurs simultanés</h3>
            </div>
        </div>
        <div class="col-md-4">
            <div class="icon-box-2">
                <span style="font-size: 80px;color: #f1a700;"><?= ClassRegistry::init('Users')->find('count') ?></span>
                <h3>Joueurs inscrits</h3>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="blog-page">
        <div class="row">
            <div class="col-lg-12 col-md-12 padding-right-30">
                <h2 class="headline centered margin-top-80">L'actualité du serveur !</h2>
                <?php if(empty($theme_config['limit_news'])) { $theme_config['limit_news'] = "1"; } ?>
                <?php $i = 0; foreach($search_news as $news) { $i++; if($i > $theme_config['limit_news']) { break; } ?>
                <div class="blog-post">
                    <div class="post-content">
                        <h3><a href="#"><?= $news['News']['title']; ?></a></h3>
                        <ul class="post-meta">
                            <li>Publié le <?= $Lang->date($news['News']['created']); ?></li>
                            <li><a href="#"><?= $news['News']['count_likes'] ?> likes</a></li>
                            <li><a href="#"><?= $news['News']['count_comments'] ?> commentaires</a></li>
                        </ul>
                        <p><?= $this->Text->truncate($news['News']['content'], 400, array('ellipsis' => '...', 'html' => true)); ?></p>
                        <a href="<?= $this->Html->url(array('controller' => 'blog', 'action' => $news['News']['slug'])); ?>" class="read-more"><?= $Lang->get('NEWS__READ_MORE'); ?> <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<a href="<?= $theme_config['link_color']; ?>" class="flip-banner parallax margin-top-65" data-background="<?= $theme_config['url_img_color']; ?>" data-color="#f1a700" data-color-opacity="0.85" data-img-width="2500" data-img-height="1666">
    <div class="flip-banner-content">
        <h2 class="flip-visible"><?= $theme_config['ph1']; ?></h2>
        <h2 class="flip-hidden"><?= $theme_config['ph2']; ?></h2>
    </div>
</a>

<?= $Module->loadModules('home') ?>
