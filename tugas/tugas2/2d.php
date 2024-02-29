<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2D</title>
<style>
    *{
        margin: 0;
        padding: 0;
    }
    .awal{
        width: 33.9%;
        border: 4px solid black;
    }
    .kotak{
        width: 100px;
        height:100px;
        display: inline-block;
     
    } 
    .dua{
     background-color: white;
     
    }
    .tiga{
        background-color: black;
        color:white;
    }
</style>

</head>
<body>
<div class="awal">

<?php

for($i =1; $i <= 5; $i++){
    echo "<div>";
    for ($j = 1; $j <=5; $j++){      
        $class =($i + $j) % 2 == 0? "dua":"tiga";
        echo "<div class = 'kotak $class'></div>";
    }
    echo "</div>";
}
?>
</div>
</body>
</html>