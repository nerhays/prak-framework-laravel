<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <b>Halo ini view</b>

    <?php 
        foreach($myarray as $item){
            echo "<br>Merk Mobil ".$item;
        }
    ?>
</body>
</html>