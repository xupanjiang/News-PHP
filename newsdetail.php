<?php
require("admin/include/conn.php");
if(empty($_GET["id"]))
{
	header("location:index.php");
}else
{
	$id = intval($_GET["id"]);
}

//更新点击率
$sql = "update {$db_prefix}news set hits=hits+1 where id=$id";
$result = mysql_query($sql);
$sql = "select * from {$db_prefix}news where id=$id";
$result = mysql_query($sql);
$row = mysql_fetch_assoc($result);

//根据当前类别，取出类别名称
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/public.css" type="text/css" rel="stylesheet" />
<link href="css/news.css" type="text/css" rel="stylesheet" />
<title>{$list.title}_{$SiteList.webname}</title>
</head>

<body>
<div class="box">
<?php include("header.php");?>
<div class="main">
<!--left-->
<div class="left floatL">
	<!--aboutus-->
	<div class="news">
		<div class="title">新闻中心</div>
		<div class="content">
			<ul>
				<?php
				$sql2 = "select * from {$db_prefix}class_news";
				$result2 = mysql_query($sql2);
				$n=0;
				while($row2=mysql_fetch_assoc($result2)){
					$n++;
				?>
				<li<?php if($n==1){echo " id='noTopLine'";}?>><a href="news.php?cat=<?php echo $row2["id"]?>"><?php echo $row2["classname"]?></a></li>
				<?php }?>
			</ul>
		</div>
	</div><!--//aboutus-->
	<!--联系我们-->
	<div class="contact">
		<div class="title">联系我们</div>
		<div class="content">
		</p>
				邮箱：183594490@qq.com<br />				
			</p>
		</div>
	</div><!--//联系我们-->
</div><!--//left-->
<!--right-->
<div class="right floatR">
	<div class="title">当前位置：<a href="index.php">网站首页</a> >&nbsp;<a href="news.php">新闻资讯</a> >&nbsp;<?php echo $row["title"]?></div>
	<div class="attr">
		<h4><?php echo $row["title"]?></h4>
		<div>作者：<?php echo $row["author"]?>&nbsp;&nbsp;发布时间：<?php echo date("Y-m-d H:i:s",$row["addate"])?>&nbsp;&nbsp;点击率：<?php echo $row["hits"]?></div>
	</div>
	<div class="content">
	<?php echo $row["content"]?>
	</div>
	<div class="prevNext">
		
	</div>
</div><!--//right-->
<div class="clear"></div>
</div><!--//main-->
</div><!--//box-->
<?php include("footer.php")?>
</body>
</html>
