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