{% extends 'layout.twig.php' %}
{% block content %}
{% include 'header.twig.php' %}   
<style>
body {background-color:#ECEAE8}
</style>
<img src="images/bg-5.jpg" class="inner top bg" />
<div class="main container">
	{% include 'content-nav-left.twig.php' %}
	<div class="content">
		<div class="Tbox Tbox3" id="serve">
			<img src="images/title.png" class="title"/>
			<h1 style="margin-bottom: 30px">居家服务</h1>
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
					<img src="images/jzg-04.png" />
					<h4>家庭照料</h4>
					<p>协助更换饮用水、煤气罐，照料宠物，养护花卉，接送孩童上下学，协助看护幼儿、老人，提供简单家教。</p>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>			
		<div class="Tbox Tbox2" id="price">
			<h3>服务价格</h3>
			<table class="service">
				<tr>
					<th width="35%">级别</th>					
					<th>中介制</th>
					<th>准管理制</th>					
				</tr>
				<tr>
					<td class="align center">
						<img src="images/star-single.png"/>
					</td>
					<td>4000~5000元</td>
					<td>6000~7000元</td>					
				</tr>
				<tr>
					<td class="align center">
						<img src="images/star-single.png"/>
						<img src="images/star-single.png"/>
					</td>
					<td>5000~6000元</td>
					<td>7000~8000元</td>				
				</tr>
				<tr>
					<td class="align center">
						<img src="images/star-single.png"/>
						<img src="images/star-single.png"/>
						<img src="images/star-single.png"/>
					</td>					
					<td>6000~7000元</td>
					<td>8000~9000元</td>					
				</tr>
				<tr>
					<td class="align center">
						<img src="images/star-single.png"/>
						<img src="images/star-single.png"/>
						<img src="images/star-single.png"/>
						<img src="images/star-single.png"/>
					</td>
					<td>7000~8000元</td>
					<td>9000~10000元</td>					
				</tr>
				<tr>
					<td class="align center">
						<img src="images/star-single.png"/>
						<img src="images/star-single.png"/>
						<img src="images/star-single.png"/>
						<img src="images/star-single.png"/>
						<img src="images/star-single.png"/>
					</td>
					<td>8000元以上</td>
					<td>10000元以上</td>					
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
    $('li.nav-fulltime').addClass('now');
})
</script>
{% endblock %}