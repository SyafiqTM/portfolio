@extends('layout.app')

@push('header-js')
<script>
    var scroll = new SmoothScroll('a[href*="#"]', {
          // Selectors
          ignore: '[data-scroll-ignore]', // Selector for links to ignore (must be a valid CSS selector)
          header: null, // Selector for fixed headers (must be a valid CSS selector)

          // Speed & Easing
          speed: 300, // Integer. How fast to complete the scroll in milliseconds
          offset: 0, // Integer or Function returning an integer. How far to offset the scrolling anchor location in pixels
          easing: 'easeInOutCubic', // Easing pattern to use
          customEasing: function (time) {}, // Function. Custom easing pattern

          // Callback API
          before: function () {}, // Callback to run before scroll
          after: function () {} // Callback to run after scroll
      });

    </script>
@endpush

@section('content')
<section class="btnMenu">
    <div id="sidebarCollapse">
    <span>
        <p>Menu</p>
    </span>
    </div>
</section>
<!-- header -->
<section class="bg-home rtl-personal-hero bg-light d-flex align-items-center" style="background:url({{asset('image/personal/bg01.png')}}) center center" id="home">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-9">
                <div class="title-heading mt-4">
                    <h1 class="display-3 fw-bold mb-3">Here I'm <br> <span class="text-primary typewrite" data-period="2000" data-type='[ "Calvin Carlo", "UI/UX Designer", "Web Developer" ]'> <span class="wrap"></span> </span> </h1>
                    <p class="para-desc text-muted">Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap v5 html page.</p>
                    <div class="mt-4 pt-2">
                        <a href="#portfolio" class="btn btn-primary mt-2 me-2"><i class="uil uil-camera"></i> View Portfolio</a>
                        <a href="#contact" class="btn btn-outline-primary mt-2"><i class="uil uil-cloud-download"></i> Hire Me</a>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->

<section class="header" id="home">
    <div class="text-vertical-center">
    <div class="profile-circle animated fadeInUp" style="background-color: rgba(145,169,216,.2); width:200px; height:200px;">
        <img src="{{ asset('image/profile_1.jpg')}}" class="profile-circle" style="height:200px; width:200px;">
    </div>
    <h3 style="margin-top:50px;" class="profile-name">
        <span>Hello! My Name is Mohammad Syafiq</span>
    </h3>
    <h4 style="margin-top:20px;">
        <span class="element"></span>
    </h4>
    <br>
    <!-- <a href="#section2" class="btn btn-dark btn-lg">Get Started</a> -->
    <div class="col-lg-4 col-md-offset-2 center"></div>
    </div>
    <div class="downArrow bounce center">
    <a data-scroll href="#about">
        <img width="40" height="40" alt="" src="{{ asset('image/white-arrow.png')}}" />
    </a>
    </div>
</section>

<!-- Portfolio -->
<section class="aboutfolio" id="about">
  <div class="container about-container animated">
    <div class="row">
      <div class="col-lg-12 text-center">
        <!-- <h2>Profile</h2>-->

        <h2 class="section-subheading" style="">Profile</h2>
        <hr style="text-align:center; width:10%; border-width: 1px; border-color:black; margin-bottom: 50px;">
      </div>
    </div>

    <div class="row justify-content-md-center">
      <div class="col-lg-8 card">
        <!-- <br>
          <div class="videoWrapper">
              <iframe class="center"width="460" height="249" src="https://www.youtube.com/embed/MFfVTunc__Q" frameborder="5" allowfullscreen></iframe>
          </div> -->
          <h3 class="section-subheading">
            <p class="card-block" style="text-align: justify;
            font-size: 1.1em;
            font-weight: 300;
            color:#4C4C4C;
            padding:5%;
            margin-top:0;
            margin-bottom:0;
            margin-left:auto;
            margin-right:auto;
            font-size: 16px;
            line-height: 150%;">
            Syafiq is a self motivated person and passionate in IT world especially in writing line of codes. He is an undergraduate student of Bachelor of Information Technology (Hons.) from UiTM Shah Alam with 4 year experience of Web/Backend and Mobile Application developer. He is the oldest son from 6 siblings that lives in Puchong, Malaysia.
            <br><br>During his Degree, he becamed as a participative President of Information Technology Club handling club events (Indoor &amp; Outdoor) activities and student exchange program from Kazakhstan in collaboration between universities. He also join few competitions held in UiTM such as Competitive Programming &amp; Multimedia (CPROM), FSKM e-Sport Championship and Invention, Innovation &amp; Design Exposition (IIDEX) 2017 Competition.
            <br><br>Now, he is working as Full-Time Full Stack Developer in Digital Venus Sdn Bhd providing top notch quality software developments to company clients. Syafiq also had experience in Telekom Malaysia Berhad as Service Engineering Server, Storage  &amp; Cloud Computing staff which exposed him to prior knowledge of Technical Deployment and Hardware Configuration.
            <br><br>While he believes that outside competition of job employment is constantly challenging, he turns it into an opportunity by working as a freelance in Software Development. His passion towards programming did not stop him from learning something new and exploring opportunities by interacting and collaborating with other developers around the world.
            <br><br>
            </p>
        </h3>
      </div>
    </div>
  </div>
