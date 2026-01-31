<?php
date_default_timezone_set('Asia/Kolkata');
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('log_errors', 1);

// Path of the log file (will be created automatically if it doesn't exist)
ini_set('error_log', __DIR__ . '/error_log.txt');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daily Practice Work</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .inner
    {
      padding-left: 30px;
    }
    h4{
        background-color: yellow;
        display: table;
        /* width: 100%;*/
        table-layout: fixed;
        
        /* instead of padding-left */
        text-indent: 0;  /* ensures left edge */
        
        margin: 0;       /* remove default margins */
    }

    

    .navbar-brand {
      font-weight: bold;
      font-size: 1.5rem;
      color: #ffc107 !important;
    }

    .nav-link {
      color: #ffffff !important;
      transition: all 0.3s ease;
      font-weight: 500;
      padding: 0.5rem 1rem;
    }

    .nav-link:hover {
      color: #ffc107 !important;
      background-color: rgba(255, 255, 255, 0.1);
      border-radius: 0.25rem;
    }

    .navbar {
      box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    }

    .container-main {
      padding: 2rem;
    }

    h1 {
      text-align: center;
      margin-bottom: 2rem;
      color: #343a40;
    }
    
  </style>
  </head>

<body >
  
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">My PHP Growth Skill</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu"
        aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarMenu">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          
          <li class="nav-item"><a class="nav-link" href="mysql_que.php">Mysql Example</a></li>
          <li class="nav-item"><a class="nav-link" href="prac.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="prac2.php">Page1</a></li>
          <li class="nav-item"><a class="nav-link" href="prac3.php">Page2</a></li>
          <li class="nav-item"><a class="nav-link" href="pract1.php">Page3</a></li>
          <li class="nav-item"><a class="nav-link" href="pract2.php">Page4</a></li>
          <li class="nav-item"><a class="nav-link" href="pract3.php">Page5</a></li>
          <li class="nav-item"><a class="nav-link" href="practices.php">practices</a></li>
          <li class="nav-item"><a class="nav-link" href="practices2.php">practices2</a></li>

        </ul>
      </div>
    </div>
  </nav>
