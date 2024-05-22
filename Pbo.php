<?php
class MyClass {
    public function __construct(){
        echo "Konstruktor dipanggil<br>";
    }
}

$obj = new MyClass();

class ParentClass {
    public function display(){
        echo "Aku adalah penganggur yang hafal 30 juz<br>";
    }
}

class ChildClass extends ParentClass {
    public function display(){
        parent::display();
        echo "Dan ingin menjadi imam besar masjidil haram<br>";
    }
}

$obj = new ChildClass();
$obj->display();

class Hewan {
    protected $name;

    public function __construct($name){
        $this->name = $name;
    }
    
    public function Makesound() {
        echo "WOIIII<br>";
    }
}

class Dog extends Hewan {
    public function Makesound(){
        echo $this->name . " Nama hewan saya<br>";
    }
}

$dog = new Dog("Pablo");
$dog->Makesound();

class A {
    public function Hello(){
        echo "Hello world from A<br>";
    }
}

class B {
    public function Hello(){
        echo "Hello world from B<br>";
    }
}

$obj = new B();
$obj->Hello();

$a = 10;
if ($a < 10){
    echo "Kurang dari 10<br>";
} elseif ($a == 10) {
    echo "sama dengan 10<br>";
} else {
    echo "Lebih dari 10<br>";
}

foreach (range(0, 4) as $num){
    echo $num . " ";
}
echo "<br>";

$z = 5;
switch ($z){
    case 1:
        echo "satu<br>";
        break;
    case 5:
        echo "Lima<br>";
        break;
    default:
        echo "Tidak dikenal<br>";
}

for ($i = 0; $i < 5; $i++){
    if ($i == 2){
        continue;
    }
    echo $i . " ";
}
echo "<br>";
?>
