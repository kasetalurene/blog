<ul class="list-group">
    <?php foreach($posts as $post):?>
        <li class="list-group-item">
            <a href="<?php echo BASE_URL;?>posts/view/<?php echo $post['post_id'];?>"><?php echo $post['post_subject']?></a>
        </li>
    <?php endforeach;?>
</ul><?php
