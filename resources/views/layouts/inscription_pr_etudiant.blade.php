<!DOCTYPE html>
<html lang="fr">
    <head>
        @yield('headerinsetud')
    </head>
    <body class="signup-page ">
      <nav class="navbar    fixed-top  navbar-expand-lg bg-dark" color-on-scroll="100" id="sectionsNav">
          <div class="container">
             <div class="navbar-translate">
                   @include('Layouts.global_page.menu')
             </div>
         </div>
    </nav>
       @yield('bodyinsetud')

    </body>
      @include('Layouts.global_page.footer')

</html>
