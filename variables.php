<?php
    //This is a comment
    
    #Variables
    /*
        - Prefix $
        - Start w/ a letter or an underscore
        - Only letters, numbers and underscores
        - Case sensitive
    */

    #DATA TYPES
    /*
        - String
        - Integers
        - Float
        - Booleans
        - Arrays
        - Objects
        - NULL
        - Resource
     */

    $variable = 'Hello World!';

    $num1 = 4;
    $num2 = 10;
    $sum = $num1 + $num2;

    $string1 = 'Hello';
    $string2 = 'World';
    $greeting = $string1.' '.$string2.'!';
    $string3 = "They're here";
    $string3 = "They\"re here";

    $float1 = 4.4;
    $bool1 =true;

    //Constant
    define('GREETING', 'Hello Everyone' );
    echo $greeting;
    echo GREETING;
    #Array - Variables that hold multiple values
    /*
        - Indexed
        - Associative
        - Multi-dimensional
    */

    //Indexed starts with 0
    $people = array("jshdf","ksdjfkds","skdjf"); 
    $ids    = array(23, 55, 12);
    $cars   = ["Honda", "Toyota", "Ford"];
    $cars[3]="Chevy";

    //Adding an item to the end of an array
    $cars[] = "New car";

    //Count function to show the items in an array
    echo count ($cars);

    //Echo for arrays this will show all the items in array
    //And their index
    print_r($cars);

    //Shows data type for items in array and number of chars
    var_dump($cars);
    echo $cars[4];

    //Associative arrays
    $people = array("Brad" => 35, "Jose" => 21, "Mike" => 27);
    $ids    = [22 => "Brad", 23 => "Jose", 54 => "Bill"];
    echo $ids["22"];

    //Adding items to array $people
    $people["Jill"] = 42;
    echo $people["Jill"];

    print_r($people);
    var_dump($people);

    //Muti-dimensional array
    $cars = array(
        array("Honda", 20, 10),
        array("Toyota", 20, 10),
        array("Ford", 20, 10),
        array("Chevy", 20, 10),
    );

    echo $cars[3][0];


?>