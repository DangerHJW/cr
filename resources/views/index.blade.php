@extends("layout.main")

@section("content")	
 <!--banner  start-->
	<section class="banner">
	    @foreach($banners as $banner)
      <div>
        <a href="/">
          <img src="/uploads/{{$banner->img}}" alt="">
        </a>
      </div>
	    @endforeach
      
	</section>
	<!--banner end-->
	<div class="home_pro">
		<div class="pro_title">
			<span>Company introduction</span>
			<div class="t1">公司介绍</div>
			<p>多年的努力，潮润国际2004年获得崇左市“诚信企业”称号，同年还获得广西“重合同守信用企业”称号；2006年获得“全国百优报关企业”称号；2009年获得崇左市税务A类管理企业，并在2011年成为首批凭祥综合保税区入区企业。
			目前，安利泰公司有完善的管理制度，报关差错率较低，收费合理，在口岸有较强的综合实力，各项业务运转良好。跨国货物运输代理业务已经到达越南、老挝、柬埔寨、泰国等国家，公司的跨国货物运输代理业务正向东盟十国的目标发展。
			我们有信心、有能力为广大客商提供更高效、更便捷、更节省成本的物流服务。精诚合作，互利共赢！ </p>
			<!-- <span class="font_en">Villa decoration attention to indoor and outdoor environment of the overall planning and design, the people's pursuit of villa decoration from the simple design of luxury </span>
			<span class="font_en">decoration began to move closer to the human nature and high quality of construction technology.</span>
-->		</div>
		<div class="pro_com">
			
      @foreach($hotpros as $hotpro)
      <div>
				<div class="pic">
          <a href="/proshow/{{$hotpro->id}}">
            <img src="/uploads/{{$hotpro->cover}}" alt="" /><i></i>
          </a>
        </div>
				<div class="text-wrap">
					<a href="/proshow/{{$hotpro->id}}">
            <span class="num"></span>
            <span class="tt1"></span>
            <span class="tt2"></span>
          </a>
					<div class="txt">
						<a href="/proshow/{{$hotpro->id}}">
              <span class="num">{{$hotpro->title}}</span>
              <span class="tt1"></span>
              <span class="tt2"></span>
							<p>{{$hotpro->content}}</p>
						</a>
						<a href="/proshow/{{$hotpro->id}}" class="more"></a>
					</div>
				</div>						
			</div>
			@endforeach
      
		</div>
	</div>
