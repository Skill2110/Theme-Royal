<div id="footer" class="dark">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-6">
                <h4><?= $theme_config['bloc1']; ?></h4>
                <p><?= $theme_config['footer']; ?></p>
            </div>
            <div class="col-md-4 col-sm-6 ">
                <h4><?= $theme_config['bloc2']; ?></h4>
                <ul class="footer-links">
                    <li><a href="shop">Boutique</a></li>
                    <li><a href="forum">Forum</a></li>
                    <li><a href="staff">Staff</a></li>
                </ul>
                <ul class="footer-links">
                    <li><a href="vote">Votez</a></li>
                    <li><a href="support">Support</a></li>
                    <li><a href="faq">FAQ</a></li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-3  col-sm-12">
                <h4>Informations</h4>
                <div class="text-widget">
                    <?= $theme_config['txt1'] ?> : <span><a href="<?= $theme_config['link1'] ?>"><?= $theme_config['txt_link1'] ?></a></span><br>
                    <?= $theme_config['txt2'] ?> : <span><a href="<?= $theme_config['link2'] ?>" target="_blank"><?= $theme_config['txt_link2'] ?></a></span><br>
                    <?= $theme_config['txt3'] ?> : <span><a href="<?= $theme_config['link3'] ?>" target="_blank"><?= $theme_config['txt_link3'] ?></a></span><br>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="copyrights">
                    © 2018 <a href="#" target="_blank"><?= $website_name ?></a> | Tous droits réservés.<span style="float: right;">Propulsé par <a href="https://mineweb.org" target="_blank">Mineweb</a>. Thème par <a href="https://skilldev.be" target="_blank">Skill</a>.</span>
                </div>
            </div>
        </div>
    </div>
</div>