<?php foreach ($posts as $post):?>
    <div class="row">
        <a href="<?php echo BASE_URL;?>posts/view/<?php echo $post['post_id'];?>"><h1><?php echo $post['post_subject']?></h1></a>
        <p><?php echo $post['post_text']?></p>
        <div>
            <div> Posted:
                <span class="badge badge-success"><?php echo $post['post_created']?>
                </span>
            </div>Tags:
            <?php foreach ($tags[$post['post_id']] as $postTag):?>
                <a href="<?php echo BASE_URL;?>tags/view/<?php echo $postTag['tag_id'];?>"></a><span class="badge badge-primary"><?php echo $postTag['tag_name']?></span></a>
            <?php endforeach;?>
        </div>
    </div>
    <hr>
<?php endforeach;?>