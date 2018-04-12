@extends("layout.main")

@section("content")	
  <div class="crumbs">
		<div class="centerBlock">您当前的位置：<a href="/">首页 </a>  > <a href="/news">新闻资讯</a></div>
	</div>
	<div class="comon_top">
		<div class="top_title">
			<div class="hh1">新闻资讯</div>
			<div class="hh2">报关、报检/国际联运/转关运输/综合保税业务/国际运输/国际贸易/货物配送</div>
			<div class="hh3">
      Customs clearance / transport / transit / transport / international comprehensive bonded business / international trade / goods distribution
      </div>
    </div>
		<div class="top_nav">
			@foreach ($newlms as $newlm)
      <a href="/team/{{ $newlm->id }}" 
        @if ($lm == $newlm->id)
          class="active"
        @endif
      >
      <span>{{ $newlm->title}}</span></a>
      @endforeach
     
		</div>                                                                     	
	</div>
	<div class="news_con clearfix">
		<ul class="clearfix">
			
      @foreach($newcos as $newco)
      <li>
				<a href="/newshow/{{$newco->id}}">
					<div class="pic"> 
						<img src="/uploads/{{$newco->img}}" alt="" class="vcenter" />
						<i></i>
					</div>
					<div class="txt">
						<h3>{{$newco->title}}</h3>
						<div class="time">{{$newco->updated_at}}</div>
						<p>
             
            </p>
					</div>
				</a>
			</li>
			@endforeach
      
		</ul>
		{{ $newcos->links() }}

	</div>
@endsection("content")