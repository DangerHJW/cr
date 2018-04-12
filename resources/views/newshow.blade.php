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
	</div>
	<div class="news_show clearfix">
    <div class="news_s_top">
			<h3>{{ $newco[0]->title }}</h3>
			<div>
				<span> {{ $newco[0]->updated_at }}</span>       
			</div>
		</div>

    {!! $newco[0]->content !!}  

    <!--<iframe  width = 100% height=1000 marginheight=0 marginwidth=0  src="http://mp.weixin.qq.com/s/1VvtDUauK8Z8YIUA-Q4jIA"></iframe>
		 <div class="news_s_top">
			<h3>秉承"整合数字资源,技术驱动营销"的理念</h3>
			<div>
				<span>来源: 婚纱摄影</span><span>点击量: 360 </span><span> 2015-06-16 16:25:33</span>       
			</div>
		</div>
		<p>
			经过10余年的快速发展，唯星深刻理解未来数字营销内容与技术的融合之势
			，积极引进优秀的互联网技术、营销策略及内容创意专家，先后从IBM、微软、华为等知名IT企业引
			进大量优秀人才，目前公司逾千人规模，上海作为总部，同步辐射
			北京、深圳、香港、江浙、内蒙等全国分/子公司，目前已服务企业数量达上万家
		</p>
		<div class="show_img">
			<img src="images/show_01.png" alt="" />
			<img src="images/show_02.png" alt="" />
			<img src="images/show_03.png" alt="" />
		</div>
		<p>
			唯星成立于2005年，秉承"整合数字资源,技术驱动营销"的理念，
			专注于数字营销技术、产品、资源、服务的创新与整合，为传统企业互联网商业转型各个阶段提供全方位应用支撑。
		</p>
		<p>
			经过10余年的快速发展，唯星深刻理解未来数字营销内容与技术的融合之势，积极引进优秀
			的互联网技术、营销策略及内容创意专家，先后从IBM、微软、华为等知名IT企业引进大量
			优秀人才，目前公司逾千人规模，上海作为总部，同步辐射北京、深圳、香港、江浙、内
			蒙等全国分/子公司，目前已服务企业数量达上万家。
		</p>
		<p>
			在科技创新领域，唯星集团分别与复旦大学、上海大学、华师大等知名院校达成战略伙伴关系
			，分别成立了云计算、大数据、智能营销等不同领域的产学研合作平台。2015年6月，唯星
			在美国硅谷成立研发中心，开拓海外科研基地；自成立至今唯星集团已取得60个软件著作
			权及1项发明专利；同时，经过多年在技
			术创新领域的探索与积累，唯星集团目前已获得虹口区科技小巨人企业、高新技术企业、双软认证企
			业、院士专家工作站、上海名牌企业等多项荣誉资质称号。
		</p>
		<p>
			高端别墅设计是一门大学问，需要有专业的设计师来全方位的设计指导，需要根据相关的经验来把握住重点，
			解除人们产生的困惑和忧虑。 总之对于豪华别墅装修材料的选择，我们
			需要在秉承绿色、环保、低碳的基础上抓好质量，做到质量与环保同时兼备。
		</p>
		<ul class="prev_next clearfix">
			<li><a href="news.html">上一篇：无</a></li>
			<li><a href="news.html">下一篇：无</a></li>
		</ul> -->
	</div>
@endsection("content")