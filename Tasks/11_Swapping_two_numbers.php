<html>
<body>
    <form action="11_Swapping_two_numbers.php" method="get">
       <br> Enter a:
        <input type="number" name="num1"><br>
        <br> Enter b:
        <input type="number" name="num2"> <br><br>
        <input type="submit" value="                  Swapping                  ">
    </form>
</body>
</html>

<?php 
    $a = $_GET['num1'];
    $b = $_GET['num2'];
    echo "Befor Swapping:<br>";
    echo "a = ".$a." <br> b = ".$b."<br><br>";
    //Swapping Logic
    $c = $a;
    $a = $b;
    $b = $c;

    echo "After Swapping:<br>";
    echo "a = ".$a." <br> b = ".$b."";
?>