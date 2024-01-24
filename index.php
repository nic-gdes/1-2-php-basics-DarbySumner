
<?php

// One variable for each data type
    $make = "Ford";
    $model = "Taurus";
    $year = 2004;
   
// Echo the following strings as a single concatenated sentence
    echo "I " . "hate " . "PHP " . "!";

// Create an array called myArray with 4 pieces of data
    $integer = 30;
    $my_array = [1,2,3,4];

// Create a class called car and include, make, model and year
    class Car {
        public $make;
        public $model;
        public $year;
        
    function set_properties($make, $model, $year) {
        $this->make = $make; 
        $this->model = $model; 
        $this->year = $year; 
    }
}

// echo the phrase I have a {{ year }} {{ make }} {{ model }}".
    $my_car = new Car();
    $my_car->set_properties("2004","Ford","Taurus");
    echo "I have a " . $my_car->year. " " . $my_car->make . " " . $my_car->model . " ";

//Write a single if statement that checks if the value of your $integer variable is greater than or equal to 10. 
//Create a true and false condition (if/else).



?>