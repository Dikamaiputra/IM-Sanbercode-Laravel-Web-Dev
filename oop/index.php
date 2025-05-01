<?php 
require "animal.php";
require "ape.php";
require "frog.php";

/**
 * 
 */
class Shaun extends Animal
{

}

$shaun = new Shaun("Shaun");
echo "Name: ".$shaun->getName();
echo "<br>";
echo "Legs: ".$shaun->legs;
echo "<br>";
echo "Cold Blooded: ".$shaun->cold_blood;
echo "<br>";
echo "<br>";

$kera = new Ape("Kera Sakti");
echo "Name: ".$kera->getName();
echo "<br>";
echo "Legs: ".$kera->legs;
echo "<br>";
echo "Cold Blooded: ".$kera->cold_blood;
echo "<br>";
echo "Yell: ".$kera->yell();

echo "<br>";
echo "<br>";

$kodok = new Frog("Bullfrog");
echo "Name: ".$kodok->getName();
echo "<br>";
echo "Legs: ".$kodok->legs;
echo "<br>";
echo "Cold Blooded: ".$kodok->cold_blood;
echo "<br>";
echo "Jump: ".$kodok->jump();




 ?>