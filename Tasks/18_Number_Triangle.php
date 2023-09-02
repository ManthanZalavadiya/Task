<h3>Patten 1</h3>
<?php 
    $k = 1;
    for($i = 0; $i < 4; $i++){
        for($j = 0; $j <= $i; $j++){
            echo $k." ";
            $k++;
        }
        echo "<br>";
    }
?>


<h3>Patten 2</h3>
<?php 
    for($i=0;$i<=5;$i++){  
        for($j=1;$j<=$i;$j++){  
            echo $j." ";
        }  
        echo "<br>";
    }  
?>


<h3>Patten 3</h3>
<?php  
for($i=0;$i<=5;$i++){  
    for($j=5-$i;$j>=1;$j--){  
        echo $j." ";  
    }  
    echo "<br>";  
}  
?>


<h3>Pattern 4</h3>
<?php 
    $k = 1;
    for($i = 0; $i < 5; $i++){
        for($j = 0; $j <= $i; $j++){
            if($j % 2 == 0){
                $k=0;
            }
            else{
                $k=1;
            }
            echo $k." ";
        }
        echo "<br>";
    }
?>


<h3>Patten 5</h3>
<?php 
    for($i = 0; $i <= 5; $i++){  
        for($j = 1; $j <=$i; $j++){  
            echo $i." ";
        }  
        echo "<br>";
    }  
?>


<h3>Patten 6</h3>
<?php  
for($i = 5; $i >= 1; $i--){  
    for($j = $i; $j >= 1; $j--){  
        echo $i." ";  
    }  
    echo "<br>";  
}  
?>


<h3>Patten 7</h3>
<?php 
    for ($i = 0; $i < 5; $i++) {
        for ($j=1; $j <= $i ; $j++) { 
            echo "1 ";
        }
        echo "<br>";
    }
?>


<h3>Patten 8</h3>
<?php  
for($i = 0 ; $i <= 5; $i++){  
    for($j=5-$i;$j>=1;$j--){  
        echo "1 ";
    }
    echo "<br>";  
}  
?>  