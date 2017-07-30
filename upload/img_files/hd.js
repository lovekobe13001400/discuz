
var et,len;
var index = 0;
jq(function(){

	len = jq('#wowslider-container1 li').length;
	jq('#page a:eq(0)').addClass('ws_selbull');
	et = setInterval('rollindex(0)',5000);
	divceter();
	jq(window).resize(function(){
		divceter();
	});
	jq('#wowslider-container1').bind({
		mouseover:function(){
			clearInterval(et);
		},
		mouseleave:function(){
			et = setInterval('rollindex(0)',6000);
	   }
	});
	jq('#next').click(function(){
		rollindex(0);
	});
	jq('#prev').click(function(){
		if(index==0){
			i = len;
		}else{
			i = index;
		}
		rollindex(i);
	});
	jq('#page a').click(function(e){
		var tx = jq(e.target).text();
		rollindex(tx);
	});
});
function divceter(){
	var w = jq(window).width();
	var left = -(1920 - Number(w))/2;
	jq('#wowslider-container1').attr('style','width:'+w+'px;');
	jq('#wowslider-container1 ul').css({marginLeft:left+"px"});
}
function rollindex(i){
	//jq('#wowslider-container1 li:eq('+index+')').fadeOut('fast');
	if(i > 0){
		var n = Number(i)-1;
	}else{
		var n = Number(index)+1;
	}
	if( n == len){
		jq('#page a:eq(0)').addClass('ws_selbull');
		jq('#page a:eq(0)').siblings().removeClass('ws_selbull');
		jq('#wowslider-container1 li:eq(0)').fadeIn('slow',function(){
			index = 0;
		}).siblings().hide();
	}else{
		jq('#page a:eq('+n+')').addClass('ws_selbull');
		jq('#page a:eq('+n+')').siblings().removeClass('ws_selbull');
		jq('#wowslider-container1 li:eq('+n+')').fadeIn('slow',function(){
			index = n;
		}).siblings().hide();
		
	}
	

}
//倒计时
var timer = [];
jq(function(){
	jq('#ctime span').each(function(idx){
		var obj = jq(this);
		showTime(obj,idx)
	})
});
function showTime(obj,idx){
    timer[idx] = setInterval(function(){
    	var d = new Date();
    	var thist = d.getTime();
    	var time  =  Math.round(thist/1000)
    	var stime  = obj.attr('stime');
    	var etime  = obj.attr('etime');
    	if(time > stime && time< etime){
    	 var dtime = Number(etime) - Number(time);
    	  day = Math.floor(dtime/3600/24); 
  		  hour = Math.floor((dtime/3600)%24); 
  		  minutes = Math.floor((dtime/60)%60);   
  		  seconds = Math.floor(dtime%60);   
  		  msg = "  "+day+"天"+hour+"小时"+minutes+"分"+seconds+"秒";   
  		  obj.html(msg); 
    	}else if(time < stime){
    		clearInterval(timer[idx]); 
   		 	obj.html('尚未开始！');  
		}else if(time > etime){
			clearInterval(timer[idx]); 
   		 	obj.html('已经结束！');  
    	}
    },1000);
}

