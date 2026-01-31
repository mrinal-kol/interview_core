<?php
$conn = mysqli_connect('localhost','root','','asbschool',3306);
if(!$conn){
    echo "Connection Failed: " . mysqli_connect_error();
} else {
    echo "Connected";
}

echo "<pre>";
$qry = "SELECT * FROM students";
$result= mysqli_query($conn,$qry);
while($row=mysqli_fetch_assoc($result))
{
	//print_r($row);
}


$conn2 = new PDO('mysql:host=localhost;post=3306;dbname=asbschool','root','');
$conn2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$c = $conn2->prepare($qry);
$c->execute();
$d = $c->fetchAll(PDO::FETCH_ASSOC);
//print_r($d);

echo "//------------------------------<br>";


class H
{
    protected $city='kolkata';

    public function town()
    {
        return $this->city;
    }
}

$dfc= new H();
echo $dfc->town();
echo "//------------------------------<br>";


abstract class city{
    abstract public function home();
    abstract public function homely();
    public function kol(){
        echo "kolkata";
    }
}
class dur extends city{

    public function home()
    {
        echo "chirag";
    }
    public function homely()
    {
        echo "chirag";
    }

    public function homedfc()
    {
        echo "chirag";
    }
}

$obj = new dur();
echo "<br>";
echo $obj->homedfc();
echo "<br>";
echo $obj->kol();

echo "<br>//------------------------------</br>";

interface  love{
    public function hot();
    public function dil();
}

class fcv implements love{
    public function hot()
    {
        echo "test";
    }
    public function dil()
    {
        echo "test";
    }

}
$obj = new fcv();
echo $obj->hot();
echo "<br>//------------------------------</br>";
echo $obj->dil();
echo "<br>//------------------------------</br>";

$d ='kolkata';
echo $d;
echo "<br>";
print($d);
echo "<br>";

$rr= print('hello');
echo $rr;

echo "<br>";

trait A{
    public function hello()
    {
        echo "best";
    }
}
trait B{
    public function raja()
    {
        echo "hellow raja";
    }
}

class D 
{
    use A,B;
}

$o = new D();
echo $o->hello();

echo "<br>//------------------------------</br>";

interface Hello
{
    public function hi();
}

interface Ring
{
    public function sap();
}

class kk implements Hello,Ring{

    public function hi()
    {
        echo "test";
    }
    public function sap()
    {
        //echo "test";
    }

}
echo "<br>//------------------------------</br>";
$r=90;

for($f=0;$f<$r;$f++)
{
    if($f==6)
    {
        break;
    }
    echo $f;
}
echo "<br>//------------------------------</br>";

$r=1;
while($r<=10)
{
    echo $r."<br>";
    $r++;
    break;
}

echo "<br>//------------------------------</br>";

for ($i = 1; $i <= 5; $i++) {

    if ($i == 2) {
        continue;   // skip only 2
    }

    if ($i == 4) {
        break;      // stop at 4
    }

    echo $i."<br>";
}
?>