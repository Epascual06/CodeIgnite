<?php
echo '<h2>'.$news_item['title'].'</h2>';
echo $news_item['text'];
?>
<a href="<? php echo base_url(); ?> news/edit" class="btn btn-primary">Edit</a>
<a href="<? php echo base_url(); ?> news/delete" class="btn btn-danger">Delete</a>