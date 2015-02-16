<?


require 'header.php';
require 'config.php';

print $top;

if($_GET['adr'])
{
$adr = htmlspecialchars(stripslashes(trim(rawurldecode($_GET['adr']))));
}

$parse_adr = parse_url($adr);

if($parse_adr['query'])
{$parse_adr['query'] = '?'.$parse_adr['query'];}

$host = $parse_adr['host'];
$path = $parse_adr['path'].$parse_adr['query'];
if(preg_match("/^[a-zA-Z_0-9\-^\.]+\.[a-z]{2,4}+$/i", $parse_adr['host']))
{

$fp = fsockopen($host,80,$errno,$errstr,30);
if(!$fp)
{
print '<div class="red">Error ('.$errno.')<br/></div>'.$foot;
exit;
}

if($path)
{
$headers = "GET $path HTTP/1.0\r\n";
}
else
{
$headers = "GET / HTTP/1.0\r\n";
}
$headers .= "Host: $host\r\n";
$headers .= "Accept: *\r\n";
$headers .= "Accept-Charset: UTF-8\r\n";
$headers .= "Accept-Charset: *\r\n";
$headers .= "Accept-Language: ru\r\n";
$headers .= "User-Agent: Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; ru) Opera 8.01\r\n\r\n";
fwrite($fp,$headers);
//while($text != "\r\n") $text = fgets($fp,128);
//$text = '';
while(!feof($fp))
{$text.=fgets($fp,1024);}
fclose($fp);


$ip = gethostbynamel($parse_adr['host']);
if(!empty($ip))
{
foreach($ip as $index => $val);
 {
  $ip = $val;
 }
}
else
 {
  $ip = 'Undetermined';
 }


$kod = nl2br(trim(htmlspecialchars(stripslashes($text))));

print '<div>'.$kod.'</div>
<div class="telo">
<strong>Address</strong>: '.$adr.'<br/>
</div>
<div class="telo">
<strong>IP</strong>: '.$ip.'<br/>
</div>';
}
else
{
print '<div class="red">Wrong address is entered!<br/></div>';
}

print $foot;

?>