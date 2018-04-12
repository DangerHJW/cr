@extends("layout.main")

@section("content")	
  <div class="crumbs">
		<div class="centerBlock">您当前的位置：<a href="/">首页 </a>  > <a href="/pro">案例展示</a></div>
	</div>
	<div class="comon_top">
		<div class="top_title">
			<div class="hh1">公司介绍</div>
			<div class="hh2">报关、报检/国际联运/转关运输/综合保税业务/国际运输/国际贸易/货物配送</div>
			<div class="hh3">
      Customs clearance / transport / transit / transport / international comprehensive bonded business / international trade / goods distribution
      </div>
    </div>
		<div class="top_nav">
    <a href="/pro"
      @if ($lm == "all")
          class="active"
      @endif
    ><span>全部</span></a>
		@foreach ($prolms as $prolm)
      <a href="/pro/{{ $prolm->id }}" 
        @if ($lm == $prolm->id)
          class="active"
        @endif
      >
      <span>{{ $prolm->title}}</span></a>
      @endforeach
    </div>
		<!-- <div class="top_nav_er clearfix">
			<ul>
				<li><a href="/pro">全部</a></li>
				
        @foreach ($prolms as $prolm)
        <li><a href="/pro/{{ $prolm->id}}">{{ $prolm->title }}</a></li>
        @endforeach
			</ul>
		</div> -->
	</div>
	<div class="case_nei">
		<ul class="clearfix">
      @foreach ($procos as $proco)
      <li>
				<div class="pic">
          <a href="/proshow/{{$proco->id}}">
            <img src="/uploads/{{$proco->cover}}" alt="" /><i></i>
          </a>
        </div>
				<div class="txt">
					<a href="/proshow/{{$proco->id}}">
            <span class="num">01</span>
            <span class="tt1">{{ $proco->title }}</span>
            
            <p>{{ $proco->content }}</p>
          </a>
					<a href="" class="more"></a>
				</div>
			</li>
      @endforeach
		</ul>
    
    {{ $procos->links() }}
    
		<!-- <section class="pageing">
			<a href="">«</a>
			<a href="">‹</a>
			<a href="javascript:;" class="active">1</a>
			<a href="">2</a>
			<a href="">3</a>
			<a href="">4</a>
			<a href="">5</a>
			<a href="">6</a>
			<a href="">7</a>
			<a href="">8</a>
			<a href="">9</a>
			<a href="">10</a>
			<a href="">›</a>
			<a href="">»</a>
		</section> -->
		
	</div>

 @endsection("content")