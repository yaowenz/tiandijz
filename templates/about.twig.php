{% extends 'layout.twig.php' %}
{% block content %}
{% include 'header.twig.php' %}
<style>
body {background-color:#DEE3E6}
</style>
<img src="images/bg-8.jpg" class="inner top bg" />
<div class="main aboutUs">
	<div class="l">
		<h2>关于天地</h2>		
		<div class="border-box">			
			<img src="images/sk-bg1.jpg" />
			<div class="incite">
				<p>天地家政是一家具有独立法人资格的，集母婴护理、育婴、家政服务、老年护理、保洁等项目于一体的服务机构。</p>
				<p>作为上海市首批示范性家政服务站，天地家政率先开发家政信息管理系统，开创无纸化办公的先河。</p>
				<p>天地家政登记在册的家政员有二万一千多名，可以满足不同客户的各种需求，我们的理念是：</p>
				<p style="text-align: center;font-size:20px;color:#F08300;text-indent:0px;padding:15px">让有能力的家政员走进有品味的家庭<br/>让新手家政员走进可以接受她们的家庭</p>
				<p>我们为家政员提供培训、体检、保险等服务。</p>
				<p>愿我们的团队让您的生活省心无忧。</p>
			</div>
		</div>
	</div>
	<div class="r">
		<ul>
			<li class="now"><a>关于天地</a></li>
			<li><a>家政员须知</a></li>
			<li><a>顾客须知</a></li>
			<li><a>联系我们</a></li>
			<li><a>加入我们</a></li>
		</ul>
	</div>
	<div class="clearfix"></div>
</div>
<script type="text/javascript">
$(function(){
    $('li.nav-about').addClass('now');
})
</script>
{% endblock %}