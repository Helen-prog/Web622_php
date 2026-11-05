<?php
// namespace work;
// include "welcome.php";
// include_once "welcome.php";
// require "welcome.php";
// require_once "welcome.php";

// $name = "Roman";
// welcome($name);

// include "header.php";
?>

<!-- <main>
    <h2>Главный контент страницы</h2>
    <p>Это текст, который видит пользователь на главной странице. Он может динамически меняться.</p>
</main> -->

<?php
// include 'footer.php';
?>

<?php

// function my_autoloader($class){
//     echo "Вызов функции автозагрузки<br>";
//     include $class . ".php";
// }

// spl_autoload_register("my_autoloader");

// $person = new Person("Roman", 25);
// $person->printInfo();
?>

<?php

// include "Person.php";

// $person = new \base\classes\Person("Roman", 25);
// echo $person->name;

// echo "<br>";
// $person2 = new \base\classes\Person("Igor", 26);
// echo $person2->name;

/* use \base\classes\Person as User;

$person = new User("Roman", 25);
echo $person->name;

echo "<br>";
$person2 = new User("Igor", 26);
echo $person2->name; */

// use \base\classes\Person;

// $person = new Person("Roman", 25);
// echo $person->name;

// echo "<br>";
// $person2 = new Person("Igor", 26);
// echo $person2->name;


// use \base\classes\Person as User, \base\classes\Employee;

// $person = new User("Roman", 25);
// echo $person->name;

// echo "<br>";
// $person2 = new Employee("Igor", 26);
// echo $person2->name;

// use \base\classes\{Person as User, Employee};

// $person = new User("Roman", 25);
// echo $person->name;

// echo "<br>";
// $person2 = new Employee("Igor", 26);
// echo $person2->name;

// $filename = "text.txt";

// if (file_exists($filename)) {
//     $content = file_get_contents($filename);
//     echo $content;
// } else {
//     echo "Файл не найден";
// }


// $filename = "data.json";

// if(file_exists($filename)){
//     $jsonText = file_get_contents($filename);

//     echo "<pre>";
//     print_r($jsonText);

//     $data = json_decode($jsonText, true);
//     print_r($data);
//     echo "<br>Навык пользователя: " . $data['skills'][1];
// }

// $options = [
//     'http' => [
//         'method' => 'GET',
//         'header' => "User-Agent: PHP\r\n"
//     ]
// ];

// $context = stream_context_create($options);
// $result = file_get_contents('https://jsonplaceholder.typicode.com/posts', false, $context);

// echo "<pre>";

// if($result === false){
//     echo "Ошибка при запросе";
// } else {
//     $data = json_decode($result, true);
//     print_r($data);
// }

// $filename = 'text.txt';

// if(file_exists($filename)){
//     $lines = file($filename);

//     foreach($lines as $lineNumber => $lineContent){
//         echo "Строка " . ($lineNumber + 1) . ": " . $lineContent . "<br>";
//     }
// }

// $filename = "php_errors.log";

// if(file_exists($filename)){
//     $fileHandle = fopen($filename, 'r');

//     if($fileHandle){
//         while(($line = fgets($fileHandle)) !== false){
//             if(strpos($line, "ERROR") !== false){
//                 echo $line . "<br>";
//             }
//         }
//     }

//     fclose($fileHandle);
// }
// else{
//     echo "Файла не существует";
// }


// $handle = fopen('data.csv', 'r');
// echo "<pre>";

// while (($data = fgetcsv($handle, 1000, ",")) !== false){
//     $data = array_map(function ($value) {
//         return mb_convert_encoding($value, 'UTF-8', 'Windows-1251');
//     }, $data);
//     // print_r($data);
//     $num = count($data);
//     for($c = 0; $c < $num; $c++){
//         echo $data[$c] . " | ";
//     }
//     echo "<br>";
// }
// fclose($handle);

// $file = 'example.txt';
// // $data = "Привет, мир!\nHello World";
// // file_put_contents($file, $data);

// // $data = "\nНовая строка";

// // file_put_contents($file, $data, FILE_APPEND);

// $handle = fopen($file, "a");

// if($handle){
//     fwrite($handle, "\nСтрока через fwrite\n");
//     fclose($handle);
// }

// if(!rename("example.txt", "upload/example.txt")){
//     echo "Ошибка перемещения";
// } else{
//     echo "Файл перемещен";
// }

// if(copy("text.txt", "text_copy.txt")){
//     echo "Копия была создана";
// } else{
//     echo "Ошибка копирования файла";
// }

// if(unlink("text_copy.txt")){
//     echo "Файл удален";
// } else{
//     echo "Ошибка при удалении файла";
// }

// if(mkdir("newdir")){
//     echo "Каталог создан";
// } else{
//     echo "Ошибка создания каталога";
// }

// if(rmdir("newdir")){
//     echo "Каталог удален";
// } else{
//     echo "Ошибка при удалении каталога";
// }

$path = getcwd();
echo $path . "<br>";

if(is_dir($path)){
    if($dh = opendir($path)){
        while(($file = readdir($dh)) !== false){
            if($file == "." || $file == ".."){
                continue;
            }
            if(is_dir($file)){
                echo "каталог: $file <br>";
            } else {
                echo "файл: $file <br>";
            }
        }
        closedir($dh);
    }
}