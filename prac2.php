<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>DB Transaction Summary — HTML UI</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href='css/style.css' rel="stylesheet">
  </head>
<body>
  <?php
    include('menu.php');
    ?>
<div  class="bg-light text-dark inner" >
<?php
abstract class PaymentGateway {
    // Common rule
    abstract public function pay($amount);

    // Common reusable function
    public function log($msg) {
        echo "Log: $msg <br>";
    }
}

class PayPal extends PaymentGateway {
    public function pay($amount) {
        echo "Paid ₹$amount via PayPal<br>";
    }
}

class PayU extends PaymentGateway {
    public function pay($amount) {
        echo "Paid ₹$amount via PayU<br>";
    }

    public function log($msg) {
        echo "Log: $msg <br>";
    }
}
$obj = new PayU();
echo $obj->log('test');
echo "<br>";

interface ghar{
    public function room();
}

class lived implements ghar{
    public function room()
    {
        echo "test3";
    }
}

$obj = new lived();
echo $obj->room();

?>
</div>
</body>
</html>