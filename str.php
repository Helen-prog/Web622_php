<?php

// $name = "Сергей";

// echo 'Одинарные кавычки<br>
// Многострочный текст<br>
// $name<br><br>';

// echo "Двойные кавычки<br>
// Многострочный текст<br>
// $name<br><br>";

// $s = <<< LABEL
// Hello World!<br>
// Bye World... $name<br><br>
// LABEL;
// echo $s;

// $firstName = "Игорь";
// $age = 25;
// $st = <<< USER
// FirstName = $firstName<br>
// Age = $age
// USER;
// echo $st;


// $str = "Hello World";
// $len = strlen($str);
// echo "Длина строки: $len";

// $str = "Привет мир";
// $len = mb_strlen($str);
// echo "Длина строки: $len";

// $str = "Hello World";

// echo $str[0] . "<br>";

// $second = $str[1];
// echo $second . "<br>";

// $last = $str[strlen($str) - 1];
// echo $last . "<br>";

// $str[1] = "i";
// echo $str . "<br>";

// $str[strlen($str) - 1] = "e";
// echo $str . "<br>";

// $str = "Hello World";
// $st = substr($str, 6, 3);
// echo $st;

// $str = "Привет мир";
// $st = mb_substr($str, 2, 4);
// echo $st;

// $str = "Hello World Hello";
// $new_str = str_replace("Hello", "Привет", $str);
// echo $new_str;

// $str = "Hello World";
// $pos = strpos($str, "lo");
// echo $pos;

// $str = "Hello World";
// $lower = strtolower($str);
// echo $lower . "<br>";

// $upper = strtoupper($str);
// echo $upper . "<br>";

// $first = ucfirst($lower);
// echo $first . "<br>";

// $first_lower = lcfirst($str);
// echo $first_lower . "<br>";

// $str = "Hello World";

// $align = str_pad($str, 40, "+", STR_PAD_BOTH);
// echo $align;

/* $num = 1234.5678;
$format = number_format($num, 2);
echo $format; */


// $str = "     Hello World     ";

// $clear_str = trim($str);
// echo ">" . $clear_str . "<<br>";

// $clear_left = ltrim($str);
// echo ">" . $clear_left . "<<br>";

// $clear_right = rtrim($str);
// echo ">" . $clear_right . "<<br>";

// $arr = ['Привет', 'мир', 'PHP'];
// // $result = implode(" ", $arr);
// $result = join(" ", $arr);
// echo $result;

// echo strrev("Hello world!");

// $str = "Hello World";

// $arr1 = str_split($str);
// $arr2 = str_split($str, 3);

// echo "<pre>";
// print_r($arr1);
// print_r($arr2);

// $string = "Документ.pdf";

// if(str_ends_with($string, ".pdf")){
//     echo "Это файл формата PDF";
// } else  {
//     echo "Неизвестный формат файла";
// }


// $companyName = 'ООО "Рога и Копыта"';
// echo '<input type="text" name="company" value="' . $companyName .'">';

// $safeName = htmlspecialchars($companyName, ENT_QUOTES, 'UTF-8');
// echo '<input type="text" name="company" value="' . $safeName .'">';

// $name = "Алексей";
// $age = 25;

// printf("Привет, меня зовут %s. Мне %d лет.", $name, $age);

// $price = 19.9934;
// printf("Цена товара: %.2f руб.", $price);

// $day = 5;
// $month = 9;
// $year = 2026;

// printf("Дата: %02d.%02d.%d", $day, $month, $year);

// $animal = "кот";
// $action = "прыгнул";

// printf("Этот %1\$s быстро %2\$s, потому что он активный %1\$s", $animal, $action);

// Регулярные выражения
// $pattern = '/шаблон/флаги';



// $text = "Цена товара: 1500 руб.";
// $pattern = '/\d+/';

// echo preg_match($pattern, $text, $matches) . "<br>";

// // if(preg_match($pattern, $text, $matches) === 1){
// //     echo "Найдено: " . $matches[0];
// // } else {
// //     echo "Совпадений нет";
// // }
// print_r($matches[0]);

// $str = "яблоко,груша,вишня,слива";
// // $result = preg_split('/,/', $str);
// // $result = preg_split('/,/', $str, -1, PREG_SPLIT_NO_EMPTY);
// $result = preg_split('/,/', $str, 3);
// echo "<pre>";
// print_r($result);


// $str = "яблоко, груша; вишня слива";
// $result = preg_split('/[,;\s]+/', $str);
// echo "<pre>";
// print_r($result);

// echo preg_replace('/кошка/', 'собака', 'У меня есть кошка');

// echo preg_replace('/(\d+)\.(\d+)/', '$2.$1', '123.456');  // 456.123

// $fruit = ['яблоко', 'груша', 'вишня'];
// $result = preg_replace(['/яблоко/', '/груша/'], ['apple', 'pear'], $fruit);
// echo "<pre>";
// print_r($result);

// echo preg_replace('/а/', 'о', 'банан', 1);
// echo preg_replace('/php/i', 'PHP', 'Я изучаю Php');

// echo preg_replace('/\s/', '_', 'Текст с пробелами', -1, $count);
// echo "<br>Количество замен: " . $count;

// echo str_replace("a", "!", "aabbaa");
// echo "<br>";
// echo preg_replace('#a#', "!", "aabbaa");
// echo "<br>";
// echo preg_replace('#A#', "!", "aAb");
// echo "<br>";
// echo preg_replace('#A#i', "!", "aAb");

