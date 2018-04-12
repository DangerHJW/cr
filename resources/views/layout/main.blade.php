<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>{{$title}}</title>
	<meta name="keywords" content="{{$keywords}}">
	<meta name="description" content="{{$description}}">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="shortcut icon" href="/uploads/{{$titleimg}}">
	
	<!-- include main css -->
	<link rel="stylesheet" type="text/css" href="/css/slick.css"/>	
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="/css/jquery.mmenu.all.css"/>
	<link rel="stylesheet" type="text/css" href="/css/style.css"/>
	<link href="/font-awesome-4.5.0/css/font-awesome.min.css" rel='stylesheet' type='text/css' media="all" />
	<link rel="stylesheet" type="text/css" href="/css/animate.css"/>
  <!-- <link href="http://vjs.zencdn.net/6.2.8/video-js.css" rel="stylesheet"> -->
  <link  rel="stylesheet" type="text/css" href="/css/video-js.css" rel="stylesheet">
	<script src="/js/jquery.min.js"></script>
  
  <script src="http://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
	<!--[if lt IE 9]>
    <script src="http://apps.bdimg.com/libs/html5shiv/r29/html5.min.js"></script>
    <script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	  
<div>
	<!--header-->
	<header class="header">
	   <div class="container clearfix">
		   <div class="logo">
		   		<a href="/"><img src="/uploads/{{$logo}}" alt="" /></a>
		   </div>
		   <div class="nav_right">
		   		<nav>
		   			<ul class="clearfix">     
		   				<li><a href="/" @if ($ac === 'home') class="active" @endif>首页</a></li>
             
		   				<li><a href="/prolm" @if ($ac === 'prolm') class="active" @endif>主营业务</a>
		   					<!-- <ul>
		   						@foreach($mainprolms as $mainprolm)
                  <li><a href="/prolm/{{$mainprolm->id}}" >{{$mainprolm->title}}</a></li>
                  @endforeach
		   					</ul> -->
		   				</li>
		   				<li><a href="/pro" @if ($ac === 'pro') class="active" @endif>公司介绍</a>
		   					<ul>
		   						@foreach($mainprolms as $mainprolm)
                  <li><a href="/pro/{{$mainprolm->id}}" >{{$mainprolm->title}}</a></li>
		   						@endforeach
                </ul>
		   				</li>
		   				<li><a href="/news" @if ($ac === 'news') class="active" @endif>新闻资讯</a>
		   					<ul>
		   						@foreach($mainnewlms as $mainnewlm)
                  <li><a href="/news/{{$mainnewlm->id}}">{{$mainnewlm->title}}</a></li>
		   						@endforeach
		   					</ul>
		   				</li>
               <li><a href="/team" @if ($ac === 'team') class="active" @endif>战略与品牌</a>
		   					<ul>
		   						<!-- @foreach($mainteamlms as $mainteam)
                  <li><a href="/team/{{$mainteam->id}}">{{$mainteam->position}}</a></li>
                  @endforeach -->
		   					</ul>
		   				</li>
		   				<li><a href="/contact" @if ($ac === 'contact') class="active" @endif>联系我们</a>
		   				</li>
		   			</ul>
		   		</nav>		   		
          <!-- <div class="cen">
		   			<a href="">CN</a>
		   			<a href="">EN</a>
		   		</div> -->
		   </div>
	 
	   		
	   	<a href="#mmenu" class="phone-nav"><i class="fa fa-list"></i></a>
	   		
	   </div>
	</header>
	
  @yield("content")
	
    <div class="zi_news_x">
      <div class="al_new clearfix">
        <div class="left">
          <a href="/news"><span>新闻</span></a>
        </div>
        <div class="right">
          <ul class="clearfix">
            @foreach($mainnews as $mainnew)
            <li><a href="/newshow/{{$mainnew->id}}">{{$mainnew->title}}</a></li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  
    <!--footer  start-->
    <footer class="footer">
		<div class="foot_con">
			<div class="zhu_c clearfix">
				<ul class="ul_1 clearfix">
					<li>
            <a href="/team" class="a_tit">战略与品牌</a>
            @foreach($mainteamlms as $mainteam)
            <a href="/team/{{$mainteam->id}}">{{$mainteam->position}}</a>
            @endforeach
          </li>
          <li>
            <a href="/prolm" class="a_tit">主营业务</a>
           <!--  @foreach($mainprolms as $mainprolm)
            <a href="/prolm/{{$mainprolm->id}}">{{$mainprolm->title}}</a>
            @endforeach -->
          </li>
          <li>
            <a href="/pro" class="a_tit">公司介绍</a>
            @foreach($mainprolms as $mainprolm)
            <a href="/pro/{{$mainprolm->id}}">{{$mainprolm->title}}</a>
		   			@endforeach
          </li>
          <li>
						<a href="case.html" class="a_tit">新闻资讯</a>
						@foreach($mainnewlms as $mainnewlm)
              <a href="/news/{{$mainnewlm->id}}">{{$mainnewlm->title}}</a>
		   			@endforeach
					</li>
				
				</ul>
				<div class="ul_2">
          <div class="left_text">
          <a href="/contact" class="ying_tit">CONTACT</a>
					<a href="/contact" class="a_tit">联系我们</a>
					<span>{{$topadd}}</span>
					<span>电话：<a href="tel:{{$toptel}}">{{$toptel}}</a></span>
					<span class="icons">							
				<!-- <div class="bdsharebuttonbox">
					<a href="javascript:;" data-cmd="sqq"><img src="images/icon-qq.png" class="vcenter" alt=""></a>
					<a href="javascript:;" data-cmd="sqq"><img src="images/icon-qq.png" class="vcenter" alt=""></a>
					<a href="javascript:;" data-cmd="sqq"><img src="images/icon-qq.png" class="vcenter" alt=""></a>
					<a href="javascript:;"class="bds_more" data-cmd="more"><img src="images/icon-jia.png" class="vcenter" alt="" /></a>	
				</div>  
			<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdPic":"","bdStyle":"0","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
					</span> -->
          </div>
           <div class="contact_con clearfix">
            <div class="left_img margin-left-30">
              <div class="pic">
                <img src="/uploads/{{$wximg}}" alt="" class="vcenter"/>
                <i></i>
              </div>
            </div>
          </div> 
          
				</div>
        
			</div>	
		</div>
		<div class="copy_z">
			<div class="container">
				<div class="left">
					<span class="co_zi">{{$copyright}}</span> <!-- <a href="map.html" class="m1">站点地图</a> -->
				</div>
				
				<!--<div class="right">
					  <a href="map.html" class="m2">站点地图</a> 
					<a href="http://www.71360.com/" target="_blank"><img src="images/yu.png" alt=""></a>
					&nbsp;
					<span class="er_show">
						<img src="images/er.png" alt="" />
						<img src="images/erwei.png" alt="" class="er_img">
					</span>
					
				</div>
        -->
			</div>
		</div>
	</footer> 
    <!--footer  end-->

	<!--移动端  Mmenu-->
	<nav id="mmenu">
		<ul>
			<!-- <li class="clear zy_q">
        <a href="" class="left">简体中文</a> 
        <a href="" class="left">English</a>
      </li> -->
			<li><a href="/">首页</a>				
			</li>
              <li><a href="/team" class="active">团队介绍</a>
		   					<ul>
		   						@foreach($mainteamlms as $mainteam)
                  <li><a href="/team/{{$mainteam->id}}">{{$mainteam->position}}</a></li>
                  @endforeach
		   					</ul>
		   				</li>
		   				<li><a href="/prolm">服务项目</a>
		   					<ul>
		   						@foreach($mainprolms as $mainprolm)
                  <li><a href="/prolm/{{$mainprolm->id}}">{{$mainprolm->title}}</a></li>
                  @endforeach
		   					</ul>
		   				</li>
		   				<li><a href="/pro">案例展示</a>
		   					<ul>
		   						@foreach($mainprolms as $mainprolm)
                  <li><a href="/pro/{{$mainprolm->id}}">{{$mainprolm->title}}</a></li>
		   						@endforeach
                </ul>
		   				</li>
		   				<li><a href="/news">新闻资讯</a>
		   					<ul>
                  @foreach($mainnewlms as $mainnewlm)
                  <li><a href="/news/{{$mainnewlm->id}}">{{$mainnewlm->title}}</a></li>
		   						@endforeach
		   					</ul>
		   				</li>
		   				<li><a href="/contact">联系我们</a>
		   				</li>
		</ul>
	</nav>	
		
</div>	

<!--Include Js-->
<script src="http://apps.bdimg.com/libs/jquery/1.8.3/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<!--移动端导航-->
<script src="/js/jquery.mmenu.all.min.js" type="text/javascript" charset="utf-8"></script>
<!--slick-->
<script src="/js/slick.min.js" type="text/javascript" charset="utf-8"></script>
<script src="/js/wow.js" type="text/javascript" charset="utf-8"></script> 
 
<!--placeholder-->
<script src="/js/jquery.placeholder.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
	$(function(){ $('input, textarea').placeholder(); });
</script>
<script src="/js/public.js" type="text/javascript" charset="utf-8"></script>
<!--<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>-->

<script src="http://vjs.zencdn.net/6.2.8/video.js"></script>

</body>
</html>
