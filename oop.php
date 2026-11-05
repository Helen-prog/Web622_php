<?php
// class Person {
//     public $name="Неизвестно", $age=18;

//     function hello(){
//         echo "Hello<br>";
//     }
// }

// $person = new Person();
// $person->age = 30;
// echo "Имя пользователя: " . $person->name . "<br>";
// echo "Возраст пользователя: " . $person->age . "<br>";
// $person->name = "Roman";
// $person->age = 30;
// $personName = $person->name;
// print_r("Имя пользователя: " . $personName . "<br>");
// $person->hello();
// print_r($person);

// class Person {
//     public $name="Неизвестно", $age=18;

//     function hello(){
//         echo "Hello<br>";
//     }
//     function displayInfo(){
//         echo "Name: " . $this->name . "; Age: " . $this->age . "<br>";
//     }
// }

// $person = new Person();
// $person->name = "Roman";
// $person->age = 25;
// $person->displayInfo();

// class Person {
//     public $name, $age;

//     function __construct($name="Igor", $age=20)
//     {
//         $this->name = $name;
//         $this->age = $age;
//     }

//     function displayInfo(){
//         echo "Name: " . $this->name . "; Age: " . $this->age . "<br>";
//     }
// }

// $person1 = new Person("Roman", 36);
// $person1->displayInfo();

// $person2 = new Person("Viktor", 41);
// $person2->displayInfo();

// $person3 = new Person();
// $person3->displayInfo();

// class Person {
//     public $name;
//     function __construct($name="Igor", public $age=20)
//     {
//         $this->name = $name;
//         $this->age = $age;
//     }

//     function displayInfo(){
//         echo "Name: " . $this->name . "; Age: " . $this->age . "<br>";
//     }

//     function __destruct()
//     {
//         echo "Вызов деструктора<br>";
//     }
// }

// $person1 = new Person("Roman", 36);
// $person1->displayInfo();

// $person2 = new Person("Viktor", 41);
// $person2->displayInfo();

// $person3 = new Person();
// $person3->displayInfo();

// Анонимные классы
// $person = new class {
//     public $name;
//     function sayHello(){
//         echo "Hello<br>";
//     }
// };

// $person->sayHello();
// $person->name = "Roman";
// echo "Name: " . $person->name . "<br>";

// $person = new class ("Roman") {
//     public $name;

//     function __construct($name)
//     {
//         $this->name = $name;
//     }

//     function sayHello(){
//         echo "Hello<br>";
//     }
// };

// echo  "Hello, " . $person->name;

// class Person
// {
//     public $name;

//     function __construct($name)
//     {
//         $this->name = $name;
//         echo "Конструктор Person<br>";
//     }

//     function displayInfo()
//     {
//         echo "Имя: $this->name<br>";
//     }
// }

// class Employee extends Person {
//     public $company;

//     function __construct($name, $company)
//     {
//         Person::__construct($name);
//         // parent::__construct($name);
//         // $this->name = $name;
//         $this->company = $company;
//         echo "Конструктор Employee<br>";
//     }

//     function displayInfo()
//     {
//         // echo "Имя: $this->name<br>";
//         // parent::displayInfo();
//         Person::displayInfo();
//         echo "Работает в $this->company<br>";
//     }
// }

// class Manager{}


// $employee = new Employee("Roman", "Microsoft");
// // $employee->displayInfo();

// var_dump($employee instanceof Employee);
// var_dump($employee instanceof Person);
// var_dump($employee instanceof Manager);

// class Person
// {   
//     function __construct()
//     {
//         echo "Конструктор Person";
//     }    
// }

// class Employee extends Person {

//     function __construct()
//     {
//         echo "Конструктор Employee";
//     }

// }

// $employee = new Employee();


// final class Person
// {
//     public $name;

//     function __construct($name)
//     {
//         $this->name = $name;       
//     }

//     final function displayInfo()
//     {
//         echo "Имя: $this->name<br>";
//     }
// }

// class Employee extends Person {
//     public $company;

//     function __construct($name, $company)
//     {
//         Person::__construct($name);
//         $this->company = $company;        
//     }

//     function displayEmployeeInfo()
//     {       
//         Person::displayInfo();
//         echo "Работает в $this->company<br>";
//     }
// }

