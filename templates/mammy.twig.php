{% extends 'layout.twig.php' %}
{% block content %}
{% include 'header.twig.php' %}  
<style>
body {background-color:#E8ECEB}
</style>
<img src="images/bg-4.jpg" class="inner top bg" />
<!--<div class="top-title top-title-w">
	<div class="main">
		<h1>天地育儿嫂 育儿没烦恼</h1>
		<p>您提需求，我们迅速响应，信息化服务为您快速找人</p>
	</div>
</div>-->
<div class="main container">
	{% include 'content-nav-left.twig.php' %}
	<div class="content">
		<div class="Tbox" id="serve">
			<img src="images/title.png" class="title"/>
			<h1>月嫂</h1>
			<div class="top-yue">
				<div class="l">
					<img src="images/jz6-10.png"  />
					<h4>产妇护理</h4>
					<p>产褥期护理、乳房护理、母乳喂养指导、育婴知识传授</p>
					<p>月子餐、营养点心、催乳汤</p>
					<p class="theLast">产后塑身、产后形体恢复指导产后抑郁疏导等心理护理</p>
				</div>
				<div class="r">
					<img src="images/jz6-08.png" />
					<h4>新生儿护理</h4>
					<p>皮肤、脐带及五官护理，两便护理，衣物用具的清洗及消毒，尿布疹观察及处理</p>
					<p class="theLast">居室卫生护理，体温体重测量，黄疸观察及简单处理，睡眠习惯养成</p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="top-yue top-yue2">
				<div class="l">
					<img src="images/jz6-07.png" />
					<h4>新生儿潜能开发</h4>
					<p class="theLast">抚触，新生儿被动操，动作语言训练、居家游泳，音乐早教。</p>
				</div>
				<div class="r">
					<img src="images/jz6-06.png" />
					<h4>团队电话咨询及上门服务</h4>
					<p class="theLast">喂养指导，形体恢复指导，乳腺疏通，上门开奶</p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="Tbox Tbox2" id="price">
			<h3>服务价格</h3>
			<table class="service">
				<tr>
					<th width="35%">级别</th>
					<th>价格</th>
					<th>经验</th>
				</tr>
				<tr>
					<td class="align center">
						<img src="images/star-single.png"/>
					</td>
					<td>8800元</td>
					<td>5次</td>					
				</tr>
				<tr>
					<td class="align center">
						<img src="images/star-single.png"/>
						<img src="images/star-single.png"/>
					</td>
					<td>10800元</td>
					<td>5~15次</td>				
				</tr>
				<tr>
					<td class="align center">
						<img src="images/star-single.png"/>
						<img src="images/star-single.png"/>
						<img src="images/star-single.png"/>
					</td>
					<td>12800元</td>
					<td>15~20次</td>					
				</tr>
				<tr>
					<td class="align center">
						<img src="images/star-single.png"/>
						<img src="images/star-single.png"/>
						<img src="images/star-single.png"/>
						<img src="images/star-single.png"/>
					</td>
					<td>15800元</td>
					<td>20~30次</td>					
				</tr>
				<tr>
					<td class="align center">
						<img src="images/star-single.png"/>
						<img src="images/star-single.png"/>
						<img src="images/star-single.png"/>
						<img src="images/star-single.png"/>
						<img src="images/star-single.png"/>
					</td>
					<td>18800元</td>
					<td>30~40次</td>					
				</tr>
				<tr>
					<td class="align center" style="color:#EC8E21">
						金牌
					</td>
					<td>22800元</td>
					<td>40次以上</td>					
				</tr>
			</table>
			<p class="thelast" style="margin-top:15px">*整月实际服务按照26天计算（可选择连做或做六休一）</p>
			<p class="thelast">*平常休息日若需加班，加班费按照 1:1 计算（日服务费=月服务费/26）</p>
			<p class="thelast">*法定节假日服务，日服务费按照两倍计算</p>
			<p class="thelast">*若新生儿为双胞胎，服务费需另加约20%</p>
			
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
    $('li.nav-mammy').addClass('now');
})
</script>
{% endblock %}