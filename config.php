<?

if(!isset($_GET['url']))
{
$url = 'source.starryit.com/';
}
else
{
$url = htmlspecialchars(stripslashes($_GET['url']));
}


if(!isset($title))
{
$title = 'STARRY IT Source Viewer, Get a source viewer for your site';
}


$top = '<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru">
<head>
<title>'.$title.'</title>
<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<div class="w">'.$url.'<br/>
<small><a href="http://www.starryit.com/">Add Your Site Here</a></small>
</div>';

// Ð&#65533·
$foot = '<div class="w">
<small><a href="http://www.starryit.com/">Get More Services</a></small><br/>
<a href="http://'.$url.'">'.$url.'</a>
</div></body></html>';

?>