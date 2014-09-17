

<?foreach( $posts as $post ):?>
    <?foreach ($tags[$post['post_id']]as $tag):?>
        <a href="#" xmlns="http://www.w3.org/1999/html"><span class="label" style="background-color: #5bc0de"><?=$tag?></span></a>
    <?endforeach?>
    <h1><a href="<?=BASE_URL?>posts/view/<?=$post['post_id']?>"><?=$post['post_subject']?></a></h1>
    <p><?=$post['post_text']?></p>
        <div>
            <span class="badge">Posted 2012-08-02 20:47:04</span><div class="pull-right"><span class="label label-default">alice</span>
                </div>
        </div>

<?endforeach?>

<hr>
<form method="post">
    <input name="data[post_text]" type="text"  placeholder="Pealkiri"/> <br><br>
    <textarea name="data[post_text]" id='' cols="30" rows="10" placeholder="Sisu"></textarea> <br><br>
    <button class="btn btn-default">Nupp</button>
</form>