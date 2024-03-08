<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../css/fonts.css">
   <link rel="stylesheet" href="../css/style.css">
   <title>Регистрация</title>
</head>

<body>
   <div class="wrapper">
      <header class="header">
         <div class="header__wrapper">
            <img onclick="document.location='../index.html'" src="../img/icons/logo.png" alt="" class="header__logo">
            <nav class="header__list list-header">
               <a href="../index.html" class="list-header__item">Главная</a>
               <a href="" class="list-header__item _active-item">Контакты</a>
               <a href="rooms.html" class="list-header__item">Номера</a>
               <a href="#" class="list-header__item">Виртуальная экскурсия</a>
            </nav>
            <div class="header__buttons">
               <a href="" class="header__phone _icon-phone"></a>
            </div>
         </div>
      </header>
      <!-- main -->
      <main class="main-registration">
         <div class="registration__wrapper">
            <h2 class="registration__title"><span class="_icon-star"></span>регистрация</h2>
            <form action="register.php" method="post" class="registration__form">
               <input type="text" placeholder="Имя" name="firstname" class="registration__item">
               <input type="text" placeholder="Фамилия" name="lastname" class="registration__item">
               <input type="text" placeholder="Почта" name="mail" class="registration__item">
               <input type="number" placeholder="Телефон" name="phone" maxlength="11" class="registration__item">
               <input type="text" placeholder="Пароль" name="pass" class="registration__item">
               <button class="registration__button" type="submit">Зарегистрироваться</button>
            </form>
            <p class="registration__warning">
               <?php
               include('register.php');

               ?>
            </p>
            <p class="registration__text">Уже зарегистрированы?<br>
               тогда просто <a href="">войдите</a> в аккаунт</p>
         </div>
         <form action="../php/login.php" method="post" class="authorization">
            <input type="text" placeholder="почта" name="mail" name="mail" class="authorization__item">
            <input type="text" placeholder="пароль" name="pass" class="authorization__item">
            <button class="authorization__button" type="submit">Войти</button>
         </form>
      </main>
      <!-- footer -->
      <footer class="footer">
         <div class="footer__wrapper">
            <div class="footer__content content-footer">
               <p class="content-footer__copyright">© 2024 “First Moon”. Все права защищены</p>
            </div>
         </div>
      </footer>
   </div>
</body>

</html>