$file = 'include/menu.inc.php';

if (file_exists($file) && is_readable($file)) {
	include($file);
} else {
	throw new Exception("$file can't be found");
}