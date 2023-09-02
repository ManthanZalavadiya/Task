<html>
    <body>
        <?php echo "Write a PHP program to print sum of digits.<br>"; ?>
            
        <form action="1_Sum_of_Digits.php" method="get"><br>
            Enter a Number: <br> <input type="text" name="num1"><br>
            <br><input type="submit" value="Submit">   
        </form> 
    </body>
</html>

   <?php  
        $num = $_GET['num1'];  
        $sum=0; $rem=0;  
        for ($i =0; $i<=strlen($num);$i++)  
        {  
          $rem=$num%10;  
          $sum = $sum + $rem;  
          $num=$num/10;  
        }  
        echo "Sum of digits $_GET[num1] is $sum";  
    ?>  