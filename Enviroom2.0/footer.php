    <footer>
        <div class="container-fluid" style="background-color: #656363;">
           <div class="row justify-content-center">
               <div class="col-sm-4 offset-sm-1">
                   <p class="pt-5 pb-3">Choose luxury and comfort by giving one of our unique hotels a try.<br>We offer a wide variety of nature hotels.</p>
                 <span class="gray-text">&copy; Enviroom 2019</span>
               </div>
               <div class="col-sm-2 offset-sm-">
                       <p class="pt-5 gray-text">Information</p>
                      <a style="color:white;" href="/enviroom/about-us"><p class="mb-0">About us</p></a>
                      
               </div>
               <div class="col-sm-2">
                       <p class="pt-5 gray-text">Website</p>
                      <a style="color:white;" href=""> <p class="mb-0">FAQ</p> </a>
                      <a style="color:white;" href="/enviroom/offers"> <p class="mb-0">Offers</p></a>
                  
               </div>
               <div class="col-sm-2">

                       <p class="pt-5 gray-text">Newsletter</p>
                       <div>
                           <form method="post" action="">
                             
                             <label for="email" class="mb-1">Email address:</label>
                             <input type="email" value="<?php echo esc_attr( get_option('email') ); ?>" class="form-control-sm" name="email" id="email" placeholder="name@example.com">
                             <button name="send" class="example_d mr-5 mt-2 mb-4"	style="font-size:0.8rem;padding:2px 14px!important;" onclick="myFunction()" type="submit" value="Send Message">Subscribe</button>
                            </form>
                       </div>
               </div>
          
           </div>
        </div>
       </footer>

<?php wp_footer(  ); ?>