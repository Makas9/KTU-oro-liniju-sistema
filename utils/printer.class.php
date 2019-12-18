<?php

// class for resuable text
class printer {

	public static function navItem($module, $action, $text) {
		echo "<li class=\"nav-item\">"
            ."<a class=\"nav-link\" href=\"index.php?module={$module}&action={$action}\">{$text}</a>"
			."</li>";
	}

	public static function navDropdownItem($module, $action, $text) {
		echo "<a class=\"dropdown-item\" href=\"index.php?module={$module}&action={$action}\">{$text}</a>";
	}
}