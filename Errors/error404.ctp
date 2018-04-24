<div class="container">
    <div class="row">
        <div class="col-md-12">
            <section id="not-found" class="center">
                <h2>404</h2>
                <p><?= $Lang->get('ERROR__404_CONTENT', array('{URL}' => $url)) ?></p>
                <div class="row">
                    <div class="col-lg-6 col-lg-offset-3">
                        <a style="width: 100%;" href="<?= $this->Html->url('/') ?>" class="button"><?= $Lang->get('GLOBAL__HOME') ?></a>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>