<?php
// $mas = array(1, "2", 3, 4);
/* $mas = [1, 2, 3, 4];
echo "<pre>";
var_dump($mas);
print_r($mas);
echo $mas[2];
$mas[2] = 100;
$mas[8] = 200;
$mas[] = 300;
print_r($mas);
var_dump($mas); */

// echo "<pre>";
// $arr = [10 => 1, 5, 9, 12];
// print_r($arr);
// var_dump($arr);

// $users = ["Сергей", "Ирина", "Виктор", "Марина"];
// $num = count($users);
// echo $num;  // 4
// for($i = 0; $i < $num; $i++){
//     echo "$users[$i] <br>";
// }
// $users = [2 => "Сергей", 15 => "Ирина", 7 => "Виктор", 9 => "Марина"];
// // foreach($users as $element){
// //     echo "$element<br>";
// // }

// foreach($users as $key => $value){
//     echo "$key - $value<br>";
// }

/* $colors = array("red" => "красный", "blue" => "синий", "green" => "зеленый");
echo "<pre>";
var_dump($colors); */

/* $colors = ["red" => "красный", "blue" => "синий", "green" => "зеленый"];
$colors["green"] = "#00FF00";
$colors["white"] = "белый";
echo "<pre>";
var_dump($colors);
foreach($colors as $eng => $ru){
    echo "$eng: $ru<br>";
} */

// $data = [1 => "Ирина", "id132" => "Игорь", 56 => "Виктор"];
// echo $data[1];
// echo "<br>";
// echo $data["id132"];

/* $array = array(
    1 => 'a',
    '1' => 'b',
    -1 => 'c',
    "01" => 'd',
    true => 'e',
    false => 'f',
    "" => 'g',
    null => 'h',
    'i',
    2 => 'j'
);

echo "<pre>";
print_r($array); */

/* $source_array = ["one", "two", "three"];
[$first, $second, $third] = $source_array;

echo $second; */

/* $source_array = ["one" => 1, "two" => 2, "three" => 3];
["two" => $second] = $source_array;

echo $second; */

// $a = 1;
// $b = 2;
// echo "a = $a, b = $b <br>";
// [$b, $a] = [$a, $b];
// echo "a = $a, b = $b <br>";

/* echo "<pre>";
// $arr = array(array("Серегей", "Алена"), array("Виктор", "Мария"));
$arr = [["Серегей", "Алена"], ["Виктор", "Мария"]];
// print_r($arr);
// print_r($arr[0][1]);
echo "<table>";
foreach($arr as $a){
    echo "<tr>";
    foreach($a as $user){
        echo "<td>$user</td>";
    }
    echo "</tr>";
}
echo "</table>"; */

/* $phones = array(
    "apple" => array("iPhone 12", "iPhone X", "iPhone 12 Pro"),
    "samsung" => array("Samsung Galaxy S20", "Samsung Galaxy S20 Iltra"),
    "nokia" => array("Nokia 8.3", "Nokia 3.4")
);
foreach($phones as $brand => $items){
    echo "<h3>$brand</h3>";
    echo "<ul>";
    foreach ($items as $key => $value){
        echo "<li>$value</li>";
    }
    echo "</ul>";
}
echo $phones["nokia"][1]; */

/* $gadgets = array(
    "phones" => array(
        "apple" => "iPhone 12",
        "samsung" => "Samsung S20",
        "nokia" => "Nokia 8.3"
    ),
    "tablets" => array(
        "lenovo" => "Lenovo Yoga Smart Tab",
        "samsung" => "Samsung Galaxy Tab S5",
        "apple" => "Apple iPad Pro"
    )
);

foreach($gadgets as $brand => $items){
    echo "<h3>$brand</h3>";
    echo "<ul>";
    foreach ($items as $key => $value){
        echo "<li>$key : $value</li>";
    }
    echo "</ul>";
}

$gadgets["phones"]["nokia"] = "Nokia 9";
echo $gadgets["phones"]["nokia"]; */

