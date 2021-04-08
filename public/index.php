<?php
require_once __DIR__.'/../src/wcs/Hello.php';

use App\wcs\Hello;

$text=new Hello();
echo $text->talk();
