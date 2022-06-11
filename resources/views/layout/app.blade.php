<!DOCTYPE html>
<html>
    <head>
        @include('layout.header')
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
                  <p style="text-align:center"><font color="white">&copy; 2021. syafiq-zahir.com. All Rights Reserved.</font></p>
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
