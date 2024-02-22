<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2C</title>
</head>

<style>
.kotak{
    width:50px;
    height: 50px;
    text-align: center;
    line-height: 50px;
    background-color: aqua;
    border: 2px solid black;


}
.awal{
    display: flex;
}
</style>
<body>
<?php 
for ($no = 10; $no >= 1; $no-- ){
    echo "<div class=\"awal\">";
    for($ni= 1; $ni <= $no; $ni++ ) {
        echo "<div class=\"kotak\"> $ni </div>";
    }
    echo "</div>";
}
    

?>
</body>
</html>