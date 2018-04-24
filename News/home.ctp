<style>
    #slider .tp-bullets {
        display: none;
    }
    @media screen and (min-width: 0px) and (max-width: 720px) {
        .mobile-hide { display: none; }
    }
</style>
<div id="slider" class="rev_slider slidercustom <?php if(empty($theme_config['header']) || $theme_config['header'] == "Oui") { echo ''; } else { echo 'mobile-hide'; } ?>" style="max-height: 530px;">
    <ul>
        <li data-transition="fade" style="max-height: 530px;">
            <?php if(empty($theme_config['bg'])) { ?>
                <img src="https://placeholdit.imgix.net/~text?txtsize=150&txt=Background&w=1920&h=530">
            <?php } else { ?>
                <img src="<?= $theme_config['bg']; ?>">
            <?php } ?>
            <?php if(empty($theme_config['particules']) || $theme_config['particules'] == "Oui") { ?>
                <div id="particles-js"></div>
            <?php } ?>
        </li>
    </ul>
</div>

<div style="margin-left: 15px; margin-right: 15px;">
    <div >

            <div class="col-lg-10">

            <div class="article_title theme-color-background">
                <h1>Derniers articles</h1>
            </div>

            <?php if(!empty($search_news)) { $i = 0; foreach ($search_news as $news) { $i++; if($i > 6) { break; } ?>
            <div class="col-md-6">
                <div class="news-all" style="width:100%;">
                    <a href="<?= $this->Html->url(array('controller' => 'blog', 'action' => $news['News']['slug'])); ?>"><h2><?= $news['News']['title']; ?></h2></a>
                    <span class="date theme-color-text"><?= $Lang->date($news['News']['created']); ?></span>
                    <div class="texte"><p><?= $this->Text->truncate($news['News']['content'], 700, array('ellipsis' => '...', 'html' => true)); ?></p></div>
                    <div class="likes">
                        <?= $news['News']['count_likes'] ?> <i class="fa fa-thumbs-up"></i>
                    </div>
                    <div class="commentaires">
                        <?= $news['News']['count_comments'] ?> <i class="fa fa-comments" aria-hidden="true"></i>
                    </div>
                    <a href="<?= $this->Html->url(array('controller' => 'blog', 'action' => $news['News']['slug'])); ?>" class="btn btn-primary pull-right"><?= $Lang->get('NEWS__READ_MORE'); ?></a>
                </div>
            </div>
            <?php } ?>
            <?php } else { echo '<div class="alert alert-danger">'.$Lang->get('NEWS__NONE_PUBLISHED').'</div>'; } ?>

                <div id="gamemodes">
                    <div class="">
                        <div id="gamemodes-list" class="row">
                            <div class="mode col-md-3 col-sm-3">
                                <div class="mode-description">
                                    <br>
                                    <br>
                                    <br>
                                    <h3 style="text-align: center;">Univers</h3>
                                    <p style="text-align: center;">Plongez dans l'histoire de Legacia, accomplissez les quêtes et découvrez notre univers.<br><br><br></p>
                                </div>
                            </div>
                            <div class="mode col-md-3 col-sm-3">
                                <div class="mode-description">
                                    <br>
                                    <br>
                                    <br>
                                    <h3 style="text-align: center;">Niveaux</h3>
                                    <p style="text-align: center;">Des caractéristiques et des niveaux comme dans un RPG. Profitez d'une expérience unique !<br><br><br></p>
                                </div>
                            </div>
                            <div class="mode col-md-3 col-sm-3">
                                <div class="mode-description">
                                    <br>
                                    <br>
                                    <br>
                                    <h3 style="text-align: center;">Team créative</h3>
                                    <p style="text-align: center;">Notre fantastique team est toujours a la recherche de nouveau contenu.<br><br><br><br></p>
                                </div>
                            </div>
                            <div class="mode col-md-3 col-sm-3">
                                <div class="mode-description">
                                    <br>
                                    <br>
                                    <br>
                                    <h3 style="text-align: center;">Communauté</h3>
                                    <p style="text-align: center;">Active sur le jeu, sur le forum et sur les serveurs vous vous ferez de nombreux amis en jouant.<br><br><br></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

        <div class="col-md-2">
            <div style="margin-top: 30px;">
                <a href="shop"><img src="https://image.noelshack.com/fichiers/2018/01/4/1515083018-boutique-pour-ce-faire-des-thunes.png" style="width: 100%"></a>
            </div>
            <div style="margin-top: 30px;">
                <a href="https://twitter.com/xxx"><img src="https://image.noelshack.com/fichiers/2018/01/4/1515083017-twitwi.png" style="width: 100%"></a>
            </div>
            <div style="margin-top: 30px;">
                <a href="/vote"><img src="https://image.noelshack.com/fichiers/2018/01/4/1515083018-voter-pour-le-serveur-de-bg.png" style="width: 100%"></a>
            </div>
            <div style="margin-top: 30px;margin-bottom: 30px;">
                <a href="/forum"><img src="https://image.noelshack.com/fichiers/2018/01/4/1515083018-rejoindre-le-forum.png" style="width: 100%"></a>
            </div>
        </div>

    </div>
</div>


<?= $Module->loadModules('home') ?>