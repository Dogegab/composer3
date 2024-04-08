<?php

require 'C:\public\cow\vendor\autoload.php';

use CowSay\Cow;

$bessie = new Cow('Coucou les wilders !');


$output = $bessie->say();
echo $output;

?>