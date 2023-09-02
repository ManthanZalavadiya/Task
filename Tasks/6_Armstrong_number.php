<?php echo "Write a PHP program to check armstrong number.";?>
<html>
<body>
    <form action="6_Armstrong_number.php" method="get">
       <br> Enter the number:
        <input type="number" name="number">
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php 
    if($_GET){
          //get the number entered  
          $number = $_GET['number'];

          //store the entered number in variable
          $a = $number;
          $sum = 0;

        //   run loop till the quotient is 0  
        while($a != 0){
            $rem = $a % 10; //find Remainder
            $sum = $sum +($rem * $rem * $rem); //cube the reminder and add it to the sum variable till the loop ends
            $a = $a / 10; //find quotient. if 0 then loop again  
        }
//if the entered number and $sum value matches then it is an armstrong number  
  if( $number == $sum )  
  {  
   echo "Yes $number an Armstrong Number";  
  }else  
  {  
   echo "$number is not an Armstrong Number";  
  }  
}
?>