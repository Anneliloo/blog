<ul class="list-group">
    <? foreach ($user as $attribute => $value): ?>
        <li class="list-group-item"><?= $attribute ?>:<?= $value ?></li>
    <? endforeach ?>
</ul>

<table border="1">
    <tr>
        <th rowspan="2">nimi</th>
        <th colspan="3">I periood</th>
        <th>kokku</th>
    </tr>
    <tr>
        <? for ($n = 1; $n <= 30; $n++): ?>
            <td><?= $n ?></td>
        <? endfor ?>
        <td>ph</td>
    </tr>
    <tr>
        <td>eesti keel</td>
        <td>5</td>
        <td>5</td>
        <td>5</td>
        <td>5</td>
    </tr>
</table>