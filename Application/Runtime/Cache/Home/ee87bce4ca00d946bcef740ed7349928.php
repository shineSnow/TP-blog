<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<link rel="shortcut icon" href="../favicon.ico">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>狂拽酷炫</title>
    <link rel="stylesheet" type="text/css" href="/myblog/Public/CSS/normalize.css" />
     <link rel="stylesheet" href="/myblog/Public/CSS/article.css" />
    <!-- Bootstrap -->
    <link href="/myblog/Public/CSS/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/myblog/Public/CSS/animate-3.2.6.min.css" />
    <link rel="stylesheet" href="/myblog/Public/CSS/component.css" />
    <link rel="stylesheet" href="/myblog/Public/CSS/common.css" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
    /*博客头部*/
	.blog-head .container-fluid{max-width: 1248px;}
	.blog-head .navbar-form .form-group{width: 543px;}
	.blog-head .navbar-form .form-control{width: 100%;}
	.blog-head .navbar-default {background-color: rgba(248, 248, 248, 0);border-color: rgba(231, 231, 231, 0);}
     /*博客中部*/
    .blog-content .container{width: 1248px;}
    /*瀑布流样式*/
    .blog-content .container .grid {
  
		  position: relative;

		  /* fluffy */
		  margin: 0 auto;
		  width: 100%;
		  /* end fluffy */
		}

		.blog-content .container .grid-item {
		  position: absolute;

		   /* fluffy */
		  opacity: 0;
		   box-shadow: 1px 1px #9E9E9E;
		   width: 216px;
		   height: 320px;
		   border-radius: 3px;
		   background-color: #536DFE;
		   /* end fluffy */

		}

		/* mq */

		@media (max-width: 600px) {
		  .blog-content .container .grid-item {
		    width: 120px;
		    height: 80px;
		  }
		}
    /*瀑布流样式end*/
    
                     
   
     /*博客底部*/
  .blog-footer {text-align: center;background: rgb(38, 37, 53) none repeat scroll 0% 0%;padding: 14px;color: rgb(255, 255, 255);}
  
  
    </style>
  </head>
  <body>
  	<!--页头部分-->
  	<div class="blog-head">
  		
  		<div class="demo-2">
			<div class="content">
                <div id="large-header" class="large-header" >
                    <canvas id="demo-canvas"></canvas>
                    <h1 class="main-title">Spirit</span></h1>
                </div>
                
                <nav class="navbar navbar-default navbar-fixed-top">
				  <div class="container-fluid">
				    <!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				      <a class="navbar-brand" href="#">Brand</a>
				    </div>
				
				    <!-- Collect the nav links, forms, and o  ther content for toggling -->
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      <ul class="nav navbar-nav">
				        <li><a href="<?php echo U('Home/Index/index');?>">首页 <span class="sr-only">(current)</span></a></li>
				        <li><a href="<?php echo U('Home/List/index');?>">博客文章</a></li>
				        <li class="active"><a href="<?php echo U('Home/Example/index');?>">狂拽酷炫</a></li>
				        <li><a href="<?php echo U('Home/Workday/index');?>">点点滴滴</a></li>
				       <!-- <li class="dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
				          <ul class="dropdown-menu">
				            <li><a href="#">Action</a></li>
				            <li><a href="#">Another action</a></li>
				            <li><a href="#">Something else here</a></li>
				            <li role="separator" class="divider"></li>
				            <li><a href="#">Separated link</a></li>
				            <li role="separator" class="divider"></li>
				            <li><a href="#">One more separated link</a></li>
				          </ul>
				        </li>-->
				      </ul>
				      <form class="navbar-form navbar-left" role="search">
				        <div class="form-group">
				          <input type="text" class="form-control" placeholder="Search">
				        </div>
				        <button type="submit" class="btn btn-default">搜索</button>
				      </form>
				      <ul class="nav navbar-nav navbar-right">
				        <li><a href="<?php echo U('Home/Me/index');?>">我的自画像</a></li>
				        <li><a href="<?php echo U('Home/Liuyan/index');?>">来客留言</a></li>
				      </ul>
				    </div><!-- /.navbar-collapse -->
				  </div><!-- /.container-fluid -->
				</nav>
                
                
            </div>
		</div><!-- /container -->
		
  	</div>
  	<!--页中部分-->
  	<div class="blog-content">
  		<div class="container">
  			<!--博客内容头部-->
  			<div class="row container-head">
  				<div class="col-sm-12" style="height: 80px;" >
  					            <div class="jq-navbar-main">
                  <div class="jq-navbar-container">
                        <div class="a1">
                              <div class="mo-boy"></div>
                              <div class="mo-girl"></div>
                              <div class="mo-mo"></div>
                              <div class="mo-wheel2"></div>
                              <div class="mo-wheel1"></div>
                        </div>
                        <div class="motor_shadow"></div>
                        <i class="smoke smoke_1"></i>
                        <i class="smoke smoke_2"></i>
                  </div>
                  <div class="jq-navbar-location">
