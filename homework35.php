<?php


$year = date('Y');
$month = 2;


$first_day = mktime(0, 0, 0, $month, 1, $year);
$last_day = mktime(0, 0, 0, $month + 1, 0, $year);

$first_weekday = date('N', $first_day);
$last_weekday = date('N', $last_day);


$num_rows = ($first_weekday == 7) ? 1 : 5;
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