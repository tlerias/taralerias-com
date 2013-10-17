<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Lab 12</title>
<?php
include ('diceinc.php');


?>
</head>

<body>

<?php
$d1 = new Dice;
$d1->setNumber("<img src = 'images/d1.gif'>");

$d2 = new Dice;
$d2->setNumber("<img src = 'images/d2.gif'>");

$d3 = new Dice;
$d3->setNumber("<img src = 'images/d3.gif'>");

$d4 = new Dice;
$d4->setNumber("<img src = 'images/d4.gif'>");

$d5 = new Dice;
$d5->setNumber("<img src = 'images/d5.gif'>");

$d6 = new Dice;
$d6->setNumber("<img src = 'images/d6.gif'>");


echo $d6->getNumber();
echo $d5->getNumber();
echo $d4->getNumber();
echo $d3->getNumber();
echo $d2->getNumber();
echo $d1->getNumber();


?>
</body>
</html>