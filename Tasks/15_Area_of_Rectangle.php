<html>
    <body>
        <form method="get">
            Width: <input type="number" name="width"><br><br>
            Lenght: <input type="number" name="lenght"><br><br>
            <input type="submit" name="submit" value="Calculate">
        </form>
    </body>
</html>
<?php 
    $w = $_GET['width'];
    $l = $_GET['lenght'];
    $area = ($w * $l);
    echo "The arae of rectangle with $w * $l is $area";
?>