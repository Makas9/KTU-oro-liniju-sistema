<?php

class makeLink {

    public static function ml($module, $action, $id = -1) {
        return "index.php?module={$module}&action={$action}&id={$id}";
    }

    public static function home() {
        return "index.php";
    }
}