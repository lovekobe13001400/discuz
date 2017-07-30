
cur=0;
jq(".deantabname li").each(function(s){
	jq(this).hover(function(){
	clearInterval(timer);
	cur = s;
		jq(this).addClass("cur").siblings().removeClass("cur");
		jq(".deantabcontent li").eq(s).show().siblings().hide();
		},function(){timer = setInterval(function(){
		todo = (cur + 1) % 3;
		jq(".deantabname li").eq(todo).hover();
		},30000);})
		})
		
		var timer = setInterval(function(){
		todo = (cur + 1) % 3;
		jq(".deantabname li").eq(todo).hover();
		},30000);
		jq(".deantabcontent").each(function(s){
			jq(this).hover(function(){
			clearInterval(timer);
				},function(){timer = setInterval(function(){
		todo = (cur + 1) % 3;
		jq(".deantabname li").eq(todo).hover();
		},30000);})
	})


cur1=0;
jq(".deantabname1 li").each(function(s1){
	jq(this).hover(function(){
	clearInterval(timer);
	cur1 = s1;
		jq(this).addClass("cur1").siblings().removeClass("cur1");
		jq(".deantabcontent1 li").eq(s1).show().siblings().hide();
		},function(){timer = setInterval(function(){
		todo1 = (cur1 + 1) % 3;
		jq(".deantabname1 li").eq(todo1).hover();
		},30000);})
		})
		
		var timer = setInterval(function(){
		todo1 = (cur1 + 1) % 3;
		jq(".deantabname1 li").eq(todo1).hover();
		},30000);
		jq(".deantabcontent1").each(function(s1){
			jq(this).hover(function(){
			clearInterval(timer);
				},function(){timer = setInterval(function(){
		todo1 = (cur1 + 1) % 3;
		jq(".deantabname1 li").eq(todo1).hover();
		},30000);})
	})

