<?php  
echo "Begin connecting...";
try {
$link=mysql_connect("lemp_mysql_1","root","12345678");  
} catch(Exception $e)
 {
 echo 'Message: ' .$e->getMessage();
return;
 }
if(!$link) echo "FAILD!";  
else echo "OK!";  
?>