<div class="container">
    <header class="content-header">
        <div class="meta mb-3">
            <span class="date"><?php the_date('l, F, j, y');?></span> <!-- shows the post created date -->
            <?php 
                the_tags('<span class="tag"><i class="fa fa-tag"></i>', '</span><span class="tag"><i class="fa fa-tag"></i>', '</span>');
            ?>
            <?php 
                the_category('<span class="tag"><i class="fa fa-tag"></i>', '</span><span class="tag"><i class="fa fa-tag"></i>', '</span>');
            ?>
            &nbsp;
            <span class="comment"><a href="#comments"><i class='fa fa-comment'></i>&nbsp;<?php absint( comments_number() ); ?></a></span></div>
    </header>


<?php
    the_content();
    comments_template();