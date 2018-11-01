<?php

$pdo = new PDO('mysql:dbname=phptestsmallapp;host=127.0.0.1','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//$count = $pdo->exec('INSERT INTO articles SET titre="Mon Titre", date="'.date('Y-m-d H:i:s').'"');
$res = $pdo->query('SELECT * FROM articles');
$datas = $res->fetchAll(PDO::FETCH_OBJ);

var_dump($datas[0]->titre);

//TODO:https://youtu.be/weE2adYHPG0?list=PLjwdMgw5TTLVDKy8ikf5Df5fnMqY-ec16&t=606

?>


<h1>homepage</h1>
<a href="index.php?p=single">Single</a>