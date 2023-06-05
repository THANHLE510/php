<?php
$student = array(
array(
    "Name" => "Thanh",
    "Age" => 23,
    "Score" => 50
),
array(
    "Name" => "Toan",
    "Age" => 20,
    "Score" => 80
),
array(
    "Name" => "Manh",
    "Age" => 27,
    "Score" => 20
),
array(
    "Name" => "Duc",
    "Age" => 23,
    "Score" => 10
));

foreach($student as $student){
echo"Ten sinh vien:".$student["Name"]."<br/>";
echo"Age:".$student["Age"]."<br/>";
echo"Score:".$student["Score"]."<br/>";

if($student["Score"] >= 40){
    echo"Ket qua: Do <br><br>";
}else{
    echo"Ket qua: Truot <br><br>";
}
}
?>
