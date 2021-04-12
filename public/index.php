<?php
require __DIR__.'/../vendor/autoload.php';

$text=new App\wcs\Hello();
echo $text->talk()."<br>";

$text2 = new HelloWorld\SayHello();
echo $text2->world()."<br>";
