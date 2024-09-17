<?php

 namespace App;


 class Helpers
 {
     public static function  greeting()
     {
         if(date('H') < 12)
         {
             echo "Bom dia,";
         }
         else if(date('H') < 18)
         {
             echo "Boa tarde,";
         }
         else
         {
             echo "Boa noite,";
         }
     }
 }

?>
