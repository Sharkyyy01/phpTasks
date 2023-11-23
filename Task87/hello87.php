<?php
/*Сделайте две страницы: index.php и hello.php.
При заходе на index.php спросите с помощью формы имя пользователя, запишите его в куки.
При заходе на hello.php поприветствуйте пользователя фразой "Привет, %Имя%!".*/

if (key_exists('user_name', $_COOKIE)): ?>
    <h1>Привет, <?php echo $_COOKIE['user_name']; ?></h1>
<?php endif; ?>