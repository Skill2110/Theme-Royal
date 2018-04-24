<?php
$form_input = array('title' => $Lang->get('THEME__UPLOAD_LOGO'));
if(isset($config['logo']) && $config['logo']) {
    $form_input['img'] = $config['logo'];
    $form_input['filename'] = 'theme_logo.png';
}
echo $this->Html->script('admin/tinymce/tinymce.min.js');
?>

<section class="content">
    <div class="col-md-4">
        <div class="callout callout-success" style="border: none;"><h4>Suggestions & Support</h4>Je suis disponible sur le Discord de MineWeb ou en message privé pour toutes demandes : Skill !</div>
    </div>
    <div class="col-md-4">
        <div class="callout callout-warning" style="border: none;"><h4>Page de personnalisation</h4>Cette page est en développement, des paramètres de personnalisation supplémentaire serront bientôt ajoutés.</div>
    </div>
    <div class="col-md-4">
        <div class="callout callout-danger" style="border: none;"><h4>Copyright : Mineweb & Royal</h4>Il est interdit de modifier les crédits du footer.<br>Votre licence sera suspendue si vous le faites.</div>
    </div>
    <div class="row">
        <form method="post" enctype="multipart/form-data" data-ajax="false">
            <div class="col-md-12">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_accueil" data-toggle="tab">Accueil</a></li>
                        <li><a href="#tab_footer" data-toggle="tab">Footer</a></li>
                        <li><a href="#tab_other" data-toggle="tab">Autres options</a></li>
                    </ul>
                    <div class="tab-content" style="padding: 15px;">
                        <div class="tab-pane active" id="tab_accueil">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Phrase de bienvenue</label>
                                        <input type="text" class="form-control" name="welcome" value="<?= $config['welcome'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>URL de l'image de fond</label>
                                        <input type="text" class="form-control" name="bg" value="<?= $config['bg'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Nombre de news sur l'accueil</label>
                                        <select name="limit_news" class="form-control">
                                            <option value="1" <?= ($theme_config['limit_news'] == "1") ? ' selected' : '' ?>>1</option>
                                            <option value="2" <?= ($theme_config['limit_news'] == "2") ? ' selected' : '' ?>>2</option>
                                            <option value="3" <?= ($theme_config['limit_news'] == "3") ? ' selected' : '' ?>>3</option>
                                            <option value="4" <?= ($theme_config['limit_news'] == "4") ? ' selected' : '' ?>>4</option>
                                            <option value="5" <?= ($theme_config['limit_news'] == "5") ? ' selected' : '' ?>>5</option>
                                            <option value="6" <?= ($theme_config['limit_news'] == "6") ? ' selected' : '' ?>>6</option>
                                            <option value="7" <?= ($theme_config['limit_news'] == "7") ? ' selected' : '' ?>>7</option>
                                            <option value="8" <?= ($theme_config['limit_news'] == "8") ? ' selected' : '' ?>>8</option>
                                            <option value="9" <?= ($theme_config['limit_news'] == "9") ? ' selected' : '' ?>>9</option>
                                            <option value="10" <?= ($theme_config['limit_news'] == "10") ? ' selected' : '' ?>>10</option>
                                            <option value="999" <?= ($theme_config['limit_news'] == "999") ? ' selected' : '' ?>>Afficher toutes les news</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Record de connectés</label>
                                        <input type="text" class="form-control" name="record" value="<?= $config['record'] ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Titre de la présentation</label>
                                        <input type="text" class="form-control" name="first" value="<?= $config['first'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>URL de l'image de présentation</label>
                                        <input type="text" class="form-control" name="pre_img" value="<?= $config['pre_img'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Contenu de la présentation</label>
                                        <textarea class="form-control" rows="4" name="txt_head"><?= $config['txt_head'] ?></textarea>
                                    </div>
                                </div>
                                <div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Icône Font Awesome</label>
                                            <input type="text" class="form-control" name="icon1" value="<?= $config['icon1'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Titre</label>
                                            <input type="text" class="form-control" name="titre1" value="<?= $config['titre1'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Contenu</label>
                                            <textarea class="form-control" rows="4" name="contenu1"><?= $config['contenu1'] ?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Icône Font Awesome</label>
                                            <input type="text" class="form-control" name="icon2" value="<?= $config['icon2'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Titre</label>
                                            <input type="text" class="form-control" name="titre2" value="<?= $config['titre2'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Contenu</label>
                                            <textarea class="form-control" rows="4" name="contenu2"><?= $config['contenu2'] ?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Phrase de présentation</label>
                                            <input type="text" class="form-control" name="icon3" value="<?= $config['icon3'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>URL de l'image de fond</label>
                                            <input type="text" class="form-control" name="titre3" value="<?= $config['titre3'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Contenu</label>
                                            <textarea class="form-control" rows="4" name="contenu3"><?= $config['contenu3'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Titre de la présentation</label>
                                        <input type="text" class="form-control" name="pre_title_2" value="<?= $config['pre_title_2'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>URL de l'image de présentation</label>
                                        <input type="text" class="form-control" name="pre_img_2" value="<?= $config['pre_img_2'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Texte du bouton</label>
                                        <input type="text" class="form-control" name="btn_txt" value="<?= $config['btn_txt'] ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Lien du bouton</label>
                                        <input type="text" class="form-control" name="link_btn" value="<?= $config['link_btn'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Contenu de la présentation</label>
                                        <textarea class="form-control" rows="4" name="pre_contenu_2"><?= $config['pre_contenu_2'] ?></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Phrase 1</label>
                                        <input type="text" class="form-control" name="ph1" value="<?= $config['ph1'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Phrase 2</label>
                                        <input type="text" class="form-control" name="ph2" value="<?= $config['ph2'] ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>URL de l'image de fond</label>
                                        <input type="text" class="form-control" name="url_img_color" value="<?= $config['url_img_color'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Lien de redirection</label>
                                        <input type="text" class="form-control" name="link_color" value="<?= $config['link_color'] ?>">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <hr>
                                    <input name="data[_Token][key]" value="<?= $csrfToken ?>" type="hidden">
                                    <button class="btn btn-success" type="submit"><?= $Lang->get('GLOBAL__SUBMIT') ?></button>
                                    <a href="<?= $this->Html->url(array('controller' => 'theme', 'action' => 'index', 'admin' => true)) ?>"
                                       type="button"
                                       class="btn btn-default"><?= $Lang->get('GLOBAL__CANCEL') ?></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab_footer">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Titre du premier bloc</label>
                                        <input type="text" class="form-control" name="bloc1" value="<?= $config['bloc1'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Titre du deuxième bloc</label>
                                        <input type="text" class="form-control" name="bloc2" value="<?= $config['bloc2'] ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Texte afficher dans le footer (Ajoutez la balise "br" en fin de ligne pour faire un saut de ligne.)</label>
                                        <textarea class="form-control" rows="4" name="footer"><?= $config['footer'] ?></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Texte 1</label>
                                        <input type="text" class="form-control" name="txt1" value="<?= $config['txt1'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Texte du lien 1</label>
                                        <input type="text" class="form-control" name="txt_link1" value="<?= $config['txt_link1'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>URL du lien 1</label>
                                        <input type="text" class="form-control" name="link1" value="<?= $config['link1'] ?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Texte 2</label>
                                        <input type="text" class="form-control" name="txt2" value="<?= $config['txt2'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Texte du lien 2</label>
                                        <input type="text" class="form-control" name="txt_link2" value="<?= $config['txt_link2'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>URL du lien 2</label>
                                        <input type="text" class="form-control" name="link2" value="<?= $config['link2'] ?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Texte 3</label>
                                        <input type="text" class="form-control" name="txt3" value="<?= $config['txt3'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Texte du lien 3</label>
                                        <input type="text" class="form-control" name="txt_link3" value="<?= $config['txt_link3'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>URL du lien 3</label>
                                        <input type="text" class="form-control" name="link3" value="<?= $config['link3'] ?>">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <hr>
                                    <input name="data[_Token][key]" value="<?= $csrfToken ?>" type="hidden">
                                    <button class="btn btn-success" type="submit"><?= $Lang->get('GLOBAL__SUBMIT') ?></button>
                                    <a href="<?= $this->Html->url(array('controller' => 'theme', 'action' => 'index', 'admin' => true)) ?>"
                                       type="button"
                                       class="btn btn-default"><?= $Lang->get('GLOBAL__CANCEL') ?></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab_other">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label><?= $Lang->get('THEME__FAVICON_URL') ?></label>
                                        <input type="text" class="form-control" name="favicon_url" value="<?= $config['favicon_url'] ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <?= $this->element('form.input.upload.img', $form_input) ?>
                                </div>
                                <div class="col-md-12">
                                    <hr>
                                    <input name="data[_Token][key]" value="<?= $csrfToken ?>" type="hidden">
                                    <button class="btn btn-success" type="submit"><?= $Lang->get('GLOBAL__SUBMIT') ?></button>
                                    <a href="<?= $this->Html->url(array('controller' => 'theme', 'action' => 'index', 'admin' => true)) ?>"
                                       type="button"
                                       class="btn btn-default"><?= $Lang->get('GLOBAL__CANCEL') ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>