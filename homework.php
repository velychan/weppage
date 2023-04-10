//문제1
<?php
$n = 30;
$sum = 0;
$prod = 1;
for($i=1; $i<=$n; $i++){
  echo $i." ";
  $sum += $i;
  $prod *= $i;
}
echo "<br>";
echo "1 + ... + 30 = ".$sum."<br>";
echo "1 * ... * 30 = ".$prod;
?>

//문제2
<?php
$n = 30;
for($i=0; $i<$n; $i++){
  $data[$i] = rand(10,100);
}
echo "생성된 랜덤넘버: ";
print_r($data);
sort($data);
echo "<br> 소팅된 결과: ";
print_r($data);
?>

//문제3
<?php
$n = 100;
$fib = array(0, 1); 
echo "i\tfi\tfi+1\tfi+2/fi+1\n";
echo "1\t1\t1\t-\n";
for($i=2; $i<=$n; $i++)
  $fib[$i] = $fib[$i-1] + $fib[$i-2];
  $prop = ($fib[$i] + $fib[$i-1]) / $fib[$i-1]; 
  echo $i."\t".$fib[$i]."\t".$fib[$i-1]."\t".number_format($prop, 6)."\n";
  if($fib[$i] > $n) break; 

  //문제4
  <?php
  if(isset($_POST['submit']))
    $shape = $_POST['shape'];
    switch($shape){
      case 'triangle':
        $width = $_POST['width'];
        $height = $_POST['height'];
        $area = $width * $height / 2;
        echo "삼각형의 면적은 ".$area."입니다.";
        break;
      case 'rectangle':
        $width = $_POST['width'];
        $height = $_POST['height'];
        $area = $width * $height;
        echo "직사각형의 면적은 ".$area."입니다.";
        break;
      case 'circle':
        $radius = $_POST['radius'];
        $area = pi() * pow($radius, 2);
        echo "원의 면적은 ".$area."입니다.";
        break;
      case 'rectangular-prism':
        $width = $_POST['width'];
        $length = $_POST['length'];
        $height = $_POST['height'];
        $volume = $width * $length * $height;
        echo "직육면체의 체적은 ".$volume."입니다.";
        break;
      case 'cylinder':
        $radius = $_POST['radius'];
        $height = $_POST['height'];
        $volume = pi() * pow($radius, 2) * $height;
        echo "원통의 체적은 ".$volume."입니다.";
        break;
      case 'sphere':
        $radius = $_POST['radius'];
        $volume = 4/3 * pi() * pow($radius, 3);
        echo "구의 체적은 ".$volume."입니다.";
        break;
    
  //문제5
  <?php


$year = date('Y');
$month = 2;


$first_day = mktime(0, 0, 0, $month, 1, $year);
$last_day = mktime(0, 0, 0, $month + 1, 0, $year);

$first_weekday = date('N', $first_day);
$last_weekday = date('N', $last_day);


$num_rows = ($first_weekday == 7) ? 1 : 2;
$num_cols = 7;


echo "<table border='1'>";


echo "<tr><th colspan='7'>" . date('Y년 m월', $first_day) . "</th></tr>";


echo "<tr>";
echo "<th>일</th>";
echo "<th>월</th>";
echo "<th>화</th>";
echo "<th>수</th>";
echo "<th>목</th>";
echo "<th>금</th>";
echo "<th>토</th>";
echo "</tr>";

$day = 1;
for ($i = 1; $i <= $num_rows; $i++) {
  echo "<tr>";
  for ($j = 1; $j <= $num_cols; $j++) {
    if ($day > date('t', $first_day)) {
      break;
    }
    if ($i == 1 && $j < $first_weekday) {
      echo "<td></td>";
    } else {
      $date = date('Y-m-d', mktime(0, 0, 0, $month, $day, $year));
      echo "<td>" . $day . "</td>";
      $day++;
    }
  }
  echo "</tr>";
}

echo "</table>";

?>