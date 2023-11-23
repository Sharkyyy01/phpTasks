<form action="/Task87/hello87.php" method="POST">
    <label>Введите ваше имя:</label><input type="text" name="userName"/>
    <input type="submit" value="Submit">
</form>

<?php if(key_exists('userName', $_POST) && strlen($_POST['userName']) > 0): ?>
    <?php setcookie('user_name', $_POST['userName']); ?>
<?php endif; ?>