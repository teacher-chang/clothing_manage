$.fn.In = function () {
		var qrcode_height = $(window).height() * 0.5 - 400 * 0.5; //主要针对点击二维码在蒙层里面居中显示，目前二维码真实大小是165px * 165px
	    var $zhe=$('<div class="m-zm" style="height:100%;width:100%;position:fixed;left:0;top:0;background:rgba(0,0,0,0.6);overflow:auto;z-index:999;"><img src="'+$(this).attr('src')+'" style="display:block;width:400px;hegiht:400px;margin:0 auto;padding-top:'+qrcode_height+'px;;"/><p class="zm-close" style="position:absolute; cursor:pointer; width:40px; height:40px; top:50px; right:130px;"></p></div>');
	
		var $zheImg=$zhe.find('img');
		//$zheImg.load(function(){
			//$zheImg.css('margin-top',-$zheImg.height()/2);
		//});
		$zhe.appendTo($('body')).on('touchend',function(){
			$zhe.remove();
			return false;
		});
		var downX=0;
		var downY=0;
		$zheImg.on('touchstart',function(ev){
			var touchs=ev.originalEvent.changedTouches[0];
			downX=touchs.pageX;
			downY=touchs.pageY;
		});
		$zheImg.on('touchend',function(ev){
			var touchs=ev.originalEvent.changedTouches[0];
			if(!(Math.abs(touchs.pageX-downX)>=3)){					
				$zhe.remove();
			}else if(!(Math.abs(touchs.pageY-downY)>=3)){
				$zhe.remove();
			}
			return false;
		});

		$(".zm-close").css({'background':"url(static/img/card/close.png) no-repeat"});
		$('.zm-close').click(function(){
			$('.m-zm').css({'display':'none'});
		})
}


$(document).ready(function () {
function AddImgClickEvent()  
        {  
            var objs = $("img");    
            var objs_2 = $("a  img"); 
            var objs_3 = $("a  i  img");    
            for(var i=0;i<objs.length;i++)  
            {  
            	if($.inArray(objs[i],objs_2) >-1){}else{
            		if($.inArray(objs[i],objs_3) >-1){}else{
                objs[i].onclick=function()  
                {  
				   $(this).In();
                }  
                objs[i].style.cursor = "pointer"; 
                   }
                } 
            }  
        }  
AddImgClickEvent();  
});