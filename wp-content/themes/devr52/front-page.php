<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package DEVR52
 */

get_header(); ?>

<!-- Services Section -->
<section id="about">

   <div class="container">
      <div class="row">
         <div class="col-lg-12 text-center">
            <h2 class="section-heading">About Me</h2>
            <hr class="star-primary">
         </div>
      </div>
      <div class="row">
         <p class="about-me text-justify">Hello there! my name is Edmon Villanueva, an aspiring programmer/web developer. I previously worked as a data entry clerk in a clinic specially for OFW's before I decided to pursue a career in programming.On my spare time, I work on some side projects, play online games, watch tv-series, movies etc. I graduated college with a degree in Computer Technology.
            <a href="about.html" style="font-weight:600;"> READ MORE...</a>
         </p>

         <div class="col-md-3">
            <dl class="p-details dl-horizontal">
               <dt>Birthdate:</dt>
               <dd>May 25, 1994 &#9802;</dd>
               <dt>Phone:</dt>
               <dd>+6392-6556-7349</dd>
               <dt>Email:</dt>
               <dd>ed.vnueva@gmail.com</dd>
               <dt>Website:</dt>
               <dd><a href="http://devr52.esy.es/" style="color:teal">http://devr52.esy.es/</a></dd>
            </dl>
            <a href="/pdf/resume.pdf" class="btn btn-primary" download><i class="fa fa-download"></i>&nbsp;&nbsp;Download Resume</a>
         </div>
         <div class="col-md-9 hobbies text-center">
            <h4 class="service-heading" style="margin-top:25px;">HOBBIES & INTERESTS</h4>
            <span class="fa-stack fa-4x">
               <i class="fa fa-circle fa-stack-2x text-dark"></i>
               <i class="fa fa-gamepad fa-stack-1x fa-inverse"><br></i>
               <h4 class="service-heading text-center" style="margin-top:120px;">MMORPG</h4>
            </span>


            <span class="fa-stack fa-4x">
               <i class="fa fa-circle fa-stack-2x text-dark"></i>
               <i class="fa fa-film fa-stack-1x fa-inverse"></i>
               <h4 class="service-heading text-center" style="margin-top:120px;">Movies</h4>
            </span>

            <span class="fa-stack fa-4x">
               <i class="fa fa-circle fa-stack-2x text-dark"></i>
               <i class="fa fa-television fa-stack-1x fa-inverse"></i>
               <h4 class="service-heading text-center" style="margin-top:120px;">TV Series</h4>
            </span>

            <span class="fa-stack fa-4x">
               <i class="fa fa-circle fa-stack-2x text-dark"></i>
               <i class="fa fa-cogs fa-stack-1x fa-inverse"></i>
               <h4 class="service-heading text-center" style="margin-top:120px;">Gaming PC</h4>
            </span>
         </div>
      </div>
   </div>
</section>