// $gadgets = [
//     "phones" => [
//          "apple" => "iPhone 12",
//         "samsung" => "Samsung S20",
//         "nokia" => "Nokia 8.3"
//     ],
//     "tablets" => [
//         "lenovo" => "Lenovo Yoga Smart Tab",
//         "samsung" => "Samsung Galaxy Tab S5",
//         "apple" => "Apple iPad Pro"
//     ]
// ];

// echo "<pre>";
// print_r($gadgets);

/* $source_array = [
    [1, "Игорь"],
    [2, "Ирина"]
];

foreach($source_array as [$id, $name]){
    echo "$id: $name<br>";
} */

/* $users = [
    ['name' => 'Олег', 'city' => 'Москва'],
    ['name' => 'Анна', 'city' => 'Питер'],
    ['name' => 'Игорь', 'city' => 'Москва'],
    ['name' => 'Ольга', 'city' => 'Казань'],
    ['name' => 'Влад', 'city' => 'Питер'],
];

$grouped = [];

foreach($users as $user){
    $city = $user['city'];
    $grouped[$city][] = $user['name'];
}

echo "<pre>";
print_r($grouped); */

/* $users = ["Сергей", "Игорь", "Вадим"];
// $isArray = is_array($users);
// echo $isArray ? "Это массив" : "Это не массив";
// $number = count($users);
// $number = sizeof($users);
// echo "В массиве users $number элемента";
shuffle($users);
print_r($users); */

/* $model = "Apple II";
$producer = "Apple";
$year = 1978;

$data = compact("model", 'producer', "year");
print_r($data); */

// $users = ["Сергей", "Игорь", "Вадим"];
/* $users = ["1", "3", "15", "2"];
// asort($users);  // SORT_REGULAR | SORT_NUMERIC | SORT_STRING
arsort($users);
print_r($users); */

/* $states = ["Spain" => "Madrid", "France" => "Paris", "Gemany" => "Berline"];

echo "<pre>";

asort($states);
print_r($states);

ksort($states);
print_r($states);

krsort($states);
print_r($states); */

/* $os = array("Windows 7", "windows 8", "Windows 10");
// asort($os);
// natsort($os);
natcasesort($os);
print_r($os); */

/* $a = array(1 => "один", 2 => "два", 3 => "три");
unset($a[2]);

echo "<pre>";
var_dump($a);

$b = array_values($a);
var_dump($b);

$c = array_pop($b);
print_r($c . "<br>");
print_r($b); */

/* $a = array(2, 4, 6, 8);
// echo "sum(a) = " . array_sum($a) . "<br>";
echo "a = " . array_product($a) . "<br>";

$b = array("a" => 1.2, "b" => 2.3, "c" => 3.4);
// echo "sum(b) = " . array_sum($b) . "<br>";
echo "b = " . array_product($b) . "<br>"; */

// echo "<pre>";
// $array = array(1, "hello", 1, "world", "hello");
// print_r(array_count_values($array));

/* $array1 = ["color" => "red", 2, 4];
$array2 = ["a", "b", "color" => "green", "shape" => "circle", 4];

$result = array_merge($array1, $array2);
echo "<pre>";
print_r($result);

$result1 = $array1 + $array2;
print_r($result1); */

// $array = ['имя', 'почта', 'телефон'];
// // print_r(implode("_", $array));
// echo "<ul><li>" . implode("</li><li>", $array) . "</li></ul>";

/* $text = "Москва,Санкт-Петербург,Новосибирск";
$cities = explode(",", $text, -1);
echo "<pre>";
print_r($cities); */

/* $input = array("php", 4.0, array("red", "green"));
$reversed = array_reverse($input, true);

echo "<pre>";
print_r($input);
print_r($reversed); */


// echo "<pre>";
// $numbers = range(1, 10);
// print_r($numbers);

// $even = range(2, 20, 2);
// print_r($even);

// $reverse = range(10, 1);
// print_r($reverse);

// $letters = range('a', 'e');
// print_r($letters);

