<html>
<body>
    <form action="9_Reversing_Number.php" method="get">
       <br> Enter a number:
        <input type="number" name="number">
        <input type="submit" value="revers">
    </form>
</body>
</html>

<?php  
    $num = $_GET['number'];  
    $revnum = 0;  
    while ($num > 1)  
    {  
    $rem = $num % 10;  
    $revnum = ($revnum * 10) + $rem;  
    $num = ($num / 10);   
    }  
    echo "Reverse number of $_GET[number] is: $revnum";  
    ?>  