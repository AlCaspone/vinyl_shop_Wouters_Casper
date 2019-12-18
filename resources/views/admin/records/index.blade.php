<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Records Index</title>
</head>

<body>
    <h1>Records</h1>
    <ul>
        <?php
        foreach ($records as $record){
            echo "<li> $record </li>";
            //echo '<li>' . $record . '</li>';
        }
    ?>
    </ul>

</body>

</html>
