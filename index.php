<?

require 'header.php';
require 'config.php';

print $top;

if(!$_GET['s'])
{
print '<div class="input">
	Enter
<form action="main.php" method="get">
<div>
<input name="url" type="hidden" value="'.$url.'"/>
<input name="adr" type="text" value="http://"/><br/>
<input type="submit" value="Go"/>
</div>
</form>
</div>
<div class="border">
<a href="faq.php?url='.$url.'">FAQ</a><br/>
</div>
<div class="border">
<a href="?s=1">	Get This Service</a><br/>
</div>
'.$banner.$foot;
}
else
{
print '<div class="foot">Get Your own Source Viewer for your site:<br/>
<div style="text-decoration:underline; font-weight:bold">http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/?url=	address of your site without http://<br/>
</div>
</div>
</body></html>';
}
?>