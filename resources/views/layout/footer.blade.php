 <!-- jQuery CDN -->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <!-- Type Animation JS CDN -->
 <script src="{{ asset('js/typed.js')}}"></script>
 <!-- Bootstrap Js CDN -->
 <script src="{{asset('js/bootstrap.min.js')}}"></script>
 <!-- jQuery Custom Scroller CDN -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
 <!-- jQuery Waypoint CDN -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
 <!-- Counter -->
 <script src="{{ asset('js/jquery.countTo.js')}}"></script>
 <!-- Magnific Popup -->
 <script src="{{ asset('js/jquery.magnific-popup.js')}}"></script>
 <script src="{{ asset('js/magnific-popup-options.js?version=1.01')}}"></script>
 <!-- Mix It Up -->
 <script type="text/javascript" src="{{ asset('js/jquery.mixitup.min.js')}}"></script>
 <!-- Custom JS -->
 <script src="{{ asset('js/details.js')}}"></script>
 <script src="{{asset('js/feather.min.js')}}"></script>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js" integrity="sha256-321PxS+POvbvWcIVoRZeRmf32q7fTFQJ21bXwTNWREY=" crossorigin="anonymous"></script>
 <script type="text/javascript">

     $(document).ready(function () {
         $('.btn-modal').on('change', function (e) {
             $('#staticBackdrop').show();
             console.log('click');
         });

         @error('name')
         $('input[name="name"]').focus();
         @enderror
         @error('subject')
         $('input[name="subject"]').focus();
         @enderror
         @error('email')
         $('input[name="email"]').focus();
         @enderror
         @error('message')
         $('input[name="message"]').focus();
         @enderror

       // https://codepen.io/creotip/pen/dfjeF
     /* ---------------------------------------------------
         Filter Portfolio
     ----------------------------------------------------- */
       $(function() {
             var selectedClass = "";
             $(".filter-btn").click(function(){
               selectedClass = $(this).attr("data-rel");
           $("#portfoliolist").fadeTo(100, 0.1);
               $("#portfoliolist div").not("."+selectedClass).fadeOut().removeClass('scale-anm');

           setTimeout(function() {
             $(".fh5co-text").css("display","block");
             $("."+selectedClass).fadeIn().addClass('scale-anm');
             $("#portfoliolist").fadeTo(300, 1);

           }, 300);

         });

     });

       /* ---------------------------------------------------
           Highlight when scroll
       ----------------------------------------------------- */

       var oneH = $('#home').height();
       var twoH = $('#about').height();
       var threeH = $('#timeline').height();
       var fourH = $('#fh5co-work').height();
       var fiveH = $('#testimonials').height();
       var sixH = $('#contact').height();

       var funfacts = $('#fh5co-counters').height();
       var talkfolio = $('.talkfolio').height();
       var sumOf5section= oneH + twoH + threeH + fourH + funfacts ;
       var sumOf6Section = sumOf5section + talkfolio + sixH;

       window.onscroll = function () {

       var scroll = $(document).scrollTop();
     //   console.log (funfacts + '<'+ scroll);
       // if you scroll over first element
       // http://api.jquery.com/eq-selector/ (li:eq('');
       if (scroll >= 0 && scroll < oneH) {
           $(".list-unstyled li:eq(0)").addClass("active");
           $(".list-unstyled li:eq(1)").removeClass("active");
           $(".list-unstyled li:eq(2)").removeClass("active");
           $(".list-unstyled li:eq(3)").removeClass("active");
           $(".list-unstyled li:eq(4)").removeClass("active");
           $(".list-unstyled li:eq(5)").removeClass("active");
       }
        // if you scroll over first element and second element

       // if you scroll over first, second and third element
       else if (scroll >= oneH && scroll < oneH + twoH ) {
           $('.list-unstyled li:eq(1)').addClass('active');
           $(".list-unstyled li:eq(0)").removeClass("active");
           $(".list-unstyled li:eq(2)").removeClass("active");
           $(".list-unstyled li:eq(3)").removeClass("active");
           $(".list-unstyled li:eq(4)").removeClass("active");
           $(".list-unstyled li:eq(5)").removeClass("active");
       }
       else if (scroll >= oneH + twoH && scroll < oneH + twoH + threeH ) {
           $('.list-unstyled li:eq(2)').addClass('active');
           $(".list-unstyled li:eq(0)").removeClass("active");
           $(".list-unstyled li:eq(1)").removeClass("active");
           $(".list-unstyled li:eq(3)").removeClass("active");
           $(".list-unstyled li:eq(4)").removeClass("active");
           $(".list-unstyled li:eq(5)").removeClass("active");
       }
       else if (scroll >= oneH + twoH + threeH ) {
           $('.list-unstyled li:eq(3)').addClass('active');
           $(".list-unstyled li:eq(0)").removeClass("active");
           $(".list-unstyled li:eq(1)").removeClass("active");
           $(".list-unstyled li:eq(2)").removeClass("active");
           $(".list-unstyled li:eq(4)").removeClass("active");
           $(".list-unstyled li:eq(5)").removeClass("active");
       }

       if (scroll > sumOf5section) {
           $('.list-unstyled li:eq(4)').addClass('active');
           $(".list-unstyled li:eq(0)").removeClass("active");
           $(".list-unstyled li:eq(1)").removeClass("active");
           $(".list-unstyled li:eq(2)").removeClass("active");
           $(".list-unstyled li:eq(3)").removeClass("active");
           $(".list-unstyled li:eq(5)").removeClass("active");
       }

       if (scroll > sumOf6Section) {
           $('.list-unstyled li:eq(5)').addClass('active');
           $(".list-unstyled li:eq(0)").removeClass("active");
           $(".list-unstyled li:eq(1)").removeClass("active");
           $(".list-unstyled li:eq(2)").removeClass("active");
           $(".list-unstyled li:eq(3)").removeClass("active");
           $(".list-unstyled li:eq(4)").removeClass("active");
       }


       };

       /* ---------------------------------------------------
           Highlight if click
       ----------------------------------------------------- */

       // $(".list-unstyled li").on("click", function() {
       //   $(".list-unstyled li").removeClass("active");
       //   $(this).addClass("active");
       // });



       /* ---------------------------------------------------
           Tweaking Animation and opacity
       ----------------------------------------------------- */

       $('.downArrow').hide();
       $('.profile-name').hide();
       setTimeout(function () {
           $('.profile-name').show().addClass('animated fadeInUp');}, 1000
       );
       setTimeout(function () {
           $('.downArrow').show();}, 3000
       );

       //start here
       $('.about-container').css('opacity', 0);
       $('.project-container').css('opacity', 0);
       $('.counter-container').css('opacity', 0);
       $('.timeline').css('opacity', 0);
       $('.testimonial-container').css('opacity', 0);

            setTimeout(showPage, 500);


       /* ---------------------------------------------------
           Scroll to top
       ----------------------------------------------------- */

        var scrollTop = $(".scrollTop");

        $(window).scroll(function() {
          // declare variable
          var topPos = $(this).scrollTop();

          // if user scrolls down - show scroll to top button
          if (topPos > 100) {
            $(scrollTop).css("opacity", "1");

          } else {
            $(scrollTop).css("opacity", "0");
          }

        });

        //Click event to scroll to top
        $(scrollTop).click(function() {
          $('html, body').animate({
            scrollTop: 0
          }, 400);
          return false;

        });

       /* ---------------------------------------------------
           Sidebar
       ----------------------------------------------------- */
         $("#sidebar").mCustomScrollbar({
             theme: "minimal"
         });

         $('#sidebarCollapse').on('click', function () {
             $('#sidebar, #content').toggleClass('active');
             $('.collapse.in').toggleClass('in');
             $('a[aria-expanded=true]').attr('aria-expanded', 'false');
         });

         /* ---------------------------------------------------
             Counter
         ----------------------------------------------------- */



         /* ---------------------------------------------------
             TypeWriter
         ----------------------------------------------------- */

         var typed = new Typed(".element", {
           /**
            * @property {array} strings strings to be typed
            * @property {string} stringsElement ID of element containing string children
            */
           strings: ['I am a Software Developer!', 'I am passionate in Software Development!', 'I develop Web and Mobile Applications!'],
           stringsElement: null,

           /**
            * @property {number} typeSpeed type speed in milliseconds
            */
           typeSpeed: 100,

           /**
            * @property {number} startDelay time before typing starts in milliseconds
            */
           startDelay: 2000,

           /**
            * @property {number} backSpeed backspacing speed in milliseconds
            */
           backSpeed: 30,

           /**
            * @property {boolean} smartBackspace only backspace what doesn't match the previous string
            */
           smartBackspace: true,

           /**
            * @property {boolean} shuffle shuffle the strings
            */
           shuffle: false,

           /**
            * @property {number} backDelay time before backspacing in milliseconds
            */
           backDelay: 700,

           /**
            * @property {boolean} fadeOut Fade out instead of backspace
            * @property {string} fadeOutClass css class for fade animation
            * @property {boolean} fadeOutDelay Fade out delay in milliseconds
            */
           fadeOut: false,
           fadeOutClass: 'typed-fade-out',
           fadeOutDelay: 500,

           /**
            * @property {boolean} loop loop strings
            * @property {number} loopCount amount of loops
            */
           loop: true,
           loopCount: Infinity,

           /**
            * @property {boolean} showCursor show cursor
            * @property {string} cursorChar character for cursor
            * @property {boolean} autoInsertCss insert CSS for cursor and fadeOut into HTML <head>
            */
           showCursor: false,
           cursorChar: '|',
           autoInsertCss: true,

           /**
            * @property {string} attr attribute for typing
            * Ex: input placeholder, value, or just HTML text
            */
           attr: null,

           /**
            * @property {boolean} bindInputFocusEvents bind to focus and blur if el is text input
            */
           bindInputFocusEvents: false,

           /**
            * @property {string} contentType 'html' or 'null' for plaintext
            */
           contentType: 'html',

           /**
            * All typing is complete
            * @param {Typed} self
            */
           onComplete: (self) => {},

           /**
            * Before each string is typed
            * @param {number} arrayPos
            * @param {Typed} self
            */
           preStringTyped: (arrayPos, self) => {},

           /**
            * After each string is typed
            * @param {number} arrayPos
            * @param {Typed} self
            */
           onStringTyped: (arrayPos, self) => {},

           /**
            * During looping, after last string is typed
            * @param {Typed} self
            */
           onLastStringBackspaced: (self) => {},

           /**
            * Typing has been stopped
            * @param {number} arrayPos
            * @param {Typed} self
            */
           onTypingPaused: (arrayPos, self) => {},

           /**
            * Typing has been started after being stopped
            * @param {number} arrayPos
            * @param {Typed} self
            */
           onTypingResumed: (arrayPos, self) => {},

           /**
            * After reset
            * @param {Typed} self
            */
           onReset: (self) => {},

           /**
            * After stop
            * @param {number} arrayPos
            * @param {Typed} self
            */
           onStop: (arrayPos, self) => {},

           /**
            * After start
            * @param {number} arrayPos
            * @param {Typed} self
            */
           onStart: (arrayPos, self) => {},

           /**
            * After destroy
            * @param {Typed} self
            */
           onDestroy: (self) => {}
         });
     });
 </script>
