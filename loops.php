<?php
    # LOOPS - Execute code set number of times

    /*
        - For
        - While
        - Do.. While
        - Foreach
    */

    
    # For Loop - if you know the number of times its
    # going to be executed
    # @params - initializer, condition, increment
    echo 'FOR LOOPS:<br>';
    for($i = 5; $i <= 10; $i++){
        echo 'Number ' .$i;
        echo '<br>';
    }

    
    # While Loop usually used over for loops if you dont know the set number/condition
    # @params - condition
    echo 'WHILE LOOPS:<br>';
    $i = 0;
    while($i < 10){
        echo $i;
        echo '<br>';
        $i++;
    }

    
    # Do While rarely used (always gonna run at least once no matter what)
    # @params - condition
    echo 'DO WHILE LOOPS:<br>';
    $i = 0;

    do {
        echo $i;
        echo '<br>';
        $i++;
    }
    while($i < 10);

    
    # FOREACH loop, meant to work with array
    echo 'FOREACH LOOPS (index):<br>';
    $people = array('Brad', 'Jose', 'Will');

    foreach ($people as $person){
        echo $person;
        echo '<br>';
    }

    $people = array('Brad', 'Jose', 'Will');

    foreach ($people as $person){
        echo $person;
        echo '<br>';
    }
?>