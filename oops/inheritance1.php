<?php
class A {
private $a   = 'private';
protected $b = 'protected';
public $c    = 'public';
static $d    = 'static';
public function __construct()
{
    $this->e = 'constructed';
}
public function __set($property, $value)
{
    echo ' set ' . $property . '=' . $value;
    $this->$property=$value;
}
public function __get($property)
{
    echo ' get ' . $property;
    $this->$property = 'dynamic';
    return $this->$property;
}
}
class B extends A
{
public function constructMe()
{
    $this->e = 'constructed2';
}
}
class C extends B
{
public function __construct()
{
    parent::constructMe();
}
}
echo " \n";
$a = new A();
$b = new B();
echo " \n";
echo ' B:c='.$b->c;
echo " \n";
echo ' B:d=' .$b->d;
echo " \n";
$c = new C();
echo " \n";
print_r($a);
print_r($b);
print_r($c);
print_r(A::$d);
print_r(B::$d);
print_r(C::$d);
echo 'A class: ';
$R = new reflectionclass('A');
print_r($R->getdefaultproperties());
print_r($R->getstaticproperties());
echo 'B class: ';
$R = new reflectionclass('B');
print_r($R->getdefaultproperties());
print_r($R->getstaticproperties());
?>
