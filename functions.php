<?php

/*functions.php*/

function is_logged_in() {
	return isset($_SESSION['user']);
}

function validate_user_creds($username, $password) {
	return ($username === USERNAME && $password === PASSWORD);
}