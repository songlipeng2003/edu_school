<?php /* @var $this Controller */ ?>
<?php $this->beginContent('/layouts/main'); ?>
<div class="container">
    <div class="row">
        <div class="col-sm-3 col-xs-12">
            <?php
            $this->widget(
                'booster.widgets.TbMenu',
                array(
                    'type' => 'list',
                    'items' => $this->menu,
                )
            );
            ?>
        </div>
        <div class="col-sm-9 col-xs-12">
            <?php echo $content; ?>
        </div>
    </div>
</div>
<?php $this->endContent(); ?>