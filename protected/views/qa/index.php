 <div style="margin-bottom:10px;" id="ordct606">
    <div style="padding-bottom:10px;border:solid 1px #D9E0E6;">
       <div class="b606">在线问答</div>
       <div style="padding-right:4px;padding-top:7px;padding-left:5px;">
            <div class="s6" style="line-height: 23px; padding: 10px;">
                <?php foreach ($qas as $qa) { ?>
                <ul>
                    <li class="QA1 link14A0">
                        <?php echo CHtml::link($qa->course->title, array('course/view', 'id'=>$qs->course->id), array('target'=>'_blank')) ?>
                    </li>
                    <li class="QA2">
                        <span style="font-size: 12px; color: red">
                            <?php echo $qa->created_at ?>
                        </span>
                    </li>
                    <li class="QA3">问：<?php echo $qa->question ?></li>
                    <li class="QA4">答：<?php echo $qa->answer ?></li>
                </ul>
                <?php } ?>
            </div>
        </div>   
    </div>
</div>
   