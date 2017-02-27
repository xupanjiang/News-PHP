<?php
require("admin/include/conn.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="keywords" content="{$SiteList.keywords}" />
<meta http-equiv="description" content="{$SiteList.description}" />
<link href="css/public.css" rel="stylesheet" type="text/css" />
<link href="css/index.css" rel="stylesheet" type="text/css" />
<title>网站首页</title>
</head>

<body>
<!--box-->
<div class="box">
<?php require("header.php");?>
<!--main-->
<div class="main">
	
	<div class="left floatL">
		<div class="title">热点要闻<span><a href="news.php?cat=1"><img src="images/more.png" /></a></span></div>
		<div class="content">
		<ul>
				<?php
				//读取新闻
				$sql = "select * from {$db_prefix}news where cat='1' order by orderby asc,id desc limit 0,8";
				$result = mysql_query($sql);
				while($row = mysql_fetch_assoc($result)){
				?>
				<li><a href="newsdetail.php?id=<?php echo $row["id"]?>" target="_blank"><?php echo $row["title"]?></a></li>
				<?php }?>
			</ul>
		</div>
	</div>
	<div class="right floatR">
		<div class="title">新闻中心<span><a href="news.php"><img src="images/more.png" /></a></span></div>
		<div class="content">
			<div class="ppt">
				<script language="javascript">
				var focus_width=210
				var focus_height=160
				var text_height=0
				var swf_height = focus_height+text_height
				var pics="images/ppt01.jpg|images/ppt02.jpg|images/ppt03.jpg|images/ppt04.jpg"
				var links="|||"
				var texts="|||"
				 document.write('<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="'+ focus_width +'" height="'+ swf_height +'">');
				 document.write('<param name="allowScriptAccess" value="sameDomain"><param name="movie" value="images/playswf.swf"><param name=wmode value=transparent><param name="quality" value="high">');
				 document.write('<param name="menu" value="false"><param name=wmode value="opaque">');
				 document.write('<param name="FlashVars" value="pics='+pics+'&links='+encodeURIComponent(links)+'&texts='+texts+'&borderwidth='+focus_width+'&borderheight='+focus_height+'&textheight='+text_height+'">');
				 document.write('<embed src="images/playswf.swf" wmode="opaque" FlashVars="pics='+pics+'&links='+links+'&texts='+texts+'&borderwidth='+focus_width+'&borderheight='+focus_height+'&textheight='+text_height+'" menu="false" bgcolor="#DADADA" quality="high" width="'+ focus_width +'" height="'+ swf_height +'" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />');
				 document.write('</object>');
				</script>
			</div><!--//ppt-->
			<ul>
				<?php
				//读取新闻
				$sql = "select * from {$db_prefix}news order by orderby asc,id desc limit 0,8";
				$result = mysql_query($sql);
				while($row = mysql_fetch_assoc($result)){
				?>
				<li><a href="newsdetail.php?id=<?php echo $row["id"]?>" target="_blank"><?php echo $row["title"]?></a></li>
				<?php }?>
			</ul>
			<div class="clear"></div>
		</div><!--//content-->
	</div><!--//right-->
<!-- 加入内容11111 -->

	<div class="left floatL">
		<div class="title">财经新闻<span><a href="news.php?cat=2"><img src="images/more.png" /></a></span></div>
		<div class="content">
		<ul>
				<?php
				//读取新闻
				$sql = "select * from {$db_prefix}news where cat='2' order by orderby asc,id desc limit 0,8";
				$result = mysql_query($sql);
				while($row = mysql_fetch_assoc($result)){
				?>
				<li><a href="newsdetail.php?id=<?php echo $row["id"]?>" target="_blank"><?php echo $row["title"]?></a></li>
				<?php }?>
			</ul>
		</div>
	</div>
	<div class="right floatR">
		<div class="title">体育新闻<span><a href="news.php?cat=3"><img src="images/more.png" /></a></span></div>
		<div class="content">
<!--//ppt-->
			<ul>
				<?php
				//读取新闻
				$sql = "select * from {$db_prefix}news where cat='3' order by orderby asc,id desc limit 0,8";
				$result = mysql_query($sql);
				while($row = mysql_fetch_assoc($result)){
				?>
				<li><a href="newsdetail.php?id=<?php echo $row["id"]?>" target="_blank"><?php echo $row["title"]?></a></li>
				<?php }?>
			</ul>
			<div class="clear"></div>
		</div><!--//content-->
	</div><!--//right-->
<!-- //////加入内容 -->
<!-- 加入内容 2222-->

	<div class="left floatL">
		<div class="title">娱乐新闻<span><a href="news.php?cat=4"><img src="images/more.png" /></a></span></div>
		<div class="content">
		<ul>
				<?php
				//读取新闻
				$sql = "select * from {$db_prefix}news where cat='4' order by orderby asc,id desc limit 0,8";
				$result = mysql_query($sql);
				while($row = mysql_fetch_assoc($result)){
				?>
				<li><a href="newsdetail.php?id=<?php echo $row["id"]?>" target="_blank"><?php echo $row["title"]?></a></li>
				<?php }?>
			</ul>
		</div>
	</div>
	<div class="right floatR">
		<div class="title">科技新闻<span><a href="news.php?cat=6"><img src="images/more.png" /></a></span></div>
		<div class="content">
<!--//ppt-->
			<ul>
				<?php
				//读取新闻
				$sql = "select * from {$db_prefix}news where cat='6' order by orderby asc,id desc limit 0,8";
				$result = mysql_query($sql);
				while($row = mysql_fetch_assoc($result)){
				?>
				<li><a href="newsdetail.php?id=<?php echo $row["id"]?>" target="_blank"><?php echo $row["title"]?></a></li>
				<?php }?>
			</ul>
			<div class="clear"></div>
		</div><!--//content-->
	</div><!--//right-->
<!-- //////加入内容 -->
	<div class="blank"></div>

</div><!--//main-->
</div><!--//box-->
<?php require("footer.php")?>
</body>
</html>
