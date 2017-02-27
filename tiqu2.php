<?php
$conn=mysql_connect("localhost","root","");//ip   用户名  密码 
mysql_select_db("news",$conn);//数据库名 
mysql_query("set names 'utf8'");//utf-8格式  
$sql="select content from{$db_prefix}news where id=190"; 
$result=mysql_query($sql,$conn); 
while($row=mysql_fetch_array($result)){ 
    echo  "<img src='".$row['content']."' />";
}
?>