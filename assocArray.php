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

$result2 = mysql_query('SHOW COLUMNS FROM '.$table) or die('cannot show columns from '.$table);
if(mysql_num_rows($result2)) {
    echo '<table cellpadding="0" cellspacing="0" class="db-table">';
    echo '<tr><th>Field</th><th>Type</th><th>Null</th><th>Key</th><th>Default<th>Extra</th></tr>';
    while($row2 = mysql_fetch_row($result2)) {
        echo '<tr>';
        foreach($row2 as $key=>$value) {
            echo '<td>',$value,'</td>';
        }
        echo '</tr>';
    }
    echo '</table><br />';
}
    ?>
</body>
</html>