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

class ShoppingCard{
    private array $items = [];
    private float $taxRate;

    public function __construct(float $taxRate = 0.20)
    {
        $this->taxRate = $taxRate;
    }

    public function addItem(string $name, float $price, int $quantity=1): void
    {
        if(isset($this->items[$name])){
            $this->items[$name]['quantity'] += $quantity;
        } else {
            $this->items[$name] = [
                'price' => $price,
                'quantity' => $quantity
            ];
        }
    }

    public function getItems(): array
    {
        return $this->items;
    }

    public function getSubtotal(): float
    {
        $subtotal = 0.0;
        foreach($this->items as $item){
            $subtotal += $item['price'] * $item['quantity'];
        }
        return $subtotal;
    }
}

$card = new ShoppingCard();
$card->addItem("Смартфон", 25000);
$card->addItem("Чехол для телефона", 1200, 2);
?>

<!DOCTYPE html>
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
            </tr>
            <?php foreach($card->getItems() as $name => $details): ?>
                <tr>
                    <td><?= htmlspecialchars($name) ?></td>
                    <td><?= $details['quantity'] ?></td>
                    <td><?= $details['price'] ?></td>
                </tr>
            <?php endforeach ?>
        </table>

        <p>Стоимость товаров: <strong><?= $card->getSubtotal() ?> руб.</strong></p>
    </div>
</body>
</html>

