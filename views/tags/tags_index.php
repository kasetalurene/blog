<ul class="list-group">
    <?php foreach($tags as $tag): ?>
        <li class="list-group-item">
            <a href="<?php echo BASE_URL;?>tags/view/<?php echo $tag['tag_id'];?>"><?php echo $tag['tag_name'];?></a>
            <span class="badge badge-primary"><?php echo $tag['count'];?></span>
        </li>
    <?php endforeach; ?>
</ul>
