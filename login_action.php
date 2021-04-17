<?php

	session_start();

	$users = [
		[
			'id' => 1,
			'username' => 'ivan123',
			'password' => 'test-password'
		],
		[
			'id' => 2,
			'username' => 'alex',
			'password' => 'test-password-2'
		],
		[
			'id' => 3,
			'username' => 'leshalesha',
			'password' => 'test-password-3'
		],		
	];

	if (isset($_POST['username']) && isset($_POST['password'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		foreach ($users as $key => $user) {
			if ($user['username'] == $username) {
				if ($user['password'] == $password) {
					$_SESSION['user'] = $user;
					echo 'Успешный вход';
				} else {
					echo 'Неверный пароль';
				}
			}
		}
	}

?>