 <div class="schoolnews01" align="center">
    <div class="title_left09">
        <span style="padding-left: 10px">
            <img src="/images/ico02.gif" alt="" style="display: inline">
        </span>
        <span class="title_left12">开设课程</span>
    </div>
    <span id="mytemplate173_labclist">
        <?php foreach ($courses as $course) { ?>
        <div class="courseList11 link12pxblue659" style="text-align:left">
            <?php echo CHtml::link($course->title, array('course/view', 'id'=>$course->id)) ?>
        </div>
        <?php } ?>
    </span>
</div>

<span>
    <?php foreach ($courses as $course) { ?>
    <div class="schoolnews01" style="margin-top:9px;" align="center">
        <div class="courseList1" style="text-align:left">
            <div style="padding-left:30px;float:left" class="link18053">
                <?php echo CHtml::link($course->title, array('course/view', 'id'=>$course->id)) ?>
            </div>
            <div style="float:right;margin-right:30px;" class="link14265df">
                <?php echo CHtml::link('查看所有班级', array('course/view', 'id'=>$course->id)) ?>
            </div>
        </div>
        <div style="margin-top:5px;text-align:left;" class="link12px659">
            <div style="width:469px;float:left;line-height:160%;padding-left:16px;margin-right:9px;">
                <?php echo $course->description ?>
                <?php echo CHtml::link('[详情]', array('course/view', 'id'=>$course->id)) ?>
            </div>
            <div style="float:left;">
                <div class="courseList12">
                    <font style="padding-left:10px;">班级数目：<font color="red">7个</font></font>
                </div>
                <div style="width:140px;height:21px;background-color:#F0F0F0;margin-top:1px;line-height:21px;">
                    <font style="padding-left:10px;">关注人数：<font color="red">1401人</font></font>
                </div>
            </div>
        </div>

    </div>
    <?php } ?>
</span>
   