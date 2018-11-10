<?php

//requete preparé (protege des injec sql)
$post = App\App::getDb()->prepare('SELECT * FROM articles WHERE id = ?',[$_GET['id']],'App\Table\Article',true);
//TODO https://youtu.be/3pACUHqop9U?list=PLjwdMgw5TTLVDKy8ikf5Df5fnMqY-ec16
?>

<h1><?= $post->titre; ?></h1>
<p><?= $post->contenu; ?></p>