<?php
$number = 9;
if($number%2!=0){
    echo "$number is odd";
} else{
    echo "$number is even.";
}
echo "<br>";
$num1 = 9;
$num2 = 7;
$action="/";

switch($action)
    {
    case "+":
    echo $num1+$num2;
    break;

    case "-":
    echo $num1-$num2;
    break;

    case "*":
    echo $num1*$num2;
    break;

    case "/":
    echo $num1/$num2;
    break; 

    default:
   echo "error";
   break;
}

echo "<br><br>";
//factorial function
function factorial($n) {
    $result = 1;
    for ($i = 1; $i <= $n; $i++) {
        $result *= $i;
    }
    return $result;
}

echo factorial(8);


?>

<?php
// fuction default value
function greeting($name = "Guset") {
 echo "<br>";
return "Hello, $name";
}

$result = greeting("Jhon");
echo "<br>";
echo $result;

// default value, 
// type restriction
// scope (local, global)

// Project start
// PO-Product Owner| PCo - Prject coordinator,
//  BA -Business Analyst,
//  PM -Project Manager,
//  QA -Quality Assurance,
//  FE - Front End,
//  BE-Back End

//  Array
//1. Indexed Array
//2.Associative Array
//3 Multidimensional Array

// 1. Indexed Array

$fruits = array("apple", "orange", "Banana");

// foreach
foreach($fruits as $fruit){
    echo "<br>";
    echo $fruit;
}


// 2. Associative Array-eg
$person = array(
    "name" => "John",
    "age" => 30,
    "city"=>"New York"
);

// foreach loop
foreach($person as $key => $value){
    echo "<br>";
    echo $key . ":" . $value;
}

//ex
$mark = array(
    "aung"=>80,
    "kyaw"=> 40,
    "hla hla"=> 70,
);

foreach($mark as $key => $value){
    if ($value >=50){
        echo "<br>";
        echo $key ."Passed";
    } else{
        echo"<br>";
        echo $key . "Failed";
    }
}

// // Multidimensional Array
// $users = array(
//     array("name" => "Aung", "age" => 30, "city" => "Yangon"),
//     array("name" => "Kyaw", "age" => 40, "city" => "Mandalay")
//     array("name")
// )

?>

