<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enviroom</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/offers.css">
  	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css?family=Expletus+Sans&display=swap" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
<?php /* Template Name: Offers*/ ?>

</head>
<body>
        <header>
                <nav class="navbar navbar-light">
                    <a class="navbar-brand ml-5" href="/enviroom"> <img id="logo" src="<?php echo get_template_directory_uri(); ?>/Assets/Logo.png" alt=""></a>
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
                    <li class="nav-item active mr-5">
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
            
                    <div id="header" class="col-sm-4 offset-sm-2">
                        <h1 class="display-4"><?php the_field("our_offers"); ?></h1>
                        <p><?php the_field("description_of_offers"); ?></p>
                    </div>
                   <div id="offers" class="col-sm-4 offset-sm-6" style="overflow:auto; color: white;">
                   <!-- FIRST LOOP -->


                      <?php query_posts('showposts=15'); ?>
                      <?php $posts = get_posts('numberposts=15&offset=0'); foreach ($posts as $post) : start_wp(); ?>
                      <?php static $count1 = 0; if ($count1 == "15") { break; } else { ?>

									 <a href="<?php the_permalink(); ?>">
                                      <div id="bounce-in" class="image">
                                              <img class="img-responsive" style="max-width:100%;height:auto;filter:brightness(50%);" src="<?php the_post_thumbnail();?> <img>
                                          <div class="image-text d-flex flex-column ">
                                              <div class="mt-5 text">
                                              <h2 class="pl-5"><?php the_title(); ?></h2>
                                                <div class="pl-5" style="max-width:400px;" >
                                                  <?php the_excerpt() ?>

                                                 </div>
                                              </div>
                                          </div>
                                      </div>  
									</a>
                      <?php $count1++; } ?>
                      <?php endforeach; ?>

            </div>
        




    <!-- <div class="containter">n 
        <div class="d-flex flex-column col-sm-5 offset-sm-1" style="margin-top: 250px;"> 
        <h1>Our offers</h1>
        <p>content</p>
    </div>
   <div class="d-flex flex-column col-sm-5 offset-sm-1">
            <h1>asdasd</h1>
    </div>
       
    </div> -->
    
        
   
    </main>
    

    <footer>

    </footer>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>