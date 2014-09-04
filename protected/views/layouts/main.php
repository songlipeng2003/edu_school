<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="zh-CN" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/css.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/school.css" media="screen" />

	<title><?php echo CHtml::encode(Yii::app()->settings->get('system', 'siteName')); ?></title>
</head>
<body>
	<div class="page940">
        <div class="page940" style="margin-top:8px;margin-bottom:8px;">
            <div class="banner03">
            	<a href="/" title="<?php echo Yii::app()->settings->get('system', 'siteName'); ?>">
            		<img  src="/images/logo.jpg" alt="<?php echo Yii::app()->settings->get('system', 'siteName'); ?>" width="940"  />
            	</a>
            </div>
        </div>
         <div class="dh01" style="margin:0px auto;margin-bottom:10px;"> 
            <div class="dh02 link18pxA01B" style="text-align:center;"> 
                <a href="/"><?php echo Yii::app()->settings->get('system', 'siteName'); ?></a>
            </div> 
            <div class="link14px000B dh03"> 
                <ul> 
                	<li id="home">
                		<?php echo CHtml::link('学校首页', array('/site/index')); ?>
                	</li>
                    <li id="sintro"><a href="/school/njzsjy/SchoolIntro.html">学校介绍</a></li>
                    <li id="allcou"><a href="/school/njzsjy/course.html">课程设置</a></li> 
                    <li id="snew">
                        <?php echo CHtml::link('学校新闻', array('news/')) ?>
                    </li> 
                    <li id="sen"><a href="/school/njzsjy/SchoolEnvir.html">学校环境</a></li> 
                    <li id="sjx">
                        <?php echo CHtml::link('学校地址', array('school/')) ?>
                    </li> 
                    <li id="sqa"><a href="/school/njzsjy/SchoolQA-1.html">在线问答</a></li> 
                </ul> 
            </div> 
 		</div>

 		<?php echo $content; ?>
	</div>
</body>
</html>
