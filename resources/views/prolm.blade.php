@extends("layout.main")

@section("content")	
  <div class="crumbs">
		<div class="centerBlock">您当前的位置：<a href="/">首页 </a>  > <a href="/prolm">服务项目</a></div>
	</div>
	<div class="comon_top">
		<div class="top_title">
			<div class="hh1">WHAT WE DO</div>
			<div class="hh2">报关、报检/国际联运/转关运输/综合保税业务/国际运输/国际贸易/货物配送</div>
			<div class="hh3">
      Customs clearance / transport / transit / transport / international comprehensive bonded business / international trade / goods distribution
      </div>
    </div>
		<div class="top_nav">
			@foreach ($prolms as $prolm)
      <a href="/prolm/{{ $prolm->id }}" @if ($id == $prolm->id) class="active" @endif >
      <span>{{ $prolm->title}}</span></a>
      @endforeach
		</div>                                                                     	
	</div>
	<div class="about_con">
		<div class="ahout_1">{{$prolmc[0]->title}}</div>
		<p>{!! $prolmc[0]->content !!}</p> 
	</div>
  <!-- 多图 -->
  @foreach ($prolmcos as $prolmco)
  <div class="about_con">
		<p>{{$prolmco->content}}</p>
	</div>
    @foreach ($prolmco->serimgs as $img)
    <div class="about_img">  
      <img src="/uploads/{{$img}}" alt="" class="vcenter" style="position:static;width:100%;height:100%;"/>
      <i></i>
    </div>
    @endforeach
  @endforeach
@endsection("content")