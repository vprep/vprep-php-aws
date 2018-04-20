<?php

$arr = array('country' => 'Holland', 'city' => 'Amsterdam');
array_push($arr, ('country' => 'India','city' => 'Noida'));

echo json_encode($arr);

?>