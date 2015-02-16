<?

if(substr_count($_SERVER['HTTP_USER_AGENT'], 'MSIE'))
{
header('Content-type: text/html; charset=UTF-8');
}
else
{
header('Content-type: application/xhtml+xml; charset=UTF-8');
}

header('Cache-control: no-cache');
?>