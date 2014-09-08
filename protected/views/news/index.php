<?php
$this->pageTitle = $this->pageTitle . ' - 学校动态';
?>

<div style="margin-bottom:10px;" id="ordct606">
    <div style="padding-bottom:10px;border:solid 1px #D9E0E6;">
       <div class="b606">学校动态</div>
       <div style="padding-right:4px;padding-top:7px;padding-left:5px;">
            <div class="s6" style="line-height: 23px; padding: 10px;">
                <?php foreach ($newsList as $news) { ?>
                <ul>
                    <li class="QA1 link14A0">
                        <?php echo CHtml::link($news->title, array('news/view', 'id'=>$news->id), array('target'=>'_blank')) ?>
                    </li>
                    <li class="QA2">
                        <span style="font-size: 12px; color: red">
                            <?php echo substr($news->post_time, 0, 10) ?>
                        </span>
                    </li>
                    <li class="QA6"><?php echo $news->description ?></li>
                    <li class="QA5 link002">
                        <?php echo CHtml::link('阅读全文', array('news/view', 'id'=>$news->id), array('target'=>'_blank')) ?>
                    </li>
                </ul>
                <?php } ?>
            </div>
        </div>   
    </div>
</div>
   