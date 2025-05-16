<?php
// for logic error
function divide($a, $b) {
 if ($b == 0) {
    throw new Exception("Division by zero");   
 } 
 return $a / $b;  
}

try {
    echo divide(10, 0);
} catch (Exception $e) {
    echo "Error: " . $e->getMessage(), "\n";
}
?>