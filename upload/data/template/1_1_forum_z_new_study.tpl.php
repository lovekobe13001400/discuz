<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); include template('common/header2'); ?><link rel="stylesheet" type="text/css" href="./img_news_study_files/style_2_common.css"><link rel="stylesheet" type="text/css" href="./img_news_study_files/style_2_portal_list.css"><script type="text/javascript">var STYLEID = '2', STATICURL = 'static/', IMGDIR = 'template/dean_getang/img', VERHASH = 'rXJ', charset = 'utf-8', discuz_uid = '0', cookiepre = '9Amz_2132_', cookiedomain = '', cookiepath = '/', showusercard = '1', attackevasive = '0', disallowfloat = 'newthread', creditnotice = '1|威望|,2|金钱|,3|贡献|', defaultstyle = '', REPORTURL = 'aHR0cDovL3d3dy5ndHpzLmNvbS9uZXdzL3N0dWR5Lw==', SITEURL = 'http://www.gtzs.com/', JSPATH = 'data/cache/', CSSPATH = 'data/cache/style_', DYNAMICURL = '';</script>

    <div class="clear"></div>
<div id="wp" class="wp">
<div class="wp" style="margin-top:10px;">
<!--[diy=diy1]--><div id="diy1" class="area"></div><!--[/diy]-->
</div>
<div id="pt" class="bm cl">
<div class="z">
<a href="http://www.gtzs.com/" class="nvhm" title="首页">格堂装饰</a> <em>&#8250;</em>
<a href="http://www.gtzs.com/portal.php">首页</a> <em>&#8250;</em> <a href="http://www.gtzs.com/news/">新闻中心</a><em>&#8250;</em><?php echo $cat['catname'];?></div>
</div><style id="diy_style" type="text/css"></style>

<style type="text/css">						

</style>
<div id="ct" class="ct2 wp cl">
<div class="deanpartl">
    <?php include template('common/left'); ?>    </div>
<div class="deanpartr">
    	<div class="bm">
<div class="bm_h cl">
<a href="http://www.gtzs.com/portal.php?mod=rss&amp;catid=16" class="y xi2 rss" target="_blank" title="RSS"></a><h1 class="xs2"><?php echo $cat['catname'];?></h1>
</div>
            <style type="text/css">
            	#deannews{}
#deannews li{ padding:15px 0; border-bottom:1px dotted #ddd;}
#deannews li .deannewleft{ float:left; width:160px; height:100px;}
#deannews li .deannewright{ float:right; width:720px;}
#deannews li .deannewright h2{ height:30px; font-size:18px; font-weight:500;}
.deannewsummarys{ line-height:22px; margin-top:5px; margin-bottom:5px; font-size:12px; color:#999;}
            </style>
<div class="bm_c xld">
    <?php if(is_array($cat_list)) foreach($cat_list as $key => $value) { ?>            <ul id="deannews">
                	<li>
                    	<div class="deannewleft"><a href="http://www.gtzs.com/article-430-1.html" target="_blank">
                            <img src="<?php echo $value['head_img'];?>" width="160" height="96" alt="" class="tn"></a></div>
                        <div class="deannewright">
                        	<h2><a href="http://www.gtzs.com/article-430-1.html" target="_blank" class="xi2" style=""><?php echo $value['title'];?> </h2>
                            <div class="deannewsummarys"><?php echo $value['summary'];?></div>
                            <div class="deannewtime">
                                                                <span class="xg1"> <?php echo $value['dateline'];?>1</span>
                                                            </div>
                        </div>
                        <div class="clear"></div>
                    </li>
            </ul>
    <?php } ?>
               </div>
<!--[diy=listloopbottom]--><div id="listloopbottom" class="area"></div><!--[/diy]-->
</div>
    <!--[diy=listcontenttop]--><div id="listcontenttop" class="area"></div><!--[/diy]--><div class="pgs cl"><div class="pg"><strong>1</strong><a href="">2</a><label><input type="text" name="custompage" class="px" size="2" title="输入页码，按回车快速跳转" value="1" onkeydown="if(event.keyCode==13) {window.location=&#39;http://www.gtzs.com/news/study/index.php?page=&#39;+this.value;; doane(event);}"><span title="共 2 页"> / 2 页</span></label><a href="" class="nxt">下一页</a></div></div>    </div>
    <div class="clear"></div>

</div>

<div class="wp mtn">
<!--[diy=diy3]--><div id="diy3" class="area"></div><!--[/diy]-->
</div>	</div>


<script type="text/javascript">
var urlRetry = SITEURL + '/plugin.php?id=security:job';
var ajaxRetry = new Ajax();
ajaxRetry.post(urlRetry, 'formhash=844b80cc', function(s){});
</script>    <style type="text/css">
    	.deanftbottom{ padding-top:20px; border-top:1px solid #ddd; font-size:12px; color:#333; text-align:center; width:1200px; margin:30px auto; margin-bottom:0; padding-bottom:30px;}

    </style>
    {tempalte common/footer2}