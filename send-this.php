<?php 
if(isset($_POST['user_first_name']) && empty($_POST['user_second_name'])) {
  $message = 'First name: ' .$_POST['user_first_name'] . "\n"
    .'Second name: ' .$_POST['user_second_name'] . "\n"
    .'Email: ' .$_POST['user_email'] . "\n"
    .'Phone: ' .$_POST['user_phone'] . "\n"
    .'Comment: ' .$_POST['user_comment'];
  mail('yakov.barsukov@gmail.com', 'matlina.ru call back form', $message);
} else {
  header('Refresh: 3; URL=index.html');
  exit(0);
}
?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <title>Светлана Матлина | Фотограф</title>
  <meta http-equiv="refresh" content="10; url=http://www.matlina.ru/" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="normalize.css">
  <link rel="stylesheet" href="css.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Roboto:100,300,500,700&display=swap&subset=cyrillic" rel="stylesheet">
</head>

<body>
  <div class="container main-wrap">
   
    <nav class="navbar navbar-expand-md navbar-light navi" style="background-color: #fff;">
      <span class="navbar-text navi-logo">
        <h1>Светлана Матлина</h1>
        <p>фотограф</p>
      </span>
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler navi-dropdown-button" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse navi-dropdown-list" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link" href="index.html">Галлерея </a>
          <a class="nav-item nav-link" href="uslugi.html">Услуги</a>
          <a class="nav-item nav-link active" href="kontakty.html">Контакты <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="tel:+79855524054">89855524054</a>
        </div>
      </div>
      <span class="navbar-text navi-phone">
        <p><a href="tel:+79855524054">89855524054</a></p>
      </span>
    </nav> <!-- /.navi -->
    
    <div class="call-back">
      <h3 class="mt-5">Спасибо. Я скоро с вами свяжусь.</h3>
      <p class="mt-5"><a href="index.html">вернуться на главную страницу</a></p>
    </div>
    
  </div> <!-- /.container -->

  <footer class="footer mt-auto py-3">
    <div class="container footer-container">
      <span class="text-muted">&copy; 2019 Светлана Матлина</span>
      <a href="http://www.facebook.com/matlina.svetlana" target="_blank"><img src="facebook.png" alt="Facebook Logo" class="social-icon icon1"></a>
      <a href="http://www.vk.com/matlina.svetlana" target="_blank"><img src="vk-logo.png" alt="Vkontakte Logo" class="social-icon icon2"></a>
      <a href="http://www.instagram.com/photomatlina" target="_blank"><img src="instagram.png" alt="Instagram Logo" class="social-icon icon3"></a>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function() {
      $('img[alt="www.000webhost.com"]').hide();
    });

  </script>
</body>

</html>