<div  class="bg-light text-dark inner" >

    <h4> PHP Interview Question Answer </h4>
        <?php
        echo "<pre>";
        echo <<<'EOF'
        (int)((.1+.7)*10);
        output:
        EOF;
        echo "<br>";
        echo (int)((.1+.7)*10); // very importent
        echo "<br>";
        $str = "php";
        $rev = "";
        echo '-----------'."<br>";
        for ($i = strlen($str)-1; $i >= 0; $i--) {
            //$rev .= $str[$i];
          echo $i."<br>";
        }
        echo '<h4>-------self vs static----------</h4>';
        echo <<<'EOF'
        class koll
        {
          public static function city()
          {
             echo 'kolkata';
          }

           public function town()
           {
             return self::city();
           }
        }
        koll::city();
        $ol = new koll();
        echo $ol->town();
        output:
        EOF;
        class koll
        {
          public static function city()
          {
             echo 'kolkata';
          }

           public function town()
           {
             return self::city();
           }
        }
        echo "<br>";
        koll::city();
        echo "<br>";
        $ol = new koll();
        echo $ol->town();
        echo '<br>----------Another Example-------------'.'<br>';
        class A {
              private function test() {
                  echo "A";
              }
          }

          class B extends A {
              public function test() {   // ← why no error?
                  echo "B";
              }
          }

          $g = new B();
        echo $g->test();
         echo '<br>-----------------------'.'<br>';
        class Az {
              public static function who() {
                  echo "A";
              }

              public static function test() {
                  static::who();
              }
          }

          class Bz extends Az {
              public static function who() {
                  echo "B";
              }
          }

          echo Az::test();
        echo '<br>-----------------------'.'<br>';
        //echo '<h4> PHP Interview Question Answer </h4> ';
        $r ="rahul";
        echo "$r"."<br>";
        echo '$r'."<br>";
        $r = "rahul";
        $rahul = "Hello World";
        echo $$r."<br>";
        echo '<br>-----------------------'.'<br>';
        function fullNum()
        {
          return '';
        }
        if(fullNum()==false)
        {
          echo "yes";
        }
        echo fullNum();
        echo '<br>'.'-----------------------'.'<br>';

        $t = 'rohit';
        //$t[10]= 'bikash';
        //echo $ti;
         echo '<br>'.'-----------<h4> Remove duplicate values WITHOUT built-in </h4>------------'.'<br>';

         $arr = [1,2,2,3,4,4,5];
          $result = [];

          foreach ($arr as $v) {
            //  echo 'p-'.$v."<br>";
              if (!in_array($v, $result)) {
                  $result[] = $v;
                  //echo 'a-'.$v."<br>";
              }
          }

          print_r($result);

         echo '<h4> Function & scope tricks </h4>';
         
         echo <<<'EOF'
          function test() {
              static $count = 0;
              $count++;
              echo $count;
          }
          output : 
          EOF;

         function test() {
            static $count = 0;
            $count++;
            echo $count;
        }
        echo "<br>";
        test();
        echo "<br>";
        test();
        echo "<br>";
        test();
        echo "<br>";

        echo <<<'EOF'
          function testt() {
              $count = 0; // normal variable
              $count++;
              return $count;
          }

          for ($i = 0; $i < 5; $i++) {
              echo testt() . "<br>";
          }
          output : 
          EOF;
          echo "<br>";
        function testt() {
              $count = 0; // normal variable
              $count++;
              return $count;
          }

          for ($i = 0; $i < 5; $i++) {
              echo testt() . "<br>";
          }

          echo <<<'EOF'
          class Counter {
              public function testtt() {
                  $count = 0; // local variable
                  $count++;
                  return $count;
              }
          }

          $obj = new Counter();
          for ($i = 0; $i < 5; $i++) {
              echo $obj->testtt() . "<br>";
          }
          output : 
          EOF;
          echo "<br>";
          class Counter {
              public function testtt() {
                  $count = 0; // local variable
                  $count++;
                  return $count;
              }
          }

          $obj = new Counter();
          for ($i = 0; $i < 5; $i++) {
              echo $obj->testtt() . "<br>";
          }

         echo <<<'EOF'
          class Counterr {
              public function testr() {
                  static $count = 0; // static variable
                  $count++;
                  return $count;
              }
          }

          $obj = new Counterr();
          for ($i = 0; $i < 5; $i++) {
              echo $obj->testr() . "<br>";
          }
          output : 
          EOF;   
          echo "<br>";
          class Counterr {
              public function testr() {
                  static $count = 0; // static variable
                  $count++;
                  return $count;
              }
          }

          $obj = new Counterr();
          for ($i = 0; $i < 5; $i++) {
              echo $obj->testr() . "<br>";
          }

         
        echo '<br>'.'--------- <h4>Constructor call order </h4>--------------'.'<br>';

        echo <<<'EOF'
           class A {
                public function __construct() {
                    echo "A ";
                }
            }
            class B extends A {
                public function __construct() {
                    parent::__construct();
                    echo "B ";
                }
            }
          output : 
          EOF;   
          echo "<br>";

            class AA {
                public function __construct() {
                    echo "A ";
                }
            }

            class BA extends AA {
                public function __construct() {
                    parent::__construct();
                    echo "B ";
                }
            }

            new BA();
         
          echo '<br>'.'------------ <h4> Full Magic Methods Example (Property + Method) </h4>-----------'.'<br>';

          echo <<<'EOF'
          
          Magic Method example :
          __construct()
          __destruct()
          __get()
          __set()
          __isset()
          __unset()
          __call()
          __callStatic()
          __toString()
          __invoke()
          __sleep()
          __wakeup()
          __serialize()
          __unserialize()
          __debugInfo()
          __clone()
          __set_state()

           class Magic {

              // Called when calling an undefined method
              public function __call($name, $arguments) {
                  echo "__call($name)\n";
              }

              // Called when reading undefined property
              public function __get($name) {
                  echo "__get($name)\n";
              }

              // Called when writing undefined property
              public function __set($name, $value) {
                  echo "__set($name, $value)\n";
              }

              // Called when checking undefined property
              public function __isset($name) {
                  echo "__isset($name)\n";
              }

              // Called when unsetting undefined property
              public function __unset($name) {
                  echo "__unset($name)\n";
              }
          }

          $obj = new Magic();

          // PROPERTY MAGIC
          $obj->x = 10;        // __set
          echo $obj->x;        // __get
          isset($obj->x);      // __isset
          unset($obj->x);      // __unset

          // METHOD MAGIC
          $obj->run();         // __call
          $obj->test(1, 2);    // __call
          output :   
          EOF;
          echo "<br>";

          class Magic {
                public $total;
              // Called when calling an undefined method
              public function __call($name, $arguments) {
                
                  echo "__call($name)\n";
              }

              // Called when reading undefined property
              public function __get($name) {
                echo $this->total."\n";
                  //echo "__get($name)\n";
              }

              // Called when writing undefined property
              public function __set($name, $value) {
                  $this->total = $value; 
                  //echo "__set($name, $value)\n";
              }

              // Called when checking undefined property
              public function __isset($name) {
                  echo "__isset($name)\n";
              }

              // Called when unsetting undefined property
              public function __unset($name) {
                  echo "__unset($name)\n";
              }
              public function __toString() 
              { return "Object Printed\n"; }

          }

          $obj = new Magic();

          // PROPERTY MAGIC
          $obj->x = 10;        // __set
          echo $obj->x;        // __get
          isset($obj->xx);      // __isset
          unset($obj->x);      // __unset
          echo $obj;

          // METHOD MAGIC
          $obj->run();         // __call
          $obj->test(1, 2);    // __call
          echo '<br>'.'-----------------------'.'<br>';
            class Magice {
                public function hello() {
                    echo "hello";
                }

                public function __call($name, $args) {
                    echo "__call($name)";
                }
            }

            $obj = new Magice();

            $obj->hello(); // ❌ __call NOT called
            $obj->run();   // ✅ __call('run')
            $obj->x();  


          echo '<br>'.'-----------------------'.'<br>';

        class magics{
            public function __call($name,$argument)
            {
                echo "test";
            }
          }
          $ok = new magics();
          echo $ok->na();
          echo $ok->foo(1,2);
          echo  $ok->bar("a");
          echo $ok->na();
          echo "</pre>";
          echo '<br>'.'-----------------------'.'<br>';
        $conn= mysqli_connect('localhost','root','','asbschool','3306');
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $qry = "SELECT get_name('Radha ghosh') AS name;";
        $row = mysqli_query($conn,$qry);
        $result = mysqli_fetch_assoc($row);
        echo "<pre>";
        print_r($result);
        echo "</pre>";
        echo "<br>";

        class king
        {
           public function get_name()
           {
             return 'sachin';
           }
        }

        class ban extends king
        {
          public function cricket()
          {
            return 'tendulkar';
          }
        }
        $gv = new king();
        echo $gv->get_name();
        echo "<br>";
        $gv = new ban();
        echo $gv->cricket();
        echo "<br>";
        echo "<br>--------------<h4> while loop </h4>----------------</br>";
        echo "<pre>";
        echo <<<'EOF'
          $f=10;
          while($f>=1)
          {
            echo $f;
            $f--;
          }
          output : 
          EOF;
          echo "</pre>";
        $f=10;
        while($f>=1)
        {
          echo $f."<br>";
          $f--;
        }

        echo "<br>------------ <h4> Bubble Sort or array sort</h4>------------------</br>";
        $d= array(10,3,2,4,5,7,8);
        $m = min($d);
        $temp ='';
        for($j=0;$j<count($d);$j++)
        {
            for($k=$j+1;$k<count($d);$k++)
            {
                if($d[$j]>$d[$k])
                {
                    //echo $d[$j]."<br>";
                  $temp = $d[$j];
                  $d[$j]=$d[$k];
                  $d[$k]=$temp;
                } 
            }
        }
        print_r($d);
        echo "<br>";
        rsort($d);
        print_r($d);
        echo "<br>------------------------------</br>";

        abstract class ball{
          abstract public function ghar();
          public function son()
          {
             echo "name";
          }
        }

        class vill extends ball{
          public function ghar()
          {
            return 'antilina';
          }

          public function son()
          {
            echo "dev";
          }
        }

        $gb = New vill();
        echo $gb->ghar();
        echo "<br>------------------------------</br>";
        //$dc = New ball();
        echo $gb->son();
        echo "<br>------------------------------</br>";

        interface dell{
          public function asus();
          public function hp();
        }

        class cric implements dell
        {
          public function asus()
          {
             return 'ball';
          }

          public function hp()
          {
             return 'ball3';
          }
        } 

        $gb = New cric();
        echo $gb->asus();
        echo $gb->hp();
        echo "<br>------------------------------</br>";
        

      class room{

          public  $city;
          public function __construct()
          {
            $this->city='kolkata';
          }

          public function kol()
          {
            return  $this->city;
          }
        }

        class city extends room{
          public function classes()
          {
            $sachin=  $this->city;;
            return $sachin;
          }
        }

        $obj = new room();
        $obj->city='delhi';
        echo $obj->kol();
        echo "<br>";
        $obj2 = new city();
        echo $obj2->classes();

        echo "<br>------------------------------</br>";

        abstract class school{
          abstract public function student();
        }
        class table extends school{
          public function student()
          {
            return  $rt='rohit';
          }
        }

        echo "<br>";
        $obj2 = new table();
        echo $obj2->student();

        echo "<br>------------------------------</br>";

        interface pen{
          public function red();
        }
        class mog implements pen {
          public function red()
          {
            return 'dev';
          }
        }

        $obj4 = new mog();
        echo $obj4->red();
        echo "<br>------------------------------</br>";

          class incap{
            private $amt=0;
            public function total($amn=0)
            {
               $this->amt=$amn;
            }
            public function bal()
            {
              return 'total balance: '.$this->amt;
            }
          }
        $obj4 = new incap();
        $obj4->total(500);
        echo $obj4->bal();
        echo "<br>--------------<h4> Basic Encapsulation Example </h4>----------------</br>";


        class BankAccount {
            private $balance = 0;  // Private property — cannot be accessed directly

            // Public method to deposit money
            public function deposit($amount) {
              $this->balance += $amount;
                if ($amount > 0) {
                    //$this->balance += $amount;
                    echo "Deposited: $amount<br>";
                } else {
                    echo "Invalid deposit amount!<br>";
                }
            }

            // Public method to withdraw money
            public function withdraw($amount) {
                if ($amount > 0 && $amount <= $this->balance) {
                    $this->balance -= $amount;
                    echo "Withdrawn: $amount<br>";
                } else {
                    echo "Insufficient balance or invalid withdrawal!<br>";
                }
            }

            // Public method to check current balance
            public function getBalance() {
                return $this->balance;
            }
        }

        

        // ---------------- Example usage ----------------
        $account = new BankAccount();

        // Deposit money
        //$account->deposit(5000);
        $account->deposit(2000);
        //$account->deposit(-2000);
        // Withdraw money
        $account->withdraw(1000);

        // Check balance
        echo "Current Balance: " . $account->getBalance();

        echo '<br>-------<h4> Polymorphism Example </h4>-------</br>';

        class classroom{
          public function mk()
          {
            echo "rani";
          }
        }

        class hmkk extends classroom
        {
           public function mk()
           {
             echo "sachin";
           }
        }

        class bn extends classroom{
          public function mk()
          {
            echo "dhoni";
          }
        }

        function callpolymor(classroom $classroom)
        {
           $classroom->mk();
        }

        callpolymor(new hmkk());
        echo "<br>";
        callpolymor(new bn());
        echo "<br>-------------- End ----------------</br>";


        $ed= "world cup";
        print_r(str_split($ed));
        echo "<br>-------------- End ----------------</br>";
        class village
        {
          public function house()
          {
            echo "rani";
          }
        }

        class roy extends village
        {
          public function house()
          {
            echo "shan";
          }
        }


        $acc = new village();

        // Deposit money
        echo $acc->house();

        echo "<br>------------------------------</br>";
        $s=1;
        if($s===1)
        {
          echo "yes";
        }
        echo "<br>------------------------------</br>";
        class cityy{
          protected function dc()
          {
            return "dr";
          }
          public function fc(){
            return $this->dc();
          }
        }

        $obj4 = new cityy();
        echo $obj4->fc();

        echo "<br>------------------------------</br>";
        class cityyy{
          public static function dc()
          {
            return "dr";
          }
          public function fc(){
            return self::dc();
          }
        }

        $obj5 = new cityyy();
        echo $obj5->fc();

        echo "<br>-------</br>";

        $r='sdccccc';
        //echo "<pre>";
        print_r(str_split($r));

        echo "<br>---------<h4> Differences between echo and print: </h4>------------</br>";

        $f= 'rahul';
        echo $f;
        echo '<br>';
        $v =print $f;
        echo $v;
        echo '<br>';
        //$a = echo "A";   // ❌ ERROR
        $b = print "B";

        echo "<br>---------<h4>bool example </h4>------------</br>";
        $status = "0";
        var_dump((bool)$status);

        echo "<br>---------------------</br>";
        echo (9*6)-(10);

        echo "<br>----------------</br>";
        trait Ram{
          public function cityr($city)
          {
            echo $city;
          }
        }
        class hello
        {
          use Ram;
        }
        class hi
        {
          use Ram;
        }

        $obj6 = new hello();
        echo $obj6->cityr('dumka');
        echo "<br>-----------<h4> Five Array Function </h4> ----------------</br>";
        $k=array(5,7,8,9,2,4,4);
        echo count($k).'<br>';
        echo '------<h4> is_array Example </h4> -----------'.'<br>';
         if(is_array($k));
         {
           echo "is_array ".'<br>';
         }
         echo '------<h4> in_array Example </h4>-----------'.'<br>';
         if(in_array(4,$k));
         {
           echo "in_array".'<br>';
         }
         echo '------<h4> key exists Example </h4>-----------'.'<br>';
         if(array_key_exists(4,$k));
         {
           echo "key exists";
         }
         echo '<br>--------<h4>array_merge Example </h4>------</br>';

         $g= array(3,5,56,7,8,3,90);

         $e = array_merge($k,$g);

         print_r($e);
         echo '<br>------<h4> array_push Example </h4>--------</br>';
         array_push($g,4);
         //echo '<br>--------</br>';
         print_r($g);
         echo '<br>----<h4> array_search Example </h4>----</br>';
         $numbers = [10, 20, 30];
        $key = array_search(20, $numbers);
        echo $key; // 1

        echo "<br>-----------<h4> Find Duplicate Value </h4>----------------</br>";
        $fc = array(6,2,4,5,6,7,8,9,16);
        //print_r(array_unique($fc));
        //echo "<br>";
        $df = array_diff_assoc($fc, array_unique($fc));
        print_r($df);
        echo "<br>--------<h4> PHP map function </h4>--------</br>";
        $num = array(1,2,3,4,5);

        $for = array_map(function($n){
          return $n*2;
        },$num);

        print_r($for);
        echo "<br>";

        $dc =  array_map(function($rf){
          return $rf/2;
        },$num);
        print_r($dc);

        echo "<br>----------<h4> Difference between array_merge() and array_combine() </h4>-----------</br>";

        $rf = array(67,89,9,56);
        $rr = array(34,22,45,67,23);

        $rh = array_merge($rf,$rr);
        print_r($rh);

        echo "<br>------------<h4>how to add value of two array </h4>-------</br>";

        $df=array(4,7,7,8,9);
        $fg= array(4,7,2,3,5,9,2,5,1);

        $fj = array_map(function($a,$b){
          return $a+$b;
        },$df,$fg); 

        //$fj
        print_r($fj);

        echo "<br>--------<h4> Fetch second height number </h4> --------</br>";

        echo '//Third height salary <br> SELECT * FROM `students` WHERE class=(SELECT MAX(class) FROM students WHERE class<(SELECT MAX(class) FROM students ORDER BY class DESC ))';

        echo '<br>//Third height salary <br> SELECT * FROM `students` WHERE class=(SELECT class FROM students ORDER BY class DESC LIMIT 1 OFFSET 3)';
        echo "<br>----------------</br>";

        echo "<h4>Fetch only capital letters from table in mysql</h4>";
        echo "// SELECT  name,  REGEXP_REPLACE(name, '[^A-Z]', '') AS capital_letters FROM students;" ;

        
        ?>
        <div class="container">
          <div>
              <h3>Common MySQL Functions With Laravel</h3>
              
              <div>
                <table>
                  <tr><td>MySQL Function </td><td>  Laravel Syntax </td></tr>
                  <tr><td> -------------- </td><td> ----------------------------- </td></tr>
                  <tr><td> UPPER()        </td><td> DB::raw('UPPER(name)')        </td></tr>
                  <tr><td> LOWER()        </td><td> DB::raw('LOWER(name)')        </td></tr>
                  <tr><td> CONCAT()       </td><td> DB::raw("CONCAT(col1, col2)") </td></tr>
                  <tr><td> COUNT()        </td><td> DB::raw('COUNT(*)')           </td></tr>
                  <tr><td> SUM()          </td><td> DB::raw('SUM(amount)')        </td></tr>
                  <tr><td> DATE()         </td><td> whereDate()                   </td></tr>
                  <tr><td> YEAR()         </td><td> whereYear()                   </td></tr>
                  <tr><td> MONTH()        </td><td> whereMonth()                  </td></tr>
                  <tr><td> NOW()          </td><td> DB::raw('NOW()')              </td></tr>
                  <tr><td> CURDATE()      </td><td> DB::raw('CURDATE()')          </td></tr>
                </table>
              </div>

          </div>
            <h1>🔥 📌 MySQL Datatype Full List (Max Size + Details)</h1>
            <p class="lead">Compact cheat-sheet showing storage, max size, range and short descriptions for common MySQL datatypes.</p>


            <section>
            <div class="section-head"><div class="badge">🟦</div><h2 style="margin:0;font-size:15px">1. String Types</h2></div>
            <table>
            <thead>
            <tr><th>Type</th><th>Storage</th><th>Max Length / Notes</th><th>Description</th></tr>
            </thead>
            <tbody>
            <tr><td class="mono">CHAR(n)</td><td>n bytes</td><td>255 chars</td><td>Fixed-length string (pads with spaces)</td></tr>
            <tr><td class="mono">VARCHAR(n)</td><td>n bytes + 1 or 2 bytes</td><td>65,535 bytes (row dependent)</td><td>Variable-length non-binary string</td></tr>
            <tr><td class="mono">TINYTEXT</td><td>1 byte length + data</td><td>255 bytes</td><td>Very small text</td></tr>
            <tr><td class="mono">TEXT</td><td>2 bytes length + data</td><td>65,535 bytes (≈64 KB)</td><td>Small text</td></tr>
            <tr><td class="mono">MEDIUMTEXT</td><td>3 bytes length + data</td><td>16,777,215 bytes (≈16 MB)</td><td>Medium text</td></tr>
            <tr><td class="mono">LONGTEXT</td><td>4 bytes length + data</td><td>4,294,967,295 bytes (≈4 GB)</td><td>Large text</td></tr>
            <tr><td class="mono">BINARY(n)</td><td>n bytes</td><td>255 bytes</td><td>Fixed-length binary</td></tr>
            <tr><td class="mono">VARBINARY(n)</td><td>n bytes + 1 or 2 bytes</td><td>65,535 bytes</td><td>Variable-length binary</td></tr>
            <tr><td class="mono">ENUM</td><td>1 or 2 bytes</td><td>up to 65,535 values</td><td>Single value from a list (stored as index)</td></tr>
            <tr><td class="mono">SET</td><td>1,2,3,4 or 8 bytes</td><td>up to 64 members</td><td>Multiple selected values (stored as bits)</td></tr>
            </tbody>
            </table>
            </section>


            <section>
            <div class="section-head"><div class="badge">🟥</div><h2 style="margin:0;font-size:15px">2. Binary / BLOB Types</h2></div>
            <table>
            <thead>
            <tr><th>Type</th><th>Storage</th><th>Max Size</th><th>Description</th></tr>
            </thead>
            <tbody>
            <tr><td class="mono">TINYBLOB</td><td>1 byte length + data</td><td>255 bytes</td><td>Very small binary</td></tr>
            <tr><td class="mono">BLOB</td><td>2 bytes length + data</td><td>65,535 bytes (≈64 KB)</td><td>Small binary</td></tr>
            <tr><td class="mono">MEDIUMBLOB</td><td>3 bytes length + data</td><td>16,777,215 bytes (≈16 MB)</td><td>Medium binary</td></tr>
            <tr><td class="mono">LONGBLOB</td><td>4 bytes length + data</td><td>4,294,967,295 bytes (≈4 GB)</td><td>Very large binary</td></tr>
            </tbody>
            </table>
            </section>


            <section>
            <div class="section-head"><div class="badge">🟩</div><h2 style="margin:0;font-size:15px">3. Numeric Types</h2></div>
            <table>
            <thead>
            <tr><th>Type</th><th>Storage</th><th>Range (Unsigned)</th><th>Range (Signed)</th></tr>
            </thead>
            <tbody>
            <tr><td class="mono">TINYINT</td><td>1 byte</td><td>0 to 255</td><td>-128 to 127</td></tr>
            <tr><td class="mono">SMALLINT</td><td>2 bytes</td><td>0 to 65,535</td><td>-32,768 to 32,767</td></tr>
            <tr><td class="mono">MEDIUMINT</td><td>3 bytes</td><td>0 to 16,777,215</td><td>-8,388,608 to 8,388,607</td></tr>
            </tbody>
            </section>


          <section>
          <div class="section-head"><div class="badge">🟧</div><h2 style="margin:0;font-size:15px">4. DECIMAL Storage (Full Detail)</h2></div>
          <table>
          <thead><tr><th>Total digits (M)</th><th>Storage</th></tr></thead>
          <tbody>
          <tr><td>1–2 digits</td><td>1 byte</td></tr>
          <tr><td>3–4 digits</td><td>2 bytes</td></tr>
          <tr><td>5–6 digits</td><td>3 bytes</td></tr>
          <tr><td>7–9 digits</td><td>4 bytes</td></tr>
          <tr><td>10–18 digits</td><td>5–8 bytes</td></tr>
          </tbody>
          </table>
          <div class="summary">
          <strong>✔ Max DECIMAL digits = 65</strong><br>
          <strong>✔ Max bytes used = 17</strong>
          </div>
          </section>


          <section>
          <div class="section-head"><div class="badge">🟨</div><h2 style="margin:0;font-size:15px">5. Date &amp; Time Types</h2></div>
          <table>
          <thead><tr><th>Type</th><th>Storage</th><th>Range</th></tr></thead>
          <tbody>
          <tr><td class="mono">DATE</td><td>3 bytes</td><td>1000-01-01 to 9999-12-31</td></tr>
          <tr><td class="mono">DATETIME</td><td>5 bytes</td><td>1000-01-01 to 9999-12-31</td></tr>
          <tr><td class="mono">TIMESTAMP</td><td>4 bytes</td><td>1970-01-01 to 2038-01-19</td></tr>
          <tr><td class="mono">TIME</td><td>3 bytes</td><td>-838:59:59 to 838:59:59</td></tr>
          <tr><td class="mono">YEAR</td><td>1 byte</td><td>1901 to 2155</td></tr>
          </tbody>
          </table>
          </section>


          <section>
          <div class="section-head"><div class="badge">🟪</div><h2 style="margin:0;font-size:15px">6. Special Types</h2></div>
          <table>
          <thead><tr><th>Type</th><th>Description</th></tr></thead>
          <tbody>
          <tr><td class="mono">JSON</td><td>Stores JSON documents (optimized storage in MySQL 5.7+)</td></tr>
          <tr><td class="mono">NULL</td><td>No value (1 bit in NULL bitmap per column)</td></tr>
          <tr><td class="mono">BOOLEAN</td><td>Alias for <code>TINYINT(1)</code></td></tr>
          </tbody>
          </table>
          </section>


            <section>
                <div class="section-head"><div class="badge">⭐</div><h2 style="margin:0;font-size:15px">FINAL SUMMARY (best cheat sheet)</h2></div>
                <div class="summary">
                <ul style="margin:0;padding-left:18px;line-height:1.6">
                <li><strong>VARCHAR</strong> = 65,535 bytes</li>
                <li><strong>TEXT</strong> = 64 KB</li>
                <li><strong>MEDIUMTEXT</strong> = 16 MB</li>
                <li><strong>LONGTEXT</strong> = 4 GB</li>
                <li><strong>BLOB versions</strong> = same sizes as TEXT versions</li>
                <li><strong>INT</strong> = 4 bytes</li>
                <li><strong>BIGINT</strong> = 8 bytes</li>
                <li><strong>DOUBLE</strong> = 8 bytes</li>
                <li><strong>DECIMAL</strong> = up to 17 bytes (exact)</li>
                </ul>
                </div>


                <p class="cta">Bro, want a <strong>PDF</strong>, <strong>optimized datatype guide</strong>, or a <strong>performance comparison chart</strong>? Say: "bro give optimized datatype guide"</p>
            </section>
      </div>

      <div><h4>New Features in php 8</h4></div>
   
        <div class="container">

          <table border="1" cellpadding="8" cellspacing="0" style="border-collapse: collapse; width: 100%; font-family: Arial, sans-serif;">
            <thead style="background-color: #f2f2f2;">
              <tr>
                <th>Feature</th>
                <th>Description</th>
                <th>PHP Version</th>
              </tr>
            </thead>
          <tbody>
            <tr>
              <td>Named Arguments</td>
              <td>Pass by name, not position</td>
              <td>PHP 8.0</td>
            </tr>
            <tr>
              <td>Attributes</td>
              <td>Add metadata to code</td>
              <td>PHP 8.0</td>
            </tr>
            <tr>
              <td>Constructor Property Promotion</td>
              <td>Shortcut for defining class props</td>
              <td>PHP 8.0</td>
            </tr>
            <tr>
              <td>Union Types</td>
              <td>Accept multiple types</td>
              <td>PHP 8.0</td>
            </tr>
            <tr>
              <td>Match Expression</td>
              <td>Cleaner switch alternative</td>
              <td>PHP 8.0</td>
            </tr>
            <tr>
              <td>Nullsafe Operator</td>
              <td>Avoid null chain errors</td>
              <td>PHP 8.0</td>
            </tr>
            <tr>
              <td>Weak Maps</td>
              <td>Cache with auto cleanup</td>
              <td>PHP 8.0</td>
            </tr>
            <tr>
              <td>str_* functions</td>
              <td>Easy string operations</td>
              <td>PHP 8.0</td>
            </tr>
          </tbody>
        </table>
        </div>
      <?php 

      $succ=0;
      if(isset($_POST['save']))
      {
      		try
      		{
             $conn->begin_transaction();

      				$fullname=$_POST['fullname'];
      				$email=$_POST['email'];
      				$phone=$_POST['phone'];
      				$password=$_POST['password'];
      				$confirm_pass=$_POST['confirm_pass'];

      				$datetime = date('Y-m-d H:i:s');

      				$insert =mysqli_query($conn,"INSERT INTO `registration` ( fullname, email, phone, password, confirm_pass, created_at) VALUES ( '$fullname','$email','$phone','$password','$confirm_pass','$datetime')");

              $succ=1;
              $conn->commit();
      		}
      		catch(Exception $e)
      		{
              error_log("error : " .$e->getMessage());
      				echo 'error: '.$e->getMessage();
              $succ=$e->getMessage();
              $conn->rollback();
      		}
      }

      ?>
      


      <div class="container mt-5">
        <div class="row justify-content-center">
          <div class="col-md-6">
            <div class="card shadow-lg rounded-4">
              <div class="card-header text-center bg-primary text-white">
                <h4>Registration Form</h4>
              </div>
              <div class="card-body">
                <form action='' method='POST' id='register'>
                  <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" name='fullname' id="name" placeholder="Enter your full name" >
                  </div>

                  <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" name='email' id="email" placeholder="Enter your email" >
                  </div>

                  <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="tel" class="form-control" id="phone" name='phone' placeholder="Enter your phone number" >
                  </div>

                  <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name='password' placeholder="Create a password" >
                  </div>

                  <div class="mb-3">
                    <label for="confirm_password" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="confirm_password" name='confirm_pass' placeholder="Re-enter your password" >
                  </div>

                  <div class="d-grid">
                    <button type="submit" name='save' class="btn btn-primary">Register</button>
                  </div>
                </form>
              </div>
              <div class="card-footer text-center">
                <small>Already have an account? <a href="#">Login here</a></small>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
</body>
</html>
<!-- Bootstrap JS CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
  crossorigin="anonymous"
></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  const  sts ="<?=$succ?>";
  //alert(sts);
  if(sts==1)
  {
      Swal.fire({
        icon: 'success',
        title: 'Saved!',
        text: 'Your data has been saved',
        timer: 4000,
        showConfirmButton: false
      });
      document.getElementById('register').reset();

      // remove flag from URL (if any)
      history.replaceState({}, document.title, location.pathname);
  }
  else if(sts!=0)
  {
      Swal.fire({
    icon: 'error',
    title: 'Oops...',
    text: sts
    });
  }
</script>