// $employee = new Employee("Roman", "Microsoft");
// $employee->displayInfo();

// class Person {
//     private $privateA = "private";
//     public $publicA = "public";
//     protected $protectedA = "protected";

//     private function getPritateMethod(){
//         echo "privete method<br>";
//     }

//     protected function getProtectedMethod(){
//         echo "protected method<br>";
//     }

//     function test(){

//         $this->getPritateMethod();
//         // $this->getProtectedMethod();

//         echo "$this->privateA <br>";
//         echo "$this->publicA <br>";
//         echo "$this->protectedA <br>";
//     }
// }

// class Employee extends Person{
//     function test(){

//         $this->getProtectedMethod();

//         echo "$this->publicA <br>";
//         echo "$this->protectedA <br>";
//         // echo "$this->privateA <br>";
//     }
// }

// $employee = new Employee();
// $employee->test();
// echo "$employee->privateA <br>";
// $person = new Person();
// $person->getProtectedMethod();
// $person->test();
// echo "$person->protectedA <br>";

// class BankAccount{
//     private $balance;

//     public function __construct($initialBalance=0)
//     {
//         $this->balance = $initialBalance;
//     }

//     public function getBalance(){
//         return $this->balance;
//     }

//     public function deposit($amount){
//         if($amount > 0){
//             $this->balance += $amount;
//             echo "Счет успешно пополнен на $amount руб. <br>";
//         } else {
//             echo "Ошибка: сумма пополнения должна быть больше 0<br>";
//         }
//     }

//     public function withdraw($amount){
//         if($amount <= 0){
//             echo "Ошибка: сумма снятия должна быть больше 0<br>";
//         } elseif ($amount > $this->balance){
//             echo "Ошибка: Недостаточно средств<br>";
//         } else {
//             $this->balance -= $amount;
//             echo "Успешно снято $amount руб. <br>";
//         }
//     }
// }

// $myAccount = new BankAccount();

// echo "Текущий баланс: " . $myAccount->getBalance() . " руб. <br>";
// $myAccount->deposit(1000);
// $myAccount->deposit(3000);
// echo "Текущий баланс: " . $myAccount->getBalance() . " руб. <br>";
// $myAccount->withdraw(3000);
// echo "Текущий баланс: " . $myAccount->getBalance() . " руб. <br>";


// class Account{
//     private $sum = 0;

//     function __construct($sum)
//     {
//         $this->sum = $sum;
//     }

//     function getSumFrom($otherAccount, $money)
//     {
//         $otherAccount->sum -= $money;
//         $this->sum += $money;
//     }

//     function printSum(){
//         echo "На счете $this->sum y.e.<br>";
//     }
// }

// $acc1 = new Account(100);
// $acc2 = new Account(400);
// $acc1->printSum();
// $acc2->printSum();

// $acc1->getSumFrom($acc2, 200);

// $acc1->printSum();
// $acc2->printSum();

// class ShoppingCard{
//     private array $items = [];
//     private float $taxRate;

//     public function __construct(float $taxRate = 0.20)
//     {
//         $this->taxRate = $taxRate;
//     }

//     public function addItem(string $name, float $price, int $quantity=1): void
//     {
//         if(isset($this->items[$name])){
//             $this->items[$name]['quantity'] += $quantity;
//         } else {
//             $this->items[$name] = [
//                 'price' => $price,
//                 'quantity' => $quantity
//             ];
//         }
//     }

//     public function getItems(): array
//     {
//         return $this->items;
//     }

//     public function getSubtotal(): float
//     {
//         $subtotal = 0.0;
//         foreach($this->items as $item){
//             $subtotal += $item['price'] * $item['quantity'];
//         }
//         return $subtotal;
//     }

//     public function getTotal(): float
//     {
//         $subtotal = $this->getSubtotal();
//         $tax = $subtotal * $this->taxRate;
//         return $subtotal + $tax;
//     }
// }

// $card = new ShoppingCard();
// $card->addItem("Смартфон", 25000);
// $card->addItem("Чехол для телефона", 1200, 2);
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        table {
            border: 1px solid gray;
            border-collapse: collapse;
            width: 100%;
        }
        th, td{
            border: 1px solid gray;
        }
    </style>