<!-- Skills Grid Section -->
<section id="skills" class="bg-dark-blue">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 text-center">
            <h2 class="section-heading white">Skills</h2>
            <hr class="star-light">
         </div>
      </div>
      <div class="row text-center">
         <div class="col-md-3">
            <div class="c100 p50 center medium">
               <span data-toggle="tooltip" title="Proficient - 50%">50%</span>
               <div class="slice">
                  <div class="bar"></div>
                  <div class="fill"></div>
               </div>
            </div>
            <h4 class="service-heading white">HTML5/CSS3/JS</h4>
            <ul class="knowledge">
               <li class="text-muted dark-bg-text">Responsive Design</li>
               <li class="text-muted dark-bg-text">Basic Animations</li>
               <li class="text-muted dark-bg-text">Basic AJAX/jQuery<label class="new">NEW</label></li>
               <li class="text-muted dark-bg-text">Bootstrap</li>
            </ul>
         </div>
         <div class="col-md-3">
            <div class="c100 p65 center medium">
               <span data-toggle="tooltip" title="Proficient - 65%">65%</span>
               <div class="slice">
                  <div class="bar"></div>
                  <div class="fill"></div>
               </div>
            </div>

            <h4 class="service-heading white">PHP</h4>
            <ul class="knowledge">
               <li class="text-muted dark-bg-text">Object Oriented Programming</li>
               <li class="text-muted dark-bg-text">PHP Form Handling</li>
               <li class="text-muted dark-bg-text">PHP Templating</li>
            </ul>
         </div>
         <div class="col-md-3">
            <div class="c100 p25 center medium">
               <span data-toggle="tooltip" title="Familiar - 25%">25%</span>
               <div class="slice">
                  <div class="bar"></div>
                  <div class="fill"></div>
               </div>
            </div>

            <h4 class="service-heading white">Java</h4>
            <ul class="knowledge">
               <li class="text-muted dark-bg-text">Inheritance</li>
               <li class="text-muted dark-bg-text">Encapsulation</li>
               <li class="text-muted dark-bg-text">Polymorphism</li>
               <li class="text-muted dark-bg-text">Swing GUI Builder</li>
            </ul>
         </div>
         <div class="col-md-3">
            <div class="c100 p50 center medium">
               <span data-toggle="tooltip" title="Familiar - 50%">50%</span>
               <div class="slice">
                  <div class="bar"></div>
                  <div class="fill"></div>
               </div>
            </div>

            <h4 class="service-heading white">Laravel Framework</h4>
            <ul class="knowledge">
               <li class="text-muted dark-bg-text">Database Migrations</li>
               <li class="text-muted dark-bg-text">Form Validations</li>
               <li class="text-muted dark-bg-text">Authentication</li>
               <li class="text-muted dark-bg-text">Eloquent ORM</li>
               <li class="text-muted dark-bg-text">Eager Loading</li>
            </ul>
         </div>
      </div>
      <p style="margin-top:70px;"><i style="font-size:12px;color:#d2d2d2;">*Skill level percentages are based on these categories: Beginner, Familiar, Proficient, Expert, Master. Hover to view category. </i></p>
   </div>
</section>



