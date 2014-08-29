<?php /* @var $this Controller */ ?>
<?php $this->beginContent('/layouts/main'); ?>
<div class="container">
    <div class="row">
        <div class="col-sm-3 col-xs-12">
            <ul class="nav">
                <?php foreach ($this->menu as $menu) { ?>
                    <li><?php echo CHtml::link($menu['label'], $menu['url']) ?></li>
                <?php } ?>
            </ul>
        </div>
        <div class="col-sm-9 col-xs-12">
            <?php echo $content; ?>
        </div>
    </div>
</div>
<?php $this->endContent(); ?>