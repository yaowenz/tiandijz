{% extends 'layout.twig.php' %}
{% block content %}
{% include 'header.twig.php' %}   
<style>
body {background-color:#ECEAE8}
</style>
<img src="images/bg-3.jpg" class="inner top bg" />
<div class="top-title top-title-r">
	<!-- 
	<div class="main">
		<h1>完美订制 洁净每一天</h1>
		<p>您提需求，我们迅速响应，信息化服务为您快速找人</p>
	</div>
	 -->
</div>
<div class="main container">
	{% include 'content-nav-left.twig.php' %}
	<div class="content">
		<div class="Tbox" id="serve">
			<img src="images/title.png" class="title"/>
			<h1>保洁</h1>
			<div class="clear" style="border: 0;">
				<h2>厨房清洁</h2>
				<p>清理锅、碗,灶面、脱排、墙砖,台面、冰箱、微波炉、烤箱、洗碗机外表油渍。</p>
				<img src="images/jz6-14.png" />
			</div>
			<div class="clear clear-left">
				<h2>卫生间清洁</h2>
				<p>抹布分开,镜面保持干净,洗脸盆光亮、台面整齐,浴缸、墙砖干净,毛巾架整齐,抽水马桶光亮如新、无臭味,地面干净无毛发 。</p>
				<img src="images/jz6-16.png" />
			</div>
			<div class="clear">
				<h2>客厅清洁</h2>
				<p>电视机、电视柜、音像、沙发、茶几、花架、餐桌、厅柜、酒柜无尘灰,地毯定期清洗消毒,地板干净无杂物定期打腊。</p>
				<img src="images/jz6-21.png" />
			</div>
			<div class="clear clear-left">
				<h2>卧室清洁</h2>
				<p>打扫前敲门进房,床单、被单、枕套拉直铺平,定期更换清洗,电视柜、电视机、床头柜、梳妆台、梳妆镜、衣柜无尘,屋内保持清新整洁。</p>
				<img src="images/jz6-15.png" />
			</div>
			<div class="clear ">
				<h2>书房清洁</h2>
				<p>书架整齐,电脑桌、电脑、电话无尘,办公桌整洁,书刊放整齐,地面无尘。</p>
				<img src="images/jz6-12.png" />
			</div>
			<div class="clear clear-left">
				<h2>阳台清洁</h2>
				<p>玻璃,窗槽干净,无污染,洗衣机里外干净,无水痕,洗衣池干净地面整洁,物品整洁有序。</p>
				<img src="images/jz6-09.png" />
			</div>
			<div class="clear ">
				<h2>衣物清洁</h2>
				<p>书架整齐,电脑桌、电脑、电话无尘,办公桌整洁,书刊放整齐,地面无尘。</p>
				<img src="images/jz6-11.png" />
			</div>
		</div>
		<div class="Tbox Tbox2" id="price">
			<h3>服务价格</h3>
			<h4>宅速洁</h4>
			<table class="service">
				<colgroup><col width="20%" /><col width="40%" /><col width="40%" /></colgroup>
				<tr>
					<th></th><th>服务费</th><th>中介费</th>
				</tr>
				<tr>
					<td>普通客户</td><td>35-50元/小时</td><td>20元/次</td>
				</tr>
				<tr style="border-top:1px dotted #aaa">
					<td>会员</td><td>30-40元/小时</td><td>300元/年</td>
				</tr>
			</table>
			<h4 style="margin-top:50px">普通保洁</h4>
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
			<span class="thelast">*上海服务师价格上浮3-5元/小时，钟点工合同最低为12个月</span>
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
    $('li.nav-cleaning').addClass('now');
})
</script>
{% endblock %}