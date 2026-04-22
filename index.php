<?php
$s = "mohamed";
echo "$s[0]<br>";
echo "$s[3]<br>";
echo strlen($s)."<br>";
echo "$s[-1] <br>";
echo "{$s[strlen($s) - 1]}<br>"; 
echo $s . "<br>";
$s[0]= "e";
echo $s . "<br>";
$s[8]= "e";
echo $s . "<br>";