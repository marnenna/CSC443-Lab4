<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php    
$month = array ('January ','February ','March ','April ','May ','June ','July ','August ','September ','October ','November ','December ');
$arrlength = count($month);

for($x = 0; $x < $arrlength; $x++){
    echo $month[$x];
    echo "<br>";
}

asort($month, sort_string);
?>
</body>
</html>