<div style="float: left;width:632px;" id="con10000021">
    <div style="margin-bottom:10px;padding-bottom:10px;border:solid 1px #DDDDDD;" id="ordct812">
        <div class="b812">
            <span class="more812 linkff6600">该课程已有1403次关注</span>
            <?php echo CHtml::encode(Yii::app()->settings->get('system', 'siteName')); ?>-<?php echo $model->title ?>
        </div>
        <div style="padding-left:4px;font-size:14px;">
            <div class="clatit01">
                <h1><?php echo $model->title ?></h1>
            </div>
            <!--
            <div class="clatit02">
                授课学校：<a href="http://nj.edulife.com.cn/school/njzsjy/" title="南京至善教育">南京至善教育</a> 
                关键字：初中一对一辅导，高中一对一辅导，小学一对一辅导
            </div>
            -->
            <div class="ncouinr1">
                <?php echo $model->content ?>
            </div>
        </div>
    </div>
</div>
