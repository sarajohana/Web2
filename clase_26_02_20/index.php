<?php
$myArray = ['HTML','CSS','PHP'];
//accces to specific position
echo $myArray[1];
//Other way to create on array
$myArray2 = array('CSS','Javascript','python', 6.5);
echo '<br>' . $myArray2[2];
echo '<br>';
print_r($myArray2);
echo '<br>';
var_dump($myArray2);// printarray showing type
//Adding elements to array
$myArray[] = 20;
//other way to add elements to array
array_push($myArray,'java',30);
echo '<br>';
var_dump($myArray);
echo '<br>';
// Associative array
$myArra3 = array(
    'name'=>'Sara',
    'lastname'=>'Jimenez'
);
print_r($myArra3);
echo $myArra3['name'];
echo '<br>';
foreach($myArray as $element){
    echo '<li>'. $element . '</li>';
}
echo '<br>';
//get index using foreach
foreach($myArray as $key => $element){
    echo '<li>'. $element .', position: '. $key. '</li>';
}
?>