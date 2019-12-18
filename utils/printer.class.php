<?php

// class for resuable text
class printer {

	public static function navItem($module, $action, $text) {
		echo "<li class=\"nav-item ";
		
		if (isset($_GET['module']) && isset($_GET['action'])
			&& $_GET['module'] === $module && $_GET['action'] === $action)
			echo " active ";
		
		echo "\">"
            ."<a class=\"nav-link\" href=\"index.php?module={$module}&action={$action}\">{$text}</a>"
			."</li>";
	}

	public static function navDropdownItem($module, $action, $text) {
		echo "<a class=\"dropdown-item ";
		
		if (isset($_GET['module']) && isset($_GET['action'])
			&& $_GET['module'] === $module && $_GET['action'] === $action)
			echo " active ";
		
		echo "\" href=\"index.php?module={$module}&action={$action}\">{$text}</a>";
	}
}