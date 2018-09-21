<h2><?php echo $title; ?></h2>

<?php foreach($news as $news_item): ?>

    <h3><?php echo $news_item['title']; ?></h3>
    <div class="main">
        <?php echo word_limiter($news_item['text'],15); ?>
    </div>
    <p><a href="<?php echo site_url('news/'.$news_item['slug']); ?>">View article</a></p>
<?php endforeach;?>