<!-- Portfolio Grid Section -->
<section id="portfolio">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 text-center">
            <h2 class="section-heading">Portfolio</h2>
            <hr class="star-primary">
         </div>
      </div>
      <div class="row">
         <div class="col-md-4 col-sm-6 portfolio-item">
            <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
               <div class="portfolio-hover">
                  <div class="portfolio-hover-content">
                     <i class="fa fa-plus fa-3x"></i>
                  </div>
               </div>
               <img src="<?= get_template_directory_uri(); ?>/img/portfolio/baa-1.jpg" class="img-responsive" alt="">
            </a>
            <div class="portfolio-caption">
               <h4>EZ Payroll - BAA</h4>
               <p class="text-muted">Java Swing Project</p>
            </div>
         </div>
         <div class="col-md-4 col-sm-6 portfolio-item">
            <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
               <div class="portfolio-hover">
                  <div class="portfolio-hover-content">
                     <i class="fa fa-plus fa-3x"></i>
                  </div>
               </div>
               <img src="<?= get_template_directory_uri(); ?>/img/portfolio/mf-1.jpg" class="img-responsive" alt="">
            </a>
            <div class="portfolio-caption">
               <h4>EZ Payroll - Modufit Inc.</h4>
               <p class="text-muted">Java Swing Project</p>
            </div>
         </div>

         <div class="col-md-4 col-sm-6 portfolio-item">
            <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
               <div class="portfolio-hover">
                  <div class="portfolio-hover-content">
                     <i class="fa fa-plus fa-3x"></i>
                  </div>
               </div>
               <img src="<?= get_template_directory_uri(); ?>/img/portfolio/mfw-1.jpg" class="img-responsive" alt="">
            </a>
            <div class="portfolio-caption">
               <h4>Static Webpage</h4>
               <p class="text-muted">My First Webpage</p>
            </div>
         </div>
         <div class="col-md-4 col-sm-6 portfolio-item">
            <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
               <div class="portfolio-hover">
                  <div class="portfolio-hover-content">
                     <i class="fa fa-plus fa-3x"></i>
                  </div>
               </div>
               <img src="<?= get_template_directory_uri(); ?>/img/portfolio/rw-1.jpg" class="img-responsive" alt="">
            </a>
            <div class="portfolio-caption">
               <h4>Basic PHP-SQL - CRUD</h4>
               <p class="text-muted">Restaurant Website</p>
            </div>
         </div>
         <div class="col-md-4 col-sm-6 portfolio-item">
            <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
               <div class="portfolio-hover">
                  <div class="portfolio-hover-content">
                     <i class="fa fa-plus fa-3x"></i>
                  </div>
               </div>
               <img src="<?= get_template_directory_uri(); ?>/img/portfolio/lf-1.jpg" class="img-responsive" alt="">
            </a>
            <div class="portfolio-caption">
               <h4>Lost Ark Forum</h4>
               <p class="text-muted">Forum Website</p>
            </div>
         </div>
         <div class="col-md-4 col-sm-6 portfolio-item">
            <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
               <div class="portfolio-hover">
                  <div class="portfolio-hover-content">
                     <i class="fa fa-plus fa-3x"></i>
                  </div>
               </div>
               <img src="<?= get_template_directory_uri(); ?>/img/portfolio/ezp-1.jpg" class="img-responsive" alt="">
            </a>
            <div class="portfolio-caption">
               <h4>EZ Payroll</h4>
               <p class="text-muted">Laravel Project</p>
            </div>
         </div>

      </div>
      <i style="font-size:12px;">*Order of creation starts from left to right. Most of the projects are done during my three-month coding bootcamp and only serves as a learning material.</i>
   </div>
</section>


<!-- Services Section -->
<section id="services" class="bg-dark-blue">
   <div class="container  services">
      <div class="row">
         <div class="col-lg-12 text-center">
            <h2 class="section-heading white">Services</h2>
            <hr class="star-light">
         </div>
      </div>
      <div class="col-sm-4">
         <h4>Web App Development</h4>
         <div class="services-icon"><i class="fa fa-code fa-4x" aria-hidden="true"></i></div>
         <p class="dark-bg-text">Build websites according to client's specifications, handles web design, web content development and website deployment.</p>
      </div>
      <div class="col-sm-4">
         <h4>Responsive Web Design</h4>
         <div class="services-icon service-img"><img src="<?= get_template_directory_uri(); ?>/img/services/responsive-devices.png" alt=""></div>
         <p class="dark-bg-text">Creates websites that provide an optimal viewing experience across a wide range of devices (from mobile phones to desktop computer monitors.)</q>
      </p>
   </div>
<div class="col-sm-4">
   <h4>Desktop App Development</h4>
   <div class="services-icon"><i class="fa fa-desktop fa-4x" aria-hidden="true"></i></i>
</div>
<p class="dark-bg-text">Develops beautiful and simple Windows desktop applications customized to your needs using java.</p>

</div>

</div>

<!--  SERVICES CONTENT HERE -->
</div>
</section>

<!-- Clients Aside -->
<aside class="clients">
   <div class="container">
      <div class="row">
         <div class="col-sm-4 col-sm-6">
            <a href="#" target="_blank">
               <img src="<?= get_template_directory_uri(); ?>/img/logos/modufit.jpg" class="img-responsive img-centered" alt="">
            </a>
         </div>
         <div class="col-sm-4 col-sm-6">
            <a href="http://www.barangayayalaalabang.gov.ph/" target="_blank">
               <img src="<?= get_template_directory_uri(); ?>/img/logos/baa.jpg" class="img-responsive img-centered" alt="">
            </a>
         </div>
         <div class="col-sm-4 col-sm-6">
            <a href="https://www.facebook.com/GODS-WAY-DIAGNOSTIC-CENTER-103807026341673/" target="_blank">
               <img src="<?= get_template_directory_uri(); ?>/img/logos/gwdc.jpg" class="img-responsive img-centered" alt="">
            </a>
         </div>

      </div>
   </div>
