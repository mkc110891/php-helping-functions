<?php

$string = "I am developer";

$revString = "";

while(strlen($revString) < strlen($string))
{
    $revString .= substr($string,(strlen($revString) + 1) * -1,1);
}

die($revString);