<!--
  <section class="company">
		<div class="container">
			<ul class="clearfix">
				<li><a href="case.html"><img src="images/about_1.png" alt="" class="vcenter"/><i></i></a></li>
				<li>
					<a href="case.html" class="a_t">唯星婚纱摄影</a>
					<span class="font_en">Jindo wedding photography</span>
					<p>
						经过10余年的快速发展，唯星深刻理解未来数字营销内容与技术的融合之势，
						积极引进优秀的互联网技术、营销策略及内容创意专家，先后
						从IBM、微软、华为等知名IT企业引进大量优秀人才，目前公司逾千人规模.......
					</p>
					<a href="case.html" class="more"></a>
				</li>
				<li>
					<a href="news.html" class="a_t">金牌管家服务</a>
					<span class="font_en">the whole process of design services  </span>
					<p>我们坚持SPRING全程服务，拥有绿色家园只是你生活下一华章的开始
					24小时售后服务电话：<a href="tel:021-31265245">021-31265245</a>
					</p>
					<a href="news.html" class="more"></a>
				</li>
			</ul>
		</div>
	</section>

  <section class="home_team">
		<div class="top clearfix">
			<div class="l1_1">
				<a href="team.html">服务团队</a>
			</div>
			<div class="l1_2">
				秉承"整合数字资源,技术驱动营销"的理念，专注于数字营销技术、产品、资源、服务的创新与整合
			</div>
		</div>
		<ul class="clearfix team_tu"  id="ulul">
			@foreach($teamcos as $teamco)
      <li>
				<div class="pic">
          <img src="/uploads/{{ $teamco->picture }}" alt="" /><i></i>
        </div>
        <div class="c1">{{ $teamco->name }}</div>
        <div class="c2">{{ $teamco->job }}</div>
        <div class="c3">{{ $teamco->bio }}
        </div>
			</li>
      @endforeach
			<div class="xianshiqy">
        <div  class="zuo"></div>
        <div  class="you"></div>
        <b class="closed" id="team_closed">&nbsp;</b>
        <div class="biaotiss"></div>
        <div class="biao2tiss"></div>
        <div class="neirongss"></div>
      </div>		
		</ul>
    <script>
   $(document).ready(function() {
		var index = 0;
		function  huoqu(index){
				   var  biaoti =$("#ulul  li").eq(index).find(".c1").html(); 
				   var  biao2ti =$("#ulul  li").eq(index).find(".c2").html(); 
				   var  neirong =$("#ulul  li").eq(index).find(".c3").html(); 
				   $("#ulul  li .pic").eq(index).addClass("active").parent().siblings("li").find(".pic").removeClass("active")
					$(".biaotiss").html(biaoti) 
					$(".biao2tiss").html(biao2ti) 
					$(".neirongss").html(neirong)
					$(".xianshiqy").fadeIn()						
			}
       
	   $("#ulul  li").click(function(){
		    index = $(this).index();
		    huoqu(index)
		   });
		   $(".zuo").click(function(){
			if(index>=0){
					index-=1;
					huoqu(index)	
					
				}
			if(index==-1){
				    index+=14;
					huoqu(index)	
					
				}
			});
		$(".you").click(function(){
			if(index<=13){
					index+=1;
					huoqu(index)
					
			}
			if(index==14){
				    index-=14
					huoqu(index)
					
			}
			});
		$("#team_closed").click(function(){
			$(".xianshiqy").hide();
			 $("#ulul  li .pic").removeClass("active");
		})
		
    });
    </script>    
        
	</section>
  
  -->
	<!-- <section class="home_news">
		<div class="container">
			<div class="home_top">
				<div class="zhong">最新资讯</div>
				<div class="ying">For Customers to provide professional information</div>
				<a href="news.html" class="more"></a>
			</div>
			<ul class="clearfix">
				<li><a href="news.html">《中国广告》杂志专访唯星总裁赵旭隆：技术驱动营销 致力品效合一</a></li>
				<li><a href="news.html">唯星集团运营总裁张蓬先生受邀出席，并发表“数字创新，商业之‘</a></li>
				<li><a href="news.html">作为国内领先的数字营销企业，唯星集团荣获此次IAI国际广告奖变革</a></li>
				<li><a href="news.html">唯星荣誉榜——2016上半年盘点唯星荣誉榜上半年盘点</a></li>
				<li><a href="news.html">中国传媒大学广告学院联合主办的IAI国际创享节暨第16届IAI国际</a></li>
				<li><a href="news.html">年度最佳营销公司”，是对唯星产品、技术、服务及团队等</a></li>
				<li><a href="news.html">唯星集团运营总裁张蓬受邀出席IAI国际创享节并发表主题演讲商业之智</a></li>
				<li><a href="news.html">任鲁豫等在内的央视著名主持人，如此豪华阵容</a></li>
				<li><a href="news.html">整体实力的充分肯定，同时也预示着技术型数字营销企业已经引领行业</a></li>
			</ul>
		</div>
	</section> -->
  <section class="home_team">
		<div class="top clearfix">
			<div class="l1_1">
				<a href="team.html">公司资质</a>
			</div>
			<div class="l1_2">
				诚信企业
			</div>
		</div>
		<ul class="clearfix team_tu"  id="ulul">
			@foreach($zzs as $zz)
      <li>
				<div class="pic">
          <img src="/uploads/{{ $zz->img }}" alt="" /><i></i>
        </div>
        <div class="c1">{{ $zz->title }}</div>
        <div class="c2"><img src="/uploads/{{ $zz->img }}" alt="" /></div>
        <div class="c3">
        
        </div>
			</li>
      @endforeach
			<div class="xianshiqy">
        <div  class="zuo"></div>
        <div  class="you"></div>
        <b class="closed" id="team_closed">&nbsp;</b>
        <div class="biaotiss"></div>
        <div class="biao2tiss"></div>
        <div class="neirongss"></div>
      </div>		
		</ul>
    <script>
   $(document).ready(function() {
		var index = 0;
		function  huoqu(index){
				   var  biaoti =$("#ulul  li").eq(index).find(".c1").html(); 
				   var  biao2ti =$("#ulul  li").eq(index).find(".c2").html(); 
				   var  neirong =$("#ulul  li").eq(index).find(".c3").html(); 
				   $("#ulul  li .pic").eq(index).addClass("active").parent().siblings("li").find(".pic").removeClass("active")
					$(".biaotiss").html(biaoti) 
					$(".biao2tiss").html(biao2ti) 
					$(".neirongss").html(neirong)
					$(".xianshiqy").fadeIn()						
			}
       
	   $("#ulul  li").click(function(){
		    index = $(this).index();
		    huoqu(index)
		   });
		   $(".zuo").click(function(){
			if(index>=0){
					index-=1;
					huoqu(index)	
					
				}
			if(index==-1){
				    index+=14;
					huoqu(index)	
					
				}
			});
		$(".you").click(function(){
			if(index<=13){
					index+=1;
					huoqu(index)
					
			}
			if(index==14){
				    index-=14
					huoqu(index)
					
			}
			});
		$("#team_closed").click(function(){
			$(".xianshiqy").hide();
			 $("#ulul  li .pic").removeClass("active");
		})
		
    });
    </script>    
        
	</section>
   
  <section>
    <div class="container">
			<div class="home_top">
				<div class="zhong">国际品牌合作伙伴</div>
				<div class="ying">International brand partners</div>			
			</div>
		</div>
    <ul class="clearfix team_tu parent">
			@foreach($partners as $partner)
      <li>
				<div class="pic">
          <img src="/uploads/{{$partner->logo}}" alt="" /><i></i>
        </div>
			</li>
      @endforeach
    </ul>
  </section>

 <!-- 
  <section class="hehuo">
		<div class="container">
			<div class="home_top">
				<div class="zhong">国际品牌合作伙伴</div>
				<div class="ying">International brand partners</div>			
			</div>
		</div>
		<div class="hehuo_con">
			<div class="nei">
				@foreach($partners as $partner)
        <div>
					<a href="">
						<img src="/uploads/{{$partner->logo}}" alt="" class="vcenter"/><i></i>
					</a>
				</div>
        @endforeach
			</div>
		</div>
	</section> 	
-->
@endsection("content")