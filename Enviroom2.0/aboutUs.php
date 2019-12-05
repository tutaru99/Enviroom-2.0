<!DOCTYPE html>
<html lang="en">
<head>
     <link href="https://fonts.googleapis.com/css?family=Expletus+Sans&display=swap" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enviroom</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/aboutUsStyle.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/scss.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://kit.fontawesome.com/eeab8034c6.js" crossorigin="anonymous"></script>
    <?php /* Template Name: About Us */ ?>

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
                              <a class=" hvr-underline-from-center nav-link" href="<?php echo esc_url( $link ); ?>"><?php the_field("navigation_1st_item_name"); ?></a>
                          <?php endif; ?>
                    </li>
                    <li class="nav-item active">
                  <?php 
                          $link = get_field('navigation_2nd_item');
                          if( $link ): ?>
                              <a class="hvr-underline-from-center nav-link" href="<?php echo esc_url( $link ); ?>"><?php the_field("navigation_2nd_item_name"); ?></a>
                          <?php endif; ?>
                    </li>
                    <li class="nav-item active mr-5">
                     <?php 
                          $link = get_field('navigation_3rd_item');
                          if( $link ): ?>
                              <a class=" hvr-underline-from-center nav-link" href="<?php echo esc_url( $link ); ?>"><?php the_field("navigation_3rd_item_name"); ?></a>
                          <?php endif; ?>
                    </li>
                </ul>
                    </div>
                </nav>
            </header>
    <main>
         <div class="arrow bounce">
            <a class="fa fa-arrow-down fa-2x" href="#first"></a>
          </div>
        <section id="first">
            <div class="container">
                <div class="row justify-content-center">
                    <div>
                         <h1><?php the_field("para_title"); ?></h1>
                    </div>
                </div>
                <div class="d-flex flex-column flex-md-row justify-content-center mt-4">
                    <div class="col-md-6 col-sm-12">
                        <p><?php the_field("para_1"); ?> 
                            <br>
                           <?php the_field("para_2"); ?>
                            
                        </p>
                    </div> 
                    <div class="col-md-6 col-sm-12">
                        <p><?php the_field("para_3"); ?> <br></p>
                    </div>
                </div>
                <div class="row justify-content-center">
                   
                

            <!-- Button -->
                <div class="button_cont">
                	<a class="example_d mb-5 mt-2" href="/enviroom/offers" target="_blank" rel="nofollow noopener"><?php the_field("button_name"); ?> </a>
            	</div>
                
                <!-- Filter: https://css-tricks.com/gooey-effect/ -->
                <svg style="visibility: hidden; position: absolute;" width="0" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1">
                    <defs>
                        <filter id="goo"><feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />    
                            <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                            <feComposite in="SourceGraphic" in2="goo" operator="atop"/>
                        </filter>
                    </defs>
                </svg>

            </div>
            </div>
        </section>
        <section id="second">
            <div class="container">
                    <div class="row justify-content-center">
                        <div >
                            <h1><?php the_field("contacts"); ?> </h1>
                        </div>
                    </div>
                        <div class="d-flex flex-column flex-md-row justify-content-center mt-4">
                            <div class="col-md-3 d-flex row justify-content-center">
                                    <div class="rounded-circle round">
                                        <i class="material-icons d-flex justify-content-center icon">
                                            email
                                        </i>
                                    </div>
                                    <p class="text-center h4"><?php the_field("name_email"); ?> <br> <span class="gray-text h5"><?php the_field("actual_email"); ?></span></p>
                            </div>
                            <div class="col-md-3 d-flex row justify-content-center">
                                <div class="rounded-circle round">
                                    <i class="material-icons d-flex justify-content-center icon">
                                            phone
                                    </i>
                                </div>
                                <p class="text-center h4"><?php the_field("name_phone"); ?> <br> <span class="gray-text h5"><?php the_field("actual_phone"); ?></span></p>
                            </div>
                            
                            <div class="col-md-3 d-flex row justify-content-center">
                                    <div class="rounded-circle round">
                                        <i class="fab fa-twitter d-flex justify-content-center icon">

                                        </i>
                                    </div>
                                    <p class="text-center h4"><?php the_field("name_twitter"); ?> <br> <span class="gray-text h5"><?php the_field("actual_twitter"); ?></span></p>
                            </div>
                            <div class="col-md-3 d-flex row justify-content-center">
                                    <div class="rounded-circle round">
                                        <i class="fab fa-linkedin-in d-flex justify-content-center icon">
                                               
                                        </i>
                                    </div>
                                    <p class="text-center h4"><?php the_field("name_linkedin"); ?> <br> <span class="gray-text h5"><?php the_field("actual_linkedin"); ?></span></p>
                            
                        </div>
                    </div>
            </div>
        </section>
    </main>
      <?php get_footer(); ?>
    

    </body>