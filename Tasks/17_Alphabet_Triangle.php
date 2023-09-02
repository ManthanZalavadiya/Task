<h3>Patten 1</h3>
<?php 
    $a = range('A','Z');
    for ($i=0; $i < 5; $i++) { 
        for ($j=5; $j > $i; $j--) { 
            echo $a[$i];
        }
        echo "<br>";
    }
?>


<h3>Patten 2</h3>
<?php 
    $a = range('A','Z');
    for ($i=0; $i < 5; $i++) { 
        for ($j=0; $j <= $i; $j++) { 
            echo $a[$i];
        }
        echo "<br>";
    }
?>


<h3>Patten 3</h3>
<?php 
    $a = range('A','Z');
    for ($i=0; $i<5; $i++){ 
        for ($j=4; $j>=$i; $j--) { 
            echo $a[$j];
        }
       echo "<br>";
    }
?>


<h3>Patten 4</h3>
<?php 
    $a = range('A','Z');
    for ($i=0; $i < 5; $i++) { 
        for ($j=0; $j <= $i; $j++) { 
            echo $a[$j];
        }
        echo "<br>";
    }
?>