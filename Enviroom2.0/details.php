<!DOCTYPE html>
<html lang="en">
<head>
  <?php
/*
 * Template Name:Details
 * Template Post Type: post, page, product
 */
 ?>
 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enviroom</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type=text/css href="<?php echo get_template_directory_uri(); ?>/details_style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css?family=Expletus+Sans&display=swap" rel="stylesheet">
  	<script src="https://kit.fontawesome.com/eeab8034c6.js" crossorigin="anonymous"></script>
   	
</head>
<div id="body" style="background-image: url(<?php the_post_thumbnail_url();?>)">
<body>
 
     <header>
        <nav class="navbar navbar-light">
            <a class="navbar-brand ml-5" href="/enviroom"> <img id="logo" src="<?php echo get_template_directory_uri(); ?>/Assets/Logo.png" alt=""></a>
            <div>
                <ul class="nav">
                     <li class="nav-item active">
                        <a class="hvr-underline-from-center nav-link" href="/enviroom">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="hvr-underline-from-center nav-link" href="/enviroom/offers">Offers</a>
                    </li>
                    <li class="nav-item active mr-5">
                        <a class="hvr-underline-from-center nav-link" href="/enviroom/about-us">About us</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main>

        <div id="slogan" class="text-center">
          <h1 class="d-inline-flex bg-dark px-3">
            <?php the_title();?>
          </h1>
      </div>
          <div class="arrow bounce">
            <a class="fa fa-arrow-down fa-2x" href="#first"></a>
          </div>
        <section id="first">
            <div class="container">
                <div class="row justify-content-center">
                    <div>
                         <h1>Check Availability</h1>
                    </div>
                </div>
                <div id="para" class="d-flex row justify-content-center mt-3 mb-5">
                    <div title="Available" class="availability example_c text-center color-white pt-2">
                         <p>1/12</p>
                    </div>
                    <div title="Available" class="availability example_c text-center pt-2">
                        <p>3/12</p>
                    </div>
                    <div title="Available" class="availability example_c text-center pt-2">
                        <p>4/12</p>
                    </div>
                    <div title="Available" class="availability example_c text-center pt-2">
                        <p>6/12</p>
                   </div>
                   <div title="Not Available" class="example_c example_b unavailable  text-center pt-2">
                       <p>8/12 - 15/12</p>
                   </div>
                   <div title="Available" class="availability example_c text-center pt-2">
                    <p>16/12</p>
                   </div>
                   <div title="Available" class="availability example_c text-center pt-2">
                    <p>17/12</p>
                   </div>
                </div>


                <div class="d-flex flex-column flex-md-row justify-content-center mt-4">
                    <div class="col-md-12 col-sm-12">
       
                        <p> 
                          <?php echo get_post_field('post_content', $post_id); ?>
                        </p>
                    </div>
                </div>
               <div class="row justify-content-center">
                  <a href="https://naturavive.com/web/skylodge-adventure-suites/" target="_blank">
                    <button class="example_d mb-4" type="button" class="btn btn-success mt-3" >Visit Website</button>
               	  </a> 
               </div>
            </div>
        </section>
     
        <section id="second">
            <div class="container">
                    <div class="row justify-content-center flex-column">
                        
                            <h1 class="text-center mb-4">Location</h1>
                      </div>
                                                       <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDn55W_oWwkzvznMsaZZkVyVekRHDXPKqw'></script><div class="container-fluid" style='overflow:hidden;max-height:576px;max-width:1024px; margin-bottom:70px;'><div id='gmap_canvas'
                                 style='height:576px;width:1000px'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><a style="opacity: 0.1;" href='https://mapswebsite.net/'>Enviroom</a>
                                  <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=96e6e26b0e7cf3fc8889e1f8de945030a4836697'></script><script type='text/javascript'>function
                                   init_map(){var myOptions = {zoom:9,center:new google.maps.LatLng(55.950989247546794,9.86868688834666),mapTypeId: google.maps.MapTypeId.HYBRID};map = new 
                                   google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(55.950989247546794,9.86868688834666)});infowindow =
                                    new google.maps.InfoWindow({content:'<div class="maps-text"><strong><?php the_title(); ?></strong><br><br><br> </div>'});
                                google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
            
          </div>
        </section>
        <section id="third">
            <div class="container">
                <div class="row justify-content-center">
                    <div>
                        <h1 class="text-center">Other Locations</h1>
                    </div>
                </div>
                <div class="d-flex flex-column flex-md-row justify-content-center mt-4">
                  
                    <div id="carousel" class="col-md-6 col-sm-12 col-lg-9">
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
                                      query_posts($args); 
                                    ?>
                                    <?php 
                                          $posts = get_posts($args);
                                          foreach ($posts as $post) : start_wp(); 
                                    ?>                                                     
                                      <?php static $count1 = 0; if ($count1 == "3") { break; } else { ?>

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
              
            </div>
        </section>
    </main>
    

<?php get_footer(); ?>
       <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      </body>
</div>
</html>