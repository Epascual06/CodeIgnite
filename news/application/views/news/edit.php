<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('news/create'); ?>

    <label for="title">Title</label>
    <input type="input" name="title" value = "<? php echo $news_item['title'];?> "/><br />

    <label for="text">Article</label>
    <textarea name="text" value = "<? php echo $news_item['text'];?> "></textarea><br />

    <input type="submit" name="submit" value="Create news item"  />

</form>
 <script>
            CKEDITOR.replace( 'text' );
        </script>