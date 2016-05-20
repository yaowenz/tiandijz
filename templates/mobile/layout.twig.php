<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>天地家政</title>
    <link href="{{baseUrl}}/js/bootstrap-3.3.5-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{baseUrl}}/js/swiper-dist/css/swiper.min.css" rel="stylesheet">
    <link href="{{baseUrl}}/css/mobile.css" rel="stylesheet">
    <script src="{{baseUrl}}/js/jquery-dist/jquery.min.js"></script>
    <script src="{{baseUrl}}/js/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
    <script src="{{baseUrl}}/js/swiper-dist/js/swiper.jquery.min.js"></script>
    {% include 'header-tongji.twig.php' %}   
</head>
<body>
	{% block content %}
	{% endblock %}
	<a href="#top" class="toTop"><img src="{{baseUrl}}/images/go-01.png" class="imgs" /></a>
	<div class="foot">
		<div class="main">
			<div class="l">
				<img src="{{baseUrl}}/images/foot-logo.png" class="foot-logo" />
				<div class="l-b">
					<img src="{{baseUrl}}/images/qrcode-tdjz.jpg" class="code"/>
					<div class="box">
						<p class="thefrist">服务时间 : </p>
						<p style="margin-bottom:5px">早 9:00 ~ 晚 22:00，全年无休</p>
						<p class="theLast"><img src="{{baseUrl}}/images/phone-07.png" />021-62191958</p>
					</div>
				</div>
			</div>
			<div class="r">
				<ul>
					<!-- 
					<li>
						<a href="#">在线选人</a>
						<ul>
							<li><a href="">在线选人</a></li>
							<li><a href="">我的订单</a></li>
						</ul>
					</li>
					 -->
					<li>
						<a href="#">服务项目</a>
						<ul>
							<li><a href="">服务内容与资费</a></li>
							<li><a href="">服务流程</a></li>
							<li><a href="">家政员须知</a></li>
							<li><a href="">顾客须知</a></li>
						</ul>
					</li>
					<li>
						<a href="#">联系我们</a>
						<ul>
							<li><a href="">关于天地</a></li>
							<li><a href="">联系合作</a></li>
							<li><a href="">加盟合作</a></li>
						</ul>
					</li>
					<li>
						<a href="#">常见问题</a>
					</li>
				</ul>
				<div class="clearfix"></div>
				<h4><img src="{{baseUrl}}/images/foot-house.png" />上海市示范性家政服务站</h4>
				<h5>上海天地家政服务有限公司, 沪ICP备09066589号-1</h5>
				<h5></h5>
			</div>
		</div>
	</div>
</body>
</html>
