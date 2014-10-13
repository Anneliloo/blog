<? foreach ($posts as $post): ?>
    <div class="span8"><h1><a href="<?= BASE_URL ?>posts/view/<?= $post['post_id'] ?>"><?= $post['post_subject'] ?></a>
        </h1>

        <p><?= $post['post_text'] ?></p>

        <div><span class="badge badge-success"><p><?= $post['post_created'] ?></p></span>

            <div class="pull-right"> <? foreach ($tags[$post['post_id']] as $tag): ?> <a
                    href="<?= BASE_URL ?>tags/<?= $tags['tag_id'] ?>"><span class="label"
                                                                            style="background-color: #5bc0de"><?= $tag ?></span>
                    </a><? endforeach ?>
        </div>
    </div> <? endforeach ?>

<hr>
<form method="post">
    <input name="data[post_text]" type="text" placeholder="Pealkiri"/> <br><br>
    <textarea name="data[post_text]" id='' cols="30" rows="10" placeholder="Sisu"></textarea> <br><br>
    <button class="btn btn-default">Nupp</button>
</form>