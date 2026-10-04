<?php
/* $a = 0;
if ($a > 0) {
    echo "Переменная a больше нуля";
} else if ($a == 0) {
    echo "Переменна a равна 0";
} else {
    echo "Переменная a меньше нуля";
}
echo "<br>Конец выполнения программы";
 */

// $a = 5;
// $b = 5;

// if($a > $b):
//     echo $a . " больше " . $b;
// elseif ($a == $b):
//     echo $a . " равно " . $b;
//     echo "<br>Конец выполнения программы";
// else:
//     echo $a . " меньше " . $b;
// endif;
?>

<!-- <?php $a = 0; ?>

<?php if ($a > 0) { ?>
<h2>Переменная a больше нуля</h2>
<?php } else if ($a == 0) { ?>
<h2>"Переменна a равна 0"</h2>
<?php } else { ?>
<h2>Переменная a меньше нуля</h2>
<?php } ?>  -->

<!-- <?php $a = 0; ?>
<?php if ($a > 0): ?>
    <h2>Переменная a больше нуля</h2>
<?php elseif ($a < 0): ?>
    <h2>Переменная a меньше нуля</h2>
<?php else: ?>
    <h2>Переменна a равна 0</h2>
<?php endif; ?> -->

<?php
// $a = false;

// if ($a){
//     echo "TRUE";
// } else {
//     echo "FALSE";
// }

// $a = 3;
// $b = 5;
// $c = $a < $b ? $a + $b : $a - $b;
// echo $c;

// $a = 5;
// switch ($a) {
//     case 1:
//         echo "сложение";
//         break;
//     case 2:
//         echo "вычитение";
//         break;
//     case 3:
//         echo "умножение";
//         break;
//     case 4:
//         echo "деление";
//         break;
//     default:
//         echo "действие по умолчанию";
// }

/* $a = 2;
switch ($a):
    case 1:
        echo "сложение";
        break;
    case 2:
        echo "вычитение";
        break;
    case 3:
        echo "умножение";
        break;
    case 4:
        echo "деление";
        break;
    default:
        echo "действие по умолчанию";
endswitch; */

/* $a = 5;

$operation = match($a){
    1 => "сложение",
    2 => "вычитение",
    3 => "умножение",
    4 => "деление",
    default => "действие по умолчанию"
};

echo $operation; */

/* $a = 1;
$operation = null;
match($a){
    1 => $operation = "сложение",
    2 => $operation = "вычитение",
    3 => $operation = "умножение",
    4 => $operation = "деление",
    default => "действие по умолчанию"
};

echo $operation; */

/* switch (8.0){  // 8.0 == "8.0" 
    case "8.0":
        $result = "строка";
        break;
    case 8.0:
        $result = "число";
        break;
}
echo $result; */

match (8.0){  // 8.0 === "8.0" 
    "8.0" => $result = "строка",
    8.0 => $result = "число"
};

echo $result;