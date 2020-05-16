
<div class="row">
    <div class="col-lg-8">
        <h1><?php echo $post['post_subject'];?></h1>
        <p class="lead">by <?php echo $post['name'];?></p>
        <hr>
        <p>Posted on <?php echo  $post['post_created'];?></p>
        <p>Tags:
            <?php foreach ($tags as $tag): ?>
                <span class="badge badge-primary"><?php echo $tag['tag_name'];?></span>
            <?php endforeach; ?>
        </p>
        <hr>
        <p><?php echo $post['post_text'];?></p>
    </div>
</div>
