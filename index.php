<!DOCTYPE html>
<html lang="zh-tw">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>萬年曆作業</title> 
<link href="calendar.css" type="text/css" rel="stylesheet" />
</head>
<body>
<?php
include 'calendar.php';
 
$calendar = new Calendar();
 
echo $calendar->show();
?>
</body>
</html>  