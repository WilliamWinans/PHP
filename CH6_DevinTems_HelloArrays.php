<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        /*
Devin Tems
PHP Programming
05-30-17
Hello Functions
*/
//variable that contains a quote
$favoriteQuote = "In every man's heart there is a devil, but we do not know the man as bad until the devil is roused. -- JAMES OLIVER CURWOOD";

//an array that holds some basic information aobut a user
$user = array("Darkrious", "Devin Tems", "ABcd1234", "903-555-1212", "dctems@mymail.tstc.edu", "2650 S East End Blvd, Marshall, TX 75670");
//class details array
$class = array("ITSE 1306", "PHP Programming", "Will Winans");
//grocery list array with departments and items
$groceryList = array(array("Meats", "Beef", "Poultry", "Pork"),
                array("Diary", "Cheese", "Milk", "Yogurt"),
                array("Produce", "Vegetables", "Fruits", "Grains"),
                array("Frozen Foods", "Garbage Meals", "Garbage Flesh", "Garbage luxuries"));
//a for loop that will display the basic information about the user
echo "a for loop showing the user array values.<br>" . PHP_EOL;
for($i = 0; $i < sizeof($user); $i++)
{
  echo $user[$i] . '<br>' . PHP_EOL;
}
//use of the foreach loop to display the basic information
echo "A foreach loop showing the user array values.<br>" . PHP_EOL;
foreach ($class as $value)
{
  echo $value . '<br>' . PHP_EOL;
}
//example of a nested for loop
echo "A nested for loop to represent the groceryList array values.<br>" . PHP_EOL;
for($a = 0; $a < count($groceryList[0]); $a++)
{
  for($b = 0; $b < count($groceryList[0]); $b++)
  {
    echo $groceryList[$a][$b] . '<br>' . PHP_EOL;
  }
}
//example of a nested foreach loop statement
echo "A nested foreach loop representing the values of the groceryList array.<br>" . PHP_EOL;
foreach($groceryList as $Row => $Column)
{
  echo $Row  . '<br>' . PHP_EOL;
  foreach($Column as $selection)
  {
    echo $selection . '<br>' . PHP_EOL;
  }
}

//sort said array
echo "sorting the groceryList array." . PHP_EOL;

asort($groceryList, SORT_REGULAR);
//a nested foreach loop statement to represent the sorted array

echo "Going through the groceryList array after it has been sorted with a nested foreach loop<br>" . PHP_EOL;

foreach($groceryList as $Row => $Column)
{
  echo $Row . '<br>'. PHP_EOL;
  foreach($Column as $selection)
  {
    echo $selection . '<br>' . PHP_EOL;
  }
}

//example of a explode function
echo "Using the explode function on the quote variable.<br>" . PHP_EOL;
$favoriteQuote = explode('--', $favoriteQuote);
print_r($favoriteQuote);
        ?>
    </body>
</html>
