<?php
$file="index.php";
$linecount = 0;
$handle = fopen($file, "r");
while(!feof($handle)){
  $line = fgets($handle);
  $linecount++;
}

fclose($handle);

echo $linecount;
$d = dir(getcwd());
var_dump($d);
while (($file = $d->read()) !== false){
  echo "filename: " . $file . "<br>";
} 
?>
