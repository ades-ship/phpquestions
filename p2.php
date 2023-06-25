<?php
$name="adesh se";
$rno=10;
$marks=56.6;
echo "name is : $name <br/>";
echo "name is : $rno <br/>";
echo "name is : $marks <br/>";
$num=45;
if($num<100){
    echo "number $num less than 100";
}

$t = date("H");

if ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}

echo "<br>";
$color=array("red","yellow");
foreach($color as $value){
    echo "$value<br>";
}

#  associate array
$salaries = array("ajay"=>10000, "sunil"=>19000, "vijay"=> 5000);
echo "salary of ajay is".$salaries['ajay']."<br>";

foreach($salaries as $x=>$x_value)
{
    echo "name=".$x."salary,".$x_value."<br>";
    
}

# multi dimensional array
$marks=array(
    "ajay"=>array(
        "p"=>35,
        "m"=>56
    ),
    "vijay"=>array(
        "p"=>35,
        "m"=>56
    )
    );
// echo "$marks['ajay']['p']<br>";
// echo $marks['ajay']['p']."<br/>";
echo $marks['ajay']['p'] . "<br/>";
echo $marks['ajay']['m'] . "<br/>";


$cars=array("san","dan","tan");
sort($cars);
$clen=count($cars);
for($x=0; $x<$clen; $x++){
    echo $cars[$x];
}

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
arsort($age);

foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}


?>