</head>
<body>
    <div class="cart">
        <h2>Ваша корзина</h2>
        <table>
            <tr>
                <th>Товар</th>
                <th>Количество (шт.)</th>
                <th>Цена (руб.)</th>
            </tr> -->
<?php //foreach($card->getItems() as $name => $details): 
?>
<!-- <tr>
                    <td><?php //htmlspecialchars($name); 
                        ?></td>
                    <td><?php //$details['quantity'] 
                        ?></td>
                    <td><?php //$details['price'] 
                        ?></td>
                </tr> -->
<?php //endforeach 
?>
<!-- </table> -->

<!-- <p>Стоимость товаров: <strong><?php //$card->getSubtotal() 
                                    ?> руб.</strong></p>
        <p>Итог к оплате (включая НДС): //<strong><?php //$card->getTotal() 
                                                    ?></strong> руб.</p> 
    </div>
</body>
</html>-->

<?php
// class BankAccount
// {
//     private float $balance = 0.0;

//     public function getBalance(): float
//     {
//         return $this->balance;
//     }

//     public function deposit(float $amount): void {
//         if($amount > 0){
//             $this->balance += $amount;
//         }
//     }

//     public function withdraw(float $amount): void {
//         if($amount > 0 && $amount <= $this->balance){
//             $this->balance -= $amount;
//         }
//     }
// }

// $account = new BankAccount();

// $account->deposit(120.0);
// echo $account->getBalance() . "<br>";
// $account->withdraw(100);
// echo $account->getBalance();


// class Person{
//     public $name, $age;
//     static $retirentmentAge = 65;

//     function __construct($name, $age)
//     {
//         $this->name = $name;
//         $this->age = $age;
//     }

//     function sayHello(){
//         echo "Привет, меня зовут $this->name<br>";
//     }

//     static function printPerson($person){
//         echo "Имя: $person->name Возраст: $person->age<br>";
//     }

//     function checkAge(){
//         if($this->age >= self::$retirentmentAge){
//             echo "<br>Пора на пенсию<br>";
//         } else {
//             echo "<br>До пенсии еще " . (self::$retirentmentAge - $this->age) . " лет<br>";
//         }
//     }
// }

// $person1 = new Person("Roman", 36);
// $person1->sayHello();

// Person::printPerson($person1);
// echo "Пенсионный возраст: " . Person::$retirentmentAge;

// $person1->checkAge();


// class Person{
//     public $name;
//     private $id;
//     private static $counter = 0;  // 2

//     function __construct($name)
//     {
//         self::$counter++;
//         $this->id = self::$counter;
//         $this->name = $name;
//     }

//     function getId(){
//         return $this->id;
//     }

//     static function getCounter(){
//         return self::$counter;
//     }
// }

// $person1 = new Person("Igor");
// $person2 = new Person("Roman");

// echo "$person1->name имеет id: " . $person1->getId() . "<br>";
// echo "$person2->name имеет id: " . $person2->getId() . "<br>";
// echo "Всего пользователей: " . Person::getCounter();

// class Validator {
//     public static int $minPasswordLength = 8;

//     public static function email(string $email): bool
//     {
//         return filter_var($email, FILTER_VALIDATE_EMAIL);
//     }

//     public static function password(string $password): bool
//     {
//         return mb_strlen($password) >= self::$minPasswordLength;
//     }
// }

// $userEmail = "test@example.com";
// $userPassword = "123";

// if(!Validator::email($userEmail)){
//     echo "Некорректный email!<br>";
// }

// if(!Validator::password($userPassword)){
//     echo "Пароль слишком короткий! Минимальная длина: " . Validator::$minPasswordLength . " знаков. <br>";
// }

// interface Messenger{
//     function send();
// }

// interface Base{
//     function base();
// }

// class EmailMessenger implements Messenger, Base{
//     function send(){
//         echo "Отправка сообщения на e-mail";
//     }
//     function base(){}
// }

// $outlook = new EmailMessenger();
// $outlook->send();

