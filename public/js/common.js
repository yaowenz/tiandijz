$(function(){	
	//index img
	$(".myService-img img").hover(function(){
		var _this = $(this).attr("src");
		var _src =_this.substr(0,_this.length-5)		
		if( _this.indexOf("1")>=0 ){			
			$(this).attr("src",_src+"2.png")
		}else{
			$(this).attr("src",_src+"1.png")
		}
	})	
	var a=[];
	$(".content>div").each(function(){
		a.push( $(this).offset().top )
	})	
	//var winW = ($(window).width()-1080)/2;
	
	var winW = 0;
	if( $(window).width()>1080 ){
		winW = ($(window).width()-1080)/2;
	}else{
		winW = 0;
	}
	
	//alert( $(".aboutUs .r").offset().top )
	if($(".content>div").length>0){
		var navH = $(".content>div").offset().top;		
		if( $(window).width()>1080 ){
			winW = ($(window).width()-1080)/2;
			if( $(window).scrollTop()>455 ){
				$(".nav").css({"position":"fixed","top":0,"left":winW+"px"});
				$(".order").css({"position":"fixed","top":0,"right":winW+"px"});
				$(".container .content").css("margin","0 15px 0 85px")
			}	
			$(window).scroll(function(){
				var scroH = $(this).scrollTop();		
				if(scroH>=navH){
					$(".nav").css({"position":"fixed","top":0,"left":winW+"px"});
					$(".order").css({"position":"fixed","top":0,"right":winW+"px"});
					$(".container .content").css("margin","0 15px 0 85px")
				}else if(scroH<navH){
					$(".nav").css({"position":"relative","left":0});
					$(".container .content").css("margin","0 15px")
					$(".order").css({"position":"relative","right":0});
				}						
				if( scroH<a[1] ){
					$(".nav>a").removeClass("now").eq(0).addClass("now")
				}else if( scroH>a[1] && scroH<a[2] ){
					$(".nav>a").removeClass("now").eq(1).addClass("now")
				}else if( scroH>a[2] && scroH<a[3] ){
					$(".nav>a").removeClass("now").eq(2).addClass("now")
				}else if( scroH>a[3] ){						
					$(".nav>a").removeClass("now").eq(3).addClass("now")
				}	
				
				
				
			})
		}else{
			if( $(window).scrollTop()>455 ){
				//alert( $(window).scrollLeft() )
				$(".nav").css({"position":"fixed","top":0,"left":-$(window).scrollLeft()+"px"});
				$(".order").css({"position":"fixed","top":0,"left":"760px"});
				$(".container .content").css("margin","0 15px 0 85px")
			}	
			$(window).scroll(function(){
				var scroH = $(this).scrollTop();		
				if(scroH>=navH){
					$(".nav").css({"position":"fixed","top":0,"left":-$(window).scrollLeft()+"px"});
					$(".order").css({"position":"fixed","top":0,"left": 1080-$(window).scrollLeft()-320+"px" });
					$(".container .content").css("margin","0 15px 0 85px")
				}else if(scroH<navH){
					$(".nav").css({"position":"relative","left":0});
					$(".container .content").css("margin","0 15px")
					$(".order").css({"position":"relative","right":0,"left":0});
				}						
				if( scroH<a[1] ){
					$(".nav>a").removeClass("now").eq(0).addClass("now")
				}else if( scroH>a[1] && scroH<a[2] ){
					$(".nav>a").removeClass("now").eq(1).addClass("now")
				}else if( scroH>a[2] && scroH<a[3] ){
					$(".nav>a").removeClass("now").eq(2).addClass("now")
				}else if( scroH>a[3] ){						
					$(".nav>a").removeClass("now").eq(3).addClass("now")
				}
				
				
				
			})		
			
			
			
		}
	}	


	//toTop
	$(".toTop").click(function() {
    $("html, body").animate({
      scrollTop: $($(this).attr("href")).offset().top + "px"}, {duration: 1000,easing: "swing"});
	    return false;
	});
	$(".nav>a").click(function() {
		//alert( $(this).index() )
		if( $(".content>div").length>=($(this).index()+1) ){
			
			$("body").animate({scrollTop:$(".content>div").eq($(this).index()).offset().top+3+"px" },500);	
		}else{
			//console.log("暂无内容")
			
		}
	
		
	});
	
	
	
	
	 $(".toTop").mouseover(function(){
	 	$(this).find("img").attr("src","images/go-02.png");
	})
	$(".toTop").mouseout(function(){
	 	$(this).find("img").attr("src","images/go-01.png");
	})
	//radio
	$(".radio label").click(function(){
		$(this).parents(".radio").find("label").removeClass("checked");
		$(this).addClass("checked");		
	})
	$(".checkbox label").click(function(){
		if($(this).is(".checked")){
			$(this).removeClass("checked");
		}else{
			$(this).addClass("checked")
		}
	})	
	$(".cover").height( $("body").height() );
	$(".onLine-btn").click(function(){
		$(".cover").css("display","block");
		$(".onLine").css("margin-top",($(window).height()-$(".onLine").height())/2+$(window).scrollTop()+"px")
	})
	$(".cover").click(function(){
		$(this).css("display","none");		
	})	
	$(".onLine").click(function(e){
		e.stopPropagation()
	})
	//map
	$(".mapBox li").click(function(){
		$(".mapBox li").removeClass("now").eq($(this).index()).addClass("now")
	})	
	//code
	$(".weixin").hover(
			function(){
				var h =$(window).height();
				$(".weixin-code").css("top", $(window).scrollTop()+((h-410)/2)+"px");
				$(".weixin-code").fadeIn()
			},
			function(){
				$(".weixin-code").fadeOut()
			}
	);
	
	var si = $(".foot").offset().top;	
	
	if( $(window).width()>1080 ){
		$(window).scroll(function(){
		var scroH = $(window).scrollTop()
		winW = ($(window).width()-1080)/2;
		if(scroH>= 505){
			$(".aboutUs .r").css({"position":"fixed","top":"0px","right":winW+"px"});
		}else{
			$(".aboutUs .r").css({"position":"relative","top":"0px","right":"0px"});
		}
		})
	}else{
		$(window).scroll(function(){
		var scroH = $(window).scrollTop()
		winW = ($(window).width()-1080)/2;
		if(scroH>= 505){
			$(".aboutUs .r").css({"position":"fixed","top":0,"left": 1080-$(window).scrollLeft()-320+"px" });
		}else{
			$(".aboutUs .r").css({"position":"relative","top":"0px","right":"0px","left":"0px"});
		}
		})
	}
	
	
	$(window).resize(function(){
			if($(".content>div").length>0){
		var navH = $(".content>div").offset().top;		
		if( $(window).width()>1080 ){
			winW = ($(window).width()-1080)/2;
			if( $(window).scrollTop()>455 ){
				$(".nav").css({"position":"fixed","top":0,"left":winW+"px"});
				$(".order").css({"position":"fixed","top":0,"right":winW+"px"});
				$(".container .content").css("margin","0 15px 0 85px")
			}	
			$(window).scroll(function(){
				var scroH = $(this).scrollTop();		
				if(scroH>=navH){
					$(".nav").css({"position":"fixed","top":0,"left":winW+"px"});
					$(".order").css({"position":"fixed","top":0,"right":winW+"px"});
					$(".container .content").css("margin","0 15px 0 85px")
				}else if(scroH<navH){
					$(".nav").css({"position":"relative","left":0});
					$(".container .content").css("margin","0 15px")
					$(".order").css({"position":"relative","right":0});
				}						
				if( scroH<a[1] ){
					$(".nav>a").removeClass("now").eq(0).addClass("now")
				}else if( scroH>a[1] && scroH<a[2] ){
					$(".nav>a").removeClass("now").eq(1).addClass("now")
				}else if( scroH>a[2] && scroH<a[3] ){
					$(".nav>a").removeClass("now").eq(2).addClass("now")
				}else if( scroH>a[3] ){						
					$(".nav>a").removeClass("now").eq(3).addClass("now")
				}		
			})
		}else{
			if( $(window).scrollTop()>455 ){
				//alert( $(window).scrollLeft() )
				$(".nav").css({"position":"fixed","top":0,"left":-$(window).scrollLeft()+"px"});
				$(".order").css({"position":"fixed","top":0,"left":"760px"});
				$(".container .content").css("margin","0 15px 0 85px")
			}	
			$(window).scroll(function(){
				var scroH = $(this).scrollTop();		
				if(scroH>=navH){
					$(".nav").css({"position":"fixed","top":0,"left":-$(window).scrollLeft()+"px"});
					$(".order").css({"position":"fixed","top":0,"left": 1080-$(window).scrollLeft()-320+"px" });
					$(".container .content").css("margin","0 15px 0 85px")
				}else if(scroH<navH){
					$(".nav").css({"position":"relative","left":0});
					$(".container .content").css("margin","0 15px")
					$(".order").css({"position":"relative","right":0,"left":0});
				}						
				if( scroH<a[1] ){
					$(".nav>a").removeClass("now").eq(0).addClass("now")
				}else if( scroH>a[1] && scroH<a[2] ){
					$(".nav>a").removeClass("now").eq(1).addClass("now")
				}else if( scroH>a[2] && scroH<a[3] ){
					$(".nav>a").removeClass("now").eq(2).addClass("now")
				}else if( scroH>a[3] ){						
					$(".nav>a").removeClass("now").eq(3).addClass("now")
				}		
			})			
		}
	}
	if( $(window).width()>1080 ){
		$(window).scroll(function(){
		var scroH = $(window).scrollTop()
		winW = ($(window).width()-1080)/2;
		if(scroH>= 505){
			$(".aboutUs .r").css({"position":"fixed","top":"0px","right":winW+"px"});
		}else{
			$(".aboutUs .r").css({"position":"relative","top":"0px","right":"0px"});
		}
		})
	}else{
		$(window).scroll(function(){
		var scroH = $(window).scrollTop()
		winW = ($(window).width()-1080)/2;
		if(scroH>= 505){
			$(".aboutUs .r").css({"position":"fixed","top":0,"left": 1080-$(window).scrollLeft()-320+"px" });
		}else{
			$(".aboutUs .r").css({"position":"relative","top":"0px","right":"0px","left":"0px"});
		}
		})
	}		
			
	})
	
})
