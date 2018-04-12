@extends("layout.main")

@section("content")	
  <div class="crumbs">
		<div class="centerBlock">您当前的位置：<a href="/">首页 </a>  <a href="/team">战略与品牌</a></div>
	</div>
	<div class="comon_top">
		<div class="top_title">
			<div class="hh1">战略与品牌</div>
			<!-- <div class="hh2">为您提供舒适居家环境，倡导高品质生活，提升行业服务标准！</div> -->
			<div class="hh2">How many people our team or our company have , when our team or company begin . What we
should do in future. Wo will have a introduce for every one.</div>
		</div>
		<div class="top_nav">
			<!-- @foreach ($teamlms as $teamlm)
      <a href="/team/{{ $teamlm->id }}" 
        @if ($lm == $teamlm->id)
          class="active"
        @endif
      >
      <span>{{ $teamlm->position}}</span></a>
      @endforeach -->
     
		</div>                                                                     	
	</div>                                                   
	<div class="team_con clearfix">
		 <p>针对从凭祥综合保税区（友谊关口岸）往越南出口的各类货物，提供整车货物出口报关、报检服务，在国家法律、法规和政策许可的货物均提供出口报关报检服务。
　　凭祥境内有友谊关口岸（公路）、凭祥口岸（铁路）2个国家一类口岸，及平而关二类口岸；另有4个货物出入境通道（边民互市点），分别为：浦寨（弄怀）、叫隘、平而、油隘，是广西沿边口岸数量最多，种类最全，规模最大的边境口岸城市。
　　同时我司全程代办汽车运输至凭祥友谊关（凭祥综合保税区）、越南零公里相关手续，详情可来电咨询。服务收费由我司代缴，包含其他行政部门、各监管部门、凭祥综合保税区收取的费用、货物运输费、装卸费等，按实际操作收取结算。由客户预支费用代缴后结算。
　　业务娴熟，精诚合作，欢迎来电咨询。
		</p> 
	
    
    <ul class="team_ul clearfix">
			@foreach ($teams as $team)
      <li>
				<a href="">
					<div class="pic">
						<img src="/uploads/{{ $team->picture }}" alt="" class="vcenter"/>
						<i></i>
					</div>										
					<div class="name_t">
						<span>{{ $team->job }}</span>
						<span>{{ $team->name }}</span>		
					</div>
				</a>
			</li>
			@endforeach
      
			
		</ul>
		
    <!-- {{ $teamcos->links() }} -->
	</div>

@endsection("content")