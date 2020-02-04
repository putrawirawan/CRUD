<?php  

require "Fruit.php";

class Kelapa extends Fruit
{
    const BUAH = "Kelapa";
    public function message() {
        echo "saya buah apa ".self::BUAH." ? ";
    }
}

$kelapa = new Kelapa('kelapa', 'hijau');
$kelapa->message();
echo "<br />";
$kelapa->write_name();
echo "<br />";
$kelapa->write_color();
echo "<br />";
echo Kelapa::BUAH;

?>