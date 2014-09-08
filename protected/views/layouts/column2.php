<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div style="width:940px;margin:0px auto;">
    <div style="float: left;width:632px;" id="con10000021">
        <?php echo $content; ?>
    </div>
    <div style="float: right;width:300px;" id="con10000022">
        <div style="margin-bottom:10px;" id="ordct608">
            <div style="padding-bottom:10px;border:solid 1px #D1D1D1;">
                <div class="b608">联系我们</div>
                <div style="padding-right:4px;padding-top:7px;padding-left:4px;">
                    <?php echo Yii::app()->settings->get('system', 'contact'); ?>
                </div>
            </div
        <div style="margin-bottom:10px;" id="ordct608">
            <div style="padding-bottom:10px;border:solid 1px #D1D1D1;">
                <div class="b608">热门课程</div>
                <div style="padding-right:4px;padding-top:7px;padding-left:4px;">
                    <table width="100%" cellpadding="0" cellspacing="0">
                        <tr height=27 align="center" bgcolor="#f0f0f0">
                            <td><b>课程</b></td>
                            <td><b>优惠价</b></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div style="margin-bottom:10px;" id="ordct610">
            <div style="padding-bottom:10px;border:solid 1px #D9E0E6;">
                <div class="b601">教学点</div>
                <div style="padding-right:4px;padding-top:7px;padding-left:4px;">
                    <div class="s2 link1244">
                        <a name="7319"></a>
                        <ul>
                            <li><span class='link14A0'> [南京市-玄武区]银城东苑校区</span></li>
                            <li><b>分校地址：</b>南京市银城东苑1号</li>
                            <li class='s3'><b>分校交通：</b></li>
                        </ul>
                    </div>
                </div>   
            </div>
        </div>
    </div>
</div>
<?php $this->endContent(); ?>

