@extends("layout.main")

@section("content")	
  <div class="crumbs">
		<div class="centerBlock">您当前的位置：<a href="/">首页 </a>  <a href="/prolm">战略与品牌</a></div>
	</div>
	<div class="comon_top">
		<div class="top_title">
			<div class="hh1">{{ $teamco[0]->name }}</div>
			 <div class="hh2">{{ $teamco[0]->job }}</div>
			<!--<div class="hh3">To provide a comfortable home environment for you,Promote high quality of life, improve the industry standard!</div> -->
		</div>	                                                                    	
	</div>                                                   
	<div class="team_con clearfix">
		<div class="team_show">
			<div class="img_s">
				<img src="/uploads/{{ $teamco[0]->picture }}" alt="" />
			</div>
			<p>{{ $teamco[0]->bio }}</p>
		
			<!-- <ul class="prev_next clearfix">
				<li><a href="news.html">上一篇：无</a></li>
				<li><a href="news.html">下一篇：无</a></li>
			</ul> -->
		</div>
		<div class="home_top">
			<div class="zhong">其他人员</div>
		</div>
		<ul class="clearfix team_ul">		
			@foreach($teamcos_oth as $teamco_oth)
      <li>
				<a href="/teamshow/{{$teamco_oth->id}}">
					<div class="pic">
						<img src="/uploads/{{$teamco_oth->picture}}" alt="" class="vcenter"/>
						<i></i>
					</div>										
					<div class="name_t">
						<span>{{$teamco_oth->name}}</span>
						<span>{{$teamco_oth->job}}</span>		
					</div>
				</a>
			</li>
			@endforeach
		</ul>
	</div>
	
	
@endsection("content")