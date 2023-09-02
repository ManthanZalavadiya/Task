<html>
    <body>
        <form action="2_Even_Odd.php" method="get">
            Enter a number:
            <input type="num" name="num">
            <input type="submit" value="Submit">
        </form>
    </body>
</html>

<?php 
        $num = $_GET['num'];
         //divide entered number by 2   
        //if the reminder is 0 then the number is even otherwise the number is odd  
        if($num % 2 == 0){
            echo "$num is an Even number";
        }
        else{
            echo "$num is an Odd number";
        }
?>