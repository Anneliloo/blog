<ul class="list-group">
    <? foreach ($users as $attribute => $value): ?>
        <li class="list-group-item"><?=$attribute?>:<?=$value?></a></li>
    <? endforeach ?>
</ul>