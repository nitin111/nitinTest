<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 11/18/2016
 * Time: 2:19 PM
 */

//var_dump('Testing File'); die(0);

class Car
{
    public $color;
    public $wheel;

    public function __construct()
    {

    }

    public function setWheels($wheel)
    {
        $this->wheel = $wheel;
    }

    public function getWheels()
    {
        return $this->wheel;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }


    public function callback_save_data()
    {
        $wheels = $this->wheel;
        $colors = $this->color;

        var_dump('Wheels: '.$wheels .' Color: '. $colors);
        die('Iniciated Values Received');

       // $pdo = new PDO('mysql:host=localhost;dbname=nitintest', 'root', '');
       // $stmt = $pdo->prepare("INSERT INTO `car` (car_wheels`, `car_color`) VALUES ($wheels, $colors);");
       //  $stmt->execute();

    }
}

/*** create a new Car object ***/
$carObj = new Car; //new object of Class Car created, and constructor is called


$carObj->setColor( 'Red' ); // Se the iniciated value to color function 'Red'
$carObj->setWheels( 4 ); // Set the iniciated value to wheels function  '4'

$carObj->callback_save_data(); // calling the save function for saving the data into DB.