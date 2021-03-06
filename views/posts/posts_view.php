<? foreach ($tags as $tag): ?><a href="tags/view/<?=$tag['tag_name']?>"><span class="label label-info"><?= $tag['tag_name'] ?> </span>
    </a><? endforeach ?>
<div class="span8"> <h1><?= $post['post_subject'] ?></h1>

    <p><?= $post['post_text'] ?></p>
    <p><?= $post['user_id'] ?></p>
    <div> <span class="badge badge-success"><p><?=$post['post_created']?></p></span>

    </div>
</div>

<div class="container">
    <div class="row">
        <div class="panel panel-default widget">
            <div class="panel-heading">
                <span class="glyphicon glyphicon-comment"></span>

                <h3 class="panel-title">
                    Recent Comments</h3>
                <span class="label label-info">
                    78</span>
            </div>
            <div class="panel-body">
                <ul class="list-group">
                    <? foreach ($comments as $comment): ?>
                        <li class="list-group-item">
                        <div class="row">
                            <div class="col-xs-2 col-md-1">
                                <img src="http://placehold.it/80" class="img-circle img-responsive" alt=""/></div>
                            <div class="col-xs-10 col-md-11">
                                <div>
                                    <div class="mic-info">
                                        By: <a href="#"><?= $comment['comment_author'] ?></a>
                                        on <?= $comment['comment_date'] ?>
                                    </div>
                                </div>
                                <div class="comment-text">
                                    <?= $comment['comment_text'] ?>
                                </div>
                                <div class="action">
                                    <button type="button" class="btn btn-primary btn-xs" title="Edit">
                                        <span class="glyphicon glyphicon-pencil"></span>
                                    </button>
                                    <button type="button" class="btn btn-success btn-xs" title="Approved">
                                        <span class="glyphicon glyphicon-ok"></span>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-xs" title="Delete">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        </li><? endforeach ?>
                </ul>

                <form method="post">
                    <p>
                        <textarea name="data[comment_text]" style="width: 100%" rows="5"
                                  placeholder="Sinu kommentaar"></textarea></p>

                    <p>
                        <button class="btn btn-info">Sisesta kommentaar</button>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>
