<?php

    $string_variable = "hello world";

    $number_variable = 2;

    $bool_value = false;

    function onClick() {
        
    if ($bool_value) {
        print "this is true";
        $bool_value = false;
    } else {
        print "this is false";
        $bool_value = true;     
    }
    }

    if(array_key_exists('button', $_POST)) { 
        onClick(); 
    }

?>

<form method="post">
<button  type="submit" name="button">Click me</button>
</form>