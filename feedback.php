<?php 

	if (!empty($_POST)) {

		$message = "Новое сообщение с сайта: \n " . "От кого: " . $_POST['name'] . "\n" . "E-mail: " . $_POST['email'] . "\n" . "Сообщение: \n" . $_POST['message'];

		$headers = "From: ser-kiselev84@mail.ru";

		$resultSend = mail("ser-kiselev84@mail.ru", "Сообщение с сайта", $message, $headers);

		if ($resultSend) {
			echo '<div class="notification">Сообщение отправлено успешно!</div>';
		} else {
			echo "Что-то пошло не так... Произошла ошибка при отправке сообщения!";
		}
	}

 ?>

<style>
	body {text-align: center;}
	.container {width: 1200px; margin: 0 auto; padding: 20px 30px; font-family: 'Helvetica', sans-serif;}
	form {width: 40%; margin: 0 auto;}
	input, textarea {display: block; width: 100%; font-size: 16px; padding: 12px; margin-bottom: 20px;}
	textarea {font-family: 'Helvetica', sans-serif;}
	input[type="submit"] {display: inline-block; width: 40%;}
	.notification {display: inline-block; margin: 30px auto; width: 30%;  padding: 20px; background: #009688; color: #fff; text-align: center;}
</style>

<div class="container">

	<h2>Отправить сообщение</h2>

	<form method="post" style="margin-top: 50px;">
		<input type="text" name="name" placeholder="Ваше имя" required>
		<input type="email" name="email" placeholder="Ваш e-mail" required>
		<textarea name="message" cols="30" rows="6" placeholder="Сообщение"></textarea>
		<input type="submit" value="Отправить">
	</form>

</div>