/* interface PaymentInterface
{
    public function processPayment(float $amount): bool;
    public function getStatus(): string;
}

class UKassa implements PaymentInterface
{
    public function processPayment(float $amount): bool
    {
        echo "Оплата через ЮКасса на сумму $amount руб. прошла успешно.<br>";
        return true;
    }
    public function getStatus(): string
    {
        return "success";
    }
}

class Spb implements PaymentInterface
{
    public function processPayment(float $amount): bool
    {
        echo "Создан QR-код СБП на сумму $amount руб. <br>";
        return true;
    }
    public function getStatus(): string
    {
        return "pending_qr";
    }
}

class OrderProcessor {
    public function checkout(PaymentInterface $gateway, float $total){
        $gateway->processPayment($total);
    }
}

$processor = new OrderProcessor();

// $gateway = new Spb();
$gateway = new UKassa();

$processor->checkout($gateway, 500); */

/* abstract class Messenger{
    protected $name;

    function __construct($name)
    {
        $this->name = $name;
    }

    abstract function send($message);

    function close(){
        echo "Выход из мессенджера...";
    }
}

class EmailMessanger extends Messenger{
    function send($message){
        echo "$this->name отправляет сообщение: $message<br>";
    }
}


$telegram = new EmailMessanger("Outlook");
$telegram->send("Hello, PHP");
$telegram->close(); */

// abstract class BaseNotification{
//     protected string $recipient;
//     protected string $message;

//     public function __construct(string $recipient, string $message)
//     {
//        $this->recipient = $recipient;
//        $this->message = $message;
//     }

//     public function logNotification(): void{
//         echo "[ЛОГ]: уведомление отправлено для $this->recipient.<br>";
//     }

//     abstract public function send(): bool;
// }

// class EmailNotification extends BaseNotification{
//     public function send(): bool{
//         echo "Отправка Email на адрес $this->recipient: $this->message<br>";
//         return true;
//     }
// }

// class SmsNotification extends BaseNotification{
//     public function send(): bool{
//         echo "Отправка SMS на номер $this->recipient: $this->message<br>";
//         return true;
//     }
// }

// $services = [
//     new EmailNotification("alex@example.com", "Добро пожаловать на наш сайт!"),
//     new SmsNotification("+7 999 123-45-67", "Ваш код подтверждения: 4475")
// ];

// foreach($services as $notification){
//     $notification->send();
//     $notification->logNotification();
//     echo "<br>";
// }


// trait Printer{
//     public function printSampleText($text){
//         echo "<p>$text</p>";
//     }
//     public function printHeaderText($text){
//         echo "<h2>$text</h2>";
//     }
// }

// class Message{
//     use Printer;
// }

// $myMessage = new Message();
// $myMessage->printSampleText("Hello, World!");
// $myMessage->printHeaderText("Hello, PHP!");


// class Data{
//     function print(){
//         echo "Print from Data";
//     }
// }

// trait Printer{
//     function print(){
//         echo "Print from Printer";
//     }
// }

// class Message extends Data{
//     use Printer;

//     // function print(){
//     //     echo "Print from Message";
//     // }
// }

// $myMessage = new Message();
// $myMessage->print();



// /blog/как-выучить-ооп-в-php
// /catalog/игровой-ноутбук-asus

// trait SluggableTrat
// {
//     public function generateSlug(string $title): string
//     {
//         return str_replace(" ", "-", mb_strtolower($title));
//     }
// }

// class Post
// {
//     use SluggableTrat;

//     public string $title = "Как выучить ООП в PHP";

//     public function getUrl(): string 
//     {
//         return "/blog/" . $this->generateSlug($this->title);
//     }
// }

// class Product 
// {
//     use SluggableTrat;

//     public string $name = "Игровой ноутбук Asus";

//     public function getCatalogUrl(): string{
//         return "/catalog/" . $this->generateSlug($this->name);
//     }
// }

// $post = new Post();
// echo $post->getUrl();

// echo "<br>";

// $product = new Product();
// echo $product->getCatalogUrl();

// class Person{
//     public $name, $age;
//     const maxAge = 110;
//     function __construct($name, $age)
//     {
//         $this->name = $name;
//         if($age > Person::maxAge){
//             $age = Person::maxAge;
//         }
//         $this->age = $age;
//     }

//     function print(){
//         echo "Имя: $this->name Возраст: $this->age<br>";
//     }
// }

// $person1 = new Person("Серей", 38);
// $person2 = new Person("Виктор", 138);
// $person1->print();
// $person2->print();

