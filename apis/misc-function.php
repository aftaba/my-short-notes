<?php
include( "db-conf.php" );
define( 'PROJECT_PATH', 'http://localhost/~aftaba/others/myshortnotes/' );

function set_csrf_token() {
	session_start();
	if ( ! isset($_SESSION['token'] ) ) {
	    $token = md5(uniqid(rand(), TRUE) );
	    $_SESSION['token'] = $token;
	    $_SESSION['token_time'] = time();
	} else {
	    $token = $_SESSION['token'];
	}
	return $token;
}


function random_string($length) {
    $key = '';
    $keys = array_merge(range(0, 9), range('a', 'z'));

    for ($i = 0; $i < $length; $i++) {
        $key .= $keys[array_rand($keys)];
    }

    return $key;
}