// $url = "https://example.com";
// echo preg_match('/https:\/\/example\.com/', $url);
// echo preg_match('#https://example\.com#', $url);
// echo preg_match('~https://example\.com~', $url);
// echo preg_match('%https://example\.com%', $url);

// $phone = "+7 (999) 123-45-67";
// $cleanPhone = preg_replace('/\D/', "", $phone);
// echo $cleanPhone;
?>


<?php 
// $name = '';
// $email = '';
// $errors = [];

// if($_SERVER["REQUEST_METHOD"] == "POST"){
//     if(empty($_POST['name'])){
//         $errors[] = "Имя обязательно для заполнения";
//     } else {
//         $name = test_input($_POST['name']);
//     }

//     if(empty($_POST['email'])){
//         $errors[] = "Email обязателен для заполнения";
//     } else {
//         $email = test_input($_POST['email']);

//         if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
//             $errors[] = "Некорректный формат email";
//         }
//     }

//     if(empty($errors)){
//         echo "Форма успешно отправлена!";
//         echo $name;
//         echo $email;
//     }
// }

// function test_input($data){
//     $data = trim($data);
//     $data = htmlspecialchars($data);
//     return $data;
// }
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">    
    <title>Форма валидации</title>
</head>
<body>
    <?php 
        // if(!empty($errors)){
        //     echo "<ul>";
        //     foreach ($errors as $error){
        //         echo "<li>" . $error . "</li>";
        //     }
        //     echo "</ul>";
        // }
    ?>
    <form action="" method="post">
        <p>Имя: <input type="text" name="name" value="<?php //htmlspecialchars($name); ?>"></p>
        <p>Email: <input type="text" name="email" value="<?php //htmlspecialchars($email); ?>"></p>
        <p><input type="submit" name="submit" value="Отправить"></p>
    </form>
</body>
</html> -->

<?php
$errors = [];
$allowed_services = ['design', 'development', 'marketing'];

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $phone = trim($_POST['phone'] ?? '');
    $service = trim($_POST['service'] ?? '');
    $message = trim($_POST['message'] ?? '');

    $phone_pattern = '/^\+?[0-9]{10,12}$/';

    if(empty($phone)){
        $errors['phone'] = "Пожалуйста, укажите номер телефона";
    } elseif(!preg_match($phone_pattern, $phone)) {
        $errors['phone'] = "Неверный формат номера. Пример: +79991234567";
    }

    if(empty($service)){
        $errors['service'] = "Выберите интересующую вас услугу";
    } elseif (!in_array($service, $allowed_services)){
        $errors['service'] = "Выбрана несуществующая услуга";
    }

    if(empty($message)){
        $errors['message'] = "Напишите текст обращения";
    } elseif(mb_strlen($message) < 10){
        $errors['message'] = "Сообщение слишком короткое (минимум 10 символов)";
    } elseif(mb_strlen($message) > 500){
        $errors['message'] = "Сообщение слишком длинное (максимум 500 символов)";
    }


    if(empty($error)){
        echo "<div class='final'>";
        echo "<strong>Успех!</strong> Ваша заявка принята. Мы свяжемся с вами по телефону: " . $phone;
        echo "</div>";

        $phone = $service = $message = "";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Форма заказа услуги</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background: #f4f7f6;
            padding: 20px;
        }

        .form-container{
            background: #fff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            /* width: 100%; */
            max-width: 400px;
            margin: 50px auto;
        }

        .error-input{
            border-color: #dc3545 !important;
            background-color: #fff8f8;

        }

        .form-group{
            margin-bottom: 20px;
        }

        .form-group label{
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #333;
        }

        .form-group input,
        .form-group select,
        .form-group textarea{
            width: 100%;
            padding: 10px;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .form-group textarea{
            resize: vertical;
            height: 100px;
        }

        button{
            background: #007bff;
            color: #fff;
            border: none;
            padding: 12px 20px;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
        }

        .error-text{
            color: #dc3545;
            font-size: 13px;
            margin-top: 5px;
        }

        .final{
            background: #d4edda;
            color: #155724;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Оставить заявку</h2>
        <form action="" method="POST">

            <div class="form-group">
                <label for="phone">Номер телефона:</label>
                <input type="text" id="phone" name="phone" placeholder="+79991234567" class="<?= isset($errors['phone']) ? 'error-input' : '' ?>">

                <?php if(isset($errors['phone'])): ?>
                    <div class="error-text"><?= $errors['phone'] ?></div>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="service">Выберите услугу:</label>
                <select name="service" id="service" class="<?= isset($errors['service']) ? 'error-input' : '' ?>">
                    <option value="">-- Выберите из списка --</option>
                    <option value="design" <?= (($_POST['service'] ?? '') === 'design') ? 'selected' : '' ?>>Веб-дизайн</option>
                    <option value="development" <?= (($_POST['service'] ?? '') === 'development') ? 'selected' : '' ?>>Разработка сайта</option>
                    <option value="marketing" <?= (($_POST['service'] ?? '') === 'marketing') ? 'selected' : '' ?>>Маркетинг и SEO</option>          
                </select>
                <?php if(isset($errors['service'])): ?>
                    <div class="error-text"><?= $errors['service'] ?></div>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="message">Детали заказа:</label>
                <textarea name="message" id="message" placeholder="Опишите вашу задачу..." class="<?= isset($errors['message']) ? 'error-input' : '' ?>"></textarea>
                <?php if(isset($errors['message'])): ?>
                    <div class="error-text"><?= $errors['message'] ?></div>
                <?php endif ?>
            </div>

            <button>Отправить заявку</button>
        </form>
    </div>
</body>
</html>