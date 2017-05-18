/*Devin Tems
PHP Programming
Ch.3 PHP CODE ASSIGNMENT
05/18/2017*/

<pre>
        <?php
        $studentName = "Devin Tems";
echo "Hello World, my name is " . $studentName .  PHP_EOL;      
        $data = array(array(0,1,2), array(4,5,6), array(7,8,9));
        echo '$data[1][1] equals = ' . $data[1][1] . PHP_EOL;
        $numOne = 5;
        $numTwo = 10;
        echo "Number " . $numOne . " plus Number " . $numTwo . 'equals ($numTwo + $numOne)' . PHP_EOL;
        $sparseString = substr($studentName, 3);
        echo $sparseString . PHP_EOL;
        echo "Today is ". date("l") . " the ". date("m/d/Y") . "." . PHP_EOL;
        ?>
</pre>