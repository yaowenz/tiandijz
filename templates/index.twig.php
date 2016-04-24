{% extends 'layout.twig.php' %}
{% block content %}
<style type="text/css">
  *{ margin:0; padding:0; }

  ul,li{ list-style: none;}
  .lubo{ width: 100%; min-width:1080px;clear: both; position: absolute; height:550px;z-index: 2;}
  .lubo_box{ position: relative; width: 100%; height:368px; }
  .lubo_box li{ float: left;position: absolute; top: 0; left: 0; width: 100%; height:550px; opacity: 0;filter:alpha(opacity=0);}
  .lubo_box li a{ display: block;width: 100%;  height: 100%;background-size:100% ;}

  /*圆点*/
  .cir_box{ overflow: hidden; position: absolute; z-index: 100;}
  .cir_box li{ float: left; width: 15px; height: 15px;border-radius: 50%;  margin:0 5px; cursor: pointer; background: #fff; opacity: 0.8;filter:alpha(opacity=80);}
  .cir_on{ background: #f08200 !important;}
  body {background:#fff}
</style>
<div class="lubo">
  <ul class="lubo_box">
    <li style="opacity: 1;filter:alpha(opacity=100);" class="index slider slider-1">
    	<div class="main">
			<div class="text">
				<img src="{{baseUrl}}/images/banner-1-text.png" width="500" alt="流程规范 诚信服务;签约上单，不加价，不改服务内容">
			</div>
       	</div>
    </li>
    <li class="index slider slider-2">
    	<div class="main">
			<div class="text">
				<img src="{{baseUrl}}/images/banner-2-text.png" width="530" alt="信息化管理 智能服务;海量数据，迅速为您挑选合适家政员">
			</div>
		</div>
    </li>
    <li class="index slider slider-3">
    	<div class="main">
       		<div class="text">
				<img src="{{baseUrl}}/images/banner-3-text.png" width="500" alt="全程跟踪 优质服务;定期回访，持续服务">
			</div>
       	</div>
    </li>
  </ul>
</div>
{% include 'header.twig.php' %}   
<div class="main myService">
	<h2>我们的服务</h2>
	<p>家政员档案严格把关，客户评价终身相伴，用我们的专业换取您的满意</p>
	<div class="myService-img">
		<a href="{{baseUrl}}/cleaning"><img src="{{baseUrl}}/images/page7-2.png" /></a>
		<a href="{{baseUrl}}/caring"><img src="{{baseUrl}}/images/page8-2.png" /></a>
		<a href="{{baseUrl}}/cleaning"><img src="{{baseUrl}}/images/page3-2.png" /></a>
		<a href="{{baseUrl}}/fulltime"><img src="{{baseUrl}}/images/page4-2.png" /></a>
		<a href="{{baseUrl}}/hourly"><img src="{{baseUrl}}/images/page5-2.png" /></a>
		<a href="javascript:;"><img src="{{baseUrl}}/images/page6-2.png" /></a>
	</div>
	<div style="text-align:center;padding-bottom:30px">
		<img src="{{baseUrl}}/images/service-slogon.png" width="500">
	</div>
</div>   
<div class="aspects">
	<div class="main">
		<h2>线下线上结合&nbsp;&nbsp;全方位服务更便捷</h2>
		<p style="font-size:16px;margin-bottom:10px">实时浏览家政员档案，随意挑选</p>
		<p>通过线上平台，您可以根据您的喜欢好，挑选符合您 要求的家政员。同时查看她的视频简历，满意后在线签约，</p>
		<p>透明、放心、快捷。</p>
		<div class="qu">
			<div><span>提交需求<br />喜好筛选</span></div>
			<img src="{{baseUrl}}/images/sj.png" height="15px" />
			<div><span>视频简历<br />满意签约</span></div>
			<img src="{{baseUrl}}/images/sj.png" height="15px" />
			<div><span>定期回访<br />持续跟踪</span></div>
		</div>
		<img src="{{baseUrl}}/images/pc.png" class="pc" />
	</div>
</div>
<div class="main customer">
	<div class="l">
		<h2>我们认真对待每一个客户</h2>
		<div>
			<p>天地家政为我们安排了驾驶员金先生，做事非常仔细，驾驶技能出色，对上海的线路相当熟悉，他开车我们相当放心。而且他还烧了一手不错的上海菜，在我家接待客人的时候帮了很大的忙。是为非常出色的人才。</p>
			<span style="padding-left:10px">（银行经理）殷太太 </spanpadding-left:10px>
		</div>
		<div>
			<p class="last">贵公司的客户顾问英文非常的流利，同时也非常的专业化，同时提供菲佣的素质非常的高，衷心希望天地家政越做越好。 </p>
			<span class="last">（外企代表）RICO </span>
		</div>
	</div>
	<div class="r">
		<div id="yxh_article">
		   	<div class="slider_box" id="slider_name"> 
				<div class="mask"></div>	 
				<ul class="silder_con">	
					<li class="silder_panel"><img src="{{baseUrl}}/images/bg.png" width="460px"/></li>
					<!-- User Comments Sliders 
					<li class="silder_panel"><img src="{{baseUrl}}/images/bg.png" width="460px"/></li>
					<li class="silder_panel"><img src="{{baseUrl}}/images/bg.png" width="460px"/></li>
					 -->
				</ul>	
				<!-- 
				<ul class="silder_nav dec">     		
					<li></li>
					
					<li></li>
					<li></li>
					
				</ul>
				 -->
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
</div>
<div class="flow main">
	<img src="{{baseUrl}}/images/awards.png" />
</div>
<!--
<div class="mapBox">
	<div class="main">
		<div class="l">
		<img src="{{baseUrl}}/images/map.png" />
	</div>
	<div class="r">
		<h2>服务网点</h2>
		<ul>
			<li class="now">徐汇区
				<p>021-61250171</p>
			</li>
			<li>杨浦区
				<p>021-61250171</p>
			</li>
			<li>黄浦区
				<p>021-61250171</p>
			</li>
			<li>嘉定区
				<p>021-61250171</p>
			</li>
			<li>浦东新区
				<p>021-61250171</p>
			</li>
		</ul>
	</div>
	<div class="clearfix"></div>
	</div>
</div>
-->
<div class="clearfix"></div>
<script type="text/javascript">
$(function(){
    $(".lubo").lubo({ });
    $('li.nav-index').addClass('now');
})
</script>
{% endblock %}