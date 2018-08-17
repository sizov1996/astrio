<?php
require_once 'db.php';
$link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));
$query = "SELECT department_id FROM worker group  by department_id HAVING count(*) > 5";
$res = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($res);
echo '<pre>';
print_r($row);
echo '</pre>';
$query1 = "SELECT id,name FROM department ORDER BY name";
$result = mysqli_query($link, $query1);
$row1 = mysqli_fetch_assoc($result);

echo $row1['id'];

?>