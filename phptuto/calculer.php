
 <!DOCTYPE html>
 <html>
 <body>
    <?php

 $s = 0;
$l=$_POST["liste"];
 $pieces = explode(" ", $l);
 
//echo "<p>$pieces</p><br><br>";
calculer ($pieces)

function calculer($t){
    $s=0;
    $min=$t[0];
    $max=$t[0];

    for ($i = 0; $i < sizeof$(t); $i++) {
         $s=0;
        $min=$t[0];
        $max=$t[0];
        $s=$st[i]
        if ($t[$i]<$min)

            $min=$t[$i];

        else if ($t[$i]>$max)

            $max =$t[i];    

    }
    echo "<p>$s</p><br><br>";
    echo "<p>$min</p><br><br>";
    echo "<p>$pmax</p><br><br>";
 
  ?>
  
    
        
</body>
</html>