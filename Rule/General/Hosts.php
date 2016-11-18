<?php
//------------Start-------------//
header("cache-control:no-cache,must-revalidate");
header("Content-Type:text/html;charset=UTF-8");
header("Accept-Ranges: bytes");
header('Content-Disposition: attachment; filename='.'Hosts.Conf');
//-------------通用-------------//
$NAME = "CloudGate";        //名称
$Sign = sha1(date("YmdHi")."BurpSuite");
if( isset($_GET['Fix']) ){$Fix = $_GET['Fix'];}else {$Fix = "false";}
if( $Fix=="true" ){$GETFix="true";}elseif($Fix=="false"){$GETFix="false";}else {$GETFix="false";}
//-------------文件-------------//
if ($GETFix=="true"){
$HOSTSFile = "http://1.burpsuite.applinzi.com/Hosts/HostsFix.txt";
$HOSTSFile  = $HOSTSFile . '?Sign='.sha1(mt_rand()).'&TimeStamp='.time();}
elseif($GETFix=="false"){$HOSTSFile = "http://BurpSuite.applinzi.com/Hosts/Hosts.php?Sign=$Sign";}
$HOSTS = fopen($HOSTSFile,"r");
$YoutubeFile = "http://7xpphx.com1.z0.glb.clouddn.com/Proxy/File/Youtube.txt";
$YoutubeFile  = $YoutubeFile . '?Sign='.sha1(mt_rand()).'&TimeStamp='.time();
$Youtube = fopen($YoutubeFile,"r");
$REJECTFile = "http://7xpphx.com1.z0.glb.clouddn.com/Proxy/File/REJECT.txt";
$REJECTFile  = $REJECTFile . '?Sign='.sha1(mt_rand()).'&TimeStamp='.time();
$REJECT = fopen($REJECTFile,"r");
$KEYWORDFile = "http://7xpphx.com1.z0.glb.clouddn.com/Proxy/File/KEYWORD.txt";
$KEYWORDFile  = $KEYWORDFile . '?Sign='.sha1(mt_rand()).'&TimeStamp='.time();
$KEYWORD = fopen($KEYWORDFile,"r");
$IPCIDRFile = "http://7xpphx.com1.z0.glb.clouddn.com/Proxy/File/IPCIDR.txt";
$IPCIDRFile  = $IPCIDRFile . '?Sign='.sha1(mt_rand()).'&TimeStamp='.time();
$IPCIDR = fopen($IPCIDRFile,"r");
$RewriteFile = "http://7xpphx.com1.z0.glb.clouddn.com/Proxy/File/Rewrite.txt";
$RewriteFile  = $RewriteFile . '?Sign='.sha1(mt_rand()).'&TimeStamp='.time();
$Rewrite = fopen($RewriteFile,"r");
//--------------配置------------//
echo "#!MANAGED-CONFIG http://".$_SERVER['SERVER_NAME']."/Rule/General/Hosts.php?Fix=$Fix interval=86400\r\n";
echo "[General]\r\n";
echo "bypass-system = true\r\n";
echo "skip-proxy = 0.0.0.0/8, 10.0.0.0/8, 17.0.0.0/8, 172.16.0.0/12, 192.168.0.0/16, localhost, *.local, ::ffff:0:0:0:0/1, ::ffff:128:0:0:0/1, *.crashlytics.com, *.helpshift.com, *.supercell.net\r\n";
//echo "bypass-tun = 0.0.0.0/8, 1.0.0.0/9, 1.160.0.0/11, 1.192.0.0/11, 10.0.0.0/8, 14.0.0.0/11, 14.96.0.0/11, 14.128.0.0/11, 14.192.0.0/11, 27.0.0.0/10, 27.96.0.0/11, 27.128.0.0/9, 36.0.0.0/10, 36.96.0.0/11, 36.128.0.0/9, 39.0.0.0/11, 39.64.0.0/10, 39.128.0.0/10, 42.0.0.0/8, 43.224.0.0/11, 45.64.0.0/10, 47.64.0.0/10, 49.0.0.0/9, 49.128.0.0/11, 49.192.0.0/10, 54.192.0.0/11, 58.0.0.0/9, 58.128.0.0/11, 58.192.0.0/10, 59.32.0.0/11, 59.64.0.0/10, 59.128.0.0/9, 60.0.0.0/10, 60.160.0.0/11, 60.192.0.0/10, 61.0.0.0/10, 61.64.0.0/11, 61.128.0.0/10, 61.224.0.0/11, 100.64.0.0/10, 101.0.0.0/9, 101.128.0.0/11, 101.192.0.0/10, 103.0.0.0/10, 103.192.0.0/10, 106.0.0.0/9, 106.224.0.0/11, 110.0.0.0/7, 112.0.0.0/9, 112.128.0.0/11, 112.192.0.0/10, 113.0.0.0/9, 113.128.0.0/11, 113.192.0.0/10, 114.0.0.0/9, 114.128.0.0/11, 114.192.0.0/10, 115.0.0.0/8, 116.0.0.0/8, 117.0.0.0/9, 117.128.0.0/10, 118.0.0.0/11, 118.64.0.0/10, 118.128.0.0/9, 119.0.0.0/9, 119.128.0.0/10, 119.224.0.0/11, 120.0.0.0/10, 120.64.0.0/11, 120.128.0.0/11, 120.192.0.0/10, 121.0.0.0/9, 121.192.0.0/10, 122.0.0.0/7, 124.0.0.0/8, 125.0.0.0/9, 125.160.0.0/11, 125.192.0.0/10, 127.0.0.0/8, 139.0.0.0/11, 139.128.0.0/9, 140.64.0.0/11, 140.128.0.0/11, 140.192.0.0/10, 144.0.0.0/10, 144.96.0.0/11, 144.224.0.0/11, 150.0.0.0/11, 150.96.0.0/11, 150.128.0.0/11, 150.192.0.0/10, 152.96.0.0/11, 153.0.0.0/10, 153.96.0.0/11, 157.0.0.0/10, 157.96.0.0/11, 157.128.0.0/11, 157.224.0.0/11, 159.224.0.0/11, 161.192.0.0/11, 162.96.0.0/11, 163.0.0.0/10, 163.96.0.0/11, 163.128.0.0/10, 163.192.0.0/11, 166.96.0.0/11, 167.128.0.0/10, 167.192.0.0/11, 168.160.0.0/11, 169.254.0.0/16, 171.0.0.0/9, 171.192.0.0/11, 172.16.0.0/12, 175.0.0.0/9, 175.128.0.0/10, 180.64.0.0/10, 180.128.0.0/9, 182.0.0.0/8, 183.0.0.0/10, 183.64.0.0/11, 183.128.0.0/9, 192.0.0.0/24, 192.0.2.0/24, 192.88.99.0/24, 192.96.0.0/11, 192.160.0.0/11, 198.18.0.0/15, 198.51.100.0/24, 202.0.0.0/9, 202.128.0.0/10, 202.192.0.0/11, 203.0.0.0/9, 203.128.0.0/10, 203.192.0.0/11, 210.0.0.0/10, 210.64.0.0/11, 210.160.0.0/11, 210.192.0.0/11, 211.64.0.0/10, 211.128.0.0/10, 218.0.0.0/9, 218.160.0.0/11, 218.192.0.0/10, 219.64.0.0/11, 219.128.0.0/11, 219.192.0.0/10, 220.96.0.0/11, 220.128.0.0/9, 221.0.0.0/11, 221.96.0.0/11, 221.128.0.0/9, 222.0.0.0/8, 223.0.0.0/11, 223.64.0.0/10, 223.128.0.0/9\r\n";
echo "bypass-tun = 10.0.0.0/8, 127.0.0.0/24, 172.0.0.0/8, 192.168.0.0/16\r\n";
echo "dns-server = 8.8.8.8, 8.8.4.4\r\n";
echo "loglevel = notify\r\n";
echo "replica = false\r\n";
echo "ipv6 = false\r\n";
echo "#  \r\n";
echo "# HOSTS Config File [$NAME]\r\n";
echo "# Last Modified: " . date("Y/m/d") . "\r\n";
echo "# \r\n";
//--------------模块------------//
//REJECT
if($REJECT){
echo "[Rule]";
echo"\r\n# REJECT\r\n";
while(!feof($REJECT))
{
echo trim(fgets($REJECT)).",REJECT"."\r\n"; 
}
{
fclose($REJECT);
}
}else {
  echo "\r\n# REJECT Module下载失败!\r\n";
}
//KEYWORD
if($KEYWORD){
echo"# KEYWORD\r\n";
while(!feof($KEYWORD))
{
echo "DOMAIN-KEYWORD,"; 
echo str_replace("Proxy","DIRECT",trim(fgets($KEYWORD)).",force-remote-dns"."\r\n");
}
{
fclose($KEYWORD);
}
}else {
  echo "\r\n# KEYWORD Module下载失败!\r\n";
}
//IPCIDR
if($IPCIDR){
echo"# IP-CIDR\r\n";
while(!feof($IPCIDR))
{
echo "IP-CIDR,";
echo str_replace("Proxy","DIRECT",trim(fgets($IPCIDR)).",no-resolve"."\r\n");
}
{
fclose($IPCIDR);
}
}else {
  echo "\r\n# IPCIDR Module下载失败!\r\n";
}
//Other
echo"# Other\r\n";
echo"GEOIP,CN,DIRECT\r\n";
echo"FINAL,DIRECT";
//HOSTS
if($HOSTS){
echo "\r\n[Host]";
echo"\r\n# HOSTS\r\n";
while(!feof($HOSTS))
{
echo trim(fgets($HOSTS)).""."\r\n"; 
}
{
fclose($HOSTS);
}
}else {
  echo "\r\n# HOSTS Module下载失败!\r\n";
}
//Youtube
if($Youtube){
echo"\r\n# Youtube\r\n";
while(!feof($Youtube))
{
if($GETFix=="true"){echo trim(fgets($Youtube))." = 202.171.253.103"."\r\n"; }
elseif($GETFix=="false"){echo trim(fgets($Youtube))." = 202.171.253.111"."\r\n"; }
}
{
fclose($Youtube);
}
}else {
  echo "\r\n# Youtube Module下载失败!\r\n";
}
//Rewrite
if($Rewrite){
echo"# Rewrite\r\n";
echo"[URL Rewrite]\r\n";
while(!feof($Rewrite))
{
echo trim(fgets($Rewrite))."\r\n"; 
}
{
fclose($Rewrite);
}
}else {
  echo "\r\n# Rewrite Module下载失败!\r\n";
}
exit();
//--------------END-------------//