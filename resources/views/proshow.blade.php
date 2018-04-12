@extends("layout.main")

@section("content")	
  <div class="crumbs">
		<div class="centerBlock">您当前的位置：<a href="/">首页 </a>  > <a href="/prolm">案例展示</a></div>
	</div>
	<div class="comon_top">
		<div class="top_title">
			<div class="hh1">公司介绍</div>
			<div class="hh2">报关、报检/国际联运/转关运输/综合保税业务/国际运输/国际贸易/货物配送</div>
			<div class="hh3">
      Customs clearance / transport / transit / transport / international comprehensive bonded business / international trade / goods distribution
      </div>
    </div>	
	</div>
	<div class="case_show"> 
		<div class="kefu_show clearfix">
			<div class="left_img" id="left_img">
				<img src="/uploads/{{ $pro[0]->cover}} " alt="" class="vcenter" />
				<i></i>
			</div>
			<div class="right_img">
				<div class="pe_name">{{ $pro[0]->title }}</div>
				<div class="pa_time">{{ $pro[0]->text1 }}</div>
				<div class="pa_di">
					<span>{{ $pro[0]->text2 }}</span>
					{{ $pro[0]->text3 }}
				</div>
				<ul class="kehu_s_xiao clearfix">
					
          <li class="active">
						<img src="/uploads/{{ $pro[0]->cover}}	" alt="" class="vcenter"/>
						<i></i>
					</li>
					
          @foreach($painters as $painter)
          <li>
						<img src="/uploads/{{ $painter }}" alt="" class="vcenter"/>
						<i></i>
					</li>
					@endforeach

				</ul>
			</div>
		</div>
		
		
		<p> {{ $pro[0]->content}} </p>	
   <!--
		<div class="home_top">
			<div class="zaiyu">在线预约</div>
			<h5>为传统企业互联网商业转型各个阶段提供全方位应用支撑</h5>	
		</div>		
		<div class="feedback_con clearfix zai_liu">
			<div class="mes-kk clearfix"> 
	            <div class="input-wrap">
	                <input placeholder="您的姓名">
	                <span>*</span>
	            </div>
	            <div class="input-wrap">
	                <input placeholder="联系电话">
	                <span>*</span>
	            </div>
	            <div class="input-wrap">
	                <input placeholder="联系地址">
	                <span>*</span>
	            </div>
	            <div class="input-wrap">
	                <input placeholder="邮箱">
	                <span>*</span>
	            </div>
	
	            <textarea placeholder="留言内容"></textarea>
	            <span>*</span>
	            <input placeholder="验证码" class="yanzheng">
	            <div class="yz"><img src="/images/yan2.png" class="vcenter"> </div>
	            <a href="#">看不清换一张</a>
	        </div>
	         <input type="submit" value="立即提交" class="submit">
		</div>	  
		<ul class="prev_next clearfix">
			<li><a href="news.html">上一篇：无</a></li>
			<li><a href="news.html">下一篇：无</a></li>
		</ul>
    -->
		<div class="home_top">
			<div class="zhao_xg">视频</div>
		</div>
		<ul class="xiang_xi clearfix">
			@foreach($videos as $video)
      <li>
				<a href="/provideo/{{$video->id}}">
					<img src="/uploads/{{$video->cover}}" alt="" class="vcenter"/>
					<i></i>
				</a>
			</li>
      @endforeach
		</ul>
	</div>

@endsection("content")