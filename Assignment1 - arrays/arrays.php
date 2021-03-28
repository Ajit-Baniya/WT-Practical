<!DOCTYPE html>
<html>
<body>

<?php

$name = array("Sanjaya", "Acharya", "abc");
sort($name);

$clength = count($name);
for($x = 0; $x < $clength; $x++) {
  echo $name[$x];
  echo "<br>";
}


$name = array("Sanjaya", "Acharya", "abc");
rsort($name);

$clength = count($name);
for($x = 0; $x < $clength; $x++) {
  echo $name[$x];
  echo "<br>";
}


$age = array("Sanjaya"=>"20", "Bibek"=>"21", "Dipesh"=>"21");
asort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}


$age = array("Sanjaya"=>"20", "Bibek"=>"21", "Dipesh"=>"21");
ksort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}


$age = array("Sanjaya"=>"20", "Bibek"=>"21", "Dipesh"=>"21");
arsort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}


$age = ("Sanjaya"=>"20", "Bibek"=>"21", "Dipesh"=>"21");
krsort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}

?>
</body>
</html>