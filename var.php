<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Variable</title>
</head>
<body>
<?php
$firstname ="Abraham";
$secondname ="Kipsang";
$year =2021;
$born =1993;
$years =($year-$born);

echo "My name is $secondname " .$firstname;
echo "<br>";
echo "I am $years years Old";
echo "<br>";
if ($years>27)
    echo "<h1 style='background-color: red; width: 400px; font-style: italic; text-align: center'>you are getting old you should get married</h1>";
else
    echo "You are still young go easy on yourself";
?>

</body>
</html>