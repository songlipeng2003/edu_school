<?php
$this->pageTitle = $this->pageTitle . ' - 学校动态 - ' . $model->title;
?>

<div style="margin-bottom:10px;" id="ordct606">
    <div style="padding-bottom:10px;border:solid 1px #D9E0E6;">
       <div class="b606">学校动态详情</div>
       <div style="padding-right:4px;padding-top:7px;padding-left:5px;">
            <div class="s6" style="line-height: 23px; padding: 10px;">
                <?php echo $model->content ?>
            </div>
        </div>   
    </div>
</div>
   