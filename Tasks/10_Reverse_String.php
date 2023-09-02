<html>
<body>
    <h3>Write a Program To revers a String.</h3>
    <form action="10_Reverse_String.php" method="get">
       <br> Enter a string:
        <input type="string" name="string">
        <input type="submit" value="revers">
    </form>
</body>
</html>

<?php
        $string = $_GET['string'];
        $length = strlen($string);  
        for ($i=($length-1); $i >= 0; $i--)   
        {  
          echo $string[$i];  
        }   
?>