<?php

# 页面禁止缓存 | UTF-8编码
header("cache-control:no-cache,must-revalidate");
header("Content-Type:text/html;charset=UTF-8");

# 检测GET请求USERAGENT参数
$USERAGENT = $_SERVER['HTTP_USER_AGENT'];

# 如果参数包含字符串则跳转相应页面
if(strstr($USERAGENT,"Surge")){header("Location:".'http://'.$_SERVER['SERVER_NAME'].'/Rule/General/Surge.php');}
elseif(strstr($USERAGENT,"Shadowrocket")){header("Location:".'http://'.$_SERVER['SERVER_NAME'].'/Rule/General/Shadowrocket.php');}
elseif(strstr($USERAGENT,"Potatso")){header("Location:".'http://'.$_SERVER['SERVER_NAME'].'/Rule/General/Potatso.php');}
elseif(strstr($USERAGENT,"A.BIG.T")){header("Location:".'http://'.$_SERVER['SERVER_NAME'].'/Rule/General/A.BIG.T.php');}
else{header("Location:".'http://'.$_SERVER['SERVER_NAME'].'/Other.html');}
?>