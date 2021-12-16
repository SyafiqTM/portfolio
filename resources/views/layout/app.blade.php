<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta property="og:title" content="Syafiq's Portfolio">
        <meta property="og:image" content="{{ asset('image/office_man.jpg')}}">
        <meta property="og:description" content="This website is for reference for recruiter to know more about syafiq's background and work.">
        <title>Syafiq's Portfolio</title>
        <!-- <link rel="stylesheet" href="vendor/css/bootstrap.min.css"> -->
        {{-- <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"> --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- Our Core CSS -->
        <link rel="stylesheet" href="{{ asset('css/style2.css')}}">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="{{ asset('css/custom.css?version=1.02')}}">
        <!-- Our animate CSS -->
        <link rel="stylesheet" href="{{ asset('css/animate.css')}}">
        {{-- <link rel="stylesheet" href="{{ asset('css/vertical-timeline.css')}}"> --}}
        <!--  Font Awesome CSS -->
        <link rel="stylesheet" href="{{asset('css/font-awesome/css/font-awesome.css')}}">
        <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
        <!-- https://github.com/cferdinandi/smooth-scroll -->
        <script src="{{ asset('js/smooth-scroll.js')}}"></script>
        <!-- Magnific Popup -->
        <link rel="stylesheet" href="{{ asset('css/magnific-popup.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css" integrity="sha256-f6fW47QDm1m01HIep+UjpCpNwLVkBYKd+fhpb4VQ+gE=" crossorigin="anonymous" />

        @stack('header-js')
    </head>
    <body>
        <div class="wrapper" class="toggled">
            @include('layout.sidebar')
            <!-- Page Content Holder -->
            <div id="content">
                @yield('content')
                <!-- Footer -->
                <footer class="footer">
                  <br>
                  <ul class="list-inline" target="_blank" style="text-align:center">
                    <li class="list-inline-item">
                      <a href="http://syafiqinternship.blogspot.my/" target="_blank" title="twitter">
                        <i class="fa fa-blogger fa-fw fa-2x"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="https://github.com/SyafiqTM" target="_blank" title="google-plus">
                        <i class="fa fa-github-square fa-fw fa-2x"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="https://www.linkedin.com/in/syafiq-zahir/" target="_blank" title="website">
                        <i class="fa fa-linkedin fa-fw fa-2x"></i>
                      </a>
                    </li>
                  </ul>
                  <p style="text-align:center"><font color="white">© sys-expert.com. All Rights Reserved.</font></p>
                </footer>

            </div>
            <!-- Scroll to top -->
             <div id="stop" class="scrollTop hover-scroll">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up fea icon-sm icons align-middle"><line x1="12" y1="19" x2="12" y2="5"></line><polyline points="5 12 12 5 19 12"></polyline></svg>
             </div>
        </div>
        @include('layout.footer')
        @stack('js')
    </body>
</html>
