<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>首页- WaterBlog</title>
	<meta name="keywords" content="<?php echo ($system["keyword"]); ?>" />
	<meta name="description" content="<?php echo ($system["remark"]); ?>" />
	<meta name="version" content="<?php echo (C("NAME")); ?> v<?php echo ($version); ?>" />
	<meta name="author" content="<?php echo ($system["author"]); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!--[if lt IE 9]>
<script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->        
<meta property="qc:admins" content="73113635665455576375" />
<link rel="stylesheet" href="/blog/Public/Css/bootstrap.min.css" />
<link rel="shortcut icon" href="/blog./Public/Img/icon/favicon.ico" />
<link rel="stylesheet" href="/blog/Public/Css/my-app.css" />
    </head>
    <body data-spy="scroll">  
            <div class="top-top"  data-offset-top="10">
                <div class="container">
                    <div class="top-left "><span class="from">系统：win8</span></div>
                    <div class="top-right "><a href="#" class="QQ "><span class="from">QQ登录</span></a></div>
                </div>
            </div>
       
        <div class="container">
                <div class="logo"><a href="http://www.baidu.com"><img src="/blog./Public/Img/logo.jpg"></a></div>

                <nav class="nav navbar-inverse ">

                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="#" class="navbar-brand sr-only"></a>
                    </div>
                    <div class="collapse navbar-collapse" id="bar">
                        <ul class="navbar-nav nav navbar-inverse">
                            <li><a href="#">首页</a></li>
                            <li><a href="#">关于我</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">分类
                                <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li role="presentation"><a href="#">学习笔记</a></li>
                                    <li role="seperator" class="divider"></li>
                                    <li role="presentation"><a href="#">百姓杂烩</a></li>
                                    <li role="presentation" class="divider"></li>
                                    <li role="presentation"><a href="#">生活百态</a></li>
                                </ul>
                            </li>
                            <li><a href="#">说说</a></li>
                            <li><a href="#">相册</a></li>
                            <li><a href="#">留言</a></li>
                            <li><a href="#">下载</a></li>
                            
                        </ul>
                    </div>
                </nav>
        </div>
		<!-- 图片轮播 -->
		<div class="container">
			<div class="carousel slide" id="mycarousel">
				<!-- 轮播指标 -->
				<ol class="carousel-indicators">
					<li data-target="#mycarousel" data-slide-to="0" class="active"></li>
					<li data-target="#mycarousel" data-slide-to="1" ></li>
					<li data-target="#mycarousel" data-slide-to="2" ></li>
				</ol>
				<!-- 轮播项目 -->
				<div class="carousel-inner">
					<div class="item active"><img src="/blog./Public/Img/ppt/ppt1.jpg">
					<div class="carousel-caption">
						<h3>青春，就是一场热性的搏斗</h3>
					</div>
					</div>
					<div class="item ">
						<img src="/blog./Public/Img/ppt/ppt2.jpg">
						<div class="carousel-caption">
							<h3>青春，好好恋爱一场</h3>
						</div>
					</div>
					<div class="item ">
						<img src="/blog./Public/Img/ppt/ppt3.jpg">
						<div class="carousel-caption">
							<h3>青春，就不存在唯唯诺诺</h3>
						</div>
					</div>
				</div>
				<!-- 轮播导航 -->
				<a href="#mycarousel" class="carousel-control left" data-slide="prev"> 
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></a>
				<a href="#mycarousel" class="carousel-control right" data-slide="next"> 
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
			</div>
		</div>
		<div class="container side">
		   <div class="row ">
		      <div class="col-md-8 col-sm-8 side-left" style="">
		      	<div class="panel-first">
		      		<div class="panel panel-info ">
		         	<div class="panel-heading">
		         		<div  class="panel-title">
		         			<span class="glyphicon glyphicon-flag "></span><a href="#">常用的正则表达式</a>
		         		</div>
		         	</div>
		         	<div class="panel-body">
		         		<div class="media">
		         			<a href="#" class="pull-left">
		         				<img src="/blog./Public/Img/cat.jpg" class="media-object" alt="老毛桃">
		         			</a>
		         			<div class="media-body">
			         			<h4><div class="media-heading">test</div></h4>
			         			<p> 这是一些示例文本。这是一些示例文本。
						            这是一些示例文本。这是一些示例文本。
						            这是一些示例文本。这是一些示例文本。 
						            这是一些示例文本。这是一些示例文本。
					            </p>

			         			<div class="pull-right">
			         				<span class="btn btn-warning pull-right"><a href="#">点击查看详情</a></span>
			         			</div>
			         			</div>
		         			<div class="media-footer">
		         				<div class="pull-left">
			         				<a href="#"  title="正则" data-placement="top"><span class="label label-info">正则</span></a>
			         				<a href="#"  title="正则表达式"><span class="label label-info">正则表达式</span></a>
			         			</div>
		         				<div class="pull-right">
		         					<span class="glyphicon glyphicon-fire blog-icon">10</span>
		         					<span class="glyphicon glyphicon-comment blog-icon ">20</span>
		         				</div>
	         				</div>
		         		</div>

		         	</div>
		         </div>
		      	</div>
		      	<div class="panel-first">
		      		<div class="panel panel-info ">
		         	<div class="panel-heading">
		         		<div  class="panel-title">
		         			<span class="glyphicon glyphicon-flag "></span><a href="#">常用的正则表达式</a>
		         		</div>
		         	</div>
		         	<div class="panel-body">
		         		<div class="media">
		         			<a href="#" class="pull-left">
		         				<img src="/blog./Public/Img/cat.jpg" class="media-object" alt="老毛桃">
		         			</a>
		         			<div class="media-body">
			         			<h4><div class="media-heading">test</div></h4>
			         			<p> 这是一些示例文本。这是一些示例文本。
						            这是一些示例文本。这是一些示例文本。
						            这是一些示例文本。这是一些示例文本。 
						            这是一些示例文本。这是一些示例文本。
					            </p>

			         			<div class="pull-right">
			         				<span class="btn btn-warning pull-right"><a href="#">点击查看详情</a></span>
			         			</div>
			         			</div>
		         			<div class="media-footer">
		         				<div class="pull-left">
			         				<a href="#"  title="正则" data-placement="top"><span class="label label-info">正则</span></a>
			         				<a href="#"  title="正则表达式"><span class="label label-info">正则表达式</span></a>
			         			</div>
		         				<div class="pull-right">
		         					<span class="glyphicon glyphicon-fire blog-icon">10</span>
		         					<span class="glyphicon glyphicon-comment blog-icon ">20</span>
		         				</div>
	         				</div>
		         		</div>

		         	</div>
		         </div>
		      	</div>
		      	<div class="panel-first">
		      		<div class="panel panel-info ">
		         	<div class="panel-heading">
		         		<div  class="panel-title">
		         			<span class="glyphicon glyphicon-flag "></span><a href="#">常用的正则表达式</a>
		         		</div>
		         	</div>
		         	<div class="panel-body">
		         		<div class="media">
		         			<a href="#" class="pull-left">
		         				<img src="/blog./Public/Img/cat.jpg" class="media-object" alt="老毛桃">
		         			</a>
		         			<div class="media-body">
			         			<h4><div class="media-heading">test</div></h4>
			         			<p> 这是一些示例文本。这是一些示例文本。
						            这是一些示例文本。这是一些示例文本。
						            这是一些示例文本。这是一些示例文本。 
						            这是一些示例文本。这是一些示例文本。
					            </p>

			         			<div class="pull-right">
			         				<span class="btn btn-warning pull-right"><a href="#">点击查看详情</a></span>
			         			</div>
			         			</div>
		         			<div class="media-footer">
		         				<div class="pull-left">
			         				<a href="#"  title="正则" data-placement="top"><span class="label label-info">正则</span></a>
			         				<a href="#"  title="正则表达式"><span class="label label-info">正则表达式</span></a>
			         			</div>
		         				<div class="pull-right">
		         					<span class="glyphicon glyphicon-fire blog-icon">10</span>
		         					<span class="glyphicon glyphicon-comment blog-icon ">20</span>
		         				</div>
	         				</div>
		         		</div>

		         	</div>
		         </div>
		      	</div>
		      </div>
		      <div class="col-md-4 col-sm-4 side-right">
		      	<!-- 输入框组 -->
		         <div style="padding: 20px 0px 10px;">
		         <!-- 输入关键字进行搜索 -->
		         	<form class="bs-example" role="form">
		         		<div class="input-group">
		         			<input type="text" class="form-control" name="search" placeholder="输入关键字进行搜索">
		         			<span class="input-group-btn">
		         				<button type="button" class="btn btn-button">搜索</button>
		         			</span>
		         		</div>
		         	</form>
		         </div>
		         <!-- 我的标签 -->
		         <div class="panel panel-info">
		         	<div class="panel-heading">
		         		<div  class="panel-title">
		         			<span class="glyphicon glyphicon-user">My Label</span>
		         		</div>
		         	</div>
		         	<table class="table">
		         		<tr>
		         			<td><a href="#"><span class="label label-info">php</span></a></td>
		         			<td><a href="#"><span class="label label-danger">无兄弟</span></a></td>
		         			<td><a href="#"><span class="label label-primary">javascript</span></a></td>
		         			<td><a href="#"><span class="label label-warning">lol英雄</span></a></td>
		         			<td><a href="#"><span class="label label-success">不篮球</span></a></td>
		         		</tr>
		         		<tr>
		         			<td><a href="#"><span class="label label-info">php</span></a></td>
		         			<td><a href="#"><span class="label label-danger">无兄弟</span></a></td>
		         			<td><a href="#"><span class="label label-primary">javascript</span></a></td>
		         			<td><a href="#"><span class="label label-warning">lol英雄</span></a></td>
		         			<td><a href="#"><span class="label label-success">不篮球</span></a></td>
		         		</tr>
		         		<tr>
		         			<td><a href="#"><span class="label label-info">php</span></a></td>
		         			<td><a href="#"><span class="label label-danger">无兄弟</span></a></td>
		         			<td><a href="#"><span class="label label-primary">javascript</span></a></td>
		         			<td><a href="#"><span class="label label-warning">lol英雄</span></a></td>
		         			<td><a href="#"><span class="label label-success">不篮球</span></a></td>
		         		</tr>
		         	</table>
		         </div>
		         <!-- 随机文章 -->
		         <p><span class="glyphicon glyphicon-book">随机文章</span></p>
		         <div class="media">
		         	<span class="pull-left">
		         		<img src="/blog./Public/Img/cat.jpg">
		         	</span>
		         	<div class="media-body">
		         		<div class="panel-heading"><a href="#">那一夜</a></div>
		         		<div class="rand-artitle" >这不是偶然,也不是祝愿,这是上天对重逢的安排!不相信眼泪,不相信改变,可是坚信彼此的请柬!我应该如何?如何回到你的心田,我应该怎样?怎样才能走进你的梦.我想呀想!盼呀盼!盼望回到我们的初恋,我望呀望,看呀看,在此重逢你的笑颜——那一夜,你没有拒绝我!那一夜,我伤害了你,那一夜,你满脸泪水,那一夜,你为我喝醉,那一夜,我与你分手,那一夜,我伤害了你,那一夜,我举起酒杯,那一夜,我心儿哭醉.这不是偶然,也不是祝愿,这是上天对重逢的安排!不相信眼泪,不相信改变,可是坚信彼此的请柬!我想呀想!盼呀盼!盼望回到我们的初恋,我望呀望,看呀看,在此重逢你的笑颜--那一夜,你没有拒绝我!那一夜,我伤害了你,那一夜,你满脸泪水,那一夜,你为我喝醉,那一夜,我与你分手,那一夜,我伤害了你,那一夜,我举起酒杯,那一夜,我不堪回味——</div>
		         	</div>
		         </div>
		         <div class="media">
		         	<span class="pull-left">
		         		<img src="/blog./Public/Img/cat.jpg">
		         	</span>
		         	<div class="media-body">
		         		<div class="panel-heading"><a href="#">那一夜</a></div>
		         		<div class="rand-artitle" >这不是偶然,也不是祝愿,这是上天对重逢的安排!不相信眼泪,不相信改变,可是坚信彼此的请柬!我应该如何?如何回到你的心田,我应该怎样?怎样才能走进你的梦.我想呀想!盼呀盼!盼望回到我们的初恋,我望呀望,看呀看,在此重逢你的笑颜——那一夜,你没有拒绝我!那一夜,我伤害了你,那一夜,你满脸泪水,那一夜,你为我喝醉,那一夜,我与你分手,那一夜,我伤害了你,那一夜,我举起酒杯,那一夜,我心儿哭醉.这不是偶然,也不是祝愿,这是上天对重逢的安排!不相信眼泪,不相信改变,可是坚信彼此的请柬!我想呀想!盼呀盼!盼望回到我们的初恋,我望呀望,看呀看,在此重逢你的笑颜--那一夜,你没有拒绝我!那一夜,我伤害了你,那一夜,你满脸泪水,那一夜,你为我喝醉,那一夜,我与你分手,那一夜,我伤害了你,那一夜,我举起酒杯,那一夜,我不堪回味——</div>
		         	</div>
		         </div>
		         <div class="media">
		         	<span class="pull-left">
		         		<img src="/blog./Public/Img/cat.jpg">
		         	</span>
		         	<div class="media-body">
		         		<div class="panel-heading"><a href="#">那一夜</a></div>
		         		<div class="rand-artitle" >这不是偶然,也不是祝愿,这是上天对重逢的安排!不相信眼泪,不相信改变,可是坚信彼此的请柬!我应该如何?如何回到你的心田,我应该怎样?怎样才能走进你的梦.我想呀想!盼呀盼!盼望回到我们的初恋,我望呀望,看呀看,在此重逢你的笑颜——那一夜,你没有拒绝我!那一夜,我伤害了你,那一夜,你满脸泪水,那一夜,你为我喝醉,那一夜,我与你分手,那一夜,我伤害了你,那一夜,我举起酒杯,那一夜,我心儿哭醉.这不是偶然,也不是祝愿,这是上天对重逢的安排!不相信眼泪,不相信改变,可是坚信彼此的请柬!我想呀想!盼呀盼!盼望回到我们的初恋,我望呀望,看呀看,在此重逢你的笑颜--那一夜,你没有拒绝我!那一夜,我伤害了你,那一夜,你满脸泪水,那一夜,你为我喝醉,那一夜,我与你分手,那一夜,我伤害了你,那一夜,我举起酒杯,那一夜,我不堪回味——</div>
		         	</div>
		         </div>
		         <br/>
		       <p><span class="	glyphicon glyphicon-bell"></span>常用功能</p>  
		       <!-- 标签页插件 -->
		       <ul class="nav nav-tabs nav-justified bg-warning">
		       		<li class="active">
		       			<a href="#comment" data-toggle="tab" >最新评论</a>
		       		</li>
		       		<li>
		       			<a href="#click" data-toggle="tab">最多点击</a>
		       		</li>
		       		<li>
		       			<a href="#msg" data-toggle="tab">最新留言</a>
		       		</li>
		       </ul>
		       <div class="tab-content" id="commom-content">
		       		<div class="tab-pane fade in active" id="comment">
		       			<ul class="list-group">
		       				<li class="list-group-item">
		       					<a href="#">一起走过的日子</a><span class="badge pull-right">50</span>
		       				</li>
		       				<li class="list-group-item">
		       					<a href="#">一起走过的日子</a><span class="badge pull-right">50</span>
		       				</li>
		       				<li class="list-group-item">
		       					<a href="#">一起走过的日子</a><span class="badge pull-right">50</span>
		       				</li>
		       			</ul>
		       		</div>
		       		<div class="tab-pane fade " id="click">
		       			<ul class="list-group">
		       				<li class="list-group-item"><a href="#">谢谢你的爱</a> <span class="badge pull-right">100</span></li>
		       				<li class="list-group-item"><a href="#">谢谢你的爱</a> <span class="badge pull-right">80</span></li>
		       				<li class="list-group-item"><a href="#">谢谢你的爱</a> <span class="badge pull-right">50</span></li>
		       			</ul>
		       		</div>
		       		<div class="tab-pane fade " id="msg">
		       			<ul class="list-group">
		       				<li class="list-group-item"><a href="#">相思风雨中 </a><span class="badge pull-right">100</span></li>
		       				<li class="list-group-item"><a href="#">相思风雨中 </a><span class="badge pull-right">80</span></li>
		       				<li class="list-group-item"><a href="#">相思风雨中 </a><span class="badge pull-right">50</span></li>
		       			</ul>
		       		</div>
		       </div>
		       <br>
		       <p><span class="glyphicon glyphicon-tree-conifer">友情链接</span></p>
		       <table class="table ">
		       		<tr>
		       			<td><a href="www.baidu.com" class="label label-warning">百度</a></td>
		       			<td><a href="wwww.muke.com" class="label label-info">慕课网</a></td>
		       			<td><a href="www.runoob.com" class="label label-success">菜鸟自学网</a></td>
		       		</tr>
		       		<tr>
		       			<td><a href="www.baidu.com" class="label label-success">百度</a></td>
		       			<td><a href="wwww.muke.com" class="label label-warning">慕课网</a></td>
		       			<td><a href="www.runoob.com" class="label label-info">菜鸟自学网</a></td>
		       		</tr>
		       		<tr>
		       			<td><a href="www.baidu.com" class="label label-info">百度</a></td>
		       			<td><a href="wwww.muke.com" class="label label-success">慕课网</a></td>
		       			<td><a href="www.runoob.com" class="label label-warning">菜鸟自学网</a></td>
		       		</tr>
   		       </table><!-- 引用右边栏 -->
     		  </div>
     	</div>
     	</div>

	<div class="to-top"><img src="/blog./Public/Img/top.jpg"></div>
