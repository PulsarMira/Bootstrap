<?php
// данные конфигурации
$dbhost = 'localhost';
$dbname = 'mybase';

// подключение к базе
$m = new Mongo("mongodb://$dbhost");
$db = $m->$dbname;

// выбираем коллекцию
$collection = $db->tovar;

// вытаскиваем данные
$cursor = $collection->find();
?>
