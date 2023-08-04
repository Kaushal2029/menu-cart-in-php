<?php
 $x;
 echo "1. Printing Pattern(1 to 5) \n 2. Printing Pattern(5 to 1) \n 3. Printing pattern(Triangle) \n 4.Printing Pattern(Diamond)\n
  5.Printing whole Diamond \n";
 $x=readline("Enter The Number:->");
 switch($x){
    case 1:
        for($i=0;$i<=5;$i++){
            for($j=0;$j<=$i;$j++){
                echo "*";
            }
            echo "\n";
        };
         break;
    case 2:
        for($i=5;$i>=0;$i--){
            for($j=0;$j<=$i;$j++){
                echo "*";
            }
            echo "\n";
        };

        break;
    case 3:
        for($i=0;$i<=5;$i++){
            for($j=5;$j>=$i;$j--){
                echo " ";}
                for($k=0;$k<=$j;$k++){
                    echo "* ";
                
            }
            echo "\n";
        }
        break;
    case 4:
        for($i=0;$i<=5;$i++){
            for($j=0;$j<=$i;$j++){
                echo " ";
            }
            for($k=5;$k>=$j;$k--){
                echo "* ";
            }
            echo "\n";
        }
        break;
    case 5:

$x=readline("Enter the number of x");
for($i=0;$i<=5;$i++){
    for($j=5;$j>=$i;$j--){
        echo " ";}
        for($k=0;$k<=$j;$k++){
            echo "* ";
        
    }
    echo "\n";
}
for($i=0;$i<=5;$i++){
    for($j=0;$j<=$i;$j++){
        echo " ";
    }
    for($k=5;$k>=$j;$k--){
        echo "* ";
    }
    echo "\n";
}
     break;
   
    default:
        echo "Invaild Number";}
 
 ?>
