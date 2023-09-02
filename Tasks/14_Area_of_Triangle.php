<html>
    <body>
        <form method="get">
            Base: <input type="number" name="base">
            <br><br>
            Height: <input type="number" name="height"><br><br>
            <input type="submit" name="submit" value="Calculate">
        </form>
    </body>
</html>
<?php 
if(isset($_GET['submit'])){

    $b = $_GET['base'];
    $h = $_GET['height'];
    $area = ($b * $h)/2;
    echo "Area of Triangle with base as $b and hight as $h is $area";    
}
?>