{% extends 'layout.twig.php' %}
{% block content %}
{% include 'header.twig.php' %}   
<style>
body {background-color:#E8ECED}
</style>
<img src="images/bg-7.jpg" class="inner top bg" />
<div class="main container">
	<div class="nav">
		<a href="#serve"  class="sp now"><span style="line-height: 20px;">服务<br />内容</span></a>
		<a href="#price"><span>价格</span></a>
		<a href="#promise"><span>承诺</span></a>
		<a href="#process"><span>流程</span></a>
	</div>
	<div class="content">
		<div class="Tbox" id="serve">
			<img src="images/title.png" class="title"/>
			<h1 style="margin-bottom:30px">养老</h1>
			<div class="pension" >
				<h2>一般照料</h2>
				<img src="images/ddian.png" class="ddian"/>
				<div>
					<img src="images/pension-bg4.png" />
					<h3>喂食喂药</h3>
					<span>按照家人要求或遵医嘱定时为喂老人进食、吃药</span>
				</div>
				<div>
					<img src="images/pension-bg3.png" />
					<h3>烧饭保洁</h3>
					<span>烹饪可口的餐点,对居室进行基本清洁</span>
				</div>
				<div>
					<img src="images/pension-bg2.png" />
					<h3>按摩推拿</h3>
					<span>活血推拿、适时为卧床老人翻身</span>
				</div>
				<div>
					<img src="images/pension-bg1.png" />
					<h3>心理想疏导</h3>
					<span>提供读报、聊天、交流等服务</span>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="pension pension2">
				<h2>不能自理的老人/病人照料</h2>
				<img src="images/ddian.png" class="ddian"/>
				<div class="float-box2">
					<img src="images/pension-bg5.png" />
					<div class="txt2">
						<h3>污物处理</h3>
						<span>包括大小便的清理、擦拭和尿布替换洗澡擦身帮助老人沐浴、定时擦拭身体</span>
					</div>
				</div>
				<div class="float-box2" style="float:right">
					<img src="images/pension-bg6.png" />
					<div class="txt2">
						<h3>协助起居</h3>
						<span>协助起床就寝、更衣、洗漱、出门搀扶等</span>
					</div>
				</div>
			</div>
			<div class="pensionLast" >
				<h2>团队服务</h2>
				<div><img src="images/pension-bg7.png" />
				<ul>
					<li>根据病人情况量身制定护理方案</li>
					<li>资深专业护工护理</li>
					<li>专家团队定期上门回访评估</li>
				</ul>
				<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>				
		<div class="Tbox Tbox2" id="price">
			<h3>服务价格</h3>
			<table class="service">
				<colgroup><col width="108px" /><col width="82px" /><col width="82px" /><col width="82px" /><col width="82px" /><col width="82px" /><col width="82px" /></colgroup>
				<tr>
					<th>级别</th><th>价格</th><th>工作经验</th><th>家务</th><th>幼儿护理</th><th>营养餐</th><th>早教技能</th>
				</tr>
				<tr>
					<td><img src="images/star1.png" class="star"/></td><td>4800元</td><td>2年以上</td><td><img src="images/iconfont-dui.png" /></td><td><img src="images/iconfont-dui.png" /></td><td></td><td></td>
				</tr>
				<tr>
					<td><img src="images/star2.png" class="star"/></td><td>5800元</td><td>3年以上</td><td><img src="images/iconfont-dui.png" /></td><td><img src="images/iconfont-dui.png" /></td><td></td><td></td>
				</tr>
				<tr>
					<td><img src="images/star3.png" class="star"/></td><td>6800元</td><td>4年以上</td><td><img src="images/iconfont-dui.png" /></td><td><img src="images/iconfont-dui.png" /></td><td><img src="images/iconfont-dui.png" /></td><td></td>
				</tr>
				<tr>
					<td><img src="images/star4.png" class="star"/></td><td>8800元</td><td>6年以上</td><td><img src="images/iconfont-dui.png" /></td><td><img src="images/iconfont-dui.png" /></td><td><img src="images/iconfont-dui.png" /></td><td><img src="images/iconfont-dui.png" /></td>
				</tr>
			</table>
		</div>
		<!-- 服务承诺及流程 -->
		{% include 'service-standards.twig.php' %}
	</div>
	<!-- 在线预约 -->
	{% include 'order-reserve.twig.php' %}		
</div>
<div class="clearfix"></div>
<script type="text/javascript">
$(function(){
    $('li.nav-caring').addClass('now');
})
</script>
{% endblock %}