</section>


  <section id="timeline" class="timelinefolio animated">
   <div class="section-timeline">
       <div class="container timeline-container animated">
         <div class="row">
           <div class="col-lg-12 text-center">
             <!-- <h2>Profile</h2>
             <hr style="text-align:center; width:10%; border-width: 1px; border-color:black;"> -->
             <h3 class="section-subheading">Experience</h3>
           </div>
         </div>

           <ul class="timeline wp-animated-group animated">
               <li>
                   <div class="timeline-badge wp-animated animated" data-animation="fadeInDownBig" data-animation-delay="0.3s" data-animation-offset="60%" style="animation-delay: 0.3s; opacity: 1;">2021</div>
                   <div class="timeline-panel panel1 wp-animated animated" data-animation="fadeInLeft" data-animation-delay="1.3s" style="animation-delay: 1.3s; opacity: 1;">
                       <div class="timeline-heading">
                           <h5 class="timeline-title">Full Stack Developer <span class="green-underline">(Digital Venus Sdn Bhd)</span></h5>
                           <p><small class="text-muted"><i class="fa fa-calendar" aria-hidden="true" style="margin-right:10px"></i>June 2021 - Current</small></p>
                       </div>
                       <div class="timeline-body">
                           <p>
                               Entitled as Full Stack Developer in present company. Mainly using MEAN stack to develop website and handle APIs. Current works include IBM Framework (Loopback) implementation
                               and ionic for mobile apps. Successful payment gateways integration and projects delivered to our clients.
                           </p>
                       </div>
                   </div>
               </li>
               <li class="timeline-inverted">
                <div class="timeline-badge wp-animated animated" data-animation="fadeInDownBig" data-animation-delay="0.6s" style="animation-delay: 0.6s; opacity: 1;">2018</div>
                <div class="timeline-panel panel2 wp-animated animated" data-animation="fadeInRight" data-animation-delay="1.5s" style="animation-delay: 1.5s; opacity: 1;">
                  <div class="timeline-heading">
                      <h5 class="timeline-title">Web/Backend Developer </h5> <span class="green-underline">(Poplook Sdn Bhd)</span></h5>
                      <p><small class="text-muted"><i class="fa fa-calendar" aria-hidden="true" style="margin-right:10px"></i>August 2018 - May 2021</small></p>
                  </div>
                  <div class="timeline-body">
                      <p>
                          Working as Web/Backend Developer in Poplook Sdn Bhd using cutting edge technology such as combination of Codeigniter & Prestashop to build ecommerce website and handle large sets of costumers' data, product, carts
                          and orders tracking. The system also has integration with POS system which using Oracle Netsuite to maintain backorder and availablity for stock products.
                      </p>
                      {{-- https://system.na2.netsuite.com --}}
                </div>
            </li>
               <li>
                   <div class="timeline-badge wp-animated animated" data-animation="fadeInDownBig" data-animation-delay="0.3s" data-animation-offset="60%" style="animation-delay: 0.3s; opacity: 1;">2017</div>
                   <div class="timeline-panel panel1 wp-animated animated" data-animation="fadeInLeft" data-animation-delay="1.3s" style="animation-delay: 1.3s; opacity: 1;">
                       <div class="timeline-heading">
                           <h5 class="timeline-title">Network Engineer Trainee <span class="green-underline">(Telekom Malaysia Berhad)</span></h5>
                           <p><small class="text-muted"><i class="fa fa-calendar" aria-hidden="true" style="margin-right:10px"></i>August 2017 - 2018</small></p>
                       </div>
                       <div class="timeline-body">
                           <p>Working as one of Service Engineering Cloud Computing & Server Storage staff. Require to work on Data Centre site such as Brickfield and Cyberjaya Data Centre. Experience in delivering hardware installation and configuration. Develop a knowledge based web application for team members to access important documents.
                           </p>
                       </div>
                   </div>
               </li>
               <li class="timeline-inverted">
                   <div class="timeline-badge wp-animated animated" data-animation="fadeInDownBig" data-animation-delay="0.6s" style="animation-delay: 0.6s; opacity: 1;">2017</div>
                   <div class="timeline-panel panel2 wp-animated animated" data-animation="fadeInRight" data-animation-delay="1.5s" style="animation-delay: 1.5s; opacity: 1;">
                     <div class="timeline-heading">
                         <h5 class="timeline-title">Web/Mobile App Developer (Freelance) </h5>
                         <p><small class="text-muted"><i class="fa fa-calendar" aria-hidden="true" style="margin-right:10px"></i>August 2017 - Current</small></p>
                     </div>
                     <div class="timeline-body">
                         <p>Involved in developing several number of web & android apps. Experience in connecting apps which require systematic APIs sending over geolocation tracking (Google Maps &amp; Firebase), emotion recognition (Beyond Verbal), SMS subscription & notification (Nexmo) & library catalogue (Open Library).
                         </p>
                     </div>
                   </div>
               </li>
               <li>
                   <div class="timeline-badge wp-animated animated" data-animation="fadeInDownBig" data-animation-delay="1s" style="animation-delay: 1s; opacity: 1;">2017</div>
                   <div class="timeline-panel panel3 wp-animated animated" data-animation="fadeInLeft" data-animation-delay="1.7s" style="animation-delay: 1.7s; opacity: 1;">
                     <div class="timeline-heading">
                         <h5 class="timeline-title">Web Application Developer (Barracuda Campus Sdn Bhd)</h5>
                         <p><small class="text-muted"><i class="fa fa-calendar" aria-hidden="true" style="margin-right:10px"></i>February-July 2017</small></p>
                     </div>
                     <div class="timeline-body">
                         <p>Doing internship as Web Application Developer at Barracuda Campus Sdn Bhd. Involved in developing in-house software development which require to work on latest web infrastructure such as Bootstrap 3 & combination of CSS, Angular JS and AJAX. Applying the latest PHP framework (Laravel) inside Centralized Tracking System, Meet clients and deploy according to their requirements.
                         </p>
                     </div>
                   </div>
               </li>
           </ul>
       </div>
   </div>
</section>

<section id="fh5co-work" class="section-projects" data-section="work">
 <div class="container project-container animated">
   <div class="row">
     <div class="col-lg-12 text-center">
       <!-- <h2>Profile</h2>
       <hr style="text-align:center; width:10%; border-width: 1px; border-color:black;"> -->
       <h3 class="section-subheading">Projects</h3>
     </div>
   </div>
   <div class="col-lg-12 text-center">
     <ul id="filters" class="clearfix">
       <button type="button" class="filter-btn btn-lg" data-rel="all">All</button>
       <button type="button" class="filter-btn btn-lg" data-rel="live">Live</button>
       <button type="button" class="filter-btn btn-lg" data-rel="app">Websites</button>
       <button type="button" class="filter-btn btn-lg" data-rel="android">Mobile Apps</button>
     </ul>
  </div>
    <div class="row row-bottom-padded-sm" class="">
       <div class="row" id="portfoliolist">

         <div class="col-md-4 col-sm-6 col-xxs-12  scale-anm live all" >
           <a href="{{ asset('work/big_pic_10.jpg')}}" class="fh5co-project-item image-popup to-animate" data-title="Lembaga Sumber Air Terengganu" data-source="https://staging.laut.gov.my/">
             <img src="{{ asset('work/work_10.jpg')}}" alt="Image" class="img-responsive" style="height:330px">
             <h2>Lembaga Sumber Air Terengganu</h2>
             <span>Live Website</span>
           </a>
         </div>
         <div class="col-md-4 col-sm-6 col-xxs-12  scale-anm live all" >
           <a href="{{ asset('work/big_pic_7.png')}}" class="fh5co-project-item image-popup to-animate" data-title="Poplook Website" data-source="https://poplook.com">
             <img src="{{ asset('work/work_7.png')}}" alt="Image" class="img-responsive" style="height:330px">
             <h2>Poplook</h2>
             <span>Live Website</span>
           </a>
         </div>
         <div class="col-md-4 col-sm-6 col-xxs-12  scale-anm live all" >
           <a href="{{ asset('work/big_pic_8.png')}}" class="fh5co-project-item image-popup to-animate" data-title="Aplusboss Website" data-source="http://aplusboss.com">
             <img src="{{ asset('work/work_8.png')}}" alt="Image" class="img-responsive" style="height:330px">
             <h2>A PLUS BOSS</h2>
             <span>Live Website</span>
           </a>
         </div>
         <div class="col-md-4 col-sm-6 col-xxs-12  scale-anm live all" >
           <a href="{{ asset('work/big_pic_9.jpg')}}" class="fh5co-project-item image-popup to-animate" data-title="HSManagement Services" data-source="http://hsmgtservices.com">
             <img src="{{ asset('work/work_9.jpg')}}" alt="Image" class="img-responsive" style="height:330px">
             <h2>HSManagement Services</h2>
             <span>Live Website</span>
           </a>
         </div>
         <div class="col-md-4 col-sm-6 col-xxs-12  scale-anm app all" >
           <a href="{{ asset('work/big_pic_1.jpg')}}" class="fh5co-project-item image-popup to-animate" data-title="Hotspot Dengue Area" data-source="http://sys-expert.com/dengue">
             <img src="{{ asset('work/work_1.jpg')}}" alt="Image" class="img-responsive" style="height:330px">
             <h2>Hotspot Dengue Area</h2>
             <span>Website</span>

           </a>
         </div>
         <div class="col-md-4 col-sm-6 col-xxs-12  scale-anm app all">
           <a href="{{ asset('work/big_pic_2.jpg')}}" class="fh5co-project-item image-popup to-animate" data-title="FSKM Event Notification" data-source="http://sys-expert.com/fskm">
             <img src="{{ asset('work/work_2.jpg')}}" alt="Image" class="img-responsive" style="height:330px">

             <h2>FSKM Event Notification</h2>
             <span>Website</span>

           </a>
         </div>

         <!-- <div class="clearfix visible-sm-block"></div> -->

         <div class="col-md-4 col-sm-6 col-xxs-12  scale-anm android all" >
           <a href="{{ asset('work/big_pic_3.jpg')}}" class="fh5co-project-item image-popup to-animate" data-title="E-Home Mobile App" data-source="http://www.google.com">
             <img src="{{ asset('work/work_3.jpg')}}" alt="Image" class="img-responsive" style="height:330px">

             <h2>E-Home Mobile App</h2>
             <span>Mobile App</span>

           </a>
         </div>
         <div class="col-md-4 col-sm-6 col-xxs-12  scale-anm android all">
           <a href="{{ asset('work/big_pic_4.jpg')}}" class="fh5co-project-item image-popup to-animate" data-title="Student Collaborative Planner" data-source="http://www.google.com">
             <img src="{{ asset('work/work_4.jpg')}}" alt="Image" class="img-responsive" style="height:330px">

             <h2>Student Collaborative Planner</h2>
             <span>Mobile App</span>

           </a>
         </div>

         <!-- <div class="clearfix visible-sm-block"></div> -->

         <div class="col-md-4 col-sm-6 col-xxs-12  scale-anm android all">
           <a href="{{ asset('work/big_pic_5.jpg')}}" class="fh5co-project-item image-popup to-animate" data-title="UiTM Bus Tracking App" data-source="http://www.google.com">
             <img src="{{ asset('work/work_5.jpg')}}" alt="Image" class="img-responsive">

             <h2>UiTM Bus Tracking App</h2>
             <span>Mobile App</span>

           </a>
         </div>
         <div class="col-md-4 col-sm-6 col-xxs-12  scale-anm android all">
           <a href="{{ asset('work/big_pic_6.jpg')}}" class="fh5co-project-item image-popup to-animate" data-title="Plant Nurturing Growing Guide" data-source="http://www.google.com">
             <img src="{{ asset('work/work_6.jpg')}}" alt="Image" class="img-responsive">

             <h2>Plant Nurturing Growing Guide</h2>
             <span>Mobile App</span>

           </a>
         </div>

     </div>
   </div>
 </div>
</section>

<style type="text/css">

</style>

<section id="fh5co-counters" data-stellar-background-ratio="0.5">
      <div class="fh5co-overlay"></div>
      <div class="container counter-container animated">
    <div class="row">
              <div class="col-md-12 section-heading text-center animated fadeInUp">
                  <h2>Fun Facts</h2>
              </div>
          </div>
          <div class="row">
              <div class="col-md-3 col-sm-6 col-xs-12">
                  <div class="fh5co-counter animated fadeInUp ">
                      <i class="fh5co-counter-icon fa fa-briefcase center"></i>
                      <span class="fh5co-counter-number js-counter" data-from="0" data-to="10" data-speed="5000" data-refresh-interval="50">10</span>
                      <span class="fh5co-counter-label">Finished projects</span>
                  </div>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12">
                  <div class="fh5co-counter animated fadeInUp">
                      <i class="fh5co-counter-icon fa fa-code center"></i>
                      <span class="fh5co-counter-number js-counter" data-from="0" data-to="5" data-speed="5000" data-refresh-interval="50">5</span>
                      <span class="fh5co-counter-label">Major Frameworks</span>
                  </div>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12">
                  <div class="fh5co-counter animated fadeInUp">
                      <i class="fh5co-counter-icon fa fa-coffee center"></i>
                      <span class="fh5co-counter-number js-counter" data-from="0" data-to="4" data-speed="5000" data-refresh-interval="50">4</span>
                      <span class="fh5co-counter-label">Years of Experience</span>
                  </div>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12">
                  <div class="fh5co-counter animated fadeInUp">
                      <i class="fh5co-counter-icon fa fa-users center"></i>
                      <span class="fh5co-counter-number js-counter" data-from="0" data-to="363" data-speed="5000" data-refresh-interval="50">363</span>
                      <span class="fh5co-counter-label">Linkedin Connections</span>
                  </div>
              </div>
          </div>
      </div>
  </section>

<section id="testimonials">
    <div class="section-testimonials">
        <div class="container testimonial-container animated">
          <div class="row">
            <div class="col-lg-12 text-center">
              <!-- <h2>Profile</h2>
              <hr style="text-align:center; width:10%; border-width: 1px; border-color:black;"> -->
              <h3 class="section-subheading">Recommendations</h3>
              <h6>Read what other people say about Syafiq</h6>
            </div>
          </div>

            <div class="row justify-content-md-center">
                <div class="col-sm-6">
                    <div class="row testimonial">
                        <div class="col-sm-4 offset-left">
                            <img src="{{ asset('image/azri.jpg')}}" alt="testimonial" class="testimonial-img">
                        </div>
                        <div class="col-sm-8">
                            <blockquote>
                            <i class="fa fa-quote-right" style="margin-right:10px;"></i> Muhammad Syafiq is one of talented person I have met during my studies that is very passionate with Science and Technology. He will relentlessly find the perfect solution for a particular situation and can speak out what in his mind diligently using POC (Proof of Concept), as well as work under pressure. Currently he is good at website development using Laravel that integrate with Ionic Framework and experts in HTML, CSS and Javascript.
                            <hr class="testimonials-hr">
                            <cite>&#8212; Muhammad Azri, Application Developer at Fiction Labs Sdn Bhd</cite>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row testimonial">
                        <div class="col-sm-4 offset-left">
                            <img src="{{ asset('image/izzati.jpg')}}" alt="testimonial" class="testimonial-img">
                        </div>
                        <div class="col-sm-8">
                          <blockquote>
                            <i class="fa fa-quote-right" style="margin-right:10px;"></i>Syafiq has high passion on computer & technology. He is always keen to know and develop new skills that makes him different from others. He always knows how to solve even the slightest problem that occur and give his very best of it. I am sure he knows what he does when delivering a good quality of software product.
                            <hr class="testimonials-hr">
                            <cite>&#8212; Nurul Izzati, Full Time Student UiTM Shah Alam</cite>
                            </blockquote>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Contact -->
<section class="talkfolio">
  <div class="container about-container animated">
    <div class="row">
      <div class="col-lg-12 text-center">
        <!-- <h2>Profile</h2>
        <hr style="text-align:center; width:10%; border-width: 1px; border-color:black;"> -->
        <h3 class="section-subheading">Let's Have a Talk</h3>
      </div>
    </div>
  </div>
</section>

<!-- Contact -->
<section class="contactfolio" id="contact">
  <div class="container about-container animated">
    <div class="row justify-content-md-center">
      <div class="col-md-4">
        <div class="row">
          <div class="col-lg-12">
            <!-- <h2>Profile</h2>
            <hr style="text-align:center; width:10%; border-width: 1px; border-color:black;"> -->
            <h3 class="section-subheading">Contact Details</h3>
          </div>
        </div>
        <div class="row" style="margin-top:30px;">
          <div class="col-sm-1"><i class="fa fa-envelope"></i></div>
          <div class="col-md-11" style="padding-left:10px;">
            <span style="
                text-align: justify;
                font-size: 16px;
                line-height: 150%;">
                syafiq.zahir@yahoo.com
            </span>
          </div>
        </div>
        <div class="row" style="margin-top:10px;">
          <div class="col-sm-1"><i class="fa fa-phone"></i></div>
          <div class="col-md-11" style="padding-left:10px;">
            <span style="
                text-align: justify;
                font-size: 16px;
                line-height: 150%;">
                +6 011-14328225
            </span>
          </div>
        </div>
        <div class="row" style="margin-top:10px;">
          <div class="col-sm-1"><i class="fa fa-linkedin-square"></i></div>
          <div class="col-md-11" style="padding-left:10px;" class="linkedin-contact">
            <a href="https://www.linkedin.com/in/syafiq-zahir/" target="_blank">
              <span class="linkedin-contact" style="
                  text-align: justify;
                  font-size: 16px;
                  line-height: 150%;">
                  Syafiq's LinkedIn
              </span>
           </a>
          </div>
        </div>

      </div>
         <div class="col-md-6">
             <div class="card card-inverse" style="padding:5%; background-color:#f2f2f2;">
                 <form class="needs-validation" novalidate action="{{route('form.submit')}}" method="POST">
                 @csrf
                 <div class="row">
                     <div class="col-md-12">
                        <div class="form-group @error('name') is-invalid @enderror">
                         <label for="name">Name</label>
                         <div class="input-group mb-3">
                            <span class="input-group-text"><span class="fa fa-user"></span></span>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="name" maxlength="200" aria-label="name">
                            @error('name')
                            <div class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </div>
                          @enderror
                          </div>

                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><span class="fa fa-envelope"></span></span>
                               <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="email" maxlength="100" aria-label="email">
                               @error('email')
                               <div class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                               </div>
                              @enderror
                             </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Subject</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><span class="fa fa-pencil"></span></span>
                               <input type="text" class="form-control @error('subject') is-invalid @enderror" name="subject" value="{{ old('subject') }}" placeholder="subject" maxlength="100" aria-label="subject">
                               @error('subject')
                               <div class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                               </div>
                             @enderror
                            </div>

                        </div>
                         <div class="form-group">
                             <label for="name">Message</label>
                             <textarea name="message" id="message" class="form-control @error('message') is-invalid @enderror" value="{{ old('message') }}" rows="7" placeholder="Message"></textarea>
                             @error('message')
                             <div class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                             </div>
                           @enderror
                         </div>

                         <button type="submit" class="btn btn-primary pull-right mt-3">Send Message</button>
                     </div>
                 </div>
                 </form>
             </div>
         </div>
    </div>

  </div>
</section>
@endsection


@push('js')
@if ($errors->count() > 0)
<script>
    iziToast.show({
        message: '{{ $errors->first() }}',
        color: '#dc3545',
        messageColor: '#ffffff',
        titleColor: '#ffffff',
        position: 'topCenter',
        timeout: 7500,
        progressBarColor: '#ffffff',
    });

</script>
@elseif (session()->has('error'))
<script>
    iziToast.show({
        message: '{{ session()->get("error") }}',
        color: '#dc3545',
        messageColor: '#ffffff',
        titleColor: '#ffffff',
        position: 'topCenter',
        timeout: 7500,
    });

</script>
@elseif (session()->has('warning'))
<script>
    iziToast.show({
        message: '{{ session()->get("warning") }}',
        color: '#ffc107',
        messageColor: '#ffffff',
        titleColor: '#ffffff',
        position: 'topCenter',
        timeout: 7500,
    });

</script>
@elseif (session()->has('success'))
<script>
    iziToast.show({
        message: '{{ session()->get("success") }}',
        color: '#28a745',
        messageColor: '#ffffff',
        titleColor: '#ffffff',
        position: 'topCenter',
        timeout: 7500,
    });

</script>
@elseif (session()->has('status'))
<script>
    iziToast.show({
        message: '{{ session()->get("status") }}',
        color: '#28a745',
        messageColor: '#ffffff',
        titleColor: '#ffffff',
        position: 'topCenter',
        timeout: 7500,
    });

</script>
@endif
@endpush
