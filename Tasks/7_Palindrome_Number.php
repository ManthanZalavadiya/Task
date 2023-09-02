<?php echo "Write a PHP program to check Given number is palindrome or not.";?>
<html>
<body>
    <form action="7_Palindrome_Number.php" method="get">
       <br> Enter a number:
        <input type="number" name="number">
        <input type="submit" value="Check">
    </form>
</body>
</html>

<?php
    function palindrome($n){
        $num = $n;
        $sum = 0;

        while(floor($num)){
            $rem = $num % 10;
            $sum = $sum * 10 + $rem;
            $num = $num /10;
        }
        return $sum;
    }    
    $input = $_GET['number'];
    $num = palindrome($input);
    if ($input == $num){
        echo "$input is a palindrome number";
    }
    else{
        echo "$input is Not a palindrome number";
    }
?>