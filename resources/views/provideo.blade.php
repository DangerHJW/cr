@extends("layout.main")

@section("content")	
  <div class="crumbs">
		<div class="centerBlock">您当前的位置：<a href="/">首页 </a>  > <a href="/prolm">案例展示</a></div>
	</div>
	<div class="comon_top">
		<div class="top_title">
			<div class="hh1">视频展示</div>
			<div class="hh2">报关、报检/国际联运/转关运输/综合保税业务/国际运输/国际贸易/货物配送</div>
			<div class="hh3">
      Customs clearance / transport / transit / transport / international comprehensive bonded business / international trade / goods distribution
      </div>
    </div>	
	</div>
	<div class="case_show"> 

    <video id="my-video" class="video-js" controls preload="auto" width="640" height="264"
    poster="/uploads/{{ $video[0]->cover}}" data-setup="{}">
      <source src="{{ $video[0]->link}}" type='video/mp4'>
      <source src="" type='video/webm'>
      <p class="vjs-no-js">
        To view this video please enable JavaScript, and consider upgrading to a web browser that
        <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
      </p>
    </video>
		
		
		
	</div>

@endsection("content")