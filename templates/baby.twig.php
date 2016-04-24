{% extends 'layout.twig.php' %}
{% block content %}
{% include 'header.twig.php' %}   
<style>
body {background-color:#EDEEEE}
</style>
<img src="images/bg-6.jpg" class="inner top bg" />
<!--<div class="top-title">
	<div class="main">
		<h1>天地育儿嫂 育儿没烦恼</h1>
		<p>您提需求，我们迅速响应，信息化服务为您快速找人</p>
	</div>
</div>-->
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
			<h1>育儿嫂</h1>
			<p class="tit" style="margin-bottom:0px">我们提供专业的育儿嫂，帮助您照顾0-6岁宝宝的生活起居，活动安全，知识早教，品德引导。</p>
			<p class="tit" style="margin-top:0px">根据宝宝不同月龄的神经发育特点，家政员给予相应的训练指导和生活养护,包括以下几种：</p>
			<div class="TxtBox">
				<img src="images/jz6-22.png" />
				<div>
					<h2>生活护理</h2>
					<p>营养调配,母乳指导或奶粉定时喂养，辅食制作添加喂养，三浴(空气,阳光,水)及身体 护理,五官护理,居室卫生清洁,衣物清洗、餐具消毒,居室和户外安全活动。</p>
				</div>
			</div>
			<div class="TxtBox">
				<img src="images/jz6-02.png" />
				<div>
					<h2>教育行为</h2>
					<p>养成良好的生活习惯,有规律的吃喝、睡眠习惯、大小便,玩耍等。</p>
				</div>
			</div>
			<div class="TxtBox">
				<img src="images/jz6-13.png" />
				<div>
					<h2>智力开发</h2>
					<p>感知能力、模仿能力、语言能力及沟通交往能力的训练,情商开发,社会性行为的培养。</p>
				</div>
			</div>
			<div class="TxtBox">
				<img src="images/jz6-17.png" />
				<div>
					<h2>体能锻炼</h2>
					<p>循序渐进地做婴幼儿主动被动操和有益于婴幼儿身心健康的运动精细动作及大动作的训练。</p>
				</div>
			</div>	
			<div class="TxtBox theLast">
				<img src="images/jz6-18.png" />
				<div>
					<h2>协助保健</h2>
					<p>协助做好婴幼儿预防保健工作,接种“四苗”预防常见的六种常见病。</p>
				</div>
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
	<div class="clearfix"></div>		
</div> 
<script type="text/javascript">
$(function(){
    $('li.nav-baby').addClass('now');
})
</script>
{% endblock %}