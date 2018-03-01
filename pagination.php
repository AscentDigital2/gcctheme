<?php 
    global $query;
 ?>
<section class="even-pad z-4 news-section">
      <div class="container  ">
        <div class="row">
          <div class="col-md-12">
            <?php 
              $big = 999999999; // need an unlikely integer
               echo paginate_links( array(
                  'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
                  'format' => '?paged=%#%',
                  'current' => max( 1, get_query_var('paged') ),
                  'total' => $query->max_num_pages
              ) );
         ?>
          </div> 
        </div>
        
      </div>
    </section>