// try{
//     $a = 5;
//     $b = 2;
//     $result = $a / $b;
//     echo $result;
//     // echo $result ** "два" . "<br>";
// // } catch (DivisionByZeroError $ex){
// //     echo "Произошло исключение:<br>";
// //     echo $ex . "<br>";
// // } 
// // catch (TypeError){
// //     echo "<br>Это действие нельзя выполнять между разными типами данных<br>";
// // }
// } 
// // catch (Throwable){
// //     echo "<br>Ошибка при выполнении программы<br>";
// // } 
// finally {
//     echo "<br>Блок finally<br>";
// }

// echo "<br>Конец работы программы";

// try{
//     $a = 5;
//     $b = 0;
//     $result = $a / $b;

// } catch (DivisionByZeroError $ex){
//     echo "Изменяем $b на значение 1:<br>";
//     $b = 1;
// }
// $result = $a / $b;
// echo $result;
// echo "<br>Конец работы программы";

// class Person {
//     private $name, $age;

//     function __construct($name, $age)
//     {
//         $this->name = $name;
//         if($age < 0){
//             throw new Exception("Недействительный возраст");
//         }
//         $this->age = $age;
//     }

//     function printInfo(){
//         echo "Name: $this->name<br>Age: $this->age";
//     }
// }

// try{
//     $person1 = new Person("Roman", -105);
//     $person1->printInfo();
// } catch(Exception $ex){
//     echo $ex->getMessage();
// }

// class PersonInvalidAgeException extends Exception{
//     function __construct($age){
//         $this->message = "Недействительный возраст: $age. Возраст должен быть в диапазоне от 0 до 120";
//     }
// }

// class Person {
//     private $name, $age;

//     function __construct($name, $age)
//     {
//         $this->name = $name;
//         if($age < 0){
//             throw new PersonInvalidAgeException($age);
//         }
//         $this->age = $age;
//     }

//     function printInfo(){
//         echo "Name: $this->name<br>Age: $this->age";
//     }
// }

// try{
//     $person1 = new Person("Roman", -105);
//     $person1->printInfo();
// } catch(Exception $ex){
//     echo $ex->getMessage();
// }

// class Product{
//     private string $title;
//     private float $price;

//     public function __construct(string $title, float $initialPrice)
//     {
//         $this->title = $title;
//         $this->setPrice($initialPrice);
//     }

//     public function getTitle(): string{
//         return $this->title;
//     }

//     public function getPrice(): float{
//         return $this->price;
//     }

//     public function setPrice(float $newPrice): void{
//         if($newPrice < 0){
//             throw new InvalidArgumentException("Цена не может быть меньше нуля!");
//         }
//         $this->price = $newPrice;
//     }

//     public function getDescontPrice(int $percent): float{
//         if($percent < 0 || $percent > 100){
//             throw new InvalidArgumentException("Скидка должна быть от 0 до 100%");
//         }
//         return $this->price * ( 1 - $percent / 100);
//     }
// }

// try{
//     $phone = new Product("Смартфон", 50000);
//     echo "Товар: " . $phone->getTitle() . "<br>";
//     echo "Обычная цена: " . $phone->getPrice() . " руб.<br>";
//     $phone->setPrice(45000);
//     echo "Новая цена: " . $phone->getPrice() . " руб.<br>";
//     echo "Цена со скидкой: " . $phone->getDescontPrice(10) . " руб.<br>";
//     // $phone->setPrice(-100);
// } catch (InvalidArgumentException $e){
//     echo "Ошибка: " . $e->getMessage();
// }

class PaymentException extends Exception {}

class OrderProcessor
{
    private float $userBalance = 150.00;

    public function processOrder(float $totalAmount): void
    {
        echo "Начало формирования заказа...<br>";

        if ($totalAmount > $this->userBalance) {
            throw new PaymentException("Недостаточно средств на балансе. Требуется: $totalAmount руб.");
        }

        $this->userBalance -= $totalAmount;
        echo "Оплата прошла успешно! Новый баланс: $this->userBalance руб.<br>";
    }
}

$processor = new OrderProcessor();

try {
    $processor->processOrder(500.0);
    echo "Не выведется";
} catch (PaymentException $e) {
    echo "Финансовая ошибка: " . $e->getMessage() . " (Код: " . $e->getCode() . ")<br>";
}
