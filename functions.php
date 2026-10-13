<?php

/* function hello($name, $age=18){
    echo "<div>Имя: $name, Возраст: $age</div><hr>";
}

hello(age: 36, name: "Vadim");
hello("Irina", 21);
hello("Viktor"); */

/* function test1($a, $c, $b = 2){
    return $a + $b + $c;
}

echo test1(a: 1, c: 3);

function test2($a, $b = 2, $c = 1){
    return $a + $b + $c;
}

echo test2(a: 1, c: 3); */

/* function sum(...$nums)
{
    $res = 0;
    foreach ($nums as $num) {
        $res += $num;
    }
    echo "<p>Сумма: $res</p>";
}

sum(1, 2, 3);
sum(2, 3);
sum(4, 5, 8, 10);
$number = [3, 5, 7, 8];
sum(...$number);
 */

/* function getAverageScore($name, ...$scores) {
    $res = 0;
    foreach($scores as $score){
        $res += $score;
    }
    $res = $res / count($scores);
    echo "<p>$name: $res</p>";
}

getAverageScore("Vidim", 5, 5, 4, 5);
getAverageScore("Roman", 4, 3, 4, 4, 4); */

/* function getAverageScore($name, $tel, ...$scores)
{
    print_r($name);
    print_r($tel);
    foreach ($scores as $score) {
        echo $score;
    }
}

getAverageScore("Vidim", "45-78-98", 5, 5, 4, 5); */

/* function add($a, $b){
    return $a + $b;
}

$result = add(5, 6);
echo $result;
 */

// function small_number(){
//     return [0, 1, 2];
// }

// [$zero, $one, $two] = small_number();
// echo $zero;
// echo $one;
// echo $two;

/* function add(int|float $a, int|float $b): int|float
{
    return $a + $b;
}

$result = add("15", "6");
echo $result;
$result1 = add(2.5, 3.7);
echo $result1; */

/* function calculateRectangleArea(float $width, float $height): float|string
{
    if($width <= 0 || $height <=0){
        return "Значения должны быть больше нуля!";
    }
    return $width * $height;
}

echo calculateRectangleArea(5.0, 3.0);
echo "<br>";
echo calculateRectangleArea(-2.0, 4.0); */

/* $hello = function ($name) {
    echo "<h2>Hello $name</h2>";
};

$hello("Roman");
 */

/* $sum = function($a, $b){
    return $a + $b;
};

$number = $sum(5, 11);
echo $number;
 */

/* function welcome($message){
    $message();
}

// welcome(function(){
//     echo "Hello!";
// });

$goodMorning = function(){
    echo "<h3>Доброе утро</h3>";
};

$goodEvning = function(){
    echo "<h3>Добрый вечер</h3>";
};

welcome($goodMorning);
welcome($goodEvning); */

// function sum(array $numbers, callable $condition): int
// {
//     $result = 0;
//     foreach ($numbers as $number) {
//         if($condition($number)){
//             $result += $number;
//         }        
//     }
//     return $result;
// }

// $isEvenNumber = function ($n) {
//     return $n % 2 === 0;
// };
// $isPositiveNumber = function($n){
//     return $n > 0;
// };

// $myNumbers = [-2, -1, 0, 1, 2, 3, 4, 5];

// // $numberSum = sum($myNumbers);
// // echo $numberSum;
// $evenSum = sum($myNumbers, $isEvenNumber);
// $positiveSum = sum($myNumbers, $isPositiveNumber);
// echo "Сумма четных чисел: $evenSum<br>Сумма положительных чисел: $positiveSum";


/* $number = 89;

$showNumber = function() use($number){
    echo $number;
};

$showNumber(); */



// $message = "Мир";

// $example = function($arg) use ($message) {
//     print_r($arg . ", " . $message);
// };

// $example("Привет");

/* $message = "Мир";

$example = function() use ($message): string {
    return "Привет, $message";
};

print_r($example()); */

/* $a = 8;
$b = 10;

$closure = function($c) use ($a, $b){
    return $a + $b + $c;
};

$result = $closure(22);
echo $result; */

/* $a = 8;
$b = 10;

$closure = fn($c) => $a + $b + $c;

$result = $closure(22);
echo $result;  */

/* $z = 1;
$fn = fn($x) => fn($y) => $x * $y + $z;
echo $fn(5)(10); */

/* $x = 1;
$fn = fn() => $x++; 
$fn();
echo $x; */


