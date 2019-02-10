
 <?php

 $year = trim(filter_var($_POST['year'], FILTER_SANITIZE_STRING)); //Фильтруем входные данные

 $message = '';
 $valid = true;
 if(($year == '')||(filter_var($year, FILTER_VALIDATE_INT) === false )){        //Введено пустое поле или не целое  число (empty($year)
     $valid=false;
     $message = "Ошибка во входных данных";
     }
   if($valid){                                    //Если данные корректные, то проверяем на високосность
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
