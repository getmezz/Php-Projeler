<?php 
$username="root";
$password="";
$sunucu="localhost";
$database="getmezfoto";

$baglan=mysql_connect($sunucu,$username,$password);
mysql_query("SET NAMES UTF8");

if(!$baglan)
{
 echo "Bağlantı hatası: ".mysql_errno();
 exit();

}
$db=mysql_select_db($database);
if(!$db) {echo "Veritabanı hatası: ".mysql_error();echo "</br>";
                
                

exit();
}
?>