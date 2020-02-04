<?php 

class fruit
{
    public $name;
    public $color;

    function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    // function __destruct()
    // {
    //     echo "nama buah ini adalah $this->name";
    //     echo "<br />";      
    //     echo "warna buah ini adalah $this->color";
    // }

    // function set_name($name)
    // {
    //     $this->name = $name;
    // }

    // function set_color($color)
    // {
    //     $this->color = $color;
    // }

    function write_name()
    {
        echo "nama buah ini adalah $this->name";
    }

    function write_color()
    {
        echo "warna buah ini adalah $this->color";
    }
}


?>