<!--                    <strong>当前位置</strong>：<a href="http://www.htmleaf.com/">主页</a> &gt; <a href="http://www.htmleaf.com/ziliaoku/">资料库</a> &gt; <a href="http://www.htmleaf.com/ziliaoku/qianduanjiaocheng/">前端教程</a> &gt; 
-->                    <strong>狂招酷炫</strong>
                  </div>    
            </div>
  				</div>
  			</div>
  			<!--案例演示-->
		<div class="grid row example">
		   <div class="grid-item"></div>
		   <div class="grid-item"></div>
		   <div class="grid-item" style="height: 245px;"></div>
		   <div class="grid-item"></div>
		   <div class="grid-item" style="height: 390px;"></div>
		   <div class="grid-item"></div>
		   <div class="grid-item" style="height: 140px;"></div>
		   <div class="grid-item" style="height: 200px"></div>
		   <div class="grid-item" style="height: 150px"></div>
		   <div class="grid-item"></div>
		   <div class="grid-item" style="height: 220px"></div>
		   <div class="grid-item" style="height: 205px"></div>
		   <div class="grid-item"></div>
		   <div class="grid-item"></div>
		   <div class="grid-item"></div>
		   <div class="grid-item"></div>
		</div>
  	</div>
  	<!--页脚部分-->
     <div class="blog-footer">
     	<p>	Copyright@2016-2017 版权所有 Power By-张棋源</p>
     </div>






    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/myblog/Public/JS/jquery-1.11.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/myblog/Public/JS/bootstrap.min.js"></script>
    <script type="text/javascript" src="/myblog/Public/JS/jquery.aniview.min.js" ></script>
    <script type="text/javascript" src="/myblog/Public/JS/rAF.js" ></script>
    <script type="text/javascript" src="/myblog/Public/JS/demo-2.js" ></script>
    <script type="text/javascript" src="/myblog/Public/JS/dynamics.js" ></script><!--动画样式-->
    <script type="text/javascript" src="/myblog/Public/JS/minigrid.js" ></script>
    <script type="text/javascript" src="/myblog/Public/JS/common.js" ></script>
    <script type="text/javascript">
    //顶部图收缩
    $(function(){
    	//setTimeout(suo(),3000);
    	$("#large-header").animate({height:"50px"},0);
    })
    function suo (){
    	
    	$("#large-header").animate({height:"50px"},2600);
    }
    //瀑布流样式初始化
     (function(){
		 function animate(item, x, y, index) {
		   dynamics.animate(item, {
		     translateX: x,
		     translateY: y,
		     opacity: 1
		    }, {
		      type: dynamics.spring,
		      duration: 800,
		      frequency: 120,
		      delay: 100 + index * 30
		    });
		  }
		  
		  minigrid('.grid', '.grid-item', 6, animate);

		  window.addEventListener('resize', function(){
		    minigrid('.grid', '.grid-item', 6, animate);
		  });
		})();
    </script>
  </body>
</html>