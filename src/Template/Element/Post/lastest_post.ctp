<article class="herald-lay-b post type-post status-publish format-standard has-post-thumbnail hentry">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="herald-post-thumbnail herald-format-icon-middle">
                <a href="<?php echo $BASE_URL;?>/articles/<?php echo $id;?>" title="<?php echo $name;?>">
                    <img width="300" height="200" src="<?php echo $image;?>" class="attachment-herald-lay-b1 size-herald-lay-b1 wp-post-image" alt="" sizes="(max-width: 300px) 100vw, 300px" />									
                </a>
            </div>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="entry-header">
                <span class="meta-category"><a href="<?php echo $BASE_URL;?>/cates/<?php echo $cate_id; ?>" class="herald-cat-<?php echo $cate_id; ?>"><?php echo $cate_name; ?></a></span>
                <h2 class="entry-title h3">
                    <a href="<?php echo $BASE_URL;?>/articles/<?php echo $id; ?>"><?php echo $name; ?></a>
                </h2>
                <div class="entry-meta">
                    <div class="meta-item herald-date">
                        <span class="updated"><?php echo date('Y-m-d', $created); ?></span>
                    </div>
                </div>
            </div>
            <div class="entry-content">
                <p><?php echo $description; ?></p>
            </div>
        </div>
    </div>
</article>