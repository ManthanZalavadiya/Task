<html>
    <body>
        <form method="get">
            Enter the Year: <input type="text" name="year">
            <input type="submit" name="submit" value="Submit">
        </form>
    </body>
</html>

<?php 
    if ($_GET) {
            //get the Year
            $year = $_GET['year'];

            if(!is_numeric($year)){
                echo "String not allowed, input should be a number";
                return;
            }

            if((0 == $year % 4) and (0 != $year % 100) or (0==$year%400)){
                echo "$year is Leap Year";
            }
            else{
                echo "$year is not a Leap Year";
            }
    }
?>