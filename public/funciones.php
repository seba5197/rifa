<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

        function crearnumeros($totalnum,$valor){
            $cont=0;
        
while ($cont <= $totalnum){
   $rellena=0;
  echo "<div class='col-md-2'><div class='row'>";
  
   while($rellena<=3){
       $rellena++;
    echo "<div class='col-3 border border-primary  btn btn-dark xxx' onclick='comprar();' valor='$valor'>$cont</div>";   
      $cont++; 
   }
   
  

  echo "</div>";
  echo "</div>";
    
}
        }
        
        
