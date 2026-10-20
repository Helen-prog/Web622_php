<?php
// echo "<pre>";
// print_r($_GET);

/* $name = null;
$password = null;
$age = null;

if(isset($_GET["name"])){
    $name = $_GET["name"];
}
if(isset($_GET["psw"])){
    $password = $_GET["psw"];
}
if(isset($_GET["age"])){
    $age = $_GET["age"];
}
echo "Имя: $name <br>Возраст: $age <br>Пароль: $password"; */

// echo "<pre>";
// print_r($_POST);

// $name = null;
// $password = null;
// $age = null;

// if(isset($_POST["name"])){
//     $name = $_POST["name"];
// }
// if(isset($_POST["psw"])){
//     $password = $_POST["psw"];
// }
// if(isset($_POST["age"])){
//     $age = $_POST["age"];
// }
// echo "Имя: $name <br>Возраст: $age <br>Пароль: $password";

// echo "<pre>";
// print_r($_POST);

// // $city = $_POST["city"][0];
// // echo $city;

// $firstLang = $_POST["lang"]["ru"];
// $secondLang = $_POST["lang"]["en"];
// echo "$firstLang<br>$secondLang";

if(isset($_POST["firstname"]) && isset($_POST["eduform"]) && isset($_POST["courses"]) && isset($_POST["comment"])){
    $name = $_POST["firstname"];
    $eduform = $_POST["eduform"];
    $hostel = "нет";
    if(isset($_POST["hostel"])){
        $hostel = "да";
    }
    $courses = $_POST["courses"];
    $comment = $_POST["comment"];
    $output = "
    <!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset=\"UTF-8\">
        <title>Анкетные данные</title>       
    </head>
    <body>
        <p>Вас зовут: <b>$name</b></p>
        <p>Форма обучения: <b>$eduform</b></p>
        <p>Требуется общежитие: <b>$hostel</b></p>
        <p>Комментарий: <b>$comment</b></p>
        <p>Выбранные курсы: </p>
        <ul>";
    foreach ($courses as $item){
        $output .= "<li><b>" . $item . "</b></li>";
    }    
  
    $output .= "</ul></body></html>";
    echo $output;
} else {
    echo "Введенные данные некорректны";
}