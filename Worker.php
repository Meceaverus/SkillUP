<?php

class Worker {
    public $name;
    public $age;
    public $salary;
}
$worker1 = new Worker();
$worker1->name = 'Иван';
$worker1->age = 25;
$worker1->salary = 1000;
$worker2 = new Worker();
$worker2->name = 'Вася';
$worker2->age = 26;
$worker2->salary = 2000;

echo "Задача 1." . PHP_EOL;
echo $worker1->salary + $worker2->salary . PHP_EOL;
echo $worker1->age + $worker2->age . PHP_EOL; //Задача №1

//*

class Worker2
{
    private $name;
    private $age;
    private $salary;
    public function setName($name) {
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }
    public function setAge($age) {
        $this->age = $age;
    }
    public function getAge() {
        return $this->age;
    }
    public function setSalary($salary) {
        $this->salary = $salary;
    }
    public function getSalary() {
        return $this->salary;
    }
}
$worker1 = new Worker2();
$worker1->setName('Иван');
$worker1->setAge(25);
$worker1->setSalary(1000);
$worker2 = new Worker2();
$worker2->setName('Вася');
$worker2->setAge(26);
$worker2->setSalary(2000);

echo "Задача 2." . PHP_EOL;
echo $worker1->getSalary() +  $worker2->getSalary() .PHP_EOL;
echo $worker1->getAge() +  $worker2->getAge() . PHP_EOL; ////Задача №2

//*

echo "Задача 3." . PHP_EOL;
class Worker3
{
    private $name;
    private $age;
    private $salary;
    public function setName($name) {
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }
    public function setAge($age) {
        if ($this->checkAge($age)) {
            $this->age = $age;
        }
    }
    public function getAge() {
        return $this->age;
    }
    public function setSalary($salary) {
        $this->salary = $salary;
    }
    public function getSalary() {
        return $this->salary;
    }
    private function checkAge($age){
        if ($age < 100) {
            return true;
        } else {
            echo "Так не бывает" .PHP_EOL;}
    }
}
$worker1 = new Worker3();
$worker1->setAge(101);
$worker2 = new Worker3();
$worker2->setAge(26);

echo $worker1->getAge();
echo $worker2->getAge() . PHP_EOL; //Задача №3

// *

class Worker4
{
    private $name;
    private $age;
    private $salary;
    public function __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }
    public function getName() {
        return $this->name;
    }
    public function getAge() {
        return $this->age;
    }
    public function getSalary() {
        return $this->salary;
    }
}
echo "Задача 4." . PHP_EOL;
$worker = new Worker4('Дима', 25, 2000);
echo $worker->getAge() * $worker->getSalary() . PHP_EOL; //Задача №4

//*
class User
{
    protected $name;
    protected $age;
    public function setName($name) {
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }
    public function setAge($age) {
        $this->age = $age;
    }
    public function getAge() {
        return $this->age;
    }
}
class Worker5 extends User
{
    private $salary;
    public function setSalary($salary) {
        $this->salary = $salary;
    }
    public function getSalary() {
        return $this->salary;
    }
}
$worker1 = new Worker5();
$worker1->setName('Иван');
$worker1->setAge(25);
$worker1->setSalary(1000);
$worker2 = new Worker5();
$worker2->setName('Вася');
$worker2->setAge(26);
$worker2->setSalary(2000);

echo "Задача 5." . PHP_EOL;
echo $worker1->getSalary() * $worker2->getSalary() . PHP_EOL;
class Student extends User
{
    private $stipend;
    private $course;
    public function setStipend($stipend) {
        $this->stipend = $stipend;
    }
    public function getStipend() {
        return $this->stipend;
    }
    public function setCourse($course) {
        $this->course = $course;
    }
    public function getCourse() {
        return $this->course;
    }
} //Задача №5

//*

class Driver extends Worker5
{
    private $DrivingExperience;
    private $DrivingCategory;
    public function setDrivingExperiense($DrivingExperiense){
        if ($this->checkExperiense($DrivingExperiense)) {
            $this->DrivingExperience = $DrivingExperiense;
        }
    }
    public function setDrivingCategory($DrivingCategory) {
        if ($this->checkCategory($DrivingCategory)) {
            $this->DrivingCategory = $DrivingCategory;
        }
    }
    private function checkExperiense($DrivingExperiense){
        if ($DrivingExperiense < 40) {
            return true;
        } else {
            echo "Введите категорию ваших прав вождения" .PHP_EOL;}
    }
    private function checkCategory($DrivingCategory){
        if ($DrivingCategory == 'A' || $DrivingCategory == 'B' || $DrivingCategory == 'C') {
            return true;
        } else {
            echo "Ошибка! Введенная вами категория не существует. Попробуйте еще раз" .PHP_EOL;}
    }
    public function getDrivingExperiense(){
        return $this->DrivingExperience;
    }
    public function getDrivingCategory(){
        return $this->DrivingCategory;
    }
}
$driver = new Driver();
$driver->setDrivingExperiense(20);
$driver->setDrivingCategory('A') ;

echo "Задача 6." . PHP_EOL;
echo "Водительский стаж - " . $driver->getDrivingExperiense() . " лет.". PHP_EOL;
echo "Категория вождения - " . $driver->getDrivingCategory() . PHP_EOL;//Задача №6