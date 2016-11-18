<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 11/18/2016
 * Time: 2:19 PM
 */

class Car
{
    public $color;
    public $wheel;

    public function __construct()
    {
        callback_wheels_number( $wheel);
        callback_color( $color );
        $pdo = new PDO('mysql:host=localhost;dbname=nitintest', 'root', '');
    }

    public function callback_wheels_number ( $wheel)
    {
        $this->wheel = $wheel;
    }

    public function callback_color ( $color )
    {
        $this->color = $color;
    }

    public function callback_save_data( $wheel, $color )
    {
        $wheels = $this->wheel;
        $colors = $this->color;

        var_dump($wheels . $colors);

        $stmt = $pdo->prepare("INSERT INTO `car` (car_wheels`, `car_color`) VALUES ($wheels, $colors);");

        $stmt->execute();

    }
}

/*** create a new Car object ***/
$carObj = new Car; //new object of Class Car created, and constructor is called


$carObj->callback_color( 'Red' );
$carObj->callback_wheels_number( 4 );

$carObj->callback_wheels_number( 3, 'Black');