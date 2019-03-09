<?php

<?php

$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
var_dump($manager);

?>

$con = new MongoClient(); // подключаемся к mongodb
$con-> mybase; // выбираем базу данных test (или так $con-> selectDB(test);)
$con-> mybase -> tovar; // выбираем бд и коллекцию (или так $con-> selectDB(test)-> selectCollection(persons);)
$con-> close(); // закрываем соединение
print_r($con-> listDBs()); // показывает список всех бд

// все коллеции в определенной бд
$con = new MongoClient();
$list= $con-> test-> listCollections();
foreach ($list as $collection) {
    echo "<p>" . $collection . "</p>";
}

// имена всех коллеций
$con = new MongoClient();
$list= $con-> test-> getCollectionNames();
foreach ($list as $collection) {
    echo "<p>" . $collection . "</p>";
}

// создать документ в коллеции
$steve = array(
    "name" => "Steve",
    "age" => 25,
    "languages"=>  array("engish", "french"),
    "company" => array(
        "name" =>  "Apple",
        "year" =>  1976
    )
);
$con = new MongoClient();
$collection= $con-> test-> persons;
$collection->insert($steve);

// или так
$bill = array(
    "name" => "Bill",
    "age" => 24,
    "languages"=>  array("engish", "french"),
    "company" => array(
        "name" =>  "Microsoft",
        "year" =>  1974
    )
);
$con = new MongoClient();
$collection= $con-> test-> persons;
$options = array("w" => 1, "wtimeout" => 5000, "timeout" => 5000);
$collection->insert($bill, $options);

// выбрать единичный объект
$con = new MongoClient();
$collection= $con-> test-> persons;
print_r($collection->findOne());
$con->close();

// свойство отдельного значения
$con = new MongoClient();
$collection= $con-> test-> persons;
$person = $collection->findOne();
echo $person["name"];
$con->close();

// ФИЛЬТРАЦИЯ
$con = new MongoClient();
$collection= $con-> test-> persons;

// фильтрация по возрасту
$filter=array("age"=>23);
$person = $collection->findOne($filter);
echo $person["name"];

echo "</br>";

// фильтрация по компании
$filter=array("company"=>array("name" => "Microsoft", "year" => 1974));
$person = $collection->findOne($filter);
echo $person["name"];

$con->close();

// поиск и фильтрация во вложенных объектах
$con = new MongoClient();
$collection= $con-> test-> persons;

// фильтрация по названию компании
$filter=array("company.name"=> "Microsoft");
$person = $collection->findOne($filter);
echo $person["name"];

$con->close();

// перебирает все документы в цикле
$con = new MongoClient();
$collection= $con-> test-> persons;

$list = $collection->find();
while($document = $list->getNext())
{
    echo "<p> Name:" . $document["name"] . "</br>";
    echo "Age:" . $document["age"] . "</p>";
}

 $con->close();

 // с использованием фильтрации
 $con = new MongoClient();
$collection= $con-> test-> persons;

// фильтрация по возрасту
$filter=array("age"=>23);
$list = $collection->find($filter);
while($document = $list->getNext())
{
    echo "<p> Name:" . $document["name"] . "</br>";
    echo "Age:" . $document["age"] . "</p>";
}

 $con->close();

// регулярные выражения
$con = new MongoClient();
$collection= $con-> test-> persons;

$regex=new MongoRegex("/Ma/i");
$list = $collection->find(array("name"=> $regex));

while($document = $list->getNext())
{
    echo "<p> Name:" . $document["name"] . "</p>";
}
 $con->close();

 // УПРАВЛЕНИЕ ВЫБОРКОЙ
 // подсчет количества документов
 $con = new MongoClient();
$collection= $con-> test-> persons;

$list = $collection->find();

echo $list -> count();

 $con->close();

 // ограничение выборки
 $con = new MongoClient();
$collection= $con-> test-> persons;

$list = $collection->find();

$list -> limit(2);
while($document = $list->getNext())
{
    echo "<p> Name:" . $document["name"] . "</br>";
    echo "Age:" . $document["age"] . "</p>";
}

 $con->close();

 // пропуск документов
 $con = new MongoClient();
$collection= $con-> test-> persons;

$list = $collection->find();
// пропуск двух документов
$list -> skip(2);
while($document = $list->getNext())
{
    echo "<p> Name:" . $document["name"] . "</br>";
    echo "Age:" . $document["age"] . "</p>";
}

 $con->close();

 // сортировка
 $con = new MongoClient();
$collection= $con-> test-> persons;

$list = $collection->find();

$param=array("age"=>1);
// сортировка по возрасту
$list -> sort($param);
while($document = $list->getNext())
{
    echo "<p> Name:" . $document["name"] . "</br>";
    echo "Age:" . $document["age"] . "</p>";
}

 $con->close();

?>
