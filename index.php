
 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>

</head>
<body>
  <div class="col-md-5 mb-5">
  <h3>
    Является ли год високосным?
  </h3>

  <form action="" method="post">
          <label for="year">Год</label>
          <input type="text" name="year" id="year" class="form-control">
          <input type="button" id="check" class="btn btn-success mt-3" value="Проверить">
          <div class="alert alert-danger mt-2" id="errorBlock"></div>
  </form>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
    $('#errorBlock').hide();
      $('#check').click(function () {                         //Проверка нажата ли кнопка
          var year = $('#year').val();

          $.ajax({
            url: 'ajax_check.php',
            type: 'POST',
            cashe:false,
            data: {'year':year},
            dataType: 'html',
            success: function (data) {                    //Если скрипт успешно выполнен, то показываем соотвествующее сообщение
                $('#errorBlock').show();
                $('#errorBlock').text(data);
               $('#year').val("");
                }

          });
      });

    </script>
</body>
</html>
