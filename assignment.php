<?php
function Call_name(){

   print ("HI KYEYUNE IBRAHIM");

}
function ThEage($current_year,$DateOfBirth)
{
$age=$current_year-$DateOfBirth;
return $age;
}
function HomeAddress()
{print ("MASAKA UGANDA");

}
 Call_name();
 print ("!<br> You are welcome to\t" );
 HomeAddress();
print ("<br>Today you are making\t".ThEage(2024,2003)."\tyears old");

?>