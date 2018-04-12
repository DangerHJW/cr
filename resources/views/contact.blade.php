@extends("layout.main")

@section("content")	
  <div class="crumbs">
		<div class="centerBlock">您当前的位置：<a href="/">首页 </a>  > <a href="/contact">联系我们</a> > <span>联系我们</span></div>
	</div>
	<div class="comon_top">
		<div class="top_title">
			<div class="hh1">联系我们</div>
			<div class="hh2">报关、报检/国际联运/转关运输/综合保税业务/国际运输/国际贸易/货物配送</div>
			<div class="hh3">
      Customs clearance / transport / transit / transport / international comprehensive bonded business / international trade / goods distribution
      </div>
		</div>
		<div class="top_nav">
			<a href="/contact"  class="active"><span>联系我们</span></a>
      <!-- <a href="feedback.html"><span>在线留言</span></a> -->
		</div>                                                                     	
	</div>
	<div class="contact_con  clearfix">
  <div style="width:100%; margin:auto auto;text-align:center;">
		<div class="left_img">
			<div class="pic">
				<img src="/uploads/{{$weixingimg}}" alt="" class="vcenter"/>
				<i></i>
			</div>
			<span>微信咨询</span>
		</div>
		<ul class="contact_nei">
      <li></li>
      <li>通信地址：{{$sjaddress}} </li>
	  <li>（报关单证请使用EMS、顺丰快递至此地址）</li>
      <li>电话：<a href="tel:{{$sjtel}}">{{$sjtel}}</a></li>
	  <li>  QQ：3140536818  肖生</li>
      <li></li>
      <li>报关现场：{{$ypaddress}} </li>
      <li>电话：<a href="tel:{{$yptel}}">{{$yptel}}</a></li>
	  <li>邮政编码:532600</li> 
	  
		</ul>
    </div>
	</div>
	<div class="contact_map">
				<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=6d88e38ab7f507ee19cec46443691d95"></script>
					<div id="map"></div>
					<script type="text/javascript">

			    // 百度地图API功能
			    var map = new BMap.Map("map");    // 创建Map实例
			    var point = new BMap.Point(106.724393,21.984705);   //坐标拾取网址：http://api.map.baidu.com/lbsapi/getpoint/index.html
			
			    var marker = new BMap.Marker(point);  // 创建标注
			    var mapStyle = {style:"dark"};
    			map.setMapStyle(mapStyle);

			    var top_left_control = new BMap.ScaleControl({anchor: BMAP_ANCHOR_TOP_LEFT});// 左上角，添加比例尺
			    var top_left_navigation = new BMap.NavigationControl();  //左上角，添加默认缩放平移控件
			
			    marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
			    map.centerAndZoom(point, 18);  // 初始化地图,设置中心点坐标和地图级别
			    map.addOverlay(marker);               // 将标注添加到地图中
			    map.enableScrollWheelZoom(true);     //开启鼠标滚轮缩放
			    map.addControl(new BMap.MapTypeControl());   //添加地图类型控件
			    map.setCurrentCity("深圳");          // 设置地图显示的城市 此项是必须设置的
				
			
			
			    window.onresize = function(){
			
			        map.centerAndZoom(point, 15);  // 重置窗口的时候 重新获取中心点坐标的位置
			
			    }

		    map.addControl(top_left_control);
		    map.addControl(top_left_navigation);
		    /*map.addControl(top_right_navigation);  */
			</script>
	</div>
	

@endsection("content")