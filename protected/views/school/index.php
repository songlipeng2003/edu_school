<div style="margin-bottom:10px;" id="ordct606">
    <div style="padding-bottom:10px;border:solid 1px #D9E0E6;">
       <div class="b635">学校教学点</div>
       <div style="padding-right:4px;padding-top:7px;padding-left:5px;">
            <div style="padding:10px;line-height:180%">
                <?php foreach ($schools as $school) { ?>
                    <a name="7316"></a>
                    <ul>
                        <li><span class="link14A0"><?php echo $school->title; ?></span></li>
                        <li><b>分校地址：</b><?php echo $school->address; ?></li>
                        <li class="s3"><b>分校交通：<?php echo $school->traffic; ?></b></li>
                    </ul>
                <?php } ?>
            </div>
        </div>   
    </div>
</div>