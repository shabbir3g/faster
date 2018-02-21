
<?php
$sidebar_bottom_link = get_field('sidebar_bottom_link','options');
if($sidebar_bottom_link):  ?>
<div class="calendrier_formations">
    <div class="calendrier_formations_content">
       <a href="<?php echo $sidebar_bottom_link['url']; ?>"><?php echo $sidebar_bottom_link['title']; ?></a>
     </div>
</div>
<?php endif; ?>

