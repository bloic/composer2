<?php

require __DIR__ . "/../vendor/autoload.php";

use App\Wcs\Hello;
use HelloWorld\SayHello;


$sayHello =new SayHello();
echo $sayHello->world();

?>