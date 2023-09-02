<html>
    <body>
        <form method="get">
            Enter First number:
            <input type="number" name="number1"><br><br>
            Enter Second number:
            <input type="number" name="number2"><br><br>
            <input type="submit" name="submit"value="Add">
        </form>
    </body>
</html>

<?php 
    if(isset($_GET['submit'])){
        $num1 = $_GET['number1'];
        $num2 = $_GET['number2'];
        $sum = $num1 + $num2;
        echo "The Addition of $num1 and $num2 is: $sum";
    }
?>