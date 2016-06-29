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
    <script src="{{baseUrl}}/js/fastclick.js"></script>
    <script>
    var _hmt = _hmt || [];
    (function() {
      var hm = document.createElement("script");
      hm.src = "//hm.baidu.com/hm.js?baf5d338db2829b710f913b529891e1c";
      var s = document.getElementsByTagName("script")[0]; 
      s.parentNode.insertBefore(hm, s);
    })();
    </script>
  </head>
  <body id="index">
  	<div id="logo"><img src="{{baseUrl}}/images/mobile/logo-header.png" width="50%" /></div>
    <div class="container-fuild" style="padding-bottom: 60px;">
      <!--banner-->
      <div id="banner" class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src="{{baseUrl}}/images/mobile/banner_1.jpg" /></div>
          <div class="swiper-slide"><img src="{{baseUrl}}/images/mobile/banner_2.jpg" /></div>
          <div class="swiper-slide"><img src="{{baseUrl}}/images/mobile/banner_3.jpg" /></div>
        </div>
        <div class="swiper-pagination"></div>
      </div>

      <!--mssage-->
      <!-- 
      <div id="message" class="row-fuild clearfix">
        <div class="form-control-static col-xs-12 ">
          <i class="icon icon-msg"></i>天地家政老师有责任感，不厌其烦帮我推荐阿姨。
        </div>
      </div>
       -->

      <!-- categray -->
      <div id="categray" class="clearfix form">
        <div class="row-fuild form-group clearfix">
          <div class="col-xs-4">
            <img class="img-circle" src="{{baseUrl}}/images/mobile/c1.png" onclick="location.href='http://m.haojialian123.com/s/tiandijz#/list?job_role=1'" alt="保洁" />
            <h4>保洁</h4>
          </div>
          <div class="col-xs-4">
            <img class="img-circle" src="{{baseUrl}}/images/mobile/c2.png" onclick="location.href='http://m.haojialian123.com/s/tiandijz#/list?job_role=4&job_type=1,2'" alt="育儿嫂" />
            <h4>育儿嫂</h4>
          </div>
          <div class="col-xs-4">
            <img class="img-circle" src="{{baseUrl}}/images/mobile/c3.png" onclick="location.href='http://m.haojialian123.com/s/tiandijz#/list?job_role=5,7'" alt="护工／护理" />
            <h4>护工／护理</h4>
          </div>
        </div>
        <div class="row-fuild form-group clearfix">
          <div class="col-xs-4">
            <img class="img-circle" src="{{baseUrl}}/images/mobile/c4.png" onclick="location.href='http://m.haojialian123.com/s/tiandijz#/list?job_type=2'" alt="全套家务" />
            <h4>全套家务</h4>
          </div>
          <div class="col-xs-4">
            <img class="img-circle" src="{{baseUrl}}/images/mobile/c5.png" onclick="location.href='http://m.haojialian123.com/s/tiandijz#/list?job_role=3'" alt="月嫂" />
            <h4>月嫂</h4>
          </div>
          <div class="col-xs-4">
            <img class="img-circle" src="{{baseUrl}}/images/mobile/c6.png" onclick="location.href='http://m.haojialian123.com/s/tiandijz#/list?job_type=3'" alt="钟点工">
            <h4>钟点工</h4>
          </div>
        </div>
      </div>
      <!--ad-->
      <div id="ad" class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src="{{baseUrl}}/images/mobile/ad_1.jpg" /></div>
          <div class="swiper-slide"><img src="{{baseUrl}}/images/mobile/ad_2.jpg" /></div>
          <div class="swiper-slide"><img src="{{baseUrl}}/images/mobile/ad_3.jpg" /></div>
        </div>
        <div class="swiper-pagination"></div>
      </div>

      <!-- honor -->
      <div id="honor" class="row-fuild clearfix">
        <div class="btn-group btn-group-justified" role="group" aria-label="">
          <div class="btn-group" role="group">
            <img src="{{baseUrl}}/images/mobile/cup.png" alt="cup" >
            <h4>上海示范性家政服务站</h4>
            <p>2013年</p>
          </div>
          <div class="btn-group" role="group">
            <img src="{{baseUrl}}/images/mobile/cup.png" alt="cup" >
            <h4>全国“千户百强”家政服务单位</h4>
            <p>2015年</p>
          </div>
          <div class="btn-group" role="group">
            <img src="{{baseUrl}}/images/mobile/cup.png" alt="cup" >
            <h4>先进服务机构</h4>
            <p>2016年</p>
          </div>
        </div>
      </div>

      <!--info-->
      <div id="info" class="row-fuild clearfix">
        <div class="media col-xs-12 form-control-static">
          <div class="media-left">
            <a href="#">
              <img class="media-object" alt="天地家政" src="{{baseUrl}}/images/mobile/logo.png">
            </a>
          </div>
          <div class="media-body">
            <h3 class="media-heading">天地家政<i class="icon icon-sh"></i></h3>
            <p><i class="icon icon-hotline"></i> 预约热线：021-62191958</p>
            <p><i class="icon icon-business-hours"></i> 营业时间：09:00-22:00  全年无休</p>
            <!--<p><i class="icon icon-address"></i> 门店地址：荣华东道102号701室</p>  -->
          </div>
        </div>
      </div>
    </div>
    <!-- footer-->
    <nav class="navbar navbar-default navbar-fixed-bottom">
      <div class="container-fuild">
        <div class="btn-group btn-group-justified" role="group">
          <div class="btn-group" role="group">
            <button type="button" class="btn btn-link active" onclick="location.href='http://m.haojialian123.com/s/tiandijz'"><i class="icon icon-home"></i>首页</button>
          </div>
          <div class="btn-group" role="group">
            <button type="button" class="btn btn-link" onclick="location.href='http://m.haojialian123.com/s/tiandijz#/list'"><i class="icon icon-chooseperson"></i>在线选人</button>
          </div>
          <div class="btn-group" role="group">
            <button type="button" class="btn btn-link" onclick="location.href='http://m.haojialian123.com/s/tiandijz#/submit'"><i class="icon icon-requirement"></i>提交需求</button>
          </div>
          <div class="btn-group" role="group">
            <button type="button" class="btn btn-link" onclick="location.href='http://m.haojialian123.com/s/tiandijz#/my'"><i class="icon icon-order"></i>我的订单</button>
          </div>
        </div>
      </div>
    </nav>

    <!--script-->
    <script>
		jQuery(function($) {
			FastClick.attach(document.body);
      });
      var banner = new Swiper('#banner', {
        pagination : '#banner .swiper-pagination',
        autoplay : 3000
      });
      var ad = new Swiper('#ad', {
        pagination : '#ad .swiper-pagination',
        	autoplay : 2500
      });
    </script>
  </body>
</html>
