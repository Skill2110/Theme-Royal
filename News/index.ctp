<br>
<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-default">
                    <div class="panel-body page" style="padding: 30px;">
                        <?= $news['News']['content'] ?>
                        <?= $Lang->get('GLOBAL__BY') ?> <?= $news['News']['author'] ?>, le <?= $Lang->date($news['News']['created']); ?>.</li>
                        <button id="<?= $news['News']['id'] ?>" type="button" class="btn btn-primary pull-right like<?= ($news['News']['liked']) ? ' active' : '' ?>"<?= (!$Permissions->can('LIKE_NEWS')) ? ' disabled' : '' ?>><?= $news['News']['count_likes'] ?> <i class="fa fa-thumbs-up"></i></button><br>
                    </div>
                </div>

                <?php if($Permissions->can('COMMENT_NEWS')) { ?>
                <div class="panel panel-default">
                    <div class="panel-body page" style="padding: 30px;">
                        <div id="comments">
                            <div class="add-comment"></div>
                            <div class="row comment" id="comment-1" style="margin-right: 0px;margin-left: 0px;">
                                <div class="col-sm-3 col-md-2 text-center-xs">
                                    <p><img style="border-radius: 6px;" src="<?= $this->Html->url(array('controller' => 'API', 'action' => 'get_head_skin', $user['pseudo'], '150')); ?>" alt=""></p>
                                    <h5 class="text-uppercase" style="text-align: center;"><?= $user['pseudo']; ?></h5>
                                </div>
                                <div class="col-sm-9 col-md-10">
                                    <form method="POST" data-ajax="true" action="<?= $this->Html->url(array('controller' => 'news', 'action' => 'add_comment')) ?>" data-callback-function="addcomment" data-success-msg="false">
                                    <input name="news_id" value="<?= $news['News']['id'] ?>" type="hidden">
                                    <div class="form-group">
                                        <textarea style="min-height: 160px;" name="content" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-comment-o"></i> <?= $Lang->get('GLOBAL__SUBMIT') ?></button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>

                <?php
                $i = 0;
                $count = $news['Comment'];
                if($count > 0) {
                foreach ($news['Comment'] as $comment) {
                $i++;
                ?>
                <div class="panel panel-default comment <?= ($i == $count) ? ' last' : ''; ?> id="comment-<?= $comment['id']; ?>">
                    <div class="panel-body page" style="padding: 30px;">
                        <div id="comments">
                            <div class="add-comment"></div>
                            <div class="row comment" id="comment-1" style="margin-right: 0px;margin-left: 0px;">
                                <div class="col-sm-3 col-md-2 text-center-xs">
                                    <p><img style="border-radius: 6px;" src="<?= $this->Html->url(array('controller' => 'API', 'action' => 'get_head_skin', $comment['author'], '150')); ?>" alt=""></p>
                                    <h5 style="text-align: center;"><?= $comment['author']; ?></h5>
                                    <?php if($Permissions->can('DELETE_COMMENT') OR $Permissions->can('DELETE_HIS_COMMENT') AND $user['pseudo'] == $v['author']) {
                                        echo '<p class="reply"><a id="'.$comment['id'].'" class="btn btn-primary btn-block comment-delete" href="#"><i class="fa fa-times"></i> '.$Lang->get('GLOBAL__DELETE').'</a></p>';
                                    }
                                    ?>
                                </div>
                                <div class="col-sm-9 col-md-10">
                                    <p style="min-height:115px;">
                                        <?= before_display($comment['content']); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>

<?= $Module->loadModules('news') ?>
<script>
    function addcomment(data) {
        var d = new Date();
        var comment = '';
        comment += '<div class="row comment">';
          comment += '<div class="col-sm-3 col-md-2 text-center-xs">';
            comment += '<p>';
              comment += '<img style="border-radius: 6px;" src="<?= $this->Html->url(array('controller' => 'API', 'action' => 'get_head_skin', $user['pseudo'], '150')) ?>" alt="">';
            comment += '</p>';
            comment += '<h5 style="text-align: center;"><?= $user['pseudo'] ?></h5>';
          comment += '</div>';
          comment += '<div class="col-sm-9 col-md-10">';
            comment += '<p>'+data['content']+'</p>';
          comment += '</div>';
        comment += '</div>';
        $('.add-comment').hide().html(comment).fadeIn(1500);
        $('#form-comment-fade-out').slideUp(1500);
    }
     $(".comment-delete").click(function(e) {
       e.preventDefault();
        comment_delete(this);
    });

    function comment_delete(e) {
        var inputs = {};
        var id = $(e).attr("id");
        inputs["id"] = id;
        inputs["data[_Token][key]"] = '<?= $csrfToken ?>';
        $.post("<?= $this->Html->url(array('controller' => 'news', 'action' => 'ajax_comment_delete')) ?>", inputs, function(data) {
          if(data == 'true') {
            $('#comment-'+id).slideUp(500);
          } else {
            console.log(data);
          }
        });
    }
</script>