</aside>


<!-- Blog Section -->
<section id="blog" class="bg-light-gray">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 text-center">
            <h2 class="section-heading">Blog</h2>
            <hr class="star-primary sp-bg">
         </div>
      </div>

      <div class="col-sm-4">
         <a href="blog.html"><img class="img-responsive" src="<?= get_template_directory_uri(); ?>/img/blog/roadless.png" alt="latest-blog-post1"></a>
         <div style="text-align:center;"><a href='http://www.freepik.com/free-vector/road-to-the-city_796083.htm' class="img-src" target="_blank">Designed By Freepik</a></div>
         <a href="blog.html"><h3 class="text-center post-title">ROADLESS TRAVELED</h3></a>
         <p class="post-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates incidunt harum explicabo, ipsam eius ipsum repellat excepturi quo dolorum iusto. Quos provident nesciunt dolorem nisi adipisci. Hic nisi, perferendis ipsam.</p>
      </div>

      <div class="col-sm-4">
         <a href="blog.html"><img class="img-responsive" src="<?= get_template_directory_uri(); ?>/img/blog/tuitthq.png" alt="latest-blog-post1"></a>
         <div style="text-align:center;"><a href="https://tuittcodingbootcamp.wordpress.com/2016/06/23/first-blog-post/" target="_blank" class="img-src">Image source</a></div>
         <a href="blog.html"><h3 class="text-center post-title">Coding Bootcamp? YES PLEASE!!</h3></a>
         <p class="post-desc">Have you ever joined a coding bootcamp? Do you want to know how it is like to be in one? Here I will tell you my own experience to help you decide whether a coding boot camp is for you!</p>

         <p> PS: It's Fun!</p>
      </div>

      <div class="col-sm-4">
         <a href="blog.html"><img class="img-responsive" src="<?= get_template_directory_uri(); ?>/img/blog/speed.jpg" alt="latest-blog-post1"></a>
         <a href="blog.html"><h3 class="text-center post-title">SPEED UP YOUR WORKFLOW</h3></a>
         <p class="post-desc">Life should be easy and at the same time <i>Web developement</i> shouldn't be this hard &#9786;.</p>
         <p class="post-desc">We all come to the point when we found that one thing that will make our life much much more easier!. So here I listed some web development tools that will make you say <q>Where have you been all this time?</q></p>
      </div>

   </div>
   <div class="text-center" style="margin-top:60px"><a href="blog.html" class="see-all see-all-transition"><b>VIEW ALL POSTS</b></a></div>
</section>


<!-- Contact Section -->
<section id="contact">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 text-center">
            <h2 class="section-heading white">Contact Me</h2>
            <hr class="star-primary1">
         </div>
      </div>
      <div class="row">
         <div class="col-lg-12">
            <form name="sentMessage" id="contactForm" novalidate>
               <div class="row">
                  <div class="col-md-6">
                     <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                        <p class="help-block text-danger"></p>
                     </div>
                     <div class="form-group">
                        <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                        <p class="help-block text-danger"></p>
                     </div>
                     <div class="form-group">
                        <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                        <p class="help-block text-danger"></p>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                        <p class="help-block text-danger"></p>
                     </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="col-lg-12 text-center">
                     <div id="success"></div>
                     <button type="submit" class="btn btn-xl"><i class="fa fa-paper-plane" aria-hidden="true"></i> Send Message</button>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</section>


<?php
get_template_part( 'template-parts/content', 'modals' );
get_footer();
