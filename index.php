
<?php

// One variable for each data type
    $make = "Ford";
    $model = "Taurus";
    $year = 2004;
    $my_car = new Car();
// Echo the following strings as a single concatenated sentence
    echo "I " . "hate " . "PHP " . "!";

// Create an array called myArray with 4 pieces of data
    $my_array = [1,2,3,4];

// Create a class called car and include, make, model and year
    class Car {
        public $make;
        public $model;
        public $year;
        
    }

    function set_make($make) {
        $this->make = $make; 
    }

    function set_model($model) {
        $this->model = $model; 
    }

    function set_year($year) {
        $this->year = $year; 
    };

// echo the phrase I have a {{ year }} {{ make }} {{ model }}".
    echo "I have a " , $my_car->year, " " . $my_car->make . " " . $my_car->model;


?>