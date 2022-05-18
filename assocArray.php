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
    $month = array ('January', 'February', 'March', 'April','May', 'June', 'July', 'August','September', 'October', 'November', 'December');
    $monthDays = array ('January' => 31, 'February' => 28, 'March' => 31,'April' => 30,'May' => 31, 'June' => 30, 'July' => 31, 'August' => 31,'September' => 30, 'October' => 31, 'November'=> 30, 'December' => 31);
    $i = 0;
    foreach ($monthDays as $days)
    {
        echo "$month[$i] - $days <br>";
        $i++;
    }
    echo "<br>";
    
    ?>
</body>
</html>