
 <?php

 $year = trim(filter_var($_POST['year'], FILTER_SANITIZE_STRING));

 $message = '';
 $valid = true;
 if(!is_numeric($_POST['year'])){
     $valid=false;
     $message = "Ошибка во входных данных";
     }
   if($valid){
     $valid=false;
     $year = trim(filter_var($_POST['year'], FILTER_SANITIZE_STRING));
     $text = "Год ".$year. " является високосным?";

       if ($year%4 == 0) {
         $message = $text. ' ДА';
       }
       else{
         $message = $text. ' НЕТ';
       }
 }

   echo $message;
   
 ?>