<div class="footer">
<div class="container">
	<div class="row">
		<div class="col-md-4">
				<h3><strong>程序统计</strong></h3>
				<p class="bg-default">
				  <a href="#"><span class="glyphicon glyphicon-comment text-left text-warning" style="font-size: 20px; color:black;">微说:10条&nbsp;&nbsp;</span></a>
				  <a href="#"><span class="glyphicon glyphicon-comment text-right text-warning" style="font-size: 20px; color:black;">微说:10条</span></a>
				</p>
				<br>
				<p class="bg-default">
				  <a href="#"><span class="glyphicon glyphicon-comment text-left text-warning" style="font-size: 20px; color:black;">微说:10条&nbsp;&nbsp;</span></a>
				  <a href="#"><span class="glyphicon glyphicon-comment text-right text-warning" style="font-size: 20px; color:black;">微说:10条</span></a>
				</p>
				<br>
				<p class="bg-default">
				  <a href="#"><span class="glyphicon glyphicon-comment text-left text-warning" style="font-size: 20px; color:black;">微说:10条&nbsp;&nbsp;</span></a>
				  <a href="#"><span class="glyphicon glyphicon-comment text-right text-warning" style="font-size: 20px; color:black;">微说:10条</span></a>
				</p>
				<br>
				<p class="bg-default">
				  <a href="#"><span class="glyphicon glyphicon-comment text-left text-warning" style="font-size: 20px; color:black;">微说:10条&nbsp;&nbsp;</span></a>
				  <a href="#"><span class="glyphicon glyphicon-comment text-right text-warning" style="font-size: 20px; color:black;">微说:10条</span></a>
				</p>
				<br>
				
		</div>
		<div class="col-md-4">
			<h3><strong>程序交流</strong></h3>
			<p class="bg-default">
				  <a href="#"><span class="glyphicon glyphicon-comment text-left text-warning" style="font-size: 20px; color:black;">微说:10条&nbsp;&nbsp;</span></a>
				  <a href="#"><span class="glyphicon glyphicon-comment text-right text-warning" style="font-size: 20px; color:black;">微说:10条</span></a>
				</p>
				<br>
				<p class="bg-default">
				  <a href="#"><span class="glyphicon glyphicon-comment text-left text-warning" style="font-size: 20px; color:black;">微说:10条&nbsp;&nbsp;</span></a>
				  <a href="#"><span class="glyphicon glyphicon-comment text-right text-warning" style="font-size: 20px; color:black;">微说:10条</span></a>
				</p>
				<br>
				<p class="bg-default">
				  <a href="#"><span class="glyphicon glyphicon-comment text-left text-warning" style="font-size: 20px; color:black;">微说:10条&nbsp;&nbsp;</span></a>
				  <a href="#"><span class="glyphicon glyphicon-comment text-right text-warning" style="font-size: 20px; color:black;">微说:10条</span></a>
				</p>
				<br>
				<p class="bg-default">
				  <a href="#"><span class="glyphicon glyphicon-comment text-left text-warning" style="font-size: 20px; color:black;">微说:10条&nbsp;&nbsp;</span></a>
				  <a href="#"><span class="glyphicon glyphicon-comment text-right text-warning" style="font-size: 20px; color:black;">微说:10条</span></a>
				</p>
				<br>
		</div>
		<div class="col-md-4">
			<h3><strong>推荐文章</strong></h3>
			<ul class="list-group">
				<li class="list-group-item" style="background:none; border:none;border-bottom: 1px dashed black"><a href="#"><span style="color:black;font-size: 20px;">广州两会</span></a></li>
				<li class="list-group-item" style="background:none; border:none;border-bottom: 1px dashed black"><a href="#"><span style="color:black;font-size: 20px;">广州两会</span></a></li>
				<li class="list-group-item" style="background:none; border:none;border-bottom: 1px dashed black"><a href="#"><span style="color:black;font-size: 20px;">广州两会</span></a></li>
				<li class="list-group-item" style="background:none; border:none;border-bottom: 1px dashed black"><a href="#"><span style="color:black;font-size: 20px;">广州两会</span></a></li>
			</ul>
		</div>
	</div>
</div>
</div>
<script src="/blog/Public/Js/jquery-2.2.2.min.js" ></script>
<!-- 雪花效果JS -->
<!-- <script src='/blog/Public/Js/snow.js'></script> -->
<script src="/blog/Public/Js/bootstrap.min.js" ></script>
<script src="/blog/Public/Js/common.js"></script>
<script src="/blog/Public/Js/rl_exp.js"></script>   	
<script src="/blog/Public/Js/jquery.fancybox.js"></script>	
<script src="/blog/Public/Js/my-app.js"></script>	
	
</body>
</html>