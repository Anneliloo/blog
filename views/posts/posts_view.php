<div class="span8">
    <h1><?=BASE_URL?>posts/view/<?=$post['post_id']?></h1>
    <a><?=$post['post_subject']?></a>
    <div>
        <span class="badge badge-success">Posted 2012-08-02 20:47:04</span><div class="pull-right"><span class="label">alice</span>
            <span class="label">story</span> <span class="label">blog</span> <span class="label">personal</span></div>
        <?foreach ($tags as $tag):?><a href"tags/view/<?=$tag['tag_name']?>"><span class"label label-info"><?$tag['tag_name'?></span></a> <?endforeach>
</div>