/* function sum(array $numbers, callable $condition): int
{
    $result = 0;
    foreach ($numbers as $number) {
        if($condition($number)){
            $result += $number;
        }        
    }
    return $result;
}

$myNumbers = [-2, -1, 0, 1, 2, 3, 4, 5];

$evenSum = sum($myNumbers, fn($n) => $n % 2 === 0);
$positiveSum = sum($myNumbers, fn($n) => $n > 0);
echo "Сумма четных чисел: $evenSum<br>Сумма положительных чисел: $positiveSum"; */

/* function generator(){
    for($i = 10; $i <= 15; $i++){
        yield $i;
    }    
}

foreach(generator() as $index => $number){
    echo "$index - $number<br>";
} */

/* function generateNumbers(){
    yield 1;
    yield from [2,3,4];
    yield 5;
}

foreach(generateNumbers() as $number){
    echo $number;
} */

/* function generateNumbers($start, $end){
    for($i = $start; $i < $end; $i++){
        yield $i;
    }
}

foreach(generateNumbers(4, 9) as $number){
    echo $number;
} */

// Ссылки  &

/* $igor = "Igor";
$roman = &$igor;  // 
$roman = "Roman";
echo "igor = $igor <br>";
echo "roman = $roman"; */


// Заполните массив 10-ю случайными числами от 1 до 10 так, чтобы они не повторялись. Цикл использовать нельзя. Нарпимер: [5,2,10,3,9,4,1,8,7,6]


/* function square(&$a){
    $a *= $a; // $a = $a * $a;
    echo "a = $a";  // 25
}

$number = 5;
square($number);
echo "<br>number = $number";  // 25 */

/* function &checkName(&$name){
    if($name === "admin"){
        $name = "Igor";
    }
    return $name;
}

$userName = "admin";
$checkedName = &checkName($userName);
echo "userName: $userName <br>";
echo "checkedName: $checkedName <br>"; */

// function &findValueByKey(&$array, $searchKey){
//     return $array[$searchKey];
// }

// $data = ['apple' => 5, 'banana' => 10, 'orange' => 15];

// $bananaCount = &findValueByKey($data, 'banana');
// $bananaCount = 99;
// print_r($data);

/* $a = 1;
$b = &$a;
// $b = 5;
echo "<pre>";
var_dump($a);
var_dump($b);
unset($a);
var_dump($a);
var_dump($b); */

/* $condition = true;
if($condition){
    $name = "Vadim";
}

echo $name; */

// $i = 2;
// switch($i){
//     case 1:
//         $day = "Понедельник";
//         break;
//     case 2:
//         $day = "Вторник";
//         break;
//     default:
//         $day = "Неизвестно";
// }

// echo $day;

// function showName(){
//     $name = "Vadim";
//     echo $name;
// }

// showName();
// echo $name;

/* $name = "Vadim";

function showName(){
    global $name;
    echo "Hello" . $name;
}

showName();
 */

/* $name = "Vadim";  // Igor

function showName(){
    global $name;
    $name = "Igor";
}

showName();
echo $name;
 */

// const PI = 3.14;
// echo PI;


/* define("NUMBER", 22);
echo NUMBER; */

// $a;
// echo $a;


// $message = null;

// if(isset($message)){
//     echo $message;
// } else{
//     echo "переменная message не определена";
// }

// $message = "";

// if (empty($message)) {
//     echo "в переменной message находится пустота";
// } else {
//     echo $message;
// }

/* $a = 20;
echo $a;
unset($a);
echo $a; */

// $a = 10;
// $b = "10";
// // echo gettype($a);
// // echo "<br>";
// // echo gettype($b);

// /* var_dump(is_integer($a));
// echo "<br>";
// var_dump(is_integer($b)); */

// var_dump(is_numeric($a));
// echo "<br>";
// var_dump(is_numeric($b));

// $a = 10.7;
// settype($a, "integer");
// var_dump($a);

// $a = "5";
// $b = 10;
// $sum = $a + $b;
// echo $sum;

echo "<pre>";
// $int = (int) "123";
// var_dump($int);

// $float = (float) "3.14";
// var_dump($float);

// $string = (string) 42;
// var_dump($string);

// $bool = (bool) "";
// var_dump($bool);
// echo $bool;

// $array = (array) "text";
// var_dump($array);

// $int = intval("123abc");
// var_dump($int);

// $float = floatval("3.14abc");
// var_dump($float);

// $string = strval(42);
// var_dump($string);

// $bool = boolval(0);
// var_dump($bool);