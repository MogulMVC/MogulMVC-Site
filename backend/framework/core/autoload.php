<?php

foreach ($GLOBALS['AUTOLOAD_PHP_FRAMEWORK'] as $php_framework) {
	MLoad::php_framework($php_framework);
}

foreach ($GLOBALS['AUTOLOAD_PHP_APPLICATION'] as $php_application) {
	MLoad::php_application($php_application);
}
