{% extends 'layout.twig.php' %}
{% block content %}
{% include 'header.twig.php' %}  
<style>
body {background-color:#ECEAE8}
</style>
<img src="images/bg-3.jpg" class="inner top bg" />
<!--<div class="top-title">
	<div class="main">
		<h1>天地育儿嫂 育儿没烦恼</h1>
		<p>您提需求，我们迅速响应，信息化服务为您快速找人</p>
	</div>
</div>-->
<div class="main container">
	{% include 'content-nav-left.twig.php' %}
	<div class="content">
		<div class="Tbox" id="serve">
			<img src="images/title2.png" class="title2"/>
			<h1 class="tit-h" style="margin-bottom:30px">全日制/钟点制</h1>
			<div class="live">
				<div>
					<img src="images/jzg-01.png" />
					<h4>家庭餐的制作</h4>
					<p>原辅料采购、餐前准备(择菜、洗菜、切菜)、菜品制作、餐后整理、清洗水果等。</p>
				</div>
				<div class="even">
					<img src="images/jzg-03.png" />
					<h4>居室清洁与美化</h4>
					<p>清洁地毯、地面、擦拭室内墙壁、门窗玻璃、家具以及家电、表面，清洁厨房和卫生间，指导进行居家美化等。</p>
				</div>
				<div>
					<img src="images/jzg-02.png" />
					<h4>洗涤衣物</h4>
					<p>包括熨烫、整理、清洗、叠放衣物、拆洗被褥等。</p>
				</div>
				<div class="even">
					<img src="images/jzg-04.png"/>
					<h4>家庭照料</h4>
					<p>协助更换饮用水、煤气罐，照料宠物，养护花卉，接送孩童上下学，协助看护幼儿、老人，提供简单家教。</p>
				</div>
				<i class="clearfix"></i>
			</div>
			
		</div>
		
		<div class="Tbox Tbox2" id="price">
			<h3>服务价格</h3>
			<h4>钟点制</h4>
			<table class="service clear-service">
				<colgroup>
				<col width="22%" />
				<col width="26%" />
				<col width="26%" />
				<col width="26%" />
				</colgroup>
				<tr>
					<th></th>
					<th>1-2次/每周</th>
					<th>3-4次/每周</th>
					<th>4次以上</th>
				</tr>
				<tr>
					<td>2-4小时</td>
					<td rowspan="3" style="border-left:1px dotted #aaa">30-40元/小时</td>
					<td rowspan="3" style="border-left:1px dotted #aaa;border-right:1px dotted #aaa">28-40元/小时</td>
					<td>25-30元/小时<br>
						+<br>
						管理费 60元/月</td>
				</tr>
				<tr style="border-top:1px dotted #aaa">
					<td>3小时</td>
					<td>25-28元/小时<br>
						+<br>
						管理费 70元/月</td>
				</tr>
				<tr style="border-top:1px dotted #aaa">
					<td>4小时及以上</td>
					<td>25-27元/小时<br>
						+<br>
						管理费 80元/月</td>
				</tr>
			</table>
			<p class="thelast" style="margin-top:15px">*上海服务师价格上浮3-5元/小时，钟点工合同最低为12个月</p>
			<h4 style="margin-top:50px">全日制</h4>
			<table class="service">
				<tr>
					<th width="50%">服务时间</th>
					<th>准员工制</th>
				</tr>
				<tr>
					<td>做六休一 8:00 ~ 18:00</td>
					<td>4800-6000元</td>
				</tr>
			</table>
			<p class="thelast" style="margin-top:15px">*合同起签为6个月 </p>
			<p class="thelast">*准员工制管理费收费标准：</p>
			<p class="thelast" style="margin-left:8px">第1-6个月288元/月；</p>
			<p class="thelast" style="margin-left:8px">第7个月起为188元； </p>
			<p class="thelast" style="margin-left:8px">第13个月起为88元/月； </p>
			<p class="thelast" style="margin-left:8px">每天多增加1小时工作,工资加200-250元/月； </p>
			<p class="thelast" style="margin-left:8px">每月多增加1天工作,工资加500-700元/月； </p>			
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
    $('li.nav-hourly').addClass('now');
})
</script>
{% endblock %}