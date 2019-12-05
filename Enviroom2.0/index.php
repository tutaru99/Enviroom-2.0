<?php get_header(); ?>

<body>
    <header>
        <nav class="navbar navbar-light">
            <a class="navbar-brand ml-5" href="#"> <img id="logo" src="<?php echo get_template_directory_uri(); ?>/Assets/Logo.png" alt="Enviroom Hotels in Nature"></a>
            <div>
                <ul class="nav">
                    <li class="nav-item active">
                      <?php 
                          $link = get_field('navigation_1st_item');
                          if( $link ): ?>
                              <a class="button hvr-underline-from-center nav-link" href="<?php echo esc_url( $link ); ?>"><?php the_field("navigation_1st_item_name"); ?></a>
                          <?php endif; ?>
                    </li>
                    <li class="nav-item active">
                         <?php 
                          $link = get_field('navigation_2nd_item');
                          if( $link ): ?>
                              <a class="button hvr-underline-from-center nav-link" href="<?php echo esc_url( $link ); ?>"><?php the_field("navigation_2nd_item_name"); ?></a>
                          <?php endif; ?>
                    </li>
                    <li class="hvr-underline-from-center nav-item active mr-5">
                       <?php 
                          $link = get_field('navigation_3rd_item');
                          if( $link ): ?>
                              <a class="button hvr-underline-from-center nav-link" href="<?php echo esc_url( $link ); ?>"><?php the_field("navigation_3rd_item_name"); ?></a>
                          <?php endif; ?>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    
    <main>
<div id="mainContainer" class="container d-flex flex-column flex-md-row align-items-center">
    <div id="sloganText" class=" col-md-6 col-sm-12 d-inline-flex flex-column justify-content-center">
            
        <h1 class="customfont display-4" style="font-weight:600!important!;"><?php the_field("name_of_the_company"); ?></h1>
        <p class="customfont"> <?php the_field("company_slogan"); ?> </p>
          
    </div>
    <div id="carousel" class="carousel-fade" data-interval="2500" class="offset-md-1 col-md-6 col-sm-12 col-lg-6">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner">
                      <?php 
  						   add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3 );
                           function remove_thumbnail_dimensions( $html, $post_id, $post_image_id ) {
                           $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
                           return $html;
                          };
                        $args = array(
                            'orderby' => 'rand',
                            'order' => 'ASC'
                        );   
                        query_posts($args); ?>
                      <?php 
  						$posts = get_posts($args);
                        foreach ($posts as $post) : start_wp(); 
                      ?>                                                     
                      <?php 
                        static $count1 = 0;	
                      	if ($count1 == "3") { break; } else { ?>
                      
                           <div class="carousel-item">
                             <a href="<?php the_permalink(); ?>">
                             <img class="d-block w-100" src=" src="<?php the_post_thumbnail();?>
                                <div class="carousel-caption d-none d-md-block text-left">
                                      <h4><?php the_title(); ?></h4>
                                      <p> <?php the_excerpt() ?></p>
                                </div>  
                             </a>	                                                         
                           </div>
								
                      <?php $count1++; } ?>
                      <?php endforeach; ?>	
                           <div class="carousel-item active">
                             <a href="<?php the_permalink(); ?>">
                             <img class="d-block w-100" src=" src="<?php the_post_thumbnail();?>
                                <div class="carousel-caption d-none d-md-block text-left">
                                      <h4><?php the_title(); ?></h4>
                                      <p> <?php the_excerpt() ?></p>
                                </div>
                             </a>
                           </div>     
                     </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
               </div>
    </div>                 
</div>
    </main>
  
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <?php wp_footer(  ); ?>
</body>
</html>