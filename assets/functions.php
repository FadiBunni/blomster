<?php
/* required/inluded files */


/* End of requiredi/nluded files */

/*=============================================
=                 Miscellaneous               =
=============================================*/
function title_set() {
	if(basename($_SERVER['PHP_SELF']) =='index.php') {
		echo '| Home';
	} elseif (basename($_SERVER['PHP_SELF']) =='rules.php') {
		echo '| Rules';
	} elseif (basename($_SERVER['PHP_SELF']) =='status.php') {
		echo '| Status';
	} elseif (basename($_SERVER['PHP_SELF']) =='staff.php') {
		echo '| Staff';
	} elseif (basename($_SERVER['PHP_SELF']) =='donate.php') {
		echo '| Donate';
	} elseif (basename($_SERVER['PHP_SELF']) =='contact_view.php') {
		echo '| Contact';
	} elseif (basename($_SERVER['PHP_SELF']) =='myadmin_login.php') {
		echo '| Myadmin_login';
	} elseif (basename($_SERVER['PHP_SELF']) =='myadmin_about.php') {
		echo '| Myadmin_about';
	}
}

function selected($requestUri) {
    $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");

    if ($current_file_name == $requestUri)
        echo 'Selected';
}

?>