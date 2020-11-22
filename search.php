<!-- template to show the search result -->
<?php 
	get_header();
?>
    
		<article class="content px-3 py-5 p-md-5">
            
        <?php 
        get_search_form();
			if(have_posts()) {
				while(have_posts()) {
                    the_post(); //iterate through have posts function
                    
                    get_template_part('template-parts/content', 'archive');
				}
			}

		?>	

    
    </div>
<?php
	get_footer();