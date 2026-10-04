<?php 
    // $num = 10;
    // echo $num;
    // echo "<br>";
    // var_dump($num);
    // echo "<br>";
    // print_r($num);
 /*    $num = 10;
    $num = "Hello";
    $str = "World";
    echo "Строка: $num $str"; */
/*     $num_10 = 18;
    $num_2 = 0b10010;
    $num_8 = 022;
    $num_16 = 0x12;
    echo "num_10 = $num_10 <br>";
    echo "num_2 = $num_2 <br>";
    echo "num_8 = $num_8 <br>";
    echo "num_16 = $num_16 <br>"; */
    // $a = 1.5;
    // $b = 1_500_234.567_452;
    // echo "a = $a<br>b = $b";
   /*  $one = true;
    $zero = false;

    echo $one + 5;
    echo "<br>";
    echo $zero + 5;
    echo "<br>";
    var_dump($zero); */

    // $a = 10;
    // $b = 5;
    // $res = "$a + $b <br>";
    // echo $res;
    // $res = '$a + $b <br>';
    // echo $res;

/*     $a = null;
    echo $a; */

/*   $a = 8 + 2;
  $a = 8 - 2;
  $a = 8 * 2;
  $a = 8 / 2;
  $a = 8 % 2;
  $a = 8 ** 2;
  echo $a;   */

 /*  $a = 12;
  $b = $a--;
  echo "a = $a   b = $b"; */

//   $a = "Привет,";
//   $b = "мир";
//   echo $a . " " . $b . "!";

// $a = 5;
// $b = "5";

// var_dump($a == $b);
// var_dump($a === $b);
// var_dump(true == "строка");
// var_dump(false == "");
// var_dump(false == 0);

// var_dump(5 != "5");
// var_dump(5 <> "5");
// var_dump(5 !== "5");

// var_dump(5 < "8");
// var_dump("apple" < "banana");
// var_dump("apple" < "Apple");

// var_dump(1 <=> 2);  // -1 (левое меньше правого)
// var_dump(1 <=> 1);  // 0 (равны)
// var_dump(2 <=> 1);  // 1 (левое больше правого)

// $a = (15 > 7 && 3 == 3);  // true && true
// $b = (15 > 7 and 2 == 3);  // true and false
// $c = (15 > 7 || 2 == 3);  // true || false
// $d = (15 > 17 or 3 == 3);  // false || true
// echo "<pre>";
// var_dump($a, $b, $c, $d);

// $num = 5;
// var_dump(!$num);

// $num = (false xor true);
// var_dump($num);

/* $a = ($b = 4) + 5;
echo "a = $a <br>";
echo "b = $b <br>"; */

// $a = 3;
// echo "a = $a <br>";
// $a += 5;  // $a = $a + 5
// echo "a = $a <br>";
// $a -= 5;
// echo "a = $a <br>";

// $b = "Привет";
// $b .= "-привет!";  // $b = $b . "-привет!"
// echo "b = $b";

// $a = null;
// $b = 7;

// // var_dump($a ??= $b);
// $a = $a ?? $b;
// var_dump($a);

/* $username = null;
$username ??= "Гость";
echo "$username<br>"; */

$staus = "Активен";
$staus ??= "Заблокирован";
echo $staus;