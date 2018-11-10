<div class="row">
    <div class="col-sm-8">
        <?php foreach (App\Table\Article::getLast() as $post): ?>

            <h2><a href="<?= $post->url ?>"><?= $post->titre; ?></a></h2>
            <p><em><?= $post->categorie; ?></em></p>

            <p><?= $post->extrait; ?></p>
        <?php endforeach; ?>
    </div>
    <div class="col-sm-4">
        <ul>
            <?php foreach (App\Table\Categorie::all() as $categorie): ?>
                <li><a href="<?= $categorie->url; ?>"><?= $categorie->titre ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>

<!--TODO::https://youtu.be/3pACUHqop9U?list=PLjwdMgw5TTLVDKy8ikf5Df5fnMqY-ec16&t=381-->

<!--<h1>homepage</h1>
<a href="index.php?p=single">Single</a>-->