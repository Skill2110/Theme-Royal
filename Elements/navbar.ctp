<header id="header-container">
    <div id="header">
        <div class="container">
            <div class="left-side">
                <div id="logo">
                    <a href="<?= $this->Html->url('/') ?>">
                        <?php
                        if(isset($theme_config['logo']) && !empty($theme_config['logo'])) {
                            echo '<img src="'.$theme_config['logo'].'">';
                        }
                        ?>
                    </a>
                </div>
                <div class="mmenu-trigger">
                    <button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
                    </button>
                </div>
                <nav id="navigation" class="style-1">
                    <ul id="responsive">
                        <li class="<?php if($this->here == $this->Html->url('/')) { ?>current<?php } ?>"><a href="<?= $this->Html->url('/') ?>"><?= $Lang->get('GLOBAL__HOME') ?></a></li>
                        <?php if(!empty($nav)): ?>
                            <?php $i = 0; ?>
                            <?php foreach ($nav as $key => $value): ?>
                                <?php if(empty($value['Navbar']['submenu'])): ?>
                                    <li class="<?php if($this->here == $value['Navbar']['url']) { ?>current<?php } ?>"><a href="<?= $value['Navbar']['url'] ?>"><?= $value['Navbar']['name'] ?></a></li>
                                <?php else: ?>
                                    <li>
                                        <a href="#"><?= $value['Navbar']['name'] ?></a>
                                        <ul>
                                            <?php
                                            $submenu = json_decode($value['Navbar']['submenu']);
                                            foreach ($submenu as $k => $v) {
                                            ?>
                                                <li><a href="<?= rawurldecode(rawurldecode($v)) ?>"<?= ($value['Navbar']['open_new_tab']) ? ' target="_blank"' : '' ?>><?= rawurldecode(str_replace('+', ' ', $k)) ?></a></li>
                                            <?php } ?>
                                        </ul>
                                    </li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </ul>
                </nav>
                <div class="clearfix"></div>
            </div>
            <?php if(!$isConnected) { ?>
                <div class="right-side">
                    <div class="header-widget">
                        <div class="header-widget">
                            <div class="user-menu">
                                <div class="user-name">
                                    <span><img src="<?php echo $this->Html->url(['controller' => 'API', 'action' => 'get_head_skin', 'plugin' => false, 'Steve']); ?>"></span>
                                    Membre
                                </div>
                                <ul>
                                    <li><a href="#" data-toggle="modal" data-target="#login"><i class="fa fa-sign-in" aria-hidden="true"></i> Connexion</a></li>
                                    <li><a href="#" data-toggle="modal" data-target="#register"><i class="fa fa-user-plus" aria-hidden="true"></i> Inscription</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } else { ?>
                <div class="right-side">
                    <div class="header-widget">
                        <div class="header-widget">
                            <div class="user-menu">
                                <div class="user-name">
                                    <span><img src="<?php echo $this->Html->url(['controller' => 'API', 'action' => 'get_head_skin', 'plugin' => false, $user['pseudo']]); ?>"></span>
                                    <?= $user['pseudo'] ?>
                                </div>
                                <ul>
                                    <?php if($Permissions->can('ACCESS_DASHBOARD')) { ?>
                                        <li><a href="<?= $this->Html->url(array('controller' => '', 'action' => 'index', 'plugin' => 'admin')) ?>"><i class="fa fa-home"></i> Administration</a></li>
                                    <?php } ?>
                                    <li><a href="<?= $this->Html->url(array('controller' => 'profile', 'action' => 'index', 'plugin' => null)) ?>"><i class="fa fa-user"></i> <?= $Lang->get('USER__PROFILE') ?></a></li>
                                    <li><a href="#notifications_modal" onclick="notification.markAllAsSeen(2)" data-toggle="modal"><i class="fa fa-bell"></i> Notifications</a></li>
                                    <li><a href="<?= $this->Html->url(array('controller' => 'user', 'action' => 'logout', 'plugin' => null)) ?>"><i class="fa fa-power-off"></i> Déconnexion</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</header>
<div class="clearfix"></div>
