<?php

$content = renderTemplate("about", 456654);
$menu = renderTemplate("menu");
$title = renderTemplate("title");
$urlPic = renderTemplate("picture");

echo renderTemplate("layout", $content, $menu, $title, $urlPic);


function renderTemplate($page, $content = '', $menu = '', $title = '', $urlPic = '') {
    ob_start();
    include $page . ".php";
    return  ob_get_clean();
}