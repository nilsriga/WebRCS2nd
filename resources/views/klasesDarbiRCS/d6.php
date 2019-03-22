<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php 

abstract class Animal // apstraksta klase ir domāta, lai viņu ekstendotu
{
    private $name;
    protected $energy = 10;
    public static $animalCount = 0; // nav pieejams this. bet ir pieejams self::

    public function __construct(string $name) // lai pateiktu ka tas ir konstruktors ir obligati jaliek prieksa divi _ _ . java tas izskatitos public function Anima() {}
    {
        $this->name = $name;
        self::$animalCount++; // statiska mainiga metodes (funkcijas) izsaukums
    }

    public function run()
    {
        $this->energy--;
        // this.energy--
    }

    public function sleep()
    {
        $this->energy++;
    }
}

class Cat extends Animal implements Purrable
{
    protected $energy = 30;
// tāpēc, ka kaķi ir īpaši enerģiski - tad viņiem varētu no skriešanas enerģija samazināties par 2.
    public function run() 
    {
        $this->energy -= 2;
    }
    public function purr()  // ja šito aizkomentē, tad ir errors.
    {
        echo 'prr prrr prrrr prrrr prrr prrr prr';
    }
}
// interface ir kā ligums, kam ir jabūt
interface Purrable 
{
    public function purr(); // tas pasaka ka jebkas kas izmantos interfeisu Purrable, tam ir jābūt purr() funkcijai
}

class Lion implements Purrable
{
    public function purr()  // ja šito aizkomentē, tad ir errors.
    {
        echo 'Lion is purring';
    }
}

class Dog
{

}

echo '<pre>';
$muris = new Cat('Muris');
$muris->run();
$muris->run();
$muris->run();
$muris->run();
$muris->run();
$muris->purr();


var_dump($muris::$animalCount);
var_dump($muris);
var_dump(Animal::$animalCount);

$puka = new cat('Pūka');
$puka->sleep();
$puka->sleep();
$puka->sleep();
$puka->sleep();

var_dump($puka);

$lion = new Lion;

$dog = new Dog;

function makeSound(Purrable $animal) // tā pasakām ka animal obligāti būs purrable
{
    $animal->purr();
}

makeSound($lion);
makeSound($muris);
makeSound($dog);
var_dump($muris);
// real life


//kkas kas glabasjas datubaze. shi klase neuztraucas par datu saglabasanu. SOLID princips(look it up. Objektu orientetas programmesanas princips)
// shi klase reprezente.. reprezente vienu leitotaju
class User 
{
    public $id;
    public $firstName;
    public $lastName;
    public $email;
}
//mums ir vel viena klase ka userDepository piemeram. S no solid - katrai klasei ir jabut iemeslam ko vina dara - nevis vien klase kas dara visu. lai ar vienu teikumu varetu apraksti ko ta klase dara.
// O - jebkurai klasei jabut atvertai ekstencijai bet aizvertai modifikacijai - lai katreu reizi nevajdzetu mainit parent klases. Lai izmainjas nesaulauztu parent lklasi, ja kko vajag pamainit kkada klase

class Userrepository implements Savable
{
    public static function save(User $user)
    {
        DB::qeury("INSTERT INTO users SET id = ?. first//saves to the DB."); 
    }
}

interface Savable
{
    public static function save();
}

$user = new User;
$user->id = 10;
$user->firstName = 'John';
$user->lastName = 'Doe';
$user->email = 'jahn@doe.com';
Userrepository::save($user);




echo "_____________________________________________________________________________________________________";
$someInt = 123; //int
echo $someInt; // izdrukās someInt
$someText = 'Foo'; // string
$someText2 = "bar
in 
multiple
lines";
$someTrth = false; //bool
$someNothing = null; //bull

$cars = ['gaz', 'zaz', 'maz', 'plaz', 'bmw', 'vaz']; // asociativs masivs
echo $cars[4]; // bmw

$person = [
    'firstName' => 'John',
    'lastName' => 'Doe',
    'age' => '54',
];

echo $person['age'];

$people = [
    1 => [
        'firstName' => 'John',
        'lastName' => 'Doe',
        'age' => '54',
    ],
    'kartupelis' => [
        'firstName' => 'Jane',
        'lastName' => 'Doe',
        'age' => '34',
    ],
    true => [
        'firstName' => 'Jen',
        'lastName' => 'Eren',
        'age' => '55',
    ],
    [
        'firstName' => 'Josh',
        'lastName' => 'Dean',
        'age' => '22',
    ],
];

echo $people[1]['firstName'];

echo '<pre>'; // tas to padara katru jaunā rindā
var_dump($people);

// pa lielam php ģenerē html. tas ir viņa darbs - sūtīt un saņemt uz serveri un ģenerēt html

// +
// -
// /
// *
// %

// stringus nevar konkatinēt ar + bet ar .

echo '1'.'2'; // 12

echo '1' + 3; // 4

// <
// >
// <=
// >=
// ==
// !=

// ===
// !==

// && vai and
// \\ vai or

if ("") {

} elseif (false) {

} else {

};

$foo = "bar";

switch ($foo) {
    case 'foo':
        //code
        break;
    default:
        //code
        break;
}

// while(true) {

// }
$goo = 0;

do{
    echo "xxx";
    $goo++;
} while($goo<1);

for ($i = 0; $i < 10; $i++) {
    echo $i . '<br>';
}

$cars = ['a' => 'gaz','b' => 'zaz', 'maz', 'plaz', 'bmw', 'vaz']; // asociativs masivs

foreach ($cars as $car) {
    echo $car . '<br>';
};

foreach ($cars as $key => $car) {
    echo $key . ';' . $car . '<br>';
};

function addTwoNumbers($num1, $num2 = 10): int // ta nevajag - bet vajadzetu definet float. vinsh gan var parverst datu tipu
{
    return $num1 + $num2;
}

echo addTwoNumbers(1,2) . '<br>';
echo addTwoNumbers(1);
echo addTwoNumbers(1.1, 2.2); // bus 3


?>

</body>
</html>


<!-- 
@extends('master')

@section('title', 'D6, PHP')

@section('content')

<p>Hello Chief!</p>




@endsection -->