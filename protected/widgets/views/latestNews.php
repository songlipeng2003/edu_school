<ul>
    <?php foreach ($lastestNewsList as $news) {
        echo '<li>';
        echo CHtml::link($news->title, array('news/view', 'id'=>$news->id));
        echo '</li>';
    } ?>
</ul>