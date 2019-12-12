<h1 class="text-center">
    Welcome to the my best site!
</h1>
<hr>
<ul>
    <? foreach ($info as $item) : ?>
        <li><?= $item['name'] ?></li>
    <? endforeach ?>
</ul>
<hr>