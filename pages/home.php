<?php foreach (App\Table\Article::getLast() as $post): ?>
        <h2><a href="<?= $post->url ?>"><?= $post->titre; ?></a></h2>

        <p><?= $post->extrait; ?></p>
<?php endforeach; ?>

//TODO::https://youtu.be/3pACUHqop9U?list=PLjwdMgw5TTLVDKy8ikf5Df5fnMqY-ec16&t=381

<!--<h1>homepage</h1>
<a href="index.php?p=single">Single</a>-->